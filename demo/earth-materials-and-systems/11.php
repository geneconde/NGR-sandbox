<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.wrap { border-color: #F8C104; }
.bg { background-image: url(images/9/bg.jpg); }
#questions h2 { font-size: 22px; margin-top: 0; }

#question1 .ac-custom li { padding: 5px 0; }
#question1 .ac-custom { padding: 0; }
#question1 .ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
#question1 .ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
#question1 .ac-custom input[type="checkbox"]:checked + label { color: #780046; }
#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question1 .ac-custom label::before { border: 2px solid #780046; }
#question1 .ac-custom svg path { stroke: #780046; }
#question1 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question2 .ac-custom li { padding: 5px 0; }
#question2 .ac-custom { padding: 0; }
#question2 .ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
#question2 .ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="checkbox"]:checked + label { color: #780046; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #780046; }
#question2 .ac-custom svg path { stroke: #780046; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question3 ol { margin: 0 0 0 20px; padding: 0; }
#question3 li { padding: 10px 0; }
#question3 .ac-custom { width: 100%; }
#question3 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question3 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question3 .ac-custom input[type="radio"]:checked + label { color: #780046; }
#question3 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question3 .ac-custom label::before { border: 2px solid #780046; }
#question3 .ac-custom svg path { stroke: #780046; }
#question3 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question1, #question2 { float: left; width: 49%; }
#question1 ol, #question2 ol { margin-left: 20px; }
#question1 { margin-bottom: 2%; }
#question3 { width: 49%; float: right; }
#question1 ol li { width:195px; float: right; }
#question1 ol li:nth-last-of-type(2n-2) { float: left; width: 200px; }
#diagram { float: right; width: 43%; margin: 0 2% 2% 2%; }

#answers { display: none; }
#answers .col1{ float: left; width: 180px;}
#answers p { text-align: center; padding: 0; font-size: 22px; }
#answers h2 { margin: 8px 0; font-size: 22px; float: left; }
.answer { margin-top: 5px; }
.feedback { float: right; width: 650px; }
#answers .feedback p { text-align: left; }

#question2, #answer2, #answer3 { margin-top: 10px; }
.feedback img { height: 22px; vertical-align: sub; }
#buttons .next { display: none; }
<?php if ($language == 'es_ES'): ?>
	#question1 { margin-bottom: 0; }
<?php endif; ?>

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom input[type="checkbox"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] .ac-custom svg { right: 37px; margin-top: -10px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] #diagram, html[dir="rtl"] #question3 {float:left;}
html[dir="rtl"] #question1, html[dir="rtl"] #question2 {float:right;margin-bottom: 0;}
html[dir="rtl"] #answers .col1 {float: right;}
html[dir="rtl"] .feedback {float:left}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 { width: 58%; }
	#diagram {width: 38%;}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #4"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. In the diagram at the right, which of the following plants and animals would you expect to find on the <span class='blink'>west</span> side of the mountains. Select <span class='blink'>all</span> the correct answers."); ?></h2>	

					<section>
						<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="checkbox"><label for="a1"><span><?php echo _("Frogs"); ?></span></label></li>
								<li><input id="b1" name="q1" type="checkbox"><label for="b1"><span><?php echo _("Ferns"); ?></span></label></li>
								<li><input id="c1" name="q1" type="checkbox"><label for="c1"><span><?php echo _("Pine trees"); ?></span></label></li>
								<li><input id="d1" name="q1" type="checkbox"><label for="d1"><span><?php echo _("Tortoise"); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>
				
				<img id="diagram" src="images/11/diagram.jpg" />
				
				<div class="clear"></div>
				
				<div id="question2">
					<h2><?php echo _("Question B. In the diagram at the upper right, which of the following plants and animals would you expect to find on the <span class='blink'>east</span> side of the mountains? Select <span class='blink'>all</span> the correct answers."); ?></h2>	
 
					<section>
						<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="checkbox"><label for="a2"><span><?php echo _("Rattle snake"); ?></span></label></li>
								<li><input id="b2" name="q2" type="checkbox"><label for="b2"><span><?php echo _("Cactus"); ?></span></label></li>
								<li><input id="c2" name="q2" type="checkbox"><label for="c2"><span><?php echo _("Trout"); ?></span></label></li>
								<li><input id="d2" name="q2" type="checkbox"><label for="d2"><span><?php echo _("Deer"); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
	 			
				<div id="question3">
					<h2><?php echo _("Question C. If you were going to go hiking or backpacking across the mountains in the diagram above and you had to carry all of your food and water for the whole trip, would it make more sense to go:"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a3" name="q3" type="radio"><label for="a3"><span><?php echo _("East to west"); ?></span></label></li>
								<li><input id="b3" name="q3" type="radio"><label for="b3"><span><?php echo _("North to south"); ?></span></label></li>
								<li><input id="c3" name="q3" type="radio"><label for="c3"><span><?php echo _("West to east"); ?></span></label></li>
								<li><input id="d3" name="q3" type="radio"><label for="d3"><span><?php echo _("South to north"); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. In the diagram at the right, which of the following plants and animals would you expect to find on the <span class='blink'>west</span> side of the mountains. Select <span class='blink'>all</span> the correct answers."); ?></h2>	
					<div class="col1">
						<p><?php echo _("You answered..."); ?></p>
						<div class="answer"></div>
					</div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. In the diagram at the upper right, which of the following plants and animals would you expect to find on the <span class='blink'>east</span> side of the mountains? Select <span class='blink'>all</span> the correct answers."); ?></h2>	
					<div class="col1">
						<p><?php echo _("You answered..."); ?></p>
						<div class="answer"></div>
					</div>
					<div class="feedback"></div>
				</div>
				
				<div id="answer3">
					<h2><?php echo _("Question C. If you were going to go hiking or backpacking across the mountains in the diagram above and you had to carry all of your food and water for the whole trip, would it make more sense to go:"); ?></h2>	
					<div class="col1">
						<p><?php echo _("You answered..."); ?></p>
						<div class="answer"></div>
					</div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0, checkAnswer2 = 0;

	$('#question1').find('input[type=checkbox]').on('click', function() {
		var me = $(this);

		if (me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').append("<p class='a'><?php echo _("Frogs"); ?></p>");
		} else if ( ! me.is(':checked') && me.attr('id') == 'a1') {
			$('#answer1').find('.answer').find('p.a').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').append("<p class='b'><?php echo _("Ferns"); ?></p>");
		} else if ( ! me.is(':checked') && me.attr('id') == 'b1') {
			$('#answer1').find('.answer').find('p.b').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').append("<p class='c'><?php echo _("Pine trees"); ?></p>");
		} else if ( ! me.is(':checked') && me.attr('id') == 'c1') {
			$('#answer1').find('.answer').find('p.c').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').append("<p class='d'><?php echo _("Tortoise"); ?></p>");
		} else if ( ! me.is(':checked') && me.attr('id') == 'd1') {
			$('#answer1').find('.answer').find('p.d').remove(); 
		}

		if ($('#a1').is(':checked') == true && $('#b1').is(':checked') == true && $('#c1').is(':checked') == false && $('#d1').is(':checked') == false) {
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct! In this moist green area, you would expect to find frogs and ferns."); ?></p>"); 
		} else {
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not Quite. In moist green environments, you would definitely expect to find frogs and ferns and rarely pine trees but definitely not tortoises. - because tortoises are desert animals."); ?></p>"); 
		}
	});
	
	$('#question2').find('input[type=checkbox]').on('click', function() {
		var me = $(this);

		if (me.is(':checked') && me.attr('id') == 'a2') {
			$('#answer2').find('.answer').append("<p class='a'><?php echo _("Rattle snake"); ?></p>");
		} else if ( ! me.is(':checked') && me.attr('id') == 'a2') {
			$('#answer2').find('.answer').find('p.a').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'b2') {
			$('#answer2').find('.answer').append("<p class='b'><?php echo _("Cactus"); ?></p>");
		} else if ( ! me.is(':checked') && me.attr('id') == 'b2') {
			$('#answer2').find('.answer').find('p.b').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'c2') {
			$('#answer2').find('.answer').append("<p class='c'><?php echo _("Trout"); ?></p>");
		} else if ( ! me.is(':checked') && me.attr('id') == 'c2') {
			$('#answer2').find('.answer').find('p.c').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'd2') {
			$('#answer2').find('.answer').append("<p class='d'><?php echo _("Deer"); ?></p>");
		} else if ( ! me.is(':checked') && me.attr('id') == 'd2') {
			$('#answer2').find('.answer').find('p.d').remove(); 
		}

		if ($('#a2').is(':checked') == true && $('#b2').is(':checked') == true && $('#c2').is(':checked') == false && $('#d2').is(':checked') == false) {
			$('#answer2').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct! In this dry desert area, you would expect to find rattle snakes and cacti."); ?></p>"); 
		} else {
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite! In this dry desert environment, you would definitely expect to find snakes and cacti and rarely some deer but definitely not trout."); ?></p>"); 
		}
	});
	
	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a3') {
			$('#answer3').find('.answer').html("<p><?php echo _("East to west"); ?></p>");
			$('#answer3').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct. Going from east to west to travel through the desert first is the best way because you have a full water supply that you can drink and you don’t have to carry the weight of the water through the forest on the wet west slope. You can just drink from the streams."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b3') {
			$('#answer3').find('.answer').html("<p><?php echo _("North to south"); ?></p>");
			$('#answer3').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. Travelling east to west you will have a complete water supply with you in the desert area."); ?></p>");
			ans1 = 'B';
		}

		if (me == 'c3') {
			$('#answer3').find('.answer').html("<p><?php echo _("West to east"); ?></p>");
			$('#answer3').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. Travelling east to west you will have a complete water supply with you in the desert area."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd3') {
			$('#answer3').find('.answer').html("<p><?php echo _("South to north"); ?></p>");
			$('#answer3').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No. Travelling east to west you will have a complete water supply with you in the desert area."); ?></p>");
			ans1 = 'D';
		}

	});

	$('.check-toggle').click(function(){ 
		checkAnswer = $('input:checkbox:checked').length;
		checkAnswer2 = $('input:radio:checked').length;

		if (checkAnswer < 2 || checkAnswer2 < 1) {
			alert("<?php echo _("Please select your answers."); ?>");
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
			saveAnswer('earth-materials-and-systems-qc4-a', ans1);
			saveAnswer('earth-materials-and-systems-qc4-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "10.php#screen2";
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
	<?php require "setlocale.php"; ?>
</body>
</html>
