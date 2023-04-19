<?php

    /*
userDAO.php
 */
    /*
  DAO de mon projet
 */
/*
    Pour insérer dans la base les informations de la page d'inscription
*/
   
     /**
     *
     * @param PDO $pdo
     * @param array $tAttributesValues
     * @return int
     */
    function insert(PDO $pdo, array $tAttributesValues): int
    {
        $affected = 0;
        try {
            $sql = "INSERT INTO users(nom,prenom,telephone,email,adresse,cp,ville,user,mdp) VALUES(?,?,?,?,?,?,?,?,?)";
            $statement = $pdo->prepare($sql);

            $statement->bindValue(1, $tAttributesValues["nom"]);
            $statement->bindValue(2, $tAttributesValues["prenom"]);
            $statement->bindValue(3, $tAttributesValues["telephone"]);
            $statement->bindValue(4, $tAttributesValues["email"]);
            $statement->bindValue(5, $tAttributesValues["adresse"]);
            $statement->bindValue(6, $tAttributesValues["cp"]);
            $statement->bindValue(7, $tAttributesValues["ville"]);
            $statement->bindValue(8, $tAttributesValues["user"]);
            $statement->bindValue(9, $tAttributesValues["mdp"]);

            $statement->execute();
            $affected = $statement->rowcount();
        } catch (PDOException $e) {
            $affected = -1;
        }
        return $affected;
    }

?>

