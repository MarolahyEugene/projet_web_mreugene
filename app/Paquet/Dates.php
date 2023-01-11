<?php

namespace App\Paquet;

use DateTime;


class Dates
{

    public $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche'];
    private $months = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    public $month;
    public $year;

    public function __construct(?int $month = null, ?int $year = null)
    {
        if ($month === null || $month < 1 || $month > 12) {
            $month = intval(date('m'));
        }
        if ($year === null) {
            $year = intval(date('Y'));
        }

        $this->month = $month;
        $this->year = $year;
    }

    public function getMonthActual()
    {
        $dat = new DateTime();
        return intval($dat->format('m'));
    }

    public function toDay(): int
    {
        $d = new DateTime();

        return ($this->month == $d->format('m') && $this->year == $d->format('Y')) ? intval($d->format('d')) : 0;
    }

    public function getYearActual()
    {
        $dat = new DateTime();
        return intval($dat->format('Y'));
    }

    public function getStartingDay()
    {
        return new DateTime("{$this->year}-{$this->month}-01");
    }

    public function toString(): string
    {
        return $this->months[$this->month - 1] . '  ' . $this->year;
    }

    public function getWeeks(): int
    {
        $starts = $this->getStartingDay();
        $end = (clone $starts)->modify('+1 month -1 day');
        $weeks = intval($end->format('W')) - intval($starts->format('W')) + 1;

        if ($weeks < 0) {
            $weeks = intval($starts->format('W'));
        }
        if ($weeks > 6) {
            $weeks = (intval($starts->format('W')) / 12) + 2;
        }
        return $weeks;
    }

    public function withinMonth(DateTime $date): bool
    {
        return $this->getStartingDay()->format('Y-m') === $date->format('Y-m');
    }

    public function nextMonth(): Dates
    {
        $month = $this->month + 1;
        $ans = $this->year;

        if ($month > 12) {
            $month = 1;
            $ans += 1;
        }
        return new Dates($month, $ans);
    }

    public function prevMonth(): Dates
    {
        $month = $this->month - 1;
        $ans = $this->year;

        if ($month < 1) {
            $month = 12;
            $ans -= 1;
        }
        return new Dates($month, $ans);
    }
}
