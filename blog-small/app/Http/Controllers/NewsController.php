<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $categoris = News::select("categoris")->distinct()->get();
        $news = News::paginate(4);
        return view('news.index', compact("news", "categoris"));
    }
    public function selecter($id)
    {
        $newst = News::find($id);
        return view("news.new", compact("newst"));
    }
    public function create()
    {
        return view('news.create');
    }
    public function store(Request $request)
    {

        $post = new News();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();
        return redirect("/news");
    }
    public function edit($id)
    {
        $newst = News::find($id);
        return view("news.edit", compact("newst"));
    }
    public function editForm($id)
    {
        $postNews = News::findOrFail($id);
        $postNews->title = request('title');
        $postNews->content = request('content');
        $postNews->save();
        return redirect("/news/" . $id);
    }
    public function deletePost($id)
    {
        $deteleItem = News::find($id);
        $deteleItem->delete();
        return redirect("/");
    }
}
