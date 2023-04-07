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
        <div class="container login">
            <h1>Login</h1>
            <br>
            <form>
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example1">Adresse mail&nbsp;:</label>
                    <input type="email" id="form2Example1" class="form-control" />

                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example2">Mot de passe&nbsp;:</label>
                    <input type="password" id="form2Example2" class="form-control" />

                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                            <label class="form-check-label" for="form2Example31"> Se souvenir </label>
                        </div>
                    </div>

                    <div class="col">
                        <!-- Simple link -->
                        <a href="#!">Mot de passe oublié&thinsp;?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="button" class="btn btn-primary btn-block mb-4">Connexion</button>


            </form>
        </div>
    </section>
    </section>
    <footer>
        <?php
        include './partials/footer.php';
        ?>
    </footer>
</body>

</html>