<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('welcome', compact("news"));
    }
    public function selecter($id)
    {
        $newst = News::find($id);
        return view("new", compact("newst"));
    }
}
