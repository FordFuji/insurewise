<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body class="bluelight">

    <section id="homeinsurancepage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประกันภัยสำหรับที่อยู่อาศัย
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันภัยสำหรับที่อยู่อาศัย</h1>
                        <p>ดูแลครอบคลุม ทั้งบ้านและทรัพย์สินภายในบ้าน</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_home.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="titleTopic">
                            <h2>ทำไมต้องทำประกันภัยสำหรับที่อยู่อาศัย</h2>
                        </div>
                        <div class="contentbody">ประกันภัยที่อยู่อาศัย
                            เป็นประกันภัยที่ให้ความคุ้มครองสิ่งปลูกสร้างที่เป็นที่อยู่อาศัย
                            เมื่อเกิดเหตุที่สร้างความเสียหายให้แก่ตัวบ้านหรือทรัพย์สินภายในบ้าน
                            บริษัทประกันภัยจะเข้าประเมินความเสียหายและชดเชย/บรรเทาความสูญเสียตามวงเงินที่กำหนดไว้
                            บางแผนประกันภัยมีชดเชยค่าที่พักอาศัยชั่วคราวอีกด้วย เช่น
                            <br><br>
                            <li>อุบัติภัยไฟไหม้ แก๊สระเบิด รถชน</li>
                            <li>ภัยธรรมชาติ ลมพายุ น้ำท่วม ลูกเห็บ แผ่นดินไหว</li>

                            <br>
                            ประกันภัยบ้านและทรัพย์สินแบบไหนที่ควรจะเลือก แบบไหนที่เหมาะกับบ้านของเรา
                            สิ่งที่ต้องคิดถึงคือการเลือกวงเงินคุ้มครองให้เหมาะสมกับบ้านของเรา
                            โดยอาจประเมินจากราคาบ้าน ทรัพย์สินภายในบ้าน และวัสดุที่ใช้ก่อสร้างบ้านของเรา
                            ประกันที่ราคาถูกเกินไปอาจมีการตัดส่วนความคุ้มครองบางอย่างออก
                            แต่ของแพงก็อาจไม่จำเป็นสำหรับเราเสมอไปการเลือกเบี้ยที่เราจ่ายไหวจึงเป็นอีกหนึ่งเรื่องสำคัญ
                            ดังนั้นก่อนซื้อประกันบ้านและทรัพย์สินควรเปรียบเทียบราคาและรายละเอียดอื่นๆ
                            เพื่อให้ได้ประกันที่เหมาะสมกับบ้านของเราจริงๆ




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
@if(!empty($insurance))
    @foreach($insurance as $r)
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/uploads/insurance_home/'.$r->insurance_home_image) }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>{{ $r->insurance_home_name }}</b> <br>
                                                        <span>แผน : {{ $r->insurance_home_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_home_premium_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_home_text_1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_home_accident }}</div>
                                                    <div class="col-6">{{ $r->insurance_home_text_2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_home_sick }}</div>
                                                    <div class="col-6">{{ $r->insurance_home_text_3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_home_vaccine }}</div>
                                                    <div class="col-6">{{ $r->insurance_home_text_4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_home_deposit }}</div>
                                                    <div class="col-6">{{ $r->insurance_home_text_5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_home_external }}</div>
                                                    <div class="col-6">{{ $r->insurance_home_text_6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_home_injury }}</div>
                                                    <div class="col-6">{{ $r->insurance_home_text_7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_home_property }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="contactStaff('{{ $r->insurance_home_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="contactStaff('{{ $r->insurance_home_id }}');">
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
                <div class="fromtopandbt">
                    <div class="row mt-5 mb-5">
                        <div class="col titleTopic text-center">
                            <h4>ความคุ้มครองครอบคลุม</h4>
                        </div>
                    </div>
                    <div class="row mt-5 fromtopandbttwo">
                        <div class="col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/homeic1.png') }}" alt=""> </div> <br>
                            <span class="bolder">ไฟไหม้ ฟ้าผ่า ระเบิด
                                เคลมได้</span>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/homeic2.png') }}" alt=""> </div> <br>
                            <span class="bolder">น้ำท่วม ลมพายุ ลูกเห็บ แผ่นดินไหว
                                เคลมได้
                            </span>
                        </div>
                        <div class="col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/homeic3.png') }}" alt=""> </div> <br>
                            <span class="bolder">ภัยจากเครื่องใช้ไฟฟ้า
                                จ่ายหลักร้อย

                            </span>
                        </div>
                    </div>
                </div>
            </div>
@php
$home_pdf = DB::table('insurance_upload_pdf')
    ->where('insurance_download_pdf_id', '=', 1)
    ->first();
@endphp
            <div class="middlesec">
                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="pb-3">เงื่อนไขและความคุ้มครอง </h3>
                            <a href="@if(!empty($home_pdf) and $home_pdf->home_pdf != ''){{ asset('public/uploads/condo/'.$home_pdf->home_pdf) }}@else{{ '#' }}@endif" class="btn btn-white" @if(!empty($home_pdf) and $home_pdf->home_pdf != ''){{ 'target="_blank"' }}@endif><i class="fi fi-rr-download"></i> ดาวน์โหลดเงื่อนไข</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="faqgroup">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันภัยสำหรับที่อยู่อาศัย</span>
                                </h5>
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
                                            <span>0{{ $i }}</span> {{ $r->home_faq_question }}

                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->home_faq_answer }}
                                            {{-- รถทุกชนิดที่จดทะเบียนกับกรมการขนส่งทางบก ไม่ว่าจะเป็นรถส่วนบุคคล
                                            รถโดยสาร
                                            รถบรรทุก รถราชการ รถบดถนน รถอีแต๋น รถพ่วง
                                            และรถที่ใช้พลังงานทางเลือกหรือพลังงานทดแทน ต้องทำประกันรถยนต์ภาคบังคับ
                                            (พ.ร.บ.) ทั้งหมด --}}
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
                                            หากท่านประสงค์จะทำประกันภัยสำหรับที่อยู่อาศัย
                                            เฉพาะทรัพย์สินภายในสิ่งปลูกสร้าง สามารถทำได้หรือไม่?
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
                <input type="email" class="form-control" id="contact_home_name_surname"
                    placeholder="name@example.com">
                <label for="contact_home_name_surname">ชื่อ - นามสกุล <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="contact_home_tel"
                    placeholder="name@example.com">
                <label for="contact_home_tel">เบอร์โทรศัพท์ <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="contact_home_email"
                    placeholder="name@example.com">
                <label for="contact_home_email">อีเมล
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="contact_home_call"
                    placeholder="name@example.com">
                <label for="contact_home_call">* ช่วงเวลาให้ติดต่อกลับ
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
            <center> <button onclick="contactStaffCall();" class="btn btn-primary">ส่งแบบฟอร์ม</button>
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
                <input type="email" class="form-control" id="contact_detail_home_name_surname"
                    placeholder="name@example.com">
                <label for="contact_detail_home_name_surname">ชื่อ - นามสกุล <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="contact_detail_home_tel"
                    placeholder="name@example.com">
                <label for="contact_detail_home_tel">เบอร์โทรศัพท์ <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="contact_detail_home_email"
                    placeholder="name@example.com">
                <label for="contact_detail_home_email">อีเมล
                </label>
            </div>
        </div>
        {{-- <br><br>
        <img src="images/captcha.png" alt="" class="img-fluid"> --}}
        <br><br>
        <center> <a href="#" class="btn btn-primary" data-width="648"
                data-height="700" data-fancybox data-src="#healthtwo"
                href="javascript:;" onclick="return contactDetailHome();"> ตกลง</a></center>

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
            {{-- <div class="row mt-3">
                <div class="col text-center">
                    <a href="#" class="btn btn-secondary"><i
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
                                    id="contact_home_name_surname"
                                    placeholder="name@example.com">
                                <label for="contact_home_name_surname">ชื่อ - นามสกุล
                                    <span>*</span>
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control"
                                    id="contact_home_tel"
                                    placeholder="name@example.com">
                                <label for="contact_home_tel">เบอร์โทรศัพท์
                                    <span>*</span>
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control"
                                    id="contact_home_email"
                                    placeholder="name@example.com">
                                <label for="contact_home_email">อีเมล
                                </label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control"
                                    id="contact_home_call"
                                    placeholder="name@example.com">
                                <label for="contact_home_call">* ช่วงเวลาให้ติดต่อกลับ
                                </label>
                            </div>
                        </div>
                        <br><br>
                        <img src="images/captcha.png" alt="" class="img-fluid">
                        <br><br>
                        <center> <button onclick="contactStaffCall();"
                                class="btn btn-primary">ส่งแบบฟอร์ม</button>
                        </center>
                    </div>
                </div>
            </div> --}}

        </div>

    </div>
    <input type="hidden" id="insurance_home_id">
    @include('frontend/inc_footer')

    <script>
        $(document).ready(function () {
            $('.groupinsure_recc').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                nav: false,
                navText: ['<img src="{{ asset('public/frontend/images/arrow_left.png') }}">', '<img src="{{ asset('public/frontend/images/arrow_right.png') }}">'],
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
            $('.promotionslider').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                nav: false,
                navText: ['<img src="{{ asset('public/frontend/images/arrow_left.png') }}">', '<img src="{{ asset('public/frontend/images/arrow_right.png') }}">'],
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
                        items: 1
                    }
                }
            })


        });

        function contactStaff(insurance_home_id) {
            $("#insurance_home_id").val(insurance_home_id);
            //alert($("#insurance_home_id").val());
        }

        function contactStaffCall() {
            if($("#contact_home_name_surname").val() == '') {
                alert('กรุณากรอก ชื่อ - สกุล');

                $("#contact_home_name_surname").focus();
            } else if($("#contact_home_tel").val() == '') {
                alert('กรุณากรอก เบอร์โทรศัพท์');

                $("#contact_home_tel").focus();
            } else if($("#contact_home_tel").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_home_tel").val('');
                $("#contact_home_tel").focus();
            } else if($("#contact_home_email").val() == '') {
                alert('กรุณากรอก อีเมล์');

                $("#contact_home_email").focus();
            } else if($("#contact_home_call").val() == '') {
                alert('กรุณากรอก ช่วงเวลาให้ติดต่อกลับ');

                $("#contact_home_call").focus();
            } else {
                $.post('{{ url("ajaxContactHome") }}', { insurance_home_id: $("#insurance_home_id").val(), contact_home_name_surname: $("#contact_home_name_surname").val(), contact_home_tel: $("#contact_home_tel").val(), contact_home_email: $("#contact_home_email").val(), contact_home_call: $("#contact_home_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    window.location.href = '{{ url("home_insurance") }}'
                });
            }
        }

        function contactDetailHome() {
            if($("#contact_detail_home_name_surname").val() == '') {
                alert('กรุณากรอก ชื่อ - สกุล');

                $("#contact_detail_home_name_surname").focus();

                return false;
            } else if($("#contact_detail_home_tel").val() == '') {
                alert('กรุณากรอก เบอร์โทรศัพท์');

                $("#contact_detail_home_tel").focus();

                return false;
            } else if($("#contact_detail_home_tel").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_detail_home_tel").val('');
                $("#contact_detail_home_tel").focus();

                return false;
            } else if($("#contact_detail_home_email").val() == '') {
                alert('กรุณากรอก อีเมล์');

                $("#contact_detail_home_email").focus();

                return false;
            } else {
                $.post('{{ url("ajaxContactHomeDetail") }}', { insurance_home_id: $("#insurance_home_id").val(), contact_detail_home_name_surname: $("#contact_detail_home_name_surname").val(), contact_detail_home_tel: $("#contact_detail_home_tel").val(), contact_detail_home_email: $("#contact_detail_home_email").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    //window.location.href = '{{ url("home_insurance") }}'
                });
            }
        }
    </script>


</body>

</html>