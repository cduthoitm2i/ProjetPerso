<!DOCTYPE html>
<!--
Authentification.php
c:/xampp/htdocs/MonProjetPerso/views/Authentification.php
http://localhost/MonProjetPerso/views/Authentification.php
-->
<html>

    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../css/style.css" />
    </head>

    <body>
        <header>
            <?php
            include '../views/partials/header.php';
            ?>
        </header>

        <hr />

        <nav>
            <?php
            include '../views/partials/nav.php';
            ?>
        </nav>

        <hr />

        <section>
            <h1>Authentification</h1>
            <form method="POST" action="../controllers/AuthentificationCTRL.php">
                <input type="text" name="pseudo" value="p" placeholder="Identifiant ?"/>
                <br><br>
                <input type="password" name="mdp" value="b" placeholder="Mot de passe ?"/>
                <br><br>
                <input type="checkbox" name="MdpVisible" value="ON" />
                <label>Mot de passe visible</label>
                <br><br><!-- comment -->

                <input type="submit" />
            </form>
            <br><br>

            
            
            <a href="http://">Mot de passe oublié </a>
            <br><br>

            <input type="checkbox" name="SeSouvenirDeMoi" value="ON" />
            <label>Se Souvenir De Moi</label>
            <br><br><!-- comment -->

            <label>
                <?php
                // Si la variable $message existe alors on affiche son contenu
                if (isSet($message)) {
                    echo $message;
                }
                ?>
            </label>
        </section>

        <hr />

        <footer>
            <?php
            include '../views/partials/footer.php';
            ?>
        </footer>
    </body>

</html>