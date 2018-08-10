<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>

<body style="padding: 20px">
   <fieldset>
            <form  action="<?php echo site_url(); ?>/Local/InicioCompra" method="POST"  >
             <div align="center">
                <font color="orange"><h1>Registro de compras</h1></font>
             </div>
             <div align="center">
                <label>Nombre de juego:</label>
                <input type="text" name="juego">
             </div><br>
             <div align="center">
                <label>Codigo de juego:</label>
                <input type="text" name="codigo">
             </div><br>
             <div align="center">
                <label>Total de compra:</label>
                <input type="text" name="total">
             </div><br>
             <div align="center">
                <label>Cantidad de producto:</label>
                <input type="text" name="cantidad">
             </div><br>
             <div align="center">
                <label>Fecha de compra:</label>
                <input type="date" name="fecha_compra">
             </div><br>
             <div align="center">
                <label>Precio U.Compra:</label>
                <input type="text" name="precio">
             </div><br>
             <div align="center">
                <input type='submit' value='Iniciar Sesion'>
             </div>
             </form>
 </fieldset>
</body>
</html>
