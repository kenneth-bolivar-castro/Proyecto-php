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
<style>
body{
    background-image: url("https://k30.kn3.net/taringa/4/3/9/6/3/A/coreblue/3A0.jpg");
    background-size: 1500px , 1500px;
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
<table class="table table-striped table-dark" border="2">
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