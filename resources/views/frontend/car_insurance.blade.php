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
                                                <li class="breadcrumb-item"><a href="#">ประกันภัยรถยนต์ </a></li>
                                                <li class="breadcrumb-item active" aria-current="page">
                                                    เช็คเบี้ยประกันรถยนต์</li>
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
                                                    <img src="{{ asset('public/frontend/images/compul_icon1.png') }}" alt="">
                                                </div>
                                            </div>
                                            <div class="righeshowone">
                                                <h1>ข้อมูลรถ</h1>
                                                @if(!empty($txt_brand_car)){!! '<li>'.$txt_brand_car->brand_car_name.'</li>' !!}@endif
                                                @if(!empty($txt_model_car)){!! '<li>'.$txt_model_car->model_car_name.'</li>' !!}@endif
                                                @if(!empty($txt_year_car)){!! '<li>ปี '.$txt_year_car->year_car_name.'</li>' !!}@endif
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-8  mt-3 mb-5 mb-lg-0 mt-lg-0">
                                    <div class="bgwhiterad">
                                        <div class="formfilter">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label>ยี่ห้อรถ</label>
                                                    <select class="form-select" id="brand_car" aria-label="Default select example" onchange="checkBrandCar(this.value);">
                                                        <option value="">-- กรุณาเลือก --</option>
@if(!empty($brand_car))
    @foreach($brand_car as $r)
                                                        <option value="{{ $r->brand_car_id }}">{{ $r->brand_car_name }}</option>
    @endforeach
@endif
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>รุ่นรถ</label>
                                                    <select class="form-select" id="model_car" aria-label="Default select example" onchange="checkModelCar(this.value);">
                                                        <option value="">-- กรุณาเลือก --</option>
{{-- @if(!empty($model_car))
    @foreach($model_car as $r)
                                                        <option value="{{ $r->model_car_id }}">{{ $r->model_car_name }}</option>
    @endforeach
@endif --}}
                                                    </select>
                                                </div>


                                                <div class="col-lg-3">
                                                    <label>รุ่นย่อย/cc</label>
                                                    <select class="form-select" id="sub_model_car" aria-label="Default select example" onchange="checkSubModelCar(this.value);">
                                                        <option value="">-- กรุณาเลือก -- </option>
{{-- @if(!empty($sub_model_car))
    @foreach($sub_model_car as $r)
                                                        <option value="{{ $r->sub_model_car_id }}">{{ $r->sub_model_car_name }}</option>
    @endforeach
@endif --}}
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>ปีรถยนต์</label>
                                                    <select class="form-select" id="year_car" aria-label="Default select example" onchange="checkYearCar(this.value);">
                                                        <option value="">-- กรุณาเลือก -- </option>
@if(!empty($year_car))
    @foreach($year_car as $r)
                                                        <option value="{{ $r->year_car_id }}">{{ $r->year_car_name }}</option>
    @endforeach
@endif
                                                    </select>
                                                </div>

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
                        @include('frontend/inc_carfilter')
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-md-8 col-lg-9">
                                <div class="titleTopic">
                                    <h2>ประกันรถยนต์สำหรับคุณ</h2>
                                    <span class="smtext">ผลการค้นหาทั้งหมด <span class="rows_car">{{ $count_insurance_car }}</span> แผนประกัน</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <div class="sortfilter">
                                    <label>เรียงจาก</label>
                                    <select class="form-select" aria-label="Default select example" id="price_order_by" onchange="changePrice(this.value);">
                                        <option value="">กรุณาเลือก</option>
                                        <option value="price_asc">ราคาจากน้อย - มาก</option>
                                        <option value="price_desc">ราคาจากมาก - น้อย</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 div_insurance_car">
@if(!empty($insurance_car))
    @foreach($insurance_car as $r)
        @php
        $insurance_company = DB::table('insurance_company')
            ->where('insurance_company_id', '=', $r->insurance_company_id)
            ->first();

        $level_car = DB::table('level_car')
            ->where('level_car_id', '=', $r->level_car_id)
            ->first();

        @endphp
                            <div class="col-6 col-lg-4">
                                <div class="carbox">
                                    <div class="bluecompare">
                                        เปรียบเทียบ
                                    </div>

                                    <div class="bgwhitecompul">
                                        <div class="boxcontent">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="logobig">
                                                        <img src="{{ asset('public/uploads/insurance_company/'.$insurance_company->insurance_company_logo) }}" class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-md-8 text-start pt-1">
                                                    <div class="nameof">
                                                        {{ $insurance_company->insurance_company_name }} <br>
                                                        <span>{{ $level_car->level_car_name }} </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="middleborder"></div>
                                            <div class="row mt-3 text-start">
                                                <div class="col-md-6">
                                                    {{ $r->insurance_car_text1 }}
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    {{ $r->insurance_car_premium_price }}
                                                </div>
                                                <div class="col-md-6">
                                                    {{ $r->insurance_car_text2 }}
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    {{ $r->insurance_car_lost_fire_price }}
                                                </div>
                                                <div class="col-md-6">
                                                    {{ $r->insurance_car_text4 }}
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    {{ $r->insurance_car_equiment_damage_price }}
                                                </div>
                                                <div class="col-md-6">
                                                    {{ $r->insurance_car_text5 }}
                                                </div>
                                                <div class="col-md-6 text-md-end">
                                                    {{ $r->insurance_car_first_damage_price }}
                                                </div>

                                            </div>
                                            <div class="pricestart text-start mt-3">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        เบี้ยประกัน
                                                    </div>
                                                    <div class="col-md-6 text-md-end">
                                                        {{ $r->insurance_car_price }} บาท
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-0">
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-secondary" data-width="648" data-height="700"
                                                    data-fancybox data-src="#healthone" href="javascript:void(0);" onclick="setInsuranceCarID('{{ $r->insurance_car_id }}')"><i
                                                        class="fi fi-rr-document"></i> ดูรายละเอียด</a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#" class="btn btn-primary" data-width="948" data-height="700" data-fancybox data-src="#contactback" href="javascript:;" onclick="clickQuotationCar('{{ $r->insurance_car_id }}')"><i class="fi fi-rr-edit"></i> ขอใบเสนอราคา</a>
                                            </div>
                                        </div>

                                        <div style="display: none;" id="healthone">
                                            <div class="titleTopic text-center">
                                                กรุณากรอกข้อมูลเพื่อดำเนินการต่อ <br>
                                                <p class="smtext">กรอกแบบฟอร์มด้านล่าง</p>
                                            </div>
                                            <div class="contactform">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="contact_car_name_surname_{{ $r->insurance_car_id }}">
                                                    <label for="contact_car_name_surname_{{ $r->insurance_car_id }}">ชื่อ - นามสกุล <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="contact_car_telephone_{{ $r->insurance_car_id }}">
                                                    <label for="contact_car_telephone_{{ $r->insurance_car_id }}">เบอร์โทรศัพท์ <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="contact_car_email_{{ $r->insurance_car_id }}">
                                                    <label for="contact_car_email_{{ $r->insurance_car_id }}">อีเมล
                                                    </label>
                                                </div>
                                            </div>
                                            <br><br>
                                            {{-- <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid">
                                            <br><br> --}}
                                            <center> <a href="#" class="btn btn-primary" data-width="648" data-height="700" data-fancybox data-src="#healthtwo"
                                                    href="javascript:;" onclick="return saveUpdateContactCar('{{ $r->insurance_car_id }}');"> ตกลง</a></center>
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
    </section>

    <input type="hidden" id="insurance_car_id">
    <div style="display: none;" id="contactback">
        <div class="titleTopic text-center">
            กรุณากรอกข้อมูลติดต่อกลับ <br>
            <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้
                ที่นี่</span>
        </div>
        <div class="contactform">
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="quotation_car_name_surname"
                    placeholder="name@example.com">
                <label for="quotation_car_name_surname">ชื่อ - นามสกุล <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="quotation_car_telephone"
                    placeholder="name@example.com">
                <label for="quotation_car_telephone">เบอร์โทรศัพท์ <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="quotation_car_email"
                    placeholder="name@example.com">
                <label for="quotation_car_email">อีเมล
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="quotation_car_call"
                    placeholder="name@example.com">
                <label for="quotation_car_call">* ช่วงเวลาให้ติดต่อกลับ
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
            <center> <button class="btn btn-primary" onclick="sendQuotationCar();">ส่งแบบฟอร์ม</button>
            </center>
        </div>
    </div>
    
    <div style="display: none;" id="healthtwo">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logobig">
                            <img src="{{ asset('public/uploads/insurance_company/'.@$r->insurance_company_logo) }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 text-start pt-1">
                        <div class="nameofpopup">
                            {{ @$r->insurance_company_name }} <br>
                            <span>{{ @$r->insurance_car_name }} </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-end">
                <div class="nameofpopup">
                    เบี้ยเริ่มต้น <br>
                    <span class="orangetext">{{ @$r->insurance_car_price }} ฿</span>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <div class="bgmoreinfo">
                    <h3><i class="fi fi-rr-comment"></i>
                        {{ @$r->insurance_car_text1 }}</h3>
                    <div class="row">
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text1_1 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value1_1) }}
                        </div>
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text1_2 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value1_2) }}
                        </div>
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text1_3 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value1_3) }}
                        </div>
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text1_4 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value1_4) }}
                        </div>
                    </div>
                    <hr>
                    <h3><i class="fi fi-rr-comment"></i>
                        {{ @$r->insurance_car_text2 }}</h3>
                    <div class="row">
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text2_1 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value2_1) }}
                        </div>
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text2_2 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value2_2) }}
                        </div>
    
                    </div>
                    <hr>
                    <h3><i class="fi fi-rr-comment"></i>
                        {{ @$r->insurance_car_text3 }}</h3>
                    <div class="row">
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text3_1 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value3_1) }}
                        </div>
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text3_2 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value3_2) }}
                        </div>
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text3_3 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value3_3) }}
                        </div>
                    </div>
                    <hr>
                    <h3><i class="fi fi-rr-comment"></i>
                        {{ @$r->insurance_car_text4 }}</h3>
                    <div class="row">
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text4_1 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value4_1) }}
                        </div>
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text4_2 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value4_2) }}
                        </div>
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text4_3 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value4_3) }}
                        </div>
                        <div class="col-md-7">
                            {{ @$r->insureance_car_text4_4 }}
                        </div>
                        <div class="col-md-5 text-end">
                            {{ @priceInsurewise($r->insureance_car_value4_4) }}
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <a href="{{ url('pdf_car/'.@$r->insurance_car_id) }}" target="_blank" class="btn btn-secondary"><i
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
                                id="car_contact_confirm_name_surname" required>
                            <label for="car_contact_confirm_name_surname">ชื่อ - นามสกุล
                                <span>*</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control"
                                id="car_contact_confirm_telephone" required>
                            <label for="car_contact_confirm_telephone">เบอร์โทรศัพท์
                                <span>*</span>
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control"
                                id="car_contact_confirm_email"  required>
                            <label for="car_contact_confirm_email">อีเมล
                            </label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="car_contact_confirm_call" required>
                            <label for="car_contact_confirm_call">เวลาที่สะดวกให้เราติดต่อกลับ
                            </label>
                        </div>
                    </div>
                    {{-- <br><br>
                    <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid"> --}}
                    <br><br>
                    <center> <button
                            class="btn btn-primary" onclick="return saveDataInsuranceCarConfirm('{{ @$r->insurance_car_id }}');">ส่งแบบฟอร์ม</button>
                    </center>
                </div>
            </div>
        </div>
    </div>

    @include('frontend/inc_footer')

    <script>
        function saveUpdateContactCar(insurance_car_id) {
            if($("#contact_car_name_surname_" + insurance_car_id).val() == '') {
                alert('กรุณากรอกชื่อ-นามสกุล');

                $("#contact_car_name_surname_" + insurance_car_id).focus();

                return false;
            } else if($("#contact_car_telephone_" + insurance_car_id).val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#contact_car_telephone_" + insurance_car_id).focus();

                return false;
            } else if($("#contact_car_telephone_" + insurance_car_id).val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_car_telephone_" + insurance_car_id).val('');
                $("#contact_car_telephone_" + insurance_car_id).focus();

                return false;
            } else if($("#contact_car_email_" + insurance_car_id).val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#contact_car_email_" + insurance_car_id).focus();

                return false;
            } else {
                $.post('{{ url("ajaxSaveContactCar") }}', { contact_car_name_surname: $("#contact_car_name_surname_" + insurance_car_id).val(), contact_car_telephone: $("#contact_car_telephone_" + insurance_car_id).val(), contact_car_email: $("#contact_car_email_" + insurance_car_id).val(), must_last_click: 'must_last_click', "_token": "{{ csrf_token() }}" }, function(data) {
                    // $('#healthtwo').show();
                    
                    alert("Save Data Success");
                    
                    // window.location.href='{{ url("car_insurance") }}';
                });
            }
        }

        function checkBrandCar(brand_car_id) {
            $.post('{{ url("ajaxFilterProductCar") }}', { brand_car_id: brand_car_id, "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');
                $(".div_insurance_car").html(data_split[0]);

                $("#model_car").html(data_split[1]);

                $(".rows_car").text(data_split[2]);
            });
        }

        function checkModelCar(model_car_id) {
            $.post('{{ url("ajaxFilterProductCar") }}', { model_car_id: model_car_id, "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $(".div_insurance_car").html(data_split[0]);

                $("#sub_model_car").html(data_split[1]);

                $(".rows_car").text(data_split[2]);
            });
        }

        function checkSubModelCar(sub_model_car_id) {
            $.post('{{ url("ajaxFilterProductCar") }}', { sub_model_car_id: sub_model_car_id, "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $(".div_insurance_car").html(data_split[0]);

                $(".rows_car").text(data_split[2]);
            });
        }

        function checkYearCar(year_car_id) {
            $.post('{{ url("ajaxFilterProductCar") }}', { year_car_id: year_car_id, "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');
                
                $(".div_insurance_car").html(data_split[0]);

                $(".rows_car").text(data_split[2]);
            });
        }

        function clickQuotationCar(insurance_car_id) {
            //alert(insurance_car_id);

            $("#insurance_car_id").val(insurance_car_id);
        }

        function sendQuotationCar(insurance_car_id) {
            // alert($("#insurance_car_id").val());

            if($("#quotation_car_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ-นามสกุล');

                $("#quotation_car_name_surname").focus();
            } else if($("#quotation_car_telephone").val().length != '10') {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#quotation_car_telephone").val('');
                $("#quotation_car_telephone").focus();
            } else if($("#quotation_car_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#quotation_car_telephone").focus();
            } else if($("#quotation_car_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#quotation_car_email").focus();
            } else if($("#quotation_car_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาให้ติดต่อกลับ');

                $("#quotation_car_call").focus();
            } else {
                $.post('{{ url("ajaxSaveQuotationCar") }}', { insurance_car_id: $("#insurance_car_id").val(), quotation_car_name_surname: $("#quotation_car_name_surname").val(), quotation_car_telephone: $("#quotation_car_telephone").val(), quotation_car_email: $("#quotation_car_email").val(), quotation_car_call: $("#quotation_car_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert("Save Data Success");

                    window.location.href='{{ url("") }}';
                });
            }
        }

        function saveDataInsuranceCarConfirm() {
            if($("#car_contact_confirm_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ นามสกุล');

                $("#car_contact_confirm_name_surname").focus();
            } else if($("#car_contact_confirm_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#car_contact_confirm_telephone").focus();
            } else if($("#car_contact_confirm_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#car_contact_confirm_telephone").val('');
                $("#car_contact_confirm_telephone").focus();
            } else if($("#car_contact_confirm_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#car_contact_confirm_email").focus();
            } else if($("#car_contact_confirm_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาที่ให้ติดต่อกลับ');

                $("#car_contact_confirm_call").focus();
            } else {
                // alert($("#insurance_car_id").val());

                $.post('{{ url("ajaxSaveQuotationConfirmCar") }}', { insurance_car_id: $("#insurance_car_id").val(), car_contact_confirm_name_surname: $("#car_contact_confirm_name_surname").val(), car_contact_confirm_telephone: $("#car_contact_confirm_telephone").val(), car_contact_confirm_email: $("#car_contact_confirm_email").val(), car_contact_confirm_call: $("#car_contact_confirm_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert("Save Data Success");

                    window.location.href='{{ url("") }}';
                });
            }
        }

        function saveDataInsuranceCarConfirm2() {

            if($("#car_contact_confirm_name_surname2").val() == '') {
                alert('กรุณากรอกชื่อ นามสกุล');

                $("#car_contact_confirm_name_surname2").focus();
            } else if($("#car_contact_confirm_telephone2").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#car_contact_confirm_telephone2").focus();
            } else if($("#car_contact_confirm_telephone2").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#car_contact_confirm_telephone2").val('');
                $("#car_contact_confirm_telephone2").focus();
            } else if($("#car_contact_confirm_email2").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#car_contact_confirm_email2").focus();
            } else if($("#car_contact_confirm_call2").val() == '') {
                alert('กรุณากรอกช่วงเวลาที่ให้ติดต่อกลับ');

                $("#car_contact_confirm_call2").focus();
            } else {
                // alert($("#insurance_car_id").val());

                $.post('{{ url("ajaxSaveQuotationConfirmCar") }}', { insurance_car_id: $("#insurance_car_id").val(), car_contact_confirm_name_surname: $("#car_contact_confirm_name_surname2").val(), car_contact_confirm_telephone: $("#car_contact_confirm_telephone2").val(), car_contact_confirm_email: $("#car_contact_confirm_email2").val(), car_contact_confirm_call: $("#car_contact_confirm_call2").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert("Save Data Success");

                    window.location.href='{{ url("") }}';
                });
            }
        }

        function setInsuranceCarID(insurance_car_id) {
            // alert(insurance_car_id);
            $("#insurance_car_id").val(insurance_car_id);
        }
    </script>

</body>

</html>