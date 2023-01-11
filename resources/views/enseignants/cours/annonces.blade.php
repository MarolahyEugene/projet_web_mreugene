@extends('enseignants.cours.layout')

@section('title','Annonces')

@section('content-cours')

<div class="content">
    <!--  -->
    <label for="filtre" class=" mt-4">Filtre d'annonce</label>
    <header class="head-message py-1">
        <div class="option-g">
            <select name="couleeur" class="py-1 customer-champ form-select" aria-describedby="option-cours">
                <option value="tous">Tout </option>
                <option value="non-lu">Non lu</option>
            </select>
        </div>
        <div class="option-d ">
            <h4 class="mx-2">Recherche </h4>
            <form action="#" method="post">
                <div class="input-group">
                    <input id="message-cherche" name="cherche" type="txt" class="py-1 customer-champ" required="required">
                    <button class="py-2 px-3 customer-champ input-group-text fa fa-list-alt" id="cherche"></button>
                </div>
            </form>
        </div>
    </header>
    <div class="content-annonces">
        <h4 class="my-4">Liste des annonces</h4>
        <div class="annonces block-flex my-3 py-2">
            <div class="block-flex">
                <div class="photo-profile left"><img src="{{ asset('img/profile 0.jpg') }}" alt=""></div>
                <div class="contenu-list-annonces right-custom">
                    <div class="block-flex my-2">
                        <div class="left">
                            <span>
                                <a href="#" class="stat-annonce py-2">non lu,Toutes nos félicitations!</a><br>
                                <div class="my-1">Toutes les rubriques</div>
                            </span>
                            <span><small>Bonjour à tous : Bienvenue dans notre dernier module et félicitations pour être ...</small></span>
                        </div>
                        <div class="right">
                            <span>
                                <a href="#" class="fa fa-close py-2"></a><br>
                                <strong>Posté sur:</strong>
                            </span>
                            <span><small>27 sept. 2021, 07:01</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="annonces block-flex my-3 py-2">
            <div class="block-flex">
                <div class="photo-profile left"><img src="{{ asset('img/profile 0.jpg') }}" alt=""></div>
                <div class="contenu-list-annonces right-custom">
                    <div class="block-flex my-2">
                        <div class="left">
                            <span>
                                <a href="#" class="stat-annonce py-2">non lu,Toutes nos félicitations!</a><br>
                                <div class="my-1">Toutes les rubriques</div>
                            </span>
                            <span><small>Bonjour à tous : Bienvenue dans notre dernier module et félicitations pour être ...</small></span>
                        </div>
                        <div class="right">
                            <span>
                                <a href="#" class="fa fa-close py-2"></a><br>
                                <strong>Posté sur:</strong>
                            </span>
                            <span><small>27 sept. 2021, 07:01</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="annonces block-flex my-3 py-2">
            <div class="block-flex">
                <div class="photo-profile left"><img src="{{ asset('img/profile 0.jpg') }}" alt=""></div>
                <div class="contenu-list-annonces right-custom">
                    <div class="block-flex my-2">
                        <div class="left">
                            <span>
                                <a href="#" class="stat-annonce py-2">non lu,Toutes nos félicitations!</a><br>
                                <div class="my-1">Toutes les rubriques</div>
                            </span>
                            <span><small>Bonjour à tous : Bienvenue dans notre dernier module et félicitations pour être ...</small></span>
                        </div>
                        <div class="right">
                            <span>
                                <a href="#" class="fa fa-close py-2"></a><br>
                                <strong>Posté sur:</strong>
                            </span>
                            <span><small>27 sept. 2021, 07:01</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="annonces block-flex my-3 py-2">
            <div class="block-flex">
                <div class="photo-profile left"><img src="{{ asset('img/profile 0.jpg') }}" alt=""></div>
                <div class="contenu-list-annonces right-custom">
                    <div class="block-flex my-2">
                        <div class="left">
                            <span>
                                <a href="#" class="stat-annonce py-2">non lu,Toutes nos félicitations!</a><br>
                                <div class="my-1">Toutes les rubriques</div>
                            </span>
                            <span><small>Bonjour à tous : Bienvenue dans notre dernier module et félicitations pour être ...</small></span>
                        </div>
                        <div class="right">
                            <span>
                                <a href="#" class="fa fa-close py-2"></a><br>
                                <strong>Posté sur:</strong>
                            </span>
                            <span><small>27 sept. 2021, 07:01</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="annonces block-flex my-3 py-2">
            <div class="block-flex">
                <div class="photo-profile left"><img src="{{ asset('img/profile 0.jpg') }}" alt=""></div>
                <div class="contenu-list-annonces right-custom">
                    <div class="block-flex my-2">
                        <div class="left">
                            <span>
                                <a href="#" class="stat-annonce py-2">non lu,Toutes nos félicitations!</a><br>
                                <div class="my-1">Toutes les rubriques</div>
                            </span>
                            <span><small>Bonjour à tous : Bienvenue dans notre dernier module et félicitations pour être ...</small></span>
                        </div>
                        <div class="right">
                            <span>
                                <a href="#" class="fa fa-close py-2"></a><br>
                                <strong>Posté sur:</strong>
                            </span>
                            <span><small>27 sept. 2021, 07:01</small></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection