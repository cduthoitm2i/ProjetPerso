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

    <title>Liste production Airbus A300</title>
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
            <h1>Liste production Airbus A300</h1>
            <?php
            require_once '../lib/Connexion.php';
            //require_once '../lib/Transaxion.php';
            require_once '../daos/clientDAOa220.php';
            $pdo = seConnecter("../conf/monsite.ini");

            // var_dump ($pdo);

            //echo "Sélection de la base avion";
            $content = "";
            $lines = selectAllPourListeTab($pdo);
            $headers = "";


            // Extraction des autres enregistrements et on affiche dans les balises html
            // On fait le corps du tableau
            // On boucle sur les colonnes à l'intérieur de la boucle pour les lignes
            try {
                $query = "SELECT numero_serie_avion, modele_avion, nom_compagnie, date_premier_vol_avion, immatriculation_compagnie_avion, statut_avion FROM `avion` WHERE nom_avion = 'A300'";
                $result = $pdo->query($query);
            ?>
                <div class="row py-5">
                    <div class="col-lg-12 mx-auto">
                        <div class="card rounded shadow border-0">
                            <div class="card-body p-5 bg-white rounded">
                                <div class="table-responsive">
                                    <table id="liste_avion" style="width:100%" class="table table-bordered table-hover dt-responsive">
                                        <thead>
                                            <tr>
                                                <th style="text-align:center;vertical-align:middle">MSN</th>
                                                <th style="text-align:center;vertical-align:middle">Type</th>
                                                <th style="text-align:center;vertical-align:middle">Opérateur</th>
                                                <th style="text-align:center;vertical-align:middle">Premier vol</th>
                                                <th style="text-align:center;vertical-align:middle">Immatriculation</th>
                                                <th style="text-align:center;vertical-align:middle">Statut</th>
                                            </tr>
                                        </thead>
                                      <tbody>
                                      <?php
                                        while ($data = $result->fetch(PDO::FETCH_ASSOC)) {

                                        ?>
                                                <tr>
                                                    <td class='small'><?php echo $data['numero_serie_avion']; ?> </td>
                                                    <td class='small'><?php echo $data['modele_avion']; ?> </td>
                                                    <td class='small'><?php echo $data['nom_compagnie']; ?> </td>
                                                    <td class='small'><?php echo $data['date_premier_vol_avion']; ?> </td>
                                                    <td class='small'><?php echo $data['immatriculation_compagnie_avion']; ?> </td>
                                                    <td class='small'><?php echo $data['statut_avion']; ?> </td>
                                                </tr>
                                            <?php
                                        }
                                            ?>
                                            </tbody>
                                    </table>
                                <?php
                            } catch (PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            } ?>
                                </div>
                            </div>
                        </div>
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
<script>
    /*$(document).ready(function() {
        var table = $('#liste_avion').DataTable({
            responsive: true
        });

        new $.fn.dataTable.FixedHeader(table);
    });*/
    $(document).ready(function() {
        var table = $('#liste_avion').DataTable({
            "pageLength": 25
        });

        table.columns().iterator('column', function(ctx, idx) {
            $(table.column(idx).header()).append('<span class="sort-icon"/>');
        });
    });
</script>


</html>