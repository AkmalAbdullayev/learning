@extends('layouts.admin', ['title' => 'Добавить преподавателя'])
@section('content')
    <?php
        if (Route::currentRouteName() == 'teachers.create'){
            $title = 'Добавить преподавателя';
        }elseif (Route::currentRouteName() == 'teachers.edit'){
            $title = 'Изменить преподавателя';
        }
    ?>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="h3 mb-0">{{$title}}</div>
        </div>
        <div class="card-body">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Главная</a></li>
                <li class="breadcrumb-item active">{{$title}}</li>
            </ul>
            <form action="{{isset($teacher) ? route('teachers.update', $teacher->id) : route('teachers.store')}}" method="POST" class="form-row" enctype="multipart/form-data">
                @csrf
                @if(isset($teacher))
                    @method('PUT')
                @endif
                <div class="col-6">
                    <div class="form-group">
                        <label for="">ФИО <sup class="text-danger">*</sup></label>
                        <input type="text" class="form-control @error('name') border-danger @enderror" name="name" value="{{old('name', $teacher->full_name ?? null)}}" required>
                        @error('name')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Дата рождения <sup class="text-danger">*</sup></label>
                        <input type="date" class="form-control @error('birthday') border-danger @enderror" name="birthday" value="{{old('birthday', isset($teacher->birthday) ? date('d.m.Y', strtotime($teacher->birthday)) : null)}}" required>
                        @error('birthday')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Адрес</label>
                        <input type="text" class="form-control @error('address') border-danger @enderror" name="address" value="{{old('address', $teacher->address ?? null)}}">
                        @error('address')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Предметы <sup class="text-danger">*</sup></label>
                        <select class="select2 form-control @error('subject') border-danger @enderror" name="subject[]" multiple="multiple">
                            @foreach($subjects as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @error('subject')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Номер телефона <sup class="text-danger">*</sup></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">+998</span>
                            </div>
                            <input class="form-control @error('phone') border-danger @enderror" name="phone" value="{{old('phone', $teacher->phone ?? null)}}"/>
                        </div>
                        @error('phone')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Фотография</label>
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Выбрать фото...</label>
                            <div class="invalid-feedback">Пример неверного отзыва о пользовательском файле</div>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Email <sup class="text-danger">*</sup></label>
                        <input type="email" class="form-control @error('email') border-danger @enderror" name="email" value="{{old('email', $teacher->user->email ?? null)}}">
                        @error('email')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Пароль <sup class="text-danger">*</sup> <i class="text-danger small">(минимум 8 символов)</i></label>
                        <input type="text" class="form-control @error('password') border-danger @enderror" name="password" value="{{old('password')}}">
                        @error('password')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Стаж</label>
                        <input type="number" class="form-control @error('experience') border-danger @enderror" name="experience" value="{{old('experience', $teacher->experience ?? null)}}">
                        @error('experience')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Уровень образования <sup class="text-danger">*</sup></label>
                        <select class="select2 form-control @error('education_level') border-danger @enderror" name="education_level">
                            <option value="1" {{isset($teacher) && $teacher->education_level == 1 ? 'selected' : ''}}>Среднее</option>
                            <option value="2" {{isset($teacher) && $teacher->education_level == 2 ? 'selected' : ''}}>Среднее-специальное</option>
                            <option value="3" {{isset($teacher) && $teacher->education_level == 3 ? 'selected' : ''}}>Высшее</option>
                        </select>
                        @error('education_level')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Школа</label>
                        <input type="text" class="form-control @error('school') border-danger @enderror" name="school" value="{{old('school', $teacher->school ?? null)}}">
                        @error('school')
                        <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="d-block">Пол</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">Мужской</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="0">
                            <label class="form-check-label" for="inlineRadio2">Женский</label>
                        </div>
                    </div>
                </div>
                <div class="form-group w-100">
                    <label for="">Биография</label>
                    <textarea name="biography" id="" cols="30" rows="10" class="form-control @error('biography') border-danger @enderror">{{old('biography', $teacher->biography ?? null)}}</textarea>
                    @error('biography')
                    <span class="invalid text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group w-100 text-right">
                    <button type="submit" class="btn btn-primary">
                        {{Route::currentRouteName() == 'teachers.edit' ? 'Обновить' : 'Сохранить'}}
                    </button>
                    <a href="{{route('teachers.index')}}" class="btn btn-outline-secondary">Отмена</a>
                </div>
            </form>
        </div>
    </div>
@endsection
