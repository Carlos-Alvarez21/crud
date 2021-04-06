<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>

<h1 class="titulo">CRUD<span>Create Read Update Delete</span></h1>

<!--BOTON PARA AÑADIR ITEMS-->

<div class="agregar">
	<a href="agregar.php"><input class="btn btn-green" type="button" name="" value="Añadir items"></a>
	<a href="cerrar.php"><input class="btn btn-green" type="button" name="" value="Cerrar Sesión"></a>
</div>




<!--AQUI SE MUESTRAN LAS BUSQUEDAS-->

<div style="overflow: auto;">
	<table class="table">
		<tr  class="table-head"><td>Id</td><td>Nombre</td><td>Categoria</td><td>Precio</td><td>Cantidad</td><td>Descripcion</td><td>Imagen</td><td></td><td></td></tr>

	<?php

	for($i=0; $i<count($array);$i++){


		//echo $array[$i]->getCantidad();

		echo "<tr><td>".$array[$i]->getId()."</td><td>".$array[$i]->getNombre()."</td><td>".$array[$i]->getCategoria()."</td><td>".$array[$i]->getPrecio()."</td><td>".$array[$i]->getCantidad()."</td><td>".$array[$i]->getDescripcion()."</td><td>".$array[$i]->getImagen()."</td><td><a href='/pruebas/crud/actualizar.php?actualizar=".$array[$i]->getId()."'><input type=\"button\" class=\"btn btn-yellow\" value=\"Actualizar\"></a></td><td><a href='/pruebas/crud/index.php?borrar=".$array[$i]->getId()."'><input class=\"btn btn-red\" type=\"button\" value=\"Borrar\"></a></td></tr>";
	}

	

	?>

	</table>
</div>

<!--AQUI SE MUESTRA LA PAGINACION-->

<div class="pag">
	<?php 

	//echo "<a><input type=\"button\" value=\"<\"></a>";

	for($i=1;$i<=$cantidad_paginacion;$i++){

		echo "<a href=\"/pruebas/crud/index.php?pagina=$i\"><input type=\"button\" value=\"$i\"></a>";
	} 

	//echo "<a><input type=\"button\" value=\">\"></a>";

	?>
</div>

</body>
</html>