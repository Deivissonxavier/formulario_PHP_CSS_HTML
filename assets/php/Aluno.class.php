<?php
	class Aluno{
		private $nome;
		private $sexo;
		private $data;
		private $endereco;


		public function setNome($nome){
			$this->nome = $nome;
		}
		public function getNome(){
			return $this->nome;
		}
		public function setSexo($sexo){
			$this->sexo = $sexo;
		}
		public function getSexo(){
			return $this->sexo;
		}
		public function setData($data){
			$this->data = $data;
		}
		public function getData(){
			return $this->data;
		}
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}
		public function getEndereco(){
			return $this->endereco;
		}
	}
?>