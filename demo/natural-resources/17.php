<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-resources';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Resources"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #558653; }
.wrap { border-color: #b8d767; }
.bg { background-image: url(images/17/bg.jpg); }

#question li { padding: 8px 0; }

.slider { width: 277px; float: right; margin-right: 100px; }

.ac-custom { width: 400px; float: left; padding: 0 !important; margin-left: 70px; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #294D11; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #294D11; }
.ac-custom svg path { stroke: #294D11; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#buttons .next { display: none; }
#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
html[dir="rtl"] #question .ac-custom svg { right: 3px; }
html[dir="rtl"] .rslides, html[dir="rtl"] .ac-custom { float: right; margin: 0; }

@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	.ac-custom {
		width: 300px;
		float: left;
		padding: 0 !important;
		margin-left: 19px;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("Aluminum is a natural resource used for building cars and buildings. Using natural resources usually produces waste products. How should aluminum be disposed of in a way that is best for the environment?"); ?></h2>

				<div class="clear">
					<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
						<ul>
							<li><input id="a" type="radio" name="q"><label for="a"><?php echo _("Bury it in landfills"); ?></label></li>
							<li><input id="b" type="radio" name="q"><label for="b"><?php echo _("Burn it"); ?></label></li>
							<li><input id="c" type="radio" name="q"><label for="c"><?php echo _("Recycle it"); ?></label></li>
							<li><input id="d" type="radio" name="q"><label for="d"><?php echo _("Crush it, then throw it away"); ?></label></li>
						</ul>
					</form>

					<ul class="rslides slider">
						<li><img src="images/17/a.jpg"></li>
						<li><img src="images/17/b.jpg"></li>
					</ul>
				</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Operating gasoline pump..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<?php echo _("Bury it in landfills"); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("No, burying it in landfills can lead to disturbing animals' habitat and needlessly taking up space in the landfill."); ?></p>");
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<?php echo _("Burn it"); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not really, aluminum is incombustible – it will not burn. However, it can be melted at a very high temperature to be recycled/reused."); ?></p>');
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<?php echo _("Recycle it"); ?>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! By recycling, you will have the least impact on the environment."); ?></p>');
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<?php echo _("Crush it, then throw it away"); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. Crushing it will help reduce the space it takes up, but throwing it away means wasting a resource that can be recycled."); ?></p>');
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('natural-resources-qq4-a', ans);
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
			alert('<?php echo _("Please select your answers."); ?>');
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
	<?php include("setlocale.php"); ?>
</body>
</html>
