<?php
	session_start();
	$correo = $_SESSION['correo'];
	include("conectar_bd.php");
	$consulta="SELECT * FROM usuario WHERE correo='$correo'";
	$resultado=mysqli_query($conexion, $consulta);
	$filas=mysqli_fetch_array($resultado);
	$dato1 = $filas['nombre'];
	$dato2 = $filas['apellidos'];
	$dato3 = $filas['fecha_nac'];
	$dato4 = $filas['contrasenia'];
	$dato5 = $filas['correo'];
	$dato6 = $filas['rol'];
?>
<!DOCTYPE html>

<html lang="es">
	

<head>
    
		<meta charset="UTF-8">
    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<link rel="stylesheet" href="css/estilo.css">
		<title>Datos de la cuenta</title>
  
	</head>
	<script type="text/javascript">
		function ConfirmDelete(){
			var respuesta = confirm("\u00bfEst\u00e1s seguro de que deseas eliminar la cuenta?");
			if(respuesta == true){	
				return true;
			}else{
				return false;
			}
		}
	</script>
	<body>	
		<div id="bg"></div>
    
		<section id="barraSuperior">
        
			<ul class="nav-bar-list">
            
				<li class="nav-bar-list-large large">
                
					<a href="">
<img src="img/logoo.png" class="icon-logo">Asesor&iacute;a con Val&iacute;a</a>
            
				</li>
  
				<li class="nav-bar-list-item-right">
					<a href="cerrar_sesion.php">Cerrar Sesi&oacute;n</a>
				</li>          
				<li class="nav-bar-list-item-right">
					<?php
							if($dato6 == 2){
					?>
					<a href="tabla_alumnos.php">Alumnos</a>
					<?php }else{ ?>
						<a href="temario.html">Temario</a>
					<?php } ?>
				</li>
  
				<li class="nav-bar-list-item-right">
					<a href="cuenta.php">Cuenta</a>
				</li>

				<li class="nav-bar-list-item-right">
					<?php
							if($dato6 == 2){
					?>
					<a href="profesor.php">Inicio</a>
					<?php }else{ ?>
						<a href="estudiante.php">Inicio</a>
					<?php } ?>
				</li>      
			</ul>
    
		</section>

  
		<section id="banner" class="texto">
		<form action="modificar_perfil.php" method="post" align="center">
	       		<br><h1 class="titulos"><u>DATOS DE LA CUENTA</u></h1><br>
				<table align="center">
					<tr>
						<td><label>NOMBRE(S):</label></td>
						<td><input type="text" name="nombre" title="Solo tu(s) nombre(s), sin apellidos" value="<?php echo $dato1;?>" required></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><label>APELLIDOS:</label></td>
	       					<td><input type="text" name="apellidos" title="Primero tu apellido paterno, seguido de tu apellido materno" value="<?php echo $dato2;?>" required></td>
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
	       					<td><input type="email" name="correo" title="No puedes modificar tu correo" value="<?php echo $dato5;?>" readonly></td>
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
  										<option value="2" selected>Administrador</option>
						  			 </select>
								<?php }else{ ?>
									<select name="rol" size="1" required>
  										<option value="3" selected>Estudiante</option>
						  			</select>
								<?php } ?>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><label>NUEVA CONTRASE&Ntilde;A:</label></td>
	       					<td><input type="password" name="nuevaContrasenia" placeholder="Campo opcional"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td><label>CONTRASE&Ntilde;A ACTUAL:</label></td>
	       					<td><input type="password" name="contrasenia" required></td>
					</tr>
				</table>
			</font>
			<br><input type="submit" name="enviar" class="presionar" value="GUARDAR CAMBIOS"><br><br>
			<br><a href="eliminar_cuenta.php?id=<?php echo $filas['correo']?>" onclick="return ConfirmDelete()">ELIMINAR CUENTA</a><br><br>
        	</form>
		</section>
    	</body>
</html>

<?php
	mysqli_free_result($resultado);
	mysqli_close($conexion);
?>