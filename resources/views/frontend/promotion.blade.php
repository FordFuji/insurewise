<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')
    <section id="promotionpage"  class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row" data-aos="fade-down" data-aos-once="true">
                <div class="col">
                    <div class="bannerpages">
                        <!-- PC -->
                        <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <img src="{{ asset('public/frontend/images/banner_promo.png') }}" class="img-fluid" alt="">
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
                                        <li class="breadcrumb-item active" aria-current="page">โปรโมชั่น</li>
                                    </ol>
                                </nav>
                            </div>
                            <h1>โปรโมชั่น</h1>
                            <h2>โปรโมชั่นสุดคุ้ม คัดสรรจาก อินชัวไวซ์</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5" data-aos="fade-up" data-aos-once="true">
@if(!empty($promotion))
    @foreach($promotion as $r)
                    <div class="col-lg-6 hoverstyle">
                        <div class="promosec">
                            <figure>
                                <a href="{{ url('promotion_detail/'.$r->promotion_id) }}">
                                    <img src="{{ asset('public/uploads/promotion/'.$r->promotion_image) }}" alt="">
                                </a>
                            </figure>
                            <div class="contentpromo">
                                {{ $r->promotion_topic }}
                            </div>
                        </div>
                    </div>
    @endforeach
@endif
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="pagenumber">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{ $promotion->links() }}
                                    {{-- <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="bi bi-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item  active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <i class="bi bi-chevron-right"></i>
                                        </a>
                                    </li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend/inc_footer')




</body>

</html>