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
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <span>01</span> หนึ่งกรมธรรม์สามารถคุ้มครองสัตว์เลี้ยงได้กี่ตัว?

                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            รถทุกชนิดที่จดทะเบียนกับกรมการขนส่งทางบก ไม่ว่าจะเป็นรถส่วนบุคคล
                                            รถโดยสาร
                                            รถบรรทุก รถราชการ รถบดถนน รถอีแต๋น รถพ่วง
                                            และรถที่ใช้พลังงานทางเลือกหรือพลังงานทดแทน ต้องทำประกันรถยนต์ภาคบังคับ
                                            (พ.ร.บ.) ทั้งหมด
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
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
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('frontend/inc_footer')




</body>

</html>