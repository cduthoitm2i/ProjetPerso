<!DOCTYPE html>
<!-- modele.php
http://localhost:3000/ProjetPersoInfoAvions/views/modele.php -->
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>Mon modèle de site</title>
</head>

<body>
    <header>
        <?php
        include '..//views/partials/header.php';
        ?>
    </header>
    <nav>
        <?php
        include './partials/nav.php';
        ?>
    </nav>
    <section>
        <h1>Mon image</h1>
        <img src="../images/europe.jpg" alt="Photo" />
    </section>
    <footer>
        <?php
        include './partials/footer.php';
        ?>
    </footer>
</body>

</html>