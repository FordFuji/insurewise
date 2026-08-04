<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')
    <section id="contactpage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row" data-aos="fade-down" data-aos-once="true">
                <div class="col">
                    <div class="bannerpages">
                        <img src="{{ asset('public/frontend/images/banner_contact.png') }}" class="img-fluid" alt="">
                        <div class="captionBannereach">
                            <div class="dividepage mb-5">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                        <li class="breadcrumb-item active" aria-current="page">ติดต่อเรา
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <h1>ติดต่อเรา</h1>
                            <h2>ติดต่อสอบถามข้อมูลเพิ่มเติม</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contactdetail mt-5">
                            <div class="titleTopic">
                                <h3>บริษัท อินชัวร์ไวส์ โบรกเกอร์ จำกัด</h3>
                            </div>
                            <div class="mt-4">
                                <div class="ic_info"><i class="fi fi-rr-marker"></i></div>
                                <div class="infocontent">
                                    99/385 อาคารแจ้งวัฒนะ (อาคารบี) ชั้น3 หมู่ที่ 2 <br>
                                    ถนนแจ้งวัฒนะ แขวงทุ่งสองห้อง เขตหลักสี่ <br>
                                    กรุงเทพมหานคร
                                </div>
                                <br><br><br>
                                <div class="ic_info"><i class="fi fi-rr-phone-call"></i></div>
                                <div class="infocontent">
                                    02-573-0131-2
                                </div>
                            </div>

                            <ul class="social_link mt-5">
                                <li><a href="https://www.facebook.com/Insurewisebroker99" target="_blank"><i class="fi fi-brands-facebook"></i></a></li>
                                <li><a href="https://lin.ee/riUTg6x" target="_blank"><i class="fi fi-brands-line"></i></a></li>
                                <li><a href="https://www.instagram.com/insurewisebroker99/" target="_blank"><i class="fi fi-brands-instagram"></i></a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bgwhiterad mt-5 mt-lg-0">
                            <div class="titleTopic text-center">
                                <h4>หากคุณสนใจ <span class="orangetext">นัดคุยกับเราได้เลย</span> </h4>
                                <p>กรอกแบบฟอร์มนัดหมาย ให้เราติดต่อกลับได้ ที่นี่</p>
                            </div>
                            <div class="contactform">
                                <form action="{{ url('saveUpdateContactUsForm') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="contact_us_form_name_surname" name="contact_us_form_name_surname" required>
                                    <label for="contact_us_form_name_surname">ชื่อ - นามสกุล <span>*</span>
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="contact_us_form_tel" name="contact_us_form_tel" required>
                                    <label for="contact_us_form_tel">เบอร์โทรศัพท์ <span>*</span>
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="contact_us_form_email" name="contact_us_form_email" required>
                                    <label for="contact_us_form_email">อีเมล
                                    </label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="contact_us_form_datetime_contact" name="contact_us_form_datetime_contact" required>
                                    <label for="contact_us_form_datetime_contact">เวลาที่สะดวกให้เราติดต่อกลับ
                                    </label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="contact_us_form_detail" name="contact_us_form_detail" style="height: 200px" required></textarea>
                                    <label for="contact_us_form_detail">รายละเอียด</label>
                                </div>
                                <br><br>
                                {{-- <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid">
                                <br><br> --}}
                                <center><input type="submit" class="btn btn-primary" value="ส่งแบบฟอร์ม"></center>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="ggmap">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.140210379689!2d100.56668961532999!3d13.890563297803943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e283270ace8ba3%3A0xba604016ef452579!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4reC4tOC4meC4iuC4seC4p-C4o-C5jOC5hOC4p-C4quC5jCDguYLguJrguKPguIHguYDguIHguK3guKPguYwg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1669878130407!5m2!1sth!2sth"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend/inc_footer')

    <!-- this should go after your </body> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/datetimepicker-master/jquery.datetimepicker.css') }}">
    <script src="{{ asset('public/backend/datetimepicker-master/jquery.js') }}"></script>
    <script src="{{ asset('public/backend/datetimepicker-master/build/jquery.datetimepicker.full.min.js') }}"></script>
    <script>
        $( document ).ready(function() {
            // Handler for .ready() called.
            jQuery('#contact_us_form_datetime_contact').datetimepicker();
        });
    </script>
</body>

</html>