<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Alive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #000; }
h3 { color: #336666; font-weight: normal; font-size: 24px; }
.bg { background-image: url(images/20/bg.jpg); }

#question li { padding: 8px 0; }

#answer { display: none; text-align: center; }
#answer p { text-align: center; }
#question1 { width:850px; }
#question1 h3 { color: #E151B7; text-align: center; }
#question1 h3:first-of-type { color: #395BB2; margin-top: 40px; }
#choices1 { margin: 20px auto; margin-left: 30px; }
#hexaflip1 { margin: 20px auto;  }
#answer p { margin: 2% 0; } 
#imganswer1 { margin: 0 auto; display: block; }
.feedback img { padding-right: 10px; }
#buttons .next { display: none; }
html[dir="rtl"] #choices1 { margin-right: 5%; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #5"); ?></h1>
				<h2><?php echo _("Which of the following is not an important reason to preserve biodiversity?"); ?></h2>

		
				<div id="choices1">
					<p>A. <?php echo _("Most human food sources have wild ancestors and relatives."); ?></p>
					<p>B. <?php echo _("Many useful medications were first discovered in the wild."); ?></p>
					<p>C. <?php echo _("Humans have limited understandings of most ecosystems worldwide."); ?></p>
					<p>D. <?php echo _("Extinction has little impact on surviving species."); ?></p>
				</div>
				
				<h3><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></h3>
				<div id="hexaflip1"></div>
			</div>

			<div id="answer">
				<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div id="answer1">
					<img id="imganswer1" />
					<p id="selected_answer1"> </p>
					<p class="feedback"><img src="images/others/wrong.png" id="answer-icon1"/><span id='feedback1'> </span></p>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="21.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Preserving biodiversity..."); ?></strong></section></section>

	<script>
	var back = $('.back-toggle'),
	next = $('.next-toggle'),
	check = $('.check-toggle'),
	question = $('#question'),
	answer = $('#answer'),
	ans = '',
	answered = 1;

	function save() {
		if (answered == 0) {
			//saveAnswer('staying-alive-qq5-a', ans);
		}
	}

	back.click(function() {
		if (question.is(':visible')) {
			document.location.href = "19.php";
		} else if (answer.is(':visible')) {
			next.fadeOut(function() { check.fadeIn(); });
			answer.fadeOut(function(){
				question.fadeIn();
				window.location.hash = '';
				$('#feedback1').removeClass('green');
				$('#feedback1').removeClass('red');
			});
		}
	});
	
	check.click(function() {
		checkAnswer();
		check.fadeOut(function() { next.fadeIn(); });
		question.fadeOut(function(){
			answer.fadeIn();
			save();
			window.location.hash = '#answer';
		}); 
		
	});
	function checkAnswer(){
		var hexavalue1 = hexa1.getValue(); //answer for question A
		if (hexavalue1 == './images/others/a.png') answer1 = "A";
		if (hexavalue1 == './images/others/b.png') answer1 = "B";
		if (hexavalue1 == './images/others/c.png') answer1 = "C";
		if (hexavalue1 == './images/others/d.png') answer1 = "D";
		
		//check question A
		if(answer1 == "D") {
			textstr1 = "<?php echo _("That's the one. Extinction has a big impact, even if we don't see it right away."); ?>";
			$('#selected_answer1').text('<?php echo _("Extinction has little impact on surviving species."); ?>');
			$('#imganswer1').attr("src","images/others/d.png");
			$('#answer-icon1').attr("src", "images/others/correct.png");
			$('#feedback1').addClass('green');
		} else {
			textstr1 = '';
			if(answer1 == "A") {
				textstr1 = "<?php echo _("Nope. All human food sources have origins in nature."); ?>";
				$('#selected_answer1').text('<?php echo _("Most human food sources have wild ancestors and relatives."); ?>');
				$('#imganswer1').attr("src","images/others/a.png");
			} else if (answer1 == "B") {
				textstr1 = "<?php echo _("Sorry. Many medications were first found in plants, fungi, or microbes."); ?>";
				$('#selected_answer1').text('<?php echo _("Many useful medications were first discovered in the wild."); ?>');
				$('#imganswer1').attr("src","images/others/b.png");
			} else if (answer1 == "C") {
				textstr1 = "<?php echo _("While this is true, it's actually a reason to preserve biodiversity."); ?>";
				$('#selected_answer1').text('<?php echo _("Humans have limited understandings of most ecosystems worldwide."); ?>');
				$('#imganswer1').attr("src","images/others/c.png");
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
	<script src="scripts/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
