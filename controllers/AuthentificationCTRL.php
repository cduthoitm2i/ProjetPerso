<?php

 

/* 
 * AuthentificationCTRL.php
 */

/* Ajout des contrôles

*/

$message = "";


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




/* Contrôle du nom */

$nomErr = $prenomErr = $errMail = $errPass = "";


if(isset($_POST['submit'])) {
  // Contrôle de la bonne saisie d'un nom
  if(empty($_POST['nom'])) {
    $nomErr= 'Renseigner votre nom';
  }
  else if(empty($_POST['prenom'])) {
    $prenomErr= 'Renseigner votre prénom';
  }


  // contrôle du format de l'adresse mail
  else if(empty($_POST['email'])) {
    $errEmail = 'Renseigner une adresse mail valide';
  }
  // contrôle que le mots de passe est renseigné et qu'il correspond à bon format fort
  else if(empty($_POST['mdp']) || (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["mdp"]) === 0)) {
    $errPass = '<p class="errText">Le mot de passe doit contenir au moins 8 caractères et doit contenir au moins une lettre capitale, une lettre minuscule et chiffre</p>';
  } else {
    echo "l'inscription est complète";
  }
}




/* Concaténation des deux variables séparées par un / */

$message = "$nom/$mdp";
echo $message;

include '../views/Inscription.php';
