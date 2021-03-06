<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Module"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #000; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/3/bg.jpg); }

		#question input[type="checkbox"] { display: none; }

		#question input[type="checkbox"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="checkbox"]:checked + label img {
			border: 4px solid #777;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question span {
			color: #777;
			cursor: pointer;
			transition: all .3s ease;
			backface-visibility: hidden;
		}

		#answer { display: none; }
		#answer p { text-align: left; }

		html[dir=rtl] #answer p { text-align: right; }

		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Checking what you already know... about module"); ?></h1>

						<h2 class="grid_12"><?php echo _("Click on <span class='blink'>all</span> of the pictures below."); ?></h2>

						<div class="grid_3">
							<input type="checkbox" id="a">
							<label for="a"><img src="http://420placehold.it/tech/600-600-pixelated"></label>
							<span class="caption"><?php echo _("Caption"); ?></span>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="b">
							<label for="b"><img src="http://420placehold.it/tech/600-600-normal"></label>
							<span class="caption"><?php echo _("Caption"); ?></span>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="c">
							<label for="c"><img src="http://420placehold.it/tech/600-600-random"></label>
							<span class="caption"><?php echo _("Caption"); ?></span>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="d">
							<label for="d"><img src="http://420placehold.it/tech/600-600-bw"></label>
							<span class="caption"><?php echo _("Caption"); ?></span>
						</div>

						<div class="clear"></div>

						<div class="grid_3">
							<input type="checkbox" id="e">
							<label for="e"><img src="http://420placehold.it/tech/600-600-pixelated"></label>
							<span class="caption"><?php echo _("Caption"); ?></span>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="f">
							<label for="f"><img src="http://420placehold.it/tech/600-600-normal"></label>
							<span class="caption"><?php echo _("Caption"); ?></span>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="g">
							<label for="g"><img src="http://420placehold.it/tech/600-600-random"></label>
							<span class="caption"><?php echo _("Caption"); ?></span>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="h">
							<label for="h"><img src="http://420placehold.it/tech/600-600-bw"></label>
							<span class="caption"><?php echo _("Caption"); ?></span>
						</div>

						<div class="clear"></div>
					</div>

					<div id="answer">
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

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#777');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg.jpg)');
					$('.wrap').css('border-color', '#000');

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
			$('#question').fadeOut(function() {
				$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
				$('.wrap').css('border-color', '#777');

				$('#answer').fadeIn();

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				window.location.hash = '#answer';
			});
		});

		$('.back').click(function() {
			if ($('#answer').is(':visible')) {
				$('#answer').fadeOut( function() {
					$('.bg').css('background-image', 'url(assets/3/bg.jpg)');
					$('.wrap').css('border-color', '#000');

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
