<?php
	class Producto{
		private $id;
		private $codigo_producto;
		private $id_linea;
		private $id_sublinea;
		private $descripcion;
		private $costo_ultimo;
		private $stock;

		function __construct(){}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}

		public function getCodigo_producto(){
			return $this->codigo_producto;
		}
		public function setCodigo_producto($codigo_producto){
			$this->codigo_producto = $codigo_producto;
		}

		public function getId_linea(){
			return $this->id_linea;
		}
		public function setId_linea($id_linea){
			$this->id_linea = $id_linea;
		}

		public function getId_sublinea(){
			return $this->id_sublinea;
		}
		public function setId_sublinea($id_sublinea){
			$this->id_sublinea = $id_sublinea;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function getCosto_ultimo(){
			return $this->costo_ultimo;
		}
		public function setCosto_ultimo($costo_ultimo){
			$this->costo_ultimo = $costo_ultimo;
		}

		public function getStock(){
			return $this->stock;
		}
		public function setStock($stock){
			$this->stock = $stock;
		}

	}
?>