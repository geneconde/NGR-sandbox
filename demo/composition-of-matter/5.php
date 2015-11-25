<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'composition-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h2 { margin: 0; }
.wrap { border-left: 1px dashed #d0de84; border-right: 1px dashed #d0de84; }
.bg { background: url('images/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.ac-custom { padding: 0 0 0 10px; position: relative; z-index: 6; }
#question1, #question2, #answer1, #answer2 { background: rgba(255, 255, 255, .7); padding: 10px; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }
#question2 .ac-custom label { color: #000; padding-left: 60px; }
#question2 .ac-custom label::before { margin-top: -18px; width: 40px; height: 40px; border: 4px solid #AC48AD; }
#question2 .ac-custom input[type="checkbox"]:checked + label { color: #AC48AD; }
#question2 .ac-custom svg path { stroke: #AC48AD; stroke-width: 14px; }
#question2 .ac-checkmark svg { width: 24px; height: 24px; top: 30px; left: 8px; }
#question2 ol { margin: 20px 0 0; padding: 0; list-style: none; }
#question2 li { margin: 10px 0; padding: 0; }
#question2 li span { text-align: left; font-size: 24px !important; }
#question1 { margin-bottom: 20px; overflow: hidden; }
#question1 .ac-custom label { color: #000; padding-left: 3.5% !important; }
#question1 .ac-custom svg path { stroke: #AC48AD; stroke-width: 6px; }
#question1 .ac-circle svg { width: 30px; height: 30px; margin-top: -18px; }
#question1 .ac-circle input[type="radio"], #question1 .ac-circle label::before { width: 15px; height: 15px; margin-top: -10px; left: -3px; position: absolute; }
#question1 .ac-circle label::before { background-color: #AC48AD; }
#question1 .ac-custom input[type="radio"]:checked + label { color: #AC48AD; }
#question1 ul { margin: 10px 0 0 0; }
#question1 li { padding: 6px 0; }
#question1 li label { text-align: left; font-size: 24px !important; }
#answers { display: none; }
#answers p { text-align: center; }
#answer2 { margin-top: 20px; }
#answer2 p img { vertical-align: middle; }
.feedback { font-size: 24px; text-align: center; }
.feedback img { vertical-align: middle; }
#buttons .next { display: none; }
<?php if($language == "es_ES") { ?>
	#question1 li label { font-size: 22px !important; }
<?php } ?> 
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] #question2 li span { text-align: right; }
html[dir="rtl"] #question1 .ac-circle input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question1 .ac-circle label::before { right: 35px; margin-top: -20px; }
html[dir="rtl"] #question1 .ac-circle svg { right: 27px; margin-top: -27px; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
html[dir="rtl"] #question2 .ac-custom label { padding-right: 60px; }
html[dir="rtl"] #question2 .ac-checkmark svg { right: 8px; }
html[dir="rtl"] #question1 li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _('Quick Check #1'); ?></h1>
				<div id="question1">
					<h2><?php echo _('Question A. Click on the best statement that explains the difference between an element and a compound.'); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ul>
								<li>
									<input type="radio" id="a1" name="q1">
									<label for="a1">A. <?php echo _('Compounds can be solid, liquid, or gas; elements are always in the solid state.'); ?></label>
								</li>
								<li>
									<input type="radio" id="b1" name="q1">
									<label for="b1">B. <?php echo _('Elements have more than one type of atom; compounds consist of just one type of atom.'); ?></label>
								</li>
								<li>
									<input type="radio" id="c1" name="q1">
									<label for="c1">C. <?php echo _('Compounds have more than one type of atom; elements consist of just one type of atom.'); ?></label>
								</li>
							</ul>
						</form>
					</section>
				</div>
				<div id="question2">
					<h2><?php echo _('Question B. Mark <span class="blink">all</span> of the following statements that are <span class="blink">true</span>.'); ?></h2>
					<section>
						<form class="ac-custom ac-checkmark" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2a" type="checkbox"><label for="a2"><span><?php echo _('An element contains only one kind of atom.'); ?></span></label></li>
								<li><input id="b2" name="q2b" type="checkbox"><label for="b2"><span><?php echo _('A compound contains more than one element.'); ?></span></label></li>
								<li><input id="c2" name="q2c" type="checkbox"><label for="c2"><span><?php echo _('A compound contains more than one kind of atom.'); ?></span></label></li>
								<li><input id="d2" name="q2d" type="checkbox"><label for="d2"><span><?php echo _('There are more unique elements than unique compounds.'); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _('Quick Check #1'); ?> - <?php echo _('How did I do?'); ?></h1>
				<div id="answer1">
					<h2><?php echo _('Question A. Click on the best statement that explains the difference between an element and a compound.'); ?></h2>
					<p><?php echo _('You answered...'); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
				<div id="answer2">
					<h2><?php echo _('Question B. Mark <span class="blink">all</span> of the following statements that are <span class="blink">true</span>.'); ?></h2>
					<p><?php echo _('You answered...'); ?></p>
					<p class="answer"></p>
					<div class="feedback center"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Preparing your first quick check...'); ?></strong></section></section>
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
	a2 = $('#a2'),
	b2 = $('#b2'),
	c2 = $('#c2'),
	d2 = $('#d2'),
	checkAnswer1 = 0,
	checkAnswer2 = 0,
	answered = 1;

	question1.find('input[type="radio"]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			answer1.find('.answer').html('A. ' + '<?php echo _("Compounds can be solid, liquid, or gas; elements are always in the solid state."); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Both compounds and elements may exist in solid, liquid, or gaseous state."); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			answer1.find('.answer').html('B. ' + '<?php echo _("Elements have more than one type of atom; compounds consist of just one type of atom."); ?>');
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope! Elements consist of only one type of atom; compounds are made of more than one type of atom."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			answer1.find('.answer').html('C. ' + '<?php echo _("Compounds have more than one type of atom; elements consist of just one type of atom."); ?>');
			answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Elements consist of only one type of atom; compounds are made of more than one type of atom."); ?></p>');
			ans1 = 'C';
		}
	});

	question2.find('input[type="checkbox"]').on('click', function() {
		var me = $(this);

		if (me.is(':checked') && me.attr('id') == 'a2') {
			answer2.find('.answer').append('<p class="center a"><?php echo _("An element contains only one kind of atom."); ?></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'a2') {
			answer2.find('.answer').find('p.a').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'b2') {
			answer2.find('.answer').append('<p class="center b"><?php echo _("A compound contains more than one element."); ?></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'b2') {
			answer2.find('.answer').find('p.b').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'c2') {
			answer2.find('.answer').append('<p class="center c"><?php echo _("A compound contains more than one kind of atom."); ?></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'c2') {
			answer2.find('.answer').find('p.c').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'd2') {
			answer2.find('.answer').append('<p class="center d"><?php echo _("There are more unique elements than unique compounds."); ?></p>');
		} else if ( ! me.is(':checked') && me.attr('id') == 'd2') {
			answer2.find('.answer').find('p.d').remove(); 
		}

		if (a2.is(':checked') == true && b2.is(':checked') == true && c2.is(':checked') == true && d2.is(':checked') == false) {
			answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! An element contains only one kind of atom, a compound contains more than one kind of atom, and there are many more compounds than elements."); ?></p>'); 
		} else {
			answer2.find('.feedback').html('<p class="red" style="font-size: 24px;"><img src="images/others/wrong.png"><?php echo _("Not quite! An element contains only one kind of atom, a compound contains more than one kind of atom, and there are many more compounds than elements."); ?></p>'); 
		}
	});

	function save() {
		saveAnswer('composition-of-matter-qc1-a', ans1);
		saveAnswer('composition-of-matter-qc1-b', ans2);
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
		checkAnswer2 = $('#question2 input:checkbox:checked').length;

		if (checkAnswer2 == 0 || checkAnswer1 != 1) {
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
