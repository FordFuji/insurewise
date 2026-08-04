<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    @include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body class="bluelight">

    <section id="homeinsurancepage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-md-6 col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประกันภัยคอนโด
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันภัยคอนโด</h1>
                        <p>ดูแลครอบคลุม ทั้งคอนโดและทรัพย์สินภายในคอนโด</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_condo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="titleTopic">
                            <h2>ทำไมต้องทำประกันภัยสำหรับคอนโด</h2>
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
@if(!empty($rows))
    @foreach($rows as $row)
                <div class="row mt-3">
                    <div class="col">
                        <div class="groupinsure_recc owl-carousel owl-theme">
        @if(!empty($insurance))
            @foreach($insurance as $r)
                @if($row->insurance_condo_row_id == $r->insurance_condo_row_id)
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/uploads/insurance_condo/'.$r->insurance_condo_image) }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>{{ $r->insurance_condo_name }}</b> <br>
                                                        <span>แผน : {{ $r->insurance_condo_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($r->insurance_condo_premium_price, 0, '.', ',') }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $r->insurance_condo_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_condo_accident }} บาท / ครั้ง</div>
                                                    <div class="col-6">{{ $r->insurance_condo_text2 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_condo_sick }}</div>
                                                    <div class="col-6">{{ $r->insurance_condo_text3 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_condo_vaccine }}</div>
                                                    <div class="col-6">{{ $r->insurance_condo_text4 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_condo_deposit }}</div>
                                                    <div class="col-6">{{ $r->insurance_condo_text5 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_condo_injured }}</div>
                                                    <div class="col-6">{{ $r->insurance_condo_text6 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_condo_funeral }}</div>
                                                    <div class="col-6">{{ $r->insurance_condo_text7 }}</div>
                                                    <div class="col-6 text-end">{{ $r->insurance_condo_property }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="contact('{{ $r->insurance_condo_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="contactDetail('{{ $r->insurance_condo_id }}');">
                                                        <i class="fi fi-rr-document"></i>
                                                        ดูรายละเอียด</a></li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                @endif
            @endforeach
        @endif
    
                        </div>
                    </div>
                </div>
    @endforeach
@endif
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
            <div class="middlesec">
                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="pb-3">เงื่อนไขและความคุ้มครอง </h3>
                            <a href="@if(!empty($condo_pdf) and $condo_pdf->condo_pdf_file != ''){{ asset('public/uploads/condo/'.$condo_pdf->condo_pdf_file) }}@else{{ '#' }}@endif" class="btn btn-white" @if(!empty($condo_pdf) and $condo_pdf->condo_pdf_file != ''){{ 'target="_blank"' }}@endif><i class="fi fi-rr-download"></i> ดาวน์โหลดเงื่อนไข</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faqgroup">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันภัยคอนโด</span>
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
                                            data-bs-target="#collapse{{ $i }}" aria-expanded="@if($i == 1) {{ 'true' }}@else{{ 'false' }}@endif"
                                            aria-controls="collapse{{ $i }}">
                                            <span>0{{ $i }}</span> {{ $r->condo_faq_question }}

                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->condo_faq_answer }}
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
                                <input type="hidden" id="insurance_condo_id">
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
                <input type="text" class="form-control" id="contact_condo_name_surname">
                <label for="contact_condo_name_surname}">ชื่อ - นามสกุล <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="contact_condo_telephone">
                <label for="contact_condo_telephone">เบอร์โทรศัพท์ <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="contact_condo_email">
                <label for="contact_condo_email">อีเมล
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="contact_condo_call">
                <label for="contact_condo_call">ช่วงเวลาให้ติดต่อกลับ
                </label>
            </div>

            <br>

            {{-- <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="">
            <br><br> --}}
            <center> <button class="btn btn-primary" onclick="saveUpdateContactCondo();">ส่งแบบฟอร์ม</button>
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
                <input type="email" class="form-control" id="contact_condo_detail_name_surname"
                    placeholder="name@example.com">
                <label for="contact_condo_detail_name_surname">ชื่อ - นามสกุล <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="contact_condo_detail_telephone"
                    placeholder="name@example.com">
                <label for="contact_condo_detail_telephone">เบอร์โทรศัพท์ <span>*</span>
                </label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="contact_condo_detail_email"
                    placeholder="name@example.com">
                <label for="contact_condo_detail_email">อีเมล
                </label>
            </div>
        </div>
        {{-- <br><br>
        <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid"> --}}
        <br><br>
        <center> <a href="#" class="btn btn-primary"
                href="javascript:;" onclick="saveUpdateDetailContactCondo();"> ตกลง</a></center>
    </div>
    @include('frontend/inc_footer')
    
    <script>
        function contact(insurance_condo_id) {
            //alert(insurance_condo_id);
            $("#insurance_condo_id").val(insurance_condo_id);
        }

        function contactDetail(insurance_condo_id) {
            $("#insurance_condo_id").val(insurance_condo_id);
        }

        function saveUpdateContactCondo() {
            
            if($("#contact_condo_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ - นามสกุล');

                $("#contact_condo_name_surname").focus();
            } else if($("#contact_condo_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#contact_condo_telephone").focus();
            } else if($("#contact_condo_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_condo_telephone").val('');
                $("#contact_condo_telephone").focus();
            } else if($("#contact_condo_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#contact_condo_email").focus();
            } else if($("#contact_condo_call").val() == '') {
                alert('กรุณากรอกช่วงเวลาให้ติดต่อกลับ');

                $("#contact_condo_call").focus();
            } else {
                $.post('{{ url("ajaxSaveContactCondo") }}', { insurance_condo_id: $("#insurance_condo_id").val(), contact_condo_name_surname: $("#contact_condo_name_surname").val(), contact_condo_telephone: $("#contact_condo_telephone").val(), contact_condo_email: $("#contact_condo_email").val(), contact_condo_call: $("#contact_condo_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('แจ้งติดต่อเจ้าหน้าที่แล้ว');

                    window.location.href = '{{ url("condo_insurance") }}';
                });
            }
        }

        function saveUpdateDetailContactCondo() {
            if($("#contact_condo_detail_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ - นามสกุล');

                $("#contact_condo_detail_name_surname").focus();
            } else if($("#contact_condo_detail_telephone").val() == '') {
                alert('กรุณากรอกเบอร์โทรศัพท์');

                $("#contact_condo_detail_telephone").focus();
            } else if($("#contact_condo_detail_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_condo_detail_telephone").val('');
                $("#contact_condo_detail_telephone").focus();
            } else if($("#contact_condo_detail_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#contact_condo_detail_email").focus();
            } else {
                $.post('{{ url("ajaxSaveContactCondoDetail") }}', { insurance_condo_id: $("#insurance_condo_id").val(), contact_condo_detail_name_surname: $("#contact_condo_detail_name_surname").val(), contact_condo_detail_telephone: $("#contact_condo_detail_telephone").val(), contact_condo_detail_email: $("#contact_condo_detail_email").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('แจ้งติดต่อเจ้าหน้าที่แล้ว');

                    window.location.href = '{{ url("condo_insurance") }}';
                });
            }
        }
    </script>

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
        });
    </script>



</body>

</html>