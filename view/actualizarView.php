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
	<form action="/pruebas/crud/actualizar.php" method="post" enctype="multipart/form-data">
		<table class="table2">
			<tr><input type="hidden" name="id" value="<?php echo $data[6]?>"></tr>
			<tr><td>Nombre</td><td><input type="text" name="nombre" value="<?php echo $data[0];?>"></td></tr>
			<tr><td>Categoria</td><td><input type="text" name="categoria" value="<?php echo $data[1];?>"></td></tr>
			<tr><td>Precio</td><td><input type="text" name="precio" value="<?php echo $data[2];?>"></td></tr>
			<tr><td>Cantidad</td><td><input type="text" name="cantidad" value="<?php echo $data[3];?>"></td></tr>
			<tr><td>Descripcion</td><td><textarea name="descripcion"><?php echo $data[4];?></textarea></td></tr>
			<tr><td><img width="200px" height="200px" src="images/<?php echo $data[5];?>"></td></tr>
			<tr><td>Imagen</td><td><label id="subir" for="imagen">Subir<input type="file" name="imagen" id="imagen"></td><label></tr>
			<tr><td colspan="2"><input style="width: 100%; margin-top:20px;" class="btn btn-green"type="submit" name="actualizar" value="Actualizar"></td></tr>
		</table>
	</form>
</div>

</body>
</html>