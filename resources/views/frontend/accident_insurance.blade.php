<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body class="bluelight">

    <section id="healthinsurepage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประกันอุบัติเหตุ</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันอุบัติเหตุ</h1>
                        <p>ใช้ชีวิตให้สนุกได้เต็มที่อย่างที่ต้องการ เพราะมีประกันอุบัติเหตุส่วนบุคคล
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_accd.png') }}" alt="">
                    </div>
                </div>
            </div>

            <div class="wrapper_pad">
                <div class="fromtopandbt">
                    <div class="row mt-5 mb-5">
                        <div class="col titleTopic text-center">
                            <h4>ความคุ้มครอง</h4>
                        </div>
                    </div>
                    <div class="row mt-5 fromtopandbttwo">
                        <div class="col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/healthicon1.png') }}" alt=""> </div> <br>
                            <span class="bolder">ค่าชดเชยรายได้</span>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/healthicon2.png') }}" alt=""> </div> <br>
                            <span class="bolder">ค่ารักษาพยาบาล
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/healthicon3.png') }}" alt=""> </div> <br>
                            <span class="bolder">เสียชีวิต/ทุพพลภาพถาวร
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col titleTopic">
                        <h4>แบบประกันภัยแนะนำ</h4>
                    </div>
                </div>
                <div class="row mt-3 mb-3">
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
                                                        <span>แผน : {{ $r->insurance_accident_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_accident_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_accident_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_1 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_2 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_3 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_4 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_5 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_6 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_7 }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="selectAccident('{{ $r->insurance_accident_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="selectAccident('{{ $r->insurance_accident_id }}');">
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
                                                        <span>แผน : {{ $r->insurance_accident_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_accident_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_accident_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_1 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_2 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_3 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_4 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_5 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_6 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_7 }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="selectAccident('{{ $r->insurance_accident_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="selectAccident('{{ $r->insurance_accident_id }}');">
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
                                                        <span>แผน : {{ $r->insurance_accident_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_accident_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_accident_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_1 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_2 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_3 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_4 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_5 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_6 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_7 }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="selectAccident('{{ $r->insurance_accident_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="selectAccident('{{ $r->insurance_accident_id }}');">
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
                                                        <span>แผน : {{ $r->insurance_accident_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_accident_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_accident_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_1 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_2 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_3 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_4 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_5 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_6 }}</div>
                                                    <div class="col-6">{{ $r->insurance_accident_text7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_accident_7 }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="selectAccident('{{ $r->insurance_accident_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="selectAccident('{{ $r->insurance_accident_id }}');">
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
            
            <div class="middlesec">
                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="pb-3">เพราะทีมงาน INSUREWISE <br> คุยง่ายให้คำปรึกษาอย่างมืออาชีพ</h3>

                        </div>
                    </div>
                </div>
            </div>


            <div class="wrapper_pad">
                <div class="bghealth">
                    <div class="row mt-5 mb-5">
                        <div class="col">
                            <div class="titleTopic">
                                <h2>ซื้อประกันอุบัติเหตุส่วนบุคคล ดีอย่างไร</h2>
                            </div>
                            <div class="contentbody mt-5">
                                ประกันอุบัติเหตุส่วนบุคคลนับเป็นประกันภัยที่เกี่ยวข้องกับชีวิตประจำวันของเรามากที่สุด
                                เพราะในชีวิตประจำวัน อุบัติเหตุเป็นสิ่งที่คาดเดาไม่ได้ ว่าจะเกิดขึ้นเมื่อไร
                                และรุนแรงแค่ไหน หากต้องเข้าพักรักษาตัวที่โรงพยาบาล หรือรุนแรงถึงขั้นทุพพลภาพ
                                สูญเสียอวัยวะ หรือเสียชีวิต ค่าใช้จ่ายอาจสูงถึงหลักแสนหรือหลักล้าน
                                การทำประกันภัยอุบัติเหตุเป็นการบริหารความเสี่ยงที่คุ้มค่า
                                เพราะเสียเงินเริ่มต้นแค่หลักร้อยเท่านั้น
<br><br>
                                โดยเรามี แผน TIP PA Plus และ แผน PA TIP Lady
                                ให้คุณได้เลือกแผนความคุ้มครองและวงเงินความคุ้มครองที่เหมาะกับตนเอง
<br><br>
                                นอกจากความคุ้มครองที่ครอบคลุมครบแล้ว เมื่อซื้อประกันอุบัติเหตุออนไลน์ กับ TIPINSURE.COM
                                ก็จะได้เบี้ยประกันอุบัติเหตุส่วนบุคคลรายปีเริ่มต้นเพียง 870 บาทต่อปีเท่านั้น
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faqgroup mt-5">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันอุบัติเหตุ</span> </h5>
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
                                            <span>0{{ $i }}</span> {{ $r->accident_faq_question }}

                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->accident_faq_answer }}
                                            {{-- ประกันโรคมะเร็ง เหมาะสำหรับคนที่ต้องการปิดความเสี่ยงภาระค่ารักษาพยาบาลที่สูง
                                            จากการบำบัดรักษาโรคมะเร็งโดยวิธีการต่างๆ ตามที่ตนเองต้องการ
                                            ในขณะที่ประกันโรคร้ายแรง
                                            เหมาะสำหรับคนที่มีปัจจัยเสี่ยงในการเป็นโรคร้ายแรงมากกว่าหนึ่งโรค
                                            และอยากปิดความเสี่ยงภาระค่ารักษาพยาบาลไม่ว่าจากโรคใดก็ตาม --}}
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
                                            <span>02</span> ประกันมะเร็ง เบี้ยฯ คงที่ ดีอย่างไร?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            กรณีประสบอุบัติเหตุ ท่านสามารถติดศูนย์ลูกค้าสัมพันธ์วิริยะประกันภัย
                                            หมายเลขโทรศัพท์ 1557 ได้ตลอด 24 ชั่วโมง
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
            <input type="email" class="form-control" id="contact_accident_name_surname"
                placeholder="name@example.com">
            <label for="contact_accident_name_surname">ชื่อ - นามสกุล <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="contact_accident_telephone"
                placeholder="name@example.com">
            <label for="contact_accident_telephone">เบอร์โทรศัพท์ <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="contact_accident_email"
                placeholder="name@example.com">
            <label for="contact_accident_email">อีเมล
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="contact_accident_call"
                placeholder="name@example.com">
            <label for="contact_accident_call">* ช่วงเวลาให้ติดต่อกลับ
            </label>
        </div>
        {{-- <select class="form-select" aria-label="Default select example">
            <option selected>* ช่วงเวลาให้ติดต่อกลับ</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select> --}}

        {{-- <br>

        <img src="images/captcha.png" alt=""> --}}
        <br><br>
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
            <input type="email" class="form-control" id="confirm_accident_name_surname"
                placeholder="name@example.com">
            <label for="confirm_accident_name_surname">ชื่อ - นามสกุล <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="confirm_accident_telephone"
                placeholder="name@example.com">
            <label for="confirm_accident_telephone">เบอร์โทรศัพท์ <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="confirm_accident_email"
                placeholder="name@example.com">
            <label for="confirm_accident_email">อีเมล
            </label>
        </div>
    </div>
    <br><br>
    <img src="images/captcha.png" alt="" class="img-fluid">
    <br><br>
    <center> <a href="#" class="btn btn-primary" data-width="648"
            data-height="700" data-fancybox data-src="#healthtwo"
            href="javascript:;" onclick="return confirmAccident();"> ตกลง</a></center>

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
                <a href="#" class="btn btn-secondary" onclick="window.location.href='{{ url('pdf_accident') }}/' + $('#insurance_accident_id').val();"><i
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
                                id="confirm_accident2_name_surname"
                                placeholder="name@example.com">
                            <label for="confirm_accident2_name_surname">ชื่อ - นามสกุล
                                <span>*</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"
                                id="confirm_accident2_telephone"
                                placeholder="name@example.com">
                            <label for="confirm_accident2_telephone">เบอร์โทรศัพท์
                                <span>*</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"
                                id="confirm_accident2_email"
                                placeholder="name@example.com">
                            <label for="confirm_accident2_email">อีเมล
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"
                                id="confirm_accident2_call"
                                placeholder="name@example.com">
                            <label for="confirm_accident2_call">ช่วงเวลาให้ติดต่อกลับ
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
                    {{-- <img src="images/captcha.png" alt="" class="img-fluid">
                    <br><br> --}}
                    <center> <button onclick="confirm_accident2();"
                            class="btn btn-primary" >ส่งแบบฟอร์ม</button>
                    </center>
                </div>
            </div>
        </div>

    </div>

</div>
<input type="hidden" id="insurance_accident_id">
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

        function selectAccident(insurance_accident_id) {
            // alert(insurance_accident_id);

            $("#insurance_accident_id").val(insurance_accident_id);
        }

        function sendForm() {
            if($("#contact_accident_name_surname").val() == '') {
                alert('กรุณากรอก ชื่อ - นามสกุล');

                $("#contact_accident_name_surname").focus();
            } else if($("#contact_accident_telephone").val() == '') {
                alert('กรุณากรอก เบอร์โทรศัพท์');

                $("#contact_accident_telephone").focus();
            } else if($("#contact_accident_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_accident_telephone").val('');
                $("#contact_accident_telephone").focus();
            } else if($("#contact_accident_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#contact_accident_email").focus();
            } else if($("#contact_accident_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาให้ติดต่อกลับ');

                $("#contact_accident_call").focus();
            } else {
                $.post('{{ url("ajaxSendFormAccident") }}', { insurance_accident_id: $("#insurance_accident_id").val(), contact_accident_name_surname: $("#contact_accident_name_surname").val(), contact_accident_telephone: $("#contact_accident_telephone").val(), contact_accident_email: $("#contact_accident_email").val(), contact_accident_call: $("#contact_accident_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อย');

                    window.location.href = '{{ url("accident_insurance") }}';
                });
            }
        }

        function confirmAccident() {
            if($("#confirm_accident_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ นามสกุล');

                $("#confirm_accident_name_surname").focus();
                return false;
            } else if($("#confirm_accident_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#confirm_accident_telephone").focus();
                return false;
            } else if($("#confirm_accident_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#confirm_accident_telephone").val('');
                $("#confirm_accident_telephone").focus();
                return false;
            } else if($("#confirm_accident_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#confirm_accident_email").focus();
                return false;
            } else {
                $.post('{{ url("ajaxConfirmAccident") }}', { insurance_accident_id: $("#insurance_accident_id").val(), confirm_accident_name_surname: $("#confirm_accident_name_surname").val(), confirm_accident_telephone: $("#confirm_accident_telephone").val(), confirm_accident_email: $("#confirm_accident_email").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อย');
                });
            }
        }

        function confirm_accident2() {
            if($("#confirm_accident2_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ นามสกุล');

                $("#confirm_accident2_name_surname").focus();
                return false;
            } else if($("#confirm_accident2_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#confirm_accident2_telephone").focus();
                return false;
            } else if($("#confirm_accident2_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#confirm_accident2_telephone").val('');
                $("#confirm_accident2_telephone").focus();
                return false;
            } else if($("#confirm_accident2_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#confirm_accident2_email").focus();
                return false;
            } else if($("#confirm_accident2_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาให้ติดต่อกลับ');

                $("#confirm_accident2_call").focus();
                return false;
            } else {
                $.post('{{ url("ajaxConfirmAccident2") }}', { insurance_accident_id: $("#insurance_accident_id").val(), confirm_accident2_name_surname: $("#confirm_accident2_name_surname").val(), confirm_accident2_telephone: $("#confirm_accident2_telephone").val(), confirm_accident2_email: $("#confirm_accident2_email").val(), confirm_accident2_call: $("#confirm_accident2_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อย');

                    window.location.href = '{{ url("accident_insurance") }}';
                });
            }
        }
    </script>



</body>

</html>