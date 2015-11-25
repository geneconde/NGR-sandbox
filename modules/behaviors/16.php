<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(16, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'behaviors-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behavior'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/nlform.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #1F7FB1; }
.wrap { border-color: #5fbff1; }
.bg { background-image: url(images/16/bg.jpg); }

#nl-form { }
#nl-form a { border-bottom: 0; background: #1F7AC2; color: #fff; padding: 0px 15px; text-align: center; margin: 0 5px; border-radius: 5px; }
.nl-field ul { background: #1F7AC2; }
.nl-field li { font-size: 24px; color: #fff !important; }
.nl-dd ul li.nl-dd-checked { background: #0E4886 !important; color: #fff!important; }
.nl-field-toggle, .nl-form input, .nl-form select { border-bottom: 0;color:black;background: #5193ff;padding:5px;border-radius: 5px; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }

#a1 span.a, #a1 span.b, #a3 span.a, #a3 span.b { color: #754F0A; }

<?php if ($language == 'es_ES'): ?>
	.nl-field { margin-bottom: 10px; }
<?php endif; ?>
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
					<div>
					<h2><?php echo _("Complete the sentence by selecting the <span class='blink'>correct</span> terms."); ?></h2>
					<form id="nl-form" class="nl-form">
							<p id="q1"><?php echo _("Behaviors can be divided into those which are,"); ?>
								<select class="a">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="innate"><?php echo _("innate"); ?></option>
									<option value="learned"><?php echo _("learned"); ?></option>
									<option value="reflexes"><?php echo _("reflexes"); ?></option>
									<option value="instincts"><?php echo _("instincts"); ?></option>
								</select> 
								<?php echo _("meaning they are present from"); ?>
								<?php echo _("birth, and those that are,"); ?>
								<select class="b">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="innate"><?php echo _("innate"); ?></option>
									<option value="learned"><?php echo _("learned"); ?></option>
									<option value="reflexes"><?php echo _("reflexes"); ?></option>
									<option value="instincts"><?php echo _("instincts"); ?></option>
								</select>
								<?php echo _("or must be developed after birth."); ?>
							</p>
							<!--<p id="q2">
							</p>-->
							<p id="q3"><?php echo _("Innate behaviors are related to survival needs and include"); ?>
								<select class="a">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="innate"><?php echo _("innate"); ?></option>
									<option value="learned"><?php echo _("learned"); ?></option>
									<option value="reflexes"><?php echo _("reflexes"); ?></option>
									<option value="instincts"><?php echo _("instincts"); ?></option>
								</select>
								<?php echo _("and"); ?>
								<select class="b">
									<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
									<option value="innate"><?php echo _("innate"); ?></option>
									<option value="learned"><?php echo _("learned"); ?></option>
									<option value="reflexes"><?php echo _("reflexes"); ?></option>
									<option value="instincts"><?php echo _("instincts"); ?></option>
								</select>.
							</p>
	
							<div class="nl-overlay"></div>
						</form>
				</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div>
					<p><?php echo _("You answered..."); ?></p>
					<!-- <div class="feedback center"></div> -->
					<p id="a1">
						<span class="feedback1"></span>
						<?php echo _("Behaviors can be divided into those which are,"); ?>
						<span class="a"></span>
						<?php echo _("meaning they are present from"); ?>

						<span class="feedback2"></span>
						<?php echo _("birth, and those that are,"); ?>
						<span class="b"></span>
						<?php echo _("or must be developed after birth."); ?>
					</p>
					<!--<p id="a2">
					</p>-->
					<p id="a3">
						<span class="feedback"></span>
						<?php echo _("Innate behaviors are related to survival needs and include"); ?>
						<span class="a"></span>
						<?php echo _("and"); ?>
						<span class="b"></span>
						.
					</p>
					<div id="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _("Check Answer"); ?>"></a>
		<a href="17.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Selecting answers..."); ?></strong></section></section>

	<script>

	var nlform = new NLForm( document.getElementById( 'nl-form' ) );

	var back = $('img.back-toggle'),
	next = $('img.next-toggle'),
	check = $('img.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>;

	var	q1 = $('#question').find('#q1'),
		q2 = $('#question').find('#q2'),
		q3 = $('#question').find('#q3');

	var a1 = $('#answer').find('#a1'),
		a2 = $('#answer').find('#a2'),
		a3 = $('#answer').find('#a3');


	function save() {
		var ans1, ans2, ans3, ans4;

		a1.find('.a').text(q1.find('.a option:selected').text());
		a1.find('.b').text(q1.find('.b option:selected').text());
		a3.find('.a').text(q3.find('.a option:selected').text());
		a3.find('.b').text(q3.find('.b option:selected').text());

		ans1 = q1.find('.a').val();
		ans2 = q1.find('.b').val();

		ans3 = q3.find('.a').val() + ',' + q3.find('.b').val();

		console.log(ans3);

		if (q3.find('.a').val() == 'instincts' && q3.find('.b').val() == 'reflexes') {
			q3.find('.a').val('reflexes');
			q3.find('.b').val('instincts');
		}

		ans3 = q3.find('.a').val() + ',' + q3.find('.b').val();

		console.log(ans3);

		// A
		if (q1.find('.a').val() == 'innate') {
				a1.find('.feedback1').html('<img src="images/others/correct.png">');
			} else {
				a1.find('.feedback1').html('<img src="images/others/wrong.png">');
			}

		// B
		if (q1.find('.b').val() == 'learned') {
				//a1.find('.feedback2').html('<img src="images/others/correct.png">');
			} else {
				//a1.find('.feedback2').html('<img src="images/others/wrong.png">');
			}

		// C
		if ((q3.find('.a').val() == 'reflexes' && q3.find('.b').val() == 'instincts') ||
			 (q3.find('.a').val() == 'instincts' && q3.find('.b').val() == 'reflexes')) {
				a3.find('.feedback').html('<img src="images/others/correct.png">');
			} else {
				a3.find('.feedback').html('<img src="images/others/wrong.png">');
			}
				

		//Feedback

			if ((q1.find('.a').val() == 'innate') && 
				(q1.find('.b').val() == 'learned') && (
				(q3.find('.a').val() == 'reflexes' && q3.find('.b').val() == 'instincts') ||
				(q3.find('.a').val() == 'instincts' && q3.find('.b').val() == 'reflexes') )
				
				) {
					$('#feedback').html('<p class="center green"><?php echo _("Correct. There are innate and learned behaviors. Innate are those behaviors which are not taught and have to do with survival skills. They include reflexes (automatic responses to stimulus) and instincts. Other behaviors are learned from parents or through hands-on experience."); ?>');
				} else {
					$('#feedback').html('<p class="center red"><?php echo _("Not quite. There are innate and learned behaviors. Innate are those behaviors which are not taught and have to do with survival skills. They include reflexes (automatic responses to stimulus) and instincts. Other behaviors are learned from parents or through hands-on experience."); ?>');
				}

			if (answered == 0) {
				saveAnswer('behaviors-qq3-a', ans1);
				saveAnswer('behaviors-qq3-b', ans2);
				saveAnswer('behaviors-qq3-c', ans3);

				answered = 1;
			}	
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "15.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
			}); 
		}
	});
	
	check.click(function() { 
		var noAnswer = false;

			$('#nl-form').find('select').each(function() {
				if ($(this).val() == '') noAnswer = true;
			});

		if (noAnswer) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){
				answer.fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
