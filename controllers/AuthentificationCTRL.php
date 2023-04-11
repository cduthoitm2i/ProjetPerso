<?php



/* 
 * AuthentificationCTRL.php
 */

/* Ajout des contrôles

*/
require_once '../controllers/libs/controleER.php';


$message = "";
$erreur = 0;

/* Récupération des variables de la page d'inscription*/
$civilite = filter_input(INPUT_POST, "civilite");
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




/* Contrôle du nom */

$nomErr = $prenomErr = $errMail = $errPass = "";



// Contrôle de la bonne saisie d'un nom
if ($civilite == null) {
  $erreur++;
  $message .= "<br>Cocher l'une des cases";
}
if (empty($nom)) {
  $erreur++;
  $message .= "<br>Nom obligatoire";
}
if (empty($prenom)) {
  $erreur++;
  $message .= "<br>Prénom obligatoire";
}






echo $message;

include '../views/Inscription.php';
