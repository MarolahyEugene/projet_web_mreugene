<?php

namespace App\Paquet;

use PDO;

use DateTime;
use App\Paquet \Dates;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\DateTime;

class Calendrier
{

    private $pdo;

    public function __construct()
    {
        $this->pdo = DB::connection()->getPdo();
    }

    public function getEventsBetween(DateTime $start, DateTime $end): array
    {

        // $sql = "SELECT * FROM agenda WHERE debut BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'";

        $sql = "SELECT * FROM cours WHERE debut BETWEEN '{$start->format('Y-m-d 00:00:00')}' AND '{$end->format('Y-m-d 23:59:59')}'";
        $statement = $this->pdo->query($sql);
        $results = $statement->fetchAll();
        return $results;
    }

    public function getEventsBetweenByDay(DateTime $start, DateTime $end): array
    {

        $events = $this->getEventsBetween($start, $end);
        $days = [];

        foreach ($events as $event) {
            $date = explode(' ', $event['debut'])[0];

            if (!isset($days[$date])) {
                $days[$date] = [$event];
            } else {
                $days[$date][] = $event;
            }
        }
        return $days;
    }


    public function find(int $id): array
    {

        if ($id === '') {

            $res = [];
        } else {

            // $statement = $this->pdo->query("SELECT * FROM agendas WHERE id=$id LIMIT 1") ;

            $statement = $this->pdo->query("SELECT * FROM cours WHERE id=$id LIMIT 1");
            $res = $statement->fetch();
        }
        return $res ? $res : [];
    }

    public function showAgenda(): array
    {

        // $agenda = $this->pdo->query("SELECT * FROM agendas") ;

        $agenda = $this->pdo->query("SELECT * FROM cours");
        return $agenda->fetchAll();
    }

    public function length(): int
    {

        // $agenda = $this->pdo->query("SELECT COUNT(id) FROM agendas") ;

        $agenda = $this->pdo->query("SELECT COUNT(id) FROM cours");
        return intval($agenda->fetch());
    }
}
