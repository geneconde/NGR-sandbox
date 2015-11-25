<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'how-animals-behave';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(20, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'how-animals-bahave-qq5-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo _("How Animals Behave"); ?></title>
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/button.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/saveanswer.js"></script>
<script src="scripts/blink.js"></script>
<style>	
html { background-color: #E9F5FC; }
body { display: none; background-color: #FFFFFF;}	
p { margin: 0 auto }		
.bg { background: url(images/bg/qbg.jpg) 0 0 no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }	
#buttons .next { display: none; }	#answerdiv { display: none; color: red; text-align: center }		
.choices { height: 180px; margin-left: 2%;}		
.choices li{ list-style-type: none;	margin-top: 2%;	font-size: 24px; line-height: 25px;	}		
#answerSpan { display: none; }	
#hexaflip { margin: 0 auto; }		
.h2cr img{ vertical-align: sub; }
</style>
</head>

<body>

	<div class="wrap">

		<div class="bg">
			<h1 id="h1"><?php echo _("Quiz Question #5"); ?></h1>
			<h1 id="answerSpan"><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1> 
			<div id="screen1">
				<h2><?php echo _("Select the <span class='blink'>correct</span> statement."); ?></h2>
					<div class="choices">	
						<ul>
							<li id="a"><?php echo _("A. Neurons interpret electrical signals that are messages of stimulus and response."); ?></li>
							<li id="b"><?php echo _("B. Only messages to the brain are in the form of electrical signals."); ?></li>
							<li id="c"><?php echo _("C. Senses help us gather information about our surroundings."); ?></li>
							<li id="d"><?php echo _("D. Our nervous system is a network, connecting all the blood flow in the body."); ?></li>
						</ul>
					</div>
				<p><?php echo _("Rotate or flip the 3D box below either up or down to set your answer."); ?><p>
				<div id="hexaflip"></div>
			</div>
			<div id="answerdiv">
				<p><?php echo _("You answered..."); ?></p>
				<img class="studentanswer" src="">
				<p class="choice"></p>
				<p class="h2cr"></p>
			</div>
		</div>

	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="21.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer checkanswer-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<script src="scripts/hexaflip.js"></script>
    <script>
        var hexa;
		set1 = ['./images/16/a.jpg','./images/16/b.jpg','./images/16/c.jpg','./images/16/d.jpg'];
        hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set1 }, { size: 200 });
	</script>	
	<script>
	var studentAnswer = '';
	var answered = 1;
	$(document).ready(function() {		
	$('.blink').blink({ speed: 500, blinks: 1000 });		
	/* screen transition */		
	$('a.back-toggle').click(function(){		
	if( $('#screen1').is(':visible') ) {	
	$('a.back-toggle').attr('href','19.php');	
	} else {		
	$('a.back-toggle').attr('href','20.php');	
	}		
	});	
	$('a.checkanswer-toggle').click(function(){	
	$('#h1').fadeOut( function () {	
	$('#answerSpan').fadeIn();		
	});				
	$('#screen1').fadeOut(function(){		
	$('#answerdiv').fadeIn();		
	var hexavalue = hexa.getValue();	
	if (hexavalue == './images/16/a.jpg') {	
	$('.h2cr').css('color', 'red');		
	$('.studentanswer').attr("src","images/16/a.jpg");	
	$('.choice').html('<?php echo _("Neurons interpret electrical signals that are messages of stimulus and response."); ?>');	
	$('.h2cr').html('<img src="images/others/wrong.png" /> <?php echo _("No, neurons take the messages to the brain and they are interpreted there."); ?>');
		studentAnswer = 'A';
	}		
	if (hexavalue == './images/16/b.jpg') {		
	$('.h2cr').css('color', 'red');			
	$('.studentanswer').attr("src","images/16/b.jpg");	
	$('.choice').html('<?php echo _("Only messages to the brain are in the form of electrical signals."); ?>');	
	$('.h2cr').html('<img src="images/others/wrong.png" /> <?php echo _("No, messages to and from the brain are in the form of electrical signals."); ?> ');	
	studentAnswer = 'B';
	}			
	if (hexavalue == './images/16/c.jpg') {		
	$('.h2cr').css('color', 'green');	
	$('.studentanswer').attr("src","images/16/c.jpg");		
	$('.choice').html('<?php echo _("Senses help us gather information about our surroundings."); ?>');		
	$('.h2cr').html('<img src="images/others/check.png" /> <?php echo _("Correct, we collect data to be interpreted by our brain in the form of sight, sound, smell, taste, and touch."); ?> ');
	studentAnswer = 'C';
	}				
	if (hexavalue == './images/16/d.jpg') {		
	$('.h2cr').css('color', 'red');			
	$('.studentanswer').attr("src","images/16/d.jpg");	
	$('.choice').html('<?php echo _("Our nervous system is a network, connecting all the blood flow in the body."); ?>');	
	$('.h2cr').html('<img src="images/others/wrong.png" /> <?php echo _("Not quite, it is a network, but it connects nerve cells in the body so the body can send and receive messages to and from the brain."); ?>');	
	studentAnswer = 'D';
	}		
		if(answered == 0){
		saveAnswer('how-animals-behave-qq5-a',studentAnswer);		
		answered = 1;
	}
	});		
	$('a.back-toggle').fadeIn(); 	
	$('a.checkanswer-toggle').fadeOut(); 	
	$('a.next-toggle').fadeIn(); 	
	});		
	var curURL = window.location.toString();
	var oldURL = document.referrer;		
	var hash = "";	
	if (oldURL.indexOf("6.php") != -1) {	
	$('h1').fadeOut();		
	$('a.back-toggle').fadeIn();	
	$('a.checkanswer-toggle').fadeOut();	
	$('a.next-toggle').fadeIn();		
	removeHash();		
	} 		
	makeHexa();	
	});	
	</script>
	<section id="preloader">
		<section class="selected">
			<strong><?php echo _("Sending signals to the brain..."); ?></strong>
		</section>
	</section>

<?php require("setlocale.php"); ?>
</body>
</html>