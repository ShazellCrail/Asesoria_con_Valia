<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/estilo.css">
 
	</head>
	<body>
		<br><p class="inicio">BIENVENIDO/A <br>ADMINISTRADOR/A</p><h2><mark>
			<?php					
				session_start();
				$correo = $_SESSION['correo'];
				echo $correo;
			?>
		</h2></mark>
		<img src="img\administrador.png" alt="Profesores" height="280">
		<br><br>
	</body>
</html>