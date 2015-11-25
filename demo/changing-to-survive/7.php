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
<link rel="stylesheet" type="text/css" href="styles/nlform-default.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform-component.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #b77f4e !important; }
.wrap { border-left: 1px dashed #ffec90; border-right: 1px dashed #ffec90; }
.bg { background-image: url('images/7/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
#question h2 { padding-bottom: 1%; }
.ac-custom { padding: 0; }
#question1 .ac-custom label { color: #000; padding-left: 13% !important; }
#question1 .ac-custom input[type="radio"]:checked + label {color: #AC5000 ; }
#question1 .ac-custom svg path { stroke: #AC5000; stroke-width: 3px; }
#question1 .ac-circle svg { width: 40px; height: 40px; margin-top: -20px; }
#question1 .ac-circle input[type="radio"], #question2 .ac-circle label::before { width: 20px; height: 20px; margin-top: -10px; left: 0; position: absolute; }
#question1 .ac-circle label::before { background-color: #AC5000; width: 20px; height: 20px; margin-top: -9px;  left: 0; }
#question1 ul { padding: 50px 0 0 20px; }
#question1 li { padding: 10px 0; width: 310px; }
#question1 li label { text-align: left; font-size: 24px !important; width: 100%; }
#question1 img { float: left; }
#question section { float: left; padding-left: 3em; }
#answer { display: none; }
.back-toggle-answer, #buttons .next { display: none; }

//#question1, #question2 { height: 280px; }
#question2 { margin-top: 2%; color: #000 !important; }
#question2 a { color: #AC5000 !important; border-color: transparent !important; }

#question1 { padding-bottom: 20px; }
#question2 form { margin-top: 5px; text-align: center; }
#question2, #answer2 { margin-top: 20px; }
.nl-dd ul li { padding: 0 1.5em 0 1.5em; }
.nl-field ul { background: #AC5000; }
.nl-dd ul li.nl-dd-checked { color: #b77f4e; }

#answer p { margin: 5px 0; text-align: center; }
#ans1 { color: #AC5000; }
#answer1 img:not(#answer-icon1) { width: 250px; margin: 0 auto; display: block; }

html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-custom input[type="radio"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before { right: 26px; margin-top: -30px; }
html[dir="rtl"] #question1 .ac-custom label::before { right: 36px; margin-top: -12px; }
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -23px; }
html[dir="rtl"] li label { text-align: right; }
html[dir="rtl"] #question1 img {float:left;}
html[dir="rtl"] #question section {float:right;}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#question section { padding: 0; }	
	#question1 img {width: 53%;}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #2"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. The image illustrates a part of which form of change?"); ?></h2>
					<section>
						<form class="ac-custom ac-radio ac-circle" autocomplete="off">
							<ul id="choices1">
								<li><input type="radio" id="a1" name="question1" value="A">
									<label for="a1"><?php echo _("Natural Selection"); ?></label>
								</li>
								<li><input type="radio" id="b1" name="question1" value="B">
									<label for="b1"><?php echo _("Sexual selection"); ?></label>
								</li>
								<li><input type="radio" id="c1" name="question1" value="C">
									<label for="c1"><?php echo _("Punctuated equilibrium"); ?></label>
								</li>
								<li><input type="radio" id="d1" name="question1" value="D">
									<label for="d1"><?php echo _("Artificial selection"); ?></label>
								</li>
							</ul>
						</form>
					</section>
					<img src="images/7/bird.png" />
					<div class="clear"></div>
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. Life has existed on Earth for about how long?"); ?></h2>
					<form id="nl-form" class="nl-form">
					<?php echo _("Between 4 and 5 "); ?>
					
					<select id="opt1">
							<option value="1" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="2"><?php echo _("hundred million"); ?></option>
							<option value="3"><?php echo _("hundred thousand"); ?></option>
							<option value="4"><?php echo _("thousand"); ?></option>
							<option value="5"><?php echo _("hundred"); ?></option>
						</select>
					<?php echo _("years."); ?>
					
					<div class="nl-overlay"></div>
					</form>

				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. The image illustrates a part of which form of change?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<img src="images/7/bird.png"/>
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
				<div id="answer2">
					<h2><?php echo _("Question B. Life has existed on Earth for about how long?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<p><?php echo _('Between 4 and 5 '); ?> <span id="ans1"></span> <?php echo _('years.'); ?></p> 
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'> </span></p>
				</div>
			</div>
			
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Counting the age of Earth..."); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var answericon1 = $('#answer-icon1'), answericon2 = $('#answer-icon2') ,answer1, asnwer2, textstr1, textstr2, studentAnswer1, studentAnswer2, nullAnswer;
	
	$(document).ready(function() {

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
					
					$('#feedback1').removeClass('green');
					$('#feedback1').removeClass('red');
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
				});
			}else{
				$('.back-toggle').attr('href','6.php#screen2');
			}
		});//end of $('.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		var text1 = "";
		//check question A
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _("Yes! The white fish eaten by the bird don't reproduce."); ?>";
				text1 = "<?php echo _('Natural Selection'); ?>";
				$('#feedback1').addClass('green');
				$('#answer-icon1').attr("src", "images/others/correct.png");
			break;
			
			case 'B':
				feedback1 = "<?php echo _("Nope. There's nothing in the image related to the selection of mates."); ?>";
				text1 = "<?php echo _('Sexual selection'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'C': 
				feedback1 = "<?php echo _('Sorry... Being captured is a disaster for the fish, but this is an everyday occurrence.'); ?>";
				text1 = "<?php echo _('Punctuated equilibrium'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'D': 
				feedback1 = "<?php echo _('Nope. Artificial selection involved people.'); ?>";
				text1 = "<?php echo _('Artificial selection'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 //end check question A
		 
		//check question B
		studentAnswer2 = $('#opt1 option:selected').text();
		$('#ans1').text($('#opt1 option:selected').text());
		var val = $('#opt1').val();
		
		if(val == 2) {
			textstr2 =  '<?php echo _("Correct. Life has existed on Earth for a bit more than hundreds of millions years."); ?>';
			answericon2.attr("src", "images/others/correct.png");
			$('#feedback2').addClass('green');
			$('#feedback2').text(textstr2);
		} else if(val == 3){
			textstr2 = "<?php echo _("Nope. It's older than that."); ?>";
			answericon2.attr("src", "images/others/wrong.png");
			$('#feedback2').addClass('red');
			$('#feedback2').text(textstr2);
		} else if(val == 4){
			textstr2 = '<?php echo _("Sorry. Much, much older."); ?>';
			answericon2.attr("src", "images/others/wrong.png");
			$('#feedback2').addClass('red');
			$('#feedback2').text(textstr2);
		} else if(val == 5){
			textstr2 = '<?php echo _("Um... no. Have a look at the options again."); ?>';
			answericon2.attr("src", "images/others/wrong.png");
			$('#feedback2').addClass('red');
			$('#feedback2').text(textstr2);
		}
	}
	
	function checkNull() {
		if(!$('#choices1 input:radio').is(':checked')) {
			nullAnswer = true;
		}
	
		if($('#opt1').val() == 1) {
			nullAnswer = true;
		}
	}

	</script>
	<script src="scripts/nlform.js"></script>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
