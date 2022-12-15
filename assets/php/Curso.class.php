<?php
	include_once("Aluno.class.php");

	class Curso extends Aluno{
		private $nomeCurso;
		private $matricula;

		public function setNomeCurso($nomeCurso){
			$this->nomeCurso = $nomeCurso;
		}
		public function getNomeCurso(){
			return $this->nomeCurso;
		}
		public function setMatricula($matricula){
			$this->matricula = $matricula;
		}
		public function getMatricula(){
			return $this->matricula;
		}
	}

?>