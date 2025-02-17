<?php
$host = "localhost"; 
$usuario = "root"; 
$contraseña = ""; 
$base_de_datos = "timexus_base"; 

$conexion = new mysqli($host, $usuario, $contraseña, $timexus_base);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
} else {
    echo "✅ Conexión exitosa a la base de datos";
}
?>