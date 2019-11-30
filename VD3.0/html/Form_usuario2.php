<section id="ctn_sec regisus">
	<div class="container">
		<div class="row">			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<div class="input-item3">
					<i class="fa fa-align-justify"> </i>
				</div>
					<h1>Usuarios</h1>
				</div>			
			</div>
			<div id="cnt_form">				
				<!--Este es el formulario interesante para el resgistro-->
				<form id="contact-form" class="contact" name="contact-form" method="post"
					action="registrar_usuario.php">
					<!--nombre-->
					
					<div class="form-group">
						<span class="input-item">
							<i class="fa fa-user"> </i>
						</span>
						<input type="text" name="name" class="form-input" id="txt-input	" required="required"
							placeholder="Nombre Completo">
					</div>
					<!--celular-->
					<div class="form-group">
						<span class="input-item">
							<i class="fa fa-phone"> </i>
						</span>
						<input type="text" name="celular" class="form-input" id="txt-input	" required="required"
							placeholder="celular">
					</div>
					<!--GENERO-->
					<div class="form-group">
						<span class="input-item">
							<i class="fa fa-venus-mars"> </i>
						</span>
						<input type="text" name="genero" class="form-input" id="txt-input	" required="required"
							placeholder="genero">
					</div>
					<!--fecha_nacimiento-->
					<label class="ayudas"> Fecha de nacimiento::</label>
					<div class="form-group">
						<span class="input-item2">
							<i class="fa fa-calendar"> </i>
						</span>
						<input type="date" name="fecha_nac" class="form-input" id="txt-input" required="required"
							placeholder="fecha nacimiento">
					</div>
					<!--correo-->
					<div class="form-group">
						<div class="form-group">
							<span class="input-item">
								<i class="fa fa-envelope"> </i>
							</span>
							<input type="text" name="email" class="form-input" id="txt-input	" required="required"
								placeholder="correo electronico">
						</div>
						<!--contraseña-->
						<div class="form-group">
							<span class="input-item">
								<i class="fa fa-key"> </i>
							</span>
							<input type="password" name="contrasena" class="form-input" id="txt-input	"
								required="required" placeholder="contraseña">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Enviar</button>
						</div>
				</form>
			</div>

</section>