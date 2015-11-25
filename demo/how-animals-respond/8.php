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
		p { text-align: left; }
		.bg { background-image: url(images/8/bg.jpg); }

		#screen2, #screen3, #screen4 { display: none; position: relative; }

		#screen1 p, #screen2 p, #screen3 p, #screen4 p { padding-bottom: 20px; }

		#screen1, #screen2, #screen3, #screen4 { text-align: center; }
		#screen1 img, #screen2 img, #screen3 img, #screen4 img { margin-top: 20px; display: inline-block; border: 1px solid #ccc; }

		#screen1 { text-align: center; }
		
		#spectrum { margin-top: 20px; position: relative; display: inline-block; border-radius: 10px; background: url(images/8/spectrum.png) no-repeat; width: 504px; height: 236px; }
		#spectrum span { position: absolute; font-size: 16px; }
		#spectrum p { position: absolute; left: 42%; top: 54%; font-size: 18px; }
		#spectrum span:first-child { left: 2%; top: 15%; }
		#spectrum span:nth-child(2) { left: 22%; top: 15%; }
		#spectrum span:nth-child(3) { left: 37%; top: 15%; }
		#spectrum span:nth-child(4) { left: 54%; top: 15%; }
		#spectrum span:nth-child(5) { left: 70%; top: 15%; }
		#spectrum span:nth-child(6) { left: 82%; top: 15%; }

		#screen2 { text-align: center; }
		#screen2 img { border: 0; margin: 0; }
		#screen2 img:hover { cursor: pointer; }

		#eye { display: inline-block; position: relative; background: url(images/8/eye.png) no-repeat; width: 447px; height: 347px; margin-bottom: 5px; }
		#retina { position: absolute; top: 6%; left: 17%; width: 370px; height: 305px; }
		#pupil { position: absolute; top: 24%; left: 3%; width: 58px; height: 180px; }
		#lens { position: absolute; top: 34%; left: 12%; width: 42px; height: 110px; }
		#iristop { position: absolute; top: 23.5%; left: 10.5%; width: 24px; height: 72px; }
		#irisbottom { position: absolute; top: 55.5%; left: 10.5%; width: 24px; height: 72px; }

		#screen4 { overflow: hidden; }
		#screen4 div { overflow: hidden; }
		#screen4 div img {}
		#screen4 div:first-child p { float: left; width: 490px; margin-top: 40px; }
		#screen4 div:last-child p { float: right; width: 470px; margin: 40px 0 0 20px; }

		#screen2 p:first-child, #screen3 p:first-child, #screen4 p:first-child { padding-top: 20px; }
		#screen2 p:last-child, #screen3 p:last-child, #screen4 p:last-child { padding-bottom: 0; }
	
		html[dir="rtl"] p { text-align: right; }
		<?php if($language == "es_ES") { ?>
			#spectrum span { width: 64px; }
			#spectrum span:nth-child(3) { left: 36%; }
			#spectrum span:nth-child(4) { left: 53%; }
			#spectrum span:nth-child(5) { left: 68%; }
			#screen1 p { padding-bottom: 10px; }
			#screen2 p { font-size:22px; }
		<?php } ?>
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
			#screen2, #screen3, #screen4 { padding-top: 35px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#screen2 p:first-child { padding: 0 0 10px 0; }
			#screen2 p { font-size: 20px; }
			#screen3 p:first-child { padding-top: 10px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#screen4 div:first-child p { width: 380px; }
			#screen4 div:last-child p { width: 360px }
		}	
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="screen1">
				<h1><?php echo _("More big ideas... about how animals respond"); ?></h1>

				<p><?php echo _("In the movies, Superman had X-ray vision... Crazy? Maybe not as much as it sounds..."); ?></p>
				<p><?php echo _("X-rays are a part of the electromagnetic spectrum, a wide range of energy that is emitted by stars, and by many everyday things we take for granted. Cell phones communicate using radio, a form of electromagnetic radiation. "); ?></p>
				<p><?php echo _("Television uses another form. We heat our foods using microwaves - yet another type of electromagnetic radiation. In fact, you are using this radiation right now as you read this screen. The colors of our visible spectrum are also a part of the electromagnetic spectrum."); ?></p>

				<div id="spectrum">
					<span><?php echo _("Radio waves"); ?></span>
					<span><?php echo _("Microwave"); ?></span>
					<span><?php echo _("Infrared"); ?></span>
					<span><?php echo _("Ultraviolet"); ?></span>
					<span><?php echo _("X-Rays"); ?></span>
					<span><?php echo _("Gamma Rays"); ?></span>
					<p><?php echo _("Visible Light"); ?></p>
				</div>
			</div>

			<div id="screen2">
				<p><?php echo _("Our eyes contain four types of light-sensitive sensory neurons. Located in the <span class='key'>retina</span> (inner surface at the rear of the eye), they respond to different types of light. <span class='key'>Rods</span> are neurons that sense brightness. Intense light is perceived as white and dim light as shades of gray ending in black."); ?></p>

				<p><?php echo _("Hover your mouse on the image to view the different parts of the eye."); ?></p>

				<div id="eye">
					<img src="images/8/retina.png" id="retina" alt="<?php echo _("Retina"); ?>">
					<img src="images/8/pupil.png" id="pupil" alt="<?php echo _("Pupil"); ?>">
					<img src="images/8/lens.png" id="lens" alt="<?php echo _("Lens"); ?>">
					<img src="images/8/iristop.png" id="iristop" alt="<?php echo _("Iris"); ?>">
					<img src="images/8/irisbottom.png" id="irisbottom" alt="<?php echo _("Iris"); ?>">
				</div>

				<p><?php echo _("There are three types of cells called <span class='key'>cones</span>. Each is sensitive to one of three colors: blue, red, and green. The color image we see in our minds is the product of an amazingly complex set of information about the intensities of all different kinds of light entering our eyes."); ?></p>
			</div>

			<div id="screen3">
				<p><?php echo _("Light enters the eye through the pupil. When light is very intense, the iris responds by expanding, narrowing the pupil opening. This allows less light to enter the eye, protecting its sensitive sensory neurons."); ?></p>
				<p><?php echo _("The lens focuses a light image on the retina, where rods and cones are located. Because light passing through a lens is inverted, the image on our retinas appears to be upside down and backwards."); ?></p>
				<p><?php echo _("Our brains are able to take this information, along with all of the color information, and create an image that makes sense with our surroundings."); ?></p>
				<img src="images/8/retina.gif" width="500">					
			</div>

			<div id="screen4">
				<div>
					<p><?php echo _("The ability to see a clear image depends on having the proper distance between the lens and retina. This distance is called the focal length. A person whose eye diameter isn't quite as long as normal sees a fuzzy image because the focal length is too long. He is said to be farsighted."); ?></p>
					<img src="images/8/farsight.png" width="340">
				</div>
				<div>
					<p><?php echo _("A person whose eye diameter is longer than normal sees a fuzzy image because the focal length is too short. She is said to be nearsighted. Both of these conditions are treated with glasses or lenses outside the body, which correct the focal lengths to form images properly on the retina."); ?></p>
					<img src="images/8/nearsight.png" width="340">					
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Loading x-ray vision..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>
	
	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/cycle.js"></script>
	<script src="scripts/qtip.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var back = $('a.back'),
		next = $('a.next'),
		more = $('a.readmore'),

		screen1 = $('#screen1'),
		screen2 = $('#screen2'),
		screen3 = $('#screen3'),
		screen4 = $('#screen4'),

		boys = $('#boys'),
		tv = $('#tv');

		more.on('click', function() {
			if (screen1.is(':visible')) { 	
				boys.fadeOut();

				screen1.fadeOut(function() { 
					screen2.fadeIn();  
					tv.fadeIn();
					back.fadeIn(); 
					more.parent().attr('href', '#screen3'); 
				});
				removeHash();
				addHash('#screen2');
			} else if (screen2.is(':visible')) {
				tv.fadeOut();

				screen2.fadeOut(function() {
					screen3.fadeIn(); 
					back.fadeIn();
					back.parent().attr('href','#screen2');
					more.parent().attr('href','#screen4');
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
				document.location.href = "7.php";
			} else if (screen2.is(':visible')) {
				tv.fadeOut();

				screen2.fadeOut(function() {
					more.fadeIn();
					boys.fadeIn();
					screen1.fadeIn();
					back.fadeIn();
					more.parent().attr('href', '#screen2'); 
				});

				back.fadeOut();
				removeHash();
				addHash('#screen1');
			} else if (screen3.is(':visible')) {
				screen3.fadeOut(function() { tv.fadeIn(); screen2.fadeIn(); });		
				next.fadeOut(function() { more.fadeIn(); });
				removeHash();
				addHash('#screen2');
				//return false;
			} else if (screen4.is(':visible')) {
				screen4.fadeOut(function() { screen3.fadeIn(); });		
				next.fadeOut(function() { more.fadeIn(); });
				removeHash();
				addHash('#screen3');
				//return false;
			}
		});

		$('#eye img').qtip({
			content: $(this).attr('alt'),
			position: {
				corner: {
					tooltip: 'bottomMiddle',
					target: 'topMiddle'
				}
			},
			style: {
				border: { radius: 5 },
				fontSize: 24,
				tip: true,
				name: 'cream'
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#screen4") != -1 || oldURL.indexOf("9.php") != -1) {
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
