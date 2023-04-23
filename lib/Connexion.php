<?php
/**
 * ../lib/Connexion.php : une bibliothèque
 *
 * seConnecter() : PDO (à partir d'un fichier ini)
 * seDeconnecter() : void
 */

/**
 *
 * @param string $psCheminParametresConnexion
 * @return PDO
 */
function seConnecter(string $psCheminParametresConnexion) : PDO {

    $tProprietes = parse_ini_file($psCheminParametresConnexion);

    $lsProtocole = $tProprietes["protocole"];
    $lsServeur = $tProprietes["serveur"];
    $lsPort = $tProprietes["port"];
    $lsUT = $tProprietes["ut"];
    $lsMDP = $tProprietes["mdp"];
    $lsBD = $tProprietes["bd"];


    /*
     * Connexion
     */
    $pdo = null;
    try {
        $pdo = new PDO("$lsProtocole:host=$lsServeur;port=$lsPort;dbname=$lsBD;", $lsUT, $lsMDP);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, FALSE);
        $pdo->exec("SET NAMES 'UTF8'");
        // echo 'Connexion réussie';
    } catch (PDOException $ex) {
        //echo "<br>" .   $ex->getMessage();
    }
    return $pdo;
}
/**
 * fonction pour exécuter une requête (pour échanger des informations avec la base à faire certainement plusieurs fois par page web, pour faciliter un peu la vie avec une fonction déjà prête.)
 */
function executeRequete($req)
{
    global $mysqli;
    $resultat = $mysqli->query($req);
    if(!$resultat) // 
    {
        die("Erreur sur la requete sql.<br>Message : " . $mysqli->error . "<br>Code: " . $req);
    }
    return $resultat; // 
}

/**
 * fonction pour debug (var_dump ou print_r pour voir le contenu d'un tableau array, d'un objet ou de variables, nous allons donc prévoir un code en conséquence afin de gagner du temps.)
 */
function debug($var, $mode = 1)
{
    echo '<div style="background: orange; padding: 5px; float: right; clear: both; ">';
    $trace = debug_backtrace();
    $trace = array_shift($trace);
    echo 'Debug demandé dans le fichier : $trace[file] à la ligne $trace[line].';
    if($mode === 1)
    {
        echo '<pre>'; print_r($var); echo '</pre>';
    }
    else
    {
        echo '<pre>'; var_dump($var); echo '</pre>';
    }
    echo '</div>';
}

/**
 *
 * @param PDO $pdo
 */
function seDeconnecter(PDO &$pdo) {
    $pdo = null;
}
?>