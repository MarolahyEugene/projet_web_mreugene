<!DOCTYPE html>
<html lang="fr">

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
      <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
      <link id="theme-style" rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
      <link id="theme-style" rel="stylesheet" href="{{asset('css/login.css')}}">
      <!-- <link id="theme-style" rel="stylesheet" href="{{asset('css/inscription.css')}}"> -->

      <title>Authentification</title>
  </head>
  <body class="app app-login p-0">
    <div class="card">
      <div class="card-header">
        <h2 class="auth-heading text-center mb-2">Connexion</h2>        
      </div>
      <div class="card-body">
        <form class="auth-form login-form mt-4">
          <div class="email mb-4">
            <label class="sr-only" for="signin-email">Adresse email</label>
            <div class="input-group">
                <span class="input-group-text" id="email">
                    <svg width="1em" height="1em" viewBox="0 0 448 512" class="bi bi-user me-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"/>
                    </svg>
                </span>
                <input id="signin-email" name="signin-email" type="email" class="form-control signin-email" placeholder="Adresse email" required="required">
            </div>
          </div><!--//form-group-->
          <div class="password mb-4">
            <label class="sr-only" for="signin-password">Mot de passe</label>
            <div class="input-group">
                <span class="input-group-text" id="email">
                    <svg width="1em" height="1em" viewBox="0 0 448 512" class="bi bi-lock me-2" fill="currentColor">
                        <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z"/>
                    </svg>
                </span>
                <input id="signin-password" name="signin-password" type="password" class="form-control signin-password" placeholder="Mot de passe" required="required">
                <span class="input-group-text" id="masque">
                    <svg width="1em" height="1em" viewBox="0 0 640 512" class="bi bi-eye-slash me-2" fill="currentColor">
                        <path d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07 32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z"/>
                    </svg>
                </span>
            </div>
            <div class="extra mt-4 row justify-content-between">
              <div class="col-6">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="RememberPassword">
                  <label class="form-check-label" for="RememberPassword">
                  Se souvenir de moi
                  </label>
                </div>
              </div><!--//col-6-->
              <div class="col-6">
                <div class="forgot-password text-end">
                  <a href="#">Mot de passe oublié</a>
                </div>
              </div><!--//col-6-->
            </div><!--//extra-->
          </div><!--//form-group-->
          <div class="auth-option text-center pt-3">
            <button type="submit" class="btn btn-success">Se connecter</button>
          </div>
        </form>
      </div>
      <div class="text-end px-4 mb-4">Pas encore inscrit <a class="text-link" href="{{ route('inscription') }}" >Créer un compte</a>.</div>
    </div>

    {{-- <script defer src="{{asset('assets/plugins/fontawesome/js/all.min.js')}}"></script>  --}}

  </body>
</html>
