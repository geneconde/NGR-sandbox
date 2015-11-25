<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'ecosystems-interactions';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'ecosystems-interactions-qq4-a');
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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
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
.bg { background: url('images/19/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.placeholder { padding: 10px 10px 20px 10px; margin-top: 10px; background: rgba(255, 255, 255, .5); border-radius: 5px; }
#question, #answer {-webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
#question ul { list-style: none; padding: 0; margin: 0 auto; max-width: 800px; }
#question li { margin: 0 auto; padding: 5px 0; position: relative; }
#question label { display: inline-block; position: relative; font-size: 24px; padding: 0 0 0 40px; vertical-align: top; color: rgba(0,0,0,.9); cursor: pointer; -webkit-transition: color 0.3s; transition: color 0.3s; }
#question input[type="radio"], #question label::before{ width: 30px; height: 30px; top: 50%; left: 0; margin-top: -15px; position: absolute; cursor: pointer; }
#question input[type="radio"] { opacity: 0; -webkit-appearance: none; display: inline-block; vertical-align: middle; z-index: 100; } 
#question label::before { content: ''; background: url(images/19/19.png) left top no-repeat; width: 30px; height: 30px; -webkit-transition: opacity 0.3s; transition: opacity 0.3s; }
#question input[type="radio"]:checked + label { color: #000; } 
#question input[type="radio"]:checked + label::before { background-position: left bottom; }
#question section { overflow: hidden; }
#question section ul { float: left; width: 360px; margin-left: 50px; margin-top: 40px; }
#question section img { float: right; width: 340px; margin: 10px 60px 0 0; }
#answer { display: none; }
#answer p { text-align: center; }
.answer img {width:300px;}
.answer span { display: block; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }

html[dir="rtl"] #question input[type="radio"], html[dir="rtl"] #question label::before { right: 0; }
html[dir="rtl"] #question label { padding: 0 60px 0 0; }
html[dir="rtl"] #question section img { float: left; }
html[dir="rtl"] #question section ul { float: right; width: 435px; margin-left: 0; }
html[dir="rtl"] .feedback { width: 820px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question section ul { margin-left: 0; }
	#question section img { width: 335px; margin: 10px 0 0; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<div class="placeholder">
					<h2><?php echo _("What can you infer about a camel from the fact that it can easily live in the desert?"); ?></h2>
					<section class="clearfix">
						<ul>						
							<li><input id="a" name="q" type="radio"><label for="a">A. <?php echo _("It must be a very large animal."); ?></label></li>
							<li><input id="b" name="q" type="radio"><label for="b">B. <?php echo _("It must eat only cacti."); ?></label></li>
							<li><input id="c" name="q" type="radio"><label for="c">C. <?php echo _("It must have a small habitat."); ?></label></li>
							<li><input id="d" name="q" type="radio"><label for="d">D. <?php echo _("It must survive on little water."); ?></label></li>
						</ul>

						<img src="images/19/camel.jpg">
					</section>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #4")." - "._("How did I do?"); ?></h1>
				<div class="placeholder">
					<p><?php echo _("You answered..."); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Riding a camel..."); ?></strong></section></section>
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
	answered = <?php echo $answered; ?>;

	question.find('input[type=radio]').on('click', function() {
		var radio = $(this);

		if (radio.attr('id') == 'a') {
			answer.find('.answer').html('<img src="images/19/camel.jpg"><p>' + 'A. '  + '<?php echo _("It must be a very large animal."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Actually, animals that are smaller than a camel can also do well in the desert."); ?></p>');
			ans = 'A';
		}

		if (radio.attr('id') == 'b') {
			answer.find('.answer').html('<img src="images/19/camel.jpg"><p>' + 'B. '  + '<?php echo _("It must eat only cacti."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! Some animals are carnivores and eat other animals. Cacti have adapted to survive in the desert, but that does not necessarily mean animals have to eat them."); ?></p>');
			ans = 'B';
		}

		if (radio.attr('id') == 'c') {
			answer.find('.answer').html('<img src="images/19/camel.jpg"><p>' + 'C. '  + '<?php echo _("It must have a small habitat."); ?></p>');
			answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! A camel’s habitat is the entire desert, not such a small habitat."); ?></p>');
			ans = 'C';
		}

		if (radio.attr('id') == 'd') {
			answer.find('.answer').html('<img src="images/19/camel.jpg"><p>' + 'D. '  + '<?php echo _("It must survive on little water."); ?></p>');
			answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! The fact that a camel can thrive in the desert means it has adapted somehow to survive on little water."); ?></p>');
			ans = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qq4-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "18.php"; // change to the previous page's last screen e.g. 4.html#screen2
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
