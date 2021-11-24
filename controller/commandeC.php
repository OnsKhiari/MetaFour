<?php
include "../config.php";
require_once '../model/commande.php';


class commandeC{

    function ajouterCommande($commande){
        $sql="INSERT INTO commande (nom, prenom, code_article , email , num , msg) 
        VALUES (:nom, :prenom, :code_article , :email , :num , :msg)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'nom' => $commande->getNom(),
                'prenom' => $commande->getPrenom(),
                'code_article' => $commande->getCode_article(),
                'email' => $commande->getEmail(),
                'num' => $commande->getNum(),
                'msg' => $commande->getMsg()

            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }


    function afficherCommandes(){
			
        $sql="SELECT * FROM commande ORDER BY id ASC LIMIT 30 ";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }

    function supprimerCommande($id){
        $sql="DELETE FROM commande WHERE id= :id";
        $db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id',$id);
        try{
            $req->execute();
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }			
    }


    function modifierCommande($commande,$id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE commande SET 
                     nom = :nom,
                     prenom = :prenom,
                     code_article =:code_article,
                     email =:email,
                     num =:num,
                     msg =:msg
                WHERE id = :id'
            );
            $query->execute([
                'nom' => $commande->getNom(),
                'prenom' => $commande->getPrenom(),
                'code_article' => $commande->getCode_article(),
                'email' => $commande->getEmail(),
                'num' => $commande->getNum(),
                'msg' => $commande->getMsg(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


}




?>