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
                                    <li class="breadcrumb-item active" aria-current="page">ประกันอะไหล่รถยนต์</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันอะไหล่รถยนต์</h1>
                        <p>ให้การดูแลรถเป็นเรื่องง่าย กับความคุ้มครองที่มากกว่า ซ่อมศูนย์ ไม่ต้องตรวจสภาพรถ จะเสีย
                            จะซ่อม ก็สบายกระเป๋า
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_extended.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">

                <div class="row mt-5 mb-5">
                    <div class="col text-center">
                        <div class="titleTopic">
                            <h2>แผนความคุ้มครอง แบบย่อ
                            </h2>
                        </div>
                        <div class="contentbody">ประกันอะไหล่รถยนต์ (Extended Warranty) มีแผนความคุ้มครองให้เลือก 3 แผน
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row mt-3 mb-5">
@if(!empty($extended))
    @foreach($extended as $r)
                            <div class="col-lg-4">
                                <div class="groupcompul">
                                    <h6> แผน {{ $r->extended_insurance_plan }}</h6>
                                    <div class="bgwhitecompul">
                                        <div class="price">{{ number_format($r->extended_insurance_premium_price, 0, '.', ',')}} บาท/ปี</div>
                                        <hr>

                                        <div class="row mt-3 text-start">
                                            <div class="col-md-6">
                                                อัคคีภัย
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                {{ $r->extended_insurance_fire }}
                                            </div>

                                            <div class="col-md-6">
                                                เงินทดแทนรายได้ <br>
                                                {{-- {{ $r->extended_insurance_maximum }} --}}
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                {{ $r->extended_insurance_money_salary }} บาท*
                                            </div>
                                            <div class="col-md-6">
                                                ประกันเงินสด
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                {{ $r->extended_insurance_money }} บาท
                                            </div>
                                            <div class="col-md-6">
                                                เงินชดเชยเสียชีวิต
                                            </div>
                                            <div class="col-md-6 text-md-end">
                                                {{ $r->extended_insurance_die }} ต่อคน*
                                            </div>
                                        </div>
                                        <br>
                                        <a href="#" class="btn btn-secondary" data-width="948" data-height="700"
                                            data-fancybox data-src="#contactback" href="javascript:;" onclick="contact('{{ $r->extended_insurance_id }}');"><i
                                                class="fi fi-rr-phone-call"></i> ติดต่อเจ้าหน้าที่</a>

                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                            {{-- <div class="col-lg-4 mt-3 mt-lg-0">
                                <div class="groupcompul">
                                    <h6> แผน Plus</h6>
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
                            <div class="col-lg-4  mt-3 mt-lg-0">
                                <div class="groupcompul">
                                    <h6> แผน Premium</h6>
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
                            </div> --}}
                            <input type="hidden" id="extended_insurance_id">
                            <div style="display: none;" id="contactback">
                                <div class="titleTopic text-center">
                                    กรุณากรอกข้อมูลติดต่อกลับ <br>
                                    <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้ ที่นี่</span>
                                </div>
                                <div class="contactform">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="contact_extended_name_surname"
                                            placeholder="name@example.com">
                                        <label for="contact_extended_name_surname">ชื่อ - นามสกุล <span>*</span>
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="number" class="form-control" id="contact_extended_tel"
                                            placeholder="name@example.com">
                                        <label for="contact_extended_tel">เบอร์โทรศัพท์ <span>*</span>
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="contact_extended_email"
                                            placeholder="name@example.com">
                                        <label for="contact_extended_email">อีเมล
                                        </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="contact_extended_call"
                                            placeholder="name@example.com">
                                        <label for="contact_extended_call">* ช่วงเวลาให้ติดต่อกลับ
                                        </label>
                                    </div>

                                    <br>

                                    {{-- <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="">
                                    <br><br> --}}
                                    <center> <button class="btn btn-primary" onclick="saveUpdateExtended();">ส่งแบบฟอร์ม</button></center>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col titleTopic text-center">
                        <h4>จุดเด่นของผลิตภัณฑ์</h4>
                    </div>
                </div>
                <div class="row mt-5 fromtopandbttwo">
                    <div class="col-lg-4 text-center">
                        <div class="circ"><img src="{{ asset('public/frontend/images/healthicon1.png') }}" alt=""> </div> <br>
                        <span class="bolder">
                            <b>หมดกังวลกับค่าใช้จ่ายก้อนโต </b>
                            <br> จะกี่ร้อยอะไหล่ที่เสียเราซ่อมให้</span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="circ"><img src="{{ asset('public/frontend/images/healthicon2.png') }}" alt=""> </div> <br>
                        <span class="bolder"><b>ไม่จำกัดจำนวนครั้ง*</b> <br>ในการซ่อม
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="circ"><img src="{{ asset('public/frontend/images/healthicon3.png') }}" alt=""> </div> <br>
                        <span class="bolder"><b>รถเสีย เข้าซ่อมศูนย์</b> <br> รับบริการที่ได้มาตรฐาน
                            ที่ศูนย์บริการคู่สัญญา
                        </span>
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
                            <table class="table extendedgroup table-bordered">
                                <thead>
                                    <tr>
                                        <th>ผลประโยชน์ความคุ้มครอง</th>
                                        <th>Standard</th>
                                        <th>Plus</th>
                                        <th>Premium</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th colspan="2">รายละเอียดความคุ้มครองอะไหล่หลัก</th>
                                    </tr>
                                    <tr>
                                        <th>1.เครื่องยนต์</th>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>

                                    </tr>
                                    <tr>
                                        <th>2.ชุดเฟืองท้าย แลพเพลากลาง</th>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>3.ระบบเกียร์ </th>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>4.ระบบส่งกำลัง</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>5.ระบบบังคับเลี้ยว</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>6.ระบบน้ำมันเชื้อเพลิง</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>7.ระบบไฟฟ้า</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>8.ระบบปรับอากาศ</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>9.ระบบเบรก </th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>10.ระบบไอเสีย</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>11.ระบบหล่อเย็น</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>12.ระบบความปลอดภัย</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>13.ระบบอำนวยความสะดวก</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th>14.ระบบรองรับน้ำหนัก</th>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-rr-minus"></i></td>
                                        <td class="text-center"><i class="fi fi-sr-shield-check"></i></td>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th class="text-center sumbot">3 กลุ่มอะไหล่หลัก <br> 102 รายการ</th>
                                        <th class="text-center sumbot">8 กลุ่มอะไหล่หลัก <br> 205 รายการ</th>
                                        <th class="text-center sumbot">14 กลุ่มอะไหล่หลัก <br> 278 รายการ</th>
                                    </tr>
                                  


                                </tbody>
                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="faqgroup mt-5">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันอะไหล่รถยนต์</span> </h5>
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
                                            data-bs-target="#collapse{{ $i }}" aria-expanded="@if($i == 1){{ 'true' }}@else{{ 'false'}}@endif"
                                            aria-controls="collapse{{ $i }}">
                                            <span>0{{ $i }}</span> {{ $r->extended_faq_question }}

                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->extended_faq_answer }}
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
                                            คุ้มครองรถประเภทใดบ้าง และมีการตรวจเช็คสภาพรถก่อนซื้อประกันหรือไม่
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
    @include('frontend/inc_footer')

    <script>
        function contact(extended_insurance_id) {
            $("#extended_insurance_id").val(extended_insurance_id);
        }

        function saveUpdateExtended() {
            if($("#contact_extended_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ - นามสกุล');

                $("#contact_extended_name_surname").focus();
            } else if($("#contact_extended_tel").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#contact_extended_tel").focus();
            } else if($("#contact_extended_tel").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_extended_tel").val('');
                $("#contact_extended_tel").focus();
            } else if($("#contact_extended_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#contact_extended_email").focus();
            } else if($("#contact_extended_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาให้ติดต่อกลับ');

                $("#contact_extended_call").focus();
            } else {
                $.post('{{ url("ajaxContactExtended") }}', { insurance_extended_id: $("#extended_insurance_id").val(), contact_extended_name_surname: $("#contact_extended_name_surname").val(), contact_extended_tel: $("#contact_extended_tel").val(), contact_extended_email: $("#contact_extended_email").val(), contact_extended_call: $("#contact_extended_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อย');

                    window.location.href = '{{ url("extended_insurance") }}';
                });
            }
        }
    </script>


</body>

</html>