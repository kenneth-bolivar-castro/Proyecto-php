<?php

     $request;
     $correo;
     $clave;
     $tipo;
     $server="database";
        $user ="Lamp";
        $pass="Lamp";
        $db ="c_php";
        $con = new mysqli($server,$user,$pass,$db) or die ("error al conectar");
        
    function _construct($request){
    $this->request = $request;
    }
    
     function validate() :array{
        return [empty($this->request['correo']),
        empty($this->request['p1'])
        ];
        
    }
    function ingresar(){
        if(!empty($_POST["correo"])||!empty($_POST["p1"])){

            $valid_email =$_POST["correo"];
            $valid_cont =$_POST["p1"];
        if($valid_email=='arielnova'&&$valid_cont==123){
      //  if($valid_email==$correo && $valid_cont==$clave && $tipo=="A"){
            echo "<script type='text/javascript'>window.open('admin.php','_self');</script>";
        
        }
    }
    }
    //conexion

    function conexion(){

        if($con){
            echo "exitosa";
        }
       
       // mysqli_select_db($con,$db);

//         $query = "select  correo,clave,tipo from c_php.usuarios";
// $result = mysqli_query($query);
// if($result){
//     if($row = mysqli_fetch_array($result)){
//         $correo = $row["correo"];
//         $clave = $row["clave"];
//         $tipo = $row["tipo"];

//     }
// }
    
        
}

