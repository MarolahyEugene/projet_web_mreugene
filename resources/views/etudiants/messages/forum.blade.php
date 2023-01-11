
@extends('include.app')

@section('titre','Discussion')

@section('content')
    
    <div class="main-content discussions">
        <div class="content">
            <header class=" flex flex-column justify-content-between">
                <div class="row head-message">
                    <div class="col-sm-5 col-md-5 col-lg-5 option-g">
                        <div class="option-cours">
                            <select name="couleeur" class="form-select" aria-describedby="option-cours">
                                <option value="default-value">All Cours</option>    
                                <?php foreach ($agenda->showAgenda() as $event ) : ?>
                                    <option value="<?= htmlspecialchars($event['titre']) ?>"><?= htmlspecialchars($event['titre']) ?></option>
                                <?php endforeach ; ?>
                            </select>
                        </div>
                        <div class="option-cours">
                            <select name="couleeur" class="form-select" aria-describedby="sexe">
                                <option value="default-value">Inbox</option> 
                                <?php foreach ($agenda->showAgenda() as $event ) : ?>
                                    <option value="<?= htmlspecialchars($event['titre']) ?>"><?= htmlspecialchars($event['titre']) ?></option>
                                <?php endforeach ; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7 col-lg-7 option-d">
                        <a href="#" class="fa fa-edit"></a>
                        <a href="#" class="fa fa-mail-reply"></a>
                        <a href="#" class="fa fa-mail-reply-all"></a>
                        <a href="#" class="fa fa-download"></a>
                        <a href="#" class="fa fa-trash-o"></a>
                        <a href="#" class="fa fa-cog"><i class="dropdown-toggle" data-toggle="dropdown"></i></a>
                        <form action="#" method="post">
                            <div class="message-header input-group align-items-center justify-content-center">
                                <input id="message-cherche" name="cherche" type="txt" class="form-control" required="required">
                                <label class="input-group-text fa fa-list-alt" id="cherche"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </header>
            <div class="row discussion">
                <div class="col-sm-5 col-md-5 col-lg-5 discusion-g pt-2">
                    <h4>Intro to Communications</h4>
                    <div class="list-discussion align-items-center justify-content-between">
                        <a href="#" class="discussion-block">
                            <div class="id-users">
                                <div class="id-user-g">
                                    <span class="fa fa-star"></span>
                                    <span class="user-name">MAROLAHY Eugène</span>
                                </div>
                                <span class="date-discussion">Dec 12, 2021</span>
                            </div>
                            <div class="assign align-items-center justify-content-between">
                                <span class="view">Assignment</span>
                                <span class="compteur">2</span>
                            </div>
                            <div class="content-message">This module packet has every lesson and assignment you will see in the module</div>
                        </a>
                    </div>
                    <div class="list-discussion align-items-center justify-content-between">
                        <a href="#" class="discussion-block">
                            <div class="id-users">
                                <div class="id-user-g">
                                    <span class="fa fa-star"></span>
                                    <span class="user-name">MAROLAHY Eugène</span>
                                </div>
                                <span class="date-discussion">Dec 12, 2021</span>
                            </div>
                            <div class="assign align-items-center justify-content-between">
                                <span class="view">Assignment</span>
                                <span class="compteur">2</span>
                            </div>
                            <div class="content-message">This module packet has every lesson and assignment you will see in the module</div>
                        </a>
                    </div>
                    <div class="list-discussion align-items-center justify-content-between">
                        <a href="#" class="discussion-block">
                            <div class="id-users">
                                <div class="id-user-g">
                                    <span class="fa fa-star"></span>
                                    <span class="user-name">MAROLAHY Eugène</span>
                                </div>
                                <span class="date-discussion">Dec 12, 2021</span>
                            </div>
                            <div class="assign align-items-center justify-content-between">
                                <span class="view">Assignment</span>
                                <span class="compteur">2</span>
                            </div>
                            <div class="content-message">This module packet has every lesson and assignment you will see in the module</div>
                        </a>
                    </div>
                    <div class="list-discussion align-items-center justify-content-between">
                        <a href="#" class="discussion-block">
                            <div class="id-users">
                                <div class="id-user-g">
                                    <span class="fa fa-star"></span>
                                    <span class="user-name">MAROLAHY Eugène</span>
                                </div>
                                <span class="date-discussion">Dec 12, 2021</span>
                            </div>
                            <div class="assign align-items-center justify-content-between">
                                <span class="view">Assignment</span>
                                <span class="compteur">2</span>
                            </div>
                            <div class="content-message">This module packet has every lesson and assignment you will see in the module</div>
                        </a>
                    </div>
                    <div class="list-discussion align-items-center justify-content-between">
                        <a href="#" class="discussion-block">
                            <div class="id-users">
                                <div class="id-user-g">
                                    <span class="fa fa-star"></span>
                                    <span class="user-name">MAROLAHY Eugène</span>
                                </div>
                                <span class="date-discussion">Dec 12, 2021</span>
                            </div>
                            <div class="assign align-items-center justify-content-between">
                                <span class="view">Assignment</span>
                                <span class="compteur">2</span>
                            </div>
                            <div class="content-message">This module packet has every lesson and assignment you will see in the module</div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-7 col-md-7 col-lg-7 discusion-d pt-2">
                    <div class="assign-d">
                        <div class="assign-title">Assignment</div>
                        <div class="assign-option">
                            <a href="#" class="fa fa-reply" id="parameter"></a>
                            <a href="#" class="fa fa-cog "><i class="dropdown-toggle" data-toggle="dropdown"></i></a>
                        </div>
                    </div>
                    <div class="list-discussion-selectionne">
                        <a href="#" class="discussion-blocks">
                            <div class="user-selected">
                                <div class="id-user-g">
                                    <span>
                                        <img src="img/profile 0.jpg" alt="image-404">
                                    </span>
                                    <div class="id-user-info">
                                        <span class="user-name">MAROLAHY Eugène</span><br>
                                        <span class="date-discussion">Dec 12, 2021</span>
                                    </div>
                                </div>
                                <div class="id-user-info">
                                    <span class="view">Dec 24, Juin 2021 at 05:45 pm</span>
                                    <div class="assign-option">
                                        <span class="fa fa-reply" id="parameter"></span>
                                        <span  class="fa fa-cog"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="content-message">This module packet has every lesson and assignment you will see in the module</small>
                        </a>
                    </div>
                    <div class="list-discussion-selectionne">
                        <a href="#" class="discussion-blocks">
                            <div class="user-selected">
                                <div class="id-user-g">
                                    <span>
                                        <img src="img/profile 0.jpg" alt="image-404">
                                    </span>
                                    <div class="id-user-info">
                                        <span class="user-name">MAROLAHY Eugène</span><br>
                                        <span class="date-discussion">Dec 12, 2021</span>
                                    </div>
                                </div>
                                <div class="id-user-info">
                                    <span class="view">Dec 24, Juin 2021 at 05:45 pm</span>
                                    <div class="assign-option">
                                        <span class="fa fa-reply" id="parameter"></span>
                                        <span  class="fa fa-cog"></span>
                                    </div>
                                </div>
                            </div>
                            <small class="content-message">This module packet has every lesson and assignment you will see in the module</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection