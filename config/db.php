<?php
	class Conexion{
		private $servidor;
		private $usuario;
		private $clave;
		private $base;

		public static function conectar(){
					
			$servidor="makrohard.sytes.net";
			$usuario="tpqt2023";
			$clave="pinturillo";
			$base="tpqtpint";


			$con=new mysqli($servidor,$usuario,$clave,$base);
			$con->query("SET NAMES 'utf8'");
			return $con;
		}
	}
	
?>
