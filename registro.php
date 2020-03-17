<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet"> -->
<link href="css/registro.css" rel="stylesheet">
<?php
if('POST'== $_SERVER['REQUEST_METHOD']){
include('clase.php');
$form = new clase($_REQUEST);
$form->usuarios();

}
?>
<div class="testbox">
  <h1>Registration</h1>

  <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="post">
      <hr>
   
  <hr>

  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" autocomplete="off" name="Nombre"  placeholder="Name" required/>

  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" autocomplete="off" name="ape"  placeholder="LastName" required/>

  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" autocomplete="off" name="email"  placeholder="Email" required/>

  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="password" name="clave" id="name" placeholder="Password" required/>

  <input class="boton_personalizado"type="submit" value="Register"/>
  
  
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
  </form>
  <button class="boton_personalizado" onclick="window.location.href='index.php'"">Volver</button>
</div>
</body>
</html>