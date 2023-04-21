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
    <?php
    include_once "../controllers/AuthentificationUpdateCTRL.php";
    ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-7 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-4">Modification d'un compte utilisateur</h5>
                            <form method="POST" action="../controllers/AuthentificationUpdateCTRL.php" class="needs-validation" novalidate>
                                <p><span class="error">* champs requis</span></p>
                                <div class="row">
                                    <div class="col-4">
                                        <input class="form-check-input" type="radio" name="genre" id="genre" value="homme" <?php if (isset($genre) && $genre == "homme") echo "checked"; ?> required>
                                        <label class="form-check-label" for="genre">Monsieur</label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="radio" name="genre" id="genre" value="femme" <?php if (isset($genre) && $genre == "femme") echo "checked"; ?> required>
                                        <label class="form-check-label" for="genre2">Madame</label>
                                    </div>
                                    <div class="col-4">
                                        <input class="form-check-input" type="radio" name="genre" id="genre" value="autre" <?php if (isset($genre) && $genre == "autre") echo "checked"; ?> required>
                                        <label class="form-check-label" for="genre2">Autres</label>
                                    </div>
                                </div>
                                <br>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nom" type="text" placeholder="Nom" aria-label="Nom" value="Duthoit" name="nom" required>
                                    <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                                    <span class="error"><?php echo $nomErr; ?></span>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="prenom" type="text" placeholder="Prénom" aria-label="Prenom" name="prenom" value="Christophe" required>
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
                                    <input type="text" class="form-control" id="adresse" placeholder="Adresse" name="adresse" value="<?php echo $adresse; ?>" required>
                                    <label for="adresse" class="col-sm-2 col-form-label">Adresse</label>
                                    <span class="error"><?php echo $adresseErr; ?></span>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="cp" placeholder="Code&nbsp;postal" name="cp" value="<?php echo $cp; ?>" required>
                                    <label for="cp" class="col-sm-2 col-form-label">Code&nbsp;postal&nbsp;:</label>
                                    <span class="error"><?php echo $cpErr; ?></span>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="ville" placeholder="Ville" name="ville" value="<?php echo $ville; ?>" required>
                                    <label for="ville" class="col-sm-2 col-form-label">Ville&nbsp;:</label>
                                    <span class="error"><?php echo $villeErr; ?></span>
                                </div>
                                <div class="form-floating mb-3">
                                    <!-- Modifier en type text car ce n'est pas sécurisé pour le login, on préférera pour une inscription -->
                                    <input type="text" id="user" class="form-control" placeholder="Identifiant" name="user" value="<?php echo $user; ?>" required>
                                    <label class="form-label" for="user">Utilisateur&nbsp;:</label>
                                    <span class="error"><?php echo $userErr; ?></span>
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
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="newsletter">
                                    <label class="form-check-label" for="newsletter">Cocher si vous souhaitez obtenir la newsletter&thinsp;?</label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Modification du compte</button>
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