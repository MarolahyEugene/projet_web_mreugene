@extends('public.layout')

@section('titre','Accueil')

@section('contenu-page')

<div class="main-content home">
    <header class="head-accueil mb-4">
        <span class="fa fa-info"></span>
        <span>
            <strong>Bienvenue sur Toile ! </strong> Vous n'avez pas de cours, donc cette page ne sera pas très excitante pour l'instant. Une fois que vous avez créé ou inscrit des cours, vous commencerez à voir les conversations de toutes vos classes.
        </span>
    </header>
    <div class="recherches">
        <span class="mx-2">Recherche de cours </span>
        <select name="filtreCour" class="customer-champ py-2">
            <option value="all">All</option>
            <option value="scientique">Scientifiques</option>
            <option value="informatique">Informatiques</option>
            <option value="medecine">Medecines</option>
        </select>
        <form action="" method="post" id="finds">
            <input type="text" name="cours" class="customer-champ py-1 mx-1">
            <button class="customer-champ px-1">Rechercher</button>
        </form>
    </div>
    <div class="content">
        <h2 class="my-2">Liste des cours</h2>
        <div class="content-home">
            <div class="card">
                <div class="card-body">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>
                </div>
                <div class="card-footer">
                    <h4>Cours de Français</h4>
                    <span>Taille : 125 ko</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>
                </div>
                <div class="card-footer">
                    <h4>Cours de Français</h4>
                    <span>Taille : 125 ko</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>
                </div>
                <div class="card-footer">
                    <h4>Cours de Français</h4>
                    <span>Taille : 125 ko</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>
                </div>
                <div class="card-footer">
                    <h4>Cours de Français</h4>
                    <span>Taille : 125 ko</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>
                </div>
                <div class="card-footer">
                    <h4>Cours de Français</h4>
                    <span>Taille : 125 ko</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>
                </div>
                <div class="card-footer">
                    <h4>Cours de Français</h4>
                    <span>Taille : 125 ko</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>
                </div>
                <div class="card-footer">
                    <h4>Cours de Français</h4>
                    <span>Taille : 125 ko</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>
                </div>
                <div class="card-footer">
                    <h4>Cours de Français</h4>
                    <span>Taille : 125 ko</span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <span>
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                        </svg>
                    </span>
                </div>
                <div class="card-footer">
                    <h4>Cours de Français</h4>
                    <span>Taille : 125 ko</span>
                </div>
            </div>
        </div>
        <div class="pagiation my-3">
            <a href="#" class="fa fa-chevron-left customer-champ py-2"><span class="px-2 py-2 mx-2">1</span> </a>
            <a href="#" class=" customer-champ  mx-2"><span class="px-2">2</span> </a>
            <a href="#" class=" customer-champ">3<span class="mx-2 px-1 fa fa-chevron-right"></span></a>
        </div>
    </div>
</div>

@endsection