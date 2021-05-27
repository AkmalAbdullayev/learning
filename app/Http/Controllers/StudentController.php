<?php

namespace App\Http\Controllers;

class StudentController extends Controller
{
    public function index() {
        return view("student.index");
    }

    public function profile() {
        return view("student.profile");
    }

    public function catalog()
    {
        return view('student.catalog');
    }

    public function courses($category)
    {
        return view('student.courses');
    }

    public function course($course)
    {
        return view('student.course');
    }

    public function timetable()
    {
        return view('student.timetable');
    }
}
