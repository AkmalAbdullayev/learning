@extends("teacher.subject.main")

@section("breadTopic")
    <a
        href="{{redirect()->back()->getTargetUrl()}}"
        class="border-0 bg-danger-light"
        style="display:inline-block; float:right; margin-right: 20vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-arrow-alt-circle-left mr-2"></span>
        Назад
    </a>

    <a
        href="{{route("teacherHome")}}"
        class="border-0 bg-primary-light"
        style="display:inline-block; float:right; margin-right: 5vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-home mr-2"></span>
        Главная
    </a>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/teacher">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Topic</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Add Topic</h2>
            </div>
        </div>
    </div>
@endsection

@section("topic")
    <div class="container-fluid">
        <div class="custom-edit-service">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <h3>Add Topic</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div style="display: block">
                                <form action="{{route("storeSubject")}}" method="post">
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
                                                        Chapters
                                                        <span
                                                            class="text-danger"
                                                        >
                                                                *
                                                            </span>
                                                    </label>
                                                    <select class="form-control" name="subject">
                                                        @foreach($chapters as $chapter)
                                                            <option
                                                                value="{{$chapter->id}}">{{$chapter->name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <label
                                                        class="font-weight-bold"
                                                        style="font-size: 18px; font-family: cursive;"
                                                    >
                                                        Название
                                                        <span
                                                            class="text-danger"
                                                        >
                                                            *
                                                        </span>
                                                    </label>
                                                    <div class="input-group-prepend">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="addTopic"
                                                            placeholder="Добавьте название"
                                                            aria-label="Добавьте название"
                                                            aria-describedby="basic-addon2"
                                                        >
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
        <h4 class="text-center mb-4 font-weight-bold" style="font-family: cursive">Topic
            List</h4>
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-sm">
                        <thead>
                        <tr>
                            <th class="font-weight-bold text-center"
                                style="font-family: cursive">#
                            </th>
                            <th class="font-weight-bold text-center"
                                style="font-family: cursive">Chapter Name
                            </th>
                            <th class="font-weight-bold text-center">Topic Name</th>
                            <th class="font-weight-bold text-center"
                                style="font-family: cursive">Actions
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($topics as $topic)
                            <form action="{{route("deleteSubject", $topic->id)}}" method="post">
                                <tr>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{$topic->id}}
                                    </td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{\Illuminate\Support\Facades\DB::table("chapters")->select("name")->where("id", "=", $topic->chapter_id)->get()[0]->name}}
                                    </td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{$topic->name}}
                                    </td>
                                    <td class="text-center">
                                        <a
                                            href="{{route("addLesson", $topic->id)}}"
                                            class="btn btn-sm btn-success"
                                        >
                                            <i class="fa fa-plus mr-2"></i>
                                            Add Lesson
                                        </a>

                                        <a
                                            href="{{route("addExam", $topic->id)}}"
                                            class="btn btn-sm btn-primary"
                                        >
                                            <i class="fa fa-plus"></i>
                                            Add Exam
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
