@extends('enseignants.layout')

@section('titre')

@yield('title')

@endsection

@section('contenu-page')

<div class="main-content ">
    <div class="content">
        <header class="mx-4">
            <div class="head-message mt-3">
                <h4>@yield('title')</h4>
            </div>
        </header>
        <div class="flex-page">
            <div class="sous-menu mt-3">
                <span><a href="{{ route('enseignant/cours/accueil') }}">Accueil</a></span>
                <span><a href="{{ route('enseignant/cours/annonces') }}">Annonces</a></span>
                <span><a href="{{ route('enseignant/cours/module/liste-module') }}">Modules</a></span>
                <span><a href="{{ route('enseignant/cours/note') }}">Notes</a></span>
                <span><a href="{{ route('enseignant/cours/insignes') }}">Insignes</a></span>
            </div>
            <div class="content-page">

                @yield('content-cours')

            </div>
        </div>
    </div>
</div>

@endsection