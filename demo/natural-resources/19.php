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
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart1);
google.setOnLoadCallback(drawChart2);
google.setOnLoadCallback(drawChart3);

function drawChart1() {
	var data = google.visualization.arrayToDataTable([
	  ['<?php echo _("Region"); ?>', '<?php echo _("Percentage"); ?>'],
	  ['<?php echo _("North America"); ?>', 25],
	  ['<?php echo _("South/Central America"); ?>', 2],
	  ['<?php echo _("Europe"); ?>', 19],
	  ['<?php echo _("Russia"); ?>', 15],
	  ['<?php echo _("Africa"); ?>', 5],
	  ['<?php echo _("Middle East"); ?>', 5],
	  ['<?php echo _("Asia Pacific"); ?>', 29]
	]);

	var options = { 
		legend: 'none',
		backgroundColor: 'transparent'
	};

	var chart = new google.visualization.PieChart(document.getElementById('pc1'));
	chart.draw(data, options);
}

function drawChart2() {
	var data = google.visualization.arrayToDataTable([
	  ['<?php echo _("Region"); ?>', '<?php echo _("Percentage"); ?>'],
	  ['<?php echo _("North America"); ?>', 5],
	  ['<?php echo _("South/Central America"); ?>', 9],
	  ['<?php echo _("Europe"); ?>', 4],
	  ['<?php echo _("Russia"); ?>', 6],
	  ['<?php echo _("Africa"); ?>', 7],
	  ['<?php echo _("Middle East"); ?>', 65],
	  ['<?php echo _("Asia Pacific"); ?>', 4]
	]);

	var options = { 
		legend: 'none',
		backgroundColor: 'transparent'
	};

	var chart = new google.visualization.PieChart(document.getElementById('pc2'));
	chart.draw(data, options);
}

function drawChart3() {
	var data = google.visualization.arrayToDataTable([
	  ['Region', 'Percentage'],
	  ['North America', 9],
	  ['South/Central America', 4],
	  ['Europe', 8],
	  ['Russia', 29],
	  ['Africa', 7],
	  ['Middle East', 35],
	  ['Asia Pacific', 8]
	]);

	var options = { 
		legend: 'none',
		backgroundColor: 'transparent'
	};

	var chart = new google.visualization.PieChart(document.getElementById('pc3'));
	chart.draw(data, options);
}
</script>
<style>
h1 { color: #558653; }
.wrap { border-color: #b8d767; }
.bg { background-image: url(images/19/bg.jpg); }

.ac-custom { padding: 0; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 22px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #294D11; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #294D11; }
.ac-custom svg path { stroke: #294D11; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question ul { list-style: none; float: right; margin-top: -6px; padding-left: 20px; }
#question ul li { font-size: 22px; padding: 2px 0; }
#question ul li:nth-child(7) { margin-right: 0; }
#question ul li:before { font-family: AppleGothic, "Lucida Sans", Impact, Verdana, sans-serif; content: '■'; float: left; width: 1em; margin: -22px -11px; font-size: 200%; }
#question ul li:nth-child(1):before { color: #3366cc; }
#question ul li:nth-child(2):before { color: #dc3912; }
#question ul li:nth-child(3):before { color: #ff9900; }
#question ul li:nth-child(4):before { color: #109618; }
#question ul li:nth-child(5):before { color: #990099; }
#question ul li:nth-child(6):before { color: #0099c6; }
#question ul li:nth-child(7):before { color: #dd4477; }

#question .clear section { float: left; width: 283px; }
#question .clear section div { margin: -30px 0 -60px 0; }
#question .clear p { text-align: center; }

#question > section { float: left; width: 560px; }
#question ol li { padding: 8px 0; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

.chart { margin:0 auto; width: 70%; }
#buttons .next { display: none; }
img.next-toggle { display: none; }
html[dir="rtl"] #question ul { float: right; padding: 0; }
html[dir="rtl"] #question ul li:before { float: right; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
html[dir="rtl"] .ac-custom svg { right: 3px;}
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#question .clear section {
		float: left;
		width: 251px;
	}
	#question > section {
		float: left;
		width: 472px;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question" class="clear">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _("Use the pie charts about natural resources and how they are divided by regions to answer the question below. Click on <span class='blink'>all</span> the correct answers."); ?></h2>
				<p class="center"><?php echo _("World Reserves by Region"); ?></p>

				<div class="clear chart">
					<section>
						<p><?php echo _("Coal"); ?></p>
						<div id="pc1" style="width: 283px; height: 300px;"></div>
					</section>

					<section>
						<p><?php echo _("Oil"); ?></p>
						<div id="pc2" style="width: 283px; height: 300px;"></div>
					</section>

					<!-- <section>
						<p>Gas</p>
						<div id="pc3" style="width: 283px; height: 300px;"></div>
					</section> -->
				</div>

				<ul class="legend">
					<li><?php echo _("North America"); ?></li>
					<li><?php echo _("South/Central America"); ?></li>
					<li><?php echo _("Europe"); ?></li>
					<li><?php echo _("Russia"); ?></li>
					<li><?php echo _("Africa"); ?></li>
					<li><?php echo _("Middle East"); ?></li>
					<li><?php echo _("Asia Pacific"); ?></li>
				</ul>

				<section>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ol>
							<li><input id="a" name="q" type="checkbox"><label for="a"><span><?php echo _("North America has more of the earth's coal than oil."); ?></span></label></li>
							<li><input id="b" name="q" type="checkbox"><label for="b"><span><?php echo _("The Middle East has the largest percentage of oil on earth."); ?></span></label></li>
							<li><input id="c" name="q" type="checkbox"><label for="c"><span><?php echo _("Russia is the third richest area in coal."); ?></span></label></li>
							<li><input id="d" name="q" type="checkbox"><label for="d"><span><?php echo _("The same areas which have a lot of oil also have a lot of coal."); ?></span></label></li>
						<ol>
					</form>
				</section>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="answer"></div>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
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
	answered = 1;

	question.find('input[type=checkbox]').on('click', function() {
		var checkbox = $(this);

		if (checkbox.is(':checked')) {
			if (checkbox.attr('id') == 'a') { answer.find('.answer').append("<p class='a'><?php echo _("North America has more of the earth's coal than oil."); ?></p>"); }
			if (checkbox.attr('id') == 'b') { answer.find('.answer').append("<p class='b'><?php echo _("The Middle East has the largest percentage of oil on earth."); ?></p>"); }
			if (checkbox.attr('id') == 'c') { answer.find('.answer').append("<p class='c'><?php echo _("Russia is the third richest area in coal."); ?></p>"); }
			if (checkbox.attr('id') == 'd') { answer.find('.answer').append("<p class='d'><?php echo _("The same areas which have a lot of oil also have a lot of coal."); ?></p>"); }
		} 
		
		else if ( ! checkbox.is(':checked')) {
			if (checkbox.attr('id') == 'a') { answer.find('.answer').find('p.a').remove(); }
			if (checkbox.attr('id') == 'b') { answer.find('.answer').find('p.b').remove(); }
			if (checkbox.attr('id') == 'c') { answer.find('.answer').find('p.c').remove(); }
			if (checkbox.attr('id') == 'd') { answer.find('.answer').find('p.d').remove(); }
		}

		if ($('#a').is(':checked') == true && 
			$('#b').is(':checked') == true &&
			$('#c').is(':checked') == false &&
			$('#d').is(':checked') == false) {

			answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Great job! Based on these pie charts, it seems that the areas with the most coal (Asia Pacific and North America) do not have as much oil resources. The Middle East is rich in oil, but not in coal."); ?></p>");

		} else {
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite. Based on these pie charts, it seems that the areas with the most coal (Asia Pacific and North America) do not have as much oil resources. The Middle East is rich in oil, but not in coal."); ?></p>");
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('natural-resources-qq6-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "18.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
			}); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('input:checkbox:checked').length;

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
