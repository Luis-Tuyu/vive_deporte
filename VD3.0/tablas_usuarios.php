<?php
include_once("./php/conexion.php");
?>
<section id="tablaus">
<div class="container home">    
    <h2 class="title_sec">Tabla de usuarios</h2>      
    <table id="tabla_administradores" class="table table-striped">
        <thead>
            <tr>
                <th class="ayudas">Correo</th>
                <th class="ayudas">Nombre</th>
                <th class="ayudas">Celualr</th>
                <th class="ayudas">Genero</th>
                <th class="ayudas">Fecha de nacimiento </th>                                   
            </tr>
        </thead>

                <tbody>
            <?php 
           
                $sql_query = "SELECT correo_us, nombre_us, cel_us, genero_us,fechanac_us FROM usuarios";
                $resultset = mysqli_query($conn, $sql_query) or die("error base de datos:". mysqli_error($conn));
                while( $usuarios = mysqli_fetch_assoc($resultset) ) {
            ?>
                    <tr id="<?php echo $usuarios ['correo_us']; ?>">
                    <td><?php echo $usuarios ['correo_us']; ?></td>
                    <td><?php echo $usuarios ['nombre_us']; ?></td>
                    <td><?php echo $usuarios ['cel_us']; ?></td>
                    <td><?php echo $usuarios ['genero_us']; ?></td>   
                    <td><?php echo $usuarios ['fechanac_us']; ?></td>                      
                    </tr>
                    <?php
                    } 
            ?>
            
        </tbody>
    </table>    
</div>

</section>