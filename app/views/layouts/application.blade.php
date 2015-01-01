<!-- C'est votre modèle. Ces lignes seront présentes sur toutes les pages où
vous invoquerez arobas extends('layouts.application') -->
<!doctype html>
<html>
	<head>
		<title>CPi selfies</title>	
		<meta charset="utf-8">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Cookie' rel='stylesheet' type='text/css'>

		<!-- Tous les liens sont réalisés à partir du fichier public  -->
		<link rel="stylesheet" type="text/css" href="/css/cpi2.css">
		<!-- Je charge différents CSS selon que je suis sur tablette ou sur PC -->
		<link rel="stylesheet" media="screen and (min-width: 1024px)" href="/css/cpi2_desktop.css" />
		<link rel="stylesheet" media="screen and (max-width: 1024px)" href="/css/cpi2_mobile.css" />
		<link rel="icon" href="http://cdn.flaticon.com/png/256/55632.png">
	</head>
	<body>
		<!-- Vous incorporerez une section('content') à votre page qui sera executée ici  -->
		@yield('content')

		<!-- On finit avec l'ajout du javascript -->
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>