<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Proyecto</title>
</head>
<body style="background-image:url('https://wallpaperaccess.com/full/1278188.jpg')">
<?php 
  
$valid_email = $valid_cont= null;
if('POST'== $_SERVER['REQUEST_METHOD']){
  
  include ('clase.php');
   // $form = new clase($_REQUEST);
   // list($valid_email,$valid_cont)=$form->validate();
    // var_dump($form);
    //$form->conexion();
    //$form->ingresar();
    
    }


?>

    <h1 align="center" style="color:White">Bienvenido</h1>

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <form align = "center" action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
    
<h3 style="color:White">Log in</h3>
<br/>
<br/>

<input type="text"  name="correo" id="correo" placeholder="Correo">

<?php if($valid_email):?>
<div class="alert alert-danger" role="alert">
  Campo requerido
  
</div>
<?php endif;?>
<br/>
<br/>
<input type="password" autocomplete="off" name="p1" id="p1" placeholder="Contraseña">

<?php if($valid_cont):?>
<div class="alert alert-danger" role="alert">
  Campo requerido
</div>
<?php endif;?>
<br/>
<br/>
<input type="submit" class="btn btn-danger" value="Ingresar">



</form>
</body>
</html>

    