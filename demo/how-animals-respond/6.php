<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-animals-respond';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("How Animals Respond"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
	body { overflow: hidden; }
	p { text-align: left; }
	.bg { background-image: url(images/6/bg.jpg); }

	#screen2, #screen3, #screen4 { display: none; position: relative; }
	#screen1 p, #screen2 p, #screen3 p, #screen4 p { padding-bottom: 15px; }
	#screen2 p:first-child, #screen3 p:first-child, #screen4 p:first-child { padding-top: 20px; }
	#screen2 p:last-child, #screen3 p:last-child, #screen4 p:last-child { padding-bottom: 0; }

	#screen1 {}
	#screen1 .images { overflow: hidden; margin-top: 15px; }
	#screen1 .cycle { float: left; margin-right: 28px; }
	#screen1 .cycle:last-child { margin-right: 0; }
	#screen1 p:last-child { padding-bottom: 0; }

	#screen2 { text-align: center; overflow: hidden; }
	#screen2 div { float: left; }
	#screen2 p { padding-top: 20px; }
	#screen2 img { display: inline-block; }
	#screen2 .a img { float: right; margin: 20px 0 0 30px; }
	#screen2 .b img { float: left; margin: -150px 30px 0 20px; }
	#screen2 .a p { float: left; width: 500px; }
	#screen2 .b p { float: right; margin-top: 10px; width: 430px; }

	#screen3 { text-align: center; }
	#screen3 img { display: inline-block; margin-top: 15px; }

	#screen4 p { font-size: 22px; }
	#screen4 .images { margin: 10px 0 20px 0; }
	#screen4 img { margin-left: -3px; }
	
	html[dir="rtl"] p { text-align: right; }

	<?php if ($language == 'es_ES') : ?>
		#screen4 p { font-size: 20px; }
	<?php endif; ?>
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
		#screen2, #screen3, #screen4 { padding-top: 25px; }
	}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		#screen4 p { font-size: 20px; padding-bottom: 10px; }
	}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		#screen1 .images { width: 100%; margin: 0 auto; }
		#screen1 .cycle { margin-top: 5px; width: 200px !important; height: 150px !important; }
		#screen1 .cycle img { width: 200px; }
		#screen2 .a p { width: 390px; }
		#screen2 .b p { width: 300px; }
		#screen2 .b img { margin: -90px 30px 0 20px; }
		
	}	
	#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("More big ideas... about how animals respond"); ?></h1>
				<p><?php echo _("The nervous system is sensitive to three different types of stimuli."); ?></p>
				<p><?php echo _("<span class='key'>Mechanical stimuli</span> include anything that causes a sensation of touch, pain, sound, or temperature."); ?></p>
				<p><?php echo _("<span class='key'>Chemical stimuli</span> are molecules in our environment that make us sense taste or smell."); ?></p>
				<p><?php echo _("The third type of stimuli our nervous system is sensitive to is called <span class='key'>electromagnetic stimuli</span>."); ?></p>
				<p><?php echo _("Our eyes are able to perceive part of the electromagnetic spectrum, that portion we call <span class='key'>visible light</span>."); ?></p>

				<div class="images">
					<div class="cycle">
						<img src="images/6/s1a1.jpg">
						<img src="images/6/s1b1.jpg">
						<img src="images/6/s1c1.jpg">
						<img src="images/6/s1d1.jpg">
					</div>

					<div class="cycle">
						<img src="images/6/s1a2.jpg">
						<img src="images/6/s1b2.jpg">
					</div>

					<div class="cycle">
						<img src="images/6/s1a3.jpg">
						<img src="images/6/s1b3.jpg">
					</div>
				</div>
			</div>

			<div class="screens" id="screen2">
				<div class="a"> 
					<p><?php echo _("Neurons sensitive to touch, pain, and temperature are located over most parts of our bodies, but some are concentrated in certain structures. A <span class='key'>receptor</span> is a nerve cell that is sensitive to chemical stimuli based on shape."); ?></p>
					<img src="images/6/s2a.jpg">
				</div>

				<div class="b">
					<img src="images/6/s2b.jpg">
					<p><?php echo _("Temperature receptors are concentrated in the head, while touch receptors are concentrated in the fingers. Few touch receptors are found in the back, while pain receptors are distributed fairly evenly throughout the body."); ?></p>
				</div>
			</div>

			<div class="screens" id="screen3">
				<p><?php echo _("Our ears are sensitive to disturbances in the air, water, or solid surfaces around us."); ?></p>
				<p><?php echo _("Sound is the result of vibrations set up in a substance that are transmitted from one point to another."); ?></p>
				<p><?php echo _("These vibrations are picked up by our eardrums and then transmitted through three very small bones and into the fluids of a structure called the cochlea."); ?></p>
				<p><?php echo _("Special touch receptors here transmit the pattern of vibration to the brain as an electrical signal."); ?></p>
				<p><?php echo _("The brain interprets the pattern as sound."); ?></p>
				<img src="images/6/s3a.jpg">
			</div>

			<div class="screens" id="screen4">
				<p><?php echo _("Smell and taste are both the result of chemical stimulation. The characteristics of molecules in nature are largely determined by their shapes."); ?></p>	
				<p><?php echo _("Humans perceive taste thanks to structures on our tongues called <span class='key'>taste buds</span>."); ?></p>
				<p><?php echo _("Between 2000 and 5000 taste buds are located on a typical person’s tongue. Each taste bud has 50 - 100 taste receptor cells."); ?></p>
				<p><?php echo _("A taste bud is stimulated when molecules fit correctly into open spaces on the receptor cells."); ?></p>
				<p><?php echo _("There are five different sorts of taste: sweet, sour, bitter, salty, and umami. Most people can associate sweet, sour, bitter, and salty with some familiar food. Umami, the least well-known, is a flavor associated with various meats and Asian foods."); ?></p>

				<div class="images">
					<img src="images/6/s3a.png">
					<img src="images/6/s3b.png">
					<img src="images/6/s3c.png">
					<img src="images/6/s3d.png">
					<img src="images/6/s3e.png">
				</div>

				<p><?php echo _("Smell receptors work in a similar manner but are concentrated in the nose and work for molecules suspended in the air."); ?></p>
				<p><?php echo _("Much of what we understand as flavor is actually a combination of taste and smell combined and interpreted by the brain together."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Mechanical and chemical stimuli"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>
	
	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/cycle.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var back = $('a.back'),
		next = $('a.next'),
		more = $('a.readmore'),

		screen1 = $('#screen1'),
		screen2 = $('#screen2'),
		screen3 = $('#screen3');
		screen4 = $('#screen4');
		
		$('.cycle').cycle({ fx: 'fade', timeout: 1000 });

		more.on('click', function() {
			if (screen1.is(':visible')) { 	
				screen1.fadeOut(function() { 
					screen2.fadeIn();  
					back.fadeIn(); 
					more.parent().attr('href', '#screen3'); 
				});
				removeHash();
				addHash('#screen2');
			} else if (screen2.is(':visible')) { 	
				screen2.fadeOut(function() { 
					screen3.fadeIn();  
					back.fadeIn(); 
					more.parent().attr('href', '#screen4'); 
				});
				removeHash();
				addHash('#screen3');
			} else if (screen3.is(':visible')) {
				screen3.fadeOut(function() {
					screen4.fadeIn(); 
					back.fadeIn();
					back.parent().attr('href','#screen3');
				});

				more.fadeOut(function() { next.fadeIn(); });
				removeHash();
				addHash('#screen4');
			} 
		});

		back.on('click', function() {
			if (screen1.is(':visible')) {
				document.location.href = "5.php";
			} else if (screen2.is(':visible')) {
				screen2.fadeOut(function() {
					more.fadeIn();
					screen1.fadeIn();
					back.fadeIn();
					more.parent().attr('href', '#screen2'); 
				});

				back.fadeOut();
				removeHash();
				addHash('#screen1');
			} else if (screen3.is(':visible')) {
				screen3.fadeOut(function() {
					more.fadeIn();
					screen2.fadeIn();
					back.fadeIn();
					more.parent().attr('href', '#screen3'); 
				});

				back.fadeOut();
				removeHash();
				addHash('#screen2');
			} else if (screen4.is(':visible')) {
				screen4.fadeOut(function() { screen3.fadeIn(); });		
				next.fadeOut(function() { more.fadeIn(); });
				removeHash();
				addHash('#screen3');
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#screen4") != -1 || oldURL.indexOf("7.php") != -1) {
			screen1.fadeOut();
			screen4.fadeIn();
			back.fadeIn();
			more.fadeOut();
			next.fadeIn();
			removeHash();
			addHash('#screen4');
		} else if (curURL.indexOf("#screen3") != -1) {
			screen1.fadeOut(function() { 
				screen3.fadeIn();
				back.fadeIn();
				more.parent().attr('href','#screen4');
			});

			removeHash();
			addHash('#screen3');
		} else if (curURL.indexOf("#screen2") != -1) {
			screen1.fadeOut(function() { 
				screen2.fadeIn();
				back.fadeIn();
				more.parent().attr('href','#screen3');
			});

			removeHash();
			addHash('#screen2');
		}
	</script>
</body>
</html>
