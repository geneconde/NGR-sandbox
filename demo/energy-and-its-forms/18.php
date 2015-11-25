<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		h1 { color: #d7a42e;  }
		h2 { color: #2f60a8; text-align: left; margin-bottom: 20px; }

		#question, #answer {
		    background: rgba(255,255,255,.7);
		    padding: 10px;
		    border-radius: 10px;
		    position: absolute;
		    margin: 10px;
		    width: 95.5%;
		}

		.wrap { border-left: 1px dashed #90ab2a; border-right: 1px dashed #90ab2a; overflow: hidden;}
		.bg { background-image: url(images/18/bg.jpg); }

		#buttons .next { display: none; }

		#question ul { overflow: hidden; width: 75%; margin: 0 auto; padding-left: 0; }
		#question li { text-align: center; float: left; width: 281px; margin: 0 50px 20px 0; }
		#question img { cursor: pointer; }
		#question li.nrm { margin-right: 0; }
		#question li span { font-size: 18px; display: block; }
		#question li input[type=checkbox] { display: none; }

		#answer { display: none; }
		#answer .feedback img { position: relative; top: 5px; }
		#answer .answer { text-align: center; margin-top: 20px; }
		#answer .answer img { margin: 0 5px 0 0; display: inline-block; width: 260px; } 
		#answer img:last-child { margin-right: 0; }

		span.checked { color: #9c0d5b; -webkit-transition: all .3s ease; }
		span.unchecked { color: #000; -webkit-transition: all .3s ease; }

		img.grayscale { border: 4px solid #868686; filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+ */ filter: gray; /* IE6-9 */ -webkit-filter: grayscale(100%); /* Chrome 19+ & Safari 6+ */ -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ -webkit-backface-visibility: hidden; /* Fix for transition flickering */ }

		img.grayscale-off { border: 4px solid #9c0d5b; filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale"); -webkit-filter: grayscale(0%); -webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */ }
		html[dir="rtl"] #question ul { padding-right:0;width:88%; }
		html[dir="rtl"] #question li { float:right;padding:0 20px; }
		html[dir="rtl"] #question { margin-right:13px;margin-left:0; }
		html[dir="rtl"] #answer { margin-right:13px;margin-left:0; }
		html[dir="rtl"] .green { width:96%; }
		html[dir="rtl"] #answer img:last-child { margin-right: 5px; }
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#question ul { width: 100%; margin: 0; }
			#question li { width: 340px; margin: 0 15px 20px 0; }
			#question img { width: 300px; }
			#question li span { font-size: 24px; }
			html[dir="rtl"] #question li { float: right; padding: 0; margin: 0 0 20px 15px; }
			html[dir="rtl"] #question ul { width: 100%; }
		}	
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			h1 { padding-top: 15px; }
		}
		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			#question, #answer { margin-top: 45px; }
			#question li { width: 40%; line-height: 20px; }
			#question img { width: 100%; }
			.feedback { line-height: 25px; }
			.feedback p { font-size: 20px; }
		}
		h1 { margin-top: -10px; }
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("Click on <span class='blink'>all</span> the images that are <span class='blink'>true</span>:"); ?></h2>

				<ul>
					<li><label for="a"><img class="grayscale" src="images/18/a.jpg" alt="<?php echo _("Windmill"); ?>"></label><input type="checkbox" id="a"><span><?php echo _("All sources of energy are important because we can change one form to another."); ?></span></li>
					<li class="nrm"><label for="b"><img class="grayscale" src="images/18/b.jpg" alt="<?php echo _("Woods"); ?>"></label><input type="checkbox" id="b"><span><?php echo _("Fossil fuels get their energy from plants and animals that died a long time ago."); ?></span></li>
					<li><label for="c"><img class="grayscale" src="images/18/c.jpg" alt="<?php echo _("Solar Panels"); ?>"></label><input type="checkbox" id="c"><span><?php echo _("The law of conservation of energy states that no energy can be created or destroyed."); ?></span></li>
					<li class="nrm"><label for="d"><img class="grayscale" src="images/18/d.jpg" alt="<?php echo _("Vultures"); ?>"></label><input type="checkbox" id="d"><span><?php echo _("Fossil fuels are considered renewable because plants and animals continue to die."); ?></span></li>
				</ul>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #5 - How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="answer"></div>
				<div class="feedback center"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Energy sources"); ?></strong></section></section>

	<?php include_once "setlocale.php"; ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/blink.js"></script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/answer.js"></script>
	<script src="scripts/global.js"></script>

	<script>
		$('.blink').blink({ speed: 500, blinks: 1000 });

		var back = $('a.back'),
		next = $('a.next'),
		check = $('a.checkanswer'),

		question = $('#question'),
		answer = $('#answer'),

		a = $('#a'),
		b = $('#b'),
		c = $('#c'),
		d = $('#d'),

		answered = 1;

		question.find('input[type=checkbox]').on('click', function() {
			var me = $(this);

			if (me.is(':checked')) {
				me.parent().find('img').removeClass().addClass('grayscale-off');
				me.parent().find('span').removeClass().addClass('checked');
			} else {
				me.parent().find('img').removeClass().addClass('grayscale');
				me.parent().find('span').removeClass().addClass('unchecked');
			}

			if (a.is(':checked') == true && 
				b.is(':checked') == true && 
				c.is(':checked') == true &&
				d.is(':checked') == false) {
				answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"> <?php echo _("Good job! We can transfer energy into different forms based on what we need. Fossil fuels are from decayed remains, which we transform into electrical energy. Energy is only transferred from one form to another, not created or destroyed. Fossil fuels are not considered renewable because even though plants and animals continue to die, it would take millions of years for the fuel to be formed."); ?></p>');
			} else {
				answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"> <?php echo _("Not quite. Fossil fuels are not considered renewable because even though plants and animals continue to die, it would take millions of years for the fuel to be formed. We can transfer energy into different forms based on what we need. Fossil fuels are from decayed remains, which we transform into electrical energy. Energy is only transferred from one form to another, not created or destroyed."); ?></p>');
			}
		});

		function save() {
			var ans;

			if (a.is(':checked')) {
				ans = 'A';
				answer.find('.answer').append('<img src="images/18/a.jpg" alt="<?php echo _("Windmill"); ?>" />');
			} else if ( ! a.is(':checked')) {
				answer.find('.answer').find('img[alt="<?php echo _("Windmill"); ?>"]').remove();
			}

			if (b.is(':checked')) {
				ans = 'B';
				answer.find('.answer').append('<img src="images/18/b.jpg" alt="<?php echo _("Woods"); ?>" />');
			} else if ( ! b.is(':checked')) {
				answer.find('.answer').find('img[alt="<?php echo _("Woods"); ?>"]').remove();
			}

			if (c.is(':checked')) {
				ans = 'C';
				answer.find('.answer').append('<img src="images/18/c.jpg" alt="<?php echo _("Solar Panels"); ?>" />');
			} else if ( ! c.is(':checked')) {
				answer.find('.answer').find('img[alt="<?php echo _("Solar Panels"); ?>"]').remove();
			}

			if (d.is(':checked')) {
				ans = 'D';
				answer.find('.answer').append('<img src="images/18/d.jpg" alt="<?php echo _("Vultures"); ?>" />');
			} else if ( ! d.is(':checked')) {
				answer.find('.answer').find('img[alt="<?php echo _("Vultures"); ?>"]').remove();
			}

			if (a.is(':checked') && b.is(':checked')) ans = 'A,B';
			if (a.is(':checked') && c.is(':checked')) ans = 'A,C';
			if (a.is(':checked') && d.is(':checked')) ans = 'A,D';

			if (b.is(':checked') && c.is(':checked')) ans = 'B,C';
			if (b.is(':checked') && d.is(':checked')) ans = 'B,D';

			if (c.is(':checked') && d.is(':checked')) ans = 'C,D';

			if (a.is(':checked') && b.is(':checked') && c.is(':checked')) ans = 'A,B,C';
			if (a.is(':checked') && b.is(':checked') && c.is(':checked') && d.is(':checked')) ans = 'A,B,C,D';

			if (answered == 0) {
				saveAnswer('energy-and-its-forms-qq5-a', ans);
				answered = 1;
			}
		}

		check.on('click', function() {
			var checkAnswer = $('.grayscale-off').length;
			
			if (checkAnswer == 0) {
				alert('<?php echo _("Please select your answer."); ?>');
			} else {
				question.fadeOut(function() {
					save();
					answer.fadeIn();
					window.location.hash = '#answer';
				});
				check.fadeOut(function() { next.fadeIn(); });
			}
		});

		back.on('click', function() {
			if (question.is(':visible')) {
				document.location.href = "17.php";
			} else {
				answer.fadeOut(function() { answer.find('.answer').html(''); question.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
			}
		});
	</script>
</body>
</html>
