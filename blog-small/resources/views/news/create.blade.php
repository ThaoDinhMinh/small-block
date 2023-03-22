@extends('layouts.main')

@section("head.title")
Post
@stop
@section("body.content")
<div class="container"> 
    <a href="/"><--Trang chủ</a>
    <div class="col-4">
        <h4>Thêm bài viết </h4>
        <form action="/news/create" method="POST">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Content</label>
              <input name="content" type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>

@stop