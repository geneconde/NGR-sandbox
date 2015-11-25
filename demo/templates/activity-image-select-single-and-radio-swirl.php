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

	<!-- When using the grid and animated checkbox, use this condition for rtl support -->
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #000; } /* Change color */
		
		.wrap { border-color: #000; } /* Change border-color */
		.bg { background-image: url(assets/#/bg.jpg); }

		#question1 input[type="radio"] { display: none; }
		#question1 input[type="radio"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; }
		#question1 input[type="radio"]:checked + label img { border: 4px solid #777; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; } /* Change border-color */
		#question1 input[type="radio"]:checked + label span { color: #777; } /* Change color */ 
		#question1 span { color: #000; transition: all .3s ease; cursor: pointer; display: block; text-align: center; backface-visibility: hidden; } /* Change color */

		.ac-custom input[type="radio"]:checked + label { color: #777; } /* Change color */ 
		.ac-custom label { color: #000; padding-left: 49px; } /* Change color */
		.ac-custom label::before { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		.ac-custom svg path { stroke: #777; } /* Change stroke-color */
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; /* for Safari */ }

		#answer1 p { text-align: left; }

		html[dir=rtl] #answer1 p { text-align: right; }

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

							<div class="grid_3">
								<input type="radio" id="a1" name="q1">
								<label for="a1"><img src="http://420placehold.it/tech/600-600-normal"><span><?php echo _("Option1"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="b1" name="q1">
								<label for="b1"><img src="http://420placehold.it/tech/600-600-pixelated"><span><?php echo _("Option2"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="c1" name="q1">
								<label for="c1"><img src="http://420placehold.it/tech/600-600-bw"><span><?php echo _("Option3"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="radio" id="d1" name="q1">
								<label for="d1"><img src="http://420placehold.it/tech/600-600-sepia"><span><?php echo _("Option4"); ?></span></label>
							</div>

							<div class="clear"></div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. The European languages are members of the same family."); ?></h2>

							<div class="grid_12">
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("Option1"); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Option2"); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("Option3"); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("Option4"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2 class="grid_12"><?php echo _("Question A. The European languages are members of the same family."); ?></h2>

							<div class="grid_2 image"></div>

							<div class="grid_10">
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>

								<div class="feedback"></div>
							</div>

							<div class="clear"></div>
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

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

		$('input[type=radio]').on('click', function() {
			var id = $(this).attr('id'),
				image = $(this).parent().find('img').clone(),
				text = $(this).parent().find('span').text();

			if (id == 'a1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Feedback"); ?></p>");

				answer1 = 'A';
			}

			if (id == 'b1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

				answer1 = 'B';
			}

			if (id == 'c1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

				answer1 = 'C';
			}

			if (id == 'd1') {
				$('#answer1').find('.image').html(image);
				$('#answer1').find('.answer').html(text);
				$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

				answer1 = 'D';
			}

			if (id == 'a2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Feedback"); ?></p>");

				answer2 = 'A';
			}

			if (id == 'b2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

				answer2 = 'B';
			}

			if (id == 'c2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

				answer2 = 'C';
			}

			if (id == 'd2') {
				$('#answer2').find('.answer').html(text);
				$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Feedback"); ?></p>");

				answer2 = 'D';
			}
		});

		function save() {
			if (answered == 0) {
				saveAnswer('module-qc#-a', answer1);
				saveAnswer('module-qc#-b', answer2);

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer < 2) {
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
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
