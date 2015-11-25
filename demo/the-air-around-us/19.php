<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'air-around-us-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("The Air Around Us"); ?></title>

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
		h1 { color: #fe8a17; }
		h2 { color: #00a49d; }
		.wrap > .bg { overflow: hidden !important; }
		.wrap { border-color: #78DFFE; }
		.bg { background-image: url(assets/19/bg.jpg); }

		#hexaflip { margin: 0 auto auto auto; }
		#box { text-align: center; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }

		#buttons .next { display: none; }
		
		#question ul li { margin: 8px 0; }
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
		@media only screen and (max-width: 1250px){
			ul.grid_12 {
			    line-height: 25px;
			}
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
						<h2><?php echo _("Click on the <span class='blink'>correct</span> statement about the relationship between temperature, pressure and density of gases."); ?></h2>

						<ul class="grid_12">						
							<li>A. <?php echo _("Higher temperatures in gas cause higher density."); ?></li>
							<li>B. <?php echo _("Higher pressures in gas cause lower density."); ?></li>
							<li>C. <?php echo _("Higher temperatures in gas cause lower density."); ?></li>
							<li>D. <?php echo _("Lower pressures in gas cause higher density."); ?></li>
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
		<a href="20.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Finding the correct answer..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>

		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/a.png') {
				$('.answer').html("<img src='assets/a.png'><span><?php echo _("Higher temperatures in gas cause higher density."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. An increase in temperature results in a decrease in density."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/c.png') {
				$('.answer').html("<img src='assets/c.png'><span><?php echo _("Higher temperatures in gas cause lower density."); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Way to go!"); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/b.png') {
				$('.answer').html("<img src='assets/b.png'><span><?php echo _("Higher pressures in gas cause lower density."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. An increase in pressure results in an increase in density."); ?></p>");

				answer = 'B';
			}

			if (hexaValue == './assets/d.png') {
				$('.answer').html("<img src='assets/d.png'><span><?php echo _("Lower pressures in gas cause higher density."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No. A decrease in pressure on a gas results in a decrease in density."); ?></p>");

				answer = 'D';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('air-around-us-qq3-a', answer); // Correct answer: A
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
				document.location.href = "18.php";
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
