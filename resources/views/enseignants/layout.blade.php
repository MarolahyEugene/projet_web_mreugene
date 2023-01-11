@extends('include.app')

@section('side-bar')

<div class="sidebar-container">
    <div class="brand">
        <h3><span class="fa fa-tachometer"></span></h3>
    </div>
    <div class="sidebar-menu">
        <ul>
            <li class="list-menu">
                <a href="{{ route('enseignant/accueil') }}" id="accueil" class="fa fa-tachometer px-2 py-2"></a>
            </li>
            <li class="list-menu">
                <a href="#" class="item photo-profile" id="profile"><img src="{{ asset('img/profile 0.jpg') }}" alt=""></a>
                <div class="croix"><span class="fa fa-caret-left"></span></div>
                <span class="lien">
                    <div class="photo-profile">
                        <img src="{{ asset('img/profile 0.jpg')}}" alt="Image error">
                        <h4 class="mt-2">Marolahy Eugène </h4>
                        <a href="{{ route('login') }}" class="btn btn-secondary w-100 h-20 mt-2 mb-2 ml-5 mr-5">Log Out</a>
                    </div>
                    <a href="{{ route('enseignant/message/notification') }}" class="link"><span class="fa fa-bell-o"></span><span class="px-2">Notifications</span></a>
                    <a href="{{ route('enseignant/fichier') }}" class="link"><span class="fa fa-file-o"></span><span class="px-2">Files</span></a>
                    <a href="{{ route('enseignant/compte') }}" class="link"><span class="fa fa-cog"></span><span class="px-2">Settings</span></a>
                    <a href="{{ route('enseignant/portfolio') }}" class="link"><span class="fa fa-suitcase"></span><span class="px-2">Portfolio</span></a>
                    <a href="{{ route('enseignant/annonces-global') }}" class="link"><span class="fa fa-bullhorn"></span><span class="px-2">Global Announcements</span></a>

                </span>
            </li>
            <li class="list-menu">
                <a href="#" class="item"><span class="fa fa-book"></span></a>
                <div class="croix"><span class="fa fa-caret-left"></span></div>
                <span class="lien">
                    <a href="{{ route('enseignant/cours/liste-cours') }}" class="link">All cours</a>
                    <a href="{{ route('exo') }}" class="link">Exercices</a>
                    <a href="{{ route('quizz') }}" class="link" id="link-end">Quizz</a>
                    <p class="mt-3">Welcome to your cours ! To customize the list of cours, click on the "All
                        Cours" link and start the courses to display</p>
                </span>
            </li>
            <li class="list-menu">
                <a href="{{ route('calendar') }}" class="item"><span class="fa fa-calendar"></span></a>
                <div class="croix"><span class="fa fa-caret-left"></span></div>
                <span class="lien">
                    <a href="{{ route('enseignant/calendrier') }}" class="link">Calendrier</a>
                    <a href="{{ route('enseignant/agenda') }}" class="link"><i class="fa fa-calendar-plus-o"></i>Liste des évenements</a>
                </span>
            </li>
            <li class="list-menu">
                <a href="#" class="item"><span class="fa fa-envelope"></span></a>
                <div class="croix"><span class="fa fa-caret-left"></span></div>
                <span class="lien">
                    <a href="{{ route('enseignant/message') }}" class="link">Nouvea message</a>
                    <a href="{{ route('enseignant/message/forum') }}" class="link">Forum</a>
                    <a href="{{ route('enseignant/message/privee') }}" class="link">Discussion</a>
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