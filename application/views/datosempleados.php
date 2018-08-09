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
		<input type="text" name="numero_empleado" placeholder="Digite numero empleado"></div><br><br>
		<div align="center">
	<label>Nombre:</label>
		<input type="text" name="nombre_empleado" placeholder="Digite nombre"></div><br><br>
		<div align="center">
	<label>DUI Empleado:</label>
		<input type="text" name="DUI_empleado" placeholder="Digite Dui"></div><br><br>
		<div align="center">
	<label>Direccion:</label>
		<input type="text" name="direccion_empleado" placeholder="Digite direccion"></div><br><br>
		<div align="center">
	<label>Fecha nacimiento empleado</label>
		<input type="date" name="fecha_nacimiento" placeholder="Seleccione fecha"></div><br><br>
		<div align="center">
	<label>Cargo:</label>
		<input type="text" name="cargo_empleado" Placeholder="Digite Cargo"></div><br><br>
		<div align="center">
	<label>Telefono empleado:</label>
		<input type="text" name="telefono_empleado" placeholder="Digite telefono"></div><br><br>
	<div align="center">
		<input type="submit" name="ingresar" value="Ingresar">
	</div>
</fieldset>
</body>
</html>

