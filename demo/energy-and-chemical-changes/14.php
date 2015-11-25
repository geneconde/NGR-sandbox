<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = energy-and-chemical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'energy-and-chemical-changes-qq1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Energy and Chemical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/hexaflip.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>
	
	<style>
		h1 { color: #F9BCAF; }
		h2 { color: #9CB6E9; }
		
		.wrap { border-color: #868ABA; }
		li, p { color: #fff; }
		.bg { background-image: url(assets/14/bg.jpg); }

		#hexaflip { margin: 20px auto auto auto; }
		#box { text-align: center; margin-top: 0px; }

		#answer .answer img { margin: 0px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }

		#buttons .next { display: none; }
		@media only screen and (max-width: 1250px){
			ul { font-size: 22px !important; }
			p { font-size: 21px; }
		}
			@media only screen and (max-width: 1250px){
				ul { font-size: 22px !important; }
				div#question p{ font-size: 20px !important; }
			}
			@media only screen and (max-width: 960px){
				div#question ul {
				    font-size: 21px !important;
				    line-height: 25px;
				}
				div#question p {
				    font-size: 19px !important;
				    line-height: 19px;
				}
				#hexaflip {
				    margin: 10px auto auto auto;
				}
			}
		<?php if ($language == 'es_ES') : ?>
				div#question {
				    line-height: 28px;
				}
		<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #1"); ?></h1>
						<h2><?php echo _("Photosynthesis is a process involving chemical reactions in the leaves of green plants that converts:"); ?></h2>
						
						<ul>						
							<li>A. <?php echo _("heat energy from the Sun into kinetic energy to make the plant move towards the Sun."); ?></li>
							<li>B. <?php echo _("light energy from the Sun to make chemical energy in the plant to provide food for the plant."); ?></li>
							<li>C. <?php echo _("light energy from the Sun to make chemical energy in the plant to provide food for animals."); ?></li>
							<li>D. <?php echo _("heat energy from the Sun to make chemical energy in the plant to provide food for animals."); ?></li>
						</ul>

						<div id="box">
							<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

							<div id="hexaflip"></div>
						</div>
						
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="15.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/a.png') {
				$('.answer').html("<img src='assets/a.png'><span><?php echo _("heat energy from the Sun into kinetic energy to make the plant move towards the Sun."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - heat energy from the Sun doesn't cause the plant to move towards the Sun. The energy from the food the plant makes during photosynthesis does."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/b.png') {
				$('.answer').html("<img src='assets/b.png'><span><?php echo _("light energy from the Sun to make chemical energy in the plant to provide food for the plant."); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - light energy from the Sun is converted into chemical energy in the food the plant makes for itself."); ?></p>");

				answer = 'B';
			}
			
			if (hexaValue == './assets/c.png') {
				$('.answer').html("<img src='assets/c.png'><span><?php echo _("light energy from the Sun to make chemical energy in the plant to provide food for animals."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - light energy from the Sun is converted into chemical energy in the food the plant makes for itself - not for food for the animals that might eat it."); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/d.png') {
				$('.answer').html("<img src='assets/d.png'><span><?php echo _("heat energy from the Sun to make chemical energy in the plant to provide food for animals."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - heat energy from the Sun doesn't cause the plant make food for animals. But the light energy from the Sun is converted into chemical energy in the food the plant makes for itself."); ?></p>");

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
				document.location.href = "13.php";
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
