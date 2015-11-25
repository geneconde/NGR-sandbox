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
	h1 { font-size: 28px; }
	p { text-align: left; }
	p.heading { margin: 10px 0; color: #c575b5; text-align: center; }
	.wrap { border-left: 1px dashed #f75fb3; border-right: 1px dashed #f75fb3; }
	.bg { background-image:url(images/12/bg.jpg); }

	#question { text-align: center; }
	#question img { display: inline-block; margin-top: 20px; width: 300px; height: 300px; }

	#answer { display: none; padding-top: 10px; text-align: center; }
	textarea { width: 60%; margin-top: 20px; display: inline-block; border: 0; border-radius: 10px; border: 4px solid #f689c6; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
	
	html[dir="rtl"] p { text-align: right; }
	html[dir="rtl"] p.heading { text-align: center; }
	<?php if($language == "es_ES") { ?>
			h1 { font-size:22px; }
		<?php } ?>
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
		#answer { padding-top: 35px; }
	}	
	#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Using what you know... about how animals respond... to solve a problem"); ?></h1>
				<p class="heading"><?php echo _("The Situation"); ?></p>
				<p><?php echo _("Sensory receptors are located all over our bodies. We know that our visual receptors are located in our eyes, hearing in our ears, and taste on our tongues. What about the sensation of touch? We sense touch through pressure sensors. The more pressure sensors that are in an area, the more sensitive that area is to touch. The relative number of pressure sensors in an area can be determined by how close two touches can come together and feel like one touch. The closer two touches can come together and feel like two touches, the more pressure sensors there are in that area."); ?></p>
				<img src="images/12/senses.jpg">
			</div>

			<div id="answer">
				<p class="heading"><?php echo _("The Task"); ?></p>
				<p><?php echo _("Design a study to map the concentration of pressure points at various locations on the body (e.g., different fingertips, palm, back of hand, different toes, bottom of foot, back of neck, etc.). Describe your study and report your data in a table that lists the areas studied from the most sensitive to touch to least sensitive to touch."); ?></p>				
				<textarea cols="60" rows="9" placeholder="<?php echo _("Please type your answer here..."); ?>" id="probanswer"></textarea>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Pressure sensors"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/answer.js"></script>
	
	<script>
		var back = $('a.back'),
		next = $('a.next'),
		check = $('a.checkanswer'),
		question = $('#question'),
		answer = $('#answer'),
		answered = 1;

		next.on('click', function() {
			if ($('textarea').val() == '') {
				alert('<?php echo _("Please type your answer."); ?>');
				return false;
			}
			var ans = $('#probanswer').val();
			if (answered == 0) {
				saveMeta('how-animals-respond', ans);
				answered = 1;
			}

			document.location.href = "13.php";
		});

		check.on('click', function() {
			question.fadeOut(function() { answer.fadeIn(); });
			check.fadeOut(function() { next.fadeIn(); });
			removeHash();
			addHash('#answer');
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "11.php";
			} else {
				answer.fadeOut(function() { question.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
				removeHash();
			}
		});
	</script>
</body>
</html>

