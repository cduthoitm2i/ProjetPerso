<?php
// Définition de toutes les variables et affectation à 0 pour toutes
// Création d'un second lot de variable pour les erreurs
$civilite = $nom = $prenom = $telephone = $email = $email2 = $adresse = $cp = $ville = $pseudo = $mdp = $mdp2 = $newsletter = $sujet = "";
$civiliteErr = $nomErr = $prenomErr = $telephoneErr = $emailErr = $email2Err = $email2bisErr = $adresseErr = $cpErr = $villeErr = $pseudoErr = $mdpErr = $mdp2Err = $mdp2bisErr = $newsletterErr = $sujetErr = "";
$contenu = '';
?>

<?php require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if($_POST)
{
    debug($_POST);
    $verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['pseudo']); 
    if(!$verif_caractere && (strlen($_POST['pseudo']) < 1 || strlen($_POST['pseudo']) > 20) ) // 
    {
        $contenu .= "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>";
    }
    else
    {
        $membre = executeRequete("SELECT * FROM membre WHERE pseudo='$_POST[pseudo]'");
        if($membre->num_rows > 0)
        {
            $contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
        }
        else
        {
            // $_POST['mdp'] = md5($_POST['mdp']);
            foreach($_POST as $indice => $valeur)
            {
                $_POST[$indice] = htmlEntities(addSlashes($valeur));
            }
            $tattributesValues = array();
            $tattributesValues['nom'] = $nom;
            $tattributesValues['prenom'] = $prenom;
            $tattributesValues['nom'] = $nom;
            $tattributesValues['telephone'] = $telephone;
            $tattributesValues['email'] = $email;
            $tattributesValues['adresse'] = $adresse;
            $tattributesValues['cp'] = $cp;
            $tattributesValues['ville'] = $ville;
            $tattributesValues['pseudo'] = $pseudo;
            // Cryptage du mot de passe
            $mdp = password_hash("mdp", PASSWORD_BCRYPT);
            $tattributesValues['mdp'] = $mdp;
            executeRequete("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse) VALUES ('$_POST[pseudo]', '$_POST[mdp]', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]', '$_POST[civilite]', '$_POST[ville]', '$_POST[code_postal]', '$_POST[adresse]')");
            $contenu .= "<div class='validation'>Vous êtes inscrit à notre site web. <a href=\"Connexion.php\"><u>Cliquez ici pour vous connecter</u></a></div>";
        }
    }
}


?>
