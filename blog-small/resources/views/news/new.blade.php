@extends("layouts.main")
@section("head.title")
Detail News
@stop
@section("body.content")
    <div class="container">
      <a href="/"><--Trang chủ</a>
        <div class="row pt-4 pb-4">
            <div class="col-3"></div>
            <div class="col-sm-6">
                <h3>{{ $newst->title }}</h3>
                <p>{{ $newst->content }}</p> 
         </div>
         <a href="/news/{{ $newst->id }}/edit">Sửa</a>
         <div class="col-3"></div>
        </div>
@stop
