<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoryExempController extends Controller
{
    public function index()
    {


        $categoris = Category::paginate(4);
        return view("manager.pages.category.cateManager", compact("categoris"));
    }
    public function showEdit($id)
    {
        $category = Category::find($id);
        return view("manager.pages.category.cateEdit", compact("category"));
    }
    public function update($id, Request $request)
    {
        $category = Category::find($id);
        $category->status = $request->status;
        $category->category_name = $request->category_name;
        $category->save();
        return redirect("/quanly/category/manager");
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect("/quanly/category/manager");
    }
}
