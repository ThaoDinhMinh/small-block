@extends('layouts.main')

@section('head.title')
    Edit Form
@stop

@section('body.content')
    <div class="container">
        <h4 class="mt-3 mb-3">Uplade bài post</h4>

        <div class="col-6">
            <form action="/quanly/{{ $post->id }}/edit" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" value="{{ $post->title }}">

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $post->content }}</textarea>
                </div>

                <select class="form-select" name="category" id="">
                    <option value="{{ $post->id_categoris }}">{{ $post->cateNews->category_name }}</option>
                    @foreach ($categoris as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>

            </form>
            <a class="btn btn-info btn-sm mt-2 mb-2 text-light" href="/quanly/post">Trở về</a>
        </div>
    </div>
@endsection
