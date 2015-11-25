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

	<!-- When using the grid and popup select, animated checkbox activity, use this condition for rtl support -->
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
		h1 { color: #000; } /* Change color */
		
		.wrap { border-color: #000; } /* Change border-color */
		.bg { background-image: url(assets/#/bg.jpg); }

		#nl-form {}
		#nl-form a { border-bottom: 0; background-color: #000; padding: 0 8px; color: #fff; text-align: center; border-radius: 5px; } /* Change background-color and color */
		.nl-field ul { background-color: #000; } /* Change background-color */
		.nl-field li { color: #fff; font-size: 28px; } /* Change color */
		.nl-dd ul li.nl-dd-checked { background-color: #000; color: #fff; } /* Change background-color and color */

		.ac-custom input[type="radio"]:checked + label { color: #777; } /* Change color */
		.ac-custom label { color: #000; padding-left: 49px; } /* Change color */ 
		.ac-custom label::before { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		.ac-custom svg path { stroke: #777; } /* Change stroke-color */
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; /* for Safari */ }

		#answer1 span { color: #777; } /* Change color */

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
							<h2 class="grid_12"><?php echo _("Question A. The European languages are members of the same family."); ?></h2>

							<div class="grid_12">
								<form id="nl-form" class="nl-form">
									<?php echo _("The European languages are members of the same family"); ?>

									<select name="select">
										<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
										<option value="A"><?php echo _("european"); ?></option>
										<option value="B"><?php echo _("language"); ?></option>
										<option value="C"><?php echo _("members"); ?></option>
										<option value="D"><?php echo _("family"); ?></option>
									</select>

									<?php echo _("languages are members of the same family."); ?>
									
									<div class="nl-overlay"></div>
								</form>
							</div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. The European languages are members of the same family."); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a" name="q" type="radio"><label for="a"><span><?php echo _("Option1"); ?></span></label></li>
										<li><input id="b" name="q" type="radio"><label for="b"><span><?php echo _("Option2"); ?></span></label></li>
										<li><input id="c" name="q" type="radio"><label for="c"><span><?php echo _("Option3"); ?></span></label></li>
										<li><input id="d" name="q" type="radio"><label for="d"><span><?php echo _("Option4"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. The European languages are members of the same family."); ?></h2>

							<p class="grid_12"><?php echo _("You answered..."); ?></p>
							<p class="grid_12"><?php echo _("The European languages are members of the same family"); ?> <span class="answer"></span> <?php echo _("languages are members of the same family."); ?></p>

							<div class="grid_12 feedback"></div>
						</div>

						<div id="answer2">
							<h2 class="grid_12"><?php echo _("Question A. The European languages are members of the same family."); ?></h2>

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

		$('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();

			if (id == 'a') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct"); ?></p>");
				
				answer2 = 'A';
			}

			if (id == 'b') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

				answer2 = 'B';
			}

			if (id == 'c') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

				answer2 = 'C';
			}

			if (id == 'd') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

				answer2 = 'D';
			}
		});

		function save() {
			answer1 = $('select').val();
						
			if (answer1 == 'A') {
				$('#answer1').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct"); ?></p>");
			}

			if (answer1 == 'B') {
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
			}

			if (answer1 == 'C') {
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
			}

			if (answer1 == 'D') {
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
			}

			$('#answer1').find('.answer').html($('select option:selected').text());

			if (answered == 0) {
				saveAnswer('module-qc1-a', answer1);
				saveAnswer('module-qc1-b', answer2);

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0 || $('select').val() == "") {
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
				document.location.href = "#";
			} else if ($('#answers').is(':visible')) {
				$('.next').fadeOut(function() { $('.checkanswer').fadeIn(); });

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
