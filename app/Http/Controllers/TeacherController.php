<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Chat;
use App\Models\Exam;
use App\Models\Language;
use App\Models\Lesson;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherSubject;
use App\Models\Test;
use App\Models\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function index()
    {
        $users = DB::table("teacher_subjects")->where(["teacher_id" => auth()->id()])->get();

        return view("layouts.teacher", compact("users"));
    }

    public function profile()
    {
        return view("teacher.profile");
    }

    public function listSubject()
    {
        $getTeacher = Teacher::where("user_id", auth()->user()->id)->get();
        $teacher_subjects = TeacherSubject::where("teacher_id", $getTeacher[0]->id)->get();
        $chapters = Chapter::where("teacher_subject_id", $teacher_subjects[0]->id)->get();
        $number_chapters = Chapter::where("teacher_subject_id", $teacher_subjects[0]->id)->count();
        $languages = Language::all();
        $topics = DB::table("topics")->select(["*"])->whereIn("chapter_id", $chapters)->count();

        return view("teacher.subject.partials", [
            'teacher_subjects' => $teacher_subjects,
            'chapters' => $number_chapters,
            'languages' => $languages,
            'topics' => $topics
        ]);
    }

    public function addChapter()
    {
        $teacher_subjects = DB::table("teacher_subjects")->select(["*"])->where("teacher_id", "=", auth()->user()->id)->get();
        $chapters = Chapter::where("teacher_id", auth()->id())->get();
        $languages = Language::all();

        return view("teacher.subject.addChapter", [
            'teacher_subjects' => $teacher_subjects,
            'chapters' => $chapters,
            'languages' => $languages
        ]);
    }

    public function storeChapter(Request $request)
    {
        $teacher_subject = new Chapter();

        $teacher_subject->teacher_id = auth()->id();
        $teacher_subject->teacher_subject_id = $request->input("subject");
        $teacher_subject->name = $request->input("addChapter");

        $teacher_subject->save();

        return redirect()->route("addChapter")->with("success", "Successfully create");
    }

    public function addTopic()
    {
        $chapters = Chapter::where("teacher_id", auth()->id())->get();
        $topics = DB::table("chapters")
            ->join("topics", 'topics.chapter_id', '=', 'chapters.id')
            ->get();

        return view("teacher.subject.addTopic", [
            'chapters' => $chapters,
            'topics' => $topics
        ]);
    }

    public function storeTopic(Request $request)
    {
        $topic = new Topic();

        $topic->chapter_id = $request->input("chapter");
        $topic->name = $request->input("addTopic");

        $topic->save();

        return redirect()->route("addTopic")->with("success", "Topic Created Successfully");
    }

    public function addLesson($id)
    {
        $lessons = Lesson::all();
        $topic = Topic::where("id", $id)->get();
        $teacher = Teacher::where("id", auth()->id())->get("id")->pluck("id")[0];
        $topics = DB::table("chapters")
            ->join("topics", 'topics.chapter_id', '=', 'chapters.id')
            ->get();

        return view("teacher.subject.addLesson", [
            'lessons' => $lessons,
            'topic' => $topic,
        ]);
    }

    public function storeLesson(Request $request)
    {
        $lesson = new Lesson();

        $lesson->teacher_id = auth()->id();
        $lesson->topic_id = $request->input("topic_id");
        $lesson->content = $request->input("content");
        $lesson->status = 1;

        $lesson->save();

        return redirect()->route("addTopic")->with("success", "Lesson created successfully");
    }

    public function addExam($id)
    {
        $exams = Exam::all();
        $topic = Topic::where("id", $id)->get();
        $subjects = DB::table("teacher_subjects")->select(["*"])->where("teacher_id", "=", auth()->user()->id)->get();

        return view("teacher.subject.addExam", [
            'subjects' => $subjects,
            'topic' => $topic,
            'exams' => $exams
        ]);
    }

    public function storeExam(Request $request)
    {
        $exam = new Exam();

        $exam->topic_id = $request->input("topic_id");
        $exam->teacher_subject_id = $request->input("subject");
        $exam->name = $request->input("title");
        $exam->pass_percent = $request->input("pass");
        $exam->duration = $request->input("duration");

        $exam->save();

        return redirect()->route("addTopic")->with("success", "Exam Created Successfully");
    }

    public function addTest()
    {
        $tests = Test::all();

        return view("teacher.subject.addTest", [
            'tests' => $tests
        ]);
    }

    public function createTest()
    {
        return view("teacher.subject.createTest");
    }

    public function store(Request $request)
    {
        $teacher_subject = new Chapter();

        $teacher_subject->teacher_id = auth()->id();
        $teacher_subject->teacher_subject_id = $request->input("subject");
        $teacher_subject->language_id = $request->input("language");
        $teacher_subject->name = $request->input("addSubject");

        $teacher_subject->save();

        return redirect()->route("addSubject")->with("success", "Successfully create");
//        return redirect("teacher")->with("success", "Successfully create");
    }

    public function view($id)
    {
        $teacher_subject = TeacherSubject::find($id);

        dd($teacher_subject);
    }

    public function update($id)
    {
        $teacher_subject = new TeacherSubject();
    }

    public function destroy($id)
    {
        $teacher_subject = TeacherSubject::findOrFail($id);

        $teacher_subject->delete();

        return redirect("teacher")->with("success", "Successfully deleted");
    }

    public function chat()
    {
        $students = Student::all();
        $getTeacher = Teacher::where("user_id", auth()->user()->id)->get()->pluck("id");
        $lastMessage = Chat::where("teacher_id", $getTeacher)->get();

        return view("header", [
            'students' => $students,
            'lastMessage' => $lastMessage
        ]);
    }

    public function student(Request $request)
    {
        $students = Student::all();
        $studentId = Student::findOrFail($request->get("id"));
        $getTeacher = Teacher::where("user_id", auth()->user()->id)->get()->pluck("id");
        $lastMessage = Chat::where("teacher_id", $getTeacher)->get();


        return view("header", [
            'students' => $students,
            'studentId' => $studentId,
            'lastMessage' => $lastMessage
        ])->with($request->query("id"));
    }

    public function test()
    {
        $tests = Test::all();
        return view("teacher.test.partials", [
            'tests' => $tests
        ]);
    }

    public function addSubject()
    {
        $teacher_subjects = DB::table("teacher_subjects")->select(["*"])->where("teacher_id", "=", auth()->user()->id)->get();
        $languages = Language::all();
        $subjects = Subject::all();
        return view("teacher.subject.addSubject", [
            'subjects' => $subjects,
            'languages' => $languages,
            'teacher_subjects' => $teacher_subjects
        ]);
    }
}
