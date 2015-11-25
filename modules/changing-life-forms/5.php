<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'changing-life-forms-qc1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { z-index: 1 !important; }
h1 { color: #cc6633; }
p { font-size: 22px; }
.wrap { border-color: #afa583; }
.bg { background-image: url(images/5/bg.jpg); }

#question1 ul { margin: 20px 0; list-style: none; padding: 0; }
#question1 li { display:inline-block; width: 200px; margin-right: 10px; }
#question1 li:last-child { margin-right: 0; }
#question1 input[type=checkbox] { display: none; }
#question1 label { font-size: 18px; display: block; text-align: center; cursor: pointer; width: 180px; }
#question1 input[type="checkbox"] + label img { border: 4px solid #b5b392; margin-bottom: 10px; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 200px; }
#question1 input[type="checkbox"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #e17523; -webkit-backface-visibility: hidden; }
#question1 input[type="checkbox"] + label span { color: #000; -webkit-transition: all .3s ease; font-size:20px; }
#question1 input[type="checkbox"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #e17523; -webkit-backface-visibility: hidden;  ;}
#question1 input[type="checkbox"] + label { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; height: 195px;}

#question2 h2 { margin-bottom:0; margin-top: -15px;}
#question2 ol { margin: 10px 0 0 0; padding: 0; }
#question2 li { padding: 8px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 22px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #e17523; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #e17523; }
#question2 .ac-custom svg path { stroke: #e17523; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answers { display: none; }
#answers p { text-align: center; }

#question2, #answer2 { margin-top: 25px; }
img.next-toggle { display: none; }
<?php if($language == "es_ES") { ?>
	#question1 ul { height: 250px; }
	#question1 li { float: left; }
	#answers p { font-size: 20px; }
<?php } ?>
<?php if($language == "zh_CN") { ?>
	#question1 li { float: left; }
	#question1 ul { height: 250px; }
<?php } ?>
html[dir="rtl"] #question1 ul { height: 230px; }
html[dir="rtl"] #question1 li { margin: 0 10px 0 0; }
html[dir="rtl"] #question1 li:last-child { margin-left: 0; }
html[dir="rtl"] #question1 input[type="checkbox"] + label span {font-size: 20px;}
html[dir="rtl"] #question1 input[type="checkbox"] + label {width: 200px;}
html[dir="rtl"] #question1 li { float: left; }

html[dir="rtl"] #question2 .ac-swirl label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] #question2 .ac-custom svg { right: 36px; margin-top: -8px; }
html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question2 li label { text-align: right; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
#buttons .next { display: none; }
.index-fix{position:relative; z-index: 5;}
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#question1 li {
		display: inline-block;
		width: 21%;
		margin-right: 10px;
	}
	#question1 input[type="checkbox"] + label img {
		border: 4px solid #b5b392;
		margin-bottom: 10px;
		-webkit-transition: all .3s ease;
		border-radius: 5px !important;
		width: 136px !important;
	}
	#question1 label {
		font-size: 18px !important;
		display: block;
		text-align: center;
		cursor: pointer;
		width: 136px !important;
	}	
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Click on <span class='blink'>all</span> the biological adaptations from the following:"); ?></h2>	
					<ul class="clearfix">
						<li>
							<input type="checkbox" id="a1" name="q1">
							<label for="a1"><img src="images/5/q1a.jpg"><span><?php echo _("Falcons have a streamlined shape to fly faster."); ?></span></label>
						</li>
						<li>
							<input type="checkbox" id="b1" name="q1">
							<label for="b1"><img src="images/5/q1b.jpg"><span><?php echo _("Sports cars have a streamlined shape to drive faster."); ?></span></label>
						</li>
						<li>
							<input type="checkbox" id="c1" name="q1">
							<label for="c1"><img src="images/5/q1c.jpg"><span><?php echo _("Snow leopards' spots make them difficult to see in rocky habitats."); ?></span></label>
						</li>
						<li>
							<input type="checkbox" id="d1" name="q1">
							<label for="d1"><img src="images/5/q1d.jpg"><span><?php echo _("Most people wear heavy coats on cold winter days."); ?></span></label>
						</li>
					</ul>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. Which environmental change would most likely cause changes in nearby living things?"); ?></h2>	
 
					<section class="index-fix">
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio">
									<label for="a2"><span>A. <?php echo _("A volcanic eruption more than a thousand kilometers away."); ?></span></label>
								</li>
								<li><input id="b2" name="q2" type="radio">
									<label for="b2"><span>B. <?php echo _("A rapidly deepening canyon, more than 50 kilometers long."); ?></span></label>
								</li>
								<li><input id="c2" name="q2" type="radio">
									<label for="c2"><span>C. <?php echo _("A rapidly warming climate resulting in sea levels rising."); ?></span></label>
								</li>
								<li><input id="d2" name="q2" type="radio">
									<label for="d2"><span>D. <?php echo _("A very long period without rain causing widespread drought."); ?></span></label>
								</li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Click on <span class='blink'>all</span> the biological adaptations from the following:"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. Which environmental change would most likely cause changes in nearby living things?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0, checkAnswer1 = 0, checkAnswer2 = 0;
	var a1 = $('#a1'),
		b1 = $('#b1'),
		c1 = $('#c1'),
		d1 = $('#d1'),
		a2 = $('#a2'),
		b2 = $('#b2'),
		c2 = $('#c2'),
		d2 = $('#d2');

	$('#question1').find('input[type=checkbox]').on('click', function() {
		var me = $(this);
		/* Question 1 */
		if (me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').append('<p class="a1"><?php echo _("Falcons have a streamlined shape to fly faster."); ?></p>');
			ans1 = 'A';
		} else if ( ! me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').find('p.a1').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').append('<p class="b1"><?php echo _("Sports cars have a streamlined shape to drive faster."); ?></p>');
			ans1 += 'B';
		} else if ( ! me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').find('p.b1').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').append("<p class='c1'><?php echo _("Snow leopards' spots make them difficult to see in rocky habitats."); ?></p>");
			ans1 += 'C';
		} else if ( ! me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').find('p.c1').remove(); 
		}
		if (me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').append('<p class="d1"><?php echo _("Most people wear heavy coats on cold winter days."); ?></p>');
			ans1 += 'D';
		} else if ( ! me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').find('p.d1').remove(); 
		}

		if (a1.is(':checked') == true && b1.is(':checked') == false && c1.is(':checked') == true && d1.is(':checked') == false) {
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Right! Faster flying makes catching prey more likely. Prey animals don't see the cats coming until it is too late."); ?></p>");
			ans1 = 'A and C';
		} else {
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite. Sports cars aren't alive. People only adjust for the weather. It's not an inherited trait. But faster flying makes catching prey more likely, and prey animals don't see the cats coming until it is too late."); ?></p>");
			ans1 = 'D and B';
		}
	});

		/* Question 2 */
		$('#question2').find('input[type=radio]').on('click', function() {
			var me = $(this).attr('id');
		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>A. <?php echo _("A volcanic eruption more than a thousand kilometers away."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Probably not. A far away eruption would probably have widespread impacts."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>B. <?php echo _("A rapidly deepening canyon, more than 50 kilometers long."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Good choice! As the canyon becomes more of an obstacle, it isolates animals on both sides."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>C. <?php echo _("A rapidly warming climate resulting in sea levels rising."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Unlikely. A warming climate impacts living things over a very wide area, impacting nearby living things equally."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>D. <?php echo _("A very long period without rain causing widespread drought."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not the best choice. Widespread drought means it happens over a wide area, impacting nearby living things equally."); ?></p>');
			ans2 = 'D';
		}
	});

	$('a.check-toggle').click(function(){ 
		checkAnswer1 = $('input:checkbox:checked').length;
		checkAnswer2 = $('input:radio:checked').length;

		//checkAnswer = checkAnswer1 + checkAnswer2;

		if (checkAnswer1 == 0 || checkAnswer2 == 0 ) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('changing-life-forms-qc1-a', ans1);
			saveAnswer('changing-life-forms-qc1-b', ans2);
		}
	}

	$('a.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "4.php#screen3";
		} else if ($('#answers').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
