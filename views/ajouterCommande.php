<?php
require '../model/commande.php';
require '../controller/commandeC.php';
if (
    isset($_POST['nom']) &&
    isset($_POST['prenom']) &&
    isset($_POST['code_article']) &&
    isset($_POST['email']) &&
    isset($_POST['num']) &&
    isset($_POST['msg'])
) {
    # code...
    $commande = new Commande($_POST['nom'],$_POST['prenom'],$_POST['code_article'],$_POST['email'],$_POST['num'],$_POST['msg']);
    $commandeC = new commandeC();
    $commandeC->ajouterCommande($commande);
    header('Location: afficherCommandes.php');
}else {
    echo 'chyy';
}