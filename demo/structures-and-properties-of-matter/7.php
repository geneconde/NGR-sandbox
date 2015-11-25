<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = structures-and-properties-of-matter';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'structures-and-properties-of-matter-qc2-a');
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
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #F16D2D; }
		h2 { color: #765DF9; }
		
		.wrap { border-color: #048DBB; }
		.bg { background-image: url(assets/5/bg.jpg); overflow: hidden;}

		#box p { font-size: 20px; text-align: center; }
		#hexaflip { margin: auto; }

		.ac-custom input[type="radio"]:checked + label { color: #E14769; } 
		.ac-custom label { color: #000; padding-left: 49px; } 
		.ac-custom label::before { border: 2px solid #E14769; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #E14769; } 
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #E14769; height: 34px; width: 34px; margin-top: -18px; } 
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answer1 p { text-align: left; }

		html[dir=rtl] #answer1 p { text-align: right; }

		#buttons .next { display: none; }
		#question1 ul li { margin: 10px 20px;  }

		@media all and (max-width: 1245px){
			li { padding-top: 0px !important; }
			#box { margin-top: -10px !important; }
			#question2 { margin-top: -15px !important; }
		}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }	
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following is <span class='blink'>not</span> a state of matter:"); ?></h2>
									
							<ul class="grid_7">							
								<li>A. <?php echo _("Solid"); ?></li>
								<li>B. <?php echo _("Shiny"); ?></li>
								<li>C. <?php echo _("Liquid"); ?></li>
								<li>D. <?php echo _("Gas"); ?></li>
							</ul>

							<div id="box" class="grid_5">
								<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

								<div id="hexaflip"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="question2" class="grid_12">
							<h2><?php echo _("Question B. When a substance like water evaporates:"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio"><label for="a"><span><?php echo _("It disappears and doesn't exist anymore."); ?></span></label></li>
										<li><input id="b" name="q" type="radio"><label for="b"><span><?php echo _("It changes to a gas and becomes weightless."); ?></span></label></li>
										<li><input id="c" name="q" type="radio"><label for="c"><span><?php echo _("It changes to a gas and loses enough weight so it can float with the air."); ?></span></label></li>
										<li><input id="d" name="q" type="radio"><label for="d"><span><?php echo _("It doesn't change weight at all, it just becomes part of the air."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
											
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Which of the following is <span class='blink'>not</span> a state of matter:"); ?></h2>

							<div class="image grid_2"></div>

							<div class="grid_10">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>

								<div class="feedback"></div>
							</div>

							<div class="clear"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. When a substance like water evaporates:"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="grid_12 answer"></p>

							<div class="grid_12 feedback"></div>
						</div>
												
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Evaporating water..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '',
			answerA = '';


		$('#question2').find('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();

			if (id == 'a') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No! When water evaporates, it seems to disappear because you can't see it anymore, but it still exists and is mixed in with the atmosphere."); ?></p>");

				answer2 = 'A';
			}

			if (id == 'b') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! It does change into a gas – water vapor – but it still has the same mass and weight as it did before."); ?></p>");

				answer2 = 'B';
			}

			if (id == 'c') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong answer! – It does change into a gas – water vapor – but it doesn't lose any weight - it still has the same mass and weight as it did before."); ?></p>");

				answer2 = 'C';
			}

			if (id == 'd') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! The water doesn't lose any weight – evaporation means that the liquid water breaks down into individual water molecules and each one is light enough to disperse into the air."); ?></p>");

				answer2 = 'D';
			}
		});
		
		function save() {
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/a.png') {
				$('#answer1').find('.image').html("<img src='assets/a.png'>");
				$('#answer1').find('.answer').html("<?php echo _("Solid"); ?>");
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! Solid  is a state of matter."); ?></p>");

				answer1 = 'A';
				answerA = 'solid';
			}

			if (hexaValue == './assets/b.png') {
				$('#answer1').find('.image').html("<img src='assets/b.png'>");
				$('#answer1').find('.answer').html("<?php echo _("Shiny"); ?>");
				$('#answer1').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct! Shiny  is not  one of the three states of matter."); ?></p>");

				answer1 = 'B';
				answerA = 'shiny';
			}

			if (hexaValue == './assets/c.png') {
				$('#answer1').find('.image').html("<img src='assets/c.png'>");
				$('#answer1').find('.answer').html("<?php echo _("Liquid"); ?>");
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong answer! Liquid  is a state of matter."); ?></p>");

				answer1 = 'C';
				answerA = 'liquid';
			}

			if (hexaValue == './assets/d.png') {
				$('#answer1').find('.image').html("<img src='assets/d.png'>");
				$('#answer1').find('.answer').html("<?php echo _("Gas"); ?>");
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No! Gas  is a state of matter."); ?></p>");

				answer1 = 'D';
				answerA = 'gas';
			}

			if (answered == 0) {
				saveAnswer('structures-and-properties-of-matter-qc2-a', answerA);
				saveAnswer('structures-and-properties-of-matter-qc2-b', answer2);

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('.checkanswer').fadeOut(function() { $('.next').fadeIn(); });

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();
					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "6.php#screen2";
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
