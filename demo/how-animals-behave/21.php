<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'how-animals-behave';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(21, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'how-animals-bahave-qq6-a');
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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/button.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/blink.js"></script>
<script src="scripts/saveanswer.js"></script>
<style>
	 html { background-color: #E9F5FC; }
	body { display: none; background-color: #FFFFFF;}	
	p { margin: 0 auto; color: black; }
	.bg { 	background: url(images/bg/qbg.jpg) 0 0 no-repeat; 	background-size: 100% 100%;	width:100%; height:100%; position:relative;	}
	#buttons .next { display: none; }
	#answer { display: none; color: red; }
	#answerSpan { display: none; }
	.studentanswer1 { border-radius: 10px; width: 250px; margin: 0 auto; display: block; }
	#answer h2 { color: black; text-align: center; margin-top: 2%}	
	.choices {}
	.choices li {  float: left; width: 50%}
	.choices img { margin-left: 25%; width: 180px; border-radius: 10px; border: solid white; -webkit-transition: all .3s ease;}
	.choices p { }
	.choices img:hover{cursor:pointer;}

	html[dir="rtl"] .choices img { margin-right:25%;margin-left:0; }
	html[dir="rtl"] .choices li {  width: 45%}
	
	<?php if($language == 'zh_CN') { ?>
		.choices img { width: 165px;margin-left:25%;margin-right:0; }
		.choices li {  width: 41%; float:none; display:inline-block;margin-left: 50px;}
		.choices li:nth-child(n+3) {margin-top: 30px;}
	<?php } ?>
	
	.h2cr1 img{ vertical-align: sub; }
	
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		.choices li { width: 48%; }
	}	

</style>
</head>
<body>	
	<div class="wrap">
		<div class="bg">			
			<h1 id="h1"><?php echo _("Quiz Question #6"); ?></h1> 
			<h1 id="answerSpan"><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>
			
			<div id="screen1">
				<h2><?php echo _("Instinctual behaviors would <span class='blink'>not</span> include which of the following?"); ?></h2>	
				
				<div class="choices">		
					<ul>		
						<li>	
							<img class="q1img" id="q1imga" src="images/21/a.jpg">	
							<p id="q1pa"><?php echo _("Baby sea turtles, having never seen their mothers, always leave their nests at night."); ?></p>		
						</li>	
						<li>	
							<img class="q1img" id="q1imgb" src="images/21/b.jpg">	
							<p id="q1pb"><?php echo _("Snow leopard cubs live with their mothers for up to two years to learn to hunt and survive for themselves."); ?></p>	
						</li>
						<li>	
							<img class="q1img" id="q1imgc" src="images/21/c.jpg">	
							<p id="q1pc"><?php echo _("Honeybees always build their combs in the shape of hexagons."); ?></p>	
						</li>
						
						<li>	
							<img class="q1img" id="q1imgd" src="images/21/d.jpg">	
							<p id="q1pd"><?php echo _("Baby kangaroos immediately climb into their mother’s pouch after birth."); ?></p>	
						</li>	
					</ul>	
				</div>			
			</div>			

			<div id="answer">
				<h2><?php echo _("You answered..."); ?></h2>
				<img class="studentanswer1" src="">				
				<h2 class="choice1"></h2>				
				<h2 class="h2cr1"></h2>	
			</div>
		</div>	
	</div>		
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="22.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer checkanswer-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<script>
	var answered = 1;
	var studentAnswer = '';
	$(document).ready(function() {	
	selectedImage ="";
	
	/* screen transition */	
	$('a.back-toggle').click(function(){	
	if( $('#screen1').is(':visible') ) {	
	$('a.back-toggle').attr('href','20.php');
	} else {	
	$('a.back-toggle').attr('href','21.php');
	}	
	});	
	$('a.checkanswer-toggle').click(function(){	
	if ( selectedImage != "" ){			
	$('#h1').fadeOut( function () {		
	$('#answerSpan').fadeIn();		
	});							
	if( $('#screen1').is(':visible') ) {	
	$('c1').fadeOut();			
	$('#screen1').fadeOut(function(){
	$(checkAnswer);	
	$('#answer').fadeIn();			
				
	});				
	$('a.back-toggle').fadeIn(); 	
	$('a.checkanswer-toggle').fadeOut(); 		
	$('a.next-toggle').fadeIn(); 				
	} else if ( $('#answer').is(':visible') ) {		
	$('h1').fadeOut();				
	$('a.checkanswer-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });		
	$('#answer').fadeOut(function(){ 			
	$('a.back-toggle').fadeIn();			
	$('a.back-toggle').parent().attr('href','#answer');		
	});			
	} 			
	} else { alert('<?php echo _("Please select your answers."); ?>'); }	
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
	$('.q1img').on('click',function(){	
	$('#c1p').css('color', 'black');	
	if ($(this).attr('id') == 'q1imga') {	
	selectedImage ="A";		
	$('#q1imga').css('border-color', '#1F001D'); $('#q1pa').css('color', '#1F001D');	
	$('#q1imgb, #q1imgc, #q1imgd').css('border-color', 'white'); 
	//$('#q1pb, #q1pc, #q1pd').css('color', 'white');		
	} else if ($(this).attr('id') == 'q1imgb'){		
	selectedImage ="B";			
	$('#q1imgb').css('border-color', '#1F001D'); $('#q1pb').css('color', '#1F001D');	
	$('#q1imga, #q1imgc, #q1imgd').css('border-color', 'white'); 	
	//$('#q1pa, #q1pc, #q1pd').css('color', 'white');			
	} else if ($(this).attr('id') == 'q1imgc'){	
	selectedImage ="C";					
	$('#q1imgc').css('border-color', '#1F001D'); $('#q1pc').css('color', '#1F001D');	
	$('#q1imgb, #q1imga, #q1imgd').css('border-color', 'white'); 	
	//$('#q1pb, #q1pa, #q1pd').css('color', 'white');				
	} else if ($(this).attr('id') == 'q1imgd'){			
	selectedImage ="D";					
	$('#q1imgd').css('border-color', '#1F001D'); $('#q1pd').css('color', '#1F001D');	
	$('#q1imgb, #q1imgc, #q1imga').css('border-color', 'white'); 	
	//$('#q1pb, #q1pc, #q1pa').css('color', 'white');		
	}		
	});	
	$('.blink').blink({ speed: 500, blinks: 1000 });
	});
	
function checkAnswer() {
	if (selectedImage == "A"){ 	
		$('.h2cr1').css('color', 'red');
		$('.studentanswer1').attr("src","images/21/a.jpg");		
		$('.choice1').html('<?php echo _("Baby sea turtles, having never seen their mothers, always leave their nests at night."); ?>');
		$('.h2cr1').html('<img src="images/others/wrong.png" /> <?php echo _("Sorry.  The baby turtles haven’t had time to learn anything yet.  This is instinctual."); ?>');	
	
	} else if (selectedImage == "B"){	
		$('.h2cr1').css('color', 'green');	
		$('.studentanswer1').attr("src","images/21/b.jpg");		
		$('.choice1').html('<?php echo _("Snow leopard cubs live with their mothers for up to two years to learn to hunt and survive for themselves."); ?>');	
		$('.h2cr1').html('<img src="images/others/check.png" /> <?php echo _("That’s it.  The cubs have little chance if their mothers don’t teach them well."); ?>');		
	
	}  else if (selectedImage == "C"){	
		$('.h2cr1').css('color', 'red');		
		$('.studentanswer1').attr("src","images/21/c.jpg");		
		$('.choice1').html('<?php echo _("Honeybees always build their combs in the shape of hexagons."); ?>');	
		$('.h2cr1').html('<img src="images/others/wrong.png" /> <?php echo _("Nope.  This behavior is instinctual."); ?>');	
	
	}  else if (selectedImage == "D"){		
		$('.h2cr1').css('color', 'red');	
		$('.studentanswer1').attr("src","images/21/d.jpg");		
		$('.choice1').html('<?php echo _("Baby kangaroos immediately climb into their mother’s pouch after birth."); ?>');	
		$('.h2cr1').html('<img src="images/others/wrong.png" /> <?php echo _("Not this one.  The baby are newly born.  No time to learn."); ?>');		
		}

	studentAnswer = selectedImage;	
		if(answered == 0){
		saveAnswer('how-animals-behave-qq6-a',studentAnswer);		
		answered = 1;
		}
	}
	
	</script>	
	<section id="preloader"><section class="selected">	<strong><?php echo _("What does your instinct say?"); ?></strong></section></section>
	<?php require("setlocale.php"); ?>
	</body>
</html>