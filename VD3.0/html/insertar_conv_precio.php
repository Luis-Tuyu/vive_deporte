
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
                <select name="precio_car" size="1" style="height:30px; width:150px; font-size:15px;">
                     <?php
                        include ("../php/herramientas_metodos.php");					
                        select_carrera(); //ligado en una funcion						
                     ?>  
                </select>                                      
            </div>
            <div class="form-group">
                <span class="input-item">
                    <i class="fa fa-exchange"> </i>
                </span>
                <input type="text" name="modalidad_cp" class="form-input" required="required" placeholder="Modalidad">
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

