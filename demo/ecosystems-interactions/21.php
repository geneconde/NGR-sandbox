<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Ecosystems Interactions"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="https://www.google.com/jsapi"></script>
<script>
google.load('visualization', '1.0', {'packages':['corechart']});
google.setOnLoadCallback(drawChart);

function drawChart() {
	var data = new google.visualization.arrayToDataTable([
		['Year', '<?php echo _("Population"); ?>'],
		['1910',   0],
		['1920',   370],
		['1930',   400],
		['1940',   1200],
		['1950',   0]
	]);

	var options = { 'legend': 'none', 'width': 400, 'height': 300, 'backgroundColor': 'transparent' };

	var chart = new google.visualization.LineChart(document.getElementById('chart'));
	chart.draw(data, options);
}
</script>
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

#chart { float: right; }

#answer { text-align: center; display: none; }
#answer .placeholder { padding: 10px; }
#answer p { text-align: center; }
.answer img {width:270px}
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }

html[dir="rtl"] #diagram { float: left; }
html[dir="rtl"] #question li { text-align: right; }
html[dir="rtl"] #question label { padding: 0 35px 0 0; }
html[dir="rtl"] #question section { float: right; }
html[dir="rtl"] #answer .feedback p.green { width: 800px; }
html[dir="rtl"] #chart { float: left; }
html[dir="rtl"] #question input[type="radio"], html[dir="rtl"] #question label::before { right: 0; }
	@media only screen and (max-width: 1250px){
		h1 {
		    padding-top: 33px;
		}

	}
	@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<div class="placeholder clearfix">
					<h2><?php echo _("Reindeer were first introduced on St. Paul Island, Alaska in 1910.  The island had few mammals and no predators.  The graph on the right below shows the changes in the St. Paul reindeer population between 1910 and 1950. Which of the following statements <span class='blink'>best</span> explains why the curve peaks between 1935 and 1940?"); ?></h2>

					<section>
						<ul>						

							<li><input id="a" name="q" type="radio"><label for="a">A. <?php echo _("Predators caught more and more deer."); ?></label></li>

							<li><input id="b" name="q" type="radio"><label for="b">B. <?php echo _("Young deer found abundant food sources."); ?></label></li>

							<li><input id="c" name="q" type="radio"><label for="c">C. <?php echo _("Severe winters destroyed deer shelters."); ?></label></li>

							<li><input id="d" name="q" type="radio"><label for="d">D. <?php echo _("The deer were unable to find many mates."); ?></label></li>

						</ul>
					</section>

					<div id="chart"></div>
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
</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="22.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Take the last quiz question!"); ?></strong></section></section>
	<?php include_once("setlocale.php"); ?>
	<script src="scripts/hexaflip.min.js"></script>
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
			answer.find('.answer').html('<p>' + 'A. '  + '<?php echo _("Predators caught more and more deer."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not really... if more deer were caught and killed, there would be a decrease in the population, not an increase."); ?></p>');
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<p>' + 'B. '  + '<?php echo _("Young deer found abundant food sources."); ?></p>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Young deer managed to find a lot of food, so they grew in population over those years. That food source may not have lasted after 1940."); ?></p>');
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<p>' + 'C. '  + '<?php echo _("Severe winters destroyed deer shelters."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not really... if deer shelters were destroyed, it would lead to deer dying in the severe winters. This would decrease the deer population."); ?></p>');
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<p>' + 'D. '  + '<?php echo _("The deer were unable to find many mates."); ?></p>');
			answer.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not really... if deer couldn't find mates, they wouldn't have more offspring. This would make the deer population stay the same until the old deer died."); ?></p>");
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qq6-a', ans);
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
