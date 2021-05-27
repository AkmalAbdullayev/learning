@extends('layouts.admin', ['title' => 'Вопросы-Ответы'])

@section('content')
    <div class="col-md-7 col-lg-8 col-xl-9 custom-edit-service">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="pb-3">Add FAQ</h3>

                        <form method="post" action="{{ route('faqs.update', $faq->id) }}" enctype="multipart/form-data">
                            @method("PUT")
                            @csrf

                            <div class="service-fields mb-3">
                                <h4 class="heading-2">Service Information</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Title <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="title" value="{{ $faq->title }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Language <span class="text-danger">*</span></label>
                                            <select class="form-control select" name="language_id">
                                                @foreach ($languages as $language)
                                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="service-fields mb-3">
                                <h4 class="heading-2">Content</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Descriptions <span class="text-danger">*</span></label>
                                            <textarea id="about" class="form-control service-desc ckeditor"
                                                name="content">{{ $faq->content }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn" type="submit">Submit</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
