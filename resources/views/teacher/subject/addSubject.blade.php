@extends("teacher.subject.main")

@section("breadSubject")
    <a
        href="{{route("addTopic")}}"
        class="border-0 bg-primary"
        style="display:inline-block; float:right; margin-right: 20vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-plus mr-2"></span>
        Add Topic
    </a>

    <a
        href="{{route("addChapter")}}"
        class="border-0 bg-primary"
        style="display:inline-block; float:right; margin-right: 5vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-plus mr-2"></span>
        Add Chapter
    </a>

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
                        <li class="breadcrumb-item active" aria-current="page">Add Subject</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Add Subject</h2>
            </div>
        </div>
    </div>
@endsection

@section("subject")
    <div class="container-fluid">
        <div class="custom-edit-service">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <h3>Add Subject</h3>
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
                                                        Subject
                                                        <span
                                                            class="text-danger"
                                                        >
                                                                *
                                                            </span>
                                                    </label>
                                                    <select
                                                        class="form-control"
                                                        name="subject"
                                                        id="subject"
                                                    >
                                                        @forelse($subjects as $subject)
                                                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                        @empty
                                                            <option disabled selected>No Subject Found</option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <label
                                                        for="language"
                                                        class="font-weight-bold"
                                                        style="font-size: 18px; font-family: cursive;"
                                                    >
                                                        Language
                                                        <span
                                                            class="text-danger"
                                                        >
                                                            *
                                                        </span>
                                                    </label>
                                                    <select
                                                        class="form-control"
                                                        name="language"
                                                        id="lang"
                                                    >
                                                        @forelse($languages as $language)
                                                            <option
                                                                value="{{$language->id}}">{{$language->name}}</option>
                                                        @empty
                                                            <option disabled selected></option>
                                                        @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-10">
                                                <div class="form-group">
                                                    <label
                                                        for="name"
                                                        class="font-weight-bold"
                                                        style="font-size: 18px; font-family: cursive;"
                                                    >
                                                        Subject Name
                                                    </label>
                                                    <div class="input-group-prepend">
                                                        <input
                                                            type="text"
                                                            class="form-control"
                                                            name="addSubject"
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
        <h4 class="text-center mb-4 font-weight-bold" style="font-family: cursive">Subject List</h4>
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-sm">
                        <thead>
                        <tr>
                            <th class="font-weight-bold text-center" style="font-family: cursive">#</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Main Subject</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Language</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Subject Name</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($teacher_subjects as $teacher_subject => $k)
                            <form action="{{route("deleteSubject", $k->id)}}" method="post">
                                <tr>
                                    <td class="text-center" style="font-size: 20px;">{{++$teacher_subject}}</td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{\Illuminate\Support\Facades\DB::table("subjects")->where("id", "=", $k->subject_id)->get("name")[0]->name}}
                                    </td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{\Illuminate\Support\Facades\DB::table("languages")->where("id", "=", $k->language_id)->get("name")[0]->name}}
                                    </td>
                                    <td
                                        class="text-center"
                                        style="font-size: 20px;"
                                    >
                                        {{$k->name}}
                                    </td>
                                    <td class="text-center">
                                        <a
                                            href="{{route("viewSubject", $subject->id)}}"
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
