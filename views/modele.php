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
        include './partials/header.php';
        ?>
    </header>
    <nav>
        <?php
        include './partials/nav.php';
        ?>
    </nav>
    <section>
        <div class="container">
            <h1>Mon image</h1>
            <img src="../images/europe.jpg" alt="Photo" />
            <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br> <br><br><br><br><br><br><br><br><br><br>

        </div>

    </section>
    <footer>
        <?php
        include './partials/footer.php';
        ?>
    </footer>
</body>

</html>