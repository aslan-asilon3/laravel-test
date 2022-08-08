<div>
    @extends('adminlte::page')

    @section('title', 'Dashboard')

    @section('styles')
    {{-- @livewireStyles --}}
    @stop

    @section('content_header')
        <h1>Dashboard</h1>
    @stop

    @section('content')
        <p>Halo ! {{ auth()->user()->name }} !</p>
        <p>Anda login sebagai
    @if(auth()->user()->level == '0')
    Admin
    @elseif(auth()->user()->level == '1')
    Admin
    @else
    User
    @endif

        !</p>

        @yield('js')
    @stop

    @section('scripts')
    {{-- @livewireScripts --}}
    @stop


</div>
