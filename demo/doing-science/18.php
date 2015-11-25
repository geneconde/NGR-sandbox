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
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/18/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #A93941; border-right: 1px dashed #A93941;}
h1 { color: #61153e;}
h2 {text-align:left; padding:0px 0 0 10px; margin:0; font-weight:normal;}
p { color: black; text-align:center;}
.bg section{width:95%; margin:0 auto; position:relative; top:25px; min-height:100px;}
#buttons .next, #buttons img.back-toggle-screen { display:none; }
.allignment{text-align:left; padding: 10px 10px 0 10px; }
#ans {margin:0 auto;}
.resize {height:25px; vertical-align:middle;}
#user_answer{vertical-align:middle;}
#choices {float:left; margin-left:93px; }
#choices img:nth-child(2) {margin-left:30px; padding-bottom:35px;}
#choices img:nth-child(3) {margin-left:20px;}
#choices img:nth-last-child(1) {margin-left:100px;}

#radio { min-height: 150px; margin:10px 0 0 43px; position: relative; z-index: 6; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 7px 0px; }

input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"]  + label span{ background: url('images/18/sprite.png')left top no-repeat; position: relative; margin-right:5px; padding:0 0 0 31px !important; cursor: pointer; line-height: 40px; max-width: 39px; min-height: 53px; display:inline-block; z-index:0;  overflow: hidden; vertical-align:middle; margin-top:-15px; }
input[type="radio"]:checked + label span { background-position: -30px 0; }	
label {font-size:22px; vertical-align:bottom; cursor: pointer; }	
.image-container {margin-left:10px; float:left; width:24%; }
#container {margin:0 auto; width:100%; }
#second_img { margin:85px 10px 0 0; width:11.5%;}
#third_img { margin:16px 10px 0 0; width:10%;}
#first_img { margin:10px 10px 0 178px; width: 25%;}
#fourth_img { margin:55px 10px 0 0; width:10%; }
#color1 {color: #61153e;}
#color2 {color: #BA4065;}
#color3 {color: #A94929;}
html[dir="rtl"] #radio li { text-align: right; }

@media all and (max-width : 1250px){
	h1 { padding-top: 10px;}
}

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #5");?> </h1>				
					<p class="allignment"><?php echo _("A student will measure and record the growth of two flowering plants every other day for 10 days.");?> </p>
					
					<div id="container">
						<div class="image-container" id="first_img">
							<img src="images/18/beans.png" />
							<p><span id="color1"><?php echo _("Fertilizer");?></span></p>
						</div>
						<div class="image-container" id="second_img">
							<img src="images/18/arrow.png" />							
						</div>
						<div class="image-container" id="third_img">
							<img src="images/18/plant2.png" />
							<p><span id="color2"><?php echo _("Plant 1");?></span></p>
						</div>
						<div class="image-container" id="fourth_img">
							<img src="images/18/plant1.png" />
							 <p><span id="color3"><?php echo _("Plant 2");?></span></p>
						</div>						
										
						<div class="clear"></div>
					</div>
			
					<h2><?php echo _("According to the diagram, which question is being tested?");?></h2>
					<div id="radio">						
						<ul>
							<li>
								<input type="radio" id="r1" name="choice">
								<label for="r1"><span></span>A. <?php echo _("Do flowering plants grow better when watered with salt water?");?></label>
							</li>
							<li>
								<input type="radio" id="r2" name="choice">
								<label for="r2"><span></span>B. <?php echo _("How much fertilizer do flowering plants need?");?></label>
							</li>
							<li>
								<input type="radio" id="r3" name="choice">
								<label for="r3"><span></span>C. <?php echo _("Does fertilizer added to the soil lead to taller flowering plants?");?></label>
							</li>
							<li>
								<input type="radio" id="r4" name="choice">
								<label for="r4"><span></span>D. <?php echo _("How tall do flowering plants grow?");?></label>
							</li>							
						</ul>
					</div>					
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>					
					<p><br/><br/><?php echo _("You answered...");?><br/><br/></p>
					
					<p id="selected_answer"></p><br/><br/>
					<p class="hidden"><img src="images/others/wrong.png" id="answer-icon" class="resize"/> <span id='user_answer'></span></p>
				</section>
			</div>					
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Adding soil to the pots...");?></strong></section></section>


<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var textstr = "";
var selected;
var selected_answer= null;
var nullAnswer = false;
var answered = 1;
$(document).ready(function() {
	 /* Back Transition */
	$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
			document.location.href= "17.php";			
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('#screen1').fadeIn();				
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('h1').text('<?php echo _("Quiz Question #5");?>');
					$('h1').fadeIn();
					$('#user_answer').removeClass('red');
					$('#user_answer').removeClass('green');		
			});
		}
	});

	$('a.check-toggle').click(function(e){
		checkNull();
		checkAnswer();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please select your answer.");?>");
			nullAnswer = false;
			selected_answer = '';
		} else {
			if($('#screen1').is(':visible')) { 				
				$('#screen1').fadeOut( function(){			
					$('a.check-toggle').fadeOut(function (){
					$('a.next-toggle').fadeIn();
					save();
					$('h1').text('<?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?");?>');				
					$('#answer').fadeIn();				
					}); 
				});
			}
		}
	});
});
function checkAnswer() {	
		
		 if($('#r1').is(":checked")) {
			selected_answer = $("input:checked + label").text();
			textstr = '<?php echo _("There is no salt water involved in the experiment. The student will measure to see if the added fertilizer leads to taller flowering plants.");?>';
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			studentAnswer = 'A';			
		}
		else if($('#r2').is(":checked")) {
			selected_answer = $("input:checked + label").text();
			textstr = '<?php echo _("The experiment is about fertilizer, but not about the amount needed, rather to see if it leads to taller flowering plants.");?>';
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			studentAnswer = 'B';	
		}
		else if($('#r3').is(":checked")) {	
			selected_answer = $("input:checked + label").text();
			textstr = ' <?php echo _("Correct! The plant on the left is getting fertilizer added to the soil, and the one on the right is not. In this experiment the student will measure to see if the fertilizer leads to taller flowering plants.");?>';
			$('#user_answer').addClass('green');
			$('#answer-icon').attr("src", "images/others/correct.png");		
			studentAnswer = 'C';
		} 
		else if($('#r4').is(":checked")) {
			selected_answer = $("input:checked + label").text();
			textstr = '<?php echo _("This statement is about measurement, which is only part of the experiment. The experiment is about how tall the plants will grow with and without fertilizer.");?>'; 
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
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
	if(answered == 0){
		saveAnswer('doing-science-qq5', studentAnswer);					
		answered = 1;	
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
