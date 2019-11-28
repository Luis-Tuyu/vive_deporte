<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vive Deporte MX</title>
</head>
<body>
   
<?php
if(isset($_POST["correo"], $_POST["contra"]))
{//mostramos la comprobacion
    echo ("comprobacion");
    include("conexion.php");
    $correo=$_POST["correo"];
    $contra=$_POST["contra"];
    $permiso=validar_login_admin($correo,$contra);
    if($permiso) //si tiene permiso le mostramos la página
        {$sql=obtener_datos($_POST["correo"], $_POST["contra"]);
            print ("<h1>Herramientas del administrador</h1><br>");
            print("<h3>Correo: ".$sql["correo_admin"]."</h3>");
        }
}else{

    print ("ERROR, no se ha validado<br>");
    print ("Ingrese al <a href=\"login.php\">Inicio de sesion</a> si ya tiene una cuenta");
    print("<br> en caso contrario, registrese al <a href=\"formulario.php\">Formulario</a>");
}
?>


</body>
</html>