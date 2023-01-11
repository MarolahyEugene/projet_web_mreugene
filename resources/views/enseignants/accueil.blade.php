@extends('enseignants.layout')

@section('titre','Accueil')

@section('contenu-page')

<div class="main-content home">
    <div class="content">
        <div class="flex-page">
            <div class="content-page mt-0">
                <div class="page-left accueil">
                    <header class="head-accueil mb-4">
                        <span class="fa fa-info"></span>
                        <span>
                            <strong>Bienvenue sur Toile ! </strong> Vous n'avez pas de cours, donc cette page ne sera pas très excitante pour l'instant. Une fois que vous avez créé ou inscrit des cours, vous commencerez à voir les conversations de toutes vos classes.
                        </span>
                    </header>
                    <div class="content-home">
                        <h2>Tableau de bord</h2>
                        <span>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg><small>Option de tableau de bord</small>
                        </span>
                    </div>
                    <div class="dashbord my-4">
                        <div class="card etudiant">
                            <!-- <div class="card-header"><span>Cours</span></div> -->
                            <div class="card-body">
                                <strong>132</strong><br>
                                <span>Etudiant Inscrit</span>
                            </div>
                            <div class="card-footer etudiant"><span>Plus d'information <a href="#" class="px-2 fa fa-arrow-circle-right"></a></span></div>
                        </div>
                        <div class="card cour">
                            <!-- <div class="card-header"><span>Cours</span></div> -->
                            <div class="card-body">
                                <strong>13</strong><br>
                                <span>Cours</span>
                            </div>
                            <div class="card-footer cour"><span>Plus d'information <a href="#" class="px-2 fa fa-arrow-circle-right"></a></span></div>
                        </div>
                        <div class="card examen">
                            <!-- <div class="card-header"><span>Cours</span></div> -->
                            <div class="card-body">
                                <strong>132</strong><br>
                                <span>Résultat des examens</span>
                            </div>
                            <div class="card-footer examen">
                                <span>Plus d'information
                                    <a href="#" class="px-2 fa fa-arrow-circle-right"></a>
                                </span>
                            </div>
                        </div>
                        <div class="card card-notif">
                            <!-- <div class="card-header"><span>Cours</span></div> -->
                            <div class="card-body">
                                <strong>12</strong><br>
                                <span>Messages</span>
                            </div>
                            <div class="card-footer card-notif">
                                <span>Plus d'information
                                    <a href="#" class="px-2 fa fa-arrow-circle-right"></a>
                                </span>
                            </div>
                        </div>
                        <div class="card suggestion">
                            <!-- <div class="card-header"><span>Cours</span></div> -->
                            <div class="card-body">
                                <strong>153</strong><br>
                                <span>Suggestion des utilisateurs</span>
                            </div>
                            <div class="card-footer suggestion">
                                <span>Plus d'information
                                    <a href="#" class="px-2 fa fa-arrow-circle-right"></a>
                                </span>
                            </div>
                        </div>
                        <div class="card demande">
                            <!-- <div class="card-header"><span>Cours</span></div> -->
                            <div class="card-body">
                                <strong>132</strong><br>
                                <span>Demande d'inscription</span>
                            </div>
                            <div class="card-footer demande"><span>Plus d'information <a href="#" class="px-2 fa fa-arrow-circle-right"></a></span></div>
                        </div>
                    </div>
                </div>
                <div class="page-right accueil mx-2">
                    <h3>Faire</h3>
                    <div class="recente-list">
                        <span>Rien pour l'instant</span>
                    </div>
                    <h3>Commentaires récents</h3>
                    <div class="recente-list">
                        <span>Rien pour l'instant</span>
                    </div>
                    <a href="#" id="right-a" class="btn btn-outline-default mt-3">Afficher les notes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection