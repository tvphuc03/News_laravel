<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./assets/css/login.css">

</head>

<body class="img js-fullheight" style="background-image: url(./upload/upload/images/bg.jpg);">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">ĐĂNG NHẬP</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="login-wrap p-0">
                        <h3 class="mb-4 text-center">Bạn đã có tài khoản?</h3>
                        <form action="#" class="signin-form" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Tài khoản">
                            </div>
                            <div class="form-group">
                                <input id="password-field" type="password" name="password" class="form-control"
                                    placeholder="Mật Khẩu">
                                <span toggle="#password-field"
                                    class="fa fa-fw fa-eye field-icon toggle-password"></span>
                            </div>
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li style="color:red">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <div class="form-group">
                                <button class="form-control btn btn-primary submit px-3">ĐĂNG
                                    NHẬP</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">NHỚ THÔNG TIN
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="forgot-password" style="color: #fff">QUÊN MẬT KHẨU</a>
                                </div>
                            </div>
                            <div class="w100 mt-0 text-center">
                                <a href="dangki1" style="color: #fff ">ĐĂNG KÍ TÀI KHOẢN</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="./assets/js/login/jquery.min.js"></script>
    <script src="./assets/js/login/popper.js"></script>
    <script src="./assets/js/login/bootstrap.min.js"></script>
    <script src="./assets/js/login/main.js"></script>

</body>

</html>
