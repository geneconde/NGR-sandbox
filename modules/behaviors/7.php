<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(7, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'behaviors-qc2-a');
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
h2 {margin: 0;}
.wrap { border-color: #5fbff1; }
.bg { background-image: url(images/7/bg.jpg); }

#question1 ul { margin: 15px auto 0; list-style: none; padding: 0; width: 595px; }
#question1 li { display:inline-block; margin: 0 21px 10px 0; }
#question1 li img { width: 180px !important; }
#question1 li:last-child { margin-right: 0; }
#question1 li:nth-child(3) { margin-right: 0; }
#question1 input[type=checkbox] { display: none; }
#question1 label { font-size: 18px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question1 input[type="checkbox"] + label img { border: 4px solid #ddd; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 180px; margin: 0 0 5px 0; display: block; }
#question1 input[type="checkbox"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #0C68B1; -webkit-backface-visibility: hidden; }
#question1 input[type="checkbox"] + label span { color: #000; -webkit-transition: all .3s ease; font-size:20px; }
#question1 input[type="checkbox"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #0C68B1; -webkit-backface-visibility: hidden;  ;}
#question1 input[type="checkbox"] + label { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }

#question2 ul { margin: 15px auto 0; list-style: none; width: 820px; padding: 0; }
#question2 li { display:inline-block; width: 194px; margin: 0 10px 0 0; }
#question2 li img { }
#question2 li:last-child { margin-right: 0; }
#question2 input[type=radio] { display: none; }
#question2 label { font-size: 18px; display: block; text-align: center; cursor: pointer; width: 194px; }
#question2 input[type="radio"] + label img { border: 4px solid #ddd; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 194px; margin: 0 0 5px 0; display: block; }
#question2 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #0C68B1; -webkit-backface-visibility: hidden; }
#question2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size:20px; }
#question2 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #0C68B1; -webkit-backface-visibility: hidden;  ;}
#question2 input[type="radio"] + label { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; height: 165px;}

#answers { display: none; }
#answers p { text-align: center;font-size:22px; }

#answer1 .answer { text-align: center; margin: 8px 0; }
#answer1 .answer p { width: 130px; margin-right: 10px; display: inline-block; }
#answer1 .answer p img { width: 130px; border: 4px solid #ddd; }
#answer1 .answer p span { display: inline-block; text-align: center; }
#answer1 .answer p:last-child { margin-right: 0; }

#answer2 .ansImg { float: left; margin: 0 20px 0 0; }
#answer2 .ansImg img { border: 4px solid #ddd; }
#answer2 .placeholder { float: left; margin-top: 0; width: 596px; }
#answer2 p { text-align: left; }
#answer2 .clear { width: 800px; margin: 0 auto; }
#answer2 .feedback { margin: 0; }

#question2 { margin-top: 15px; }
#answer2 { margin-top: 25px; }
img.next-toggle { display: none; }

ul.answer { text-align: center;margin:0;padding:0; }
ul.answer li { list-style: none;font-size:20px;padding-right:5px; }
<?php if($language == "es_ES") { ?>
	#answers p { font-size: 20px; }
	#question2 { margin-top: 0px; }
	#question2 h2 { margin-top: 5px; }
<?php } ?>
html[dir="rtl"] h2 { margin-bottom: 0; }
html[dir="rtl"] #quesion2 { margin-top: 0; }
html[dir="rtl"] #question1 ul {margin: 0 auto;} 
html[dir="rtl"] #answer2 .ansImg { float: right; margin: 0 0 0 20px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. From the list provided, mark <span class='blink'>all</span> the learned behaviors."); ?></h2>	
					<ul class="clearfix">
						<li>
							<input type="checkbox" id="a1" name="q1" value="A">
							<label for="a1"><img src="images/7/7a1.jpg">
								<span><?php echo _("Coughing"); ?></span>
							</label>
						</li>
						<li>
							<input type="checkbox" id="b1" name="q1" value="B">
							<label for="b1"><img src="images/7/7a2.jpg">
								<span><?php echo _("Walking"); ?></span>
							</label>
						</li>
						<li>
							<input type="checkbox" id="c1" name="q1" value="C">
							<label for="c1"><img src="images/7/7a3.jpg">
								<span><?php echo _("Sneezing"); ?></span>
							</label>
						</li>
						<li>
							<input type="checkbox" id="d1" name="q1" value="D">
							<label for="d1"><img src="images/7/7a4.jpg">
								<span><?php echo _("Crying"); ?></span>
							</label>
						</li>
						<li>
							<input type="checkbox" id="e1" name="q1" value="E">
							<label for="e1"><img src="images/7/7a5.jpg">
								<span><?php echo _("Skate boarding"); ?></span>
							</label>
						</li>
						<li>
							<input type="checkbox" id="f1" name="q1" value="F">
							<label for="f1"><img src="images/7/7a6.jpg">
								<span><?php echo _("Singing"); ?></span>
							</label>
						</li>
					</ul>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Which of the following is an innate behavior in humans?"); ?></h2>	
					<ul class="clearfix">
						<li>
							<input type="radio" id="a2" name="q1">
							<label for="a2"><img src="images/7/7b1.jpg">
								<span><?php echo _("Talking"); ?></span>
							</label>
						</li>
						<li>
							<input type="radio" id="b2" name="q1">
							<label for="b2"><img src="images/7/7b2.jpg">
								<span><?php echo _("Walking"); ?></span>
							</label>
						</li>
						<li>
							<input type="radio" id="c2" name="q1">
							<label for="c2"><img src="images/7/7b3.jpg">
								<span><?php echo _("Thinking"); ?></span>
							</label>
						</li>
						<li>
							<input type="radio" id="d2" name="q1">
							<label for="d2"><img src="images/7/7b4.jpg">
								<span><?php echo _("Sharing"); ?></span>
							</label>
						</li>
					</ul>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. From the list provided, mark <span class='blink'>all</span> the learned behaviors."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>

					<div class="answer"></div>
					<div class="feedback"></div>					
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Which of the following is an innate behavior in humans?"); ?></h2>	
					<div class="clear">
						<div class="ansImg"></div>
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
		<a href="8.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying different behaviors..."); ?></strong></section></section>

	<script>
	var ans1 = '', ans2, answered = <?php echo $answered; ?>, checkAnswer = 0;
	var a1 = $('#a1'),
		b1 = $('#b1'),
		c1 = $('#c1'),
		d1 = $('#d1'),
		e1 = $('#e1'),
		f1 = $('#f1');
	$('#question1').find('input[type=checkbox]').on('click', function() {
		var me = $(this);

		/* Question 1 */
		if (me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').append('<p class="a"><img src="images/7/7a1.jpg"><span><?php echo _("Coughing"); ?></span></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').find('p.a').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').append('<p class="b"><img src="images/7/7a2.jpg"><span><?php echo _("Walking"); ?></span></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').find('p.b').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').append('<p class="c"><img src="images/7/7a3.jpg"><span><?php echo _("Sneezing"); ?></span></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').find('p.c').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').append('<p class="d"><img src="images/7/7a4.jpg"><span><?php echo _("Crying"); ?></span></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').find('p.d').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'e1') {
			$('#answer1').find('.answer').append('<p class="e"><img src="images/7/7a5.jpg"><span><?php echo _("Skate boarding"); ?></span></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'e1') {
			$('#answer1').find('.answer').find('p.e').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'f1') {
			$('#answer1').find('.answer').append('<p class="f"><img src="images/7/7a6.jpg"><span><?php echo _("Singing"); ?></span></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'f1') {
			$('#answer1').find('.answer').find('p.f').remove(); 
		}

		if (a1.is(':checked') == false && b1.is(':checked') == true && c1.is(':checked') == false && d1.is(':checked') == false && e1.is(':checked') == true && f1.is(':checked') == true) {
			//$('#answer1').find('.answer').append('<p>Falcons have a streamlined shape to fly faster.</p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Coughing, sneezing and crying are all innate behaviors. Newborns can do all of these without help. Walking, skate boarding, and singing are learned behaviors. They need to be taught directly or indirectly, and will not be passed down to the next generation."); ?></p>');
		} else {
			//$('#answer1').find('.answer').append('<p>Falcons have a streamlined shape to fly faster.</p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. Coughing, sneezing, and crying are all innate behaviors. Newborns can do all of these without help. Walking, skate boarding, and singing are learned behaviors. They need to be taught directly or indirectly, and will not be passed down to the next generation."); ?></p>');
		}
	});

	$('#question2').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p><?php echo _("Talking"); ?></p>');
			$('#answer2').find('.ansImg').html('<img src="images/7/7b1.jpg" />');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, talking is a learned behavior. People cannot do it when they are born and they cannot pass on the ability to the next generation."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p><?php echo _("Walking"); ?></p>');
			$('#answer2').find('.ansImg').html('<img src="images/7/7b2.jpg" />');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, walking is a learned behavior. Humans have to learn to walk, which usually happens in stages. This ability is not genetically-inherited."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p><?php echo _("Thinking"); ?></p>');
			$('#answer2').find('.ansImg').html('<img src="images/7/7b3.jpg" />');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Thinking is innate to humans. However, critical and higher level thinking can be taught and strategies can be learned."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p><?php echo _("Sharing"); ?></p>');
			$('#answer2').find('.ansImg').html('<img src="images/7/7b4.jpg" />');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, sharing is an activity that must be taught. Some people are not aware of its social importance and they never learn to share."); ?></p>');
			ans2 = 'D';
		}
	});

	$('img.check-toggle').click(function(){
		var checkanswer2 = $('input:checkbox:checked').length; 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0 || checkanswer2 == 0) {
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

		console.log(ans1);

		$('input[type=checkbox]').each(function() {
			if ($(this).is(':checked')) {
				ans1 += $(this).val();
			}
		});

		console.log(ans1);

		if (answered == 0) {
			saveAnswer('behaviors-qc2-a', ans1);
			saveAnswer('behaviors-qc2-b', ans2);

			answered = 1;
		}
	}

	function clear() { ans1 = ''; }

	$('img.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "6.php#screen2";
		} else if ($('#answers').is(':visible')) {
			$('img.next-toggle').fadeOut(function() { $('img.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {

				clear();

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
