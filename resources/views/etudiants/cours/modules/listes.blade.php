@extends('enseignants.cours.modules.layout')

@section('title','Liste module')

@section('content-module')

<div class="module">
    <div class="h-module">
        <a href="#" class="customer-champ my-2 mx-1">Reduire tout</a>
    </div>
    <div class="entete-list-module">
        <table class="table table-responsive table-hover my-5">
            <thead>
                <tr>
                    <th class="data-table"><a href="#">Commencer</a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Inscrivez-vous au cours </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-responsive table-hover  my-5">
            <thead>
                <tr>
                    <th class="data-table"><a href="#"><span class="partie-mod">Orientation : </span><span class="titre-partie-mod">Bienvenue sur le réseau d'anglais professionnel en ligne</span></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">À propos de l'orientation MOOC </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Leçon 1 : Le réseau anglais professionnel en ligne </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Leçon 2 : Orientation de l'utilisateur de Canvas </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Leçon 3a : Stratégies de réussite de l'apprentissage en ligne </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Lesson 3b: Avoiding Plagiarism </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Lesson 3c: Discussion Tips for MOOCs </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Lesson 4: Certificates and Badges </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Lesson 5: Support During the MOOC </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Orientation Quiz </span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-responsive table-hover my-5">
            <thead>
                <tr>
                    <th class="data-table"><a href="#"> Learner Support</a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Technical Support </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Content Support Discussion </span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-responsive table-hover my-5">
            <thead>
                <tr>
                    <th class="data-table"><a href="#">Welcome to English for Tourism Professionals Course !</a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Course Overview</span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-responsive table-hover my-5">
            <thead>
                <tr>
                    <th class="data-table"><a href="#"><span class="partie-mod"> Module 1 : </span><span class="titre-partie-mod">Introduction to English for Tourism Professionals</span></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Module 1: Overview </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Module 1: Pre-assessment</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <span class="partie-mod"> Module 1: </span>
                            <span class="titre-partie-mod">Part 1 - Introduction to Tourism and Vocabulary</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="partie-mod">Module 1: </span>
                                <span class="titre-partie-mod"> Part 1 - Vocabulary and Introduction </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="partie-mod"> Part 1 : </span>
                                <span class="titre-partie-mod"> Task 1 - Video "Introduction to English for Tourism Professionals" </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="partie-mod"> Part 1 : </span>
                                <span class="titre-partie-mod"> Task 2 - OPTIONAL Discussion: Self-Introduction and Goals </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="partie-mod">Part 1 : </span>
                                <span class="titre-partie-mod">Task 3 - Useful Vocabulary for the Tourism Profession </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="partie-mod">Part 1 : </span>
                                <span class="titre-partie-mod">Task 4 - Check for Understanding Quiz 1.1 </span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-responsive table-hover my-5">
            <thead>
                <tr>
                    <th class="data-table"><a href="#"><span class="partie-mod">Orientation : </span><span class="titre-partie-mod">Bienvenue sur le réseau d'anglais professionnel en ligne</span></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Inscrivez-vous au cours </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-responsive table-hover my-5">
            <thead>
                <tr>
                    <th class="data-table"><a href="#"><span class="partie-mod">Orientation : </span><span class="titre-partie-mod">Bienvenue sur le réseau d'anglais professionnel en ligne</span></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Inscrivez-vous au cours </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table class="table table-responsive table-hover my-5">
            <thead>
                <tr>
                    <th class="data-table"><a href="#"><span class="partie-mod">Orientation : </span><span class="titre-partie-mod">Bienvenue sur le réseau d'anglais professionnel en ligne</span></a></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Inscrivez-vous au cours </span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="link-mod">
                            <a href="{{ route('detailsModule') }}">
                                <span class="fa fa-stop px-1"></span>
                                <span class="">Sondage de bienvenue</span>
                            </a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="entete-list-module">
        <h3></h3>
    </div>
</div>

@endsection