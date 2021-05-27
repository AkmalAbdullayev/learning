<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{$title ?? 'Главная'}} | Mentoring</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link href="{{asset("assets/img/favicon.png")}}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome/css/fontawesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome/css/all.min.css")}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">
    <!-- Header -->
@yield("header")
<!-- /Header -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <a
            href="{{route("createTest")}}"
            class="border-0 blue-btn-radius"
            style="float:right; margin-right: 20px; text-decoration: none; color: white"
        >
            <span class="fa fa-plus mr-2"></span>
            Добавить Тест
        </a>

        <a
            href="{{route("listSubject")}}"
            class="border-0 blue-btn-radius"
            style="float:right; margin-right: 20px; text-decoration: none; color: white"
        >
            <span class="fa fa-arrow-alt-circle-left mr-2"></span>
            Назад
        </a>

        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/teacher">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                    <h2 class="breadcrumb-title">Dashboard</h2>
                </div>
            </div>
        </div>

    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-8 col-xl-9">

                    <div class="row">
                        <div class="col-md-12 col-lg-4 dash-board-list blue">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>23</h3>
                                    <h6>Members</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 dash-board-list yellow">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-calendar-check"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>33</h3>
                                    <h6>Appointments</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 dash-board-list pink">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-wallet"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>$14</h3>
                                    <h6>Total Earned</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @yield("list")
                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->

    <!-- Footer -->
@yield("footer")
<!-- /Footer -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset("assets/js/popper.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>

<!-- Sticky Sidebar JS -->
<script src="{{asset("assets/plugins/theia-sticky-sidebar/ResizeSensor.js")}}"></script>
<script src="{{asset("assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js")}}"></script>

<!-- Circle Progress JS -->
<script src="{{asset("assets/js/circle-progress.min.js.html")}}"></script>

<!-- Custom JS -->
<script src="{{asset("assets/js/script.js")}}"></script>

</body>
</html>
