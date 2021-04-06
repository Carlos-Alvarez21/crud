<?php

class ItemsModel {

	private $id;
	private $nombre;
	private $categoria;
	private $precio;
	private $cantidad;
	private $descripcion;
	private $imagen;


	public function __construct(int $id, string $nombre, string $categoria, int $precio, int $cantidad, string $descripcion, string $imagen){

		$this->id=$id;
		$this->nombre=$nombre;
		$this->categoria=$categoria;
		$this->precio=$precio;
		$this->cantidad=$cantidad;
		$this->descripcion=$descripcion;
		$this->imagen=$imagen;

	}

	public function getID(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function setNombre(string $nombre){
		$this->nombre=$nombre;
	}

	public function getCategoria(){
		return $this->categoria;
	}

	public function setCategoria(string $categoria){
		$this->categoria=$categoria;
	}

	public function getPrecio(){
		return $this->precio;
	}

	public function setPrecio(int $precio){
		$this->precio=$precio;
	}


	public function getCantidad(){
		return $this->cantidad;
	}

	public function setCantidad(int $cantidad){
		$this->cantidad=$cantidad;
	}


	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setDescripcion(string $descripcion){
		$this->descripcion=$descripcion;
	}

	public function getImagen(){
		return $this->imagen;
	}

	public function setImagen(string $imagen){
		$this->imagen=$imagen;
	}

	
}

?>