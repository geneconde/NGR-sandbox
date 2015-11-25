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
#question1, #answer1 { margin-top: 10px; }
#question1 ul { list-style: none; padding: 0; margin: 10px 0; float: left; width: 450px; overflow: hidden; }
#question1 img { float: right; margin-right: 6px; width: 340px; }
#question1 li { padding: 7px 0 7px 7px; position: relative; }
#question1 label { display: inline-block; position: relative; font-size: 24px; padding: 0 0 0 40px; vertical-align: top; cursor: pointer; }
#question1 input[type="radio"], #question1 label::before{ width: 35px; height: 35px; top: 50%; left: 0; margin-top: -25px; position: absolute; cursor: pointer; }
#question1 input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; }
#question1 label::before { content: ''; background: url(images/11/flower.png) left top no-repeat; width: 22px; height: 41px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
#question1 input[type="radio"]:checked + label { color: #000; } 
#question1 input[type="radio"]:checked + label::before { background-position: right top; }
#question2 { margin-top: 20px; }
#question2 h2 { padding-bottom: 15px; }
#question2 ul { margin: 0 auto; padding: 0; list-style: none; }
#question2 li { float: left; width: 197px; margin: 0 15px 0 0; }
#question2 li:last-child { margin-right: 0; }
#question2 input[type=radio] { display: none; }
#question2 label { font-size: 18px;display: block;text-align: center;cursor: pointer; width: 100%; }
#question2 input[type="radio"] + label img { margin-top: 5px; border: 4px solid transparent; -webkit-transition: all .3s ease; width: 175px; }
#question2 input[type="radio"]:checked + label img { border: 4px solid #C94F76; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#question2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size:20px; }
#question2 input[type="radio"]:checked + label span { color: #C94F76; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden;  ;}
#question2 input[type="radio"] + label { -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
#question2 input[type="radio"]:checked + label {}
#answer2 { margin-top: 20px; }
#answers { display: none; }
#answers p { text-align: left; }
#answers .placeholder { background: none; padding: 0; }
#answers .placeholder div { background: none; padding: 0; }
#answers .placeholder div p { text-align: left !important; }
#answers .image { float: left; width: 160px; margin-top: 10px; background: none; padding-right: 30px; }
#answers .image img { width: 165px; height: 120px; }
.answer span { display: block; }
.feedback { font-size: 24px; }
#buttons .next { display: none; }

html[dir="rtl"] #question1 ul { float: right; }
html[dir="rtl"] #question1 label { padding: 0 40px 0 0; }
html[dir="rtl"] #question1 input[type="radio"], html[dir="rtl"] #question1 label::before { right: 0; }
html[dir="rtl"] #answers .image { float: right; padding-left: 30px; }
html[dir="rtl"] #answers p { text-align: right !important;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 ul { width: 390px; }
	#question1 img { width: 300px; }
	#question2 li { width: 170px; margin: 0 5px 0 0; }
	#question2 input[type="radio"] + label img { width: 165px; }
}	

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 {margin-top:0px;}
	#question2 {margin-top:5px;}
	#question2 input[type="radio"] + label img {margin-top:-10px;}
}
	<?php if($language == "ar_EG") { ?>
			@media only screen and (max-width: 1250px){
				#question1 div, #question2 div, #answer1 div, #answer2 div {
				    background: rgba(255, 255, 255, .7);
				    border-radius: 5px;
				    padding: 5px;
				}
			}
	<?php } ?>

	@media only screen and (max-width: 1250px){
		.bg { padding-top: 33px; }
		#question1 img { float: right;  margin-right: 6px; width: 293px; }
		h2 { font-size: 21px; }
		#question1 img {
		    float: right;
		    margin-right: 6px;
		    width: 40%;
		}
	}
	@media only screen and (max-width: 960px){
		#question2 li {
		    float: left;
		    width: 23.5%;
		    margin: 0 5px 0 0;
		}
		#question2 ul {
		    margin: 0 auto;
		    padding: 0;
		    list-style: none;
		    width: 105% !important;
		}
		#question2 label {
		    width: 85% !important;
		}	
#question1 label {
    display: inline-block;
    position: relative;
    font-size: 22px;
    padding: 0 0 0 40px;
    vertical-align: top;
    cursor: pointer;
}
#question1 ul {
    list-style: none;
    padding: 0;
    margin: 10px 0;
    float: left;
    width: 54%;
    overflow: hidden;
}
	}
	@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #4"); ?></h1>
				<div class="transparentBox">
					<div id="question1">
						<div class="clearfix">
							<h2><?php echo _("Question A. What is a beaver's habitat?"); ?></h2>
							<ul>
								<li><input id="a1" name="q1" type="radio"><label for="a1">A. <?php echo _("The number of beavers in a given area."); ?></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1">B. <?php echo _("The streams of North America."); ?></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1">C. <?php echo _("The plants that beavers eat."); ?></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1">D. <?php echo _("The tail of a beaver."); ?></label></li>
							</ul>
		
							<img src="images/11/beavers.jpg">
						</div>
					</div>
					<div id="question2">
						<div class="clearfix">
							<h2><?php echo _("Question B. Which of the following animals does not use the sycamore fig as a food source?"); ?></h2>
							<ul class="clearfix">
								<li>
									<input type="radio" id="a2" name="q2">
									<label for="a2"><img src="images/11/a2.jpg"><span><?php echo _("Monkeys"); ?></span></label>
								</li>
								<li>
									<input type="radio" id="b2" name="q2">
									<label for="b2"><img src="images/11/b2.jpg"><span><?php echo _("Elephants"); ?></span></label>
								</li>
								<li>
									<input type="radio" id="c2" name="q2">
									<label for="c2"><img src="images/11/c2.jpg"><span><?php echo _("Bats"); ?></span></label>
								</li>
								<li>
									<input type="radio" id="d2" name="q2">
									<label for="d2"><img src="images/11/d2.jpg"><span><?php echo _("Bees"); ?></span></label>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #4")." - "._("How did I do?"); ?></h1>
				<div id="answer1">
					<div class="clearfix">
						<h2><?php echo _("Question A. What is a beaver's habitat?"); ?></h2>
						<div class="image"><img src="images/11/beavers.jpg"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
							<p class="answer"></p>
							<div class="feedback center"></div>
						</div>
					</div>
				</div>
				<div id="answer2">
					<div class="clearfix">
						<h2><?php echo _("Question B. Which of the following animals does not use the sycamore fig as a food source?"); ?></h2>
						<div class="image"></div>
						<div class="placeholder">
							<p><?php echo _("You answered..."); ?></p>
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
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>
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
			answer1.find('.answer').html('A. ' + '<?php echo _("The number of beavers in a given area."); ?>');
			answer1.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope! The beaver's habitat is where the animal lives - streams of North America."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b1') {
			answer1.find('.answer').html('B. ' + '<?php echo _("The streams of North America."); ?>');
			answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Beavers live in lodges created from branches and mud. They build their lodges after they build dams and create a pond."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			answer1.find('.answer').html('C. ' + '<?php echo _("The plants that beavers eat."); ?>');
			answer1.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope! The beaver's habitat is where the animal lives – plants are only part of their habitat."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd1') {
			answer1.find('.answer').html('D. ' + '<?php echo _("The tail of a beaver."); ?>');
			answer1.find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope! The beaver's tail is an adaptation - streams of North America are its habitat."); ?></p>");
			ans1 = 'D';
		}
	});

	question2.find('input[type="radio"]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			answer2.find('.image').html('<img src="images/11/a2.jpg">')
			answer2.find('.answer').html('<?php echo _("Monkeys"); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Monkeys eat the fig fruits."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			answer2.find('.image').html('<img src="images/11/b2.jpg">')
			answer2.find('.answer').html('<?php echo _("Elephants"); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! Elephants love figs."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			answer2.find('.image').html('<img src="images/11/c2.jpg">')
			answer2.find('.answer').html('<?php echo _("Bats"); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not bats. Bats even eat figs upside down!"); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			answer2.find('.image').html('<img src="images/11/d2.jpg">')
			answer2.find('.answer').html('<?php echo _("Bees"); ?>');
			answer2.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct! Bees don't eat figs, they build hives in hollow spaces."); ?></p>");
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qc4-a', ans1);
			saveAnswer('ecosystems-interactions-qc4-b', ans2);

			answered = 1;
		}
	}

	back.click(function() {
		if (questions.is(':visible')) {
			document.location.href = "10.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
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
