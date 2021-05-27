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
    <link rel="stylesheet" href="{{asset('plugins/alertify/alertify.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/alertify/default.min.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
    <script src="{{asset('assets/js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body class="account-page">
<div class="main-wrapper" id="app">
    <div class="bg-pattern-style bg-pattern-style-register">
        <div class="content">
            <div class="account-content">
                <div class="account-box">
                    <div class="login-right">
                        <div class="login-header">
                            <h3><span>Mentoring</span> Регистрация</h3>
                            <p class="text-muted">Для доступа в личный кабинет</p>
                        </div>
                        <form action="{{route('register')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label class="form-control-label">ФИО</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                       name="username" required autocomplete="username" autofocus value="{{old('username')}}">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input id="email" type="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       name="email" required autocomplete="email" value="{{old('email')}}">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Пароль</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Подтверждение пароля</label>
                                        <input id="password-confirm" type="password" class="form-control @error('password') is-invalid @enderror"
                                               name="password_confirmation" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-control-xs custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="agreeCheckboxUser"
                                           id="agree_checkbox_user">
                                    <label class="custom-control-label" for="agree_checkbox_user">Соглашение</label>
                                    <a tabindex="-1" href="javascript:void(0);">Политика Конфиденциальности</a> &amp; <a
                                        tabindex="-1"
                                        href="javascript:void(0);">
                                        Terms.</a>
                                </div>
                            </div>
                            <button class="btn btn-primary login-btn" type="submit">Создать</button>
                            <div class="account-footer text-center mt-3">
                                У вас есть аккаунт? <a class="forgot-link mb-0"
                                                       href="{{route('login')}}">Авторизация</a>
                            </div>
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
<script src="{{asset('plugins/alertify/alertify.min.js')}}"></script>
@include('layouts.partials._notify')
</body>
</html>
