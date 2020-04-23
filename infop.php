<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFO</title>
</head>
<style type="text/css">
  .boton_personalizado{
    text-decoration: none;
    padding: 10px;
    font-weight: 100;
    font-size: 15px;
    color: #ffffff;
    background-color: red;
    border-radius: 6px;
    border: 2px solid black;
    float:right;
  }
</style>
<style>
      .texto {
        font-family: monaco,Consolas,Lucida Console,monospace;
        font-size: 20px;
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
include('clase.php');
$form = new clase($_REQUEST);
$ver = $_GET['info'];
$form->ver_grande($ver);
$imga = $form->igrande;
$inom = $form->ngrande;
$ipre = $form->pgrande;
$ides = $form->dgrande;

//var_dump($ver);
?>
<input type="button" class="boton_personalizado" value="Salir" onclick="history.back()"/>
<div class="texto" align="center">
<img style="width: 560px; height: 341px;"  src="<?php echo $imga ?>" >

<h4>Datos Producto</h4>

<h4><?php echo $inom ?></h4>

<h4>¢ <?php echo $ipre ?></h4>

<p><?php echo $ides ?></p>



</div>
</body>
</html>