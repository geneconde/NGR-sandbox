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
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #7F7FFF; }
.wrap { border-color: #FED043; }
.bg { background-image: url(images/4/bg.jpg); }

.slide { margin-top: 10px;}
.data img, .data p { width: 360px; font-size: 20px; margin: 0 10px; }
.data .col1 { margin-left: 40px; float: left; }
.data .col2 { margin-right: 40px; float: right; }
#left, #right { width: 30px; position: absolute; margin-top: 50px; }
#left { left: 20px; }
#right { right: 20px; }
#left:hover, #right:hover { cursor: pointer; }
p { font-size:22px; padding:0; }

<?php if ($language == 'es_ES'): ?>
	.data img, .data p { font-size: 18px; }
<?php endif; ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.data .col1,.data .col2 {width: 43%;}  
	.data img, .data p {width: 95%;}
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("Reviewing big ideas... about earth materials and systems"); ?></h1>
				<p><?php echo _("When you looked at the picture of the earth earlier, you probably noticed that there are basically four main colors that make up the earth as we see it from space. Those colors are blue, white, green, and brown, and they represent the four major systems that make up the earth because of the different earth materials each system is made of. <span class='key'>Earth materials</span> are the matter or \"stuff\" that make up the earth."); ?></p>
				<p><?php echo _("Browse through the slides below by clicking the left and right arrows."); ?></p>
				<div class="slide">
					<div class="arrows">
						<img src="images/4/left.png" width="70" height="45" id="left">
						<img src="images/4/right.png" width="70" height="45" id="right">
					</div>

					<div id="s1" class="data">
						<div class="col1">
							<img src="images/4/atmosphere.jpg">
							<p><?php echo _("The <span class='key'>atmosphere</span>, which is composed of the gaseous <span class='key'>earth materials</span> that make up the earth's surface, is invisible. The white color you can see is the clouds in the atmosphere - which are made from tiny water droplets – so they are really part of the hydrosphere floating in the atmosphere. The rest of the atmosphere is mostly invisible and is made from mostly nitrogen, oxygen, carbon dioxide, water vapor, and a lot of other gasses in very small quantities. It's also known as the air you breathe."); ?></p>
						</div>
						<div class="col2">
							<img src="images/4/hydrosphere.jpg">
							<p><?php echo _("The blue color you see looking at the earth from space is mostly the ocean water or the <span class='key'>hydrosphere</span>. But the hydrosphere is also composed of all the fresh water in lakes, rivers and streams; the groundwater under the ground; the ice and snow in glaciers and polar ice caps; and the water in clouds. The hydrosphere is the earth's system composed of all the water on earth."); ?></p>
						</div>
					</div>

					<div id="s2" class="data">
						<div class="col1">
							<img src="images/4/biosphere.jpg">
							<p><?php echo _("The <span class='key'>biosphere</span> is all of the living things on earth. From space, the biosphere looks mostly green because of all the trees and plants. But the biosphere includes all living things from bacteria to elephants to giant sequoia trees and US! Some scientists call the part of the environment that includes humans and their impact the <span class='key'>anthrosphere</span>."); ?></p>
						</div>
						<div class="col2">
							<img src="images/4/geosphere.jpg">
							<p><?php echo _("The <span class='key'>geosphere</span> (also called the <span class='key'>lithosphere</span>) is all of the solid earth materials like rocks and soil that make up the land we live on. Much of the lithosphere looks brown when the earth is viewed from above."); ?></p>
						</div>
					</div>
				</div>
	
			</div>

		</div>
	</div>

	<div id="buttons">
		<a href="3.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Blue, white, green, and brown..."); ?></strong></section></section>

	<script>
	var	left = $('#left'),
		right = $('#right'),
		slides = $('.data'),
		currentSlide = 1;

		slides.hide();

	
	$('#s' + currentSlide).show();

	right.on('click', function() {
		$('#s' + currentSlide).fadeOut();

		if (currentSlide != 2) currentSlide += 1;
		else currentSlide = 1; 

		$('#s' + currentSlide).delay(500).fadeIn();
	});

	left.on('click', function() {
		$('#s' + currentSlide).fadeOut();

		if (currentSlide != 1) currentSlide -= 1;
		else currentSlide = 2;

		$('#s' + currentSlide).delay(500).fadeIn();
	});

	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
