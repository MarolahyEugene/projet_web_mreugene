<?php

use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EnseignantsController;
use App\Http\Controllers\MessagerieController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PortefolioController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('public.home');
});

Route::get('home', [Controller::class, 'index'])->name('home');
Route::get('accueil', [Controller::class, 'index'])->name('home');

// --------------------------------- Début Route Enseignants ---------------------------

Route::get('enseignant', [EnseignantsController::class, 'accueilEnseignant'])->name('enseignant/accueil');

Route::get('enseignant/annonces-global', [EnseignantsController::class, 'annonceGlobalEnseignant'])->name('enseignant/annonces-global');
Route::get('enseignant/fichier', [EnseignantsController::class, 'fichierEnseignant'])->name('enseignant/fichier');
Route::get('enseignant/agenda', [EnseignantsController::class, 'agenda'])->name('enseignant/agenda');
Route::get('enseignant/calendrier', [EnseignantsController::class, 'calendrier'])->name('enseignant/calendrier');
Route::get('enseignant/compte-user', [EnseignantsController::class, 'profileEnseignant'])->name('enseignant/compte');
Route::get('enseignant/notification', [EnseignantsController::class, 'notificationEnseignant'])->name('enseignant/notification');
Route::get('enseignant/portfolio', [EnseignantsController::class, 'portfolioEnseignant'])->name('enseignant/portfolio');
Route::get('enseignant/mes-portfolio', [EnseignantsController::class, 'mesPortfolioEnseignant'])->name('enseignant/portfolio-listes');

Route::get('enseignant/cours', [EnseignantsController::class, 'accueilCours'])->name('enseignant/cours');
Route::get('enseignant/cours/note', [EnseignantsController::class, 'notes'])->name('enseignant/cours/note');
Route::get('enseignant/cours/accueil', [EnseignantsController::class, 'accueilCours'])->name('enseignant/cours/accueil');
Route::get('enseignant/cours/annonces', [EnseignantsController::class, 'annoncesCours'])->name('enseignant/cours/annonces');
Route::get('enseignant/cours/insignes', [EnseignantsController::class, 'insignesCours'])->name('enseignant/cours/insignes');
Route::get('enseignant/cours/liste-cours', [EnseignantsController::class, 'listeCours'])->name('enseignant/cours/liste-cours');
Route::get('enseignant/cours/module/liste-modules', [EnseignantsController::class, 'listeModules'])->name('enseignant/cours/module/liste-module');
Route::get('enseignant/cours/module', [EnseignantsController::class, 'moduleContent'])->name('enseignant/cours/module');


Route::get('enseignant/message/', [EnseignantsController::class, 'listeMessages'])->name('enseignant/message');
Route::get('enseignant/message/privée', [EnseignantsController::class, 'messagePrivees'])->name('enseignant/message/privee');
Route::get('enseignant/message/privé', [EnseignantsController::class, 'messagePrivees'])->name('enseignant/message/privee');
Route::get('enseignant/message/forum', [EnseignantsController::class, 'messageForum'])->name('enseignant/message/forum');
Route::get('enseignant/message/notification', [EnseignantsController::class, 'notification'])->name('enseignant/message/notification');

// --------------------------------- Fin Route Enseignants ---------------------------

Route::get('notification', [NotificationController::class, 'index'])->name('notification');

Route::get('agenda', [CalendrierController::class, 'agenda'])->name('agenda');
Route::get('calendrier', [CalendrierController::class, 'index'])->name('calendar');
Route::get('message', [MessagerieController::class, 'messageAccueil'])->name('messagerie');
Route::get('messagerie', [MessagerieController::class, 'messageAccueil'])->name('messagerie');
Route::get('discussion', [MessagerieController::class, 'messageAccueil'])->name('discussion');

Route::get('fichier', [Controller::class, 'files'])->name('file');

Route::get('parametre', [CompteController::class, 'profileSetting'])->name('profile');
Route::get('parametre/notification', [CompteController::class, 'notificationSetting'])->name('gestion de notification');
Route::get('parametre/compte utilisateur', [CompteController::class, 'compteUserSetting'])->name('gestion de compte utilisateur');
Route::get('parametre/portfolio', [CompteController::class, 'portfolioSetting'])->name('gestion de portfolio');


Route::get('portefolio', [PortefolioController::class, 'index'])->name('portfolio');
Route::get('portefeuille', [PortefolioController::class, 'index'])->name('portfolio');
Route::get('portfolio', [PortefolioController::class, 'index'])->name('portfolio');
Route::get('portfolio/accueil', [PortefolioController::class, 'accueil'])->name('portfolio/accueil');
Route::get('portfolio/mes Portfolio', [PortefolioController::class, 'ribrique'])->name('portfolio/ribrique');
Route::get('portfolio/reglage', [PortefolioController::class, 'reglage'])->name('portfolio/reglage');



Route::get('announcement', [MessagerieController::class, 'index'])->name('announcement');

Route::get('quizz', [CalendrierController::class, 'index'])->name('quizz');
Route::get('compte', [MessagerieController::class, 'index'])->name('compt-user');
Route::get('setting-notification', [MessagerieController::class, 'index'])->name('notif-setting');
Route::get('exercice', [MessagerieController::class, 'index'])->name('exo');

Route::get('notes', [CoursController::class, 'notes'])->name('notes');
Route::get('cours', [CoursController::class, 'allCours'])->name('cours');
Route::get('contenu du cours', [CoursController::class, 'homeCours'])->name('homeCours');
Route::get('module', [CoursController::class, 'moduleCours'])->name('modules');
Route::get('detail module', [CoursController::class, 'detailsModule'])->name('detailsModule');
Route::get('annonce du cours', [CoursController::class, 'annonceCours'])->name('annonceCours');
Route::get('insignes du cours', [CoursController::class, 'insignesCours'])->name('insignesCours');

Route::get('aide', [MessagerieController::class, 'index'])->name('help');
Route::get('login', [MessagerieController::class, 'index'])->name('login');

Route::get('inscription', [CompteController::class, 'inscription'])->name('inscription');

Route::post('insertion', [CompteController::class, 'addUser'])->name('insertion');

Route::get('login', [CompteController::class, 'login'])->name('login');
Route::get('connexion', [CompteController::class, 'login'])->name('login');
