<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!-- Template for pages 3, 5, 7 and 9 and possibly quiz questions -->
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; else if ($language == 'es_ES') echo "dir='es'"; ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Changing to Survive"); ?></title> <!-- Change title here -->
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/9/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #b77f4e !important; }
.wrap { border-left: 1px dashed #ffec90; border-right: 1px dashed #ffec90; }

#answer { display: none; }
.back-toggle-answer, #buttons .next { display: none; }

#question1 .ac-custom label { color: #000; padding-left: 6% !important; }
#question1 .ac-custom input[type="radio"]:checked + label {color: #AC5000; }
#question1 .ac-custom svg path { stroke: #AC5000; stroke-width: 3px; }
#question1 .ac-circle svg { width: 40px; height: 40px; margin-top: -20px; }
#question1 .ac-circle input[type="radio"], #question2 .ac-circle label::before { width: 20px; height: 20px; margin-top: -10px; left: 0; position: absolute; }
#question1 .ac-circle label::before { background-color: #AC5000; width: 20px; height: 20px; margin-top: -9px;  left: 0; }
#question1 ul { padding: 10px; }
#question1 li { padding: 5px 0; }
#question1 li label { text-align: left; font-size: 24px !important; }

#question2 .ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
#question2 .ac-custom input[type="radio"] { vertical-align: top; margin-top: -10px; }
#question2 .ac-custom input[type="radio"]:checked + label { color: #AC5000; }
#question2 .ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -11px; }
#question2 .ac-custom label::before { border-color: #AC5000; }
#question2 .ac-custom svg path { stroke: #AC5000; }
#question2 .ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}
#question2 ol { margin: 0; padding: 10px 0; list-style: none; }
#question2 li { margin: 0; padding: 5px 0; }
#question2 li span { text-align: left; font-size: 24px !important; }
#question2 .ac-custom li { padding: 8px 0; }

#answer p { margin: 5px 0; text-align: center; }
#selected_img1 { margin: 0 auto; display: block; }
#question2, #answer2 { margin-top: 20px; }

ol li input[type="checkbox"]:not(:checked) label{ color: red; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 36px; margin-top: -12px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #3"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. The variations involved in evolution must be inherited because:"); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ul id="choices1">
								<li><input type="radio" id="a1" name="question1" value="A">
									<label for="a1">A. <?php echo _("They must be passed into later generations to be important."); ?></label>
								</li>
								<li><input type="radio" id="b1" name="question1" value="B">
									<label for="b1">B. <?php echo _("They must not be passed into later generations to be important."); ?></label>
								</li>
								<li><input type="radio" id="c1" name="question1" value="C">
									<label for="c1">C. <?php echo _("They must be unique to one individual only."); ?></label>
								</li>
								<li><input type="radio" id="d1" name="question1" value="D">
									<label for="d1">D. <?php echo _("They must have occurred in both parents to matter."); ?></label>
								</li>
							</ul>
						</form>
					</section>
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. Click on the <span class='blink'>incorrect</span> statement about mutations and evolution."); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-cross" autocomplete="off">
							<ol id="choices2">
								<li><input id="a2" name="question2" type="radio" value="A"><label for="a2">A. <?php echo _("Mutations are random errors in DNA."); ?></label></li>
								<li><input id="b2" name="question2" type="radio" value="B"><label for="b2">B. <?php echo _("Mutations can be neutral, helpful, or harmful."); ?></label></li>
								<li><input id="c2" name="question2" type="radio" value="C"><label for="c2">C. <?php echo _("Mutations occur to increase survival of a certain species."); ?></label></li>
								<li><input id="d2" name="question2" type="radio" value="D"><label for="d2">D. <?php echo _("The effects of all mutations are not yet known."); ?></label></li>
							</ol>
						</form>
					</section>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. The variations involved in evolution must be inherited because:"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
				<div id="answer2">
					<h2><?php echo _("Question B. Click on the <span class='blink'>incorrect</span> statement about mutations and evolution."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p id="selected_answer2"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'> </span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Ready for your last quick check?"); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "",
		answericon1 = $('#answer-icon1'),
		answericon2 = $('#answer-icon2'),
		textstr1 = ""
		answer2 = ""
		nullAnswer = false;
	var id="";
	var prev="", cur;
	
	$(document).ready(function() {
		
		//remove svg path of previously selected choice
		$('input[name="question2"]').click(function(){
			prev = cur;
			cur = $(this).attr('id');
			if (prev!=null && prev!=cur){
				$('#'+prev).siblings(":last").children().attr('d','');
			}
		});//end... remove svg path of previously selected choice

		$('.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _('Please select your answers.'); ?>");
				nullAnswer = false;
			} else {
				checkAnswer();
				$('#question').fadeOut(function(){
					$('#answer').fadeIn();
					$('.check-toggle').fadeOut( function(){
						$('.next-toggle').fadeIn();
					});
					
				});//end of $('.check-toggle').click(function()
			}
		});

		$('.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('h1').fadeIn();
					$('#question').fadeIn();
					$('.back-toggle').fadeIn();
					$('.next-toggle').fadeOut(function(){$('.check-toggle').fadeIn();});
					$('#selected_answer2').text('');
					$('#feedback1').removeClass('green');
					$('#feedback1').removeClass('red');
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
				});
			}else{
				$('.back-toggle').attr('href','8.php#screen2');
			}
		});//end of $('.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		studentAnswer2 = $("input[name='question2']:checked").val();
		var text1 = "";
		var text2 = "";
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _('Correct! It only changes a population if a trait is passed along.'); ?>";
				text1 = "A. <?php echo _('They must be passed into later generations to be important.'); ?>";
				$('#feedback1').addClass('green');
				$('#answer-icon1').attr("src", "images/others/correct.png");
			break;
			
			case 'B':
				feedback1 = "<?php echo _("Sorry... If a trait isn't passed along, the population doesn't change."); ?>";
				text1 = "B. <?php echo _('They must not be passed into later generations to be important.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'C': 
				feedback1 = "<?php echo _('No... The trait must be passed along to many individuals.'); ?>";
				text1 = "C. <?php echo _('They must be unique to one individual only.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'D': 
				feedback1 = "<?php echo _('Nope. Inheritance can come from either or both parents.'); ?>";
				text1 = "D. <?php echo _('They must have occurred in both parents to matter.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 //end check question A
		switch (studentAnswer2){
			case 'A':
				feedback2 = "<?php echo _('No, the statement is correct. Mutations are random genetic mistakes.'); ?>";
				text2 = "A. <?php echo _('Mutations are random errors in DNA.'); ?>";
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback2 = "<?php echo _('No, the statement is correct. Mutations can go these three ways.'); ?>";
				text2 = "B. <?php echo _('Mutations can be neutral, helpful, or harmful.'); ?>";
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			
			case 'C': 
				feedback2 = "<?php echo _('Correct, the statement is false. Mutations occur randomly, some of them lead to the survival of a certain species, and some of them do not.'); ?>";
				text2 = "C. <?php echo _('Mutations occur to increase survival of a certain species.'); ?>";
				$('#feedback2').addClass('green');
				$('#answer-icon2').attr("src", "images/others/correct.png");
			break;
			
			case 'D': 
				feedback2 = "<?php echo _('No, the statement is correct. The effects of mutations are visible under different circumstances. Every time conditions change, mutations show their impact.'); ?>";
				text2 = "D. <?php echo _('The effects of all mutations are not yet known.'); ?>";
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer2').text(text2);
		 $('#feedback2').text(feedback2);
	}
	
	function checkNull() {
		nullAnswer = false;
		
		if(!$('#choices1 input:radio').is(':checked')) {
			nullAnswer = true;
		}
		if(!$('#choices2 input:radio').is(':checked')) {
			nullAnswer = true;
		}
	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
