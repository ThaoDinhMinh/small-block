<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;


class NewsController extends Controller
{
    public function login(Request $request)
    {
        $checkout = $request->validate([
            'email' => 'required | email ',
            'password' => 'required | min:4 | max:12',
        ]);

        if (Auth::attempt($checkout)) {
            $request->session()->regenerate();
            return redirect()->intended('news');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/news');
    }
    public function index()
    {
        $categoris = Category::all();
        $news = News::paginate(4);
        return view('news.index', compact("news", "categoris"));
    }
    public function selecter($id)
    {
        if (Auth::check()) {
            $newst = News::find($id);
            return view("news.new", compact("newst"));
        }
    }
    public function create()
    {
        $categoris = Category::all();
        if (Auth::check()) {

            return view('news.create', compact("categoris"));
        }
    }
    public function store(Request $request)
    {

        if (Auth::check()) {
            $post = new News();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->id_categoris = $request->category;
            $post->save();
            return redirect("/news");
        }
    }
    public function edit($id)
    {
        if (Auth::check()) {
            $newst = News::find($id);
            return view("news.edit", compact("newst"));
        }
    }
    public function editForm($id)
    {
        if (Auth::check()) {
            $postNews = News::findOrFail($id);
            $postNews->title = request('title');
            $postNews->content = request('content');
            $postNews->save();
            return redirect("/news/" . $id);
        }
    }
    public function deletePost($id)
    {
        $deteleItem = News::find($id);
        $deteleItem->delete();
        return redirect("/");
    }
}
