<!DOCTYPE html>
<html lang="en">

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
    <section>




        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-4">Création d'un compte utilisateur</h5>
                            <!--<form method="POST" action="../controllers/AuthentificationCTRL.php">-->
                            <p><span class="error">* champs requis</span></p>
                            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                <div class="row">

                                    <div class="col-4">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="genre" value="1">
                                        <label class="form-check-label" for="genre">
                                            Monsieur
                                        </label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="genre2" value="2">
                                        <label class="form-check-label" for="genre2">
                                            Madame
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating mb-3">
                                        <label for="nom" class="col-sm-2 col-form-label">Nom&nbsp;:</label>
                                        <input class="form-control" id="nom" type="text" placeholder="Nom" aria-label="Nom" aria-describedby="NomAide" value="<?php echo $nom; ?>">
                                        <small id="NomAide" class="form-text text-muted">Saisir votre nom</small>
                                        <span class="error">* <?php echo $nomErr; ?></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating mb-3">
                                        <label for="prenom" class="col-sm-2 col-form-label">Prénom&nbsp;:</label>
                                        <input class="form-control" id="prenom" type="text" placeholder="Prénom" aria-label="Prenom" aria-describedby="PrenomAide">
                                        <small id="PrenomAide" class="form-text text-muted">Saisir votre prénom</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating mb-3">
                                        <label for="telephone" class="col-sm-2 col-form-label">Téléphone&nbsp;:</label>
                                        <input type="text" class="form-control" id="telephone" placeholder="Téléphone" aria-describedby="TelephoneAide">
                                        <small id="TelephoneAide" class="form-text text-muted">Saisir votre numéro de téléphone</small>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-floating mb-3">
                                        <label for="email" class="col-sm-2 col-form-label">Email&nbsp;:</label>
                                        <input type="email" class="form-control" id="email" placeholder="E-mail" aria-describedby="MailAide">
                                        <small id="MailAide" class="form-text text-muted">Saisir votre adresse mail</small>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-floating mb-3">
                                        <label for="email2" class="col-sm-2 col-form-label">Email&nbsp;:</label>
                                        <input type="email" class="form-control" id="email2" placeholder="E-mail" aria-describedby="Mail2Aide">
                                        <small id="Mail2Aide" class="form-text text-muted">Saisir une nouvelle fois votre adresse mail</small>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-floating mb-3">
                                        <label for="adresse" class="col-sm-2 col-form-label">Adresse&nbsp;:</label>
                                        <input type="text" class="form-control" id="adresse" placeholder="Adresse" aria-describedby="AdresseAide">
                                        <small id="AdresseAide" class="form-text text-muted">Saisir votre adresse</small>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-floating mb-3">
                                        <label for="cp" class="col-sm-2 col-form-label">Code&nbsp;postal&nbsp;:</label>
                                        <input type="text" class="form-control" id="cp" placeholder="Code&nbsp;postal" aria-describedby="CpAide">
                                        <small id="CpAide" class="form-text text-muted">Saisir votre code postal</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-floating mb-3">
                                        <label for="ville" class="col-sm-2 col-form-label">Ville&nbsp;:</label>
                                        <input type="text" class="form-control" id="ville" placeholder="Ville" aria-describedby="VilleAide">
                                        <small id="VilleAide" class="form-text text-muted">Saisir votre ville</small>
                                    </div>
                                </div>


                                <div class="form-floating mb-3">
                                    <label class="form-label" for="user">Utilisateur&nbsp;:</label>
                                    <!-- Modifier en type text car ce n'est pas sécurisé pour le login, on préférera pour une inscription -->
                                    <input type="text" id="user" class="form-control" placeholder="Identifiant" name="identify" aria-describedby="IdentifiantAide">
                                    <small id="IdentifiantAide" class="form-text text-muted">Saisir votre identifiant</small>
                                </div>
                                <div class="form-floating mb-3">
                                    <label class="form-label" for="mdp">Mot de passe&nbsp;:</label>
                                    <input type="password" id="mdp" class="form-control" placeholder="Mot de passe" autocomplete="on" name="password" aria-describedby="mdpAide">
                                    <small id="mdpAide" class="form-text text-muted">Saisir votre mot de passe</small>
                                </div>
                                <div class="form-floating mb-3">
                                    <label class="form-label" for="mdp2">Mot de passe&nbsp;:</label>
                                    <input type="password" id="mdp2" class="form-control basicAutoComplete" placeholder="Mot de passe" autocomplete="on" name="password2" aria-describedby="mdp2Aide">
                                    <small id="mdp2Aide" class="form-text text-muted">Confirmer à nouveau votre mot de passe</small>
                                </div>


                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">Mot de passe visible</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="newsletter">
                                    <label class="form-check-label" for="newsletter">Voulez-vous la newsletter&thinsp;?</label>
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
                            <?php
                            echo "<h2>Test de saisie:</h2>";
                            echo $nom;
                            echo "<br>";
                            echo $email;
                            echo "<br>";
                            ?>
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