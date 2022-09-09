<?php
	
	class Conectar {
		
		public static function conecta(){
			
			$conecta = new mysqli("localhost", "root", "leslie", "vestidos");
			return $conecta;
			
		}
	}
?>