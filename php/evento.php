<?php 
$con = mysqli_connect("localhost", "root", "", "safeme");
$user = $_SESSION['user'];
              $get_user = "SELECT * from usuarios where usuario ='$user'"; 
              $run_user = mysqli_query($conexion,$get_user);
              $row = mysqli_fetch_array($run_user);
              $user_id=$row['id'];

$CantidadMostrar = 100;

    $compag = (int)(!isset($_GET['pag'])) ? 1 : $_GET['pag'];
    $TotalReg = mysqli_query($con, "SELECT * FROM events where userID = $user_id");
    $totalr = mysqli_num_rows($TotalReg);

    $TotalRegistro = ceil($totalr/$CantidadMostrar);

    $IncrimentNum = (($compag +1)<= $TotalRegistro)?($compag +1):0;

    $consultavistas = "SELECT * FROM events where userID = $user_id ORDER BY id DESC";
    $consulta = mysqli_query($con,$consultavistas);
    while ($lista = mysqli_fetch_array($consulta)){

        $userid = $lista['userID'];

        $usuarioo = mysqli_query($con,"SELECT * FROM usuarios WHERE id = '$userid' ");
        $use = mysqli_fetch_array($usuarioo); 

?>

<br>
<div class="container">
<div class="card" style="width: 18rem;">
  <ul class="list-group list-group-flush">
  <?php
        if($lista['emocion'] == 1){
  ?>
 <li class="list-group-item"><center><img class="img-fluid" src="../images/mapache_feli.png" width="30%"></center></li>
 <?php
  }if($lista['emocion'] == 2){
    ?>
   <li class="list-group-item"><center><img class="img-fluid" src="../images/mapache_sorprendido.png" width="30%"></center></li>
   <?php
    }if($lista['emocion'] == 3){
        ?>
       <li class="list-group-item"><center><img class="img-fluid" src="../images/mapache_miedo.png" width="30%"></center></li>
       <?php
        }if($lista['emocion'] == 4){
            ?>
           <li class="list-group-item"><center><img class="img-fluid" src="../images/mapache_enojado.png" width="30%"></center></li>
           <?php
            }
            if($lista['emocion'] == 5){
                ?>
               <li class="list-group-item"><center><img class="img-fluid" src="../images/mapache_desagrado.png" width="30%"></center></li>
               <?php
                }
                if($lista['emocion'] == 6){
                    ?>
                   <li class="list-group-item"><center><img class="img-fluid" src="../images/mapache_tite.png" width="30%"></center></li>
                   <?php
                    }
 ?>
    <li class="list-group-item"><center><?php echo $lista['title']; ?></center></li>
    <li class="list-group-item"><center><?php echo $lista['descrip']; ?></center></li>
    <li class="list-group-item"><center><?php echo $lista['startt']; ?></center></li>
  </ul>
</div>
</div>


<?php
}

?>