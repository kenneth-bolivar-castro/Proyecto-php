<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
    <title>Productos</title>
</head>
<style>
body{
    background-image: url("https://k30.kn3.net/taringa/4/3/9/6/3/A/coreblue/3A0.jpg");
    background-size: 1500px , 1500px;
}
</style>
<body>
<?php

include('clase.php');
$form = new clase($_REQUEST);
$form->verproductos();



?>
<!-- <img src="fotos/Code.jpeg"> -->
</br>
</br>
<table class="table table-striped table-dark" border="2">
<tr>
<th>ID</th>
<th>NOMBRE</th>
<th>CANTIDAD</th>
<th>PRECIO</th>
<th>DEPARTAMENTO</th>
<th>DESCRIPCION</th>
<th>IMAGEN</th>
</tr>


<?php 

while($row = $form->resultado->fetch_assoc()){
    ?>
    <tr>
<td><?php echo $row['ID'];  ?></td>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['cantidad'];  ?></td>
<td><?php echo $row['precio'];  ?></td>
<td><?php echo $row['estado'];  ?></td>
<td><?php echo $row['descripcion'];  ?></td>
<td><img src="<?php echo $row['foto'];?>" height="50" width="50"></td>
</tr>
<?php
 }

  ?>


</table>
</br>
</br>
<button class="boton_personalizado" onclick="history.back()">Volver</button>

</body>
</html>