<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v3 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/c43f566c41.js" crossorigin="anonymous"></script>

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="./assets/css/register.css">
</head>

<body>

    <div class="wrapper" style="background-image: url('./upload/upload/images/bg.jpg');">
        <div class="inner">
            <form action="{{ route('dangki') }}" method="post">
                @csrf
                <h3>ĐĂNG KÍ TÀI KHOẢN</h3>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">HỌ VÀ TÊN:</label>
                        <div class="form-holder">
                            <i class="fa-regular fa-user"></i>
                            <input type="text" name="name" placeholder="Tên của bạn" value="{{ old('name') }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Email:</label>
                        <div class="form-holder">
                            <i style="font-style: normal; font-size: 15px;">@</i>
                            <input type="text" name="email" id="" placeholder="Email của bạn"
                                value="{{ old('email') }}" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">mật khẩu:</label>
                        <div class="form-holder">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="password" id="" placeholder="Mật khẩu"
                                value="{{ old('password') }}" class="form-control">
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">xác nhận mật khẩu:</label>
                        <div class="form-holder">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" name="repeatPassword" id=""
                                placeholder="Nhập lại mật khẩu" value="{{ old('repeatPassword') }}"
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">quốc gia</label>
                        <div class="form-holder select">
                            <select name="" id="" class="form-control">
                                <option value="united states">United States</option>
                                <option value="united kingdom">United Kingdom</option>
                                <option value="viet nam">Viet Nam</option>
                            </select>
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Giới tính:</label>
                        <div class="form-holder select">
                            <select name="" id="" class="form-control">
                                <option value="male">Nam</option>
                                <option value="femal">Nữ</option>
                                <option value="other">Khác</option>
                            </select>
                            <i class="fa-solid fa-venus-mars"></i>
                        </div>
                    </div>
                </div>
                <div class="form-end">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Chấp nhận điều khoản của chúng tôi <a
                                style="color: red ;">điều khoản của chúng tôi</a>.
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="button-holder">
                        <button>ĐĂNG KÍ TÀI KHOẢN</button>
                    </div>

                </div>@if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="color:red">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
            </form>
        </div>
    </div>

</body>

</html>
