<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
  <title>Usuarios</title>
    
</head>
<body>
<style>
body{
    background-image: url("https://k30.kn3.net/taringa/4/3/9/6/3/A/coreblue/3A0.jpg");
    background-size: 1500px , 1500px;
}
</style>
<?php

include('clase.php');
$form = new clase($_REQUEST);
$ver = $_GET['correo'];
$form->buscarnombre($ver);
$name = $form->nombre;


?>
<div id="header">
			<ul class="nav">
                <li><a >Administrar</a><ul>
                <li><a href="consulta.php"> Ver usuarios</a></li>
            <li><a href="modificar_usuarios.php">Modificar usuarios</a></li>
            
            </li>
            </ul>
				<li><a href="">Servicios</a>
					<ul>
						<li><a href="productos.php">Productos</a></li>
						<li><a href="guardarpro.php">Ingresar Productos</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a>
							<ul>
								<li><a href="">Submenu1</a></li>
								<li><a href="">Submenu2</a></li>
								<li><a href="">Submenu3</a></li>
								<li><a href="">Submenu4</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="">Acerca de</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a></li>
					</ul>
				</li>
				<li><a href="index.php">Salir</a></li>
			</ul>
</div>

</br>
</br>
</br>
</br>
<div style="justify-content: center;height: 150px; display: flex; align-items: center;">
<h1 style="color:white">Bienvenido</h1>

</div>
<div style="justify-content: center;height: 150px; display: flex; align-items: center;">
<h1 style="color:white;" aling="center" > <?php echo  $name ?></label>
</br>
</div>

</body>
</html>