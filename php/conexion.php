<?php
function conexion()
{
	return $conexion = mysqli_connect("localhost", "root", "", "safeme");
}

$con = mysqli_connect("localhost", "root", "", "safeme");
?>