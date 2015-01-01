<?php

$url = parse_url(getenv('CLEARDB_DATABASE_URL'));
$host = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$database = substr($url["path"], 1);

return array(

	'fetch' => PDO::FETCH_CLASS,

	// par défaut Laravel utilise le langage de BDD mysql
	'default' => 'mysql',

	'connections' => array(

		'sqlite' => array(
			'driver'   => 'sqlite',
			'database' => __DIR__.'/../database/production.sqlite',
			'prefix'   => '',
		),
	
		// 'mysql' => array(
		// 	'driver'    => 'mysql',
		// 	'host'      => 'localhost',
		// 	'database'  => 'selfie', // le nom de la BDD que nous avons créée
		// 	'username'  => 'root', // les identifiants de connexion à la BDD
		// 	'password'  => 'root', // avec le MDP
		// 	'charset'   => 'utf8',
		// 	'collation' => 'utf8_unicode_ci',
		// 	'prefix'    => '',
		// ),

// PRODUCTION
		
		

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => $host,
      'database'  => $database,
      'username'  => $username,
      'password'  => $password,
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		),

	),

	// nom de la table de migrations (il y a un dossier migrations)

	'migrations' => 'migrations',

	'redis' => array(

		'cluster' => false,

		'default' => array(
			'host'     => '127.0.0.1',
			'port'     => 6379,
			'database' => 0,
		),

	),

);
