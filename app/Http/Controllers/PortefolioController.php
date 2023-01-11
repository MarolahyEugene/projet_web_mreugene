<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortefolioController extends Controller
{
    public function index()
    {
        return view('public.portefolio.accueilPortefeuille');
    }
    public function accueil()
    {
        return view('public.portefolio.accueilPortefeuille');
    }
    public function ribrique()
    {
        return view('public.portefolio.ribriquePortefeuille');
    }
    public function reglage()
    {
        return view('public.portefolio.reglagePortefeuille');
    }
}
