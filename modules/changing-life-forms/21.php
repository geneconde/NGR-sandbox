<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(21, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'changing-life-forms-qq6-a');
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
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="https://www.google.com/jsapi"></script>
<style>
h2 { margin-bottom: 0; }
.bg { z-index: 1 !important; }
.wrap { border-color: #afa583; }
.bg { background-image: url(images/21/bg.jpg); }

#question li { padding: 8px 0; }
#buttons .next { display: none; }
.ac-custom { width: 100%; margin-top: 5px; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 21px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #DB4B51; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #DB4B51; }
.ac-custom svg path { stroke: #DB4B51; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }
.left { float:left;width: 300px;height:200px;padding:20px;margin-top:20px; margin-left: 70px; }
.left ul { float: left;list-style: none;margin:0; }
.left ul li { width:50px;height:50px;margin-right:20px;margin-top:20px;margin-bottom: 20px; }
.left ul li:nth-child(1) { background: blue; }
.left ul li:nth-child(2) { background: red; }
.left img { vertical-align: middle; }
.left img:last-child { display: block;margin-top:10px; }
.graph { margin-left:40px; width: 280px; margin-top: 20px; }
form.ac-custom > ul { background: rgba(255, 255, 255, .5); padding: 5px 10px 10px; border-radius: 5px; }
<?php if($language == "es_ES") { ?>
	h2 { font-size: 21px; }
	.ac-custom label { font-size: 18px; }
<?php } ?>

html[dir="rtl"] #question .ac-swirl label::before { right: 35px; margin-top: -15px; }
html[dir="rtl"] #question .ac-custom svg { right: 36px; margin-top: -8px; }
html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question li label { text-align: right; font-size: 20px;}
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] h2 { font-size: 23px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _("The chart shows the survival rate of peppered moth over time (2002-2007). The blue dashed line shows the fraction of light colored moth that survived. The red solid line shows the fraction of dark colored moth that survived. Use this chart to click on the statement that is <span class='blink'>not correct</span> regarding this data and what you know about environment changes."); ?></h2>
				<div class='left'>
					<ul>
						<li></li>
						<li></li>
					</ul>
					<img src="images/21/21s1.jpg" />
					<img src="images/21/21s2.jpg" />
				</div>
				<img src="images/21/21a.jpg" class="graph" />
				<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
					<ul>
						<li><input id="a" type="radio" name="q">
							<label for="a">A. <?php echo _("The survival rates of light and dark moth populations are changing from 2002-2007."); ?></label>
						</li>
						<li><input id="b" type="radio" name="q">
							<label for="b">B. <?php echo _("In 2004, light colored moths were more likely to survive than dark moths."); ?></label>
						</li>
						<li><input id="c" type="radio" name="q">
							<label for="c">C. <?php echo _("From 2005 to 2006 something must have caused the survival rate of dark colored moths to increase."); ?></label>
						</li>
						<li><input id="d" type="radio" name="q">
							<label for="d">D. <?php echo _("In 2003, the fraction of light colored moths that survived show that pollution must be low."); ?></label>
						</li>
					</ul>
				</form>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="22.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('A. <?php echo _("The survival rates of light and dark moth populations are changing from 2002-2007."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. The population rate changes are illustrated by the peaks and valleys of the chart."); ?></p>');
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('B. <?php echo _("In 2004, light colored moths were more likely to survive than dark moths."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. The point indicated by the blue line is higher than the one indicated by the red line."); ?></p>');
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('C. <?php echo _("From 2005 to 2006 something must have caused the survival rate of dark colored moths to increase."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No. The red line increases from 2005-2006. Some factors did cause the survival rate to increase."); ?></p>');
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('D. <?php echo _("In 2003, the fraction of light colored moths that survived show that pollution must be low."); ?>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct, this statement is false. In 2003, the light colored moths were at their lowest survival rate, which shows that population might have been high, the trees dark, and the light colored moths could not survive as well. Pollution is one factor that affects the population of these moths."); ?></p>');
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('changing-life-forms-qq6-a', ans);
			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "20.php";
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
	<?php include("setlocale.php"); ?>
</body>
</html>
