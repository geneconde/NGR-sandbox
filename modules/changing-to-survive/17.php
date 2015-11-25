<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(17, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'changing-to-survive-qq4-a');
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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/17/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #b77f4e !important; }
.wrap { border-left: 1px dashed #b77f4e; border-right: 1px dashed #b77f4e; }

#answer { display: none; }
img.back-toggle-answer, img.next-toggle { display: none; }

#question1 ul { margin: 0 auto;  list-style-type: none; }
#question1 li { float: left; width: 45%; margin: 0 2%; }
#question1 li:nth-child(-n+2) { margin-bottom: 20px; }
#question1 input[type=radio] { display: none; }
#choices1 { width: 90%; }
#choices1 label img { width: 220px; }
#choices1 label { display: block; text-align: center; font-size: 18px; cursor: pointer; }
#choices1 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label img { border: 4px solid #AC5000; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size: 20px; display: block; margin: 0 auto; }
#choices1 input[type="radio"]:checked + label span { color: #AC5000; -webkit-transition: all .3s ease; }

#answer p { margin: 5px 0; text-align: center; }
#selected_img1 { margin: 0 auto; display: block; width: 250px; }
#answer2 { margin-top: 2%; }

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Which of the following might be most closely associated with a period of punctuated equilibrium?"); ?></h2>
					<ul id="choices1">
						<li>
							<input type="radio" id="a1" name="question1" value="A">
							<label for="a1"><img src="images/17/a.jpg"><span><?php echo _("Massive volcanic eruption"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b1" name="question1" value="B">
							<label for="b1"><img src="images/17/b.jpg"><span><?php echo _("Construction of new housing developments"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c1" name="question1" value="C">
							<label for="c1"><img src="images/17/c.jpg"><span><?php echo _("Regular changes of seasons"); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d1" name="question1" value="D">
							<label for="d1"><img src="images/17/d.jpg"><span><?php echo _("Farmers saving seed for the following growing season"); ?></span></label>
						</li>
						<div class="clear"></div>
					</ul>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<p><?php echo _("You answered..."); ?></p>
					<img src="" id="selected_img1" />
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
		<a href="18.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing for evolutionary change..."); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var answer = "";
	var nullAnswer;

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
				$('img.back-toggle').parent().attr('href','16.php');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		var text1 = "";
		var text2 = "";
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _("That's the one. Natural disasters sometimes force rapid change."); ?>";
				text1 = "<?php echo _('Massive volcanic eruption'); ?>";
				$('#selected_img1').attr("src","images/17/a.jpg");
				$('#feedback1').addClass('green');
				$('#answer-icon1').attr("src", "images/others/correct.png");
				answer = 'A';
			break;
			
			case 'B':
				feedback1 = "<?php echo _('Probably not.... This can cause changes, but probably slow ones.'); ?>";
				text1 = "<?php echo _('Construction of new housing developments'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/17/b.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
				answer = 'B';
			break;
			
			case 'C': 
				feedback1 = "<?php echo _('Nope. Seasonal change happens every year.'); ?>";
				text1 = "<?php echo _('Regular changes of seasons'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/17/c.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
				answer = 'C';
			break;
			
			case 'D': 
				feedback1 = "<?php echo _('This is a normal part of artificial selection.'); ?>";
				text1 = '<?php echo _("Farmers saving seed for the following growing season"); ?>';
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/17/d.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
				answer = 'D';
			break;

			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 //end check question A
		 
		 save();
	}

	function save() {
		if (answered == 0) {
			saveAnswer('changing-to-survive-qq4-a', answer);
		}
	}
	
	function checkNull() {
		if(!$('#choices1 input:radio').is(':checked')) {
			nullAnswer = true;
		}
	}
	</script>
	
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
