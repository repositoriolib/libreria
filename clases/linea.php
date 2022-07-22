<?php
	class Linea{
		private $id;
		private $codigo;
		private $descripcion;

		function __construct(){}

		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}

		public function getCodigo(){
		return $this->codigo;
		}
 
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
 
		public function getDescripcion(){
			return $this->descripcion;
		}
 
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
	}
?>