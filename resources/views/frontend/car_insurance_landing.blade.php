<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>
@include('frontend/inc_topmenu')

@php
function checkCarTableInsuance($result) {
    if($result == 'Yes') {
        echo '<i class="fi fi-rr-check"></i>';
    } elseif($result == 'No') {
        echo '<i class="fi fi-rr-cross-circle"></i>';
    }
}
@endphp

<body class="bluelight">
    <section id="carinsurepage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row g-0" data-aos="fade-down" data-aos-once="true">
                <div class="col-md-6 col-lg-4">
                    <div class="captionBanner">
                        <div class="dividepage mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                    <li class="breadcrumb-item active" aria-current="page">ประกันภัยรถยนต์</li>
                                </ol>
                            </nav>
                        </div>
                        <h1>ประกันภัยรถยนต์</h1>
                        <p>เช็คราคา เปรียบเทียบ <br> ราคาประกันรถยนต์ที่ดีที่สุด <br> และเหมาะสมสำหรับคุณ</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="bannerside">
                        <img src="{{ asset('public/frontend/images/banner_car.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="filtersearch_car">
                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col">
                            <div class="titlehead text-center">
                                <h1>เช็คเบี้ยประกันรถยนต์</h1>
                                <p>เปรียบเทียบ ราคาประกันรถยนต์ที่ดีที่สุด และเหมาะสมสำหรับคุณ</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="bgwhiterad">
                                <div class="formfilter">
                                    <form action="{{ url('car_insurance') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label>ยี่ห้อรถ</label>
                                            <select class="form-select" aria-label="Default select example" name="brand_car" onchange="changeBrandCar(this.value);">
                                                <option value="">กรุณาเลือก</option>
@if(!empty($brand_car))
    @foreach($brand_car as $r)                                                
                                                <option value="{{ $r->brand_car_id }}">{{ $r->brand_car_name }}</option>
    @endforeach
@endif
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>รุ่นรถ</label>
                                            <select class="form-select" aria-label="Default select example" name="model_car" id="model_car" onchange="changeModelCar(this.value);">
                                                <option value="">กรุณาเลือก</option>
{{-- @if(!empty($model_car))
    @foreach($model_car as $r)
                                                <option value="{{ $r->model_car_id }}">{{ $r->model_car_name }}</option>
    @endforeach
@endif                    --}}
                                            </select>
                                        </div>
                                        <div class="col-lg-3">
                                            <label>รุ่นย่อย/cc</label>
                                            <select class="form-select" aria-label="Default select example" name="sub_model_car" id="sub_model_car">
                                                <option value="">กรุณาเลือก</option>
{{-- @if(!empty($sub_model_car))
    @foreach($sub_model_car as $r)
                                                <option value="{{ $r->sub_model_car_id }}">{{ $r->sub_model_car_name }}</option>
    @endforeach
@endif                --}}
                                            </select>
                                        </div>
                                        <div class="col-lg-3"> <label>ปีรถยนต์</label>
                                            <select class="form-select" aria-label="Default select example" name="year_car">
                                                <option value="">กรุณาเลือก</option>
@if(!empty($year_car))
    @foreach($year_car as $r)
                                                <option value="{{ $r->year_car_id }}">{{ $r->year_car_name }}</option>
    @endforeach
@endif                    
                                            </select></div>
                                        <div class="col-lg-5"> <label>ทะเบียนจังหวัด</label>
                                            {{-- <select name="insurance_car_register_province" class="form-control">
@if(!empty($province))
    @foreach($province as $r)
                                                <option value="{{ $r->name_in_thai }}">{{ $r->name_in_thai }}</option>
    @endforeach
@endif
                                            </select> --}}
                                            <input type="text" class="form-control" placeholder="กรอกทะเบียนจังหวัด" name="insurance_car_register_province"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                        <div class="col-lg-5"> <label>ประเภทประกัน</label>
                                            <select class="form-select" aria-label="Default select example" name="level_car">
                                                <option value="">กรุณาเลือก</option>
@if(!empty($level_car))
    @foreach($level_car as $r)
                                                <option value="{{ $r->level_car_id }}">{{ $r->level_car_name }}</option>
    @endforeach
@endif                   
                                            </select></div>
                                        <div class="col-lg-2">
                                            <input type="submit" class="btn btn-primary" value="เช็คเบี้ย คลิก!">
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
                <div class="row mt-5">
                    <div class="col titleTopic text-center">
                        <h4>ตารางความคุ้มครอง</h4>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="table">
                            <table class="table carlistrule table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th rowspan="2" colspan="2" class="topsty">ความคุ้มครอง/ประเภทประกันภัย</th>
                                        <th class="typeinsure" colspan="5">ประเภทประกัน</th>
                                    </tr>
                                    <tr>
                                        <th>ชั้น1</th>
                                        <th>ชั้น2+</th>
                                        <th>ชั้น2</th>
                                        <th>ชั้น3+</th>
                                        <th>ชั้น3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th rowspan="2" class="sideTopics">ความรับผิดชอบต่อบุคคลภายนอก</th>
                                        <th>ทรัพย์สิน</th>

                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_property_1) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_property_2p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_property_2) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_property_3p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_property_3) }}@endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <th>บุคคล</th>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_person_1) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_person_2p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_person_2) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_person_3p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_person_3) }}@endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2" class="sideTopics">ตัวรถเอาประกัน</th>
                                        <th>สูญหายและไฟใหม้</th>

                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_fire_1) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_fire_2p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_fire_2) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_fire_3p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_fire_3) }}@endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <th>การชนกับยานพาหนะทางบก *</th>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_crash_1) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_crash_2p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_crash_2) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_crash_3p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_car_crash_3) }}@endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th rowspan="2" class="sideTopics">ภัยพิเศษ</th>
                                        <th>สูญหายและไฟใหม้</th>

                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_fire_1) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_fire_2p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_fire_2) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_fire_3p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_fire_3) }}@endif
                                        </td>

                                    </tr>
                                    <tr>
                                        <th>การชนกับยานพาหนะทางบก *</th>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_crash_1) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_crash_2p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_crash_2) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_crash_3p) }}@endif
                                        </td>
                                        <td>
                                            @if(!empty($table)){{ checkCarTableInsuance($table->car_table_insurance_special_crash_3) }}@endif
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
                <div class="row mt-5 mb-5">
                    <div class="col titleTopic text-center">
                        <h4>เช็คราคาประกันรถยนต์จากบริษัทประกันภัยรถยนต์ชั้นนำทั่วประเทศ</h4>
                        <span class="smtext">เปรียบเทียบ ราคาประกันรถยนต์ที่ดีที่สุด และเหมาะสมสำหรับคุณ</span>
                    </div>
                </div>
                <div class="row  mt-5 mb-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="row">
@if(!empty($car_company))
    @foreach($car_company as $r)
                            <div class="col-6 col-lg-3 text-center logopartnercar">
                                <a href="{{ $r->car_company_link }}"><img src="{{ asset('public/uploads/car_company/'.$r->car_company_image) }}" alt=""></a>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="faqgroup mt-5">
                <div class="wrapper_pad">
                    <div class="row pt-4">
                        <div class="col">
                            <div class="titleTopic text-center">
                                <h5>คำถามที่พบบ่อยเกี่ยวกับ <span class="orangetext">ประกันรถยนต์</span> </h5>
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
                                            <span>0{{ $i }}</span> {{ $r->car_faq_question }}
                                        </button>
                                    </h2>
                                    <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($i == 1){{ 'show' }}@endif"
                                        aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $r->car_faq_answer }}
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
                                            <span>02</span> อู่ในเครือบริษัทประกันมีที่ไหนบ้าง
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
                                            <span>03</span> รถหายคุ้มครองหรือเปล่า
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
                                            <span>04</span> ประกันแบบ 2+ และ 3+ ต่างกันอย่างไร
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

    <script>
        function changeBrandCar(brand_car_id) {
            $.post('{{ url("ajaxChangeBrandCarFrontend") }}', { brand_car_id: brand_car_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $("#model_car").html(data);
            });
        }

        function changeModelCar(model_car_id) {
            $.post('{{ url("ajaxChangeModelCarFrontend") }}', { model_car_id: model_car_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $("#sub_model_car").html(data);
            });
        }
    </script>

</body>

</html>