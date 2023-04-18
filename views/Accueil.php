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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <!-- Ma CSS -->
    <link rel="stylesheet" href="../css/style.css">
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

    <title>Accueil</title>
</head>

<body>
    <header class="site-navbar" role="banner">
        <?php
        include '../views/partials/header.php';
        ?>
    </header>
    <nav>
        <?php
        include '../views/partials/nav.php';
        ?>
    </nav>
    <section>
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h5 class="card-title">Chercher un avion ou une compagnie</h5>
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Chercher</button>
                            </form>
                            <p class="p-2 card-text text-center">Saisir une immatriculation, un&nbsp;numéro de&nbsp;série ou&nbsp;le&nbsp;nom d'une&nbsp;compagnie aérienne</p>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <p class="p-2 card-text"><strong>Airbus</strong> diffuse toutes les informations sur les avions civils Airbus. </p>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <h5 class="card-title">Dernières mises à jour avions</h5>
                            <table class="table table-sm table-borderless">

                                <tbody>
                                    <tr>
                                        <td>A320</td>
                                        <td>Air Canada</td>
                                        <td>C-GYFY</td>
                                    </tr>
                                    <tr>
                                        <td>A320</td>
                                        <td>Air Canada</td>
                                        <td>C-GYFY</td>
                                    </tr>
                                    <tr>
                                        <td>A320</td>
                                        <td>Air Canada</td>
                                        <td>C-GYFY</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">A320</td>
                                        <td>Air Canada</td>
                                        <td>C-GYFY</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="p-2 card-text text-end"><a href="#">Plus de mise à jour vers ce lien</a></p>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <h5 class="card-title">Top photo des 24 dernières heures</h5>
                            <img src="../images/pas_de_photo.jpg" width="75%" class="img-fluid start" alt="...">
                            <p class="p-2 card-text text-end"><a href="#">Voir l'ensemble du Top photo 24&nbsp;h</a></p>
                        </div>
                    </div>

                </div>

                <div class="col">
                    <div class="card mb-5">
                        <div class="card-body">
                            <h5 class="card-title">Liste de production</h5>
                            <table class="table table-sm table-borderless">

                                <tbody>
                                    <tr>
                                        <td><a href="../a220.php">Airbus A220</a></td>
                                        <td><a href="../a300.php">Airbus A300</a></td>
                                        <td><a href="../a310.php">Airbus A310</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="../a318.php">Airbus A318</a></td>
                                        <td><a href="../a319.php">Airbus A319</a></td>
                                        <td><a href="../a320.php">Airbus A320</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="../a321.php">Airbus A321</a></td>
                                        <td><a href="../a330.php">Airbus A330</a></td>
                                        <td><a href="../a340.php">Airbus A340</a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="../listing/a350.php">Airbus A350</a></td>
                                        <td><a href="../listing/a380.php">Airbus A380</a></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="p-2 card-text text-end"><a href="#">Plus de mise à jour vers ce lien</a></p>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <h5 class="card-title">Dernières photos publiées</h5>
                            <div class="row">
                                <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                                    <img src="../images/pas_de_photo.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                                    <img src="../images/pas_de_photo.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                                </div>

                                <div class="col-lg-4 mb-4 mb-lg-0">
                                    <img src="../images/pas_de_photo.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                                    <img src="../images/pas_de_photo.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                                </div>

                                <div class="col-lg-4 mb-4 mb-lg-0">
                                    <img src="../images/europe.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />

                                    <img src="../images/europe.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                                </div>
                            </div>
                            <p class="p-2 card-text text-end"><a href="#">Voir l'ensemble du Top photo 24&nbsp;h</a></p>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <h5 class="card-title">Compagnies aériennes à la une</h5>
                            <table class="table table-sm table-striped table-hover table-borderless">

                                <tbody>
                                    <tr>
                                        <td style="width:20%"><img src="../images/pas_de_photo.jpg" class="w-25 shadow-1-strong" alt="" /></td>
                                        <td style="width:80%">Air France</td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><img src="../images/pas_de_photo.jpg" class="w-25 shadow-1-strong" alt="" /></td>
                                        <td style="width:80%">Air Canada</td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><img src="../images/pas_de_photo.jpg" class="w-25 shadow-1-strong" alt="" /></td>
                                        <td style="width:80%">Lufthansa</td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%"><img src="../images/pas_de_photo.jpg" class="w-25 shadow-1-strong" alt="" /></td>
                                        <td style="width:80%">Emirates</td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="p-2 card-text text-end"><a href="#">Plus de mise à jour vers ce lien</a></p>
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