
<section id="ctn_sec kits">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
                <div class="title_sec">
                    <h1>Kits</h1>
                </div>
            </div>
            <div id="cnt_form">
                <div class="input-item3">
                    <i class="fa fa-medkit"> </i>
                </div>
                <!--Formulario para los kits-->
                <form id="contact-form" class="contact" name="contact-form" method="post" action="herramientas_metodos.php">
                    <div class="form-group">
                        <span class="input-item">
                            <i class="fa fa-key"> </i>
                        </span>
                        <input type="text" name="id_conv" class="form-input" required="required" placeholder="ID convocatoria">
                    </div>
                    <div class="form-group">
                        <label>Fecha para los kits:</label>
                        <br>
                        <span class="input-item2">
                            <i class="fa fa-calendar"> </i>
                        </span>
                        
                        <input type="date" name="fecha_kits" class="form-input" id="txt-input" required="required">
                    </div>
                    <div class="form-group">
                        <span class="input-item">
                            <i class="fa fa-location-arrow"> </i>
                        </span>
                        <input type="text" name="lugar_kits" class="form-input" required="required" placeholder="Lugar">
                    </div>                            
                    <div class=" form-group"> 
                        <label>Requerimientos de kits:  </label>                           
                        <textarea name="requisitos_kits" id="message" required="required" class="form-control" rows="8"
                            placeholder="Requerimientos"></textarea>                            
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Asignar</button>
                    </div>
                </form>
            </div>

</section>        
        
