
<section id="ctn_sec precioconv">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Asignar precios</h1>
                </div>
            </div>
    <div id="cnt_form">
        <div class="input-item3">
            <i class="fa fa-money"> </i>
        </div>
        <!--Formulario de insercion de precio a-->
        <form id="contact-form" class="contact" name="contact-form" method="post" action="Herramientas_consultas.php">
            <div class="form-group">
                <label class="ayudas"> Carrera:</label>
                
                     <?php
                        include ("../php/herramientas_metodos.php");
                        echo '<select name="precio_car2" size="1" style="height:40px; width:210px; font-size:15px;">';					
                        select_carrera(); //ligado en una funcion	
                        echo ' </select> ';
                        echo '<br><br><label class="ayudas"> Modalidad:</label>';
                        echo '<select name="modalidad_cp" size="1" style="height:40px; width:210px; font-size:15px;">';					
                        modalidad_emp(); //ligado en una funcion	
                        echo ' </select> ';

                     ?>  
                                                    
            </div>
            <div class="form-group">
                <span class="input-item">
                    <i class="fa fa-database"> </i>
                </span>
                <input type="text" name="precio_cp" class="form-input" required="required" placeholder="Precio por competidor">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Asignar</button>
            </div>
        </form>
    </div>

</section>

