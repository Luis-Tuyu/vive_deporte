<?php
include_once("./php/conexion.php");

}
?>
<section>
<div class="container home">    
    <h2 class="caption_carousel">Tabla de Administradores</h2>      
    <table id="tabla_administradores" class="table table-striped">
        <thead>
            <tr>
                <th class="ayudas">correo_admi</th>
                <th class="ayudas">nombre_admi</th>
                <th class="ayudas">fechanac_admi </th>
                <th class="ayudas">celular_admi</th>   
                <th class="ayudas">salario_admi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            if(isset($_POST["us_by_conv"]))
{echo "<h1>Usuarios por convocatoria</h1>";
  include ("php/herramientas_metodos.php");  
  $us_conv=$_POST["us_by_conv"];
  usuarios_por_convocatoria($us_conv);
}else{echo "<h1>ERROR</h1>";}
                $sql_query = "SELECT correo_admi, nombre_admi, fechanac_admi, celular_admi, salario_admi FROM administradores";
                $resultset = mysqli_query($conn, $sql_query) or die("error base de datos:". mysqli_error($conn));
                while( $administradores = mysqli_fetch_assoc($resultset) ) {
            ?>
                    <tr id="<?php echo $administradores ['correo_admi']; ?>">
                    <td><?php echo $administradores ['correo_admi']; ?></td>
                    <td><?php echo $administradores ['nombre_admi']; ?></td>
                    <td><?php echo $administradores ['fechanac_admi']; ?></td>
                    <td><?php echo $administradores ['celular_admi']; ?></td>   
                    <td><?php echo $administradores ['salario_admi']; ?></td>                      
                    </tr>
                    <?php
                    } 
            ?>
            
        </tbody>
    </table>    
</div>

</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
<script type="text/javascript" src="dist/jquery.tabledit.js"></script>
<script type="text/javascript" src="js/ediciontabla.js"></script>






