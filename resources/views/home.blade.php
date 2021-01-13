@extends('layouts.app')

@section('content')

<nav class="navbar navbar-dark bg-dark">
    <img src="{{ asset('storage/logoZOOFT.svg') }}" width="100" alt="Logo Zooft" title="Logo Zooft">

    <a class="btn btn btn-primary my-2 my-sm-0" href="#"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Cerrar Sesión
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</nav>

<div class="bg-secondary text-while">
    <h1>ERROR de redireccionamiento</h1>
</div>

@endsection