<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'how-animals-behave';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(9, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'how-animals-behave-qc3-a');
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
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" /><link rel="stylesheet" type="text/css" href="styles/global.css" />

<script src="scripts/jquery.min.js"></script>
<script src="scripts/button.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/saveanswer.js"></script>

<style>	
	p { width: 100% }
	 html { background-color: #FFFFFF; }
	 body { display: none; }
	#buttons .next { display: none; }
	.bg { 
		background: url(images/bg/qbg.jpg) 0 0 no-repeat;  
		background-size: 100% 100%; 
		width:100%; 
		height:100%; 
		position:relative; 
	}		
	#questionA, #questionB { 
		overflow: hidden; background-color: rgba(255, 255, 212, .3); 
		margin: 0 auto; -webkit-border-radius: 10px; -moz-border-radius: 10px; 	
		border-radius: 10px; margin-bottom: 10px; padding: 0 10px; width: 97%;	
	}
	#questionB { position: relative; z-index: 6; }
	#q1li {  margin-left: 2% }	
	#q1li li { margin-bottom: 2%;}
	#answerSpan { display: none; }	#qaAnswer { display: none }
	#q2answer {		display: none;	}	
	table { width: 95%; margin-left: 2%; padding-bottom: 10px; }
	table th{ background: #708090; color: white; border-radius: 7px; font-size: 24px; }
	table td{ background: white; border-radius: 7px; width: 10%; padding: 5px}	td img { display: block; margin: 0 auto; }
	td input { display: block; margin: 0 auto; }	
	.td1 { width: 60%; background: #ffcdfb; padding: 5px; border-radius: 7px; font-size: 24px; }
	input[type=radio].css-checkbox {display:none;}	
	input[type=radio].css-checkbox + label.css-label {
		padding-left:20px;
		margin-bottom:24px;
		height:14px;
		display:inline-block;
		line-height:22px;
		background-repeat:no-repeat;
		background-position: 0 0;
		font-size:24px; 		
		vertical-align:middle;	
		cursor:pointer;	
	}		
	input[type=radio].css-checkbox:checked + label.css-label {	background-position: 0 -14px;	}	
	label.css-label {	
	background-image: url("images/9/csscheckbox.png");	
		-webkit-touch-callout: none;
		-webkit-user-select: none;	
		-khtml-user-select: none;		
		-moz-user-select: none;		
		-ms-user-select: none;		
		user-select: none;	
	}
	#tdat,#tdaf,#tdbt,#tdbf,#tdct,#tdcf{text-align:center;}
	.no-margin{margin:0 !important;}
	.mid{vertical-align:middle;}

	html[dir="rtl"] input[type=radio].css-checkbox + label.css-label { background-position-x:right;  }
	html[dir="rtl"] input[type=radio].css-checkbox:checked + label.css-label { background-position: right -14px; }
	.h2cr1 img { vertical-align: sub; }

	html[dir="rtl"] #q1li input[type=radio].css-checkbox + label.css-label {
		padding-right:20px;
	}		

	<?php if($language == "es_ES") { ?>
		input[type=radio].css-checkbox + label.css-label, .td1 { font-size:22px; }
	<?php } ?>
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		.td1 { font-size: 22px; }
	}
	@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
		#q1li li { margin-bottom: 5%; }
	}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<h1 id="h1"><?php echo _("Quick Check #3"); ?></h1> 		
			<h1 id="answerSpan"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?") ?></h1>	
			<div id="screen1">
				<section>
					<div id="questionA" >
						<h2><?php echo _("Question A. Many people say that when they have colds their foods taste bad.  Which of the following is the best possible explanation for this?"); ?></h2>
							<div class="choices-container">	
								<div id="q1li" >
									<ul>
										<li id="a"><input name="answer" type="radio"  id="a1" value="A" class="css-checkbox" >	<label for="a1" class="css-label"><?php echo _("A food’s smell is an important part of how we think it tastes. Stuffy noses have a hard time detecting smell."); ?></label>	</li> 
										<li id="b"><input name="answer" type="radio"  id="b1" value="B" class="css-checkbox" >	<label for="b1" class="css-label"><?php echo _("A food’s smell is not an important part of how we think it tastes. Stuffy noses have a hard time detecting smell."); ?></label>	</li>
										<li id="c"><input name="answer" type="radio"  id="c1" value="C" class="css-checkbox" >	<label for="c1" class="css-label"><?php echo _("A food’s smell is an important part of how we think it tastes.  Stuffy noses detect smells better than clear noses."); ?></label> </li>
										<li id="d"><input name="answer" type="radio"  id="d1" value="D" class="css-checkbox" >	<label for="d1" class="css-label"><?php echo _("A food’s smell is not an important part of how we think it tastes. Stuffy noses detect smells better than clear noses."); ?></label> </li>
									</ul>								
								</div>
							</div>							
						<div id="qaAnswer">																
							<p><?php echo _("You answered..."); ?></p>	
							<p class="choice1"></p>									
							<p class="h2cr1"></p>		
						</div>	
					</div>							
						<div id="questionB">
							<h2><?php echo _("Question B. Click on “True” or “False” next to each statement."); ?></h2>
							<table id="q2">
								<tr>
									<th><?php echo _("Statement"); ?></th>
									<th id="answer_head"><?php echo _("True"); ?></th>
									<th id="third_head"><?php echo _("False"); ?></th>
								</tr>
								<tr>
									<td id="td1a" class="td1"><?php echo _("All animals can smell, see, and hear with equal power."); ?></td>
									<td id="tdat" ><input id="q2at"  name="q2a" type="radio"  value="t" class="css-checkbox"><label label for="q2at" class="css-label no-margin"></label></td>
									<td id="tdaf" ><input id="q2af" name="q2a" type="radio"  value="f" class="css-checkbox"><label label for="q2af" class="css-label no-margin"></label></td>
								</tr>
								
								<tr>
									<td id="td1b" class="td1"><?php echo _("We hear sound when an object vibrates and causes a disturbance in air particles. "); ?></td>
									<td id="tdbt" ><input id="q2bt" name="q2b" type="radio"  value="t" class="css-checkbox"><label  label for="q2bt" class="css-label no-margin"></label></td>
									<td id="tdbf" ><input id="q2bf" name="q2b" type="radio"  value="f" class="css-checkbox"><label  label for="q2bf" class="css-label no-margin"></label></td>
								</tr>
								
								<tr>
									<td id="td1c" class="td1"><?php echo _("Much of what we understand as flavor is actually a combination of taste and smell combined and interpreted by the brain together."); ?> </td>
									<td id="tdct" ><input id="q2ct" name="q2c" type="radio"  value="t" class="css-checkbox"><label label for="q2ct" class="css-label no-margin"></label></td>
									<td id="tdcf" ><input id="q2cf" name="q2c" type="radio"  value="f" class="css-checkbox"><label label for="q2cf" class="css-label no-margin"></label></td>
								</tr>
							</table>							
						</div>
				</section>
			</div>
		</div>

	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer checkanswer-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

<script>	
var answered = 1;
var studentAnswer = '';
var studentAnswer2 = '';
var value = '';
var ans ='';
var ans2 ='';
var ans3 ='';
var hash = window.location.hash.slice(1);
	$(document).ready(function() {	
	var val="";	/* screen transition */		
	$('a.back-toggle').click(function(){	
	if( $('#answerSpan').is(':visible') ) {	
	$('a.back-toggle').attr('href','9.php');	
	} else  {	
		$('a.back-toggle').attr('href','8.php#screen2');	
	}					
	});		
	$('a.checkanswer-toggle').click(function(e){
		
	if( $("input:radio[name=answer]").is(":checked") && $("input:radio[name=q2a]").is(":checked") && $("input:radio[name=q2b]").is(":checked") && $("input:radio[name=q2c]").is(":checked") ){	
	
		$('#q2').fadeOut();
		$('#q2 label').fadeOut();
		$('#tdaf').fadeOut();
		$('#tdbf').fadeOut();
		$('#tdcf').fadeOut();
		$('#third_head').fadeOut(function(){
			$('#answer_head').text('<?php echo _("You answered..."); ?>');
			$('#answer_head').css('width','20%');
			
		});

		$('#q1li').fadeOut();	
		$('#h1').fadeOut( function (){			
			$('#q2').fadeIn();
			$('a.back-toggle').fadeIn(); 		
			$('a.checkanswer-toggle').fadeOut(); 	
			$('a.next-toggle').fadeIn(); 	
			$('#answerSpan').fadeIn();
			checkAnswers();
		}); 				 		
	} else{ alert('<?php echo _("Please select your answers."); ?>'); e.preventDefault();
		$('#third_head').fadeIn();
		$('#q2 label').fadeIn();
		$('#tdaf').fadeIn();
		$('#tdbf').fadeIn();
		$('#tdcf').fadeIn();
		$('#answer_head').text('<?php echo _("True"); ?>');
		$('#answer_head').css('width','0');
	
		}	
	});
	});	
	
function checkAnswers() { 	
	value= $('input[type="radio"]:checked').val();	
	if (value=="A"){		
			$('.h2cr1').css('color', 'green');	
			$('.choice1').html('<?php echo _("A food’s smell is an important part of how we think it tastes. Stuffy noses have a hard time detecting smell."); ?>');	
			$('.h2cr1').html('<img src="images/others/check.png" /> <?php echo _("Correct! Most foods don’t taste very good if we can’t smell them."); ?>');	
			$('#qaAnswer').fadeIn();			
	} else if (value=="B"){
			$('.h2cr1').css('color', 'red');	
			$('.choice1').html('<?php echo _("A food’s smell is not an important part of how we think it tastes. Stuffy noses have a hard time detecting smell."); ?>');
			$('.h2cr1').html('<img src="images/others/wrong.png" /> <?php echo _("Not quite. Smell is an important part of what we think of as taste."); ?>');
			$('#qaAnswer').fadeIn();	
	} else if (value=="C"){
			$('.h2cr1').css('color', 'red');	
			$('.choice1').html('<?php echo _("A food’s smell is an important part of how we think it tastes.  Stuffy noses detect smells better than clear noses."); ?>');	
			$('.h2cr1').html('<img src="images/others/wrong.png" /><?php echo _("Read carefully... Stuffy noses don’t detect smells very well."); ?>');		
			$('#qaAnswer').fadeIn();	
	} else if(value == 'D') {  
			$('.h2cr1').css('color', 'red');	
			$('.choice1').html('<?php echo _("A food’s smell is not an important part of how we think it tastes. Stuffy noses detect smells better than clear noses."); ?>');	
			$('.h2cr1').html('<img src="images/others/wrong.png" /> <?php echo _("Sorry. Smell is important, and stuffy noses don’t work well."); ?>');	
			$('#qaAnswer').fadeIn();
	}		

		
	
	if ($('#q2at').is(':checked')){	
		$('#tdat').append('<img src="images/others/wrong.png" />');	
		ans = 'true';
	} else if ($('#q2af').is(':checked')){	
		$('#tdat').append('<img src="images/others/check.png" />');	
		ans = 'false';
	}				
	
	if ($('#q2bt').is(':checked')){	
		$('#tdbt').append('<img src="images/others/check.png" />');	
		ans2 = 'true';
			
	} else if ($('#q2bf').is(':checked')){	
		$('#tdbt').append('<img src="images/others/wrong.png" />');
		ans2 = 'false';
	}
	
	if ($('#q2ct').is(':checked')){	
		$('#tdct').append('<img src="images/others/check.png" />');	
		ans3 = 'true';
	} else if ($('#q2cf').is(':checked')){	
		$('#tdct').append('<img src="images/others/wrong.png" />');	
		ans3 = 'false';
		}	
	studentAnswer = value;
	studentAnswer2 = ans + ',' + ans2 + ',' + ans3;
		if(answered == 0){
			saveAnswer('how-animals-behave-qc3-a',studentAnswer);
			saveAnswer('how-animals-behave-qc3-b',ans);
			saveAnswer('how-animals-behave-qc3-c',ans2);
			saveAnswer('how-animals-behave-qc3-d',ans3);
			answered = 1;
		}
		
	}
	
</script>

<section id="preloader"><section class="selected"><strong><?php echo _("Another quick check on the way!"); ?></strong></section></section>
	<?php require("setlocale.php"); ?>
</body>
</html>
