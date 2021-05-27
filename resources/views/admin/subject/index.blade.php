@extends('layouts.admin', ['title' => 'Предметы'])
@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="h3 mb-0">Список предметов</div>
        </div>
        <div class="card-body">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item active">Предметы</li>
            </ul>
            <form class="form-row" action="{{!isset($subject) ? route('subjects.store') : route('subjects.update', $subject->id)}}" method="POST">
                @csrf
                @isset($subject)
                    @method('PATCH')
                @endisset
                <div class="col-10">
                    <div class="form-group">
                        <input type="text" class="form-control @error('name') border-danger @enderror" name="name" placeholder="Название" value="{{old('name', $subject->name ?? null)}}">
                        @error('name')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-sm">
                            {{isset($subject) ? 'Обновить' : 'Сохранить'}}
                        </button>
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-hover table-center table-bordered table-sm">
                    <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Действия</th>
                        <th>Название</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $k => $item)
                            <tr>
                                <td width="50" class="text-center">{{$k+1}}</td>
                                <td width="100" class="text-center">
                                    <div class="btn-group btn-group-sm">
                                        <a href="{{route('subjects.edit', $item->id)}}" class="btn btn-sm btn-outline-primary" title="Изменить">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-outline-primary confirmDelete" data-form="subject{{$item->id}}" title="Удалить">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                            <form action="{{route('subjects.destroy', $item->id)}}" class="d-none" method="POST" id="subject{{$item->id}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </a>
                                    </div>
                                </td>
                                <td>{{$item->name}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{$subjects->links()}}
        </div>
    </div>
@endsection
