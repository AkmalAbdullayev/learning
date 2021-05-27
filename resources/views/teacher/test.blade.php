<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@lang("messages.add test")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link href="{{asset("assets/img/favicon.png")}}" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome/css/fontawesome.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/plugins/fontawesome/css/all.min.css")}}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{asset("assets/plugins/select2/css/select2.min.css")}}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
@yield("content")
<!-- /Header -->

    <!-- Breadcrumb -->
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <h2 class="breadcrumb-title">Add Question</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->

    <!-- Page Content -->
    <div class="content">
        <div class="container-fluid">

            <div class="row d-flex justify-content-center">
                <div class="col-md-7 col-lg-8 col-xl-9 custom-edit-service">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="pb-3">Add Question</h3>

                                    <form action="blog.html">
                                        <div class="service-fields mb-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Question Title <span class="text-danger">*</span></label>
                                                        <textarea class="ckeditor form-control" name="question_title"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="service-fields mb-3">
                                            <h4 class="heading-2">Blog Category</h4>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Category <span class="text-danger">*</span></label>
                                                        <select class="form-control select" name="category">
                                                            <option value="1">Abacus Study for beginner - Part I
                                                            </option>
                                                            <option value="2" selected="selected">Abacus Study for
                                                                beginner - Part II
                                                            </option>
                                                            <option value="3">Abacus Study for beginner - Part III
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Sub Category <span class="text-danger">*</span></label>
                                                        <select class="form-control select" name="subcategory">
                                                            <option value="1">Abacus Study for experienced - Part I
                                                            </option>
                                                            <option value="2" selected="selected">Abacus Study for
                                                                experienced - Part II
                                                            </option>
                                                            <option value="3">Abacus Study for experienced - Part III
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="service-fields mb-3">
                                            <h4 class="heading-2">Blog Details</h4>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Descriptions <span class="text-danger">*</span></label>
                                                        <textarea id="about" class="form-control service-desc"
                                                                  name="about">note.</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="service-fields mb-3">
                                            <h4 class="heading-2">Blog Images </h4>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="service-upload">
                                                        <i class="fas fa-cloud-upload-alt"></i>
                                                        <span>Upload Service Images *</span>
                                                        <input type="file" name="images[]" id="images" multiple="">

                                                    </div>
                                                    <div id="uploadPreview">
                                                        <ul class="upload-wrap">
                                                            <li>
                                                                <div class="upload-images">

                                                                    <img alt="" src="assets/img/blog/blog-thumb-01.jpg">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="upload-images">

                                                                    <img alt="" src="assets/img/blog/blog-thumb-02.jpg">
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="upload-images">

                                                                    <img alt="" src="assets/img/blog/blog-thumb-03.jpg">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-btn" type="submit" name="form_submit"
                                                    value="submit">Submit
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

        </div>

    </div>
    <!-- /Page Content -->

    <!-- Footer -->
@yield("footer")
<!-- /Footer -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset("assets/js/popper.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>

<!-- Select2 JS -->
<script src="{{asset("assets/plugins/select2/js/select2.min.js")}}"></script>

<!-- Sticky Sidebar JS -->
<script src="{{asset("assets/plugins/theia-sticky-sidebar/ResizeSensor.js")}}"></script>
<script src="{{asset("assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js")}}"></script>

<!-- Circle Progress JS -->
<script src="{{asset("assets/js/circle-progress.min.js.html")}}"></script>

<!-- Custom JS -->
<script src="{{asset("assets/js/script.js")}}"></script>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>

</body>
</html>
