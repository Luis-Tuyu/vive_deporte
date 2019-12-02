<?php
include_once("./php/conexion.php");
?>
<section id="tablaadmin">
<div class="container home">    
    <h2 class="title_sec">Tabla de Administradores</h2>      
    <table id="tabla_administradores" class="table table-striped">
        <thead>
            <tr>
                <th class="ayudas">Correo</th>
                <th class="ayudas">Nombre</th>
                <th class="ayudas">Fecha de nacimiento </th>
                <th class="ayudas">Celualr</th>   
                <th class="ayudas">Salario</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            
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






