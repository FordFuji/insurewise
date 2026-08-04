<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')
    <section id="homepage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row">
                <div class="col">
                    <div class="grouponbanner">
                        <div class="banner_slide owl-carousel owl-theme">
@if(!empty($banner_slide))
    @foreach($banner_slide as $r)
                            <div class="item">
                                <!-- PC -->
                                <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                    <img src="{{ asset('public/uploads/banner_slide/'.$r->banner_slide_image) }}" alt="" class="img-fluid">
                                </div>
                                <!-- MB -->
                               <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <img src="{{ asset('public/uploads/banner_slide/'.$r->banner_slide_image_mobile) }}" alt="" class="img-fluid">
                                </div>
                            </div>
    @endforeach
@endif
                            {{-- <div class="item">
                                <!-- PC -->
                                <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                    <img src="{{ asset('public/frontend/images/banner2.png') }}" alt="" class="img-fluid">
                                </div>
                                <!-- MB -->
                                <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <img src="{{ asset('public/frontend/images/banner_mb.png') }}" alt="" class="img-fluid">
                                </div> 
                            </div> --}}
                        </div>
                        <div class="wrapper_pad">
                            <div class="searchboxHomepage">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#fieldsearch" type="button" role="tab"
                                            aria-controls="fieldsearch" aria-selected="true">ประกันรถยนต์</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="friendsearch-tab" data-bs-toggle="pill"
                                            data-bs-target="#friendsearch" type="button" role="tab"
                                            aria-controls="friendsearch" aria-selected="false"> ประกันสุขภาพ</button>
                                    </li>

                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="fieldsearch" role="tabpanel"
                                        aria-labelledby="fieldsearch-tab">
                                        <form action="{{ url('car_insurance') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="contactform">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>ยี่ห้อรถยนต์</label>
                                                            <div class="input-group">

                                                                <select class="form-select" id="inputGroupSelect01" name="brand_car">
                                                                    <option value="">-- ยี่ห้อรถ --</option>
@if(!empty($brand_car))
    @foreach($brand_car as $r)
                                                                    <option value="{{ $r->brand_car_id }}">{{ $r->brand_car_name }}</option>
    @endforeach
@endif
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>รุ่นรถ</label>
                                                            <div class="input-group">

                                                                <select class="form-select" id="inputGroupSelect01" name="model_car">
                                                                    <option value="">-- รุ่นรถ --</option>
@if(!empty($model_car))
    @foreach($model_car as $r)
                                                                    <option value="{{ $r->model_car_id }}">{{ $r->model_car_name }}</option>
    @endforeach
@endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>ปีรถยนต์</label>
                                                            <div class="input-group">
                                                                <select class="form-select" id="inputGroupSelect01" name="year_car">
                                                                    <option value="">-- ปีรถ --</option>
@if(!empty($year_car))
    @foreach($year_car as $r)
                                                                    <option value="{{ $r->year_car_id }}">{{ $r->year_car_name }}</option>
    @endforeach
@endif                                        
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <button type="submit" class="btn btnsearch"><i
                                                        class="fi fi-rr-search"></i>
                                                    ค้นหาประกันภัย</a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>

                                    <div class="tab-pane fade" id="friendsearch" role="tabpanel"
                                        aria-labelledby="friendsearchtab">
                                        <form action="{{ url('health_insurance') }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="contactform">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <label>อายุ</label>
                                                            <div class="input-group">

                                                                <select class="form-select" id="inputGroupSelect01" name="insurance_healthy_age">
                                                                    <option value="">-- เลือกอายุ --</option>
@for($i = 1; $i <= 100; $i++)
                                                                    <option value="{{ $i }}">{{ $i }}</option>
@endfor
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>เพศ</label>
                                                            <div class="input-group">

                                                                <select class="form-select" id="inputGroupSelect01" name="insurance_healthy_gender">
                                                                    <option value="">-- เลือกเพศ--</option>
                                                                    <option value="ชาย">ชาย</option>
                                                                    <option value="หญิง">หญิง</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <label>ประเภทประกัน</label>
                                                            <div class="input-group">

                                                                <select class="form-select" id="inputGroupSelect01" name="type_insurance_id">
                                                                    <option value="">-- เลือกประกัน -- </option>
                                                                    @if(!empty($type))
                                                                        @foreach($type as $r)
                                                                            <option value="{{ $r->type_insurance_id }}">{{ $r->type_insurance_name }}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <button type="submit" class="btn btnsearch"><i
                                                        class="fi fi-rr-search"></i>
                                                    ค้นหาประกันภัย</a>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="whyus">
                <div class="row">
                    <div class="col">
                        <div class="ourservicelist">
                            <div class="wrapper_pad">
                                <div class="row">
                                    <div class="col">
                                        <div class="titlehead text-center">
                                            <h1>ประกันทั้งหมดของเรา</h1>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="wrapper_pad">
                            <div class="row">
                                <div class="col">
                                    <div class="bgwhiterad">
                                        <div class="listiconser Cropscroll">
                                            <ul>
                                                <li><a href="#">
                                                        <div class="circ"><img src="{{ asset('public/frontend/images/ic_1.png') }}" alt=""> </div> <br>
                                                        ประกันภัยรถยนต์
                                                    </a></li>
                                                <li><a href="{{ url('health_insurance_landing') }}">
                                                        <div class="circ"><img src="{{ asset('public/frontend/images/ic_2.png') }}" alt=""> </div> <br>
                                                        ประกันสุขภาพ
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="circ"><img src="{{ asset('public/frontend/images/ic_3.png') }}" alt=""> </div> <br>
                                                        ประกันบ้านคอนโด
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="circ"><img src="{{ asset('public/frontend/images/ic_4.png') }}" alt=""> </div> <br>
                                                        ประกันอะไหล่รถยนต์
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="circ"><img src="{{ asset('public/frontend/images/ic_5.png') }}" alt=""> </div>
                                                        <br>
                                                        ประกันขนส่งสินค้า
                                                    </a></li>
                                                <li><a href="#">
                                                        <div class="circ"><img src="{{ asset('public/frontend/images/ic_6.png') }}" alt=""> </div> <br>
                                                        ประกันเดินทาง
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col">
                            <div class="contactontop">
                                <div class="row">
                                    <div class="col-lg-2 text-start text-lg-center mb-3 mb-lg-0">
                                        <img src="{{ asset('public/frontend/images/iconic_white.png') }}" alt="">
                                    </div>
                                    <div class="col-lg-7">
                                        <h2>หากคุณสนใจ <br>
                                            นัดคุยกับเราได้เลย
                                        </h2>
                                        <p>กรอกแบบฟอร์มนัดหมาย ให้เราติดต่อกลับได้ </p>
                                    </div>
                                    <div class="col-lg-3 pt-4">
                                        <a href="#" class="btn btn-blueprimary">
                                            <i class="fi fi-rr-envelope"></i> กรอกแบบฟอร์มนัดหมาย
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="titleTopic whyinsuret">
                                ทำไมต้องซื้อประกันกับ <span class="orangetext">Insurewise ?</span>
                            </div>
                            <div class="listwhy mt-3">
                                <li>
                                    <div class="icleft">
                                        <img src="{{ asset('public/frontend/images/why1.png') }}" alt="">
                                    </div>
                                    <div class="iccontent">
                                        การันตีราคาดีที่สุด
                                    </div>
                                </li>
                                <li>
                                    <div class="icleft">
                                        <img src="{{ asset('public/frontend/images/why2.png') }}" alt="">
                                    </div>
                                    <div class="iccontent">
                                        เลือกชำระเบี้ยเต็มจำนวนหรือจ่ายแบบผ่อน

                                    </div>
                                </li>
                                <li>
                                    <div class="icleft">
                                        <img src="{{ asset('public/frontend/images/why3.png') }}" alt="">
                                    </div>
                                    <div class="iccontent">
                                        บริการให้คำปรึกษา <br>
                                        โดยเจ้าหน้าที่ผู้ชำนาญด้านประกัน
                                    </div>
                                </li>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <img src="{{ asset('public/frontend/images/whytop.png') }}" alt="" class="imgos">
                        </div>
                    </div>
                </div>

            </div>
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col-9 col-lg-6 titleTopic">
                        <h3>โปรโมชั่นสุดคุ้มคัดสรรจาก <span class="orangetext">Insurewise </span> </h3>
                    </div>
                    <div class="col-3 col-lg-6 text-end">
                        <a href="{{ url('promotion') }}" class="morellink">ดูโปรโมชั่นทั้งหมด</a>
                    </div>
                </div>
                <div class="row mt-4">
@if(!empty($promotion))
    @foreach($promotion as $r)
                    <div class="col-lg-6 hoverstyle promosec">
                        <figure>
                            <a href="{{ url('') }}">
                                <img src="{{ asset('public/uploads/promotion/'.$r->promotion_image) }}" alt="">
                            </a>
                        </figure>
                    </div>
    @endforeach
@endif
                </div>
            </div>
            <div class="row mt-5 g-0">
                <div class="col-lg-6">
                    <div class="securelt">
                        <div class="wrapper_pad">
                            <h5>มั่นใจในระบบความปลอดภัย</h5>
                            ระบบเราได้รับการรับรองระบบบริหารจัดการ <br>
                            ความปลอดภัยของข้อมูลใบอนุญาตขายประกันออนไลน์จากทางคปภ.
                            <div class="numbersec mt-4">ใบอนุญาตเลขที่ <span class="orangetext">ว00022/2560</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="securert">
                        <div class="wrapper_pad text-center">
                            <div class="row">
                                <div class="col-lg-6">
                                    <a href="#">
                                        <div class="bdcircle mb-3">
                                            <img src="{{ asset('public/frontend/images/insurance_icon.png') }}" alt="">
                                        </div> <br>
                                        ตรวจสอบใบอนุญาตออนไลน์
                                    </a>
                                </div>
                                <div class="col-lg-6 mt-4 mt-md-0">
                                    <div class="bdcircle mb-3">
                                        <a href="#"> <img src="{{ asset('public/frontend/images/download_icon.png') }}" alt="">
                                    </div> <br>
                                    ดาวน์โหลดใบอนุญาต</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="partnerbg">
                <div class="wrapper_pad">
                    <div class="row">
                        <div class="col titleTopic text-center">
                            <h3>พันธมิตร <span class="orangetext">ทางธุรกิจ</span> </h3>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col">
                            <div class="logopartner owl-carousel owl-theme">
@if(!empty($insurance_company))
    @foreach($insurance_company as $r)
                                <div class="item">
                                    <a href="{{ $r->insurance_company_link }}" target="_blank">
                                        <div class="logobox">
                                            <img src="{{ asset('public/uploads/insurance_company/'.$r->insurance_company_image) }}" alt="">
                                        </div>
                                    </a>
                                </div>
    @endforeach
@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col-9 col-lg-6 titleTopic">
                        <h3>ข่าวสารและ <span class="orangetext">บทความ</span> </h3>
                    </div>
                    <div class="col-3 col-lg-6 text-end">
                        <a href="#" class="morellink">ดูทั้งหมด</a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="morenews owl-carousel owl-theme">
@if(!empty($news_and_article))
    @foreach($news_and_article as $r)
                            <div class="item">
                                <div class="newsgroup">
                                    <div class="hoverstyle">
                                        <figure>
                                            <a href="{{ url('news_detail/'.$r->news_and_article_id) }}">
                                                <img src="{{ asset('public/uploads/news_and_article/'.$r->news_and_article_image) }}" alt="">
                                                <span class="tag">
                                                    บทความ
                                                </span>
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="newscontent">
                                        <h4>{{ $r->news_and_article_topic }}</h4>
                                        <div class="content">{{ $r->news_and_article_description }}
                                        </div>
                                        <div class="middleborder"></div>
                                        <div class="row">
                                            <div class="col-8 col-lg-10">
                                                <div class="date">
                                                    <i class="fi fi-rr-calendar"></i> {{ date2date($r->news_and_article_date) }}
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-2 text-end">
                                                <a href="{{ url('news_detail/'.$r->news_and_article_id) }}" class="readmore"><svg width="38" height="38"
                                                        viewBox="0 0 38 38" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M25.1716 21.7027L25.164 15.1409C25.1623 14.5701 24.9348 14.0232 24.5312 13.6196C24.1276 13.216 23.5806 12.9885 23.0098 12.9868L16.4481 12.9791C16.1627 12.98 15.8892 13.0937 15.6874 13.2955C15.4856 13.4973 15.3718 13.7708 15.371 14.0562C15.3704 14.1988 15.3981 14.3401 15.4524 14.472C15.5067 14.6039 15.5865 14.7237 15.6874 14.8245C15.7882 14.9254 15.908 15.0052 16.0399 15.0595C16.1718 15.1138 16.3131 15.1415 16.4557 15.1409L21.4821 15.1409L13.0793 23.5437C12.8767 23.7463 12.7629 24.021 12.7629 24.3076C12.7629 24.5941 12.8767 24.8689 13.0793 25.0714C13.2819 25.274 13.5567 25.3879 13.8432 25.3879C14.1297 25.3879 14.4045 25.274 14.6071 25.0714L23.0098 16.6687L23.0098 21.6951C23.0088 21.9817 23.1217 22.2571 23.3237 22.4605C23.5257 22.6639 23.8003 22.7788 24.0869 22.7798C24.3736 22.7808 24.6489 22.6679 24.8524 22.4659C25.0558 22.2639 25.1706 21.9894 25.1716 21.7027Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @include('frontend/inc_footer')

    <script>
        $(document).ready(function () {
            $('.banner_slide').owlCarousel({
                    loop: true,
                    margin: 20,
                    dots: false,
                    autoplay: true,
                    nav: true,
                    navText: ['<img src="{{ asset('public/frontend/images/arrow_left.png') }}">', '<img src="{{ asset('public/frontend/images/arrow_right.png') }}">'],
                    navClass: ['owl-prev', 'owl-next'],
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                    smartSpeed: 2000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                }),
                $('.morenews').owlCarousel({
                    loop: true,
                    margin: 20,
                    dots: true,
                    autoplay: true,
                    nav: false,
                    navText: ['<img src="{{ asset('public/frontend/images/arrow_left.png') }}">', '<img src="{{ asset('public/frontend/images/arrow_right.png') }}">'],
                    navClass: ['owl-prev', 'owl-next'],
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
                            items: 3
                        }
                    }
                })
            $('.logopartner').owlCarousel({
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
                        items: 2,
                        nav: true,
                        dots: false
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 6
                    }
                }
            })


        });
    </script>

</body>

</html>