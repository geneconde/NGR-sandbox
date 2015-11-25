<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'history-of-earth';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'";  ?> >
<head>
<title><?php echo _("History of Earth"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg h1 { color: #00a0c1; font-size: 28px; }
.bg h2 { text-align: center; color: #f85571; }
.wrap { border-color: #9B6D44; }
.bg { background-image: url(images/10/bg.jpg); }

#assignment { display: none; text-align: center; }
#assignment h2 { margin-top: 0; padding-top: 20px; }
textarea { width: 60%; margin-top: 20px; display: inline-block; border-radius: 5px; border: 0; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
#buttons .next { display: none; }

#question { width: 470px; margin: 20px auto; display: block; }
#question img {width: 470px;  display: none; position: absolute; }
#question img.active { width: 470px; display: block; margin: 0 auto; }
#problem p, #assignment p { background: rgba(255, 255, 255, .5); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }

html[dir="rtl"] h2 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="problem">
				<h1><?php echo _("Using what you know... about the history of earth... to solve a problem"); ?></h1>
				<h2><?php echo _("The Scenario"); ?></h2>
				<p><?php echo _("You are a geologist searching for a big oil deposit. You are in charge of drilling a hole down into the earth to find the oil. Other geologists in the area have found that oil is found in a certain layer of rocks that is about 400 million years old."); ?></p>
				<div id="question">
					<img src="images/10/1.jpg" class="active">
					<img src="images/10/2.jpg">
					<img src="images/10/3.jpg">
					<img src="images/10/4.jpg">
					<img src="images/10/5.jpg">
					<img src="images/10/6.jpg">
					<img src="images/10/7.jpg">
				</div>
			</div>

			<div id="assignment">
				<h2><?php echo _("The Problem"); ?></h2>
				<p><?php echo _("Using what you now know of fossils and the history of the earth, how would you figure out which layer is about 400 million years old? Provided you could dig three times before you had to tell your team how deep to drill the hole, what would you do to determine which layer is the layer with oil?"); ?></p>
				<textarea cols="80" rows="8" placeholder="<?php echo _('Please type your answer here...'); ?>"></textarea>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing drilling rig..."); ?></strong></section></section>

	<script>
	
	$(document).ready(function() { setInterval('swapImages()', 1000); });
	
	function swapImages(){
		var active = $('#question .active');
		var next = ($('#question .active').next().length > 0) ? $('#question .active').next() : $('#question img:first');  
		active.removeClass('active');
		next.addClass('active');
	}
	
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
	<?php include("setlocale.php"); ?>	
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
