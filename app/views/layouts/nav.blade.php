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

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/selfies">Les Selfies</a></li>
        <li class="dropdown">
          @if(Auth::check())
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{"Bonjour ". Auth::user()->username. " !"}}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>{{HTML::linkAction('SelfiesController@add', 'Ajouter un selfie', array(Auth::user()-> id))}}</li>
              <li class="divider"></li>
              <li>{{HTML::link('users/logout', 'Déconnexion')}}</li>
            </ul>
          @else
            <li>{{HTML::linkAction('UsersController@login', 'Connexion')}}</li>
            <li>{{HTML::linkAction('UsersController@registration', 'Inscription')}}</li>
          @endif
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>