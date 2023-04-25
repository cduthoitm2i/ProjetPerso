<?php
/* echo "Header";*/
?>

<!-- Ma navbar Bootstrap 5-->
<!-- ajout du style background-color: #e3f2fd;" dans la balise nav de départ -->


<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #e3f2fd;">

  <?php
  require_once("../inc/init.inc.php");
    echo '<div class="container-fluid">
    <a class="navbar-brand" href="../views/Accueil.php">
    <img src="../icones/Logo_Airbus_2014.svg" alt="Mon logo" width="200">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href=" . RACINE_SITE . "admin/gestion_membre.php">Gestion des membres</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" . RACINE_SITE . "admin/gestion_commande.php">Gestion des commandes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" . RACINE_SITE . "admin/gestion_boutique.php">Gestion de la boutique</a>
      </li>

    </ul>
    <form class="d-flex" role="search" method="GET" action="">
      <input class="form-control me-2" type="search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Rechercher</button>
    </form>
  </div>
</div>';
?>
</nav>