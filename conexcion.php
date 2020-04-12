<?php  

 $connection;

    
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

 




?>