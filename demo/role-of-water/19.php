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
google.setOnLoadCallback(drawChartA);
google.setOnLoadCallback(drawChartB);
google.setOnLoadCallback(drawChartC);
google.setOnLoadCallback(drawChartD);

function drawChartA() {
	var data = new google.visualization.DataTable();

	data.addColumn('string', '<?php echo _("Water Consumption"); ?>');
	data.addColumn('number', 'Percentage');
	data.addColumn({ type: 'string', role: 'tooltip' });
	data.addColumn({ type: 'string', role: 'style' });
	data.addRows([
		['<?php echo _("Body"); ?>', .7, 70 + '%', '#036a9b'],
		['<?php echo _("Blood"); ?>', .85, 85 + '%', '#d63206'],
		['<?php echo _("Brain"); ?>', .80, 80 + '%', '#389a6a'],
		['<?php echo _("Muscles"); ?>', .75, 75 + '%', '#cd0030'],
		['<?php echo _("Cells"); ?>', .90, 90 + '%', '#633262'],
	]);

	var options = {
		width: 400,
		height: 200,
		vAxis: { format: '#%' },
		backgroundColor: 'transparent',
		legend: 'none'
	};

	var chart = new google.visualization.ColumnChart(document.getElementById('chartA'));
	chart.draw(data, options);
}

function drawChartB() {
	var data1 = new google.visualization.DataTable();
	var data2 = new google.visualization.DataTable();
	var data3 = new google.visualization.DataTable();

	data1.addColumn('string', '<?php echo _("Water Distribution"); ?>');
	data1.addColumn('number', '<?php echo _("Oceans"); ?>');
	data1.addColumn('number', '<?php echo _("Fresh water"); ?>');
	data1.addRows([["<?php echo _("Earth's water"); ?>", 97, 3]]);

	data2.addColumn('string', '<?php echo _("Water Distribution"); ?>');
	data2.addColumn('number', '<?php echo _("Icecaps and glaciers"); ?>');
	data2.addColumn('number', '<?php echo _("Ground water"); ?>');
	data2.addColumn('number', '<?php echo _("Surface water"); ?>');
	data2.addColumn('number', '<?php echo _("Other"); ?>');
	//data2.addColumn({ type: 'string', role: 'style' });
	data2.addRows([['<?php echo _("Freshwater"); ?>', 68.7, 30.1, .3, .9, /*'font-size: 22px;'*/]]);

	data3.addColumn('string', '<?php echo _("Water Distribution"); ?>');
	data3.addColumn('number', '<?php echo _("Lakes"); ?>');
	data3.addColumn('number', '<?php echo _("Swamps"); ?>');
	data3.addColumn('number', '<?php echo _("Rivers"); ?>');
	data3.addRows([["<?php echo _("Fresh surface water"); ?>", 87, 11, 2]]);

	var options = { 
		width: 140,
		height: 270,
		isStacked: true,
		backgroundColor: 'transparent',
		legend: 'none'
	};

	var chart1 = new google.visualization.SteppedAreaChart(document.getElementById('chartB1'));
	var chart2 = new google.visualization.SteppedAreaChart(document.getElementById('chartB2'));
	var chart3 = new google.visualization.SteppedAreaChart(document.getElementById('chartB3'));

	chart1.draw(data1, options);
	chart2.draw(data2, options);
	chart3.draw(data3, options);
}

function drawChartC() {
	var data = new google.visualization.DataTable();

	data.addColumn('string', 'Water Usage');
	data.addColumn('number', 'Percentage');
	data.addRows([
		["<?php echo _("Dishwasher"); ?>", .014],
		["<?php echo _("Bath"); ?>", .017],
		["<?php echo _("Clothes Washer"); ?>", .217],
		["<?php echo _("Faucet"); ?>", .157],
		["<?php echo _("Shower"); ?>", .168],
		["<?php echo _("Toilet"); ?>", .267],
		["<?php echo _("Leaks"); ?>", .137],
		["<?php echo _("Other Domestic"); ?>", .022],
	]);

	var options = { 
		width: 400,
		height: 300,
		isStacked: true,
		backgroundColor: 'transparent',
		legend: 'none'
	};

	var chart = new google.visualization.PieChart(document.getElementById('chartC'));
	chart.draw(data, options);
}

function drawChartD() {
	var data = new google.visualization.DataTable();

	data.addColumn('string', 'Year');
	data.addColumn('number', '<?php echo _("Ground Water"); ?>');
	data.addColumn({ type:'string', role:'tooltip' });
	data.addColumn('number', '<?php echo _("Surface Water"); ?>');
	data.addColumn({ type:'string', role:'tooltip' });
	data.addRows([
		['1950', 30, '<?php echo _("Ground water"); ?> (' + 30 + '%)', 155, '<?php echo _("Surface water"); ?> (' + 155 + '%)'],
		['1955', 40, '<?php echo _("Ground water"); ?> (' + 40 + '%)', 190, '<?php echo _("Surface water"); ?> (' + 190 + '%)'],
		['1960', 42, '<?php echo _("Ground water"); ?> (' + 42 + '%)', 205, '<?php echo _("Surface water"); ?> (' + 205 + '%)'],
		['1965', 50, '<?php echo _("Ground water"); ?> (' + 50 + '%)', 245, '<?php echo _("Surface water"); ?> (' + 245 + '%)'],
		['1970', 58, '<?php echo _("Ground water"); ?> (' + 58 + '%)', 290, '<?php echo _("Surface water"); ?> (' + 290 + '%)'],
		['1975', 70, '<?php echo _("Ground water"); ?> (' + 70 + '%)', 315, '<?php echo _("Surface water"); ?> (' + 315 + '%)'],
		['1980', 70, '<?php echo _("Ground water"); ?> (' + 70 + '%)', 346, '<?php echo _("Surface water"); ?> (' + 346 + '%)'],
		['1985', 61, '<?php echo _("Ground water"); ?> (' + 61 + '%)', 310, '<?php echo _("Surface water"); ?> (' + 310 + '%)'],
		['1990', 66, '<?php echo _("Ground water"); ?> (' + 66 + '%)', 310, '<?php echo _("Surface water"); ?> (' + 310 + '%)']
	]);

	var options = { 
		width: 480,
		height: 230,
		backgroundColor: 'transparent',
		colors: ['#3366cc', '#dc3912'],
		legend: 'none'
	};

	var chart = new google.visualization.ColumnChart(document.getElementById('chartD'));
	chart.draw(data, options);
}
</script>

<style>
h1 { color: #A183BD; }
h2 { font-size: 20px; }
.wrap { border-color: #9b98ec; }
.bg { background-image: url(images/19/bg.jpg); }

input[type=radio] { display: none; }

#question > div.clear { width: 820px; margin: 0 auto; }
.clear > div { float: left; width: 400px; }
.clear div.a { padding: 0 0 20px; border-radius: 5px; background: #f4f4f4; }
.clear div.b { border-radius: 5px; background: #f4f4f4; margin-left: 20px; }
.clear div.c { border-radius: 5px; background: #f4f4f4; margin-top: 20px; }
.clear div.d { border-radius: 5px; background: #f4f4f4; margin-top: 20px; margin-left: 20px; }

#chartA { cursor: pointer; }
#chartB1, #chartB2, #chartB3 { cursor: pointer; width: 130px; height: 230px; margin-top: -30px; margin-bottom: 20px; float: left; }
#chartC { cursor: pointer; margin: -30px 0 -30px; }
#chartD { cursor: pointer; width: 400px; height: 230px; margin-bottom: 10px; margin-left: -30px; }

.effect-off { border: 4px solid #ccc; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }
.effect-on { border: 4px solid #9C3672; -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }

#answer { display: none; text-align: center; }
#answer div.clear { margin: 20px 0; }
#answer div.c { margin: -35px 0 -45px !important; }
#answer div.d { margin: -10px 0 -20px !important; }
#answer p { text-align: center; }
#answer .answer { margin: 0 auto 20px auto; width: 400px; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

#buttons .next { display: none; }
html[dir="rtl"] #chartD > div:first-of-type {width: 420px !important;}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.clear > div { width: 360px; }
	.clear div.b, .clear div.d { margin-left: 8px; }
	#chartB1, #chartB2, #chartB3 { width: 110px; }
	#chartD > div > div:first-child { left: -17px !important; }
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _("Hover your mouse over each of the graphs to see what each part of the graph means. Then click on the graph that would <span class='blink'>best</span> help you understand why hydration (drinking water), while participating in athletic events, is so important?"); ?></h2>

				<div class="clear">
					<div class="a effect-off">
						<input type="radio" id="a" name="q">
						<label for="a"><div id="chartA"></div></label>
					</div>

					<div class="b effect-off">
						<input type="radio" id="b" name="q">

						<label for="b">
							<div class="clear">
								<div id="chartB1"></div>
								<div id="chartB2"></div>
								<div id="chartB3"></div>
							</div>
						</label>
					</div>

					<div class="c effect-off">
						<input type="radio" id="c" name="q">
						<label for="c"><div id="chartC"></div></label>
					</div>

					<div class="d effect-off">
						<input type="radio" id="d" name="q">
						<label for="d"><div id="chartD"></div></label>
					</div>
				</div>
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
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quiz question?"); ?></strong></section></section>

	<script>
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1,
	a = $('#a'),
	b = $('#b'),
	c = $('#c'),
	d = $('#d');

	a.on('click', function() {
		$(this).parent().removeClass('effect-off').addClass('effect-on');

		b.parent().removeClass('effect-on').addClass('effect-off');
		c.parent().removeClass('effect-on').addClass('effect-off');
		d.parent().removeClass('effect-on').addClass('effect-off');

		answer.find('.answer').html($('#chartA').html());
		answer.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct! This graph shows that the most important parts of your body are composed mostly of water so it's important to always drink lots of water so these body parts keep working properly."); ?></p>");
		ans = 'A';
	});

	b.on('click', function() {
		$(this).parent().removeClass('effect-off').addClass('effect-on');

		a.parent().removeClass('effect-on').addClass('effect-off');
		c.parent().removeClass('effect-on').addClass('effect-off');
		d.parent().removeClass('effect-on').addClass('effect-off');

		answer.find('.answer').html($('#question').find('div.b label').html());
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite! This graph shows how much water (what percentage of water) is found in different parts of the earth."); ?></p>");
		ans = 'B';
	});

	c.on('click', function() {
		$(this).parent().removeClass('effect-off').addClass('effect-on');

		a.parent().removeClass('effect-on').addClass('effect-off');
		b.parent().removeClass('effect-on').addClass('effect-off');
		d.parent().removeClass('effect-on').addClass('effect-off');

		answer.find('.answer').html('<div class="c">' + $('#chartC').html() + '</div>');
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite! This graph shows how much water is used for different household activities."); ?></p>");
		ans = 'C';
	});

	d.on('click', function() {
		$(this).parent().removeClass('effect-off').addClass('effect-on');

		a.parent().removeClass('effect-on').addClass('effect-off');
		b.parent().removeClass('effect-on').addClass('effect-off');
		c.parent().removeClass('effect-on').addClass('effect-off');

		answer.find('.answer').html('<div class="d">' + $('#chartD').html() + '</div>');
		answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry... this graph shows how much water was used in different years."); ?></p>");
		ans = 'D';
	});

	function save() {
		if (answered == 0) {
			saveAnswer('role-of-water-qq6-a', ans);
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