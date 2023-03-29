<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = News::all();
        return view("manager.pages.post.manager", compact("posts"));
    }
    public function delete($id)
    {
        $post = News::findOrFail($id);
        $post->delete();
        return redirect("/quanly/post");
    }
    public function showEdit($id)
    {
        $categoris = Category::all();
        $post = News::find($id);
        return view("manager.pages.post.editForm", compact("post", "categoris"));
    }
    public function uplate(Request $request, $id)
    {
        $newPost = News::find($id);
        $newPost->title = $request->title;
        $newPost->content = $request->content;
        $newPost->id_categoris = $request->category;
        $newPost->save();
        return redirect("/quanly/" . $id . "/edit");
    }
}
