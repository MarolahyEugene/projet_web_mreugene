@extends('include.app')

@section('side-bar')

<div class="sidebar-container">
    <div class="brand">
        <h3><span class="fa fa-tachometer"></span></h3>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li class="list-menu">
                <a href="{{ route('home') }}" id="accueil" class="fa fa-tachometer px-2 py-2"></a>
            </li>
            <li class="list-menu">
                <a href="#" class="item"><span class="fa fa-book"></span></a>
                <div class="croix"><span class="fa fa-caret-left"></span></div>
                <span class="lien">
                    <a href="{{ route('home') }}" class="link">All cours</a>
                    <p class="mt-3">Welcome to your cours ! To customize the list of cours, click on the "All
                        Cours" link and start the courses to display</p>
                </span>
            </li>
            <li class="list-menu">
                <a href="{{ route('calendar') }}" class="item"><span class="fa fa-calendar"></span></a>
                <div class="croix"><span class="fa fa-caret-left"></span></div>
                <span class="lien">
                    <a href="{{ route('login') }}" class="link">Créer un agenda</a>
                    <a href="{{ route('calendar') }}" class="link">Calendrier</a>
                </span>
            </li>
            <li class="list-menu">
                <a href="#" class="item"><span class="fa fa-envelope"></span></a>
                <div class="croix"><span class="fa fa-caret-left"></span></div>
                <span class="lien">
                    <a href="{{ route('login') }}" class="link">Nouvea message</a>
                    <a href="{{ route('login') }}" class="link">Forum</a>
                    <a href="{{ route('login') }}" class="link">Discussion</a>
                </span>
            </li>
            <li class="list-menu">
                <a href="#" class="item"><span class="fa fa-exclamation-circle"></span></a>
                <div class="croix"><span class="fa fa-caret-left"></span></div>
                <span class="lien">
                    <a href="{{ route('help') }}" class="link">Aide</a>
                </span>
            </li>
        </ul>
    </div>
</div>

@endsection

@section('content')

@yield('contenu-page')

@endsection