<div class="col-md-12">
    @if ($users->isNotEmpty())
        <h4 class="mb-4">Список уроков</h4>
        <div class="card card-table">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center mb-0">
                        <thead>
                        <tr>
                            <th>Уроки</th>
                            <th>Создано</th>
                            <th class="text-center">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <form action="{{route("deleteSubject", $user->id)}}" method="post">
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <span
                                                class="text-center mr-3 fas fa-book-reader avatar-img rounded-circle"
                                                style="font-size: 30px"
                                            >
                                            </span>
                                            <a class="text-center">{{$user->name}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$user->created_at}}</td>
                                    <td class="text-center p-0">
                                        <a
                                            href="{{route("viewSubject", $user->id)}}"
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
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @else
        <h2 class="text-center text-success">Нет активных уроков</h2>
    @endif
</div>

