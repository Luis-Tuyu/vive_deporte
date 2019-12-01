<?php
include_once("./conexion.php");
?>

<div class="container home">    
    <h2 class="caption_carousel">Inscritos por carrera</h2>      
    <table id="tabla_por carrera" class="table table-striped">
        <thead>
            <tr>      
                <th class="ayudas">Nombre convocatoria</th>          
                <th class="ayudas">Numero de participante</th>
                <th class="ayudas">Nombre </th>
                <th class="ayudas">Correo</th>   
                <th class="ayudas">Celular</th>
            </tr>
        </thead>
        <tbody>
            <?php                 
                $sql_query="SELECT num_participante,nombre_us,ins.correo_us,cel_us, nombre_conv 
                FROM convocatorias c, inscripciones ins, usuarios us 
                WHERE ins.id_conv = c.id_conv && ins.correo_us = us.correo_us && c.nombre_conv LIKE '$nombre_car'
                ORDER BY num_participante";                
                $resultset = mysqli_query($conn, $sql_query) or die("error base de datos:". mysqli_error($conn));
                while( $inscripciones = mysqli_fetch_assoc($resultset) ) {
            ?>
                    <tr id="<?php echo $inscripciones ['correo_us']; ?>">
                    <td><?php echo $inscripciones ['nombre_conv']; ?></td>
                    <td><?php echo $inscripciones ['num_participante']; ?></td>
                    <td><?php echo $inscripciones ['nombre_us']; ?></td>   
                    <td><?php echo $inscripciones ['correo_us']; ?></td>                   
                    <td><?php echo $inscripciones ['cel_us']; ?></td>                                          
                    </tr>
                    <?php
                    } 
            ?>
            
        </tbody>
    </table>    
</div>
