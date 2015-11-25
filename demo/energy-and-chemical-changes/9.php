<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = energy-and-chemical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'energy-and-chemical-changes-qc3-a');
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
		.bg { background-image: url(assets/9/bg.jpg); }

		#box p { font-size: 20px; text-align: center; color: #fff; }
		#hexaflip { margin: auto; }
		li { color: #fff; }
		.ac-custom input[type="radio"]:checked + label { color: #FAFFAB; }
		.ac-custom label { color: #fff; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #FAFFAB; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #FAFFAB; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #FAFFAB; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer1 p { text-align: left; }

		#buttons .next { display: none; }
		#answers > div > p, #answer1 > div > p { color: #fff; }
		@media only screen and (max-width: 1250px){
			form.ac-custom.ac-radio.ac-swirl {
			    font-size: 20px;
			    line-height: 1;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. The chemical energy stored in plants comes from:"); ?></h2>

							<ul class="grid_6">						
								<li>A. <?php echo _("Heat energy from the soil"); ?></li>
								<li>B. <?php echo _("Solar energy from the sun"); ?></li>
								<li>C. <?php echo _("Kinetic energy from growing"); ?></li>
								<li>D. <?php echo _("Water energy in the roots"); ?></li>
							</ul>

							<div id="box" class="grid_6">
								<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

								<div id="hexaflip"></div>
							</div>

							<div class="clear"></div>
						</div>
						
						<div id="question2" class="grid_12">
							<h2><?php echo _("Question B. When you eat, the energy you get from the food comes from:"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("The solar energy in the food"); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("The biological energy in the food"); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("The kinetic energy in the food"); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("The stored chemical energy in the food"); ?></span></label></li>
									<ol>
								</form>
							</div>
							
						</div>
						
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
						
						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. The chemical energy stored in plants comes from:"); ?></h2>

							<div class="image grid_2"></div>

							<div class="grid_10">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>

								<div class="feedback"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="answer2">
							<h2><?php echo _("Question B. When you eat, the energy you get from the food comes from:"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="10.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '',
			answerA = '',
			answerB = '';

		function save() {
			
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/a.png') {
				$('#answer1 .image').html("<img src='assets/a.png'>");
				$('#answer1 .answer').html("<?php echo _("Heat energy from the soil"); ?>");
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - heat energy from the soil helps the plant seeds grow but that's not where the stored chemical energy in the plant comes from."); ?></p>");

				answer1 = 'A';
			}

			if (hexaValue == './assets/b.png') {
				$('#answer1 .image').html("<img src='assets/b.png'>");
				$('#answer1 .answer').html("<?php echo _("Solar energy from the sun"); ?>");
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - Solar energy from the sun is converted into stored chemical energy in the plant by the chemical reactions of photosynthesis."); ?></p>");

				answer1 = 'B';
			}
								
			if (hexaValue == './assets/c.png') {
				$('#answer1 .image').html("<img src='assets/c.png'>");
				$('#answer1 .answer').html("<?php echo _("Kinetic energy from growing"); ?>");
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - The kinetic energy of the plant growing actually comes from the chemical energy in the plant - not the other way around."); ?></p>");

				answer1 = 'C';
			}

			if (hexaValue == './assets/d.png') {
				$('#answer1 .image').html("<img src='assets/d.png'>");
				$('#answer1 .answer').html("<?php echo _("Water energy in the roots"); ?>");
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really - there is no such thing as water energy in the roots."); ?></p>");

				answer1 = 'D';
			}

			answerB = $('#question2 input:radio:checked').parent().find('span').text();
			
			$('#answer2 .answer').html(answerB);

			answer2 = $('#question2 input:radio:checked').val();

			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - solar energy helped make the energy in the food but has been converted into a different kind of energy in the food."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - the energy in the food is converted to biological energy in your body."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - the energy in the food is converted to kinetic energy in the activities your body does."); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! When you eat, the energy you get from the food comes from the stored chemical energy in the food."); ?></p>");
				
			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('energy-and-chemical-changes-qc3-a', answerA.toLowerCase()); // Correct answer: B
				saveAnswer('energy-and-chemical-changes-qc3-b', answerB.toLowerCase()); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 1) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "8.php#screen2";
			} else if ($('#answers').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

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

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 140 });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
