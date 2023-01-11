<!DOCTYPE html>
<html lang="fr">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
        <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
        <link id="theme-style" rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link id="theme-style" rel="stylesheet" href="{{asset('css/inscription.css')}}">
        
        <title>Inscription</title>
    </head>
    <body class="app app-login p-0">
        <div class="row g-0 app-auth-wrapper">
            <div class="col-12 col-md-12 col-lg-12 auth-main-col text-center p-2">
                <div class="d-flex flex-column align-content-end">
                    <div class="app-auth-body mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="auth-heading text-center mb-3">Création compte</h2>                           
                            </div>
                            <div class="card-body">
                            <form class="auth-form login-form" method="POST" action="{{ route('insertion') }}">
                                {{ csrf_field() }}
                                <div class="form-content-h">
                                    <div class="form-gauche">
                                        <div class="email mb-2">
                                            <label class="sr-only" for="signin-email">Nom</label>
                                            <input id="nom" name="first_name" type="text" class="form-control signin-email" placeholder="Votre nom" required="required">
                                        </div>
                                        <div class="email mb-2">
                                            <label class="sr-only" for="signin-email">Prénom</label>
                                            <input id="prenom" name="last_name" type="text" class="form-control signin-email" placeholder="Votre prénom">
                                        </div>
                                        <div class="email mb-2">
                                            <label class="sr-only" for="signin-email">Sexe</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="sexe">Sexe</span>
                                                <select name="sexe" class="form-select" aria-describedby="sexe">
                                                    <option value="Homme">Homme</option>
                                                    <option value="Femme">Femme</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="email mb-2">
                                            <label class="sr-only" for="signin-email">Date de naissance</label>
                                            <div class="input-group">
                                                <span class="input-group-text icon" id="naissance">
                                                    <svg width="1em" height="1em" viewBox="0 0 448 512" class="bi bi-calendar-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z"/>
                                                    </svg>
                                                </span>
                                                <input id=" naissance" name="naissance" type="date" class="form-control calendar" placeholder="Adresse email" required="required" aria-describedby="naissance">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-droit">
                                        <div class="email mb-2">
                                            <label class="sr-only" for="signin-email">Adresse</label>
                                            <input id="adresse" name="adresse" type="text" class="form-control signin-email" placeholder="Votre adresse" required="required">
                                        </div>
                                        <div class="email mb-2">
                                            <label class="sr-only" for="signin-email">Adresse E-mail</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="email">@</span>
                                                <input id="email" name="email" type="email" class="form-control signin-email" placeholder="Votre adresse E-mail" required="required" aria-describedby="email">
                                            </div>
                                        </div>
                                        <div class="email mb-2">
                                            <label class="sr-only" for="signin-email">Nationalité</label>
                                            <input id="adresse" name="nationalite" type="text" class="form-control signin-email" placeholder="Votre Nationalité" required="required">
                                        </div>
                                        <div class="email mb-2">
                                            <label class="sr-only" for="signin-email">Titre</label>       
                                            <div class="input-group">
                                                <span class="input-group-text" id="titre">Titre</span>
                                                <select name="titres" class="form-select" aria-describedby="sexe">
                                                    @foreach ($titre as $t)
                                                        <option value="{{$t->titles}}">{{$t->titles}}</option>                                                        
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="form-content-b">
                                    <div class="email mb-2">
                                        <label class="sr-only" for="signin-email">Mot de passe</label>
                                        <div class="input-group">
                                            <span class="input-group-text icon" id="email">
                                                <svg width="1em" height="1em" viewBox="0 0 448 512" class="bi bi-lock me-2" fill="currentColor">
                                                    <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"/>
                                                </svg>
                                            </span>
                                            <input id="motdpass" name="password" type="password" class="form-control " placeholder="Entrer votre mot de passe" required="required">
                                            <span class="input-group-text icon" id="masque">
                                                <svg width="1em" height="1em" viewBox="0 0 640 512" class="bi bi-eye-slash me-2" fill="currentColor">
                                                    <path d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"/>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="email mb-2">
                                        <label class="sr-only" for="signin-password">Confimer le mot de passe</label>
                                        <div class="input-group">
                                            <span class="input-group-text icon" id="email">
                                                <svg width="1em" height="1em" viewBox="0 0 448 512" class="bi bi-lock me-2" fill="currentColor">
                                                    <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"/>
                                                </svg>
                                            </span>
                                            <input id="confirm" name="confirm" type="password" class="form-control " placeholder="Confirmation de mot de passe" required="required">
                                            <span class="input-group-text icon" id="masque">
                                                <svg width="1em" height="1em" viewBox="0 0 640 512" class="bi bi-eye-slash me-2" fill="currentColor">
                                                    <path d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"/>
                                                </svg>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="auth-form-container text-start">                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                                        <label class="form-check-label" for="RememberPassword">
                                            J'accepte le tèrme de condition
                                        </label>
                                    </div>
                                    <div class="auth-option text-center pt-3">
                                        <button type="submit" name="bouton"class="btn btn-success w-50 theme-btn mx-center">S'inscrire</button>
                                    </div>
                                    <div class="auth-option text-center pt-3">Déjà inscrit <a class="text-link" href="{{ route('login') }}" >Se connecter</a>.
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>  
    <script defer src="{{asset('js/inscription.js')}}"></script> 
    {{-- <script defer src="{{asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>  --}}
    
</body>
</html>
