@extends('enseignants.cours.layout')

@section('title','Accueil du Cours')

@section('content-cours')

<div class="content-cours">
    <div class="cours">
        <div class="description-cours">
            <h3>Anglais pour les professionnels du tourisme MOOC été 2021</h3>
        </div>
        <div class="img-cours mt-5">
            <img src="img/1580009.jpg" alt="">
            <img src="img/login.jpg" alt="">
            <img src="img/18671.jpg" alt="">
        </div>
        <div class="titre-cours mt-5 mb-5">
            <h3>Anglais pour le Tourisme Professionnel</h3>
        </div>
        <div>
            <p>Ce travail est un dérivé de de via est distribué sous la ; de ; par via est distribué sous la Ce dérivé est sous licence par FHI 360 pour une utilisation dans le réseau anglais professionnel en ligne, parrainé par le Département d'État américain et administré par FHI 360.</p>
        </div>
        <div class="lien-inscrit">
            <h2><a href="#">Cliquez ici pour vous inscrire au cours.</a></h2>
        </div>
        <div class="salutation-cours">
            <h3>Bienvenue au MOOC d'anglais pour les professionnels du tourisme !</h3>
            <p>Ce cours est dispensé par l'Université de l'Ohio, dans le cadre du programme OPEN (Online Professional English Network). Ce programme est parrainé par le Département d'État américain avec un financement du gouvernement américain et administré par FHI 360.</p>
        </div>
        <div class="description-cours">
            <h3>La description:</h3>
            <p>L'anglais pour les professionnels du tourisme est un cours en ligne ouvert et massif (MOOC) conçu pour les professionnels du tourisme ou les étudiants de l'industrie du tourisme. Ce cours est conçu pour les apprenants d'anglais débutants et intermédiaires (niveau A2). Les apprenants étudieront les principes de la profession du tourisme, réviseront le vocabulaire et la grammaire clés, développeront leurs capacités d'écoute et renforceront leur confiance dans la communication en anglais. Le matériel de cours et les devoirs comprennent des conférences vidéo, des listes de ressources de vocabulaire et de grammaire, des lectures, des forums de discussion et des quiz de compréhension.</p>
        </div>
        <div class="objectif-cours">
            <h3>Objectifs d'apprentissage et résultats d'apprentissage :</h3>
            <p> Les participants pourront :</p>
            <ul>
                <li>discuter des rôles et des tâches clés des professionnels du tourisme</li>
                <li>présenter l'histoire, la culture, la gastronomie et les attraits touristiques de leur région</li>
                <li>fournir des informations sur les services touristiques et les itinéraires</li>
                <li>communiquer de manière appropriée en anglais pour fournir un service client de qualité</li>
                <li>communiquer de manière appropriée en anglais pour protéger les touristes et gérer les urgences</li>
                <li>concevoir des supports marketing tels que des brochures, des informations sur le site Web et des publications sur les réseaux sociaux</li>
                <li>comprendre les idées principales et les détails lors de l'écoute et de la lecture en anglais de sujets touristiques</li>
            </ul>
        </div>
        <div class="date-cours">
            <h3>Dates des cours :</h3>
            <p> Ce cours sera ouvert du <strong>9 août au 27 septembre 2021.</strong></p>
            <ul>
                <li>Le module d'orientation ouvrira <strong>le 9 août à 00 h 01 HE</strong>. Ce module d'orientation n'est pas obligatoire, mais il est recommandé d'apprendre à utiliser Canvas, à demander de l'aide et à obtenir un certificat. </li>
                <li>Le module 1 débutera <strong>le 16 août à 00 h 01 HE</strong> et vous aurez jusqu'au <strong>dimanche 22 août à 23 h 59 HE</strong> pour le terminer. Chaque module suivant ouvrira le lundi à 00h01 et fermera le dimanche à 23h59.</li>
                <li>Tous les cours doivent être terminés avant <strong>le 26 septembre à 23 h 59 HE</strong>. Aucune soumission tardive ne sera acceptée.</li>
            </ul>
            <p>Veuillez cliquer sur <a href="{{ route('modules') }}">Modules</a> pour commencer !</p>
            <p>Veuillez prendre quelques instants pour lire les <a href="#">Conditions d'utilisation du programme OPEN</a>.</p>
        </div>
        <div class="footer-cours mt-4 mb-4 pt-3 pb-4">
            <span class="logo-footer-cours">Logo</span>
            <small>Ce contenu de cours est proposé sous une . Le contenu de ce cours peut être considéré sous cette licence, sauf indication contraire. <a href="#">Attribution CC</a></small>
        </div>
    </div>
    <div class="bouton-cours mt-3">
        <a href="#" class="btn btn-outline-default mt-3">Le flux de cours</a>
        <a href="#" class="btn btn-outline-default mt-3">Le calendrier du cours</a>
        <a href="#" class="btn btn-outline-default mt-3">Les notifications des cours</a>
        <h2>Faire</h2>
        <div class="recente-list">
            <span>Rien pour l'instant</span>
        </div>
    </div>
</div>

@endsection