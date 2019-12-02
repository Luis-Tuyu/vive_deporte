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
		</div>}
		


		
		
<!-- Start Header Section -->
<div class="menuContainer">

</div>
<br><br><br>
<!-- End Header Section -->

<!-- start blog Section -->
<section id="blg_sec">
	<div class="container">
		<div class="row">
			<div class="title_sec">
				<h1>Convocatorias</h1>				
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-4 ">
				<div class="sngl_blg">						
					<div class="slider">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicadores de objetos -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>

					</ol>

					<!-- objetos mov. -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<div class="wrap_caption">
								<div class="caption_carousel">
									<img src="./img/10kA.jpg" with="300px" height="300px"/>
								</div>
							</div>
							
						</div>
						<div class="item">
							<div class="wrap_caption">
								<div class="caption_carousel">
									<img src="./img/5lupita.jpeg" with="300px" height="300px"/>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap_caption">
								<div class="caption_carousel">
									<img src="./img/carreracancun.png" with="300px" height="300px" />
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap_caption">
								<div class="caption_carousel">
									<img src="./img/Megamedia.jpg" with="300px" height="300px"/>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="wrap_caption">
								<div class="caption_carousel">
									<img src="./img/Triatlonisladetris.jpg" with="300px" height="300px"/>
								</div>
							</div>
						</div>
					</div>
					<!-- Controls -->
					<a class="left left_crousel_btn" href="#carousel-example-generic" role="button" data-slide="prev">
						<i class="fa fa-angle-left"></i>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right right_crousel_btn" href="#carousel-example-generic" role="button" data-slide="next">
						<i class="fa fa-angle-right"></i>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>					
				</div>	
	
			</div>				
			
			<div class="col-lg-5 col-md-5 col-sm-5">
				<div class="sidebar">									
						<?php
						echo '<div class="tablacarr"></div>'; 
						?>															
				</div>
			</div>	
		</div>
	</div>
</section>


<!-- start Blog Section -->

<!-- start located map Section -->
<section id="ltd_map_sec">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="map">						
			<h1>located THE MAP</h1><a href="#slidingDiv" class="show_hide" rel="#slidingDiv"><i class="fa fa-angle-up"></i></a>
			<div id="slidingDiv">

						<div class="map_area">
							<div id="googleMap" style="width:100%;height:300px;"></div>
						</div>

			</div>	
			</div>
		</div>
	</div>
</div>
</section>

<!-- End located map  Section -->
<!-- start footer Section -->
<footer id="ft_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ft">
					<ul>
						<li><a href="https://es-la.facebook.com/"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://xvideos.com"><i class="fa fa-twitter"></i></a></li>

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
		$('.tablacarr').load('./tablas_todas_carreras.php');
	});
</script>

 <script>
        //importar formulario de inscripciones de participantes
        $(document).ready(function () {
            $('.inscripciones').load('html/Inscripcciones.html');
        });
    </script>

    </body>
</html>
