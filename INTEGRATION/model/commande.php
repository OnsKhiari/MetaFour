<?PHP
	class Commande{
		private  $id = null;
        private  $nom = null;
		private  $prenom = null;
		private  $code_article = null;
        private  $email = null;
        private  $num = null;
        private  $msg = null;
		private  $prix = null;

		
		function __construct(string $nom, string $prenom , int $code_article , string $email,string $num ,string $msg ,$prix){
			
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->code_article=$code_article;
            $this->email=$email;
            $this->num=$num;
            $this->msg=$msg;
			$this->prix=$prix;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getNom(): string{
			return $this->nom;
		}
		
		
		function getPrenom(): string{
			return $this->prenom;
		}
		function getCode_article(): string{
			return $this->code_article;
		}
        function getEmail(): string{
			return $this->email;
		}
        function getNum(): string{
			return $this->num;
		}
        function getMsg(): string{
			return $this->msg;
		}
		function getPrix(): int{
			return $this->prix;
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