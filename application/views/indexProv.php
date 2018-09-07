<html>
<head>
	<meta charset="UTF-8">
	<title>Proveedores</title>
</head>	
	<body style="padding: 20px">
	<fieldset>
	<form action="<?php echo site_url();?>/<Proveedores/Registrar_proveedores" metod="POST">
	<div align="center">
	<font color="green"><h1></h1></font>
	</div>
	<div align="center">
	<label"Nombreproveedor">Nombre proveedor</label>
	</div><br>
	<div align="center">
		<input type="text" id="nombre_empresa" name="Nombre_empresa"  onblur="" placeholder="Digite Nombre Empresa"></div><br><br>
		<div align="center">
	<label for="tipodempresa">Tipo de empresa</label>
		<input type="text"  id="tipo_empresa" name="tipo_empresa" onblur="" placeholder="Tipo de Empresa"></div><br><br>
		<div align="center">
	<label for="representante">Representante</label>
		<input type="text" id="representante_empresa" name="representante_empresa" onblur="" placeholder="Representante Empresa"></div><br><br>
		<div align="center">
	<label for="contacto">Telefono</label>
		<input type="text" id="contacto_proveedores"name="contacto_proveedores"  onblur="" placeholder="Introdusca un numero telefono"></div>
		<br><br>
		<div align="center">
		<button type="button" onclick="">Enviar</button>
		</div>
	</form>
	</fieldset>
	</body>
</html>
<script src="js/Scipt_proveedores.js"></script>
