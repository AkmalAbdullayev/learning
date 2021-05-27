@extends('layouts.student', ['title' => 'Предмет'])
@section('content')
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item font-weight-bold">
                                <a href="{{route('home')}}">Главная</a>
                            </li>
                            <li class="breadcrumb-item font-weight-bold">
                                <a href="{{route('home')}}">Категория</a>
                            </li>
                            <li class="breadcrumb-item active font-weight-bold" aria-current="page">Предмет</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mentor-widget">
                                <div class="user-info-left align-items-center">
                                    <div class="user-info-cont">
                                        <h4 class="usr-name">Курс подготовки к ОГЭ по русскому языку <br> для 9 класс</h4>
                                        <div class="mentor-action">
                                            <p class="mentor-type social-title">Свяжитесь со мной</p>
                                            <a href="javascript:void(0)" class="btn-blue">
                                                <i class="fas fa-comments"></i>
                                            </a>
                                            <a href="chat.html" class="btn-blue">
                                                <i class="fas fa-envelope"></i>
                                            </a>
                                            <a href="javascript:void(0)" class="btn-blue" data-toggle="modal" data-target="#voice_call">
                                                <i class="fas fa-phone-alt"></i>
                                            </a>
                                            <a class="blue-btn-radius" href="">Записаться</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="mentor-widget">
                                <div class="user-info-left align-items-center">
                                    <div class="mentor-img d-flex flex-wrap justify-content-center">
                                        <div class="pro-avatar">JD</div>
                                    </div>
                                    <div class="user-info-cont">
                                        <h4 class="usr-name">Мария Малышева</h4>
                                        <div class="rating">
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star filled"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <div class="mentor-action">
                                            <div class="text">Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН. </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Mentor Details Tab -->
                    <div class="card">
                        <div class="card-body custom-border-card py-0 text-center">
                            <div class="row">
                                <div class="col-4">
                                    <h5 class="my-4">
                                        <div class="h3">120 Глав </div>
                                        <span>с практическими упражнениями</span>
                                    </h5>
                                </div>
                                <div class="col-4 border-left border-right">
                                    <h5 class="my-4">
                                        <div class="h3">60 занятий</div>
                                        <span class="w-75 d-block m-auto">по 2 часа</span>
                                    </h5>
                                </div>
                                <div class="col-4">
                                    <h5 class="my-4">
                                        <div class="h3">36 Тестов</div>
                                        <span>С готовыми ответами</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body custom-border-card pb-0">

                            <!-- About Details -->
                            <div class="widget about-widget custom-about mb-0">
                                <h4 class="widget-title">О преподователе</h4>
                                <hr/>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            </div>
                            <!-- /About Details -->
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body custom-border-card pb-0">

                            <!-- Personal Details -->
                            <div class="widget education-widget mb-0">
                                <h4 class="widget-title">Персональные данные</h4>
                                <hr/>
                                <div class="experience-box">
                                    <ul class="experience-list profile-custom-list">
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Пол</span>
                                                    <div class="row-result">Женщина</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Дата рождение</span>
                                                    <div class="row-result">01 - 02 - 2000</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Адрес</span>
                                                    <div class="row-result">г. Ташкент, Мирабадский район, ул. Школьная 12</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Personal Details -->

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body custom-border-card pb-0">

                            <!-- Qualification Details -->
                            <div class="widget experience-widget mb-0">
                                <h4 class="widget-title">Образование и опыт работы</h4>
                                <hr/>
                                <div class="experience-box">
                                    <ul class="experience-list profile-custom-list">
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Undergraduate Major</span>
                                                    <div class="row-result">Mathematics</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Graduate College</span>
                                                    <div class="row-result">Coimbatore University</div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="experience-content">
                                                <div class="timeline-content">
                                                    <span>Type of Degree</span>
                                                    <div class="row-result">B.Sc (Maths)</div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /Qualification Details -->

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body pb-1 custom-border-card">

                            <!-- Location Details -->
                            <div class="widget awards-widget m-0">
                                <h4 class="widget-title">Программа курса</h4>
                                <hr/>
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Глава #1 </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body"> Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Глава #2 </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body"> Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Глава #3 </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body"> Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН Эксперт ОГЭ и ЕГЭ по русскому языку. Учитель русского языка школы-пансиона "Летово". Ученый секретарь Орфографической комиссии РАН  </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
