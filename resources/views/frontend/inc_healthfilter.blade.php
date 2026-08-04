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
            <div class="input-group">
                <input type="text" class="form-control" placeholder="ค้นหา.." aria-describedby="button-addon2" id="search_health_insurance">
                <button class="btn" type="button" id="button-addon2" onclick="clickSearchHealthInsurance();"><i class="fi fi-rr-search"></i></button>
            </div>
            <br>
            <li> <label class="check-container"> เลือกทั้งหมด
                    <input type="checkbox" id="check_all" onclick="clickAll();">
                    <span class="checkmark"></span>
                </label></li>
@if(!empty($type_insurance_inc))
    @foreach($type_insurance_inc as $r_inc)
            <li> <label class="check-container"> {{ $r_inc->type_insurance_name }}
                    <input type="checkbox" class="check_all type_insurance" value="{{ $r_inc->type_insurance_id }}">
                    <span class="checkmark"></span>
                </label></li>
    @endforeach
@endif
                {{-- <li> <label class="check-container"> ประกันสุขภาพ Health O-X Plan
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label></li> --}}

            <div class="middleborder "></div>

            <div class="titlefilter">
                คุ้มครองเริ่มต้น
            </div>

            <div class="filters">
            <div class="controls">
                <div class="price-range"></div>
                <div class="textinputs">
                    <input class="price-min" id="price_min" type="text" value="0" />
                    <input class="price-max" id="price_max" type="text" value="20000" />
                </div>
            </div>
        </div>

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
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="ค้นหา.." aria-describedby="button-addon2">
                    <button class="btn" type="button" id="button-addon2"><i class="fi fi-rr-search"></i></button>
                </div>
                <br>
                <li> <label class="check-container"> เลือกทั้งหมด
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
                <li> <label class="check-container"> ประกันสุขภาพ Health LTR Plan
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
                <li> <label class="check-container"> ประกันสุขภาพ Health O-X Plan
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>

                <div class="middleborder "></div>

                <div class="titlefilter">
                    คุ้มครองเริ่มต้น
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
                    บริษัทประกัน
                </div>
                <li> <label class="check-container"> เลือกทั้งหมด
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
                <li> <label class="check-container">
                        <div class="logosm"><img src="images/logosm/logo1.png" alt=""></div> กรุงเทพประกันภัย
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
                <li> <label class="check-container">
                        <div class="logosm"><img src="images/logosm/logo2.png" alt=""></div> วิริยะประกันภัย
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
                <li> <label class="check-container">
                        <div class="logosm"><img src="images/logosm/logo3.png" alt=""></div> ไทยศรีประกันภัย
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
                <li> <label class="check-container">
                        <div class="logosm"><img src="images/logosm/logo4.png" alt=""></div> เมืองไทยประกันภัย
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
                <li> <label class="check-container">
                        <div class="logosm"><img src="images/logosm/logo5.png" alt=""></div> แอลเอ็มจี ประกันภัย
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
                <li> <label class="check-container">
                        <div class="logosm"><img src="images/logosm/logo6.png" alt=""></div> ไอ โอ อิ กรุงเทพประกันภัย
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>
                <li> <label class="check-container">
                        <div class="logosm"><img src="images/logosm/logo7.png" alt=""></div> ธนชาตประกันภัย
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label></li>

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
            max: 20000,
            values: [0, 20000],
            slide: function (event, ui) {
                $('#price_min').val(ui.values[0]);
                $('#price_max').val(ui.values[1]);

                ajaxFilterProduct();
            }
        });
    });

    // $('.price-min').change(function (event) {
    //     var minValue = $('#price-min').val();
    //     var maxValue = $('#price-max').val();
    //     if (minValue <= maxValue) {
    //         $('.price-range').slider("values", 0, minValue);
    //     } else {
    //         $('.price-range').slider("values", 0, maxValue);
    //         $('.price-min').val(maxValue);
    //     }
    // });
    // // This isn't very DRY but it's just for demo purpose... oh well.
    // $('.price-max').change(function (event) {
    //     var minValue = $('.price-min').val();
    //     var maxValue = $('.price-max').val();
    //     if (maxValue >= minValue) {
    //         $('.price-range').slider("values", 1, maxValue);
    //     } else {
    //         $('.price-range').slider("values", 1, minValue);
    //         $('.price-max').val(minValue);
    //     }
    // });

    function clickSearchHealthInsurance() {
        // alert($("#search_health_insurance").val());
        if($("#search_health_insurance").val() == '') {
            alert('กรุณากรอกค้นหา..');

            $("#search_health_insurance").focus();
        } else {
            $.post("{{ url('ajaxFilterHealthy') }}", { search_health: $("#search_health_insurance").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $("#div_healthy_insurance").html(data_split[0]);
                $("#count_insurance_healthy").html(data_split[1]);
            });
        }
    }

    function clickAll() {
        if($("#check_all").is(":checked") == true) {
            $(".check_all").attr("checked", true);

            $.post("{{ url('ajaxFilterHealthy') }}", { check_insurance: true, "_token": "{{ csrf_token() }}" }, function(data) {
                // alert(type_insurance);
                // alert(insurance_company);
                // alert(order_by);
                var data_split = data.split('!@#$%^&*()_+');

                $("#div_healthy_insurance").html(data_split[0]);
                $("#count_insurance_healthy").html(data_split[1]);
            });

            // $(".check_all").addClass('checkmark');
        } else if($("#check_all").is(":checked") == false) {
            $(".check_all").attr("checked", false);
        }
    }

    var type_insurance = [];
    $(".type_insurance").click(function() {
        var checked = $(this).val();
        if ($(this).is(':checked')) {
            type_insurance.push(checked);
        } else {
            type_insurance.splice($.inArray(checked, type_insurance),1);
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

    var order_by = '';
    function changeOrderBy(orderby) {
        order_by = orderby

        ajaxFilterProduct(); 
    }

    var age_ = '';
    function changeAge(age) {
        age_ = age;

        ajaxFilterProduct(); 
    }

    var gender_ = '';
    function changeGender(gender) {
        gender_ = gender;

        ajaxFilterProduct(); 
    }

    var type_ = '';
    function changeType(type) {
        type_ = type;

        ajaxFilterProduct(); 
    }

    function ajaxFilterProduct() {
        //alert('123');
        $.post("{{ url('ajaxFilterHealthy') }}", { type_insurance: type_insurance, insurance_company: insurance_company, order_by: order_by, age: age_, gender: gender_, type: type_
            ,"_token": "{{ csrf_token() }}" 
            ,price_min: $('#price_min').val()
            ,price_max: $('#price_max').val() 
        
        }, function(data) {
            // alert(type_insurance);
            // alert(insurance_company);
            // alert(order_by);
            var data_split = data.split('!@#$%^&*()_+');

            $("#div_healthy_insurance").html(data_split[0]);
            $("#count_insurance_healthy").html(data_split[1]);
        });
    }

    function checkAllCompany() {
        if($("#check_all_company").is(":checked") == true) {
            $(".insurance_company").prop("checked", true);

            $.post("{{ url('ajaxFilterHealthy') }}", { check_insurance: true, "_token": "{{ csrf_token() }}" }, function(data) {
                // alert(type_insurance);
                // alert(insurance_company);
                // alert(order_by);
                var data_split = data.split('!@#$%^&*()_+');

                $("#div_healthy_insurance").html(data_split[0]);
                $("#count_insurance_healthy").html(data_split[1]);
            });
        } else if($("#check_all_company").is(":checked") == true) {
            $(".insurance_company").prop("checked", true);
        }
    }
</script>