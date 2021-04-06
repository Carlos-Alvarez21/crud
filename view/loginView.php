<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>

<h1 class="titulo">CRUD<span>Create Read Update Delete</span></h1>

<div>
	<form action="login.php" method="post">
		<table class="login">
			<tr><td>Usuario</td></tr>
			<tr><td><select class="selector" name="usuario">
						<option value="administrador">Administrador</option>
						<option value="visitante">Visitante</option>


					</select></td></tr>
			<tr><td>Contraseña</td></tr>
			<tr><td><input type="password" name="password"></td></tr>
			<tr><td><input class="btn btn-green" type="submit" name="login" value="Log In"></td></tr>
		</table>
	</form>
</div>

<div>
	<table style="width: 40%;" class="table">
		<thead>
			<tr><td>Usuario</td><td>Contraseña</td></tr>
		</thead>
		<tbody>
			<tr><td>Administrador</td><td>1234</td></tr>
			<tr><td>Visitante</td><td>14321</td></tr>
		</tbody>
	</table>
</div>

</body>
</html>