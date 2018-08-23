<html>
<head>
<meta charset='utf-8'>
<title>Ingresar nuevos empleados</title>
</head>
<body style="padding: 20px">
	<fieldset>
	<form action="<?php echo site_url();?>/Datosempleados/InicioDatempl" method="POST">
		<div align="center">
	<label>Numero Empleado:</label>
		<input type="text"  id="Numero_empleado" name="numero_empleado" placeholder="Digite numero empleado"></div><br><br>
		<div align="center">
	<label>Nombre:</label>
		<input type="text"  id="nombre_empleado" name="nombre_empleado" placeholder="Digite nombre"></div><br><br>
		<div align="center">
	<label>DUI Empleado:</label>
		<input type="text"  id="DUI_empleado" name="DUI_empleado" placeholder="Digite Dui"></div><br><br>
		<div align="center">
	<label>Direccion:</label>
		<input type="text"  id="direccion_empleado" name="direccion_empleado" placeholder="Digite direccion"></div><br><br>
		<div align="center">
	<label>Fecha nacimiento empleado</label>
		<input type="date"  id="fecha_nacimiento" name="fecha_nacimiento" placeholder="Seleccione fecha"></div><br><br>
		<div align="center">
			<label>Correo electronico</label>
		<input type="text" name="Correo_electronico" placeholder="Digite un correo electronico"></div><br><br>
		<div align="center">
	<label>Cargo:</label>
		<input type="text" id="cargo_empleado" name="cargo_empleado" Placeholder="Digite Cargo"></div><br><br>
		<div align="center">
	<label>Telefono empleado:</label>
		<input type="text"  id="telefono_empleado" name="telefono_empleado" placeholder="Digite telefono"></div><br><br>
	<div align="center">
		<button type="button" >Ingresar</button>
	</div>
</fieldset>
</body>
</html>

