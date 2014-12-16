<!-- Ma page d'accueil a une image d'arrière plan, pas mes autres pages par contre
j'utilise la barre de navigation sur les deux pages, plutôt que de répéter le code, je l'inclus ici
et ajouterai arobas include('layouts.nav') pour l'inclure sur les autres pages. -->

<!-- Ma barre de navigation -->
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><span>CPi selfies<span></a>
    </div>

    <!-- Tous ces éléments seront dans le menu déroulant sur la version mobile -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/selfies">Les Selfies</a></li>
        <li class="dropdown">
          <!-- Permet de vérifier si l'utilisateur est connecté. Intégré à Laravel -->
          @if(Auth::check())
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{"Bonjour ". Auth::user()->username. " !"}}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <!-- Lien qui permet d'actionner l'action 'add' du controller 'Selfie'
              en lui passant l'id de l'utilisateur connecté dans l'array -->
              <li>{{HTML::linkAction('SelfiesController@create', 'Ajouter un selfie', array(Auth::user()-> id))}}</li>
              <li class="divider"></li>
              <!-- Lien qui ne dirige pas vers une  -->
              <li>{{HTML::link('users/logout', 'Déconnexion')}}</li>
            </ul>
          @else
            <li>{{HTML::linkAction('UsersController@login', 'Connexion')}}</li>
            <li>{{HTML::linkAction('UsersController@create', 'Inscription')}}</li>
          @endif
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>