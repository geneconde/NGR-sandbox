<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = structures-and-properties-of-matter';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'structures-and-properties-of-matter-qq4-a');
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
	<link rel="stylesheet" href="css/hexaflip.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #F16D2D; }
		h2 { color: #765DF9; }
		
		.wrap { border-color: #048DBB; }
		.bg { background-image: url(assets/16/bg.jpg); }

		#hexaflip { margin: 0 auto auto auto; }
		#box { text-align: center; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }

		#buttons .next { display: none; }
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?></h1>
						<h2><?php echo _("If you were to take 1 ounce of sugar and add it to 4 ounces of Kool- aid and stir it real well so you couldn't see the sugar at all anymore – the final weight of the Kool-aid would be."); ?></h2>
						
						<ul class="grid_11 prefix_1">	
							<li>A. <?php echo _("4 ounces"); ?></li>
							<li>B. <?php echo _("A little bit more than 4 ounces"); ?></li>
							<li>C. <?php echo _("5 ounces"); ?></li>
							<li>D. <?php echo _("A little bit less than 5 ounces"); ?></li>
							<li>E. <?php echo _("6 ounces"); ?></li>
						</ul>
			
						<div id="box"  class="grid_12">
							<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

							<div id="hexaflip"></div>
						</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>
	
		$('.map img').click(function() {
			$('#larger').fadeIn();
		});
		$('.close').click(function() {
			$('#larger').fadeOut();
		});
	
	
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();
																				 
			if (hexaValue == './assets/a.png') {
				$('.answer').html("<img src='assets/a.png'><span><?php echo _("4 ounces"); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect – The final weight includes both the weight of the Kool aid (4 ounces) AND the weight of the sugar (1 ounce) = 5 ounces."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/b.png') {
				$('.answer').html("<img src='assets/b.png'><span><?php echo _("A little bit more than 4 ounces"); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect – The final weight includes both the weight of the Kool aid (4 ounces) AND the full weight of the sugar (1 ounce) = 5 ounces."); ?></p>");

				answer = 'B';
			}
			
			if (hexaValue == './assets/c.png') {
				$('.answer').html("<img src='assets/c.png'><span><?php echo _("5 ounces"); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct – The final weight includes both the weight of the Kool aid (4 ounces) AND the full weight of the sugar (1 ounce) = 5 ounces."); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/d.png') {
				$('.answer').html("<img src='assets/d.png'><span><?php echo _("A little bit less than 5 ounces"); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect – The final weight includes both the weight of the Kool aid (4 ounces) AND the full weight of the sugar (1 ounce) = 5 ounces."); ?></p>");

				answer = 'D';
			}

			if (hexaValue == './assets/e.png') {
				$('.answer').html("<img src='assets/e.png'><span><?php echo _("6 ounces"); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Incorrect – The final weight includes both the weight of the Kool aid (4 ounces) AND the full weight of the sugar (1 ounce) = 5 ounces."); ?></p>");

				answer = 'E';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('structures-and-properties-of-matter-qq4-a', answer); // Correct answer: A
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
				document.location.href = "17.php";
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
			'./assets/d.png',
			'./assets/e.png'
		];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
