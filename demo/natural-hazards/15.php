<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.wrap { border-left: 1px dashed #98A8FF; border-right: 1px dashed #98A8FF; }
.bg { background-image: url('images/15/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; }
#buttons .next { display: none; }
h1 { color: #003399; }
#question p { text-align: left; }
#answer { display: none; }
#answer p { text-align: center; }

#choices { float:left; width: 65%; text-align: center; margin: 15px 10px 0 25px;  }
#flipper { float: right; width: 257px; margin-top: 15px; }
#flipper p { font-size: 18px; text-align: center; }
#answer-icon { display:inline-block; height: 30px; margin-right: 10px; }
#answer p:first-child { margin-top: 50px; }
#answer #hexaflip { margin-top: 15px; }
.img-div { width: 100%; margin: 0 auto; text-align: center; }

#hexaflip { margin-left: 56px; }

html[dir="rtl"] #question p { text-align: right; }
html[dir="rtl"] #hexaflip { margin: 0 48px 0 0; }
html[dir="rtl"] #answer p { width: 800px; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#flipper { float: none; margin: 0 auto; }
	#flipper p { font-size: 22px; }
	#choices { width: 100%; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?> </h1>
				<h2><?php echo _("Most states in the United States are at risk for some kind of natural hazard. The best strategy to protect your family and property from damages is to:"); ?></h2>
				<div id="choices">
					<p><?php echo _("A. Understand the hazard and know what to do to minimize the risk."); ?></p>
					<p><?php echo _("B. Hope that nothing happens during your lifetime."); ?></p>
					<p><?php echo _("C. Go on the internet and find out any news about upcoming natural hazards."); ?></p>
					<p><?php echo _("D. Ignore it because whatever will happen will happen."); ?></p>
				</div>
				<div id="flipper">
					<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p><br>
					<div id="hexaflip"></div>
					<div class="clear" id="b4hex"></div><br>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="img-div"><img id="imganswer"></div>
				<p><span id="textanswer"></span></p>
				<p><img id="answer-icon"><span id="answer1"></span></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Flood-proofing the house..."); ?></strong></section></section>
	<script>
	var textstr = "";
	var answer = "";
	var answered = 1;
	$(document).ready(function() {
		/* Back Screen */
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = '14.php';
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');			
					$('#answer-icon').removeClass('img-align');
					$('#b4hex').before($('#hexaflip'));
				});	
			}
		});
		
		/* Check Answer */
		$('a.check-toggle').click(function(){
			$('#question').fadeOut(function(){
				$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				$('#answer').fadeIn();
				window.location.hash = "#answer";

				var hexavalue = hexa.getValue();
				if (hexavalue == './images/15/a.png') answer = "A";
				if (hexavalue == './images/15/b.png') answer = "B";
				if (hexavalue == './images/15/c.png') answer = "C";
				if (hexavalue == './images/15/d.png') answer = "D";

				if(answer == "A") {
					textstr = "<?php echo _("Correct. Understanding potential dangers and being prepared for them is the best option."); ?>";
					$('#textanswer').text('<?php echo _("A. Understand the hazard and know what to do to minimize the risk."); ?>');
					$('#imganswer').attr("src","images/14/a.png");
					$('#answer-icon').attr("src", "images/19/correct.png");
					$('#answer1').addClass('green');
				} else {
					textstr = '';
					if(answer == "B") {
						textstr = "<?php echo _("No, hoping for the best is not enough; you also need to plan for the worst."); ?>";
						$('#textanswer').text('<?php echo _("B. Hope that nothing happens during your lifetime."); ?>');
						$('#imganswer').attr("src","images/14/b.png");
					} else if (answer == "C") {
						textstr = '<?php echo _("Not quite."); ?>';
						$('#textanswer').text('<?php echo _("C. Go on the internet and find out any news about upcoming natural hazards."); ?>');
						$('#imganswer').attr("src","images/14/c.png");
					} else if (answer == "D") {
						textstr = "<?php echo _("Ignoring the natural hazard is simply being in denial- it is the worst option of the four."); ?>";
						$('#textanswer').text('<?php echo _("D. Ignore it because whatever will happen will happen."); ?>');
						$('#imganswer').attr("src","images/14/d.png");
					}
					$('#answer-icon').attr("src", "images/19/wrong.png");
					$('#answer-icon').addClass('img-align');
					$('#answer1').addClass('red');
				}
				$('#answer1').text(textstr);
				if (answered == 0) {
					saveAnswer('natural-hazards-qq2-a', answer);
					answered = 1;
				}
			});
		});
		makeHexa();
	});
	</script>
	<script src="scripts/hexaflip.js"></script>
    <script>
		var hexa,
            images = [
                './images/15/a.png',
                './images/15/b.png',
                './images/15/c.png',
                './images/15/d.png'
            ];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 150 });
    </script>
	<?php include("setlocale.php"); ?>
</body>
</html>
