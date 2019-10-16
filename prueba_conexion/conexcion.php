<?php
//conexion
$conn= oci_connect("SYSTEM","oracle","localhost/xe");
if(!$conn)
{
$m= oci_error();
echo $m['message'], "\n";
}else{
    echo "conexion exitosa";
}
//cerramos la conexion
oci_close($conn);

?>