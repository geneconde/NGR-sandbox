<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Module"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
		<link rel="stylesheet" href="css/nlform_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
		<link rel="stylesheet" href="css/nlform.css">
	<?php endif; ?>

	<style>
		h1 { color: #000; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/#/bg.jpg); }

		#nl-form {}
		#nl-form a { border-bottom: 0; background-color: #000; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; }
		.nl-field ul { background-color: #000; }
		.nl-field li { color: #fff; font-size: 28px; }
		.nl-dd ul li.nl-dd-checked { background-color: #000; color: #fff; }

		.ac-custom input[type="radio"]:checked + label { color: #777; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #777; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?></h1>

						<div id="question1">
							<h2 class="grid_12"><?php echo _("Question A. "); ?></h2>

							<div class="grid_12">
								<form id="nl-form" class="nl-form">

									<select name="select">
										<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
										<option value="A"><?php echo _("A"); ?></option>
										<option value="B"><?php echo _("B"); ?></option>
										<option value="C"><?php echo _("C"); ?></option>
										<option value="D"><?php echo _("D"); ?></option>
									</select>
									
									<div class="nl-overlay"></div>
								</form>
							</div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. "); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio" value="A"><label for="a"><span><?php echo _("A"); ?></span></label></li>
										<li><input id="b" name="q" type="radio" value="B"><label for="b"><span><?php echo _("B"); ?></span></label></li>
										<li><input id="c" name="q" type="radio" value="C"><label for="c"><span><?php echo _("C"); ?></span></label></li>
										<li><input id="d" name="q" type="radio" value="D"><label for="d"><span><?php echo _("D"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. "); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="answer grid_12"></p>

							<div class="feedback grid_12"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question B. "); ?></h2>

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
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("transition"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>
	<script src="js/nlform.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			answer1 = $('select').val();
						
			if (answer1 == 'A') {
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct"); ?></p>");
			}

			if (answer1 == 'B') {
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
			}

			if (answer1 == 'C') {
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
			}

			if (answer1 == 'D') {
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
			}

			$('#answer1 .answer').html($('select option:selected').text());

			answer2 = $('input:radio:checked').val();

			if (answer2 == 'A')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct"); ?></p>");

			if (answer2 == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

			if (answer2 == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

			if (answer2 == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

			$('#answer2 .answer').html($('input:radio:checked').parent().find('span').text());

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('module-qc#-a', answer1); // Correct answer: A
				saveAnswer('module-qc#-b', answer2); // Correct answer: A

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0 || $('select').val() == "") {
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
				document.location.href = "#";
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

		var nlform = new NLForm(document.getElementById('nl-form'));
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
