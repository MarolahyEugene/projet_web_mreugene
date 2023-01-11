<?php

namespace App\Http\Controllers;
// use Illuminate\Http\Request;

use App\Paquet\Calendrier;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('public.home');
    }
    public function files()
    {

        $agenda = new Calendrier();

        return view('public.fichiers', ['agenda' => $agenda]);
    }
}
