<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'gravity-in-action';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(9, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'gravity-in-action-qc3-a');
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
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?></h1>

						<div id="question1" class="grid_12">
							<h2><?php echo _("Question A. The cause of the incandescent bulb lighting up in a simple electric circuit is:"); ?></h2>

							<form class="ac-custom ac-radio ac-circle" autocomplete="off">
								<ol>
									<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("The gas inside the bulb glowing."); ?></span></label></li>
									<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("The positive and negative electricity crashing together and exploding in the bulb."); ?></span></label></li>
									<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("The friction of the electrons rubbing inside the filament."); ?></span></label></li>
									<li><input id="d1" name="q1" type="radio" value="D"><label for="d1"><span><?php echo _("The glass of the light bulb getting hot."); ?></span></label></li>
								<ol>
							</form>
						</div>

						<div id="question2" class="grid_12">
							<h2><?php echo _("Question B. An electric current in a simple circuit is made up of:"); ?></h2>

							<form class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ol>
									<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("Liquid electricity flowing through the wires."); ?></span></label></li>
									<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("Electrons flowing inside the wire."); ?></span></label></li>
									<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("Electricity flowing on the outside of the wires."); ?></span></label></li>
									<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("Atoms vibrating inside the wire."); ?></span></label></li>
								</ol>
							</form>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1" class="grid_12">
							<h2><?php echo _("Question A. The cause of the incandescent bulb lighting up in a simple electric circuit is:"); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer"></p>

							<div class="feedback"></div>
						</div>

						<div id="answer2" class="grid_12">
							<h2><?php echo _("Question B. An electric current in a simple circuit is made up of:"); ?></h2>

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
		<a href="12.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

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
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not exactly. There is no gas inside incandescent bulbs. But some lights, like a mercury vapor streetlight, do use gas inside to light it."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope – Positive and negative charges don’t crash together in the bulb."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes -  Electrons flowing through the filament causes friction in the filament causing it to heat up and give off light."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope – The glass of the bulb does get too hot to touch – so be careful – but it’s the heat of the filament that causes the bulb to light up."); ?></p>");

			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer2 = $('#question2 input:radio:checked').val();

			if (answer2 == 'A') {
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Nope! Electricity flows like water but it isn\'t a liquid. It\'s flowing electron charged particles inside the wire.'); ?></p>");
			} else if (answer2 == 'B'){
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct – electric current is flowing electron charged particles inside the wire."); ?></p>");
			}else if (answer2 == 'C'){
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope – No electricity flows on the outside of the wires."); ?></p>");
			} else{
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – Atoms do vibrate inside the wire but they don’t flow at all.  Electric current is flowing electron charged particles inside the wire."); ?></p>");
			}

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('electric-circuit-qc1-a', answer1); // Correct answer: C
				saveAnswer('electric-circuit-qc1-b', answer2); // Correct answer: BCE

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
				document.location.href = "10.php#screen2";
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
