<?php
require '../model/commande.php';
require '../controller/commandeC.php';
if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['code_article']) &&
    isset($_POST['email']) &&
    isset($_POST['num']) &&
    isset($_POST['msg']) &&
    isset($_GET['id'])
) {
    # code...
    $commande = new Commande($_POST['nom'],$_POST['prenom'],$_POST['code_article'],$_POST['email'],$_POST['num'],$_POST['msg']);
    $commandeC = new commandeC();
    $commandeC->modifierCommande($commande,$_GET['id']);
    header('Location: afficherCommandes.php');
}else {
    echo 'chyy';
}