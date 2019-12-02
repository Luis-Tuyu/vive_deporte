<?php
include_once("./php/conexion.php");
?>
<!DOCTYPE html>
<html lang="en">
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
<body>
    <div class="menuContainer"></div>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
    <div class="container home">    
    <h2 class="title_sec">Inscritos por carrera</h2>      
    <table id="tabla_por carrera" class="table table-striped">
        <thead>
            <tr>      
                <th class="ayudas">Nombre convocatoria</th>          
                <th class="ayudas">Numero de participante</th>
                <th class="ayudas">Nombre    </th>
                <th class="ayudas">Correo   </th>   
                <th class="ayudas">Celular  </th>
            </tr>
        </thead>
        <tbody>
            <?php    
            
            if(isset($_POST["us_by_conv"]))
                {                
                $us_conv=$_POST["us_by_conv"];                
                }
                $sql_query="SELECT num_participante,nombre_us,ins.correo_us,cel_us, nombre_conv 
                FROM convocatorias c, inscripciones ins, usuarios us 
                WHERE ins.id_conv = c.id_conv && ins.correo_us = us.correo_us && c.nombre_conv LIKE '$us_conv'
                ORDER BY num_participante";                
                $resultset = mysqli_query($conn, $sql_query) or die("error base de datos:". mysqli_error($conn));
                while( $inscripciones = mysqli_fetch_assoc($resultset) ) {
            ?>
                    <tr id="<?php echo $inscripciones ['correo_us   ']; ?>">
                    <td><?php echo $inscripciones ['nombre_conv']; ?></td>
                    <td><?php echo $inscripciones ['num_participante']; ?></td>
                    <td><?php echo $inscripciones ['nombre_us']; ?></td>   
                    <td><?php echo $inscripciones ['correo_us']; ?></td>                   
                    <td><?php echo $inscripciones ['cel_us']; ?></td>                                          
                    </tr>
                    <?php
                    } 
                    echo '<div class="regresar"></div>';
            ?>
            
        </tbody>
    </table>    
</div>

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
		$('.menuContainer').load('../VD3.0/html/Menu_barra.html');
	});
</script>
<script>
  $(document).ready(function () {
      $('.Barra_lateral').load('html/Barra_lateral.html');
    });
  </script>
</body>


<script>
  //regresar
    $(document).ready(function () {
      $('.regresar').load('html/regresar.php');
    });
  </script>
</html>



