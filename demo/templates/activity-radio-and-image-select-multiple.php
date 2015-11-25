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
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #000; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/#/bg.jpg); }

		.ac-custom input[type="radio"]:checked + label { color: #777; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { background-color: #777; height: 20px; width: 20px; margin-top: -11px; }
		.ac-custom svg path { stroke: #777; }
		.ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { background-color: #777; height: 20px; width: 20px; margin-top: -11px; }
		html[dir=rtl] .ac-custom svg { right: 3px; left: 98%; }

		#question2 input[type="checkbox"] { display: none; }
		#question2 input[type="checkbox"] + label img { border: 4px solid transparent; border-radius: 10px; cursor: pointer; -webkit-transition: all .3s ease; transition: all .3s ease; } 
		#question2 input[type="checkbox"]:checked + label img { border: 4px solid #777; border-radius: 10px; -webkit-transition: all .3s ease; transition: all .3s ease; backface-visibility: hidden; }
		#question2 span { color: #777; display: block; transition: all .3s ease; text-align: center !important; cursor: pointer; backface-visibility: hidden; }

		#answer2 .answer { text-align: center; }
		#answer2 .answer p { width: 23.0%; display: inline-block; margin: auto 1%; }
		#answer2 .answer span { display: block; } 

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
								<form class="ac-custom ac-radio ac-circle" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("A"); ?></span></label></li>
										<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("B"); ?></span></label></li>
										<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("C"); ?></span></label></li>
										<li><input id="d1" name="q1" type="radio" value="D"><label for="d1"><span><?php echo _("D"); ?></span></label></li>
									<ol>
								</form>
							</div>
						</div>

						<div id="question2">
							<h2 class="grid_12"><?php echo _("Question B. "); ?></h2>

							<div class="grid_3">
								<input type="checkbox" id="a2" value="A">
								<label for="a2"><img src="http://420placehold.it/tech/600-600-normal"><span><?php echo _("A"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="checkbox" id="b2" value="B">
								<label for="b2"><img src="http://420placehold.it/tech/600-600-random"><span><?php echo _("B"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="checkbox" id="c2" value="C">
								<label for="c2"><img src="http://420placehold.it/tech/600-600-sepia"><span><?php echo _("C"); ?></span></label>
							</div>

							<div class="grid_3">
								<input type="checkbox" id="d2" value="D">
								<label for="d2"><img src="http://420placehold.it/tech/600-600-bw"><span><?php echo _("D"); ?></span></label>
							</div>

							<div class="clear"></div>
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

							<div class="answer clearfix grid_12"></div>
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

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer1 = 0,
			checkAnswer2 = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('#answer1 .answer').html($('input:radio:checked').parent().find('span').text());

			answer1 = $('input:radio:checked').val();

			if (answer1 == 'A')
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct"); ?></p>");

			if (answer1 == 'B')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

			if (answer1 == 'C')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

			if (answer1 == 'D')
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");

			$('input[type=checkbox]').each(function() {
				if ($(this).is(':checked')) {
					$('#answer2 .answer').append("<p>" + $(this).parent().find('label').html() + "</p>");

					answer2 += $(this).val();
				}
			});

			if (answer2 == 'ABCD') {
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct"); ?></p>");
			} else {
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Wrong"); ?></p>");
			}

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('module-qc#-a', answer1); // Correct answer: A
				saveAnswer('module-qc#-b', answer2); // Correct answer: ABCD

				answered = 1;
			}
		}

		function clear() {
			$('#answer2 .answer').html('');
			$('#answer2 .feedback').html('');

			answer2 = '';
		}

		$('.checkanswer').click(function() {
			checkAnswer1 = $('input:radio:checked').length;
			checkAnswer2 = $('input:checkbox:checked').length;

			if (checkAnswer1 == 0 || checkAnswer2 == 0) {
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
