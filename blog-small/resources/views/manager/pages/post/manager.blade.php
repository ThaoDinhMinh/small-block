@extends('layouts.main')

@section('head.title')
    Post manager
@stop
@section('body.content')

    <div class="container">
        <h4 class="mt-4 mb-4">Quản lý bài POST</h4>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Category</th>
                    <th scope="col">Create time</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td scope="row">{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td>{{ $post->cateNews->category_name }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="/quanly/{{ $post->id }}/edit">EDIT</a>
                            <a class="btn btn-sm btn-secondary mt-2" href="/quanly/{{ $post->id }}/post">DEL</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

@stop
