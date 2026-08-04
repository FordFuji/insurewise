<div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
    <section id="filterhealth">
        <div class="topfilter">
            <div class="row">
                <div class="col-lg-8">
                    <h2>ตัวกรองการค้นหา</h2>
                </div>
                <div class="col-lg-4 text-end">
                    {{-- <a href="#">ล้างตัวกรอง</a> --}}
                </div>
            </div>
        </div>
        <div class="filterbox">
            <div class="titlefilter">
                ประเภทประกัน
            </div>

            <li> <label class="check-container"> เลือกทั้งหมด
                    <input type="checkbox" id="check_all_level" onclick="checkAllLevel();">
                    <span class="checkmark"></span>
                </label></li>
@if(!empty($level_car_inc))
    @foreach($level_car_inc as $r_inc)
            <li> <label class="check-container"> {{ $r_inc->level_car_name }}
                    <input type="checkbox" class="level_car" value="{{ $r_inc->level_car_id }}">
                    <span class="checkmark"></span>
                </label></li>
    @endforeach
@endif        
            {{-- <li> <label class="check-container"> ชั้น 2+
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li>
            <li> <label class="check-container"> ชั้น 3+
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li>
            <li> <label class="check-container"> ชั้น 3
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li> --}}

            <div class="middleborder "></div>

            <div class="titlefilter">
                ค่าเสียหายส่วนแรก
            </div>
@if(!empty($damages_first_inc))
    @foreach($damages_first_inc as $r_inc)
            <li> <label class="check-container"> {{ $r_inc->damages_first_name }}
                    <input type="checkbox" class="damages_first" value="{{ $r_inc->damages_first_id }}">
                    <span class="checkmark"></span>
                </label></li>
    @endforeach
@endif
            {{-- <li> <label class="check-container"> ไม่มีค่าเสียหายส่วนแรก
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li> --}}
            <div class="middleborder "></div>
            <div class="titlefilter">
                ประเภทการซ่อม
            </div>
@if(!empty($type_repair_inc))
    @foreach($type_repair_inc as $r_inc)
            <li> <label class="check-container"> {{ $r_inc->type_repair_name }}
                    <input type="checkbox" class="type_repair" value="{{ $r_inc->type_repair_id }}">
                    <span class="checkmark"></span>
                </label></li>
    @endforeach
@endif
{{--                 
            <li> <label class="check-container"> อู่
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li> --}}
            <div class="titlefilter">
                ทุนประกันภัย
            </div>

            <div class="filters">
                <div class="controls">
                    <div class="price-range"></div>
                    <div class="textinputs">
                        <input class="price-min" id="price_min" type="text" value="0" />
                        <input class="price-max" id="price_max" type="text" value="1000" />
                    </div>
                </div>
            </div>

            <div class="middleborder "></div>

            <div class="titlefilter">
                ประกันภัยรถยนต์ภาคบังคับ (พ.ร.บ.)
            </div>
            <li> <label class="check-container"> รวม
                    <input type="checkbox" class="prb" value="รวม">
                    <span class="checkmark"></span>
                </label></li>
            <li> <label class="check-container"> ไม่รวม
                    <input type="checkbox" class="prb" value="ไม่รวม">
                    <span class="checkmark"></span>
                </label></li>
            <div class="middleborder "></div>
            <div class="titlefilter">
                บริษัทประกัน
            </div>
            <li> <label class="check-container"> เลือกทั้งหมด
                    <input type="checkbox" id="check_all_company" onclick="checkAllCompany();">
                    <span class="checkmark"></span>
                </label></li>
@if(!empty($insurance_company_inc))
    @foreach($insurance_company_inc as $r_inc)
            <li> <label class="check-container">
                    <div class="logosm"><img src="{{ asset('public/uploads/insurance_company/'.$r_inc->insurance_company_logo2) }}" alt=""></div> {{ $r_inc->insurance_company_name }}
                    <input type="checkbox" class="insurance_company" value="{{ $r_inc->insurance_company_id }}">
                    <span class="checkmark"></span>
                </label></li>
    @endforeach
@endif
            {{-- <li> <label class="check-container">
                    <div class="logosm"><img src="{{ asset('public/frontend/images/logosm/logo2.png') }}" alt=""></div> วิริยะประกันภัย
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li>

            <li> <label class="check-container">
                    <div class="logosm"><img src="{{ asset('public/frontend/images/logosm/logo3.png') }}" alt=""></div> ไทยศรีประกันภัย
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li>
            <li> <label class="check-container">
                    <div class="logosm"><img src="{{ asset('public/frontend/images/logosm/logo4.png') }}" alt=""></div> เมืองไทยประกันภัย
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li>
            <li> <label class="check-container">
                    <div class="logosm"><img src="{{ asset('public/frontend/images/logosm/logo5.png') }}" alt=""></div> แอลเอ็มจี ประกันภัย
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li>
            <li> <label class="check-container">
                    <div class="logosm"><img src="{{ asset('public/frontend/images/logosm/logo6.png') }}" alt=""></div> ไอ โอ อิ กรุงเทพประกันภัย
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li>
            <li> <label class="check-container">
                    <div class="logosm"><img src="{{ asset('public/frontend/images/logosm/logo7.png') }}" alt=""></div> ธนชาตประกันภัย
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li> --}}
        </div>
    </section>
</div>


<div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
    <button class="btn btn-filter mb-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
        aria-controls="offcanvasBottom">ตัวกรองการค้นหา</button>

    <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">ตัวกรองการค้นหา</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body small">
            <section id="filterhealth">
              
                <div class="filterbox">
                    <div class="titlefilter">
                        ประเภทประกัน
                    </div>

                    <li> <label class="check-container"> เลือกทั้งหมด
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label></li>
        @if(!empty($level_car_inc))
            @foreach($level_car_inc as $r_inc)
                    <li> <label class="check-container"> {{ $r_inc->level_car_name }}
                            <input type="checkbox" class="level_car" value="{{ $r_inc->level_car_id }}">
                            <span class="checkmark"></span>
                        </label></li>
            @endforeach
        @endif 

                    <div class="middleborder "></div>

                    <div class="titlefilter">
                        ค่าเสียหายส่วนแรก
                    </div>
        @if(!empty($damages_first_inc))
            @foreach($damages_first_inc as $r_inc)
                    <li> <label class="check-container"> {{ $r_inc->damages_first_name }}
                            <input type="checkbox" class="damages_first" value="{{ $r_inc->damages_first_id }}">
                            <span class="checkmark"></span>
                        </label></li>
            @endforeach
        @endif
                    <div class="middleborder "></div>
                    <div class="titlefilter">
                        ประเภทการซ่อม
                    </div>
        @if(!empty($type_repair_inc))
            @foreach($type_repair_inc as $r_inc)
                    <li> <label class="check-container"> {{ $r_inc->type_repair_name }}
                            <input type="checkbox" class="type_repair" value="{{ $r_inc->type_repair_id }}">
                            <span class="checkmark"></span>
                        </label></li>
            @endforeach
        @endif
                    <div class="titlefilter">
                        ทุนประกันภัย
                    </div>

                    <div class="filters">
                        <div class="controls">
                            <div class="price-range"></div>
                            <div class="textinputs">
                                <input class="price-min" type="text" value="0" />
                                <input class="price-max" type="text" value="1000" />
                            </div>
                        </div>
                    </div>

                    <div class="middleborder "></div>

                    <div class="titlefilter">
                        ประกันภัยรถยนต์ภาคบังคับ (พ.ร.บ.)
                    </div>
                    <li> <label class="check-container"> รวม
                        <input type="checkbox" class="prb" value="รวม">
                        <span class="checkmark"></span>
                    </label></li>
                    <li> <label class="check-container"> ไม่รวม
                            <input type="checkbox" class="prb" value="ไม่รวม">
                            <span class="checkmark"></span>
                        </label></li>
                    <div class="middleborder "></div>
                    <div class="titlefilter">
                        บริษัทประกัน
                    </div>
                    <li> <label class="check-container"> เลือกทั้งหมด
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label></li>
        @if(!empty($insurance_company_inc))
            @foreach($insurance_company_inc as $r_inc)
                    <li> <label class="check-container">
                            <div class="logosm"><img src="{{ asset('public/uploads/insurance_company/'.$r_inc->insurance_company_logo2) }}" alt=""></div> {{ $r_inc->insurance_company_name }}
                            <input type="checkbox" class="insurance_company" value="{{ $r_inc->insurance_company_id }}">
                            <span class="checkmark"></span>
                        </label></li>
            @endforeach
        @endif
                </div>

            </section>

        </div>
    </div>
</div>

<script>
    $(function () {
        $('.price-range').slider({
            range: true,
            min: 0,
            max: 1000,
            values: [0, 1000],
            slide: function (event, ui) {
                // $('.price-min').val(ui.values[0]);
                // $('.price-max').val(ui.values[1]);
                $('#price_min').val(ui.values[0]);
                $('#price_max').val(ui.values[1]);
                
                ajaxFilterProduct();
            }
        });
    });

    // $('#price_min').change(function (event) { 
    // $(document).on('click', '#price_min', function(e){
    //     alert('555');        
        // var minValue = $('.price-min').val();
        // var maxValue = $('.price-max').val();
        // if (minValue <= maxValue) {
        //     $('.price-range').slider("values", 0, minValue);
        // } else {
        //     $('.price-range').slider("values", 0, maxValue);
        //     $('.price-min').val(maxValue);
        // }

        // ajaxFilterProduct();
    // });
    // This isn't very DRY but it's just for demo purpose... oh well.
    
    // $('#price_max').change(function (event) {
    //     var minValue = $('.price-min').val();
    //     var maxValue = $('.price-max').val();
    //     if (maxValue >= minValue) {
    //         $('.price-range').slider("values", 1, maxValue);
    //     } else {
    //         $('.price-range').slider("values", 1, minValue);
    //         $('.price-max').val(minValue);
    //     }

    //     ajaxFilterProduct();
    // });
</script>

<script>

    var level_car = [];
    $(".level_car").click(function() {
        var checked = $(this).val();
        if ($(this).is(':checked')) {
            level_car.push(checked);
        } else {
            level_car.splice($.inArray(checked, level_car),1);
        }
        
        ajaxFilterProduct();
    });

    var damages_first = [];
    $(".damages_first").click(function() {
        var checked = $(this).val();
        if ($(this).is(':checked')) {
            damages_first.push(checked);
        } else {
            damages_first.splice($.inArray(checked, damages_first),1);
        }
        
        ajaxFilterProduct();
    });

    var type_repair = [];
    $(".type_repair").click(function() {
        var checked = $(this).val();
        if ($(this).is(':checked')) {
            type_repair.push(checked);
        } else {
            type_repair.splice($.inArray(checked, type_repair),1);
        }
        
        ajaxFilterProduct();
    });

    var prb = [];
    $(".prb").click(function() {
        var checked = $(this).val();
        if ($(this).is(':checked')) {
            prb.push(checked);
        } else {
            prb.splice($.inArray(checked, prb),1);
        }
        
        ajaxFilterProduct();
    });

    var insurance_company = [];
    $(".insurance_company").click(function() {
        var checked = $(this).val();
        if ($(this).is(':checked')) {
            insurance_company.push(checked);
        } else {
            insurance_company.splice($.inArray(checked, insurance_company),1);
        }
        
        ajaxFilterProduct();
    });

    var price_order_by_ = '';
    function changePrice(price_order_by) {
        price_order_by_ = price_order_by;

        //alert(price_order_by_);

        ajaxFilterProduct();
    }

    function ajaxFilterProduct() {
        // alert(level_car);
        // alert(damages_first);
        // alert(type_repair);
        // alert(prb);
        // alert(insurance_company);

        // alert(price_order_by_);

        // alert($('.price-min').val());

        // alert($('#price_max').val());
        $.post('{{ url("ajaxFilterProductCar") }}', { 
            level_car: level_car, 
            damages_first: damages_first, 
            type_repair: type_repair,
            prb: prb, 
            insurance_company: insurance_company, 
            price_min: $('#price_min').val(),
            price_max: $('#price_max').val(), 
            price_order_by: price_order_by_,
            "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $(".div_insurance_car").html(data_split[0]);

                $(".rows_car").html(data_split[2]);
        });
    }

    function checkAllLevel() {
        if($("#check_all_level").is(":checked") == true) {
            $(".level_car").prop("checked", true);

            $.post('{{ url("ajaxFilterProductCar") }}', { check_all: true, "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $(".div_insurance_car").html(data_split[0]);

                $(".rows_car").html(data_split[2]);
            });
        } else if($("#check_all_level").is(":checked") == false) {
            $("#level_car").prop("checked", false);
        }
    }

    function checkAllCompany() {
        if($("#check_all_company").is(":checked") == true) {
            $(".insurance_company").prop("checked", true);

            $.post('{{ url("ajaxFilterProductCar") }}', { check_all: true, "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $(".div_insurance_car").html(data_split[0]);

                $(".rows_car").html(data_split[2]);
            });
        } else if($("#check_all_company").is(":checked") == false) {
            $("#insurance_company").prop("checked", false);
        }
    }
</script>