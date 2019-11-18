<?php
function conectar($usuario, $contrasena)
{$con=mysqli_connect("127.0.0.1",$usuario,$contrasena,"vive_deporte");
    if(!$con)
    {
        echo "hubo un error con la conexion";
    }else{
        //echo "conexion exitosa a la base de datos";
    }
    return $con;
}
//ingresar datos con los usuarios
function inscripcion($datos_rec)
{$con3=conectar("root", "");
 $correo_us=$datos_rec[0];
 $nombre_us=$datos_rec[1];
 $cel_us=$datos_rec[2];
$genero_us=$datos_rec[3];
$fechanac_us=date("Y-m-d",strtotime($datos_rec[4]));
$clave_us2=$datos_rec[5];
$convoc=$datos_rec[6];
$fechains=date("Y-m-d"); //automatico 
$hora = new DateTime("now", new DateTimeZone('America/Monterrey')); //auxiliar
$hora_ins=$hora->format('H:i:s');;
//echo "formato de fecha corregido".$fechanac_us;
 $sql3_ins="INSERT INTO usuarios(correo_us, nombre_us, cel_us, genero_us,fechanac_us)
  VALUES ('$correo_us', '$nombre_us', '$cel_us', '$genero_us','$fechanac_us')";   
  if($con3){
        
            if (mysqli_query($con3, $sql3_ins)) {
                echo "<h1>Registro hecho con éxito</h1>";
                    //registramos en la tabla de login, esto por si existe un error
                    $sql3_ins2="INSERT INTO login_us(correo_us, contrasena_us) VALUES('$correo_us','$clave_us2')";
                        if (mysqli_query($con3, $sql3_ins2)) {
                            //echo "<h1>Registro exitoso en la tabla de login_us</h1>";
                            $sql3_ins3="INSERT INTO inscripciones (id_conv, correo_us, fecha_ins, hora_ins) 
                            VALUES ('$convoc', '$correo_us', '$fechains', '$hora_ins')";      
                                if(mysqli_query($con3,$sql3_ins3))
                                {echo "inscripcion correcta en la tabla de inscripciones";
                                }else{ echo "Error: " . $sql3_ins3 . "<br>" . mysqli_error($con3);}
                            } else {
                            echo "Error: " . $sql3_ins . "<br>" . mysqli_error($con3);
                            }

                } else {
                echo "Error: " . $sql3_ins . "<br>" . mysqli_error($con3);
                }
  }else{
    echo "<br>no se ha podido insertar por un error de conexion BD";
  }
}

?>