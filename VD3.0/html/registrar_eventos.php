<section id="ctn_sec evento">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<div class="input-item3">
					
						<i class="fa fa-folder-open"> </i>
					</div>
					<h1>Registro de eventos</h1>
				</div>			
			</div>		
			
				<div id="cnt_form">
					<!--Este es el formulario interesante para el resgistro-->
					<form id="contact-form" class="contact" name="contact-form" method="post" action="Herramientas_consultas.php">
						<!--nombre-->
						<div class="form-group">
							<span class="input-item">
								<i class="fa fa-pencil"> </i>
							</span>
						<input type="text" name="nombre_conv" class="form-input" required="required" placeholder="Nombre convocatoria">
						</div>
						<!--empresa-->
						<div class="form-group">
							<label class="ayudas"> Empresa:</label>
							<select name="empresas_conv" size="1" style="height:30px; width:150px; font-size:15px;">   
						<?php
						include ("../php/herramientas_metodos.php");					
							seleccionar_emp(); //ligado en una funcion						
						?>
							</select>
						</div>						
						<!--costo convocatoria-->
						<div class="form-group">
							<span class="input-item">
								<i class="fa fa-money"> </i>
							</span>
								<input type="text" name="costo_conv" class="form-input" required="required" placeholder="costo de realizar el evento">
							</div> 
							<!--lugar---->
						<div class="form-group">
							<span class="input-item">
								<i class="fa fa-plane"> </i>
							</span>
								<input type="text" name="lugar_conv" class="form-input"  placeholder="lugar">
						</div> 
						<!--hora -->
						<div class="form-group">
							<p class="ayudas">Hora del evento: </p>
							<span class="input-item2">
								<i class="fa fa-clock-o"> </i>
							</span>
								<input type="time" name="hora_conv" class="form-input" required="required" placeholder="hora">
						</div>
						<p class="ayudas">Fecha de realizacion: </p>
						<div class="form-group">
							<span class="input-item2">
								<i class="fa fa-calendar"> </i>
							</span>
								<input type="date" name="fecha_conv" class="form-input" required="required" placeholder="fecha del evento">
								</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Registrar convocatorias</button>
						</div>
					</form> 
				
			</div>
</section>