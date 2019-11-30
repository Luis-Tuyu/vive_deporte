	<section id="ctn_sec inscrip">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
					<div class="title_sec">
						<div>
							<span class="input-item3">
									<i class="fa fa-user"> </i>
								</span>
						</div>
						<h1>Inscripciones</h1>
					</div>
				</div>
				
					<div id="cnt_form">
						<!--Este es el formulario interesante para el resgistro-->
						<form id="contact-form" class="contact" name="contact-form" method="post"
							action="Herramientas_consultas.php">
							<!--nombre-->
							<div class="form-group">
								<span class="input-item">
									<i class="fa fa-user"> </i>
								</span>
								<input type="text" name="nombre_ins"class="form-input" required="required"
									placeholder="Nombre">
							</div>
							<!--celular-->
							<div class="form-group">
								<span class="input-item">
									<i class="fa fa-phone"> </i>
								</span>
								<input type="text" name="celular_ins" class="form-input" required="required"
									placeholder="celular">
							</div>
							<!--GENERO-->
							<div class="form-group">
								<span class="input-item">
									<i class="fa fa-venus-mars"> </i>
								</span>
								<input type="text" name="genero_ins" class="form-input" required="required"
									placeholder="genero">
							</div>
							<!--fecha_nacimiento-->
							<label class="ayudas"> Fecha nacimiento:</label>
							<div class="form-group">
								
								<span class="input-item2">
									<i class="fa fa-calendar"> </i>
								</span>
								<input type="date" name="fechanac_ins" class="form-input" required="required"
									placeholder="fecha nacimiento">
							</div>
							<!--correo-->
							<div class="form-group">								
								<div class="form-group">
									<span class="input-item">
										<i class="fa fa-envelope"> </i>
									</span>
									<input type="email" name="email_ins" class="form-input" required="required"
										placeholder="correo electronico">
								</div>
								<!--contraseña-->
								<div class="form-group">
									<span class="input-item">
										<i class="fa fa-key"> </i>
									</span>
									<input type="password" name="contrasena_ins" class="form-input"
										required="required" placeholder="contraseña">
								</div>
								<div class="form-group">
									<label class="ayudas"> Carrera:</label>
									<select name="idconv_ins" size="1" style="height:30px; width:150px; font-size:15px;">
										<?php
								                        include ("../php/herramientas_metodos.php");					
								                        select_carrera(); //ligado en una funcion						
								        ?>
									</select>
								</div>								
								<!--La hora se obtiene con php, porque aqui es para poder seleccionarlo-->
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Inscribir</button>
								</div>
						</form>
					</div>				
	</section>