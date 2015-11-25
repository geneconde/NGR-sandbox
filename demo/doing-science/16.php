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
<style>
.bg { background-image: url('images/16/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
h1 { color: #61153e;}
h2 {text-align:left; padding:10px 0 0 10px; margin:0; font-weight:normal;}
p { color: black;}
.bg section{width:95%; margin:0 auto; position:relative; top:25px; min-height:100px;}
#buttons .next, #buttons img.back-toggle-screen { display:none; }
.allignment{text-align:left; padding: 10px 10px 0 10px; }

table {font-size:20px; margin:0 auto; margin-top:10px;}
th{padding:5px; background-color:#a8d59d; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; width:155px; font-weight:normal !important;}
td { padding:5px; background-color:#f59a87; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px;}
#ans {margin:0 auto;}
.resize {height:25px; vertical-align:middle;}
#user_answer{vertical-align:middle;}
#radio { min-height: 150px; margin:10px 0 0 43px; position: relative; z-index: 6; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 3px 0px; }

input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"]  + label span{ background: url('images/16/sprite.png')left top no-repeat; position: relative; margin-right:5px; padding:0 0 0 30px !important; cursor: pointer; line-height: 40px; max-width: 39px; min-height: 60px; display:inline-block; z-index:0;  overflow: hidden; vertical-align:middle; margin-top:-15px; background-position-x: 2px;}
input[type="radio"]:checked + label span { background-position: -31px 0; }	

label { font-size: 24px; vertical-align: bottom; cursor: pointer; }	

html[dir="rtl"] #radio li { text-align: right; }

@media all and (max-width : 1250px){
	.bg section{ position:relative; top:0;}
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	h1 { padding-top: 10px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
	#radio li { padding: 2px 0; }
	.allignment { padding: 0 10px; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #3");?> </h1>
					<p class="allignment">
						<?php echo _("The chart below shows the results of an experiment designed to study how exercise affects heart rate.");?>
					</p>
				
					<table>
						<tr>
							<th><?php echo _("Activity Stage");?></th>							
							<th><?php echo _("Heart Rate of Person A (beats per min.)");?></th>
							<th><?php echo _("Heart Rate of Person B (beats per min.)");?></th>
							<th><?php echo _("Heart Rate of Person C (beats per min.)");?></th>
						</tr>
						<tr>
							<td><?php echo _("before exercise");?></td>
							<td><?php echo _("75");?></td>
							<td><?php echo _("62");?></td>
							<td><?php echo _("70");?></td>					
						</tr>
						<tr>
							<td><?php echo _("after exercise");?></td>
							<td><?php echo _("120");?></td>
							<td><?php echo _("110");?></td>
							<td><?php echo _("130");?></td>
						</tr>						
					</table>							
					<h2><?php echo _("Which of the following statements is the best conclusion for this experiment?");?></h2>
					
					<div id="radio">						
						<ul>
							<li>
								<input type="radio" id="r1" name="choice">
								<label for="r1"><span></span>A. <?php echo _("Exercise triples a person's heart rate.");?></label>
							</li>
							<li>
								<input type="radio" id="r2" name="choice">
								<label for="r2"><span></span>B. <?php echo _("Exercise decreases a person's heart rate.");?></label>
							</li>
							<li>
								<input type="radio" id="r3" name="choice">
								<label for="r3"><span></span>C. <?php echo _("Heart rate is not affected by exercise.");?></label>
							</li>
							<li>
								<input type="radio" id="r4" name="choice">
								<label for="r4"><span></span>D. <?php echo _("Heart rate is increased by exercise.");?></label>
							</li>							
						</ul>
					</div>					
					
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>					
					<p><br/><br/><?php echo _("You answered...");?><br/><br/></p>
					<p id="selected_answer"></p><br/><br/>
					<p class="hidden"><img src="images/others/wrong.png" id="answer-icon" class="resize"/> <span id='user_answer'></span></p>
				</section>
			</div>					
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Let's exercise!");?></strong></section></section>


<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var textstr = "";
var nullAnswer = false;
var answered = 1;
$(document).ready(function() {
	 /* Back Transition */
	$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
			document.location.href= "15.php";			
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('#screen1').fadeIn();				
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('h1').text('<?php echo _("Quiz Question #3"); ?>');
					$('h1').fadeIn();
								
			});
		}
	});

	$('a.check-toggle').click(function(e){
		checkAnswer();
		checkNull();		
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please select your answer."); ?>");
			nullAnswer = false;
			selected_answer = '';
		} else {
				if($('#screen1').is(':visible')) { 				
				$('#screen1').fadeOut( function(){				
					$('a.check-toggle').fadeOut(function (){
					$('a.next-toggle').fadeIn();
					$('h1').text('<?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?>');
					$('#sortable').appendTo('#ans');
					save();
					$('#answer').fadeIn();					
					}); 
				});
			}
		}
	});
	
});
	function checkAnswer() {
		var textstr = null;
		var selected_answer = null;
		
		 if($('#r1').is(":checked")) {
			selected_answer = $("input:checked + label").text();
			textstr = "<?php echo _("The heart rates of the people were increased, but not tripled.");?>";
			$('#user_answer').css('color', 'red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			studentAnswer = 'A';
		}
		else if($('#r2').is(":checked")) {
			selected_answer = $("input:checked + label").text();
			textstr = "<?php echo _("After exercising, all the people's heart rates increased.");?>";
			$('#user_answer').css('color', 'red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			studentAnswer = 'B';
				
		}
		else if($('#r3').is(":checked")) {	
			selected_answer = $("input:checked + label").text();
			textstr = "<?php echo _("Exercise does affect a person's heart rate, it increases it.");?>";
			$('#user_answer').css('color', 'red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			studentAnswer = 'C';			
		
		} 
		else if($('#r4').is(":checked")) {
			selected_answer = $("input:checked + label").text();
			textstr = "<?php echo _("Correct! After exercising, all the people's heart rates increased.");?>"; 
			$('#user_answer').css('color', 'green');
			$('#answer-icon').attr("src", "images/others/correct.png");
			studentAnswer = 'D';
		}		
		$('#selected_answer').text(selected_answer);
		$('#user_answer').text(textstr);
		$('p.hidden').removeClass('hidden');
		
		
	}
function checkNull() {
	if(!$('#r1').is(":checked") && !$('#r2').is(":checked") && !$('#r3').is(":checked") && !$('#r4').is(":checked")) {
		nullAnswer = true;
	}
}
function save(){
	if(answered ==0){
		saveAnswer('doing-science-qq3', studentAnswer);					
		answered = 1;	
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
