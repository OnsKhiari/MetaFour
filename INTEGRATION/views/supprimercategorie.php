<?php
	include '../Controller/categorieC.php';
	$categorie=new categorieC();
	$categorie->supprimercategorie($_GET["id_categorie"]);
	header('Location:affichercategorie.php');
?>