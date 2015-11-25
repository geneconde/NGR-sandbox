<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background: url('images/19/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; overflow: hidden; }
h3 { font-size: 24px; margin: 0; padding: 0; font-weight: normal; }
#answer { display: none; }
#answer p{ margin: 10px 0; }
#buttons .next { display: none; }
#question {  }
#question div {  }
#question ul li { list-style-type: none; font-size: 24px; }
#question h3 { text-align: center; }
#hexaflip { margin: 0 auto; }
.hexaflip-cube .hexaflip-side { width: 102% !important; }
#answer img { border: 0 !important; border-radius: 0 !important; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("Choose the correct statement:"); ?></h2>
		
				<ul>
					<li id="a"><?php echo _("A. Organs may be made of a variety of different tissues."); ?></li>
					<li id="b"><?php echo _("B. Each organ is made of a unique tissue type."); ?></li>
					<li id="c"><?php echo _("C. Organ systems consist of only a single type of tissue."); ?></li>
					<li id="d"><?php echo _("D. Cells are made of many different tissue types."); ?></li>					
				</ul>
					
				<!-- <h3><?php echo _("Rotate or flip the box below either up or down to set your answer."); ?></h3> -->
				<h3><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></h3><br>
				<div >
				<div id="hexaflip"></div>
				</div>	
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>	
				<img src="images/19/a.png" id="ansImg"/>	
				<p id="selected_answer1"></p>
				<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("What are organs made of?"); ?></strong></section></section>
	<script src="scripts/hexaflip.js"></script>
	<script>
		var hexa,
            images = [
                './images/19/a.png',
                './images/19/b.png',
                './images/19/c.png',
                './images/19/d.png'
            ];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
    </script>
	<script>
	var feedback = "";
	var feedback2 = "";
	var studentAnswer1 = "";
	var studentAnswer2 = "";
	var nullAnswer = false;
	var answered = 0;
	var radio_value = '';
	$(document).ready(function() {
		
		$('.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "18.php";
			} else if ($('#answer').is(':visible')) {
				$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function() {
					$('#question').fadeIn();					
					$('#feedback').removeClass('green');
					$('#feedback').removeClass('red');
				});
			}
		});
		
		$('.check-toggle').click(function(e){ 
		checkAnswer();
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _('Please select your answers.'); ?>");
			nullAnswer = false;
			studentAnswer = '';
		} else {	
			$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					window.location.hash = "#answer";
					$('#answer').fadeIn();
				}); 
			}
		});
	});
	
	function checkAnswer(){
		
		var hexavalue = hexa.getValue();
		if (hexavalue == './images/19/a.png') answer = "A";
		if (hexavalue == './images/19/b.png') answer = "B";
		if (hexavalue == './images/19/c.png') answer = "C";
		if (hexavalue == './images/19/d.png') answer = "D";

		
		switch(answer){
			case 'A':
				feedback = "<?php echo _("That's right! Organs may be made of many tissues."); ?>";
				radio_value=$('#a').text();
				$('#feedback').addClass('green');
				$('#answer-icon').attr("src", "images/others/correct.png");
				$('#ansImg').attr("src", "images/19/a.png");
			break;
			
			case 'B':
				feedback = '<?php echo _("Look again! Organs MAY be made of more than one tissue."); ?>';
				radio_value=$('#b').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
				$('#ansImg').attr("src", "images/19/b.png");
			break;
			
			case 'C':
				feedback = '<?php echo _("Nope! Systems are made of organs; organs may be made of many tissues."); ?>';
				radio_value=$('#c').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
				$('#ansImg').attr("src", "images/19/c.png");
			break;
			
			case 'D':
				feedback = '<?php echo _("The exact opposite, tissues are made of cells."); ?>';
				radio_value=$('#d').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
				$('#ansImg').attr("src", "images/19/d.png");
			break;
			default:break;	
		}
		 $('#selected_answer1').text(radio_value);
		 $('#feedback').text(feedback);	
	}
	
	function checkNull() {
		if(studentAnswer1 ==null){
			nullAnswer = true;
		}
	}
	function save(){
		//saveAnswer('staying-healthy-qq2', studentAnswer1);
		//answered = 1;		
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
