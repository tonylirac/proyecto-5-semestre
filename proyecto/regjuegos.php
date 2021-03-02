<?php
include 'conexion.php';
$id = $_POST["id"];
$juegos = $_POST["juegos"];
$clasificacion = $_POST["clasificacion"];
$categoria = $_POST["categoria"];
$insertar = "INSERT INTO us_juegos(id, juegos, clasificacion, categoria)
VALUES ('$id', '$juegos', '$clasificacion', '$categoria')";
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado) {
 echo 'Error al registrarse';
} else {
 echo '<script> alert("Registrado correctamente");
 window.history.go(-1);</script>';
}
mysqli_close($conexion);