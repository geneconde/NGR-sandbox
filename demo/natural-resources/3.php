<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-resources';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Resources"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #558653; }
.wrap { border-color: #b8d767; }
.bg { background-image: url(images/3/bg.jpg); }

#question ul { list-style: none; width: 690px; padding-left: 0; margin: 0 auto; }
#question li { float: left; margin: 10px 10px 0 0; }
#question li:nth-child(3), #question li:nth-child(6) { margin-right: 0; }
#question li span { display: block; font-size: 24px; padding: 10px 0; text-align: center; }
#question input[type="checkbox"] { display: none; }
#question img { display: block; cursor: pointer; }

img.grayscale { filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */ filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */ -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
img.grayscale-off { filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale"); -webkit-filter: grayscale(0%); -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
span.checked { color: #4e9f00; }
span.unchecked { color: #000; }

#answer { display: none; overflow: hidden; }
#answer p { font-size: 20px; }
#answer p:first-child { padding-top: 15px; }
#buttons .next { display: none; }
img.next-toggle { display: none; }

html[dir="rtl"] #question ul { width: 770px; }
html[dir="rtl"] #question li { float: right; margin: 10px 0 0 10px; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#answer {
		display: none;
		overflow: hidden;
		padding-top: 35px;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about natural resources"); ?></h1>
				<h2><?php echo _("Which of the following natural resources does it take to make a hamburger? Click <span class='blink'>all</span> items that represents your answer."); ?></h2>

				<ul class="clear">
					<li><label for="a"><img class="grayscale" src="images/3/sunlight.jpg" title="Sunlight"></label><input type="checkbox" id="a"><span><?php echo _("Sunlight"); ?></span></li>
					<li><label for="b"><img class="grayscale" src="images/3/water.jpg" title="Water"></label><input type="checkbox" id="b"><span><?php echo _("Water"); ?></span></li>
					<li><label for="c"><img class="grayscale" src="images/3/grass.jpg" title="Grass"></label><input type="checkbox" id="c"><span><?php echo _("Grass"); ?></span></li>
					<li><label for="d"><img class="grayscale" src="images/3/electricity.jpg" title="Electricity"></label><input type="checkbox" id="d"><span><?php echo _("Electricity"); ?></span></li>
					<li><label for="e"><img class="grayscale" src="images/3/soil.jpg" title="Soil"></label><input type="checkbox" id="e"><span><?php echo _("Soil"); ?></span></li>
					<li><label for="f"><img class="grayscale" src="images/3/air.jpg" title="Air"></label><input type="checkbox" id="f"><span><?php echo _("Air"); ?></span></li>
				</ul>
			</div>

			<div id="answer">
				<p><?php echo _("Did you select all of them? All of them are true except electricity. We do use electricity to make our burgers but electricity is not a natural resource. Electricity is a form of energy that is generated from many kinds of natural resources such as coal, wind, solar, nuclear fuel, or oil, but it's not a natural resource by itself."); ?></p>
				<p><?php echo _("What does grass have to do with your hamburger? Well the cow had to eat something to grow and become delicious beef. What about soil, water and air? Read on to see what natural resources are and what your role is in conserving them."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Eating hamburger..."); ?></strong></section></section>

	<script>
	$('#question').find('input[type=checkbox]').on('click', function() {
		var me = $(this);

		if (me.is(':checked')) {
			me.parent().find('img').removeClass().addClass('grayscale-off');
			me.parent().find('span').removeClass().addClass('checked');
		} else {
			me.parent().find('img').removeClass().addClass('grayscale');
			me.parent().find('span').removeClass().addClass('unchecked');
		}
	});

	var hash = window.location.hash.slice(1);
	var screenCount = 2;

	if(hash != "") {
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen = screenCount) {
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				$('.wrap').css('border-color', '#699efd');
				$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });
				$('a.check-toggle').fadeOut( function(){ $('a.next-toggle').fadeIn(); });
			} else {
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				$('.wrap').css('border-color', '#b8d767');
				$('#question').fadeIn();
				$('a.back-toggle').fadeIn();
				$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
			}
		});
	}

	$('a.check-toggle').click(function(){
		$('#question').fadeOut(function(){
			$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			$('.wrap').css('border-color', '#699efd');
			$('#answer').fadeIn();
			$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
			window.location.hash = '#answer';
		});
	});

	$('a.back-toggle').click(function(){
		if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				$('.wrap').css('border-color', '#b8d767');
				$('#question').fadeIn();
				$('a.back-toggle').fadeIn();
				$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
				window.location.hash = '';
			});
		} else {
			$('a.back-toggle').parent().attr('href','2.php');
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
