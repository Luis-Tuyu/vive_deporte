
<section id="ctn_sec lib_num">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Liberar numero</h1>
                </div>
            </div>
            <div id="cnt_form">
                <div class="input-item3">
                    <i class="fa fa-medkit"> </i>
                </div>
                <!--Formulario liberar numeros-->
                <form id="contact-form" class="contact" name="contact-form" method="post" action="herramientas_consultas.php">
                    <div class="form-group">                        
                        <span class="input-item">
                            <i class="fa fa-number"> </i>
                        </span>
                        <input type="email" name="num_participante" class="form-input" required="required" placeholder="correo">
                    </div> 
                    <div class="form-item">
						<select name="lib_num" size="1" style="height:30px; width:150px; font-size:15px;">   
                            <?php
                                include ("../php/herramientas_metodos.php");
                                //echo '';
                                    select_carrera(); //ligado en una funcion
                            ?>       
                        </select>
                    </div>                                                       
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Asignar</button>
                    </div>
                </form>
            </div>

</section>        