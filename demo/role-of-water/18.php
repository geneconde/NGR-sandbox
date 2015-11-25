<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Role of Water"); ?></title>
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
<script>
google.load('visualization', '1.0', {'packages':['corechart']});
google.setOnLoadCallback(drawChart);

function drawChart() {
	 var data = google.visualization.arrayToDataTable([
		['<?php echo _("Uses"); ?>', '<?php echo _("Percentage"); ?>'],
		['<?php echo _("Other Domestic"); ?>', 2.2],
		['<?php echo _("Dishwasher"); ?>', 1.4],
		['<?php echo _("Bath"); ?>', 1.7],
		['<?php echo _("Leaks"); ?>', 13.7],
		['<?php echo _("Clothes Washer"); ?>', 21.7],
		['<?php echo _("Toilet"); ?>', 26.7],
		['<?php echo _("Shower"); ?>', 16.8],
		['<?php echo _("Faucet"); ?>', 15.7],
	]);

	var options = { 
		width: 450,
		height: 400,
		is3D: true,
		legend: 'none',
		backgroundColor: 'transparent'
	};

	var chart = new google.visualization.PieChart(document.getElementById('chart'));
	chart.draw(data, options);
}
</script>
<style>
h1 { color: #A183BD; }
.wrap { border-color: #9b98ec; }
.bg { background-image: url(images/18/bg.jpg); }

#question li { padding: 8px 0; z-index: 10; }

.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #9C3672; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #9C3672; }
.ac-custom svg path { stroke: #9C3672; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

.chart { position: relative; }
.chart p { text-align: left; margin-left: 128px; font-size: 24px; color: #4A8297; }
.chart li { padding: 8px 0; }
.chart ul { list-style: none; position: absolute; right: 180px; top: 10px; margin-top: -6px; }
.chart ul li { font-size: 20px; padding: 2px 0; }
.chart ul li:before { font-family: AppleGothic, "Lucida Sans", Impact, Verdana, sans-serif; content: '■'; float: left; width: 1em; margin: -22px -11px; font-size: 200%; }
.chart ul li:nth-child(1):before { color: #3366cc; }
.chart ul li:nth-child(2):before { color: #dc3912; }
.chart ul li:nth-child(3):before { color: #ff9900; }
.chart ul li:nth-child(4):before { color: #109618; }
.chart ul li:nth-child(5):before { color: #990099; }
.chart ul li:nth-child(6):before { color: #0099c6; }
.chart ul li:nth-child(7):before { color: #dd4477; }
.chart ul li:nth-child(8):before { color: #66aa00; }

#chart { margin: -60px 0 -60px 40px; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }
html[dir="rtl"] #question li {margin-right: 200px;}
html[dir="rtl"] .chart ul li:before {float: right;}
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom [type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { margin-top: -15px; right: 26px;}
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -7px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] #question form li {margin-left: 200px; margin-right: 0;}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("The graph below shows the typical use for water in your house other than for drinking and cooking. Which are the top three uses?"); ?></h2>
				
				<div class="chart">
					<p><?php echo _("Typical Household Water Use"); ?></p>

					<div id="chart"></div>

					<ul class="legend">
						<li><?php echo _("Other Domestic"); ?></li>
						<li><?php echo _("Dishwasher"); ?></li>
						<li><?php echo _("Bath"); ?></li>
						<li><?php echo _("Leaks"); ?></li>
						<li><?php echo _("Clothes Washer"); ?></li>
						<li><?php echo _("Toilet"); ?></li>
						<li><?php echo _("Shower"); ?></li>
						<li><?php echo _("Faucet"); ?></li>
					</ul>
				</div>

				<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
					<ul>
						<li><input id="a" type="radio" name="q"><label for="a"><?php echo _("Leaks, clothes washing, and shower."); ?></label></li>
						<li><input id="b" type="radio" name="q"><label for="b"><?php echo _("Shower, faucet, and clothes washing."); ?></label></li>
						<li><input id="c" type="radio" name="q"><label for="c"><?php echo _("Toilet, shower, and faucet."); ?></label></li>
						<li><input id="d" type="radio" name="q"><label for="d"><?php echo _("Toilet, shower, and clothes washing."); ?></label></li>
					</ul>
				</form>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<p class="answer"></p>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Enumerating the uses of water..."); ?></strong></section></section>

	<script>
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
			answer.find('.answer').html('<?php echo _("Leaks, clothes washing, and shower."); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _('Nope! Leaks (13.7%); clothes washing (21.7%); and showers (16.8%) only make up about 52.2% of typical household water usage.'); ?></p>");
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<?php echo _("Shower, faucet, and clothes washing."); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _('Try again! showers (16.8%); faucet (15.7%); and clothes washing (21.7%); only make up about 54.2% of typical household water usage.'); ?></p>");
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<?php echo _("Toilet, shower, and faucet."); ?>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _('Think again... toilet (26.7); showers (16.8%); and faucet (15.7%); only make up about 59.2% of typical household water usage.'); ?></p>");
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<?php echo _("Toilet, shower, and clothes washing."); ?>');
			answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _('You got it! Toilet (26.7); showers (16.8%); and clothes washing (21.7%); make up about 65.2% of typical household water usage.'); ?></p>");
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('role-of-water-qq5-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "17.php";
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
			alert('<?php echo _("Please select your answer.");?>');
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