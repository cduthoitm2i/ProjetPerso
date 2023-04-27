<?php
//echo "Contact";
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
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
    //include_once "../controllers/AuthentificationCTRL.php";
    require_once("../inc/init.inc.php");
    ?>
    <?php
    // Message de fin
    $reponses = [];
    // Vérification du bon remplissage de tous les champs
    if (isset($_POST['email'], $_POST['sujet'], $_POST['nom'], $_POST['prenom'], $_POST['message'])) {
        // Validation adresse mail
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $reponses[] = 'Adresse mail invalide!';
        }
        // Vérification que tous les champs ne sont pas vide
        if (empty($_POST['email']) || empty($_POST['sujet']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['message'])) {
            $reponses[] = 'Compléter tous les champs!';
        }
        // Si aucune erreur avant, on continue
        if (!$reponses) {
            // A qui envoyer le mail
            $to = 'cduthoit@live.fr';
            // 
            $from = 'cduthoit@gmail.com';
            // Sujet du message
            $sujet = $_POST['sujet'];
            // Mail message
            $message = $_POST['message'];
            // Mail entête (avant on paramètre pour les caractères spéciaux soient corrects dans l'entête du mail de réception en définissant le codage utf-8)
            // Test effectué avec des emojis, résultat ok
            $headers = 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/plain; charset=utf-8' . "\n";
            $headers .= 'Content-Transfer-Encoding: 8bit' . "\n";
            $headers .= 'From: ' . $from . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();

            // Essai d'envoi du mail
            if (mail($to, $sujet, $message, $headers)) {
                // Envoi réussi
                $reponses[] = 'Message bien envoyé!';
            } else {
                // Echec
                $reponses[] = 'Message pas envoyé! Merci de vérifier la configuration de votre serveur mail!';
            }
        }
    }
    ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="well well-sm card border-0 shadow rounded-3 my-5 p-4 p-sm-5">
                        <form class="form-horizontal" action="" method="post">
                            <fieldset>
                                <legend class="text-center">Contact</legend>

                                <!-- champs pour votre nom-->
                                <div class="form-group">

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nom" type="text" placeholder="Nom" aria-label="Nom" value="<?php if (isset($_POST['nom'])) echo htmlspecialchars($_POST['nom']); ?>" name="nom" required>
                                        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
                                        <!--<span class="error"><?php echo $nomErr; ?></span>-->
                                    </div>
                                </div>

                                <!-- champs pour votre prénom-->
                                <div class="form-group">

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="prenom" type="text" placeholder="Prénom" aria-label="Prenom" name="prenom" value="<?php if (isset($_POST['prenom'])) echo htmlspecialchars($_POST['prenom']); ?>" required>
                                        <label for="prenom" class="col-sm-2 col-form-label">Prénom</label>
                                        <!--<span class="error"><?php echo $prenomErr; ?></span>-->
                                    </div>
                                </div>
                                <!-- champs pour le sujet du message-->
                                <div class="form-group">

                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="sujet" type="text" placeholder="Sujet" aria-label="Sujet" name="sujet" value="<?php if (isset($_POST['sujet'])) echo htmlspecialchars($_POST['sujet']); ?>" required>
                                        <label for="sujet" class="col-sm-2 col-form-label">Sujet du message</label>
                                        <!--<span class="error"><?php echo $sujetErr; ?></span>-->
                                    </div>
                                </div>

                                <!-- champs pour l'email -->
                                <div class="form-group">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" required>
                                        <label class="sr-only" for="email">E-mail</label>
                                        <!--<span class="error"><?php echo $emailErr; ?></span>-->
                                    </div>
                                </div>

                                <!-- champs pour le message -->
                                <div class="form-group mb-3">
                                    <div class="col-md-12">
                                        <textarea class="form-control" id="message" name="message" placeholder="Merci de saisir votre message..." rows="5"><?php if (isset($_POST['commentaire'])) echo htmlspecialchars($_POST['commentaire']); ?></textarea>
                                    </div>
                                </div>

                                <!-- bouton d'envoi -->
                                <div class="form-group">
                                    <div class="form-group form-floating mb-3">
                                        <div class="d-grid col-md-12 text-right">
                                            <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Envoyer</button>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <?php if ($reponses) : ?>
                                <p class="reponses"><?php echo implode('<br>', $reponses); ?></p>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- -->
    </section>
    <footer>
        <?php
        include '../views/partials/footer.php';
        ?>
    </footer>
</body>

</html>