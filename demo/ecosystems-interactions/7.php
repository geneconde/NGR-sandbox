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
<link rel="stylesheet" type="text/css" href="styles/component.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
	h2 { margin: 0; }
	.wrap { border-left: 1px dashed #feda74; border-right: 1px dashed #feda74; }
	.bg { background: url('images/5/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
	.ac-custom { padding: 0; }
	#question1, #answer1 { margin-top: 10px; }
	#question1 div, #question2 div, #answer1 div, #answer2 div { background: rgba(255, 255, 255, .6); padding: 10px; border-radius: 10px; }
	#question1 .ac-custom label { color: #000; padding-left: 50px; }
	#question1 .ac-custom input[type="checkbox"] { vertical-align: top; }
	#question1 .ac-custom input[type="checkbox"]:checked + label { color: #591f33; }
	#question1 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -12px; }
	#question1 .ac-custom label::before { border-color: #591f33; }
	#question1 .ac-custom svg path { stroke: #591f33; }
	#question1  .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
	#question1 ol { padding: 10px 10px 0; list-style: none; }
	#question1 li { margin: 0; padding: 3px 0; }
	#question1 li span { text-align: left; font-size: 24px !important; }
	#question2 { overflow: hidden; margin-top: 20px; }
	#question2 .ac-custom label { color: #000; padding-left: 6% !important; }
	#question2 .ac-custom input[type="radio"]:checked + label { color: #591f33; }
	#question2 .ac-custom svg path { stroke: #591f33; stroke-width: 3px; }
	#question2 .ac-circle svg { width: 40px; left: 1px; height: 40px; margin-top: -20px; }
	#question2 .ac-circle input[type="radio"], #question2 .ac-circle label::before { width: 20px; height: 20px; margin-top: -10px; left: 10px; position: absolute; }
	#question2 .ac-circle label::before { background-color: #591f33; }
	#question2 ul { padding: 10px; }
	#question2 li { padding: 8px 0; }
	#question2 li label { text-align: left; font-size: 24px !important; }
	#answers { display: none; }
	#answers p { text-align: center; }
	#answer2 { margin-top: 20px; }
	.feedback { font-size: 24px; text-align: center; background: none !important; padding: 0 !important; }
	#buttons .next { display: none; }
	#answer1 .feedback p { font-size: 22px }

	html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right: 0; }
	html[dir="rtl"] #question1 .ac-custom label { padding-right: 50px; }
	html[dir="rtl"] #question2 .ac-custom label { padding-right: 6% !important; }
	html[dir="rtl"] .ac-custom svg { right: 3px; }
	html[dir="rtl"] #question2 .ac-circle svg { right: -10px; }
	html[dir="rtl"] .green { width: 820px; }


	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
		#question1 li {margin-top: -5px;}
		#question1 {margin-top: 0px;}

		#question2 {margin-top: 10px;}
		#question2 ul {margin-top:-7px;}
		#question2 li {margin-top:-7px;}
	}

	<?php if($language == "es_ES") { ?>
		#answer1 .feedback p { font-size: 20px; }
	<?php } ?>

	<?php if($language == "ar_EG") { ?>
		@media only screen and (max-width: 1250px){
			#question2 {
			    overflow: hidden;
			    margin-top: 10px;
			}
			.feedback p {
			    font-size: 18px !important;
			}
			.ac-custom { height: 174px !important; }
		}
	<?php } ?>
	@media only screen and (max-width: 1250px){
		div#questions { padding-top: 33px; }
		div#question1 h2 { font-size: 20px; }
		div#question2 h2 { font-size: 20px; }
		#question1 .ac-custom label::before { height: 30px;  width: 30px; margin-top: -25px; }
		#question1 li span { text-align: left; font-size: 20px !important; }
		#question1 li span { text-align: left; font-size: 20px !important; position: relative !important; top: -14px !important; }
		#question2 li label { text-align: left; font-size: 20px !important; }
		form.ac-custom.ac-checkbox.ac-checkmark { height: 178px; }
		#question1 .ac-custom svg { left: 0px !important; margin-top: -20px !important; }
		div#answers { padding-top: 33px; }
		p { font-size: 20px; }
		h2 { font-size: 21px; }
	}
	@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>
				<div id="question1">
					<div>
						<h2><?php echo _("Question A. Check <span class=\"blink\">all</span> the ways farming practices that are intended to increase crop production can be bad for the ecosystem."); ?></h2>
						<section>
							<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
								<ol>
									<li><input id="a1" name="q1a" type="checkbox"><label for="a1"><span>A. <?php echo _("Nutrients may be taken from the soil."); ?></span></label></li>
									<li><input id="b1" name="q1b" type="checkbox"><label for="b1"><span>B. <?php echo _("Nearby streams can become polluted."); ?></span></label></li>
									<li><input id="c1" name="q1c" type="checkbox"><label for="c1"><span>C. <?php echo _("Grass fires may occur more frequently."); ?></span></label></li>
									<li><input id="d1" name="q1d" type="checkbox"><label for="d1"><span>D. <?php echo _("Habitats for some animals may be destroyed."); ?></span></label></li>
								<ol>
							</form>
						</section>
					</div>
				</div>
				<div id="question2">
					<div>
						<h2><?php echo _("Question B. Which statement is an example of a living thing interacting with a non-living thing?"); ?></h2>
						<section>
							<form class="ac-custom ac-radio ac-circle" autocomplete="off">
								<ul>
									<li>
										<input type="radio" id="a2" name="q2">
										<label for="a2">A. <?php echo _("A beaver cutting down trees."); ?></label>
									</li>
									<li>
										<input type="radio" id="b2" name="q2">
										<label for="b2">B. <?php echo _("A prairie dog living under soil."); ?></label>
									</li>
									<li>
										<input type="radio" id="c2" name="q2">
										<label for="c2">C. <?php echo _("A plant and fungus living together."); ?></label>
									</li>
									<li>
										<input type="radio" id="d2" name="q2">
										<label for="d2">D. <?php echo _("A flower that is pollinated by a bee."); ?></label>
									</li>
								</ul>
							</form>
						</section>
					</div>						
				</div>
			</div>
			<div id="answers">
				<h1><?php echo _("Quick Check #2")." - "._("How did I do?"); ?></h1>
				<div id="answer1" >
					<div>
						<h2><?php echo _("Question A. Check <span class=\"blink\">all</span> the ways farming practices that are intended to increase crop production can be bad for the ecosystem."); ?></h2>
						<div class="feedback center"></div>
					</div>
				</div>
				<div id="answer2">
					<div>
						<h2><?php echo _("Question B. Which statement is an example of a living thing interacting with a non-living thing?"); ?></h2>					
						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>
						<div class="feedback center"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Plowing soil..."); ?></strong></section></section>
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
	a1 = $('#a1'),
	b1 = $('#b1'),
	c1 = $('#c1'),
	d1 = $('#d1'),
	checkAnswer1 = 0,
	checkAnswer2 = 0,
	answered = 1;

	question1.find('input[type="checkbox"]').on('click', function() {
		var me = $(this);

		if (me.is(':checked') && me.attr('id') == 'a1') {
			answer1.find('.answer').append('<p class="center a">' +  'A. ' + '<?php echo _("Nutrients may be taken from the soil."); ?></p>');
		
		} else if ( ! me.is(':checked') && me.attr('id') == 'a1') {
			answer1.find('.answer').find('p.a').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'b1') {
			answer1.find('.answer').append('<p class="center b">' +  'B. ' + '<?php echo _("Nearby streams can become polluted."); ?></p>');
		
		} else if ( ! me.is(':checked') && me.attr('id') == 'b1') {
			answer1.find('.answer').find('p.b').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'c1') {
			answer1.find('.answer').append('<p class="center c">' +  'C. ' + '<?php echo _("Grass fires may occur more frequently."); ?></p>');
		
		} else if ( ! me.is(':checked') && me.attr('id') == 'c1') {
			answer1.find('.answer').find('p.c').remove(); 
		}

		if (me.is(':checked') && me.attr('id') == 'd1') {
			answer1.find('.answer').append('<p class="center d">' +  'D. ' + '<?php echo _("Habitats for some animals may be destroyed."); ?></p>');
		
		} else if ( ! me.is(':checked') && me.attr('id') == 'd1') {
			answer1.find('.answer').find('p.d').remove(); 
		}

		if (a1.is(':checked') == true && b1.is(':checked') == true && c1.is(':checked') == false && d1.is(':checked') == true) {
			answer1.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! These are all things people do that can affect the species living in an ecosystem. If we use the soil over and over without taking care of it, or empty chemicals into streams, we will impact the ecosystem in the worst way."); ?></p>'); 
		} else {
			answer1.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Think again! (a) is one of the effects--people change the soil they use. If the soil is used over and over to grow crops and no fertilizer is added to it, the natural nutrients in the soil will be severely reduced. (b) is also one of the effects--farmers use chemicals to help plants grow faster and kill plants and bugs that try to eat the plants they are growing. Rain can wash a lot of these chemicals into the river and pollute the water. (c) a fire every so often can actually be good for an ecosystem because it allows new plants to grow. (d) is also bad for the ecosystem because when tree and other vegetation are cut down to make room for a farm, many animals may lose what they need to survive."); ?></p>'); 
		}
	});

	question2.find('input[type="radio"]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a2') {
			answer2.find('.answer').html('A. ' + '<?php echo _("A beaver cutting down trees."); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! Trees are living things. The way beavers cut down trees and build dams changes the ecosystem a lot. They create ponds and offer protection to many animals."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			answer2.find('.answer').html('B. ' + '<?php echo _("A prairie dog living under soil."); ?>');
			answer2.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! The soil keeps the prairie dog safe, and they dig tunnels helping the water to get everywhere in the soil."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			answer2.find('.answer').html('C. ' + '<?php echo _("A plant and fungus living together."); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! A plant and fungus can live together in a way that they both can benefit, but both are living things."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			answer2.find('.answer').html('D. ' + '<?php echo _("A flower that is pollinated by a bee."); ?>');
			answer2.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite! Bees pollinate flowers and the interaction results in more flowers and food for the bee, but both are living things."); ?></p>');
			ans2 = 'D';
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('ecosystems-interactions-qc2-a', ans2);
			saveAnswer('ecosystems-interactions-qc2-b', ans2);

			answered = 1;
		}
	}

	back.click(function() {
		if (questions.is(':visible')) {
			document.location.href = "6.php#screen2"; // change to the previous page's last screen e.g. 4.html#screen2
		} else if (answers.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answers.fadeOut(function(){ questions.fadeIn(); }); 
		}
	});
	
	check.click(function() { 
		checkAnswer1 = $('#question1 input:checkbox:checked').length;
		checkAnswer2 = $('#question2 input:radio:checked').length;

		if (checkAnswer1 == 0 || checkAnswer2 != 1) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			questions.fadeOut(function(){ answers.fadeIn(); }); 
			save();
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
</body>
</html>
