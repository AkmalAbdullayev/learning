<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => false]);
Route::view('/', 'welcome');

Route::group(['prefix' => 'home', 'middleware' => 'role:admin'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/teachers', 'Admin\TeacherController');
    Route::resource('/students', 'Admin\StudentController');
    Route::resource('/parents', 'Admin\ParentController');
    Route::resource('/subjects', 'Admin\SubjectController');
    Route::resource('/blogs', 'Admin\BlogController');
    Route::resource('/faqs', 'Admin\FaqController');
    Route::resource('/feedbacks', 'Admin\FeedbackController');
});

Route::group(["prefix" => "teacher", 'middleware' => 'role:teacher'], function () {
    Route::get("/", "TeacherController@index")->name('teacherHome');
    Route::get("profile", "TeacherController@profile")->name("profile");
    Route::get("subject", "TeacherController@listSubject")->name("listSubject");
    Route::get("subject/add", "TeacherController@addSubject")->name("addSubject");
    Route::get("subject/chapter", "TeacherController@addChapter")->name("addChapter");
    Route::get("subject/topic", "TeacherController@addTopic")->name("addTopic");
    Route::get("subject/lesson/{topic}", "TeacherController@addLesson")->name("addLesson");
    Route::get("subject/exam/{lesson}", "TeacherController@addExam")->name("addExam");
    Route::get("view/{id}", "TeacherController@view")->name("viewSubject");
    Route::get("chat", "TeacherController@chat")->name("chat");
    Route::get("chat/student", "TeacherController@student")->name("studentChat");
    Route::get("subject/test", "TeacherController@addTest")->name("test");
    Route::get("subject/test/create", "TeacherController@createTest")->name("createTest");
    Route::get("test", "TeacherController@test")->name("addTest");

    Route::post("subject/chapter/store", "TeacherController@storeChapter")->name("storeChapter");
    Route::post("subject/lesson/store", "TeacherController@storeLesson")->name("storeLesson");
    Route::post("subject/exam/store", "TeacherController@storeExam")->name("storeExam");
    Route::post("store", "TeacherController@store")->name("storeSubject");
    Route::post("topic/store", "TeacherController@storeTopic")->name("storeTopic");
    Route::put("update/{id}", "TeacherController@update")->name("updateSubject");
    Route::delete("delete/{id}", "TeacherController@destroy")->name("deleteSubject");
});

Route::group(["prefix" => "student", 'middleware' => 'role:student'], function () {
    Route::get("/", "StudentController@index")->name("home");
    Route::get("profile", "StudentController@profile")->name("profile");
    Route::get("catalog", "StudentController@catalog")->name("catalog");
    Route::get("catalog/{category}", "StudentController@courses")->name("courses");
    Route::get("catalog/{category}/{course}", "StudentController@course")->name("course");
    Route::get("timetable", "StudentController@timetable")->name("timetable");
});
