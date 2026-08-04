<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header'); ?>
</head>

<body>
    @include('frontend/inc_topmenu'); ?>
    <section id="newspage"  class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="row" data-aos="fade-down" data-aos-once="true">
                <div class="col">
                    <div class="bannerpages">
                            <img src="{{ asset('public/frontend/images/banner_news.png') }}" class="img-fluid" alt="">
                        <div class="captionBannereach">
                            <div class="dividepage mb-5">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i class="fi fi-rr-home"></i> </a></li>
                                        <li class="breadcrumb-item active" aria-current="page">ข่าวสารและบทความ
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                            <h1>ข่าวสารและบทความ</h1>
                            <h2>ข่าวสาร ข่าวประกันภัย และบทความต่าง ๆ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col-lg-8 titleTopic">
                        <h3>ข่าวสารและ <span class="orangetext">บทความ </span> </h3>
                    </div>
                    <div class="col-lg-4 text-end">
                        <div class="row mt-3 mt-lg-0">
                            <div class="col-6 col-lg-6">
                                <div class="selectfilter">
                                    <select class="form-select" aria-label="Default select example" onchange="selectType(this.value);">
                                        <option selected>ทั้งหมด</option>
                                        <option value="News">ข่าวสาร</option>
                                        <option value="Article">บทความ</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-6 col-lg-6">
                                <div class="selectfilter">
                                    <select class="form-select" aria-label="Default select example" onchange="selectSort(this.value);">
                                        <option selected>จัดเรียงตาม</option>
                                        <option value="news_and_article_desc">ข่าวใหม่</option>
                                        <option value="news_suggest">ข่าวแนะนำ</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 div_news_article">
@if(!empty($news_and_article))
    @foreach($news_and_article as $r)
                    <div class="col-6 col-lg-4">
                        <div class="newsgroup">
                            <div class="hoverstyle">
                            <figure>
                                <a href="{{ url('news_detail/'.$r->news_and_article_id) }}">
                                    <img src="{{ asset('public/uploads/news_and_article/'.$r->news_and_article_image) }}" alt="">
                                    <span class="tag">
                                        {{ $r->news_and_article_news_or_article }}
                                    </span>
                                </a>
                            </figure>
                            </div>
                            <div class="newscontent">
                                <h4>{{ $r->news_and_article_topic }}</h4>
                                <div class="content">{{ $r->news_and_article_description }}</div>
                                <div class="middleborder"></div>
                                <div class="row">
                                    <div class="col-8 col-lg-10">
                                        <div class="date">
                                            <i class="fi fi-rr-calendar"></i> {{ date2date($r->news_and_article_date) }}
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-2 text-end">
                                        <a href="{{ url('news_detail/'.$r->news_and_article_id) }}" class="btn readmore"><svg viewBox="0 0 38 38"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    {{-- <div class="col-6 col-lg-4">
                        <div class="newsgroup">
                            <div class="hoverstyle">
                            <figure>
                                <a href="#">
                                    <img src="{{ asset('public/frontend/images/news2.png') }}" alt="">
                                    <span class="tag">
                                        ข่าวสาร
                                    </span>
                                </a>
                            </figure>
                            </div>
                            <div class="newscontent">
                                <h4>ระวัง! ไวรัส RSV ในเด็กเล็ก คล้ายไข้หวัด..แต่อันตราย ถึงชีวิต!!!!</h4>
                                <div class="content">ประกันบ้าน คุ้มครองภัยน้ำท่วมบ้านได้..จริงไหม? at ประกัน.</div>
                                <div class="middleborder"></div>
                                <div class="row">
                                    <div class="col-8 col-lg-10">
                                        <div class="date">
                                            <i class="fi fi-rr-calendar"></i> 19/07/2022
                                        </div>
                                    </div>
                                    <div class="col-4 col-lg-2 text-end">
                                        <a href="#" class="btn readmore"><svg width="38" height="38" viewBox="0 0 38 38"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M25.1716 21.7027L25.164 15.1409C25.1623 14.5701 24.9348 14.0232 24.5312 13.6196C24.1276 13.216 23.5806 12.9885 23.0098 12.9868L16.4481 12.9791C16.1627 12.98 15.8892 13.0937 15.6874 13.2955C15.4856 13.4973 15.3718 13.7708 15.371 14.0562C15.3704 14.1988 15.3981 14.3401 15.4524 14.472C15.5067 14.6039 15.5865 14.7237 15.6874 14.8245C15.7882 14.9254 15.908 15.0052 16.0399 15.0595C16.1718 15.1138 16.3131 15.1415 16.4557 15.1409L21.4821 15.1409L13.0793 23.5437C12.8767 23.7463 12.7629 24.021 12.7629 24.3076C12.7629 24.5941 12.8767 24.8689 13.0793 25.0714C13.2819 25.274 13.5567 25.3879 13.8432 25.3879C14.1297 25.3879 14.4045 25.274 14.6071 25.0714L23.0098 16.6687L23.0098 21.6951C23.0088 21.9817 23.1217 22.2571 23.3237 22.4605C23.5257 22.6639 23.8003 22.7788 24.0869 22.7798C24.3736 22.7808 24.6489 22.6679 24.8524 22.4659C25.0558 22.2639 25.1706 21.9894 25.1716 21.7027Z"
                                                    fill="white" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
    @endforeach
@endif
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="pagenumber">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    {{ $news_and_article->links() }}
                                    {{-- <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <i class="bi bi-chevron-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
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
    <script>
        var type;
        function selectType(type_) {
            type = type_;

            ajaxFilter();
        }

        var sort;
        function selectSort(sort_) {
            sort = sort_;

            ajaxFilter();
        }

        function ajaxFilter() {
            // alert(type);
            // alert(sort);

            $.post('{{ url("ajaxFilterNewsArticle") }}', { type: type, sort: sort, "_token": "{{ csrf_token() }}" }, function(data) {
                //alert(data);

                $(".div_news_article").html(data);
            });
        }
    </script>
</body>

</html>