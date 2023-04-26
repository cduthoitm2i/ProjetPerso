<!DOCTYPE html>
<!-- modele.php
http://localhost:3000/ProjetPersoInfoAvions/views/modele.php -->
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
    <title>Mon modèle de site</title>
</head>

<body>
    <header>
        <?php
        include '../views/partials/header.php';
        ?>
    </header>
    <nav>
        <?php
        $message = "";

        $submit = filter_input(INPUT_POST, "submit");
        
        if (isset($submit)) {
            $pseudo = filter_input(INPUT_POST, "pseudo");
            $mdp = filter_input(INPUT_POST, "mdp");
            // On test si les deux champs ne sont pas vide, sinon on mettrait un required dans la balise input
            if ($pseudo == null || $mdp == null) {
                setcookie("pseudo", "");
                setcookie("mdp", "");
                $message = "Toutes les saisies sont obligatoires";
            } else {
                $message = "Jusque là tout va bien !!!";
                // On test si le bouton "Se souvenir de moi est coché", on reprend la valeur chkSeSouvenir de la balise input
                $chkSeSouvenir = filter_input(INPUT_POST, "chkSeSouvenir");
                // On test si c'est coché
                if ($chkSeSouvenir != null) {
                    $message = "Coché !!!";
                    // On affecte les cookies pour les deux variables (3600 secondes, 24 heures, 7 jours, soit expire dans 7 jours)
                    setcookie("pseudo", $pseudo, time() + (3600 * 24 * 7));
                    setcookie("mdp", $mdp, time() + (3600 * 24 * 7));
                } else {
                    $message = "Pas Coché !!!";
                    setcookie("pseudo", "", 0);
                    setcookie("mdp", "", 0);
                    $pseudo = "";
                    $mdp = "";
                }
            }
        } else {
            $message = "First time !!!";
        }
        //--------------------------------- AFFICHAGE HTML ---------------------------------//



        ?>

    </nav>
    <section>
        <!-- Pour contrôler les pseudo et mot de passe que tout fonctionne correctement -->
        <!-- Si tout fonctionne on affiche le header -->
        <!--<?php echo $contenu; ?>-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-4">Authentification</h5>
                            <form method="POST" action="">
                                <div class="form-floating mb-3">
                                    <!-- Modifier en type text car ce n'est pas sécurisé pour le login, on préférera pour une inscription -->
                                    <input type="text" id="pseudo" class="form-control" placeholder="Identifiant" name="pseudo" aria-describedby="IdentifiantAide" />
                                    <label class="form-label" for="pseudo">Pseudo&nbsp;:</label>
                                    <small id="IdentifiantAide" class="form-text text-muted">Saisir votre identifiant</small>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" id="mdp" class="form-control" placeholder="Mot de passe" autocomplete="on" name="mdp" aria-describedby="mdpAide" />
                                    <label class="form-label" for="mdp">Mot de passe&nbsp;:</label>
                                    <small id="mdpAide" class="form-text text-muted">Saisir votre mot de passe</small>
                                </div>

                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck" name="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">Mot de passe visible</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="chkSeSouvenir" name="chkSeSouvenir">
                                    <label class="form-check-label" for="chkSeSouvenir">Se souvenir de moi</label>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit" name="submit">Connexion</button>
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
        /* Modification de l'appel du document car ne fonctionne pas*/
        /*  include './partials/footer.php'; */
        include '../views/partials/footer.php';
        ?>
    </footer>
</body>

</html>