<?php 
	require_once("../tempsession.php"); 
	$_SESSION['cmodule'] = 'life-cycle-of-plants';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Life Cycle of Plants");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/style2.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/modernizr.custom.79639.js"></script>
<script src="scripts/modernizr.custom.63321.js"></script>

<script>
var selected ='';
var selected2 ='';
var studentAnswer ='';
var studentAnswer2 ='';
var answered = 1;
var feedback ='';
var feedback2 ='';
var questionB_Answer='';
var hash = window.location.hash.slice(1);
var screenCount = 2;
var nullAnswer = false;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });	
	
	//Screen Transition
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
			document.location.href= "6.php#screen2";			
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					//$('.bg').css('background','url("images/7/bg.jpg")');
					$('#screen1').fadeIn();				
					$('a.next-toggle').fadeOut();
					$('a.check-toggle').fadeIn();
					//$('#sun').fadeIn();
					$('h1').html('<?php echo _("Quick Check #2"); ?>');
					$('#user_answer').removeClass('green');
					$('#user_answer').removeClass('red');
					$('#user_answer2').removeClass('green');
					$('#user_answer2').removeClass('red');
								
			});
		}
	});

	$('a.check-toggle').click(function(e){
		checkAnswer();
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert('<?php echo _("Please select your answer.");?>');
			nullAnswer = false;
			$('#user_answer').removeClass('green');
			$('#user_answer').removeClass('red');
			$('#user_answer2').removeClass('green');
			$('#user_answer2').removeClass('red');
		} else {
			if($('#screen1').is(':visible')) { 				
				$('#screen1').fadeOut( function(){					
					$('#answer').fadeIn("slow");
					$('a.check-toggle').fadeOut(function (){
					$('a.next-toggle').fadeIn();					
					//$('#sun').fadeOut();
					$('h1').html('<?php echo _("Quick Check #2")?> - <?php echo _("How did I do?");?>');
					
					}); 
				});
			}
		}
	});
	//End
	
	$('#first-dd .cd-dropdown ul li span').live('click',function(){
		selected = $(this).html(); 
	});
	
	$('#second-dd .cd-dropdown ul li span').live('click',function(){
		selected2 = $(this).html(); 
	});
});


function checkAnswer() {
	studentAnswer = selected + ',' + selected2;
	if(studentAnswer == '<?php echo _("stamen"); ?>,<?php echo _("pollen"); ?>'){
		feedback = '<?php echo _("Correct. The anther is part of the stamen, which makes pollen. Pollen has to find its way to a pistil and reach the egg, which is called pollination.");?>';
		$('#user_answer').addClass('green');
		$('#answer-icon').attr("src", "images/misc/correct.png");
	
	} else {
		feedback = '<?php echo _("Not quite. The anther is part of the stamen, which makes pollen. Pollen has to find its way to a pistil and reach the egg, which is called pollination.");?>';
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/misc/wrong.png");
	}
	
	if($('#r1').is(":checked")) {
		feedback2 = '<?php echo _("No, a seed grows and sprouts into a seedling through the process of germination. Pollination is when pollen is transferred to the egg to eventually form a seed.");?>';
		$('#user_answer2').addClass('red');
		$('#answer-icon2').attr("src", "images/misc/wrong.png");
		questionB_Answer = $("input:checked + label").text();
		studentAnswer2 = 'A';
		
	 } else if($('#r2').is(":checked")){
		feedback2 = '<?php echo _("Correct. Pollination is when pollen is transferred to the egg to eventually form a seed.");?>';
		$('#user_answer2').addClass('green');
		$('#answer-icon2').attr("src", "images/misc/correct.png");
		questionB_Answer = $("input:checked + label").text();
		studentAnswer2 = 'B';
	 
	 } else if($('#r3').is(":checked")){
		feedback2 = '<?php echo _("No, a seed grows and sprouts into a seedling through the process of germination. Pollination is when pollen is transferred to the egg to eventually form a seed.");?>';
		$('#user_answer2').addClass('red');
		$('#answer-icon2').attr("src", "images/misc/wrong.png");
		questionB_Answer = $("input:checked + label").text();
		studentAnswer2 = 'C';
	 
	 } else if($('#r4').is(":checked")){
		feedback2 = '<?php echo _("No. Pollination is when pollen is transferred to the egg to eventually form a seed.");?>';
		$('#user_answer2').addClass('red');
		$('#answer-icon2').attr("src", "images/misc/wrong.png");
		questionB_Answer = $("input:checked + label").text();
		studentAnswer2 = 'D';
	 }	
		
	if(selected != 'stamen'){
		$('#answer-icon3').attr("src", "images/misc/wrong.png");
	} else {
		$('#answer-icon3').attr("src", "images/misc/correct.png");
	}
	
	if(selected2 != 'pollen'){
		$('#answer-icon4').attr("src", "images/misc/wrong.png");
	} else {
		$('#answer-icon4').attr("src", "images/misc/correct.png");
	}
	
	
	$('#user_answer').text(feedback);
	$('#selected_answer1').text(selected);
	$('#selected_answer2').text(selected2);
	$('#user_answer2').text(feedback2);
	$('#questionB_Answer').text(questionB_Answer);
	
	if(answered == 0){
		saveAnswer('life-cycle-of-plants-qc2-a', studentAnswer);	
		saveAnswer('life-cycle-of-plants-qc2-b', studentAnswer2);									
		answered = 1;	
	}
}
function checkNull() {
	if(selected == "" || selected2 == "") {
		nullAnswer = true;
	} 
}


</script>
<style>
html { background-color: #E9F5FC; }
body { display: none; background-color: #FFFFFF; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/7/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative;overflow:hidden;}
.clear { clear:both;}
.hidden{display:none;}
.green {color: green;}
.red {color: red;}
.key{color: rgb(42, 111, 165);}
.black {color: #000000 !important;}
.question_color {color:darkcyan !important;}
#question { font-size: 35px }
#question p{ color: grey }
#question input{ height: 35px; font-size: 33px; width: 170px }
#choices1 { text-align: center }
#choices1 li { color: white; padding-left: 10px; padding-right: 10px; display: inline-block; font-size: 20px !important; background: #809F01; border-radius: 5px;}
#choices1 li a:hover{background: #809F01; opacity:0.7; }
#choices2 input {  width: 15px; height: 20px; }
#choices2 {margin:20px 0 0 140px;}
#choices2 li { color: #000000; padding-left: 10px; font-size: 25px; list-style-type: none; margin-left: 22%; line-height: 50px;}
.show { color: #dd2222 }


@-webkit-keyframes infinite-spinning {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}
@-moz-keyframes infinite-spinning {
    from { -moz-transform: rotate(0deg); }
    to { -moz-transform: rotate(360deg); }
}
@-webkit-keyframes infinite-spinning {
    from { -webkit-transform: rotate(0deg); }
    to { -webkit-transform: rotate(360deg); }
}
#sun {
	height: 33%;
	position: absolute;
	margin-left: 78%;
	margin-top: -7%;
	width: 35%;
	z-index: 0 !important;
	background:url("images/misc/sun.png") no-repeat center;
     -webkit-animation: infinite-spinning 5s infinite;
     -moz-animation: infinite-spinning 5s infinite;
     -o-animation: infinite-spinning 5s infinite;
}

input[type="radio"] { display:none; }  
input[type="radio"] + label { font-size:24px; } 
input[type="radio"] + label span {
    display:inline-block;
    width:30px;
    height:30px;
    margin:-1px 4px 0 0;
    vertical-align:middle;
    background:url('images/7/unchecked.png') no-repeat;
    cursor:pointer;
}

input[type="radio"]:checked + label span { background:url('images/7/checked.png') no-repeat; }

.mbottom{ margin-bottom:35px;}
.mbottom2{margin-bottom:20px;}
.question-container{width:95%; margin:55px 0 0 110px;}
.center{margin:0 auto;}
.centered{text-align:center;}
#question-container2{width:95%;}

#choices { margin-top: 1%;  width:90%; margin:0 auto; text-align: center;}
#choices li { color: #1b8931; display: inline-block; font-size: 20px !important; width:150px; height:30px; margin-bottom:10px;}
#choices li a{ text-decoration:none;}

#choices div {border-radius: 5px; }
.question-box{width:80%;margin:0 auto;min-height:103px; margin:20px 0 40px 0;}
#answer{display: none; text-align: center;  width: 100%;  margin-top: 0%;padding:0px 10px 0px 10px;}
#screen1{ max-width: 95%; margin: 0 auto;}

.allignment{margin-top:21px; padding-left:17px; font-size:35px; color:#592D10;}
.f-size{font-size:24px !important;padding-left:17px;}
.f-weight{font-weight:normal!important;}

.mtop{margin-top:70px;}
h2, p{ font-size:24px; font-weight:normal; }
.q-color{color:lightcoral; }
.align-left{text-align:left;}
.fr {float:right;}

.fl{float:left;}
.padleft{padding-left:8px; text-align:left;}
#answer_container {width:100%; margin:0 auto; margin-top:35px; padding-right: 10px;}
#user_answer, #user_answer2, #answer-icon, #answer-icon2, #answer-icon3, #answer-icon4 {vertical-align:middle;}
.mleft{margin-left:10px !important;}
.orange { color: orange; }
.purple { color: purple; }
#first-dd {z-index:999; position:relative; margin-left:1px;}
#second-dd {z-index:899; position:relative; margin-right: 10px;}
.cd-dropdown ul li span {line-height: 40px; font-weight: 700; }
.cd-dropdown > span { height: 40px; line-height: 42px; }
.cd-dropdown > span:after { top:0%;}
.cd-dropdown > span, .cd-dropdown ul li:nth-last-child(-n+3) span {
	box-shadow: 0 1px 1px rgba(0,0,0,0.1);
	height: 40px;
}
.cd-dropdown, .cd-select {margin: -11px 0 0 0; }

html[dir="rtl"] h1 { padding-right: 20px !important; position: relative; z-index: 5; }
html[dir="rtl"] #sun { right: 670px; top: 8px; }
html[dir="rtl"] #choices2 { margin-right: 140px; margin-left: 0; }
html[dir="rtl"] #choices2 li { margin-left: 0; }
html[dir="rtl"] #answer .padleft { text-align: right; }

<?php if ($language == 'zh_CN'): ?>
	#second-dd { margin-right: 147px; }
<?php endif; ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="rtl"] .f-weight { float: right !important; }
	html[dir="rtl"] #first-dd { margin-left: -60px; }
	html[dir="rtl"] h2.fl { float: right; }
	html[dir="rtl"] #sun { right: 530px; }
	.question-container { margin: 55px 0 0 0; }
	#second-dd { margin-right: -80px; }
}
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="sun"></div>								
						<h1 class="allignment"><?php echo _("Quick Check #2");?></h1>					
					<div id="screen1" class="screens">
						<br/><br/>
						<h2 class="question_color"><?php echo _("Question A. Select the best answer from the drop down list.");?></h2>
						<div class="question-container">														
							<div class="question-box">
								<h2 class="f-weight" style="text-align:center !important; float:left;"><?php echo _("The anther is part of the");?></h2>								
								<div id="first-dd" class="fleft">
									<select id="cd-dropdown" class="cd-select">
											<option id="select1" value="-1">&#60; <?php echo _("Select here");?> &#62;</option>
											<option id="pollen" value="pollen"><?php echo _("pollen");?></option>
											<option id="pistil" value="pistil"><?php echo _("pistil");?></option>
											<option id="stamen" value="stamen"><?php echo _("stamen");?></option>
											<option id="petal" value="petal"><?php echo _("petal");?></option>
											<option id="pollination" value="pollination"><?php echo _("pollination");?></option>
									</select>
								</div><br/><br/><br/><br/>		
						 
								 <h2 class="fl"><?php echo _("The anther's function is to produce");?></h2>
									<div id="second-dd" class="fr">
										<select id="cd-dropdown2" class="cd-select">
											<option id="select2" value="-1" selected>&#60; <?php echo _("Select here");?> &#62;</option>
											<option id="pollen1" value="pollen1"><?php echo _("pollen");?></option>
											<option id="pistil1" value="pistil1"><?php echo _("pistil");?></option>
											<option id="stamen1" value="stamen1"><?php echo _("stamen");?></option>
											<option id="petal1" value="petal1"><?php echo _("petal");?></option>
											<option id="pollination1" value="pollination1"><?php echo _("pollination");?></option>
										</select>
									</div>	
								<div class="clear"></div>
							 </div>											
						</div>
						<div class="clear"></div>
						<div id="question-container2">
							<h2 class="question_color"><?php echo _("Question B. To make a seed, pollen has to find its way to a pistil and travel down to reach the egg. What is this process called?");?></h2>
					
							<div id="choices2"> 
								<ul>
									<li><input type="radio" id="r1" name="rr" />
									<label for="r1"><span></span><?php echo _("Germination");?></label></li>
									
									<li><input type="radio" id="r2" name="rr" />
									<label for="r2"><span></span><?php echo _("Pollination");?></label></li>
									
									<li><input type="radio" id="r3" name="rr" />
									<label for="r3"><span></span><?php echo _("Both of the above");?></label></li>
									
									<li><input type="radio" id="r4" name="rr" />
									<label for="r4"><span></span><?php echo _("Neither of the above");?></label></li>						
								</ul>													
							</div>
						</div>									
					</div>				
		
			<div id="answer" class="screens">
				<div id="answer_container">
					<h2 class="padleft question_color"><?php echo _("Question A. Select the best answer from the drop down list.");?></h2>							
					<p><?php echo _("You answered...");?></p>
					<p><?php echo _("The anther is part of the");?> <?php echo _("<span class='orange' id='selected_answer1'></span>.");?><br/>
						<?php echo _("The anther's function is to produce");?> <?php echo _("<span class='purple' id='selected_answer2'></span>.");?><br/>
					</p>					
					<p><img src="images/misc/wrong.png" id="answer-icon" /><span id="user_answer"></span></p><br/><br/>											
						
					<h2 class="padleft question_color"><?php echo _("Question B. To make a seed, pollen has to find its way to a pistil and travel down to reach the egg. What is this process called?");?></h2>
					<p><?php echo _("You answered...");?></p>
					<p id="questionB_Answer"></p>
					<p><img src="images/misc/wrong.png" id="answer-icon2" /><span id="user_answer2"></span></p>											
				</div>
					
			</div>			
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Do you like flowers?");?></strong></section></section>
	<script src="scripts/jquery.dropdown.js"></script>	
<script>
	
	$( function() {
		
		$( '#cd-dropdown' ).dropdown( {			
			gutter : 5,
			delay : 100,
			random : true			
		});
		
		$( '#cd-dropdown2' ).dropdown( {
					gutter : 5,
					delay : 100,
					random : true
			});

	});

</script>
<?php include("setlocale.php"); ?>
</body>
</html>
