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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
.bg { background-image: url('images/18/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
.wrap { border-left: 1px dashed #E2EBE8; border-right: 1px dashed #E2EBE8; }
#question1 { width:850px; }
#question h2 { padding-bottom: 3%; }
#question1 h3 { color: #E151B7; text-align: center; }
#question1 h3:first-of-type { color: #395BB2; margin-top: 40px; }
#choices1 { margin: 20px auto; width: 150px; }
#hexaflip1 { margin: 20px auto;  }
#answer { display: none; }
#answer img { border-radius: 0 !important; }
#answer p { margin: 2% 0; } 
#imganswer1 { margin: 0 auto; display: block; }
img.back-toggle-answer, img.next-toggle { display: none; }
html[dir="rtl"] h1 { padding-right: 11% !important; }
html[dir="rtl"] #question1 h2 { padding-right: 12%; width: 100%; }
html[dir="rtl"] #choices1 { width: 170px; }
#buttons .next { display: none; }
<?php if($language == "zh_CN") { ?>
	#choices1 { width: 180px; }
<?php } ?> 
@media only screen and (min-device-width : 768px) {
	#choices1 {
		margin: 0px !important;
	}
	#question1 h3 {
		text-align: left;
	}
	#question1 {
	width: 736px;
	}	 
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#question1 {
	width: 850px;
	}
}
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Reproduction involving male and female parents is known as:"); ?></h2>
					
					<div id="choices1">
						<p>A. <?php echo _("Asexual"); ?></p>
						<p>B. <?php echo _("Nonsexual"); ?></p>
						<p>C. <?php echo _("Sexual"); ?></p>
						<p>D. <?php echo _("Monoclonal"); ?></p>
					</div>
					
					<h3><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></h3>
					<div id="hexaflip1"></div>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<p><?php echo _("You answered..."); ?></p>
					<img id="imganswer1" />
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var answer1, asnwer2, textstr1, textstr2;
	
	$(document).ready(function() {

		$('a.check-toggle').click(function(){
			checkAnswer();
			$('#question').fadeOut(function(){
				$('#answer').fadeIn();
				$('a.check-toggle').fadeOut( function(){
					$('a.next-toggle').fadeIn();
				});
				
			});//end of $('a.check-toggle').click(function()
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
				$('a.back-toggle').attr('href','17.php');
			}
		});//end of $('img.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		var hexavalue1 = hexa1.getValue(); //answer for question A
		if (hexavalue1 == './images/others/a.png') answer1 = "A";
		if (hexavalue1 == './images/others/b.png') answer1 = "B";
		if (hexavalue1 == './images/others/c.png') answer1 = "C";
		if (hexavalue1 == './images/others/d.png') answer1 = "D";
		
		//check question A
		if(answer1 == "C") {
			textstr1 = "<?php echo _('Correct. Sexual reproduction requires male and female parents.'); ?>";
			$('#selected_answer1').text('<?php echo _("Sexual"); ?>');
			$('#imganswer1').attr("src","images/others/c.png");
			$('#answer-icon1').attr("src", "images/others/correct.png");
			$('#feedback1').addClass('green');
		} else {
			textstr1 = '';
			if(answer1 == "A") {
				textstr1 = "<?php echo _('Sorry. Asexual reproduction involves only one parent.'); ?>";
				$('#selected_answer1').text('<?php echo _("Asexual"); ?>');
				$('#imganswer1').attr("src","images/others/a.png");
			} else if (answer1 == "B") {
				textstr1 = "<?php echo _('No... Reproduction using two parents is sexual.'); ?>";
				$('#selected_answer1').text('<?php echo _("Nonsexual"); ?>');
				$('#imganswer1').attr("src","images/others/b.png");
			} else if (answer1 == "D") {
				textstr1 = "<?php echo _('Nah... Monoclonal is a type of asexual reproduction.'); ?>";
				$('#selected_answer1').text('<?php echo _("Monoclonal"); ?>');
				$('#imganswer1').attr("src","images/others/d.png");
			}
			$('#answer-icon1').attr("src", "images/others/wrong.png");
			$('#feedback1').addClass('red');
		}
		$('#feedback1').text(textstr1);
	}
	
	</script>
	<script src="scripts/hexaflip.js"></script>
	<script>
		var hexa,
            images = [
                './images/others/a.png',
                './images/others/b.png',
                './images/others/c.png',
                './images/others/d.png'
            ];

		hexa1 = new HexaFlip(document.getElementById('hexaflip1'), { set: images }, { size: 180 });
    </script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
