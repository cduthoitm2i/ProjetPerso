<?php

/* 
 * AuthentificationCTRL.php
 */

$message = "";

$pseudo = filter_input(INPUT_POST, "pseudo");
$mdp = filter_input(INPUT_POST, "mdp");

$message = "$pseudo/$mdp";

//echo $message;

include '../views/Authentification.php';

?>

