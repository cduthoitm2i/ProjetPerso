<?php

 

/* 
 * AuthentificationCTRL.php
 */

/* Ajout des contrôles

*/

$message = "";
$message2 = "Veillez saisir un login et un mot de pass";
/* Création variable $email dans laquelle on affecte la saisie de l'input mail de la page login.html (voir name="mail") dans la balise <input>*/

/* Récupération des variables de la page de Login*/
$user = filter_input(INPUT_POST, "user");
/* Création variable $mdp dans laquelle on affecte la saisie de l'input mdp de la page login.html (voir  name="mdp") dans la balise <input> */
$password = filter_input(INPUT_POST, "password");
/* Vérifie la présence des deux informations, mais vient en doublon de required dans la balise <input> */
if (empty($user) || empty($password)) {
    echo $message2;
}


/* Récupération des variables de la page d'inscription*/
$genre = filter_input(INPUT_POST, "genre");
$genre2 = filter_input(INPUT_POST, "genre2");
/* $nom = filter_input(INPUT_POST, "nom"); */
$prenom = filter_input(INPUT_POST, "prenom");
$telephone = filter_input(INPUT_POST, "telephone");
$email = filter_input(INPUT_POST, "email");
$email2 = filter_input(INPUT_POST, "email2");
$adresse = filter_input(INPUT_POST, "adresse");
$cp = filter_input(INPUT_POST, "cp");
$ville = filter_input(INPUT_POST, "ville");
/* Déjà défini plus haut */
/* $user = filter_input(INPUT_POST, "user"); */
/* $mdp = filter_input(INPUT_POST, "mdp"); */

$mdp2 = filter_input(INPUT_POST, "mdp2");

$rememberPasswordCheck = filter_input(INPUT_POST, "rememberPasswordCheck");
$newsletter = filter_input(INPUT_POST, "newsletter");




/* Contrôle du nom */

$nomErr = $emailErr = $genreErr = "";
$nom ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["nom"])) {
    $nomErr = "Le nom est obligatoire";
  } else {
    $nom = test_input($_POST["nom"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-']*$/",$nom)) {
      $nomErr = "Mettre juste des lettres en capital ou en minuscule";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "L'adresse mail est obligatoire";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "L'adresse mail n'est pas valide, veillez corriger";
    }
  }
}

// Définition d'une fonction
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



/* Concaténation des deux variables séparées par un / */

/* $message = "$user/$password"; */
/* echo $message; */

include '../views/Inscription.php';

?>