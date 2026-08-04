<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body class="bluelight">

    <section id="petpage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประกันภัยสัตว์เลี้ยง</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันภัยสัตว์เลี้ยง</h1>
                        <p>ประกันภัยสำหรับคนรักสัตว์ ความคุ้มครองจัดเต็มให้กับสัตว์เลี้ยงแสนรัก

                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_pet.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="titleTopic">
                            <h2>ทำไมต้องซื้อประกันสัตว์เลี้ยง ?</h2>
                        </div>
                        <div class="contentbody">สัตว์เลี้ยงก็เป็นอีกหนึ่งชีวิตที่สามารถเจ็บป่วยหรือเกิดอุบัติเหตุได้
                            แต่อย่างที่เรารู้กันดีว่าค่าใช้จ่ายเรื่องค่ารักษาพยาบาลของสุนัขหรือแมวในแต่ละครั้งค่อนข้างสูง
                            ทำให้เจ้าของสัตว์เลี้ยงหลายคนเป็นกังวลในเรื่องค่าใช้จ่าย
                            แต่จะให้เลือกวิธีการที่จะเสียค่าใช้จ่ายน้อยที่สุดเพื่อรักษาและดูแลสัตว์เลี้ยงก็อาจไม่ใช่ทางเลือกที่ดีต่อสุขภาพร่างกายของสัตว์เลี้ยง
                            ฉะนั้นการวางแผนทางด้านการเงินจึงเป็นหนึ่งในสิ่งสำคัญของเจ้าของสัตว์เลี้ยง
                            ภาระค่าใช้จ่ายต่างๆ ที่จะตามมาหลังจากเลี้ยงสัตว์ไม่ได้มีเพียงค่าอาหารเท่านั้น
                            แต่ยังมีทั้งค่ารักษา ค่าวัคซีน หากสูญหายก็อาจเกิดค่าใช้จ่ายในส่วนของค่าติดตามหา
                            หรือเจ้าของสัตว์เลี้ยงต้องเดินทางไปต่างประเทศ
                            ก็มีค่าใช้จ่ายเรื่องรับฝากเลี้ยงเพิ่มเติมเข้ามา
                            <br><br>
                            การมีประกันสัตว์เลี้ยงจะทำให้การเลี้ยงสัตว์ไม่ใช่เรื่องหนักอีกต่อไป เพียงทำประกันสัตว์เลี้ยง
                            ให้ความคุ้มครองครอบคลุมทุกความต้องการของผู้เลี้ยงสุนัขและแมว
                            ช่วยให้คุณคลายกังวลในเรื่องค่าใช้จ่ายและเลือกสิ่งที่ดีที่สุดให้กับสัตว์เลี้ยงแสนรักของคุณ



                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col titleTopic">
                        <h4>แบบประกันภัยแนะนำ</h4>
                    </div>
                </div>
@if(!empty($rows))
    @foreach($rows as $r)
                <div class="row mt-3">
                    <div class="col">
                        <div class="groupinsure_recc owl-carousel owl-theme">
        @if(!empty($insurance_pet))
            @foreach($insurance_pet as $ip)
                @if($r->insurance_pet_row_id == $ip->insurance_pet_row_id)
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/uploads/insurance_pet/'.$ip->insurance_pet_image) }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>{{ $ip->insurance_pet_name }}</b> <br>
                                                        <span>แผน : {{ $ip->insurance_pet_plan}}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ number_format($ip->insurance_pet_premium_price, 0, '.', ',')}} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">ค่ารักษาจากอุบัติเหตุ</div>
                                                    <div class="col-6 text-end">{{ $ip->insurance_pet_accident }} บาท / ครั้ง</div>
                                                    <div class="col-6">ค่ารักษาจากการเจ็บป่วย</div>
                                                    <div class="col-6 text-end">{{ $ip->insurance_pet_sick }}</div>
                                                    <div class="col-6">ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง</div>
                                                    <div class="col-6 text-end">{{ $ip->insurance_pet_vaccine }}</div>
                                                    <div class="col-6">ค่าฝากเลี้ยงกรณีไปต่างประเทศ</div>
                                                    <div class="col-6 text-end">{{ $ip->insurance_pet_deposit }}</div>
                                                    <div class="col-6">บาดเจ็บคนภายนอก</div>
                                                    <div class="col-6 text-end">{{ $ip->insurance_pet_injured }}</div>
                                                    <div class="col-6">ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง</div>
                                                    <div class="col-6 text-end">{{ $ip->insurance_pet_funeral }}</div>
                                                    <div class="col-6">ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์</div>
                                                    <div class="col-6 text-end">{{ $ip->insurance_pet_property }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="contact('{{ $ip->insurance_pet_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="contact_detail('{{ $ip->insurance_pet_id }}');">
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
<div style="display: none;" id="contactback">
    <div class="titleTopic text-center">
        กรุณากรอกข้อมูลติดต่อกลับ <br>
        <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้
            ที่นี่</span>
    </div>
    <div class="contactform">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="contact_pet_name_surname"
                placeholder="name@example.com">
            <label for="contact_pet_name_surname">ชื่อ - นามสกุล <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="contact_pet_tel"
                placeholder="name@example.com">
            <label for="contact_pet_tel">เบอร์โทรศัพท์ <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="contact_pet_email"
                placeholder="name@example.com">
            <label for="contact_pet_email">อีเมล
            </label>
        </div>
        {{-- <select class="form-select" aria-label="Default select example">
            <option selected>* ช่วงเวลาให้ติดต่อกลับ</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select> --}}
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="contact_pet_call"
                placeholder="name@example.com">
            <label for="contact_pet_call">ช่วงเวลาให้ติดต่อกลับ
            </label>
        </div>

        <br>

        {{-- <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="">
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
            <input type="email" class="form-control" id="contact_pet_detail_name_surname"
                placeholder="name@example.com">
            <label for="contact_pet_detail_name_surname">ชื่อ - นามสกุล <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="contact_pet_detail_tel"
                placeholder="name@example.com">
            <label for="contact_pet_detail_tel">เบอร์โทรศัพท์ <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="contact_pet_detail_email"
                placeholder="name@example.com">
            <label for="contact_pet_detail_email">อีเมล
            </label>
        </div>
    </div>
    <br><br>
    {{-- <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid">
    <br><br> --}}
    <center> <a href="#" class="btn btn-primary"
            href="javascript:;" onclick="saveUpdatePetDetail();"> ตกลง</a></center>
</div>


            </div>
            <div class="middlesec mt-5">
                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col text-center">
                            <h3 class="pb-3">เพราะทีมงาน INSUREWISE <br> คุยง่ายให้คำปรึกษาอย่างมืออาชีพ</h3>

                        </div>
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
                        <div class="circ"><img src="{{ asset('public/frontend/images/pet_ic2.png') }}" alt=""> </div> <br>
                        <span class="bolder">ค่ารักษาพยาบาล</span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="circ"><img src="{{ asset('public/frontend/images/pet_ic1.png') }}" alt=""> </div> <br>
                        <span class="bolder">ค่าวัคซีนป้องกันโรค <br>
                            ในสุนัขและแมว</span>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="circ"><img src="{{ asset('public/frontend/images/pet_ic3.png') }}" alt=""> </div> <br>
                        <span class="bolder">ค่าชดเชยกรณีเสียชีวิตจากอุบัติเหตุ <br>
                            หรือการเจ็บป่วย

                        </span>
                    </div>
                </div>
            </div>
            <div class="faqgroup mt-5">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันภัยสัตว์เลี้ยง</span> </h5>
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
                                            <span>0{{ $i }}</span> {{ $r->pet_faq_question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->pet_faq_answer }}
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
                                            มีสถานรักษาสัตว์ในเครือที่จำเป็นต้องไปที่เหล่านั้นอย่างเดียวหรือไม่?
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
                                <input type="hidden" id="insurance_pet_id">
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

        function sendForm(insurance_pet_id) {
            if($("#contact_pet_name_surname").val() == '') {
                alert('กรุณากรอก ชื่อ - นามสกุล');

                $("#contact_pet_name_surname").focus();
            } else if($("#contact_pet_tel").val() == '') {
                alert('กรุณากรอก เบอร์โทรศัพท์');

                $("#contact_pet_tel").focus();
            } else if($("#contact_pet_tel").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_pet_tel").val('');
                $("#contact_pet_tel").focus();
            } else if($("#contact_pet_email").val() == '') {
                alert('กรุณากรอก อีเมล์');

                $("#contact_pet_email").focus();
            } else if($("#contact_pet_call").val() == '') {
                alert('กรุณากรอก ช่วงเวลาให้ติดต่อกลับ');

                $("#contact_pet_call").focus();
            } else {
                $.post('{{ url("ajaxContactPet") }}', { insurance_pet_id: $("#insurance_pet_id").val(), contact_pet_name_surname: $("#contact_pet_name_surname").val(), contact_pet_tel: $("#contact_pet_tel").val(), contact_pet_email: $("#contact_pet_email").val(), contact_pet_call: $("#contact_pet_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อยแล้ว');

                    window.location.href = '{{ url("pet_insurance") }}';
                });
            }
        }

        function saveUpdatePetDetail() {
            if($("#contact_pet_detail_name_surname").val() == '') {
                alert('กรุณากรอก ชื่อ - นามสกุล');

                $("#contact_pet_detail_name_surname").focus();
            } else if($("#contact_pet_detail_tel").val() == '') {
                alert('กรุณากรอก เบอร์โทรศัพท์');

                $("#contact_pet_detail_tel").focus();
            } else if($("#contact_pet_detail_tel").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_pet_detail_tel").val('');
                $("#contact_pet_detail_tel").focus();
            } else if($("#contact_pet_detail_email").val() == '') {
                alert('กรุณากรอก อีเมล์');

                $("#contact_pet_detail_email").focus();
            } else {
                $.post('{{ url("ajaxContactPetDetail") }}', { insurance_pet_id: $("#insurance_pet_id").val(), contact_pet_detail_name_surname: $("#contact_pet_detail_name_surname").val(), contact_pet_detail_tel: $("#contact_pet_detail_tel").val(), contact_pet_detail_email: $("#contact_pet_detail_email").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อยแล้ว');

                    window.location.href = '{{ url("pet_insurance") }}';
                });
            }
        }

        function contact(insurance_pet_id) {
            $("#insurance_pet_id").val(insurance_pet_id);
        }

        function contact_detail(insurance_pet_id) {
            $("#insurance_pet_id").val(insurance_pet_id);
        }
    </script>


</body>

</html>