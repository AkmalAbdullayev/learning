@extends('layouts.admin', ['title' => 'Преподаватели'])
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="h4 mb-0">Список преподавателей</div>
            <a href="{{route('teachers.create')}}" class="btn btn-sm btn-outline-primary">Добавить</a>
        </div>
        <div class="card-body">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Главная</a></li>
                <li class="breadcrumb-item active">Преподаватели</li>
            </ul>
            <div class="table-responsive">
                <table class="table table-hover table-center table-bordered table-sm">
                    <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Действия</th>
                        <th>ФИО</th>
                        <th>Email</th>
                        <th>Номер телефона</th>
                        <th>Дата рождения</th>
                        <th>Адрес</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $k => $item)
                        <tr>
                            <td>{{$k+1}}</td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{route('teachers.show', $item->id)}}" class="btn btn-sm btn-outline-primary" title="Открыть">
                                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('teachers.edit', $item->id)}}" class="btn btn-sm btn-outline-primary" title="Изменить">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-outline-primary confirmDelete" data-form="teacher{{$item->id}}" title="Удалить">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        <form action="{{route('teachers.destroy', $item->id)}}" id="teacher{{$item->id}}" class="d-none" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </a>
                                </div>
                            </td>
                            <td>{{$item->full_name}}</td>
                            <td>{{$item->user->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{date('d.m.Y', strtotime($item->birthday))}}</td>
                            <td>{{$item->address}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{$teachers->links()}}
        </div>
    </div>
@endsection
