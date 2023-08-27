<style>
    .xo{
        position: absolute;
        z-index: 1000;
        top: 0;
        margin-left: 95%;
        padding: 0;
    }
</style>
<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="top-header__link bg-primary">
                    <div class="top-header__wrap-link">top headlines<i class="icon fa fa-caret-right"></i></div>
                </div>
                <div class="top-header__ticker">
                    <ul id="myUl">
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">Uber offers $29m
                                'safe ride' settlement</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">The robot that
                                camouflages itself</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">Luxury cars at the
                                Detroit auto show</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">Uber offers $29m
                                'safe ride' settlement</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">The robot that
                                camouflages itself</a><i class="icon fa fa-adjust"></i></li>
                        <li class="news-item"><a href="news_details-1.html" class="news-item__link">Luxury cars at the
                                Detroit auto show</a><i class="icon fa fa-adjust"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-main">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <ul class="social-links list-inline">
                    <li><a href="twitter.com" class="social-links__item_link"><i class="icon fa fa-twitter"></i></a>
                    </li>
                    <li><a href="facebook.com" class="social-links__item_link"><i class="icon fa fa-facebook"></i></a>
                    </li>
                    <li><a href="instagram.com" class="social-links__item_link"><i class="icon fa fa-instagram"></i></a>
                    </li>

                    <span class="border-end px-3">
                        @php
                            $mytime = Carbon\Carbon::now();
                            $dayOfWeek = ['Chủ nhật', 'Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy'];
                            $formattedDate = $dayOfWeek[$mytime->dayOfWeek] . ', ' . $mytime->format('d/m/Y');
                            echo $formattedDate;
                        @endphp
                    </span>
                </ul>
            </div>
            <div class="col-md-4"><a href="home.html" class="logo"><img src="/assets/media/general/abc.png"
                        alt="Logo" class="logo__img img-responsive center-block" /></a></div>
            <div class="col-md-4">
                <div class="col-md-6 text-center " >
                    @if (Auth::user())
                        <li class="nav-item dropdown list-unstyled ">
                            <a class="nav-link dropdown-toggle">
                                <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu xo" >
                                @if (Auth::user()->role == 1)
                                    <li><a  href={{ route('admin') }}>Quản trị</a></li>
                                @endif
                                <li><a  href={{ route('profile.edit') }}>Hồ sơ</a></li>
                                <form action="{{ route('dangxuat') }}" method="post" class="text-center">
                                    @csrf
                                    <button class=" col-md-12 btn-danger ">Đăng xuất</button>
                                </form>
                            </ul>
                        </li>
                    @else
                        <a href="/dangnhap" class="header-main__links-item ">Đăng nhập</a>
                    @endif
                </div>
                <div class="col-md-6">
                    <a href="#fakelink" class="search-open"><i class="icon pe-7s-search"></i></a>
                    <a href="#cd-nav" class="trigger cd-nav-trigger"><i class="icon pe-7s-menu"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
