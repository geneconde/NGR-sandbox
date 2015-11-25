<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<style>
.bg h1 { color: #7E325A; }
.wrap { border-color: #898993; }
.bg { background-image: url(images/10/bg.jpg); }

#screen1 ul { width: 55%; margin: 0; float: right; }
#screen1 p:last-of-type { width: 40%; float: left; }

#screen2 .clear p { float: left; padding-top: 5px !important; width: 530px; }

#screen2 .slider { width: 300px; margin: 15px 0; float: right }
#screen2 .slider img { margin-bottom: 10px; }
#screen2 .slider p { font-size: 20px; width: 100%; float: none; text-align: center; color: #285381; }

#screen2 { display: none; }
#screen2 p:first-child { padding-top: 15px; }
#buttons .next { display: none; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .clear p { width: 420px; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about staying alive"); ?></h1>
				<p><?php echo _("<span class='key'>Biodiversity</span> matters. It is a measure of the stability of any ecosystem. It preserves millions of years of evolution of plants, animals, and the unseen biochemistry of cells. Biodiversity is the sum of all the living things in all ecosystems on the planet. It's everything alive that has managed to survive through all of the millions of years of earth's history. A more useful way to think of biodiversity is to consider every living thing you have ever seen; and every living thing you haven't seen yet."); ?></p>
				<p><?php echo _("Many people might ask, “Just how important can any one species or ecosystem be to everyone else?” The difficult answer is that we don't know. Until we fully understand a particular ecosystem, we can't make any judgments about the importance of its parts. And, since evolution never stops or even slows down, it's unlikely that we will ever completely understand any system."); ?></p>
				<ul class="rslides slider">
					<li> <img src="images/10/s1a.png"> </li>
					<li> <img src="images/10/s1b.png"> </li>
					<li> <img src="images/10/s1c.png"> </li>
				</ul>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Biodiversity matters because we are completely connected to nature. Everyone needs food and water. Everyone is at risk for illness. The solutions for these needs come from the world around us. The aspirin we use is a product of willow tree bark. The antibiotics we use were discovered on the surface of moldy fruit. Many compounds used to cure different human conditions are products of plants, molds, and bacteria. All of our modern foods have deep roots in wild plants. The latest efforts in breeding new varieties of food crops depend a great deal on research into wild varieties of these same plants."); ?></p>

				<div class="clear">
					<p><?php echo _("It's difficult to know just how important any one type of plant or animal is to its ecosystem. All species interact with many others, sometimes in ways that are not obvious. Every time a plant or animal goes extinct, the world loses not only that species, but its entire body chemistry and its evolutionary history. As humans, the important lesson is to remember that we don't know what we don't know. Decisions must be made carefully, considering all available information, and must be reconsidered when more information becomes available."); ?></p>

					<ul class="rslides slider col2">
						<li> <img src="images/10/s2a.jpg"> <p><?php echo _("White willow bark herb used in Chinese herbal medicine"); ?></p></li>
						<li> <img src="images/10/s2b.jpg"> <p><?php echo _("Green Penicillium mold on an orange tangelo"); ?></p></li>
					</ul>
				</div>
			</div>

		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Measuring stability of ecosystem..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
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

	<?php include 'setlocale.php'; ?>
</body>
</html>
