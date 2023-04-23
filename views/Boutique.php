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

    <title>Ma boutique</title>
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
            <?php
            require_once("../inc/init.inc.php");
            //--------------------------------- TRAITEMENTS PHP ---------------------------------//
            //--- AFFICHAGE DES CATEGORIES ---//
            $categories_des_produits = executeRequete("SELECT DISTINCT categorie FROM produit");
            $contenu .= '<div class="boutique-gauche">';
            $contenu .= "<ul>";
            while ($cat = $categories_des_produits->fetch_assoc()) {
                $contenu .= "<li><a href='?categorie=" . $cat['categorie'] . "'>" . $cat['categorie'] . "</a></li>";
            }
            $contenu .= "</ul>";
            $contenu .= "</div>";
            //--- AFFICHAGE DES PRODUITS ---//
            $contenu .= '<div class="boutique-droite">';
            if (isset($_GET['categorie'])) {
                $donnees = executeRequete("select id_produit,reference,titre,photo,prix from produit where categorie='$_GET[categorie]'");
                while ($produit = $donnees->fetch_assoc()) {
                    $contenu .= '<div class="boutique-produit">';
                    $contenu .= "<h2>$produit[titre]</h2>";
                    $contenu .= "<a href=\"fiche_produit.php?id_produit=$produit[id_produit]\"><img src=\"$produit[photo]\" =\"130\" height=\"100\"></a>";
                    $contenu .= "<p>$produit[prix] €</p>";
                    $contenu .= '<a href="fiche_produit.php?id_produit=' . $produit['id_produit'] . '">Voir la fiche</a>';
                    $contenu .= '</div>';
                }
            }
            $contenu .= '</div>';
            //--------------------------------- AFFICHAGE HTML ---------------------------------//




            
            ?>
            <h1>Ma boutique</h1>
        </div>

    </section>
    <footer>
        <?php
        include '../views/partials/footer.php';
        ?>
    </footer>
</body>



</html>