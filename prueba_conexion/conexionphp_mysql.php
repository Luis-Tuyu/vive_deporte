<?php
$conn=mysqli_connect("127.0.0.1","root","","vive_deporte");

if($conn->connect_error){
    die($conn->connect_error);
}
    else{
        print("conexion exitosa");
    }


    
?>