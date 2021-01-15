<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng Nhập</title>
    <link rel="shortcut icon" href="{{ asset('public/img/logo.gif') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('public/admin/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/admin/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="{{ asset('public/img/HACHINH.jpg') }}" alt="logo"></a><span class="splash-description">Vui lòng nhập thông tin người dùng của bạn.</span></div>
            <div class="card-body">
                <form method="POST" action="{{ route('loginadminpost') }}">
                    @csrf
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="username" id="username" value="admin" type="text" placeholder="Username" autocomplete="off">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" name="password" value="123123" id="password" type="password" placeholder="Password">
                        @error('username')
                            {{ $message }}
                        @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                        </label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Đăng Nhập</button>
                    @if (session()->has('massage'))
                        <span>{{ session('massage') }}</span>
                    @endif
                </form>
            </div>
            {{-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> --}}
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="{{ asset('public/admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
</body>

</html>
