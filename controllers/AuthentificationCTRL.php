<?php
// define variables and set to empty values
$genre = $nom = $prenom = $telephone = $email = $email2 = $adresse = $cp = $ville = $user = $mdp = $mdp2 = $newsletter = "";
$genreErr = $nomErr = $prenomErr = $telephoneErr = $emailErr = $email2Err = $email2bisErr = $adresseErr = $cpErr = $villeErr = $userErr = $mdpErr = $mdp2Err = $mdp2bisErr = $newsletterErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["genre"])) {
    $genreErr = "*&nbsp;Genre est obligatoire";
  } else {
    $genre = test_input($_POST["genre"]);
  }
  if (empty($_POST["nom"])) {
    $nomErr = "*&nbsp;Renseigner votre nom";
  } else {
    $nom = test_input($_POST["nom"]);
  }
  if (empty($_POST["prenom"])) {
    $prenomErr = "*&nbsp;Renseigner votre prénom";
  } else {
    $prenom = test_input($_POST["prenom"]);
  }
  if (empty($_POST["telephone"])) {
    $telephoneErr = "*&nbsp;Renseigner votre numéro de téléphone";
  } else {
    $telephone = test_input($_POST["telephone"]);
    if (preg_match("@^(0[1-9](-| |)([0-9]{2}(-| |)){3}[0-9]{2})$@", "$telephone")) {
      $telephone = test_input($_POST["telephone"]);
    } else {
      $telephoneErr = "*&nbsp;Le numéro de téléphone n'est pas correct";
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "*&nbsp;Email a renseigné";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*&nbsp;format invalide de l'email";
    }
  }
  if (empty($_POST["email2"])) {
    $email2Err = "<br>*&nbsp;Email a renseigné";
  } else {
    $email2 = test_input($_POST["email2"]);
    // check if e-mail address is well-formed
    if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {
      $email2Err = "<br>*&nbsp;format invalide de l'email";
    }
  }
  if ($email <> $email2) {
    $email2bisErr = "<br>*&nbsp;Les deux adresses mails sont différentes";
  }
  if (empty($_POST["adresse"])) {
    $adresseErr = "*&nbsp;Renseigner votre adresse";
  } else {
    $adresse = test_input($_POST["adresse"]);
  }
  if (empty($_POST["cp"])) {
    $cpErr = "*&nbsp;Renseigner votre code postal";
  } else {
    $cp = test_input($_POST["cp"]);
  }
  if (empty($_POST["ville"])) {
    $villeErr = "*&nbsp;Renseigner votre ville";
  } else {
    $ville = test_input($_POST["ville"]);
  }
  if (empty($_POST["user"])) {
    $userErr = "*&nbsp;Renseigner votre nom d'utilisateur";
  } else {
    $user = test_input($_POST["user"]);
  }


  if (empty($_POST["mdp"])) {
    $mdpErr = "<br>*&nbsp;Mot de passe a renseigner";
  } else {
    $mdp = test_input($_POST["mdp"]);
    // test si password ok
    if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $mdp)) {
      $mdpErr = "*&nbsp;Le mot de passe n'est pas correct";
      }
  }
  if (empty($_POST["mdp2"])) {
    $mdp2Err = "<br>*&nbsp;Mot de passe a renseigner";
  } else {
    $mdp2 = test_input($_POST["mdp2"]);
    // test si password ok
    if(!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $mdp2)) {
      $mdp2Err = "<br>*&nbsp;Le mot de passe n'est pas correct";
      }
  }
  if ($mdp <> $mdp2) {
    $mdp2bisErr = "<br>*&nbsp;Les deux mots de passe sont différentes";
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

include '../views/Inscription.php';