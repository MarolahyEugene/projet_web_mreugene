@extends('include.app')

@section('titre')

@yield('title')

@endsection

@section('content')

<div class="main-content ">
    <div class="content">
        <header class=" flex flex-column justify-content-between">
            <div class="row head-message mt-3">
                <h3>@yield('title')</h3>
            </div>
        </header>
        <div class="home-cours">
            <div class="menu-cours mt-3">
                <span><a href="{{ route('homeCours') }}">Accueil</a></span>
                <span><a href="{{ route('annonceCours') }}">Annonces</a></span>
                <span><a href="{{ route('modules') }}">Modules</a></span>
                <span><a href="{{ route('notes') }}">Notes</a></span>
                <span><a href="{{ route('insignesCours') }}">Insignes</a></span>
            </div>
            <div class="content-cours">

                @yield('content-cours')

            </div>
        </div>
    </div>
</div>

@endsection