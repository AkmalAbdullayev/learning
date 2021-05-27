<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogType;
use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    public function create()
    {
        $blogtype = BlogType::all();
        $language = Language::all();
        return view(
            "admin.blog.create",
            [
                'blogtypes' => $blogtype,
                'languages' => $language
            ]
        );
    }



    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|file',
            'content' => 'required',
            'publish_date' => 'required|date',
            'blog_type_id' => 'required|integer',
            'language_id' => 'required|integer'
        ]);

        $blogs = new Blog();
        $blogs->title = $request->input('title');

        if ($request->hasFile('image')) {
            $file = $request->image;
            $filename = "blogs/" . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('public')->put($filename, $file);
        }
        $blogs->image = $filename;

        // $blogs->image = $request->file("image")->storeAs("storage", $request->file("image")->getClientOriginalName());

        $blogs->content = $request->input('content');
        $blogs->publish_date = $request->input('publish_date');
        $blogs->blog_type_id = $request->input('blog_type_id');
        $blogs->language_id = $request->input('language_id');
        $blogs->save();

        return redirect("home/blogs");
    }

    public function edit($id)
    {
        $blogtype = BlogType::all();
        $language = Language::all();
        $blog = Blog::findOrFail($id);
        return view(
            "admin.blog.edit",
            [
                'blog' => $blog,
                'blogtypes' => $blogtype,
                'languages' => $language
            ]
        );
    }

    public function update($id, Request $request)
    {
        $blog = Blog::findOrFail($id);

        $blog->title = $request->input('title');

        if ($request->hasFile('image')) {
            $file = $request->image;
            $filename = "blogs/" . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('public')->put($filename, $file);
        }
        $blog->image = $filename;


        $blog->content = $request->input('content');
        $blog->publish_date = $request->input('publish_date');
        $blog->blog_type_id = $request->input('blog_type_id');
        $blog->language_id = $request->input('language_id');
        $blog->save();

        return redirect("home/blogs");
    }

    public function destroy($id)
    {
        Blog::destroy($id);

        return redirect("home/blogs");
    }
}
