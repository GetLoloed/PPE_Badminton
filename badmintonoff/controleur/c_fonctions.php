<?php

class Fonctions
{
    // Récupere toutes les données de la table adherent
    public function getInfoAdh($connexion)
    {
        $query = "SELECT * FROM adherent INNER JOIN type t ON adherent.typeAdh = t.numType";
        $result = $connexion->query($query) or die("Erreur dans la requête.");
        return $result;
    }
    // Supprime l'adherent
    public function deleteAdh($connexion, $matriculeAdh)
    {
        $query = "DELETE FROM adherent WHERE matriculeAdh='$matriculeAdh'";
        $result = $connexion->query($query) or die("Erreur dans la suppression");
        return $result;
    }

    // Ajoute un adhérent
    public function addAdh($connexion, $nomAdh, $prenomAdh, $adresseAdh, $villeAdh, $cpAdh, $niveauAdh, $typeAdh)
    {
        $query = "INSERT INTO adherent (matriculeAdh, nomAdh, prenomAdh, adresseAdh, villeAdh, cpAdh, niveauAdh, typeAdh) VALUES (NULL, '$nomAdh', '$prenomAdh', '$adresseAdh', '$villeAdh', '$cpAdh', '$niveauAdh', '$typeAdh')";
        $result = $connexion->query($query);
        return $result;
    }

    // Affiche détails pour la fiche adhérent en fonction du matricule entré en parametre
    public function detailsAdh($connexion, $matriculeAdh)
    {
        $query = "select *  from adherent inner join type t on adherent.typeAdh = t.numType WHERE matriculeAdh = '$matriculeAdh'";
        $result = $connexion->query($query);
        return $result;
    }

    // Modifie la fiche adhérent en fonction de l'id selectionné
    public function modifierAdh($connexion, $matriculeAdh, $nomAdh, $prenomAdh, $adresseAdh, $villeAdh, $cpAdh, $niveauAdh, $typeAdh)
    {
        $query = "update adherent set nomAdh='$nomAdh', prenomAdh='$prenomAdh', adresseAdh='$adresseAdh', villeAdh='$villeAdh', cpAdh='$cpAdh', niveauAdh='$niveauAdh', typeAdh='$typeAdh' where matriculeAdh='$matriculeAdh'";
        $result = $connexion->query($query);
        return $result;
    }

}

?>