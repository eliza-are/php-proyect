<h1>Registro</h1>

<div class="d-flex justify-content-center text-center">
	<form class="p-5 bg-light" method="post">
		<div class="form-group">
			<label for="nombre">Nombre:</label>
			<input type="text" class="form-control" id="nombre" name="registerName">
		</div>
		<div class="form-group">
			<label for="email">Correo:</label>
			<input type="email" class="form-control" id="email" name="registerEmail">
		</div>
		<div class="form-group">
			<label for="pwd">Contraseña:</label>
			<input type="password" class="form-control" id="pwd" name="registerPassword">
		</div>
		
		<?php 

		$register = formsController::ctrRegister();

		if($register == 'ok'){

			//Script para limpiar el storage
			echo '<script type="text/javascript">
				if (window.history.replaceState){
					window.history.replaceState(null, null, window.location.href);
				}
			</script>';


			echo '<div class="alert alert-success">Registro guardado exitosamente</div>';
		}

		?>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</div>