<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'our-solar-system-qc4-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

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
		h1 { color: #735c00; }
		h2 { color: #5949a8; }
		form { clear: both; }
		
		.wrap { border-color: #D16824; }
		.bg { background-image: url(assets/11/bg.jpg); }

		.ac-custom input[type="checkbox"]:checked + label { color: #8565C6; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 3px solid #8565C6; height: 34px; width: 34px; margin-top: -20px;}
		.ac-custom svg path { stroke: #8565C6; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #8565C6; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		.q1-images, .q1-choice { text-align: center; }
		.q1-choice img { width: auto; }

		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?></h1>

						<div id="question1" class="grid_12">
							<h2><?php echo _("Question A. Which of the following is <span class='blink'>true</span>? Check <span class='blink'>all</span> that apply"); ?></h2>
							<div class="grid_6 q1-images"><img src="assets/11/q1.png" /><span><?php echo _("Figure A"); ?></span></div>
							<div class="grid_6 q1-images"><img src="assets/11/q2.png" /><span><?php echo _("Figure B"); ?></span></div>
							<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
								<ol>
									<li>
										<input id="a" type="checkbox" value="A">
										<label for="a"><span><?php echo _("In Figure A, it is summer time in the northern hemisphere."); ?></span></label>
									</li>
									<li>
										<input id="b" type="checkbox" value="B">
										<label for="b"><span><?php echo _("In Figure A, the Earth is closer to the Sun."); ?></span></label>
									</li>
									<li>
										<input id="c" type="checkbox" value="C">
										<label for="c"><span><?php echo _("In Figure B, it is summer time in the northern hemisphere."); ?></span></label>
									</li>
									<li>
										<input id="d" type="checkbox" value="D">
										<label for="d"><span><?php echo _("In Figure B, the Earth is closer to the Sun."); ?></span></label>
									</li>
								</ol>
							</form>
						</div>

					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1" class="grid_12">
							<h2><?php echo _("Question A. Which of the following is <span class='blink'>true</span>? Check <span class='blink'>all</span> that apply"); ?></h2>
							
							<p><?php echo _("You answered..."); ?></p>
							<div class="q1-choice"></div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Changing seasons..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('input[type=checkbox]').each(function() {
				if ($(this).is(':checked')) {
					$('.answer').append("<p>" + $(this).parent().find('span').text() + "</p>");

					answer += $(this).val();
				}
			});

			if (answer == 'AD') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("That’s right! It is summer time in the northern hemisphere when the North pole tilts toward the Sun, and the Earth is actually closer to the Sun when it is winter in the Northern Hemisphere."); ?></p>");
				answer == 'AD';

			} else if (answer == 'A') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! It is summer time in the northern hemisphere when the North pole tilts toward the Sun, and the Earth is actually closer to the Sun when it is winter in the Northern Hemisphere."); ?></p>");
				answer == 'A';

			} else if (answer == 'D') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! It is summer time in the northern hemisphere when the North pole tilts toward the Sun, and the Earth is actually closer to the Sun when it is winter in the Northern Hemisphere."); ?></p>");
				answer == 'D';

			} else if (answer == 'C') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! It is summer time in the northern hemisphere when the North pole tilts toward the Sun, and the Earth is actually closer to the Sun when it is winter in the Northern Hemisphere."); ?></p>");
				answer == 'C';

			} else if (answer == 'B') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! It is summer time in the northern hemisphere when the North pole tilts toward the Sun, and the Earth is actually closer to the Sun when it is winter in the Northern Hemisphere."); ?></p>");
				answer == 'B';
				
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope! It is summer time in the northern hemisphere when the North pole tilts toward the Sun, and the Earth is actually closer to the Sun when it is winter in the Northern Hemisphere."); ?></p>");
				answer == 'BC';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('our-solar-system-qc4-a', answer); // Correct answer: ABCD
				answered = 1;
			}
		}

		function clear() {
			$('.answer').html('');
			$('.feedback').html('');

			answer = '';
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:checkbox:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

				$('.back').fadeOut(); 

				$('.checkanswer').fadeOut(function() {
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#question').fadeOut(function() { 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "10.php#screen2";
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
