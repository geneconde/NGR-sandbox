<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Doing Science");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<style>
.bg {
	background-image: url('images/9/bg.jpg');  
	background-repeat: no-repeat; 
	background-size: 100% 100%;
	width:100% !important;
	height:100%; 
	position:relative;
	overflow:hidden;
	}
.wrap {
	border-left: 1px dashed #BF4D6E;
	border-right: 1px dashed #BF4D6E;
	}
h1 { color: #780853;}
h2 {
	text-align:left; 
	margin:0; 
	font-weight:normal;
	}
p { color: black; }
.bg section{
	width:100%; 
	margin:0 auto;
	position:relative;
	top:5px; 
	min-height:100px;
	padding: 5px;
	}
#buttons .next, #buttons img.back-toggle-screen { display:none; }
article{
	border:1px solid black;
	position:relative; 
	top:30px;
	}
.resize {height:25px; vertical-align:middle;float: left;margin-top: 20px;}
#container{ width:99%; position: relative; z-index: 6; }
#choices { 
	width: 35%; 
	list-style: none; 
	float: left;
	padding: 0; 
	margin:0; 
	}
#choices li {
	line-height: 24px;
	height: 43px;
	width: 270px;
	background-color: #abd46e;
	margin: 0 0 15px 5px;
	padding: 10px 5px; 
	text-align: center; 
	color:black; 
	font-size:22px; 
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
	margin:0;
	}
#sortable {
	width: 64%; 
	list-style: none;
	float: left;
	padding: 0;
	margin:0; 
	}
#sortable li { 
	cursor: pointer;  
	line-height: 20px;
	height: 55px; 
	background-color: #f4b757;
	margin: 0 0 5px 15px !important;
	padding: 3px 4px 5px 10px;
	text-align: left; 
	color: black; 
	font-size:20px; 
	-webkit-border-radius:10px;
	-moz-border-radius:10px;
	border-radius:10px;
	margin:0;
	}
#q-container1{
	width:100%; 
	min-height:200px; 
	margin-bottom:50px;
	}
#answer h2 {padding:0 0 10px 10px;}
#ans {margin:0 auto;}
#user_answer{vertical-align:middle; font-size: 22px; }
.mtop{ margin-top:11px;}
#sortable p {font-size:20px; }
#choices p {font-size:20px; text-align:center; }
.mtop2 {margin-top:5px;}
.minus_mtop {margin-top:-5px;}
<?php if($language == "es_ES") { ?>
	ul#sortable li:nth-child(3) p { font-size: 19px; }
<?php } ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	h1 { padding-top: 5px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
	#sortable li { margin: 0 0 5px 15px !important; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 10px; }
	#choices li { width: 220px; }
	#sortable li { line-height: 17px; }
	ul#choices li { width: 200px !important; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg" >
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quick Check #3");?></h1>
					<h2><?php echo _("Match the scientific practices (left column) Eric and Jenna used in their investigation (right column) in trying to figure out whether boys or girls had the fastest reflexes.");?></h2>
					<h2><?php echo _("Drag the items on the right column up and down."); ?></h2>
					<div id="container">											
						<ul id="choices">
							<img class="resize" id="answer_icon1" src=""><li><p><?php echo _("Making observations");?></p></li>
							<img class="resize" id="answer_icon2" src=""><li><p><?php echo _("Asking a good question");?></p></li>							
							<img class="resize" id="answer_icon3" src=""><li><p><?php echo _("Designing an investigation");?></p></li>							
							<img class="resize" id="answer_icon4" src=""><li><p><?php echo _("Collecting Data");?></p></li>
							<img class="resize" id="answer_icon5" src=""><li><p><?php echo _("Making a claim about what is right");?></p></li>
							<img class="resize" id="answer_icon6" src=""><li><p><?php echo _("Supporting a claim with evidence");?></p></li>
						</ul>
						
						<ul id="sortable">
							<li class="ui-state-default"><span data-name="A"></span><p class=""><?php echo _("Telling each other who they thought was the quickest with their reflexes - boys or girls.");?></p></li>
							<li class="ui-state-default"><span data-name="B"></span><p class=""><?php echo _("Arguing whether boys or girls were quickest by telling each other what observations and data they collected.");?></p></li>
							<li class="ui-state-default"><span data-name="C"></span><p class=""><?php echo _("Making a plan on how to systematically make observations to figure out who was the quickest – boys or girls.");?></p></li>
							<li class="ui-state-default"><span data-name="D"></span><p class="mtop"><?php echo _("Watching the boys and girls play basketball.");?></p></li>
							<li class="ui-state-default"><span data-name="E"></span><p class=""><?php echo _("Measuring how far down each boy and girl caught the ruler.");?></p> </li>
							<li class="ui-state-default"><span data-name="F"></span><p class=""><?php echo _("Trying to carefully focus on one thing they were trying to find an answer to.");?></p></li>
						</ul>
						<div class="clear"></div>	
					</div>					
				</section>									
			</div>
				
			<div id="answer" class="screens">
				<section>
					<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
					<p><?php echo _("You answered..."); ?></p>
					<div id="ans"></div>	
				</section>
			</div>					
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Be a scientist...");?></strong></section></section>

<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var studentAnswer2= "";
var selected;
var answered = 1;
var nullAnswer = false;
$(document).ready(function() {
$('#choices li').css({'margin':'0 0 5px 5px'});

	 /* Back Transition */
$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "8.php#screen2";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('h1').text('<?php echo _("Quick Check #3"); ?>');
				$('h1').fadeIn();
				
				$("#sortable" ).sortable('enable');
				$('#choices').prependTo('#container');
				$('#sortable').prependTo('#container');
				$('.resize').fadeOut();
				$('#choices').css({'float':'left', 'margin':'0'});
				$('#sortable').css({'float':'right', 'margin':'0'});
				$('#sortable li').css({'height':'55px'});
				studentAnswer = "";
				$('#user_answer').removeClass('green');
				$('#user_answer').removeClass('red');
		});
	}
});

	$('a.check-toggle').click(function(){
		checkAnswer();
		
			if($('#screen1').is(':visible')) { 				
				$('#screen1').fadeOut( function(){			
					$('a.check-toggle').fadeOut(function (){
						
					$('.resize').fadeIn();
					$('a.next-toggle').fadeIn();
					$('h1').text('<?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?>');
					$('#choices').appendTo('#ans');
					$('#sortable').appendTo('#ans');
					$('#choices li').css({'margin':'0 0 5px 25px', 'height':'43px', 'width':'240px'});
					$("#sortable" ).sortable('disable');					
					$('#answer').fadeIn();
					save();
					}); 
				});						
		}
	});
	$( "#sortable" ).sortable();
	$( "#sortable" ).disableSelection();
   
});
	 
function checkAnswer() {
		var textstr = null;
		var selected_answer= null;	
		//var answers = ["","D","F","C","E","A","B"];
		var answers = ["","D","F","C","E","A","B"];
		
		$('#sortable span').each(function(index){
		    var name = $(this).data('name');
			studentAnswer = studentAnswer + ',' + name;
		});		
		
		var sAnswer = studentAnswer.split(',');		
		var sa = studentAnswer.slice(0,13);		
	
		for ( var i = 0; i < answers.length; i++ ) {
			console.log(answers[i] + " :: " + sAnswer[i]);
			if(answers[i] == sAnswer[i]) {
				$('#answer_icon' + (i)).attr('src','images/others/correct.png');
			} else {
				$('#answer_icon' + (i)).attr('src','images/others/wrong.png');
			}
		}	
	
		//if (studentAnswer == answers.join()) {
		//	textstr = "<?php echo _("Correct! Observation is looking carefully at what you already know, hypothesis is an educated guess based on your observations, an experiment is to test the hypothesis, and data analysis is examining and comparing the data from the experiment.");?>";
		//	$('#answer-icon').attr("src", "images/others/correct.png");
		//	$('#user_answer').addClass('green');
			
		//} else { 
		//	textstr = "<?php echo _("Not quite. Observation is looking carefully at what you already know, hypothesis is an educated guess based on your observations, an experiment is to test the hypothesis, and data analysis is examining and comparing the data from the experiment.");?>";
		//	$('#answer-icon').attr("src", "images/others/wrong.png");				
		//	$('#user_answer').addClass('red');
		//}
		$('#user_answer').text(textstr);
		
	}

function save(){
	if(answered == 0){
		var sa = studentAnswer.substring(1, studentAnswer.length);
		saveAnswer('doing-science-qc3', sa);	
	}
	answered = 1;		
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
