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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/17/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #8FEA6F; border-right: 1px dashed #8FEA6F;}
h1 { color: #3c661f; font-size:35px;}
h2 {color: #2d4c9c; text-align:left; padding:10px 1px 0 10px; margin:0;}
p { color: black; }
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
.green {color:green;}
.red {color:red;}
#user_answer {padding:0; vertical-align:top;}
.no-pad{padding:0;}
figure img:hover {cursor: pointer;}
.resize {height:25px;}

.allignment{text-align:left; padding: 10px 10px 0 10px; line-height:25px;}

#container{  width:70%; margin:0 auto;}
#sortable { width: 45%; list-style: none; float: left; padding: 0; margin:0; margin-left:10px; position: relative; z-index: 6;}
#sortable li { background-color: #6b96ce; margin: 0 0 5px 5px !important; padding: 3px 47px 3px 37px; text-align: center; font-size: 22px; cursor: pointer; color: black;  -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}

#choices {width: 50%; list-style: none; float: left; padding: 0; margin:0; }
#choices li { background-color: #f5a0bd; margin: 0 0 5px 35px !important; padding: 3px 47px 3px 37px; text-align: center; font-size: 22px; color: black;  -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}

#choices img{
	display: none;
	height: 30px;
	margin-left: -5px;
	float: left;	
	width: 30px;
}
#ans{margin:0 auto; width:70%; margin:50px 0 0 130px; float:left;}
#answer p { text-align: left; margin-left: 30px; }

html[dir="rtl"] #choices {width: 52%;}
html[dir="rtl"] #answer p {text-align: right;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#choices { width: 54%; }
	#sortable { width: 42%; }
	html[dir="rtl"] #container { width: 90%; }
	html[dir="rtl"] #ans { width: 85%; margin: 50px 0 0 80px; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #2"); ?></h1>
					<p class="allignment"><?php echo _("Three different microorganisms were collected under the following circumstances:"); ?><br/> <br/>
					   <?php echo _("Microorganism 1 was collected from a throat swab taken after a person went to the doctor because of a sore throat. It has a simplistic structure and flagella."); ?><br/><br/>
					   
					   <?php echo _("Microorganism 2 was found when testing a blood sample from a person that had recently become very ill. When viewed under a microscope, many organelles are visible within the single-celled organism."); ?><br/><br/>
					   
					   <?php echo _("Microorganism 3 can cause potentially serious disease and the best way to counter it is by providing vaccines to people before they become infected. Though it is too small to be seen by a light microscope, its presence was detected when a tissue sample showed many altered and damaged cells."); ?>									
					</p>			
					<h2><?php echo _("Match each microorganism with its name by dragging the items in the right column up or down."); ?></h2>
					<div id="container">
						<ul id="choices">
							<li><?php echo _("Microorganism 1"); ?></li>
							<li><?php echo _("Microorganism 2"); ?></li>
							<li><?php echo _("Microorganism 3"); ?></li>							
						</ul>						
						<ul id="sortable">
							<li class="ui-state-default"><span data-name="A"></span><?php echo _("Virus"); ?></li>
							<li class="ui-state-default"><span data-name="B"></span><?php echo _("Bacteria"); ?></li>
							<li class="ui-state-default"><span data-name="C"></span><?php echo _("Eukaryotes"); ?></li>													
						</ul>							
					</div>
					<div class="clear"></div>								
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1></h1>					
					<div id="ans">
						<ul id="choices">
							<img id="answer_icon1" src="" ><li><?php echo _("Microorganism 1"); ?></li>
							<img id="answer_icon2" src="" ><li><?php echo _("Microorganism 2"); ?></li>
							<img id="answer_icon3" src="" ><li><?php echo _("Microorganism 3"); ?></li>							
						</ul>												
					</div>
					<div class="clear"></div> <br/>
						<p class="allignment"><?php echo _("Microorganism 1 is Bacteria with a simplistic structure and flagella."); ?></p>
						<p class="allignment"><?php echo _("Microorganism 2 is a Eukaryotic Parasite. This microorganism is neither bacteria, nor a virus."); ?></p>
						<p class="allignment"><?php echo _("Microorganism 3 is a Virus. It is too small to be seen by a light microscope and can cause potentially serious disease."); ?></p>


					
					
				</section>
			</div>
			
		</div>
	</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Collecting microorganisms..."); ?></strong></section></section>

<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var selected;
var nullAnswer = false;
var answered = 1;
var sAnswer = [];
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
			document.location.href= "16.php";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){	
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				
				$('h1').text('<?php echo _("Quiz Question #2"); ?>');
				$('h1').fadeIn();
				$('a.back-toggle').attr('src','images/buttons/nextb.png');
				$('#sortable').appendTo('#container');
				$('#user_answer').removeClass('green');
				$('#user_answer').removeClass('red');
				$( "#sortable" ).sortable('enable');
				$('#screen1').fadeIn();
				studentAnswer ='';				
		});
	}
});

	$('a.check-toggle').click(function(e){
		checkAnswer();		
		if($('#screen1').is(':visible')) {				
			$('#screen1').fadeOut( function(){				
				$('a.check-toggle').fadeOut(function (){
				$('a.next-toggle').fadeIn();
				$('h1').text('<?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?>');
				$( "#sortable" ).sortable('disable');
				$( "#sortable" ).disableSelection();
				$('a.back-toggle').attr('src','images/buttons/back2.png');
				$('#answer').fadeIn();
				}); 
			});			
		}
		save();
	});

$( "#sortable" ).sortable({ scroll: false, containment: "#sortable" });
$( "#sortable" ).disableSelection();		
});

function checkAnswer() {	
		var answers = ["","B","C","A"];
		$('#sortable span').each(function(index){
		    var name = $(this).data('name');
			studentAnswer = studentAnswer + ',' + name;
		});
		
		sAnswer = studentAnswer.split(',');
		
		for ( var i = 0; i < answers.length; i++ ) {
			if(answers[i] == sAnswer[i]) {
				$('#answer_icon' + (i)).attr('src','images/others/correct.png');
			} else {
				$('#answer_icon' + (i)).attr('src','images/others/wrong.png');
			}
		}
		
		$('#choices img').css('display','inline-block');
		$('#sortable').appendTo('#ans');
		var textstr = "";
		if (studentAnswer == answers.join()) {
			textstr = "<?php echo _("Great job, you labeled the bacteria cell correctly. The cell wall helps the bacterium maintain its shape. The extra layer consisting of a capsule helps protect the cell and allows it to stick to surfaces. Pili  help them attach to other bacteria or surfaces. The cytoplasm is within the cell wall and membrane. The nucleoid contains the bacterium's DNA. Tentacle like structures called flagella help some bacteria move."); ?>";
			$('#answer-icon').attr("src", "images/others/correct.png");
			$('#user_answer').addClass('green');
			$('#user_answer').text(textstr);
		} else { 
			textstr = "<?php echo _("Not quite. The cell wall helps the bacterium maintain its shape. The extra layer consisting of a capsule helps protect the cell and allows it to stick to surfaces. Pili  help them attach to other bacteria or surfaces. The cytoplasm is within the cell wall and membrane. The nucleoid contains the bacterium's DNA. Tentacle like structures called flagella help some bacteria move."); ?>";
			$('#answer-icon').attr("src", "images/others/wrong.png");			
			$('#user_answer').text(textstr);
			$('#user_answer').addClass('red');
		}
}

function save(){
	if(answered == 0) {
		saveAnswer('how-diseases-destroy-qq2-a', sAnswer[1]);					
		saveAnswer('how-diseases-destroy-qq2-b', sAnswer[2]);					
		saveAnswer('how-diseases-destroy-qq2-c', sAnswer[3]);					
		answered = 1;
	}	
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
