<?php 
	require_once("../tempsession.php"); 
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystem Interactions"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h2 { margin: 0; }
.wrap { border-left: 1px dashed #feda74; border-right: 1px dashed #feda74; }
.bg { background: url('images/21/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.placeholder { padding: 10px 10px 20px 10px; margin-top: 10px; background: rgba(255, 255, 255, .5); border-radius: 5px; }
#question, #answer {-webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
#question { overflow: hidden; }
#question ul { list-style: none; padding: 0; width: 340px; }
#question li { text-align: left; margin: 0 auto; padding: 5px 0; position: relative; }
#question label { display: inline-block; position: relative; font-size: 22px; padding: 0 0 0 40px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
#question input[type="radio"], #question label::before{ width: 30px; height: 30px; top: 50%; left: 0; margin-top: -15px; position: absolute; cursor: pointer; }
#question input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; } 
#question label::before { content: ''; background: url(images/21/21.png) left top no-repeat; width: 30px; height: 30px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
#question input[type="radio"]:checked + label { color: #000; } 
#question input[type="radio"]:checked + label::before { background-position: left bottom; }
#question section { float: left; width: 200px; margin-left: 10px; margin-top: 20px; }
#diagram { background: url(images/21/diagram.jpg) no-repeat; width: 464px; height: 307px; position: relative; border-radius: 10px; float: right; margin: 10px 10px 0 0; }
#diagram p { position: absolute; font-weight: bold; font-size: 12px; text-transform: uppercase; font-family: Arial, sans-serif; }
#diagram p:nth-child(1) { bottom: 5%; left: 8%; }
#diagram p:nth-child(2) { top: 1%; right: 6%; }
#diagram p:nth-child(3) { bottom: 1%; right: 22%; }
#diagram p:nth-child(4) { -webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg); -o-transform: rotate(-90deg); top: 48%; left: 15%; letter-spacing: 2px; }
#answer { text-align: center; display: none; }
#answer .placeholder { padding: 10px; }
#answer p { text-align: center; }
.answer img {width:270px}
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
img.next-toggle { display: none; }

html[dir="rtl"] #diagram { float: left; }
html[dir="rtl"] #question li { text-align: right; }
html[dir="rtl"] #question label { padding: 0 35px 0 0; }
html[dir="rtl"] #question section { float: right; }
html[dir="rtl"] #question input[type="radio"], html[dir="rtl"] #question label::before { right: 0; }
html[dir="rtl"] #diagram p:nth-child(4) { left: 27%; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<div class="placeholder clearfix">
					<h2><?php echo _("Collared doves have a black half-collar, dark feathers, and a long, white-edged tail. The graph below shows the population growth of the collared dove after it first arrived in the United Kingdom. Which of the following statements <span class=\"blink\">best</span> explains why the curve flattens out at the X mark?"); ?></h2>

					<section>
						<ul>						
							<li><input id="a" name="q" type="radio"><label for="a"><?php echo _("Predators could not catch the doves."); ?></label></li>
							<li><input id="b" name="q" type="radio"><label for="b"><?php echo _("Food in the environment was limited."); ?></label></li>
							<li><input id="c" name="q" type="radio"><label for="c"><?php echo _("Severe winters destroyed nesting sites."); ?></label></li>
							<li><input id="d" name="q" type="radio"><label for="d"><?php echo _("The doves were able to find many mates."); ?></label></li>
						</ul>
					</section>

					<div id="diagram">
						<p><?php echo _("Collared Dove"); ?></p>
						<p><?php echo _("Population Growth Curve"); ?></p>
						<p><?php echo _("Year"); ?></p>
						<p><?php echo _("Number of Collared Doves"); ?></p>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #6")." - "._("How did I do?"); ?></h1>
				<div class="placeholder">
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</p>					
			</div>
		</div>
	</div>
	<div class="buttons-back" title="Back">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png" title="<?php echo _("Back"); ?>"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _("Check Answer"); ?>"></a>
		<a href="22.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Take the last quiz question!"); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/hexaflip.min.js"></script>
	<script>
	var back = $('img.back-toggle'),
	next = $('img.next-toggle'),
	check = $('img.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<img src="images/21/dove.jpg"><p><?php echo _("Predators could not catch the doves."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! The curve probably flattens out because the food was limited and the birds competed to get it. If predator could not catch the doves, there would be an increase in birds."); ?></p>');
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<img src="images/21/dove.jpg"><p><?php echo _("Food in the environment was limited."); ?></p>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! The curve probably flattens out because the food was limited and the birds competed for the resources."); ?></p>');
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<img src="images/21/dove.jpg"><p><?php echo _("Severe winters destroyed nesting sites."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! If there were severe winters, it would have killed many more doves and the curve would have gone down to show a decrease."); ?></p>');
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<img src="images/21/dove.jpg"><p><?php echo _("The doves were able to find many mates."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! By mating the doves would have increased in population, causing the curve to go up."); ?></p>');
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('ecosystem-interactions-qq6-a', ans);
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "20.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ question.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){ answer.fadeIn(); }); 
			save();
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
