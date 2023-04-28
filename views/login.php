<?php
//ob_start();
//ob_end_clean();
setcookie("pseudo", "", 0);
setcookie("mdp", "", 0);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS et JS Bootstrap 5 (version CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link src="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css">
    <script src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://kit.fontawesome.com/0005c4531c.js" crossorigin="anonymous"></script>
    <!-- Ma CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Mon favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="../images/png/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/png/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/png/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/png/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="../images/png/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="../images/png/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="../images/png/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../images/png/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="../images/png/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="../images/png/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="../images/png/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="../images/png/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="../images/png/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
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
                    //$pseudo = "";
                    //$mdp = "";
                }
            }
        } else {
            //$message = "Première connexion !!!";
            
        }
        //--------------------------------- AFFICHAGE HTML ---------------------------------//



        ?>

    </nav>
    <section>
        <!-- Pour contrôler les pseudo et mot de passe que tout fonctionne correctement -->
        <!-- Si tout fonctionne on affiche le header -->
        
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card border-0 shadow rounded-3 my-5">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-4">Authentification</h5>
                            <form method="POST" action="">
                                <div class="form-floating mb-3">
                                    <!-- Modifier en type text car ce n'est pas sécurisé pour le login, on préférera pour une inscription -->
                                    <input type="text" id="pseudo" class="form-control" placeholder="Identifiant" name="pseudo" aria-describedby="IdentifiantAide" required value="Pseudo4"/>
                                    <label class="form-label" for="pseudo">Pseudo&nbsp;:</label>
                                    <small id="IdentifiantAide" class="form-text text-muted">Saisir votre identifiant</small>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" id="mdp" class="form-control" placeholder="Mot de passe" autocomplete="on" name="mdp" aria-describedby="mdpAide" value="CaNaDa205206$;" />
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