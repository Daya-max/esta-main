<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeMe</title>
    <link rel="icon" href="../images/1.png">
    <link rel="stylesheet" href="../css/bitacora.css">
    <link rel="stylesheet" href="../css/styles.css">


    <script src="https://kit.fontawesome.com/92927bfbd1.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav>
    <?php require('style_log.php') ?>
    </nav>

<main>
<div class="container">
  <div class="row">
    <div class="col">
    <?php require_once('evento.php');?>
    </div>
    <div class="col">
     <?php require_once('index.php');?>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    </div>
  </div>
</div>
   
    <?php require_once('evento.php');?>
    
    
</main>
<script src="../js/scripts.js"></script>
<script src="../js/menu.js"></script>
</body>