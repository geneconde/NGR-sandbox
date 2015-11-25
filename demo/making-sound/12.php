<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10 to 15) when ported in the modules folder */

	//require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = structures-and-properties-of-matter';
	//require_once '../../verify.php';
	require_once "locale.php";

	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(12, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('structures-and-properties-of-matter');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'], $problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { font-size: 33px;}
		.bg { background-image: url(assets/13/bg.jpg); }
		.textarea { max-height: 250px; min-height: 250px; }
		h2 {text-align: center;}

		textarea { width: 100%; border: 1px solid #8781bd; margin: 10px 0; max-height: 300px; min-height: 300px; padding: 12px; }

		#task { display: none; }

		@media all and (max-width: 960px) {
			h1 { font-size: 28px; }
			#task h2 { margin-top: 45px; }
		}

		@media all and (min-device-width: 768px) and (max-device-width: 1024px) {
			h1 { font-size: 28px; }
			#task h2 { margin-top: 45px; }
		}

		#buttons .next { display: none; }
		.rslides {
		  width: 260% !important;
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="scenario">
						<h1><?php echo _("Using what you know about... making sound... to solve a problem"); ?></h1>
						<h2><?php echo _("The Scenario"); ?></h2>

						<p><?php echo _("Your classmates decide to attempt to measure the speed of sound by standing at the edge of the playground while banging some wooden blocks together and listening for the sound waves to bounce back to them (the echo off of the building)."); ?></p>
						<div class=" grid_6 prefix_3 suffix_3">
							<div class="grid_5">
								<ul class="rslides">
									<li><img src="assets/13/13a.jpg"/></li>
									<li><img src="assets/12/a12.jpg"></li>
									<li><img src="assets/12/b12.jpg"></li>
								</ul>
							</div>	
						</div>
					</div>

					<div id="task">
						<h2 class="grid_12"><?php echo _("The Task"); ?></h2>
						<p class="grid_12"><?php echo _("In the box below, describe the equipment they would need, the measurements they would need to make, and how they would use those measurements to calculate the speed of sound."); ?></p>
						<div class="grid_7 prefix_2">
							<textarea class="textarea" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="13.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Measuring speed..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		var answered = 1; /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */

		$('.next').click(function() {
			if ($('textarea').val() == '') {
				alert("<?php echo _("Please type your answer."); ?>");
				return false;
			} else {
				if (answered == 0) {
					saveMeta('making-sound', $('textarea').val());
					answered = 1;
				}

				document.location.href = "14.php";
			}
		});

		$('.back').click(function(){
			if ($('#scenario').is(':visible')) {
				document.location.href= "11.php#screen2";
			} else if ($('#task').is(':visible')) {


				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#task').fadeOut(function() { $('#scenario').fadeIn(); });
			}
		});

		$('.readmore').click(function() {

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});

			$('#scenario').fadeOut(function() {
				$('#task').fadeIn();

				window.location.hash = '#task';
			});
		});

		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
