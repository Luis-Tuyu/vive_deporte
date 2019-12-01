  <section id="ctn_sec usconv">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Reporte Usuarios-Convocatoria</h1>
				</div>
			</div>

			<div id="cnt_form">
				<div class="input-item3">
					<i class="fa fa-file"> </i>					
				</div>
				<!--Formulario de reporte de usuarios inscritos por convocatoria-->
				<form id="contact-form" class="contact" name="us_conv" method="post" action="Herramientas_consultas.php">					                
				 <div class="form-group">	 
					 <p class="ayudas">Selecion de carrera: </p>
					<select name="us_by_conv" size="1" style="height:30px; width:150px; font-size:15px;">  
					   <?php
					   
						include ("../php/herramientas_metodos.php");					
							select_carrera(); //ligado en una funcion					
						?>
					</select>
				</div>
                    <div class="form-group">
						<button type="submit" class="btn btn-primary">Generar reporte</button>
					</div>
				</form>
			</div>

</section>


