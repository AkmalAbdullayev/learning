@extends('layouts.admin', ['title' => 'Вопросы-Ответы'])

@section('content')
<style>
    tr > td {
        width: 50vh;
    }
</style>
    <div class="row">
        <div class="col-md-10 d-flex">

            <!-- Recent Orders -->
            <div class="card card-table flex-fill">
                <div class="card-header">
                    <h4 class="card-title">Mentor List</h4>
                    <div>
                        <a href="{{ route('faqs.create') }}" class="btn btn-success" type="button">Create
                            FAQ</a>


                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-center">Title</th>
                                    <th class="text-center">Content</th>
                                    <th class="text-center">Language</th>
                                    <th class="text-center">Created At</th>
                                    <th class="text-center">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    <tr>
                                        <td class="text-center">
                                            <h2 class="table-avatar">
                                                <a href="profile.html" class="avatar avatar-sm mr-2"><img
                                                        class="avatar-img rounded-circle"
                                                        src="{{ asset('admin/assets/img/profiles/avatar-08.jpg') }}"
                                                        alt="User Image"></a>
                                                <a href="profile.html">{{ $faq->title }}</a>
                                            </h2>
                                        </td>
                                        <td class="text-center">
                                            {!! $faq->content !!}
                                        </td>
                                        <td class="text-center">{{ $faq->language->name }}</td>
                                        <td class="text-center">{{ $faq->created_at }}</td>

                                        <td>
                                            <div style="display: flex; justify-content: center">
                                                <a href="{{ route('faqs.edit', ['faq' => $faq->id]) }}" class="fa fa-edit"
                                                    style="padding-right: 2vh; font-size: 25px"></a>
                                                <form action="{{ route('faqs.destroy', ['faq' => $faq->id]) }}"
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
