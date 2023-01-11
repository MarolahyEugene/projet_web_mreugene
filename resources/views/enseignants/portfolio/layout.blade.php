@extends('enseignants.layout')

@section('titre')

@yield('title')

@endsection

<!-- @section('titre','Portefolio') -->

@section('contenu-page')

<div class="main-content ">
    <div class="content">
        <header class=" flex flex-column justify-content-between">
            <div class="row head-message mt-3">
                <h3>@yield('title')</h3>
            </div>
        </header>
        <div class="flex-page">
            <div class="sous-menu mt-3">
                <span><a href="{{ route('enseignant/portfolio') }}">Accueil</a></span>
                <span><a href="{{ route('enseignant/portfolio-listes') }}">Mes PortFolios</a></span>
                <!-- <span><a href="{{ route('enseignant/compte') }}">Reglage</a></span>
                <span><a href="{{ route('enseignant/cours/annonces') }}">Annoces mondiales</a></span> -->
            </div>
            <div class="content-page">

                @yield('content-portefeuille')

            </div>
        </div>
    </div>
</div>

@endsection