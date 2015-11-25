<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'chemical-and-physical-changes-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
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
		h1 { color: #916D5D }
		h2 { color: #93648D; }
		
		.wrap { border-color: #FFE0CE; }
		.bg { background-image: url(assets/11/bg.jpg); background-size: 100% 100% !important;}

		.ac-custom input[type="radio"]:checked + label { color: #EB6966; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom svg path { stroke: #EB6966; }
		.ac-custom li { padding: 5px 0; }
		
		#question1 .ac-custom label::before { background-color: #EB6966; height: 20px; width: 20px; margin-top: -11px; }
		#question1 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		#question2 .ac-custom label::before { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px; }
		#question2 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }

		html[dir=rtl] #question1 .ac-custom label::after { background-color: #EB6966; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] #question1 .ac-custom svg { right: 3px; left: 98%; }

		html[dir=rtl] #question2 .ac-custom label::after { border: 2px solid #EB6966; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] #question2 .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		
		#answers p { margin: 3px 0; }
			@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. Burning birthday candles is a good example of:"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("Both chemical and physical changes"); ?></span></label></li>
										<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("Chemical reaction"); ?></span></label></li>
										<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("Neither chemical nor physical changes"); ?></span></label></li>
										<li><input id="d1" name="q1" type="radio" value="D"><label for="d1"><span><?php echo _("Physical change"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. When candle wax changes into a gas and burns, it does all of the following except it:"); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("Disappears."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("Changes to different gasses."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("Becomes wax again."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio" value="D"><label for="d2"><span><?php echo _("Creates heat and light."); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. Burning birthday candles is a good example of:"); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. When candle wax changes into a gas and burns, it does all of the following except it:"); ?></h2>

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
			$('#answer2 .answer').html($('#question2 input:radio:checked').parent().find('span').text());

			answer1 = $('#question1 input:radio:checked').val();
			answer2 = $('#question2 input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct. When the candle burns, the wax melts then turns into a gas – which are examples of physical changes. Then the gas burns to change into different gasses plus heat and light. This is an example of chemical change."); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – because both a chemical reaction or chemical change AND a physical change occur when the wax melts."); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – because both chemical and physical changes occur."); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No – because both physical change AND chemical change occur when the wax burns to change into different gasses plus heat and light."); ?></p>");

			if (answer2 == 'A')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – This is a true statement - when the candle wax changes to a gas you can't see it."); ?></p>");

			if (answer2 == 'B')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – This is a true statement - when the candle wax burns, it changes to different gasses – carbon dioxide and water."); ?></p>");

			if (answer2 == 'C')
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("That's right – this is not a true statement - When candle wax changes into a gas and burns, it does not turn back into wax again."); ?></p>");

			if (answer2 == 'D')
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – This is a true statement - when the candle wax burns, it creates heat and light."); ?></p>");

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('chemical-and-physical-changes-qc#-a', answer1); // Correct answer: A
				saveAnswer('chemical-and-physical-changes-qc#-b', answer2); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 2) {
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
				document.location.href = "10.php";
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
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
