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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/22/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #E2EBE8; border-right: 1px dashed #E2EBE8; }

#answer { display: none; }
img.back-toggle-answer, img.next-toggle { display: none; }

#question1 { height: 250px; }
#question1 ul { margin: 0 auto;  list-style-type: none; }
#question1 li { float: left; width: 45%; margin: 0 2%; }
#question1 li:nth-child(-n+2) { margin-bottom: 20px; }
#question1 input[type=radio] { display: none; }
#choices1 { width: 90%; padding-top: 1%; }
#choices1 label img { width: 310px; }
#choices1 label { display: block; text-align: center; cursor: pointer; }
#choices1 input[type="radio"] + label img { border: 4px solid transparent; -webkit-transition: all .3s ease; }
#choices1 input[type="radio"]:checked + label img { border: 4px solid #0A5F5F; -webkit-transition: all .3s ease; -webkit-backface-visibility: hidden; }
#choices1 input[type="radio"] + label span { color: #000; -webkit-transition: all .3s ease; font-size: 22px; }
#choices1 input[type="radio"]:checked + label span { color: #0A5F5F; -webkit-transition: all .3s ease; }
#buttons .next { display: none; }
#answer p { margin: 5px 0; }
#selected_img1 { margin: 0 auto; display: block; }
#answer2 { margin-top: 2%; }
<?php if($language == "es_ES") { ?>
	#choices1 input[type="radio"] + label span { font-size: 20px; }
<?php } ?> 
<?php if($language == "zh_CN") { ?>
	#question li { width: 43%; }
<?php } ?> 
html[dir="rtl"] h1 { padding-right: 11% !important; }
html[dir="rtl"] h2 { padding-right: 12%; width: 100%; }
html[dir="rtl"] #question1 li { width: 42%; } 
@media only screen and (min-device-width : 768px) {
	#question1 li {
		float: left;
		width: 39%;
		margin: 0 4%;
		}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 li {
	float: left;
	width: 44%;
	 margin: 0 2%; 
	}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<div id="question1">
					<h2><?php echo _("What can you infer about flowers that are pollinated by bats?"); ?></h2>
					<ul id="choices1">
						<li>
							<input type="radio" id="a1" name="question1" value="A">
							<label for="a1"><img src="images/22/a.jpg"><span><?php echo _("They are probably located in caves."); ?></span></label>
						</li>
						<li>
							<input type="radio" id="b1" name="question1" value="B">
							<label for="b1"><img src="images/22/b.jpg"><span><?php echo _("They probably contain no pollen."); ?></span></label>
						</li>
						<li>
							<input type="radio" id="c1" name="question1" value="C">
							<label for="c1"><img src="images/22/c.jpg"><span><?php echo _("They probably bloom at night."); ?></span></label>
						</li>
						<li>
							<input type="radio" id="d1" name="question1" value="D">
							<label for="d1"><img src="images/22/d.jpg"><span><?php echo _("They are probably very brightly colored."); ?></span></label>
						</li>
					</ul>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<p><?php echo _("You answered..."); ?></p>
					<img src="" id="selected_img1" />
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="23.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Flying bats"); ?></strong></section></section>
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
				$('a.back-toggle').attr('href','21.php');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		studentAnswer1 = $("input[name='question1']:checked").val();
		var text1 = "";
		var text2 = "";
		switch (studentAnswer1){
			case 'A':
				feedback1 = "<?php echo _('No, flowers are unlikely to be found in caves, since plants need light to grow.'); ?>";
				text1 = "<?php echo _('They are probably located in caves.'); ?>";
				$('#selected_img1').attr("src","images/22/a.jpg");
				$('#feedback1').addClass('red');
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback1 = "<?php echo _('No. Flowers without pollen cannot be part of the pollination process.'); ?>";
				text1 = "<?php echo _('They probably contain no pollen.'); ?>";
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/22/b.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			
			case 'C': 
				feedback1 = "<?php echo _('Correct! The flowers might be open at night when bats come out.'); ?>";
				text1 = "<?php echo _('They probably bloom at night.'); ?>";
				$('#feedback1').addClass('green');
				$('#selected_img1').attr("src","images/22/c.jpg");
				$('#answer-icon1').attr("src", "images/others/correct.png");
			break;
			
			case 'D': 
				feedback1 = "<?php echo _('Bats are color blind, so bright colored flowers would not affect their ability to find them.'); ?>";
				text1 = '<?php echo _("They are probably very brightly colored."); ?>';
				$('#feedback1').addClass('red');
				$('#selected_img1').attr("src","images/22/d.jpg");
				$('#answer-icon1').attr("src", "images/others/wrong.png");
			break;
			default:break;
		 }
		 
		 $('#selected_answer1').text(text1);
		 $('#feedback1').text(feedback1);
		 //end check question A
		 
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
