<?php

class clase{
   


    function _construct($request){
    $this->request = $request;
    }
    
     function validate() :array{
        return [empty($this->request['correo']),
        empty($this->request['p1'])
        ];
        
    }
    public $mail;
    public $clave;
     public $tipo;
     public $valid_email;
     public $valid_cont; 
     public $nombre;
     public $id;
     public $ape;
     function correo(){
        $this->valid_email =$_POST["correo"];
     }
    function ingresar(){
        if(!empty($_POST["correo"])||!empty($_POST["p1"])){

            $this->valid_email =$_POST["correo"];
            $this->valid_cont =$_POST["p1"];
              //if($valid_email=='arielnova'&&$valid_cont==123){

             if($this->valid_email==$this->mail && $this->valid_cont==$this->clave && $this->tipo=='A'){
                header('Location: /admin.php?correo='.$_SESSION['correo']);
              //echo "<script type='text/javascript'>window.open('admin.php','_self');</script>";
             
           }else  if($this->valid_email==$this->mail && $this->valid_cont==$this->clave && $this->tipo=='U'){
            echo "<script type='text/javascript'>window.open('usuarios.php','_self');</script>";
           

           }
        }
        
    }
    


    //conexion

    

    

       public function buscarusuarios(){
        include 'conexcion.php';
       $_SESSION['correo'] = $_POST["correo"];
        $this->valid_email =$_SESSION['correo'];
        // var_dump($this->valid_email);
         $sql = "SELECT correo,clave,tipo FROM c_php.usuarios WHERE correo = '$this->valid_email'";
         $result = $this->connection->query($sql);

         while($row = $result->fetch_assoc()) {
           // echo $row['correo'] . ' ' . $row['clave'] . $row['tipo'] . PHP_EOL;
            //var_dump($row);
            $this->mail = $row['correo'];
            $this->clave = $row['clave'];
            $this->tipo = $row['tipo'];
            //var_dump($this->mail . $this->clave . $this->tipo);
        }
 
       }
       public function buscarnombre($info){
        include 'conexcion.php';
        
         $sql = "SELECT nombre FROM c_php.usuarios WHERE correo = '$info'";
         $result = $this->connection->query($sql);

         while($row = $result->fetch_assoc()) {

            //var_dump($row);
            
            $this->nombre = $row['nombre'];
            //var_dump($this->nombre);
        }
 
       }

       //registro
       

        function usuarios(){
            $nomb = $_POST['Nombre'];
            $ape = $_POST['ape'];
            $corre = $_POST['email'];
            $clav = $_POST['clave'];
            $tipo ='U';
            include 'conexcion.php';
            $verificar_usuario= "SELECT * FROM c_php.usuarios Where correo ='$corre'";
            $result = $this->connection->query($verificar_usuario);

         while($row = $result->fetch_assoc()) {
            $verificado = ['correo'];
         }
            if($verificado > 0 ){
                echo '<script>
                alert("El usuario ya esta registrado")
                </script>';
            }else{
            $sql = "INSERT INTO c_php.usuarios (nombre,apellido,clave,correo,tipo) VALUES ('$nomb','$ape','$clav','$corre','$tipo')";
            $result = $this->connection->query($sql);

                if($result){
                    echo "<script type='text/javascript'>alert('Usuario Registrado');</script>";
                    echo "<script type='text/javascript'>window.open('index.php','_self');</script>";
                }else{
                    echo "<script type='text/javascript'>alert('Hubo un error');</script>";

                }
            }
            
        }
       
        public $res;
        public function mostrar_usuarios(){
            
            include 'conexcion.php';
             
                 $sql = "SELECT * FROM c_php.usuarios";
                 $this->res = $this->connection->query($sql);
    
         
               }
        
public function registrar_admin(){
            $nomb = $_POST['Nombre'];
            $ape = $_POST['ape'];
            $corre = $_POST['email'];
            $clav = $_POST['clave'];
            $tipo =$_POST['tip'];
            include 'conexcion.php';
            
            $sql = "INSERT INTO c_php.usuarios (nombre,apellido,clave,correo,tipo) VALUES ('$nomb','$ape','$clav','$corre','$tipo')";
            $result = $this->connection->query($sql);

                if($result){
                    echo "<script type='text/javascript'>alert('Usuario Registrado');</script>";
                    echo "<script type='text/javascript'>window.open('index.php','_self');</script>";
                }else{
                    echo "<script type='text/javascript'>alert('Hubo un error');</script>";

                }
}

public function modificar_admin(){
    $nomb = $_POST['Nombre'];
    $ape = $_POST['ape'];
    $corre = $_POST['email'];
    $clav = $_POST['clave'];
    $tipo =$_POST['tip'];
    include 'conexcion.php';
    
    $sql = "UPDATE c_php.usuarios SET nombre='$nomb',apellido='$ape',clave='$clav',correo='$corre',tipo='$tipo' WHERE correo = '$corre'";
    $result = $this->connection->query($sql);

        if($result){
            echo "<script type='text/javascript'>alert('Usuario Modoficado');</script>";
            echo "<script type='text/javascript'>window.open('index.php','_self');</script>";
        }else{
            echo "<script type='text/javascript'>alert('Hubo un error al modificar');</script>";

        }
}
public $resultado;
function verproductos(){
    include 'conexcion.php';
             
    $sql = "SELECT * FROM c_php.productos";
    $this->resultado = $this->connection->query($sql);
}
//html nuevo para productos

function insertarproduc(){
            $nombre_p = $_POST['nombre'];
            $cantidad_p = $_POST['cantidad'];
            $precio_p = $_POST['precio'];
            $descripcion_p = $_POST ['descrip'];
            $tip = $_POST['tip'];
            $arch = $_FILES['attached']['name'];
            $uploaded = __DIR__ . DIRECTORY_SEPARATOR . 'fotos' . DIRECTORY_SEPARATOR . $_FILES['attached']['name'];

            if(move_uploaded_file($_FILES['attached']['tmp_name'],$uploaded)){
             echo "File attached properly.\n";
            }else{
                echo "Something went wrong!\n";
                }
            
            //$imagen = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
            include 'conexcion.php';
            
            $sql = "INSERT INTO c_php.productos (nombre,cantidad,precio,estado,foto,descripcion) VALUES ('$nombre_p','$cantidad_p','$precio_p','$tip','fotos/$arch','$descripcion_p')";
            $result = $this->connection->query($sql);

                if($result){
                    echo "<script type='text/javascript'>alert('Producto Registrado');</script>";
                   // echo "<script type='text/javascript'>window.open('index.php','_self');</script>";
                }else{
                    echo "<script type='text/javascript'>alert('Hubo un error');</script>";

                }
}

public $ver_pro_usu;
public function ver_productos_usuarios($ver){
    include 'conexcion.php';
             
    $sql = "SELECT * FROM c_php.productos WHERE estado ='$ver' ";
    $this->ver_pro_usu = $this->connection->query($sql);
}
//mostrar producto completo
public $igrande,$ngrande,$pgrande,$dgrande;
public function ver_grande($id){
    include 'conexcion.php';
             
    $sql = "SELECT * FROM c_php.productos WHERE ID ='$id' ";
    $resultado= $this->connection->query($sql);
    while($row = $resultado->fetch_assoc()) {
        
        $this->igrande = $row['foto'];
        $this->ngrande = $row['nombre'];
        $this->pgrande = $row['precio'];
        $this->dgrande = $row['descripcion'];
}
}
 }//final de clase
?>

