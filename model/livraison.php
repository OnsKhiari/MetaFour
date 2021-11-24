<?PHP
	class livraison{
		private  $idlivraison = null;
        private  $type = null;
		private  $dateaj = null;
		private  $id_commande = null;
	

		
		function __construct(string $id_commande,string $type ){
			
			$this->type=$type;
			$this->id_commande=$id_commande;
		}
		
		function getIdlivraison(): int{
			return $this->idlivraison;
		}
		function gettype(): string{
			return $this->type;
		}
		function getid_commande(): string{
			return $this->id_commande;
		}
		
		function getDateaj(): string{
			return $this->dateaj;
		}
		
	/*	function setUsername(string $username): void{
			$this->username=$username;
		}
		
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}*/
	}
    
    ?>