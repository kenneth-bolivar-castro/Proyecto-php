<?php
class clase2{
    
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
 var $mail;
     var $clave;
     var $tipo;
     var $valid_email;
     var $valid_cont; 
     public $nombre;
 public function buscar(){
    $this->cone();
    $this->valid_email =$_POST["correo"];
    // var_dump($this->valid_email);
     $sql = "SELECT correo,clave,tipo,nombre FROM c_php.usuarios WHERE correo = '$this->valid_email'";
     $result = $this->connection->query($sql);

     while($row = $result->fetch_assoc()) {
        echo $row['correo'] . ' ' . $row['clave'] . $row['tipo'] . PHP_EOL;
        //var_dump($row);
        $this->mail = $row['correo'];
        $this->clave = $row['clave'];
        $this->tipo = $row['tipo'];
        $this->nombre = $row['nombre'];
        var_dump($this->mail . $this->clave . $this->tipo . $this->nombre);
    }

   }
}

?>