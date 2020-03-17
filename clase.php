<?php

class clase{
   
var $connection;
    public function cone(){
    
    $host = 'database';
    $username = 'root';
    $password = '';
    $dbname = 'c_php';
    
    $this->connection = new mysqli($host, $username, $password, $dbname);
    if($this->connection->connect_errno) {
        echo $this->connection->connect_error;
        exit();
    }else{
        //var_dump($connection);
    }

 }

    function _construct($request){
    $this->request = $request;
    }
    
     function validate() :array{
        return [empty($this->request['correo']),
        empty($this->request['p1'])
        ];
        
    }
    var $mail;
     var $clave;
     var $tipo;
     var $valid_email;
     var $valid_cont; 
     public $nombre;
     function correo(){
        $this->valid_email =$_POST["correo"];
     }
    function ingresar(){
        if(!empty($_POST["correo"])||!empty($_POST["p1"])){

            $this->valid_email =$_POST["correo"];
            $this->valid_cont =$_POST["p1"];
              //if($valid_email=='arielnova'&&$valid_cont==123){

             if($this->valid_email==$this->mail && $this->valid_cont==$this->clave && $this->tipo=='A'){
                header('Location: /admin.php?correo='.$_POST['correo']);
              //echo "<script type='text/javascript'>window.open('admin.php','_self');</script>";
             
           }else  if($this->valid_email==$this->mail && $this->valid_cont==$this->clave && $this->tipo=='U'){
            echo "<script type='text/javascript'>window.open('usuarios.php','_self');</script>";
           

           }
        }
        
    }
    


    //conexion

    

     

       public function buscar(){
        $this->cone();
        $this->valid_email =$_POST["correo"];
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
       public function buscar2($info){
        $this->cone();
        
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
            $this->cone();
            
            $sql = "INSERT INTO c_php.usuarios (nombre,apellido,clave,correo,tipo) VALUES ('$nomb','$ape','$clav','$corre','$tipo')";
            $result = $this->connection->query($sql);

                if($result){
                    echo "<script type='text/javascript'>alert('Usuario Registrado');</script>";
                    echo "<script type='text/javascript'>window.open('index.php','_self');</script>";
                }else{
                    echo "<script type='text/javascript'>alert('Hubo un error');</script>";

                }
            
            
        }
 }//final de clase
?>

