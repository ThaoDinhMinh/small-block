@extends('layouts.main')

@section('head.title')
    Edit Form
@stop

@section('body.content')
    <div class="container">
        <h4 class="mt-3 mb-3">Uplade bài post</h4>
        <div class="col-6">
            <form action="/quanly/{{ $category->id }}/editManager" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Thể loại</label>
                    <input name="category_name" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $category->category_name }}">

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Status 0 = Fales | 1 = True</label>
                    <input name="status" type="text" value="{{ $category->status }}" class="form-control"
                        id="exampleFormControlTextarea1">
                </div>

                <div class="text-end">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>

            </form>
            <a class="btn btn-info btn-sm mt-2 mb-2 text-light" href="/quanly/category/manager">Trở về</a>
        </div>
    </div>
@endsection
