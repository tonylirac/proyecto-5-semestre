<?php
include 'conexion.php';
$id = $_POST["id"];
$juegos = $_POST["juegos"];
$logro = $_POST["logro"];
$puntos = $_POST["puntos"];
$insertar = "INSERT INTO us_logros(id, juegos, logro, puntos)
VALUES ('$id', '$juegos', '$logro', '$puntos')";
$resultado = mysqli_query($conexion, $insertar);
if(!$resultado) {
 echo 'Error al registrarse';
} else {
 echo '<script> alert("Registrado correctamente");
 window.history.go(-1);</script>';
}
mysqli_close($conexion);