<?php
include_once("../php/conexion.php");

$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {   
    $update_field='';
    if(isset($input['correo_admi'])) {
        $update_field.= "correo_admi='".$input['correo_admi']."'";
    } else if(isset($input['nombre_admi'])) {
        $update_field.= "nombre_admi='".$input['nombre_admi']."'";
    } else if(isset($input['fechanac_admi'])) {
        $update_field.= "fechanac_admi='".$input['fechanac_admi']."'";
    } else if(isset($input['celular_admi'])) {
        $update_field.= "celular_admi='".$input['celular_admi']."'";
    } else if(isset($input['salario_admisalario_admi'])) {
        $update_field.= "salario_admi='".$input['salario_admi']."'";
    }  
    if($update_field && $input['correo_admi']) {
        $sql_query = "UPDATE administradores SET $update_field WHERE correo_admi='" . $input['correo_admi'] . "'";  
        mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));     
    }
}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<script type="text/javascript" src="./js/ediciontabla.js"></script>