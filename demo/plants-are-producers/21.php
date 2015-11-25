<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'plants-are-producers';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Plants are Producers"); ?></title>
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
	/**var data = new google.visualization.arrayToDataTable([
		['PPM', 'Optimal', 'Suboptimal'],
		['300 PPM', 31, 63],
		['600 PPM', 51, 219]
	]);**/

	var data = new google.visualization.DataTable();

	data.addColumn('string', 'PPM'); // Implicit domain column.
	data.addColumn('number', 'Optimal'); // Implicit data column.
	data.addColumn({type:'string', role:'tooltip'}); // Tooltip with percentages 
	data.addColumn('number', 'Suboptimal'); // Implicit data column.
	data.addColumn({type:'string', role:'tooltip'}); // Tooltip with percentages 
	data.addRows([
		['300 PPM', 31, 31 + '%', 63, 63 + '%'],
		['600 PPM', 51, 51 + '%', 219, 219 + '%']
		//['300 PPM', 63, 63 + '%'],
		//['600 PPM', 51, 63 + '%'],
		//['600 PPM', 219, 219 + '%']
	]);

	var options = { 
		width: 450,
		height: 400,
		backgroundColor: 'transparent',
		colors: ['#3366cc', '#dc3912'],
		legend: 'none'
	};

	var chart = new google.visualization.ColumnChart(document.getElementById('chart'));
	chart.draw(data, options);
}
</script>
<style>
h1 { color: #AC965D; }
.wrap { border-color: #f1e392; }
.bg { background-image: url(images/21/bg.jpg); }

.ac-custom { width: 350px; float: left; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 22px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #866222; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #866222; }
.ac-custom svg path { stroke: #866222; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#question li { padding: 8px 0; }
#buttons .next { display: none; }
.chart { margin-top: 0px; width: 450px; float: right; margin-top: -30px; }
.chart p { text-align: center; font-size: 20px; color: #4A8297; }
.chart li { padding: 8px 0; }
.chart ul { list-style: none; margin-top: -6px; }
.chart ul li { font-size: 22px; padding: 2px 0; }
.chart ul li:nth-child(7) { margin-right: 0; }
.chart ul li:before { font-family: AppleGothic, "Lucida Sans", Impact, Verdana, sans-serif; content: '■'; float: left; width: 1em; margin: -22px -11px; font-size: 200%; }
.chart ul li:nth-child(1):before { color: #3366cc; }
.chart ul li:nth-child(2):before { color: #dc3912; }

#chart { margin: -40px auto; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }

.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }

img.next-toggle { display: none; }

html[dir="rtl"] #question .ac-custom label { padding: 0 45px 0 0; }
html[dir="rtl"] #question .ac-swirl input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question .ac-swirl label::before { right: 0; margin-top: -15px; }
html[dir="rtl"] #question .ac-swirl svg { right: 0; margin-top: -8px; }
html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
html[dir="rtl"] #question li { text-align: right; }
html[dir="rtl"] .chart ul li:before { float: right; }
html[dir="rtl"] .chart p { text-align: center; }
html[dir="rtl"] .chart { float: left; }

<?php if ($language == 'zh_CN'): ?>
	.chart { margin-top: -15px; }
<?php endif; ?>
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	.chart {
	margin-top: 0px;
	width: 369px;
	float: right;
	margin-top: -8px;
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
				<h2><?php echo _("Look at the diagram showing the results of an experiment of increasing the level of carbon dioxide and its effect on plant growth. Then click on the statement that you infer from analyzing the data in the bar graph below. (Suboptimal means less than optimal amount of  water.)"); ?></h2>

				<div class="chart">
					<p><?php echo _("Relative Plant Growth under Different CO<sub>2</sub> and Water Condition"); ?></p>
					<div id="chart"></div>

					<ul class="legend">
						<li><?php echo _("Plants with optimal water"); ?></li>
						<li><?php echo _("Plants with suboptimal water"); ?></li>
					</ul>
				</div>

				<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
					<ul>
						<li><input id="a" type="radio" name="q"><label for="a">A. <?php echo _("Increased amounts of CO<sub>2</sub> dramatically enhanced plant growth."); ?></label></li>
						<li><input id="b" type="radio" name="q"><label for="b">B. <?php echo _("In low CO<sub>2</sub> conditions, plants grew less in suboptimal water conditions."); ?></label></li>
						<li><input id="c" type="radio" name="q"><label for="c">C. <?php echo _("The amount of water the plants received did not affect their growth."); ?></label></li>
						<li><input id="d" type="radio" name="q"><label for="d">D. <?php echo _("The amount of carbon dioxide the plants were exposed to did not affect their growth."); ?></label></li>
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
	answered = 1;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('A. <?php echo _("Increased amounts of CO<sub>2</sub> dramatically enhanced plant growth."); ?>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! The blue blocks show the growth increase under optimal water conditions. Then when the water decreased, you can see the CO<sub>2</sub> difference in the red blocks. The red blocks show a much greater growth increase."); ?></p>');
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('B. <?php echo _("In low CO<sub>2</sub> conditions, plants grew less in suboptimal water conditions."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No! In low CO<sub>2</sub> conditions, plants with less water actually grew better."); ?></p>');
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('C. <?php echo _("The amount of water the plants received did not affect their growth."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Both factors, water and CO<sub>2</sub>, affected plant growth."); ?></p>');
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('D. <?php echo _("The amount of carbon dioxide the plants were exposed to did not affect their growth."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No! Both factors, water and CO<sub>2</sub>, affected plant growth."); ?></p>');
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			//saveAnswer('plants-are-producers-qq6-a', ans);
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

	<?php include 'setlocale.php'; ?>
</body>
</html>
