<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

<body class="bluelight">

    <section id="compulsorypage"  class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประกันภัยผู้เล่นกอล์ฟ</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันภัยผู้เล่นกอล์ฟ</h1>
                        <p>คุ้มครองผู้เอาประกันภัย และอุปกรณ์การเล่นกอล์ฟ พร้อมรางวัลพิเศษ Hole in one
                        </p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_golf.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="titleTopic">
                            <h2>ประกันภัยผู้เล่นกอล์ฟ</h2>
                        </div>
                        <div class="contentbody">คุ้มครองผู้เอาประกันภัย บุคคลภายนอก และอุปกรณ์การเล่นกอล์ฟ
                            พร้อมรางวัลพิเศษ Hole in one สำหรับนักกอล์ฟสมัครเล่นระหว่าง การฝึกหัด การซ้อม
                            หรือการเล่นกอล์ฟ <br>
                            ในสนามกอล์ฟหรือสนามฝึกหัดกอล์ฟสาธารณะ (ภายในอาณาเขตประเทศไทย)

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="row mt-5 mb-5">
                            <div class="col">
                                <div class="groupcompul">
                                    <div class="row pe-5 ps-5">
                                        <div class="col-lg-8 text-start">
                                            <h6>ประกันภัยผู้เล่นกอล์ฟ</h6>
                                        </div>
                                        <div class="col-lg-4 text-end">
                                            <h6>@if(!empty($row)){{ $row->insurance_golf_price }}@endif บาท</h6>
                                        </div>
                                    </div>
                                    <div class="bgwhitecompul">
                                        <div class="row">
                                            <div class="col listacc">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-lg-9 text-start">
                                                            ความรับผิดชอบต่อบุคคลภายนอก
                                                        </div>
                                                        <div class="col-lg-3 text-end">
                                                            @if(!empty($row)){{ $row->insurance_golf_reponsible_price }}@endif
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-lg-9 text-start">
                                                            ความบาดเจ็บทางร่างกายของผู้เอาประกันภัย
                                                        </div>
                                                        <div class="col-lg-3  text-end">
                                                            @if(!empty($row)){{ $row->insurance_golf_bodily_injuly_price }}@endif
                                                        </div>

                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-lg-9 text-start">
                                                            อุปกรณ์การเล่นกอล์ฟ
                                                        </div>
                                                        <div class="col-lg-3 text-end">
                                                            @if(!empty($row)){{ $row->insurance_golf_equipment_price }}@endif
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-lg-9 text-start">
                                                            รางวัลพิเศษสำหรับ "โฮล-อิน-วัน"
                                                        </div>
                                                        <div class="col-lg-3 text-end">
                                                            @if(!empty($row)){{ $row->insurance_golf_hol_in_one_price }}@endif
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                        </div>
                                        <div class="row mt-5 mb-5">
                                            <div class="col listicongolf">
                                                <li>
                                                    <img src="{{ asset('public/frontend/images/golf_ic1.png') }}" alt=""> <br>
                                                    บุคคลภายนอก
                                                </li>
                                                <li>
                                                    <img src="{{ asset('public/frontend/images/golf_ic2.png') }}" alt=""> <br>
                                                    ชีวิต/ร่างกาย
                                                </li>
                                                <li>
                                                    <img src="{{ asset('public/frontend/images/golf_ic3.png') }}" alt=""> <br>
                                                    อุปกรณ์
                                                </li>
                                                <li>
                                                    <img src="{{ asset('public/frontend/images/golf_ic4.png') }}" alt=""> <br>
                                                    Hole In One
                                                </li>
                                            </div>
                                        </div>

                                        <a href="#" data-width="848" data-height="650" data-fancybox
                                            data-src="#contactback" href="javascript:;" class="btn btn-primary"> <i
                                                class="fi fi-rr-phone-call"></i>
                                            ติดต่อเจ้าหน้าที่</a>

                                        <div style="display: none;" id="contactback">
                                            <div class="titleTopic text-center">
                                                กรุณากรอกข้อมูลติดต่อกลับ <br>
                                                <span class="smtext">กรอกแบบฟอร์มด้านล่าง เพื่อให้เราติดต่อกลับได้ ที่นี่</span>
                                            </div>
                                            <form action="{{ url('saveGolfContact') }}" method="post">
                                            @csrf
                                            <div class="contactform">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="golf_contact_name_surname" name="golf_contact_name_surname" required>
                                                    <label for="golf_contact_name_surname">ชื่อ - นามสกุล <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="number" class="form-control" id="golf_contact_telephone" name="golf_contact_telephone" required>
                                                    <label for="golf_contact_telephone">เบอร์โทรศัพท์ <span>*</span>
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" id="golf_contact_email" name="golf_contact_email" required>
                                                    <label for="golf_contact_email">อีเมล
                                                    </label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" id="golf_contact_call" name="golf_contact_call" required>
                                                    <label for="golf_contact_call">* ช่วงเวลาให้ติดต่อกลับ
                                                    </label>
                                                </div>
                                                <br>

                                                {{-- <img src="{{ asset('public/frontend/images/captcha.png') }}" alt="">
                                                <br><br> --}}
                                                <center> <button type="submit" class="btn btn-primary">ส่งแบบฟอร์ม</button></center>

                                            </div>
                                            </form>
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
                    <div class="col titleTopic text-center">
                        <h4>@if(!empty($row)){{ $row->insurance_golf_text1 }}@endif</h4>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="tablegroup  table-responsive-xl">
                            <table class="table indetailgroup table-bordered">
                                <thead>
                                    <tr>
                                        <th>ความคุ้มครอง</th>
                                        <th>จำนวนเงินจำกัดความรับผิด</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th colspan="2">@if(!empty($row)){{ $row->insurance_golf_text1_1 }}@endif</th>
                                    </tr>
                                    <tr>
                                        <td>- @if(!empty($row)){{ $row->insurance_golf_text1_1_1 }}@endif</td>
                                        <td>@if(!empty($row)){{ $row->insurance_golf_damage_live_body_price }}@endif บาท</td>
                                    </tr>

                                    <tr>
                                        <th colspan="2">@if(!empty($row)){{ $row->insurance_golf_text1_2 }}@endif</th>
                                    </tr>
                                    <tr>
                                        <td>- @if(!empty($row)){{ $row->insurance_golf_text1_2_1 }}@endif</td>
                                        <td>@if(!empty($row)){{ $row->insurance_golf_die_eye_lost_price }}@endif บาท</td>
                                    </tr>
                                    <tr>
                                        <td>- @if(!empty($row)){{ $row->insurance_golf_text1_2_2 }}@endif</td>
                                        <td>@if(!empty($row)){{ $row->insurance_golf_disablility_less_52_week_price }}@endif บาท / สัปดาห์</td>
                                    </tr>
                                    <tr>
                                        <td>- @if(!empty($row)){{ $row->insurance_golf_text1_2_3 }}@endif</td>
                                        <td>@if(!empty($row)){{ $row->insurance_golf_any_disablility_less_52_week_price }}@endif บาท / สัปดาห์</td>
                                    </tr>
                                    <tr>
                                        <td>- @if(!empty($row)){{ $row->insurance_golf_text1_2_4 }}@endif</td>
                                        <td>@if(!empty($row)){{ $row->insurance_golf_accident_price }}@endif บาท</td>
                                    </tr>

                                    <tr>
                                        <th colspan="2">@if(!empty($row)){{ $row->insurance_golf_text1_3 }}@endif</th>
                                    </tr>
                                    <tr>
                                        <td>- @if(!empty($row)){{ $row->insurance_golf_text1_3_1 }}@endif</td>
                                        <td>@if(!empty($row)){{ $row->insurance_golf_equipment_lost_price }}@endif บาท</td>
                                    </tr>

                                    <tr>
                                        <th colspan="2">รางวั@if(!empty($row)){{ $row->insurance_golf_text1_4 }}@endif</th>
                                    </tr>
                                    <tr>
                                        <td>- @if(!empty($row)){{ $row->insurance_golf_text1_4_1 }}@endif</td>
                                        <td>@if(!empty($row)){{ $row->insurance_golf_hol_in_one_normal_price }}@endif บาท</td>
                                    </tr>
                                    <tr>
                                        <td>- @if(!empty($row)){{ $row->insurance_golf_text1_4_2 }}@endif</td>
                                        <td>@if(!empty($row)){{ $row->insurance_golf_hol_in_one_other_price }}@endif บาท</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="readmorecondi mt-5 text-center">
@php
$golf_pdf = DB::table('insurance_upload_pdf')
    ->where('insurance_download_pdf_id', '=', 1)
    ->first();
@endphp
                            <a href="@if(!empty($golf_pdf) and $golf_pdf->golf_pdf != ''){{ asset('public/uploads/condo/'.$golf_pdf->golf_pdf) }}@else{{ '#' }}@endif" class="btn btn-white" @if(!empty($golf_pdf) and $golf_pdf->golf_pdf != ''){{ 'target="_blank"' }}@endif>
                            <button class="btn btn-condition">เงื่อนไขและความคุ้มครอง
                                กรมธรรม์ประกันภัยคุ้มครองผู้ประสบภัยจากรถ <span class="orangetext">คลิก</span> </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="faqgroup mt-5">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันภัยผู้เล่นกอล์ฟ</span> </h5>
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
                                            <span>0{{ $i }}</span> {{ $r->golf_faq_question }}

                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@else{{ '' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->golf_faq_answer }}
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
                                            <span>02</span> กรมธรรม์คุ้มครองช่วงระยะเวลาใดบ้าง
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
                                            <span>03</span> ชาวต่างชาติ สามารถทำประกันภัยผู้เล่นกอล์ฟนี้ได้หรือไม่
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ท่านจะได้รับกรมธรรม์หลังจากชำระเงินเรียบร้อยแล้ว
                                            โดยจัดส่งตามรายละเอียดข้อมูลที่ระบุในขั้นตอนการซื้อ
                                            สำหรับลูกค้าที่เลือกรับกรมธรรม์อิเล็กทรอนิกส์ ท่านจะได้รับกรมธรรม์ในทันที
                                            วิริยะประกันภัยขอขอบคุณที่ท่านร่วมเป็นส่วนหนึ่งในการประหยัดทรัพยากรธรรมชาติ
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            <span>04</span> เงื่อนไขการยกเลิกกรมธรรม์
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            ท่านจะได้รับกรมธรรม์หลังจากชำระเงินเรียบร้อยแล้ว
                                            โดยจัดส่งตามรายละเอียดข้อมูลที่ระบุในขั้นตอนการซื้อ
                                            สำหรับลูกค้าที่เลือกรับกรมธรรม์อิเล็กทรอนิกส์ ท่านจะได้รับกรมธรรม์ในทันที
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