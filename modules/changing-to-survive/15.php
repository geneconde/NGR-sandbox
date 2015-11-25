<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'changing-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(15, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'changing-to-survive-qq2-a');
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
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/15/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #b77f4e !important; }
.wrap { border-left: 1px dashed #b77f4e; border-right: 1px dashed #b77f4e; }
#question1 { width:850px; }
#choices1 { padding: 2% 0; }
#question1 h3 { text-align: center; color: #683F1A; font-size: 22px; padding-top: 2%; }
#hexaflip1 { margin: 20px auto;  }
#answer { display: none; }
#answer p { margin: 2% 0; text-align: center; } 
#imganswer1 { margin: 0 auto; display: block; }

img.back-toggle-answer, img.next-toggle { display: none; }

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<div id="question1">
					<h2><?php echo _("When a fish fossil is found in the rocks on a mountaintop, we can conclude that..."); ?></h2>
					
					<div id="choices1">

						<p>A. <?php echo _("Conditions on Earth seldom change."); ?></p>
						<p>B. <?php echo _("Earth is less than 50 thousand years old."); ?></p>
						<p>C. <?php echo _("The rocks that are now part of the mountain formed on a seafloor."); ?></p>
						<p>D. <?php echo _("A natural disaster is soon to occur."); ?></p>
					</div>
					
					<h3><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></h3>
					<div id="hexaflip1"></div>
				</div>
			</div>
			
			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="answer1">
					<p><?php echo _("You answered..."); ?></p>
					<img id="imganswer1" />
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
		<a href="16.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Digging fossil fuels..."); ?></strong></section></section>
	<script>
	
	var feedback1 = "";
	var feedback2 = "";
	var answer1, asnwer2, textstr1, textstr2;

	var answered = <?php echo $answered; ?>;
	
	$(document).ready(function() {

		$('img.check-toggle').click(function(){
			checkAnswer();
			$('#question').fadeOut(function(){
				$('#answer').fadeIn();
				$('img.check-toggle').fadeOut( function(){
					$('img.next-toggle').fadeIn();
				});
				
			});//end of $('img.check-toggle').click(function()
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
				$('img.back-toggle').parent().attr('href','14.php');
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
			textstr1 = "<?php echo _('Correct! Fish fossil for where fish live.'); ?>";
			$('#selected_answer1').text('<?php echo _("The rocks that are now part of the mountain formed on a seafloor."); ?>');
			$('#imganswer1').attr("src","images/others/c.png");
			$('#answer-icon1').attr("src", "images/others/correct.png");
			$('#feedback1').addClass('green');
		} else {
			textstr1 = '';
			if(answer1 == "A") {
				textstr1 = "<?php echo _('No, all animals reproduce. Otherwise they would be extinct.'); ?>";
				$('#selected_answer1').text('<?php echo _("Conditions on Earth seldom change."); ?>');
				$('#imganswer1').attr("src","images/others/a.png");
			} else if (answer1 == "B") {
				textstr1 = "<?php echo _("Sorry. The fish fossil doesn't really say much about the age of the planet."); ?>";
				$('#selected_answer1').text('<?php echo _("Earth is less than 50 thousand years old."); ?>');
				$('#imganswer1').attr("src","images/others/b.png");
			} else if (answer1 == "D") {
				textstr1 = "<?php echo _('Nope. The fossil gives no hints about disasters.'); ?>";
				$('#selected_answer1').text('<?php echo _("A natural disaster is soon to occur."); ?>');
				$('#imganswer1').attr("src","images/others/d.png");
			}
			$('#answer-icon1').attr("src", "images/others/wrong.png");
			$('#feedback1').addClass('red');
		}
		$('#feedback1').text(textstr1);

		save();
	}

	function save() {
		if (answered == 0) {
			saveAnswer('changing-to-survive-qq2-a', answer1);
		}
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
