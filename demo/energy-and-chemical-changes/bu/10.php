<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10 to 15) when ported in the modules folder */

	require_once "../tempsession.php";
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

	<title><?php echo _("Structures and Properties of Matter"); ?></title>

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
		h1 { color: #00dcca; font-size: 30px; }
		h2 { text-align: center; color: #00b4ff; margin-bottom: 0; }
		p { color: #000; }

		.wrap { border-color: #FFD8FA; }
		.bg { background-image: url(assets/10/bg.jpg); }

		.slider img { height: 340px; }

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
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="scenario">
						<h1 class="grid_12"><?php echo _("Using what you now know... about structures and properties of matter... to solve a problem"); ?></h1>
						<h2 class="grid_12"><?php echo _("The Scenario"); ?></h2>

						<p class="grid_12"><?php echo _("Your friend didn't understand the difference between atoms and molecules and how they make up elements and compounds."); ?></p>

					</div>

					<div id="task">
						<h2 class="grid_12"><?php echo _("The Task"); ?></h2>
						<p class="grid_12"><?php echo _("How would you use Legos to demonstrate the idea?"); ?></p>

						<div class="grid_8 prefix_2">
							<textarea placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

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
					saveMeta('structures-and-properties-of-matter', $('textarea').val());
					answered = 1;
				}

				document.location.href = "11.php";
			}
		});

		$('.back').click(function(){
			if ($('#scenario').is(':visible')) {
				document.location.href= "9.php";
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

		$(".slider").responsiveSlides({
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
