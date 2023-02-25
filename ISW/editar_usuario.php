<?php
	session_start();
	include("conectar_bd.php");
	$id = $_GET["id"];
	$consulta="SELECT * FROM usuario WHERE correo='$id'";
	$resultado=mysqli_query($conexion, $consulta);
	$filas = mysqli_fetch_array($resultado);
	$dato1 = $filas['nombre'];
	$dato2 = $filas['apellidos'];
	$dato3 = $filas['fecha_nac'];
	$dato4 = $filas['contrasenia'];
	$dato5 = $filas['correo'];
	$dato6 = $filas['rol'];
?>
<!DOCTYPE html>

<html lang="en">


	<head>
    
		<meta charset="UTF-8">
    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<title>Editar alumno</title>
		<link rel="stylesheet" href="css/estilo.css">

	</head>


	<body>
    
		<div id="bg"></div>
   
		<section id="barraSuperior">
        
			<ul class="nav-bar-list">
            
				<li class="nav-bar-list-large large">
                
					<a href="">
<img src="img/logoo.png" class="icon-logo">Asesor&iacute;a con Val&iacute;a</a>
            
				</li>
           
				<li class="nav-bar-list-item-right">
					<a href="tabla_alumnos.php">Regresar</a>
				</li>
 
			</ul>
    
		</section>
			<section id="banner" class="texto">
		<form action="modificar_usuario.php" method="post" align="center">
	       		<br><h1 class="titulos"><u>DATOS DE LA CUENTA</u></h1><br>
				<table align="center">
					<tr>
						<td><label>NOMBRE(S):</label></td>
						<td><input type="text" name="nombre" value="<?php echo $dato1;?>" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><label>APELLIDOS:</label></td>
	       					<td><input type="text" name="apellidos" value="<?php echo $dato2;?>" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><label>FECHA DE NACIMIENTO:</label></td>
						<td><input type="date" name="fecha_nac" value="<?php echo $dato3;?>" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><label>CORREO ELECTR&Oacute;NICO:</label></td>
	       					<td><input type="email" name="correo" title="No puedes modificar el correo" value="<?php echo $dato5;?>" readonly></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><label>ROL:</label></td>
						<td>
							<?php
								if($dato6 == 2){
							?>
									<select name="rol" size="1" required>
  										<option value="2">Profesor</option>
						  			 </select>
								<?php }else{ ?>
									<select name="rol" size="1" required>
  										<option value="3">Estudiante</option>
						  			</select>
								<?php } ?>
						</td>
					</tr>
				</table>
			</font>
			<br><input type="submit" class="presionar" name="enviar" value="GUARDAR CAMBIOS"><br><br>
        	</form>
    	</body>
</html>

<?php
	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>