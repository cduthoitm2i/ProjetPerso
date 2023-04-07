<?php

/*
 * ControlesER.php
 */
/* Ensemble d'expression régulière */

class ControlesER {
    /* Contrôle validité E-mail */
    public static function isEmail($psChaine) {
        $motif = "/^[0-9a-zA-Z_-]+([.][0-9a-zA-Z_-]+)?@[0-9a-zA-Z._-]{2,}[.][a-zA-Z]{2,5}$/";
        return preg_match($motif, $psChaine);
    }
    /* Contrôle force mot de passe */
    public static function isMDPFort($psChaine) {
        $motif = "/^(?=.*\\d)(?=.*[a-z])(?=.*[A-Z]).{6,10}$/";
        return preg_match($motif, $psChaine);
    }
    /* Contrôle si code postal France (sans accès BDD Insee) */
    public static function isCPFR($psChaine) {
        $motif = "/[0-9]{5}/";
        return preg_match($motif, $psChaine);
    }

    /* Contrôle si format téléphone est correct */
    public static function isTelephoneFR($psChaine) {
        $motif = "/^0[1-9](-[0-9]{2}){4}$/";
        return preg_match($motif, $psChaine);
    }
    /* Contrôle si entier */
    public static function isEntier($psChaine) {
        $motif = "/^[-]?[0-9]+$/";
        return preg_match($motif, $psChaine);
    }
     /* Contrôle si entier positif */
    public static function isEntierPositif($psChaine) {
        $motif = "/^[0-9]+$/";
        return preg_match($motif, $psChaine);
    }
     /* Contrôle si entier négatif */
    public static function isEntierNegatif($psChaine) {
        $motif = "/^-[0-9]+$/";
        return preg_match($motif, $psChaine);
    }
     /* Contrôle si décimale */
    public static function isDecimal($psChaine) {
        $motif = "/^[-]?[0-9]*[.]?[0-9]+$/";
        return preg_match($motif, $psChaine);
    }
     /* Contrôle si décimale FR */
    public static function isDecimalFR($psChaine) {
        $motif = "/^[-]?[0-9]*[,]?[0-9]+$/";
        return preg_match($motif, $psChaine);
    }
     /* Contrôle si nom sans accent */
    public static function isNomSansAccent($psChaine) {
        $motif = "/^[A-Z][A-Za-z '-]+$/";
        return preg_match($motif, $psChaine);
    }
     /* Contrôle si nom avec accent */
    public static function isNomAvecAccent($psChaine) {
        $motif = "/^[A-Z][A-Za-zàâäéèêëîïôöüûù '-]+$/";
        return preg_match($motif, $psChaine);
    }

}

/// class
?>