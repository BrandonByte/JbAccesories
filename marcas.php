<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="colors.css">
	<link rel="icon" type="image/png" href="Icons/icono.png"/>	 
	<link rel="stylesheet" type="text/css" href="Icons/fontAwesome/all.css">
	<link rel="stylesheet" type="text/css" href="Icons/fontAwesome/v4-shims.css">
	<title>Marcas</title>
</head>
<body>
<div class="Contenedor">
		<div class="Contactanos">
			Comunicate con nosotros: 
			<span style="margin: 0 0.5em;">
				<i class="fas fa-mobile"  aria-hidden="true"></i>
					 3108280133
				</span>
				|
				<span style="margin: 0 0.5em;">
					<i class="fa fa-whatsapp"></i>
						 3108280133
				</span>
				|
				<span style="margin: 0 0.5em;">
					<i class="fa fa-map-marker"></i>
						 Vereda playa
				</span>
			<div id="Principal">
			<div>
				<img style="margin-left: -8px;" class="Logo" src="Icons/icono.png">
				<h1 style="float: center; margin-top: -30px; font-size: 20px;">Marca</h1>
			</div>
		</div>
</div>
	
	<form id="Añadir" action="pag_agregar_marca.php" method="post">
		<input id="imgAña" type=image src="Icons/añadir.png" width="70" height="75">
	</form>
	
		<table>
			<thead>
				<tr>
					<th>Identificacion marca</th>
					<th>Marca</th>
					<th>Editar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
						<?php include("conectbd.php");
						$Conectarbd = Conectar();?>
						<?php foreach ($Conectarbd->query('SELECT * from marca') as $row){ ?>
						<tr>
						<td><?php echo $row['id_marca']?></td>
							<td><?php echo $row['marca'] ?></td>
							<td><a href="pag_modificar_marca.php?id=<?php echo $row['id_marca']; ?>"> <img style='width: 35px; height: 35px;' src="Icons/editar.png" alt="submit"></a></td>
							<td><a href="#" onclick="preguntar(<?php echo $row['id_marca']; ?>)"> <img style='width: 35px; height: 35px;' src="Icons/eliminar.png"></a></td>
						</tr>
				<?php
				}
				?>
		</tbody>
		</table>
		<script type="text/javascript">
				function preguntar(id){
					if(confirm('¿Esta seguro que desea eliminar el registro con id ' + id + '?'))
						{
									window.location.href = 'eliminar_marca.php?id=' + id;
						}
					}
		</script>
</Body>


<!-- fnm nfwoleknmwfoikpenifpke -->

</HTML>



</body>
</html>