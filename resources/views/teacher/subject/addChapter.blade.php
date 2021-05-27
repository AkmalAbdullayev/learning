@extends("teacher.subject.main")

@section("breadChapter")
    <a
        href="{{route("addTopic")}}"
        class="border-0 bg-info"
        style="display:inline-block; float:right; margin-right: 20vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-plus mr-2"></span>
        Add Topic
    </a>

    <a
        href="{{route("listSubject")}}"
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
                        <li class="breadcrumb-item"><a href="/teacher">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Chapter</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Add Chapter</h2>
            </div>
        </div>
    </div>
@endsection

@section("content")
    <div class="container-fluid">
        <div class="custom-edit-service">
            <div class="row">
                <div class="col-12">
                    <div class="card-header">
                        <h3>Add Chapter</h3>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div style="display: block">
                                <form action="{{route("storeChapter")}}" method="post">
                                    @csrf
                                    <div class="service-fields mb-3 col-12">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label
                                                        class="font-weight-bold"
                                                        style="font-size: 18px; font-family: cursive;"
                                                    >
                                                        Предметы
                                                        <span
                                                            class="text-danger"
                                                        >
                                                                *
                                                            </span>
                                                    </label>
                                                    <select class="form-control" name="subject">
                                                        @foreach($teacher_subjects as $subject)
                                                            <option
                                                                value="{{$subject->id}}">{{$subject->name}}
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
                                                            name="addChapter"
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
                            <div class="col-md-12">
                                <h4 class="text-center mb-4 font-weight-bold" style="font-family: cursive">Chapter
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
                                                        style="font-family: cursive">Subject
                                                    </th>
                                                    <th class="font-weight-bold text-center"
                                                        style="font-family: cursive">Chapter Name
                                                    </th>
                                                    <th class="font-weight-bold text-center"
                                                        style="font-family: cursive">Actions
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($chapters as $chapter)
                                                    <form action="{{route("deleteSubject", $chapter->id)}}"
                                                          method="post">
                                                        <tr>
                                                            <td
                                                                class="text-center"
                                                                style="font-size: 20px"
                                                            >
                                                                {{$chapter->id}}
                                                            </td>
                                                            <td class="text-center"
                                                                style="font-size: 20px"
                                                            >
                                                                {{\Illuminate\Support\Facades\DB::table("teacher_subjects")->select("name")->where("id", "=", $chapter->teacher_subject_id)->get("name")[0]->name}}
                                                            </td>
                                                            <td
                                                                class="text-center"
                                                                style="font-size: 20px"
                                                            >
                                                                {{$chapter->name}}
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
