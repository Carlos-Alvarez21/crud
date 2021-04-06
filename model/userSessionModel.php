<?php

include_once "intercambiosModel.php";

class sessionUser{

	private $user;

	public function comprobarUsuario($user, $password){

		$obj = new intercambiosModel();

		$bool = $obj->comprobarUser($user, $password);

		if($bool){

			$this->user=$user;

			session_start();

			$_SESSION["user"]=$this->user;

			header("location:index.php");

		}
		else{
			header("location:login.php");

		}


	}


}


?>