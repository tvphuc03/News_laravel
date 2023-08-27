<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>@yield('tieudetrang')</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <link rel="stylesheet" href="/assets/css/master.css" />

    <!-- SWITCHER-->
    <link href="/assets/plugins/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" media="all" />
    <link href="/assets/plugins/switcher/css/color1.css" rel="alternate stylesheet" title="color1" media="all" />
    <link href="/assets/plugins/switcher/css/color2.css" rel="alternate stylesheet" title="color2" media="all" />
    <link href="/assets/plugins/switcher/css/color3.css" rel="alternate stylesheet" title="color3" media="all" />
    <link href="/assets/plugins/switcher/css/color4.css" rel="alternate stylesheet" title="color4" media="all" />
    <link href="/assets/plugins/switcher/css/color5.css" rel="alternate stylesheet" title="color5" media="all" />
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
    <script src="https://kit.fontawesome.com/c43f566c41.js" crossorigin="anonymous"></script>
    <script>
        (function(H) {
            H.className = H.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement)
    </script>
</head>

<body>
    <!-- Loader-->
    <div id="page-preloader"><span class="spinner"></span></div>
    <!-- Loader end-->
    <div data-header="sticky" data-header-top="200" class="layout-theme animated-css">
        <!-- Start Switcher-->
        {{-- <div class="switcher-wrapper">
            <div class="demo_changer">
                <div class="demo-icon color_primary"><i class="fa fa-cog fa-spin fa-2x"></i></div>
                <div class="form_holder">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="predefined_styles">
                                <div class="skin-theme-switcher">
                                    <h4>Color</h4><a href="javascript:void(0);" data-switchcolor="color1"
                                        style="background-color:#df0001;" class="styleswitch"></a><a
                                        href="javascript:void(0);" data-switchcolor="color2"
                                        style="background-color:#86a800;" class="styleswitch"></a><a
                                        href="javascript:void(0);" data-switchcolor="color3"
                                        style="background-color:#00adb4;" class="styleswitch"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- end switcher --}}
        <div class="cd-main">
            <div class="wrap-content cd-section cd-selected">
                <header class="header">
                    @include('thanhphan.header')
                </header>
                <div class="wrap-nav">
                    <nav class="navbar yamm yamm_mod-a">
                        @include('thanhphan.menu')
                    </nav>
                    @yield('slider')
                </div>
                <div class="section-type-c">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                @yield('noidung')
                                @yield('binhluan')
                            </div>
                            <div class="col-md-4">
                                @yield('menudung')
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @yield('xuhuong') --}}
                @yield('moinhat')
                @yield('lienquan')
                @include('thanhphan.footer')
