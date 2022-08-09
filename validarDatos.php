<?php
require_once ('conexion/conexion.php');


$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];


 


 
   $sql = "INSERT INTO contactos (id, nombre, telefono, asunto, comentario)
VALUES (NULL, '$nombre','$telefono', '$asunto', '$correo', '$comentario')";
$resultado = $conn->query($sql); 

 

?>






