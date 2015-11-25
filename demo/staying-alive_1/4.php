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
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg h1 { color: #E25C8E; }
.wrap { border-color: #73E8E2; }
.bg { background-image: url(images/4/bg.jpg); }

#screen1 > img:first-of-type{ width: 33%; float: right; margin-top: 20px; margin-left: 10px; }
#screen1 p { float: left; }
#screen1 p:first-of-type { width: 65%; float: left; }
#screen1 span { font-size: 24px; }
#screen2 div { float: right; margin: 15px 22px; }

.slider { width: 280px; height: 212px; border-radius: 5px; margin-top: 20px; }
.slider img { width: 300px; height: 258px; -moz-border-radius: 0; border-radius: 0; }

@media screen and (-webkit-min-device-pixel-ratio:0) { .slider img { width: 280px; height: 212px; -webkit-border-radius: 5px; } }

#screen1 .clear > div { }
#screen1 .clear:nth-of-type(1) img { width: 305px; height: 247px; float: right; margin: 20px 20px 0 0; }
#screen1 .clear:nth-of-type(1) p { float: left; margin-top: 0; width: 510px; }

#screen1 .clear:nth-of-type(2) { margin-top: 10px; }
#screen1 .clear:nth-of-type(2) .slider { margin: -2px 15px 0 0; float: left; }
#screen1 .clear:nth-of-type(2) .slider img { height: 206px; }
#screen1 .clear:nth-of-type(2) p { margin-top: 0; padding: 0; }

#screen1 > p:last-of-type { float: none; clear: both; width: 100%; margin-top: 0; padding-top: 0px; }

#screen2 p:first-child { padding-top: 15px; float: left; width: 59%;}
#screen2 p { float: left; }
#screen2 { display: none; }
#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	p { font-size: 22px; }
	#screen1 span { font-size: 22px; }
<?php } ?> 
html[dir="rtl"] .bg h1 { font-size: 34px; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#screen1 .clear:nth-of-type(1) p { width: 395px; }
	#screen2 p:first-child { width: 55%; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("Reviewing big ideas... about staying alive"); ?></h1>
				
				<div class="clear">
					<p><?php echo _("Many animals are born with behaviors we call <span class='key'>instinctual</span>. They perform these behaviors because they have inherited characteristics that make them unable to do anything else. Most fish never see their parents. When they hatch, they immediately begin to swim, moving water across their gills to take in oxygen. Many other animals spend a long time with their parents. Parents feed and protect them, but also teach them how to survive in their environments."); ?></p>

					<img src="images/4/fish.jpg" />
				</div>
				
				<div class="clear">
					<div>
						<ul class="rslides slider">
							<li> <img src="images/4/s1a.jpg"> </li>
							<li> <img src="images/4/s1b.jpg"> </li>
							<li> <img src="images/4/s1c.jpg"> </li>
						</ul>
					</div>
					<span><?php echo _("Some animals even form complex family groups to help them survive. In some cases, these groups have complicated sets of relationships which determine which animals eat first and which will be allowed to reproduce. Wolves form complex family groups that stay together for life. A single male and female lead the group and are usually the only animals who have cubs. The other members of the pack all assist in hunting and caring for young. Within the pack, different wolves seem to have authority over certain members, but not the others. The wolves take turns eating animals they kill, based on their position within the pack."); ?></span>

				</div>

			</div>
			
			<div id="screen2" class="screen">
				<p><?php echo _("Sometimes, it takes a long time for the offspring to learn from their parents. Young crows live with their parents for as many as five years, helping to forage and care for younger siblings, all the while continuing to learn the complexities of life from their parents. Crow life is so complicated that each bird must understand what types of food are safe and which are dangerous, how to handle different kinds of food, and even how it fits into the crow flock as a whole."); ?></p>
				<div>
					<ul class="rslides slider">
						<li> <img src="images/4/s2a.jpg"> </li>
						<li> <img src="images/4/s2b.jpg"> </li>
					</ul>
				</div>
				<div class="clear"></div>

				<p><?php echo _("The important point is that instinctual and learned behaviors make survival and reproduction more likely for the members of the population. In many kinds of animals, parents and the offspring themselves engage in behaviors that help the offspring to survive. The big picture is that the survival of any one individual isn't really very important in nature.  What matters is the survival and reproduction of the group as a whole. It is important that the members who do reproduce are well-prepared to survive and reproduce as well."); ?></p>
			</div>

		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="5.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Protecting offsprings..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 1000
	});
	var hash = window.location.hash.slice(1);
	
	var native_width = 0;
	var native_height = 0;

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
	}
	
	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('.back-toggle').parent().attr('href','3.php#answer');
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
