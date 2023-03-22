<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact("news"));
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
        $article = News::findOrFail($id);
        $article->title = request('title');
        $article->content = request('content');
        $article->save();
        return redirect("/news/" . $id);
    }
}
