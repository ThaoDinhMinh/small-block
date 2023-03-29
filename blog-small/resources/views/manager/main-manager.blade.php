@extends('layouts.main')

@section('head.title')
    Post manager
@stop
@section('body.content')
    @include('manager.head-manager')
    @yield('body.content.chiden')
@stop
