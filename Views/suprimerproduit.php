<?php
	include '../Controller/produitC.php';
	$produitC=new produitC();
	$produitC->supprimerproduit($_GET["id_produit"]);
	header('Location:afficherproduits.php');
?>