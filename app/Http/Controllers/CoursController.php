<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursController extends Controller
{
    
    public function allCours () {
        return view('public.cours.toutesCours');
    }
    public function homeCours () {
        return view('public.cours.accueilCours');
    }
    public function moduleCours () {
        return view('public.cours.listeModule');
    }
    public function detailsModule () {
        return view('public.cours.moduleContent');
    }
    public function annonceCours () {
        return view('public.cours.annoncesCours');
    }
    public function insignesCours () {
        return view('public.cours.insignesCours');
    }
    
    public function notes () {
        return view('public.cours.notes');
    }

    public function addCours () {
        
    }

    public function editCours () {

    }

    public function deletCours () {

    }

}
