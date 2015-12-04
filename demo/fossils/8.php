<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'fossils';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Fossils'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/toucheffects.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
	h1 { color: #706f73; }
	p { font-size: 22px; }
	.wrap { border-color: #d5ccb8; }
	.bg { background-image: url(images/8/bg.jpg); }

	#screen1 .slider { width: 50%; margin: 20px auto; }
	#screen1 .slider img { margin-bottom: 10px; }
	#screen1 .slider .caption { color: #000; text-align: center; }

	#screen2 .clear { width: 98%; padding: 0; margin: 1% auto; }
	#screen2 .clear li { width: 31%; margin-right: 2%; float: left; }
	#screen2 .clear li:last-child { margin-right: 0; }
	#screen2 .clear li span { text-align: center; font-size: 20px; color: #347963; display: block; padding-top: 10px; }
	#screen2 .clear li img { display: block; width: 100%; }

	#screen2 p:first-child { padding-top: 15px; }

	#screen2 { display: none; }
	#buttons .next { display: none; }
	<?php if($language == "es_ES") { ?>
		#screen2 p { font-size: 21px; }
	<?php } ?>

	@media only screen and (max-width: 1250px) {
		.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		h1, #screen2 p:first-of-type { padding-top: 40px; }
		#screen1 .slider { width: 37%; }
		#screen2 .clear li span { padding-top: 5px; }
		p { line-height: 25px; }
	}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px)  {
		#screen2 p:first-of-type { padding-top: 20px; }
	}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about fossils"); ?></h1>
				<p><?php echo _("Another important topic related to fossils is fossil fuels. Millions of years ago, many plants and animals died and sank to the bottom of the ocean or fell and died in huge swamps. They didn't become fossils but just rotted and decomposed. After a long period of time, layers and layers of mud, sand and stone covered the decomposed plants and animals and heat and pressure went to work on them until they became deposits of fossil fuel in the sedimentary rock layers. Depending on what kinds of plants and animals were buried, and the conditions of temperature and pressure, different types of fossil fuel were formed – like petroleum (another name for oil), coal, and natural gas."); ?></p>
				<ul class="rslides slider">
					<li><img src="images/8/s1a.jpg"></li>
					<li><img src="images/8/s1b.jpg"></li>
					<li><img src="images/8/s1c.jpg"></li>
				</ul>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Petroleum, natural gas, and coal are three types of fossil fuels. They are all very valuable resources. Even though they are called fossil fuels, they are not really fossils. These fuels are just made from dead plants and animals that lived long ago."); ?></p>

				<ul class="clear">
					<li><img src="images/8/s2a.jpg"><span><?php echo _("Petroleum"); ?></span></li>
					<li><img src="images/8/s2b.jpg"><span><?php echo _("Natural Gas"); ?></span></li>
					<li><img src="images/8/s2c.jpg"><span><?php echo _("Coal"); ?></span></li>
				</ul>

				<p><?php echo _("The sun is the main source of energy for all fossil fuels. Plants and animals get energy from the sun and that energy becomes the energy in fossil fuels. Today, miners and oilmen use big drills and other heavy equipment to dig or drill into the earth's crust to find fossil fuels. Natural gas is usually found near oil deposits that were created under similar conditions. Oil, gas, and coal can be converted to electricity – another form of energy. Oil can be made into gasoline to run our cars. We use fossil fuels every day, but the process of forming them inside the earth takes a long time – millions of years. That means these resources are <span class='key'>non-renewable</span>; they cannot be replaced once they are used up."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Conducting pressure-meter test..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
	}
	
	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
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

	<script src="scripts/toucheffects.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
