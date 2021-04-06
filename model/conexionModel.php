<?php

class ConexionModel {

	public static function Conectar(){

		try{

			require_once("config.php");

			$conexion= new PDO(DSN,USER,PASSWORD);
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET UTF8");

			return $conexion;

		}
		catch(Exception $e){

			echo "No se pudo conectar con la base de datos \nMensaje: " . $e->getMessage();
			echo "\nLinea del error: " . $e->getLine();

		}


	}
	

}



?>