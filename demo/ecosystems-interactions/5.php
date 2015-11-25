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
<style>
h2 { margin: 0; }
.wrap { border-left: 1px dashed #feda74; border-right: 1px dashed #feda74; }
.bg { background: url('images/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question1 div, #question2 div, #answer1 div, #answer2 div { background: rgba(255, 255, 255, .7); border-radius: 5px; padding: 10px; }
#question1 { margin-top: 10px; }
#question1 ul { list-style: none; padding: 0; max-width: 800px;margin:0; }
#question1 li { margin: 0 auto; padding: 8px 0; position: relative; }
#question1 label { display: inline-block; position: relative; font-size: 20px; padding: 0 0 0 40px; vertical-align: top; cursor: pointer; }
#question1 input[type="radio"], #question1 label::before{ width: 35px; height: 35px; top: 50%; left: 0; margin-top: -25px; position: absolute; cursor: pointer; }
#question1 input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; }
#question1 label::before { content: ''; background: url(images/5/flower.png) left top no-repeat; width: 22px; height: 41px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
#question1 input[type="radio"]:checked + label { color: #000; } 
#question1 input[type="radio"]:checked + label::before { background-position: right top; }
#question2 { overflow: hidden; margin-top: 20px; }
#question2 ul { overflow: hidden; margin: 0 auto; padding: 10px; list-style: none; }
#question2 li { float: left; width: 202px; }
#question2 input[type=radio] { display: none; }
#question2 label { font-size: 18px;display: block;text-align: center;cursor: pointer;width: 200px;}
#question2 input[type="radio"] + label img { margin-top: 5px; border: 4px solid transparent; -webkit-transition: all .3s ease; border-radius: 5px !important; width: 180px; }
#question2 input[type="radio"]:checked + label img {-webkit-transition: all .3s ease; border: 4px solid #C94F76; -webkit-backface-visibility: hidden; }
#question2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size:20px; }
#question2 input[type="radio"]:checked + label span { color: #000; -webkit-transition: all .3s ease; color: #C94F76; -webkit-backface-visibility: hidden;  ;}
#question2 input[type="radio"] + label { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; height: 195px;}
#question2 input[type="radio"]:checked + label {}
#answers { display: none; }
#answers p { text-align: center; vertical-align: middle;}
#answer2 { margin-top: 20px; }
#answer2 div { overflow: hidden; }
#answer2 p { text-align: left !important; }
#answer2 .image { background: none !important; padding: 0 !important; float: left; width: 200px; margin-top: 20px; }
#answer2 h2 { text-align: left! important; clear: both; }
#answer2 .placeholder { float: right; background: none; margin-top: 10px; width: 73%; }
.answer span { display: block; }
.feedback { background: none !important; padding: 0 !important; font-size: 24px; text-align: center; }
#buttons .next { display: none; }

html[dir="rtl"] #question1 input[type="radio"], #question1 label::before { right: 0; }
html[dir="rtl"] #question1 label { padding: 0 40px 0 0; }
html[dir="rtl"] #answer2 h2, html[dir="rtl"] #answer2 p { text-align: right! important; }
html[dir="rtl"] #answer2 .image { float: right;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question2 li { width: 170px; }
	#question2 input[type="radio"] + label img { width: 160px; }
	#answer2 .placeholder { width: 480px; }
}	
@media only screen and (max-width: 1250px){
	div#questions {padding-top: 33px; }
	h2 { font-size: 20px; }
	label { line-height: 15px; font-size: 18px !important; }
	#question2 ul { padding-top: 0px !important; }
	#question2 input[type="radio"] + label { height: 170px; }
	div#answers { padding-top: 33px; }
	div#answer1 p {  font-size: 20px; }
	div#answer2 p {  font-size: 20px; }
}
@media only screen and (max-width: 960px){
	#question2 li {
	    float: left;
	    width: 190px;
	}
	#answer2 .image {
	    width: 190px;
	    margin-top: 20px;
	}

}
@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #1"); ?></h1>
				<div id="question1">
					<div>
						<h2><?php echo _("Question A. What is an ecosystem?"); ?></h2>
						<ul>
							<li><input id="a1" name="q1" type="radio"><label for="a1">A. <?php echo _("An un-natural unit consisting of plants, animals, and microorganisms in an area functioning together and interacting with the environment."); ?></label></li>
							<li><input id="b1" name="q1" type="radio"><label for="b1">B. <?php echo _("A natural unit consisting of plants, animals, and microorganisms in an area functioning together and interacting with the environment."); ?></label></li>
							<li><input id="c1" name="q1" type="radio"><label for="c1">C. <?php echo _("An un-natural unit consisting of plants, animals, and microorganisms in an area not functioning together or interacting with the environment."); ?></label></li>
							<li><input id="d1" name="q1" type="radio"><label for="d1">D. <?php echo _("A natural unit consisting of plants, animals, and microorganisms in an area not functioning together or interacting with the environment."); ?></label></li>
						</ul>
					</div>
				</div>
				<div id="question2">
					<div>
						<h2><?php echo _("Question B. What non-living things might be in an ecosystem?"); ?></h2>
						<ul>
							<li>
								<input type="radio" id="a2" name="q2">
								<label for="a2"><img src="images/5/a2.jpg"><span><?php echo _("Mammals and insects"); ?></span></label>
							</li>
							<li>
								<input type="radio" id="b2" name="q2">
								<label for="b2"><img src="images/5/b2.jpg"><span><?php echo _("Fungi and plants"); ?></span></label>
							</li>
							<li>
								<input type="radio" id="c2" name="q2">
								<label for="c2"><img src="images/5/c2.jpg"><span><?php echo _("Rocks and soil"); ?></span></label>
							</li>
							<li>
								<input type="radio" id="d2" name="q2">
								<label for="d2"><img src="images/5/d2.jpg"><span><?php echo _("Bacteria and other microbes"); ?></span></label>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #1")." - "._("How did I do?"); ?></h1>
				<div id="answer1">
					<div>
						<h2><?php echo _("Question A. What is an ecosystem?"); ?></h2>
						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>
						<div class="feedback center"></div>
					</div>
				</div>
				<div id="answer2">
					<div>
						<h2><?php echo _("Question B. What non-living things might be in an ecosystem?"); ?></h2>
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?> 
							<p class="answer"></p>
							<div class="feedback center"></div>
						</div>	
					</div>
				</div>		
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your first quick check?"); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script>
	var back = $('a.back-toggle'),
	next = $('a.next-toggle'),
	check = $('a.check-toggle'),
	questions = $('#questions'),
	question1 = $('#question1'),
	question2 = $('#question2'),
	answers = $('#answers'),
	answer1 = $('#answer1'),
	answer2 = $('#answer2'),
	ans1 = '',
	ans2 = '',
	checkAnswer1 = 0,
	checkAnswer2 = 0,
	answered = 1;

	question1.find('input[type="radio"]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			answer1.find('.answer').html('A. ' + '<?php echo _("An un-natural unit consisting of plants, animals, and microorganisms in an area functioning together and interacting with the environment."); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! An ecosystem is a natural unit of living things interacting together and with the environment."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			answer1.find('.answer').html('B. ' + '<?php echo _("A natural unit consisting of plants, animals, and microorganisms in an area functioning together and interacting with the environment."); ?>');
			answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Within an ecosystem all kinds of living and non-living interact and exist together."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			answer1.find('.answer').html('C. ' + '<?php echo _("An un-natural unit consisting of plants, animals, and microorganisms in an area not functioning together or interacting with the environment."); ?>');
			answer1.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope! An ecosystem is a natural unit of living things interacting together and with the environment. If the parts of an ecosystem did not work together it really wouldn't be a system."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd1') {
			answer1.find('.answer').html('D. ' + '<?php echo _("A natural unit consisting of plants, animals, and microorganisms in an area not functioning together or interacting with the environment."); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! An ecosystem is a natural unit of living things- but living and non-living things function and interact with each other within the ecosystem."); ?></p>');
			ans1 = 'D';
		}
	});

	question2.find('input[type="radio"]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			answer2.find('.image').html('<img src="images/5/a2.jpg">');
			answer2.find('.answer').html('<?php echo _("Mammals and insects"); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Mammals and insects can be part of an ecosystem, but they are living things. Rocks and soil are examples of non-living parts of an ecosystem."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			answer2.find('.image').html('<img src="images/5/b2.jpg">');
			answer2.find('.answer').html('<?php echo _("Fungi and plants"); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Fungi and plants can be part of an ecosystem, but they are living things. Rocks and soil are examples of non-living parts of an ecosystem."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			answer2.find('.image').html('<img src="images/5/c2.jpg">');
			answer2.find('.answer').html('<?php echo _("Rocks and soil"); ?>');
			answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Rocks and soil would be considered non-living parts of an ecosystem. The non-living and living components of an ecosystem are always interacting with each other, for example, when a plant is growing in soil."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			answer2.find('.image').html('<img src="images/5/d2.jpg">');
			answer2.find('.answer').html('<?php echo _("Bacteria and other microbes"); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Bacteria and microbes can be part of an ecosystem, but they are living things. Rocks and soil are examples of non-living parts of an ecosystem."); ?></p>');
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qc1-a', ans1);
			saveAnswer('ecosystems-interactions-qc1-b', ans2);

			answered = 1;
		}
	}

	back.click(function() {
		if (questions.is(':visible')) {
			document.location.href = "4.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answers.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answers.fadeOut(function(){ questions.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer1 = $('#question1 input:radio:checked').length;
		checkAnswer2 = $('#question2 input:radio:checked').length;

		if (checkAnswer1 != 1 || checkAnswer2 != 1) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			questions.fadeOut(function(){ answers.fadeIn(); }); 
			save();
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>
</body>
</html>
