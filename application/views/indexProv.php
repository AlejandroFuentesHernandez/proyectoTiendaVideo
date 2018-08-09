<html>
<head>
	<meta charset="UTF-8">
	<title>Proveedores</title>
</head>	
	<body style="padding: 20px">
	<fieldset>
	<form action="<?php echo site_url();?>/Proveedores/InicioProveedor" metod="POST">
	<div align="center">
	<font color="green"><h1></h1></font>
	</div>
	<div align="center">
	<label"Nombreproveedor">Nombre proveedor</label>
	</div><br>
	<div align="center">
		<input type="text" name="Nombre_empresa" placeholder="Digite Nombre Empresa"></div><br><br>
		<div align="center">
	<label for="tipodempresa">Tipo de empresa</label>
		<input type="text" name="tipo_empresa" placeholder="Tipo de Empresa"></div><br><br>
		<div align="center">
	<label for="representante">Representante</label>
		<input type="text" name="representante_empresa" placeholder="Representante Empresa"></div><br><br>
		<div align="center">
	<label for="contacto">Telefono</label>
		<input type="text" name="contacto_proveedores" placeholder="Introdusca un numero telefono"></div>
		<br><br>
		<div align="center">
		<input type="submit" name="enviar" value"Enviar">
		</div>
	</form>
	</fieldset>
	</body>
</html>

