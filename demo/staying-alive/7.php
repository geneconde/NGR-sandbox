<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$smc->updateStudentLastscreen(7, $_SESSION['smid']);
		$sa = $sac->getStudentAnswer($_SESSION['smid'], 'staying-alive-qc2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
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

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #006171; }
		p { margin: 0; font-size: 22px; }
		.wrap { border-color: #E6ABFF; }
		.bg { background-image: url(assets/5/bg.jpg); overflow: hidden; }
		h2 { margin: 1% 0; }

		#questions { position: relative; z-index: 5; }
		#question1 ol { margin: 0 0 0 -60px; padding: 0; }
		#question1 li { padding: 3px 0; }
		#question1 .ac-custom { width: 100%; }
		#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 22px; }
		#question1 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
		#question1 .ac-custom input[type="radio"]:checked + label { color: #780046; }
		#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
		#question1 .ac-custom label::before { border: 2px solid #780046; }
		#question1 .ac-custom svg path { stroke: #780046; }
		#question1 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

		#question2 ol { margin: 0 0 0 -60px; padding: 0; }
		#question2 li { padding: 3px 0; }
		#question2 .ac-custom { width: 100%; }
		#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 22px; }
		#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
		#question2 .ac-custom input[type="radio"]:checked + label { color: #780046; }
		#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
		#question2 .ac-custom label::before { border: 2px solid #780046; }
		#question2 .ac-custom svg path { stroke: #780046; }
		#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

		#answers { display: none; }
		#answers p { text-align: center; }
		#buttons .next { display: none; }
		<?php if($language == "es_ES") { ?>
			#question2 .ac-custom label { font-size: 19px; }
		<?php } ?> 

		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			body, h2 { font-size: 22px; line-height: 28px; }
			#question1 li { line-height: 27px; }
			#question1 .ac-custom label::before, #question2 .ac-custom label::before { height: 33px; width: 33px; }
		}
		@media screen and (max-width: 885px) {
			li span { font-size: 18px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1><?php echo _("Quick Check #2"); ?></h1>

						<div id="question1">
							<h2><?php echo _("Question A. Choose the <span class='blink'>incorrect</span> statement."); ?></h2>
							<section>
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("Bears and wolves are important parts of the Yellowstone food web."); ?></span></label></li>
										<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("Bears and wolves never interact with one another."); ?></span></label></li>
										<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("Elk and bison serve as food sources for both bears and wolves."); ?></span></label></li>
										<li><input id="d1" name="q1" type="radio"><label for="d1"><span><?php echo _("Interactions between natural populations of animals can be very complex."); ?></span></label></li>
									<ol>
								</form>
							</section>
						</div>

						<div id="question2">
							<h2><?php echo _("Question B. During the period with few wolves, aspen tree growth was suffering at the same time as elk populations were growing. Based on what you learned about the complex ecosystem of the Yellowstone National Park, which statement can be inferred from the effects of reintroducing wolves to the ecosystem?"); ?></h2>
							<section>
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("An animal predator helped to control the amount of damage done to plants the predator doesn't even eat."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Wolves were eating aspen bark to the point where the trees were having difficulty recovering each year."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("Increased elk populations led to less damage to trees and other types of plants."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("All of the above"); ?></span></label></li>
									<ol>
								</form>
							</section>
						</div>
					</div>

					<div id="answers">
						<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2><?php echo _("Question A. Choose the <span class='blink'>incorrect</span> statement."); ?></h2>	
							<div class="image"></div>
							<div class="placeholder">
								<p><?php echo _("You answered..."); ?></p>
								<div class="answer"></div>
								<div class="feedback"></div>
							</div>	
						</div>

						<div id="answer2">
							<h2><?php echo _("Question B. During the period with few wolves, aspen tree growth was suffering at the same time as elk populations were growing. Based on what you learned about the complex ecosystem of the Yellowstone National Park, which statement can be inferred from the effects of reintroducing wolves to the ecosystem?"); ?></h2>
							<div class="image"></div>
							<div class="placeholder">
								<p><?php echo _("You answered..."); ?></p>
								<div class="answer"></div>
								<div class="feedback"></div>
							</div>	
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Tracing changes in Yellowstone..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';
			$('#questions').find('input[type=radio]').on('click', function() {
				var me = $(this).attr('id');
				
				if (me == 'a1') {
					$('#answer1').find('.answer').html('<p><?php echo _("Bears and wolves are important parts of the Yellowstone food web."); ?></p>');
					$('#answer1').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Sorry. This is true: bears and wolves are both very important."); ?></p>');
					answer1 = 'A';
				}

				if (me == 'b1') {
					$('#answer1').find('.answer').html('<p><?php echo _("Bears and wolves never interact with one another."); ?></p>');
					$('#answer1').find('.feedback').html('<p class="green"><img src="assets/correct.png"><?php echo _("Correct! Bears and wolves compete for many of the same food sources."); ?></p>');
					answer1 = 'B';
				}

				if (me == 'c1') {
					$('#answer1').find('.answer').html('<p><?php echo _("Elk and bison serve as food sources for both bears and wolves."); ?></p>');
					$('#answer1').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Nope. Both bears and wolves hunt elk and bison."); ?></p>');
					answer1 = 'C';
				}

				if (me == 'd1') {
					$('#answer1').find('.answer').html('<p><?php echo _("Interactions between natural populations of animals can be very complex."); ?></p>');
					$('#answer1').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("No... Interactions are often very complex."); ?></p>');
					answer1 = 'D';
				}
				
				if (me == 'a2') {
					$('#answer2').find('.answer').html('<p><?php echo _("An animal predator helped to control the amount of damage done to plants the predator doesn\'t even eat."); ?></p>'); //'
					$('#answer2').find('.feedback').html('<p class="green"><img src="assets/correct.png"><?php echo _("Correct. When wolves returned to the ecosystem, they reduced the population of elk that was destroying the aspen tree."); ?></p>');
					answer2 = 'A';
				}

				if (me == 'b2') {
					$('#answer2').find('.answer').html('<p><?php echo _("Wolves were eating aspen bark to the point where the trees were having difficulty recovering each year."); ?></p>');
					$('#answer2').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("No, the elk were actually eating aspen bark to the point where the trees were having difficulty recovering each year."); ?></p>');
					answer2 = 'B';
				}

				if (me == 'c2') {
					$('#answer2').find('.answer').html('<p><?php echo _("Increased elk populations led to less damage to trees and other types of plants."); ?></p>');
					$('#answer2').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("No, reduced elk populations led to less damage to trees and other types of plants."); ?></p>');
					answer2 = 'C';
				}

				if (me == 'd2') {
					$('#answer2').find('.answer').html('<p><?php echo _("All of the above"); ?></p>');
					$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("No, an animal predator (wolf) helped to control the amount of damage done to plants (aspen trees) the predator doesn't even eat."); ?></p>"); //'
					answer2 = 'D';
				}
			});

		function save() {

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('staying-alive-qc2-a', answer1); // Correct answer: 
				saveAnswer('staying-alive-qc2-b', answer2); // Correct answer:  

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;
			
			if (checkAnswer < 2) {
				alert("<?php echo _('Please select your answers.'); ?>");
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
				document.location.href = "6.php#screen3";
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

	<script src="js/svgcheckbx.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
