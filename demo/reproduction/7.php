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
.bg { background-image: url('images/7/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; overflow: hidden; }
.wrap { border-left: 1px dashed #E2EBE8; border-right: 1px dashed #E2EBE8; }
#question h2 { padding-bottom: 3%; width: 90%; }
#choices1 h3, #choices2 h3 { color: #E151B7; }
#choices1 h3:first-of-type, #choices2 h3:first-of-type { color: #395BB2; }
#buttons .next { display: none; }
#answer { display: none; }
img.back-toggle-answer, img.next-toggle { display: none; }

#question1, #question2 { height: 280px; }
#question2 { margin-top: 2%; overflow: hidden; }
#choices1, #choices2 { width: 72%; float: right; }
#choices1 p:first-of-type, #choices2 p:first-of-type { margin-top: 15px; }

#answer p { margin: 5px 0; }
#answer img { border-radius: 0 !important; }
#imganswer1, #imganswer2 { margin: 0 auto; display: block; width: 130px; }

#hexaflip1, #hexaflip2 { float: left; margin-right: 2%; }
<?php if($language == "es_ES") { ?>
	h1 { padding: 0 !important; }
	h2 { padding-bottom: 1% !important; }
	#answer p {margin: 0 0 5px 0; font-size: 22px;}
<?php } ?> 

html[dir="rtl"] h1 { padding-right: 11% !important; }
html[dir="rtl"] #question1 h2 { padding-right: 12%; width: 100%; }
html[dir="rtl"] #hexaflip1, html[dir="rtl"] #hexaflip2 { margin-left: 2%; }
html[dir="rtl"] #choices1, html[dir="rtl"] #choices2 { width: 71%; }


</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #2"); ?></h1>
				<div id="question1">
					<h2><?php echo _("Question A. How are the products of asexual reproduction similar to their parents?"); ?></h2>
					<div id="hexaflip1"></div>
					<div id="choices1">
						<h3><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></h3>
						
						<p>A. <?php echo _("They can only reproduce once per lifetime."); ?></p>
						<p>B. <?php echo _("They have half of their parent's genes."); ?></p>
						<p>C. <?php echo _("They are exactly like their parent."); ?></p>
						<p>D. <?php echo _("They have double of their parent's genes."); ?></p>
					</div>
				</div>
				<div id="question2">
					<h2><?php echo _("Question B. What is the easiest way to get a plant to reproduce asexually?"); ?></h2>
					<div id="hexaflip2"></div>
					<div id="choices2">
						<h3><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></h3>
						
						<p>A. <?php echo _("By splitting it down the middle."); ?></p>
						<p>B. <?php echo _("By giving it artificial hormones."); ?></p>
						<p>C. <?php echo _("By taking a cutting of a flower and replanting it."); ?></p>
						<p>D. <?php echo _("By spreading its roots through the ground."); ?></p>
					</div>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<h2><?php echo _("Question A. How are the products of asexual reproduction similar to their parents?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<img src="" id="imganswer1" />
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
				<div id="answer2">
					<h2><?php echo _("Question B. What is the easiest way to get a plant to reproduce asexually?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<img src="" id="imganswer2" />
					<p id="selected_answer2"> </p>
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
	<section id="preloader"><section class="selected"><strong><?php echo _("Plants reproduction"); ?></strong></section></section>
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
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
				});
			}else{
				$('a.back-toggle').attr('href','6.php#screen2');
			}
		});//end of $('a.back-toggle').click(function()
		
	});//end of $(document).ready(function() 
	
	function checkAnswer(){
		var hexavalue1 = hexa1.getValue(); //answer for question A
		if (hexavalue1 == './images/others/a.png') answer1 = "A";
		if (hexavalue1 == './images/others/b.png') answer1 = "B";
		if (hexavalue1 == './images/others/c.png') answer1 = "C";
		if (hexavalue1 == './images/others/d.png') answer1 = "D";
		
		var hexavalue2 = hexa2.getValue(); //answer for question B
		if (hexavalue2 == './images/others/a.png') answer2 = "A";
		if (hexavalue2 == './images/others/b.png') answer2 = "B";
		if (hexavalue2 == './images/others/c.png') answer2 = "C";
		if (hexavalue2 == './images/others/d.png') answer2 = "D";
		//check question A
		if(answer1 == "C") {
			textstr1 = "<?php echo _('Correct. The child has the exact same genes the parent does, like a clone.'); ?>";
			$('#selected_answer1').text('<?php echo _("They are exactly like their parent."); ?>');
			$('#imganswer1').attr("src","images/others/c.png");
			$('#answer-icon1').attr("src", "images/others/correct.png");
			$('#feedback1').addClass('green');
		} else {
			textstr1 = '';
			if(answer1 == "A") {
				textstr1 = "<?php echo _('No. The product of asexual reproduction is exactly like the parent.'); ?>";
				$('#selected_answer1').text('<?php echo _("They can only reproduce once per lifetime."); ?>');
				$('#imganswer1').attr("src","images/others/a.png");
			} else if (answer1 == "B") {
				textstr1 = "<?php echo _('No, in asexual reproduction the product has the exact same genes the parent does.'); ?>";
				$('#selected_answer1').text("<?php echo _("They have half of their parent's genes."); ?>");
				$('#imganswer1').attr("src","images/others/b.png");
			} else if (answer1 == "D") {
				textstr1 = '<?php echo _("No, in asexual reproduction the child has the exact same genes the parent does."); ?>';
				$('#selected_answer1').text("<?php echo _("They have double of their parent's genes."); ?>");
				$('#imganswer1').attr("src","images/others/d.png");
			}
			$('#answer-icon1').attr("src", "images/others/wrong.png");
			$('#feedback1').addClass('red');
		}
		$('#feedback1').text(textstr1);
		//check question B
		if(answer2 == "D") {
			textstr2 = "<?php echo _('That works! Using roots to copy plants is a good choice.'); ?>";
			$('#selected_answer2').text('<?php echo _("By spreading its roots through the ground."); ?>');
			$('#imganswer2').attr("src","images/others/d.png");
			$('#answer-icon2').attr("src", "images/others/correct.png");
			$('#feedback2').addClass('green');
		} else {
			textstr1 = '';
			if(answer2 == "A") {
				textstr2 = "<?php echo _('No, splitting it down the middle will not make another plant, it will just kill it.'); ?>";
				$('#selected_answer2').text('<?php echo _("By splitting it down the middle."); ?>');
				$('#imganswer2').attr("src","images/others/a.png");
			} else if (answer2 == "B") {
				textstr2 = "<?php echo _('No, artificial hormones might make it grow, but not reproduce asexually.'); ?>";
				$('#selected_answer2').text('<?php echo _("By giving it artificial hormones."); ?>');
				$('#imganswer2').attr("src","images/others/b.png");
			} else if (answer2 == "C") {
				textstr2 = "<?php echo _('No, that is incorrect.'); ?>";
				$('#selected_answer2').text('<?php echo _("By taking a cutting of a flower and replanting it."); ?>');
				$('#imganswer2').attr("src","images/others/c.png");
			}
			$('#answer-icon2').attr("src", "images/others/wrong.png");
			$('#feedback2').addClass('red');
		}
		$('#feedback2').text(textstr2);
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
		hexa2 = new HexaFlip(document.getElementById('hexaflip2'), { set: images }, { size: 180 });
    </script>
	<script src="scripts/svgcheckbx.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
