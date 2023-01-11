@extends('enseignants.cours.layout')

@section('title','Annonces')

@section('content-cours')

<div class="content-cours">
    <div class="annonces">
        <div class="titre-annonce mt-4 mb-4">
            <h4>Annonces</h4>
        </div>
        <form action="" class="filtre-annonce my-3" method="post">
            <div class="option-filtre">
                <label for="filtre">Filtre d'annonce</label>
                <select name="filtre" class="customer-champ w-100" aria-describedby="option-filtre">
                    <option value="default-value">Tout</option>
                    <option value="default-value">Non lu</option>
                </select>
            </div>
            <div class="filtre-input">
                <label for="cherche-filtre">Recherche</label>
                <input type="text" placeholder="Recherche des annonces ..." class="customer-champ recherche-annonce">
                <button class="customer-champ mx-1 px-2">Rechercher</button>
            </div>
        </form>
        <div class="content-annonces">
            <h3>Liste des annonces</h3>
            <div class="list-annonces my-3 py-2">
                <div class="photo-annonces"><img src="img/profile 0.jpg" alt=""></div>
                <div class="contenu-list-annonces">
                    <a href="#" class="link-annonces">non lu,Toutes nos félicitations!</a>
                    <div class="contenu-annonces my-2">
                        <div class="left">
                            <span>Toutes les rubriques</span>
                            <span>Bonjour à tous : Bienvenue dans notre dernier module et félicitations pour être ...</span>
                        </div>
                        <div class="right">
                            <span><strong>Posté sur:</strong></span>
                            <span>27 sept. 2021, 07:01</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-annonces my-3 py-2">
                <div class="photo-annonces"><img src="img/profile 0.jpg" alt=""></div>
                <div class="contenu-list-annonces">
                    <a href="#" class="link-annonces">non lu,Toutes nos félicitations!</a>
                    <div class="contenu-annonces my-2">
                        <div class="left">
                            <span>Toutes les rubriques</span>
                            <span>Bonjour à tous : Bienvenue dans notre dernier module et félicitations pour être ...</span>
                        </div>
                        <div class="right">
                            <span><strong>Posté sur:</strong></span>
                            <span>27 sept. 2021, 07:01</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-annonces my-3 py-2">
                <div class="photo-annonces"><img src="img/profile 0.jpg" alt=""></div>
                <div class="contenu-list-annonces">
                    <a href="#" class="link-annonces">non lu,Toutes nos félicitations!</a>
                    <div class="contenu-annonces my-2">
                        <div class="left">
                            <span>Toutes les rubriques</span>
                            <span>Bonjour à tous : Bienvenue dans notre dernier module et félicitations pour être ...</span>
                        </div>
                        <div class="right">
                            <span><strong>Posté sur:</strong></span>
                            <span>27 sept. 2021, 07:01</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="list-annonces my-3 py-2">
                <div class="photo-annonces"><img src="img/profile 0.jpg" alt=""></div>
                <div class="contenu-list-annonces">
                    <a href="#" class="link-annonces">non lu,Toutes nos félicitations!</a>
                    <div class="contenu-annonces my-2">
                        <div class="left">
                            <span>Toutes les rubriques</span>
                            <span>Bonjour à tous : Bienvenue dans notre dernier module et félicitations pour être ...</span>
                        </div>
                        <div class="right">
                            <span><strong>Posté sur:</strong></span>
                            <span>27 sept. 2021, 07:01</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection