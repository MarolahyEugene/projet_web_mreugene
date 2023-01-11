@extends('enseignants.layout')

@section('titre','Calendrier')

@section('contenu-page')

<div class="main-content ">
    <div class="content">
        <div class="flex-page">
            <div class="cal-head mx-2">
                <h1 class="titre">Calendar</h1>
                <nav class="navbar navbar-dark bg-primary mb-2">
                    <a href="{{ route('calendar') }}"> Mon Calendrier</a>
                </nav>
            </div>
            <div class="calendar-page">
                <div class="calendrier-left mx-2 my-1">
                    <div class="head-calendar">
                        <h1><?= $cal->toString(); ?></h1>
                        <div class="next-prev align-items-center justify-content-center">
                            <a class="btn btn-default" href="{{ route('calendar',['month' => $cal->prevMonth()->month , 'annee' => $cal->prevMonth()->year ]) }}">&lt&lt</a>
                            <a class="btn btn-default" href="{{ route('calendar',['month' => $cal->getMonthActual() , 'annee' => $cal->getYearActual() ]) }}">Today</a>
                            <a class="btn btn-default" href="{{ route('calendar',['month' => $cal->nextMonth()->month , 'annee' => $cal->nextMonth()->year ]) }}">&gt&gt</a>
                            <span class="fa fa-plus-circle modal-trigger py-2" data-modal='modal-add-agenda'></span>
                        </div>
                    </div>
                    <table class="calendar-table calendar-table-<?php echo $weeks; ?>-semaines">
                        <tr class="nom-jours">
                            <?php foreach ($cal->days as $k => $day) :  ?>
                                <td class="day">
                                    <div class="calendar-week"><?= $day; ?></div>
                                </td>
                            <?php endforeach; ?>
                        </tr>
                        <?php for ($i = 0; $i < $weeks; $i++) : ?>
                            <tr class="date-du-jours">
                                <?php foreach ($cal->days as $k => $day) :
                                    $dat = (clone $start)->modify("+" . ($k + $i * 7) . " day");
                                    $eventForDay = $events[$dat->format('Y-m-d')] ?? [];
                                ?>
                                    <td class="<?= $cal->withinMonth($dat) ? 'mois-actuel' : 'calendar-othermonth'; ?> modal-trigger" data-modal='modal-add-agenda'>
                                        <?php
                                        if ($dat->format('d') == $cal->toDay() && $cal->withinMonth($dat) === true) : ?>
                                            <div class="calendar-today">
                                                <?= $dat->format('d'); ?>
                                            </div><?php
                                                else : ?>
                                            <div class="calendar-day">
                                                <?= $dat->format('d'); ?>
                                            </div><?php
                                                endif ?>
                                        <?php foreach ($eventForDay as $event) : ?>
                                            <div class="calendar-events modal-trigger" data-modal='modal-add-agenda'>
                                                <a href="#"><?= $event['title']; ?></a>
                                            </div>
                                        <?php endforeach; ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endfor; ?>
                    </table>
                </div>
                <div class="calendrier-right mx-2 my-1">
                    <table class=" agenda-table">
                        <tr>
                            <div class="next-prev-sm align-items-center justify-content-center">
                                <a class="btn btn-default" href="{{ route('calendar',['month' => $cal->prevMonth()->month , 'annee' => $cal->prevMonth()->year ]) }}">&lt</a>
                                <span class=""><?= $cal->toString(); ?></span>
                                <a class="btn btn-default" href="{{ route('calendar',['month' => $cal->nextMonth()->month , 'annee' => $cal->nextMonth()->year ]) }}">&gt</a>
                            </div>
                        </tr>
                        <?php for ($i = 0; $i < $weeks; $i++) : ?>
                            <tr class="date-du-jours">
                                <?php foreach ($cal->days as $k => $day) :
                                    $dat = (clone $start)->modify("+" . ($k + $i * 7) . " day");
                                    $eventForDay = $events[$dat->format('Y-m-d')] ?? [];
                                ?>
                                    <td class="<?= $cal->withinMonth($dat) ? 'mois-actuel' : 'calendar-othermonth'; ?> modal-trigger" data-modal='modal-add-agenda'>
                                        <?php
                                        if ($dat->format('d') == $cal->toDay() && $cal->withinMonth($dat) === true) : ?>
                                            <div class="calendar-today py-2"><?= $dat->format('d'); ?></div>
                                        <?php else : ?>
                                            <div class="calendar-day"><?= $dat->format('d'); ?></div>
                                        <?php endif ?>
                                    </td>
                                <?php endforeach; ?>
                            </tr>
                        <?php endfor; ?>
                    </table>
                    <div class="event-list mt-3 mb-2">
                        <ul class="">
                            <li class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#list-agenda">
                                <span class="fa fa-caret-down"></span>
                                <span class="contenu-event px-2">CALENDARS</span>
                            </li>
                            <?php foreach ($agenda->showAgenda() as $event) : ?>
                                <li id="list-agenda" class="collapse event-list-content">
                                    <div>
                                        <span class="fa fa-stop px-2"></span>
                                        <span class="contenu-event"><?= htmlspecialchars($event['title']) ?></span>
                                    </div>
                                    <span class="option-event">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <ul>
                            <li class="lien-agenda" data-bs-toggle="collapse" data-bs-target="#undated">
                                <span class="couleur fa fa-caret-down"></span>
                                <span class="contenu-event px-2">UNDATED</span>
                            </li>
                            <?php foreach ($agenda->showAgenda() as $event) : ?>
                                <li id="undated" class=" collapse show event-list-content">
                                    <div>
                                        <span class="couleur fa fa-stop px-2"></span>
                                        <span class="contenu-event"><?= htmlspecialchars($event['title']) ?></span>
                                    </div>
                                    <span class="option-event">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-three-dots-vertical" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                        </svg>
                                    </span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- DEBUT MODAL -->
        <div id='modal-add-agenda' class="modal-wrapper">
            <div class="overlay close-modal"></div>
            <div class="modal modal-add-agenda modal-centered" role="dialog">
                <div class="modal-content">
                    <div class="card card-modal">
                        <div class="card-header">
                            <div class="border-b p-1 pb-1 pt-1 mb-0 ">
                                <div class="align-items-center">
                                    <span class="titre-modal">Création cours</span>
                                    <span class='close-modal cursor-pointer'><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <form class="auth-form login-form" method="POST">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 titre-cours mb-2">
                                        <div class="email mb-3">
                                            <label class="sr-only" for="signin-email">Titre Cours</label>
                                            <input id="nom" name="titre" type="text" class="form-control " placeholder="Titre cours" required="required">
                                        </div>
                                    </div>
                                    <div class="modal-theme mb-2 py-2">
                                        <div class="input-group ">
                                            <span class="input-group-text" id="sexe">Couleurs</span>
                                            <select name="couleur" class="form-select" aria-describedby="sexe">
                                                <option value="rouge">Rouge</option>
                                                <option value="bleu">Bleu</option>
                                                <option value="vert">Vert</option>
                                                <option value="jaune">Jaune</option>
                                                <option value="bleu-ciel">Bleu-ciel</option>
                                                <option value="orang">Orange</option>
                                                <option value="violet">Violet</option>
                                            </select>
                                        </div>
                                        <div class="input-group img">
                                            <span class="dlg-date input-group-text fa fa-image"></span>
                                            <input id="dates" name="dates" type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-theme mb-2 py-2">
                                        <div class="input-group">
                                            <label class="dlg-debut input-group-text" id="debut">Début</label>
                                            <input id="debut" name="debut" type="date" class="form-control " required="required">
                                        </div>
                                        <div class="input-group fin">
                                            <label class="dlg-fin input-group-text">Fin</label>
                                            <input name="fin" type="date" class="form-control" required="required">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12 mb-2 mt-3">
                                        <div class="input-group">
                                            <span class="input-group-text" id="email">Description</span>
                                            <textarea name="description" id="description-agenda" class=" form-control" rows="1" placeholder="Description de Cours"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="mt-1 modale-footer">
                            <button class='btn btn-success'>Valider</button>
                            <span class="close-modal cursor-pointer btn btn-danger" data-dismiss="modal">Fermer</span>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection