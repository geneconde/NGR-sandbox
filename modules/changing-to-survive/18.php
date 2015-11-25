<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'changing-to-survive-qq5-a');
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
.bg { background-image: url('images/18/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #b77f4e !important; }
.wrap { border-left: 1px dashed #b77f4e; border-right: 1px dashed #b77f4e; }

#answer { display: none; }
img.back-toggle-answer, img.next-toggle { display: none; }

#question1 .ac-custom label { color: #000; padding-left: 8% !important; }
#question1 .ac-custom input[type="radio"]:checked + label {color: #AC5000; }
#question1 .ac-custom svg path { stroke: #AC5000; stroke-width: 3px; }
#question1 .ac-circle svg { width: 40px; height: 40px; margin-top: -20px; }
#question1 .ac-circle input[type="radio"], #question2 .ac-circle label::before { width: 20px; height: 20px; margin-top: -10px; left: 0; position: absolute; }
#question1 .ac-circle label::before { background-color: #AC5000; width: 20px; height: 20px; margin-top: -9px;  left: 0; }
#question1 ul { padding: 10px 0 0 0;  }
#question1 form { margin: 0; padding: 0; }
#question1 li { padding: 5px 0; }
#question1 li label { text-align: left; font-size: 24px !important; }
#question1 section { float: left; width: 450px; margin: 10px 0 0 20px; }
#question1 img { float: right; margin-right: 20px; }

#answer p { margin: 5px 0; text-align: center; }
#answer1 { text-align: center; }
#answer1 img#ansimg { display: inline-block; width: 200px; }
//#selected_img1 { margin: 0 auto; display: block; width: 250px; }
#answer2 { margin-top: 2%; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 36px; margin-top: -12px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] #question1 li label { text-align: right; }
html[dir="rtl"] #question1 img {float:left;margin-right: 0;margin-left: 20px;}
html[dir="rtl"] #question1 section {float:right;}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Penguins have developed webbed feet and stunted wings over time. Which of the following statements are incorrect about these mutations?"); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ul id="choices1">
								<li><input type="radio" id="a1" name="question1" value="A">
									<label for="a1"><?php echo _("The penguins' mutations are useless on land."); ?></label>
								</li>
								<li><input type="radio" id="b1" name="question1" value="B">
									<label for="b1"><?php echo _("These mutations are useful for escaping predators."); ?></label>
								</li>
								<li><input type="radio" id="c1" name="question1" value="C">
									<label for="c1"><?php echo _("The usefulness of these mutations depends on the environment."); ?></label>
								</li>
								<li><input type="radio" id="d1" name="question1" value="D">
									<label for="d1"><?php echo _("These mutations will help the penguins survive in any environment."); ?></label>
								</li>
							</ul>
						</form>
					</section>
					<img src="images/18/penguin.jpg">
					<div class="clear"></div>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<p><?php echo _("You answered..."); ?></p>
					<img src="images/18/penguin.jpg" id="ansimg">
					<!--<img src="" id="selected_img1" />-->
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
		<a href="19.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Penguins playing in cold water..."); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var answer = "";
	var nullAnswer = false;

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
				});
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
				$('img.back-toggle').parent().attr('href','17.php');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		var text1 = "";
		
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _('Actually, the short wings and webbed feet help penguins stay warm and walk on snow and ice.'); ?>";
				text1 = "<?php echo _("The penguins' mutations are useless on land."); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
				answer = 'A';
			break;
			
			case 'B':
				feedback1 = "<?php echo _('Sorry. The webbed feet and stubby wings make penguins powerful swimmers.'); ?>";
				text1 = "<?php echo _('These mutations are useful for escaping predators.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
				answer = 'B';
			break;
			
			case 'C': 
				feedback1 = "<?php echo _('This is actually true. All mutations are useful or not useful, depending on the environment.'); ?>";
				text1 = "<?php echo _('The usefulness of these mutations depends on the environment.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
				answer = 'C';
			break;
			
			case 'D': 
				feedback1 = "<?php echo _('Correct! Neither of these mutations would be helpful in a desert, or in many other places.'); ?>";
				text1 = "<?php echo _('These mutations will help the penguins survive in any environment.'); ?>";
				$('#feedback1').addClass('green');
				$('#answer-icon1').attr("src", "images/others/correct.png");
				answer = 'D';
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 
		 save();
	}// end check answer

	function save() {
		if (answered == 0) {
			saveAnswer('changing-to-survive-qq5-a', answer);
		}
	}
	
	function checkNull() {
		if(!$('#choices1 input:radio').is(':checked')) {
			nullAnswer = true;
		}
	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
