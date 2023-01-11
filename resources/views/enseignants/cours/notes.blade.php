@extends('enseignants.cours.layout')

@section('title','Notes')

@section('content-cours')

<!-- <div class="notes my-3"> -->
<div class="page-left mb-3">
    <!-- <div class="notes"> -->
    <div class="head-notes">
        <h4>Notes des étudiants</h4>
        <a href="javascript:window.print()" class="customer-champ px-4">Imprimer</a>
    </div>
    <div class="block-flex notes">
        <div class="left mx-1">
            <label for="filtre">Titre cours</label>
            <select name="filtre" class="customer-champ w-100 my-2 py-1" aria-describedby="option-filtre">
                <option value="default-value">Cours de Mathématiques</option>
                <option value="default-value">Cours de Français</option>
                <option value="default-value">Cours d'Anglais</option>
                <option value="default-value">Cours Informatiques</option>
            </select>
        </div>
        <div class="right mx-1">
            <label for="filtre">Trié par </label>
            <select name="filtre" class="customer-champ w-100 my-2 py-1" aria-describedby="option-filtre">
                <option value="default-value">Date</option>
                <option value="default-value">Module</option>
                <option value="default-value">Notes</option>
            </select>
        </div>
    </div>
    <div class="content-notes">
        <table class="table table-responsive table-hover my-4">
            <thead>
                <tr>
                    <th class="data-table">Nom et Prénom</th>
                    <th>Note</th>
                    <th>Crédit</th>
                    <th>Module</th>
                    <th>Statut</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody class="table-note">
                <tr>
                    <td>
                        <a href="{{ route('detailsModule') }}">
                            <span class="note-name">MAROLAHY Eugène</span>
                        </a>
                    </td>
                    <td class="note-value">17.5</td>
                    <td class="note-credit">3</td>
                    <td class="note-module">Français</td>
                    <td class="note-statut">Très bien</td>
                    <td class="note-date">15 juin 2021</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('detailsModule') }}">
                            <span class="note-name">ROUDAN Annie Pulcerie</span>
                        </a>
                    </td>
                    <td class="note-value">14.25</td>
                    <td class="note-credit">5</td>
                    <td class="note-module">Informatiques</td>
                    <td class="note-statut">Bien</td>
                    <td class="note-date">15 juin 2021</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('detailsModule') }}">
                            <span class="note-name">SOALININA Elisabeth</span>
                        </a>
                    </td>
                    <td class="note-value">15.5</td>
                    <td class="note-credit">4</td>
                    <td class="note-module">Comptabilité</td>
                    <td class="note-statut">Bien</td>
                    <td class="note-date">15 juin 2021</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('detailsModule') }}">
                            <span class="note-name">RICHARD Georges</span>
                        </a>
                    </td>
                    <td class="note-value">18.75</td>
                    <td class="note-credit">2</td>
                    <td class="note-module">Anglais</td>
                    <td class="note-statut">Très bien</td>
                    <td class="note-date">15 juin 2021</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('detailsModule') }}">
                            <span class="note-name">GERALD Barivelo</span>
                        </a>
                    </td>
                    <td class="note-value">16.75</td>
                    <td class="note-credit">2</td>
                    <td class="note-module">Histoire</td>
                    <td class="note-statut">Très bien</td>
                    <td class="note-date">15 juin 2021</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('detailsModule') }}">
                            <span class="note-name">HAVOJANAHARY Dolin</span>
                        </a>
                    </td>
                    <td class="note-value">15.5</td>
                    <td class="note-credit">3</td>
                    <td class="note-module">UML</td>
                    <td class="note-statut">Bien</td>
                    <td class="note-date">15 juin 2021</td>
                </tr>
                <tr>
                    <td>
                        <a href="{{ route('detailsModule') }}">
                            <span class="note-name">LUCIEN Georges</span>
                        </a>
                    </td>
                    <td class="note-value">17.5</td>
                    <td class="note-credit">2</td>
                    <td class="note-module">Economie</td>
                    <td class="note-statut">Très bien</td>
                    <td class="note-date">15 juin 2021</td>
                </tr>

                <tr>
                    <td>
                        <a href="{{ route('detailsModule') }}">
                            <span class="note-name">MAROLAHY Eugène</span>
                        </a>
                    </td>
                    <td class="note-value">17.5</td>
                    <td class="note-credit">3</td>
                    <td class="note-module">Français</td>
                    <td class="note-statut">Très bien</td>
                    <td class="note-date">15 juin 2021</td>
                </tr>

                <tr>
                    <td>
                        <span class=""><strong>Missions</strong></span></a>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="notes-score"><strong>N/A</strong></td>
                    <td class="notes-score">0.00 <br>/0.00</td>
                </tr>
                <tr>
                    <td>
                        <span class=""><strong>Quiz</strong> </span>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="notes-score"><strong>93.64%</strong></td>
                    <td class="notes-score">51.50 <br>/55.00</td>
                </tr>
                <tr>
                    <td>
                        <span class=""><strong>Cascade de nouvelles connaissances</strong></span></a>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="notes-score"><strong>N/A</strong></td>
                    <td class="notes-score">0.00 <br>/0.00</td>
                </tr>
                <tr>
                    <td>
                        <span class=""><strong>Total</strong></span>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="notes-score"><strong>93.64%</strong></td>
                    <td class="notes-score"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- </div> -->
</div>
<div class="page-right mb-4">
    <!-- <div class="resume-notes"> -->
    <span>Total : 93.64%</span>
    <span>
        <a href="#" class="customer-champ details-notes">Afficher tous les détails</a>
    </span>
    <span><strong>Les devoirs sont pondérés par groupe :</strong></span>
    <span class="tab">
        <table class="table table-responsive my-2">
            <thead>
                <tr>
                    <th class="data-table">Groupe</th>
                    <th class="data-table">Lester</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Missions</strong></td>
                    <td><span class="">0% </span></td>
                </tr>
                <tr>
                    <td><strong>Quiz</strong></td>
                    <td><span class="">100%</span></td>
                </tr>
                <tr>
                    <td><strong>Cascade de nouvelles connaissances</strong></td>
                    <td><span class="">0%</span></td>
                </tr>
                <tr>
                    <td><span class=""><strong>Total</strong></span></td>
                    <td><span class="">100%</span></td>
                </tr>
            </tbody>
        </table>
    </span>
    <span>
        <div class="checkbox-flex">
            <input type="checkbox" class="left my-2">
            <p class="right-custom mx-2 my-1">Calcul basé uniquement sur les devoirs notés</p>
        </div>
    </span>
    <span>
        <p>
            Vous pouvez afficher vos notes en fonction des scores de simulation afin de savoir comment les notes seront affectées par les devoirs à venir ou re-soumis. Vous pouvez tester les notes d'un devoir qui comprend déjà une note ou d'un devoir qui n'a pas encore été noté.
        </p>
    </span>
    <!-- </div> -->
</div>
<!-- </div> -->

@endsection