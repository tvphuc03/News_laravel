@extends('layouts.layout-c')
@section('slider')
<style>
  .section-type-c{
    padding: 0;
  }
</style>
<div class="section-title section-bg">
  <div class="section__inner">
    <h1 class="ui-title-page">Giới thiệu</h1>
  </div>
</div>
<div class="breadcrumb-wrap">
  <ol class="breadcrumb">
    <li><a href="home.html">trang chủ</a></li>
    <li class="active">giới thiệu</li>
  </ol>
</div>
@endsection
@section('noidung')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="section-type-a">
        <div class="ui-description ui-description_mod-a text-center">Aliquip exea comod rure nsewuat duis Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididun labore et dolore magna aliqua ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
      </div>
    </div>
    <div class="col-md-4 col-md-offset-4">
      <div class="decor-center"></div>
    </div>
  </div>
</div>
<div class="section-type-i">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div data-pagination="false" data-navigation="true" data-single-item="true" data-auto-play="7000" data-transition-style="fade" data-main-text-animation="true" data-after-init-delay="3000" data-after-move-delay="1000" data-stop-on-hover="true" class="owl-carousel owl-theme owl-theme_mod-b enable-owl-carousel"><img src="/assets/media/content/carousel-1/1.jpg" alt="foto" class="img-responsive"><img src="/assets/media/content/carousel-1/1.jpg" alt="foto" class="img-responsive"><img src="/assets/media/content/carousel-1/1.jpg" alt="foto" class="img-responsive"></div>
      </div>
      <div class="col-md-6">
        <section class="section_mod-a">
          <h2 class="ui-title-block ui-title-block_font-sm text-uppercase">Lorem ipsum dolor amt elit sed tempor incidunt sed nostrud</h2>
          <p>Lorem ipsum dolor amet consectetur adipisicing elit sed do eiusmod tempor incid dunt labore et dolore magna aliqua enimad minim.</p>
          <ul class="list list-mark-1">
            <li>Lorem ipsum dolor sit amet consectetur adipisicing</li>
            <li>Elit sed do eiusmod tempor incididunt ut labore et dolore</li>
            <li>Nostrud exercitation ullamco laboris nisi ut aliquip</li>
            <li>Commodo consequat duis aute irure dolor inc</li>
            <li>Cupidatat non proident sunt in culpa qui</li>
          </ul><a class="btn-link">Contact us</a>
        </section>
      </div>
    </div>
  </div>
</div>
<div class="section-type-f">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h2 class="ui-title-block"><span class="ui-title-block__subtitle">Meet Our Team</span><span class="text-uppercase">The Authors</span></h2>
        <div data-min480="1" data-min768="2" data-min992="3" data-min1200="4" data-pagination="false" data-navigation="true" data-auto-play="4000" data-stop-on-hover="true" class="owl-carousel owl-theme enable-owl-carousel">
          <div class="staff">
            <div class="staff__img"><img src="/assets/media/content/staff/1.jpg" alt="foto" class="img-responsive"></div>
            <div class="staff__name">john thomas</div>
            <div class="staff__category">founder</div>
            <ul class="social-links list-inline">
              <li><a href="twitter.com" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
              <li><a href="facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
              <li><a href="plus.google.com" class="social-links__item_link"><i class="icon fa fa-google-plus"></i></a></li>
              <li><a href="linkedin.com" class="social-links__item_link"><i class="icon fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="staff">
            <div class="staff__img"><img src="/assets/media/content/staff/2.jpg" alt="foto" class="img-responsive"></div>
            <div class="staff__name">tina lauren</div>
            <div class="staff__category">editor</div>
            <ul class="social-links list-inline">
              <li><a href="twitter.com" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
              <li><a href="facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
              <li><a href="plus.google.com" class="social-links__item_link"><i class="icon fa fa-google-plus"></i></a></li>
              <li><a href="linkedin.com" class="social-links__item_link"><i class="icon fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="staff">
            <div class="staff__img"><img src="/assets/media/content/staff/3.jpg" alt="foto" class="img-responsive"></div>
            <div class="staff__name">andrew clark</div>
            <div class="staff__category">senoir editor</div>
            <ul class="social-links list-inline">
              <li><a href="twitter.com" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
              <li><a href="facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
              <li><a href="plus.google.com" class="social-links__item_link"><i class="icon fa fa-google-plus"></i></a></li>
              <li><a href="linkedin.com" class="social-links__item_link"><i class="icon fa fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="staff">
            <div class="staff__img"><img src="/assets/media/content/staff/4.jpg" alt="foto" class="img-responsive"></div>
            <div class="staff__name">mona liz</div>
            <div class="staff__category">photographer</div>
            <ul class="social-links list-inline">
              <li><a href="twitter.com" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a></li>
              <li><a href="facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a></li>
              <li><a href="plus.google.com" class="social-links__item_link"><i class="icon fa fa-google-plus"></i></a></li>
              <li><a href="linkedin.com" class="social-links__item_link"><i class="icon fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section-default section_mod-b">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <section class="section-area">
          <h2 class="ui-title-inner ui-title-inner_spacing_sm text-right">what customers say</h2>
          <div class="decor-right"></div>
          <div data-pagination="true" data-navigation="false" data-single-item="true" data-auto-play="7000" data-transition-style="fade" data-main-text-animation="true" data-after-init-delay="3000" data-after-move-delay="1000" data-stop-on-hover="true" class="owl-carousel owl-theme owl-theme_mod-c enable-owl-carousel">
            <div class="reviews-block">
              <div class="reviews">
                <div class="clearfix">
                  <div class="reviews__inner">
                    <div class="reviews__img center-block"><img src="/assets/media/content/reviews/1.jpg" alt="foto" class="img-responsive"></div>
                    <div class="reviews__name">martin</div>
                  </div>
                  <div class="reviews__info">Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</div>
                </div>
              </div>
              <div class="reviews">
                <div class="clearfix">
                  <div class="reviews__inner">
                    <div class="reviews__img center-block"><img src="/assets/media/content/reviews/2.jpg" alt="foto" class="img-responsive"></div>
                    <div class="reviews__name">liza</div>
                  </div>
                  <div class="reviews__info">Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</div>
                </div>
              </div>
            </div>
            <div class="reviews-block">
              <div class="reviews">
                <div class="clearfix">
                  <div class="reviews__inner">
                    <div class="reviews__img center-block"><img src="/assets/media/content/reviews/1.jpg" alt="foto" class="img-responsive"></div>
                    <div class="reviews__name">martin</div>
                  </div>
                  <div class="reviews__info">Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</div>
                </div>
              </div>
              <div class="reviews">
                <div class="clearfix">
                  <div class="reviews__inner">
                    <div class="reviews__img center-block"><img src="/assets/media/content/reviews/2.jpg" alt="foto" class="img-responsive"></div>
                    <div class="reviews__name">liza</div>
                  </div>
                  <div class="reviews__info">Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</div>
                </div>
              </div>
            </div>
            <div class="reviews-block">
              <div class="reviews">
                <div class="clearfix">
                  <div class="reviews__inner">
                    <div class="reviews__img center-block"><img src="/assets/media/content/reviews/1.jpg" alt="foto" class="img-responsive"></div>
                    <div class="reviews__name">martin</div>
                  </div>
                  <div class="reviews__info">Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</div>
                </div>
              </div>
              <div class="reviews">
                <div class="clearfix">
                  <div class="reviews__inner">
                    <div class="reviews__img center-block"><img src="/assets/media/content/reviews/2.jpg" alt="foto" class="img-responsive"></div>
                    <div class="reviews__name">liza</div>
                  </div>
                  <div class="reviews__info">Lorem ipsum dolor amet consectetur adipisic elit eiusmod tempor incididunt labore dolore magna aliqu enimad min incididunt ut labore et dolore sed.</div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div class="col-md-6">
        <section class="section-area">
          <h2 class="ui-title-inner ui-title-inner_spacing_sm text-right">why choose us</h2>
          <div class="decor-right"></div>
          <div id="accordion-1" class="panel-group accordion">
            <div class="panel panel-default">
              <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1" class="btn-collapse"><i class="icon"></i></a>
                <h3 class="panel-title">Aute irure dolor in reprehenderit in voluptate</h3>
              </div>
              <div id="collapse-1" class="panel-collapse collapse in">
                <div class="panel-body"><img src="/assets/media/content/post/100x90/1.jpg" alt="foto" class="img-responsive pull-left">
                  <p>Corem ipsum dolor amet consectetur sed dipisicing elit do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim incididunt.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-2" class="btn-collapse collapsed"><i class="icon"></i></a>
                <h3 class="panel-title">Sed eiusmod tempor incididunt ut labore dolore</h3>
              </div>
              <div id="collapse-2" class="panel-collapse collapse">
                <div class="panel-body"><img src="/assets/media/content/post/100x90/1.jpg" alt="foto" class="img-responsive pull-left">
                  <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-3" class="btn-collapse collapsed"><i class="icon"></i></a>
                <h3 class="panel-title">Dui aliquip ex ea commodo consequat duis</h3>
              </div>
              <div id="collapse-3" class="panel-collapse collapse">
                <div class="panel-body"><img src="/assets/media/content/post/100x90/1.jpg" alt="foto" class="img-responsive pull-left">
                  <p>Corem ipsum dolor amet consectetur sed dipisicing elit do eiusmod tempor incididunt labore et dolore magna aliqua enimad minim incididunt. Lorem ipsum dolor sit amet, consectetur adipisic ding elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-4" class="btn-collapse collapsed"><i class="icon"></i></a>
                <h3 class="panel-title">Somun donseuat duis aute irure dolor in</h3>
              </div>
              <div id="collapse-4" class="panel-collapse collapse">
                <div class="panel-body"><img src="/assets/media/content/post/100x90/1.jpg" alt="foto" class="img-responsive pull-left">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
<!-- end wrap-content-->
@endsection
