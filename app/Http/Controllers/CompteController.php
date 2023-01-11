<?php

namespace App\Http\Controllers;

use App\Models\Titres;
use App\Models\Utilisateurs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompteController extends Controller
{

    public function inscription()
    {

        $titre = Titres::All();
        return view('public.inscription', compact('titre'));
    }

    public function login()
    {
        return view('public.login');
    }

    public function notificationSetting()
    {
        return view('public.parametres.parametreNotification');
    }
    public function compteUserSetting()
    {
        return view('public.parametres.parametre');
    }
    public function portfolioSetting()
    {
        return view('public.parametres.parametre');
    }
    public function profileSetting()
    {
        return view('public.parametres.parametreProfile');
    }
    public function addUser(Request $request)
    {

        if ($request->password === $request->confirm) {

            $student = new Utilisateurs([

                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'sexe' => $request->sexe,
                'naissance' => $request->naissance,
                'adresse' => $request->adresse,
                'titres' => $request->titres,
                'nationalite' => $request->nationalite,
                'email' => $request->email,
                'password' => $request->password

            ]);

            if ($student->save() === true) {

                return  redirect('home')->with('statut', 'Insertion avec succes !');
            } else {

                return view('public.inscription');
            }
        } else {

            return redirect('inscription')->with('statut', 'Echec d\'insertion ! ');
        }
    }
}
