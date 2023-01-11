@extends('enseignants.parametres.layout')

@section('title','Paramètre de compte utilisateur')

@section('content-parametre')

<div class="content-page">
    <div class="page-left compte-user">
        <div class="p-profile my-3">
            <div class="photo-profile"><a href="#"><img src="{{ asset('img/profile 0.jpg') }}" alt="image"></a></div>
            <div class="profil-name">
                <span class="mx-1">Profile de</span>
                <span>MAROLAHY</span>
                <span>Eugène</span>
            </div>
        </div>
        <div class="info-profile">
            <span><small>Nom complet</small><small class="mx-1">:</small></span>
            <span>MAROLAHY Eugène
                <small class="mx-1">Ce nom sera utilisé pour la notation.</small>
            </span>
        </div>
        <div class="info-profile">
            <span>
                <small>Nom triable</small><small class="mx-1">:</small></span>
            <span>MAROLAHY Eugène
                <small class="mx-1">Ce nom apparaît dans des listes triées.</small>
            </span>
        </div>
        <div class="info-profile">
            <span><small>Pronoms</small><small class="mx-1">:</small></span>
            <span>Aucun
                <small class="mx-1">Ce pronom apparaîtra après votre nom lorsqu'il est activé </small>
            </span>
        </div>
        <div class="info-profile">
            <span><small>Langue</small><small class="mx-1">:</small></span>
            <span>Système par défaut (anglais (US))
                <small class="mx-1"></small>
            </span>
        </div>
        <div class="info-profile">
            <span><small>Fuseau horaire</small><small class="mx-1">:</small></span>
            <span>Moscou<small class="mx-1"></small></span>
        </div>
        <h3 class="my-4">Services Internet </h3>
        <p>Canvas peut vous faciliter la vie en se liant aux outils Web que vous utilisez déjà. Cliquez sur l'un des services dans "Autres services" pour voir ce que nous voulons dire. </p>
        <div class="flex-checkbox">
            <input type="checkbox" name="check-reglage" class="my-2 mx-2">
            <p>Permettre aux autres membres du cours/groupe de voir quels services j'ai liés à mon profil </p>
        </div>
        <div class="service-reglage">
            <div class="servc">
                <h4>Services enregistrés </h4>
                <div class="list-service">
                    <span>Aucune service enregistré pour l'instant</span>
                </div>
            </div>
            <div class="servc">
                <h4>Autres services </h4>
                <div class="list-service">
                    <p>Cliquez sur n'importe quel service ci-dessous pour vous inscrire : </p>
                    <a href="#" class="customer-champ"><span class="fa fa-skype mx-1"></span><span class="mx-1">Skype</span></a>
                    <a href="#" class="customer-champ"><span class="fa fa-delicious mx-1"></span><span class="mx-1">Délicieuse</span></a>

                </div>
            </div>
        </div>
        <h4 class="my-4">Intégrations approuvées :</h4>
        <p class="px-4">Les applications tierces peuvent demander l'autorisation d'accéder au site Canvas en votre nom. Lorsque vous commencerez à autoriser des applications, vous les verrez listées ici.</p>
        <a href="#" class="customer-champ mx-4 px-4 jeton">Nouveau jeton d'accès</a>
        <h3 class="my-4">Options de fonctionnalités</h3>
        <form action="" class="flex filtre-reglage my-3" method="post">
            <div class="filtre-reg">
                <label for="filtre">Filtre d'annonce</label>
                <select name="filtre" class="customer-champ w-75 my-2" aria-describedby="option-filtre">
                    <option value="default-value">Tout</option>
                    <option value="default-value">Non lu</option>
                </select>
            </div>
            <div class="recherche-reg ">
                <label for="cherche-filtre">Use arrow keys to navigate options.</label>
                <p>
                    <input type="text" placeholder="Recherche des annonces ..." class="customer-champ my-2">
                    <button class="customer-champ px-2"><span class="fa fa-search" style="color:lightslategray"></span></button>
                </p>
            </div>
        </form>
        <h4 class="my-4">User</h4>
        <table class="my-2 table table-hover">
            <thead>
                <tr>
                    <th class="px-1">Featur</th>
                    <th class="px-2">State</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-1">
                        <div class="lien-agenda py-2" data-bs-toggle="collapse" data-bs-target="#notif">
                            <span class="couleur fa fa-angle-right px-1"></span>
                            <span class="contenu-even px-2">Afficher automatiquement les sous-titres</span>
                        </div>
                        <ul>
                            <li id="notif" class=" collapse event-list-content">
                                <small class="px-2">Afficher automatiquement les sous-titres codés, état actuel : désactivé</small>
                            </li>
                        </ul>
                    </td>
                    <td class="px-2 py-1"><a href="#" class="valid-notif"><span class="fa fa-ban"></span></a></td>
                </tr>
                <tr>
                    <td class="px-1 py-1">
                        <div class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#separateur-de-champs">
                            <span class="couleur fa fa-angle-right px-1"></span>
                            <span class="contenu-even px-1">Détection automatique des séparateurs de champs dans les exportations de feuilles de calcul compatibles</span>
                        </div>
                        <ul>
                            <li id="separateur-de-champs" class=" collapse event-list-content">
                                <small class="px-2">Détection automatique des séparateurs de champs dans les exportations de feuilles de calcul compatibles, état actuel : désactivé</small>
                            </li>
                        </ul>
                    </td>
                    <td class="px-2 py-1"><a href="#" class="valid-notif"><span class="fa fa-ban"></span></a></td>
                </tr>
                <tr>
                    <td class="px-1 py-1">
                        <div class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#alert-notification">
                            <span class="couleur fa fa-angle-right px-1"></span>
                            <span class="contenu-even px-1">Désactiver les délais de notification d'alerte</span>
                        </div>
                        <ul>
                            <li id="alert-notification" class=" collapse event-list-content">
                                <small class="px-2">Désactiver les délais de notification d'alerte, état actuel : désactivé</small>
                            </li>
                        </ul>
                    </td>
                    <td class="px-2 py-1"><a href="#" class="valid-notif"><span class="fa fa-ban"></span></a></td>
                </tr>
                <tr>
                    <td class="px-1 py-1">
                        <div class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#contraste">
                            <span class="couleur fa fa-angle-right px-1"></span>
                            <span class="contenu-even px-1">Interface utilisateur à contraste élevé</span>
                        </div>
                        <ul>
                            <li id="contraste" class=" collapse event-list-content">
                                <small class="px-2">Interface utilisateur à contraste élevé, état actuel : désactivé</small>
                            </li>
                        </ul>
                    </td>
                    <td class="px-2 py-1"><a href="#" class="valid-notif"><span class="fa fa-ban"></span></a></td>
                </tr>
                <tr>
                    <td class="px-1 py-1">
                        <div class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#marque-des-octets">
                            <span class="couleur fa fa-angle-right px-1"></span>
                            <span class="contenu-even px-1">Inclure la marque d'ordre des octets dans les exportations de feuilles de calcul compatibles</span>
                        </div>
                        <ul>
                            <li id="marque-des-octets" class=" collapse event-list-content">
                                <small class="px-2">Inclure la marque d'ordre des octets dans les exportations de feuilles de calcul compatibles, état actuel : désactivé </small>
                            </li>
                        </ul>
                    </td>
                    <td class="px-2 py-1"><a href="#" class="valid-notif"><span class="fa fa-ban"></span></a></td>
                </tr>
                <tr>
                    <td class="px-1 py-1">
                        <div class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#lecteur-microsoft">
                            <span class="couleur fa fa-angle-right px-1"></span>
                            <span class="contenu-even px-1">Lecteur immersif Microsoft </span>
                        </div>
                        <ul>
                            <li id="lecteur-microsoft" class=" collapse event-list-content">
                                <small class="px-2">Microsoft Immersive Reader, état actuel : désactivé</small>
                            </li>
                        </ul>
                    </td>
                    <td class="px-2 py-1"><a href="#" class="valid-notif"><span class="fa fa-ban"></span></a></td>
                </tr>
                <tr>
                    <td class="px-1 py-1">
                        <div class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#option-ouverture-emelent">
                            <span class="couleur fa fa-angle-right px-1"></span>
                            <span class="contenu-even px-1">Ouvrir les éléments à faire dans un nouvel onglet </span>
                        </div>
                        <ul>
                            <li id="option-ouverture-emelent" class=" collapse event-list-content">
                                <small class="px-2">Ouvrir les éléments de tâche dans un nouvel onglet, état actuel : Activé </small>
                            </li>
                        </ul>
                    </td>
                    <td class="px-2 py-1"><a href="#" class="valid-notif"><span class="fa fa-check-square"></span></a></td>
                </tr>
                <tr>
                    <td class="px-1 py-1">
                        <div class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#option-liens">
                            <span class="couleur fa fa-angle-right px-1"></span>
                            <span class="contenu-even px-1">Souligner les liens</span>
                        </div>
                        <ul>
                            <li id="option-liens" class=" collapse event-list-content">
                                <small class="px-2">Souligner les liens, état actuel : désactivé</small>
                            </li>
                        </ul>
                    </td>
                    <td class="px-2 py-1"><a href="#" class="valid-notif"><span class="fa fa-ban"></span></a></td>
                </tr>
                <tr>
                    <td class="px-1 py-1">
                        <div class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#option-separateur">
                            <span class="couleur fa fa-angle-right px-1"></span>
                            <span class="contenu-even px-1">Utilisez des points-virgules pour séparer les champs dans les exportations de feuilles de calcul compatibles</span>
                        </div>
                        <ul>
                            <li id="option-separateur" class=" collapse event-list-content">
                                <small class="px-2">Utiliser des points-virgules pour séparer les champs dans les exportations de feuilles de calcul compatibles, état actuel : Activé</small>
                            </li>
                        </ul>
                    </td>
                    <td class="px-2 py-1"><a href="#" class="valid-notif"><span class="fa fa-check-square"></span></a></td>
                </tr>

            </tbody>
        </table>
    </div>
    <div class="page-right compte-user">
        <span>Façons de contater</span>
        <span>Adresses mail </span>
        <span><small>eugenemarolahy@gmail.com</small></span>
        <span class="">
            <ul>
                <li>
                    <a href="#"><i class="fa fa-envelope px-2"></i> Adresse e-mail</a>
                </li>
            </ul>
        </span>
        <div class="bouton-folio my-4 modal-trigger" data-modal='parametre-user'>
            <a href="#" class="customer-champ px-2 py-1"><i class="fa fa-edit px-2"></i>Modifier les paramètres</a>
        </div>
        <div class="bouton-folio my-4 modal-trigger" data-modal='parametre-user'>
            <a href="#" class="customer-champ px-2 py-1"><i class="fa fa-download px-2"></i> Télécharger les soumissions</a>
        </div>
    </div>
</div>

<div>
    <!--====  Debut de modal pour La mis à jours de profile ====== -->

    <form class="auth-form login-form" method="POST">
        <div id='parametre-user' class="modal-wrapper">
            <div class="overlay close-modal"></div>
            <div class="modal parametre-user modal-centered" role="dialog">
                <div class="modal-content">
                    <div class="card card-modal">
                        <div class="card-header">
                            <div class="">
                                <span class="titre-modal">Mis à jours de paramètres</span>
                                <span class='close-modal cursor-pointer'><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12 titre-cours mb-2">
                                    <div class="email mb-3 form-group">
                                        <label class="" for="signin-email">Nom complet</label>
                                        <input id="nom" name="titre" type="text" class="form-control my-1" placeholder="Ce nom sera utilisé pour la notation." required="required">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 titre-cours mb-2">
                                    <div class="email mb-3 form-group">
                                        <label class="" for="signin-email">Nom Triable</label>
                                        <input id="nom" name="titre" type="text" class="form-control my-1" placeholder="Les gens verront ce nom dans le discussion." required="required">
                                    </div>
                                </div>
                                <div class="modal-theme mb-2 py-2">
                                    <div class="input-group ">
                                        <span class="input-group-text" id="pronom">Pronom</span>
                                        <select name="couleur" class="form-select" aria-describedby="sexe" edite="true">
                                            <option value="">Aucune</option>
                                            <option value="anglais">Eugene</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-theme mb-2 py-2">
                                    <div class="input-group ">
                                        <span class="input-group-text" id="langue">Langue</span>
                                        <select name="couleur" class="form-select" aria-describedby="sexe">
                                            <option value="français">Français (Fr)</option>
                                            <option value="anglais">Anglais (US)</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-theme mb-2 py-2">
                                    <div class="input-group ">
                                        <span class="input-group-text" id="fuseau-horaire">Fuseau horaire</span>
                                        <select name="couleur" class="form-select" aria-describedby="sexe">
                                            <option value="anglais">Moscou</option>
                                            <option value="français">Naerobi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="mt-1 modale-footer">
                                <span class="close-modal cursor-pointer btn btn-secondary" data-dismiss="modal">Annuler</span>
                                <button class='btn btn-success'>Mettre à jours</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!--====  Fin de modal pour La mis à jours de profile ====== -->

</div>
@endsection