<?php
include "../controller/commandeC.php";
$commandeC = new commandeC();
if (isset($_GET['id'])) {
        $commandeC->supprimerCommande($_GET['id']);
        header('Location:back.php');

}else {
    header('Location:back.php');
}