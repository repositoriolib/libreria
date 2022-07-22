<?php
	class Articulo_mov{
		private $id;
		private $id_mov;
		private $id_producto;
		private $cantidad;
		private $valor;

		function __construct(){}

		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}

		public function getId_mov(){
			return $this->id_mov;
		}
 
		public function setId_mov($id_mov){
			$this->id_mov = $id_mov;
		}

		public function getId_producto(){
			return $this->id_producto;
		}
 
		public function setId_producto($id_producto){
			$this->id_producto = $id_producto;
		}

		public function getCantidad(){
			return $this->cantidad;
		}
 
		public function setCantidad($cantidad){
			$this->cantidad = $cantidad;
		}

		public function getValor(){
			return $this->valor;
		}
 
		public function setValor($valor){
			$this->valor = $valor;
		}
 
	}
?>