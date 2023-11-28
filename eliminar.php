<?php

include('db.php');

$id = $_POST['id'];
mysqli_query($conexion, "DELETE FROM canciones where id='$id'")or die ("error al eliminar");

mysqli_close($conexion);
header("location:mostrar.php");

?>