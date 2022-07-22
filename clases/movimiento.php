<?php
	class Movimiento{
		private $id;
		private $tipo_mov;
		private $cedula_mov;
		private $nombre_mov;
		private $fecha_mov;
		private $valor_total_mov;

		function __construct(){}

		public function getId(){
			return $this->id;
		}
		public function setId($id){
			$this->id = $id;
		}

		public function getTipo_mov(){
		return $this->tipo_mov;
		}
		public function setTipo_mov($tipo_mov){
			$this->tipo_mov = $tipo_mov;
		}
 
		public function getCedula_mov(){
			return $this->cedula_mov;
		}
		public function setCedula_mov($cedula_mov){
			$this->cedula_mov = $cedula_mov;
		}

		public function getNombre_mov(){
			return $this->nombre_mov;
		}
		public function setNombre_mov($nombre_mov){
			$this->nombre_mov = $nombre_mov;
		}

		public function getFecha_mov(){
			return $this->fecha_mov;
		}
		public function setFecha_mov($fecha_mov){
			$this->fecha_mov = $fecha_mov;
		}

		public function getValor_total_mov(){
			return $this->valor_total_mov;
		}
		public function setValor_total_mov($valor_total_mov){
			$this->valor_total_mov = $valor_total_mov;
		}
	}
?>