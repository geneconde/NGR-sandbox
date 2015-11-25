<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'basic-cells';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(21, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'basic-cells-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
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
	<link rel="stylesheet" href="css/hexaflip.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #61009e; }
		h2 { color: #008fff; }
		
		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/20/bg.jpg); overflow: hidden;}

		#hexaflip { margin: 20px auto auto auto; }
		#box { text-align: center; margin-top: 20px; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
		}
		.hexaflip-cube .hexaflip-side {
		  width: 115% !important;
		  height: 101% !important;
		}

		.hexaflip-cube .hexaflip-side-left{
			transform: none !important;
			display: none;
		}
		.hexaflip-cube .hexaflip-side-right{
			transform: none !important;
			display: none;
		}


	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?></h1>
						<h2><?php echo _("Which of the following statements is true about osmosis?"); ?></h2>

						<ul>						
							<li>A. <?php echo _("Water flows from low concentration to high concentration."); ?></li>
							<li>B. <?php echo _("Sugars flow across a membrane."); ?></li>
							<li>C. <?php echo _("Water diffuses across a membrane."); ?></li>
							<li>D. <?php echo _("Proteins use energy to move water."); ?></li>
						</ul>

						<div id="box">
							<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

							<div id="hexaflip"></div>
						</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="22.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Knowing about osmosis..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/a.png') {
				$('.answer').html("<img src='assets/a.png'><span><?php echo _('Water flows from low concentration to high concentration.'); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. Osmosis involves membranes."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/b.png') {
				$('.answer').html("<img src='assets/b.png'><span><?php echo _('Sugars flow across a membrane.'); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Sorry. Osmosis is water only."); ?></p>");

				answer = 'B';
			}

			if (hexaValue == './assets/c.png') {
				$('.answer').html("<img src='assets/c.png'><span><?php echo _('Water diffuses across a membrane.'); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Thats it! Osmosis involves water and membranes."); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/d.png') {
				$('.answer').html("<img src='assets/d.png'><span><?php echo _("Proteins use energy to move water."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. No energy is used."); ?></p>");

				answer = 'D';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
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
				document.location.href = "20.php";
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
			'./assets/a.png',
			'./assets/b.png',
			'./assets/c.png',
			'./assets/d.png'
		];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
