<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include('db.php');

// Assuming db.php contains the database connection code and $conexion is the connection variable

$nombre = $_POST['nombre'];
$artista = $_POST['artista']; // Fix the typo here
$album = $_POST['album'];
$ano = $_POST['ano'];

// Use prepared statement to prevent SQL injection
$consulta = $conexion->prepare("INSERT INTO canciones (nombre, artista, album, ano) VALUES (?, ?, ?, ?)");
$consulta->bind_param("sssi", $nombre, $artista, $album, $ano);

if ($consulta->execute()) {
    header("location:mostrar.php");
} else {
    echo "Error de registro: " . $consulta->error;
}

$consulta->close();
$conexion->close();
?>

