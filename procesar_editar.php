<?php

include('db.php');
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$artista = $_POST['artista']; // Fix the typo here
$album = $_POST['album'];
$ano = $_POST['ano'];

mysqli_query($conexion,"UPDATE `canciones` SET `nombre` = '$nombre', `artista` = '$artista', `album` = '$album', `ano` = '$ano' WHERE `id` = $id") or die ("error de actulizar");

mysqli_close($conexion);
header("location:mostrar.php");

?>