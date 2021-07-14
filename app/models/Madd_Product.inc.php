<?php

require_once('Connexion_bd_PDO.inc.php'); // inclure le fichier connexion

function ajouter_poduit($nom, $prix, $categorie, $description, $image, $qty_stock) // Ajouter un produit dans la table produit
{
    $bd = connexion_bd();

    $sql = "INSERT INTO odomobd.produit (nom,prix,categorie,Description_prod,url_image,qty_stock) VAlUES (:nom,:prix,:categorie,:Description_prod,:url_image,:qty_stock)";

    $prep = $bd->prepare($sql);

    $reponse =  $prep->execute(array(':nom' => $nom, ':prix' => $prix, ':categorie' => $categorie, ':Description_prod' => $description, ':qty_stock' => $qty_stock, ':url_image' => $image));

    return $reponse;
}