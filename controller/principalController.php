<?php

session_start();

if(!(isset($_SESSION["user"]))){

	header("location:login.php");

}

require_once("model/intercambiosModel.php");

$obj= new intercambiosModel();

if(isset($_GET["borrar"])){

	$valor=$_GET["borrar"];

	$obj->borrarData($valor);

}

if(isset($_GET["pagina"])){

	$pagina=$_GET["pagina"];
}
else{
	
	$pagina=1;
}


$array= $obj->getData($pagina);

$cantidad_paginacion=$obj->cantidadPaginacion();

require_once("view/principalView.php");


?>