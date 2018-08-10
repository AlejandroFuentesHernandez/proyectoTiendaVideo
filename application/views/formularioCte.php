<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body style="padding: 20px">
   <fieldset>
            <form  action="<?php echo site_url(); ?>/Cliente/InicioCliente" method="POST"  >
             <div align="center">
                <font color="green"><h1>Registro de Clientes</h1></font>
             </div>
             <div align="center">
                <label>Nombre :</label>
                <input type="text" name="nombre_cliente" >
             </div><br>
             <div align="center">
                <label>N° DUI:</label>
                <input type="text" name="numero_DUI">
             </div><br>
             <div align="center">
                <label>N° NIT:</label>
                <input type="text" name="numero_NIT">
             </div><br>
             <div align="center">
                <label>Telefono:</label>
                <input type="text" name="telefono_cliente">
             </div><br>
             <div align="center">
                <input type='submit' value='Iniciar Sesion'>
             </div>
             </form>
 </fieldset>
</body>
</html>
