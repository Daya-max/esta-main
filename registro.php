<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/estilos.css">
<head>
	<title>Registro</title>
	<?php require_once "scripts.php"; ?>
</head>

<body style="background-color: gray">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-danger">
					<div class="panel panel-heading">Registro de usuario</div>
					<div class="panel panel-body">
						<form id="frmRegistro">
							<label>Name</label>
							<input type="text" class="form-control input-sm" id="nombre" name="">
							<label>Last name</label>
							<input type="text" class="form-control input-sm" id="apellido" name="">
							<label>Email</label>
							<input type="email" class="form-control input-sm" id="usuario" name="">
							<label>Password</label>
							<input type="password" class="form-control input-sm" id="password" name="">
							<p></p>
							<span class="btn btn-primary" id="registrarNuevo">Registrar</span>
						</form>
						<div style="text-align: right;">
							<a href="index.php" class="btn btn-default">Login</a>
						</div>
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
		$('#registrarNuevo').click(function () {

			if ($('#nombre').val() == "") {
				alertify.alert("you must add name ");
				return false;
			} else if ($('#apellido').val() == "") {
				alertify.alert("you must add lastname");
				return false;
			} else if ($('#usuario').val() == "") {
				alertify.alert("you must add user");
				return false;
			} else if ($('#password').val() == "") {
				alertify.alert("You must add password");
				return false;
			}

			cadena = "nombre=" + $('#nombre').val() +
				"&apellido=" + $('#apellido').val() +
				"&usuario=" + $('#usuario').val() +
				"&password=" + $('#password').val();

			$.ajax({
				type: "POST",
				url: "php/registro.php",
				data: cadena,
				success: function (r) {

					if (r == 2) {
						alertify.alert("This user already exists, try another one");
					}
					else if (r == 1) {
						$('#frmRegistro')[0].reset();
						alertify.success("Successfully added");
					} else {
						alertify.error("Failure to add");
					}
				}
			});
		});
	});
</script>