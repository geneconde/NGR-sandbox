<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #006171; }
h2 { margin: 1% 0; }
.wrap { border-color: #E6ABFF; }
.bg { background-image: url(images/9/bg.jpg); }

#questions { position: relative; z-index: 5; }
#question1 ol { list-style: none; padding: 0; margin-left: 20px; }
#question1 li { padding: 7px 0; }
#question1 .ac-custom { width: 100%; }
#question1 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question1 .ac-custom input[type="radio"] {}
#question1 .ac-custom input[type="radio"]:checked + label { color: #780046; }
#question1 .ac-custom svg { height: 42px; width: 38px; left: 1px; margin-top: -23px; }
#question1 .ac-custom svg path { stroke: #780046; }
#question1 .ac-custom label::before { background: #780046; height: 20px; width: 20px; margin-top: -12px;}

#question2 ol { margin: 0 0 0 20px; padding: 0; }
#question2 li { padding: 7px 0; }
#question2 .ac-custom { width: 100%; }
#question2 .ac-custom label { color: #000; padding-left: 45px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #780046; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
#question2 .ac-custom label::before { border: 2px solid #780046; }
#question2 .ac-custom svg path { stroke: #780046; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

#questions section { float: left; }

#answers { display: none; }
#answers p { text-align: center; }

#question2, #answer2 { margin-top: 25px; }
#buttons .next { display: none; }

html[dir="rtl"] #questions section { float: right; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 15px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="questions">
				<h1><?php echo _("Quick Check #3"); ?></h1>

				<div id="question1" class="clear">
					<h2><?php echo _("Question A. Changes in natural systems occur due to which of the following?"); ?></h2>	

					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ol>
								<li><input id="a1" name="q1" type="radio"><label for="a1"><span><?php echo _("Human impacts"); ?></span></label></li>
								<li><input id="b1" name="q1" type="radio"><label for="b1"><span><?php echo _("Natural disasters"); ?></span></label></li>
								<li><input id="c1" name="q1" type="radio"><label for="c1"><span><?php echo _("Both human impacts and natural disasters"); ?></span></label></li>
								<li><input id="d1" name="q1" type="radio"><label for="d1"><span><?php echo _("Neither human impacts nor natural disasters"); ?></span></label></li>
							<ol>
						</form>
					</section>
					
				</div>

				<div id="question2">
					<h2><?php echo _("Question B. What happens to the ecosystem of an area after a disaster or dramatic change happens?"); ?></h2>	
 
					<section>
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ol>
								<li><input id="a2" name="q2" type="radio"><label for="a2"><span><?php echo _("All the plants and animals that were once part of that area become extinct."); ?></span></label></li>
								<li><input id="b2" name="q2" type="radio"><label for="b2"><span><?php echo _("Over time, some plants and animals adapt or new species become part of the ecosystem."); ?></span></label></li>
								<li><input id="c2" name="q2" type="radio"><label for="c2"><span><?php echo _("The local ecosystem will never return to a stable balance between plants and animals."); ?></span></label></li>
								<li><input id="d2" name="q2" type="radio"><label for="d2"><span><?php echo _("None of the above"); ?></span></label></li>
							<ol>
						</form>
					</section>
					
	 			</div>
			</div>

			<div id="answers">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

				<div id="answer1">
					<h2><?php echo _("Question A. Changes in natural systems occur due to which of the following?"); ?></h2>
					<div>
						<p><?php echo _("You answered..."); ?></p>
						<div class="answer"></div>
						<div class="feedback"></div>
					</div>
				</div>					

				<div id="answer2">
					<h2><?php echo _("Question B. What happens to the ecosystem of an area after a disaster or dramatic change happens?"); ?></h2>
					<div>
						<p><?php echo _("You answered..."); ?></p>
						<div class="answer"></div>
						<div class="feedback"></div>
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


	<section id="preloader"><section class="selected"><strong><?php echo _("Gathering data..."); ?></strong></section></section>

	<script>
	var ans1, ans2, answered = 1, checkAnswer = 0;

	$('#questions').find('input[type=radio]').on('click', function() {
		var me = $(this).attr('id');

		if (me == 'a1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Human impacts"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Better think some more... Humans do have impacts... Any others?"); ?></p>');
			ans1 = 'A';
		}

		if (me == 'b1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Natural disasters"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("True... as far as it goes. But there are other impacts. Keep thinking."); ?></p>');
			ans1 = 'B';
		}

		if (me == 'c1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Both human impacts and natural disasters"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! Both humans and nature impact local environments."); ?></p>');
			ans1 = 'C';
		}

		if (me == 'd1') {
			$('#answer1').find('.answer').html('<p>' + '<?php echo _("Neither human impacts nor natural disasters"); ?></p>');
			$('#answer1').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Nope. These are the only two possibilities."); ?></p>');
			ans1 = 'D';
		}
		if (me == 'a2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("All the plants and animals that were once part of that area become extinct."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, some might be able to adapt to the new environment. Not all of them will necessarily become extinct."); ?></p>');
			ans2 = 'A';
		}

		if (me == 'b2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("Over time, some plants and animals adapt or new species become part of the ecosystem."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct. Plants and animals will gradually fill the new environment and create a different ecosystem."); ?></p>');
			ans2 = 'B';
		}

		if (me == 'c2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("The local ecosystem will never return to a stable balance between plants and animals."); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, the local ecosystem will eventually return to a stable balance, but it will be different from what it was before the disaster."); ?></p>');
			ans2 = 'C';
		}

		if (me == 'd2') {
			$('#answer2').find('.answer').html('<p>' + '<?php echo _("None of the above"); ?></p>');
			$('#answer2').find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("No, over time some plants and animals adapt or new species become part of the ecosystem."); ?></p>');
			ans2 = 'D';
		}
	});

	$('.check-toggle').click(function(){ 
		checkAnswer = $('input:radio:checked').length;

		if (checkAnswer < 2) {
			alert('<?php echo _("Please select your answers."); ?>');
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
			//saveAnswer('staying-alive-qc3-a', ans1);
			//saveAnswer('staying-alive-qc3-b', ans2);
		}
	}

	$('.back-toggle').click(function() {
		if ($('#questions').is(':visible')) {
			document.location.href = "8.php#screen3";
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

	<?php include 'setlocale.php'; ?>
</body>
</html>
