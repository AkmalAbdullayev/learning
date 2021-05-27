@extends('layouts.student', ['title' => 'Главная'])
@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active font-weight-bold" aria-current="page">Главная</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
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
                                    <h6>Уроков</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 dash-board-list yellow">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>33</h3>
                                    <h6>Уроков</h6>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 dash-board-list pink">
                            <div class="dash-widget">
                                <div class="circle-bar">
                                    <div class="icon-col">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="dash-widget-info">
                                    <h3>33</h3>
                                    <h6>Уроков</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="h5">Избранные уроки</div>
                            <table class="table table-sm table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Наименование</th>
                                    <th width="120"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-left">Математика</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-left">Английский язык</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-left">Химия</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-left">Физика</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-left">Немецкий язык</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <div class="h5">Незаконченные уроки</div>
                            <table class="table table-sm table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Наименование</th>
                                    <th width="120"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-left">Математика</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-left">Английский язык</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-left">Химия</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-left">Физика</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-left">Немецкий язык</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-outline-primary">Продолжить</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
