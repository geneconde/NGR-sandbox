<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$smc->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $sac->getStudentAnswer($_SESSION['smid'], 'staying-alive-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Staying Alive"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/svgcomponent.css" />

	<script src="js/save-answer.js"></script>
	
	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.wiggle.min.js"></script>
	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #3986C9; }
		
		.wrap { border-color: #000; }
		.bg { background-image: url(assets/18/bg.jpg); }

		#question li { padding: 8px 0; }

		.ac-custom { width: 100%; padding: 0 !important; }
		.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
		.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
		.ac-custom input[type="radio"]:checked + label { color: #780046; }
		.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
		.ac-custom label::before { border: 2px solid #780046; }
		.ac-custom svg path { stroke: #780046; }
		.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

		#diagram { background-image: url("assets/18/diagram.jpg"); width: 470px; height: 320px; margin: 0 auto; }
		#geo { text-align: center; padding-top: 18px; }
		#hydro { float: left; padding: 72px 0 0 25px; }
		#atmo { float: right; padding: 72px 28px 0 0; }
		#bio { bottom: 20px; padding: 120px 0 0 74px; width: 200px; float: left; }
		#anthro { float: left; padding: 118px 0 0 85px; }

		#answer { display: none; }
		#answer p { text-align: center; }

		.answer span { display: block; }
		.feedback { font-size: 24px; text-align: center; }
		.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1><?php echo _("Quiz Question #3"); ?></h1>
						<h2><?php echo _("Which of the following is the <span class='blink'>best</span> definition of biodiversity?"); ?></h2>

						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ul>
								<li><input id="a" type="radio" name="q"><label for="a"><?php echo _("The population of any particular species in an area."); ?></label></li>
								<li><input id="b" type="radio" name="q"><label for="b"><?php echo _("All of the plants and animals in all ecosystems."); ?></label></li>
								<li><input id="c" type="radio" name="q"><label for="c"><?php echo _("The population of all plants in an area."); ?></label></li>
								<li><input id="d" type="radio" name="q"><label for="d"><?php echo _("The population of all animals in an area."); ?></label></li>
							</ul>
						</form>
					</div>

					<div id="answer">
						<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>
						<div class="feedback center"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Reporting about biodiversity..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		$('#question').find('input[type=radio]').on('click', function() {
			var radio = $(this);

			if (radio.attr('id') == 'a') {
				$('#answer').find('.answer').html('<?php echo _("The population of any particular species in an area."); ?>');
				$('#answer').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Not this one... Think bigger."); ?></p>');
				answer = 'A';
			}

			if (radio.attr('id') == 'b') {
				$('#answer').find('.answer').html('<?php echo _("All of the plants and animals in all ecosystems."); ?>');
				$('#answer').find('.feedback').html('<p class="green"><img src="assets/correct.png"><?php echo _("Correct! Biodiversity is everything alive!"); ?></p>');
				answer = 'B';
			}

			if (radio.attr('id') == 'c') {
				$('#answer').find('.answer').html('<?php echo _("The population of all plants in an area."); ?>');
				$('#answer').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Sorry... Not just plants..."); ?></p>');
				answer = 'C';
			}

			if (radio.attr('id') == 'd') {
				$('#answer').find('.answer').html('<?php echo _("The population of all animals in an area."); ?>');
				$('#answer').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Ummm...  No... Not just animals."); ?></p>');
				answer = 'D';
			}
		});

		function save() {

			console.log(answer);

			if (answered == 0) {
				saveAnswer('staying-alive-qq3-a', answer); // Correct answer: 
				answered = 1;
			}
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
				document.location.href = "17.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#answer').fadeOut(function() {
					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});
	</script>

	<script src="js/svgcheckbx.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
