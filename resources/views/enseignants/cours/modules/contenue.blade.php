@extends('enseignants.cours.modules.layout')

@section('title','Contenu module')

@section('content-module')

<div class="content-cours">
    <div class="module">
        <div class="titre-module">
            <h2 class="parti-module">Module 1 : Partie 1 - </h2>
            <h2 class="titre-modul"> Vocabulaire et Introduction</h2>
        </div>
        <div class="sous-titre-module">
            <h3>Bienvenue dans la première partie du module 1 ! </h3>
        </div>
        <div class="img-module">
            <img src="{{ asset('img/18671.jpg') }}" class="mt-4 mb-4" alt="">
            <div class="link-img-module">
                <span class="tittre-img">Titre </span>
                <span class="">via</span>
                <span class=""><a href="#"> Unsplash </a></span>
                <span class="">par</span>
                <span class=""><a href="#"> Thought Catalog </a></span>
                <span class="">est sous la</span>
                <span class=""><a href="#"> licence Unsplash</a></span>
            </div>
        </div>
        <div class="module-content">
            <p class="introduction-module my-2">Dans la première partie, vous ferez cinq choses. Cela vous prendra 1 heure. </p>
            <ul>
                <li class="my-2">1 : Regardez la vidéo <a href="#"> Introduction to English for Tourism Professionals </a>(10 minutes)</li>
                <li class="my-2">2 : Post two or more messages in the OPTIONAL <a href="#"> Discussion: Self-Introduction and Goals </a></li>
                <li class="my-2">3 : Watch the video <a href="#"> Useful Vocabulary for the Tourism Profession </a>(10 minutes)</li>
                <li class="my-2">4 : Take the <a href="#">Check for Understanding Quiz 1.1 </a> (30 minutes)</li>
            </ul>
        </div>
        <div class="bouton-module my-3">
            <a href="#" class="customer-champ prev">Précèdent </a>
            <a href="#" class="customer-champ next">Suivant</a>
        </div>
    </div>
</div>

@endsection