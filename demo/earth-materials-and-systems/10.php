<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<style>
h1 { color: #7F7FFF; }
.wrap { border-color: #D9CB9A; }
.bg { background-image: url(images/10/bg.jpg); }

#screen1 ul { margin: 0 auto; }

#screen2 p { float: left; }
#screen2 .col1 { width: 50%; float: left; }
#screen2 .col2 { width: 47%; float: right; margin: 2% 0;}
#screen2 { display: none; }
#screen2 p:first-child { padding-top: 15px; }
#buttons .next { display: none; }
.slider { width: 600px; height: 397px; border-radius: 5px; }
.slider img { -moz-border-radius: 0; }
.rslides img { width: auto; height: auto; }
@media screen and (-webkit-min-device-pixel-ratio:0) { .slider img { width: 600px; height: 397px; } }

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about earth materials and systems"); ?></h1>	
				<p><?php echo _("Different areas of the world get different amounts of rain. The amount of rain a region gets is dependent on its geography – for instance, if it is close to the ocean or whether it has mountains or not and how high the mountains are."); ?></p>
				<ul class="rslides slider">
					<li> <img src="images/10/a.jpg"> </li>
					<li> <img src="images/10/b.jpg"> </li>
					<li> <img src="images/10/c.jpg"> </li>
					<li> <img src="images/10/d.jpg"> </li>
					<li> <img src="images/10/e.jpg"> </li>
					<li> <img src="images/10/f.jpg"> </li>
					<li> <img src="images/10/g.jpg"> </li>
				</ul>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("In the diagram to the right you can see moisture from the ocean (in the form of clouds) can't get over the high mountains."); ?></p>
				<p class="col1"><?php echo _("So the rain falls on the west side of the mountains, making that side very wet with lots of vegetation. But the rain clouds can't get to the east side of the mountains, so that side is very dry and sometimes even forms a desert. This affects what kinds of plants and animals can live in each environment because of the amount of water and types of food and homes for the animals that are available."); ?></p>
				
				<img class="col2" src="images/10/diagram.jpg" />
				<p><?php echo _("This is a great example of how our earth is connected. All the systems (geosphere, atmosphere, hydrosphere, and biosphere) are all interconnected and affect each other. The solid earth rock material from the geosphere forms mountains that block the rain clouds in the atmosphere from raining on the west side of the mountains. This causes the hydrosphere on the east side to be very dry and the west side to be very wet. This, in turn, affects the biosphere on each side of the mountain to be very different. Think about the different trees and animals that live on each side of the mountain."); ?></p>
			</div>

		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("Climbing a mountain..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 2500
	});
	</script>
	
	<script>
	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
	}
	
	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "9.php";
		} else if ($('#screen2').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	$('.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
