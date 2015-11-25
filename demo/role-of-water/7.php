<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'role-of-water';
	require_once '../../verify.php';
	require_once 'locale.php';
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<title><?php echo _("Role of Water"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #A183BD; }
.wrap { border-color: #9b98ec; }
.bg { background-image: url(images/7/bg.jpg); }

#questions h2, #answers h2 { margin: 5px 0; }
#questions ol { list-style: none; padding: 0; margin: 0 0 0 20px; }
#questions li { padding: 6px 0; }
#questions .ac-custom label { color: #000; padding-left: 45px; font-size: 20px; }
#questions .ac-custom input[type="radio"] {}
#questions .ac-custom input[type="radio"]:checked + label { color: #9C3672; }
#questions .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#questions .ac-custom svg path { stroke: #9C3672; }
#questions .ac-custom label::before { background: #9C3672; height: 20px; width: 20px; margin-top: -12px;}

#answers { display: none; }
#answers .feedback { width: 700px; margin: 0 auto; }
#answers p { text-align: center; font-size: 20px; }

#question2, #question3 { margin-top: 0; }
#answer2, #answer3 { margin-top: 20px; }
#buttons .next { display: none; }

html[dir="es"] #answers .feedback { width: auto; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom [type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { margin-top: -15px; right: 35px;}
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -27px; }
html[dir="rtl"] li label { text-align: right; }

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #2"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. One of the properties that makes water unlike almost all other substances on earth is that it..."); ?></h2>	

					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("Is clear."); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("Is wet."); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("Can be both ice and snow."); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span><?php echo _("Can be solid, liquid, or gas at normal human temperatures."); ?></span></label></li>
							<ol>
						</form>
					</section>
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. When water is in its gaseous form in the atmosphere you..."); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("Can't see it but you can smell it."); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Can see it."); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("Can feel it but you can’t see it."); ?></span></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("Can taste it."); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>

				<div id="question3">
					<h2><?php echo _("Question C. Solid water is found on earth mainly..."); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a3" name="q3" type="radio"><label for="a3"><span><?php echo _("As snow in the winter in the northern part of the earth."); ?></span></label></li>
								<li><input id="b3" name="q3" type="radio"><label for="b3"><span><?php echo _("As snow on mountaintops."); ?></span></label></li>
								<li><input id="c3" name="q3" type="radio"><label for="c3"><span><?php echo _("As snow and ice on both the north and south polar regions."); ?></span></label></li>
								<li><input id="d3" name="q3" type="radio"><label for="d3"><span><?php echo _("As glaciers on the north pole."); ?></span></label></li>
							<ol>
						</form>
					</section>
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. One of the properties that makes water unlike almost all other substances on earth is that it..."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. When water is in its gaseous form in the atmosphere you..."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>

				<div id="answer3">
					<h2><?php echo _("Question C. Solid water is found on earth mainly..."); ?></h2>	
					<p><?php echo _("You answered..."); ?></p>
					<div class="answer"></div>
					<div class="feedback"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Glaciers melting glaciers..."); ?></strong></section></section>

	<script>
	var ans1, ans2, ans3, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html("<p><?php echo _("Is clear."); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope... there are many different clear liquids on earth."); ?></p>");
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html("<p><?php echo _("Is wet."); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry... wet just means liquid and there are lots of different liquids on earth."); ?></p>");
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html("<p><?php echo _("Can be both ice and snow."); ?></p>");
			$('#answer1').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite... water can be ice and snow but those are both just names for solid water."); ?></p>");
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html("<p><?php echo _("Can be solid, liquid, or gas at normal human temperatures."); ?></p>");
			$('#answer1').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("You got it! Water is unique in that it can be found in all three states of matter - solid, liquid, and gas - at temperatures that humans commonly experience."); ?></p>");
			ans1 = 'D';
		}

		if (me == 'a2') {
			$('#answer2').find('.answer').html("<p><?php echo _("Can't see it but you can smell it."); ?></p>");
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Try again! People can't smell water in the atmosphere - it is odorless."); ?></p>");
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html("<p><?php echo _("Can see it."); ?></p>");
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope... you can't see gaseous water in the atmosphere. But when it just starts to turn into liquid water - called condensation - even before it rains you can sometimes see it as a haze."); ?></p>");
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html("<p><?php echo _("Can feel it but you can't see it."); ?></p>");
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Gaseous water in the atmosphere (also called the air) is called humidity. You can \"feel\" water vapor or gas in the air because the humidity makes your sweat stick to you, making you feel hot."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html("<p><?php echo _("Can taste it."); ?></p>");
			$('#answer2').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Think again! Water gas or vapor in the air is tasteless."); ?></p>");
			ans2 = 'D';
		}

		if (me == 'a3') {
			$('#answer3').find('.answer').html("<p><?php echo _("As snow in the winter in the northern part of the earth."); ?></p>");
			$('#answer3').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Nope... there may seem to be a lot of snow in winter in the north but it's not nearly as much as the ice caps on the north and south poles."); ?></p>");
			ans2 = 'D';
		}

		if (me == 'b3') {
			$('#answer3').find('.answer').html("<p><?php echo _("As snow on mountaintops."); ?></p>");
			$('#answer3').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Sorry... there may seem to be a lot of snow in the mountains of the earth – like on Mt. Everest - but it's not nearly as much as the ice caps on the North and South poles."); ?></p>");
			ans2 = 'D';
		}

		if (me == 'c3') {
			$('#answer3').find('.answer').html("<p><?php echo _("As snow and ice on both the north and south polar regions."); ?></p>");
			$('#answer3').find('.feedback').html("<p class='green'><img src='images/others/correct.png'><?php echo _("Correct! Most of the frozen (solid) water on earth, also known as ice or snow is found on the Earth's polar ice caps on both the North Pole and the South Pole (which is the continent called Antarctica)."); ?></p>");
			ans2 = 'D';
		}

		if (me == 'd3') {
			$('#answer3').find('.answer').html("<p><?php echo _("As glaciers on the north pole."); ?></p>");
			$('#answer3').find('.feedback').html("<p class='red'><img src='images/others/wrong.png'><?php echo _("Not quite! There are no glaciers on the North Pole. Just an ice cap of frozen sea water."); ?></p>");
			ans2 = 'D';
		}

	});

	$('.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 3) {
			alert('<?php echo _("Please select your answers.");?>');
		} else {
			$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
			$('#questions').fadeOut(function(){ 
				$('#answers').fadeIn();
				save();
				window.location.hash = '#answer';
			}); 
		}
	});

	function save() {
		if (answered == 0) {
			saveAnswer('role-of-water-qc2-a', ans1);
			saveAnswer('role-of-water-qc2-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "6.php#screen2";
		} else if ($('#answers').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
			$('#answers').fadeOut(function() {
				$('#questions').fadeIn();
				window.location.hash = '';
			});
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>

	
	<?php include("setlocale.php"); ?>
</body>
</html>
