<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($category, Request $request)
    {
        $categoris = News::select("categoris")->distinct()->get();
        if ($request->has("sort") && !empty($request->get("sort"))) {
            $news = News::where("categoris", $category)->orderBy("created_at", $request->sort)->paginate(4);
        } else {
            $news = News::where("categoris", $category)->paginate(4);
        }
        return view("news.category", compact("news", "categoris", "request"));
    }
}
