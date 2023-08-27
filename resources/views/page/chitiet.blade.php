@extends('layouts.layout-c')
@section('tieudetrang')
{{$tin->tieuDe}}
@endsection
@section('noidung')
<div class="list-group">
    <div class="d-flex w-100 justify-content-between">
        <h2 class="mb-4 mt-3 text-uppercase">{{$tin->tieuDe}}</h2>
    </div>
    <h4>{{$tin->tomTat}}</h4>
    <p class="mb-1" id="noidung">{!! $tin->noiDung !!}</p>
    <small>Trần Vĩnh Phúc</small>
</div>
@endsection

@section('menudung')
@include('menudungbv')
@endsection
@section('lienquan')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="section-default">
                <h2 class="ui-title-block ui-title-block_border"><span class="ui-title-block__subtitle">Read More</span><span class="text-uppercase">related posts</span></h2>
                <div data-min480="1" data-min768="2" data-min992="2" data-min1200="3" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme owl-theme_mod-e enable-owl-carousel">
                    <article class="post post-2 post-2_mod-h clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/360x300/1.jpg" class="prettyPhoto"><img src="/assets/media/content/post/360x300/1.jpg" alt="Foto" class="img-responsive" /></a><span class="label bg-1">politics</span>
                        </div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt</h2>
                            </div>
                            <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        </div>
                    </article>
                    <article class="post post-2 post-2_mod-h clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/360x300/2.jpg" class="prettyPhoto"><img src="/assets/media/content/post/360x300/2.jpg" alt="Foto" class="img-responsive" /></a><span class="label bg-6">travel</span>
                        </div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title text-uppercase">nostrud exercitation ullamco laboris nisi aliquip</h2>
                            </div>
                            <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        </div>
                    </article>
                    <article class="post post-2 post-2_mod-h clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/360x300/3.jpg" class="prettyPhoto"><img src="/assets/media/content/post/360x300/3.jpg" alt="Foto" class="img-responsive" /></a><span class="label bg-2">technology</span>
                        </div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title text-uppercase">sedo eiusmod tempor incidunt ut labore dolore</h2>
                            </div>
                            <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        </div>
                    </article>
                    <article class="post post-2 post-2_mod-h clearfix">
                        <div class="entry-media"><a href="/assets/media/content/post/360x300/2.jpg" class="prettyPhoto"><img src="/assets/media/content/post/360x300/2.jpg" alt="Foto" class="img-responsive" /></a><span class="label bg-6">travel</span>
                        </div>
                        <div class="entry-main">
                            <div class="entry-header">
                                <h2 class="entry-title text-uppercase">nostrud exercitation ullamco laboris nisi aliquip</h2>
                            </div>
                            <div class="entry-meta"><span class="entry-meta__item">By<a href="news_details-1.html" class="entry-meta__link"> john sina</a></span><span class="entry-meta__item"><a href="news_details-1.html" class="entry-meta__link">15 mins ago</a></span><span class="entry-meta__item"><i class="icon pe-7s-comment"></i><a href="news_details-1.html" class="entry-meta__link">23</a></span></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('binhluan')
<section class="section-comment">
                    <h3 class="comment-title ui-title-inner ui-title-inner_spacing_sm">Comments :<span class="comment-title__number"> 4</span></h3>
                    <div class="decor-left"></div>
                    <ul class="comments-list list-unstyled">
                      <li>
                        <article class="comment clearfix">
                          <div class="avatar-placeholder"><img src="/assets/media/content/post/reviews/1.jpg" alt="avatar" class="img-responsive"></div>
                          <div class="comment-inner">
                            <header class="comment-header">
                              <cite class="comment-author">don jeans</cite>
                              <time datetime="2012-10-27" class="comment-datetime">feb 30, 2016</time>
                            </header>
                            <div class="comment-body">
                              <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</p>
                            </div>
                            <footer class="comment-footer"><a href="home.html" class="comment-btn btn btn-default btn-effect">reply</a></footer>
                          </div>
                        </article>
                        <ul class="children list-unstyled">
                          <li>
                            <article class="comment clearfix">
                              <div class="avatar-placeholder"><img src="/assets/media/content/post/reviews/2.jpg" alt="avatar" class="img-responsive"></div>
                              <div class="comment-inner">
                                <header class="comment-header">
                                  <cite class="comment-author">mark waugh</cite>
                                  <time datetime="2012-10-27" class="comment-datetime">feb 30, 2016</time>
                                </header>
                                <div class="comment-body">
                                  <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incidid magna aliqu enimad min incididunt labore dolore sed.</p>
                                </div>
                                <footer class="comment-footer"><a href="home.html" class="comment-btn btn btn-default btn-effect">reply</a></footer>
                              </div>
                            </article>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <article class="comment clearfix">
                          <div class="avatar-placeholder"><img src="/assets/media/content/post/reviews/3.jpg" alt="avatar" class="img-responsive"></div>
                          <div class="comment-inner">
                            <header class="comment-header">
                              <cite class="comment-author">suzain liza</cite>
                              <time datetime="2012-10-27" class="comment-datetime">feb 30, 2016</time>
                            </header>
                            <div class="comment-body">
                              <p>Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</p>
                            </div>
                            <footer class="comment-footer"><a href="home.html" class="comment-btn btn btn-default btn-effect">reply</a></footer>
                          </div>
                        </article>
                      </li>
                    </ul>
                  </section>
                  <section class="section-reply-form">
                    <h3 class="comment-title ui-title-inner ui-title-inner_spacing_sm">leave a reply</h3>
                    <div class="decor-left"></div>
                    <form action="#" method="post" class="form-reply ui-form">
                      <div class="row">
                        <div class="col-md-6">
                          <input type="text" placeholder="your name" class="form-control">
                        </div>
                        <div class="col-md-6">
                          <input type="email" placeholder="email" class="form-control">
                        </div>
                        <div class="col-xs-12">
                          <textarea rows="5" placeholder="comment" class="form-control"></textarea>
                          <button class="ui-form__btn btn btn-xs btn-info btn-effect">submit</button>
                        </div>
                      </div>
                    </form>
                  </section>
@endsection
