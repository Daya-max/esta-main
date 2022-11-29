<?php
require_once "conexion.php";
$conexion = conexion();


if (isset($_POST["feli-btn"])) {
    $emocion = 1;
    $emocionN = 'feliz';
    $branche = $_POST["feli-select"];
    $desc = $_POST["text_feli"];
    $color = '#FFD700';

    $sql = "INSERT INTO log_feels(id,id_emocion,nombre_emocion,id_emc_desagrado,id_emc_felicidad,	
    id_emc_ira,id_emc_miedo,id_emc_sorpresa,id_emc_tristeza,descripcion,created_at)
     values(1, $emocion, '$emocionN', 0 , $branche, 0, 0, 0, 0, '$desc', now())";

    $resultado = mysqli_query($conexion,$sql);

    
    // $sql1 = "INSERT INTO events(title,color,start) VALUES('$branche',$color, now() )";
    // $resultado = mysqli_query($conexion,$sql1);


    if($resultado){
        echo "si jala";
    }

}

?>