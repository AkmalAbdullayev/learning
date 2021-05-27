@extends("teacher.subject.main")

@section("breadExam")
    <a
        href="{{route("teacherHome")}}"
        class="border-0 bg-primary"
        style="display:inline-block; float:right; margin-right: 20vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-home mr-2"></span>
        Главная
    </a>

    <a
        href="{{redirect()->back()->getTargetUrl()}}"
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
                        <li class="breadcrumb-item active" aria-current="page">Add Exam</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Add Topic</h2>
            </div>
        </div>
    </div>
@endsection

@section("exam")
    <div class="container-fluid">
        <div class="custom-edit-service">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <h3>Add Exam</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div style="display: block">
                                <form action="{{route("storeExam")}}" method="post">
                                    @csrf
                                    <div class="service-fields mb-3 col-12">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label
                                                        class="font-weight-bold"
                                                        style="font-size: 18px; font-family: cursive;"
                                                    >
                                                        Subjects
                                                        <span
                                                            class="text-danger"
                                                        >
                                                                *
                                                            </span>
                                                    </label>
                                                    <select class="form-control" name="subject">
                                                        @forelse($subjects as $subject)
                                                            <option
                                                                value="{{$subject->id}}">{{$subject->name}}
                                                            </option>
                                                        @empty
                                                            <option
                                                                disabled
                                                                selected
                                                            >
                                                                No subject found
                                                            </option>
                                                        @endforelse
                                                    </select>
                                                    <input type="hidden" value="{{$topic[0]->id}}" name="topic_id">
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
                                                    <input
                                                        type="text"
                                                        class="form-control"
                                                        name="title"
                                                        placeholder="Добавьте название"
                                                    >

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="service-fields mb-3 col-12">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label
                                                        class="font-weight-bold"
                                                        for="duration"
                                                        style="font-family: cursive"
                                                    >
                                                        Pass Percent
                                                        <span
                                                            class="text-danger"
                                                        >
                                                                *
                                                            </span>
                                                    </label>
                                                    <input
                                                        type="text"
                                                        name="pass"
                                                        class="form-control"
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label
                                                        class="font-weight-bold"
                                                        for="duration"
                                                        style="font-family: cursive"
                                                    >
                                                        Duration
                                                        <span
                                                            class="text-danger"
                                                        >
                                                                *
                                                            </span>
                                                    </label>
                                                    <input
                                                        type="text"
                                                        name="duration"
                                                        class="form-control"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <h4 class="text-center mb-4 font-weight-bold" style="font-family: cursive">Exam List</h4>
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-sm">
                        <thead>
                        <tr>
                            <th class="font-weight-bold text-center" style="font-family: cursive">#</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Topic Name</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Subject</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Exam Name</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Pass Percent</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Duration</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @forelse($exams as $k => $exam)
                            <form action="{{route("deleteSubject", $exam->id)}}" method="post">
                                <tr>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{++$k}}
                                    </td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{$exam->topic->name}}
                                    </td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{\Illuminate\Support\Facades\DB::table("teacher_subjects")->select("name")->where("id", "=", $exam->teacher_subject_id)->get("name")->pluck("name")[0]}}
                                    </td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{$exam->name}}
                                    </td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{$exam->pass_percent}}
                                    </td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{$exam->duration}}
                                    </td>
                                    <td class="text-center">
                                        <a
                                            {{--                                            href="{{route("addTest", $lesson->id)}}"--}}
                                            class="btn btn-sm btn-success"
                                        >
                                            <i class="fa fa-plus"></i>
                                            Add Test
                                        </a>
                                        <a
                                            {{--                                            href="{{route("addTest", $lesson->id)}}"--}}
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
