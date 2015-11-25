<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$smc->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $sac->getStudentAnswer($_SESSION['smid'], 'staying-alive-qc1-a');
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

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #006171; }
		p { margin: 0; font-size: 22px; }
		.wrap { border-color: #E6ABFF; }
		.bg { background-image: url(assets/5/bg.jpg); }
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
		}
		@media screen and (max-width: 725px) {
			li { line-height: 25px; }
			li span { font-size: 15px; }
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
							<h2><?php echo _("Question A. What is the most important thing to remember about the behavior of animal parents toward their young?"); ?></h2>
							<section>
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ol>
										<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("Animal parents are most concerned with their youngest offspring."); ?></span></label></li>
										<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("No individual offspring is as important as the survival of the group."); ?></span></label></li>
										<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("Most animal parents are unconcerned with their offspring."); ?></span></label></li>
										<li><input id="d1" name="q1" type="radio"><label for="d1"><span><?php echo _("Baby elk often fall prey to wolf packs."); ?></span></label></li>
									<ol>
								</form>
							</section>
						</div>

						<div id="question2">
							<h2><?php echo _("Question B. Click on the statement that is <span class='blink'>not</span> correct."); ?></h2>
							<section>
								<form class="ac-custom ac-radio ac-fill" autocomplete="off">
									<ol>
										<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("Some animals form complex family groups to help them survive."); ?></span></label></li>
										<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Animals use their instinctual and learned behaviors to survive."); ?></span></label></li>
										<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("All animals stay with their parents for a while to learn how to survive."); ?></span></label></li>
										<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("The group's survival is more important than the individual's ability to survive."); ?></span></label></li>
									<ol>
								</form>
							</section>
						</div>
					</div>

					<div id="answers">
						<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1">
							<h2><?php echo _("Question A. What is the most important thing to remember about the behavior of animal parents toward their young?"); ?></h2>	
							<div class="image"></div>
							<div class="placeholder">
								<p><?php echo _("You answered..."); ?></p>
								<div class="answer"></div>
								<div class="feedback"></div>
							</div>	
						</div>

						<div id="answer2">
							<h2><?php echo _("Question B. Click on the statement that is <span class='blink'>not</span> correct."); ?></h2>
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
		<a href="6.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer1 = '',
			answer2 = '';

			$('#questions').find('input[type=radio]').on('click', function() {
				var me = $(this).attr('id');
				
				if (me == 'a1') {
					$('#answer1').find('.answer').html('<p>'  + '<?php echo _("Animal parents are most concerned with their youngest offspring."); ?></p>');
					$('#answer1').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("No... Some parents never even see their offspring."); ?></p>');
					answer1 = 'A';
				}

				if (me == 'b1') {
					$('#answer1').find('.answer').html('<p>' + '<?php echo _("No individual offspring is as important as the survival of the group."); ?></p>');
					$('#answer1').find('.feedback').html('<p class="green"><img src="assets/correct.png"><?php echo _("Correct. In nature, survival of the group is much more important than survival of any individual."); ?></p>');
					answer1 = 'B';
				}

				if (me == 'c1') {
					$('#answer1').find('.answer').html('<p>' + '<?php echo _("Most animal parents are unconcerned with their offspring."); ?></p>');
					$('#answer1').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Actually, many parents are very involved with their offspring. Try again."); ?></p>');
					answer1 = 'C';
				}

				if (me == 'd1') {
					$('#answer1').find('.answer').html('<p>' + '<?php echo _("Baby elk often fall prey to wolf packs."); ?></p>');
					$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("This may happen, but it's not a key fact."); ?></p>"); //'
					answer1 = 'D'; 
				}
				
				if (me == 'a2') {
					$('#answer2').find('.answer').html('<p>'  + '<?php echo _("Some animals form complex family groups to help them survive."); ?></p>');
					$('#answer2').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Nope! Wolves and elephants live in family groups."); ?></p>');
					answer2 = 'A';
				}

				if (me == 'b2') {
					$('#answer2').find('.answer').html('<p>' + '<?php echo _("Animals use their instinctual and learned behaviors to survive."); ?></p>');
					$('#answer2').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Nope! Animals start out with their instincts and learn from parents or the environment how to survive."); ?></p>');
					answer2 = 'B';
				}

				if (me == 'c2') {
					$('#answer2').find('.answer').html('<p>' + '<?php echo _("All animals stay with their parents for a while to learn how to survive."); ?></p>');
					$('#answer2').find('.feedback').html('<p class="green"><img src="assets/correct.png"><?php echo _("Correct! Not all animals stay with their parents to learn from them. Most fish never even see their parents."); ?></p>');
					answer2 = 'C';
				}

				if (me == 'd2') {
					$('#answer2').find('.answer').html('<p>' + "<?php echo _("The group's survival is more important than the individual's ability to survive."); ?></p>");
					$('#answer2').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _("Nope! A group of animals focuses on creating offspring who can survive."); ?></p>');
					answer2 = 'D';
				}
			});

		function save() {

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('staying-alive-qc1-a', answer1); // Correct answer: 
				saveAnswer('staying-alive-qc1-b', answer2); // Correct answer:  

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
				document.location.href = "4.php#screen2";
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
