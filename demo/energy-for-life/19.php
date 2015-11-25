<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title>
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
<style>
h1 { color: #5b4d4f; }
.wrap { border-left: 1px dashed #c0f84a; border-right: 1px dashed #c0f84a; }
.bg { background: url('images/19/bg.png') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; z-index:99; }
.ac-custom { width: 100%; padding: 0 !important; }
.ac-custom label { color: #000; padding-left: 50px; font-size: 20px; }
.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label { color: #842749; }
.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
.ac-custom label::before { border: 2px solid #842749; }
.ac-custom svg path { stroke: #842749; }
.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question li, #answer li { padding: 8px 0; }
#answer { display: none; text-align: left; }
#cover { position: absolute; width: 100%; height: 500px; z-index: 9999; }
#answer ul { list-style: none; }
#answer p { text-align: center; font-size: 22px; }
#answer .ac-custom svg { left: 3px; margin-top: -11px; }
#answer form ul { margin-left: 100px; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }
#answer form img { vertical-align: middle; position: absolute; left: -40px; margin-right: 10px; background: 0 !important; padding: 0 !important; margin-top: 0 !important; }
.answer span { display: block; }
#buttons .next { display: none; }#form img { display: none; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -20px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -13px; }
html[dir="rtl"] #question li, html[dir="rtl"] #answer li { text-align: right; }
html[dir="rtl"] #answer form img {right: -20px;}
html[dir="rtl"] #answer form ul {margin-right: 100px;}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #6"); ?></h1>
				<h2><?php echo _('Click on <span class="blink">all</span> the changes that you think the events are causing.'); ?></h2>
				<div id="form">
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<p><?php echo _("Green plants absorb solar energy."); ?></p>
						<ul>
							<li><img src="images/others/correct.png">
								<input id="a1" type="checkbox" name="q1">
								<label for="a1"><?php echo _("Oxygen is used and carbon dioxide is generated."); ?></label>
							</li>
							<li><img src="images/others/correct.png">
								<input id="b1" type="checkbox" name="q1">
								<label for="b1"><?php echo _("Sugar and oxygen are manufactured."); ?></label>
							</li>
							<li><img src="images/others/correct.png">
								<input id="c1" type="checkbox" name="q1">
								<label for="c1"><?php echo _("Energy is converted into forms used by all living things."); ?></label>
							</li>
						</ul>
	
						<p><?php echo _("Stored carbon reserves are burned as fuel."); ?></p>
						<ul>
							<li>
								<img src="images/others/correct.png">
								<input id="a2" type="checkbox" name="q2">
								<label for="a2"><?php echo _("Carbon dioxide stored long ago is released into the atmosphere."); ?></label>
							</li>
							<li>
								<img src="images/others/correct.png">
								<input id="b2" type="checkbox" name="q2">
								<label for="b2"><?php echo _("Oxygen and starch are produced."); ?></label>
							</li>
							<li>
								<img src="images/others/correct.png">
								<input id="c2" type="checkbox" name="q2">
								<label for="c2"><?php echo _("Energy for electricity, heat, and transportation is released."); ?></label>
							</li>
						</ul>
	
						<p><?php echo _("Cells consume sugar and oxygen."); ?></p>
						<ul>
							<li>
								<img src="images/others/correct.png">
								<input id="a3" type="checkbox" name="q3">
								<label for="a3"><?php echo _("Energy is stored for use by higher organisms."); ?></label>
							</li>
							<li>
								<img src="images/others/correct.png">
								<input id="b3" type="checkbox" name="q3">
								<label for="b3"><?php echo _("Cells release the energy they need for life."); ?></label>
							</li>
							<li>
								<img src="images/others/correct.png">
								<input id="c3" type="checkbox" name="q3">
								<label for="c3"><?php echo _("Chemical bonds are broken and energy is released."); ?></label>
							</li>
						</ul>
					</form>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>

				<p><?php echo _("You answered..."); ?></p>

				<div id="cover"></div>
				<div id="ans"></div>
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
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans1 = '',
	ans2 = '',
	ans3 = '',
	checkAnswer = 0,
	a = $('div.a'),
	b = $('div.b'),
	c = $('div.c'),
	answered = 1;
	function save() {
		if (answered == 0) {
			saveAnswer('energy-for-life-qq6-a', ans1);
			saveAnswer('energy-for-life-qq6-b', ans2);
			saveAnswer('energy-for-life-qq6-c', ans3);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "18.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answer.is(':visible')) {
			$('form img').fadeOut();
			$('#ans form').appendTo('#question #form');
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){ question.fadeIn(); }); 
		}
	});
	
	check.click(function() {
		if ($('input[name="q1"]:checkbox:checked').length == 0)
			checkAnswer = 0;
		else if ($('input[name="q2"]:checkbox:checked').length == 0)
			checkAnswer = 0;
		else if ($('input[name="q3"]:checkbox:checked').length == 0)
			checkAnswer = 0;
		else
			checkAnswer = 1;

		if (checkAnswer == 0) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			checkAns();
			$('#question form').appendTo('#ans');
			$('form img').fadeIn();
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){ answer.fadeIn(); }); 
			save();
		}
	});
	
	function checkAns(){
		if ( $('#a1').is(":checked")){
			$('#a1').parent().find('img').attr('src','images/others/wrong.png');
		} else{
			$('#a1').parent().find('img').attr('src','images/others/correct.png');
			
		}
		if ( $('#b1').is(":checked")){
			$('#b1').parent().find('img').attr('src','images/others/correct.png');
		} else{
			$('#b1').parent().find('img').attr('src','images/others/wrong.png');
		}
		if ( $('#c1').is(":checked")){
			$('#c1').parent().find('img').attr('src','images/others/correct.png');
		} else{
			$('#c1').parent().find('img').attr('src','images/others/wrong.png');
		}
		if ( $('#a2').is(":checked")){
			$('#a2').parent().find('img').attr('src','images/others/correct.png');
		} else{
			$('#a2').parent().find('img').attr('src','images/others/wrong.png');
		}
		if ( $('#b2').is(":checked")){
			$('#b2').parent().find('img').attr('src','images/others/wrong.png');
		} else{
			$('#b2').parent().find('img').attr('src','images/others/correct.png');
		}
		if ( $('#c2').is(":checked")){
			$('#c2').parent().find('img').attr('src','images/others/correct.png');
		} else{
			$('#c2').parent().find('img').attr('src','images/others/wrong.png');
		}
		if ( $('#a3').is(":checked")){
			$('#a3').parent().find('img').attr('src','images/others/wrong.png');
		} else{
			$('#a3').parent().find('img').attr('src','images/others/correct.png');
		}
		if ( $('#b3').is(":checked")){
			$('#b3').parent().find('img').attr('src','images/others/correct.png');
		} else{
			$('#b3').parent().find('img').attr('src','images/others/wrong.png');
		}
		if ( $('#c3').is(":checked")){
			$('#c3').parent().find('img').attr('src','images/others/correct.png');
		} else{
			$('#c3').parent().find('img').attr('src','images/others/wrong.png');
		}
	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
