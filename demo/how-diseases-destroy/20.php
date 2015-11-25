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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/20/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #E6C760; border-right: 1px dashed #E6C760;}
h1 { color: #a85592; font-size:35px;}
h2 {color: #2d4c9c; text-align:left; padding:10px 1px 0 10px; margin:0;}
p { color: black; }
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
#user_answer {padding:0;}
.resize {height:25px;}
#user_answer{vertical-align:top;}
.allignment{text-align:left; padding: 10px 10px 0 10px; line-height:25px;}
.hexaflip {  margin:50px 0 0 50px;}
#instruction_box {float:left; margin:50px 0 0 25px; width:63%;}
#ins{color:#a85592;}
html[dir="rtl"] .hexaflip {margin: 50px 50px 0 0;}
html[dir="rtl"] .fl {float:right;}
html[dir="rtl"] #answer p {text-align: center;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.hexaflip { float: none; margin: 0 auto; }
	#instruction_box { float: none; width: auto; margin: 0; }
	html[dir="rtl"] .hexaflip { margin: 0 auto; float: none; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #5"); ?></h1>
					<h2><?php echo _("What is one reason that viral infections are difficult to eliminate?"); ?></h2>
					<p class="allignment"> 
					<?php echo _("A. Viruses change so quickly that it's hard for medicines to keep up."); ?><br/><br/>
					<?php echo _("B. Viruses do not have very capable protection and defense mechanisms."); ?><br/><br/>
					<?php echo _("C. Viruses become resistant to efforts to treat the disease they cause."); ?><br/><br/>
					<?php echo _("D. Viral infections cause no symptoms, so are more difficult to detect."); ?>
					
					</p>
					<div id="hexaflip" class="fl"></div>
					<div id="instruction_box">
						<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?>
						</p>
					</div>
					<div class="clear"></div>
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1></h1>
					<p><?php echo _("You answered..."); ?></p>
						<figure>
							<img src="" id="imganswer" />
						</figure>
					<p id="selected_answer"></p>
					<p><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id="user_answer"></span></p>
				</section>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="21.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Detecting viruses..."); ?></strong></section></section>

<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var answer = "";
var selected;
var nullAnswer = false;
var selected_answer = '';
var hexaValue;
var answered = 1;

$(document).ready(function() {
	$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
			document.location.href= "19.php";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){							
				$('a.next-toggle').fadeOut(function(){ $('a.check-toggle').fadeIn(); });
				$('h1').text('<?php echo _("Quiz Question #5"); ?>');
				$('h1').fadeIn();								
				$('a.back-toggle').attr('src','images/buttons/nextb.png');
				studentAnswer = '';
				hexaValue = '';
				$('#user_answer').removeClass('red');
				$('#user_answer').removeClass('green');
				$('#screen1').fadeIn();	
			});
		}
	});

	$('a.check-toggle').click(function(e){
		if($('#screen1').is(':visible')) {
			checkAnswer();
			$('#screen1').fadeOut( function(){
				$('a.check-toggle').fadeOut(function (){
				$('a.next-toggle').fadeIn();
				$('h1').text('<?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?>');
				$('a.back-toggle').attr('src','images/buttons/back2.png');										
				$('#answer').fadeIn();
				}); 
			});
			save();
		}
	});
	makeHexa();	
});
$(window).resize(function(){
    makeHexa();
});

function checkAnswer() {	
	var textstr  = null;
	hexaValue = hexa.getValue();
	
	if (hexaValue == './images/20/a.png') {
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#imganswer').attr("src","images/20/a.png");		
		textstr = '<?php echo _("Viruses are so small that it is difficult for medicines to find them."); ?> ';
		selected_answer = "<?php echo _("A. Viruses change so quickly that it's hard for medicines to keep up."); ?>";
		answer = 'A';
	}			
	else if (hexaValue == './images/20/b.png') {
		$('#user_answer').addClass('red');	
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#imganswer').attr("src","images/20/b.png");						
		textstr = '<?php echo _("Viruses are hard to get rid of because they become resistant to efforts to treat the disease they cause."); ?> ';
		selected_answer = '<?php echo _("B. Viruses do not have very capable protection and defense mechanisms."); ?>';
		answer = 'B';
	}			
	else if (hexaValue == './images/20/c.png') {
		$('#user_answer').addClass('green');
		$('#answer-icon').attr("src", "images/others/correct.png");
		$('#imganswer').attr("src","images/20/c.png");							
		textstr = '<?php echo _("Correct! Viruses are difficult to eliminate since they cannot be seen under a microscope and become resistant to efforts to treat the disease they cause."); ?> ';
		selected_answer = '<?php echo _("C. Viruses become resistant to efforts to treat the disease they cause."); ?> ';
		answer = 'C';
	}			
	else if (hexaValue == './images/20/d.png') {														
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#imganswer').attr("src","images/20/d.png");
		textstr = '<?php echo _("Viruses do cause many symptoms when they cause disease. They are difficult to eliminate because they become resistant to efforts to treat the disease they cause."); ?>';
		selected_answer = '<?php echo _("D. Viral infections cause no symptoms, so are more difficult to detect."); ?>';
		answer = 'D';				
	}
	
	$('#user_answer').text(textstr);
	$('#selected_answer').text(selected_answer);		
}

function save(){
	if(answered == 0) {
		saveAnswer('how-diseases-destroy-qq5-a', answer);					
		answered = 1;
	}
}
</script>
<script src="scripts/hexaflip.js"></script>
<script>
	var hexa;
	var	set1 = ['./images/20/a.png','./images/20/b.png','./images/20/c.png','./images/20/d.png'];
	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set1 }, { size: 200 });	
</script>
<?php require("setlocale.php"); ?>
</body>
</html>