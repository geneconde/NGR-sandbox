<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Role of Water"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/bookblock.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<style>
h1 { color: #7C774F; font-size: 30px; }
h2 { text-align: center; color: #8D8038; }
.wrap { border-color: #bfac70; }
.bg { background-image: url(images/10/bg.jpg); }

.slider { width: 440px; margin: 20px auto; }
.slider img { margin-bottom: 10px; }

#assignment { display: none; text-align: center; }
#assignment h2 { margin-top: 0; padding-top: 20px; }
textarea { width: 60%; margin-top: 20px; display: inline-block; border-radius: 5px; border: 1px solid #8D8038; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
#buttons .next { display: none; }

html[dir="es"] .slider { margin: 0 auto; }

html[dir="rtl"] h2 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="problem">
				<h1><?php echo _("Using what you know... about the role of water... to solve a problem"); ?></h1>
				<h2><?php echo _("The Scenario"); ?></h2>
				<p><?php echo _("Saudi Arabia is a big country in the Mideast part of the world that is known for being very rich because it has lots of oil. Because it's so rich the government wants to build lots of buildings for lots of people. But it's a desert country, which means it doesn't have any rivers or lakes to get drinking water from. The Saudi government has just hired you as a consultant to help them figure out how to get fresh drinking water for their people."); ?></p>

				<ul class="rslides slider">
					<li><img src="images/10/a.jpg"></li>
					<!-- <li><img src="images/10/b.jpg"></li> -->
					<li><img src="images/10/c.jpg"></li>
					<li><img src="images/10/d.jpg"></li>
					<li><img src="images/10/e.jpg"></li>
				</ul>
			</div>

			<div id="assignment">
				<h2><?php echo _("The Assignment"); ?></h2>
				<p><?php echo _("Based on what you know about water sources, how would you help them?"); ?></p>
				<textarea cols="80" rows="8" placeholder="<?php echo _("Please type your answer here..."); ?>"></textarea>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Roaming the dry lands..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	$('.back-toggle').click(function(){
		if ($('#problem').is(':visible')) {
			document.location.href= "9.php";
		} else if ($('#assignment').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#assignment').fadeOut(function(){
				$('#problem').fadeIn();
			});
		}
	});
	
	$('.readmore-toggle').click(function(){
		$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
		$('#problem').fadeOut( function(){
			$('#assignment').fadeIn();
			window.location.hash = '#assignment';
		});
	});
	
	$('.next-toggle').click( function() {
		if ($('textarea').val() == '') {
			alert('<?php echo _("Please type your answer."); ?>');
			return false;
		}
		document.location.href = "11.php";
	});

	$(".num").keydown(function(event) {
		if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
			(event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {
				 return;
		} else {
			if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
				event.preventDefault(); 
			}   
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>


	
	<?php include("setlocale.php"); ?>
</body>
</html>