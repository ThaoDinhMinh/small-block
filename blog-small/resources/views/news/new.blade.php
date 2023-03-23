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
                <div class="actione d-flex">
                  <a class="btn btn-sm btn-info" href="/news/{{ $newst->id }}/edit">Sửa</a>
                  <form action="/news/{{ $newst->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="mx-3 btn btn-sm btn-secondary">Xóa</button>
                </form>
                 </div>
         </div>


         <div class="col-3"></div>
        </div>
@stop
