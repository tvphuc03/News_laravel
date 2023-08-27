<?php

use Illuminate\Support\Facades\DB;

$loaitin_arr = DB::table('loaitin')->select('id', 'ten')
    ->orderby('thuTu', 'asc')
    ->where('AnHien', '=', '1')
    ->limit(5)->get();
?>
<nav class="navbar yamm yamm_mod-a "><!-- yamm_mod-a(đổi chế độ màu menu) -->

    <div id="navbar-collapse-1" class="navbar-collapse collapse">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="nav navbar-nav">
                        <li><a href="/">Tất cả trang</a>

                            <ul class="dropdown-menu">


                                <li><a href="{{url('/')}}">Trang chủ </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="home.html">HOMEPAGE 1</a></li>
                                        <li><a href="home-2.html">HOMEPAGE 2</a></li>
                                        <li><a href="home-3.html">HOMEPAGE 3</a></li>
                                    </ul> -->
                                </li>


                                <li><a href="category.html">Tin tức </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="category.html">Tin mới</a></li>
                                        <li><a href="news_details-1.html">Tin nổi bật</a></li>
                                        <li><a href="news_details-2.html">Tin trong ngày</a></li>
                                    </ul>
                                </li>


                                <li><a href="about.html">Trang</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('/gioithieu')}}">Giới thiệu</a></li>
                                        <li><a href="{{url('/lienhe')}}">liên hệ</a></li>

                                    </ul>
                                </li>



                            </ul>
                        </li>
                        @foreach($loaitin_arr as $lt)
                        <li class="yamm-fw"><a href="{{url('/baiviet',[$lt->id])}}">{{$lt->ten}}</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <ul class="list list-mark-1 list-mark-1_mod-a">
                                                    <li><a href="category.html">Tin được quan tâm</a></li>
                                                    <li><a href="category.html">Tin mới nhất</a></li>
                                                    <li><a href="category.html">Tin trong ngày</a></li>
                                                    <li><a href="category.html">Tin được yêu thích</a></li>
                                                    <li><a href="category.html">Tin đáng chú ý</a></li>
                                                    <li><a href="category.html">Tin được săn đón</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <article class="post post-4 post-4_mod-a clearfix">
                                                    <div class="entry-media"><a href="/assets/media/content/post/360x280/1.jpg" class="prettyPhoto"><img src="/assets/media/content/post/360x280/1.jpg" alt="Foto" class="img-responsive" /></a></div>
                                                    <div class="entry-main">
                                                        <div class="entry-header">
                                                            <h2 class="entry-title">Lorem ipsum dolor sit amet</h2>
                                                        </div>
                                                        <div class="entry-meta"><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">38 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">62</a></span></div>
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-md-4 col-xs-12">
                                                <article class="post post-3 post-3_mod-f clearfix">
                                                    <div class="entry-media"><a href="/assets/media/content/post/100x80/1.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x80/1.jpg" alt="Foto" class="img-responsive" /></a></div>
                                                    <div class="entry-main">
                                                        <div class="entry-header">
                                                            <h2 class="entry-title"><a href="news_details-1.html">Volupta tem acusa ntium dolore me laud</a></h2>
                                                        </div>
                                                        <div class="entry-meta"><span class="category color-4">Entertainment</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">4</a></span></div>
                                                    </div>
                                                </article>
                                                <article class="post post-3 post-3_mod-f clearfix">
                                                    <div class="entry-media"><a href="/assets/media/content/post/100x80/2.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x80/2.jpg" alt="Foto" class="img-responsive" /></a></div>
                                                    <div class="entry-main">
                                                        <div class="entry-header">
                                                            <h2 class="entry-title"><a href="news_details-1.html">Incididunt ulabore dolore malnu alikua</a></h2>
                                                        </div>
                                                        <div class="entry-meta"><span class="category color-5">world</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">91</a></span></div>
                                                    </div>
                                                </article>
                                                <article class="post post-3 post-3_mod-f clearfix">
                                                    <div class="entry-media"><a href="/assets/media/content/post/100x80/3.jpg" class="prettyPhoto"><img src="/assets/media/content/post/100x80/3.jpg" alt="Foto" class="img-responsive" /></a></div>
                                                    <div class="entry-main">
                                                        <div class="entry-header">
                                                            <h2 class="entry-title"><a href="news_details-1.html">Sed eiusmod tempor incid magna aliqua enim</a></h2>
                                                        </div>
                                                        <div class="entry-meta"><span class="category color-3">lifestyle</span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">54</a></span></div>
                                                    </div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-search">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="navbar-search">
                        <form class="search-global">
                            <input type="text" placeholder="Type to search" autocomplete="off" name="s" value="" class="search-global__input" />
                            <button class="search-global__btn"><i class="icon fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
    </div>
</nav>


