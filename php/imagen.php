<?php
include('conexion.php');

$nombre = $_POST['nombre'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));


$query = "INSERT INTO imagenes (nombre,imagen) VALUES ('$nombre','$imagen')";

$resultado = $conexion->query($query);

if($resultado){
    echo'si pad';
}else{
    echo'lloremos';
}
?>