@extends('layouts.application')
@section('content')
@include('layouts.nav')
<div class="container">
	<div class="main-page">
		<h2>{{ HTML::linkAction('SelfiesController@show', $selfie-> title, array($selfie-> id), array('class' => 'selfie')) }}</h2>
        <p>ajouté par {{ HTML::linkAction('UsersController@show', $selfie-> user-> email, array($selfie-> user-> id)) }}</p>
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