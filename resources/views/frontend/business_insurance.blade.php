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
                                    <li class="breadcrumb-item active" aria-current="page">ประกันภัยธุรกิจ</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันภัยธุรกิจ</h1>
                        <p>สร้างความมั่นใจให้ธุรกิจ ด้วยประกัน "ธุรกิจปลอดภัย"
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_business.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col text-center">
                        <div class="titleTopic">
                            <h2>ประกันภัยธุรกิจปลอดภัย
                                “ดำเนินธุรกิจอย่างอุ่นใจ”
                            </h2>
                        </div>
                        <div class="contentbody">ครอบคลุมทุกความเสี่ยงภัยสำหรับการดำเนินธุรกิจ จบในกรมธรรม์เดียว
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row mt-3 mb-5">
@if(!empty($insurance))
    @foreach($insurance as $r)
                            <div class="col-lg-4">
                                <div class="groupcompul">
                                    <h6> จำนวนเงินเอาประกันภัย <br>
                                        {{ $r->insurance_business_price }} บาท</h6>
                                    <div class="bgwhitecompul">
                                        <div class="price">{{ $r->insurance_business_price_per_year }} บาท/ปี</div>
                                        <hr>

                                        <div class="row mt-3 text-start">
                                            <div class="col-md-6">
                                                {{ $r->insurance_business_text_1 }}
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                {{ $r->insurance_business_fire }}
                                            </div>

                                            <div class="col-md-6">
                                                {{ $r->insurance_business_text_2 }} <br>
                                                {{ $r->insurance_business_text_3 }}
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                {{ $r->insurance_business_money_salary }}
                                            </div>
                                            <div class="col-md-6">
                                                {{ $r->insurance_business_text_4 }}
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                {{ $r->insurance_business_money }}
                                            </div>
                                            <div class="col-md-6">
                                                เงินชดเชยเสียชีวิต
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                {{ $r->insurance_business_die }}
                                            </div>
                                        </div>
                                        <br>
                                        <a href="#" class="btn btn-secondary" data-width="948" data-height="700"
                                            data-fancybox data-src="#contactback" href="javascript:;" onclick="contact('{{ $r->insurance_business_id }}');"><i
                                                class="fi fi-rr-phone-call"></i> ติดต่อเจ้าหน้าที่</a>

                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                            {{-- <div class="col-lg-4">
                                <div class="groupcompul">
                                    <h6> จำนวนเงินเอาประกันภัย <br>
                                        3,000,000 บาท</h6>
                                    <div class="bgwhitecompul">
                                        <div class="price">3,500 บาท/ปี</div>
                                        <hr>

                                        <div class="row mt-3 text-start">
                                            <div class="col-md-6">
                                                อัคคีภัย
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                ตามความเสียหาย*
                                            </div>

                                            <div class="col-md-6">
                                                เงินทดแทนรายได้ <br>
                                                (สูงสุด 20 วันทำการ)
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                5,000 บาท*
                                            </div>
                                            <div class="col-md-6">
                                                ประกันเงินสด
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                100,000 บาท
                                            </div>
                                            <div class="col-md-6">
                                                เงินชดเชยเสียชีวิต
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                250,000 ต่อคน*
                                            </div>
                                        </div>
                                        <br>
                                        <a href="#" class="btn btn-secondary" data-width="948" data-height="700"
                                            data-fancybox data-src="#contactback" href="javascript:;"><i
                                                class="fi fi-rr-phone-call"></i> ติดต่อเจ้าหน้าที่</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="groupcompul">
                                    <h6> จำนวนเงินเอาประกันภัย <br>
                                        3,000,000 บาท</h6>
                                    <div class="bgwhitecompul">
                                        <div class="price">4,000 บาท/ปี</div>
                                        <hr>

                                        <div class="row mt-3 text-start">
                                            <div class="col-md-6">
                                                อัคคีภัย
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                ตามความเสียหาย*
                                            </div>

                                            <div class="col-md-6">
                                                เงินทดแทนรายได้ <br>
                                                (สูงสุด 20 วันทำการ)
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                5,000 บาท*
                                            </div>
                                            <div class="col-md-6">
                                                ประกันเงินสด
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                100,000 บาท
                                            </div>
                                            <div class="col-md-6">
                                                เงินชดเชยเสียชีวิต
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                250,000 ต่อคน*
                                            </div>
                                        </div>
                                        <br>
                                        <a href="#" class="btn btn-secondary" data-width="948" data-height="700"
                                            data-fancybox data-src="#contactback" href="javascript:;"><i
                                                class="fi fi-rr-phone-call"></i> ติดต่อเจ้าหน้าที่</a>

                                    </div>
                                </div>
                            </div>
                            <div style="display: none;" id="contactback">
                                <div class="titleTopic text-center">
                                    กรุณากรอกข้อมูลติดต่อกลับ <br>
                                    <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้ ที่นี่</span>
                                </div>
                                <div class="contactform">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">ชื่อ - นามสกุล <span>*</span>
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">เบอร์โทรศัพท์ <span>*</span>
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com">
                                        <label for="floatingInput">อีเมล
                                        </label>
                                    </div>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>* ช่วงเวลาให้ติดต่อกลับ</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>

                                    <br>

                                    <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="">
                                    <br><br>
                                    <center> <button class="btn btn-primary">ส่งแบบฟอร์ม</button></center>

                                </div>
                            </div> --}}
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
                                        <th>แผนความคุ้มครองกรมธรรม์ประกันภัยธุรกิจปลอดภัย</th>
                                        <th>จำนวนเงินเอาประกันภัย / จำนวนเงินจำกัดความรับผิด (ต่อปี)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th colspan="2">หมวด 1 ประกันอัคคีภัยและภัยเพิ่มเติม (หมวดบังคับ)</th>
                                    </tr>
                                    <tr>
                                        <td>1.1 ไฟไหม้ ฟ้าผ่า ภัยระเบิด ภัยเนื่องจากน้ำ (ไม่รวมน้ำท่วม) ภัยอากาศยาน
                                            ภัยจากยวดยานพาหนะ ภัยจากควัน</td>
                                        <td>ตามความเสียหายที่แท้จริง สูงสุดไม่เกินจํานวนเงินเอาประกันภัย</td>
                                    </tr>
                                    <tr>
                                        <td>1.2 ภัยจากการนัดหยุดงาน การจลาจล หรือการกระทําอันมีเจตนาร้าย </td>
                                        <td>ตามความเสียหายที่แท้จริง สูงสุดไม่เกินจํานวนเงินเอาประกันภัย</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">ภัยขยายเพิ่มเติมภายใต้ความคุ้มครองหมวด 1</th>
                                    </tr>
                                    <tr>
                                        <td>1.3 ความสูญเสียหรือความเสียหายต่อเครื่องไฟฟ้า (EI) </td>
                                        <td>5% ของจำนวนเงินเอาประกันภัย</td>
                                    </tr>
                                    <tr>
                                        <td>1.4 ความสูญเสียหรือความเสียหายอันเกิดจากภัยธรรมชาติ ได้แก่
                                            ภัยลมพายุ / ภัยแผ่นดินไหว / ภัยลูกเห็บ / ภัยนํ้าท่วม ภัยละ</td>
                                        <td>5% ของจำนวนเงินเอาประกันภัย</td>
                                    </tr>
                                    <tr>
                                        <th>หมวด 2 เงินทดแทนการสูญเสียรายได้ สูงสุดไม่เกิน 20 วันทำการ</th>
                                        <td>5,000 บาท / วัน</td>
                                    </tr>
                                    <tr>
                                        <th>หมวด 3 การประกันภัยโจรกรรม ชิงทรัพย์ ปล้นทรัพย์ ลักทรัพย์
                                            ที่ปรากฎร่องรอยการงัดแงะต่อตัวอาคารฯ (จร.2)</th>
                                        <td>5% ของจำนวนเงินเอาประกันภัย</td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">หมวด 4 การประกันภัยสําหรับเงิน</th>
                                    </tr>
                                    <tr>
                                        <td>4.1 การประกันภัยเงินสดภายในสถานที่เอาประกันภัย </td>

                                        <td rowspan="2">รวมกันแล้วไม่เกิน 100,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:left  !important;">4.2 การประกันภัยเงินสดภายขณะขนส่ง</td>
                                    </tr>
                                    <tr>
                                        <th>หมวด 5 การประกันภัยป้ายโฆษณาและกระจกติดตั้งถาวร</th>
                                        <td>100,000 บาท</td>
                                    </tr>
                                    <tr>
                                        <th>หมวด 6 การประกันภัยความรับผิดต่อบุคคลภายนอก</th>
                                        <td>5% ของจำนวนเงินเอาประกันภัย</td>
                                    </tr>
                                    <tr>
                                        <th>หมวด 7 เงินชดเชยการเสียชีวิตจากภัยที่คุ้มครองของผู้เอาประกันภัย
                                            สมาชิกในครอบครัว และพนักงาน จากภัยไฟไหม้ ระเบิด และโจรกรรม (จร.2) ไม่เกิน 2
                                            คน</th>
                                        <td>250,000 บาท/ คน <br>
                                            ไม่เกิน 500,000 บาท / ครั้ง / ปี</td>
                                    </tr>
                                    <tr>
                                        <th>หมวด 8 ความสูญเสียหรือเสียหายของทรัพย์สินส่วนบุคคลของพนักงาน</th>
                                        <td>5,000 บาท / ครั้ง / ปี</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="readmorecondi mt-5 text-center">
@php
$business_pdf = DB::table('insurance_upload_pdf')
    ->where('insurance_download_pdf_id', '=', 1)
    ->first();
@endphp
                            <a href="@if(!empty($business_pdf) and $business_pdf->business_pdf != ''){{ asset('public/uploads/condo/'.$business_pdf->business_pdf) }}@else{{ '#' }}@endif" class="btn btn-white" @if(!empty($business_pdf) and $business_pdf->business_pdf != ''){{ 'target="_blank"' }}@endif><button class="btn btn-condition">เงื่อนไขและความคุ้มครอง กรมธรรม์ประกันภัยธุรกิจปลอดภัย
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
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันภัยธุรกิจ</span> </h5>
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
                                            <span>0{{ $i }}</span> {{ $r->business_faq_question }}

                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->business_faq_answer }}
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

    <input type="hidden" id="insurance_business_id">

    <div style="display: none;" id="contactback">
        <div class="titleTopic text-center">
            กรุณากรอกข้อมูลติดต่อกลับ <br>
            <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้ ที่นี่</span>
        </div>
        <div class="contactform">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="contact_business_name_surname"
                    placeholder="name@example.com">
                <label for="contact_business_name_surname">ชื่อ - นามสกุล <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="contact_business_tel"
                    placeholder="name@example.com">
                <label for="contact_business_tel">เบอร์โทรศัพท์ <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="contact_business_email"
                    placeholder="name@example.com">
                <label for="contact_business_email">อีเมล
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="contact_business_call"
                    placeholder="name@example.com">
                <label for="contact_business_call">ช่วงเวลาให้ติดต่อกลับ
                </label>
            </div>
            {{-- <select class="form-select" aria-label="Default select example">
                <option selected>* ช่วงเวลาให้ติดต่อกลับ</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select> --}}

            <br>

            <img src="images/captcha.png" alt="">
            <br><br>
            <center> <button class="btn btn-primary" onclick="sendForm();">ส่งแบบฟอร์ม</button></center>

        </div>
    </div>
    @include('frontend/inc_footer')

    <script>
        function contact(insurance_business_id) {
            //alert(insurance_business_id);
            $("#insurance_business_id").val(insurance_business_id);
        }

        function sendForm() {
            if($("#contact_business_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ-นามสกุล');

                $("#contact_business_name_surname").focus();
            } else if($("#contact_business_tel").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#contact_business_tel").focus();
            } else if($("#contact_business_tel").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_business_tel").val('');
                $("#contact_business_tel").focus();
            } else if($("#contact_business_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#contact_business_email").focus();
            } else if($("#contact_business_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาให้ติดต่อกลับ');

                $("#contact_business_call").focus();
            } else {
                $.post('{{ url("ajaxContactBusiness") }}', { insurance_business_id: $("#insurance_business_id").val(), contact_business_name_surname: $("#contact_business_name_surname").val(), contact_business_tel: $("#contact_business_tel").val(), contact_business_email: $("#contact_business_email").val(), contact_business_call: $("#contact_business_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อย');

                    window.location.href = '{{ url("business_insurance") }}';
                });
            }
        }
    </script>


</body>

</html>