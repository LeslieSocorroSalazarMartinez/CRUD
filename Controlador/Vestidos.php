<?php
	
	class VestidosController {
		
		public function __construct(){
			require_once "Modelo/VestidosModelo.php";
		}
		
		public function index(){
			
			
			$vestidos = new Vestidos_model();
			$data["titulo"] = "Vestidos";
			$data["vestidos"] = $vestidos->get_vestidos();
			
			require_once "Vista/Vestidos/vestidos.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Vestidos";
			require_once "Vista/Vestidos/NuevoVestidos.php";
		}
		
		public function guarda(){
			
		$procad=$_POST['procad'];
		$pronom=$_POST['pronom'];
		$promar=$_POST['promar'];
		$precio=$_POST['precio'];
		$estatus=$_POST['estatus'];
		$stock=$_POST['stock'];
                $color=$_POST['color'];
		$talla=$_POST['talla'];
       	
			
			$vestidos = new Vestidos_model();
			$vestidos->insertar($procad, $pronom, $promar, $precio, $estatus, $stock, $color, $talla);
			$data["titulo"] = "Vestidos";
			$this->index();
		}
		
		public function modificar($id){
			
			$vestidos = new Vestidos_model();
			
			$data["id"] = $id;
			$data["vestidos"] = $vestidos->get_vestido($id);
			$data["titulo"] = "Vestidos";
			require_once "vista/Vestidos/ModificaVestidos.php";
		}
		
		public function actualizar(){
	
                         $id = $_POST['id'];
                         $procad=$_POST['procad'];
		        $pronom=$_POST['pronom'];
		        $promar=$_POST['promar'];
		        $precio=$_POST['precio'];
		        $estatus=$_POST['estatus'];
		        $stock=$_POST['stock'];
       		        $color=$_POST['color'];
		        $talla=$_POST['talla'];


			$vestidos = new Vestidos_model();
			$vestidos->modificar($id, $procad, $pronom, $promar, $precio, $estatus, $stock, $color, $talla);
			$data["titulo"] = "Vestidos";
			$this->index();
		}
		
		public function eliminar($id){
			
			$vestidos = new Vestidos_model();
			$vestidos->eliminar($id);
			$data["titulo"] = "Vestidos";
			$this->index();
		}	
	}
?>