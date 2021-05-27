<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(Request $request)
    {
        try {
            $subjects = Subject::orderBy('name')->paginate(20);
            return view('admin.subject.index', compact('subjects'));
        } catch (\Exception $exception) {
            $exception->getMessage();
        }
    }

    public function edit(Subject $subject)
    {
        try {
            $subjects = Subject::orderBy('name')->paginate(20);
            return view('admin.subject.index', compact('subjects', 'subject'));
        } catch (\Exception $exception) {
            $exception->getMessage();
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        try {
            Subject::create([
                'name' => $request->name
            ]);
            return redirect(route('subjects.index'))->with('success', 'Успешно!');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function update(Request $request, Subject $subject)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        try {
            $subject->name = $request->name;
            $subject->save();
            return redirect(route('subjects.index'))->with('success', 'Успешно!');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function destroy(Subject $subject)
    {
        try {
            $subject->delete();
            return redirect(route('subjects.index'))->with('success', 'Успешно!');
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
