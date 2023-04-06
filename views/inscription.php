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
    <link rel="stylesheet" href="/css/style.css">
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
            <h1>Création d'un compte utilisateur</h1>
            <br>
            <form action="" method="get">

                <div class="row">

                    <div class="col-2 offset-md-2">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Monsieur
                        </label>
                    </div>
                    <div class="col-2"> 
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Madame
                        </label>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-2">
                        <label for="Nom" class="col-sm-2 col-form-label">Nom&nbsp;:</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Nom" aria-label="Nom">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-2">
                        <label for="Prenom" class="col-sm-2 col-form-label">Prénom&nbsp;:</label>
                    </div>
                    <div class="col-10">
                        <input class="form-control" type="text" placeholder="Prénom" aria-label="Prenom">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-2">
                        <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">Téléphone&nbsp;:</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Téléphone">
                    </div>

                </div><br>
                <div class="row">
                    <div class="col-2">
                        <label for="exampleFormControlInput2" class="col-sm-2 col-form-label">Email&nbsp;:</label>
                    </div>
                    <div class="col-10">
                        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="E-mail">
                    </div>

                </div><br>
                <div class="row">
                    <div class="col-2">
                        <label for="exampleFormControlInput3" class="col-sm-2 col-form-label">Adresse&nbsp;:</label>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Adresse">
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-2">
                        <label for="exampleFormControlInput4" class="col-sm-2 col-form-label">Code&nbsp;postal&nbsp;:</label>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="Code&nbsp;postal">
                    </div>
                    <div class="col-2">

                    </div>
                    <div class="col-1">
                        <label for="exampleFormControlInput5" class="col-sm-2 col-form-label">Ville&nbsp;:</label>
                    </div>
                    <div class="col-4">
                        <input type="text" class="form-control" id="exampleFormControlInput5" placeholder="Ville">
                    </div>
                </div><br>
                <div class="row">

                    <div class="col offset-md-2">
                        <button class="btn btn-primary" type="submit">Soumettre</button>
                    </div>
                </div>

            </form>
        </div>

    </section>
    <footer>
        <?php
        include './partials/footer.php';
        ?>
    </footer>
</body>

</html>