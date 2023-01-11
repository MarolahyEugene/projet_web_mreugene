@extends('enseignants.layout')

@section('titre','Files')

@section('contenu-page')

<div class="main-content discussions">
    <div class="content">
        <header class=" flex flex-column justify-content-between">
            <div class="row head-message">
                <div class="col-sm-6 col-md-6 col-lg-6 file-g">
                    <div class="search-files">
                        <form action="#" method="post">
                            <div class="message-header input-group align-items-center justify-content-center">
                                <input id="message-cherche" name="cherche" type="txt" class="form-control" required="required">
                                <label class="input-group-text fa fa-search" id="cherche" </label>
                            </div>
                        </form>
                        <span><i>0 items selected</i></span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 files-option">
                    <a href="#" class="fa fa-plus btn btn-outline-primary"> Dossier</a>
                    <a href="#" class="fa fa-upload btn btn-outline-info"> Upload</a>

                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 discusion-g pt-2">
                <h4>Liste de dossier</h4>
                <div class="list-discussions align-items-center justify-content-between">
                    <ul>
                        <li class="liste-folder" data-bs-toggle="collapse" data-bs-target="#folder">
                            <span class="fa fa-folder"></span>
                            <span class="contenu-event px-1">Categorie Cours</span>
                        </li>
                        <?php foreach ($agenda->showAgenda() as $event) : ?>
                            <li id="folder" class=" collapse event-list-content">
                                <div>
                                    <a href="#" class="lien-folder">
                                        <span class="couleur fa fa-folder-o px-1"></span>
                                        <span class="contenu-event"><?= htmlspecialchars($event['title']) ?></span>
                                    </a>
                                </div>
                                <span class="option-event">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                    </svg>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9 col-md-9 col-lg-9 pt-2 px-2 ">
                <h4>Liste des fichiers</h4>
                <table class="table table-responsive table-hover">
                    <thead>
                        <tr>
                            <th class="data-table">Nom</th>
                            <th>Date création</th>
                            <th>Date modifier</th>
                            <th>Modifié par</th>
                            <th>Taille</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="#">
                                    <span class="fa fa-file-pdf-o px-1"></span>
                                    <span class="">Cours de Français en salle</span>
                                </a>
                            </td>
                            <td>12/06/2021</td>
                            <td>15 juin 2021</td>
                            <td>Richard Georges</td>
                            <td> 125 Mo</td>
                            <td><span class="fa fa-star"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <span class="fa fa-file-pdf-o px-1"></span>
                                    <span class="">Cours de Mathématiques en ligne</span>
                                </a>
                            </td>
                            <td>12/06/2021</td>
                            <td>15 juin 2021</td>
                            <td>Richard Georges</td>
                            <td> 125 Mo</td>
                            <td><span class="fa fa-star"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <span class="fa fa-file-pdf-o px-1"></span>
                                    <span class="">Cours de Informatiques </span>
                                </a>
                            </td>
                            <td>12/06/2021</td>
                            <td>15 juin 2021</td>
                            <td>Richard Georges</td>
                            <td> 125 Mo</td>
                            <td><span class="fa fa-star"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <span class="fa fa-file-pdf-o px-1"></span>
                                    <span class="">Cours de Français en salle</span>
                                </a>
                            </td>
                            <td>12/06/2021</td>
                            <td>15 juin 2021</td>
                            <td>Richard Georges</td>
                            <td> 125 Mo</td>
                            <td><span class="fa fa-star"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <span class="fa fa-file-pdf-o px-1"></span>
                                    <span class="">Cours de Mathématiques en ligne</span>
                                </a>
                            </td>
                            <td>12/06/2021</td>
                            <td>15 juin 2021</td>
                            <td>Richard Georges</td>
                            <td> 125 Mo</td>
                            <td><span class="fa fa-star"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">
                                    <span class="fa fa-file-pdf-o px-1"></span>
                                    <span class="">Cours de Informatiques </span>
                                </a>
                            </td>
                            <td>12/06/2021</td>
                            <td>15 juin 2021</td>
                            <td>Richard Georges</td>
                            <td> 125 Mo</td>
                            <td><span class="fa fa-star"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection