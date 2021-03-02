<?php
include ('conexion.php');

$id = $_POST['id'];

mysqli_query($conexion,"DELETE FROM us_logros WHERE id = $id") or die ("Error al eliminar los datos");
mysqli_query($conexion,"DELETE FROM usuarios WHERE id = $id");
mysqli_query($conexion,"DELETE FROM us_juegos WHERE id = $id");
mysqli_close($conexion);

echo "Eliminado correctamente";  
?>