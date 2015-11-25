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
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/svgmodernizr.custom.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/7/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; overflow: overlay !important; }
#answer { display: none; }
h1 { color: #d4c08b; margin-left: 20px; }
p { color: #fff; }
img.back-toggle-answer, #buttons .next { display: none; }
.q-container, .answer-item { margin-bottom: 10px !important; height: 100%; margin: 0 auto: width: 100%; }
#choices1 { margin: 0 0 15px 15px; }
#answer-icon1 { display:inline-block; }
#answer-icon1, #answer-icon2, #answer-icon3 { height: 25px; margin-right: 5px; }

table { width: 95%; margin: 0 auto; color: #fff; border: 0; }
td { border: 3px solid #b6ceff; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; height: 100px; }
td:not(:first-child) { text-align: center; }
td p { text-align: left; margin-left: 15px; color: #fff; }
th:not(:first-child) { border: 3px solid #fff99d; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; height: 30px; }
.ac-custom label { font-size: 30px; font-weight: normal; color: #fff; padding: 0 0 0 60px; }
.ac-custom li { padding: 10px 0px; }
div.q-container:nth-child(2) .ac-custom input[type="checkbox"], div.q-container:nth-child(2) .ac-custom input[type="radio"] { }
div.q-container:nth-child(2) .ac-custom svg { top: 31% !important; left: 12% !important; }
div.q-container:nth-child(2) .ac-custom label { padding-left: 50px !important; }
#answer .ac-custom label { padding-top: 30px !important; }
div.q-container:nth-child(2) .ac-custom { padding: 0 1em; }
html[dir="rtl"] .ac-custom label { padding:0 60px 0 0; } 
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right:0; } 
html[dir="rtl"] .ac-custom svg { right:4px; } 
html[dir="rtl"] div.q-container:nth-child(2) .ac-custom label { padding-left:0 !important;padding-right:50px; }
//html[dir="rtl"] .ac-fill2 .ac-custom svg { right:14px; }
html[dir="rtl"] h1 { padding-right:10px; }
html[dir="rtl"] #answer-icon1, html[dir="rtl"] #answer-icon2, html[dir="rtl"] #answer-icon3 { height: 25px; margin-left: 10px; margin-right: 0; }

	<?php if($language == 'zh_CN') { ?>
		div.q-container:nth-child(2) .ac-custom svg { left:25% !important; }
	<?php } ?>

	<?php if ($language == 'es_ES') : ?>
		h2 {font-size: 25px;}
		.ac-custom label {font-size: 24px;}
		td {height:85px;}
	<?php endif; ?>

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<h1><?php echo _("Quick Check #2"); ?></h1>
			<div id="question">
				<div class="q-container">
					<h2><?php echo _("Question A. A hydrologist studies the location, movement, and quality of water. A hydrologist recognizes the importance that water exists as…"); ?></h2>
						<form class="ac-custom ac-radio ac-fill" autocomplete="off">
							<ul>
								<li>
									<input id="a1" name="r1" type="radio">
									<label for="a1" class="css-label"><?php echo _("a solid, a liquid, and a gas"); ?></label>
								</li>
								<li>
									<input id="a2" name="r1" type="radio">
									<label for="a2" class="css-label"><?php echo _("a solid and a liquid"); ?></label>
								</li>
								<li>
									<input id="a3" name="r1" type="radio">
									<label for="a3" class="css-label"><?php echo _("a solid and a gas"); ?></label>
								</li>
								<li>
									<input id="a4" name="r1" type="radio">
									<label for="a4" class="css-label"><?php echo _("a solid only"); ?></label>
								</li>
							</ul>
						</form>
				</div>
				<div class="q-container ac-fill2">
					<h2><?php echo _("Question B. Is this is a PHYSICAL or CHEMICAL property? Click on the right answer."); ?></h2>
					<table>
						<tr>
							<th></th>
							<th><?php echo _("PHYSICAL"); ?></th>
							<th><?php echo _("CHEMICAL"); ?></th>
						</tr>
						<tr>
							<td><p id="answer2"><?php echo _("Hydrogen is a colorless, tasteless and odorless gas."); ?></p></td>
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
							<td><p id="answer3"><?php echo _("Hydrogen has the potential to ignite and explode given the right conditions."); ?></p></td>
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
					</table>
				</div>
				
			</div>
			<div id="answer">
				<div class="answer-item">
					<h2><?php echo _("Question A. A hydrologist studies the location, movement, and quality of water. A hydrologist recognizes the importance that water exists as…"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p><span id="textanswer1"></span></p>
					<p><img src="" id="answer-icon1"><span id="answer1"></span></p>
				</div>
				<div class="answer-item">
					<h2><?php echo _("Question B. Is this is a PHYSICAL or CHEMICAL property? Click on the right answer."); ?></h2>
				</div>

			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var answer1, answer2, answer3;
	var nullAnswer = false;
	var answered = 0;
	$(document).ready(function() {
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "6.php#screen3";
			} else if ($('#answer').is(':visible')) {
				$('h1').text('<?php echo _("Quick Check #2"); ?>');
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer2').removeClass('red');				
					$('#answer2').removeClass('green');
					$('#answer3').removeClass('red');				
					$('#answer3').removeClass('green');
					$('#answer2').text('<?php echo _("Hydrogen is a colorless, tasteless and odorless gas."); ?>');
					$('#answer3').text('<?php echo _("Hydrogen has the potential to ignite and explode given the right conditions."); ?>');
					$('#answer-icon1').removeClass('img-align');
					$('#answer-icon2').removeClass('img-align');
					$('#answer-icon3').removeClass('img-align');
					$('#answer-icon2').css('display','none');
					$('#answer-icon3').css('display','none');
					$('table').appendTo($('div.q-container:last-child'));
					$('input:radio').attr('disabled', false);
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
				$('h1').text('<?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?>');
				$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();

					/* For checking of question A */
					if($('#a1').is(':checked')) {
						textstr = "<?php echo _("Correct, water molecules can exist in a solid (ice), liquid (water), and gas (vapor) form."); ?>";
						$('#textanswer1').text('<?php echo _("a solid, a liquid, and a gas"); ?>');
						$('#answer-icon1').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
						answer1 = "A";
					} else {
						textstr = '';
						if($('#a2').is(':checked')) {
							textstr = "<?php echo _("Not quite, water molecules can exist in a gas (vapor) form as well as solid (ice) and liquid (water)."); ?>";
							$('#textanswer1').text('<?php echo _("a solid and a liquid"); ?>');
							answer1 = "B";
						} else if ($('#a3').is(':checked')) {
							textstr = "<?php echo _("Not quite, water molecules can exist in a solid (ice) form as well as liquid (water) and gas (vapor) form."); ?>";
							$('#textanswer1').text('<?php echo _("a solid and a gas"); ?>');
							answer1 = "C";
						} else if ($('#a4').is(':checked')) {
							textstr = "<?php echo _("Not quite, water molecules can exist in a gas (vapor) and liquid (water) form as well as solid (ice)."); ?>";
							$('#textanswer1').text('<?php echo _("a solid only"); ?>');
							answer1 = "D";
						}
						$('#answer-icon1').attr("src", "images/others/wrong2.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').html(textstr);
					/* End checking of question A */
					
					/* For checking of question B & C */
					textstr = '';
					if($('#b1').is(':checked')) {
						textstr = '<img src="images/others/correct.png" id="answer-icon2"><?php echo _("Correct, descriptions such as colorless, tasteless and odorless are physical properties of hydrogen. They can be determined without changing the kind or identity of the matter."); ?>';
						$('#answer2').addClass('green');
						answer2 = "physical";
					} else if ($('#b2').is(':checked')) {
						textstr = '<img src="images/others/wrong2.png" id="answer-icon2"><?php echo _("No, descriptions such as colorless, tasteless and odorless are not properties that can be seen when a substance is changed into another kind of substance."); ?>';
						$('#answer2').addClass('red');
						answer2 = "chemical";
					}
					
					$('#answer2').html(textstr);
					if (answer2 != "A") {
						$('#answer-icon2').addClass('img-align');
					}
					
					if($('#c2').is(':checked')) {
						textstr = '<img src="images/others/correct.png" id="answer-icon3"><?php echo _("Correct, whether or not a substance will burn is a chemical property, because when something burns, the kind of substance is changed into new kinds of matter."); ?>';
						$('#answer3').addClass('green');
						answer3 = "chemical";
					} else if ($('#c1 ').is(':checked')){
						textstr = '<img src="images/others/wrong2.png" id="answer-icon3"><?php echo _("No, descriptions such as having the potential to ignite and explode are not determined without changing the kind or identity of the matter."); ?>';
						$('#answer-icon3').addClass('img-align');
						$('#answer3').addClass('red');
						answer3 = "physical";
					}
					
					$('#answer3').html(textstr);
					if (answer3 != "B") {
						$('#answer-icon3').addClass('img-align');
					}
					$('table').appendTo($('div.answer-item:last-child'));
					$('input:radio').attr('disabled', true);
					/* End checking of question B */
					
					if(answered == 0) {
						saveAnswer('properties-of-matter-qc2-a', answer1);
						saveAnswer('properties-of-matter-qc2-b', answer2);
						saveAnswer('properties-of-matter-qc2-c', answer3);
						answered = 1;
					}
				}); // end question fade
			}// end else
		}); // end check toggle
	}); // end document ready
	
	function checkNull() {
		if(!$('#a1').is(':checked') && !$('#a2').is(':checked') && !$('#a3').is(':checked') && !$('#a4').is(':checked')) {
			nullAnswer = true;
		}
		
		if(!$('#b1').is(':checked') && !$('#b2').is(':checked')) {
			nullAnswer = true;
		}
		
		if(!$('#c1').is(':checked') && !$('#c2').is(':checked')) {
			nullAnswer = true;
		}
	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Another quick check on the way!"); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
