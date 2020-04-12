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
$ver = $_GET['t1'];
$form->ver_productos_usuarios($ver);
$cont=0;
$dato = 1;
$dato2=1;


    
    ?>
   <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
<input type="button" class="boton_personalizado" value="Salir" onclick="history.back()"/>
<img src="img/nova.png" height="100" width="100"></br><marquee direction="right" scrolldelay="100" >
<h2 style"font-family: "Consolas", monospace;">Bienvenido</h2></marquee>
<!--  aqui empieza la tabla -->
<table border="0">
<tr>
<?php 

while($row = $form->ver_pro_usu->fetch_assoc()){
  
    ?>
        
    <th> <img src="<?php echo $row['foto'];  ?>" height="150" width="150"></br></th>
    
   <th><p class="texto" post"><?php echo $row['nombre'];  ?></p></br></th>
   
    <th><p class="texto">¢<?php echo  $row['precio']; ?> </p></br></th>
    
    <!-- <th><label>Descripcion</label></br><label><?php echo $row['descripcion'];?></label></br></br></th> -->

    <th></br></br></br><button  name="m<?php echo $dato ?>" type="submit" class="boton_personalizado" method="post" value ="<?php echo $row['ID'] ?>"/>Ver</button></br></th>
    
   
     
    <!-- salto de linea -->
    <?php
    $data;
    if('POST'== $_SERVER['REQUEST_METHOD']){
    
    
      
      if(isset($_POST['m'.$dato2])){
        header('Location: /infop.php?info='.$_POST['m'.$dato2]);
       // $data = $_POST['m'.$dato2];
        $dato2=1;
      }
      
      
      
      }
    $dato++;
    $dato2++;
     if($cont==2){
         
        ?>
        </br>
        
        </tr>
         
         <?php
        $cont=0;
     }
$cont++;


?>
<!-- fin de salto -->

    <?php
 }

  ?>
  </table>
  
  </form>
</body>
</html>