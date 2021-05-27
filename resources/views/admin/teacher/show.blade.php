@extends('layouts.admin', ['title' => 'О преподавателе'])
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="h3 mb-0">{{$teacher->full_name ?? ''}}</div>
            <a href="{{route('teachers.index')}}" class="btn btn-outline-secondary">Назад</a>
        </div>
        <div class="card-body">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item"><a href="{{route('teachers.index')}}">Преподаватели</a></li>
                <li class="breadcrumb-item active">{{$teacher->full_name ?? ''}}</li>
            </ul>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-header">
                        <div class="row align-items-center">
                            <div class="col-auto profile-image">
                                <img width="100" height="100" alt="User Image" src="{{asset('storage/'.$teacher->avatar)}}">
                            </div>
                            <div class="col ml-md-n2 profile-user-info">
                                <h4 class="user-name mb-0">{{$teacher->full_name}}</h4>
                                <h6 class="text-muted">{{$teacher->user->email}}</h6>
                                <div class="pb-3"><i class="fa fa-map-marker"></i> {{$teacher->city->name.', '.$teacher->address}}</div>
                                <div class="about-text">{{$teacher->biography}}</div>
                            </div>
                            <div class="col-auto profile-btn">
                            </div>
                        </div>
                    </div>
                    <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#per_details_tab">О преподавателе</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#education_tab">Образование</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content profile-tab-cont">

                        <!-- Personal Details Tab -->
                        <div class="tab-pane fade show active" id="per_details_tab">

                            <!-- Personal Details -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Персональные данные</span>
                                                <a class="edit-link" href="{{route('teachers.edit', $teacher->id)}}"><i class="fa fa-edit mr-1"></i>Изменить</a>
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0 mb-sm-3">ФИО</p>
                                                <p class="col-sm-9">{{$teacher->full_name}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0 mb-sm-3">Дата рождения</p>
                                                <p class="col-sm-9">{{date('d.m.Y', strtotime($teacher->birthday))}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0 mb-sm-3">Пол</p>
                                                <p class="col-sm-9">{{$teacher->gender == 1 ? 'Мужской' : 'Женский'}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0 mb-sm-3">Email</p>
                                                <p class="col-sm-9">{{$teacher->user->email}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0 mb-sm-3">Номер телефона</p>
                                                <p class="col-sm-9">{{$teacher->phone ? '+998'.$teacher->phone : ''}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0">Адрес</p>
                                                <p class="col-sm-9 mb-0">{{$teacher->address}}, {{$teacher->city->name}}</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                            <!-- /Personal Details -->

                        </div>
                        <!-- /Personal Details Tab -->

                        <!-- Change Password Tab -->
                        <div id="education_tab" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title d-flex justify-content-between">
                                                <span>Образование и опыт работы</span>
                                                <a class="edit-link" href="{{route('teachers.edit', $teacher->id)}}"><i class="fa fa-edit mr-1"></i>Изменить</a>
                                            </h5>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0 mb-sm-3">Образование</p>
                                                <p class="col-sm-9">
                                                    @if($teacher->education_level == 1)
                                                        Среднее
                                                    @elseif($teacher->education_level == 2)
                                                        Средне-специальное
                                                    @else
                                                        Высшее
                                                    @endif
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0 mb-sm-3">Стаж</p>
                                                <p class="col-sm-9">{{$teacher->experience}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0 mb-sm-3">Школа</p>
                                                <p class="col-sm-9">{{$teacher->school}}</p>
                                            </div>
                                            <div class="row">
                                                <p class="col-sm-3 text-muted mb-0 mb-sm-3">Предметы</p>
                                                <p class="col-sm-9">
                                                    @foreach($teacher->subjects as $item)
                                                        <span class="badge badge-pill badge-success">{{$item->subject->name}}</span>
                                                    @endforeach
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
