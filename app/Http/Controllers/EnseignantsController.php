<?php

namespace App\Http\Controllers;

use App\Paquet\Calendrier;
use App\Paquet\Dates;
use Illuminate\Http\Request;

class EnseignantsController extends Controller
{
    public function accueilEnseignant()
    {
        return view('enseignants.accueil');
    }

    public function annonceGlobalEnseignant()
    {
        return view('enseignants.annonces');
    }

    public function accueilCours()
    {
        return view('enseignants.cours.accueil');
    }

    public function notes()
    {
        return view('enseignants.cours.notes');
    }

    public function listeCours()
    {
        return view('enseignants.cours.listes');
    }

    public function insignesCours()
    {
        return view('enseignants.cours.insignes');
    }

    public function annoncesCours()
    {
        return view('enseignants.cours.annonces');
    }

    public function moduleContent()
    {
        return view('enseignants.cours.modules.contenue');
    }

    public function listeModules()
    {
        return view('enseignants.cours.modules.listes');
    }

    public function profileEnseignant()
    {
        return view('enseignants.parametres.compte');
    }
    public function notificationEnseignant()
    {
        return view('enseignants.parametres.notification');
    }

    public function portfolioEnseignant()
    {
        return view('enseignants.portfolio.accueil');
    }
    public function mesPortfolioEnseignant()
    {
        return view('enseignants.portfolio.mesPortfolio');
    }

    public function listeMessages()
    {
        $agenda = new Calendrier();
        return view('enseignants.messages.forum', ['agenda' => $agenda]);
    }

    public function calendrier()
    {
        $events = new Calendrier();
        $cal = new Dates($_GET['month'] ?? null, $_GET['annee'] ?? null);
        $agenda = $events;
        $start = $cal->getStartingDay();
        $star = $start->format('N') === '1' ? $start : $cal->getStartingDay()->modify('last monday');

        $weeks = $cal->getWeeks();
        $end = (clone $star)->modify('+' . (6 + 7 * ($weeks - 1)) . ' days ');

        $event = $events->getEventsBetweenByDay($star, $end);

        return view(
            'enseignants.calendrier',
            [
                'agenda' => $agenda,
                'events' => $event,
                'start' => $star,
                'end' => $end,
                'cal' => $cal,
                'weeks' => $weeks
            ]
        );
    }

    public function agenda()
    {
        $agenda = new Calendrier();
        return view('enseignants.agenda', ['agenda' => $agenda]);
    }

    public function fichierEnseignant()
    {
        $agenda = new Calendrier();
        return view('enseignants.fichiers', ['agenda' => $agenda]);
    }

    public function messageForum()
    {
        $agenda = new Calendrier();
        return view('enseignants.messages.forum', ['agenda' => $agenda]);
    }

    public function messagePrivees()
    {
        $agenda = new Calendrier();
        return view('enseignants.messages.privees', ['agenda' => $agenda]);
    }

    public function notification()
    {
        return view('enseignants.messages.notification');
    }
}
