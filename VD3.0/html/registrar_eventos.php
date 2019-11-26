<section id="ctn_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Registro de eventos</h1>
				</div>			
			</div>		
			<div class="col-sm-12"> 
				<div id="cnt_form">
					<!--Este es el formulario interesante para el resgistro-->
					<form id="contact-form" class="contact" name="contact-form" method="post" action="Herramientas_consultas.php">
						<!--nombre-->
						<div class="form-group">
						<input type="text" name="nombre_conv" class="form-control name-field" required="required" placeholder="Nombre convocatoria">
						</div>
						<!--empresa-->
						<?php
						include ("../php/herramientas_metodos.php");
						echo '<div class="form-group">
						<select name="empresas_conv">';
							seleccionar_emp(); //ligado en una funcion
						echo '
						</select></div>';
						?>

						<!--costo convocatoria-->
						<div class="form-group">
								<input type="text" name="costo_conv" class="form-control mail-field" required="required" placeholder="costo de la convocatoria">
							</div> 
							<!--lugar---->
						<div class="form-group">
								<input type="text" name="lugar_conv" class="form-control mail-field"  placeholder="lugar">
						</div> 
						<!--hora -->
						<div class="form-group">
                            <p>Hora del evento</p>
								<input type="time" name="hora_conv" class="form-control mail-field" required="required" placeholder="hora">
						</div>
						<p>Fecha de realizacion</p>
						<div class="form-group">
								<input type="date" name="fecha_conv" class="form-control name-field" required="required" placeholder="fecha del evento">
								</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Registrar convocatorias</button>
						</div>
					</form> 
				</div>
			</div>
</section>