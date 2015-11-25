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
	<link rel="stylesheet" href="styles/js-image-slider.css" />
	<link rel="stylesheet" href="styles/global.css" />

	<style>
		h1 { color: #0a8fc0; }
		p { text-align: left; }
		.bg { background-image: url(images/4/bg.jpg); }

		#screen2, #screen3, #screen4 { display: none; position: relative; }

		#screen1 .images { margin-top: 20px; }
		#screen1 img { margin-right: 15px; }
		#screen1 img:last-child { margin-right: 0; }

		#screen2 { padding-top: 20px; }
		#screen2 p { font-size: 22px; }
		#screen2 div { overflow: hidden; }
		#screen2 div p { float: left; width: 600px; }
		#screen2 div img { float: right; }
		#screen2 div:last-child { margin-top: 30px; }
		#screen2 div:last-child p { float: right; width: 650px; }
		#screen2 div:last-child img { float: left; }

		#screen3 { padding-top: 20px; }
		#screen3 > p { clear: both; }
		#screen3 > div { overflow: hidden; }
		#screen3 div p { float: left; width: 490px; padding-top: 40px; }
		#screen3 div img { float: right; margin-right: 20px; }
		#screen3 > div:last-child { margin-top: 20px; }
		#screen3 div:last-child p { float: right; width: 530px; }
		#screen3 div:last-child img { margin-left: 20px; float: left; }

		#sliderFrame { float: right; margin-right: 30px; overflow: visible; margin-top: 30px; }
		#sliderFrame img { margin-top: 0; }
		#slider, .sliderInner { border-radius: 10px; }
		.mc-caption-bg { background: #d7b55b !important; opacity: 1 !important; color: #fff !important; }

		#tv { text-align: center; height: 220px; display: none; }
	
		html[dir="rtl"] p { text-align: right; }
		<?php if($language == "es_ES") { ?>
			h1 { font-size:31px; }
		<?php } ?>
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
			#screen2, #screen3 { padding-top: 35px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#screen2 p { font-size: 24px; }
			#screen2 div p { width: 490px; }
			#screen2 div:last-child p { width: 505px; }
			#screen3 div p { width: 370px; }
			#screen3 div:last-child p { width: 390px; }
		}	
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="screens" id="screen1">
				<h1><?php echo _("Reviewing big ideas... about how animals respond"); ?></h1>
				<p><?php echo _("Your body has a network that works like the network for cell phones. Messages are sent and received - from phone to phone, and to and from the body and the brain. A group of sensitive cells somewhere in your body is stimulated by something from the outside world. These nerve cells respond by generating a tiny electrical signal which is sent through a series of very long nerve fibers to the brain. Once in the brain, the signal is retransmitted and interpreted by the brain's many regions. The sensation may be related to sight, sound, smell, taste, or touch."); ?></p>
				<div class="images">
					<img src="images/4/s1a.png">
					<img src="images/4/s1b.png">
				</div>
			</div>

			<div class="screens" id="screen2">
				<div>
				<p><?php echo _("A <span class='key'>stimulus</span> is any physical or chemical change that stimulates the nervous system. After the brain makes sense of the stimulus, it responds. A <span class='key'>response</span> is an organism's reaction to a stimulus. The brain responds by creating a memory and often sending a response signal out to the body. The response works similar to the stimulus, only in reverse. An electrical signal goes out through nerve fibers to muscles where it sends a chemical message causing muscle cells to contract."); ?></p>
					<img src="images/4/s2a.gif">
				</div>
				<div>
					<img src="images/4/s2b.jpg">
					<p><?php echo _("The cells that make up the nervous system are called <span class='key'>neurons</span>. They are organized into networks known as the central and peripheral nervous systems. The <span class='key'>central nervous system</span> is the brain and spinal cord. The <span class='key'>peripheral nervous system</span> is all of the many nerve cells throughout the body that connect to the spinal cord. The central nervous system is responsible for interpreting and responding to stimuli. The peripheral nervous system is responsible for sensing our environment and stimulating muscles to act when called upon."); ?></p>
				</div>
			</div>

			<div class="screens" id="screen3">
				<p><?php echo _("The cells of the peripheral nervous system are also divided into two groups."); ?></p>
				<div>
					<p><?php echo _("Those cells that interact with the environment to sense taste, touch, smell, vision, and sound are called <span class='key'>sensory neurons</span>."); ?></p>
					<div id="sliderFrame">
						<div id="slider">
							<img src="images/4/sight.jpg">
							<img src="images/4/smell.jpg">
							<img src="images/4/touch.jpg">
							<img src="images/4/taste.jpg">
							<img src="images/4/hear.jpg">
						</div>
					</div>
				</div>
				<div>
					<img src="images/4/dumbell.gif">
					<p><?php echo _("The neurons that take information from the brain and stimulate responses throughout the body are called <span class='key'>motor neurons</span>."); ?></p>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Adjusting microscope lenses.."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>
	
	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/cycle.js"></script>
	<script src="scripts/js-image-slider.js"></script>
	<script src="scripts/global.js"></script>
	
	<script>
		var back = $('a.back'),
		next = $('a.next'),
		more = $('a.readmore'),

		screen1 = $('#screen1'),
		screen2 = $('#screen2'),
		screen3 = $('#screen3'),

		tv = $('#tv');

		more.on('click', function() {
			if (screen1.is(':visible')) { 	
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
					more.fadeOut(function() { next.fadeIn(); });
				});
				removeHash();
				addHash('#screen3');
			}
		});

		back.on('click', function() {
			if (screen1.is(':visible')) {
				document.location.href = "3.php#answer";
			} else if (screen2.is(':visible')) {
				tv.fadeOut();

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
				screen3.fadeOut(function() { tv.fadeIn(); screen2.fadeIn(); });		
				next.fadeOut(function() { more.fadeIn(); });
				removeHash();
				addHash('#screen2');
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = "";

		if (curURL.indexOf("#screen3") != -1 || oldURL.indexOf("5.php") != -1) {
			screen1.fadeOut();
			screen3.fadeIn();
			back.fadeIn();
			more.fadeOut();
			next.fadeIn();
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
