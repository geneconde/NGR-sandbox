<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'plants-are-producers';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Plants are Producers"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #8B8721; }
.wrap { border-color: #feeb80; }
.bg { background-image: url(images/3/bg.jpg); overflow: hidden; }

#question ul { list-style: none; padding-left: 0; }
#question li { padding: 5px 0; font-size: 24px; }

#box { text-align: center; margin: 0; float: left; }
#box .info { padding: 20px 0; font-size: 20px; color: #909438; text-align: center; }
#hexaflip { text-align: center; margin: 0 auto; }
.hexaflip-cube .hexaflip-side { width: 101%; }

div.clear { width: 640px; margin: 0 auto; }
img.plant { float: right; }

#answer { display: none; position: relative; }
#answer p:first-child { padding-top: 15px; }
#answer p.caption { position: absolute; color: #904f00; }
#answer p:nth-child(2) { left: 215px; }
#answer p:nth-child(3) { left: 254px; top: 342px; }
#answer p:nth-child(4) { right: 60px; top: 245px; }
#buttons .next { display: none; }
img.next-toggle { display: none; }

html[dir="rtl"] #answer p:nth-child(2) { left: 180px; }
html[dir="rtl"] #answer p:nth-child(3) { left: 215px; top: 335px; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 30px; }
	h2, #question li { font-size: 22px; }
	div.clear { width: 680px; }
	#answer p:nth-child(2) { left: 160px; }
	#answer p:nth-child(3) { left: 224px; }
	#answer p:nth-child(4) { right: 70px; }
<?php } ?>	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you know... about plants are producers"); ?></h1>
				<h2><?php echo _("This plant receives the nutrition it needs to continue to live. What if we took all its oxygen away, could the plant still grow? Rotate or flip the 3D box below either up or down to set your answer."); ?></h2>

				<ul>						
					<li>A. <?php echo _("Yes, because it needs CO<sub>2</sub> and gives off O<sub>2</sub>."); ?></li>
					<li>B. <?php echo _("No, because it needs O<sub>2</sub> and gives off CO<sub>2</sub>."); ?></li>
					<li>C. <?php echo _("Yes, because plants need CO<sub>2</sub> to grow and O<sub>2</sub> to produce food."); ?></li>
					<li>D. <?php echo _("No, because plants need O<sub>2</sub> to grow and CO<sub>2</sub> to produce food."); ?></li>
				</ul>

				<div class="clear">
					<div id="box">
						<p class="info"><?php echo _("Click, hold and drag up or down"); ?></p>
						<div id="hexaflip"></div>
					</div>

					<img class="plant" src="images/3/plant.jpg">
				</div>
			</div>

			<div id="answer">
				<p><?php echo _("If you chose d, that is correct. A plant could not grow without oxygen. During photosynthesis (when producing food), plants need to take in carbon dioxide and give off oxygen. But a plant also uses some of that food to grow. When a plant uses food, the food is broken down the same way it is when animals and people use it, with oxygen. Oxygen is needed to release the stored energy in the food."); ?></p>

				<p class="caption"><?php echo _("Sun Light Energy"); ?></p>
				<p class="caption"><?php echo _("Carbon Dioxide"); ?></p>
				<p class="caption"><?php echo _("Oxygen"); ?></p>
			</div>
		</div>
	</div>

		<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Planting a tree..."); ?></strong></section></section>

	<script src="scripts/hexaflip.js"></script>

	<script>
	var hexa,
		images = [
			'./images/others/a.png',
			'./images/others/b.png',
			'./images/others/c.png',
			'./images/others/d.png'
		];

	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });

	var hash = window.location.hash.slice(1);
	var screenCount = 2;

	if(hash != "") {
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen = screenCount) {
				$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
				//$('.wrap').css('border-color', '#4291d3');
				$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });
				$('a.check-toggle').fadeOut( function(){ $('a.next-toggle').fadeIn(); });
			} else {
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				//$('.wrap').css('border-color', '#9ce76a');
				$('#question').fadeIn();
				$('a.back-toggle').fadeIn();
				$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
			}
		});
	}

	$('a.check-toggle').click(function(){
		$('#question').fadeOut(function(){
			$('.bg').css('background-image', 'url(images/3/bg2.jpg)');
			//$('.wrap').css('border-color', '#4291d3');
			$('#answer').fadeIn();
			$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
			window.location.hash = '#answer';
		});
	});

	$('a.back-toggle').click(function(){
		if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function(){
				$('.bg').css('background-image', 'url(images/3/bg.jpg)');
				//$('.wrap').css('border-color', '#9ce76a');
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

	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
