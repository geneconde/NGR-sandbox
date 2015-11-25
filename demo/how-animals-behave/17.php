<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'how-animals-behave';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(17, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'how-animals-bahave-qq2-a');
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
<script src="scripts/saveanswer.js"></script>

<style>
	 html { background-color: #E9F5FC; }
	body { display: none; background-color: #FFFFFF;}	
	#answer p { width: 100% }
	.bg { 
		background: url(images/bg/qbg.jpg) 0 0 no-repeat;  
		background-size: 100% 100%; 
		width:100%; 
		height:100%; 
		position:relative; 
	}	p { margin: 0 auto; color: white }	
	#buttons .next { display: none; }
	#answer { display: none; color: red; margin: 0px; padding: 0px;}
	#answerSpan { display: none; }
	.studentanswer1 { border-radius: 10px; width: 250px; margin-left: 37%}
	#answerA { display: none; color: red; margin: 0px; padding: 0px;}
	#answerB { display: none; color: red; margin: 0px; padding: 0px;}
	#answerC { display: none; color: red; margin: 0px; padding: 0px;}
	#answerD { display: none; color: red; margin: 0px; padding: 0px; }	
	.choices ul { padding-left: 0%; width: 80%; margin: 0 auto; }
	.choices li{ list-style-type: none; margin-top: 2%; font-size: 19px; width: 250px; margin-left: 11% }
	.choices p { font-size: 19px; }	
	#form li {  display: inline-block; padding-left: 5px; }
	#form img { width: 60%; border-radius: 10px; border: solid white; -webkit-transition: all .3s ease; cursor: pointer}
	.choices p { margin: 0; }
	.q1img { margin-left: 18% }	
	p{color:black;}

	html[dir="rtl"] #form img { width:90%;margin:0;padding:0; }
	html[dir="rtl"] .choices li { margin-right: 11%;margin-left:0;width: 205px; }
	html[dir="rtl"] #form li { padding-right:5px;padding-left:0;float:left;margin: 0; }
	html[dir="rtl"] .choices p { text-align: center;width:auto; }
	html[dir="rtl"] .studentanswer1 { display:block;margin:0 auto; }
	html[dir="rtl"] .choices ul { margin-top:10px; width: 100%; }
	.h2cr1 img { vertical-align: sub; }

	<?php if ($language == 'es_ES'): ?>
		.choices p { font-size: 16px; }
		.choices li { width: 255px; }
	<?php endif; ?>

	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		.choices ul { width: 100%; }
		.choices li { width: 350px; margin-left: 0; }
		.choices p { font-size: 22px; }
		html[dir="rtl"] #form li { width: 250px; float: none; display: inline-block; float: none; }
		html[dir="rtl"] #form p { font-size: 18px; }
		html[dir="rtl"] .choices { margin: 0 auto; width: 520px; }
	}

	</style>
</head>
<body>

	<div class="wrap">
		<div class="bg">

			<h1 id="h1"><?php echo _("Quiz Question #2"); ?></h1>
			<h1 id="answerSpan"><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1> 
			<div id="screen1">
					<div id="form">
						<h2><?php echo _("Which behavior of the bat is most likely a learned behavior?"); ?></h2>
							<div class="choices">	
								<ul>
									<li><img class="q1img" id="q1imga" src="images/17/a.jpg"><p id="q1pa"><?php echo _("Sleeping upside down"); ?></p></li>
									<li><img class="q1img" id="q1imgb" src="images/17/b.jpg"><p id="q1pb"><?php echo _("Flying to move around"); ?></p></li>
									<li><img class="q1img" id="q1imgc" src="images/17/c.jpg"><p id="q1pc"><?php echo _("Avoiding humans"); ?></p></li>
									<li><img class="q1img" id="q1imgd" src="images/17/d.jpg"><p id="q1pd"><?php echo _("Using sound to find objects"); ?></p></li>
								</ul>
							</div>
							<div id="c1"> 
							</div>
							
					</div>
					<div id="answer">
						<p><?php echo _("You answered..."); ?></p>
						<img class="studentanswer1" src="">
						<p class="choice1"></h2>
						<p class="h2cr1"></p>
					</div>
			</div>
		</div>

	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer checkanswer-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
<script>
	var studentAnswer ='';
	var answered = 1;
	$(document).ready(function() {	
	selectedImage ="";	
	
	/* screen transition */		
	$('a.back-toggle').click(function(){	
	if( $('#h1').is(':visible') ) {		
		$('a.back-toggle').attr('href','16.php');	
		} else {		
		$('a.back-toggle').attr('href','17.php');	
		}	
		});	
		
		$('a.checkanswer-toggle').click(function(e){	
		if ( selectedImage != "" ){		
			if( $('#screen1').is(':visible') ) {	
			$('#h1').fadeOut( function (){			
			$('#answerSpan').fadeIn();			
			});									
			$('#c1').fadeOut();				
			$('#form').fadeOut(function(){			
			$('#answer').fadeIn();					
			$(checkAnswer);		
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
		document.location.href= "6.php";		
		});			
		} 			
		} else{ alert('<?php echo _("Please select your answers."); ?>');  e.preventDefault();}	
		});		
		$('.q1img').on('click',function(){	
		if ($(this).attr('id') == 'q1imga') {	
			selectedImage ="A";		
			$('#q1imga').css('border-color', '#1F001D'); $('#q1pa').css('color', '#1F001D');	
			$('#q1imgb, #q1imgc, #q1imgd').css('border-color', 'white'); 	
			// $('#q1pb, #q1pc, #q1pd').css('color', 'white');		
			
		} else if ($(this).attr('id') == 'q1imgb'){		
			selectedImage ="B";		
			$('#q1imgb').css('border-color', '#1F001D'); $('#q1pb').css('color', '#1F001D');	
			$('#q1imga, #q1imgc, #q1imgd').css('border-color', 'white'); 	
			// $('#q1pa, #q1pc, #q1pd').css('color', 'white');			
		
		} else if ($(this).attr('id') == 'q1imgc'){		
			selectedImage ="C";		
			$('#q1imgc').css('border-color', '#1F001D'); $('#q1pc').css('color', '#1F001D');	
			$('#q1imgb, #q1imga, #q1imgd').css('border-color', 'white'); 	
			// $('#q1pb, #q1pa, #q1pd').css('color', 'white');	
		
		} else if ($(this).attr('id') == 'q1imgd'){	
			selectedImage ="D";			
			$('#q1imgd').css('border-color', '#1F001D'); $('#q1pd').css('color', '#1F001D');
			$('#q1imgb, #q1imgc, #q1imga').css('border-color', 'white'); 	
			// $('#q1pb, #q1pc, #q1pa').css('color', 'white');	
			}	
		});
		});	
		function checkAnswer() {	
		if (selectedImage == "A"){ 	
			$('.h2cr1').css('color', 'red');
			$('.studentanswer1').attr("src","images/17/a.jpg");		
			$('.choice1').html('<?php echo _("Sleeping upside down"); ?>');	
			$('.h2cr1').html('<img src="images/others/wrong.png" /> <?php echo _("No, this is instinctive, so it is an inherited behavior."); ?>');	
		
		} else if (selectedImage == "B"){	
			$('.h2cr1').css('color', 'red');		
			$('.studentanswer1').attr("src","images/17/b.jpg");	
			$('.choice1').html('<?php echo _("Flying to move around"); ?>');
			$('.h2cr1').html('<img src="images/others/wrong.png" /> <?php echo _("No, flying is an instinct. This is an inherited behavior, not a learned one."); ?>');		
		
		}  else if (selectedImage == "C"){	
			$('.h2cr1').css('color', 'green');	
			$('.studentanswer1').attr("src","images/17/c.jpg");		
			$('.choice1').html('<?php echo _("Avoiding humans"); ?>');	
			$('.h2cr1').html('<img src="images/others/check.png" /> <?php echo _("Correct. Bats have to interact with their environment and learn to avoid humans."); ?>');	
		
		}  else if (selectedImage == "D"){		
			$('.h2cr1').css('color', 'red');	
			$('.studentanswer1').attr("src","images/17/d.jpg");	
			$('.choice1').html('<?php echo _("Using sound to find objects"); ?>');	
			$('.h2cr1').html('<img src="images/others/wrong.png" /><?php echo _(" No, bats do not have strong eyesight and they use sound and vibrations to find objects."); ?>');	
		}
		
		studentAnswer = selectedImage;		
		if(answered == 0){
			saveAnswer('how-animals-behave-qq2-a',studentAnswer);		
			answered = 1;
		}
	}
	
	
</script>
	<section id="preloader">
		<section class="selected">
			<strong><?php echo _("Bats, bats, and more bats!"); ?></strong>
		</section>
	</section>
<?php require("setlocale.php"); ?>
</body>
</html>