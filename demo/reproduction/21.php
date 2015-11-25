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
.bg { background-image: url('images/21/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.bg h2 { width: 90%; }
.wrap { border-left: 1px dashed #E2EBE8; border-right: 1px dashed #E2EBE8; }

.ac-custom, #choices1 { width: 100%; padding: 0; }
#question1 .ac-custom label { color: #000; padding-left: 9% !important; }
#question1 .ac-custom input[type="radio"]:checked + label {color: #0A5F5F; }
#question1 .ac-custom svg path { stroke: #0A5F5F; stroke-width: 3px; }
#question1 .ac-circle svg { }
#question1 .ac-circle input[type="radio"], #question2 .ac-circle label::before { width: 20px; height: 20px; margin-top: -10px; left: 0; position: absolute; }
#question1 .ac-circle label::before { background-color: #0A5F5F; }
#question1 ul { padding: 10px; }
#question1 li { padding: 8px 0; }
#question1 li label { text-align: left; font-size: 24px !important; line-height: 22px; }
#question1 img { margin: 0 auto; display: block; width: 40%; }
#buttons .next { display: none; }
#answer { display: none; }
#answer img:not(#answer-icon1){ width: 30%; margin: 0 auto; display: block; }
#answer p { margin: 1% 0; } 
#imganswer1 { margin: 0 auto; display: block; }
img.back-toggle-answer, img.next-toggle { display: none; }
<?php if($language == "zh_CN") { ?>
	.ac-circle svg { width: 50px; height: 50px; margin-top: -30px; left: 0; }
<?php } ?> 

html[dir="rtl"] h1 { padding-right: 11% !important; }
html[dir="rtl"] h2 { padding-right: 12%; width: 100%; }
html[dir="rtl"] .ac-custom label { padding: 0 80px 0 0; }
html[dir="rtl"] .ac-circle input[type="checkbox"], .ac-circle input[type="radio"], .ac-circle label::before { right: 10px; }
html[dir="rtl"] .ac-circle svg { right: -10px; }
html[dir="rtl"] #question1 li label { text-align: right; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<div id="question1">
					<h2><?php echo _("What is an advantage of having only the dominant male and female wolves in a pack produce offspring?"); ?></h2>
					
					<form class="ac-custom ac-radio ac-circle" autocomplete="off">
						<ul id="choices1">
							<li><input type="radio" id="a2" name="question1" value="A">
								<label for="a2"><?php echo _("Later generations will likely be more similar to the stronger wolves than to the weaker wolves."); ?></label>
							</li>
							<li><input type="radio" id="b2" name="question1" value="B">
								<label for="b2"><?php echo _("Later generations will likely be more similar to the weaker wolves than to the stronger wolves."); ?></label>
							</li>
							<li><input type="radio" id="c2" name="question1" value="C">
								<label for="c2"><?php echo _("Later generations will probably have more difficulty finding food than previous generations."); ?></label>
							</li>
							<li><input type="radio" id="d2" name="question1" value="D">
								<label for="d2"><?php echo _("Later generations will have more difficulty finding shelter than previous generations."); ?></label>
							</li>
						</ul>
					</form>
					<img src="images/21/wolves.jpg" />
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<p><?php echo _("You answered..."); ?></p>
					<img src="images/21/wolves.jpg" />
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="22.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("A pack of wolves is running."); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var answer1, asnwer2, textstr1, textstr2
		nullAnswer = false;
	
	$(document).ready(function() {

		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _('Please select your answers.');?>");
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
				});
			}else{
				$('a.back-toggle').attr('href','20.php');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		var text1 = "";
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _('Very good! Whatever characteristics the dominant parents have will transfer to their offspring.'); ?>";
				text1 = "<?php echo _('Later generations will likely be more similar to the stronger wolves than to the weaker wolves.'); ?>";
				$('#feedback1').addClass('green');
				$('#answer-icon1').attr("src", "images/others/correct.png");
			break;
			
			case 'B':
				feedback1 = "<?php echo _("Not likely... There's no connection between the non-dominant wolves and the next generation."); ?>";
				text1 = "<?php echo _('Later generations will likely be more similar to the weaker wolves than to the stronger wolves.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'C': 
				feedback1 = "<?php echo _("No. Chances of finding food in the future probably don't decrease with stronger characteristics."); ?>";
				text1 = "<?php echo _('Later generations will probably have more difficulty finding food than previous generations.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'D': 
				feedback1 = "<?php echo _("Sorry... Chances of finding shelter aren't really affected by reproductive choices."); ?>";
				text1 = "<?php echo _('Later generations will have more difficulty finding shelter than previous generations.'); ?>";
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
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
