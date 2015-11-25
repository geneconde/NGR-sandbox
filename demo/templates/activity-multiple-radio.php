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

		.items li { padding: 12px 0; }

		.ac-custom input[type="radio"]:checked + label { color: #777; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		.ac-custom svg path { stroke: #777; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		.answer .items img { width: auto; margin: 0; vertical-align: auto; padding-right: 10px; }

		html[dir=rtl] .answer .items img { padding-left: 10px; }

		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?></h1>
						<h2 class="grid_12" ><?php echo _("Question"); ?></h2>

						<div class="container">
							<div class="items grid_3">
								<ul>
									<li id="a"><?php echo _("A"); ?></li>
									<li id="b"><?php echo _("B"); ?></li>
									<li id="c"><?php echo _("C"); ?></li>
								</ul>
							</div>

							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">

								<div class="a grid_3">
									<ol>
										<li><input id="a1" name="q1" type="radio" value="A"><label for="a1"><span><?php echo _("A"); ?></span></label></li>
										<li><input id="a2" name="q2" type="radio" value="A"><label for="a2"><span><?php echo _("A"); ?></span></label></li>
										<li><input id="a3" name="q3" type="radio" value="A"><label for="a3"><span><?php echo _("A"); ?></span></label></li>
									<ol>
								</div>

								<div class="b grid_3">
									<ol>
										<li><input id="b1" name="q1" type="radio" value="B"><label for="b1"><span><?php echo _("B"); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio" value="B"><label for="b2"><span><?php echo _("B"); ?></span></label></li>
										<li><input id="b3" name="q3" type="radio" value="B"><label for="b3"><span><?php echo _("B"); ?></span></label></li>
									<ol>
								</div>

								<div class="c grid_3">
									<ol>
										<li><input id="c1" name="q1" type="radio" value="C"><label for="c1"><span><?php echo _("C"); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio" value="C"><label for="c2"><span><?php echo _("C"); ?></span></label></li>
										<li><input id="c3" name="q3" type="radio" value="C"><label for="c3"><span><?php echo _("C"); ?></span></label></li>
									<ol>
								</div>

							</form>

							<div class="clear"></div>
						</div>
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="answer"></div>
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
			answer2 = '',
			answer3 = '';

		function save() {

			$('.answer').html($('.container').html());

			answer1 = $('.a input:radio:checked').val();
			answer2 = $('.b input:radio:checked').val();
			answer3 = $('.c input:radio:checked').val();

			if (answer1 == 'A')
				$('.answer #a').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #a').prepend("<img src='assets/wrong.png'>");

			if (answer2 == 'B')
				$('.answer #b').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #b').prepend("<img src='assets/wrong.png'>");

			if (answer3 == 'C')
				$('.answer #c').prepend("<img src='assets/correct.png'>");
			else
				$('.answer #c').prepend("<img src='assets/wrong.png'>");

			console.log(answer1);
			console.log(answer2);
			console.log(answer3);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer1); // Correct answer: A
				saveAnswer('module-qq#-a', answer2); // Correct answer: B
				saveAnswer('module-qq#-a', answer3); // Correct answer: C
				answered = 1;
			}
		}

		function clear() {
			//$('.answer .items').find('img').remove();
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

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
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "#";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answer').fadeOut(function() {

					clear();

					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
