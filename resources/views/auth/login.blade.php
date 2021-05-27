<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mentoring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->
</head>
<body class="account-page">
<div class="main-wrapper" id="app">
    <div class="bg-pattern-style">
        <div class="content">
            <div class="account-content">
                <div class="account-box">
                    <div class="login-right">
                        <div class="login-header">
                            <h3>Авторизация <span>Mentoring</span></h3>
                            <p class="text-muted">Для доступа в личный кабинет</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">Email Address</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', 'admin@site.com') }}" required autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Пароль</label>
                                <div class="pass-group">
                                    <input type="password" class="form-control pass-input @error('password') is-invalid @enderror" name="password" required autocomplete="password">
                                    <span class="fas fa-eye toggle-password"></span>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="text-right">
                                <a class="forgot-link" href="{{route('password.request')}}">Забыли пароль ?</a>
                            </div>
                            <button class="btn btn-primary login-btn" type="submit">Вход</button>
                            <div class="text-center dont-have">У вас нет аккаунта? <a href="{{route('register')}}">Зарегистрироваться</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>
