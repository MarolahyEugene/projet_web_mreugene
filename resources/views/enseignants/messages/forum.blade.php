@extends('enseignants.layout')

@section('titre','Discussion')

@section('contenu-page')

<div class="main-content messageries">
    <div class="content">
        <header class="head-message py-1">

            <div class="option-g">
                <div class="option-gg">
                    <select name="couleeur" class="py-1 customer-champ form-select" aria-describedby="option-cours">
                        <option value="default-value">All Cours</option>
                        <?php foreach ($agenda->showAgenda() as $event) : ?>
                            <option value="<?= htmlspecialchars($event['title']) ?>"><?= htmlspecialchars($event['title']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="option-gg">
                    <select name="couleeur" class="py-1 customer-champ form-select" aria-describedby="sexe">
                        <option value="default-value">Inbox</option>
                        <?php foreach ($agenda->showAgenda() as $event) : ?>
                            <option value="<?= htmlspecialchars($event['title']) ?>"><?= htmlspecialchars($event['title']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="option-d ">
                <a href="#" class="px-3 py-2 customer-champ fa fa-edit"></a>
                <a href="#" class="px-3 py-2 customer-champ fa fa-mail-reply"></a>
                <a href="#" class="px-3 py-2 customer-champ fa fa-mail-reply-all"></a>
                <a href="#" class="px-3 py-2 customer-champ fa fa-download"></a>
                <a href="#" class="px-3 py-2 customer-champ fa fa-trash-o"></a>
                <a href="#" class="px-3 py-2 customer-champ fa fa-cog"><i class="dropdown-toggle" data-toggle="dropdown"></i></a>
                <form action="#" method="post">
                    <div class="input-group">
                        <input id="message-cherche" name="cherche" type="txt" class="py-1 customer-champ" required="required">
                        <button class="py-2 px-3 customer-champ input-group-text fa fa-list-alt" id="cherche"></button>
                    </div>
                </form>
            </div>

        </header>
        <div class="discussion">

            <div class="list-discussions pt-2">
                <h4 class="mb-3">Intro to Communications</h4>
                <div class="block-discussion ">
                    <a href="#" class="discussion-block">
                        <div class="id-user-g">
                            <span>
                                <img src="{{ asset('img/profile 0.jpg') }}" alt="image-404">
                            </span>
                            <div class="block-flex">
                                <div class="left">
                                    <span class="user-name">MAROLAHY Eugène</span>
                                    <span class="date-discussion">Dec 12, 2021</span>
                                </div>
                                <div class="right">
                                    <span class="view">Assignment</span>
                                    <span class="compteur">2</span>
                                </div>

                            </div>
                        </div>
                        <small>
                            This module packet has every lesson and assignment you will see in the module
                        </small>
                    </a>
                </div>
                <div class="block-discussion ">
                    <a href="#" class="discussion-block">
                        <div class="id-user-g">
                            <span>
                                <img src="{{ asset('img/profile 0.jpg') }}" alt="image-404">
                            </span>
                            <div class="block-flex">
                                <div class="left">
                                    <span class="user-name">MAROLAHY Eugène</span>
                                    <span class="date-discussion">Dec 12, 2021</span>
                                </div>
                                <div class="right">
                                    <span class="view">Assignment</span>
                                    <span class="compteur">2</span>
                                </div>

                            </div>
                        </div>
                        <small>
                            This module packet has every lesson and assignment you will see in the module
                        </small>
                    </a>
                </div>
                <div class="block-discussion ">
                    <a href="#" class="discussion-block">
                        <div class="id-user-g">
                            <span>
                                <img src="{{ asset('img/profile 0.jpg') }}" alt="image-404">
                            </span>
                            <div class="block-flex">
                                <div class="left">
                                    <span class="user-name">MAROLAHY Eugène</span>
                                    <span class="date-discussion">Dec 12, 2021</span>
                                </div>
                                <div class="right">
                                    <span class="view">Assignment</span>
                                    <span class="compteur">2</span>
                                </div>

                            </div>
                        </div>
                        <small>
                            This module packet has every lesson and assignment you will see in the module
                        </small>
                    </a>
                </div>
                <div class="block-discussion ">
                    <a href="#" class="discussion-block">
                        <div class="id-user-g">
                            <span>
                                <img src="{{ asset('img/profile 0.jpg') }}" alt="image-404">
                            </span>
                            <div class="block-flex">
                                <div class="left">
                                    <span class="user-name">MAROLAHY Eugène</span>
                                    <span class="date-discussion">Dec 12, 2021</span>
                                </div>
                                <div class="right">
                                    <span class="view">Assignment</span>
                                    <span class="compteur">2</span>
                                </div>

                            </div>
                        </div>
                        <small>
                            This module packet has every lesson and assignment you will see in the module
                        </small>
                    </a>
                </div>
                <div class="block-discussion ">
                    <a href="#" class="discussion-block">
                        <div class="id-user-g">
                            <span>
                                <img src="{{ asset('img/profile 0.jpg') }}" alt="image-404">
                            </span>
                            <div class="block-flex">
                                <div class="left">
                                    <span class="user-name">MAROLAHY Eugène</span>
                                    <span class="date-discussion">Dec 12, 2021</span>
                                </div>
                                <div class="right">
                                    <span class="view">Assignment</span>
                                    <span class="compteur">2</span>
                                </div>

                            </div>
                        </div>
                        <small>
                            This module packet has every lesson and assignment you will see in the module
                        </small>
                    </a>
                </div>
                <div class="block-discussion ">
                    <a href="#" class="discussion-block">
                        <div class="id-user-g">
                            <span>
                                <img src="{{ asset('img/profile 0.jpg') }}" alt="image-404">
                            </span>
                            <div class="block-flex">
                                <div class="left">
                                    <span class="user-name">MAROLAHY Eugène</span>
                                    <span class="date-discussion">Dec 12, 2021</span>
                                </div>
                                <div class="right">
                                    <span class="view">Assignment</span>
                                    <span class="compteur">2</span>
                                </div>

                            </div>
                        </div>
                        <small>
                            This module packet has every lesson and assignment you will see in the module
                        </small>
                    </a>
                </div>
            </div>

            <div class="discussion-d pt-2 ">
                <div class="assign-d my-2">
                    <h4 class="mb-3">Assignment</h4>
                    <div class="assign-option">
                        <a href="#" class="customer-champ fa fa-reply" id="parameter"></a>
                        <a href="#" class="customer-champ fa fa-cog "><i class="dropdown-toggle" data-toggle="dropdown"></i></a>
                    </div>
                </div>

                <div class="discussion-selectionne">
                    <a href="#" class="discussion-block">
                        <div class="id-user-g">
                            <span>
                                <img src="{{ asset('img/profile 0.jpg') }}" alt="image-404">
                            </span>
                            <div class="block-flex">
                                <div class="left">
                                    <span class="user-name">MAROLAHY Eugène</span>
                                    <span class="date-discussion">Dec 12, 2021</span>
                                </div>
                                <div class="right">
                                    <span class="view">Assignment</span>
                                    <span class="compteur">2</span>
                                </div>

                            </div>
                        </div>
                        <small>
                            This module packet has every lesson and assignment you will see in the module
                        </small>
                    </a>
                </div>

                <div class="discussion-selectionne">
                    <a href="#" class="discussion-block">
                        <div class="id-user-g">
                            <span>
                                <img src="{{ asset('img/profile 0.jpg') }}" alt="image-404">
                            </span>
                            <div class="block-flex">
                                <div class="left">
                                    <span class="user-name">MAROLAHY Eugène</span>
                                    <span class="date-discussion">Dec 12, 2021</span>
                                </div>
                                <div class="right">
                                    <span class="view">Dec 24, Juin 2021 at 05:45 pm</span>
                                    <div class="assign-option">
                                        <span class="customer-champ fa fa-reply" id="parameter"></span>
                                        <span class="customer-champ fa fa-cog"></span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <small>
                            This module packet has every lesson and assignment you will see in the module
                        </small>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection