<?php
	class Categorie{
        private $id_categorie=null;
		private $nom_categorie=null;
		function __construct($nom_categorie){
			$this->nom_categorie=$nom_categorie;
		}
		function getid_categorie(){
			return $this->id_categorie;
		}
		function getnom_categorie(){
			return $this->nom_categorie;
		}
		function setnom_categorie(string $nom_categorie){
			$this->nom_categorie=$nom_categorie;
		}

		
	}


?>