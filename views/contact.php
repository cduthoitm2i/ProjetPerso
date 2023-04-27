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