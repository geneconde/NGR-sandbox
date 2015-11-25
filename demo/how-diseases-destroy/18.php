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
body { display: none; overflow: hidden; }	
.bg { background-image: url('images/18/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #77EEF0; border-right: 1px dashed #77EEF0;}
h1 { color: #a85592; font-size:35px;}
h2 {color: #2d4c9c; text-align:left; padding:10px 1px 0 10px; margin:0;}
p { color: black; }
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
.resize {height:25px;}
#user_answer{vertical-align:middle; padding: 0 0 0 10px;}
.alignment{text-align:left; padding: 10px 10px 0 10px; line-height:25px;}
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
					<h1><?php echo _("Quiz Question #3"); ?></h1>
					<h2><?php echo _("Which best describes the purpose of antimicrobial agents?"); ?></h2>
					<p class="alignment"> 
					<?php echo _("A. They reduce the harmful effects of toxic chemicals on the body."); ?><br/><br/>
					<?php echo _("B. They destroy or prevent the growth of disease-causing microbes."); ?><br/><br/>
					<?php echo _("C. They encourage microorganisms to produce more antibiotics."); ?><br/><br/>
					<?php echo _("D. They act like a vaccine to help our bodies recognize and fight off viral infections."); ?>
					
					</p>
					<div id="hexaflip" class="fl"></div>
					<div id="instruction_box">
						<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>
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
			</div>
			
		</div>
	</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Fighting bacteria..."); ?></strong></section></section>

<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var answer = "";
var selected;
var answered = 1;
$(document).ready(function() {
	if(hash != "") {
	$('.screens').hide();
	$('#'+hash).show(function () {
	
		var screen = hash[hash.length -1];
			if(screen < screenCount) {
			$('a.back-toggle').delay(300).fadeIn();
			$('a.check-toggle').parent().attr('href','#screen' + screen);
		
		} else {
			$('a.back-toggle').delay(300).fadeIn();
			$('a.check-toggle').fadeOut(function(){
				$('a.next-toggle').fadeIn();
				});
			}
		});
	}
	
	 /* Back Transition */
$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "17.php";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){								
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('h1').text('<?php echo _("Quiz Question #3"); ?>');
				$('h1').fadeIn();
				$('a.back-toggle').attr('src','images/buttons/nextb.png');
				$('#screen1').fadeIn();
		});
	}
});

	$('a.check-toggle').click(function(){			
		$('#screen1').fadeOut( function(){			
			$('a.check-toggle').fadeOut(function (){
				$('a.next-toggle').fadeIn();
				$('h1').text('<?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?>');
				$('a.back-toggle').attr('src','images/buttons/back2.png');
				$('#answer').fadeIn();
				checkAnswer();
				save();
			}); 
		});
	});
	makeHexa();	
});
$(window).resize(function(){
    makeHexa();
});

function checkAnswer() {	
	var textstr  = null;
	var selected_answer = null;
	var hexaValue = hexa.getValue();

	if (hexaValue == './images/18/a.png') {
		$('#user_answer').css('color','red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#imganswer').attr("src","images/18/a.png");							
		textstr = '<?php echo _("Some antimicrobial agents, like bleach and iodine, are chemicals that can stop or destroy microbes."); ?>';
		selected_answer = '<?php echo _("A. They reduce the harmful effects of toxic chemicals on the body."); ?>';
		answer = "A";
	}			
	else if (hexaValue == './images/18/b.png') {
		$('#user_answer').css('color','green');	
		$('#answer-icon').attr("src", "images/others/correct.png");
		$('#imganswer').attr("src","images/18/b.png");						
		textstr = '<?php echo _("Correct! Antimicrobial agents destroy or prevent the growth of disease causing microbes."); ?>';
		selected_answer = '<?php echo _("B. They destroy or prevent the growth of disease-causing microbes."); ?>';
		answer = "B";
	}			
	else if (hexaValue == './images/18/c.png') {
		$('#user_answer').css('color','red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#imganswer').attr("src","images/18/c.png");							
		textstr = '<?php echo _("Some microorganisms produce antimicrobial agents that destroy microbes."); ?> ';
		selected_answer = '<?php echo _("C. They encourage microorganisms to produce more antibiotics."); ?>';
		answer = "C";
	}			
	else if (hexaValue == './images/18/d.png') {														
		$('#user_answer').css('color','red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#imganswer').attr("src","images/18/d.png");
		textstr = '<?php echo _("Antimicrobial agents do not work like a vaccine in our bodies. They destroy or prevent the growth of disease-causing microbes."); ?>';
		selected_answer = '<?php echo _("D. They act like a vaccine to help our bodies recognize and fight off viral infections."); ?>';
		answer = "D";		
	}
	
	$('#user_answer').text(textstr);
	$('#selected_answer').text(selected_answer);
}

function save(){
	if(answered == 0) {
		saveAnswer('how-diseases-destroy-qq3-a', answer);										
		answered = 1;
	}	
}
</script>
<script src="scripts/hexaflip.js"></script>
<script>
	var hexa;
	var	set1 = ['./images/18/a.png','./images/18/b.png','./images/18/c.png','./images/18/d.png'];
	hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set1 }, { size: 200 });
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
