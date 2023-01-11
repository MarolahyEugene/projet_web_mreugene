<?php

namespace App\Http\Controllers;

use App\Paquet \Calendrier;
use App\Paquet \Dates;
use Illuminate\Http\Request;

class MessagerieController extends Controller
{

    public function messageAccueil () {

        $agenda = new Calendrier();         
        return view('public.list-message', ['agenda' => $agenda ]) ;
    }

    public function messagePrive () {
        
    }

    public function messageGoupe () {

    }

}
