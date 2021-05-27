@extends('layouts.student', ['title' => 'Предметы'])
@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item font-weight-bold">
                                <a href="{{route('home')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item active font-weight-bold" aria-current="page">Каталог</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-3 theiaStickySidebar">

                    <!-- Search Filter -->
                    <div class="card search-filter">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Search Filter</h4>
                        </div>
                        <div class="card-body">
                            <div class="filter-widget">
                                <div class="cal-icon">
                                    <input type="text" class="form-control datetimepicker" placeholder="Select Date">
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Gender</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type" checked>
                                        <span class="checkmark"></span> Male
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="gender_type">
                                        <span class="checkmark"></span> Female
                                    </label>
                                </div>
                            </div>
                            <div class="filter-widget">
                                <h4>Select Courses</h4>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> Digital Marketer

                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> UNIX, Calculus, Trigonometry
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Computer Programming
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> ASP.NET,Computer Gaming
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> HTML, Css
                                    </label>
                                </div>
                                <div>
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> VB, VB.net
                                    </label>
                                </div>
                            </div>
                            <div class="btn-search">
                                <button type="button" class="btn btn-block">Search</button>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->

                </div>
                <div class="col-md-12 col-lg-8 col-xl-9">
                    @for($i = 0; $i < 12; $i++)
                        <div class="card">
                                <div class="card-body">
                                    <div class="mentor-widget">
                                        <div class="user-info-left">
                                            <div class="user-info-cont">
                                                <h4 class="usr-name">
                                                    <a href="">Математика</a>
                                                </h4>
                                                <p class="mentor-type">Дилшод Ибрагимов</p>
                                                <div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star"></i>
                                                </div>
                                                <span><i class="far fa-comment"></i> 17 Отзывов</span>
                                            </div>
                                        </div>
                                        <div class="user-info-right">
                                            <div class="mentor-booking">
                                                <a class="btn-outline-primary" href="{{route('course', ['category' => 'catname', 'course' => $i + 1])}}">Подробно</a>
                                                <a class="apt-btn" href="">Записаться</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
