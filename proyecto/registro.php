<?php
include 'conexion.php';
$gamertag = $_POST["gamertag"];
$correo = $_POST["correo"];
$clave = $_POST["clave"];
$insertar = "INSERT INTO usuarios(gamertag, correo, clave)
VALUES ('$gamertag', '$correo', '$clave')";
$resultado = mysqli_query($conexion, $insertar);
$verificar_gamertag = mysqli_query($conexion, "SELECT * FROM usuarios WHERE gamertag = '$gamertag'");
if (mysqli_num_rows($verificar_gamertag) > 1){
 echo '<script> alert("El usuario ya está registrado");
 window.history.go(-1);</script>';
 exit;
}
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");
if (mysqli_num_rows($verificar_correo) > 1){
 echo '<script> alert("El correo ya está registrado");
 window.history.go(-1);</script>';
 exit;
}
if(!$resultado) {
 echo 'Error al registrarse';
} else {
 echo '<script> alert("Usted ha sido registrado correctamente");
 window.history.go(-1);</script>';
}
mysqli_close($conexion);