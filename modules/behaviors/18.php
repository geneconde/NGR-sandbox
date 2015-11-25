<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'behaviors-qq5-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behavior'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.qtip.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #1F7FB1; }
.wrap { border-color: #5fbff1; }
.bg { background-image: url(images/18/bg.jpg); }

.answer-icon { height: 35px; }

table { width: 100%; margin: 0 auto; margin-bottom: 20px; color: #fff; }
td { padding: 4px 0px;background: #aecdff; border-radius: 10px; }
td:not(:first-child) { text-align: center; padding: 0; }
td a { text-align: left; color: #000; margin-left: 15px; text-decoration: none; font-size: 23px; line-height: 40px; }
th:not(:first-child) {
	width: 100px;
	font-size: 22px;
	background: #ffab81;
	-webkit-border-top-left-radius: 10px;
	-webkit-border-top-right-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	padding: 5px;
	color:black;
	font-weight: normal;
}

td:first-child { 
	-webkit-border-top-left-radius: 10px;
	-webkit-border-bottom-left-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-bottomleft: 10px;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
}

td:last-child { 
	-webkit-border-top-right-radius: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-topright: 10px;
	-moz-border-radius-bottomright: 10px;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;
}
.ac-custom label::before { border:4px solid white; }
.ac-custom label { font-size: 30px; font-weight: normal; color: #fff; padding: 0 0 0 60px; }
.ac-custom li { padding: 10px 0px; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { height: 40px; width: 40px; }
.ac-custom svg { top: 59% !important; left: 21% !important; height: 35px; width: 35px; }
.ac-custom label { top: 15px; left: 10px; }
.ac-custom { padding: 0 20px; } 

#answer { display: none; text-align: center; }
#answer p { text-align: center;padding:0;font-size:23px; }
#answer .answer img { margin-top: 10px; border: 2px solid #fff; }
#answer td a { font-size: 20px; }
#answer h1 { padding:0; }

img.next-toggle { display: none; }

#ans-table th:not(:first-child) { font-size: 18px; }
#ans-table table { margin-bottom: 5px; }
#ans-table td a { line-height: 35px; }
<?php if($language == "es_ES") { ?>
	#question td a { font-size: 20px !important; }
	#answer td a { font-size: 19px !important; }
<?php } ?>
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<div>
					<h2><?php echo _("Are these behaviors instinct, reflex, or learned? Hover your mouse on the texts to view an image."); ?> </h2>
					<table>
						<tr>
							<th></th>
							<th><?php echo _("Instinct"); ?></th>
							<th><?php echo _("Reflex"); ?></th>
							<th><?php echo _("Learned"); ?></th>
						</tr>
						<tr>
							<td><a href="#" id="q1"><?php echo _("A pet cuddling with its owner."); ?></a></td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="a1" name="r1" type="radio"><label for="a1" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="a2" name="r1" type="radio"><label for="a2" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="a3" name="r1" type="radio"><label for="a3" class="css-label"></li>
									</ul>
								</section>
							</td>
						</tr>
						<tr>
							<td><a href="#" id="q2"><?php echo _("A pet going to its mother for milk."); ?></a></td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="b1" name="r2" type="radio"><label for="b1" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="b2" name="r2" type="radio"><label for="b2" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="b3" name="r2" type="radio"><label for="b3" class="css-label"></li>
									</ul>
								</section>
							</td>
						</tr>
						<tr>
							<td><a href="#" id="q3"><?php echo _("A child being potty trained."); ?></a></td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="c1" name="r3" type="radio"><label for="c1" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="c2" name="r3" type="radio"><label for="c2" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="c3" name="r3" type="radio"><label for="c3" class="css-label"></li>
									</ul>
								</section>
							</td>
						</tr>
						<tr>
							<td><a href="#" id="q4"><?php echo _("A woman quickly moves her hand away from heat."); ?></a></td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="d1" name="r4" type="radio"><label for="d1" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="d2" name="r4" type="radio"><label for="d2" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="d3" name="r4" type="radio"><label for="d3" class="css-label"></li>
									</ul>
								</section>
							</td>
						</tr>
						<tr>
							<td><a href="#" id="q5"><?php echo _("A student looks both ways before crossing the street."); ?></a></td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="e1" name="r5" type="radio"><label for="e1" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="e2" name="r5" type="radio"><label for="e2" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="e3" name="r5" type="radio"><label for="e3" class="css-label"></li>
									</ul>
								</section>
							</td>
						</tr>
						<tr>
							<td><a href="#" id="q6"><?php echo _("A child screams when frightened."); ?></a></td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="f1" name="r6" type="radio"><label for="f1" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="f2" name="r6" type="radio"><label for="f2" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="f3" name="r6" type="radio"><label for="f3" class="css-label"></li>
									</ul>
								</section>
							</td>
						</tr>
						<tr>
							<td><a href="#" id="q7"><?php echo _("A baby cries when it wants its parents' attention."); ?></a></td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="g1" name="r7" type="radio"><label for="g1" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="g2" name="r7" type="radio"><label for="g2" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="g3" name="r7" type="radio"><label for="g3" class="css-label"></li>
									</ul>
								</section>
							</td>
						</tr>
						<tr>
							<td><a href="#" id="q8"><?php echo _("Recently born birds know when to migrate."); ?></a></td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="h1" name="r8" type="radio"><label for="h1" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="h2" name="r8" type="radio"><label for="h2" class="css-label"></li>
									</ul>
								</section>
							</td>
							<td>
								<section class="ac-custom ac-radio ac-swirl" autocomplete="off">
									<ul>
										<li><input id="h3" name="r8" type="radio"><label for="h3" class="css-label"></li>
									</ul>
								</section>
							</td>
						</tr>
					</table>
					
				</div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div>
					<!-- <p>You answered...</p>
					<p class="answer"></p> -->
					<div id="ans-table"></div>
					<div class="feedback center"></div>
				</div>	
			</div>
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _("Check Answer"); ?>"></a>
		<a href="19.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Instinct, reflex or learned?"); ?></strong></section></section>

	<script>
	var back = $('img.back-toggle'),
	next = $('img.next-toggle'),
	check = $('img.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans1 = '',
	ans2 = '',
	ans3 = '',
	ans4 = '',
	ans5 = '',
	ans6 = '',
	ans7 = '',
	ans8 = '',
	checkAnswer = 0,
	answered = <?php echo $answered; ?>;

	$(document).ready(function() {
		$('#q1').qtip({ 
			content: '<img src="images/18/cuddling.jpg" width="150px" />',
			style: { name: 'cream', padding: 3, tip: true, height: 105, border: { radius: 5 } }, 
			position: { corner: { target: 'bottomRight', tooltip: 'topLeft' } } 
		});
		 $('#q2').qtip({ 
			content: '<img src="images/18/milk-baby.jpg" width="150px" />',
			style: { name: 'cream', padding: 3, tip: true, height: 105, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q3').qtip({ 
			content: '<img src="images/18/potty.jpg" width="150px" />', 
			style: { name: 'cream', padding: 3, tip: true, height: 105, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q4').qtip({ 
			content: '<img src="images/18/hand-heat.jpg" width="150px" />', 
			style: { name: 'cream', padding: 3, tip: true, height: 105, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q5').qtip({ 
			content: '<img src="images/18/cross.jpg" width="150px" />', 
			style: { name: 'cream', padding: 3, tip: true, height: 105, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q6').qtip({ 
			content: '<img src="images/18/scream-fear2.jpg" width="150px" />', 
			style: { name: 'cream', padding: 3, tip: true, height: 105, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q7').qtip({ 
			content: '<img src="images/18/scream-attention2.jpg" width="150px" />', 
			style: { name: 'cream', padding: 3, tip: true, height: 105, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q8').qtip({ 
			content: '<img src="images/18/migrate.jpg" width="150px" />', 
			style: { name: 'cream', padding: 3, tip: true, height: 105, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
});

	function save() {
		if (answered == 0) {
			saveAnswer('behaviors-qq5-a', ans1);
			saveAnswer('behaviors-qq5-b', ans2);
			saveAnswer('behaviors-qq5-c', ans3);
			saveAnswer('behaviors-qq5-d', ans4);
			saveAnswer('behaviors-qq5-e', ans5);
			saveAnswer('behaviors-qq5-f', ans6);
			saveAnswer('behaviors-qq5-g', ans7);
			saveAnswer('behaviors-qq5-h', ans8);

			answered = 1;
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "17.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				$('p').removeClass('red');
				$('p').removeClass('green');
				$('input:radio').attr('disabled', false);
				$('table').appendTo('#question div');
				$('tr:first-child th:nth-child(2)').remove();
				$('td:nth-child(2)').each(function() {
					$(this).remove();
				});
				window.location.hash = '';
			}); 
		}
	});
	
	check.click(function() { 
		checkAnswer = $('input:radio:checked').length;
		if (checkAnswer < 8) {
			alert('<?php echo _("Please select your answer."); ?>');
		} else {
			check.fadeOut(function() { next.fadeIn(); });
			question.fadeOut(function(){
				answer.fadeIn();
				$("table tr:nth-child(1) th:nth-child(2)").before("<th><?php echo _('ANSWER'); ?></th>");

					// A
					if($('#a1').is(':checked')) {
						$('table tr:nth-child(2) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans1 = 'instinct';
					} else if ($('#a2').is(':checked')) {
						$('table tr:nth-child(2) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans1 = 'reflex';
					} else {
						$('table tr:nth-child(2) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						ans1 = 'learned';
					}
					
					// B
					if($('#b2').is(':checked')) {
						$('table tr:nth-child(3) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans2 = 'reflex';
					} else if ($('#b1').is(':checked')) {
						$('table tr:nth-child(3) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						ans2 = 'instinct';
					} else {
						$('table tr:nth-child(3) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans2 = 'learned';
					}
					
					// C
					if($('#c2').is(':checked')) {
						$('table tr:nth-child(4) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans3 = 'reflex';
					} else if ($('#c1').is(':checked')) {
						$('table tr:nth-child(4) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans3 = 'instinct';
					} else {
						$('table tr:nth-child(4) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						ans3 = 'learned';
					}
					
					// D
					if($('#d2').is(':checked')) {
						$('table tr:nth-child(5) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						ans4 = 'reflex';
					} else if ($('#d1').is(':checked')) {
						$('table tr:nth-child(5) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans4 = 'instinct';
					} else {
						$('table tr:nth-child(5) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans4 = 'learned';
					}
					
					// E
					if($('#e1').is(':checked')) {
						$('table tr:nth-child(6) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans5 = 'instinct';
					} else if ($('#e2').is(':checked')) {
						$('table tr:nth-child(6) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans5 = 'reflex';
					} else {
						$('table tr:nth-child(6) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						ans5 = 'learned';
					}
					
					// F
					if($('#f1').is(':checked')) {
						$('table tr:nth-child(7) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans6 = 'instinct';
					} else if ($('#f2').is(':checked')) {
						$('table tr:nth-child(7) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						ans6 = 'reflex';
					} else {
						$('table tr:nth-child(7) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans6 = 'learned';
					}
					
					// G
					if($('#g2').is(':checked')) {
						$('table tr:nth-child(8) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans7 = 'reflex';
					} else if ($('#g1').is(':checked')) {
						$('table tr:nth-child(8) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans7 = 'instinct';
					} else {
						$('table tr:nth-child(8) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						ans7 = 'learned';
					}
					
					// H
					if($('#h1').is(':checked')) {
						$('table tr:nth-child(9) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						ans8 = 'instinct';
					} else if ($('#h2').is(':checked')) {
						$('table tr:nth-child(9) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans8 = 'reflex';
					} else {
						$('table tr:nth-child(9) td:nth-child(2)').before('<td><img src="images/others/wrong.png" class="answer-icon"></td>');
						ans8 = 'learned';
					}

					$('table').appendTo($('#ans-table'));
					$('input:radio').attr('disabled', true);

					if($('#a3').is(':checked') && $('#c3').is(':checked') && $('#e3').is(':checked') && $('#g3').is(':checked') && $('#b1').is(':checked') && $('#h1').is(':checked') && $('#d2').is(':checked') && $('#f2').is(':checked') ){
						answer.find('.feedback').html('<p class="green"><img src="images/others/correct.png"><?php echo _("Correct! An animal will instinctively go to its mother for milk, but it learned to go to its human owner for cuddling. Other animals might have \"learned\" not to go near humans based on their experience. Screaming is another example in which if it is done without thinking, out of fear, it is a reflex. But if a person learns that screaming will lead to more parental attention, it is no longer considered a reflex."); ?></p>');
					} else {
						answer.find('.feedback').html('<p class="red"><img src="images/others/wrong.png"><?php echo _("Not quite. An animal will instinctively go to its mother for milk, but it learned to go to its human owner for cuddling. Other animals might have \"learned\" not to go near humans based on their experience. Screaming is another example in which if it is done without thinking, out of fear, it is a reflex. But if a person learns that screaming will lead to more parental attention, it is no longer considered a reflex."); ?></p>');
					}
				save();
				window.location.hash = '#answer';
			}); 
		}
	});
	</script>

	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
