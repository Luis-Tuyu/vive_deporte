
    <section id="ctn_sec ramas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                    <div class="title_sec">
                        <h1>Insertar Rama</h1>
                    </div>
                </div>
    
                <div id="cnt_form">
                    <div class="input-item3">
                        <i class="fa fa-pagelines"> </i>
                    </div>
                    <!--Formulario de reporte de usuarios inscritos por convocatoria-->
                    <form id="contact-form" class="contact" name="contact-form" method="post" action="herramientas_consultas.php">
                        <div class="form-group">
                                <label class="ayudas"> Carrera:</label>
                                <select name="carreras_ramas" size="1" style="height:30px; width:200px; font-size:15px;">
                            <?php
                                include ("../php/herramientas_metodos.php");                          
                                select_carrera(); //ligado en una funcion                                                     
                            ?>  
                                </select>
                        </div>
                        <div class="form-group">
                            <span class="input-item">
                                <i class="fa fa-heartbeat"> </i>
                            
                            </span>
                            <input type="text" name="modalidad_re" class="form-input" required="required" placeholder="Modalidad de la convocatoria">
                        </div>
                        <div class="form-group">
                            <span class="input-item">
                                <i class="fa fa-cubes"> </i>
                               
                            </span>
                            <input type="text" name="categoria_re" class="form-input" required="required" placeholder="Categoria de la convocarotia">
                        </div>
                        <div class="form-group">
                            <span class="input-item">
                                <i class="fa fa-list-ol"> </i>
                               
                            </span>
                            <select name="edad_re" size="1" style="height:50px; width:210px; font-size:15px;">
                            <option value="16">Junior 16 - 19 años (16 - 19)</option>
                            <option value="20">Master 20 - 29 años (20 - 29)</option>
                            <option value="30">Master 30 - 39 años (30 - 39)</option>
                            <option value="40">Master 40 - 49 años (40 - 49)</option>
                            <option value="50">Master 50 y 59 (50 - 59)</option>
                            <option value="60">Master +60 (60 y mayores)</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Agregar rama</button>
                        </div>
                    </form>
                </div>
    
    </section>
