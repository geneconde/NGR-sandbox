<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10 to 15) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";

	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(10, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('our-solar-system');
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

	<title><?php echo _("Our Solar System"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #E5E630; font-size: 27px; }
		h2 { text-align: center; margin-bottom: 0; color: #14F5F5; }
		p { color: white; }

		.wrap { border-color: #3636DA; }
		.bg { background-image: url(assets/14/bg.jpg); overflow: hidden;}

		.slider img { height: 340px; }

		textarea { width: 100%; border: 1px solid #ccc; margin: 10px 0; max-height: 300px; min-height: 300px; padding: 12px; }

		#task { display: none; }

		@media all and (max-width: 1250px) {
			h1 { font-size: 30px; }

			#task h2 { margin-top: 45px; }
		}

		@media all and (max-width: 960px) {
			h1 { font-size: 28px; }

			#task h2 { margin-top: 45px; }
		}

		@media all and (min-device-width: 768px) and (max-device-width: 1024px) {
			h1 { font-size: 28px; }

			#task h2 { margin-top: 45px; }
		}

		#buttons .next { display: none; }
		@media only screen and (max-width: 1250px){
			textarea {
			    width: 100%;
			    border: 1px solid #ccc;
			    margin: 10px 0;
			    max-height: 250px;
			    min-height: 250px;
			    padding: 12px;
			}
			.slider img {
			    height: 75%;
			    margin-left: 14%;
			}
			.rslides img {
			    width: 75%;
			}

		}
		@media only screen and (max-width: 960px){
			textarea{
				max-height: 220px;
    			min-height: 220px;
			}
		}


	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="scenario">
						<h1 class="grid_12"><?php echo _("Using what you now know about... our solar system... to solve a problem"); ?></h1>

						<h2 class="grid_12"><?php echo _("The Scenario"); ?></h2>

						<p class="grid_12"><?php echo _("You are a scientist working on a project that will send a probe to Mars. Your team plans the timing of the launch of the probe from Earth so that it has to travel the least distance before landing on Mars' surface."); ?></p>

						<div class="grid_8 prefix_2">
							<ul class="rslides slider">
								<li><img src="assets/14/slide1.png"></li>
								<li><img src="assets/14/slide2.jpg"></li>
								<li><img src="assets/14/slide3.jpg"></li>
							</ul>
						</div>
					</div>

					<div id="task">
						<h2 class="grid_12"><?php echo _("The Task"); ?></h2>

						<p><?php echo _("Problem: Write a brief recommendation on what factors your team will need to consider and what information you will need to successfully launch a probe craft from Earth and have it land safely on Mars. Remember that..."); ?></p>
						<p class="grid_12"><?php echo _("1. Earth's speed in its orbit around the sun is approximately 108,000 km/hr; and"); ?></p>
						<p class="grid_12"><?php echo _("2. Mars' speed in its orbit around the sun is nearly 87,000 km/hr"); ?></p>

						<div class="grid_8 prefix_2">
							<textarea placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="15.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Setting the time..."); ?></strong></section></section>

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
					saveMeta('module', $('textarea').val());
					answered = 1;
				}

				document.location.href = "11.php";
			}
		});

		$('.back').click(function(){
			if ($('#scenario').is(':visible')) {
				document.location.href= "13.php";
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
