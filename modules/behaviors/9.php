<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(9, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'behaviors-qc3-a');
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
h1 { color: #1F7FB1; }
.wrap { border-color: #5fbff1; }
.bg { background-image: url(images/9/bg.jpg); }

h2 { margin-bottom: 10px; }

#question1 .ac-custom li { padding: 6px 0; }
#question1 .ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
#question1 .ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
#question1 .ac-custom input[type="checkbox"]:checked + label { color: #0C68B1; }
#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question1 .ac-custom label::before { border: 2px solid #0C68B1; }
#question1 .ac-custom svg path { stroke: #0C68B1; }
#question1 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question2 ul { margin: 20px auto 0; list-style: none; padding: 0; }
#question2 li { display:inline-block; width: 200px; margin-right: 10px; }
#question2 li:last-child { margin-right: 0; }
#question2 input[type=radio] { display: none; }
#question2 label { font-size: 18px; display: block; text-align: center; cursor: pointer; width: 200px; }
#question2 input[type="radio"] + label img { border: 4px solid #ddd; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 200px; }
#question2 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #0C68B1; -webkit-backface-visibility: hidden; }
#question2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; text-align: center; font-size:20px; }
#question2 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #0C68B1; -webkit-backface-visibility: hidden;  ;}
#question2 input[type="radio"] + label { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; height: 195px;}

#answers { display: none; }
#answers p { text-align: center; font-size: 20px; }
#answers h2 { font-size: 20px; }

#answer2 .image { float: left; margin: 0 20px 0 0; }
#answer2 .image img { border: 4px solid #ddd; }
#answer2 .placeholder { float: left; margin-top: 0; width: 552px; }
#answer2 p { text-align: left; }
#answer2 .clear { width: 790px; margin: 0 auto; }
#answer2 .feedback { margin: 0; }

#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] #question1 .ac-cross input[type="checkbox"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question1 .ac-cross label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] #question1 .ac-cross svg { right: 36px; margin-top: -6px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question1 li label { text-align: right; }
html[dir="rtl"] #question1 ul { float: right; }
html[dir="rtl"] #answer2 .image { float: right; margin: 0 0 0 20px; }
html[dir="rtl"] #answer1 p { text-align: center; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Mark <span class='blink'>all</span> of the following that contribute to learned behavior."); ?></h2>	
				<section>
					<form class="ac-custom ac-checkbox ac-cross" autocomplete="off">
						<ol>
							<li><input id="a1" name="q" type="checkbox">
								<label for="a1"><span><?php echo _("Environment"); ?></span></label>
							</li>
							<li><input id="b1" name="q" type="checkbox">
								<label for="b1"><span><?php echo _("Survival Needs"); ?></span></label>
							</li>
							<li><input id="c1" name="q" type="checkbox">
								<label for="c1"><span><?php echo _("Reflexes"); ?></span></label>
							</li>
							<li><input id="d1" name="q" type="checkbox">
								<label for="d1"><span><?php echo _("Inherited Traits"); ?></span></label>
							</li>
						<ol>
					</form>
				</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Which of the following is <span class='blink'>not</span> a characteristic behavior of birds that increases their likelihood of reproduction?"); ?></h2>	
					<ul class="clearfix">
						<li>
							<input type="radio" id="a2" name="q1">
							<label for="a2"><img src="images/9/9b1.jpg">
								<span><?php echo _("Singing"); ?></span>
							</label>
						</li>
						<li>
							<input type="radio" id="b2" name="q1">
							<label for="b2"><img src="images/9/9b2.jpg">
								<span><?php echo _("Eye color"); ?></span>
							</label>
						</li>
						<li>
							<input type="radio" id="c2" name="q1">
							<label for="c2"><img src="images/9/9b3.jpg">
								<span><?php echo _("Catching food"); ?></span>
							</label>
						</li>
						<li>
							<input type="radio" id="d2" name="q1">
							<label for="d2"><img src="images/9/9b4.jpg">
								<span><?php echo _("Feather demonstration"); ?></span>
							</label>
						</li>
					</ul>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Mark <span class='blink'>all</span> of the following that contribute to learned behavior."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Which of the following is <span class='blink'>not</span> a characteristic behavior of birds that increases their likelihood of reproduction?"); ?></h2>	
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

	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _("Check Answer"); ?>"></a>
		<a href="10.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = <?php echo $answered; ?>, checkAnswer = 0;
	var a1 = $('#a1'),
		b1 = $('#b1'),
		c1 = $('#c1'),
		d1 = $('#d1');

	$('#question1').find('input[type=checkbox]').on('click', function() {
		var me = $(this);
		/* Question 1 */
		if (me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').append('<p class="a"><?php echo _("Environment"); ?></p>');
			ans1 = 'A';
		} else if ( ! me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').find('p.a1').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').append('<p class="b1"><?php echo _("Survival Needs"); ?></p>');
			ans1 += 'B';
		} else if ( ! me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').find('p.b1').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').append('<p class="c1"><?php echo _("Reflexes"); ?></p>');
			ans1 += 'C';
		} else if ( ! me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').find('p.c1').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').append('<p class="d1"><?php echo _("Inherited Traits"); ?></p>');
			ans1 += 'D';
		} else if ( ! me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').find('p.d1').remove(); 
		}

		if (a1.is(':checked') == true && b1.is(':checked') == true && c1.is(':checked') == false && d1.is(':checked') == true) {
			//$('#answer1').find('.answer').append('<p>Falcons have a streamlined shape to fly faster.</p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Great! Learned behavior depends on the environment the animal lives in, survival needs, and inherited traits. In the case of a bird, learning to sing is a behavior important for survival. The bird has inherited the ability to sing. And depending on the kind of bird it is, it will pick up clues from the environment and learn to sing the song it needs for its survival."); ?></p>');
		} else {
			//$('#answer1').find('.answer').append('<p>Falcons have a streamlined shape to fly faster.</p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. Learned behavior depends on the environment the animal lives in, survival needs, and inherited traits. In the case of a bird, learning to sing is a behavior important for survival. The bird has inherited the ability to sing. And depending on the kind of bird it is, it will pick up clues from the environment and learn to sing the song it needs for its survival."); ?></p>');
		}
	});

	$('#question2').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			$('#answer2').find('.image').html('<img src="images/9/9b1.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Singing"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, being able to sing is an important quality that would increase the likelihood of reproduction for birds."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.image').html('<img src="images/9/9b2.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Eye color"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. The color of a bird's eyes is less important compared to its ability to sing, catch food, and attract mates by feather demonstrations."); ?></p>");
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.image').html('<img src="images/9/9b3.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Catching food"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, finding food is a survival skill that would increase mating chances."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.image').html('<img src="images/9/9b4.jpg">');
			$('#answer2').find('.answer').html('<p><?php echo _("Feather demonstration"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, birds compete for the chance to mate. Feather demonstrations are one way they do this."); ?></p>');
			ans2 = 'D';
		}
	});

	$('img.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;
		var checkAnswer2 = $('input:checkbox:checked').length;
		if (checkAnswer < 1 || checkAnswer2 < 1) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('img.check-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('behaviors-qc3-a', ans1);
			saveAnswer('behaviors-qc3-b', ans2);
			
			answered = 1;
		}
	}

	$('img.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "8.php#screen2";
		} else if ($('#answers').is(':visible')) {
			$('img.next-toggle').fadeOut(function() { $('img.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
