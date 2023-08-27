@extends('layouts.layout-c')
@section('tieudetrang')
    Liên hệ
@endsection
@section('slider')
    <div class="section-title section-bg">
        <div class="section__inner">
            <h1 class="ui-title-page">contact us</h1>
        </div>
    </div>
    </div>
    <div class="breadcrumb-wrap">
        <ol class="breadcrumb">
            <li><a href="home.html">HOME</a></li>
            <li class="active">contact us</li>
        </ol>
    </div>
@endsection
@section('noidung')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="contacts-item"><i class="icon pe-7s-map-marker color-primary"></i>
                    <div class="decor-center bg-primary"></div>
                    <div class="contacts-item__title">location</div>
                    <div class="contacts-item__info">68 Central Road, Inner Ave. <br> FL 20568 - USA
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contacts-item"><i class="icon pe-7s-call color-7"></i>
                    <div class="decor-center bg-7"></div>
                    <div class="contacts-item__title">phone</div>
                    <div class="contacts-item__info">( +01 ) 234 567 8900 <br> 0800 1234 5678</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contacts-item"><i class="icon pe-7s-mail-open-file color-13"></i>
                    <div class="decor-center bg-13"></div>
                    <div class="contacts-item__title">email</div>
                    <div class="contacts-item__info">news (at) agency.org <br> news.agency (at)
                        domain.com</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contacts-item"><i class="icon pe-7s-clock color-3"></i>
                    <div class="decor-center bg-3"></div>
                    <div class="contacts-item__title">working hours</div>
                    <div class="contacts-item__info">Mon - Fri : 9.00am to 6.00pm <br> Sat - Sun :
                        10.00am to 4.00pm</div>
                </div>
            </div>
        </div>
    </div>
<div class="container " style="padding-top: 20px; padding-bottom: 20px " >
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.443592406474!2d106.62525347410579!3d10.853826357763209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2zQ8O0bmcgVmnDqm4gUGjhuqduIE3hu4FtIFF1YW5nIFRydW5n!5e0!3m2!1svi!2s!4v1691395867064!5m2!1svi!2s" width="1170" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

    <div class="section-type-f">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="ui-title-block"><span class="ui-title-block__subtitle">Get in
                            Touch</span><span class="text-uppercase">Send message</span></h2>
                    <form action="#" method="post" class="ui-form form-contacts">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" placeholder="Full name" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email address" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" placeholder="Phone no." class="form-control">
                            </div>
                            <div class="col-md-6">
                                <input type="text" placeholder="subject" class="form-control">
                            </div>
                            <div class="col-xs-12">
                                <textarea rows="5" placeholder="message details" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <button class="ui-form__btn btn btn-sm btn-info btn-full btn-effect"><i
                                        class="icon pe-7s-mail"></i>send message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section class="section-soc-slider">
                    <div class="wrap-title-bg wrap-title-bg_mod-a">
                        <h2 class="ui-title-bg">instagram images<span class="ui-title-bg__subtitle">follow
                                us @ instagram</span></h2>
                    </div>
                    <div data-min480="1" data-min768="5" data-min992="5" data-min1200="5" data-pagination="false"
                        data-navigation="true" data-auto-play="4000" data-stop-on-hover="true"
                        class="owl-carousel owl-theme enable-owl-carousel"><a
                            href="/assets/media/content/social-slider/1.jpg" class="prettyPhoto"><img
                                src="/assets/media/content/social-slider/1.jpg" alt="foto" class="img-responsive"></a><a
                            href="/assets/media/content/social-slider/2.jpg" class="prettyPhoto"><img
                                src="/assets/media/content/social-slider/2.jpg" alt="foto" class="img-responsive"></a><a
                            href="/assets/media/content/social-slider/3.jpg" class="prettyPhoto"><img
                                src="/assets/media/content/social-slider/3.jpg" alt="foto"
                                class="img-responsive"></a><a href="/assets/media/content/social-slider/4.jpg"
                            class="prettyPhoto"><img src="/assets/media/content/social-slider/4.jpg" alt="foto"
                                class="img-responsive"></a><a href="/assets/media/content/social-slider/5.jpg"
                            class="prettyPhoto"><img src="/assets/media/content/social-slider/5.jpg" alt="foto"
                                class="img-responsive"></a></div>
                </section>
            </div>
        </div>
    </div>
    {{-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> --}}
@endsection
