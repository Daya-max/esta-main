<?php
require_once "conexion.php";
$conexion = conexion();
session_start();
$user = $_SESSION['user'];
              $get_user = "SELECT * from usuarios where usuario ='$user'"; 
              $run_user = mysqli_query($conexion,$get_user);
              $row = mysqli_fetch_array($run_user);
              $user_id=$row['id'];

if (isset($_POST["feli-btn"])) {
    $emocion = 1;
    $emocionN = 'feliz';
    $branche = $_POST["feli-select"];
    $desc = $_POST["text_feli"];


    $sql = "INSERT INTO log_feels(id,id_emocion,nombre_emocion,id_emc_desagrado,id_emc_felicidad,	
    id_emc_ira,id_emc_miedo,id_emc_sorpresa,id_emc_tristeza,descripcion,created_at)
     values($user_id, $emocion, '$emocionN', 0 , $branche, 0, 0, 0, 0, '$desc', now())";

    $resultado = mysqli_query($conexion,$sql);
    
    if($resultado){
        $sql1 = "INSERT INTO events(title,color,descrip) VALUES('$branche','#FFD700','$desc')";
        $resultado1 = mysqli_query($conexion,$sql1);
        if($resultado1){
            $usuarioo = mysqli_query($con,"SELECT * FROM events");
            $use = mysqli_fetch_array($usuarioo); 

            $id_user = $use['id'];
            $title = $use['title'];
            $color = $use['color'];
            $descrip = $use['descrip'];
            $start = $use['startt'];
        }
    }

}
if (isset($_POST["scared-btn"])) {
    $emocion = 3;
    $emocionN = 'scared';
    $branche = $_POST["scared-select"];
    $desc = $_POST["text_scared"];


    $sql = "INSERT INTO log_feels(id,id_emocion,nombre_emocion,id_emc_desagrado,id_emc_felicidad,	
    id_emc_ira,id_emc_miedo,id_emc_sorpresa,id_emc_tristeza,descripcion,created_at)
     values($user_id, $emocion, '$emocionN', 0 , 0, 0, '$branche', 0, 0, '$desc', now())";

    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        $sql1 = "INSERT INTO events(title,color,descrip) VALUES('$branche','#800080','$desc')";
        $resultado1 = mysqli_query($conexion,$sql1);
        if($resultado1){
            $usuarioo = mysqli_query($con,"SELECT * FROM events");
            $use = mysqli_fetch_array($usuarioo); 

            $id_user = $use['id'];
            $title = $use['title'];
            $color = $use['color'];
            $descrip = $use['descrip'];
            $start = $use['startt'];
        }
    }

}
if (isset($_POST["tite-btn"])) {
    $emocion = 6;
    $emocionN = 'tite';
    $branche = $_POST["tite-select"];
    $desc = $_POST["text_tite"];


    $sql = "INSERT INTO log_feels(id,id_emocion,nombre_emocion,id_emc_desagrado,id_emc_felicidad,	
    id_emc_ira,id_emc_miedo,id_emc_sorpresa,id_emc_tristeza,descripcion,created_at)
     values($user_id, $emocion, '$emocionN', 0 , 0, 0, 0, 0, '$branche', '$desc', now())";

    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        $sql1 = "INSERT INTO events(title,color,descrip) VALUES('$branche','#0000ff','$desc')";
        $resultado1 = mysqli_query($conexion,$sql1);
        if($resultado1){
            $usuarioo = mysqli_query($con,"SELECT * FROM events");
            $use = mysqli_fetch_array($usuarioo); 

            $id_user = $use['id'];
            $title = $use['title'];
            $color = $use['color'];
            $descrip = $use['descrip'];
            $start = $use['startt'];
        }
    }

}
if (isset($_POST["nojao-btn"])) {
    $emocion = 4;
    $emocionN = 'nojao';
    $branche = $_POST["nojao-select"];
    $desc = $_POST["text_nojao"];

    $sql = "INSERT INTO log_feels(id,id_emocion,nombre_emocion,id_emc_desagrado,id_emc_felicidad,	
    id_emc_ira,id_emc_miedo,id_emc_sorpresa,id_emc_tristeza,descripcion,created_at)
     values($user_id, $emocion, '$emocionN', 0 , '$branche', 0, 0, 0, 0, '$desc', now())";

    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        $sql1 = "INSERT INTO events(title,color,descrip) VALUES('$branche','#ff0000','$desc')";
        $resultado1 = mysqli_query($conexion,$sql1);
        if($resultado1){
            $usuarioo = mysqli_query($con,"SELECT * FROM events");
            $use = mysqli_fetch_array($usuarioo); 

            $id_user = $use['id'];
            $title = $use['title'];
            $color = $use['color'];
            $descrip = $use['descrip'];
            $start = $use['startt'];
        }
    }
}
if (isset($_POST["desagrado-btn"])) {
    $emocion = 5;
    $emocionN = 'desagrado';
    $branche = $_POST["desagrado-select"];
    $desc = $_POST["text_desagrado"];

    $sql = "INSERT INTO log_feels(id,id_emocion,nombre_emocion,id_emc_desagrado,id_emc_felicidad,	
    id_emc_ira,id_emc_miedo,id_emc_sorpresa,id_emc_tristeza,descripcion,created_at)
     values($user_id, $emocion, '$emocionN','$branche' , 0, 0, 0, 0, 0, '$desc', now())";

    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        $sql1 = "INSERT INTO events(title,color,descrip) VALUES('$branche','#00ff00','$desc')";
        $resultado1 = mysqli_query($conexion,$sql1);
        if($resultado1){
            $usuarioo = mysqli_query($con,"SELECT * FROM events");
            $use = mysqli_fetch_array($usuarioo); 

            $id_user = $use['id'];
            $title = $use['title'];
            $color = $use['color'];
            $descrip = $use['descrip'];
            $start = $use['startt'];
        }
    }
}
if (isset($_POST["sorpresa-btn"])) {
    $emocion = 2;
    $emocionN = 'sorpresa';
    $branche = $_POST["sorpresa-select"];
    $desc = $_POST["text_sorpresa"];

    $sql = "INSERT INTO log_feels(id,id_emocion,nombre_emocion,id_emc_desagrado,id_emc_felicidad,	
    id_emc_ira,id_emc_miedo,id_emc_sorpresa,id_emc_tristeza,descripcion,created_at)
     values($user_id, $emocion, '$emocionN',0, 0, 0, 0, '$branche' , 0, '$desc', now())";

    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        $sql1 = "INSERT INTO events(title,color,descrip) VALUES('$branche','#ff0080','$desc')";
        $resultado1 = mysqli_query($conexion,$sql1);
        if($resultado1){
            $usuarioo = mysqli_query($con,"SELECT * FROM events");
            $use = mysqli_fetch_array($usuarioo); 

            $id_user = $use['id'];
            $title = $use['title'];
            $color = $use['color'];
            $descrip = $use['descrip'];
            $start = $use['startt'];
        }
    }
}

?>