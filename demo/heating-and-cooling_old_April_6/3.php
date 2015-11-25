<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'heating-and-cooling';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $smc->updateStudentLastscreen(3, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Heating and Cooling"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="css/locale.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/jpreloader.css" />
	<link rel="stylesheet" href="css/global.css" />

	<style>
    h1{font-size:34px;}
		.off { background-position: 0 0; }
		.on { background-position: 0 -31px; }

		.images { width: 72%; margin: 20px auto; overflow: hidden; }
		.images div { float: left; }
		.images div img { margin: 0 10px; }
		.images div p { padding: 0; }

		.bg { background-image: url('images/3/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position: relative; }
		.bg li:last-child { margin-bottom: 0; }

		.ac-custom { padding: 0 3em; max-width: 900px; margin: 10px auto 0; }
		.ac-custom ul, .ac-custom ol { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
		.ac-custom li { margin: 0 auto; padding: 0 0; position: relative; }
		.ac-custom label { display: inline-block; position: relative; padding: 0 0 0 40px; vertical-align: top; cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
		.ac-custom input[type="checkbox"], .ac-custom label::before { width: 27px; height: 26px; top: 50%; left: 0; margin-top: -13px; position: absolute; cursor: pointer; }

		#question input[type=checkbox] { display: none;  }
		#question label::before { content: ''; background: url(images/3/checkbox.png) left top no-repeat; width: 27px; height: 26px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }

		#question input[type="checkbox"]:checked + label::before { background-position: left bottom; }
		html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom label::before { right: -40px; }
		#answer { display: none; margin: 0 auto; text-align: center; width: 95%; }
		#answer p { color: #fff; padding-top: 20px; }
		#dp_swf_engine { display: none; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
			.images { width: 615px; }
			#answer { padding-top: 35px; }
		}	

		#buttons .next { display: none; }

	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Checking what you already know... about heating and cooling"); ?></h1>
				<p><?php echo _("When you sit at the dinner table, you probably wait until your food gets cool enough to eat, but you drink your water while it is still cold."); ?></p>
				<p><?php echo _("Click on <span class='blink'>all</span> the correct statements you think are related to why our food get cooler, but our drinks get warmer at the dinner table."); ?></p>
				
				<div class="images">
					<div><img src="images/3/a.jpg" alt="A"><p>A</p></div>
					<div><img src="images/3/b.jpg" alt="B"><p>B</p></div>
					<div><img src="images/3/c.jpg" alt="C"><p>C</p></div>
					<div><img src="images/3/d.jpg" alt="D"><p>D</p></div>
				</div>
				<section>
					<form class="ac-custom ac-checkbox" autocomplete="off">
						<ul>
							<li><input id="cb1" name="cb1" type="checkbox"><label for="cb1">A. <?php echo _("Heat energy from the food flows into the cooler air around it."); ?></label>
							<li><input id="cb2" name="cb2" type="checkbox"><label for="cb2">B. <?php echo _("Heat energy from the air flows into the cooler drink."); ?></label></li>
							<li><input id="cb3" name="cb3" type="checkbox"><label for="cb3">C. <?php echo _("Cold energy from the drink flows into to the surrounding air."); ?></label></li>
							<li><input id="cb4" name="cb4" type="checkbox"><label for="cb4">D. <?php echo _("Cold energy from the surrounding air flows into the food."); ?></label>
						</ul>
					</form>
				</section>
			</div>

			<div id="answer">
				<p><?php echo _("If you marked A and B, you are on the right track. Heat energy only goes from something hot to something cold. As you go through this module, you may be surprised to find out that there really isn’t any such thing as <span class='key'>cold energy</span>."); ?></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>	

	<section id="preloader"><section class="selected"><strong><?php echo _("Hot and cold"); ?></strong></section></section>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/rightclick.js"></script>
	<script>
		var question = $('#question'),
		answer = $('#answer'),
		check = $('a.checkanswer'),
		back = $('a.back'),
		next = $('a.next');

		$('.blink').blink({ speed: 500, blinks: 1000 });

		check.on('click', function() {

			check.fadeOut( function () {
				next.fadeIn();
			});
			
			
			back.fadeIn();

			question.fadeOut(function() {
				$('.bg').css('background-image','url(images/3/bg2.jpg)');
				answer.fadeIn();
			});

			addHash('#answer');
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "2.php";
			} else {
				$('.bg').css('background-image','url(images/3/bg.jpg)');
				answer.fadeOut();
				question.fadeIn();
				next.fadeOut( function () {
					check.fadeIn();
				});
				removeHash();
			}
		});

		var curURL = window.location.toString();
		var oldURL = document.referrer;
		var hash = '';

		if (curURL.indexOf("#answer") != -1 || oldURL.indexOf("4.php") != -1) {
			check.fadeOut();
			back.fadeIn();
			next.fadeIn();

			question.fadeOut(function() {
				answer.fadeIn();
				$('.bg').css('background-image','url(images/3/bg2.jpg)');
			});

			addHash('#answer');
		}
	</script>
	
	<?php include("setlocale.php"); ?>
</body>
</html>
