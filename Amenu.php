<?php
session_start();

if (isset($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SafeMe</title>
  <!-- <?php require_once "scripts.php"; ?>  -->
  <link rel="icon" href="images/1.png">


  <script src="https://kit.fontawesome.com/92927bfbd1.js" crossorigin="anonymous"></script>

</head>

<body>

  <?php require('php/AAlinea.php') ?>

  <main>
    <?php require('php/inf4.php') ?>
  </main>

  <script src="js/menu.js"></script>
</body>

</html>
<?php
} else {
  header("location:index.php");
}
?>