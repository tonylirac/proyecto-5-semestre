<?php
include 'conexion.php';
$usuarios = "SELECT * FROM usuarios";
?>
	<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mostrar</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel=stylesheet href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
<link href="eliminar.css" rel="stylesheet" type="text/css">
	<link href="mostrar.css" rel="stylesheet" type="text/css">
</head>
<body>
<form method="post" class="form-btn">
<div class="container-table">
    <div class="table__title"><h1>jugadores</h1></div>
    <div class="table__header">id</div>
    <div class="table__header">usuarios</div>
    <div class="table__header">correos</div>
    <div class="table__header">contraseña</div>
    <?php $resultado = mysqli_query($conexion, $usuarios);
    while($row = mysqli_fetch_assoc($resultado)) { ?>
    <div class="table__item"><?php echo $row["id"]; ?></div>
     <div class="table__item"><?php echo $row["gamertag"]; ?></div>
    <div class="table__item"><?php echo $row["correo"]; ?></div>
    <div class="table__item"><?php echo $row["clave"]; ?></div>
    <?php } mysqli_free_result($resultado);?>
</div>
</form>
<center><a href="opciones.html" class="button">Regresar</a></center>
	
</body>
</html>