<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ManagerAllController extends Controller //abstract
{
    protected $model;

    public  function model()
    {
        return User::query(); // DB::table(""); abstract
    }



    public function index($view, $params = [])
    {
        return view($view, $params);
    }

    public function create($view, $params = [])
    {
        return view($view, $params);
    }
    public function store(Request $request, $view)
    {
        $data = $request->all();
        // foreach ($data as $key => $value) {
        //     $this->model()->{$key} = $value;
        // }
        $this->model()->create($data);

        return redirect($view);
    }
    public function showSelect($id, $view)
    {
        $value = $this->model()->find($id);
        return view($view, compact("value"));
    }
    public function edit()
    {
    }
    public function uplade()
    {
    }
    public function delete()
    {
    }
}
