@extends('layouts.main')

@section("head.title")
Post
@stop
@section("body.content")
<div class="container">
    <a href="/"><--Trang chủ</a>
    <div class="col-4">
        <h4>Sửa bài viết </h4>
        <form action="/news/{{ $newst->id }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input value="{{ $newst->title }}" name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Content</label>
              <input value="{{ $newst->content }}" name="content" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Sủa</button>
          </form>
    </div>
</div>

@stop