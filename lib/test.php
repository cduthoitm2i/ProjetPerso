<!DOCTYPE html>
<!--
TableToTableWithFetchAllView
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>TableToTableWithFetchAllView</title>
</head>

<body>
    <?php

/* Tests.php */

require_once '../lib/Connexion.php';
//require_once '../lib/Transaxion.php';
require_once '../daos/clientDAO.php';

$pdo = seConnecter("../conf/monsite.ini");

// var_dump ($pdo);

echo "<hr>Sélection de la base avion<hr>";
$content = "";
$lines = selectAll($pdo);

$headers = "";


// Extraction des autres enregistrements et on affiche dans les balises html
// On fait le corps du tableau
// On boucle sur les colonnes à l'intérieur de la boucle pour les lignes
$contents = "";
foreach ($lines as $line) {
    $contents .= "<tr>";
    foreach ($line as $column) {
        $contents .= "<td>$column</td>";
    }
    $contents .= "</tr>";
}
?>

<table border="1">
        <thead>
            <tr>
                <?php
                echo $headers
                ?>
            </tr>
        </thead>
        <tbody>
            <?php
            echo $contents;
            ?>
        </tbody>
    </table>


</body>

</html>

