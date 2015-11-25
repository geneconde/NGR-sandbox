<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(9, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'composition-of-matter-qc3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Composition of Matter'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/component.css" />
<link rel="stylesheet" type="text/css" href="styles/dropdown.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery.dropdown.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h2 { margin: 0;font-size:22px; }
#answers p {font-size:19px !important;}
.wrap { border-left: 1px dashed #d0de84; border-right: 1px dashed #d0de84; }
.bg { background: url('images/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.ac-custom { padding: 0; text-align: center; }
#questions { overflow: hidden; }
#question1, #question2, #question3, #answer1, #answer2, #answer3 { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
#question2 .ac-custom label { color: #000; padding-left: 40px !important; font-size: 20px; }
#question2 .ac-custom svg path { stroke: #AC48AD; stroke-width: 6px; }
#question2 .ac-fill svg { width: 25px; height: 25px; margin-top: -13px; left: 16px; }
#question2 .ac-fill input[type="radio"], #question2 .ac-fill label::before { width: 30px; height: 30px; margin-top: -16px; left: -2px; position: absolute; }
#question2 .ac-fill label::before { background-color: transparent; border: 2px solid #AC48AD; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #AC48AD; }
#question2 ol { margin: 20px 0 0; padding: 0; list-style: none; }
#question2 li span { text-align: left; font-size: 24px !important; }
#question1 { margin-bottom: 20px; overflow: hidden; }
#question1 .ac-custom label { color: #000; padding-left: 40px !important; }
#question1 .ac-custom svg path { stroke: #AC48AD; stroke-width: 6px; }
#question1 .ac-fill svg { width: 25px; height: 25px; margin-top: -13px; left: 20px; }
#question1 .ac-fill input[type="radio"], #question1 .ac-fill label::before { width: 30px; height: 30px; margin-top: -16px; left: 2px; position: absolute; }
#question1 .ac-fill label::before { background-color: transparent; border: 2px solid #AC48AD; }
#question1 .ac-custom input[type="radio"]:checked + label { color: #AC48AD; }
#question1 ul { margin: 10px 0 0 0; }
#question1 li label { text-align: left; font-size: 20px !important; }
#question1 ul, #question2 ul { margin: 0; overflow: hidden; display: inline-block; }
#question1 li, #question2 li { padding: 15px; float: left; margin-right: 20px; }
#question1 li:last-child, #question2 li:last-child { margin-right: 0; }
#question3 { margin-top: 20px; padding-bottom: 10px !important; overflow: hidden; height: 230px; }
#question3 .left { overflow: hidden; width: 380px; float: left; }
#question3 .right { overflow: hidden; width: 380px; float: right; }
#question3 div div { overflow: hidden; padding: 10px; }
#question3 div div section { float: left; margin: 15px 0 0 10px; }
#question3 div div img { float: left; border: 4px solid #AC48AD; }
#question3 div p { font-size: 20px; }
#question3 .ac-custom label { font-size: 20px; color: #000; padding-left: 40px !important; }
#question3 .ac-custom svg path { stroke: #AC48AD; stroke-width: 6px; }
#question3 .ac-swirl svg { width: 20px; height: 20px; margin-top: -11px; left: 17px; }
#question3 .ac-swirl input[type="radio"], #question3 .ac-swirl label::before { width: 30px; height: 30px; margin-top: -16px; left: 2px; position: absolute; }
#question3 .ac-swirl label::before { background-color: transparent; border: 2px solid #AC48AD; }
#question3 .ac-custom input[type="radio"]:checked + label { color: #AC48AD; }
#question3 .ac-swirl li:first-of-type label::before { left: -3px; }
#question3 li { padding: 10px; }
#answers { display: none; }
#answer2 {margin: 10px 0;}
#answers p { text-align: center; font-size:20px;}
#answer2 p img { vertical-align: middle; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
img.next-toggle { display: none; }
<?php if($language == "es_ES") { ?>
	#question3 li { width: 150px; }
	#question3 .ac-swirl li:first-of-type label::before { left: 2px; }
<?php } ?>
html[dir="rtl"] #question3 li { text-align: left; }
html[dir="rtl"] #question3 .ac-swirl li:first-of-type label::before { left: 1px; }
/* #answer1 {float:left;width:45%;}
#answer2 {float:right;width:45%;}
#answer2 h2{font-size:20px;}
#answer3 {clear:both;float:right;margin-top:20px;}
#answer3 .left {float:left;width:45%;}
#answer3 .right {float:right;width:45%;} */
<?php if($language == "zh_CN") { ?>
	#question3 .ac-swirl li:first-of-type label::before { left: -9px; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _('Quick Check #3'); ?></h1>
				<div id="question1">
					<h2><?php echo _('Question A. Click on the term matching a homogeneous mixture that has very small particles that are blended together extremely well.'); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-fill" autocomplete="off">
							<ul>
								<li>
									<input type="radio" id="a1" name="q1">
									<label for="a1"><?php echo _('Colloid'); ?></label>
								</li>
								<li>
									<input type="radio" id="b1" name="q1">
									<label for="b1"><?php echo _('Suspension'); ?></label>
								</li>
								<li>
									<input type="radio" id="c1" name="q1">
									<label for="c1"><?php echo _('Element'); ?></label>
								</li>
								<li>
									<input type="radio" id="d1" name="q1">
									<label for="d1"><?php echo _('Solution'); ?></label>
								</li>
							</ul>
						</form>
					</section>
				</div>
				<div id="question2">
					<h2><?php echo _('Question B. Click on the term matching a heterogeneous mixture containing particles that are large enough to settle out and separate from each other.'); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-fill" autocomplete="off">
							<ul>
								<li>
									<input type="radio" id="a2" name="q2">
									<label for="a2"><?php echo _('Colloid'); ?></label>
								</li>
								<li>
									<input type="radio" id="b2" name="q2">
									<label for="b2"><?php echo _('Suspension'); ?></label>
								</li>
								<li>
									<input type="radio" id="c2" name="q2">
									<label for="c2"><?php echo _('Element'); ?></label>
								</li>
								<li>
									<input type="radio" id="d2" name="q2">
									<label for="d2"><?php echo _('Solution'); ?></label>
								</li>
							</ul>
						</form>
					</section>
				</div>
				<div id="question3">
					<h2><?php echo _('Question C. Look at the plain vanilla ice cream and strawberry ice cream shown. Click on the term that best describes each one.'); ?></h2>

					<div class="left">
						<div>
							<img src="images/9/a.jpg">

							<section>
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li>
											<input type="radio" id="a3" name="q3">
											<label for="a3"><?php echo _('Homogeneous'); ?></label>
										</li>
										<li>
											<input type="radio" id="b3" name="q3">
											<label for="b3"><?php echo _('Heterogeneous'); ?></label>
										</li>
									</ul>
								</form>
							</section>
						</div>
					</div>

					<div class="right">
						<div>
							<img src="images/9/b.jpg">

							<section>
								<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li>
											<input type="radio" id="a4" name="q4">
											<label for="a4"><?php echo _('Homogeneous'); ?></label>
										</li>
										<li>
											<input type="radio" id="b4" name="q4">
											<label for="b4"><?php echo _('Heterogeneous'); ?></label>
										</li>
									</ul>
								</form>
							</section>
						</div>
					</div>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _('Quick Check #3'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div id="answer1">
					<h2><?php echo _('Question A. Click on the term matching a homogeneous mixture that has very small particles that are blended together extremely well.'); ?></h2>
					<p><?php echo _('You answered...'); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
				<div id="answer2">
					<h2><?php echo _('Question B. Click on the term matching a heterogeneous mixture containing particles that are large enough to settle out and separate from each other.'); ?></h2>
					<p><?php echo _('You answered...'); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
				<div id="answer3">
					<h2><?php echo _('Question C. Look at the plain vanilla ice cream and strawberry ice cream shown. Click on the term that best describes each one.'); ?></h2>
					<!-- <p>You answered...</p> -->
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="10.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Ready for your last quick check?'); ?></strong></section></section>
	<script>
	var back = $('img.back-toggle'),
	next = $('img.next-toggle'),
	check = $('img.check-toggle'),
	questions = $('#questions'),
	question1 = $('#question1'),
	question2 = $('#question2'),
	question3 = $('#question3'),
	answers = $('#answers'),
	answer1 = $('#answer1'),
	answer2 = $('#answer2'),
	answer3 = $('#answer3'),
	ans1 = '',
	ans2 = '',
	ans3 = '',
	ans4 = '',
	a2 = $('#a2'),
	b2 = $('#b2'),
	c2 = $('#c2'),
	d2 = $('#d2'),
	checkAnswer1 = 0,
	checkAnswer2 = 0,
	checkAnswer3 = 0,
	answered = <?php echo $answered; ?>;

	question1.find('input[type="radio"]').on('click', function() {
		var me1 = $(this).attr('id');
		
		if (me1 == 'a1') {
			answer1.find('.answer').html('<?php echo _("Colloid"); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! A colloid is a type of mixture in which the particles making up the colloid are larger than those of a solution, but small enough to not settle or separate."); ?></p>');
			ans1 = 'A';
		}

		if (me1 == 'b1') {
			answer1.find('.answer').html('<?php echo _("Suspension"); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! A suspension is a heterogeneous mixture containing particles that are large enough to settle out and separate from each other."); ?></p>');
			ans1 = 'B';
		}

		if (me1 == 'c1') {
			answer1.find('.answer').html('<?php echo _("Element"); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! An element is a type of substance composed of just one type of atom."); ?></p>');
			ans1 = 'C';
		}
		if (me1 == 'd1') {
			answer1.find('.answer').html('<?php echo _("Solution"); ?>');
			answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! A solution is a homogeneous mixture that has very small particles that are blended together extremely well."); ?></p>');
			ans1 = 'D';
		}
	});

	question2.find('input[type="radio"]').on('click', function() {
		var me2 = $(this).attr('id');

		if (me2 == 'a2') {
			answer2.find('.answer').html('<?php echo _("Colloid"); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! A colloid is a type of mixture in which the particles making up the colloid are larger than those of a solution, but small enough to not settle or separate."); ?></p>');
			ans2 = 'A';
		}

		if (me2 == 'b2') {
			answer2.find('.answer').html('<?php echo _("Suspension"); ?>');
			answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! A suspension is a heterogeneous mixture containing particles that are large enough to settle out and separate from each other."); ?></p>');
			ans2 = 'B';
		}

		if (me2 == 'c2') {
			answer2.find('.answer').html('<?php echo _("Element"); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! An element is a type of substance composed of just one type of atom."); ?></p>');
			ans2 = 'C';
		}
		if (me2 == 'd2') {
			answer2.find('.answer').html('<?php echo _("Solution"); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! A solution is a homogeneous mixture that has very small particles that are blended together extremely well."); ?></p>');
			ans2 = 'D';
		}
	});

	question3.find('input[type="radio"]').on('click', function() {
		var me3 = $(this).attr('id');

		if($('#a3').is(':checked')) ans3 = 'A';
		else if($('#b3').is(':checked')) ans3 = 'B';

		if($('#a4').is(':checked')) ans4 = 'A';
		else if($('#b4').is(':checked')) ans4 = 'B';

		if ($('#a3').is(':checked') && $('#b4').is(':checked')) {
			answer3.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! The ice cream on the left is considered to be homogeneous because its particles are not visibly separated. The ice cream on the right is considered to be heterogeneous because the strawberries are visibly distinguishable from the ice cream."); ?></p>');
		} else if ( $('#a3').is(':checked') && $('#a4').is(':checked') || $('#b3').is(':checked') && $('#b4').is(':checked') ) {
			answer3.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! The ice cream on the left is considered to be homogeneous because its particles are not visibly separated. The ice cream on the right is considered to be heterogeneous because the strawberries are visibly distinguishable from the ice cream."); ?></p>');
		} else {
			answer3.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No! The ice cream on the left is considered to be homogeneous because its particles are not visibly separated. The ice cream on the right is considered to be heterogeneous because the strawberries are visibly distinguishable from the ice cream."); ?></p>');
		}
	});
		
	function save() {
		saveAnswer('composition-of-matter-qc3-a', ans1);
		saveAnswer('composition-of-matter-qc3-b', ans2);
		saveAnswer('composition-of-matter-qc3-c', ans3);
		saveAnswer('composition-of-matter-qc3-d', ans4);
	}

	back.click(function() {
		if (questions.is(':visible')) {
			document.location.href = "8.php"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answers.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answers.fadeOut(function(){ questions.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		//alert(me1);
		checkAnswer1 = $('#question1 input:radio:checked').length;
		checkAnswer2 = $('#question2 input:radio:checked').length;
		checkAnswer3 = $('#question3 .left input:radio:checked').length;
		checkAnswer3b = $('#question3 .right input:radio:checked').length;

		//alert(checkAnswer1 + checkAnswer2 + checkAnswer3);

		if (checkAnswer2 == 0 || checkAnswer1 != 1 || checkAnswer3 == 0 || checkAnswer3b == 0) {
			alert("<?php echo _('Please select your answers.'); ?>");
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			questions.fadeOut(function(){ answers.fadeIn(); }); 
			save();
		}
	});
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<?php include("setlocale.php"); ?>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>

