<!DOCTYPE html>

<html lang="es">
	

<head>
    
		<meta charset="UTF-8">
    
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
		<title>Inicio administrador</title>
  
		<link rel="stylesheet" href="css/estilo.css">
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<script>
			$(document).ready(function(){
				$('#cuenta').ready(function(){
					$('#contenido').load("inicio_profesor.php");
				});
			});
		</script>
	
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
			<div id="contenido" align="center" width= "100%"></div>
		</section>
	</body>
</html>