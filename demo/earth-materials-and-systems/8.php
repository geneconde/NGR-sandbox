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
.wrap { border-color: #01C7EA; }
.bg { background-image: url(images/8/bg.jpg); }

#screen1 .col1 { width: 50%; float: left; }
#screen1 .col2 { width: 40%; float: right; margin: 2% 3%; }
#screen1 p:last-of-type { margin-top: 2%; float: left; }

#screen2 ul { width: 55%; margin: 2% auto; }

#screen3 ul { margin-top: 3%; }
#screen3 .credit p { font-size: 20px; }

#screen2, #screen3{ display: none; }
#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }

#buttons .next { display: none; }</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about earth materials and systems"); ?></h1>
				<div class="col1">
					<p><?php echo _("The land around where you live and all over the earth is constantly changing. Wind and water can play an important role in making changes to the landscape. Sometimes the change happens fast, like from a flood or a hurricane. But other times it happens so slowly that you can't even tell it is happening."); ?></p>
				</div>
				<div class="col2">
					<ul class="rslides slider">
						<li> <img src="images/8/s1a.jpg"> </li>
						<li> <img src="images/8/s1b.jpg"> </li>
						<li> <img src="images/8/s1c.jpg"> </li>
						<li> <img src="images/8/s1d.jpg"> </li>
					</ul>
				</div>
				<p><?php echo _("Think about what would happen if you mistakenly let your garden hose run water over the concrete sidewalk in front of your house overnight. When you come out in the morning and turn the hose off and look at the sidewalk, it looks like the running water had no effect on the sidewalk other than getting it wet. But if you let that hose run for a month, or a year, or ten years, or a thousand years, what do you think would happen? You're right – eventually, over time, it will wear away some of the concrete and leave a hole or a groove in the sidewalk."); ?></p>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Now imagine what would happen if, instead of a water hose, there was a river running over the sidewalk or even over solid rock. The same thing would happen. Day by day, you might not see a change, but over a very long period of time that river can erode down through solid rock. This would completely change the <span class='key'>landscape</span> – the features of the land - to a make a deep canyon from a flat surface. That's how the Grand Canyon was formed; it took millions of years. This process is called <span class='key'>erosion</span>. Wind, running water, waves, or glaciers can pick up stuff and things like dirt and rocks from the surface and move them around. Erosion happens different ways; it is the gradual wearing away and breaking down of rocks. Erosion can even wear down a mountain range from high peaks to create a flat plain."); ?></p>
				<ul class="rslides slider">
					<li> <img src="images/8/s2a.jpg"> </li>
					<li> <img src="images/8/s2b.jpg"> </li>
					<li> <img src="images/8/s2c.jpg"> </li>
				</ul>
			</div>

			<div id="screen3" class="screen">
				<p><?php echo _("The same idea applies to the power of wind to erode the land. On the prairies, the wind can carry the topsoil from a farming field and make hills from it, or blow it into the rivers where the water carries it away. Along the coasts the wind blows every day, changing the sand dunes. And during hurricanes, the combination of wind and water can be so strong it can change the shape of the coast dramatically in a very short time. This can be seen very clearly in the change of the coast in New York from Hurricane Sandy in 2012."); ?> </p>
				<ul class="rslides slider">
					<li> <img src="images/8/s3a.png"> </li>
					<li> <img src="images/8/s3b.png"> </li>
					<li> <img src="images/8/s3c.png"> </li>
				</ul>
				<div class="credit">
					<p><?php echo _("Credit: U.S. Geological Survey"); ?></p>
					<p><?php echo _("Department of the Interior/USGS"); ?></p>
					<p><?php echo _("U.S. Geological Survey"); ?></p>
					</p>
				</div>
			</div>

		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Changing landscapes..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});
	
	$("#screen3 .slider").responsiveSlides({
		timeout: 5000
	});
	</script>
	
	<script>
	var hash = window.location.hash.slice(1);
	var screenCount = 3;

	if (hash != "") {
		$('.screen').hide();
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen < screenCount) {
				$('.readmore-toggle').parent().attr('href','#screen' + screen);
			} else {
				$('.readmore-toggle').fadeOut(function(){ $('.next-toggle').fadeIn(); });
			}
		});
	}

	$('.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
		} else if ($('#screen2').is(':visible')) {
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

	$('.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
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
	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
