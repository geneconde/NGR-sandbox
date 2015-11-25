<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'heating-and-cooling';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$smc->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $sac->getStudentAnswer($_SESSION['smid'], 'heating-and-cooling-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Heating and Cooling"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="css/locale.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/jpreloader.css" />
	<link rel="stylesheet" href="css/global.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<style>
	html, body {overflow: hidden;}
    @font-face {
      font-family: 'nlicons';
      src:url('fonts/nlicons/nlicons.eot');
      src:url('fonts/nlicons/nlicons.eot?#iefix') format('embedded-opentype'),
      url('fonts/nlicons/nlicons.woff') format('woff'),
      url('fonts/nlicons/nlicons.ttf') format('truetype'),
      url('fonts/nlicons/nlicons.svg#nlicons') format('svg');
      font-weight: normal;
      font-style: normal;
    }

		#buttons .next { display: none; }
		p.small { font-size: 24px !important; }

		.bg { background-image: url('images/18/bg.jpg'); background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position: relative; }
		.bg p { font-size: 42px; text-align: center; }

		#answer { display: none; }
		#answer .feedback { margin-top: 20px; }

		.nl-form { width: 100%; margin: 0.3em auto 0 auto; font-size: 24px; line-height: 1.5; }
		.nl-form ul { list-style: none;  margin: 0; padding: 0; }
		.nl-form input, .nl-form select, .nl-form button { border: none; background: transparent; font-family: inherit; font-size: inherit; color: inherit; font-weight: inherit; line-height: inherit; display: inline-block; padding: 0; margin: 0; -webkit-appearance: none; -moz-appearance: none; }
		.nl-form input:focus { outline: none; }
		.nl-field { display: inline-block; position: relative; }
		.nl-field.nl-field-open { z-index: 10000; }
		.nl-field-toggle, .nl-form input, .nl-form select  { padding: 0 10px; border-radius: 6px; border-bottom: 3px solid #ddd; line-height: inherit; display: inline-block; color: #b14943; cursor: pointer; background-color: #eee;/* border-bottom: 1px dashed #b14943; */ }
		.nl-field ul { border-radius: 6px; border-bottom: 3px solid #973f39; position: absolute; visibility: hidden; background: #b14943; left: -0.5em; top: 50%; font-size: 24px; padding: 10px 0; opacity: 0; -webkit-transform: translateY(-40%) scale(0.9); -moz-transform: translateY(-40%) scale(0.9); transform: translateY(-40%) scale(0.9); -webkit-transition: visibility 0s 0.3s, opacity 0.3s, -webkit-transform 0.3s; -moz-transition: visibility 0s 0.3s, opacity 0.3s, -moz-transform 0.3s; transition: visibility 0s 0.3s, opacity 0.3s, transform 0.3s; }
		.nl-field.nl-field-open ul { visibility: visible; opacity: 1; -webkit-transform: translateY(-50%) scale(1); -moz-transform: translateY(-50%) scale(1); transform: translateY(-50%) scale(1); -webkit-transition: visibility 0s 0s, opacity 0.3s, -webkit-transform 0.3s; -moz-transition: visibility 0s 0s, opacity 0.3s, -moz-transform 0.3s; transition: visibility 0s 0s, opacity 0.3s, transform 0.3s; }
		.nl-field ul li { color: #fff; position: relative; font-size:35px; }
		.nl-dd ul li { padding: 0 60px; cursor: pointer; white-space: nowrap; }
		.nl-dd ul li.nl-dd-checked:before, .nl-submit:before, .nl-field-go:before {font-family: 'nlicons'; speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; -webkit-font-smoothing: antialiased; }
			.nl-dd ul li.nl-dd-checked { color: #702e2a; }
		.nl-dd ul li.nl-dd-checked:before {
		  content: "\e000";
		  position: absolute;
		  right: .5em;
		  font-size: 35px;
		}
			.nl-dd ul li:hover { background-color: #9e413c !important; }
.nl-dd ul li:hover:active { color: #B14943; }
		.nl-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); opacity: 0; z-index: 9999; visibility: hidden; -webkit-transition: visibility 0s 0.3s, opacity 0.3s; -moz-transition: visibility 0s 0.3s, opacity 0.3s; transition: visibility 0s 0.3s, opacity 0.3s; }
		.nl-field.nl-field-open ~ .nl-overlay { opacity: 1; visibility: visible; -webkit-transition-delay: 0s; -moz-transition-delay: 0s; transition-delay: 0s; }

		.nl-form option { text-align: center; }

		#answer .a, #answer .b { color: #b14943; }
		#dp_swf_engine { display: none; }
		
		@media only screen and (max-width: 1250px) {
			.nl-field ul li{font-size: 30px !important;}
			.bg p {font-size: 24px !important;}
			h2, p, li {font-size:20px !important;}
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("Choose from the items to select your answer."); ?></h2>

				<form id="nl-form" class="nl-form">
					<p><?php echo _("Heat always moves from objects at"); ?></p>
					<p>
						<select id="a">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="lower"><?php echo _("lower temperature"); ?></option>
							<option value="same"><?php echo _("same temperature"); ?></option>
							<option value="higher"><?php echo _("higher temperature"); ?></option>
						</select>
					</p>

					<p><?php echo _("to objects at"); ?></p>
					<p>
						<select id="b">
							<option value="" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="lower"><?php echo _("lower temperature"); ?></option>
							<option value="same"><?php echo _("same temperature"); ?></option>
							<option value="higher"><?php echo _("higher temperature"); ?></option>
						</select>
					</p>

					<div class="nl-overlay"></div>	
				</form>		
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p class="small"><?php echo _("You answered..."); ?></p>
				<p><?php echo _("Heat always moves from objects at"); ?></p>
				<p class="a"></p>
				<p><?php echo _("to objects at"); ?></p>
				<p class="b"></p>
				<div class="feedback"></div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Higher or lower?"); ?></strong></section></section>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jquery-ui.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/hexaflip.js"></script>
	<script src="scripts/saveanswer.js"></script>
	<script src="scripts/nlform.js"></script>
	<script src="scripts/rightclick.js"></script>
	<script>
		var nlform = new NLForm(document.getElementById('nl-form'));

		var answered = <?php echo $answered; ?>,
		question = $('#question'),
		answer = $('#answer'),

		check = $('a.checkanswer'),
		back = $('a.back'),
		next = $('a.next'),

		qa = $('#a'),
		qb = $('#b'),

		aa = $('.a'),
		ab = $('.b');

		check.on('click', function() {
			if (qa.val() == '' || qb.val() == '') {
				alert('<?php echo _("Please select your answer."); ?>');
			} else {
				question.fadeOut(function() {
					answer.fadeIn();
					window.location.hash = "#answer";
				});
				check.fadeOut(function() { next.fadeIn(); back.fadeIn(); });
				save();
			}
		});

		back.on('click', function() {
			if (question.is(':visible')) { document.location.href = "17.php"; }
			else {
				answer.fadeOut(function() { question.fadeIn(); });
				next.fadeOut(function() { check.fadeIn(); });
			}
		});

		function save() {
			var ans;
			
			if (qa.val()=='lower'){ $('.a').html('<?php echo _("lower temperature"); ?>'); }
			else if (qa.val()=='higher'){ $('.a').html('<?php echo _("higher temperature"); ?>'); }
			else { $('.a').html('<?php echo _("same temperature"); ?>'); }
			
			if (qb.val()=='lower'){ $('.b').html('<?php echo _("lower temperature"); ?>'); }
			else if (qb.val()=='higher'){ $('.b').html('<?php echo _("higher temperature"); ?>'); }
			else { $('.b').html('<?php echo _("same temperature"); ?>'); }
				
				
			if (qa.val() == 'lower' && qb.val() == 'higher') {
				answer.find('.feedback').html('<p class="red center small"><img src="images/misc/wrong.png" alt="Wrong" /> <?php echo _("No. Heat always moves from object at higher temperature to objects at lower temperature."); ?></p>');
			} else if (qa.val() == 'higher' && qb.val() == 'lower') {
				answer.find('.feedback').html('<p class="green center small"><img src="images/misc/correct.png" alt="Correct" /> <?php echo _("Correct. Heat always moves from object at higher temperature to objects at lower temperature."); ?></p>');
			} else {
				answer.find('.feedback').html('<p class="red center small"><img src="images/misc/wrong.png" alt="Wrong" /> <?php echo _("No. Heat always moves from object at higher temperature to objects at lower temperature."); ?></p>');	
			}

			ans = qa.val() + '-' + qb.val();

			if (answered == 0) {
				saveAnswer('heating-and-cooling-qq3-a', ans);
				answered = 1;
			}
		}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
