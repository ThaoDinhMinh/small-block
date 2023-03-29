@extends('layouts.main')

@section('head.title')
    News title
@stop
<style>
    svg {
        width: 20px;
        height: 20px;
    }

    .flex.flex-1 {
        display: none
    }
</style>

@section('body.content')

    <div class="container">
        <div class="row pt-4 pb-4">

            <div class="col-6 offset-3">
                <h6 class="mt-3 mb-3">Chủ đề</h6>
                @foreach ($categoris as $category)
                    @if ($category->status == 1)
                        <a class="btn btn-sm btn-primary"
                            href="/news/category/{{ $category->id }}">{{ $category->category_name }}</a>
                    @endif
                @endforeach
            </div>
        </div>

        @foreach ($news as $new)
            <div class="row pt-4 pb-4">
                <div class="col-3"></div>
                <div class="col-sm-6">
                    <h3>{{ $new->title }}</h3>
                    <p>{{ $new->content }}</p>
                    <p>Chủ đề : {{ $new->cateNews->category_name }}</p>
                    <p>Ngày đăng : {{ $new->created_at }}</p>
                    <a href="/news/{{ $new->id }}">Đọc thêm</a><br>
                </div>
                <div class="col-3"></div>
            </div>
        @endforeach
        <div class="row">
            <div class="col-6 offset-3 text-start">
                {!! $news->links() !!}
            </div>
        </div>


    </div>

@stop
