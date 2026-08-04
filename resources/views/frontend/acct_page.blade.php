<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
inc_header
<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')
    <section id="aboutpage" class="wrapperPages">
    <div class="container-fluid g-0 overflow-hidden">
            <div class="row" data-aos="fade-down" data-aos-once="true">
                <div class="col">
                    <div class="bannerpages">
                        <!-- PC -->
                        <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <img src="{{ asset('public/frontend/images/banner_terms.png') }}" class="img-fluid" alt="">
                        </div>
                        <!-- MB -->
                        <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                            <img src="{{ asset('public/frontend/images/banner_promo.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="captionBannereach">
                            <div class="dividepage mb-5">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                        <li class="breadcrumb-item active" aria-current="page">บัญชีของฉัน</li>
                                    </ol>
                                </nav>
                            </div>
                            <h1>@if(!empty($row)){{ $row->member_name_surname }}@endif</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5">

                    <div class="col-lg-6">
                        <div class="about">
                         
                            <span class="graytext">รหัสสมาชิก : @if(!empty($row)){{ $row->member_code }}@endif</span>
                            <p class="mt-3 mb-5">
                                อีเมล : @if(!empty($row)){{ $row->member_email }}@endif
                                <br> <br>
                                เบอร์โทรศัพท์ : @if(!empty($row)){{ $row->member_tel }}@endif
                                <br> <br>
                                ที่อยู่ปัจจุบัน : @if(!empty($row)){{ $row->member_address }}@endif
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend/inc_footer')




</body>

</html>