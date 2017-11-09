<?php

$bdd = mysqli_connect("localhost","root","rooted","mvc");

if (!$bdd) {
	echo "Erreur de connexion MySQL" . PHP_EOL;
	exit;
}
  //N'oublie pas de modifier le nom 
  $project_name = 'MVC-Demo';