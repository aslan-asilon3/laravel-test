@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    {{-- <p>You are logged as Admin!</p> --}}

    @yield('js')
@stop
