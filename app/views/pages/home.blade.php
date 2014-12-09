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

		<div id="video-container">
			<video id="bg" src="videos/selfievideo.mp4" autoplay="true" loop="true" muted="true"></video>
		</div>

		@include('layouts.nav')

		<h1>Laissez-nous vos meilleurs selfies !!!</h1>
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