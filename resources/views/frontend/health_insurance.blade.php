<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body>

    <section id="healthinsurepage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col">
                    <div class="topbgdetail">
                        <div class="wrapper_pad">
                            <div class="row">
                                <div class="col">
                                    <div class="dividepage mb-5">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="{{ url('health_insurance_landing') }}">ประกันภัยสุขภาพ </a></li>
                                                <li class="breadcrumb-item active" aria-current="page">
                                                    ผลการค้นหาประกันภัยสุขภาพ</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="bgwhiterad">
                                        <div class="healthshow">
                                            <div class="leftshowone">
                                                <div class="cirshowhead">
                                                    <img src="{{ asset('public/frontend/images/travelicon2.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="righeshowone">
                                                <h1>ข้อมูล</h1>
                                                @if(!empty($_POST['insurance_healthy_gender'])){!! '<li>เพศ "'.$_POST['insurance_healthy_gender'].'".</li>' !!}@endif
                                                @if(!empty($_POST['insurance_healthy_age'])){!! '<li>อายุ "'.$_POST['insurance_healthy_age'].'" ปี</li>' !!}@endif
                                                <li>ประกันสุขภาพ</li>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-8  mt-3 mb-5 mb-lg-0 mt-lg-0">
                                    <div class="bgwhiterad">
                                        <div class="formfilter">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label>อายุ</label>
                                                    <select class="form-select" aria-label="Default select example" id="age" onchange="changeAge(this.value);">
                                                        <option value="">-- เลือกอายุ--</option>
@for($f = 1; $f <= 100; $f++)
                                                        <option value="{{ $f }}">{{ $f }}</option>
@endfor
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label>เพศ</label>
                                                    <select class="form-select" aria-label="Default select example" id="gender" onchange="changeGender(this.value);">
                                                        <option value="">-- เลือกเพศ--</option>
                                                        <option value="ชาย">ชาย</option>
                                                        <option value="หญิง">หญิง</option>
                                                    </select>
                                                </div>


                                                <div class="col-lg-4"> <label>ประเภทประกัน</label>
                                                    <select class="form-select" aria-label="Default select example" id="type" onchange="changeType(this.value);">
                                                        <option value="">-- เลือกประกัน -- </option>
@if(!empty($type_insurance_inc))
    @foreach($type_insurance_inc as $r)
                                                        <option value="{{ $r->type_insurance_id }}">{{ $r->type_insurance_name }}</option>
    @endforeach
@endif
                                                    </select></div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col-lg-3">
                        @include('frontend/inc_healthfilter')
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                                <div class="titleTopic">
                                    <h2>ประกันภัยสุขภาพ</h2>
                                    <span class="smtext">ผลการค้นหาทั้งหมด <span id="count_insurance_healthy">{{ $count_insurance_healthy }}</span> แผนประกัน</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <div class="sortfilter">
                                    <label>เรียงจาก</label>
                                    <select class="form-select" aria-label="Default select example" id="filterOrderBy" onchange="changeOrderBy(this.value);">
                                        <option value="">กรุณาเลือก</option>
                                        <option value="price_asc">ราคาจากน้อย-มาก</option>
                                        <option value="price_desc">ราคาจากมาก-น้อย</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3" id="div_healthy_insurance">
@if(!empty($insurance_healthy))
    @foreach($insurance_healthy as $r)
                            <div class="col-6 col-lg-4">
                                <div class="healthbox">
                                    <div class="imginsu">
                                        <img src="{{ asset('public/uploads/insurance_healthy/'.$r->insurance_healthy_image) }}" alt="" class="img-fluid">
                                    </div>

                                    <div class="bgwhitecompul">
                                        <div class="boxcontent">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="logobig">
                                                        <img src="{{ asset('public/uploads/insurance_company/'.$r->insurance_company_logo) }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 text-start pt-1">
                                                    <div class="nameof">
                                                        {{ $r->insurance_company_name }} <br>
                                                        <span>{{ $r->insurance_healthy_name }}</span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="middleborder"></div>
                                            <div class="row mt-3 text-start">
                                                <div class="col-md-6">
                                                    คุ้มครองสูงสุด
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    {{ number_format($r->insurance_healthy_premium_price, 0, '.', ',') }} บาท
                                                </div>
                                                <div class="col-lg-12 mt-2 mb-2">
                                                    <span class="colorIC"><i class="fi fi-rr-social-network"></i></span>
                                                    <span class="bluecolor"> ความคุ้มครองพิเศษ</span>
                                                </div>
                                                {{-- <div class="col-lg-12 mt-1">
                                                    ลดหย่อนภาษีได้
                                                </div>
                                                <div class="col-lg-12 mt-1">
                                                    ไม่ต้องสำรองจ่าย ด้วยบัตร VIP Care Card
                                                </div>
                                                <div class="col-lg-12 mt-1">
                                                    ไม่ต้องตรวจสุขภาพ
                                                </div> --}}
                                                <div class="col-lg-12 mt-1">
                                                    {!! $r->insurance_healthy_special_cover !!}
                                                </div>
                                            </div>
                                            <div class="pricestart text-start mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        เบี้ยเริ่มต้น
                                                    </div>
                                                    <div class="col-md-6 text-md-end">
                                                        {{ number_format($r->insurance_healthy_premium_start_price, 0, '.', ',') }} ฿ ต่อปี
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-secondary" data-width="648" data-height="700"
                                                    data-fancybox data-src="#healthone" href="javascript:;"><i
                                                        class="fi fi-rr-document"></i> ดูรายละเอียด</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-primary" data-width="948" data-height="700"
                                                    data-fancybox data-src="#contactback" href="javascript:;" onclick="clickQuotationHealth('{{ $r->insurance_healthy_id }}');"><i
                                                        class="fi fi-rr-phone-call"></i> ติดต่อเจ้าหน้าที่</a>
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

        </div>
        <div style="display: none;" id="healthone">
            <div class="titleTopic text-center">
                กรุณากรอกข้อมูลเพื่อดำเนินการต่อ <br>
                <p class="smtext">กรอกแบบฟอร์มด้านล่าง</p>
            </div>
            <form method="post" action="{{ url('health_insurance') }}">
            <div class="contactform">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="healthy_contact_name_surname" >
                    <label for="healthy_contact_name_surname">ชื่อ - นามสกุล <span>*</span>
                    </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="healthy_contact_telephone">
                    <label for="healthy_contact_telephone">เบอร์โทรศัพท์ <span>*</span>
                    </label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="healthy_contact_email">
                    <label for="healthy_contact_email">อีเมล
                    </label>
                </div>
            </div>
            <br><br>
            {{-- <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid"> --}}
            {{-- {!! captcha_img() !!} <input type="text" name="captcha" value="123"> --}}
            <br><br>
            <center> <a href="#" class="btn btn-primary" data-width="648"
                    data-height="700" data-fancybox data-src="#healthtwo"
                    href="javascript:;" onclick="return saveContactInsuranceHealth();">ตกลง</a></center>
            </form>
            <div style="display: none;" id="healthtwo">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="logobig">
                                    <img src="{{ asset('public/uploads/insurance_company/'.$r->insurance_company_logo) }}" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-md-8 text-start pt-1">
                                <div class="nameofpopup">
                                    {{ $r->insurance_company_name }} <br>
                                    <span>{{ $r->insurance_healthy_name }} </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <div class="nameofpopup">
                            เบี้ยเริ่มต้น <br>
                            <span class="orangetext">{{ $r->insurance_healthy_premium_start_price }} ฿</span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="bgmoreinfo">
                            <h3><i class="fi fi-rr-comment"></i>
                                {{ $r->insurance_healthy_text1 }}</h3>
                            <div class="row">
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text1_1 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_medical) }}
                                </div>
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text1_2 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_medical_after_return_to_thai) }}
                                </div>
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text1_3 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_emergency) }}
                                </div>
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text1_4 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_daily_compensation) }}
                                </div>
                            </div>
                            <hr>
                            <h3><i class="fi fi-rr-comment"></i>
                                {{ $r->insurance_healthy_text2 }}</h3>
                            <div class="row">
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text2_1 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_case_death) }}
                                </div>
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text2_2 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_cost_of_repatriating) }}
                                </div>

                            </div>
                            <hr>
                            <h3><i class="fi fi-rr-comment"></i>
                                {{ $r->insurance_healthy_text3 }}</h3>
                            <div class="row">
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text3_1 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_flight_delay) }}
                                </div>
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text3_2 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_trip_cancel) }}
                                </div>
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text3_3 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_mising_a_flight) }}
                                </div>
                            </div>
                            <hr>
                            <h3><i class="fi fi-rr-comment"></i>
                                {{ $r->insurance_healthy_text4 }}</h3>
                            <div class="row">
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text4_1 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_lost_items) }}
                                </div>
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text4_2 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_stolen_cash) }}
                                </div>
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text4_3 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_travel_document) }}
                                </div>
                                <div class="col-md-7">
                                    {{ $r->insurance_healthy_text4_4 }}
                                </div>
                                <div class="col-md-5 text-end">
                                    {{ priceInsurewise($r->insurance_healthy_pc_notebook) }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <a href="{{ url('pdf_healthy/'.$r->insurance_healthy_id) }}" target="_blank" class="btn btn-secondary"><i
                                class="fi fi-rr-download"></i>ดาวน์โหลด PDF</a>
                        <a href="#" class="btn btn-primary" data-width="648"
                            data-height="700" data-fancybox data-src="#contact"
                            href="javascript:;"> <i class="fi fi-rr-phone-call"></i>
                            ติดต่อเจ้าหน้าที่</a>
                        <div style="display: none;" id="contact">
                            <div class="titleTopic text-center">
                            กรุณากรอกข้อมูลติดต่อกลับ<br>
                                <p class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้ ที่นี่</p>
                            </div>
                            <div class="contactform">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control"
                                        id="healthy_contact_confirm_name_surname_{{ $r->insurance_healthy_id }}" required>
                                    <label for="healthy_contact_confirm_name_surname">ชื่อ - นามสกุล
                                        <span>*</span>
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control"
                                        id="healthy_contact_confirm_telephone_{{ $r->insurance_healthy_id }}" required>
                                    <label for="healthy_contact_confirm_telephone">เบอร์โทรศัพท์
                                        <span>*</span>
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control"
                                        id="healthy_contact_confirm_email_{{ $r->insurance_healthy_id }}"  required>
                                    <label for="healthy_contact_confirm_email">อีเมล
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="healthy_contact_confirm_call_{{ $r->insurance_healthy_id }}" required>
                                    <label for="healthy_contact_confirm_call">เวลาที่สะดวกให้เราติดต่อกลับ
                                    </label>
                                </div>
                            </div>
                            {{-- <br><br>
                            <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid"> --}}
                            <br><br>
                            <center> <button
                                    class="btn btn-primary" onclick="return saveDataInsuranceHealthConfirm('{{ $r->insurance_healthy_id }}');">ส่งแบบฟอร์ม</button>
                            </center>
                        </div>
                    </div>
                </div>

            </div>

        </div>

<input type="hidden" id="insurance_healthy_id">
<div style="display: none;" id="contactback">
    <div class="titleTopic text-center">
        กรุณากรอกข้อมูลติดต่อกลับ <br>
        <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้
            ที่นี่</span>
    </div>
    <div class="contactform">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="quotation_health_name_surname"
                placeholder="name@example.com">
            <label for="quotation_health_name_surname">ชื่อ - นามสกุล <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="quotation_health_telephone"
                placeholder="name@example.com">
            <label for="quotation_health_telephone">เบอร์โทรศัพท์ <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="quotation_health_email"
                placeholder="name@example.com">
            <label for="quotation_health_email">อีเมล
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="quotation_health_call"
                placeholder="name@example.com">
            <label for="quotation_health_call">ช่วงเวลาให้ติดต่อกลับ
            </label>
        </div>

        <br>

        {{-- <img src="images/captcha.png" alt="">
        <br><br> --}}
        <center> <button class="btn btn-primary" onclick="clickSaveQuotation();">ส่งแบบฟอร์ม</button>
        </center>

    </div>
</div>

    </section>
    @include('frontend/inc_footer')

    <!-- this should go after your </body> -->
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/datetimepicker-master/jquery.datetimepicker.css') }}">
    <script src="{{ asset('public/backend/datetimepicker-master/jquery.js') }}"></script> --}}
    {{-- <script src="{{ asset('public/backend/datetimepicker-master/build/jquery.datetimepicker.full.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Handler for .ready() called.
            jQuery('#healthy_contact_confirm_call').datetimepicker();
        });
    </script> --}}

    <script>

        function saveDataInsuranceHealthConfirm(insurance_healthy_id) {
            if($("#healthy_contact_confirm_name_surname_" + insurance_healthy_id).val() == '') {
                alert('กรุณากรอก ชื่อ-นามสกุล');

                $("#healthy_contact_confirm_name_surname_" + insurance_healthy_id).focus();

                return false;
            } else if($("#healthy_contact_confirm_telephone_" + insurance_healthy_id).val() == '') {
                alert('กรุณากรอก เบอร์โทรศัพท์');

                $("#healthy_contact_confirm_telephone_" + insurance_healthy_id).focus();

                return false;
            } else if($("#healthy_contact_confirm_telephone_" + insurance_healthy_id).val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#healthy_contact_confirm_telephone_" + insurance_healthy_id).val('');
                $("#healthy_contact_confirm_telephone_" + insurance_healthy_id).focus();

                return false;
            } else if($("#healthy_contact_confirm_email_" + insurance_healthy_id).val() == '') {
                alert('กรุณากรอก อีเมล์');

                $("#healthy_contact_confirm_email_" + insurance_healthy_id).focus();

                return false;
            } else if($("#healthy_contact_confirm_call_" + insurance_healthy_id).val() == '') {
                alert('กรุณากรอก เวลาที่สะดวกให้เราติดต่อกลับ');

                $("#healthy_contact_confirm_call_" + insurance_healthy_id).focus();

                return false;
            } else {

                $.post('{{ url("ajaxSaveDataInsuranceHealthConfirm") }}', { insurance_healthy_id: insurance_healthy_id, healthy_contact_confirm_name_surname: $("#healthy_contact_confirm_name_surname_" + insurance_healthy_id).val(), healthy_contact_confirm_telephone: $("#healthy_contact_confirm_telephone_" + insurance_healthy_id).val(), healthy_contact_confirm_email: $("#healthy_contact_confirm_email_" + insurance_healthy_id).val(), healthy_contact_confirm_call: $("#healthy_contact_confirm_call_" + insurance_healthy_id).val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('Save Data Success');
                    window.location.href = '{{ url("") }}';
                });
            }
        }

        function clickQuotationHealth(insurance_healthy_id) {
            $("#insurance_healthy_id").val(insurance_healthy_id);
        }

        function clickSaveQuotation() {
            if($("#quotation_health_name_surname").val() == '') {
                alert('กรุณากรอก ชื่อ-นามสกุล');

                $("#quotation_health_name_surname").focus();

                return false;
            } else if($("#quotation_health_telephone").val() == '') {
                alert('กรุณากรอก เบอร์โทรศัพท์');

                $("#quotation_health_telephone").focus();

                return false;
            } else if($("#quotation_health_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#quotation_health_telephone").val('');
                $("#quotation_health_telephone").focus();

                return false;
            } else if($("#quotation_health_email").val() == '') {
                alert('กรุณากรอก อีเมล์');

                $("#quotation_health_email").focus();

                return false;
            } else if($("#quotation_health_call").val() == '') {
                alert('กรุณากรอก ช่วงเวลาที่ให้ติดต่อกลับ');

                $("#quotation_health_call").focus();

                return false;
            } else {

                $.post('{{ url("ajaxSaveQuotationHealth") }}', { insurance_healthy_id: $("#insurance_healthy_id").val(), quotation_health_name_surname: $("#quotation_health_name_surname").val(), quotation_health_telephone: $("#quotation_health_telephone").val(), quotation_health_email: $("#quotation_health_email").val(), quotation_health_call: $("#quotation_health_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('Save Data Success');

                    window.location.href = '{{ url("") }}';
                });
            }
        }

        function saveContactInsuranceHealth() {
            if($("#healthy_contact_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ นามสกุล');

                $("#healthy_contact_name_surname").focus();

                return false;
            } else if($("#healthy_contact_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#healthy_contact_telephone").focus();
                
                return false;
            } else if($("#healthy_contact_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#healthy_contact_telephone").val('');
                $("#healthy_contact_telephone").focus();

                return false;
            } else if($("#healthy_contact_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#healthy_contact_telephone").focus();

                return false;
            } else if($("#healthy_contact_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาให้ติดต่อกลับ');

                $("#healthy_contact_call").focus();

                return false;
            } else {
                $.post('{{ url("ajaxSaveContactHealth") }}', { insurance_healthy_id: $("#insurance_healthy_id").val(), healthy_contact_name_surname: $("#healthy_contact_name_surname").val(), healthy_contact_telephone: $("#healthy_contact_telephone").val(), healthy_contact_email: $("#healthy_contact_email").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('Save Data Success');

                    // window.location.href = '{{ url("health_insurance") }}';
                });
            }
        }
    </script>
</body>

</html>