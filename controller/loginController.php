<?php

include "model/userSessionModel.php";

if(isset($_POST["login"])){

	$user=$_POST["usuario"];
	$password=$_POST["password"];

	echo $user, $password;

	$obj= new sessionUser();

	$obj->comprobarUsuario($user, $password);

}

include "view/loginView.php";


?>