<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'electric-charge-charge-qc3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Charge"); ?></title>

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
		h1 { color: #8200d4; }
		h2 { color: #0090ff; }
		
		.wrap { border-color: #94E081; }
		.bg { background-image: url(assets/11/bg.jpg); }

		.ac-custom input[type="checkbox"]:checked + label { color: #35B5C0; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #35B5C0; height: 34px; width: 34px; margin-top: -18px;}
		.ac-custom svg path { stroke: #35B5C0; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #35B5C0; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#answers p {margin-top:-4px;}
		#buttons .next { display: none; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
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
							<h2><?php echo _("Question A. Check <span class='blink'>ALL</span> that apply. The brilliant Northern Lights are the result of gases in the Earth's upper atmosphere interacting with..."); ?></h2>
							<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
								<ol>
									<li><input id="a1" type="checkbox" value="A"><label for="a1"><span><?php echo _("Protons"); ?></span></label></li>
									<li><input id="b1" type="checkbox" value="B"><label for="b1"><span><?php echo _("Electrons"); ?></span></label></li>
									<li><input id="c1" type="checkbox" value="C"><label for="c1"><span><?php echo _("Neutrons"); ?></span></label></li>
								</ol>
							</form>
						</div>

						<div id="question2" class="grid_12">
							<h2><?php echo _("Question B. Check <span class='blink'>ALL</span> that apply. The Auroras are most easily seen near..."); ?></h2>
							<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
								<ol>
									<li><input id="a2" type="checkbox" value="A"><label for="a2"><span><?php echo _("North Pole"); ?></span></label></li>
									<li><input id="b2" type="checkbox" value="B"><label for="b2"><span><?php echo _("South Pole"); ?></span></label></li>
									<li><input id="c2" type="checkbox" value="C"><label for="c2"><span><?php echo _("Equator"); ?></span></label></li>
								</ol>
							</form>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1" class="grid_12">
							<h2><?php echo _("Question A. Check <span class='blink'>ALL</span> that apply. The brilliant Northern Lights are the result of gases in the Earth's upper atmosphere interacting with..."); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer1"></p>

							<div class="feedback"></div>
						</div>

						<div id="answer2" class="grid_12">
							<h2><?php echo _("Question B. Check <span class='blink'>ALL</span> that apply. The Auroras are most easily seen near..."); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer2"></p>

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
			checkAnswer2 = 0,
			answer1 = '',
			answer2 = '';

		function save() {

			$('#question1 input[type=checkbox]').each(function() {
				if ($(this).is(':checked')) {
					
					$('.answer1').append("<p>" + $(this).parent().find('span').text() + "</p>");

					answer1 += $(this).val();
				}
			});

			if (answer1 == 'AB') {
				$('#answer1 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes!  Eruptions on the Sun send streams of charged particles in all directions.  Protons and Electrons interact with the Earth’s magnetic field, and produce the Aurora displays."); ?></p>"); //'
			} else if (answer1 == 'C') { 
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. Neutrons do not carry electric charge, so they don't interact with the Earth's magnetic field."); ?></p>");
			} else if (answer1 == 'A' || answer1 == 'B') {
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Almost! Both electrons and protons are trapped by the Earth's magnetic field. Both charges play a part in the brilliant Auroras."); ?></p>"); //'
			} else {
				$('#answer1 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope.  Neutrons do not carry electric charge, so they don’t interact with the Earth’s magnetic field."); ?></p>");
			}

			$('#question2 input[type=checkbox]').each(function() {
				if ($(this).is(':checked')) {
					
					$('.answer2').append("<p>" + $(this).parent().find('span').text() + "</p>");

					answer2 += $(this).val();
				}
			});

			if (answer2 == 'AB') {
				$('#answer2 .feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Way to go! The Earth's magnetic field bends towards the surface at the Poles. This results in charged particles spiraling down towards the upper atmosphere and producing the Auroras."); ?></p>"); //'
			} else if (answer2 == 'C') {
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. The magnetic field lines near the equator run parallel to the Earth's surface, and charged particles in that region do not reach the upper atmosphere."); ?></p>"); //'
			} else if (answer2 == 'A' || answer2 == 'B') {
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. The Aurora are visible in both polar regions. In the northern hemisphere, they're called the Aurora Borealis, and in the southern hemisphere they're called the Aurora Australis."); ?></p>");
			} else {
				$('#answer2 .feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope.  The magnetic field lines near the equator run parallel to the Earth’s surface, and charged particles in that region do not reach the upper atmosphere."); ?></p>");
			}

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('electric-charge-qc3-a', answer1); // Correct answer: 
				saveAnswer('electric-charge-qc3-b', answer2); // Correct answer:  

				answered = 1;
			}
		}

		function clear() {
			$('.answer1').html('');
			$('.answer2').html('');
			$('#answer1 .feedback').html('');
			$('#answer2 .feedback').html('');

			answer1 = '';
			answer2 = '';
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('#question1 input:checkbox:checked').length;
			checkAnswer2 = $('#question2 input:checkbox:checked').length;

			if (checkAnswer == 0 || checkAnswer2 == 0) {
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
