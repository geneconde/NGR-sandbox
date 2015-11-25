<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10 to 15) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
	//require_once '../../verify.php';
	require_once "locale.php";

	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(12, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('how-light-behaves');
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

	<title><?php echo _("Specialized Cells"); ?></title>

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
		h1 { color: #f1a12e; font-size: 26px; }
		h2 { text-align: center; color: #5d3e29; margin-bottom: 0; }
		p { color: #000; }

		.wrap { border-color: #D8D8D6; }
		.bg { background-image: url(assets/14/bg.jpg); }

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
		
		.rslides { margin-top: 50px; }


		#s2a { position: relative; }
		#s2a h4 { position: absolute; font-size: 18px; z-index: 2; text-align: center; line-height: 0.5; color: #000; }
		#s2a h4:first-child { left: 10%; top: 50px; }
		#s2a h4:nth-child(2) { left: 46%; top: 45px; }
		#s2a h4:nth-child(3) { left: 74%; top: 35px; }
		#s2a h4:nth-child(4) { left: 23%; top: 170px; }
		#s2a h4:nth-child(5) { left: 65%; top: 170px; }
		#s2a h4:nth-child(6) { left: 25%; top: -10px; font-size: 24px;}
		@media screen and (max-width: 1250px ){
			.bg{ 	background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; 
					overflow: hidden;
			}
		}
		@media (max-width: 960px){ #buttons { background-color: #468853; } }
		@media only screen and (orientation: landscape) and (min-device-width : 768px) and (max-device-width : 1024px){
			#buttons { background-color: #468853 !important; }
		}
		@media only screen and (orientation: portrait) and (min-device-width : 768px) and (max-device-width : 1024px){
			#buttons { background-color: #468853 !important; }
		}

		@media (max-width: 1250px ){
			img, video {
			    width: 430px !important;
			    height: 300px !important;
			}
		}

		<?php if($language == "zh_CN"){ ?>
			#s2a h4:nth-child(2) { left: 39%; }
			#s2a h4:nth-child(3) { left: 72%; }
			#s2a h4:nth-child(4) { left: 16%; }
			#s2a h4:nth-child(6) { left: 42%; }

			@media (max-width: 1250px) {
				#s2a h4 { width: 120px; }
				#s2a h4:nth-child(1) { left: 25px !important; top: 45px !important; }
				#s2a h4:nth-child(2) { left: 165px !important; top: 30px !important; }
				#s2a h4:nth-child(3) { left: 295px !important; top: 25px !important; }
				#s2a h4:nth-child(4) { left: 65px !important; top: 135px !important; }
				#s2a h4:nth-child(5) { left: 250px !important; top: 140px !important; }
				#s2a h4:nth-child(6) { left: 170px !important; }
			}
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="scenario">
						<h1 class="grid_12"><?php echo _("Using what you know about... specialized cells... to solve a problem"); ?></h1>
						<!-- <h2 class="grid_12"><?php echo _("The Scenario"); ?></h2> -->
						<h2 class="grid_12"><?php echo _("The Problem"); ?></h2>
						<p class="grid_12"><?php echo _("In the 1980s, a new disorder appeared in which otherwise healthy adults began to suffer severe illnesses related to unusual diseases to which most people are immune. Careful investigations showed that the affected patients had been exposed to these odd diseases in the past and had no particular problems. It seemed as though the ill patients had somehow lost immunity they had already acquired."); ?></p>
						
						<div class="grid_6 prefix_3">
						<div id="s2a">
						<h4><?php echo _("Lymposite"); ?></h4>
						<h4><?php echo _("Basophil"); ?></h4>
						<h4><?php echo _("Neutrophil"); ?></h4>
						<h4><?php echo _("Eosinphil"); ?></h4>
						<h4><?php echo _("Monocyte"); ?></h4>
						<h4><?php echo _("WHITE BLOOD CELLS"); ?></h4>
							<img src="assets/14/1.jpg" />
							</div>
						</div>
						
					</div>

					<div id="task">
						<h2 class="grid_12"><?php echo _("The Task"); ?></h2>
						<p class="grid_12"><?php echo _("Imagine yourself as a medical researcher. Explain what part of the immune system you would investigate first to solve the mystery and explain why you chose that system."); ?></p>

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
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Solving a mystery..."); ?></strong></section></section>

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
					saveMeta('specialized-cells', $('textarea').val());
					answered = 1;
				}

				document.location.href = "13.php";
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
