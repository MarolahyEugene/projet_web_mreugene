@extends('enseignants.layout')


@section('titre','Agenda')

@section('contenu-page')

<div class="main-content info-agenda">
    <div class="content">
        <div class="agenda-content">
            <div class="agenda">
                <table class="list-agenda">
                    <tr class="titre-agenda">
                        <td>Dates</td>
                        <td>Temps</td>
                        <td>Nom matières</td>
                    </tr>
                    <?php foreach ($agenda->showAgenda() as $event) : ?>
                        <tr class="content-agenda">
                            <td>
                                <a href="{{ route('agenda',['id' => $event['id_cours'] ]) }}">
                                    <?= (new DateTime($event['debut']))->format('d/m/Y') ?>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('agenda',['id' => $event['id_cours'] ]) }}">
                                    <?= (new DateTime($event['debut']))->format('H : i') . ' à ' . (new DateTime($event['fin']))->format('H : i') ?>
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('agenda',['id' => $event['id_cours'] ]) }}">
                                    <?= htmlspecialchars($event['title']) ?>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <?php

        use Illuminate\Support\Facades\Route;

        if (!isset($_GET['id_cours']) || empty($_GET['id_cours'])) {

            // echo '<h1>Page Agenda</h1>';
            Route::view('agenda', 'public.calendrier');
            // page_404();
        } else {

            $event = $agenda->find($_GET['id_cours']);
            if ($event === []) {

                echo '<br><br> <h1>Page Introuvable ! </h1>';

                //     // page_404();
            } else { ?>
                <h3 class="mt-3">Details agenda</h3>
                <div class="agenda">
                    <h3><?= htmlspecialchars($event['title']); ?></h3>
                    <ul class="detail-agenda">
                        <li>Date : <?= (new DateTime($event['debut']))->format('Y-m-d'); ?></li>
                        <li>Debut : <?= (new DateTime($event['debut']))->format('H : i'); ?></li>
                        <li>Fin : <?= (new DateTime($event['fin']))->format('H : i'); ?></li>
                        <li>Description : <?= htmlspecialchars($event['description']); ?></li>
                    </ul>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>

@endsection

@section('modal-agenda')

@endsection