<?php

namespace App\Http\Controllers;


use App\Paquet\Dates;
use App\Paquet\Calendrier;

use Illuminate\Http\Request;
use Illuminate\Support\DateTime ;

class CalendrierController extends Controller
{
       
    public function index(){

        $events = new Calendrier(); 
        $cal = new Dates($_GET['month'] ?? null, $_GET['annee'] ?? null);
        $agenda = $events ;
        $start = $cal->getStartingDay();
        $star = $start->format('N') === '1' ? $start : $cal->getStartingDay()->modify('last monday') ;

        $weeks = $cal->getWeeks() ;
        $end = (clone $star )->modify('+' . (6 + 7 * ( $weeks - 1 )) . ' days ') ;
        
        $event = $events->getEventsBetweenByDay( $star , $end ) ;

        dd($cal);

        return view('enseignants.calendrier' , [
            'agenda' => $agenda ,
            'events' => $event ,
            'start' => $star ,
            'end' => $end ,
            'cal' => $cal ,
            'weeks' => $weeks
            ]) ;
        
    }

    public function agenda(){

        $data = new Calendrier();
        $cal = $data->showAgenda();

        return view('public.agenda', ['agenda' => $data, 'even' => $cal ] );
    }
   
}
