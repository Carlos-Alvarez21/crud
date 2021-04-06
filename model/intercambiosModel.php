<?php

class IntercambiosModel {

	private $conexion;

	private $cantidad_valores_pantalla=5;
	//private $cantidad_paginacion;



	public function __construct(){

		require_once("conexionModel.php");

		$this->conexion=ConexionModel::Conectar();

	}

	public function cantidadPaginacion(){

		$sql="select count(*) from crud";

		$cantidad_items = $this->conexion->query($sql)->fetchColumn(); //cantidad de items en la tabla 


		return (int) ceil($cantidad_items/$this->cantidad_valores_pantalla);


	}

	public function getData($pagina){

		$valor_inicial=($pagina-1)*$this->cantidad_valores_pantalla;

		require_once("itemsModel.php");

		$sql="select * from crud limit $valor_inicial,$this->cantidad_valores_pantalla";

		$resultado=$this->conexion->query($sql);

		$array= array(); //aquí se guardaran todos los objetos

		while($fila=$resultado->fetch(PDO::FETCH_ASSOC)){

			$array[]= new ItemsModel($fila["id"],$fila["nombre"],$fila["categoria"],$fila["precio"],$fila["cantidad"],$fila["descripcion"],$fila["imagen"]);

		}

		return $array;

	}

	public function agregarData($nombre, $categoria, $precio, $cantidad, $descripcion, $imagen){

		$sql="insert into crud (nombre, categoria, precio, cantidad, descripcion, imagen) values (?,?,?,?,?,?)";

		$resultado=$this->conexion->prepare($sql);
		$resultado->execute(array($nombre, $categoria, $precio, $cantidad, $descripcion, $imagen));
	}

	public function borrarData($item){

		$valor=addslashes($item);

		$sql="delete from crud where id=$valor";

		$this->conexion->query($sql);


	}

	public function selectItem($item){

		$sql="select * from crud where id=$item";

		$resultado=$this->conexion->query($sql);

		$fila=$resultado->fetch(PDO::FETCH_ASSOC);

		$array=array();

		$array=[$fila["nombre"],$fila["categoria"],$fila["precio"],$fila["cantidad"],$fila["descripcion"],$fila["imagen"], $fila["id"]];

		return $array;


	}

	public function actualizarData($id, $nombre, $categoria, $precio, $cantidad, $descripcion, $imagen){

		$sql="update crud set nombre =?, categoria =?, precio =?, cantidad =?, descripcion =?, imagen =? where id=?";

		$resultado=$this->conexion->prepare($sql);
		$resultado->execute(array($nombre, $categoria, $precio, $cantidad, $descripcion, $imagen, $id));
	}

	public function imagen($id){
		$sql = "select imagen from crud where id =?";

		$resultado=$this->conexion->prepare($sql);
		$resultado->execute(array($id));
		$fila=$resultado->fetch(PDO::FETCH_ASSOC);

		return $fila["imagen"];

	}

	public function comprobarUser($user, $password){

		$sql = "select count(*) from usuario where usuario = ? AND contraseña = ?";

		$resultado=$this->conexion->prepare($sql);
		$resultado->execute(array($user, $password));
		$fila=$resultado->fetchColumn();

		if($fila==0){
			return false;
		}
		else{
			return true;
		}

	}



}
?>