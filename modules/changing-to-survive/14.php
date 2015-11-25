<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(14, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'changing-to-survive-qq1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
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
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/14/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #b77f4e !important; }
.wrap { border-left: 1px dashed #b77f4e; border-right: 1px dashed #b77f4e; }

#question1 .ac-custom label { color: #000; padding-left: 6% !important; }
#question1 .ac-custom input[type="radio"]:checked + label {color: #AC5000; }
#question1 .ac-custom svg path { stroke: #AC5000; stroke-width: 3px; }
#question1 .ac-circle svg { width: 40px; height: 40px; margin-top: -20px; }
#question1 .ac-circle input[type="radio"], #question2 .ac-circle label::before { width: 20px; height: 20px; margin-top: -10px; left: 0; position: absolute; }
#question1 .ac-circle label::before { background-color: #AC5000; width: 20px; height: 20px; margin-top: -9px;  left: 0; }
#question1 ul { padding: 10px; }
#question1 li { padding: 5px 0; }
#question1 li label { text-align: left; font-size: 24px !important; }

#answer { display: none; }
#answer p { margin: 2% 0; text-align: center; } 

img.back-toggle-answer, img.next-toggle { display: none; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 36px; margin-top: -12px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] #question1 li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Click on the <span class='blink'>correct</span> statements about the changes most likely caused by gradual climate change."); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ul id="choices1">
								<li><input type="radio" id="a1" name="question1" value="A">
									<label for="a1"><?php echo _("Increase in the numbers of individuals able to tolerate the climate differences."); ?></label>
								</li>
								<li><input type="radio" id="b1" name="question1" value="B">
									<label for="b1"><?php echo _("Local extinction of individuals unable to tolerate the climate differences."); ?></label>
								</li>
								<li><input type="radio" id="c1" name="question1" value="C">
									<label for="c1"><?php echo _("Changes in the plants and animals inhabiting a particular area."); ?></label>
								</li>
								<li><input type="radio" id="d1" name="question1" value="D">
									<label for="d1"><?php echo _("All of the above"); ?></label>
								</li>
							</ul>
						</form>
					</section>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<p><?php echo _("You answered..."); ?></p>
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#answer" class="wiggle"><img class="check-toggle" src="images/buttons/checkanswer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="15.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var answer1, answer2, textstr1, textstr2, nullAnswer;

	var answered = <?php echo $answered; ?>;
	
	$(document).ready(function() {

		$('img.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _('Please select your answer.'); ?>");
				nullAnswer = false;
			} else {
				checkAnswer();
				$('#question').fadeOut(function(){
					$('#answer').fadeIn();
					$('img.check-toggle').fadeOut( function(){
						$('img.next-toggle').fadeIn();
					});
					
				});//end of $('img.check-toggle').click(function()
			}
		});

		$('img.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('h1').fadeIn();
					$('#question').fadeIn();
					$('img.back-toggle').fadeIn();
					$('img.next-toggle').fadeOut(function(){$('img.check-toggle').fadeIn();});
					
					$('#feedback1').removeClass('green');
					$('#feedback1').removeClass('red');
				});
			}else{
				$('img.back-toggle').parent().attr('href','13.php');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		var text1 = "";
		
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _('Not quite.  Any plants or animals unable to tolerate climate changes will have difficulty surviving. Climate changes are likely to cause changes in local plants and animals.'); ?>";
				text1 = "<?php echo _('Increase in the numbers of individuals able to tolerate the climate differences.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
				answer1 = 'A';
			break;
			
			case 'B':
				feedback1 = "<?php echo _('Not quite. Survivors must be able to tolerate changes in climate. Climate changes are likely to cause changes in local plants and animals.'); ?>";
				text1 = "<?php echo _('Local extinction of individuals unable to tolerate the climate differences.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
				answer1 = 'B';
			break;
			
			case 'C': 
				feedback1 = "<?php echo _('Survivors must be able to tolerate changes in climate.  Any plants or animals unable to tolerate climate changes will have difficulty surviving.'); ?>";
				text1 = "<?php echo _('Changes in the plants and animals inhabiting a particular area.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
				answer1 = 'C';
			break;
			
			case 'D': 
				feedback1 = "<?php echo _('Correct. Survivors must be able to tolerate changes in climate.  Any plants or animals unable to tolerate climate changes will have difficulty surviving. Climate changes are likely to cause changes in local plants and animals.'); ?>";
				text1 = "<?php echo _('All of the above'); ?>";
				$('#feedback1').addClass('green');
				$('#answer-icon1').attr("src", "images/others/correct.png");
				answer1 = 'D';
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 
		 save();
	}// end check answer
	
	function checkNull() {
		if(!$('#choices1 input:radio').is(':checked')) {
			nullAnswer = true;
		}
	}

	function save() {
		if (answered == 0) {
			saveAnswer('changing-to-survive-qq1-a', answer1);
		}
	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
