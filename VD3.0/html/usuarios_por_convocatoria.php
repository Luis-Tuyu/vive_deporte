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
				<form id="contact-form" class="contact" name="contact-form" method="post" action="herramientas_metodos.php">					                
                    <div class="form-group">
                       <?php
						include ("../php/herramientas_metodos.php");
						echo '<div class="form-input">
						<select name="nombre_car">';
							select_carrera(); //ligado en una funcion
						echo '
						</select></div>';
						?>  </div>
                    <div class="form-group">
						<button type="submit" class="btn btn-primary">Generar reporte</button>
					</div>
				</form>
			</div>

</section>

