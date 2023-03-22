@extends('layouts.main')

@section("head.title")
  News title
@stop

@section("body.content")

<div class="container">
    @foreach ($news as $new)
    <div class="row pt-4 pb-4">
        <div class="col-3"></div>
        <div class="col-sm-6">
            <h3>{{ $new->title }}</h3>
            <p>{{ $new->content }}</p> 
            <a href="/news/{{ $new->id }}">Đọc thêm</a><br>
     </div>
     <div class="col-3"></div>
    </div>
    @endforeach

</div>

@stop