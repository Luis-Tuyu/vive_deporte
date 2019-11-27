<!doctype html>
<html class="no-js" lang="">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Vive Deporte MX</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">	
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
<body >
		 <!-- start preloader -->
        <div id="loader-wrapper">
            <div class="logo"></div>
            <div id="loader">
            </div>
        </div>
   <!---importar menú-->   
   <div class="menuContainer"></div>
<br><br><br>
<!-- start contact us Section -->
<br><br><br>
<h1 class="title_sec">VALIDAR LOGIN ADMINISTRADORES</h1>
<?php
require ("../VD3.0/php/conexion.php");
if(isset($_POST["correo"], $_POST["contrasena"]))
{$correo_us=$_POST["correo"];
$clave_us2=$_POST["contrasena"];
	$bool_login=validar_login_admin($correo_us,$clave_us2);
}else{//porque enviamos datos a la misma página xd
	//echo "ERROR, primero dedes iniciar sesión, para ver el contenido";
	$bool_login=false;
}

//herramientas para los usuarios
if($bool_login)
{
  echo '<h2 class="title_sec">herramientas del administrador</h2>';
  echo '<div class="Herramientas"></div>'; //lo enlazareos con javascript
  echo '<div class="agregar_admin"></div>';
  update_email();
  echo '<div class="empresas_form"></div>';
  echo '<div class="registrar_eventos"></div>"';
    
}

//los mismos datos del usuario
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

<script src="js/isotope.pkgd.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/showHide.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/plugins.js"></script>

<script src="js/main.js"></script>

<script src="showHide.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){


   $('.show_hide').showHide({			 
		speed: 600, 
		easing: '',  
		changeText: 1, 
		showText: 'View',
		hideText: 'Close' 
					 
	}); 


});

</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 70
        });
    });
</script>

<script>

  //Hide Overflow of Body on DOM Ready //
$(document).ready(function(){
    $("body").css("overflow", "hidden");
});

// Show Overflow of Body when Everything has Loaded 
$(window).load(function(){
    $("body").css("overflow", "visible");        
    var nice=$('html').niceScroll({
	cursorborder:"5",
	cursorcolor:"#FFBE0D",
	cursorwidth:"9px",
	boxzoom:true, 
	autohidemode:true
	});

});
</script>
<script>
	$(document).ready(function () {
		$('.menuContainer').load('html/Menu_barra.html');
	});
</script>


<!--Importar herramientas desde html-->
<script>
    $(document).ready(function () {
      $('.Herramientas').load('html/Inscripcciones.html');
    });
  </script>

<script>
  //importar el registro de administradores
    $(document).ready(function () {
      $('.agregar_admin').load('html/registrar_admin.html');
    });
  </script>
  
  <script>
  //registro de empresas
    $(document).ready(function () {
      $('.empresas_form').load('html/registrar_empresas.html');
    });
  </script>

<script>
  //registro de eventos
    $(document).ready(function () {
      $('.registrar_eventos').load('html/registrar_eventos.php');
    });
  </script>

    </body>
</html>
