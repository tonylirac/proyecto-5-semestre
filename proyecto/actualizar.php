<?php
include ('conexion.php');

$id = $_POST['id'];
$gamertag = $_POST['gamertag'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

mysqli_query($conexion, "UPDATE usuarios SET gamertag='$gamertag' WHERE id=$id") 
or die ("Error al actualizar los datos");
mysqli_query($conexion, "UPDATE usuarios SET correo='$correo' WHERE id=$id");
mysqli_query($conexion, "UPDATE usuarios SET clave='$clave' WHERE id=$id");

mysqli_close($conexion);
echo "Datos actualizados correctamente";

?>