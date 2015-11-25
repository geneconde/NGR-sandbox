<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(9, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'ecosystems-interactions-qc3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/svgcheckbx.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
body {overflow: hidden;}
h2 { margin: 0; }
.wrap { border-left: 1px dashed #feda74; border-right: 1px dashed #feda74; }
.bg { background: url('images/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#question1 div, #question2 div.safe, #answer1 div, #answer2 div { background: rgba(255, 255, 255, .7); border-radius: 5px; padding: 10px; }
#question1, #answer1 { margin-top: 10px; }
#question1 div { overflow: hidden; }
#question1 ul { width: 835px; margin: 0; padding: 0; list-style: none; }
#question1 li { float: left; width: 208px; }
#question1 input[type=radio] { display: none; }
#question1 label { font-size: 18px; display: block; text-align: center; cursor: pointer; }
#question1 input[type="radio"] + label img { margin-top: 5px; border: 4px solid transparent; -webkit-transition: all .3s ease; width: 190px; }
#question1 input[type="radio"]:checked + label img { border: 4px solid #C94F76; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#question1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; }
#question1 input[type="radio"]:checked + label span { color: #C94F76; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }

#question2 { margin-top: 20px; }
#question2 ul { float: left; width: 380px; list-style: none; margin: 10px 0 0; padding: 0; }
#question2 li { font-size: 22px; }
#box { text-align: center; background: none; padding: 0 0 10px 0; float: right; width: 400px; }
#box .info { color: #315F1E; font-size: 20px; padding: 0; margin-top: -10px; }
#hexaflip { margin: 10px auto 0; }
#answers { display: none; }
#answers .placeholder { background: none !important; padding: 0 !important; }
#answers p { text-align: center; }
#answers .placeholder div { float: right; width: 78%; background: none !important; padding: 0 !important; }
#answers .placeholder div p { text-align: left !important; }
#answers .placeholder .image { float: left; background: none !important; padding: 0 !important; width: 160px; margin-top: 10px; padding-right: 20px; }
#answers .placeholder .image img { width: 160px;height:160px; }
#answer2 { margin-top: 20px; }
.feedback { font-size: 24px; text-align: left; }
#buttons .next { display: none; }

html[dir="rtl"] #question2 ul { float: right; }
html[dir="rtl"] #box .info { margin-top: 0; }
html[dir="rtl"] #answers .image { float: right; padding-left: 20px !important; }
html[dir="rtl"] #answers p { text-align: right !important; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#box { width: 310px; }
	#question1 ul { width: 100%; }
	#question1 li { width: 175px; }
	#question1 input[type="radio"] + label img { width: 155px; }
	#answers .placeholder div { width: 75%; }
	html[dir="rtl"] #answers .placeholder div:nth-child(2) { width: 73%; float: left; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>
				<div id="question1">
					<div>
						<h2><?php echo _("Question A. Why do adaptations become common in populations?"); ?></h2>
						
						<ul>
							<li>
								<input type="radio" id="a1" name="q1">
								<label for="a1"><img src="images/9/a1.jpg"><span><?php echo _("Adaptations make it harder for animals to survive."); ?></span></label>
							</li>
							<li>
								<input type="radio" id="b1" name="q1">
								<label for="b1"><img src="images/9/b1.jpg"><span><?php echo _("Only animals are able to adapt."); ?></span></label>
							</li>
							<li>
								<input type="radio" id="c1" name="q1">
								<label for="c1"><img src="images/9/c1.jpg"><span><?php echo _("Only plants are able to adapt."); ?></span></label>
							</li>
							<li>
								<input type="radio" id="d1" name="q1">
								<label for="d1"><img src="images/9/d1.jpg"><span><?php echo _("Adaptations make it easier for animals to survive."); ?></span></label>
							</li>
						</ul>
					</div>
				</div>
				<div id="question2">
					<div class="safe clearfix">
						<h2><?php echo _("Question B. Which of the following would <span class=\"blink\">NOT</span> be a problem created by an invasive species?"); ?></h2>
					
						<ul>
							<li><?php echo _("A. Creating new habitat for native species."); ?></li>
							<li><?php echo _("B. Preying upon native species."); ?></li>
							<li><?php echo _("C. Competing with native species."); ?></li>
							<li><?php echo _("D. Over-populating the habit."); ?></li>
						</ul>
						<div id="box">
							<p class="info"><?php echo _("Rotate or flip the box below either up or down to set your answer. Click, hold and slide mouse up or down."); ?></p>
							<div id="hexaflip"></div>
						</div>
					</div>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #3")." - "._("How did I do?"); ?></h1>
				<div id="answer1">
					<div>
						<h2><?php echo _("Question A. Why do adaptations become common in populations?"); ?></h2>

						<div class="placeholder clearfix">
							<div class="image"></div>
							<div>
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>
								<p class="feedback"></p>
							</div>
						</div>
					</div>
				</div>
				<div id="answer2">
					<div>
						<h2><?php echo _("Question B. Which of the following would <span class=\"blink\">NOT</span> be a problem created by an invasive species?"); ?></h2>

						<div class="placeholder clearfix">
							<div class="image"></div>
							<div>
								<p><?php echo _("You answered..."); ?></p>
								<p class="answer"></p>
								<p class="feedback"></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Feeding wild birds..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/hexaflip.js"></script>

	<script>
	var hexa,
	images = ['./images/others/a.png','./images/others/b.png','./images/others/c.png','./images/others/d.png'];
	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 130 });
	</script>

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
	checkAnswer = 0,
	answered = <?php echo $answered; ?>;

	question1.find('input[type="radio"]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			answer1.find('.image').html('<img src="images/9/a1.jpg">')
			answer1.find('.answer').html('<?php echo _("Adaptations make it harder for animals to survive."); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Adaptations make survival easier."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			answer1.find('.image').html('<img src="images/9/b1.jpg">')
			answer1.find('.answer').html('<?php echo _("Only animals are able to adapt."); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! All living things are able to adapt to changing environments."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			answer1.find('.image').html('<img src="images/9/c1.jpg">')
			answer1.find('.answer').html('<?php echo _("Only plants are able to adapt."); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! All living things are able to adapt to changing environments."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			answer1.find('.image').html('<img src="images/9/d1.jpg">')
			answer1.find('.answer').html('<?php echo _("Adaptations make it easier for animals to survive."); ?>');
			answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! In the desert, the owl stays cool by hunting for its prey at night."); ?></p>');
			ans1 = 'D';
		}
	});

	function save() {
		var hexaValue = hexa.getValue();

		if (hexaValue == './images/others/a.png') {
			answer2.find('.image').html('<img src="images/others/a.png">')
			answer2.find('.answer').html('<?php echo _("A. Creating new habitat for native species."); ?>');
			answer2.find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("That's the one! New habitat would be great if invasive species created it. They don't."); ?></p>");
			ans2 = 'A';
		}

		if (hexaValue == './images/others/b.png') {
			answer2.find('.image').html('<img src="images/others/b.png">')
			answer2.find('.answer').html('<?php echo _("B. Preying upon native species."); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! Invasive species often prey upon natives."); ?></p>');
			ans2 = 'B';
		}

		if (hexaValue == './images/others/c.png') {
			answer2.find('.image').html('<img src="images/others/c.png">')
			answer2.find('.answer').html('<?php echo _("C. Competing with native species."); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Sorry. Invasive species often out-compete natives."); ?></p>');
			ans2 = 'C';
		}

		if (hexaValue == './images/others/d.png') {
			answer2.find('.image').html('<img src="images/others/d.png">')
			answer2.find('.answer').html('<?php echo _("D. Over-populating the habit."); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Without predators, invasive species would increase rapidly in population."); ?></p>');
			ans2 = 'D';
		}

		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qc3-a', ans1);
			saveAnswer('ecosystems-interactions-qc3-b', ans2);
		}
	}

	back.click(function() {
		if (questions.is(':visible')) {
			document.location.href = "8.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answers.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answers.fadeOut(function(){ questions.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('#question1 input:radio:checked').length;

		if (checkAnswer != 1) {
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
