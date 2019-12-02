<?php
include_once("./php/conexion.php");
?>

<section id="tablacarr">
<div class="container home">    
    <h2 class="title_sec">Carreras actuales</h2>      
    <table id="tabla_administradores" class="table table-striped">
        <thead>
            <tr>
                <th class="ayudas">Carrera</th>
                <th class="ayudas">Lugar</th>                                                                        
                <th class="ayudas">Fecha</th>                                                                        
                <th class="ayudas">Hora</th>                                                                        
            </tr>
        </thead>
                <tbody>
            <?php                          
              $sql_query="SELECT nombre_conv , lugar_conv , fecha_conv , hora_conv  
FROM convocatorias c, convocatorias_infoevento cp 
WHERE cp.id_conv = c.id_conv";
                $resultset = mysqli_query($conn, $sql_query) or die("error base de datos:". mysqli_error($conn));
                while( $convocatorias = mysqli_fetch_assoc($resultset) ) {
            ?>
                    <tr id="<?php echo $convocatorias ['nombre_conv']; ?>">
                    <td><?php echo $convocatorias ['nombre_conv']; ?></td>
                    <td><?php echo $convocatorias ['lugar_conv']; ?></td>                                  
                    <td><?php echo $convocatorias ['fecha_conv']; ?></td> 
                    <td><?php echo $convocatorias ['hora_conv']; ?></td> 
                    </tr>
                    <?php
                    } 
            ?>
            
        </tbody>
    </table>    
</div>

</section>