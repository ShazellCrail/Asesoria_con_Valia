<?php
	include("conectar_bd.php");
	session_start();
	$usuarios = "SELECT * FROM usuario WHERE rol=3";
?>

<html lang="es">
	

<head>
    
		<meta charset="UTF-8">
    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<link rel="stylesheet" href="css/estilo.css">
		<title>Alumnos</title>
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
					<a href="tabla_alumnos.php">Alumnos</a>
				</li>

				<li class="nav-bar-list-item-right">
					<a href="cuenta.php">Cuenta</a>
				</li>
  
				<li class="nav-bar-list-item-right">
					<a href="profesor.php">Inicio</a>
				</li>      
			</ul>
    
		</section>

  
		<section id="banner" class="texto">
		<br><h1 align="center" class="titulos"><u>ALUMNOS</u></h1><br><br>
		<table align="center">
			<tr>
				<td class="encabezado">NOMBRE(S)</td>
				<td class="encabezado">APELLIDOS</td>
				<td class="encabezado">FECHA DE NACIMIENTO</td>
				<td class="encabezado">CONTRASE&Ntilde;A</td>
				<td class="encabezado">ACCI&Oacute;N</td>
			</tr>
			<?php $resultado = mysqli_query($conexion, $usuarios);
			while($row = mysqli_fetch_assoc($resultado)){ ?>
				<tr>
					<td> <?php echo $row["nombre"];?> </td>
					<td> <?php echo $row["apellidos"];?> </td>
					<td> <?php echo $row["fecha_nac"];?> </td>
					<td> <?php echo $row["correo"];?> </td>
					<td> <a href="editar_usuario.php?id=<?php echo $row["correo"];?>">Editar</a> | <a href="eliminar_cuenta.php?id=<?php echo $row["correo"];?>" onclick="return ConfirmDelete()">Eliminar</a></td>
				</tr>
				<?php 
			} 
				mysqli_free_result($resultado);
				?>
		</table>
		<form  align="center">
			<br><br><a href="agregar_alumno.html"><input type="button" class="presionar" value="AGREGAR NUEVO"></a><br><br>
		</form>
		</section>
	</body>
</html>