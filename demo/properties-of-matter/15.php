<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/15/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #d4c08b; }
img.back-toggle-answer, #buttons .next { display: none; }
p { color: #fff; }
#choices { width: 50%; float: left; margin-left: 30px; }
#choices p { text-align: left; padding: 3px 0; }
#choices .pic { height: 100px; }
#choices .pic img { margin-left: 20px; height: 100%; }
#answer .pic { height: 200px; margin: 0px 10px; text-align: center; }
.pic img { height: 100%; }
#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }
.answer-item { min-height: 260px; width: 100%; }

#hexaflip-container { float: right; margin: 0px 15px 0 0; width: 35%; }
#hexaflip-container p { color: #fff; padding-bottom: 10px; }
#hexaflip { margin: 0 auto; }
html[dir="rtl"] #choices .pic { text-align: center; }
html[dir="rtl"] #choices p { text-align: center; }

html[dir="rtl"] .answer-item p { width: 95% !important; }
html[dir="rtl"] #answer-icon { margin-right: 0; margin-left: 10px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("Which of the following mixtures forms a new substance?"); ?></h2>
				<div id="choices">
					<p><?php echo _("a. mixing baking soda and vinegar"); ?></p>
					<div class="pic">
						<img src="images/15/a.png">
					</div>
					<p><?php echo _("b. mixing baking soda and water"); ?></p>
					<div class="pic">
						<img src="images/15/b.png">
					</div>
					<p><?php echo _("c. mixing salt and vinegar"); ?></p>
					<div class="pic">
						<img src="images/15/c.png">
					</div>
					<p><?php echo _("d. mixing salt and water"); ?></p>
					<div class="pic">
						<img src="images/15/d.png">
					</div>
				</div>
				<div id="hexaflip-container">
						<p><?php echo _("Rotate or flip the 3D box below either up or down to set your answer."); ?></p>
						<div id="hexaflip"></div>
					</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<p><?php echo _("You answered..."); ?></p>
					<div class="pic"><img id="imganswer"></div>
					<p><span id="textanswer"></span></p>
					<p><img src="" id="answer-icon"><span id="answer1"></span></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var answer = "";
	//var answered = 0;
	$(document).ready(function() {
		$(".choices img").each(function() {
			var image = $(this);
			var imgVal = $(this).data('name');

			image.click(function() {
				clearEverything();
				if(answer != imgVal) {
					image.addClass('borderSelect');
					image.addClass('disabled');
					answer = imgVal;
				}
			});
		});
	
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "14.php";
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function (){
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer-icon').removeClass('img-align');
					$('#textanswer').addClass('gray');
					$('#textanswer').addClass('lightyellow');
					$('#textanswer').addClass('skyblue');
					$('#textanswer').addClass('lightpurple');
					window.location.hash = '';
				});
			}
		});
	
		$('a.check-toggle').click(function(){
			$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#question').fadeOut(function(){ 
				$('#answer').fadeIn();
				window.location.hash = '#answer';

				/* For Checking */
				var hexavalue = hexa.getValue();
				if (hexavalue == './images/others/a.png') answer = "A";
				if (hexavalue == './images/others/b.png') answer = "B";
				if (hexavalue == './images/others/c.png') answer = "C";
				if (hexavalue == './images/others/d.png') answer = "D";		

				if(answer == "A") {
					textstr = "<?php echo _("Correct, this mixing these leads to a chemical reaction forming new substances. Carbon dioxide is what you probably have seen foaming and bubbling."); ?>";
					$('#textanswer').text('<?php echo _("a. mixing baking soda and vinegar"); ?>');
					$('#imganswer').attr("src","images/15/a.png");
					$('#answer-icon').attr("src", "images/others/correct.png");
					$('#answer1').addClass('green');
				} else {
					textstr = '';
					if(answer == "B") {
						textstr = "<?php echo _("No, this mixture does not form new compounds and can be reversed."); ?>";
						$('#textanswer').text('<?php echo _("b. mixing baking soda and water"); ?>');
						$('#imganswer').attr("src","images/15/b.png");
					} else if (answer == "C") {
						textstr = "<?php echo _("No, this mixture does not form new compounds and can be reversed."); ?>";
						$('#textanswer').text('<?php echo _("c. mixing salt and vinegar"); ?>');
						$('#imganswer').attr("src","images/15/c.png");
					} else if (answer == "D") {
						textstr = "<?php echo _("No, this mixture does not form new compounds and can be reversed."); ?>";
						$('#textanswer').text('<?php echo _("d. mixing salt and water"); ?>');
						$('#imganswer').attr("src","images/15/d.png");
					}
					$('#answer-icon').attr("src", "images/others/wrong2.png");
					$('#answer-icon').addClass('img-align');
					$('#answer1').addClass('red');
				}
				
				/*
				if(answered == 0) {
					saveAnswer('properties-of-matter-qq2-a',answer);
					answered = 1;
				}
				*/

				$('#answer1').text(textstr);
				/* End Checking */
			});
		});
		makeHexa();
	});
	
	function clearEverything() {
		$('.choices img').each(function() {
			$(this).removeClass('disabled');
			$(this).removeClass('borderSelect');
		});
	}
	</script>
	<script src="scripts/hexaflip.js"></script>
    <script>
        var hexa;
		set = ['./images/others/a.png','./images/others/b.png','./images/others/c.png','./images/others/d.png'];
        hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set }, { size: 200 });
    </script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Mixing matters..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
