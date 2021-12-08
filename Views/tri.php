<?php
     include '../Model/produit.php';
     include '../Controller/produitC.php';
     $produitC = new ProduitC();
if (isset($_POST["nom_produit"])){
	$produitC->tri();
	header('Location: shop.php');
    header('Location: afficherproduits.php');
}
if (isset($_POST["stock"])){
	$produitC->triS();
	header('Location: shop.php');
    header('Location: afficherproduits.php');
}


?>