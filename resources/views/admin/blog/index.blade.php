@extends('layouts.admin', ['title' => 'Блог'])

@section('content')
    <div class="row">
        <div class="col-md-10 d-flex">

            <!-- Recent Orders -->
            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title">Mentor List</h4>
                    <div>
                        <a href="{{ route('blogs.create') }}" class="btn btn-success" type="button">Create
                            Blog</a>


                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Content</th>
                                    <th class="text-center">Blog_type</th>
                                    <th class="text-center">Language</th>
                                    <th class="text-center">Publish_date</th>
                                    <th class="text-center">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td class="text-center">
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="{{ asset('admin/assets/img/profiles/avatar-08.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="profile.html">{{ $blog->title }}</a>
                                            </h2>
                                        </td>
                                        <td class="text-center" style="width: 50vh !important">{!! $blog->content !!}</td>
                                        <td class="text-center">{{ $blog->blogType->name }}</td>
                                        <td class="text-center">{{ $blog->language->name }}</td>
                                        <td class="text-center">{{ $blog->publish_date }}</td>

                                        <td>
                                            <div style="display: flex; justify-content: center">
                                                <a href="{{ route('blogs.edit', ['blog' => $blog->id]) }}"
                                                    class="fa fa-edit" style="padding-right: 2vh; font-size: 25px"></a>
                                                <form action="{{ route('blogs.destroy', ['blog' => $blog->id]) }}"
                                                    method="POST" style="font-size: 20px; color:#0088cc;">
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

    </div>

@endsection
