<?php
	include_once '../config.php';
	include_once '../Model/categorie.php';
	class CategorieC {
		function affichercategorie(){
			$sql="SELECT * FROM categorie";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function supprimercategorie($id_categorie){
			$sql="DELETE FROM categorie WHERE id_categorie=:id_categorie";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_categorie', $id_categorie);
			try{
				$req->execute();
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMeesage());
			}
		}
		function ajoutercategorie($categorie){
			$sql="INSERT INTO categorie (nom_categorie) 
			VALUES (:nom_categorie)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_categorie' => $categorie->getnom_categorie(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		function recuperercategorie($id_categorie){
			$sql="SELECT * from categorie where id_categorie=$id_categorie";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$categorie=$query->fetch();
				return $categorie;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifiercategorie($categorie, $id_categorie){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE categorie SET 
                        nom_categorie= :nom_categorie,
					WHERE id_categorie= :id_categorie'
				);
				$query->execute([
					'nom_categorie' => $categorie->getnom_categorie(),
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}

	}
?>