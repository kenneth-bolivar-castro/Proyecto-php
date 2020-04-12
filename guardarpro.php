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
<body>
    <?php
    if('POST'== $_SERVER['REQUEST_METHOD']){
    include('clase.php');
    $form = new clase($_REQUEST);
    $form->insertarproduc();
    }
?>
<form enctype="multipart/form-data" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">

<input type="text" name="nombre" placeholder="Producto"/>
<input type="text" name="cantidad" placeholder="cantidad"/>
<input type="text" name="precio" placeholder="Precio"/>
<textarea name="descrip" placeholder="Descripcion"></textarea>

<select class="boton_personalizado" name="tip">
    <option value="accesorios">Accesorios</option>
    <option value="partes">Partes</option>
    <option value="computadoras">Computadoras</option>
</select>


<!-- imagenes -->
<input type="file" name="attached" />

<input type="submit"  value="Registrar"/>


</form>
</body>
</html>