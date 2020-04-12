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
<img  src="<?php echo $imga ?>" >
</br>
<h3>Datos Producto</h3>
</br>
<h3><?php echo $inom ?></h3>
</br>
<h3>¢ <?php echo $ipre ?></h3>
</br>
<p><?php echo $ides ?></p>



</div>
</body>
</html>