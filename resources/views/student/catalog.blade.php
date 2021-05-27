@extends('layouts.student', ['title' => 'Каталог'])
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
                @for($i = 0; $i < 12; $i++)
                <div class="col-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <span class="d-block py-2 h3">Категория {{$i + 1}}</span>
                            <span class="d-block mb-0"><i class="fas fa-info-circle"></i> 1{{rand(0, 9)}} Предметов</span>
                            <a href="{{route('courses', 'catname')}}" class="btn btn-sm btn-primary mt-4">Подробно</a>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
