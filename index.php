<?php

 /**********************************************************************************************\
 *                                                                                              *
 * L'index ici ne sert qu'a redirigé vers le contrôleur 'displayUser.php'.                      *
 * Le contrôleur 'displayUser.php' verifie l'URL (valeurs après le '?' style index.php?valeur). *
 * La/les valeur(s) lui indique quel modèle (requète) éxecuter                                  *
 * Et aussi dans quel vue afficher le résultat de tout ça                                       *
 *                                                                                              *
 * Allez jeter un oeil sur '/controllers/displayUsers.php'                                      *
 *                                                                                              *
 \**********************************************************************************************/

$default = ''; //Vue par défaut essayez avec 'list', 'get' ou 'set'

if ($default == null) { //Si la vue par défaut n'est pas définie alors on dit au contrôleur d'agir comme si il recevait 'list'
    header('Location:/MVC-Demo/controllers/displayUsers.php?list');
} else { //Sinon on lui envoi $defaut
    header('Location:/MVC-Demo/controllers/displayUsers.php?' . $default);
}
