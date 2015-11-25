<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'biodiversity';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Biodiversity"); ?></title>
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
<script src="https://www.google.com/jsapi"></script>
<script>
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart);
function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['<?php echo _("Environment"); ?>', '<?php echo _("Centimeters"); ?>', { role: 'style' }],
  ['<?php echo _("Desert"); ?>', 20, '#ffff00'],
  ['<?php echo _("Grassland"); ?>', 60, '#007f00'],
  ['<?php echo _("Rainforest"); ?>', 180, '#007dff'],
  ['<?php echo _("Taiga"); ?>', 30, 'color: #cc7f00' ],
  ['<?php echo _("Temperate Deciduous Forest"); ?>', 60, 'color: #99007f' ],
  ['<?php echo _("Tundra"); ?>', 10, 'color: #cbcb66' ],
]);
 
var options = {
  title: '<?php echo _("Centimeters of Rainfall per Year"); ?>',
<?php if ($language == 'ar_EG' || $language == 'zh_CN') : ?>
	titleTextStyle: { fontSize: 22 },
<?php else : ?>
	titleTextStyle: { fontSize: 16, fontName: 'PlaytimeRegular' },
<?php endif; ?>
  legend: 'none',
  width: 400,
  hAxis: { textPosition: 'none' },
  vAxis: { 
	  //viewWindowMode:'explicit',
	  viewWindow:{
		max: 200,
		min: 0
	  },
	  ticks: [0, 50, 100, 150, 200]
	},
  backgroundColor: 'transparent'
};

var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
chart.draw(data, options);
}
</script>
<style>
h1 { color: #576306; }
.wrap { border-left: 1px dashed #d3e547; border-right: 1px dashed #d3e547; }
.bg { background: url('images/17/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
.ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="radio"]:checked + label { color: #566204; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #566204; }
.ac-custom svg path { stroke: #566204; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question ul { margin: 0; float: left; width: 400px; }
#question li { padding: 8px 0; }
#graph { float: right; margin-top: -10px; }
#graph ul { list-style: none; padding-left: 50px; }
#graph li { font-size: 24px; }
#graph li:before { font-family: AppleGothic, "Lucida Sans", Impact, Verdana, sans-serif; content: '■'; float: left; width: 1em; margin: -25px -11px; font-size: 200%; }
#graph li:nth-child(1):before { color: #ffff00; }
#graph li:nth-child(2):before { color: #007f00; }
#graph li:nth-child(3):before { color: #007dff; }
#graph li:nth-child(4):before { color: #cc7f00; }
#graph li:nth-child(5):before { color: #99007f; }
#graph li:nth-child(6):before { color: #cbcb66; }
#answer { display: none; text-align: center; }
#answer p { text-align: center; margin:0 auto; width:85%;}
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }
.answer span { display: block; }
.feedback { font-size: 24px; margin-top: 10px; text-align: center; }
.feedback img { vertical-align: middle; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }
#buttons .next { display: none; }

<?php if ($language == 'es_ES'): ?>
	#graph li { font-size: 22px; }
<?php endif; ?>

html[dir="rtl"] .ac-custom label { padding: 0 50px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
html[dir="rtl"] .ac-custom svg { right: 3px; }
html[dir="rtl"] #graph li:before { float: right; margin: -25px -5px; }
html[dir="rtl"] {}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question ul {width: 323px;}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("Look at the chart at the right side below and click on the statement you think is correct."); ?></h2>
				<div id="graph">
					<div id="chart_div"></div>
					<ul>
						<li><?php echo _("Desert"); ?></li>
						<li><?php echo _("Grassland"); ?></li>
						<li><?php echo _("Rainforest"); ?></li>
						<li><?php echo _("Taiga"); ?></li>
						<li><?php echo _("Temperate Deciduous Forest"); ?></li>
						<li><?php echo _("Tundra"); ?></li>
					</ul>
				</div>
				<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
					<ul>
						<li><input id="a" type="radio" name="q"><label for="a">A. <?php echo _("The amount of annual rainfall is the most important factor in classifying biomes."); ?></label></li>
						<li><input id="b" type="radio" name="q"><label for="b">B. <?php echo _("The grassland and taiga biomes have the same amount of annual rainfall, so they are very similar in plant and animal life."); ?></label></li>
						<li><input id="c" type="radio" name="q"><label for="c">C. <?php echo _("Grasslands have less rain than rainforests and more rain than deserts."); ?></label></li>
						<li><input id="d" type="radio" name="q"><label for="d">D. <?php echo _("The desert and tundra biomes have the same amount of annual rainfall, so they are very similar in plant and animal life."); ?></label></li>
					</ul>
				</form>
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
	<section id="preloader"><section class="selected"><strong><?php echo _("Making a rain gauge..."); ?></strong></section></section>
	<script>
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	checkAnswer = 0,
	answered = 1;

	$('img.pet').click(function() { $('#graph').fadeIn(); });

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('A. <?php echo _("The amount of annual rainfall is the most important factor in classifying biomes."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite, rainfall is important. But temperature is also a factor, and the different combinations of both are what provide various biomes."); ?></p>');
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('B. <?php echo _("The grassland and taiga biomes have the same amount of annual rainfall, so they are very similar in plant and animal life."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the grassland and taiga biomes are only similar in rainfall, not in temperature. Long, cold winters, and short, mild, wet summers are typical of the taiga biome. Whereas the grassland has a more temperate climate."); ?></p>');
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('C. <?php echo _("Grasslands have less rain than rainforests and more rain than deserts."); ?>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct, the green bar (60 cm) is between the blue (180 cm) and the yellow (20 cm) bars."); ?></p>');
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('D. <?php echo _("The desert and tundra biomes have the same amount of annual rainfall, so they are very similar in plant and animal life."); ?>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, no, the desert and tundra biomes are only similar in rainfall, not in temperature. The desert is extremely hot and the tundra is extremely cold."); ?></p>');
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('biodiversity-qq4-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "16.php"; // change to the previous page's last screen e.g. 4.html#screen2
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
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
