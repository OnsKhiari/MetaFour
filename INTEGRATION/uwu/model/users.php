<?php
	class usersC{
		private $user_id=null;
		private $user_name=null;
		private $user_pass=null;
		private $user_mail=null;
		private $user_date;

		function __construct($user_id, $user_name, $user_pass, $user_mail, $user_date){
			$this->user_id=$user_id;
			$this->user_name=$user_name;
			$this->user_pass=$user_pass;
			$this->user_mail=$user_mail;
			$this->user_date=$user_date;
		}
		function getuser_id(){
			return $this->user_id;
		}
		function getuser_name(){
			return $this->user_name;
		}
		function getuser_pass(){
			return $this->user_pass;
		}
		function getuser_mail(){
			return $this->user_mail;
		}
		function getuser_date(){
			return $this->user_date;
		}

		// function setuser_id(string $user_id){
		// 	$this->user_id=$user_id;
		// }
		function setuser_name(string $user_name){
			$this->user_name=$user_name;
		}
		function setuser_pass(string $user_pass){
			$this->user_pass=$user_pass;
		}
		function setuser_mail(string $user_mail){
			$this->user_mail=$user_mail;
		}
		function setuser_date(string $user_date){
			$this->user_date=$user_date;
		}
		
	}


?>