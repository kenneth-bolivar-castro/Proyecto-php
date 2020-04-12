<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Document</title>
</head>


<body>
<?php

include('clase.php');
$form = new clase($_REQUEST);
$form->mostrar_usuarios();

?>

</br>
</br>
<table border="1">
<tr>
<th>ID</th>
<th>NOMBRE</th>
<th>APELLIDO</th>
<th>CORREO</th>
<th>CLAVE</th>
<th>TIPO</th>
</tr>


<?php 

while($row = $form->res->fetch_assoc()){
    ?>
    <tr>
<td><?php echo $row['ID'];  ?></td>
<td><?php echo $row['nombre']; ?></td>
<td><?php echo $row['apellido'];  ?></td>
<td><?php echo $row['correo'];  ?></td>
<td><?php echo $row['clave'];  ?></td>
<td><?php echo $row['tipo'];  ?></td>
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