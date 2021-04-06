<?php

session_start();

if(!(isset($_SESSION["user"]))){

	header("location:login.php");

}

include "model/intercambiosModel.php";

if(isset($_POST["actualizar"])){

	$id=$_POST["id"];
	$nombre= htmlentities($_POST["nombre"]);
	$categoria=$_POST["categoria"];
	$precio=(int) $_POST["precio"];
	$cantidad=(int) $_POST["cantidad"];
	$descripcion=$_POST["descripcion"];

	//var_dump($_FILES["imagen"]);

	if($_FILES["imagen"]["name"]!="" && $_FILES["imagen"]["type"]!="" && $_FILES["imagen"]["tmp_name"]!="" && $_FILES["imagen"]["size"]!=0){

		$imagen=$_FILES["imagen"]["name"];

		$imagen_tipo=$_FILES["imagen"]["type"];
		$imagen_peso=$_FILES["imagen"]["size"];

		$destino= "images/" . $imagen;

		if($imagen_tipo=="image/jpg" || $imagen_tipo=="image/jpeg" || $imagen_tipo=="image/png"){

			if($imagen_peso< (1024*1024*8)){

				

			$obj = new IntercambiosModel();

			$obj->actualizarData($id, $nombre, $categoria, $precio, $cantidad, $descripcion, $imagen);		

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
			echo "formato no aceptado 1";
			exit();
		}

	}
	else{


		$obj = new IntercambiosModel();
		$imagen=$obj->imagen($id);

		echo $imagen;

		$obj->actualizarData($id, $nombre, $categoria, $precio, $cantidad, $descripcion, $imagen);

	}

header("location:index.php");
	
}


$valor=$_GET["actualizar"];

$obj1=new intercambiosModel();

$data = $obj1->selectItem($valor);


include "view/actualizarView.php";

?>