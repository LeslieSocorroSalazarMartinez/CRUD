<?php
	
	class Vestidos_model {
		
		private $db;
		private $vestidos;
		
		public function __construct(){
			$this->db = Conectar::conecta();
			$this->vestidos = array();
		}
		
		public function get_vestidos()
		{
			$sql = "SELECT * FROM vestidos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->vestidos[] = $row;
			}
			return $this->vestidos;
		}
		
		public function insertar($procad, $pronom, $promar, $precio, $estatus, $stock, $color, $talla){
			
			$resultado = $this->db->query("INSERT INTO vestidos (procad, pronom, promar, precio, estatus, stock, color, talla) VALUES ('$procad', '$pronom', '$promar', $precio, '$estatus',$stock, '$color', '$talla')");

		}
		
		public function modificar($id, $procad, $pronom, $promar, $precio, $estatus, $stock, $color, $talla){
			
			$resultado = $this->db->query("UPDATE vestidos SET procad='$procad', pronom='$pronom', promar='$promar', precio='$precio', estatus='$estatus', stock='$stock', color='$color', talla='$talla' WHERE id='$id'");			
		}

		
		public function eliminar($id){
			
			$resultado = $this->db->query("DELETE FROM vestidos WHERE  id='$id'");
			
		}
		
		public function get_vestido($id)
		{
			$sql = "SELECT * FROM vestidos WHERE  id='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>