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
   <!---importar menú-->          
   <div class="Barra_lateral"></div>
<!-- start contact us Section -->
<br>
<br>
<br>
<br>
<br>
<br>
<?php
$sesion1;
require ("../VD3.0/php/conexion.php");
if(isset($_POST["correo"], $_POST["contrasena"]))
{$correo_us=$_POST["correo"];
$clave_us2=$_POST["contrasena"];
  $bool_login=validar_login_admin($correo_us,$clave_us2);
$sesion1=$bool_login[0];
//header("location:redireccion.php");
}else{//porque enviamos datos a la misma página xd
	//echo "ERROR, primero dedes iniciar sesión, para ver el contenido";
  //$bool_login=false;
  $sesion1=true;
  
  if(isset($_COOKIE["privilegio"]))
  {
    $bool_login[1]=$_COOKIE["privilegio"]; //lo leemos
  }else{
    $bool_login[1]=""; //ponemos vacio$_COOKIE["privilegio"]
  }

}


//herramientas para los usuarios

 if($sesion1){
if($bool_login[1] == "MO")//master organizador, administrador
    {echo '<h2>herramientas del administrador</h2>';
      echo '<div class="Herramientas"></div>'; //lo enlazareos con javascript
      echo '<div class="agregar_admin"></div>';
      update_email();
      echo '<div class="empresas_form"></div>';
      echo '<div class="registrar_eventos"></div>"';
      echo '<div class="usuarios_convocatoria"></div>"';
      echo '<div class="precio_convocatoria"></div>"';    
      echo '<div class=" ramas"></div>"';    
      echo '<div class=" kits"></div>"';    
      echo '<div class="  dell_admin"></div>"'; 
      echo '<div class="  lib_num"></div>"';
      echo '<div class="  form_usuarios"></div>"';
      echo '<div class="elimnar_usuario"></div>';
      echo '<div class="tablaadmin"></div>';


      

      echo '<div class="cerrar_sesion"></div>';
    }else if($bool_login[1]=='PV') //punto de venta
    { echo '<div class="Herramientas"></div>'; //inscripcciones
      echo '<div class="usuarios_convocatoria"></div>"';
      //faltará otras herramientas
      echo '<div class="cerrar_sesion"></div>';
    }else if($bool_login[1]=='MC') //master cliente, empresa
    {//mostrará toda la info
      echo '<div class="usuarios_convocatoria"></div>"';
      echo '<div class="cerrar_sesion"></div>';
    }else{
      echo "ERROR, USUARIO, VALIDACION INCORRECTA";
    }
  }


//cerrar sesion
if(isset($_POST["change"]))
{ echo "Variable definida";
    if($_POST["change"]=="true")
  {$sesion1=false;
  unset($_COOKIE["privilegio"]);
    $bool_login[1]="";
    $url="index.html";
    //header("location:redireccion.php");
    echo "<SCRIPT>window.location='$url';</SCRIPT>"; 
  }
}

?>

<!-- start footer Section -->
<footer id="ft_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ft">
					<ul>
						<li><a href="https://www.facebook.com/ViveDeporteMx/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/ViveDeporteMX"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.instagram.com/vivedeportemx/"><i class="fa fa-instagram"></i></a></li>

					</ul>
				</div>
				<ul class="copy_right">
					<li>&copy; Vive Deporte 2019</li>
					<li>Desarrollado por DiseñaTec</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<!-- End footer Section -->  
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

<script>
  //liberar numero
	$(document).ready(function () {
		$('.lib_num').load('html/liberar_num.php');
	});
</script>


<!--Importar herramientas desde html-->
<script>
    $(document).ready(function () {
      $('.Herramientas').load('html/Inscripcciones.php');
    });
  </script>

<script>
  //insertar kits
    $(document).ready(function () {
      $('.kits').load('html/insertar_kits.php');
    });
  </script>

<script>
  //importar el registro de administradores
    $(document).ready(function () {
      $('.agregar_admin').load('html/registrar_admin.html');
    });
  </script>
  <script>
  //eliminar admministrador
    $(document).ready(function () {
      $('.dell_admin').load('html/elimnar_admi.php');
    });
  </script>
  
  <script>
  //registro de empresas
    $(document).ready(function () {
      $('.empresas_form').load('html/registrar_empresas.html');
    });
  </script>

 <script>
  //insertar ramas
    $(document).ready(function () {
      $('.ramas').load('html/insertar_ramas.php');
    });
  </script>
<script>
  //registro de eventos
    $(document).ready(function () {
      $('.registrar_eventos').load('html/registrar_eventos.php');
    });
  </script>

  <script>
  //usuarios por convocatoria
    $(document).ready(function () {
      $('.usuarios_convocatoria').load('html/usuarios_por_convocatoria.php');
    });
  </script>

  <script>
  //usuarios por convocatoria
    $(document).ready(function () {
      $('.form_usuarios').load('html/Form_usuario2.php');
    });
  </script>
  

  
  <script>
  //Precio convocatoria
    $(document).ready(function () {
      $('.precio_convocatoria').load('html/insertar_conv_precio.php');
    });
  </script>

   <script>
  //total de administradores
    $(document).ready(function () {
      $('.tablaadmin').load('./tablas_admin.php');

    });
  </script>

  <script>
  $(document).ready(function () {
      $('.Barra_lateral').load('html/Barra_lateral.html');
    });

//elimar usuario
    $(document).ready(function () {
      $('.elimnar_usuario').load('html/eliminar_usuario.php');
    });    
    //cerrar sesion
    $(document).ready(function () {
      $('.cerrar_sesion').load('html/cerrar_sesion_admin.html');
    });  
  </script>

  <script>
    $(".sidebar-dropdown > a").click(function () {
        $(".sidebar-submenu").slideUp(200);
        if (
            $(this)
                .parent()
                .hasClass("active")
        ) {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .parent()
                .removeClass("active");
        } else {
            $(".sidebar-dropdown").removeClass("active");
            $(this)
                .next(".sidebar-submenu")
                .slideDown(200);
            $(this)
                .parent()
                .addClass("active");
        }
    });

    $("#close-sidebar").click(function () {
        $(".page-wrapper").removeClass("toggled");
    });
    $("#show-sidebar").click(function () {
        $(".page-wrapper").addClass("toggled");
    });
</script>     

    </body>
</html>

