<?php


$conexion =  mysqli_connect("localhost","root","","login_register_db");


if($conexion){

    echo 'conectado exitosamente a la base de datos';

 } else{
 
     echo 'No se ha posido conectar a la base de datos';

}

?>