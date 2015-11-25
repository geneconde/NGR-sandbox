<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #f36d90; }

		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { h1 { font-size: 27px; } }
		
		.wrap { border-color: #abdefa; }
		.bg { background-image: url(assets/3/bg.jpg); }
		
		.ac-custom li { padding: .2em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #00A7D4; }
		.ac-custom label { color: #000; padding-left: 49px; font-size: 23px; }
		.ac-custom label::before { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px;}
		.ac-custom svg path { stroke: #00A7D4; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		#answer img {width:50%; height:10%; margin-left: 220px;}
		#answer div { margin-top: 20px; }
		#answer div p { text-align: left; background: rgba(255, 255, 255, .7); padding: 5px 10px; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; }
		
		#question div img { width: 90%; margin: 0 5%; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1 class="grid_12"><?php echo _("Checking what you know about... electric circuits"); ?></h1>
						<h2 class="grid_12"><?php echo _("When you push the switch on a flashlight and it lights up, it is because the switch:"); ?></h2>
						
						<div class="grid_6">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" type="radio"><label for="a"><span><?php echo _("pushes the battery up against the bulb."); ?></span></label></li>
									<li><input id="b" type="radio"><label for="b"><span><?php echo _("completes a simple circuit in the flashlight."); ?></span></label></li>
									<li><input id="c" type="radio"><label for="c"><span><?php echo _("turns the battery on."); ?></span></label></li>
									<li><input id="d" type="radio"><label for="d"><span><?php echo _("tells the bulb to light."); ?></span></label></li>
								<ol>
							</form>
						</div>
						<div class="grid_6">
							<img src="assets/3/boy-with-flashlight.png" />
						</div>
						
					</div>

					<div id="answer" class="grid_12">
						<div class="grid_12">
							<p><?php echo _("There is a simple circuit in the flashlight that is completed when the switch is pushed to the \"on\" position. This allows electric current to run from the battery to the bulb, through the bulb, and back again causing the bulb to light."); ?></p>
							<div class="clear"></div>
							<img src="assets/3/flashlight.jpg">
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Transition..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#806754');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn();
						$('.back').fadeIn();
				   	});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
					$('.wrap').css('border-color', '#F34345');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.checkanswer').click(function() {
			var checkAnswer = $('input:radio:checked').length;
			
			if (checkAnswer < 1 ) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#806754');

					$('#answer').fadeIn();

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});

					window.location.hash = '#answer';
				});
			}
		});

		$('.back').click(function() {
			if ($('#answer').is(':visible')) {
				$('#answer').fadeOut( function() {
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
					$('.wrap').css('border-color', '#F34345');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn();
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '2.php'); }
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
