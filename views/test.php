<?php

/* VillesDAOProceduralTests.php */

require_once '../lib/Connexion.php';
//require_once '../lib/Transaxion.php';
require_once 'test.php';

$pdo = seConnecter("../conf/monsite.ini");

echo "<hr>Sélection de ma base Avions<hr>";
$content = "";
$lines = selectAll($pdo);

foreach ($lines as $line) {
    foreach ($line as $field => $value) {
        $content .= $field . ":" . $value . ";";
    }
    $content .= "\n";
}
echo nl2br($content);

?>