<?php
	if (isset($_POST["mail"])) {
        echo "Yes, mail is set";    
    }else{
        echo "ERROR EN LA VARIABLE";
    }


    include ("php/Herramientas_metodos.php");
    select_form("luis");
?>