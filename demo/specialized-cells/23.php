<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'how-light-behaves-qq1-a');
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
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/hexaflip.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #660066; }
		h2 { color: #469c96; }
		
		.wrap { border-color: #FFE0CE; }
		.bg { background-image: url(assets/23/bg.jpg); }

		#hexaflip { margin: 0 auto auto auto; }
		#box { text-align: center; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }
		#answer { margin-top: -10px; }

		#buttons .next { display: none; }
		
		#question ul li { margin: 8px 0; }
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
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #6"); ?></h1>
						<h2 class="grid_12"><?php echo _('Smooth muscle is most closely associated to which system?'); ?></h2>

						<ul class="grid_7">						
							<li>A. <?php echo _("Nervous system"); ?></li>
							<li>B. <?php echo _("Digestive system"); ?></li>
							<li>C. <?php echo _("Respiratory system"); ?></li>
							<li>D. <?php echo _("Skeletal system"); ?></li>
						</ul>
						
						<div class="clear"></div>
						<div id="box">
							<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

							<div id="hexaflip"></div>
						</div>
						
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="24.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>

		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();
							
			if (hexaValue == './assets/A.png') {
				$('.answer').html('<img src="assets/A.png"><span><?php echo _("Nervous system"); ?></span>');
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The nervous system has no smooth muscle."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/B.png') {
				$('.answer').html("<img src='assets/B.png'><span><?php echo _("Digestive system"); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('That\'s right! Smooth muscle propels food through the digestive system.'); ?></p>");

				answer = 'B';
			}

			if (hexaValue == './assets/C.png') {
				$('.answer').html("<img src='assets/C.png'><span><?php echo _("Respiratory system"); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. The respiratory system uses skeletal muscle to power breathing."); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/D.png') {
				$('.answer').html("<img src='assets/D.png'><span><?php echo _("Skeletal system"); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect. The skeletal system is related to skeletal muscles."); ?></p>");

				answer = 'D';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('specialized-cells-qq6-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {

			$('.back').fadeOut();

			$('.checkanswer').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});

			$('#question').fadeOut(function(){ 

				save();

				$('#answer').fadeIn();

				window.location.hash = '#answer';
			}); 
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "22.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();

				});

				$('#answer').fadeOut(function() {
					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});

		var hexa, images = [
			'./assets/A.png',
			'./assets/B.png',
			'./assets/C.png',
			'./assets/D.png'
		];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>