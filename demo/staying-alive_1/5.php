<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #006171; }
.wrap { border-color: #E6ABFF; }
.bg { background-image: url(images/5/bg.jpg); }

h2 { margin: 1% 0; }

#question1 ol { margin: 0 0 0 20px; padding: 0; }
#question1 li { padding: 10px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question1 .ac-custom input[type="radio"]:checked + label { color: #780046; }
#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question1 .ac-custom label::before { border: 2px solid #780046; }
#question1 .ac-custom svg path { stroke: #780046; }
#question1 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question2 ol { margin: 0 0 0 20px; padding: 0; }
#question2 li { padding: 10px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #780046; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #780046; }
#question2 .ac-custom svg path { stroke: #780046; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answers { display: none; }
#answers p { text-align: center; }
#answer2 { margin-top: 25px; }
#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	#question2 .ac-custom label { font-size: 22px; }
<?php } ?> 
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>

				<div id="question1" class="clear">
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
				
				<div id="question2" class="clear">
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
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. What is the most important thing to remember about the behavior of animal parents toward their young?"); ?></h2>	
					<div class="clear">
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<div class="answer"></div>
							<div class="feedback"></div>
						</div>						
					</div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Click on the statement that is <span class='blink'>not</span> correct."); ?></h2>	
					<div class="clear">
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

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');
		
		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>'  + '<?php echo _("Animal parents are most concerned with their youngest offspring."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No... Some parents never even see their offspring."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("No individual offspring is as important as the survival of the group."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. In nature, survival of the group is much more important than survival of any individual."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Most animal parents are unconcerned with their offspring."); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Actually, many parents are very involved with their offspring. Try again."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Baby elk often fall prey to wolf packs."); ?></p>');
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("This may happen, but it's not a key fact."); ?></p>"); //'
			ans1 = 'D'; 
		}
		
		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>'  + '<?php echo _("Some animals form complex family groups to help them survive."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Wolves and elephants live in family groups."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Animals use their instinctual and learned behaviors to survive."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Animals start out with their instincts and learn from parents or the environment how to survive."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("All animals stay with their parents for a while to learn how to survive."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Not all animals stay with their parents to learn from them. Most fish never even see their parents."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>' + "<?php echo _("The group's survival is more important than the individual's ability to survive."); ?></p>");
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! A group of animals focuses on creating offspring who can survive."); ?></p>');
			ans2 = 'D';
		}
	});

	$('.check-toggle').click(function(){
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 2) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('staying-alive-qc1-a', ans1);
			saveAnswer('staying-alive-qc1-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "4.php#screen2";
		} else if ($('#answers').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
