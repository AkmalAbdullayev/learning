<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\Language;
use Illuminate\Http\Request;


class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.faq.index', compact('faqs'));
    }

    public function create()
    {
        $language = Language::all();
        return view(
            "admin.faq.create",
            [
                'languages' => $language
            ]
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'language_id' => 'required|integer'
        ]);

        $faqs = new Faq();
        $faqs->title = $request->input('title');
        $faqs->content = $request->input('content');
        $faqs->language_id = $request->input('language_id');
        $faqs->save();

        return redirect("home/faqs");
    }

    public function edit($id)
    {
        $language = Language::all();
        $faq = Faq::findOrFail($id);

        return view(
            "admin.faq.edit",
            [
                'faq' => $faq,
                'languages' => $language
            ]
        );
    }

    public function update($id, Request $request)
    {
        $faq = Faq::findOrFail($id);
        $faq->title = $request->input('title');
        $faq->content = $request->input('content');
        $faq->language_id = $request->input('language_id');
        $faq->save();

        return redirect("home/faqs");
    }

    public function destroy($id)
    {
        Faq::destroy($id);
        return redirect("home/faqs");
    }
}
