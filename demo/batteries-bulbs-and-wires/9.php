<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(9, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'batteries-bulbs-and-wires-qc3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Batteries, Bulbs and Wires"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #b85252; }
		/* p, h2 { font-size: 20px; } */
		.bg { background-image: url(assets/bg-qq-qc.jpg); }
		.ac-custom li { padding: 6px 0; }
		.ac-custom label { color: #000; font-size: 22px; padding-left: 49px; }
		.ac-custom svg path { stroke: #c16202; }
		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { p, h2, .ac-custom label { font-size: 24px; } }
		#question1 .ac-custom input[type="radio"]:checked + label { color: #c16202; }
		#question1 .ac-custom label::before { background-color: #c16202; height: 20px; width: 20px; margin-top: -11px; }
		#question1 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }
		#question2 .ac-custom input[type="radio"]:checked + label { color: #c16202; }
		#question2 .ac-custom label::before { border: 2px solid #c16202; height: 34px; width: 34px; margin-top: -18px; }
		#question2 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }
		html[dir=rtl] #question1 .ac-custom label::after { border: 2px solid #c16202; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question1 .ac-custom svg { right: 9px; left: 98%; }
		html[dir=rtl] #question2 .ac-custom label::after { border: 2px solid #c16202; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question2 .ac-custom svg { right: 9px; left: 98%; }
		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		#buttons .next { display: none; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } } 
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?></h1>

						<div id="question1" class="grid_12">
							<h2><?php echo _("Question A. The voltage of a battery is a measure of:"); ?></h2>

							<form class="ac-custom ac-radio ac-circle" autocomplete="off">
								<ol>
									<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("How big the battery is."); ?></span></label></li>
									<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("How long the battery will last."); ?></span></label></li>
									<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("What the battery will be used for."); ?></span></label></li>
									<li><input id="d1" name="q1" type="radio" value="D"><label for="d1"><span><?php echo _("The electrical energy of the battery."); ?></span></label></li>
								<ol>
							</form>
						</div>

						<div id="question2" class="grid_12">
							<h2><?php echo _("Question B. The electrons moving through a simple circuit connected to a battery are driven by:"); ?></h2>

							<form class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ol>
									<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("Chemical reactions inside the battery."); ?></span></label></li>
									<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("The light bulb needing those electrons."); ?></span></label></li>
									<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("The wires pushing the electrons."); ?></span></label></li>
									<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("Electrons building up on the terminals."); ?></span></label></li>
								<ol>
							</form>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1" class="grid_12">
							<h2><?php echo _("Question A. The voltage of a battery is a measure of:"); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer"></p>

							<div class="feedback"></div>
						</div>

						<div id="answer2" class="grid_12">
							<h2><?php echo _("Question B. The electrons moving through a simple circuit connected to a battery are driven by:"); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer"></p>
							<div class="feedback"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Electrons moving"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('#answer1 .answer').html($('#question1 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – Sometimes a small battery like a wristwatch battery can be the same voltage as a bigger battery such as a flashlight battery."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope – the voltage doesn’t tell anything about how long the battery will last. Usually bigger batteries will last longer because they have more chemicals inside."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not exactly – different voltage batteries are used to power different devices but the same voltage can also power different devices. For example, a wristwatch battery can be the same voltage as a battery powering a flashlight."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct – the voltage of a battery is a measure of how much electrical energy a battery can put out. A flashlight battery is only 1.5 volts so it can’t start a car. But a car battery is 12 volts and can start a car."); ?></p>");

			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer2 = $('#question2 input:radio:checked').val();

			if (answer2 == 'A') {
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes – Chemical reactions inside the battery can cause electrons to move in the circuit. This electric current is what causes a bulb in the electric circuit to light up."); ?></p>");
			} else if (answer2 == 'B'){
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not really – bulbs aren’t like people. They don’t “need” electrons so that’s not what makes the electrons flow in a circuit."); ?></p>");
			}else if (answer2 == 'C'){
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope – wires can’t push electrons to make them move."); ?></p>");
			} else{
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope – electrons don’t build up on the terminals."); ?></p>");
			}

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('batteries-bulbs-and-wires-qc3-a', answer1); // Correct answer: C
				saveAnswer('batteries-bulbs-and-wires-qc3-b', answer2); // Correct answer: BCE

				answered = 1;
			}
		}

		function clear() {
			$('#answer2 .answer').html('');
			$('#answer2 .feedback').html('');

			answer2 = '';
		}

		$('.checkanswer').click(function() {
			if ($('#question1 input:radio:checked').length == 0)
				checkAnswer = 0;
			else if ($('#question2 input:radio:checked').length == 0)
				checkAnswer = 0;
			else
				checkAnswer = 1;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 
					$('#answers').fadeIn();

					save();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "8.php#screen3";
			} else if ($('#answers').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {

					clear();

					$('#questions').fadeIn();

					window.location.hash = '';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
