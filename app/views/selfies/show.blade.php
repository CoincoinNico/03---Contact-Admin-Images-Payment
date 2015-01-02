@extends('layouts.application')
@section('content')
@include('layouts.nav.navOther')
<div class="container">
	<div class="main-page">
		<h2>{{ $selfie-> title }}</h2>
    <img src="{{{ $selfie-> picture-> url('prompt') }}}" class="img-thumbnail selfie-pic">
    <p>ajouté par {{ HTML::linkAction('UsersController@show', $selfie-> user-> email, array($selfie-> user-> id)) }}, prix: {{ $selfie -> price }} €</p>
    <form action="{{url('pay')}}" method="POST">
      <script
        src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
        data-key="{{Config::get('stripe.stripe.public')}}"
        data-amount="{{ $selfie-> price }}"
        data-name="Vente de photos"
        data-description="{{ $selfie-> title. ", ". $selfie-> price  }} €"
        data-image="{{ $selfie-> picture-> url('prompt') }}">
      </script>
    </form>
	</div>

	<div id="disqus_thread"></div>
  <script type="text/javascript">
      /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
      var disqus_shortname = 'mardicpi'; // required: replace example with your forum shortname
      var disqus_config = function () {
			  this.language = "fr";
			};
      /* * * DON'T EDIT BELOW THIS LINE * * */
      (function() {
          var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
          dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
      })();
  </script>
</div>

@endsection