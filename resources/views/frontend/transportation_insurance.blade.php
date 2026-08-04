<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body class="bluelight">

    <section id="compulsorypage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-md-6 col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประกันภัยขนส่งสินค้า</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันภัยขนส่งสินค้า</h1>
                        <p>เพื่อเพิ่มความมั่นใจให้กับเจ้าของสินค้าที่กำลังจะนำส่งสินค้านั้นๆ
                            ไปยังจุดหมายปลายทาง
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_transport.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="titleTopic">
                            <h2>ทำความรู้จักกับประกันภัยขนส่งสินค้า</h2>
                        </div>
                        <div class="contentbody">
                            ประกันภัยขนส่งสินค้าคือกรมธรรม์ประกันที่คุ้มครองความสูญเสียหรือความเสียหายของสินค้าที่นำเข้าหรือส่งออกโดยทางบก
                            ที่เกิดขึ้นในระหว่างการขนส่งสินค้า โดยคุ้มครองระหว่างการขนส่งสินค้าทางบกทั้งภายในประเทศไทย
                            และยังข้ามแดนไปถึงประเทศ ลาว พม่า จีน กัมพูชา ทั่วประเทศโดยไม่จำกัดระยะทาง
                            และไม่ว่าจะเป็นรถชนิดไหนเราก็รับประกัน เช่น รถกะบะตู้แห้ง รถกะบะตู้เย็น รถบรรทุก รถหัวลาก
                            รถหางพ่วง เป็นต้น เพียงมีทะเบียนรถไทยก็สามารถซื้อความคุ้มครองกับเราได้
                            โดยกรมธรรม์มีความคุ้มครอง 1 ปี เบี้ยเริ่มต้นเพียง 2,685.70 บาท และทาง NSI นำสินประกันภัย
                            สามารถให้คุณซื้อเป็นแบบรายเที่ยวได้อีกด้วย

                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col titleTopic">
                        <h4>แบบประกันภัยแนะนำ</h4>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="groupinsure_recc owl-carousel owl-theme">
                            @if(!empty($rows1))
    @foreach($rows1 as $r)
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/uploads/insurance_company/'.$r->insurance_company_logo) }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>{{ $r->insurance_company_name }}</b> <br>
                                                        <span>แผน : {{ $r->insurance_transportation_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_transportation_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_transportation_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_1 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_2 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_3 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_4 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_5 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_6 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_7 }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="selectTransportation('{{ $r->insurance_transportation_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="selectTransportation('{{ $r->insurance_transportation_id }}');">
                                                        <i class="fi fi-rr-document"></i>
                                                        ดูรายละเอียด</a></li>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col">
                        <div class="groupinsure_recc owl-carousel owl-theme">
@if(!empty($rows2))
    @foreach($rows2 as $r)
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/uploads/insurance_company/'.$r->insurance_company_logo) }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>{{ $r->insurance_company_name }}</b> <br>
                                                        <span>แผน : {{ $r->insurance_transportation_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_transportation_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_transportation_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_1 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_2 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_3 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_4 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_5 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_6 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_7 }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="selectTransportation('{{ $r->insurance_transportation_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="selectTransportation('{{ $r->insurance_transportation_id }}');">
                                                        <i class="fi fi-rr-document"></i>
                                                        ดูรายละเอียด</a></li>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col">
                        <div class="groupinsure_recc owl-carousel owl-theme">
@if(!empty($rows3))
    @foreach($rows3 as $r)
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/uploads/insurance_company/'.$r->insurance_company_logo) }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>{{ $r->insurance_company_name }}</b> <br>
                                                        <span>แผน : {{ $r->insurance_transportation_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_transportation_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_transportation_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_1 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_2 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_3 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_4 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_5 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_6 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_7 }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="selectTransportation('{{ $r->insurance_transportation_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="selectTransportation('{{ $r->insurance_transportation_id }}');">
                                                        <i class="fi fi-rr-document"></i>
                                                        ดูรายละเอียด</a></li>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
                    <div class="col">
                        <div class="groupinsure_recc owl-carousel owl-theme">
@if(!empty($rows4))
    @foreach($rows4 as $r)
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/uploads/insurance_company/'.$r->insurance_company_logo) }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>{{ $r->insurance_company_name }}</b> <br>
                                                        <span>แผน : {{ $r->insurance_transportation_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_transportation_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_transportation_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_1 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_2 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_3 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_4 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_5 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_6 }}</div>
                                                    <div class="col-6">{{ $r->insurance_transportation_text7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_transportation_7 }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="selectTransportation('{{ $r->insurance_transportation_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="selectTransportation('{{ $r->insurance_transportation_id }}');">
                                                        <i class="fi fi-rr-document"></i>
                                                        ดูรายละเอียด</a></li>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                </div>
            </div>


            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col titleTopic">
                        <h4>ความคุ้มครอง</h4>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="contentbody">
                            คุ้มครองตามเงื่อนไขการรับประกันภัยความรับผิดของผู้ขนส่ง ความสูญหาย
                            หรือเสียหายของของที่ผู้เอาประกันภัยรับขน ซึ่งเกิดขึ้นในระหว่าง การขนส่งและ
                            ในระหว่างระยะเวลาประกันภัย ตั้งแต่เมื่อของได้บรรทุกขึ้นไปยังยานพาหนะขนส่ง
                            จนกระทั่งส่งมอบของและเป็นการขนส่ง โดยยานพาหนะขนส่งที่ได้ระบุไว้ในตาราง
                            กรมธรรม์ประกันภัย
                            บริษัท วิริยะประกันภัย จำกัด (มหาชน) <br><br>
                            ความคุ้มครองของกรมธรรม์
                            ซึ่งกระทำโดยผู้เอาประกันภัยหรือตัวแทนหรือลูกจ้างของผู้เอาประกันภัย
                            ㆍ คุ้มครองความสูญเสียหรือเสียหายจากการลักทรัพย์ การชิงทรัพย์
                            การปลันทรัพย์ในระหว่างการขนส่ง โดยปรากฎร่องรอยความเสียหายและ
                            จะต้องเป็นการกระทำโดยบุคคลที่ไม่ใช่ผู้เอาประกันภัย หรือลูกจ้าง หรือ
                            ตัวแทน ของผู้เอาประกันภัย <br><br>
                            . ความเสียหายของสินค้าจากการเปียกน้ำฝน เนื่องจากสาเหตุผ้าใบ
                            โดนกิ่งไม้หรือโดนของมีคมหรือโดนวัตถุอื่นๆ ทำให้เกิดการฉีกขาด น้ำฝนรั่วซึม
                            เข้าผ้าใบหรือตามขอบตะเข็บผ้าใบ รวมถึงน้ำฝนรั่วซึมเข้าตู้คอนเทนเนอร์
                            ทั้งนี้ไม่คุ้มครองความสูญเสียหรือเสียหายอันเกิดจากผ้าใบ หรือตู้คอนเทนเนอร์
                            เสื่อมสภาพ มีรอยฉีกขาดหรือชำรุดมีรูมาก่อน

                        </div>
                        <div class="readmorecondi mt-5 text-center">
@php
$transportation_pdf = DB::table('insurance_upload_pdf')
    ->where('insurance_download_pdf_id', '=', 1)
    ->first();
@endphp
                            <a href="@if(!empty($transportation_pdf) and $transportation_pdf->transportation_pdf != ''){{ asset('public/uploads/condo/'.$transportation_pdf->transportation_pdf) }}@else{{ '#' }}@endif" class="btn btn-white" @if(!empty($transportation_pdf) and $transportation_pdf->transportation_pdf != ''){{ 'target="_blank"' }}@endif>
                            <button class="btn btn-condition">ดาวน์โหลดคู่มือ
                                <span class="orangetext">คลิก</span> </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faqgroup mt-5">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันภัยขนส่งสินค้า</span> </h5>
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
                                            <span>0{{ $i }}</span> {{ $r->transportation_faq_question }}

                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->transportation_faq_answer }}
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
                                            <span>02</span>
                                            หากธุรกิจของท่านไม่อยู่ในแผนความคุ้มครองการประกันธุรกิจปลอดภัยดังกล่าว
                                            สามารถทำประกันภัยได้หรือไม่?
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
                                            <span>03</span> ท่านสามารถเรียกเงินชดเชยกรณีเสียชีวิตของผู้เอาประกันภัย
                                            สมาชิกในครอบครัว และพนักงาน ได้ต่อเมื่อ?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ตอบ สมาชิกในครอบครัว
                                            หรือพนักงานได้รับบาดเจ็บทางร่างกายอันเกิดจากอุบัติเหตุซึ่งเกิดขึ้นในสถานที่เอาประกันภัย
                                            จนต้องเสียชีวิตภายในสถานที่เอาประกันภัย
                                            หรือขณะนำส่งโรงพยาบาลที่มีสาเหตุหรือสืบเนื่องมาจาก
                                            1. ไฟไหม้
                                            2. ระเบิด
                                            3.
                                            การลักทรัพย์ซึ่งได้เข้าไปหรือออกจากสถานที่ที่เอาประกันภัยโดยการใช้กำลังอย่างรุนแรงและทำให้เกิดร่องรอยความเสียหายที่เห็นได้อย่างชัดเจน
                                            การชิงทรัพย์และปล้นทรัพย์
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
<div style="display: none;" id="contactback">
    <div class="titleTopic text-center">
        กรุณากรอกข้อมูลติดต่อกลับ <br>
        <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้
            ที่นี่</span>
    </div>
    <div class="contactform">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="contact_transportation_name_surname"
                placeholder="name@example.com">
            <label for="contact_transportation_name_surname">ชื่อ - นามสกุล <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="contact_transportation_telephone"
                placeholder="name@example.com">
            <label for="contact_transportation_telephone">เบอร์โทรศัพท์ <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="contact_transportation_email"
                placeholder="name@example.com">
            <label for="contact_transportation_email">อีเมล
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="contact_transportation_call"
                placeholder="name@example.com">
            <label for="contact_transportation_call">* ช่วงเวลาให้ติดต่อกลับ
            </label>
        </div>
        {{-- <select class="form-select" aria-label="Default select example">
            <option selected>* ช่วงเวลาให้ติดต่อกลับ</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select> --}}

        <br>

        {{-- <img src="images/captcha.png" alt="">
        <br><br> --}}
        <center> <button class="btn btn-primary" onclick="sendForm();">ส่งแบบฟอร์ม</button>
        </center>

    </div>
</div>
<div style="display: none;" id="healthone">
    <div class="titleTopic text-center">
        กรุณากรอกข้อมูลเพื่อดำเนินการต่อ <br>
        <p class="smtext">กรอกแบบฟอร์มด้านล่าง</p>
    </div>
    <div class="contactform">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="detail_transportation_name_surname"
                placeholder="name@example.com">
            <label for="detail_transportation_name_surname">ชื่อ - นามสกุล <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="detail_transportation_telephone"
                placeholder="name@example.com">
            <label for="detail_transportation_telephone">เบอร์โทรศัพท์ <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="detail_transportation_email"
                placeholder="name@example.com">
            <label for="detail_transportation_email">อีเมล
            </label>
        </div>
    </div>
    {{-- <br><br>
    <img src="images/captcha.png" alt="" class="img-fluid"> --}}
    <br><br>
    <center> <a class="btn btn-primary" data-width="648"
            data-height="700" data-fancybox data-src="#healthtwo"
            href="javascript:;" onclick="return detailTransportation();"> ตกลง</a></center>

    <div style="display: none;" id="healthtwo">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logobig">
                            <img src="images/logosm/axa.png"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 text-start pt-1">
                        <div class="nameofpopup">
                            เมืองไทยประกันชีวิต <br>
                            <span>D Health Plus </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <div class="nameofpopup">
                    เบี้ยเริ่มต้น <br>
                    <span class="orangetext">190 ฿</span>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="bgmoreinfo">
                    <h3><i class="fi fi-rr-comment"></i>
                        ความคุ้มครองค่ารักษาพยาบาล</h3>
                    <div class="row">
                        <div class="col-md-7">
                            ค่ารักษาพยาบาล
                        </div>
                        <div class="col-md-5 text-end">
                            1,000,000 ฿
                        </div>
                        <div class="col-md-7">
                            ค่ารักษาพยาบาลต่อเนื่องหลังจากกลับไทย
                        </div>
                        <div class="col-md-5 text-end">
                            -
                        </div>
                        <div class="col-md-7">
                            เคลื่อนย้ายฉุกเฉิน
                        </div>
                        <div class="col-md-5 text-end">
                            1,000,000 ฿
                        </div>
                        <div class="col-md-7">
                            ค่าชดเชยรายวัน
                        </div>
                        <div class="col-md-5 text-end">
                            -
                        </div>
                    </div>
                    <hr>
                    <h3><i class="fi fi-rr-comment"></i>
                        ความคุ้มครองกรณีเสียชีวิต</h3>
                    <div class="row">
                        <div class="col-md-7">
                            ชดเชยกรณีเสียชีวิต
                        </div>
                        <div class="col-md-5 text-end">
                            1,000,000 ฿
                        </div>
                        <div class="col-md-7">
                            ค่าใช้จ่ายในการส่งศพกลับประเทศ
                        </div>
                        <div class="col-md-5 text-end">
                            -
                        </div>

                    </div>
                    <hr>
                    <h3><i class="fi fi-rr-comment"></i>
                        ความคุ้มครองในการเดินทาง</h3>
                    <div class="row">
                        <div class="col-md-7">
                            ความล่าช้าของเที่ยวบิน
                        </div>
                        <div class="col-md-5 text-end">
                            10,000 ฿
                        </div>
                        <div class="col-md-7">
                            การบอกเลิกการเดินทาง
                        </div>
                        <div class="col-md-5 text-end">
                            -
                        </div>
                        <div class="col-md-7">
                            การพลาดต่อเที่ยวบิน
                        </div>
                        <div class="col-md-5 text-end">
                            -
                        </div>
                        <div class="col-md-7">
                            การบอกเลิกการเดินทาง
                        </div>
                        <div class="col-md-5 text-end">
                            -
                        </div>

                    </div>
                    <hr>
                    <h3><i class="fi fi-rr-comment"></i>
                        ความคุ้มครองสัมภาระ และทรัพย์สิน</h3>
                    <div class="row">
                        <div class="col-md-7">
                            สัมภาระสูญหาย/เสียหาย
                        </div>
                        <div class="col-md-5 text-end">
                            5,000 ฿
                        </div>
                        <div class="col-md-7">
                            เงินสดถูกขโมย
                        </div>
                        <div class="col-md-5 text-end">
                            -
                        </div>
                        <div class="col-md-7">
                            เอกสารเดินทาง
                        </div>
                        <div class="col-md-5 text-end">
                            3,000 ฿
                        </div>
                        <div class="col-md-7">
                            คอมพิวเตอร์โน๊ตบุ๊ค
                        </div>
                        <div class="col-md-5 text-end">
                            -
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <a href="#" class="btn btn-secondary" onclick="window.location.href='{{ url('pdf_transportation') }}/' + $('#insurance_transportation_id').val();"><i
                        class="fi fi-rr-download"></i>ดาวน์โหลด PDF</a>
                <a href="#" class="btn btn-primary" data-width="648"
                    data-height="700" data-fancybox data-src="#contact"
                    href="javascript:;"> <i class="fi fi-rr-phone-call"></i>
                    ติดต่อเจ้าหน้าที่</a>
                <div style="display: none;" id="contact">
                    <div class="titleTopic text-center">
                        กรุณากรอกข้อมูลติดต่อกลับ<br>
                        <p class="smtext">กรอกแบบฟอร์มด้านล่าง
                            เพื่อให้เราติดต่อกลับได้ ที่นี่</p>
                    </div>
                    <div class="contactform">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"
                                id="confirm_transportation_name_surname"
                                placeholder="name@example.com">
                            <label for="confirm_transportation_name_surname">ชื่อ - นามสกุล
                                <span>*</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"
                                id="confirm_transportation_telephone"
                                placeholder="name@example.com">
                            <label for="confirm_transportation_telephone">เบอร์โทรศัพท์
                                <span>*</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"
                                id="confirm_transportation_email"
                                placeholder="name@example.com">
                            <label for="confirm_transportation_email">อีเมล
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"
                                id="confirm_transportation_call"
                                placeholder="name@example.com">
                            <label for="confirm_transportation_call">ช่วงเวลาให้ติดต่อกลับ
                            </label>
                        </div>
                        {{-- <select class="form-select"
                            aria-label="Default select example">
                            <option selected>* ช่วงเวลาให้ติดต่อกลับ
                            </option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select> --}}
                    </div>
                    <br><br>
                    <img src="images/captcha.png" alt="" class="img-fluid">
                    <br><br>
                    <center> <button
                            class="btn btn-primary" onclick="sendConfirm();">ส่งแบบฟอร์ม</button>
                    </center>
                </div>
            </div>
        </div>

    </div>

</div>
<input type="hidden" id="insurance_transportation_id">
    @include('frontend/inc_footer')


    <script>
        $(document).ready(function () {
            $('.groupinsure_recc').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                nav: false,
                navText: ['<img src="images/arrow_left.png">', '<img src="images/arrow_right.png">'],
                navClass: ['owl-prev', 'owl-next'],
                autoplayTimeout: 4000,
                autoplay: false,
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
                        items: 1
                    }
                }
            })
        });

        function selectTransportation(insurance_transportation_id) {
            // alert(insurance_transportation_id);

            $("#insurance_transportation_id").val(insurance_transportation_id);
        }

        function sendForm() {
            if($("#contact_transportation_name_surname").val() == '') {
                alert('กรุณากรอก ชื่อ - นามสกุล');

                $("#contact_transportation_name_surname").focus();
            } else if($("#contact_transportation_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#contact_transportation_telephone").focus();
            } else if($("#contact_transportation_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_transportation_telephone").val('');
                $("#contact_transportation_telephone").focus();
            } else if($("#contact_transportation_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#contact_transportation_email").focus();
            } else if($("#contact_transportation_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาให้ติดต่อกลับ');

                $("#contact_transportation_call").focus();
            } else {
                //alert($("#insurance_transportation_id").val());

                $.post('{{ url("ajaxSendFormTransportation") }}', { insurance_transportation_id: $("#insurance_transportation_id").val(), contact_transportation_name_surname: $("#contact_transportation_name_surname").val(), contact_transportation_telephone: $("#contact_transportation_telephone").val(), contact_transportation_email: $("#contact_transportation_email").val(), contact_transportation_call: $("#contact_transportation_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อย');

                    window.location.href = '{{ url("transportation_insurance") }}';
                });
            }
        }

        function detailTransportation() {
            if($("#detail_transportation_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ นามสกุล');

                $("#detail_transportation_name_surname").focus();

                return false;
            } else if($("#detail_transportation_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#detail_transportation_telephone").focus();

                return false;
            } else if($("#detail_transportation_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#detail_transportation_telephone").val('');

                $("#detail_transportation_telephone").focus();

                return false;
            } else if($("#detail_transportation_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#detail_transportation_email").focus();

                return false;
            } else {
                $.post('{{ url("ajaxDetailTransportation") }}', { insurance_transportation_id: $("#insurance_transportation_id").val(), detail_transportation_name_surname: $("#detail_transportation_name_surname").val(), detail_transportation_telephone: $("#detail_transportation_telephone").val(), detail_transportation_email: $("#detail_transportation_email").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อย');

                    //window.location.href = '{{ url("transportation_insurance") }}';
                });
            }
        }

        function sendConfirm() {
            if($("#confirm_transportation_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ นามสกุล');

                $("#confirm_transportation_name_surname").focus();
            } else if($("#confirm_transportation_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#confirm_transportation_telephone").focus();
            } else if($("#confirm_transportation_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#confirm_transportation_telephone").val('');
                $("#confirm_transportation_telephone").focus();
            } else if($("#confirm_transportation_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#confirm_transportation_email").focus();
            } else if($("#confirm_transportation_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาให้ติดต่อกลับ');

                $("#confirm_transportation_call").focus();
            } else {
                $.post('{{ url("ajaxConfirmTransportation") }}', { insurance_transportation_id: $("#insurance_transportation_id").val(), confirm_transportation_name_surname: $("#confirm_transportation_name_surname").val(), confirm_transportation_telephone: $("#confirm_transportation_telephone").val(), confirm_transportation_email: $("#confirm_transportation_email").val(), confirm_transportation_call: $("#confirm_transportation_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อย');

                    window.location.href = '{{ url("transportation_insurance") }}';
                });
            }
        }
    </script>


</body>

</html>