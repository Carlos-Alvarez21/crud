<?php

session_start();

if(!(isset($_SESSION["user"]))){

	header("location:login.php");

}

require_once("model/intercambiosModel.php");

if(isset($_POST["agregar"])){

	$nombre= htmlentities($_POST["nombre"]);
	$categoria=$_POST["categoria"];
	$precio=(int) $_POST["precio"];
	$cantidad=(int) $_POST["cantidad"];
	$descripcion=$_POST["descripcion"];
	$imagen=$_FILES["imagen"]["name"];

	$imagen_tipo=$_FILES["imagen"]["type"];
	$imagen_peso=$_FILES["imagen"]["size"];

	$destino= "images/" . $imagen;

	if($imagen_tipo=="image/jpg" || $imagen_tipo=="image/jpeg" || $imagen_tipo=="image/png"){

		if($imagen_peso< (1024*1024*8)){

		$obj = new IntercambiosModel();

		$obj->agregarData($nombre, $categoria, $precio, $cantidad, $descripcion, $imagen);		

			if(!(move_uploaded_file($_FILES["imagen"]["tmp_name"], $destino))){

				echo "Error subiendo el archivo";
				exit();
			}
		}
		else{
			echo "Imagen muy pesada";
			exit();
		}

	}
	else{
		echo "formato no aceptado";
		exit();
	}

}

require_once("view/agregarView.php");


?>