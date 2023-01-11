@extends('enseignants.cours.layout')

@section('titre','Cours')

@section('content')

<div class="main-content ">
    <div class="content py-2">
        <h4 class="px-2">Tous les cours</h4>
        <div class="content-cours">
            <div class="list-cours pt-1">
                <div class="cours-notif mb-3 mt-2 px-1">
                    <span>Vous n'êtes inscrit à aucun cours. </span>
                </div>
                <h4>Inscriptions antérieures</h4>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th class="data-table">Cours</th>
                            <th>Surnom</th>
                            <th>Term</th>
                            <th>Inscrit en tant que</th>
                            <th>Publié</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><span class="fa fa-star-o px-1"></span></a>
                                <a href="{{ route('enseignant/cours') }}">
                                    <span class="fa fa-stop px-1"></span>
                                    <span class="">Cours de Français en salle</span>
                                </a>
                            </td>
                            <td></td>
                            <td>15 juin 2021</td>
                            <td>Enseignant</td>
                            <td>
                                <a href="#">
                                    <span class="px-2">Oui</span>
                                    <span class="fa fa-check-circle"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><span class="fa fa-star-o px-1"></span></a>
                                <a href="{{ route('enseignant/cours') }}">
                                    <span class="fa fa-stop px-1"></span>
                                    <span class="">Cours de Mathématiques en ligne</span>
                                </a>
                            </td>
                            <td></td>
                            <td>15 juin 2021</td>
                            <td>Etudiant</td>
                            <td>
                                <a href="#">
                                    <span class="px-2">Oui</span>
                                    <span class="fa fa-check"></span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#"><span class="fa fa-star-o px-1"></span></a>
                                <a href="{{ route('enseignant/cours') }}">
                                    <span class="fa fa-stop px-1"></span>
                                    <span class="">Cours de Informatiques </span>
                                </a>
                            </td>
                            <td></td>
                            <td>15 juin 2021</td>
                            <td>Enseignant</td>
                            <td>
                                <a href="#">
                                    <span class="px-2">Oui</span>
                                    <span class="fa fa-check"></span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection