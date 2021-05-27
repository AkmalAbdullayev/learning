<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Mentoring</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link href="{{asset("assets/img/favicon.png")}}" rel="icon">

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <link rel="stylesheet" href="{{asset("css/vendor.css")}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome/css/fontawesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome/css/all.min.css")}}">

    <link rel="stylesheet" href="{{asset("js/app.js")}}">
    <link rel="stylesheet" href="{{asset("js/vendor.js.js")}}">

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">
    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        @yield("breadSubject")
        @yield("breadChapter")
        @yield("breadTopic")
        @yield("breadLesson")
        @yield("breadExam")
        @yield("breadTest")
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        @yield("subject")
        @yield("content")
        @yield("topic")
        @yield("lesson")
        @yield("exam")
        @yield("test")
    </div>
    <!-- /Page Content -->

    <!-- Footer -->
@include("teacher.footer")
<!-- /Footer -->

</div>
<!-- /Main Wrapper -->

<script src="{{asset("js/app.js")}}"></script>
<script src="{{asset("js/vendor.js")}}"></script>
<!-- Circle Progress JS -->
<script src="{{asset("assets/js/circle-progress.min.js.html")}}"></script>

<!-- Custom JS -->
</body>
</html>
