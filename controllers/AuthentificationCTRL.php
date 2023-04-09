<?php

 

/* 
 * AuthentificationCTRL.php
 */

/* Ajout des contrôles

*/

$message = "";
$message2 = "Veillez saisir un login et un mot de pass";
/* Création variable $email dans laquelle on affecte la saisie de l'input mail de la page login.html (voir name="mail") dans la balise <input>*/
$identify = filter_input(INPUT_POST, "identify");
/* Création variable $mdp dans laquelle on affecte la saisie de l'input mdp de la page login.html (voir  name="mdp") dans la balise <input> */
$mdp = filter_input(INPUT_POST, "mdp");
/* Vérifie la présence des deux informations, mais vient en doublon de required dans la balise <input> */
if (empty($identify) || empty($mdp)) {
    echo $message2;
}

/* Vérifie la bonne forme de l'adresse mail, mais faut repasser en type text
if(filter_var($identify, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse e-mail est valide";
  }else{
    echo "L'adresse e-mail n'est pas valide";
  }
  */




/* Concaténation des deux variables séparées par un / */

$message = "$identify/$mdp";
echo $message;

include '../views/Login.php';

?>