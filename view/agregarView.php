<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>

<h1 class="titulo">CRUD<span>Create Read Update Delete</span></h1>

<div class="agregar">
	<a href="index.php"><input class="btn btn-green" type="button" name="" value="Volver"></a>
	<a href="cerrar.php"><input class="btn btn-green" type="button" name="" value="Cerrar Sesión"></a>
</div>

<!--FORMULARIO PARA SUBIR ITEMS-->

<div class="container">
	<!--ARREGLAR PROBLEMA DE SEGURIDAD-->
	<form action="/pruebas/crud/agregar.php" method="post" enctype="multipart/form-data">
		<table class="table2">
			<tr><td>Nombre</td><td><input type="text" name="nombre"></td></tr>
			<tr><td>Categoria</td><td><input type="text" name="categoria"></td></tr>
			<tr><td>Precio</td><td><input type="text" name="precio"></td></tr>
			<tr><td>Cantidad</td><td><input type="text" name="cantidad"></td></tr>
			<tr><td>Descripcion</td><td><textarea name="descripcion"></textarea></td></tr>
			<tr><td>Imagen</td><td><label id="subir" for="imagen">Subir<input type="file" name="imagen" id="imagen"></td><label></tr>
			<tr><td colspan="2"><input style="width: 100%; margin-top:20px;" class="btn btn-green"type="submit" name="agregar" value="Agregar"></td></tr>
		</table>
	</form>
</div>

</body>
</html>