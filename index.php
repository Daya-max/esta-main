<?php



?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/estilos.css">

<head>
	<title>Login</title>

	<?php require_once "scripts.php"; ?>
</head>

<body style="background-color: white">
	<br><br><br>
	<div class="container center">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel-heading" style="text-align: center;">safeme</div>
					<div class="panel panel-body">
						<div style="text-align:center;">
							<img src="images/1.png" height="250">
						</div>
						<p></p>
						<label>email</label>
						<input type="text" id="usuario" class="form-control input-sm" name="">
						<label>Password</label>
						<input type="password" id="password" class="form-control input-sm" name="">
						<p></p>
						<span class="btn btn-primary" id="entrarSistema">Entrar</span>
						<a href="registro.php" class="btn btn-danger">Registro</a>
					</div>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>

</html>

<script type="text/javascript">
	$(document).ready(function () {
		$('#entrarSistema').click(function () {
			if ($('#usuario').val() == "") {
				alertify.alert("Debes agregar el usuario");
				return false;
			} else if ($('#password').val() == "") {
				alertify.alert("Debes agregar el password");
				return false;
			}

			cadena = "usuario=" + $('#usuario').val() +
				"&password=" + $('#password').val();

			$.ajax({
				type: "POST",
				url: "php/login.php",
				data: cadena,
				success: function (r) {
					if (r == 1) {
						window.location = "Amenu.php";
					} else {
						alertify.alert("I invite you to sign up");
					}
				}
			});
		});
	});
</script>