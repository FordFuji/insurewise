<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')
    <section id="newspage"  class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row">
                <div class="col">
                    <div class="topnewsbg">
                        <div class="wrapper_pad">
                            <div class="dividepage mb-5">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                        <li class="breadcrumb-item active" aria-current="page">ข่าวสารและบทความ
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <h1>@if(!empty($row)){{ $row->news_and_article_topic }}@endif</h1>
                            <span class="datewhite"> <i class="fi fi-rr-calendar"></i> @if(!empty($row)){{ date2date($row->news_and_article_date) }}@endif</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper_pad">
@if(!empty($row))
    {!! $row->news_and_article_detail !!}
@endif
                {{-- <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="imgnewsindex text-center">
                            <img src="{{ asset('public/frontend/images/news_full.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="contentbody">
                            สัญญาณอันตราย จากการหยุดหายใจขณะหลับ
                            อาการหยุดหายใจขณะหลับนั้น สามารถเกิดขึ้นได้กับทุกเพศทุกวัย ไม่เว้นแม้แต่เด็กก่อนวัยเรียน
                            แต่ว่าในประเทศของเรานั้นมักพบอาการนี้ได้มากที่สุดในหมู่ผู้สูงอายุมากที่สุดค่ะ
                            "โรคหยุดหายใจขณะหลับ" เป็นสาเหตุและความเสี่ยง เช่น ความดันโลหิตสูง โรคหลอดเลือดหัวใจ
                            อัมพฤกษ์และอัมพาต ภาวะซึมเศร้าเรื้อรัง เสื่อมสมรรณภาพทางเพศ
                            อาการที่บ่งชี้อาจะเป็นได้
                            - นอนกรนเสียงดังมากเป็นประจำ
                            - รู้สึกว่านอนไม่เต็มอิ่ม ตื่นขึ้นมาบ่อยๆ มีอาการไม่สดชื่นแจ่มใจ
                            - คอแห้ง
                            - ปวดศีรษะเป็นประจำทุกเช้า
                            - ง่วงนอนมากกว่าปกติในระหว่างวัน
                            - หงุดหงิดง่าย หรืออารมณ์ไม่ดีง่ายขึ้น
                            - มีโรคประจำตัวร่วม อาทิเช่น ความดันโลหิตสูง โรคหัวใจ เป็นต้น
                            - มีคนสังเกตเห็นว่าระหวังที่นอนหลับนั้นตนหายใจไม่สม่ำเสมอ
                            มีเสียงกรนดังแต่ก็หยุดพักไปเป็นช่วงๆ
                            ลองสังเกตุตัวเองและปรึกษาแพทย์นะคะ

                        </div>
                    </div>
                </div> --}}
                <div class="row mt-5">
                    <div class="col">
                        <div class="titleTopic">
                            ข่าวสารและบทความอื่นๆที่น่าสนใจ
                        </div>
                    </div>
                </div>
                
                <div class="row mt-5">
                    <div class="col">
                        <div class="morenews owl-carousel owl-theme">
@if(!empty($news_and_article))
    @foreach($news_and_article as $r)
                            <div class="item">
                                <div class="newsgroup">
                                    <div class="hoverstyle">
                                        <figure>
                                            <a href="#">
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
                                            <div class="col-lg-10">
                                                <div class="date">
                                                    <i class="fi fi-rr-calendar"></i> {{ date2date($r->news_and_article_date) }}
                                                </div>
                                            </div>
                                            <div class="col-lg-2 text-end">
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
            $('.morenews').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                nav: false,
                navText: ['<img src="{{ asset('public/frontend/images/arrow_left.png') }}">', '<img src="{{ asset('public/frontend/images/arrow_right.png') }}">'],
                navClass: ['owl-prev', 'owl-next'],
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
                        items: 1,
                        nav: true,
                        dots: false
                    },
                    1000: {
                        items: 3
                    }
                }
            })


        });
    </script>


</body>

</html>