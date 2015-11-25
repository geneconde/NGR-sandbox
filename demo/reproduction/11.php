<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'reproduction';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!-- Template for pages 3, 5, 7 and 9 and possibly quiz questions -->
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("Reproduction"); ?></title> <!-- Change title here -->
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
.bg { background-image: url('images/11/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #E2EBE8; border-right: 1px dashed #E2EBE8; }

#answer { display: none; }
img.back-toggle-answer, img.next-toggle { display: none; }

#question1 { height: 270px; width: 850px; }
#question1 ul { width: 850px; height: 270px; margin: 0 auto; padding: 0; list-style-type: none; }
#question1 li { float: left; width: 212px; }
#question1 input[type=radio] { display: none; }
#choices1 label { display: block; text-align: center; cursor: pointer; }
#choices1 input[type="radio"] + label img { width: 100%; border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label img { border: 4px solid #0A5F5F; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size: 20px; }
#choices1 input[type="radio"]:checked + label span { color: #0A5F5F; -webkit-transition: all .3s ease; }

#question2 { height: 250px; width: 850px; }
#question2 ul { width: 850px; margin: 0 auto; padding: 0; list-style-type: none; }
#question2 li { float: left; width: 212px; margin-top: 2%; }
#question2 input[type=radio] { display: none; }
#choices2 label { display: block; text-align: center; cursor: pointer; }
#choices2 input[type="radio"] + label img { width: 100%; border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices2 input[type="radio"]:checked + label img { border: 4px solid #0A5F5F; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices2 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size: 20px; }
#choices2 input[type="radio"]:checked + label span { color: #0A5F5F; -webkit-transition: all .3s ease; }
#buttons .next { display: none; }
#answer p { margin: 5px 0; }
#selected_img1, #selected_img2 { margin: 0 auto; display: block; }
#answer2 { margin-top: 2%; }

html[dir="rtl"] #question1 li { float: right; }
html[dir="rtl"] #question2 li { float: right; }
html[dir="rtl"] h1 { padding-right: 11% !important; }
html[dir="rtl"] #question1 h2 { padding-right: 12%; width: 100%; }
@media only screen and (min-device-width : 768px) {
	#question1 li, #question2 li {
		width: 21%;
	}
	 
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 li, #question2 li  {
		width: 25%;
	}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #4"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. Which of the following is most likely a pollinator?"); ?></h2>
					<ul id="choices1">
						<li>
							<input type="radio" id="a1" name="question1" value="A">
							<label for="a1"><img src="images/11/a.jpg"><span><?php echo _("A beetle crawls into and out of a flower."); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b1" name="question1" value="B">
							<label for="b1"><img src="images/11/b.jpg"><span><?php echo _("A bird builds a nest in a tree."); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c1" name="question1" value="C">
							<label for="c1"><img src="images/11/c.jpg"><span><?php echo _("Termites construct a colony inside a tree."); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d1" name="question1" value="D">
							<label for="d1"><img src="images/11/d.jpg"><span><?php echo _("Deer chew the leaves of plants in a meadow."); ?></span></label>
						</li>
					</ul>
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. Which part of the plant holds the pollen before pollination happens?"); ?></h2>
					<ul id="choices2">
						<li>
							<input type="radio" id="a2" name="question2" value="A">
							<label for="a2"><img src="images/11/1.jpg"></label>
						</li>
						<li>
							<input type="radio" id="b2" name="question2" value="B">
							<label for="b2"><img src="images/11/2.jpg"></label>
						</li>
						<li>
							<input type="radio" id="c2" name="question2" value="C">
							<label for="c2"><img src="images/11/3.jpg"></label>
						</li>
						<li>
							<input type="radio" id="d2" name="question2" value="D">
							<label for="d2"><img src="images/11/4.jpg"></label>
						</li>
					</ul>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. Which of the following is most likely a pollinator?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<img src="" id="selected_img1" />
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
				<div id="answer2">
					<h2><?php echo _("Question B. Which part of the plant holds the pollen before pollination happens?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<img src="" id="selected_img2" />
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'> </span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Flowers are blooming"); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var nullAnswer;
	
	$(document).ready(function() {

		$('a.check-toggle').click(function(e){
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
					$('a.check-toggle').fadeOut( function(){
						$('a.next-toggle').fadeIn();
					});
					
				});//end of $('a.check-toggle').click(function()
			}
		});

		$('a.back-toggle').click(function(){
			if($('#answer').is(':visible')) {
				$('#answer').fadeOut( function(){
					$('h1').fadeIn();
					$('#question').fadeIn();
					$('a.back-toggle').fadeIn();
					$('a.next-toggle').fadeOut(function(){$('a.check-toggle').fadeIn();});
					
					$('#feedback1').removeClass('green');
					$('#feedback1').removeClass('red');
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
				});
			}else{
				$('a.back-toggle').attr('href','10.php#screen2');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		studentAnswer2 = $("input[name='question2']:checked").val();
		var text1 = "";
		var text2 = "";
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _('Correct. An animal must enter and leave flowers to be a pollinator.'); ?>";
				text1 = "<?php echo _('A beetle crawls into and out of a flower.'); ?>";
				$('#selected_img1').attr("src","images/11/a.jpg");
				$('#feedback1').addClass('green');
				$('#answer-icon1').attr("src", "images/others/correct.png");
			break;
			
			case 'B':
				feedback1 = "<?php echo _("Not this one. It doesn't say anything about the bird and flowers."); ?>";
				text1 = "<?php echo _('A bird builds a nest in a tree.'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/11/b.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'C': 
				feedback1 = "<?php echo _("Nope. Eating a tree doesn't help its reproduction."); ?>";
				text1 = "<?php echo _('Termites construct a colony inside a tree.'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/11/c.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'D': 
				feedback1 = "<?php echo _("Sorry. Leaf-eating doesn't do anything for pollination."); ?>";
				text1 = "<?php echo _('Deer chew the leaves of plants in a meadow.'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/11/d.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 //end check question A
		 
		 switch(studentAnswer2){
			case 'A':
				feedback2 = "<?php echo _('Correct. Pollen is on the top part of the stamen.'); ?>";
				$('#selected_img2').attr("src","images/11/1.jpg");
				$('#feedback2').addClass('green');
				$('#answer-icon2').attr("src", "images/others/correct.png");
			break;
			
			case 'B':
				feedback2 = "<?php echo _('No, pollen is not on the stigma.'); ?>";
				$('#selected_img2').attr("src","images/11/2.jpg");
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			
			case 'C':
				feedback2 = "<?php echo _('No, pollen is not on the petal.'); ?>";
				$('#selected_img2').attr("src","images/11/3.jpg");
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			
			case 'D':
				feedback2 = "<?php echo _('No, pollen is not on the stem.'); ?>";
				$('#selected_img2').attr("src","images/11/4.jpg");
				$('#feedback2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#feedback2').text(feedback2);
	} //end checkAnswer()
	
	function checkNull() {
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
