<?php
function conectar_m($usuario, $contrasena)
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
{$con3=conectar_m("root", "");
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
                        if (mysqli_query($con3, $sql3_ins2)) 
                        {
                            //debe haber un select, para determinar el acumulador de convocatorias
                                $sql3_contador= "SELECT acumulador_participante_conv FROM convocatorias 
                                WHERE id_conv LIKE $convoc";
                                $auxiliar=mysqli_query($con3,$sql3_contador);
                                $contador=mysqli_fetch_array($auxiliar);
                                $suma=$contador["acumulador_participante_conv"]+1; //sumar el numero de participante
                                     $sql3_ins3="INSERT INTO inscripciones (id_conv, correo_us, fecha_ins, hora_ins, num_participante) 
                                    VALUES ('$convoc', '$correo_us', '$fechains', '$hora_ins','$suma')";      
                                        if(mysqli_query($con3,$sql3_ins3))
                                        {echo "inscripcion correcta en la tabla de inscripciones";
                                            //ahora haceos un update del contador, para el # de participante
                                            $sql_acont="UPDATE convocatorias SET acumulador_participante_conv='$suma'
                                            WHERE id_conv = '$convoc'";
                                            mysqli_query($con3,$sql_acont);
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

//registrar empresas
function registrar_emp($arre_emp)
{$con_emp=conectar_m("root","");
$sql_emp= "INSERT INTO empresas(id_emp, nombre_emp, cel_emp, direccion_emp, repre_emp)
VALUES('', '$arre_emp[0]', '$arre_emp[1]', '$arre_emp[2]', '$arre_emp[3]')";
        if(mysqli_query($con_emp, $sql_emp))
        {echo "<br><br><br><br><h1>registro correcto</h1>";
            print("correcto");
        }else{echo "<br><br><br><br><h1>ERROR DE REGISTRO</h1>";}
}

 //perfecto funcion. luisito debe darle formato
function seleccionar_emp()
{$con_emp2=conectar_m("root", "");
$sql_selec_emp="SELECT id_emp, nombre_emp FROM empresas";
        if(mysqli_query($con_emp2, $sql_selec_emp))
        {$query_emp=mysqli_query($con_emp2, $sql_selec_emp);
            while($fila = mysqli_fetch_array($query_emp))
            {
            echo '<option class="form-control mail-field">';
             echo $fila["nombre_emp"];
             echo "</option>";
          }
            
        }else{}
}
//insertar administradores
function registrar_adiministradores($datos_admi)
{$con3=conectar_m("root", ""); //conexion
    $correo_admi=$datos_admi[0];
    $nombre_admi=$datos_admi[1];
   $fechanac_admi=date("Y-m-d",strtotime($datos_admi[2]));
   $cel_admi=$datos_admi[3];
   $tipo_admi=$datos_admi[4]; //es para los privilegios
    if($datos_admi[5]=='')//comparar el salario 
    {$salario_admi=0;
    }else{$salario_admi=(int)$datos_admi[5];}
   $clave_admi=$datos_admi[6];
    $sql_admi="INSERT INTO administradores (correo_admi, nombre_admi, fechanac_admi, celular_admi, salario_admi) VALUES ('$correo_admi', '$nombre_admi','$fechanac_admi','$cel_admi', '$salario_admi')";   
    if($con3){
          
             if (mysqli_query($con3, $sql_admi)) {//registrar administradores
                  echo "<h1>Registro de administradores</h1>";
                              //echo "<h1>Registro exitoso en la tabla de login_admin</h1>";
                               $sql_admi_2="INSERT INTO login_admin (correo_admi, contrasena_admi, tipo_admi) 
                              VALUES ('$correo_admi','$clave_admi','$tipo_admi')";      
                                  if(mysqli_query($con3,$sql_admi_2))
                                  {echo "inscripcion correcta en la tabla login admin";
                                  }else{ echo "Error: " . $sql_admi_2. "<br>" . mysqli_error($con3);}
                              
                  } else {
                  echo "Error: " . $sql_admi. "<br>" . mysqli_error($con3);
                  }
                    }else{
      echo "<br>no se ha podido insertar por un error de conexion BD";
    }
}

//registrar convocatorias
function registrar_conv1($datos_emp)
{ $con_conv1=conectar_m("root", "");
    $sql_id_emp="SELECT id_emp FROM empresas WHERE nombre_emp LIKE '$datos_emp[1]' ";
    $consulta_emp=mysqli_query($con_conv1, $sql_id_emp);
    $aux_arre=mysqli_fetch_array($consulta_emp);
    $aux_idemp=$aux_arre["id_emp"];
    $sql1_conv="INSERT INTO convocatorias (id_conv, id_emp, nombre_conv, costo_conv, acumulador_participante_conv)
    VALUES ('','$aux_idemp','$datos_emp[0]','$datos_emp[2]','0')";
        if($con_conv1)
        {mysqli_query($con_conv1, $sql1_conv);
                //segundo registro, debemos seleccionar el maximo, el cual es el último id
        $sql_id="SELECT MAX(id_conv) FROM convocatorias"; //listo el registro de convocatorias
        $id=mysqli_query($con_conv1,$sql_id);
        $id_arre=mysqli_fetch_array($id);
        $id_dato=$id_arre["MAX(id_conv)"];
        $aux_conv_date=date("Y-m-d",strtotime($datos_emp[5]));
        $sqli_infoevento="INSERT INTO convocatorias_infoevento (id_conv, lugar_conv, hora_conv, fecha_conv)
        VALUES('$id_dato','$datos_emp[3]','$datos_emp[4]','$aux_conv_date')";
           mysqli_query($con_conv1,$sqli_infoevento); 
}
}

/*Seleccionamos para luego actualizar los datos*/
function seleccionar_usuarios($correo_usuario)
{$con4=conectar_m("root","");
    if($con4)
    {$consulta_us="SELECT * FROM usuarios WHERE correo_us LIKE '$correo_usuario'";
        $select_us=mysqli_query($con4,$consulta_us);   
        $filas_us=mysqli_fetch_array($select_us);
        if($correo_usuario ==$filas_us["correo_us"])
        {echo "<br><rb><br><br><h2>usuario registrado, obteniendo su informacion<h2>";
            return $filas_us;}
        else{echo "<br><br><br><h2>ERROR DE CONSULTA</h2>";}
                
    }
}


function update_accion($datos_ua)
{$con_update=conectar_m("root","");
    $correo_ua=$datos_ua[0];
    $nombre_ua=$datos_ua[1];
    $cel_ua=$datos_ua[2];
    $genero_ua=$datos_ua[3];
    $fechanac_ua=$datos_ua[4];
    if($con_update)
    //la llave primaria no se puede actualizar
    {$update_sql="UPDATE usuarios SET nombre_us='$nombre_ua',
        cel_us='$cel_ua', genero_us='$genero_ua', fechanac_us='$fechanac_ua'
        WHERE correo_us LIKE '$correo_ua'";
        if(mysqli_query($con_update,$update_sql))
        {echo "<br><br><br><br><h1>echo actualizacion correcta</h1>";  
        }
        else{echo "<br><br><br><h2>ERROR DE UPDATE</h2>";}
                
    }

}

function update_colocar_form($datos_update)
{
    print ('<section id="ctn_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>UPDATE USUARIO</h1>
				</div>			
			</div>		
			<div class="col-sm-6"> 
				<div id="cnt_form">
					<!--Este es el formulario interesante para el resgistro-->
					<form id="contact-form" class="contact" name="contact-form" method="post" action="Herramientas_consultas.php">
                            <!--nombre-->
                            <div class="form-group">
                            <input type="text" name="nombre_update" class="form-control name-field" required="required" 
                            placeholder="Nombre" value="'.$datos_update["nombre_us"].'">
                            </div>
                            <div class="form-group">
                                <input type="text" name="celular_update" class="form-control mail-field"
                                 required="required" placeholder="celular" value="'.$datos_update["cel_us"].'">
                            </div> 
                            <!--GENERO-->
					        	<div class="form-group">
                                <input type="text" name="genero_update" class="form-control mail-field" 
                                required="required" placeholder="genero" value="'.$datos_update["genero_us"].'">
                                </div> 
                                <div class="form-group">
                                   
                                <p>Fecha de nacimiento</p>
                                <input type="date" name="fechanac_update" class="form-control mail-field" 
                                required="required" placeholder="fecha nacimiento" value="'.$datos_update["fechanac_us"].'">
						        </div>
                                <!--correo-->
                                <div class="form-group">
                                    <input type="email" name="email_update" class="form-control mail-field" required="required" 
                                    placeholder="correo electronico" value="'.$datos_update["correo_us"].'">
                                </div> 
                                <!---nos servirá para reconocer que se hará en la báse de datos-->
                                <div class="form-group">
                                <input type="text" name="update" class="form-control mail-field" value="update_accion">
                            </div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Modificar</button>
						</div>
					</form> 
				</div>
			</div>
</section>');
}
/*seleccionamos todos  los usuarios por carrera*/
function usuarios_por_convocatoria($nombre_car)
{
    $con_tabla=conectar_m("root", "");
    $sql_all="SELECT num_participante,nombre_us,ins.correo_us,cel_us, nombre_conv 
    FROM convocatorias c, inscripciones ins, usuarios us 
    WHERE ins.id_conv = c.id_conv && ins.correo_us = us.correo_us && c.nombre_conv LIKE '$nombre_car'
    ORDER BY num_participante";
    if($con_tabla)
    {$sql_query_all=mysqli_query($con_tabla,$sql_all);
    $arra_all=mysqli_fetch_array($sql_query_all);
    return $arra_all;
    }else {echo "error seleccion";}    
}

/*insert*/
function insertar_conv_precio($cp)
{$conectar_cp=conectar_m("root","");
    $Sql_ins_cp="INSERT INTO convocatorias_precio (id_conv, modalidad_cp, precio_cp)
    VALUES('$cp[0]','$cp[1]'.'$cp[2]')";
    if($conectar_cp)
    {mysqli_query($conectar_cp, $Sql_ins_cp);  
    }else{ echo "error en la i";}

}

/*contenido nuevo*/
function insertar_kits($datos_kits)
{$conectar_kits=conectar_m("root", "");
    $sql_ins_kit="INSERT INTO kits(id_conv, fecha_kits, lugar_kits, requisitos_kits) 
    VALUES('$datos_kits[0]','$datos_kits[1]','$datos_kits[2]','$datos_kits[4]')";
    if($conectar_kits)
    {mysqli_query($conectar_kits,$sql_ins_kit);
    }

}

/*contenido nuevo*/
function insertar_ramas($datos_ramas)
{$conectar_ramas=conectar_m("root","");
   $sql_ramas="INSERT INTO ramas_eventos(id_conv, modalidad_re, categoria_re, edad_re)
   VALUES ('$datos_ramas[0]','$datos_ramas[1]','$datos_ramas[2]')"; 
        if($conectar_ramas)
        {
            if(mysqli_query($conectar_ramas,$sql_ramas))
            {mysqli_query($conectar_ramas,$sql_ramas);
                echo "Registro de ramas correcto";
            }else{ echo "Registro de ramas incorrecto";}
        }
}

?>