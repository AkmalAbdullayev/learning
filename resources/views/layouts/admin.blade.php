<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>{{$title ?? 'Главная'}} | Mentoring</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/assets/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<!-- Main Wrapper -->
<div class="main-wrapper" id="app">
    <!-- Header -->
    <div class="header">
        <!-- Logo -->
        <div class="header-left">
            <a href="#" class="logo">
                <img src="{{asset('admin/assets/img/logo.png')}}" alt="Logo">
            </a>
            <a href="#" class="logo logo-small">
                <img src="{{asset('admin/assets/img/logo-small.png')}}" alt="Logo" width="30" height="30">
            </a>
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>

        <div class="top-nav-search">
            <form>
                <input type="text" class="form-control" placeholder="Поиск...">
                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">

            <!-- Notifications -->
            <li class="nav-item dropdown noti-dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{asset('admin/assets/img/user/user.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Jonathan Doe</span>
                                                Schedule <span class="noti-title">his appointment</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{asset('admin/assets/img/user/user1.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Julie Pennington</span> has
                                                booked her appointment to <span class="noti-title">Ruby Perrin</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{asset('admin/assets/img/user/user2.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Tyrone Roberts</span> sent
                                                a amount of $210 for his <span class="noti-title">appointment</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="#">
                                    <div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image"
                                                         src="{{asset('admin/assets/img/user/user4.jpg')}}">
												</span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Patricia Manzi</span> send
                                                a message <span class="noti-title"> to his Mentee</span></p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img">
                        <img class="rounded-circle" src="{{asset('admin/assets/img/profiles/avatar-12.jpg')}}"
                             width="31" alt="Ryan Taylor">
                    </span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="{{asset('admin/assets/img/profiles/avatar-12.jpg')}}" alt="User Image"
                                 class="avatar-img rounded-circle">
                        </div>
                        <div class="user-text">
                            <h6>{{ucfirst(auth()->user()->username)}}</h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="">Мой профиль</a>
                    <a class="dropdown-item" href="">Настройки</a>
                    <a class="dropdown-item" href="#" onclick="$('#logout').submit()">Выход</a>
                    <form action="{{route('logout')}}" method="post" class="d-none" id="logout">
                        @csrf
                    </form>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            @include('layouts.partials._menu')
        </div>
    </div>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">
            @yield('content')
        </div>
    </div>
    <!-- /Page Wrapper -->
</div>
<script src="{{asset('js/vendor.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>  
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

@stack('js')
@include('layouts.partials._notify')
</body>
</html>
