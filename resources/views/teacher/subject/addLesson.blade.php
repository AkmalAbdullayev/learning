@extends("teacher.subject.main")

@section("breadLesson")
    <a
        href="{{route("teacherHome")}}"
        class="border-0 bg-primary"
        style="display:inline-block; float:right; margin-right: 20vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-home mr-2"></span>
        Главная
    </a>

    <a
        href="{{route("addTopic")}}"
        class="border-0 bg-danger-light"
        style="display:inline-block; float:right; margin-right: 5vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-arrow-alt-circle-left mr-2"></span>
        Назад
    </a>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route("teacherHome")}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Lesson</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Add Lesson</h2>
            </div>
        </div>
    </div>
@endsection

@section("lesson")
    <div class="container-fluid">
        <div class="custom-edit-service">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <h3>Add Lesson</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div style="display: block">
                                <form action="{{route("storeLesson")}}" method="post">
                                    @csrf
                                    <div class="service-fields mb-3 col-12">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label
                                                        class="font-weight-bold"
                                                        style="font-size: 18px; font-family: cursive;"
                                                        for="content"
                                                    >
                                                        Content
                                                        <span
                                                            class="text-danger"
                                                        >
                                                                *
                                                            </span>
                                                    </label>
                                                    <textarea
                                                        class="form-control"
                                                        name="content"
                                                        id="content"
                                                        rows="3"
                                                    >
                                                    </textarea>
                                                </div>
                                                <button
                                                    class="btn btn-primary"
                                                    style="border-radius: 0;"
                                                    type="submit"
                                                    name="form_submit"
                                                    value="submit"
                                                    id="basic-addon2"
                                                >
                                                    Добавить
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h4 class="text-center mb-4 font-weight-bold" style="font-family: cursive">Lesson List</h4>
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-sm">
                        <thead>
                        <tr>
                            <th class="font-weight-bold text-center" style="font-family: cursive">#</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Topic Name</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Status</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Content</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Confirmed By</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($lessons as $lesson)
                            <form action="{{route("deleteSubject", $lesson->id)}}" method="post">
                                <tr>
                                    <td class="text-center">{{$lesson->id}}</td>
                                    <td class="text-center">{{$lesson->topic->name}}</td>
                                    <td class="text-center">{{$lesson->status}}</td>
                                    <td class="text-center">
                                        <h2 class="table-avatar">
                                            <span
                                                class="text-center mr-3 fas fa-book-reader avatar-img rounded-circle"
                                                style="font-size: 30px"
                                            >
                                            </span>
                                            <span style="font-size: 20px">{{$lesson->content}}</span>
                                        </h2>
                                    </td>
                                    @isset($lesson->confirmedBy->username)
                                        <td class="text-center">{{$lesson->confirmedBy->username}}</td>
                                    @endisset
                                    @empty($lesson->confirmedBy->username)
                                        <td class="text-center text-danger">not confirmed</td>
                                    @endempty
                                    <td class="text-center">
                                        <a
                                            href="{{route("addTest", $lesson->id)}}"
                                            class="btn btn-sm bg-info-light"
                                        >
                                            <i class="far fa-eye"></i>
                                            View
                                        </a>
                                        <a
                                            class="btn btn-sm bg-warning-light"
                                        >
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        @csrf
                                        @method("DELETE")
                                        <button
                                            class="btn btn-sm bg-danger-light"
                                            type="submit"
                                        >
                                            <i class="fa fa-trash"></i>
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            </form>
                        @empty
                            <h2 class="text-center">No data found</h2>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
