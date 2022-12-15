<?php
	include_once("Aluno.class.php");

	class Contato extends Aluno{
		private $email;
		private $telefone;

		public function setEmail($email){
			$this->email = $email;
		}
		public function getEmail(){
			return $this->email;
		}
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		public function getTelefone(){
			return $this->telefone;
		}
	}
?>