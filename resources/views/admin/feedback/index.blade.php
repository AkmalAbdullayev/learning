@extends('layouts.admin', ['title' => 'Обратная связь'])

@section('content')
    <div class="col-md-10 d-flex">

        <!-- Recent Orders -->
        <div class="card card-table flex-fill">
            <div class="card-header">
                <h4 class="card-title">Feedback List</h4>

            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-center">User ID</th>
                                <th class="text-center">Sender Name</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Content</th>
                                <th class="text-center">Solved At</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($feedbacks as $feedback)
                                <tr>

                                    <td class="text-center">{{ $feedback->user->username }}</td>
                                    <td class="text-center">{{ $feedback->sender_name }}</td>
                                    <td class="text-center">{{ $feedback->title }}</td>
                                    <td class="text-center">{{ $feedback->content }}</td>
                                    <td class="text-center">{{ $feedback->solved_at }}</td>
                                    <td class="text-center">{{ $feedback->description }}</td>
                                    <td>
                                        <div style="display: flex; justify-content: center">
                                            <a href="#" class="fa fa-edit" style="padding-right: 2vh; font-size: 25px"></a>
                                            <form action="#" method="POST" style="font-size: 20px; color:#0088cc;">
                                                @method("DELETE")
                                                @csrf
                                                <button type="submit" class="fa fa-trash-o danger"
                                                    style="display: flex; font-size: 23px; border: none ">
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /Recent Orders -->

    </div>
@endsection
