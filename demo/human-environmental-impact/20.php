<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = human-impact';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'human-impact-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Human Environmental Impact"); ?></title>

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
		h1 { color: #00A7D4; }
		h2 { color: #F84D82; }
		
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/21/bg.jpg); }

		#hexaflip { margin: 0 auto auto auto; }
		#box { text-align: center; }
		#box p { color: black; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }

		#buttons .next { display: none; }
		
		#question ul li { margin: 8px 0; }

		@media screen and (max-width: 1250px){
			p, li, h2 { font-size: 20px;}
			h1 { font-size: 30px; }
		}

		<?php if ($language == 'es_ES') : ?>
			p, li, h2 { font-size: 20px;}
			h1 { font-size: 30px; }

			@media screen and (max-width: 810px){
				p, li, h2 { font-size: 19px;}
			}

		<?php endif; ?>	
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">

			<div class="container_12 clearfix">
				<div class="grid_12">
					
					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?></h1>
						<h2><?php echo _("To have the greatest positive impact on your environment. You could:"); ?></h2>

						<ul class="grid_12">						
							<li>A. <?php echo _("Make personal choices to change your daily behavior to minimize your impact on the environment."); ?></li>
							<li>B. <?php echo _("Learn as much as you can about how humans impact the environment globally, but act locally in your community, neighborhood, and school, and use that knowledge to minimize how you and your community impact the environment."); ?></li>
							<li>C. <?php echo _("Work with your classmates at your school to organize projects to change how your school uses natural resources that impact the environment."); ?></li>
							<li>D. <?php echo _("Help to organize a neighborhood drive to recycle plastic soda bottles."); ?></li>
						</ul>
						
						<div class="clear"></div>
						<div id="box">
							<div class="grid_6">
								<div id="hexaflip"></div>
							</div>
							<p class="grid_6"><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>
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
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="21.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("Creating impact..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>

		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/A.png') {
				$('.answer').html("<img src='assets/A.png'><span><?php echo _("Make personal choices to change your daily behavior to minimize your impact on the environment."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - Making personal choices to change your daily behavior to minimize your impact on the environment is an excellent thing to do to help the environment - but there may be even more you can do."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/B.png') {
				$('.answer').html("<img src='assets/B.png'><span><?php echo _("Learn as much as you can about how humans impact the environment globally but act locally in your community, neighborhood, and school, and use that knowledge to minimize how you and your community impact the environment."); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct - Knowledge is power. The more you know about the global environment the better you can act locally to minimize how you and your community impact the environment."); ?></p>");

				answer = 'B';
			}

			if (hexaValue == './assets/C.png') {
				$('.answer').html("<img src='assets/C.png'><span><?php echo _("Work with your classmates at your school to organize projects to change how your school uses natural resources that impact the environment."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not Quite - Working with your classmates to do school projects to help the environment is an excellent thing to do - but there may be even more you can do."); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/D.png') {
				$('.answer').html("<img src='assets/D.png'><span><?php echo _("Help to organize a neighborhood drive to recycle plastic soda bottles."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not Quite - Organizing a neighborhood drive to recycle plastic soda bottles is an excellent thing to do - but there may be even more you can do."); ?></p>");

				answer = 'D';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('human-impact-qq3-a', answer); // Correct answer: A
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
				document.location.href = "19.php";
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
