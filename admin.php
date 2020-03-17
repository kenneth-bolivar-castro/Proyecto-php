<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include('clase.php');
$form = new clase($_REQUEST);
$ver = $_GET['correo'];
$form->buscar2($ver);
$name = $form->nombre;



?>

<h1 align="center"><?php echo $name ?></h1>

</body>
</html>