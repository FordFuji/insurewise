<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body class="bluelight">

    <section id="travelpage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประกันภัยการเดินทาง</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันภัยการเดินทาง</h1>
                        <p>ประเภทประกันภัยการเดินทางที่น่าสนใจ... <br>
                            ที่เราคัดสรรสิ่งที่ดีที่สุดมาให้คุณ

                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_travel.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="titleTopic">
                            <h2>ทำความรู้จักกับประกันเดินทางต่างประเทศ</h2>
                        </div>
                        <div class="contentbody">ก่อนที่จะเลือกซื้อประกันเดินทางต่างประเทศ gettgo
                            จะพาไปทำความรู้จักกับลักษณะและความคุ้มครองของผลิตภัณฑ์ประเภทต่าง ๆ แบบเข้าใจง่าย
                            กับประกันที่ใช่สำหรับคุณ
                            หากจะว่ากันแบบง่าย ๆ
                            ประกันเดินทางต่างประเทศก็คือประกันที่ให้ความคุ้มครองชีวิตและทรัพย์สินของคุณในระหว่างทริป
                            นอกจากนี้ยังคุ้มครองกระเป๋าเดินทางหาย ไฟลท์ดีเลย์
                            และยังใช้เป็นเอกสารประกอบในการยื่นขอวีซ่าเข้าประเทศต่าง ๆ ได้อีกด้วย

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
        @if(!empty($insurance))
            @foreach($insurance as $is)
                @if($r->insurance_travel_row_id == $is->insurance_travel_row_id)
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/uploads/insurance_travel/'.$is->insurance_travel_image) }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>{{ $is->insurance_travel_name }}</b> <br>
                                                        <span>แผน : {{ $is->insurance_travel_plan }}</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">{{ $is->insurance_travel_premium_price }} บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">{{ $is->insurance_travel_text1 }}</div>
                                                    <div class="col-6 text-end">{{ $is->insurance_travel_accident }} บาท / ครั้ง</div>
                                                    <div class="col-6">{{ $is->insurance_travel_text_2 }}</div>
                                                    <div class="col-6 text-end">{{ $is->insurance_travel_sick }}</div>
                                                    <div class="col-6">{{ $is->insurance_travel_text_3 }}</div>
                                                    <div class="col-6 text-end">{{ $is->insurance_travel_vaccine }}</div>
                                                    <div class="col-6">{{ $is->insurance_travel_text_4 }}</div>
                                                    <div class="col-6 text-end">{{ $is->insurance_travel_deposit }}</div>
                                                    <div class="col-6">{{ $is->insurance_travel_text_5 }}</div>
                                                    <div class="col-6 text-end">{{ $is->insurance_travel_external }}</div>
                                                    <div class="col-6">{{ $is->insurance_travel_text_6 }}</div>
                                                    <div class="col-6 text-end">{{ $is->insurance_travel_injury }}</div>
                                                    <div class="col-6">{{ $is->insurance_travel_text_7 }}</div>
                                                    <div class="col-6 text-end">{{ $is->insurance_travel_property }}</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;" onclick="contact('{{ $is->insurance_travel_id }}');"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;" onclick="contactDetail('{{ $is->insurance_travel_id }}');">
                                                        <i class="fi fi-rr-document"></i>
                                                        ดูรายละเอียด</a></li>



                                            </div>
                                            
                                            

                                                <div style="display: none;" id="healthtwo">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="logobig">
                                                                        <img src="{{ asset('public/frontend/images/logosm/axa.png') }}"
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
                                                            <a href="{{ url('pdf_travel/'.$is->insurance_travel_id) }}" class="btn btn-secondary"><i
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
                                                                            id="floatingInput"
                                                                            placeholder="name@example.com">
                                                                        <label for="floatingInput">ชื่อ - นามสกุล
                                                                            <span>*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="number" class="form-control"
                                                                            id="floatingInput"
                                                                            placeholder="name@example.com">
                                                                        <label for="floatingInput">เบอร์โทรศัพท์
                                                                            <span>*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="email" class="form-control"
                                                                            id="floatingInput"
                                                                            placeholder="name@example.com">
                                                                        <label for="floatingInput">อีเมล
                                                                        </label>
                                                                    </div>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example">
                                                                        <option selected>* ช่วงเวลาให้ติดต่อกลับ
                                                                        </option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                                <br><br>
                                                                <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid">
                                                                <br><br>
                                                                <center> <button
                                                                        class="btn btn-primary" onclick="sendForm">ส่งแบบฟอร์ม</button>
                                                                </center>
                                                            
                                                        </div>
                                                    </div>

                                                </div>

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
                {{-- <div class="row mt-3">
                    <div class="col">
                        <div class="groupinsure_recc owl-carousel owl-theme">
                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                        <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/frontend/images/logopartner3.png') }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>ธนชาต</b> <br>
                                                        <span>แผน : อุบัติเหตุ XS</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">1,400 บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">ค่ารักษาจากอุบัติเหตุ</div>
                                                    <div class="col-6 text-end">3,000 บาท / ครั้ง</div>
                                                    <div class="col-6">ค่ารักษาจากการเจ็บป่วย</div>
                                                    <div class="col-6 text-end">-</div>
                                                    <div class="col-6">ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง</div>
                                                    <div class="col-6 text-end">-</div>
                                                    <div class="col-6">ค่าฝากเลี้ยงกรณีไปต่างประเทศ</div>
                                                    <div class="col-6 text-end">ไม่คุ้มครอง</div>
                                                    <div class="col-6">บาดเจ็บคนภายนอก</div>
                                                    <div class="col-6 text-end">20,000 ฿</div>
                                                    <div class="col-6">ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง</div>
                                                    <div class="col-6 text-end">20,000 ฿</div>
                                                    <div class="col-6">ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์</div>
                                                    <div class="col-6 text-end">-</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;">
                                                        <i class="fi fi-rr-document"></i>
                                                        ดูรายละเอียด</a></li>



                                            </div>
                                            <div style="display: none;" id="contactback">
                                                <div class="titleTopic text-center">
                                                    กรุณากรอกข้อมูลติดต่อกลับ <br>
                                                    <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้
                                                        ที่นี่</span>
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
                                                    <center> <button class="btn btn-primary">ส่งแบบฟอร์ม</button>
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
                                                </div>
                                                <br><br>
                                                <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid">
                                                <br><br>
                                                <center> <a href="#" class="btn btn-primary" data-width="648"
                                                        data-height="700" data-fancybox data-src="#healthtwo"
                                                        href="javascript:;"> ตกลง</a></center>

                                                <div style="display: none;" id="healthtwo">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="logobig">
                                                                        <img src="{{ asset('public/frontend/images/logosm/axa.png') }}"
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
                                                                            id="floatingInput"
                                                                            placeholder="name@example.com">
                                                                        <label for="floatingInput">ชื่อ - นามสกุล
                                                                            <span>*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="email" class="form-control"
                                                                            id="floatingInput"
                                                                            placeholder="name@example.com">
                                                                        <label for="floatingInput">เบอร์โทรศัพท์
                                                                            <span>*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="email" class="form-control"
                                                                            id="floatingInput"
                                                                            placeholder="name@example.com">
                                                                        <label for="floatingInput">อีเมล
                                                                        </label>
                                                                    </div>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example">
                                                                        <option selected>* ช่วงเวลาให้ติดต่อกลับ
                                                                        </option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                                <br><br>
                                                                <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid">
                                                                <br><br>
                                                                <center> <button
                                                                        class="btn btn-primary">ส่งแบบฟอร์ม</button>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="groupinsure_recc owl-carousel owl-theme">
                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                            <div class="item">
                                <div class="groupinsure_detail">
                                    <div class="row">
                                        <div class="col-lg-4">
                                        <div class="leftwithIC">
                                                <div class="row">
                                                    <div class="col-5 col-md-3 col-lg-4">
                                                        <img src="{{ asset('public/frontend/images/logopartner3.png') }}" alt="">
                                                    </div>
                                                    <div class="col-7  col-md-9 col-lg-8">
                                                        <b>ธนชาต</b> <br>
                                                        <span>แผน : อุบัติเหตุ XS</span>

                                                    </div>
                                                </div>
                                                <br><br>
                                                <b>เบี้ยเริ่มต้น</b>

                                                <h3 class="orangetext">1,400 บาท/ปี</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="detailinsure_cons">
                                                <div class="row">
                                                    <div class="col-6">ค่ารักษาจากอุบัติเหตุ</div>
                                                    <div class="col-6 text-end">3,000 บาท / ครั้ง</div>
                                                    <div class="col-6">ค่ารักษาจากการเจ็บป่วย</div>
                                                    <div class="col-6 text-end">-</div>
                                                    <div class="col-6">ค่าวัคซีนป้องกันโรคสัตว์เลี้ยง</div>
                                                    <div class="col-6 text-end">-</div>
                                                    <div class="col-6">ค่าฝากเลี้ยงกรณีไปต่างประเทศ</div>
                                                    <div class="col-6 text-end">ไม่คุ้มครอง</div>
                                                    <div class="col-6">บาดเจ็บคนภายนอก</div>
                                                    <div class="col-6 text-end">20,000 ฿</div>
                                                    <div class="col-6">ค่าใช้จ่ายจัดพิธีศพสัตว์เลี้ยง</div>
                                                    <div class="col-6 text-end">20,000 ฿</div>
                                                    <div class="col-6">ทรัพย์สินบุคคลภายนอกเนื่องมาจากสัตว์</div>
                                                    <div class="col-6 text-end">-</div>
                                                </div>
                                            </div>
                                            <div class="btnforcontanct">
                                                <li><a href="#" class="btn btn-circv-l" data-width="648"
                                                        data-height="700" data-fancybox data-src="#contactback"
                                                        href="javascript:;"><i class="fi fi-rr-phone-call"></i>
                                                        ติดต่อเจ้าหน้าที่ </a></li>
                                                <li> <a href="#" class="btn btn-circv-r" data-width="948"
                                                        data-height="700" data-fancybox data-src="#healthone"
                                                        href="javascript:;">
                                                        <i class="fi fi-rr-document"></i>
                                                        ดูรายละเอียด</a></li>



                                            </div>
                                            <div style="display: none;" id="contactback">
                                                <div class="titleTopic text-center">
                                                    กรุณากรอกข้อมูลติดต่อกลับ <br>
                                                    <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้
                                                        ที่นี่</span>
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
                                                    <center> <button class="btn btn-primary">ส่งแบบฟอร์ม</button>
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
                                                </div>
                                                <br><br>
                                                <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid">
                                                <br><br>
                                                <center> <a href="#" class="btn btn-primary" data-width="648"
                                                        data-height="700" data-fancybox data-src="#healthtwo"
                                                        href="javascript:;"> ตกลง</a></center>

                                                <div style="display: none;" id="healthtwo">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="logobig">
                                                                        <img src="{{ asset('public/frontend/images/logosm/axa.png') }}"
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
                                                                            id="floatingInput"
                                                                            placeholder="name@example.com">
                                                                        <label for="floatingInput">ชื่อ - นามสกุล
                                                                            <span>*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="email" class="form-control"
                                                                            id="floatingInput"
                                                                            placeholder="name@example.com">
                                                                        <label for="floatingInput">เบอร์โทรศัพท์
                                                                            <span>*</span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-floating mb-3">
                                                                        <input type="email" class="form-control"
                                                                            id="floatingInput"
                                                                            placeholder="name@example.com">
                                                                        <label for="floatingInput">อีเมล
                                                                        </label>
                                                                    </div>
                                                                    <select class="form-select"
                                                                        aria-label="Default select example">
                                                                        <option selected>* ช่วงเวลาให้ติดต่อกลับ
                                                                        </option>
                                                                        <option value="1">One</option>
                                                                        <option value="2">Two</option>
                                                                        <option value="3">Three</option>
                                                                    </select>
                                                                </div>
                                                                <br><br>
                                                                <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid">
                                                                <br><br>
                                                                <center> <button
                                                                        class="btn btn-primary">ส่งแบบฟอร์ม</button>
                                                                </center>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </div>
                    </div>
                </div> --}}
<div style="display: none;" id="contactback">
    <div class="titleTopic text-center">
        กรุณากรอกข้อมูลติดต่อกลับ <br>
        <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้
            ที่นี่</span>
    </div>
    <div class="contactform">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="contact_travel_name_surname"
                placeholder="name@example.com">
            <label for="contact_travel_name_surname">ชื่อ - นามสกุล <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="contact_travel_tel"
                placeholder="name@example.com">
            <label for="contact_travel_tel">เบอร์โทรศัพท์ <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="contact_travel_email"
                placeholder="name@example.com">
            <label for="contact_travel_email">อีเมล
            </label>
        </div>
        {{-- <select class="form-select" aria-label="Default select example">
            <option selected>* ช่วงเวลาให้ติดต่อกลับ</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select> --}}
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="contact_travel_call"
                placeholder="name@example.com">
            <label for="contact_travel_call">ช่วงเวลาให้ติดต่อกลับ
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
            <input type="email" class="form-control" id="contact_travel_detail_name_surname"
                placeholder="name@example.com">
            <label for="contact_travel_detail_name_surname">ชื่อ - นามสกุล <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="contact_travel_detail_telephone"
                placeholder="name@example.com">
            <label for="contact_travel_detail_telephone">เบอร์โทรศัพท์ <span>*</span>
            </label>
        </div>
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="contact_travel_detail_email"
                placeholder="name@example.com">
            <label for="contact_travel_detail_email">อีเมล
            </label>
        </div>
    </div>
    {{-- <br><br>
    <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="" class="img-fluid"> --}}
    <br><br>
    <center> <a class="btn btn-primary" data-width="648"
            data-height="700"
            href="javascript:;" onclick="sendFormDetail();"> ตกลง</a></center>
    {{-- <center> <a class="btn btn-primary" data-width="648"
            data-height="700" data-fancybox data-src="#healthtwo"
            href="javascript:;" onclick="sendFormDetail();"> ตกลง</a></center> --}}
</div>

                <div class="row mt-5">
                    <div class="col">
                        <div class="promotionslider owl-carousel owl-theme">
                            <?php for ($i = 1; $i <= 3; $i++) { ?>
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('public/frontend/images/promotravel.png') }}" alt="">
                                </a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="fromtopandbt">
                    <div class="row mt-5 mb-5">
                        <div class="col titleTopic text-center">
                            <h4>ความคุ้มครองประกันเดินทาง</h4>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-5 fromtopandbttwo">
                        <div class="col-6 col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/travelicon1.png') }}" alt=""> </div> <br>
                            <span class="bolder">ผลประโยชน์การเสียชีวิต</span>
                        </div>
                        <div class="col-6 col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/travelicon2.png') }}" alt=""> </div> <br>
                            <span class="bolder">ค่ารักษาพยาบาล</span>
                        </div>
                        <div class="col-6 col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/travelicon3.png') }}" alt=""> </div> <br>
                            <span class="bolder">การเคลื่อนย้ายเพื่อรักษาฉุกเฉิน / <br> การเคลื่อนย้ายกลับประเทศไทย

                            </span>
                        </div>
                        <div class="col-6 col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/travelicon4.png') }}" alt=""> </div> <br>
                            <span class="bolder">การยกเลิก / การเลื่อนเดินทาง

                            </span>
                        </div>
                        <div class="col-6 col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/travelicon5.png') }}" alt=""> </div> <br>
                            <span class="bolder">เงินสดถูกขโมย / <br>
                                พาสปอร์ตและเอกสารการเดินทางสูญหาย
                            </span>
                        </div>
                        <div class="col-6 col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/travelicon6.png') }}" alt=""> </div> <br>
                            <span class="bolder">ความสูญเสีย / <br>
                                ความเสียหายของกระเป๋าเดินทาง
                            </span>
                        </div>
                        <div class="col-6 col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/travelicon7.png') }}" alt=""> </div> <br>
                            <span class="bolder">ความล่าช้าของกระเป๋าเดินทาง

                            </span>
                        </div>
                        <div class="col-6 col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/travelicon8.png') }}" alt=""> </div> <br>
                            <span class="bolder">การลดจำนวนวันเดินทาง
                            </span>
                        </div>
                        <div class="col-6 col-lg-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/travelicon9.png') }}" alt=""> </div> <br>
                            <span class="bolder">ความเสียหายส่วนแรกสำหรับรถเช่า

                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faqgroup mt-5">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันภัยการเดินทาง</span> </h5>
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
                                            <span>0{{ $i }}</span> {{ $r->travel_faq_question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->travel_faq_answer }}
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
                                            ผู้เดินทางจะต้องตรวจสุขภาพก่อนซื้อประกันภัยการเดินทางหรือไม่?
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
                                            <span>03</span> ถ้าจะแจ้งเคลมประกันการเดินทางต้องทำยังไงบ้าง?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ท่านจะได้รับกรมธรรม์หลังจากชำระเงินเรียบร้อยแล้ว
                                            โดยจัดส่งตามรายละเอียดข้อมูลที่ระบุในขั้นตอนการซื้อ
                                            สำหรับลูกค้าที่เลือกรับกรมธรรม์อิเล็กทรอนิกส์
                                            ท่านจะได้รับกรมธรรม์ในทันที
                                            วิริยะประกันภัยขอขอบคุณที่ท่านร่วมเป็นส่วนหนึ่งในการประหยัดทรัพยากรธรรมชาติ
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" id="insurance_travel_id">
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

        function contact(insurance_travel_id) {
            $("#insurance_travel_id").val(insurance_travel_id);
        }

        function contactDetail(insurance_travel_id) {
            $("#insurance_travel_id").val(insurance_travel_id);
        }

        function sendForm() {
            if($("#contact_travel_name_surname").val() == '') {
                alert('กรุณากรอก ชื่อ - นามสกุล');

                $("#contact_travel_name_surname").focus();
            } else if($("#contact_travel_tel").val() == '') {
                alert('กรุณากรอก เบอร์โทรศัพท์');

                $("#contact_travel_tel").focus();
            } else if($("#contact_travel_tel").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_travel_tel").val('');
                $("#contact_travel_tel").focus();
            } else if($("#contact_travel_email").val() == '') {
                alert('กรุณากรอก อีเมล์');

                $("#contact_travel_email").focus();
            } else if($("#contact_travel_call").val() == '') {
                alert('กรุณากรอก ช่วงเวลาให้ติดต่อกลับ');

                $("#contact_travel_call").focus();
            } else {
                $.post('{{ url("ajaxContactTravel") }}', { insurance_travel_id: $("#insurance_travel_id").val(), contact_travel_name_surname: $("#contact_travel_name_surname").val(), contact_travel_tel: $("#contact_travel_tel").val(), contact_travel_email: $("#contact_travel_email").val(), contact_travel_call: $("#contact_travel_call").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อยแล้ว');

                    window.location.href = '{{ url("travel_insurance") }}';
                });
            }
        }

        function sendFormDetail() {
            if($("#contact_travel_detail_name_surname").val() == '') {
                alert('กรุณากรอก ชื่อ - นามสกุล');

                $("#contact_travel_detail_name_surname").focus();
            } else if($("#contact_travel_detail_telephone").val() == '') {
                alert('กรุณากรอก เบอร์โทรศัพท์');

                $("#contact_travel_detail_telephone").focus();
            } else if($("#contact_travel_detail_telephone").val().length != 10) {
                alert('เบอร์โทรศัพท์ต้องมี 10 หลัก');

                $("#contact_travel_detail_telephone").val('');
                $("#contact_travel_detail_telephone").focus();
            } else if($("#contact_travel_detail_email").val() == '') {
                alert('กรุณากรอก อีเมล์');

                $("#contact_travel_detail_email").focus();
            } else {
                $.post('{{ url("ajaxContactTravelDetail") }}', { insurance_travel_id: $("#insurance_travel_id").val(), contact_travel_detail_name_surname: $("#contact_travel_detail_name_surname").val(), contact_travel_detail_telephone: $("#contact_travel_detail_telephone").val(), contact_travel_detail_email: $("#contact_travel_detail_email").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('กรอกข้อมูลเสร็จเรียบร้อยแล้ว');

                    window.location.href = '{{ url("travel_insurance") }}';
                });
            }
        }
    </script>


</body>

</html>