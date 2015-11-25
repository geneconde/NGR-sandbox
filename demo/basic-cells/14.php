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

	<title><?php echo _("Basic Cells"); ?></title>

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
		h1 { color: #008378; font-size: 30px; }
		h2 { text-align: center; color: #0006ff; margin-bottom: 0; }
		p { color: #000; }

		.wrap { border-color: #CC7D20; }
		.bg { background-image: url(assets/14/bg.jpg); overflow: hidden;}
		.textarea { max-height: 220px; min-height: 220px; margin-top:  0px;}
		.slider img { height: 340px; }

		textarea { width: 100%; border: 1px solid #8781bd; margin: 0px 0; max-height: 300px; min-height: 300px; padding: 12px; }

		#task { display: none; }


		@media all and (max-width: 960px) {
			h1 { font-size: 28px; }
			
		}

		@media all and (min-device-width: 768px) and (max-device-width: 1024px) {
			h1 { font-size: 28px; }
			
		}

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
			#task p{ margin:  5px 0;}
			#task h2 { margin-top: 45px; }
		}
		@media screen and (max-width: 720px ){
			.textarea { height:350px;}
			#task { font-size: 18px;}
		}
		@media screen and (max-width: 600px ){
			.textarea {max-height: 200px;}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="scenario">
						<h1 class="grid_12"><?php echo _("Using what you know about... basic cells... to solve a problem"); ?></h1>
						<h2 class="grid_12"><?php echo _("The Scenario"); ?></h2>

						<p class="grid_12"><?php echo _("Bacteria cause illness because they produce chemicals called toxins that cause body tissue to break down, much like digestive enzymes. As the number of bacteria infecting a person grows, so does the amount of toxin produced. As a consequence, the infected person gets sicker and sicker."); ?></p>
						<div class=" grid_8 prefix_2">
							<!-- <ul class="rslides">
							    <li><img src="assets/10/a.jpg"></li>
							    <li><img src="assets/10/b.jpg"></li>
							</ul> -->
						</div>
					</div>

					<div id="task">
						<h2 class="grid_12"><?php echo _("The Task"); ?></h2>
						<p class="grid_12"><?php echo _("Imagine yourself as a medical researcher.  You have a number of drugs that may help to cure people of bacterial infections.  The following shows how each drug works."); ?></br>
										<?php echo _("Drug A. Stimulates the production of chlorophyll in plant cells."); ?></br>
										<?php echo _("Drug B. Interferes with cell wall production in prokaryotes."); ?></br>
										<?php echo _("Drug C. Interferes with cell reproduction in eukaryotes."); ?></br>
										<?php echo _("Drug D. Interferes with protein production in eukaryotes."); ?></br>

										<?php echo _("You may choose one of the drugs to investigate further. Which will you begin with and why?"); ?></p>

						<div class="grid_7 prefix_2">
							<textarea class="textarea" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="15.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Conducting research..."); ?></strong></section></section>

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

				document.location.href = "15.php";
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
