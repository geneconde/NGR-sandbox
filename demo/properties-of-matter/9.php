<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.qtip.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/svgmodernizr.custom.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/9/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
h1 { color: #d4c08b; }
#answer { display: none; }
img.back-toggle-answer, #buttons .next { display: none; }
.answer-icon { height: 35px; }

table { width: 95%; margin: 0 auto; margin-bottom: 20px; color: #fff; }
td { border: 3px solid #FFCAFA; padding: 4px 5px; }
td:not(:first-child) { text-align: center; padding: 0; }
td a { text-align: left; margin-left: 15px; text-decoration: none; font-size: 24px; line-height: 40px; }
th:not(:first-child) {
	width: 120px;
	font-size: 22px;
	border: 3px solid #DBFFA1;
	-webkit-border-top-left-radius: 10px;
	-webkit-border-top-right-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	padding: 0;
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

.ac-custom label { font-size: 30px; font-weight: normal; color: #fff; padding: 0 0 0 60px; }
.ac-custom li { padding: 10px 0px; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { height: 40px; width: 40px; }
.ac-custom svg { top: 59% !important; left: 27% !important; height: 35px; width: 35px; }
.ac-custom label { top: 15px; left: 10px; }
.ac-custom { padding: 0 20px; } 
.tip { width: 155px; }
#answer table { padding-top: 20px; }

html[dir="rtl"] td a { padding-right:10px; }

html[dir="rtl"] th:not(:first-child) {
	width: 120px;
	font-size: 22px;
	border: 3px solid #DBFFA1;
	-webkit-border-top-left-radius: 10px;
	-webkit-border-top-right-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-topright: 10px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
	padding: 0;
}

html[dir="rtl"] td:first-child { 
	-webkit-border-top-right-radius: 10px;
	-webkit-border-bottom-right-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-bottomleft: 10px;
	border-top-right-radius: 10px;
	border-bottom-right-radius: 10px;

	-webkit-border-top-left-radius: 0px;
	-webkit-border-bottom-left-radius: 0px;
	-moz-border-radius-topleft: 0px;
	-moz-border-radius-bottomleft: 0px;
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
}

html[dir="rtl"] td:last-child { 
	-webkit-border-top-left-radius: 10px;
	-webkit-border-bottom-left-radius: 10px;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-bottomleft: 10px;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;

	-webkit-border-top-right-radius: 0px;
	-webkit-border-bottom-right-radius: 0px;
	-moz-border-radius-topright: 0px;
	-moz-border-radius-bottomright: 0px;
	border-top-right-radius: 0px;
	border-bottom-right-radius: 0px;
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#answer { padding-top: 0; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #3"); ?></h1>
				<h2><?php echo _("Are these changes physical or chemical? Hover your mouse on the texts to view an image."); ?></h2>
				<table>
					<tr>
						<th></th>
						<th><?php echo _("PHYSICAL"); ?></th>
						<th><?php echo _("CHEMICAL"); ?></th>
					</tr>
					<tr>
						<td><a href="#" id="q1"><?php echo _("Molding clay into a bowl"); ?></a></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="a1" name="r1" type="radio"><label for="a1" class="css-label"></li>
								</ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="a2" name="r1" type="radio"><label for="a2" class="css-label"></li>
								</ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><a href="#" id="q2"><?php echo _("Leaves changing color"); ?></a></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="b1" name="r2" type="radio"><label for="b1" class="css-label"></li>
								</ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="b2" name="r2" type="radio"><label for="b2" class="css-label"></li>
								</ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><a href="#" id="q3"><?php echo _("Gasoline burning in a car"); ?></a></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="c1" name="r3" type="radio"><label for="c1" class="css-label"></li>
								</ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="c2" name="r3" type="radio"><label for="c2" class="css-label"></li>
								</ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><a href="#" id="q4"><?php echo _("An apple rotting"); ?></a></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="d1" name="r4" type="radio"><label for="d1" class="css-label"></li>
								</ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="d2" name="r4" type="radio"><label for="d2" class="css-label"></li>
								</ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><a href="#" id="q5"><?php echo _("Dissolving salt in water"); ?></a></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="e1" name="r5" type="radio"><label for="e1" class="css-label"></li>
								</ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="e2" name="r5" type="radio"><label for="e2" class="css-label"></li>
								</ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><a href="#" id="q6"><?php echo _("Chopping up potatoes"); ?></a></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="f1" name="r6" type="radio"><label for="f1" class="css-label"></li>
								</ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="f2" name="r6" type="radio"><label for="f2" class="css-label"></li>
								</ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><a href="#" id="q7"><?php echo _("Bleaching a shirt to get a spot out"); ?></a></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="g1" name="r7" type="radio"><label for="g1" class="css-label"></li>
								</ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="g2" name="r7" type="radio"><label for="g2" class="css-label"></li>
								</ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><a href="#" id="q8"><?php echo _("Ripping a hole in a shirt"); ?></a></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="h1" name="r9" type="radio"><label for="h1" class="css-label"></li>
								</ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="h2" name="r9" type="radio"><label for="h2" class="css-label"></li>
								</ul>
							</section>
						</td>
					</tr>
					<tr>
						<td><a href="#" id="q9"><?php echo _("Hanging a shirt out to dry in the sun"); ?></a></td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="i1" name="r10" type="radio"><label for="i1" class="css-label"></li>
								</ul>
							</section>
						</td>
						<td>
							<section class="ac-custom ac-radio ac-fill" autocomplete="off">
								<ul>
									<li><input id="i2" name="r10" type="radio"><label for="i2" class="css-label"></li>
								</ul>
							</section>
						</td>
					</tr>
				</table>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var textstr = "";
	var answer1, answer2, answer3, answer4, answer5, answer6, answer7, answer8, answer9;
	var nullAnswer = false;
	//var answered = 0;
	$(document).ready(function() {
		$('#q1').qtip({ 
			content: '<img src="images/9/pot.jpg" class="tip" />',
			style: { name: 'cream', padding: 3, tip: true, height: 110, width: 171, border: { radius: 5 } }, 
			position: { corner: { target: 'rightMiddle', tooltip: 'bottomLeft' } } 
		});
		 $('#q2').qtip({ 
			content: '<img src="images/9/leaves.jpg" class="tip" />',
			style: { name: 'cream', padding: 3, tip: true, height: 110, width: 171, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q3').qtip({ 
			content: '<img src="images/9/carfire.jpg" class="tip"  />', 
			style: { name: 'cream', padding: 3, tip: true, height: 110, width: 171, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q4').qtip({ 
			content: '<img src="images/9/apple.jpg" class="tip" />', 
			style: { name: 'cream', padding: 3, tip: true, height: 110, width: 171, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q5').qtip({ 
			content: '<img src="images/9/seasalt.jpg" class="tip"  />', 
			style: { name: 'cream', padding: 3, tip: true, height: 110, width: 171, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q6').qtip({ 
			content: '<img src="images/9/potatoes.jpg" class="tip"  />', 
			style: { name: 'cream', padding: 3, tip: true, height: 110, width: 171, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q7').qtip({ 
			content: '<img src="images/9/towels.jpg" class="tip" />', 
			style: { name: 'cream', padding: 3, tip: true, height: 110, width: 171, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q8').qtip({ 
			content: '<img src="images/9/shirthole.jpg"  class="tip"  />', 
			style: { name: 'cream', padding: 3, tip: true, height: 110, width: 171, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
		 $('#q9').qtip({ 
			content: '<img src="images/9/laundry.jpg"  class="tip"  />', 
			style: { name: 'cream', padding: 3, tip: true, height: 110, width: 171, border: { radius: 5 } }, 
			position: { corner: { target: 'topRight', tooltip: 'bottomLeft' } } 
		});
});
   
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "8.php#screen3";
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					$('p').removeClass('red');
					$('p').removeClass('green');
					$('input:radio').attr('disabled', false);
					$('table').appendTo('#question');
					$('tr:first-child th:nth-child(2)').remove();
					$('td:nth-child(2)').each(function() {
						$(this).remove();
					});
				});
			}
		});
	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert('<?php echo _("Please select your answers."); ?>');
				nullAnswer = false;
			} else {
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
					
					$("table tr:nth-child(1) th:nth-child(2)").before("<th><?php echo _("ANSWER"); ?></th>");

					// A
					if($('#a1').is(':checked')) {
						$('table tr:nth-child(2) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						answer1 = "physical";
					} else if ($('#a2').is(':checked')) {
						$('table tr:nth-child(2) td:nth-child(2)').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						answer1 = "chemical";
					}
					
					// B
					if($('#b2').is(':checked')) {
						$('table tr:nth-child(3) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						answer2 = "chemical";
					} else if ($('#b1').is(':checked')) {
						$('table tr:nth-child(3) td:nth-child(2)').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						answer2 = "physical";
					}
					
					// C
					if($('#c2').is(':checked')) {
						$('table tr:nth-child(4) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						answer3 = "chemical";
					} else if ($('#c1').is(':checked')) {
						$('table tr:nth-child(4) td:nth-child(2)').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						answer3 = "physical";
					}
					
					// D
					if($('#d2').is(':checked')) {
						$('table tr:nth-child(5) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						answer4 = "chemical";
					} else if ($('#d1').is(':checked')) {
						$('table tr:nth-child(5) td:nth-child(2)').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						answer4 = "physical";
					}
					
					// E
					if($('#e1').is(':checked')) {
						$('table tr:nth-child(6) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						answer5 = "physical";
					} else if ($('#e2').is(':checked')) {
						$('table tr:nth-child(6) td:nth-child(2)').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						answer5 = "chemical";
					}
					
					// F
					if($('#f1').is(':checked')) {
						$('table tr:nth-child(7) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						answer6 = "physical";
					} else if ($('#f2').is(':checked')) {
						$('table tr:nth-child(7) td:nth-child(2)').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						answer6 = "chemical";
					}
					
					// G
					if($('#g2').is(':checked')) {
						$('table tr:nth-child(8) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						answer7 = "chemical";
					} else if ($('#g1').is(':checked')) {
						$('table tr:nth-child(8) td:nth-child(2)').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						answer7 = "physical";
					}
					
					// H
					if($('#h1').is(':checked')) {
						$('table tr:nth-child(9) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						answer8 = "physical";
					} else if ($('#h2').is(':checked')) {
						$('table tr:nth-child(9) td:nth-child(2)').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						answer8 = "chemical";
					}
					
					// I
					if($('#i1').is(':checked')) {
						$('table tr:nth-child(10) td:nth-child(2)').before('<td><img src="images/others/correct.png" class="answer-icon"></td>');
						answer9 = "physical";
					} else if ($('#i2').is(':checked')) {
						$('table tr:nth-child(10) td:nth-child(2)').before('<td><img src="images/others/wrong2.png" class="answer-icon"></td>');
						answer9 = "chemical"
					}
					
					$('table').appendTo($('#answer'));
					$('input:radio').attr('disabled', true);
					
					/*
					if(answered == 0) {
						saveAnswer('properties-of-matter-qc3-a', answer1);
						saveAnswer('properties-of-matter-qc3-b', answer2);
						saveAnswer('properties-of-matter-qc3-c', answer3);
						saveAnswer('properties-of-matter-qc3-d', answer4);
						saveAnswer('properties-of-matter-qc3-e', answer5);
						saveAnswer('properties-of-matter-qc3-f', answer6);
						saveAnswer('properties-of-matter-qc3-g', answer7);
						saveAnswer('properties-of-matter-qc3-h', answer8);
						saveAnswer('properties-of-matter-qc3-i', answer9);
						answered = 1;
					}
					*/
				}); // end question fade
			} // end else
		});// end check click
	
	
	function checkNull() {
		if(!$('#a1').is(':checked') && !$('#a2').is(':checked')) { nullAnswer = true; }
		if(!$('#b1').is(':checked') && !$('#b2').is(':checked')) { nullAnswer = true; }
		if(!$('#c1').is(':checked') && !$('#c2').is(':checked')) { nullAnswer = true; }
		if(!$('#d1').is(':checked') && !$('#d2').is(':checked')) { nullAnswer = true; }
		if(!$('#e1').is(':checked') && !$('#e2').is(':checked')) { nullAnswer = true; }
		if(!$('#f1').is(':checked') && !$('#f2').is(':checked')) { nullAnswer = true; }
		if(!$('#g1').is(':checked') && !$('#g2').is(':checked')) { nullAnswer = true; }
		if(!$('#h1').is(':checked') && !$('#h2').is(':checked')) { nullAnswer = true; }
		if(!$('#i1').is(':checked') && !$('#i2').is(':checked')) { nullAnswer = true; }
	}
	
	
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Physical or chemical?"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
