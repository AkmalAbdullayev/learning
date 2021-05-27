<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Mentoring</title>
    <link type="image/x-icon" href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
            <script src="{{asset('assets/js/respond.min.js')}}"></script>
        <![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
            <header class="header">
                <div class="header-fixed">
                    <nav class="navbar navbar-expand-lg header-nav">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="/" class="navbar-brand logo">
                                <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="/" class="menu-logo">
                                    <img src="{{asset('assets/img/logo.png')}}" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <ul class="main-nav">
                                <li class="active">
                                    <a href="">Home</a>
                                </li>
                                <li class="has-submenu">
                                    <a href="">Mentor <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="">Mentor Dashboard</a></li>
                                        <li><a href="">Bookings</a></li>
                                        <li><a href="">Schedule Timing</a></li>
                                        <li><a href="">Mentee List</a></li>
                                        <li><a href="">Mentee Profile</a></li>
                                        <li class="has-submenu">
                                            <a href="blog.">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="">Blog</a></li>
                                                <li><a href="">Blog View</a></li>
                                                <li><a href="">Add Blog</a></li>
                                                <li><a href="">Edit Blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Chat</a></li>
                                        <li><a href="">Invoices</a></li>
                                        <li><a href="">Profile Settings</a></li>
                                        <li><a href="">Reviews</a></li>
                                        <li><a href="">Mentor Register</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="">Mentee <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class="has-submenu">
                                            <a href="#">Mentors</a>
                                            <ul class="submenu">
                                                <li><a href="">Map Grid</a></li>
                                                <li><a href="">Map List</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Search Mentor</a></li>
                                        <li><a href="">Mentor Profile</a></li>
                                        <li><a href="">Bookings</a></li>
                                        <li><a href="">Checkout</a></li>
                                        <li><a href="">Booking Success</a></li>
                                        <li><a href="">Mentee Dashboard</a></li>
                                        <li><a href="">Favourites</a></li>
                                        <li><a href="">Chat</a></li>
                                        <li><a href="">Profile Settings</a></li>
                                        <li><a href="">Change Password</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="">Voice Call</a></li>
                                        <li><a href="">Video Call</a></li>
                                        <li><a href="">Search Mentors</a></li>
                                        <li><a href="">Components</a></li>
                                        <li class="has-submenu">
                                            <a href="invoices.">Invoices</a>
                                            <ul class="submenu">
                                                <li><a href="">Invoices</a></li>
                                                <li><a href="">Invoice View</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Starter Page</a></li>
                                        <li><a href="">Login</a></li>
                                        <li><a href="">Register</a></li>
                                        <li><a href="">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="">Blog <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="">Blog List</a></li>
                                        <li><a href="">Blog Grid</a></li>
                                        <li><a href="">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="" target="_blank">Admin</a>
                                </li>
                                <li class="login-link">
                                    @auth
                                        <a href="{{url('/student')}}">Кабинет</a>
                                    @endauth

                                    @guest
                                        <a href="{{route('login')}}">Авторизация / Регистрация</a>
                                    @endguest
                                </li>
                            </ul>
                        </div>
                        <ul class="nav header-navbar-rht">
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/student')}}">Кабинет</a>
                                </li>
                            @endauth
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('login')}}">Авторизация</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link header-login" href="{{route('register')}}">Регистрация</a>
                                </li>
                            @endguest
                        </ul>
                    </nav>
                </div>
            </header>
            <!-- /Header -->

            <!-- Home Banner -->
            <section class="section section-search">
                <div class="container">
                    <div class="banner-wrapper m-auto text-center">
                        <div class="banner-header">
                            <h1>Search Teacher in <span>Mentoring Appointment</span></h1>
                            <p>Discover the best Mentors & institutions the city nearest to you.</p>
                        </div>

                        <!-- Search -->
                        <div class="search-box">
                            <form action="">
                                <div class="form-group search-location">
                                    <input type="text" class="form-control" placeholder="Search Location">
                                </div>
                                <div class="form-group search-info">
                                    <input type="text" class="form-control" placeholder="Search School, Online educational centers, etc">
                                </div>
                                <button type="submit" class="btn btn-primary search-btn">
                                    <i> <img src="{{asset('assets/img/search-submit.png')}}" alt=""></i>
                                    <span>Search</span>
                                </button>
                            </form>
                        </div>
                        <!-- /Search -->

                    </div>
                </div>
            </section>
            <!-- /Home Banner -->

            <section class="section how-it-works">
                <div class="container">
                    <div class="section-header text-center">
                        <span>Mentoring Flow</span>
                        <h2>How does it works ?</h2>
                        <p class="sub-title">Are you looking to join online institutions? Now it's very simple, Sign up with mentoring</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="feature-box text-center">
                                <div class="feature-header">
                                    <div class="feature-icon">
                                        <span class="circle"></span>
                                        <i><img src="{{asset('assets/img/icon-1.png')}}" alt=""></i>
                                    </div>
                                    <div class="feature-cont">
                                        <div class="feature-text">Sign up</div>
                                    </div>
                                </div>
                                <p class="mb-0">Are you looking to join online Learning? Now it's very simple, Now Sign up</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="feature-box text-center">
                                <div class="feature-header">
                                    <div class="feature-icon">
                                        <span class="circle"></span>
                                        <i><img src="{{asset('assets/img/icon-2.png')}}" alt=""></i>
                                    </div>
                                    <div class="feature-cont">
                                        <div class="feature-text">Collaborate</div>
                                    </div>
                                </div>
                                <p class="mb-0">Collaborate on your own timing, by scheduling with mentor booking</p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="feature-box text-center">
                                <div class="feature-header">
                                    <div class="feature-icon">
                                        <span class="circle"></span>
                                        <i><img src="{{asset('assets/img/icon-3.png')}}" alt=""></i>
                                    </div>
                                    <div class="feature-cont">
                                        <div class="feature-text">Improve & Get Back</div>
                                    </div>
                                </div>
                                <p class="mb-0">you can gather different skill set, and you can become mentor too</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section popular-courses">
                <div class="container">
                    <div class="section-header text-center">
                        <span>Mentoring Goals</span>
                        <h2>Popular Mentors</h2>
                        <p class="sub-title">Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                    </div>
                    <div class="owl-carousel owl-theme">

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user1.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Donna Yancey</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            Digital Marketer
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user2.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">James Amen</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            UNIX, Calculus, Trigonometry
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user3.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title">Marvin Downey</h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            ASP.NET,Computer Gaming
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user4.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Betty Hairston</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            Computer Programming
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Jose Anderson</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            Digital Marketer
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star "></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user6.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Aaron Pietrzak</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            UNIX,Calculus,Trigonometry
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user7.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Brian Martinez</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            ASP.NET,Computer Gaming
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user15.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Misty Lundy</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            Computer Programming
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user9.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Vern Campbell</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            Digital Marketer
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user13.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Jessica Fogarty</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            UNIX,Calculus,Trigonometry
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star filled"></i>
                                        <i class="fas fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user11.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Evelyn Stafford</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            ASP.NET,Computer Gaming
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star "></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="course-box">
                            <div class="product">
                                <div class="product-img">
                                    <a href="">
                                        <img class="img-fluid" alt="" src="{{asset('assets/img/user/user12.jpg')}}" width="600" height="300">
                                    </a>
                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="">Christopher Carroll</a></h3>
                                    <div class="author-info">
                                        <div class="author-name">
                                            Computer Programming
                                        </div>
                                    </div>
                                    <div class="rating">
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star filled"></i>
                                        <i class="fa fa-star"></i>
                                        <span class="d-inline-block average-rating">4.4</span>
                                    </div>
                                    <div class="author-country">
                                        <p class="mb-0"><i class="fas fa-map-marker-alt"></i> Paris, France</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Path section start -->
            <section class="section path-section">
                <div class="section-header text-center">
                    <div class="container">
                        <span>Choose the</span>
                        <h2>Different All Learning Paths</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
                <div class="learning-path-col">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="large-col">
                                    <a href="" class="large-col-image">
                                        <div class="image-col-merge">
                                            <img src="{{asset('assets/img/path-img1.jpg')}}" alt="">
                                            <div class="text-col">
                                                <h5>Digital Marketer</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="large-col">
                                    <a href="" class="large-col-image">
                                        <div class="image-col-merge">
                                            <img src="{{asset('assets/img/path-img2.jpg')}}" alt="">
                                            <div class="text-col">
                                                <h5>Ui designer</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="large-col">
                                    <a href="" class="large-col-image">
                                        <div class="image-col-merge">
                                            <img src="{{asset('assets/img/path-img3.jpg')}}" alt="">
                                            <div class="text-col">
                                                <h5>IT Security</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="large-col">
                                    <a href="" class="large-col-image">
                                        <div class="image-col-merge">
                                            <img src="{{asset('assets/img/path-img4.jpg')}}" alt="">
                                            <div class="text-col">
                                                <h5>Front-End Developer</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="large-col">
                                    <a href="" class="large-col-image">
                                        <div class="image-col-merge">
                                            <img src="{{asset('assets/img/path-img5.jpg')}}" alt="">
                                            <div class="text-col">
                                                <h5>Web Developer</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="large-col">
                                    <a href="" class="large-col-image">
                                        <div class="image-col-merge">
                                            <img src="{{asset('assets/img/path-img6.jpg')}}" alt="">
                                            <div class="text-col">
                                                <h5>Administrator</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="large-col">
                                    <a href="" class="large-col-image">
                                        <div class="image-col-merge">
                                            <img src="{{asset('assets/img/path-img7.jpg')}}" alt="">
                                            <div class="text-col">
                                                <h5>Project Manager</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3">
                                <div class="large-col">
                                    <a href="" class="large-col-image">
                                        <div class="image-col-merge">
                                            <img src="{{asset('assets/img/path-img8.jpg')}}" alt="">
                                            <div class="text-col">
                                                <h5>PHP Developer</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="view-all text-center"><a href="#" class="btn btn-primary">View All</a></div>
                    </div>
                </div>
            </section>
            <!-- Path section end -->

            <!-- Blog Section -->
            <section class="section section-blogs">
                <div class="container">

                    <!-- Section Header -->
                    <div class="section-header text-center">
                        <span>Lorem ipsum dolor</span>
                        <h2>The Blogs & News</h2>
                        <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <!-- /Section Header -->

                    <div class="row blog-grid-row">
                        <div class="col-md-6 col-lg-3 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href=""><img class="img-fluid" src="{{asset('assets/img/blog/blog-01.jpg')}}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href=""><span>Tyrone Roberts</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 4 Dec 2019</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="">What is Lorem Ipsum? Lorem Ipsum is simply</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href=""><img class="img-fluid" src="{{asset('assets/img/blog/blog-02.jpg')}}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href=""><span>Brittany Garcia</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 3 Dec 2019</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="">Contrary to popular belief, Lorem Ipsum is</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href=""><img class="img-fluid" src="{{asset('assets/img/blog/blog-03.jpg')}}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href=""><span>Allen Davis</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 3 Dec 2019</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="">The standard chunk of Lorem Ipsum used</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                        <div class="col-md-6 col-lg-3 col-sm-12">

                            <!-- Blog Post -->
                            <div class="blog grid-blog">
                                <div class="blog-image">
                                    <a href=""><img class="img-fluid" src="{{asset('assets/img/blog/blog-04.jpg')}}" alt="Post Image"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href=""><span>William Lawrence</span></a>
                                            </div>
                                        </li>
                                        <li><i class="far fa-clock"></i> 2 Dec 2019</li>
                                    </ul>
                                    <h3 class="blog-title"><a href="">The standard Lorem Ipsum passage, used</a></h3>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                            <!-- /Blog Post -->

                        </div>
                    </div>
                    <div class="view-all text-center">
                        <a href="" class="btn btn-primary">View All</a>
                    </div>
                </div>
            </section>
            <!-- /Blog Section -->

            <!-- Statistics Section -->
            <section class="section statistics-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="statistics-list text-center">
                                <span>500+</span>
                                <h3>Happy Clients</h3>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="statistics-list text-center">
                                <span>120+</span>
                                <h3>Online Appointments</h3>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="statistics-list text-center">
                                <span>100%</span>
                                <h3>Job Satisfaction</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer">
                <div class="footer-top">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">

                                <!-- Footer Widget -->
                                <div class="footer-widget footer-about">
                                    <div class="footer-logo">
                                        <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                                    </div>
                                    <div class="footer-about-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                        <div class="social-icon">
                                            <ul>
                                                <li>
                                                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget footer-menu">
                                    <h2 class="footer-title">For Mentee</h2>
                                    <ul>
                                        <li><a href="">Search Mentors</a></li>
                                        <li><a href="">Login</a></li>
                                        <li><a href="">Register</a></li>
                                        <li><a href="">Booking</a></li>
                                        <li><a href="">Mentee Dashboard</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget footer-menu">
                                    <h2 class="footer-title">For Mentors</h2>
                                    <ul>
                                        <li><a href="">Appointments</a></li>
                                        <li><a href="">Chat</a></li>
                                        <li><a href="">Login</a></li>
                                        <li><a href="">Register</a></li>
                                        <li><a href="">Mentor Dashboard</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="footer-widget footer-contact">
                                    <h2 class="footer-title">Contact Us</h2>
                                    <div class="footer-contact-info">
                                        <div class="footer-address">
                                            <span><i class="fas fa-map-marker-alt"></i></span>
                                            <p> 3556  Beech Street, San Francisco,<br> California, CA 94108 </p>
                                        </div>
                                        <p>
                                            <i class="fas fa-phone-alt"></i>
                                            +1 315 369 5943
                                        </p>
                                        <p class="mb-0">
                                            <i class="fas fa-envelope"></i>
                                            mentoring@example.com
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container-fluid">
                        <div class="copyright">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="copyright-text">
                                        <p class="mb-0">&copy; 2020 Mentoring. All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
    </body>
    </html>
