<?php
/* echo "Header";*/
?>

<!-- Ma navbar Bootstrap 5-->
<!-- ajout du style background-color: #e3f2fd;" dans la balise nav de départ pour faire un bleu pale -->

<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #e3f2fd;">


  <?php
  //require_once("../inc/init.inc.php");
  //require_once("../inc/fonction.inc.php");
  echo '<div class="container-fluid">
    <a class="navbar-brand" href="../views/Accueil.php">
      <img src="../icones/Logo_Airbus_2014.svg" alt="Mon logo" width="200">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Avion</a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
            <!--<li><a class="dropdown-item" href="../views/Avion_recherche.php">Rechercher un avion</a></li>-->
            <!-- Modification provisoire -->
            <li><a class="dropdown-item" href="../views/Avion_recherche.php">Rechercher un avion</a></li>
            <li><a class="dropdown-item" href="../views/Avion_liste_prod.php">Liste de production</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Compagnie</a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
          <li><a class="dropdown-item" href="../views/Compagnie_recherche.php">Rechercher une compagnie</a></li>
          <li><a class="dropdown-item" href="../views/Compagnie_liste.php">Liste des compagnies</a></li>
          <li><a class="dropdown-item" href="../views/Compagnie_liste_par_pays.php">Liste par pays</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../views/Boutique.php">Boutique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../views/Photo.php">Photographie</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Aéroport</a>
        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
          <li><a class="dropdown-item" href="../views/Aeroport_recherche.php">Rechercher un aéroport</a></li>
          <li><a class="dropdown-item" href="../views/Aeroport_par_pays.php">Liste des aéroports par pays</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../views/Contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../views/Inscription.php">Inscription</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../views/Login.php">Login</a>
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