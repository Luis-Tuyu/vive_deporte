<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sima</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 		
        <!-- Place favicon.ico in the root directory -->
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
        <!-- end preloader -->
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
<!--Menús-->
 <!---importar menú-->   
 <div class="menuContainer"></div>

<!--Recepcion de datos-->
<?php
//herrmaienta de inscripciones
if(isset($_POST["nombre_ins"], $_POST["celular_ins"],$_POST["genero_ins"],$_POST["fechanac_ins"],
$_POST["email_ins"],$_POST["contrasena_ins"], $_POST["idconv_ins"]))
{ include ("php/herramientas_metodos.php");
	$datos_ins[0]=$_POST["email_ins"];
	$datos_ins[1]=$_POST["nombre_ins"];
	$datos_ins[2]=$_POST["celular_ins"];
	$datos_ins[3]=$_POST["genero_ins"];
	$datos_ins[4]=$_POST["fechanac_ins"];
	$datos_ins[5]=$_POST["contrasena_ins"];
	$datos_ins[6]=$_POST["idconv_ins"];
  inscripcion($datos_ins); 
  echo "<br><br><br><br><br>"."<h1>inscripcion correcta</h1>";
}else{
	echo "<br><br><br><br>"."<h1>error no estan definidos todos los objetos</h1>";
}

//registro de administradores
if(isset($_POST["nombre_admi"],$_POST["celular_admi"],$_POST["fechanac_admi"]
,$_POST["tipo_admi"],$_POST["email_admi"],$_POST["contrasena_admi"]))
{ include ("php/herramientas_metodos.php");
  $datos_admi[0]=$_POST["email_admi"];
	$datos_admi[1]=$_POST["nombre_admi"];
	$datos_admi[2]=$_POST["fechanac_admi"];
	$datos_admi[3]=$_POST["celular_admi"];
  $datos_admi[4]=$_POST["tipo_admi"];
  $datos_admi[5]=$_POST["salario_admi"];
	$datos_admi[6]=$_POST["contrasena_admi"];
  registrar_adiministradores($datos_admi); //registramos a los usuarios
  echo "<br><br><br><br><br>"."<h1>Registro de administradores correcta</h1>";
}else{ echo "error de registro administradores";}


//si es igual mostramos la informacion dentro de un formulario
if(isset($_POST["email_update"],$_POST["update"]))
{ if($_POST["update"]=="update")
  {/*ejecutamos este codigo*/ 
    include ("php/herramientas_metodos.php");
    $correo_update=$_POST["email_update"];
    $filas_usuarios=seleccionar_usuarios($correo_update);
    update_colocar_form($filas_usuarios);
  }
}

//ahora hacemos el update dentro de la base de datos
if(isset($_POST["nombre_update"], $_POST["celular_update"],$_POST["genero_update"],
$_POST["genero_update"],$_POST["fechanac_update"], $_POST["email_update"])&&
 $_POST["update"]=="update_accion")
{//hacemos un update de su informacion
  include ("php/herramientas_metodos.php");
    $datos_form_update[0]=$_POST["email_update"];
    $datos_form_update[1]=$_POST["nombre_update"];
    $datos_form_update[2]=$_POST["celular_update"];
    $datos_form_update[3]=$_POST["genero_update"];
    $datos_form_update[4]=$_POST["fechanac_update"];
  update_accion($datos_form_update);
}else{}
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
<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
			function initialize() {
			  var mapOptions = {
				zoom: 14,
				scrollwheel: false,
				center: new google.maps.LatLng(41.092586000000000000, -75.592688599999970000)
			  };
			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);
			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });
			}
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
<script src="js/main.js"></script>

<script src="showHide.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){


   $('.show_hide').showHide({			 
		speed: 1000,  // speed you want the toggle to happen	
		easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 1, // if you dont want the button text to change, set this to 0
		showText: 'View',// the button text to show when a div is closed
		hideText: 'Close' // the button text to show when a div is open
					 
	}); 


});

</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
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
	cursorcolor:"#00AFF0",
	cursorwidth:"3px",
	boxzoom:true, 
	autohidemode:true
	});

});
</script>
<script>
	//Menú
    $(document).ready(function () {
      $('.menuContainer').load('html/Menu_barra.html');
    });
  </script>


    </body>
</html>
