<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<!-- <script src="scripts/rightclick.js"></script> -->
<style>
h1 { color: #576306; }
.bg { background: url('images/7/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.wrap { border-left: 1px dashed #d3e547; border-right: 1px dashed #d3e547; }
.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #566204; }
.ac-custom svg { height: 20px; width: 30px; left: 1px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #566204; }
.ac-custom svg path { stroke: #566204; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question1 ol { margin: 0; padding: 0; }
#question1 li { padding: 6px 0; }
#question2 label { display: inline-block; position: relative; font-size: 24px; padding: 15px 0 0 75px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
#question2 input[type="radio"], #questions label::before{ width: 30px; height: 30px; top: 50%; left: 0; margin-top: -15px; position: absolute; cursor: pointer; }
#question2 input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; } 
#question2 label::before { content: ''; background: url(images/7/buttons.png) left bottom no-repeat; width: 64px; height: 40px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
#question2 input[type="radio"]:checked + label { color: #000; } 
#question2 input[type="radio"]:checked + label::before { background-position: left top; }
#question2 ul { list-style: none; margin-top: -6px; padding: 0; }
#question2 li { padding: 2px 0; }
#questions ul, #questions ol { margin-left: 40px; }
#answers { display: none; }
#answers p { text-align: center; font-size: 20px; }
#question2, #answer2 { margin-top: 25px; }
.feedback { width: 700px; margin: 0 auto; }
#buttons .next { display: none; }

html[dir="rtl"] .ac-custom svg { right: 65px; }
html[dir="rtl"] #question2 input[type="radio"], #questions label::before { right: 65px; }
html[dir="rtl"] .ac-custom label { padding-right: 110px; }
html[dir="rtl"] #question2 label::before { right: 40px; }
html[dir="rtl"] #question2 label { padding: 15px 115px 0 0; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>
				<div id="question1">
					<h2><?php echo _('Question A. Click on <span class="blink">all</span> of the following that are advantages enjoyed by animals like ants, termites, and bees that build large structures to house their colonies?'); ?></h2>	
					<section>
						<form class="ac-custom ac-checkbox ac-diagonal" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="checkbox"><label for="a1"><span>A. <?php echo _("Protection from possible predators"); ?></span></label></li>
								<li><input id="b1" name="q1" type="checkbox"><label for="b1"><span>B. <?php echo _("Protection from extreme weather"); ?></span></label></li>
								<li><input id="c1" name="q1" type="checkbox"><label for="c1"><span>C. <?php echo _("Protection for developing young"); ?></span></label></li>
								<li><input id="d1" name="q1" type="checkbox"><label for="d1"><span>D. <?php echo _("Protection from volcanic eruptions"); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. What is one advantage enjoyed by animals that build hives?"); ?></h2>	
					<ul>
						<li><input id="a2" name="q2" type="radio"><label for="a2">A. <?php echo _("Protection from predators"); ?></label></li>
						<li><input id="b2" name="q2" type="radio"><label for="b2">B. <?php echo _("Easy movement from place to place"); ?></label></li>
						<li><input id="c2" name="q2" type="radio"><label for="c2">C. <?php echo _("Locations close to food sources"); ?></label></li>
						<li><input id="d2" name="q2" type="radio"><label for="d2">D. <?php echo _("Protection from prey species"); ?></label></li>
					</ul>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _('Question A. Click on <span class="blink">all</span> of the following that are advantages enjoyed by animals like ants, termites, and bees that build large structures to house their colonies?'); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					
				<div id="answer2">
					<h2><?php echo _("Question B. What is one advantage enjoyed by animals that build hives?"); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Investigating the beehive..."); ?></strong></section></section>
	<script>

	var ans1 = '', ans2, answered = 1, checkAnswer = 0;

	$('#question1').find('input[type=checkbox]').on('click', function() {
		var me = $(this);

		if (me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').append('<p class="a">A. <?php echo _("Protection from possible predators"); ?></p>');
			ans1 += 'A';
		} else if ( ! me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').find('p.a').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').append('<p class="b">B. <?php echo _("Protection from extreme weather"); ?></p>');
			ans1 += 'B';
		} else if ( ! me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').find('p.b').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').append('<p class="c">C. <?php echo _("Protection for developing young"); ?></p>');
			ans1 += 'C';
		} else if ( ! me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').find('p.c').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').append('<p class="d">D. <?php echo _("Protection from volcanic eruptions"); ?></p>');
			ans1 += 'D';
		} else if ( ! me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').find('p.d').remove(); 
		}

		if ($('#a1').is(':checked') == true && $('#b1').is(':checked') == true && $('#c1').is(':checked') == true && $('#d1').is(':checked') == false) {
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Hives and hills do provide protection from predators and extreme weather. They also provide protection for their young. The extreme heat of volcanoes will destroy the hive or hill."); ?></p>'); 
		} else {
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. Hives and hills provide protection from predators and extreme weather. They also provide protection for their young. However, the extreme heat of volcanoes will destroy the hive or hill."); ?></p>'); 
		}
	});

	$('#question2').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>A. <?php echo _("Protection from predators"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Yes! Hives are built in places that are hard for predators to attack."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>B. <?php echo _("Easy movement from place to place"); ?></p>');
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No... Hives can't move..."); ?></p>");
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>C. <?php echo _("Locations close to food sources"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Probably not. A good place for a hive may or may not be near food."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>D. <?php echo _("Protection from prey species"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Prey species are food sources, not threats."); ?></p>');
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('biodiversity-qc2-a', ans1);
			saveAnswer('biodiversity-qc2-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if($('#questions').is(':visible')) {
			document.location.href = "6.php#screen3"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if ($('#answers').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
		
	$('.check-toggle').click(function(){ 
		if ($('input:radio:checked').length == 0 || $('input:checkbox:checked').length == 0) {
			checkAnswer = 1;
		} else {
			checkAnswer = 0;
		}

		if (checkAnswer == 1) {
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
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>



