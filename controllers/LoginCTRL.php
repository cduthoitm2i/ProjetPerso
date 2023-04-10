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



include '../views/Login.php';
