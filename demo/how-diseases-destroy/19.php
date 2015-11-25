<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform-default.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform-component.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/nlform-modernizr.custom.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/19/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; overflow:hidden;}
.wrap {border-left: 1px dashed #95F274; border-right: 1px dashed #95F274;}
h1 { color: #3c661f; font-size:35px;}
h2 {color: #2d4c9c; text-align:left; padding:10px 1px 0 10px; margin:0;}
p { color: black; font-size: 22px; }
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
.resize {height:25px;}
#user_answer{vertical-align:top; padding:0;}
.alignment{text-align:left; padding: 10px 10px 0 10px;}
#note{
	width:49%;
	min-height:210px;
	margin:0 auto; 
	padding-top:10px;
	background-image: url('images/19/note.png');
	background-repeat:no-repeat; 
	background-size:100% 100%;
	float:none;
	}
.small_font{font-size:18px; color: #6e509a; padding:20px 0 0 21px;}
.large_font{color:black;}
.colorize{color:#304c9b;}
#selected_answer1 {color:#6e509a;}
#selected_answer2 {color:#6e509a;}


.nl-form {
width: 100%;
margin: 0 auto 0 auto;
font-size: 3em;
line-height: 1.5;
position: relative; z-index: 6;
}
a:hover, a:active {
color: #F09F3F;
}
.nl-field-toggle, .nl-form input, .nl-form select {
line-height: inherit;
display: inline-block;
color: #304C9B;
cursor: pointer;
border-bottom: 1px dashed #304C9B;
}
.nl-field ul {
position: absolute;
visibility: hidden;
background: #76C3BD;
margin-top: -55px;
}
#qa{padding:0;}
html[dir="rtl"] #note {width: 53%;}
html[dir="rtl"] .small_font {margin-right: 17px;}
html[dir="rtl"] #answer p {text-align: center;}
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1 id="heading"><?php echo _("Quiz Question #4"); ?></h1>
					
					<div id="content">
					<p class="alignment"> 
						<?php echo _("A lab technician was monitoring the growth of a bacterial culture in an ideal environment with plenty of food and space to grow as part of an experiment. After each bacterial generation she would count the number of bacterial cells present. She did this for 5 generations. Below is the data she recorded."); ?>	</p>
					</div>
					<div id="note" class="fr">
						<p class="small_font">
						<?php echo _("Generation 0 = 100 bacterial cells"); ?> <br/>
						<?php echo _("Generation 1 = 200 bacterial cells"); ?> <br/>
						<?php echo _("Generation 2 = 400 bacterial cells"); ?> <br/>
						<?php echo _("Generation 3 = 600 bacterial cells"); ?> <br/>
						<?php echo _("Generation 4 = 1600 bacterial cells"); ?><br/>
						<?php echo _("Generation 5 = 3200 bacterial cells"); ?><br/>						
						</p>
					</div>
					<div class="clear"></div>				
					<p class="alignment">
						<?php echo _("Later she checked over her data again and realized that the data did not match the expected pattern for bacterial growth. She thoroughly checked every part of the procedure to be sure nothing was affecting the growth of the bacteria. Finally she realized that she just made a simple error when recording the data."); ?>
						<br /><span class="colorize"> <?php echo _("Using what you now know about how bacteria reproduce, can you locate the error in the data and state what the expected bacterial cell count should be?"); ?>						
						</span>
					</p>
					<form id="nl-form" class="nl-form">
						<h1 id="qa" class="large_font centered"><?php echo _("Generation"); ?> 
						<select id="my_select1">
							<option value="0" selected>&#60; <?php echo _("select"); ?> &#62;</option>
							<option value="1"><?php echo _("1"); ?></option>
							<option value="2"><?php echo _("2"); ?></option>
							<option value="3"><?php echo _("3"); ?></option>
							<option value="4"><?php echo _("4"); ?></option>
							<option value="5"><?php echo _("5"); ?></option>
						</select>
						= 
						<select id="my_select2">
							<option value="1" selected>&#60; <?php echo _("select"); ?> &#62;</option>
							<option value="2"><?php echo _("500"); ?></option>
							<option value="3"><?php echo _("700"); ?></option>
							<option value="4"><?php echo _("800"); ?></option>
							<option value="5"><?php echo _("900"); ?></option>
							<option value="6"><?php echo _("1000"); ?></option>
						</select>
						<?php echo _("cells."); ?></h1>
						<div class="nl-overlay"></div>
					</form>
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1 id="heading2" class="hidden"><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1><br/><br/>
					<p><?php echo _("You answered..."); ?></p>
						
					<p><?php echo _("Generation"); ?> <span id="selected_answer1" class="bold"></span> <?php echo _("with"); ?> <span id="selected_answer2" class="bold"></span> <?php echo _("cells."); ?></p>
					<p><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id="user_answer"></span></p>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Recording data..."); ?></strong></section></section>

<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var selected;
var selected_answer1 = '';
var selected_answer2 = '';
var txtstr = null;
var nullAnswer = false;
var answered = 1;
$(document).ready(function() {

	 /* Back Transition */
$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "18.php";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){							
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#heading h1').text('<?php echo _("Quiz Question #4"); ?>');				
				$('a.back-toggle').attr('src','images/buttons/nextb.png');
				$('#user_answer').removeClass('green');
				$('#user_answer').removeClass('red');
				$('#screen1').fadeIn();	
				selected_answer1 = '';
				selected_answer2 = '';
				$('#heading2').addClass('hidden');
		});
	}
});

	$('a.check-toggle').click(function(e){
		selected_answer1 = $('#my_select1 option:selected').text();
		selected_answer2 = $('#my_select2 option:selected').text();
		checkAnswer();
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please select your answer."); ?>");
			nullAnswer = false;
			selected_answer1 = '';
			selected_answer2 = '';
		} else {
			if($('#screen1').is(':visible')) { 				
				$('#screen1').fadeOut( function(){	
					$('a.check-toggle').fadeOut(function (){
					$('a.next-toggle').fadeIn();
					$('#heading2').removeClass('hidden');								
					$('a.back-toggle').attr('src','images/buttons/back2.png');
					$('#answer').fadeIn();
					save();
					}); 
				});
			}
		}
	});		
});

function checkAnswer(){
	$('#selected_answer1').html(selected_answer1);
	$('#selected_answer2').html(selected_answer2);
	if(selected_answer1 == '3' && selected_answer2 == '800'){
		$('#user_answer').addClass('green');
		$('#answer-icon').attr("src", "images/others/correct.png");
		txtstr = '<?php echo _("Correct! The error is in Generation 3 because it should be double the count in the second generation (400x2 = 800) and half of the generation after it (1600 /2= 800)."); ?>'; 
	}
	else {
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
		txtstr = '<?php echo _("Not quite. The error is in Generation 3 because it should be double the count in the second generation (400x2 = 800) and half of the generation after it (1600 /2= 800)."); ?>';
	}
	 $('#user_answer').text(txtstr);	
}
function checkNull() {

	if(selected_answer1 == '< select >' || selected_answer2 == '< select >') {
		nullAnswer = true;
	}
	if($('#my_select1').val() == 0 || $('#my_select2').val() == 1) {
		nullAnswer = true;
	}
}
function save(){
	if(answered == 0) {
		saveAnswer('how-diseases-destroy-qq4-a', selected_answer1);					
		saveAnswer('how-diseases-destroy-qq4-b', selected_answer2);					
		answered = 1;
	}	
}
</script>
<script src="scripts/nlform.js"></script>
<script>
	var nlform = new NLForm( document.getElementById( 'nl-form' ) );
</script>
<?php require("setlocale.php"); ?>
</body>
</html>