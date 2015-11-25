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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<style>
.bg { background-image: url('images/14/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #A9333C; border-right: 1px dashed #A9333C;}
h1 { color: #61153e;}
h2 {text-align:left; padding:10px 0 0 10px; margin:0; font-weight:normal;}
p { color: black;}
.bg section{width:95%; margin:0 auto; position:relative; top:25px; min-height:100px;}
#screen1 p, #screen1 h2 {font-size: 20px;}
#buttons .next, #buttons img.back-toggle-screen { display:none; }
.allignment{text-align:left; padding: 10px 10px 0 10px; }
#second_p{float:left; width: 55%; margin-top:20px;}
table {float:left; margin:20px 0 0 20px; font-size:20px; font-weight:normal;}
th{padding:5px; background-color:#a8d59d; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; width:155px;}
td { padding:5px; background-color:#f59a87; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px;}
#container{  width:70%; margin:0 auto; margin-top:10px; position: relative; z-index: 6; }
#sortable { width: 45%; list-style: none;  padding: 0; margin:0 auto;}
#sortable li { background-color: #3fbcef; margin: 0 0 5px 5px !important; padding: 3px 47px 3px 37px; text-align: center; font-size: 22px; cursor: pointer; color: black;  -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
#ans {margin:0 auto;}
.resize {height:25px; vertical-align:middle;}
#user_answer{vertical-align:middle;}
#answer p {text-align:center;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	h1 { padding-top: 10px; }
	.allignment { padding: 0 10px; }
	#sortable li { margin: 0 0 5px 5px !important; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#second_p { width: 50%; }
	table { margin: 20px 0 0 0; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #1");?> </h1>
					<p class="allignment">
						<?php echo _("A group of students decided to see if different liquids evaporate at the same rate at room temperature. The students decided to test three liquids: freshwater, saltwater, and rubbing alcohol. The students poured 50 mL of each liquid into a separate beaker. All the beakers were placed next to one another on a shelf.");?>
					</p>
					<div id="second_p">
						<p class="allignment">
							<?php echo _("After two days the student used a graduated cylinder to measure the amount of liquid remaining in each breaker. The table at the right shows the result.");?>
						</p>
					</div>
					<table>
						<tr>
							<th><?php echo _("Type of Liquid");?></th>							
							<th><?php echo _("Amount of Liquid");?></th>
						</tr>
						<tr>
							<td><?php echo _("freshwater");?></td>
							<td>35.3 mL</td>							
						</tr>
						<tr>
							<td><?php echo _("saltwater");?></td>
							<td>38.6 mL</td>
						</tr>
						<tr>							
							<td><?php echo _("alcohol");?></td>
							<td>22.7 mL</td> 
						</tr>
					</table>
					
					<div class="clear"></div>								
					<h2> <?php echo _("Based on the results of the experiment, put the liquids in order from fastest evaporating liquid to slowest evaporating liquid.");?></h2>
					<div id="container">					
						<ul id="sortable">
							<li class="ui-state-default"><span data-name="A"></span><?php echo _("saltwater");?></li>
							<li class="ui-state-default"><span data-name="B"></span><?php echo _("rubbing alcohol");?></li>
							<li class="ui-state-default"><span data-name="C"></span><?php echo _("freshwater");?></li>													
						</ul>
						<div class="clear"></div>						
					</div>
					<div class="clear"></div>			
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>
					<p><br/><br/><?php echo _("You answered...");?><br/><br/></p>
					<div id="ans"></div><br/><br/>
					<p class="hidden"><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id='user_answer'></span></p>
				</section>
			</div>					
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("And the first quiz question is...");?></strong></section></section>
<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var textstr = "";
var answered = 1;

$(document).ready(function() {
	$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
			document.location.href= "13.php";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('h1').text('<?php echo _("Quiz Question #1");?>');
				$('h1').fadeIn();
				$('#sortable').appendTo('#container');
				$("#sortable" ).sortable('enable');
				$('#user_answer').removeClass('green');
				$('#user_answer').removeClass('red');
			});
		}
	});

	$('a.check-toggle').click(function(e){
		checkAnswer();			
		$('#screen1').fadeOut( function(){			
			$('a.check-toggle').fadeOut(function (){
			$('a.next-toggle').fadeIn();
			$('h1').text('<?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?");?>');
			$('#sortable').appendTo('#ans');
			$('#answer').fadeIn();
			$( "#sortable" ).sortable('disable');
			}); 
		});
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
	var sAnswer = studentAnswer.split(',');	
	if (studentAnswer == answers.join()) {
		textstr = "<?php echo _("Correct! Rubbing alcohol is the fastest evaporating of the three liquids. Freshwater is the second fastest fluid to evaporate, and the slowest evaporating liquid is saltwater.");?>";
		$('#answer-icon').attr("src", "images/others/correct.png");
		$('#user_answer').addClass('green');
		
	} else if (studentAnswer == ',B,A,C') { 
		textstr = "<?php echo _("Only the first section is correct: alcohol is the fastest evaporating of the three liquids. But freshwater evaporates faster than saltwater (35.3 mL <38.6 mL).");?>";
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#user_answer').addClass('red');
	
	} else if (studentAnswer == ',C,B,A' || studentAnswer == ',A,C,B' || studentAnswer == ',C,A,B') { 
		textstr = "<?php echo _("No, the correct order is rubbing alcohol, freshwater, saltwater.");?>";
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#user_answer').addClass('red');
	
	} else if (studentAnswer == ',A,B,C') { 
		textstr = " <?php echo _("No, the correct order is rubbing alcohol, freshwater, saltwater.");?>";
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#user_answer').addClass('red');
	
	}  else if (studentAnswer == ',B,C,A') { 
		textstr = "<?php echo _("Only the first section is correct: alcohol is the fastest evaporating of the three liquids. But freshwater evaporates faster than saltwater (35.3 mL <38.6 mL).");?>";
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#user_answer').addClass('red');
	}
	
	$('#user_answer').text(textstr);
	$('p.hidden').removeClass('hidden');
	studentAnswer ='';
		
	var sa = studentAnswer.substring(1, studentAnswer.length);
	
	if(answered ==0){
		saveAnswer('doing-science-qq1', sa);
		answered = 1;
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
