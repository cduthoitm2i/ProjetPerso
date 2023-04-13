<?php



/* 
 * AuthentificationCTRL.php
 */

/* Ajout des contrôles*/
/* Ne fonctionne pas !!*/
require_once '../controllers/controleER.php';

$message = "";
$erreur = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
/* Récupération des variables de la page d'inscription*/
$genre = filter_input(INPUT_POST, "genre");
$genre2 = filter_input(INPUT_POST, "genre2");
$nom = filter_input(INPUT_POST, "nom");
$prenom = filter_input(INPUT_POST, "prenom");
$telephone = filter_input(INPUT_POST, "telephone");
$email = filter_input(INPUT_POST, "email");
$email2 = filter_input(INPUT_POST, "email2");
$adresse = filter_input(INPUT_POST, "adresse");
$cp = filter_input(INPUT_POST, "cp");
$ville = filter_input(INPUT_POST, "ville");
$user = filter_input(INPUT_POST, "user");
$mdp = filter_input(INPUT_POST, "mdp");
$mdp2 = filter_input(INPUT_POST, "mdp2");

$newsletter = filter_input(INPUT_POST, "newsletter");
}



/* Contrôle du nom */

if ($genre == null) {
  $erreur++;
  $message .= "<br>Civilité obligatoire";
}

// on contrôle la présence du nom
if (empty($nom)) {
  $erreur++;
  $message .= "<br>Nom obligatoire";
}

// on contrôle la présence du prénom
if (empty($prenom)) {
  $erreur++;
  $message .= "<br>Prénom obligatoire";
}

// on contrôle que les deux adresses mails sont identique puis le format de l'adresse mail pour une regex
if ($email != $email2) {
  $erreur++;
  $message .= "<br>Les 2 e-mails sont différents";
} else {
  if (preg_match(" /^.+@.+\.[a-zA-Z]{2,}$/ ", $email)) {
    $erreur++;
    $message .= "<br>L'adresse e-mail est valide";
  }
}

if ($mdp != $mdp2) {
  $message .= "<br>Les 2 mots de passe sont différents";
} else {
  if (preg_match(" /^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,10}$/ ", $mdp)) {
    $erreur++;
    $message .= "<br>L'adresse e-mail est valide";
  }
}




if (preg_match ( " #^[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}[-/ ]?[0-9]{2}?$# ", $telephone ) ){
  $erreur++;
  $message .= "<br>Le téléphone est valide";
}







// On utilise une fonction issu du fichier ControlesER.php






/* Concaténation des deux variables séparées par un / */


// echo $message;

include '../views/Inscription.php';
