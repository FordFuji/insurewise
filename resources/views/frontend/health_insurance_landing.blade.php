<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body class="bluelight">

    <section id="healthinsurepage"  class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประกันภัยสุขภาพ</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันภัยสุขภาพ</h1>
                        <p>เประกันภัยสุขภาพที่น่าสนใจ...ที่เราคัดสรรสิ่งที่ดีที่สุดมาให้คุณ

                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_health.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="filtersearch_car">
                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col">
                            <div class="titlehead text-center">
                                <h1>ค้นหาประกันสุขภาพ</h1>
                                <p>พิเศษกว่าด้วยการดูแลระดับพรีเมี่ยม</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="bgwhiterad">
                                <div class="formfilter">
                                    <form action="{{ url('health_insurance') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label>อายุ</label>
                                            <select class="form-select" aria-label="Default select example" name="insurance_healthy_age">
                                                <option value="">-- เลือกอายุ--</option>
@for($i = 1; $i <= 100; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
@endfor                    
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>เพศ</label>
                                            <select class="form-select" aria-label="Default select example" name="insurance_healthy_gender">
                                                <option value="">-- เลือกเพศ--</option>
                                                <option value="ชาย">ชาย</option>
                                                <option value="หญิง">หญิง</option>
                                            </select>
                                        </div>


                                        <div class="col-lg-3"> <label>ประเภทประกัน</label>
                                            <select class="form-select" aria-label="Default select example" name="type_insurance_id">
                                                <option value="">-- เลือกประกัน -- </option>
@if(!empty($type))
    @foreach($type as $r)
                                                <option value="{{ $r->type_insurance_id }}">{{ $r->type_insurance_name }}</option>
    @endforeach
@endif
                                            </select></div>
                                        <div class="col-lg-3">
                                            <input type="submit" class="btn btn-primary" value="ค้นหาประกัน">
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper_pad">
                <div class="fromtopandbt">
                    <div class="row mt-5 mb-5">
                        <div class="col titleTopic text-center">
                            <h4>ทำไมต้องทำประกันสุขภาพ</h4>
                        </div>
                    </div>
                    <div class="row mt-5 fromtopandbttwo">
                        <div class="col-md-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/healthicon1.png') }}" alt=""> </div> <br>
                            <span class="bolder">ผู้เชี่ยวชาญที่ทำให้เรื่อง <br>
                                ประกันง่ายขึ้น</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/healthicon2.png') }}" alt=""> </div> <br>
                            <span class="bolder">จะป่วยหนักป่วยเบาก็สบายใจ <br> เลือกแผนประกันที่ใช่ได้เลย</span>
                        </div>
                        <div class="col-md-4 text-center">
                            <div class="circ"><img src="{{ asset('public/frontend/images/healthicon3.png') }}" alt=""> </div> <br>
                            <span class="bolder">เลือกรักษาในโรงพยาบาลชั้นนำได้ <br> พร้อมดูแลหลังการขาย
                            </span>
                        </div>
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

            
            <div class="wrapper_pad">
            <div class="bghealth">
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="titleTopic">
                            <h2>ความรู้ประกันสุขภาพ</h2>
                        </div>
                        <div class="contentbody mt-5">ประกันสุขภาพเป็นขั้นกว่าของความสบายใจ
                            ไม่ว่าเราจะดูแลตัวเองดีแค่ไหนก็ต้องเจ็บป่วย
                            ยิ่งในปัจจุบันมีปัจจัยหลายอย่างที่ก่อให้เกิดโรคภัยไข้เจ็บมากมาย <br>
                            และค่ารักษาพยาบาลก็แสนแพง
                            เราควรทำประกันภัยสุขภาพเอาไว้ เมื่อเจ็บป่วยขึ้นมา จะได้มีคนช่วยจ่ายค่ารักษาพยาบาลให้
                            ซึ่งความคุ้มครองหลัก ๆ <br>
                            ของประกันสุขภาพ สามารถแบ่งได้ดังนี้
                            <br><br>
                            <li> ความคุ้มครองค่ารักษาพยาบาลกรณีผู้ป่วยใน (IPD) เป็นความคุ้มครองพื้นฐานของประกันสุขภาพ
                                โดยให้ความคุ้มครองค่าใช้จ่ายที่เกิดขึ้นเมื่อต้องนอนโรงพยาบาล ไม่ว่าจะเป็น ค่าห้องพัก
                                ค่าอาหาร ค่ายา ค่าแพทย์ ค่าผ่าตัด เป็นต้น ซึ่งค่าใช้จ่ายเหล่านี้มักจะมีมูลค่าสูง</li>
                            <li> ความคุ้มครองค่ารักษาพยาบาลเฉพาะกรณีผู้ป่วยนอก (OPD)
                                เป็นความคุ้มครองที่สามารถเลือกซื้อเพิ่มเติมได้
                                โดยให้ความคุ้มครองค่าใช้จ่ายที่เกิดขึ้นจากการเข้ารับการรักษาแบบไม่ต้องนอนโรงพยาบาล เช่น
                                การบาดเจ็บเล็กน้อย ไข้หวัด มีดบาด ตาแดง เป็นต้น</li>
                            <br><br>
                            สำหรับวงเงินความคุ้มครองกรณีผู้ป่วยใน หลัก ๆ ที่ขายกันอยู่ในตลาด จะมีด้วยกัน 2 ประเภท คือ
                            <br><br>
                            <li>วงเงินความคุ้มครองแบบเหมาจ่ายต่อปี เป็นวงเงินค่ารักษาพยาบาลที่ให้แบบปีต่อปี
                                ไม่ว่าจะป่วยกี่โรคหรือนอนโรงพยาบาลกี่ครั้ง
                                ก็สามารถเบิกค่ารักษาพยาบาลภายใต้วงเงินที่กำหนดได้
                                และวงเงินนี้จะเริ่มนับใหม่ให้ในทุกปี</li>
                            <li> วงเงินความคุ้มครองแบบเหมาจ่ายต่อโรค
                                เป็นวงเงินค่ารักษาพยาบาลที่ให้สำหรับการบาดเจ็บหรือเจ็บป่วยใด ๆ ในแต่ละครั้ง
                                รวมถึงโรคแทรกซ้อนที่เกิดจากการบาดเจ็บหรือเจ็บป่วยในครั้งนั้น
                                เป็นวงเงินที่ให้ต่อโรคหรือต่อการบาดเจ็บ เช่น ในหนึ่งปี
                                หากท่านเจ็บป่วยด้วยสองโรคที่มาจากสาเหตุที่แตกต่างกัน ท่านจะได้รับวงเงินสองวงเงิน
                                เพื่อจ่ายค่ารักษาพยาบาลในแต่ละโรค</li>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
            <div class="faqgroup mt-5">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันสุขภาพ</span> </h5>
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
                                            <span>0{{ $i }}</span> {{ $r->healthy_faq_question }}

                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->healthy_faq_answer }}
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
                                            <span>02</span> การเคลมต้องสำรองจ่ายก่อนหรือไม่
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
                                            <span>03</span> เรียกร้องค่าสินไหมต้องเตรียมเอกสารอะไรบ้าง
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
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            <span>04</span> บริษัทพิจารณาจ่ายเคลมกี่วัน
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
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

            </div>
        </div>

    </section>
    @include('frontend/inc_footer')




</body>

</html>