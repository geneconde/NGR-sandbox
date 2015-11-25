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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/responsiveslides.js"></script>
<style>
h1 { color: #000; }
.bg { background-image: url(images/17/bg.jpg); }

#question li { padding: 8px 0; }
.ac-custom { width: 400px; float: left; padding: 0 !important; margin-left: 40px; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #780046; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #780046; }
.ac-custom svg path { stroke: #780046; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
.slider { width: 300px; float: right; margin-right: 40px; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.image img { width: 300px; }
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }

html[dir="rtl"] .ac-custom { width: 485px; margin-left: 0; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.ac-custom {width: 100%;}
	.slider { float: none; display: block; margin: 0 auto; }
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("Based on what happened at Yellowstone Park, we know that predators like wolves should best be viewed as..."); ?></h2>

				<div class="clear">
					<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
						<ul>
							<li><input id="a" type="radio" name="q"><label for="a"><?php echo _("Significant parts of natural systems"); ?></label></li>
							<li><input id="b" type="radio" name="q"><label for="b"><?php echo _("Angry killers without mercy"); ?></label></li>
							<li><input id="c" type="radio" name="q"><label for="c"><?php echo _("Playful, friendly animals"); ?></label></li>
							<li><input id="d" type="radio" name="q"><label for="d"><?php echo _("Wild animals best taken out of nature's cycle"); ?></label></li>
						</ul>
					</form>
					
					<ul class="rslides slider">
						<li> <img src="images/4/s1a.jpg"> </li>
						<li> <img src="images/4/s1b.jpg"> </li>
						<li> <img src="images/4/s1c.jpg"> </li>
					</ul>
				</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Hunting for food..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});
	
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.image').html('<img src="images/17/a.png">');
			answer.find('.answer').html('<?php echo _("Significant parts of natural systems"); ?>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Wolves are top predators in many ecosystems."); ?></p>');
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.image').html('<img src="images/17/b.png">');
			answer.find('.answer').html('<?php echo _("Angry killers without mercy"); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Hardly. Wolves have tender relationships with other wolves."); ?></p>');
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.image').html('<img src="images/17/c.png">');
			answer.find('.answer').html('<?php echo _("Playful, friendly animals"); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Um... no. Wolves, even puppies, are very dangerous."); ?></p>');
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.image').html('<img src="images/17/d.png">');
			answer.find('.answer').html("<?php echo _("Wild animals best taken out of nature's cycle"); ?>");
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry. It's important to have wild wolves and taking them out of the ecosystem has negative effects on plants and animals."); ?></p>");
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('staying-alive-qq2-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "16.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
			}); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer == 0) {
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

	<?php include 'setlocale.php'; ?>
</body>
</html>
