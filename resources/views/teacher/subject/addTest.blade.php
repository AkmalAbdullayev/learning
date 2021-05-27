@extends("teacher.subject.main")

@section("breadTest")
    <a
        href="{{route("addTopic")}}"
        class="border-0 bg-danger-light"
        style="display:inline-block; float:right; margin-right: 20vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-arrow-alt-circle-left mr-2"></span>
        Назад
    </a>

    <a
        href="{{route("teacherHome")}}"
        class="border-0 bg-primary"
        style="display:inline-block; float:right; margin-right: 10vh; text-decoration: none; color: white; font-size: 18px; padding: 10px 40px; border-radius: 50px;"
    >
        <span class="fa fa-home mr-2"></span>
        Главная
    </a>

    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12 col-12">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route("teacherHome")}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Test List</li>
                    </ol>
                </nav>
                <h2 class="breadcrumb-title">Test List</h2>
            </div>
        </div>
    </div>
@endsection

@section("test")
    <div class="col-md-12 ml-5">
        <a href="{{route("createTest")}}">
            <button
                class="btn btn-sm bg-danger-light"
                style="font-size: 20px;"
            >
                <span class="fa fa-plus"></span>
                Add Test
            </button>
        </a>
    </div>
    <div class="col-md-12">
        <h4 class="text-center mb-4 font-weight-bold" style="font-family: cursive">Test List</h4>
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-sm">
                        <thead>
                        <tr>
                            <th class="font-weight-bold text-center" style="font-family: cursive">#</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Exam Name</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Question</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Answers</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Correct</th>
                            <th class="font-weight-bold text-center" style="font-family: cursive">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($tests as $test)
                            <form action="{{route("deleteSubject", $test->id)}}" method="post">
                                <tr>
                                    <td class="text-center">{{$test->id}}</td>
                                    <td class="text-center">{{$test->exam->name}}</td>
                                    <td class="text-center">{{$test->question}}</td>
                                    <td class="text-center">
                                        <h2 class="table-avatar">
                                            <span
                                                class="text-center mr-3 fas fa-book-reader avatar-img rounded-circle"
                                                style="font-size: 30px"
                                            >
                                            </span>
                                            <span style="font-size: 20px">{{$test->answers}}</span>
                                        </h2>
                                    </td>
                                    <td class="text-center">{{$test->correct}}</td>
                                    <td class="text-center">
                                        <a
                                            href="{{route("addTest", $test->id)}}"
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
