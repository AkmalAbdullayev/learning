@extends("chat", ['lastMessage' => $lastMessage])

@section('title', 'Chat')

@section("content")
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
                    <a href="index.html" class="navbar-brand logo">
                        <img src="{{asset("assets/img/logo.png")}}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index.html" class="menu-logo">
                            <img src="{{asset("assets/img/logo.png")}}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="has-submenu active">
                            <a href="">Mentor <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="dashboard.html">Mentor Dashboard</a></li>
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
                                <li class="active"><a href="chat.html">Chat</a></li>
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
                            <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                            <a class="dropdown-item" href="profile-settings.html">Profile Settings</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </li>
                    <!-- /User Menu -->

                </ul>
            </nav>
        </div>
    </header>
@endsection



