<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #05799d; }
.wrap { border-left: 1px dashed #ffca73; border-right: 1px dashed #ffca73; }
.bg { background: url('images/4/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.placeholder { width: 364px; height: 276px; border-radius: 5px; position: relative; margin: 20px 0 0 236px; padding: 10px; background: #58c7f4; }
.placeholder img { width: 100%; margin-bottom: 10px; }
.placeholder .caption { text-align: center; font-size: 20px !important; }
.placeholder .next { transition: .2s ease-in all; position: absolute; right: -17px; width: 36px; height: 37px; display: block; text-indent: -9999px; background: url(images/4/arrows.png) no-repeat right top; top: 110px; }
.placeholder .prev { transition: .2s ease-in all; position: absolute; left: -17px; width: 36px; height: 37px; display: block; text-indent: -9999px; background: url(images/4/arrows.png) no-repeat left top; top: 110px; }
.placeholder .prev:hover { transition: .2s ease-out all; left: -25px; }
.placeholder .next:hover { transition: .2s ease-out all; right: -25px; }
#screen1 .placeholder { margin: 20px 0 0 236px; }
#screen2 p { font-size: 22px; }
#screen2, #screen3 { display: none; }
#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }
#buttons .next { display:none; }

html[dir="rtl"] .placeholder { margin:0 auto !important; }
html[dir="rtl"] .placeholder .caption { font-size: 18px !important; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("Reviewing big ideas... about biodiversity"); ?></h1>
				<p><?php echo _("<span class=\"key\">Biomes</span> are the unique plant/animal communities determined by local <span class=\"key\">climate</span> conditions. <span class=\"key\">Rainforests</span>, <span class=\"key\">grasslands</span>, and <span class=\"key\">deserts</span> are all examples of biomes. Every location on Earth has a unique pattern of yearly temperature and rainfall. Some places are warm all year. Some have hot and cold seasons. Some places are always dry, while others have rainfall nearly every day. The particular patterns of temperature and rainfall averages over the course of each year determine which plants and animals can live in a place."); ?></p>
				<div class="placeholder">
					<ul class="rslides slider">
						<li>
							<img src="images/4/s1a.jpg">
							<p class="caption"><?php echo _("Rainforest"); ?></p>
						</li>
						<li>
							<img src="images/4/s1b.jpg">
							<p class="caption"><?php echo _("Rainforest"); ?></p>
						</li>
						<li>
							<img src="images/4/s1c.jpg">
							<p class="caption"><?php echo _("Grassland"); ?></p>
						</li>
						<li>
							<img src="images/4/s1c2.jpg">
							<p class="caption"><?php echo _("Grassland"); ?></p>
						</li>
						<li>
							<img src="images/4/s1d.jpg">
							<p class="caption"><?php echo _("Desert"); ?></p>
						</li>
						<li>
							<img src="images/4/s1e.jpg">
							<p class="caption"><?php echo _("Desert"); ?></p>
						</li>
					</ul>
				</div>					
			</div>
			<div id="screen2" class="screens">
				<p><?php echo _('A tropical rainforest is a place where it is always warm and rain falls nearly every day.  A desert may be warm or cold, but has very little rainfall. Regions that have warm summers and cold winters are said to be <span class="key">temperate</span>. Grasslands may be tropical or temperate, but always have less rain than rainforests and more rain than deserts. For every possible combination of rain and temperature, a plant community exists. These are biomes.'); ?></p>
				<p><?php echo _("Every biome has special features and combinations of living things that occur nowhere else. A single tree in a tropical rainforest may be home to hundreds of insect <span class=\"key\">species</span>. When biologists capture and identify all of the insects found on one tree, it's common to find new species, never before seen."); ?></p>
				<div class="placeholder">
					<ul class="rslides slider">
						<li>
							<img src="images/4/s2a.jpg">
							<p class="caption"><?php echo _("Tropical rainforest"); ?></p>
						</li>
						<li>
							<img src="images/4/s2b.jpg">
							<p class="caption"><?php echo _("Tropical rainforest river"); ?></p>
						</li>
						<li>
							<img src="images/4/s2c.jpg">
							<p class="caption"><?php echo _("Cactus in cold desert"); ?></p>
						</li>
						<li>
							<img src="images/4/s2d.jpg">
							<p class="caption"><?php echo _("Snow covered desert"); ?></p>
						</li>
					</ul>
				</div>					
			</div>
			<div id="screen3" class="screens">
				<p><?php echo _("The <span class=\"key\">tundra</span> biome most often occurs in the very far north, where temperatures are very cold, and most water shows up as snow. When the snow melts in summer, grasses and many flowers emerge, followed by a hardy set of animals. Tundra also shows up near the tops of tall mountains where the living conditions are so harsh large plants can't survive."); ?></p>
				<p><?php echo _("A biome that features many large needled trees goes by two names: <span class=\"key\">taiga</span> and <span class=\"key\">boreal forest</span>. It features many large needled trees. This community also supports very large mammals like moose, elk, and bears. Some of the oldest, largest trees in the world are found in this biome."); ?></p>
				<div class="placeholder">
					<ul class="rslides slider">
						<li>
							<img src="images/4/s3a.jpg">
							<p class="caption"><?php echo _("Tundra Biome"); ?></p>
						</li>
						<li>
							<img src="images/4/s3b.jpg">
							<p class="caption"><?php echo _("Tundra on top of mountains"); ?></p>
						</li>
						<li>
							<img src="images/4/s3c.jpg">
							<p class="caption"><?php echo _("Taiga / Boreal Forest"); ?></p>
						</li>
						<li>
							<img src="images/4/s3d.jpg">
							<p class="caption"><?php echo _("Taiga / Boreal forest during winter"); ?></p>
						</li>
					</ul>
				</div>					
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Looking for a unique pattern..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1); // gets the hash when refreshed
	var screenCount = 3; // set number of screens here
	$(document).ready(function() {
		if(hash != "") { // if there is a set hash
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1]; // gets the screen number
				if(screen < screenCount) {
					$('.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); }); // if last screen, removes read more and shows next
				}
			});
		}
		
		/* Back Transition - change to the corresponding number of screens */
		$('.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href = "3.php#answer";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function (){
					$('#screen1').fadeIn();
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
				$('#screen3').fadeOut(function (){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			}
		});

		/* Read More Screen Transition */
		$('.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				$('#screen1').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {
				$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
				$('#screen2').fadeOut( function(){
					$('#screen3').fadeIn();
					window.location.hash = '#screen3';
				});
			}
		});
	});
	</script>
	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 400
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
