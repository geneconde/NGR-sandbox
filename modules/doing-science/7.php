<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(7, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'doing-science-qc2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
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
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/jquery.qtip.min.js" /></script>
<script src="scripts/global.js" /></script>
<script src="scripts/save-answer.js"></script>
<style>
body{background-color:#FFFFFF;}
.bg { background-image: url('images/7/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
h1 { color: #780853;}
h2 {text-align:left; padding:10px 0 0 10px; margin:0; font-weight:normal;}
p { color: black; }
.bg section{width:95%; margin:0 auto; position:relative; top:25px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
article{border:1px solid black; position:relative; top:30px;}
.resize {height:25px; vertical-align:middle;}
#col1{width:40%; float:left; margin-left:19px;}
#col2{width:54.9%; float:right; margin-right:20px;}
#choices {margin:4px 0 0 0; height:160px;width:100%; }
#choices img { height:99px; width:32%;}
#graph {margin:15px 0 0 0;}
#selected_choice {font-size:20px;}
#user_answer, #user_answer2{vertical-align:middle;}
/* The CSS */
select {
    padding:3px;
    margin: 0;
    -webkit-border-radius:4px;
    -moz-border-radius:4px;
    border-radius:4px;
    -webkit-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    -moz-box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    box-shadow: 0 3px 0 #ccc, 0 -1px #fff inset;
    background: #f8f8f8;
    color:black;
    border:none;
    outline:none;
    display: inline-block;
    -webkit-appearance:none;
    -moz-appearance:none;
    appearance:none;
    cursor:pointer;
	font-family: 'PlaytimeRegular';
	font-size:20px;
	margin-top:30px;
	margin-left: 138px; 
	position: relative;
	z-index: 6; 
}
 
/* Targetting Webkit browsers only. FF will show the dropdown arrow with so much padding. */
@media screen and (-webkit-min-device-pixel-ratio:0) {
    select {padding-right:18px}
}

label {position:relative}
label:after {
    content:'<>';
    font:11px "Consolas", monospace;
    color:#aaa;
    -webkit-transform:rotate(90deg);
    -moz-transform:rotate(90deg);
    -ms-transform:rotate(90deg);
    transform:rotate(90deg);
    right:8px; top:2px;
    padding:0 0 2px;
    border-bottom:1px solid #ddd;
    position:absolute;
    pointer-events:none;
}
label:before {
    content:'';
    right:6px; top:0px;
    width:20px; height:20px;
    background:#f8f8f8;
    position:absolute;
    pointer-events:none;
    display:block;
}
#answer h2 {padding:0 0 10px 10px;}
#answer p {text-align:center;}
#q-container1{width:100%; min-height:200px;  margin-bottom:50px; margin-top:10px;}
#q-container2{width:100%; min-height:200px; }

.borderSelected{ border:2px solid #61153e; }
#choices img:hover {border:2px solid #61153e; cursor:pointer;}
.mtop{margin-top:62px;}
html[dir="rtl"] #my_select {margin-left: 0;margin-right: 138px;}
html[dir="rtl"] label:before, html[dir="rtl"] label:after {right: 141px;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#col1 { margin-left: 5px; }
	#graph { margin: 90px 0 0; }
	#graph img { width: 400px; }
	#my_select { margin: 40px auto 0; display: block; }
	html[dir="rtl"] #my_select { margin: 40px auto 0; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg" >
			<div id="screen1" class="screens">				
					<section id="col1">					
						<h1><?php echo _("Quick Check #2");?> </h1>						
						<h2><?php echo _("Question A. In order to test a hypothesis, it is sometimes helpful to have a measurable outcome. Which of the following statements has an outcome that can be measured?");?><br/><br/><br/></h2>					
						<h2><?php echo _("Question B. A school offers four lunch options for students to choose from: pizza, lasagna, grilled cheese sandwich, and tuna fish salad. The chart to the right shows what students prefer to eat for lunch. What can you learn from this?");?></h2>						
										
					</section>	

					<section id="col2">
						<p class="mtop"><?php echo _("Click on the images below to select your answer.");?></p>
						<figure id="choices">
							<img src="images/7/choice-a.png" id="a"/>
							<img src="images/7/choice-b.png" id="b"/>
							<img src="images/7/choice-c.png" id="c"/>
							<p id="selected_choice"></p>
						</figure>						
						
						<figure id="graph">
							<img src="images/7/graph.png"/>
						</figure>						
					</section>
					<div class="clear"></div>
					<label>
							<select id="my_select">
								<option selected value="sel"><?php echo _("Click here to select your answer");?></option>
								<option id="a"><?php echo _("Students prefer grilled cheese sandwiches to lasagna.");?></option>
								<option id="b"><?php echo _("Tuna fish is the most popular lunch meal among the students of this school.");?></option>
								<option id="c"><?php echo _("More than half of the students choose either grilled cheese or lasagna for lunch.");?></option>
								<option id="d"><?php echo _("More than half of the students choose pizza for lunch.");?></option>
							</select>
						</label>​
			</div>
				
			<div id="answer" class="screens">
				<section>
					<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
					<div id="q-container1">
						<h2><?php echo _("Question A. In order to test a hypothesis, it is sometimes helpful to have a measurable outcome. Which of the following statements has an outcome that can be measured?");?></h2>
						<p><img src="images/others/wrong.png" id="answer-icon" class="resize"/><?php echo _("<span id='user_answer'></span>");?></p>
					</div>
					<div id="q-container2">
						<h2><?php echo _("Question B. A school offers four lunch options for students to choose from: pizza, lasagna, grilled cheese sandwich, and tuna fish salad. The chart to the right shows what students prefer to eat for lunch. What can you learn from this?");?></h2>					
						<p><?php echo _("You answered...");?></p>
						<p id="selected_answer"></p>
						<p><img src="images/others/wrong.png" id="answer-icon2" class="resize"/><span id='user_answer2'></span></p>
					</div>
				</section>
			</div>					
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Another quick check on the way");?>!</strong></section></section>


<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var selected;
var answered = <?php echo $answered; ?>;
var ctr = 0;
var qa_id = "";
var qb_id = "";
var selected_answer = "";
var txtstr2 = "";
var nullAnswer = false;
$(document).ready(function() {


	 /* Back Transition */
$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "6.php#screen2";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('h1').text('<?php echo _("Quick Check #2");?>');
				$('#user_answer2').removeClass('green');
				$('#user_answer2').removeClass('red');
				$('#user_answer').removeClass('green');
				$('#user_answer').removeClass('red');
				$('h1').fadeIn();
		});
	}
});

	$('a.check-toggle').click(function(e){
		checkNull();
		checkAnswer();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please select your answers.");?>");
			nullAnswer = false;
		} else {			
			if($('#screen1').is(':visible')) { 				
				$('#screen1').fadeOut( function(){			
					$('a.check-toggle').fadeOut(function (){
					$('a.next-toggle').fadeIn();
					$('h1').text('<?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?");?>');					
					$('#answer').fadeIn();
					save();
					}); 
				});
			}
		} // end else
	});
	
	
	$('#choices img').each(function(){		
		$(this).click(function(){
		    qa_id= $(this).attr('id');
			var selected_choice = null;
			var textstr = null;	
			
			clearEverything();
			if(selected != $(this).attr('id')) {
				$(this).addClass('borderSelected');
				selected = qa_id;
			}		
			
			 switch (qa_id){
				case 'a':
					selected_choice = '<?php echo _("Eating an apple a day will lower your blood pressure.");?>';
					txtstr = "<?php echo _("Correct! A person's blood pressure can be measured before and after a time period of eating an apple every day to see if it has changed it or not.");?>";
					$('#user_answer').css('color','green');
					$('#answer-icon').attr("src", "images/others/correct.png");
					$('#selected_img').attr("src", "images/7/choice-a.png");
				break;
				
				case 'b':
					selected_choice = '<?php echo _("Taking iron supplements (pills) every day will make you feel happier.");?>';
					txtstr = "<?php echo _("No. A person's happiness is not considered a measurable outcome – it is very difficult to measure happiness in a scientific way.");?>";
					$('#user_answer').css('color','red');
					$('#answer-icon').attr("src", "images/others/wrong.png");
					$('#selected_img').attr("src", "images/7/choice-b.png");
					
					
				break;
				
				case 'c': 
					selected_choice = '<?php echo _("Taking Vitamin E pills will make you feel younger.");?>';
					txtstr = '<?php echo _("No. How a person feels is very relative, they are comparing it to other feelings. To test a hypothesis it must have a measurable outcome, not based on emotions.");?>';
					$('#user_answer').css('color','red');
					$('#answer-icon').attr("src", "images/others/wrong.png");
					$('#selected_img').attr("src", "images/7/choice-c.png");
										
				break;					
				default:break;		
			 }
						
			 $('#user_answer').text(txtstr);			
			 $('#selected_choice').text(selected_choice);

		});		
	});
	
	$("#my_select").change(function() {
	   qb_id = $(this).children(":selected").attr("id");
		switch(qb_id){
			case 'a':
				selected_answer = '<?php echo _("Students prefer grilled cheese sandwiches to lasagna.");?>';
				txtstr2 = '<?php echo _("No, because the percentage of students who choose grilled cheese (28%) is lower than those who select lasagna (40%).");?>';			
				$('#user_answer2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
				break;
			case 'b':
				selected_answer = '<?php echo _("Tuna fish is the most popular lunch meal among the students of this school.");?>';
				txtstr2 = '<?php echo _("No, tuna fish is actually the least popular lunch option at this school.");?>';
				$('#user_answer2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
				break;
			case 'c':
				selected_answer = '<?php echo _("More than half of the students choose either grilled cheese or lasagna for lunch.");?>';
				txtstr2 = '<?php echo _("Correct. 40% of the students choose lasagna and 28% choose grilled cheese. Together that makes 68% of the students choosing one of these lunch options.");?>';
				
				$('#answer-icon2').attr("src", "images/others/correct.png");
				break;
			case 'd':
				selected_answer = '<?php echo _("More than half of the students choose pizza for lunch.");?>';
				txtstr2 = '<?php echo _("No, only 24% of the students choose pizza, which is less than half.");?>';
				$('#user_answer2').addClass('red');
				$('#answer-icon2').attr("src", "images/others/wrong.png");
				break;					
			default:break;
		}
		 $('#user_answer2').text(txtstr2);			
		 $('#selected_answer').text(selected_answer);
			
	});
}); //end doc ready

function checkAnswer(){
  if(qb_id == 'c'){
	$('#user_answer2').addClass('green');	
  } else {$('#user_answer2').addClass('red');}
}

function clearEverything() {
	$('#choices img').each(function() {
		$(this).removeClass('borderSelected');
	});
}

function checkNull() {
	if(!$('#a').hasClass('borderSelected') && !$('#b').hasClass('borderSelected') && !$('#c').hasClass('borderSelected')) {
		nullAnswer = true;
	}
	
	if($('#my_select').val() == "sel") {
		nullAnswer = true;
	}
}
function save(){
	var sa = qa_id.charAt(0).toUpperCase() + qa_id.slice(1);
	var sa1 = qb_id.charAt(0).toUpperCase() + qb_id.slice(1);
	saveAnswer('doing-science-qc2-a', sa);
	saveAnswer('doing-science-qc2-b', sa1);		
	answered = 1;			
}	

</script>
<?php require("setlocale.php"); ?>
</body>
</html>
