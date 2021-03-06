@extends("teacher.test.index")

@section("header")
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
                    <a href="{{route("home")}}" class="navbar-brand logo">
                        <img src="{{asset("assets/img/logo.png")}}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{route("home")}}" class="menu-logo">
                            <img src="{{asset("assets/img/logo.png")}}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li>
                            <a href="{{route("home")}}">Home</a>
                        </li>
                        <li class="has-submenu active">
                            <a href="">Mentor <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="active"><a href="dashboard.html">Mentor Dashboard</a></li>
                                <li><a href="bookings.html">Bookings</a></li>
                                <li><a href="schedule-timings.html">Schedule Timing</a></li>
                                <li><a href="mentee-list.html">Mentee List</a></li>
                                <li><a href="profile-mentee.html">Mentee Profile</a></li>
                                <li class="has-submenu">
                                    <a href="blog.html">Blog</a>
                                    <ul class="submenu">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-details.html">Blog View</a></li>
                                        <li><a href="add-blog.html">Add Blog</a></li>
                                        <li><a href="edit-blog.html">Edit Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="profile-settings.html">Profile Settings</a></li>
                                <li><a href="reviews.html">Reviews</a></li>
                                <li><a href="mentor-register.html">Mentor Register</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="">Mentee <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li class="has-submenu">
                                    <a href="#">Mentors</a>
                                    <ul class="submenu">
                                        <li><a href="map-grid.html">Map Grid</a></li>
                                        <li><a href="map-list.html">Map List</a></li>
                                    </ul>
                                </li>
                                <li><a href="search.html">Search Mentor</a></li>
                                <li><a href="profile.html">Mentor Profile</a></li>
                                <li><a href="bookings-mentee.html">Bookings</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="booking-success.html">Booking Success</a></li>
                                <li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
                                <li><a href="favourites.html">Favourites</a></li>
                                <li><a href="chat-mentee.html">Chat</a></li>
                                <li><a href="profile-settings-mentee.html">Profile Settings</a></li>
                                <li><a href="change-password.html">Change Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="">Pages <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="voice-call.html">Voice Call</a></li>
                                <li><a href="video-call.html">Video Call</a></li>
                                <li><a href="search.html">Search Mentors</a></li>
                                <li><a href="components.html">Components</a></li>
                                <li class="has-submenu">
                                    <a href="invoices.html">Invoices</a>
                                    <ul class="submenu">
                                        <li><a href="invoices.html">Invoices</a></li>
                                        <li><a href="invoice-view.html">Invoice View</a></li>
                                    </ul>
                                </li>
                                <li><a href="blank-page.html">Starter Page</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="">Blog <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="admin/index.html" target="_blank">Admin</a>
                        </li>
                        <li class="login-link">
                            <a href="login.html">Login / Signup</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">

                    <!-- User Menu -->
                    <li class="nav-item dropdown has-arrow logged-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="{{asset("assets/img/user/user.jpg")}}" width="31"
                                         alt="Darren Elder">
								</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="user-header">
                                <div class="avatar avatar-sm">
                                    <img src="{{asset("assets/img/user/user.jpg")}}" alt="User Image"
                                         class="avatar-img rounded-circle">
                                </div>
                                <div class="user-text">
                                    <h6>{{auth()->user()->username}}</h6>
                                    <p class="text-muted mb-0">Mentor</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{route("profile")}}">??????????????</a>
                            <a class="dropdown-item" href="#" onclick="$('#logout').submit()">??????????</a>
                            <form action="{{route("logout")}}" method="post" class="d-none" id="logout">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!-- /User Menu -->
                </ul>
            </nav>
        </div>
    </header>
@endsection

@section("list")
    <div class="col-md-12">
        <h4 class="text-center mb-4 font-weight-bold" style="font-family: cursive">???????????? ????????????</h4>
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center mb-0">
                        <thead>
                        <tr class="d-flex justify-content-around">
                            <th class="font-weight-bold text-center" style="font-family: cursive">??????????</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">??????????????</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">????????????????</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tests as $test)
                            <form action="{{route("deleteSubject", $test->id)}}" method="post">
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <span
                                                class="text-center mr-3 fas fa-book-reader avatar-img rounded-circle"
                                                style="font-size: 30px"
                                            >
                                            </span>
                                            <a class="text-center">{{$user->name}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$user->created_at}}</td>
                                    <td class="text-center p-0">
                                        <a
                                            href="{{route("viewSubject", $user->id)}}"
                                            class="btn btn-sm bg-info-light"
                                        >
                                            <i class="far fa-eye"></i>
                                            View
                                        </a>
                                        <a
                                            class="btn btn-sm bg-warning-light"
                                        >
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        @csrf
                                        @method("DELETE")
                                        <button
                                            class="btn btn-sm bg-danger-light"
                                            type="submit"
                                        >
                                            <i class="fa fa-trash"></i>
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </form>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer")
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-about">
                            <div class="footer-logo">
                                <img src="{{asset("assets/img/logo.png")}}" alt="logo">
                            </div>
                            <div class="footer-about-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </p>
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
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Mentee</h2>
                            <ul>
                                <li><a href="search.html">Search Mentors</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="booking.html">Booking</a></li>
                                <li><a href="dashboard-mentee.html">Mentee Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-menu">
                            <h2 class="footer-title">For Mentors</h2>
                            <ul>
                                <li><a href="appointments.html">Appointments</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="dashboard.html">Mentor Dashboard</a></li>
                            </ul>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                    <div class="col-lg-3 col-md-6">

                        <!-- Footer Widget -->
                        <div class="footer-widget footer-contact">
                            <h2 class="footer-title">Contact Us</h2>
                            <div class="footer-contact-info">
                                <div class="footer-address">
                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                    <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                                </div>
                                <p>
                                    <i class="fas fa-phone-alt"></i>
                                    +1 315 369 5943
                                </p>
                                <p class="mb-0">
                                    <i class="fas fa-envelope"></i>
                                    {{auth()->user()->email}}
                                </p>
                            </div>
                        </div>
                        <!-- /Footer Widget -->

                    </div>

                </div>
            </div>
        </div>
        <!-- /Footer Top -->

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container-fluid">

                <!-- Copyright -->
                <div class="copyright">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright-text">
                                <p class="mb-0">&copy; 2020 Mentoring. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Copyright -->

            </div>
        </div>
        <!-- /Footer Bottom -->

    </footer>
@endsection
