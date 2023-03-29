@extends('layouts.main')

@section('head.title')
    Chỉnh sửa category
@endsection

@section('body.content')
    <style>
        svg {
            width: 20px;
            height: 20px;
        }

        .flex.flex-1 {
            display: none
        }
    </style>
    <div class="container">
        {{ print_r(Session::get('ceck_item')) }}
        <h4 class="mt-4 mb-4">Quản lý category</h4>
        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categoris as $category)
                    <tr>
                        <td>{{ $category->category_name }}</td>
                        <td>{{ $category->status }}</td>
                        <td>
                            <a class="btn btn-sm btn-info" href="/quanly/{{ $category->id }}/editManager">EDIT</a>
                            <a class="btn btn-sm btn-secondary" href="/quanly/{{ $category->id }}">DEL</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col-6 offset-3 text-start">
                {!! $categoris->links() !!}
            </div>

        </div>

    </div>
@endsection
