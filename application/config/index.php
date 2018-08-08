<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
    <title></title>

    <style type="text/css">
  body {
    font-family: Georgia, "Times New Roman",
          Times, serif;
    color: purple;
    background-color: #d8da3d }
     h1 {
    font-family: Helvetica, Geneva, Arial,
          SunSans-Regular, sans-serif }
  </style>
</head>

<body style="padding: 20px">
   <fieldset>
            <form  action="<?php echo site_url(); ?>/Local/InicioSesion" method="POST"  >
             <div align="center">
                <font color="orange"><h1>Registro de compras</h1></font>
             </div>
             <div align="center">
                <label>Codigo de juego:</label>
                <input type="text" name="codigo_juego">
             </div><br>
             <div align="center">
                <label>Nombre de juego:</label>
                <input type="text" name="nombrejuego">
             </div><br>
             <div align="center">
            <div align="center">
                <label>Cantidad de producto:</label>
                <input type="text" name="cantidad_juego">
             </div><br>
             <div align="center">
                <label>Fecha de compra:</label>
                <input type="date" name="fecha_compra">
             </div><br>
             <div align="center">
                <label>Precio U.Compra:</label>
                <input type="text" name="precio_unitario_compra">
             </div><br>
                <label>Total de compra:</label>
                <input type="text" name="total_compra">
             </div><br>
             <div align="center">
                <input type='submit' value='Iniciar Sesion'>
             </div>
             </form>
 </fieldset>
</body>
</html>
