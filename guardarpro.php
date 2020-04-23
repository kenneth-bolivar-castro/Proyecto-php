<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: red;
    border-radius: 6px;
    border: 2px solid #0016b0;
    float:right;
  }
</style>
<style>
body{
    background-image: url("../productos.jpeg");
    background-size: 1500px , 1500px;
    background-position: center;
}
</style>
<body>
    <?php
    if('POST'== $_SERVER['REQUEST_METHOD']){
    include('clase.php');
    $form = new clase($_REQUEST);
    $form->insertarproduc();
    }
?>
<button class="boton_personalizado" onclick="location.href='index.php'">Volver</button>
<form enctype="multipart/form-data" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
<label><b>Nombre: </b></label>
<input type="text" autocomplete ="off" name="nombre" placeholder="Producto"/>
</br>
</br>
<label><b>Cantidad: </b></label>
<input type="text" autocomplete ="off" name="cantidad" placeholder="cantidad"/>
</br>
</br>
<label><b>Precio:</b> </label>
<input type="text" autocomplete ="off" name="precio" placeholder="Precio"/>
</br>
</br>
<label><b>Descripcion:</b> </label>
<textarea name="descrip" placeholder="Descripcion"></textarea>
</br>
</br>
<select class="boton_personalizado" name="tip">
    <option value="accesorios">Accesorios</option>
    <option value="partes">Partes</option>
    <option value="computadoras">Computadoras</option>
</select>
</br>
</br>
</br>

<!-- imagenes -->
<input type="file" name="attached" />
</br>
</br>
<input class="boton_personalizado" type="submit"  value="Registrar"/>


</form>
</body>
</html>