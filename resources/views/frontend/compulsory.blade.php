<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body class="bluelight">

    <section id="compulsorypage"  class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">พ.ร.บ. รถยนต์</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>พ.ร.บ. รถยนต์</h1>
                        <p>ไม่ว่าคุณจะขับรถประเภทไหน <br>
                            ในประเทศไทย จำเป็นที่จะต้องมี พ.ร.บ. รถยนต์
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_compulsory.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="titleTopic">
                            <h2>ประกันรถยนต์ภาคบังคับ หรือ พ.ร.บ. รถยนต์คืออะไร ?</h2>
                        </div>
                        <div class="contentbody">รัฐออกกฎหมายกำหนดให้รถทุกคัน
                            ต้องทำประกันภัยภาคบังคับที่กำหนดไว้ในพระราชบัญญัติคุ้มครองผู้ประสบภัยจากรถ พ.ศ. 2535
                            ซึ่งมีผลบังคับใช้เมื่อวันที่ 5 เมษายน พ.ศ. 2536 โดยกำหนดให้รถยนต์รวมถึงรถจักรยานยนต์ทุกคัน
                            ทุกชนิดที่ จดทะเบียนกับกรมการขนส่งทางบก และรถที่ขับเคลื่อนด้วยกำลังเครื่องยนต์ ไฟฟ้า
                            หรือพลังงานอื่น ต้องทำประกันภัย ภาคบังคับตาม พ.ร.บ. นี้
                            เพื่อให้ความคุ้มครองขั้นพื้นฐานแก่ผู้ที่ได้รับผลกระทบจากอุบัติเหตุทางถนน
                            ไม่ว่าจะเป็นผู้ขับขี่ ผู้โดยสาร หรือคนเดินเท้า
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                    <div class="compulslider owl-carousel owl-theme">
@if(!empty($prb))
    @php
    $f = 1;
    @endphp
    @foreach($prb as $r)
                            <div class="item">
                                <div class="groupcompul">
                                    <h6> {{ $r->prb_name }} <br>
                                        {{ $r->prb_name2 }}</h6>
                                    <div class="bgwhitecompul">
                                        <span> {{ $r->prb_name3 }} </span> <br>
                                        <img src="{{ asset('public/uploads/prb/'.$r->prb_image) }}" alt=""> <br>
                                        <div class="price">{{ number_format($r->prb_price, 0, '.', ',') }} บาท</div>
                                        <br>
                                        <a href="#" class="btn btn-secondary" data-width="948" data-height="700"
                                            data-fancybox data-src="#car{{ $f }}" href="javascript:;"><i
                                                class="fi fi-rr-document"></i> ดูรายละเอียด</a>
                                        <div style="display: none;" id="car{{ $f }}">
                                            <div class="titleTopic text-center">
                                                {{ $r->prb_name }} <br>
                                                <span class="orangetext">{{ $r->prb_price }}</span>
                                            </div>
                                            <div class="tablegroup mt-3">
                                                <table class="table indetailgroup table-bordered">
                                                    <thead>
                                                        <tr class="bgbluetable">
                                                            <th colspan="2">ประกันภาคบังคับ (พ.ร.บ.)</th>
                                                        </tr>
                                                        <tr>
                                                            <th>ความคุ้มครอง</th>
                                                            <th>จำนวนเงินจำกัดความรับผิด</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="2">{{ $r->prb_text1 }}</th>
                                                        </tr>
                                                        <tr>
                                                            <td>- {{ $r->prb_text2 }}</td>
                                                            <td>{{ $r->prb_medical_expenses_price1 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- {{ $r->prb_text1_1 }}
                                                            </td>
                                                            <td>{{ $r->prb_died_price1 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">
                                                                {{ $r->prb_text1_2 }}
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>- {{ $r->prb_text2_1 }}</td>
                                                            <td>{{ $r->prb_medical_expenses_price2 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- {{ $r->prb_text2_2 }}</td>
                                                            <td>{{ $r->prb_died_price2 }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- {{ $r->prb_text2_3 }}</td>
                                                            <td>{{ $r->prb_dismemberment_price }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- {{ $r->prb_text2_4 }}</td>
                                                            <td>{{ $r->prb_daily_compensation_price }}</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="sumalt">*จำนวนเงินคุ้มครองสูงสุด ไม่เกิน 500,000
                                                                บาทต่อคน <br>
                                                                *วงเงินความรับผิด สำหรับรถยนต์นั่ง ไม่เกิน 7
                                                                ที่นั่งรวมผู้ขับขี่ ไม่เกิน
                                                                5,000,000 บาท/ครั้ง <br>
                                                                *วงเงินความรับผิด สำหรับรถยนต์นั่ง เกิน 7
                                                                ที่นั่งรวมผู้ขับขี่ ไม่เกิน
                                                                10,000,000 บาท/ครั้ง</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        @php
        $f++;
        @endphp
    @endforeach
@endif
                            {{-- <div class="col-lg-4">
                                <div class="groupcompul">
                                    <h6> รถกระบะตอนครึ่ง <br> <span>(ไม่เกิน 3 ตัน)</span></h6>

                                    <div class="bgwhitecompul">
                                        <span> ใช้สำหรับรถยนต์ส่วนบุคคลเท่านั้น </span> <br>
                                        <img src="{{ asset('public/frontend/images/compul_icon2.png') }}" alt=""> <br>
                                        <div class="price">967 บาท</div>
                                        <br>
                                        <a href="#" class="btn btn-secondary" data-width="948" data-height="700"
                                            data-fancybox data-src="#cartwo" href="javascript:;"><i
                                                class="fi fi-rr-document"></i> ดูรายละเอียด</a>
                                        <div style="display: none;" id="cartwo">
                                            <div class="titleTopic text-center">
                                                รถกระบะ 2 ประตู (ไม่เกิน 3 ตัน) <br>
                                                <span class="orangetext">967 บาท</span>
                                            </div>
                                            <div class="tablegroup mt-3">
                                                <table class="table indetailgroup table-bordered">
                                                    <thead>
                                                        <tr class="bgbluetable">
                                                            <th colspan="2">ประกันภาคบังคับ (พ.ร.บ.)</th>
                                                        </tr>
                                                        <tr>
                                                            <th>ความคุ้มครอง</th>
                                                            <th>จำนวนเงินจำกัดความรับผิด</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="2">คุ้มครองค่าเสียหายเบื้องต้น
                                                                ได้รับเลยไม่รอการพิสูจน์ถูก/ผิด</th>
                                                        </tr>
                                                        <tr>
                                                            <td>- ค่ารักษาพยาบาล (ตามจริง)</td>
                                                            <td>30,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- การเสียชีวิต สูญเสียอวัยวะ หรือทุพพลภาพถาวรสิ้นเชิง
                                                            </td>
                                                            <td>35,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">
                                                                คุ้มครองค่าเสียหายที่เกินกว่าค่าเสียหายเบื้องต้น
                                                                จะได้รับหลังจากพิสูจน์แล้วว่าไม่ได้เป็นผู้ที่ต้องรับผิดตามกฎหมาย
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>- ค่ารักษาพยาบาล (ตามจริง)</td>
                                                            <td>80,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- การเสียชีวิต หรือทุพพลภาพถาวรสิ้นเชิง</td>
                                                            <td>500,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- การสูญเสียอวัยวะ</td>
                                                            <td>200,000 - 500,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- ค่าชดเชยรายวัน
                                                                (จ่ายตามจำนวนวันที่เข้ารักษาตัวในฐานะผู้ป่วยใน)</td>
                                                            <td>200 บาท/วัน (สูงสุดไม่เกิน 20วัน)</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="sumalt">*จำนวนเงินคุ้มครองสูงสุด ไม่เกิน 500,000
                                                                บาทต่อคน <br>
                                                                *วงเงินความรับผิด สำหรับรถยนต์นั่ง ไม่เกิน 7
                                                                ที่นั่งรวมผู้ขับขี่ ไม่เกิน
                                                                5,000,000 บาท/ครั้ง <br>
                                                                *วงเงินความรับผิด สำหรับรถยนต์นั่ง เกิน 7
                                                                ที่นั่งรวมผู้ขับขี่ ไม่เกิน
                                                                10,000,000 บาท/ครั้ง</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="groupcompul">
                                    <h6> รถตู้ <br>
                                        <span>(จดทะเบียนมากกว่า 7 ที่นั่ง)</span></h6>
                                    <div class="bgwhitecompul">
                                        <span> ใช้สำหรับรถยนต์ส่วนบุคคลเท่านั้น </span> <br>
                                        <img src="{{ asset('public/frontend/images/compul_icon3.png') }}" alt=""> <br>
                                        <div class="price">1,182 บาท</div>
                                        <br>
                                        <a href="#" class="btn btn-secondary" data-width="948" data-height="700"
                                            data-fancybox data-src="#carthree" href="javascript:;"><i
                                                class="fi fi-rr-document"></i> ดูรายละเอียด</a>
                                        <div style="display: none;" id="carthree">
                                            <div class="titleTopic text-center">
                                                รถตู้ (จดทะเบียนมากกว่า 7 ที่นั่ง) <br>
                                                <span class="orangetext">1,182 บาท</span>
                                            </div>
                                            <div class="tablegroup mt-3">
                                                <table class="table indetailgroup table-bordered">
                                                    <thead>
                                                        <tr class="bgbluetable">
                                                            <th colspan="2">ประกันภาคบังคับ (พ.ร.บ.)</th>
                                                        </tr>
                                                        <tr>
                                                            <th>ความคุ้มครอง</th>
                                                            <th>จำนวนเงินจำกัดความรับผิด</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th colspan="2">คุ้มครองค่าเสียหายเบื้องต้น
                                                                ได้รับเลยไม่รอการพิสูจน์ถูก/ผิด</th>
                                                        </tr>
                                                        <tr>
                                                            <td>- ค่ารักษาพยาบาล (ตามจริง)</td>
                                                            <td>30,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- การเสียชีวิต สูญเสียอวัยวะ หรือทุพพลภาพถาวรสิ้นเชิง
                                                            </td>
                                                            <td>35,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="2">
                                                                คุ้มครองค่าเสียหายที่เกินกว่าค่าเสียหายเบื้องต้น
                                                                จะได้รับหลังจากพิสูจน์แล้วว่าไม่ได้เป็นผู้ที่ต้องรับผิดตามกฎหมาย
                                                            </th>
                                                        </tr>
                                                        <tr>
                                                            <td>- ค่ารักษาพยาบาล (ตามจริง)</td>
                                                            <td>80,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- การเสียชีวิต หรือทุพพลภาพถาวรสิ้นเชิง</td>
                                                            <td>500,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- การสูญเสียอวัยวะ</td>
                                                            <td>200,000 - 500,000 บาท</td>
                                                        </tr>
                                                        <tr>
                                                            <td>- ค่าชดเชยรายวัน
                                                                (จ่ายตามจำนวนวันที่เข้ารักษาตัวในฐานะผู้ป่วยใน)</td>
                                                            <td>200 บาท/วัน (สูงสุดไม่เกิน 20วัน)</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="sumalt">*จำนวนเงินคุ้มครองสูงสุด ไม่เกิน 500,000
                                                                บาทต่อคน <br>
                                                                *วงเงินความรับผิด สำหรับรถยนต์นั่ง ไม่เกิน 7
                                                                ที่นั่งรวมผู้ขับขี่ ไม่เกิน
                                                                5,000,000 บาท/ครั้ง <br>
                                                                *วงเงินความรับผิด สำหรับรถยนต์นั่ง เกิน 7
                                                                ที่นั่งรวมผู้ขับขี่ ไม่เกิน
                                                                10,000,000 บาท/ครั้ง</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>


            <div class="whycompul">
                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="pb-3">ทำไมถึงต้องทำ พ.ร.บ. รถยนต์</h3>
                            <p>เพื่อคุ้มครองตัวเรา คู่กรณี ผู้โดยสาร และบุคคลภายนอก <br>
                                ที่ประสบอุบัติเหตุจากการใช้รถซึ่งให้ความคุ้มครองในรูปแบบของเงินชดเชย <br>
                                และค่าดูแลรักษาพยาบาลตามที่กำหนด ไม่ว่าจะซื้อพรบ หรือ ต้องการต่อพรบรถยนต์ <br>
                                ที่วิริยะประกันภัย เรามีแผนความคุ้มครองให้เลือกอย่างเหมาะสมตามด้านล่างนี้
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col titleTopic text-center">
                        <h4>ตารางความคุ้มครอง</h4>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="tablegroup  table-responsive-xl">
                            <table class="table indetailgroup table-bordered">
                                <thead>
                                    <tr>
                                        <th>ความคุ้มครอง</th>
                                        <th>จำนวนเงินจำกัดความรับผิด</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th colspan="2">คุ้มครองค่าเสียหายเบื้องต้น ได้รับเลยไม่รอการพิสูจน์ถูก/ผิด</th>
                                    </tr>
                                    <tr>
                                        <td>- ค่ารักษาพยาบาล (ตามจริง)</td>
                                        <td>30,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <td>- การเสียชีวิต สูญเสียอวัยวะ หรือทุพพลภาพถาวรสิ้นเชิง</td>
                                        <td>35,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">คุ้มครองค่าเสียหายที่เกินกว่าค่าเสียหายเบื้องต้น
                                            จะได้รับหลังจากพิสูจน์แล้วว่าไม่ได้เป็นผู้ที่ต้องรับผิดตามกฎหมาย</th>
                                    </tr>
                                    <tr>
                                        <td>- ค่ารักษาพยาบาล (ตามจริง)</td>
                                        <td>80,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <td>- การเสียชีวิต หรือทุพพลภาพถาวรสิ้นเชิง</td>
                                        <td>500,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <td>- การสูญเสียอวัยวะ</td>
                                        <td>200,000 - 500,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <td>- ค่าชดเชยรายวัน (จ่ายตามจำนวนวันที่เข้ารักษาตัวในฐานะผู้ป่วยใน)</td>
                                        <td>200 บาท/วัน (สูงสุดไม่เกิน 20วัน)</td>
                                    </tr>
                                    <tr>
                                        <td class="sumalt">*จำนวนเงินคุ้มครองสูงสุด ไม่เกิน 500,000 บาทต่อคน <br>
                                            *วงเงินความรับผิด สำหรับรถยนต์นั่ง ไม่เกิน 7 ที่นั่งรวมผู้ขับขี่ ไม่เกิน
                                            5,000,000 บาท/ครั้ง <br>
                                            *วงเงินความรับผิด สำหรับรถยนต์นั่ง เกิน 7 ที่นั่งรวมผู้ขับขี่ ไม่เกิน
                                            10,000,000 บาท/ครั้ง</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="readmorecondi mt-5 text-center"><a href="@if(!empty($prb_pdf) and $prb_pdf->prb_pdf_file != ''){{ asset('public/uploads/prb/'.$prb_pdf->prb_pdf_file) }}@else{{ '#' }}@endif" @if(!empty($prb_pdf) and $prb_pdf->prb_pdf_file != ''){{ 'target="_blank"' }}@endif>
                            <button class="btn btn-condition">เงื่อนไขและความคุ้มครอง
                                กรมธรรม์ประกันภัยคุ้มครองผู้ประสบภัยจากรถ <span class="orangetext">คลิก</span> </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faqgroup mt-5">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">พ.ร.บ. รถยนต์</span> </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="accordion" id="accordionExample">
@if(!empty($faq))
    @php
    $i = 1;   
    @endphp
    @foreach($faq as $r)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading{{ $i }}">
                                        <button class="accordion-button @if($i != 1){{ 'collapsed' }}@endif" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $i }}" aria-expanded="@if($i == 1){{ 'true' }}@else{{ 'false' }}@endif"
                                            aria-controls="collapse{{ $i }}">
                                            <span>0{{ $i }}</span> {{ $r->prb_faq_question }}

                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->prb_faq_answer }}
                                        </div>
                                    </div>
                                </div>
        @php
        $i++;
        @endphp
    @endforeach
@endif
                                {{-- <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <span>02</span> ช่องทางการแจ้งอุบัติเหตุ
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            กรณีประสบอุบัติเหตุ ท่านสามารถติดศูนย์ลูกค้าสัมพันธ์วิริยะประกันภัย
                                            หมายเลขโทรศัพท์ 1557 ได้ตลอด 24 ชั่วโมง
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            <span>03</span> การจัดส่งกรมธรรม์
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ท่านจะได้รับกรมธรรม์หลังจากชำระเงินเรียบร้อยแล้ว
                                            โดยจัดส่งตามรายละเอียดข้อมูลที่ระบุในขั้นตอนการซื้อ
                                            สำหรับลูกค้าที่เลือกรับกรมธรรม์อิเล็กทรอนิกส์ ท่านจะได้รับกรมธรรม์ในทันที
                                            วิริยะประกันภัยขอขอบคุณที่ท่านร่วมเป็นส่วนหนึ่งในการประหยัดทรัพยากรธรรมชาติ
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('frontend/inc_footer')


    <script>
        $(document).ready(function () {
            $('.compulslider').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                nav: false,
                navText: ['<img src="images/arrow_left.png">', '<img src="images/arrow_right.png">'],
                navClass: ['owl-prev', 'owl-next'],
                autoplayTimeout: 4000,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 800,
                responsive: {
                    0: {
                        items: 1,
                        nav: true,
                        dots: false
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            })


        });
    </script>

</body>

</html>