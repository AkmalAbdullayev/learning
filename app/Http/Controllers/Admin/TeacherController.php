<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\City;
use App\Models\Language;
use App\Models\Role;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\TeacherSubject;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        try {
            $teachers = Teacher::orderBy('id', 'desc')
                ->paginate(20);

            return view('admin.teacher.index', compact('teachers'));
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function create()
    {
        $subjects = Subject::orderBy('name')->get();
        return view('admin.teacher.form', compact('subjects'));
    }

    public function edit(Teacher $teacher)
    {
        $subjects = Subject::orderBy('name')->get();
        return view('admin.teacher.form', compact('subjects', 'teacher'));
    }

    public function store(TeacherRequest $request)
    {
        try {
            DB::transaction(function () use ($request){
                $user = User::create([
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => Role::whereName('teacher')->pluck('id')->first(),
                    'status' => 1,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
                $teacher = Teacher::create([
                    'user_id' => $user->id,
                    'city_id' => City::whereName('Ташкент')->pluck('id')->first(),
                    'full_name' => $request->name,
                    'birthday' => date('Y-m-d', strtotime($request->birthday)),
                    'address' => $request->address,
                    'biography' => $request->biography,
                    'education_level' => $request->education_level,
                    'experience' => $request->experience,
                    'gender' => $request->gender,
                    'phone' => $request->phone,
                    'school' => $request->school,
                ]);
                if ($request->hasFile('image')){
                    Teacher::uploadImage($teacher, $request->image);
                }
                if ($request->filled('subject')){
                    //$teacher->subjects()->attach($request->subject);
                    foreach ($request->subject as $i){
                        TeacherSubject::create([
                            'teacher_id' => $teacher->id,
                            'subject_id' => $i,
                            'language_id' => Language::whereName('ru')->pluck('id')->first(),
                        ]);
                    }
                }
            });
            return redirect(route('teachers.index'))->with('success', 'Успешно');
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function update(Request $request)
    {
        abort(404);
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.show', compact('teacher'));
    }

    public function destroy(Teacher $teacher)
    {
        try {
            if ($teacher->avatar){
                Storage::disk('public')->delete($teacher->avatar);
            }
            $teacher->delete();
            return back()->with('success', 'Удален!');
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }
}
