@extends('layouts.layout-c')
@section('tieudetrang')
    Trang chủ tin tức
@endsection

@section('slider')
    <div id="main-slider-2" data-slider-width="100%" data-slider-height="750" data-orientation="vertical"
        class="main-slider main-slider_mod-b main-slider_light slider-pro">
        <div class="sp-slides">
            <!-- Slide -->
            @foreach ($slide as $sl)
                <div class="sp-slide"><img src="/upload/{{ $sl->urlHinh }}" alt="slider" class="sp-image" />
                    <div class="container">
                        <div data-width="100%" data-show-transition="left" data-hide-transition="left"
                            data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="sp-layer">
                            <div class="main-slider__wrap-title">
                                <h2 class="main-slider__title"><span>{{ $sl->tieuDe }}</span><br />
                                    <span>PhucTV</span>
                                </h2>

                            </div>
                        </div>
                        <div data-width="100%" data-show-transition="up" data-hide-transition="left"
                            data-show-duration="800" data-show-delay="1700" data-hide-delay="400" class="sp-layer">
                            @foreach ($loai as $l)
                                @if ($l->id === $sl->idLT)
                                    <a href="blog-1.html"
                                        class="main-slider__link bg-3 btn btn-xs btn-effect">{{ $l->ten }}
                                    </a>
                                @endif
                            @endforeach

                        </div>
                        <div data-width="100%" data-show-transition="right" data-hide-transition="left"
                            data-show-duration="800" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
                            <div class="main-slider-meta"><span
                                    class="main-slider-meta__item">{{ $sl->ngayDang }}</span><span
                                    class="main-slider-meta__item"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-eye" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                        </path>
                                    </svg>{{ $sl->xem }}</span></div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="sp-thumbnails">
            @foreach ($slide as $sl)
                <div class="sp-thumbnail">
                    <div class="sp-thumbnail__img"><img src="/upload/{{ $sl->urlHinh }}" alt="foto" />
                    </div>
                    <div class="sp-thumbnail__title">{{ $sl->tieuDe }}</div>
                    @foreach ($loai as $l)
                        @if ($l->id === $sl->idLT)
                            <div class="sp-thumbnail__label label bg-5">{{ $l->ten }}</div>
                        @endif
                    @endforeach

                </div>
            @endforeach

        </div>
    </div>
@endsection

@section('noidung')
    <section class="section-area wow">
        <h2 class="ui-title-block">
            <span class="ui-title-block__subtitle">KHÁM PHÁ HÀNG ĐẦU</span>
            <span class="text-uppercase">tin tức</span>
        </h2>
        <ul class="nav nav-tabs">
            <li class="tabs-label">LỌC THEO BÀI VIẾT</li>
            <li class="active">
                <a href="#tab-1" data-toggle="tab">Đầu tiên</a>
            </li>
            <li>
                <a href="#tab-2" data-toggle="tab">Mới nhất</a>
            </li>
            <li>
                <a href="#tab-3" data-toggle="tab">Bài viết nóng</a>
            </li>
            <li>
                <a href="#tab-4" data-toggle="tab">Đánh giá cao nhất</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-md-6">
                        @foreach ($tinmuon->take(1) as $t)
                            <article class="post post-2 post-2_mod-d clearfix">
                                <div class="entry-media"><a href="upload/{{ $t->urlHinh }}" class="prettyPhoto"><img
                                            src="upload/{{ $t->urlHinh }}" alt="Foto" class="img-responsive" /></a>
                                    @foreach ($loaitin as $lt)
                                        @if ($lt->id == $t->idLT)
                                            <span class="label bg-6">{{ $lt->ten }}</span>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title text-uppercase">{{ $t->tieuDe }}
                                        </h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">Bởi:<a href="news_details-1.html"
                                                class="entry-meta__link"> Trần Vĩnh
                                                Phúc</a></span><span class="entry-meta__item"><a href="news_details-1.html"
                                                class="entry-meta__link">{{ $t->ngayDang }}</a></span><span
                                            class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                                href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                    <div class="entry-content">
                                        <p>{{ $t->tomTat }}</p>
                                    </div>
                                    <div class="entry-footer"><a href="news_details-1.html" class="btn-link">ĐỌc thêm</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @foreach ($tinmuon->take(5) as $t)
                            <article class="post post-3 post-3_mod-a clearfix">
                                <div class="entry-media">
                                    <a href="upload/{{ $t->urlHinh }}" class="prettyPhoto">
                                        <img src="upload/{{ $t->urlHinh }}" alt="Foto" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="news_details-1.html">{{ $t->tieuDe }}</a>
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        @foreach ($loaitin as $lt)
                                            @if ($lt->id == $t->idLT)
                                                <span class="category color-4">{{ $lt->ten }}</span>
                                            @endif
                                        @endforeach

                                        <span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                                href="news_details-1.html" class="entry-meta__link">6</a></span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="tab-2" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-6">
                        @foreach ($tinmoi->take(1) as $t)
                            <article class="post post-2 post-2_mod-d clearfix">
                                <div class="entry-media"><a href="upload/{{ $t->urlHinh }}" class="prettyPhoto"><img
                                            src="upload/{{ $t->urlHinh }}" alt="Foto"
                                            class="img-responsive" /></a>
                                    @foreach ($loaitin as $lt)
                                        @if ($lt->id == $t->idLT)
                                            <span class="label bg-6">{{ $lt->ten }}</span>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title text-uppercase">{{ $t->tieuDe }}
                                        </h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">Bởi:<a
                                                href="news_details-1.html" class="entry-meta__link"> Trần Vĩnh
                                                Phúc</a></span><span class="entry-meta__item"><a
                                                href="news_details-1.html"
                                                class="entry-meta__link">{{ $t->ngayDang }}</a></span><span
                                            class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                                href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                    <div class="entry-content">
                                        <p>{{ $t->tomTat }}</p>
                                    </div>
                                    <div class="entry-footer"><a href="news_details-1.html" class="btn-link">ĐỌc thêm</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @foreach ($tinmoi->take(5) as $t)
                            <article class="post post-3 post-3_mod-a clearfix">
                                <div class="entry-media">
                                    <a href="upload/{{ $t->urlHinh }}" class="prettyPhoto">
                                        <img src="upload/{{ $t->urlHinh }}" alt="Foto" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="news_details-1.html">{{ $t->tieuDe }}</a>
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        @foreach ($loaitin as $lt)
                                            @if ($lt->id == $t->idLT)
                                                <span class="category color-4">{{ $lt->ten }}</span>
                                            @endif
                                        @endforeach

                                        <span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                                href="news_details-1.html" class="entry-meta__link">6</a></span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="tab-3" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-6">
                        @foreach ($tinnong->take(1) as $t)
                            <article class="post post-2 post-2_mod-d clearfix">
                                <div class="entry-media"><a href="upload/{{ $t->urlHinh }}" class="prettyPhoto"><img
                                            src="upload/{{ $t->urlHinh }}" alt="Foto"
                                            class="img-responsive" /></a>
                                    @foreach ($loaitin as $lt)
                                        @if ($lt->id == $t->idLT)
                                            <span class="label bg-6">{{ $lt->ten }}</span>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title text-uppercase">{{ $t->tieuDe }}
                                        </h2>
                                    </div>
                                    <div class="entry-meta"><span class="entry-meta__item">Bởi:<a
                                                href="news_details-1.html" class="entry-meta__link"> Trần Vĩnh
                                                Phúc</a></span><span class="entry-meta__item"><a
                                                href="news_details-1.html"
                                                class="entry-meta__link">{{ $t->ngayDang }}</a></span><span
                                            class="entry-meta__item">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-eye" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                <path
                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                                </path>
                                            </svg>
                                            <a href="news_details-1.html"
                                                class="entry-meta__link">{{ $t->xem }}</a></span></div>
                                    <div class="entry-content">
                                        <p>{{ $t->tomTat }}</p>
                                    </div>
                                    <div class="entry-footer"><a href="news_details-1.html" class="btn-link">ĐỌc thêm</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        @foreach ($tinnong->take(5) as $t)
                            <article class="post post-3 post-3_mod-a clearfix">
                                <div class="entry-media">
                                    <a href="upload/{{ $t->urlHinh }}" class="prettyPhoto">
                                        <img src="upload/{{ $t->urlHinh }}" alt="hinhanh" class="img-responsive" />
                                    </a>
                                </div>
                                <div class="entry-main">
                                    <div class="entry-header">
                                        <h2 class="entry-title"><a href="news_details-1.html">{{ $t->tieuDe }}</a>
                                        </h2>
                                    </div>
                                    <div class="entry-meta">
                                        @foreach ($loaitin as $lt)
                                            @if ($lt->id == $t->idLT)
                                                <span class="category color-4">{{ $lt->ten }}</span>
                                            @endif
                                        @endforeach

                                        <span class="entry-meta__item"><svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-eye" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                                <path
                                                    d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                                </path>
                                            </svg><a href="news_details-1.html"
                                                class="entry-meta__link">{{ $t->xem }}</a></span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
            <div id="tab-4" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-6">
                        <article class="post post-2 clearfix">
                            <div class="entry-media"><a href="assets/media/content/post/360x300/1.jpg"
                                    class="prettyPhoto"><img src="assets/media/content/post/360x300/1.jpg" alt="Foto"
                                        class="img-responsive" /></a><span class="label bg-6">travel</span>
                            </div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt
                                    </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html"
                                            class="entry-meta__link"> john sina</a></span><span
                                        class="entry-meta__item"><a href="news_details-1.html"
                                            class="entry-meta__link">15 mins ago</a></span><span
                                        class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                            href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                                <div class="entry-content">
                                    <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incididunt
                                        labore et dolore magna aliqua enimad minim veniam quis nostruda exercitation ullamco
                                        laboris onsequat duis aute irue dolorin voluptate velit esse cillum ...</p>
                                </div>
                                <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Continue
                                        Reading</a></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="post post-3 clearfix">
                            <div class="entry-media"><a href="assets/media/content/post/100x100/1.jpg"
                                    class="prettyPhoto"><img src="assets/media/content/post/100x100/1.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu
                                            alikua</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">entertainment</span><span
                                        class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                            href="news_details-1.html" class="entry-meta__link">6</a></span></div>
                            </div>
                        </article>
                        <article class="post post-3 clearfix">
                            <div class="entry-media"><a href="assets/media/content/post/100x100/2.jpg"
                                    class="prettyPhoto"><img src="assets/media/content/post/100x100/2.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsekuat
                                            duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-7">health</span><span
                                        class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                            href="news_details-1.html" class="entry-meta__link">45</a></span></div>
                            </div>
                        </article>
                        <article class="post post-3 clearfix">
                            <div class="entry-media"><a href="assets/media/content/post/100x100/3.jpg"
                                    class="prettyPhoto"><img src="assets/media/content/post/100x100/3.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus
                                            error sit</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-5">world</span><span
                                        class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                            href="news_details-1.html" class="entry-meta__link">81</a></span></div>
                            </div>
                        </article>
                        <article class="post post-3 clearfix">
                            <div class="entry-media"><a href="assets/media/content/post/100x100/4.jpg"
                                    class="prettyPhoto"><img src="assets/media/content/post/100x100/4.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore
                                            me
                                            laud</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">sports</span><span
                                        class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                            href="news_details-1.html" class="entry-meta__link">48</a></span></div>
                            </div>
                        </article>
                        <article class="post post-3 clearfix">
                            <div class="entry-media"><a href="assets/media/content/post/100x100/5.jpg"
                                    class="prettyPhoto"><img src="assets/media/content/post/100x100/5.jpg" alt="Foto"
                                        class="img-responsive" /></a></div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat
                                            duis</a></h2>
                                </div>
                                <div class="entry-meta"><span class="category color-12">technology</span><span
                                        class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                            href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section-type-i wow"><a href="home.html" class="banner"><img src="upload/upload/images/tettrungthu1.png"
                alt="banner" class="img-responsive center-block"></a>
    </div>
    <div class="row wow">
        <div class="col-md-6">
            <div class="title-category clearfix">
                @foreach ($loai->take(1) as $l)
                    @if ($l->ten = 'Khoa học')
                        <h2 class="title-category__title ui-title-inner color-4">{{ $l->ten }}</h2><span
                            class="title-category__category">Máy tính, tương lai, ...</span>
                    @endif
                @endforeach
            </div>
            <div class="decor-right bg-4"></div>

            @foreach ($tin as $t)
                @if ($t->idLT === 4)
                    <article class="post post-2 post-2_mod-c clearfix">
                        <div class="entry-media"><a href="upload/{{ $t->urlHinh }}" class="prettyPhoto"><img
                                    src="upload/{{ $t->urlHinh }}" alt="Foto" class="img-responsive" /></a>
                        </div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title text-uppercase">{{ $t->tieuDe }}</h2>
                            </div>
                            <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html"
                                        class="entry-meta__link"> Trần Vĩnh Phúc</a></span><span
                                    class="entry-meta__item"><a href="news_details-1.html"
                                        class="entry-meta__link">{{ $t->ngayDang }}</a></span><span
                                    class="entry-meta__item"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-eye" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                        </path>
                                    </svg><a href="news_details-1.html"
                                        class="entry-meta__link">{{ $t->xem }}</a></span>
                            </div>
                            <div class="entry-content">
                                <p>{{ $t->tomTat }}</p>
                            </div>
                            <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Đọc bài viết</a>
                            </div>
                        </div>
                    </article>
                @break
            @endif
        @endforeach
    </div>

    <div class="col-md-6">
        <div class="title-category clearfix">
            <div class="title-category clearfix">
                @foreach ($loai->take(1) as $l)
                    @if ($l->ten = 'Du lịch')
                        <h2 class="title-category__title ui-title-inner color-5">{{ $l->ten }}</h2><span
                            class="title-category__category">Khu vực, Địa danh, ...</span>
                    @endif
                @endforeach
            </div>
            <div class="decor-right bg-5"></div>
            @foreach ($tin as $t)
                @if ($t->idLT === 3)
                    <article class="post post-2 post-2_mod-c clearfix">
                        <div class="entry-media"><a href="upload/{{ $t->urlHinh }}" class="prettyPhoto"><img
                                    src="upload/{{ $t->urlHinh }}" alt="Foto" class="img-responsive" /></a>
                        </div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title text-uppercase">{{ $t->tieuDe }}</h2>
                            </div>
                            <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html"
                                        class="entry-meta__link"> Trần Vĩnh Phúc</a></span><span
                                    class="entry-meta__item"><a href="news_details-1.html"
                                        class="entry-meta__link">{{ $t->ngayDang }}</a></span><span
                                    class="entry-meta__item"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-eye" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                        </path>
                                    </svg><a href="news_details-1.html"
                                        class="entry-meta__link">{{ $t->xem }}</a></span>
                            </div>
                            <div class="entry-content">
                                <p>{{ $t->tomTat }}</p>
                            </div>
                            <div class="entry-footer"><a href="news_details-1.html" class="btn-link">Đọc bài
                                    viết</a>
                            </div>
                        </div>
                    </article>
                @break
            @endif
        @endforeach
    </div>
</div>
</div>

<div class="section-type-f wow">
<div class="row">
    <div class="col-md-6">
        @php
            $count = 0;
        @endphp
        @foreach ($tin as $t)
            @if ($t->idLT === 4 && $count < 3)
                @php
                    $count++;
                @endphp
                <article class="post post-3 post-3_mod-c clearfix">
                    <div class="entry-media"><a href="upload/{{ $t->urlHinh }}" class="prettyPhoto"><img
                                src="upload/{{ $t->urlHinh }}" alt="Foto" class="img-responsive" /></a>
                    </div>
                    <div class="entry-main">
                        <div class="entry-header">
                            <h2 class="entry-title"><a href="news_details-1.html">{{ $t->tieuDe }}</a></h2>
                        </div>
                        <div class="entry-meta">
                            @foreach ($loai as $lt)
                                @if ($t->idLT === $lt->id)
                                    <span class="category color-4">{{ $lt->ten }}</span>
                                @endif
                            @endforeach
                            <span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                    href="news_details-1.html" class="entry-meta__link">6</a></span>
                        </div>
                    </div>
                </article>
            @endif
        @endforeach
    </div>
    <div class="col-md-6">
        @php
            $count = 0;
        @endphp
        @foreach ($tin as $t)
            @if ($t->idLT === 3 && $count < 3)
                @php
                    $count++;
                @endphp
                <article class="post post-3 post-3_mod-c clearfix">
                    <div class="entry-media"><a href="upload/{{ $t->urlHinh }}" class="prettyPhoto"><img
                                src="upload/{{ $t->urlHinh }}" alt="Foto" class="img-responsive" /></a>
                    </div>
                    <div class="entry-main">
                        <div class="entry-header">
                            <h2 class="entry-title"><a href="news_details-1.html">{{ $t->tieuDe }}</a></h2>
                        </div>
                        <div class="entry-meta">
                            @foreach ($loai as $lt)
                                @if ($t->idLT === $lt->id)
                                    <span class="category color-5">{{ $lt->ten }}</span>
                                @endif
                            @endforeach
                            <span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                    href="news_details-1.html" class="entry-meta__link">6</a></span>
                        </div>
                    </div>
                </article>
            @endif
        @endforeach
    </div>
</div>
</div>
@endsection

@section('menudung')
<aside class="sidebar">
<section class="widget wow">
    <h2 class="widget-title ui-title-inner text-right">Theo dõi chúng tôi</h2>
    <div class="decor-right"></div>
    <div class="widget-content">
        <ul class="list-subscription list-unstyled">
            <li class="list-subscription__item bg-11"><span class="list-subscription__name">Rss</span><span
                    class="list-subscription__number">164.983</span> followers<a href="rss.com"
                    class="list-subscription__link"><i class="icon fa fa-rss"></i></a></li>
            <li class="list-subscription__item bg-8"><span class="list-subscription__name">TW</span><span
                    class="list-subscription__number">714,967</span> followers<a href="twitter.com"
                    class="list-subscription__link"><i class="icon fa fa-twitter"></i></a></li>
            <li class="list-subscription__item bg-9"><span class="list-subscription__name">FB</span><span
                    class="list-subscription__number">250,642</span> likes<a href="facebook.com"
                    class="list-subscription__link"><i class="icon fa fa-facebook"></i></a></li>
            <li class="list-subscription__item bg-10"><span class="list-subscription__name">yt</span><span
                    class="list-subscription__number">920,497</span> subscribers<a href="youtube.com"
                    class="list-subscription__link"><i class="icon fa fa-youtube-play"></i></a></li>
        </ul>
    </div>
</section>
</aside>
<div class="widget wow"><a href="home.html" class="banner"><img src="/assets/media/content/banners/1.jpg"
        alt="banner" class="img-responsive center-block"></a></div>
<section class="widget wow">
<h2 class="widget-title ui-title-inner text-right">Nhận thông báo</h2>
<div class="decor-right"></div>
<div class="widget-content">
    <p>Đăng kí nhận thông báo từ chúng tôi khi có tin tức mới nhất nhé.</p>
    <form class="form-subscribe">
        <div class="form-group has-feedback">
            <input type="email" placeholder="Email của bạn" class="form-control">
            <button class="icon pe-7s-mail form-control-feedback"></button>
        </div>
    </form>
</div>
</section>
<section class="widget wow">
<h2 class="widget-title ui-title-inner text-right">Thể Loại</h2>
<div class="decor-right"></div>
<ul class="list list-mark-1 list-mark-1_mod-a">
    <?php
    use App\Models\loaitin;
    $loaibaiviet = loaitin::select('id', 'ten')
            ->orderby('thuTu', 'asc')
            ->where('AnHien', '=', '1')
            ->limit(5)
            ->get();

    ?>
    @foreach ($loaibaiviet as $loaitin)
        <li><a href="{{ url('/baiviet', [$loaitin->id]) }}">{{ $loaitin->ten }}</a></li>
    @endforeach
</ul>
</section>
<section class="widget wow">
<h2 class="widget-title ui-title-inner text-right">Latest videos</h2>
<div class="decor-right"></div>
<div class="widget-content">
    <div id="accordion" class="panel-group acc-type-a acc-type-a_mod-a">
        <div class="panel panel-default">
            <div id="vi-ac_1" class="panel-collapse collapse in">
                <div class="panel-body">
                    <iframe width="100%" height="240"
                        src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                        href="#vi-ac_1"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Journey
                            into west sea</span><span class="acc-type-a__author">BY anderson</span></a></div>
            </div>
        </div>
        <div class="panel panel-default">
            <div id="vi-ac_2" class="panel-collapse collapse">
                <div class="panel-body">
                    <iframe width="100%" height="240"
                        src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                        href="#vi-ac_2"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Aliquic
                            exea comod rureduis</span><span class="acc-type-a__author">BY sofia</span></a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div id="vi-ac_3" class="panel-collapse collapse">
                <div class="panel-body">
                    <iframe width="100%" height="240"
                        src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                        href="#vi-ac_3"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Dolore
                            magna aliqua ut enim nim</span><span class="acc-type-a__author">BY
                            clarkson</span></a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div id="vi-ac_4" class="panel-collapse collapse">
                <div class="panel-body">
                    <iframe width="100%" height="240"
                        src="https://www.youtube.com/embed/_BvUJNWvysg?rel=0&amp;amp;showinfo=0;theme=light;iv_load_policy=3;modestbranding=1;autohide=1"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="panel-heading">
                <div class="panel-title"><a data-toggle="collapse" data-parent="#accordion"
                        href="#vi-ac_4"><span class="acc-type-a__title"><i class="icon fa fa-play"></i>Slamco
                            laboris nisi ute aliquip</span><span class="acc-type-a__author">BY zedan</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="text-right"><a href="home.html" class="acc-type-a__link btn-link">all videos</a></div>
</div>
</section>
@endsection

{{-- @section('xuhuong')
<section class="section-type-a">
<div class="wrap-title-bg">
    <h2 class="ui-title-bg">today’s news trend</h2>
</div>
<div data-jarallax="{&quot;type&quot;: &quot;scroll-opacity&quot;, &quot;speed&quot;: &quot;.2&quot;}"
    style="background-image: url(/assets/media/content/bg/1.jpg)"
    class="section-default section-bg section-bg_dark jarallax">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__inner">
                    <div data-min480="1" data-min768="2" data-min992="2" data-min1200="2"
                        data-pagination="true" data-navigation="false" data-auto-play="4000"
                        data-stop-on-hover="true"
                        class="owl-carousel owl-theme owl-theme_mod-a enable-owl-carousel">
                        <article class="post post-2 post-2_mod-f clearfix">
                            <div class="entry-media"><a href="/assets/media/content/post-slider/545x320/1.jpg"
                                    class="prettyPhoto"><img src="/assets/media/content/post-slider/545x320/1.jpg"
                                        alt="Foto" class="img-responsive" /></a><span
                                    class="label bg-13">sports</span>
                            </div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title text-uppercase"><span
                                            class="entry-title__number">01</span><a
                                            href="news_details-1.html">amet consading elit usmod tempor
                                            incididunt</a>
                                    </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item"><a
                                            href="news_details-1.html" class="entry-meta__link">1 hour
                                            ago</a></span><span class="entry-meta__item"><i
                                            class="icon pe-7s-comment"></i><a href="news_details-1.html"
                                            class="entry-meta__link">23</a></span></div>
                            </div>
                        </article>
                        <article class="post post-2 post-2_mod-f clearfix">
                            <div class="entry-media"><a href="/assets/media/content/post-slider/545x320/2.jpg"
                                    class="prettyPhoto"><img src="/assets/media/content/post-slider/545x320/2.jpg"
                                        alt="Foto" class="img-responsive" /></a><span
                                    class="label bg-3">lifestyle</span><span
                                    class="video-label pe-7s-play"></span>
                            </div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title text-uppercase"><span
                                            class="entry-title__number">02</span><a
                                            href="news_details-1.html">enim ad minim veniam quis nostrud
                                            exercitation</a>
                                    </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item"><a
                                            href="news_details-1.html" class="entry-meta__link">38 mins
                                            ago</a></span><span class="entry-meta__item"><i
                                            class="icon pe-7s-comment"></i><a href="news_details-1.html"
                                            class="entry-meta__link">23</a></span></div>
                            </div>
                        </article>
                        <article class="post post-2 post-2_mod-f clearfix">
                            <div class="entry-media"><a href="/assets/media/content/post-slider/545x320/2.jpg"
                                    class="prettyPhoto"><img src="/assets/media/content/post-slider/545x320/2.jpg"
                                        alt="Foto" class="img-responsive" /></a><span
                                    class="label bg-3">lifestyle</span><span
                                    class="video-label pe-7s-play"></span>
                            </div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title text-uppercase"><span
                                            class="entry-title__number">02</span><a
                                            href="news_details-1.html">enim ad minim veniam quis nostrud
                                            exercitation</a>
                                    </h2>
                                </div>
                                <div class="entry-meta"><span class="entry-meta__item"><a
                                            href="news_details-1.html" class="entry-meta__link">38 mins
                                            ago</a></span><span class="entry-meta__item"><i
                                            class="icon pe-7s-comment"></i><a href="news_details-1.html"
                                            class="entry-meta__link">23</a></span></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection --}}

@section('moinhat')
<section class="section-default wow">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="clearfix">
                <h2 class="ui-title-block"><span class="ui-title-block__subtitle">Theo dõi</span><span
                        class="text-uppercase">Các bài viết nổi bật</span></h2><a href="category.html"
                    class="btn-link btn-link_under-title">tìm hiểu thêm</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="wrap-posts">
                @foreach ($tinnoibat as $t)
                    @if (isset($t->idLT))
                        @foreach ($loaiNB->take(5) as $l)
                            @if ($l->id === $t->idLT)
                                <article class="post post-2 post-2_mod-e clearfix">
                                    <div class="entry-media">
                                        <a href="upload/{{ $t->urlHinh }}" class="prettyPhoto">
                                            <img src="upload/{{ $t->urlHinh }}" alt="Foto"
                                                class="img-responsive" />
                                        </a>
                                        <span class="label bg-3">{{ $l->ten }}</span>
                                    </div>
                                    <div class="entry-main">
                                        <div class="entry-header">
                                            <h2 class="entry-title text-uppercase">{{ $t->tieuDe }}</h2>
                                        </div>
                                        <div class="entry-meta">
                                            <span class="entry-meta__item">By<a href="news_details-1.html"
                                                    class="entry-meta__link">Trần Vĩnh Phúc</a></span>
                                            <span class="entry-meta__item"><a href="news_details-1.html"
                                                    class="entry-meta__link">{{ $t->ngayDang }}</a></span>
                                            <span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                                    href="news_details-1.html"
                                                    class="entry-meta__link">23</a></span>
                                        </div>
                                    </div>
                                </article>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
</section>
@endsection
