@extends('enseignants.portfolio.layout')

@section('title','Portefolio - Mes Portfolio')

@section('content-portefeuille')

<div class="page">
    <div class="mes-folio">
        <div class="titre-portefolio my-3">
            <h3>Mes Portefeuilles</h3>
        </div>
        <div class="list-portfolio">
            <h5><a href="#">Mon Porte feuille</a></h5>
            <ul>
                <li> 1 page mise à jour le 24 juillet à 22h12 </li>
            </ul>
        </div>
    </div>
    <div class="add-folio my-3">
        <a href="#" class="btn btn-outline-default my-2">
            <span class="fa fa-plus"></span><span class="mx-2"> Créer un portfolio</span>
        </a>
    </div>
</div>

@endsection