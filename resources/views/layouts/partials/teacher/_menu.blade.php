<div class="user-widget">
    <div class="pro-avatar">JD</div>
    <div class="rating">
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star filled"></i>
        <i class="fas fa-star"></i>
    </div>
    <div class="user-info-cont">
        <h4 class="usr-name">{{auth()->user()->username}}</h4>
        <p class="mentor-type">English Literature (M.A)</p>
    </div>
</div>
<div class="progress-bar-custom">
    <h6>Complete your profiles ></h6>
    <div class="pro-progress">
        <div class="tooltip-toggle" tabindex="0"></div>
        <div class="tooltip">80%</div>
    </div>
</div>
<div class="custom-sidebar-nav">
    <ul>
        <li><a href="{{route("home")}}" class="active"><i class="fas fa-home"></i>Dashboard <span><i
                        class="fas fa-chevron-right"></i></span></a></li>
        <li><a href="#"><i class="fas fa-hourglass-start"></i>Уроки<span><i
                        class="fas fa-chevron-right"></i></span></a></li>
        <li><a href="{{route("chat")}}"><i class="fas fa-comments"></i>Chat <span><i
                        class="fas fa-chevron-right"></i></span></a></li>
        <li><a href="#"><i class="fas fa-file-invoice"></i>Invoices <span><i
                        class="fas fa-chevron-right"></i></span></a></li>
        <li><a href="#"><i class="fas fa-eye"></i>Reviews <span><i
                        class="fas fa-chevron-right"></i></span></a></li>
        <li><a href="#"><i class="fab fa-blogger-b"></i>Blog <span><i
                        class="fas fa-chevron-right"></i></span></a></li>
        <li>
            <a href="#" onclick="$('#logout').submit()">
                <form action="{{route('logout')}}" method="post" class="d-none" id="logout">
                    @csrf
                </form>
                <i class="fas fa-sign-out-alt"></i>Logout <span><i
                        class="fas fa-chevron-right"></i></span>
            </a>
        </li>
    </ul>
</div>
