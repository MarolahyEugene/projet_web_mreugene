@extends('enseignants.cours.layout')

@section('title','Insignes')

@section('content-cours')

<!-- <div class="content-page"> -->
<div class="page-left">
    <div class="titre-cours">
        <h3>Anglais pour les professionnels du tourisme MOOC été 2021</h3>
    </div>
    <div class="img-cours">
        <img src="{{ asset('img/androit.jpg') }}" alt="">
        <img src="{{ asset('img/androit.jpg') }}" alt="">
        <img src="{{ asset('img/androit.jpg') }}" alt="">
    </div>
</div>
<div class="page-right mt-3">
    <a href="#" class="btn btn-outline-default mt-3">Le flux de cours</a>
    <a href="#" class="btn btn-outline-default mt-3">Le calendrier du cours</a>
    <a href="#" class="btn btn-outline-default mt-3">Les notifications des cours</a>
    <h2>Faire</h2>
    <div class="recente-list">
        <span>Rien pour l'instant</span>
    </div>
</div>
<!-- </div> -->

@endsection