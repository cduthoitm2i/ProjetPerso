<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS et JS Bootstrap 5 (version CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- Ma CSS -->
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>

  <header>
    <?php
    include '../views/partials/header.php';
    ?>
  </header>
  <nav>
    <?php
    include '../views/partials/nav.php';
    ?>
  </nav>
  <?php require_once("../inc/init.inc.php");


  //--------------------------------- TRAITEMENTS PHP ---------------------------------//
  $civilite = $nom = $prenom = $telephone = $email = $email2 = $adresse = $cp = $ville = $pseudo = $mdp = $mdp2 = $newsletter = $sujet = "";
  $civiliteErr = $nomErr = $prenomErr = $telephoneErr = $emailErr = $email2Err = $email2bisErr = $adresseErr = $cpErr = $villeErr = $pseudoErr = $mdpErr = $mdp2Err = $mdp2bisErr = $newsletterErr = $sujetErr = "";

  if ($_POST) {
    //debug($_POST);
    $verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']);
    if (!$verif_caractere && (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20)) // 
    {
      $contenu .= "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>";
    }
    if (empty($_POST["civilite"])) {
      $civiliteErr = "*&nbsp;Civilité est obligatoire";
    } else {
      $civilite = test_input($_POST["civilite"]);
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
      // Vérifie si le format de l'email est valide
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "*&nbsp;format invalide de l'email";
      }
    }
    if (empty($_POST["email2"])) {
      $email2Err = "<br>*&nbsp;Email a renseigné";
    } else {
      $email2 = test_input($_POST["email2"]);
      // Vérifie si le format de l'email est valide
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
    if (empty($_POST["pseudo"])) {
      $pseudoErr = "*&nbsp;Renseigner votre nom d'utilisateur";
    } else {
      $peudo = test_input($_POST["pseudo"]);
    }


    if (empty($_POST["mdp"])) {
      $mdpErr = "<br>*&nbsp;Mot de passe a renseigner";
    } else {
      $mdp = test_input($_POST["mdp"]);
      // test si password ok
      if (!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $mdp)) {
        $mdpErr = "*&nbsp;Le mot de passe n'est pas correct";
      }
    }
    if (empty($_POST["mdp2"])) {
      $mdp2Err = "<br>*&nbsp;Mot de passe a renseigner";
    } else {
      $mdp2 = test_input($_POST["mdp2"]);
      // test si password ok
      if (!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $mdp2)) {
        $mdp2Err = "<br>*&nbsp;Le mot de passe n'est pas correct";
      }
    }
    if ($mdp <> $mdp2) {
      $mdp2bisErr = "<br>*&nbsp;Les deux mots de passe sont différentes";
    } else {
      $membre = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'");
      if ($membre->num_rows > 0) {
        $contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
      } else {

        // $_POST['mdp'] = md5($_POST['mdp']);
        foreach ($_POST as $indice => $valeur) {
          $_POST[$indice] = htmlEntities(addSlashes($valeur));
        }
        $tattributesValues = array();
        $tattributesValues['nom'] = $nom;
        $tattributesValues['prenom'] = $prenom;
        $tattributesValues['nom'] = $nom;
        $tattributesValues['telephone'] = $telephone;
        $tattributesValues['email'] = $email;
        $tattributesValues['adresse'] = $adresse;
        $tattributesValues['cp'] = $cp;
        $tattributesValues['ville'] = $ville;
        $tattributesValues['pseudo'] = $pseudo;
        // Cryptage du mot de passe
        $mdp = password_hash("mdp", PASSWORD_BCRYPT);
        $tattributesValues['mdp'] = $mdp;
        executeRequete("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, cp, adresse) VALUES ('$_POST[pseudo]', '$_POST[mdp]', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[civilite]', '$_POST[ville]', '$_POST[cp]', '$_POST[adresse]')");
        $contenu .= "<div class='validation'>Vous êtes inscrit à notre site web. <a href=\"connexion.php\"><u>Cliquez ici pour vous connecter</u></a></div>";
      }
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  //--------------------------------- AFFICHAGE HTML ---------------------------------//
  ?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-4">Création d'un compte utilisateur</h5>
              <form method="POST" action="" class="needs-validation" novalidate>
                <p><span class="error">* champs requis</span></p>
                <div class="form-floating mb-3">
                  <!-- Modifier en type text car ce n'est pas sécurisé pour le login, on préférera pour une inscription -->
                  <input type="text" id="user" class="form-control" placeholder="Identifiant" name="pseudo" maxlength="20" pattern="[a-zA-Z0-9-_.]{1,20}" value="<?php echo $pseudo; ?>" required>
                  <label class="form-label" for="user">Pseudo&nbsp;:</label>
                  <span class="error"><?php echo $pseudoErr; ?></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" id="mdp" class="form-control" placeholder="Mot de passe" autocomplete="on" name="mdp" value="" required>
                  <label class="form-label" for="mdp">Mot de passe&nbsp;:</label>
                  <span class="error"><?php echo $mdpErr; ?></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" id="mdp2" class="form-control basicAutoComplete" placeholder="Mot de passe" autocomplete="on" name="mdp2" aria-describedby="mdp2Aide" value="" required>
                  <label class="form-label" for="mdp2">Mot de passe&nbsp;:</label>
                  <small id="mdp2Aide" class="form-text text-muted">Saisir une nouvelle fois votre mot de passe</small>
                  <span class="error"><?php echo $mdp2Err; ?></span>
                </div>
                <div class="row">
                  <div class="col-12>
                                        <label class=" form-check-label" for="civilite">Civilité&nbsp;:</label>
                    <input class="form-check-input" type="radio" name="civilite" checked="" value="m" <?php if (isset($civilite) && $civilite == "m") echo "checked"; ?> required> Monsieur</input>&nbsp;
                    <input class="form-check-input" type="radio" name="civilite" value="f" <?php if (isset($civilite) && $civilite == "f") echo "checked"; ?> required> Madame</input>&nbsp;
                  </div>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" id="nom" type="text" placeholder="Nom" aria-label="Nom" value="<?php echo $nom; ?>" name="nom" required>
                  <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                  <span class="error"><?php echo $nomErr; ?></span>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" id="prenom" type="text" placeholder="Prénom" aria-label="Prenom" name="prenom" value="<?php echo $prenom; ?>" required>
                  <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                  <span class="error"><?php echo $prenomErr; ?></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="telephone" placeholder="Téléphone" name="telephone" value="<?php echo $telephone; ?>" required>
                  <label for="telephone" class="col-sm-2 col-form-label">Téléphone</label>
                  <span class="error"><?php echo $telephoneErr; ?></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="<?php echo $email; ?>" required>
                  <label class="sr-only" for="email">E-mail</label>
                  <span class="error"><?php echo $emailErr; ?></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="email2" placeholder="E-mail" name="email2" aria-describedby="Mail2Aide" value="<?php echo $email2; ?>" required>
                  <label for="email2" class="sr-only col-sm-2 col-form-label">E-mail</label>
                  <small id="Mail2Aide" class="form-text text-muted">Saisir une nouvelle fois votre adresse mail</small>
                  <span class="error"><?php echo $email2Err; ?><?php echo $email2bisErr; ?></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="adresse" placeholder="Adresse" name="adresse" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés :  a-zA-Z0-9-_." value="<?php echo $adresse; ?>" required>
                  <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
                  <span class="error"><?php echo $adresseErr; ?></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="cp" placeholder="Code&nbsp;postal" name="cp" value="<?php echo $cp; ?>" required>
                  <label for="cp" class="col-sm-2 col-form-label">Code&nbsp;postal&nbsp;:</label>
                  <span class="error"><?php echo $cpErr; ?></span>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="ville" placeholder="Ville" pattern="[a-zA-Z0-9-_.]{5,15}" name="ville" value="<?php echo $ville; ?>" required>
                  <label for="ville" class="col-sm-2 col-form-label">Ville&nbsp;:</label>
                  <span class="error"><?php echo $villeErr; ?></span>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                  <label class="form-check-label" for="rememberPasswordCheck">Mot de passe visible</label>
                </div>
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="newsletter">
                  <label class="form-check-label" for="newsletter">Cocher si vous souhaitez obtenir la newsletter&thinsp;?</label>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Créer le compte</button>
                </div>
                <label>
                  <?php
                  // Si la variable $message existe alors on affiche son contenu
                  if (isset($message)) {
                    echo $message;
                  }
                  ?>
                </label>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <?php
    include '../views/partials/footer.php';
    ?>
  </footer>
</body>

</html>