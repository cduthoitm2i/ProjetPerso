<?php
/* echo "Header";*/
?>

<!-- Ma navbar Bootstrap 5-->
<!-- ajout du style background-color: #e3f2fd;" dans la balise nav de départ -->


<nav class="navbar navbar-expand-lg fixed-top" style="background-color: #e3f2fd;">

  <?php
  require_once("../inc/init.inc.php");
  if (internauteEstConnecteEtEstAdmin()) {
    include 'header_admin.php';
  }
  if (internauteEstConnecte()) {
    include 'header_admin_boutique.php';
  } else {
    include 'header_front.php';
  }
  ?>
</nav>