<aside class="sidebar">
    <div class="widget">
        <form id="search-global-form" method="GET" class="form-search" action="{{route('timkiem')}}">
            <div class="form-group has-feedback">
                <input type="search" name="tukhoa" placeholder="Tìm kiếm" aria-label="Search" class="form-search__input form-control">
                <button type="submit" class="form-search__btn icon pe-7s-search form-control-feedback"></button>
            </div>
        </form>
    </div>
    <section class="widget">
        <h2 class="widget-title ui-title-inner text-right">Theo dõi chúng tôi</h2>
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
    <section class="widget">
        <h2 class="widget-title ui-title-inner text-right">Thể loại</h2>
        <div class="decor-right"></div>
        <div class="widget-content">
            <ul class="list list-mark-1 list-mark-1_mod-a">
                @foreach ($loaibaiviet as $loaitin)
                    <li><a href="{{ url('/baiviet', [$loaitin->id]) }}">{{ $loaitin->ten }}</a></li>
                @endforeach
            </ul>
        </div>
    </section>
    <section class="widget">
        <h2 class="widget-title ui-title-inner text-right">Tin nổi bật</h2>
        <div class="decor-right"></div>
        <div class="widget-content">
            @foreach ($tinbv->take(5) as $tin)
                @foreach ($loaibv as $l)
                    @if ($tin->idLT == $l->id)
                        <article class="post post-3 post-3_mod-a clearfix">
                            <div class="entry-media"><a href="{{ asset('upload/' . $tin->urlHinh) }}"
                                    class="prettyPhoto"><img src="{{ asset('upload/' . $tin->urlHinh) }}" alt="Foto"
                                        class="img-responsive" /></a>
                            </div>
                            <div class="entry-main">
                                <div class="entry-header">
                                    <h2 class="entry-title"><a href="news_details-1.html">{{ $tin->tieuDe }}</a>
                                    </h2>
                                </div>
                                <div class="entry-meta"><span class="category color-4">{{ $l->ten }}</span><span
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
                                            class="entry-meta__link">{{ $tin->xem }}</a></span></div>
                            </div>
                        </article>
                    @endif
                @endforeach
            @endforeach
        </div>
    </section>
    <div class="widget"><a href="home.html" class="banner"><img src="/assets/media/content/banners/1.jpg" alt="banner"
                class="img-responsive center-block"></a></div>
    <section class="widget">
        <h2 class="widget-title ui-title-inner text-right">nhận thông báo</h2>
        <div class="decor-right"></div>
        <div class="widget-content">
            <p>Đăng kí nhận thông báo từ chúng tôi khi có tin tức mới nhất nhé.</p>
            <form class="form-subscribe">
                <div class="form-group has-feedback">
                    <input type="email" placeholder="email của bạn" class="form-control">
                    <button class="icon pe-7s-mail form-control-feedback"></button>
                </div>
            </form>
        </div>
    </section>
    {{-- <section class="widget">
        <h2 class="widget-title ui-title-inner text-right">news posts</h2>
        <div class="decor-right"></div>
        <div class="widget-content">
            <ul class="nav nav-tabs nav-tabs_sm nav-tabs_primary">
                <li class="active"><a href="#tab-2-1" data-toggle="tab">Latest Week</a></li>
                <li><a href="#tab-2-2" data-toggle="tab">what’s HOT</a></li>
                <li><a href="#tab-2-3" data-toggle="tab">highest rated</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-2-1" class="tab-pane fade in active">
                    <article class="post post-3 post-3_mod-e clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/100x100/2.jpg"
                                class="prettyPhoto"><img src="/assets/media/content/post/100x100/2.jpg"
                                    alt="Foto" class="img-responsive" /></a></div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat
                                        duis</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-7">health</span><span
                                    class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                        href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                        </div>
                    </article>
                    <article class="post post-3 post-3_mod-e clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/100x100/23.jpg"
                                class="prettyPhoto"><img src="/assets/media/content/post/100x100/23.jpg"
                                    alt="Foto" class="img-responsive" /></a></div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus
                                        error sit</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-5">world</span><span
                                    class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                        href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                        </div>
                    </article>
                    <article class="post post-3 post-3_mod-e clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/100x100/4.jpg"
                                class="prettyPhoto"><img src="/assets/media/content/post/100x100/4.jpg"
                                    alt="Foto" class="img-responsive" /></a></div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore
                                        me laud</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-12">sports</span><span
                                    class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                        href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                        </div>
                    </article>
                    <article class="post post-3 post-3_mod-e clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg"
                                class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg"
                                    alt="Foto" class="img-responsive" /></a></div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat
                                        duis</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-2">technology</span><span
                                    class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                        href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                        </div>
                    </article>
                </div>
                <div id="tab-2-2" class="tab-pane fade">
                    <article class="post post-3 post-3_mod-e clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/100x100/23.jpg"
                                class="prettyPhoto"><img src="/assets/media/content/post/100x100/23.jpg"
                                    alt="Foto" class="img-responsive" /></a></div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title"><a href="news_details-1.html">Perspiciatis unde omnist enatus
                                        error sit</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-5">world</span><span
                                    class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                        href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                        </div>
                    </article>
                    <article class="post post-3 post-3_mod-e clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/100x100/4.jpg"
                                class="prettyPhoto"><img src="/assets/media/content/post/100x100/4.jpg"
                                    alt="Foto" class="img-responsive" /></a></div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore
                                        me laud</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-12">sports</span><span
                                    class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                        href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                        </div>
                    </article>
                </div>
                <div id="tab-2-3" class="tab-pane fade">
                    <article class="post post-3 post-3_mod-e clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/100x100/5.jpg"
                                class="prettyPhoto"><img src="/assets/media/content/post/100x100/5.jpg"
                                    alt="Foto" class="img-responsive" /></a></div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat
                                        duis</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-2">technology</span><span
                                    class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                        href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                        </div>
                    </article>
                    <article class="post post-3 post-3_mod-e clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/100x100/2.jpg"
                                class="prettyPhoto"><img src="/assets/media/content/post/100x100/2.jpg"
                                    alt="Foto" class="img-responsive" /></a></div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title"><a href="news_details-1.html">Aliquip exea comod rure nsewuat
                                        duis</a></h2>
                            </div>
                            <div class="entry-meta"><span class="category color-7">health</span><span
                                    class="entry-meta__item"><i class="icon pe-7s-comment"></i><a
                                        href="news_details-1.html" class="entry-meta__link">12</a></span></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="widget">
        <h2 class="widget-title ui-title-inner text-right">Thẻ bài viết</h2>
        <div class="decor-right"></div>
        <div class="widget-content">
            <ul class="list-tags list-unstyled">
                @php
                    $seenTags = [];
                @endphp

                @foreach ($tinbv as $tin)
                    @if ($tin->tags != null && !in_array($tin->tags, $seenTags))
                        <li class="list-tags__item"><a href="category.html"
                                class="list-tags__link">{{ $tin->tags }}</a></li>
                        @php
                            $seenTags[] = $tin->tags;
                        @endphp
                    @endif
                @endforeach

            </ul>
        </div>
    </section>
</aside>
