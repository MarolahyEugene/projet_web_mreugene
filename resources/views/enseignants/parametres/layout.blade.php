@extends('enseignants.layout')

@section('titre')

@yield('title')

@endsection

@section('contenu-page')

<div class="main-content ">
    <div class="content">
        <header class=" flex flex-column justify-content-between">
            <div class="row head-message mt-3">
                <h3>Paramètre - @yield('title')</h3>
            </div>
        </header>
        <div class="flex-page">
            <div class="sous-menu mt-3">
                <span><a href="{{ route('enseignant/compte') }}">Compte utilisateurs</a></span>
                <span><a href="{{ route('enseignant/notification') }}">Notification</a></span>
            </div>

            @yield('content-parametre')

        </div>
    </div>
</div>

@endsection