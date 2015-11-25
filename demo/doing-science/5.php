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
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/5/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap { border-left: 1px dashed #AF3E46; border-right: 1px dashed #AF3E46;}
h1 { color: #61153e; padding-left: 10px;}
h2 {text-align:left; padding:0 0 0 10px; margin:0; font-weight:normal;}
p { color: black; }
.bg section{width:95%; margin:0 auto; position:relative; top:25px; min-height:100px;}
#buttons .next, #buttons img.back-toggle-screen { display:none; }
article{border:1px solid black; position:relative; top:30px;}
#checkboxes{ min-height: 150px; margin:10px 0 0 43px; }
#checkboxes ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#checkboxes li { padding: 7px 0px; }

label { margin:5px 0px !important; cursor: pointer; }

#checkboxes input[type="checkbox"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
#checkboxes input[type="checkbox"] + label span{ background: url('images/5/sprite1.png')left top no-repeat; position: relative; margin-right:5px; padding:0 0 0 30px !important; cursor: pointer; line-height: 40px; max-width: 39px; min-height: 50px; display:inline-block; z-index:0;  overflow: hidden; vertical-align:middle; margin-top:-20px;}
#checkboxes input[type="checkbox"]:checked + label span{ background-position: -30px 0; }

.resize {height:25px; vertical-align:middle;}
#radio { min-height: 150px; margin:10px 0 0 40px; position: relative; z-index: 6; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 7px 0px;}

input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"]  + label span{ background: url('images/5/sprite.png')left top no-repeat; position: relative; margin-right:5px; padding:0 0 0 29px !important; cursor: pointer; line-height: 40px; max-width: 39px; min-height: 60px; display:inline-block; z-index:0;  overflow: hidden; vertical-align:middle; margin-top:-15px; background-position-x: 2px; }
input[type="radio"]:checked + label span { background-position: -31px 0; }
#user_answer, #user_answer2{vertical-align:middle;}
#answer h2 {padding:0 0 10px 10px;}
#q-container1{width:100%; min-height:200px; margin-top:10px;}
#q-container2{width:100%; min-height:200px; }
#answer p { text-align: center; }

html[dir="rtl"] #checkboxes ul { text-align: right; }
html[dir="rtl"] #radio ul { text-align: right; }

@media all and (max-width : 800px){
	#checkboxes li { padding: 4px 0px; }
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	h1 { padding-top: 5px; }
	#radio li { padding: 3px 0; }
	#answer p { font-size: 23px; }
}
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">	
					<h1><?php echo _("Quick Check #1");?></h1>
					<h2><?php echo _("Question A. Mark <span class='bold red blink'>ALL</span> the ways that a hypothesis helps in conducting a scientific investigation.");?></h2>
					<div id="checkboxes">						
						<ul>
							<li>
								<input type="checkbox" name="chkbox" id="a" value ="A"> 
								<label for="a"><span></span>A. <?php echo _("It gives direction on how to interpret the results of experiments.");?></label>
							</li>
							<li>
								<input type="checkbox" name="chkbox" id="b" value ="B">
								<label for="b"><span></span>B. <?php echo _("It helps in making predictions and designing investigations.");?></label>
							</li>
							<li>
								<input type="checkbox" name="chkbox" id="c" value ="C">
								<label for="c"><span></span>C. <?php echo _("It helps tell a researcher what best to observe.");?></label>
							</li>
							<li>
								<input type="checkbox" name="chkbox" id="d" value ="D">
								<label for="d"><span></span>D. <?php echo _("It tells a researcher whether the investigation is right or wrong.");?></label>
							</li>							
						</ul>
					</div>
					
					<h2><?php echo _("Question B. After experimenting many times, a scientist does not get any data to support the hypothesis. What should this person do now?");?></h2>
					
					<div id="radio">						
						<ul>
							<li>
								<input type="radio" id="r1" name="choice">
								<label for="r1"><span></span>A. <?php echo _("Change the results to support the hypothesis.");?></label>
							</li>
							<li>
								<input type="radio" id="r2" name="choice">
								<label for="r2"><span></span>B. <?php echo _("Continue with the experiments until the results support the hypothesis.");?></label>
							</li>
							<li>
								<input type="radio" id="r3" name="choice">
								<label for="r3"><span></span>C. <?php echo _("Go back and rethink the hypothesis.");?></label>
							</li>
							<li>
								<input type="radio" id="r4" name="choice">
								<label for="r4"><span></span>D. <?php echo _("State the conclusion that the hypothesis has no answer.");?></label>
							</li>							
						</ul>
					</div>						
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1><?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?></h1>
					<div id="q-container1">
						<h2><?php echo _("Question A. Mark <span class='bold red blink'>ALL</span> the ways that a hypothesis helps in conducting a scientific investigation.");?>.</h2>
						<p><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id='user_answer'></span></p>
					</div>
					<div id="q-container2">
						<h2><?php echo _("Question B. After experimenting many times, a scientist does not get any data to support the hypothesis. What should this person do now?");?></h2>
						<p><?php echo _("You answered...");?></p>
						<p id="selected_answer"></p>
						<p><img src="images/others/wrong.png" id="answer-icon2" class="resize"/><span id='user_answer2'></span></p>
					</div>
				</section>
			</div>					
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check!");?></strong></section></section>
<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var studentAnswer2 = "";
var ctr = 0;
var textstr = null;	
var checkboxArr=[];
var answered = 1;
$(document).ready(function() {

	
	 /* Back Transition */
	$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
			document.location.href= "4.php#screen4";			
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('#screen1').fadeIn();				
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('h1').text('<?php echo _("Quick Check #1");?>');
					$('h1').fadeIn();
					$('#user_answer').removeClass('green');
					$('#user_answer').removeClass('red');
					$('#user_answer2').removeClass('green');
					$('#user_answer2').removeClass('red');
					studentAnswer='';
					checkboxArr=[];
					ctr=0;
			});
		}
	});

	$('a.check-toggle').click(function(e){					
			checkAnswer();
			checkAnswer2();				
			if(ctr == 2) {
				if($('#screen1').is(':visible')) { 				
						$('#screen1').fadeOut( function(){			
						$('a.check-toggle').fadeOut(function (){
						$('a.next-toggle').fadeIn();
						$('h1').text('<?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?");?>');	
						save();
						$('#answer').fadeIn();
						});
					});
				}
			}
			else { window.location.hash = '';alert("<?php echo _("Please select your answers.");?>"); ctr = 0; e.preventDefault();
			checkboxArr=[];
			window.location.hash='';}
	
	});
})
	function checkAnswer() {
		$('input[name="chkbox"]:checked').each(function() {
					 checkboxArr.push($(this).val());
				});
					
		if($('#a').is(':checked') && $('#b').is(':checked') && $('#c').is(':checked') && !$('#d').is(':checked')) {
				textstr = "<?php echo _("The first three are all reasonably correct. The second one is the best answer. But the hypothesis doesn't tell the researcher whether the investigation is right or wrong.");?>";
				$('#answer-icon').attr("src", "images/others/correct.png");
				$('#user_answer').addClass('green');
				
			}else if(!$('#a').is(':checked') && !$('#b').is(':checked') && !$('#c').is(':checked') && !$('#d').is(':checked')){
					textstr = null;
			}else {
				textstr = "<?php echo _("Not quite: A hypothesis helps make predictions and helps to design good investigations and it will help guide us to interpret the results of experiments. A hypothesis does not tell the researcher if the answer is right or wrong. The researcher conducts the investigation to see if the data and evidence supports the hypothesis or not. In a scientific investigation, a researcher should try their best to observe everything.");?>";
				$('#answer-icon').attr("src", "images/others/wrong.png");
				$('#answer-icon').addClass('img-align');
				$('#user_answer').addClass('red');
			}
			$('#user_answer').text(textstr);
			if(textstr != null){
				ctr++;
			}
	}
	function checkAnswer2() {
	var textstr2 = null;
	var selected_answer= "";
	
		if($('#r1').is(":checked")) {
			selected_answer ='A. <?php echo _("Change the results to support the hypothesis.");?>';
			textstr2 = '<?php echo _("No, this is something no one should ever do. Changing the results of any kind of experiment is wrong and can lead to serious consequences.");?>';
			$('#user_answer2').addClass('red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");
			studentAnswer2 = 'A';
		}
		else if($('#r2').is(":checked")) {
			selected_answer ='B. <?php echo _("Continue with the experiments until the results support the hypothesis.");?>';
			textstr2 = '<?php echo _("No, at this point the best thing to do is to revisit the hypothesis and change it based on the experiments and the new data collected.");?>';
			$('#user_answer2').addClass('red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");
			studentAnswer2 = 'B';		
		}
		else if($('#r3').is(":checked")) {	
			selected_answer ='C. <?php echo _("Go back and rethink the hypothesis.");?>';
			textstr2 = '<?php echo _("Correct! At this point the best thing to do is to revisit the hypothesis and change it based on the experiments and the new data collected.");?>';
			$('#user_answer2').addClass('green');
			$('#answer-icon2').attr("src", "images/others/correct.png");
			studentAnswer2 = 'C';
		} 
		else if($('#r4').is(":checked")) {
			selected_answer ='D. <?php echo _("State the conclusion that the hypothesis has no answer.");?>';
			textstr2 = '<?php echo _("No, stating that the hypothesis has no answer or cannot be proven will not solve the question or problem the scientist started out with.");?>' 
			$('#user_answer2').addClass('red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");
			studentAnswer2 = 'D';
		}		
		$('#user_answer2').text(textstr2);
		$('#selected_answer').text(selected_answer);
		
		if(textstr2 != null){ 
			ctr++;
		}		
		
}
function save(){
	studentAnswer = checkboxArr;
	if(answered == 0){	
			saveAnswer('doing-science-qc1-a', studentAnswer);
			saveAnswer('doing-science-qc1-b', studentAnswer2);		
		answered = 1;	
	}			
}	
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
