@extends('layouts.application')
@section('content')

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&appId=1098197563588078&version=v2.0";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="heading">
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
		      <a class="navbar-brand" href="#"><span>CPi selfies<span></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="/about">Contact</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">En savoir plus<span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="#">Presse</a></li>
		            <li><a href="#">Alumni</a></li>
		            <li><a href="#">Concours du meilleur selfie</a></li>
		            <li class="divider"></li>
		            <li><a href="#">Déconnexion</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>

		<h1>Laissez-nous vos meilleurs selfies !</h1>
		<div class="facebook">
			<div class="fb-like" data-href="https://www.facebook.com/japprendslecode" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>
		</div>
	</div>

	<div id="featured">
	  <div class="container">
	    <div class="row">
	      <section class="col-md-4">
	        <span class="pennant"><span class="fa fa-globe"></span></span>
	        <h3>Voyagez</h3>
	        <p>Prenez des selfies lors de vos voyages autour du monde.</p>
	      </section>
	      <section class="col-md-4">
	        <span class="pennant"><span class="fa fa-map-marker"></span></span>
	        <h3>Localisez</h3>
	        <p>Proposez un lieu de rencontre aux alumnis.</p>
	      </section>
	      <section class="col-md-4">
	        <span class="pennant"><span class="fa fa-institution"></span></span>
	        <h3>Connectez</h3>
	        <p>Rencontrez des alumnis autour du monde.</p>
	      </section>
	    </div>
	  </div>
	</div>

	<div id="last">
		<div class="container">
			<h2 class="center">Des selfies aux quatre coins du monde</h2>
			<p class="center">Soyez les ambassadeurs de CPi</p>		
			<div class="row center">
	      <div class="col-sm-12 col-md-4">
	      	<div class="row">
				    <div class="thumbnail">
				      <img src="http://www.imcreator.com/wp-content/uploads/2014/01/wpid-Featured_Picture82-620x412.jpg" alt="selfie biker">
				      <div class="caption">
				        <h3>Selfie <span>Biker</span></h3>
				        <p>San Francisco</p>
				        <p><a href="#">View more</a></p>
				      </div>
				    </div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
	      	<div class="row">
				    <div class="thumbnail">
				      <img src="http://www.rantlifestyle.com/wp-content/uploads/2014/05/033.jpg" alt="selfie requin">
				      <div class="caption">
				        <h3>Selfie <span>Shark</span></h3>
				        <p>Miami</p>
				        <p><a href="#">View more</a></p>
				      </div>
				    </div>
					</div>
				</div>
				<div class="col-sm-12 col-md-4">
	      	<div class="row">
				    <div class="thumbnail">
				      <img src="http://images.entertainment.ie/images_content/rectangle/620x372/round-world-selfie.jpg" alt="selfie biker">
				      <div class="caption">
				        <h3>Selfie <span>Indonesia</span></h3>
				        <p>Lombok</p>
				        <p><a href="http://entertainment.ie/life/Watch-Man-documents-his-round-the-world-trip-with-some-amazing-selfies/260566.htm">Read Alex Chacon's story</a></p>
				      </div>
				    </div>
					</div>
				</div>
		  </div>
		</div>
	</div>
@stop