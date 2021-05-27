<header class="header">
    <div class="header-fixed">
        <div class="container">
            <nav class="navbar navbar-expand-lg header-nav p-0">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
                    </a>
                    <a href="{{url('/')}}" class="navbar-brand logo">
                        <img src="{{asset("assets/img/logo.png")}}" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="{{url('/')}}" class="menu-logo">
                            <img src="{{asset("assets/img/logo.png")}}" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="javascript:void(0);">
                            <i class="fas fa-times"></i>
                        </a>
                    </div>
                    <ul class="main-nav">
                        <li class="{{Route::currentRouteName() == 'home' ? 'active' : ''}}" >
                            <a href="{{route("home")}}">Главная</a>
                        </li>
                        <li class="{{Route::currentRouteName() == 'catalog' ? 'active' : ''}}" >
                            <a href="{{route('catalog')}}">Каталог</a>
                        </li>
                        <li class="{{Route::currentRouteName() == 'timetable' ? 'active' : ''}}" >
                            <a href="{{route('timetable')}}">Расписание</a>
                        </li>
                        <li>
                            <a href="">Уроки</a>
                        </li>
                        <li>
                            <a href="">Тесты</a>
                        </li>
                        <li>
                            <a href="">Олимпиады</a>
                        </li>
                        <li class="login-link">
                            <a href="">Выход</a>
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
                                    <p class="text-muted mb-0">{{auth()->user()->role->name}}</p>
                                </div>
                            </div>
                            <a class="dropdown-item" href="{{route("profile")}}">Профиль</a>
                            <a class="dropdown-item" href="#" onclick="$('#logout').submit()">Выход</a>
                            <form action="{{route("logout")}}" method="post" class="d-none" id="logout">
                                @csrf
                            </form>
                        </div>
                    </li>
                    <!-- /User Menu -->
                </ul>
            </nav>
        </div>
    </div>
</header>
