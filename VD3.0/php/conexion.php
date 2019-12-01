<?php
  $luis="es un texto de prueba";
  //$filas; //esto puede ser vulnerable but ya ni pd
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

function consultas($usuario, $contrasena, $consulta_sql)
{$con=mysqli_connect("127.0.0.1",$usuario,$contrasena,"vive_deporte");
    if(!$con)
    {
        echo "hubo un error con la conexion";
    }else{
        echo "conexion exitosa a la base de datos";
        $datos = mysqli_query($con,$consulta_sql); //de esta manera ligamos la consulta con la conexion
        $filas = mysqli_fetch_array($datos);
        return $filas;
    }
}


//sirve para devolver el conjunto de datos y usuarlo en la app
function obtener_datos($usuario, $contra)
{$con2=conectar("root", "");
    $consulta="SELECT * FROM administradores WHERE correo_admin LIKE '$usuario'";   
       if($con2)
       {$datos= mysqli_query($con2,$consulta);
        $filas= mysqli_fetch_array($datos);
        return $filas;
       }
}

//seleccionar datos login_us, nota de esta manera se debe realizar cada consulta
function obtener_login_us($correo, $contrasena)
{   $sql2="SELECT * FROM login_us WHERE correo_us LIKE '$correo'";
    $con2=conectar("root", "");
       if($con2)
       {$datos= mysqli_query($con2,$sql2);
        $filas_logus= mysqli_fetch_array($datos);
                if($correo == $filas_logus["correo_us"]) 
                {//ver si escribio bien la contrasena y validarse
                    if($contrasena == $filas_logus["contrasena_us"])
                        {echo "<br> <h2>ACCESO CORRECTO</h2>";
                        echo "<p>Correo: </p>";
                        print ("<br>".$filas_logus["correo_us"]."<br>");
                        return true;
                        }else{ print ("<h3>¡ERROR! contraseña no coincide</h3>");}
                     }else{
                    echo "ERROR, el usuairo no se encuetra registrado";
                    }

       }else{echo "error en la conexion base de datos";}
       //condicion para ver si esta en la base de datos
}

/**/
function validar_login_admin($usuario_admi, $contrasena_admi)
{$con2=conectar("root","");
    $consulta="SELECT * FROM login_admin WHERE correo_admi LIKE '$usuario_admi'";
    if($con2)
    {$datos2= mysqli_query($con2, $consulta);
    $filas_admi=mysqli_fetch_array($datos2);
        if($usuario_admi == $filas_admi["correo_admi"])
        {           if($contrasena_admi == $filas_admi["contrasena_admi"])
                    {$array_vla[0]=true;
                        $array_vla[1]=$filas_admi["tipo_admi"];   
                        return $array_vla; 
                    }else{
                        $array_vla[0]=false;
                        $array_vla[1]="LOGIN INCORRECTO";
                        return $array_vla; 
                    }
        }else{
            echo "<br>Usuario no registrado";
           return false;
        }
    }
 
}

//ingresar datos con los usuarios
function insertar_datos_usuario($datos_rec)
{$con3=conectar("root", "");
 $correo_us=$datos_rec[0];
 $nombre_us=$datos_rec[1];
 $cel_us=$datos_rec[2];
$genero_us=$datos_rec[3];
$fechanac_us=date("Y-m-d",strtotime($datos_rec[4]));
$clave_us2=$datos_rec[5];
//echo "formato de fecha corregido".$fechanac_us;
 $sql3_ins="INSERT INTO usuarios(correo_us, nombre_us, cel_us, genero_us,fechanac_us)
  VALUES ('$correo_us', '$nombre_us', '$cel_us', '$genero_us','$fechanac_us')";   
  if($con3){
        
            if (mysqli_query($con3, $sql3_ins)) {
                //echo "<h1>Registro hecho con éxito</h1>";
                    //registramos en la tabla de login, esto por si existe un error
                    $sql3_ins2="INSERT INTO login_us(correo_us, contrasena_us) VALUES('$correo_us','$clave_us2')";
                        if (mysqli_query($con3, $sql3_ins2)) {
                            echo "<br><br><br><br><br><br><br><h1>Usuario registrado de manera correcta</h1>";
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

/*aqui se pondra el editar los datos del usuario*/
function update_email()
{
    print ('<section id="ctn_sec modus">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                            <span class="input-item3">
								    <i class="fa fa-upload"> </i>
                            </span>
					<h1>Modificar Informacion Usuarios</h1>
				</div>			
			</div>		
			
				<div id="cnt_form">
					<!--Este es el formulario interesante para el resgistro-->
					<form id="contact-form" class="contact" name="contact-form" method="post" action="Herramientas_consultas.php">
						<!--correo-->
                                <div class="form-group">
                                    <span class="input-item">
								    <i class="fa fa-envelope"> </i>
							        </span>
                                    <input type="email" name="email_update" class="form-input" required="required" placeholder="correo electronico">
                                </div> 
                                <div class="form-group">
                                    <span class="input-item">
								    <i class="fa fa-level-up"> </i>
							        </span>
                                    <input type="text" name="update" class="form-input" value="update">
                                </div> 
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Consultar</button>
						</div>
					</form> 
				
			</div>
</section>');
}




?>