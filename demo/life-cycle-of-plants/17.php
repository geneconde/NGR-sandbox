<?php 
	require_once("../tempsession.php"); 
	$_SESSION['cmodule'] = 'life-cycle-of-plants';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Life Cycle of Plants"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<script>
var studentAnswer = '';
var answered = 1;
var selectedAnswer = '';
var nullAnswer = false;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });	
	$('a.back-toggle').click(function(){
		if( $('#screen1').is(':visible') ) {
			document.location.href= "16.php";
			
		} else {
			$('#screen2').fadeOut(function(){ $('#screen1').fadeIn(); $('h1').html('<?php echo _("Quiz Question #4");?>'); });
			$('a.next-toggle').fadeOut(function(){  $('a.check-toggle').fadeIn();});
		}
	});
	
	/* screen transition */	
	$('a.check-toggle').click(function(e){
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _('Please select your answer.');?>");
			nullAnswer = false;	
			$('a.next-toggle').fadeOut();	
		} else {
			$('#screen1').fadeOut(function(){ 
			checkAnswer();
			$('h1 span').fadeIn(); 
			$('a.play-toggle').fadeIn(); 
			$('#screen2').fadeIn();  
			});
			$('a.check-toggle').fadeOut(function(){ 
				$('a.next-toggle').fadeIn(); $('a.back-toggle').fadeIn(); 
			});
			$('h1').html('<?php echo _("Quiz Question #4")?> - <?php echo _("How did I do?");?>');
		}
	});		
}) ;

function checkNull() {	
		if($('#r1').is(':checked') == false && $('#r2').is(':checked') == false && $('#r3').is(':checked') == false && $('#r4').is(':checked') == false) {
			nullAnswer = true;
		} 
	}

function checkAnswer() {
		
		 if($('#r1').is(":checked")) {			
			textstr = '<?php echo _("Correct. A seed sprouts into a seedling through germination, which grows into an adult plant, which produces more seeds.");?>';
				document.getElementById('user_answer').style.color="green";
				$('#feedback').html($('.r1').html());
				$('#answer-icon').attr("src", "images/misc/correct.png");
			studentAnswer = 'A';
		}
		else if($('#r2').is(":checked")) {			
		textstr = '<?php echo _("No, a seed sprouts into a seedling (not the other way around). Once it is an adult plant it can produce more seeds.");?>';
				document.getElementById('user_answer').style.color="red";
				$('#feedback').html($('.r2').html());
				$('#answer-icon').attr("src", "images/misc/wrong.png");
			studentAnswer = 'B';
		}
		else if($('#r3').is(":checked")) {			
			textstr = '<?php echo _("No, a seedling grows into an adult plant (not the other way around). Once it is an adult plant it can produce more seeds.");?>';
				document.getElementById('user_answer').style.color="red";
				$('#feedback').html($('.r3').html());
				$('#answer-icon').attr("src", "images/misc/wrong.png");
			studentAnswer = 'C';
		}
		else if($('#r4').is(":checked")) {			
			textstr = '<?php echo _("No, a seed grows first into a seedling, then an adult plant. Once it is an adult plant it can produce more seeds.");?>';
				document.getElementById('user_answer').style.color="red";
				$('#feedback').html($('.r4').html());
				$('#answer-icon').attr("src", "images/misc/wrong.png");
					
			studentAnswer = 'D';
		}
		$('#user_answer').text(textstr);
		selectedAnswer = $("input:checked + label").text();
		$('#selectedAnswer').text(selectedAnswer);
		if(answered == 0){
			saveAnswer('life-cycle-of-plants-qq4-a', studentAnswer);						
			answered = 1;	
		}
	}

</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; vertical-align: middle; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #3B8C06; border-right: 1px dashed #3B8C06; padding: 0 2px; }
.bg { background: url("images/17/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}
#screen1 { max-width: 95%; margin: 0 auto; }
#screen2{ display: none; text-align: center;  max-width: 95%;  margin-top: 0%; margin:0 auto; }

.clear { clear:both;}

.key{color: rgb(42, 111, 165);}
.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }
.l-coral{color:lightcoral;}
.mbottom{margin-bottom:20px;}


@-webkit-keyframes infinite-spinning {  from {    -webkit-transform: rotate(0deg);  }  to {    -webkit-transform: rotate(360deg);  }}

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
	background:url("images/misc/sun.png") no-repeat center;
     -webkit-animation: infinite-spinning 5s infinite;
     -moz-animation: infinite-spinning 5s infinite;
     -o-animation: infinite-spinning 5s infinite;
}

#question-container{ width:100%;}
#question-container li{ color: #000000;  font-size: 24px; list-style-type: none; }
#question-container ul{ padding:0;}

#answer { text-align: center;  max-width: 100%;  margin-top: 70px !important; margin:0 auto; min-height:300px; }
.fleft { float:left; }
.f-size { font-size:20px; }
.f-weight{font-weight:normal !important;}
.alignment{margin-top:10px; padding-left:17px; font-size:35px; color: #9B5B02;}
.fright{ float:right; }
.mtop{margin-top:70px !important;}
.marg-left{margin-left:0px !important; padding-left:0px !important;}
#answer-icon, #answer-icon2 { display:inline-block; margin-right:5px;}

input[type="radio"] { display:none; }
input[type="radio"] + label { font-size:22px; }
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
.orange { color: orange; }
.purple { color: purple; }
.brown { color: brown; }
h2, p{ font-size:24px; font-weight:normal; }
#question {color:darkcyan;}
#user_answer{vertical-align: middle;}
#answer h2 {margin:0;}
#image-container{width:40%;margin:0 auto;}
#qq4 {margin:0;}

html[dir="rtl"] h1 { padding-right: 20px !important; }
html[dir="rtl"] h2 { text-align: right !important; }
html[dir="rtl"] .choicebox h2 { text-align: center !important; }
html[dir="rtl"] #sun { left: 0; margin-left: -11%; }
html[dir="rtl"] #answer h2 { text-align: center !important; }
html[dir="rtl"] #answer .t-align { text-align: center; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 30px; }
}
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<div id="sun"></div>								
				<h1 class="alignment"><span class="blue"><?php echo _("Quiz Question #4");?></span></h1>					
					<div id="screen1">
						<div id="question-container">							
							<h2 id="question"><?php echo _("Which statement best summarizes the life cycle of plants in general?");?></h2>				
							<h2><?php echo _("Select one of the choices below.");?></h2>
							<ul>
								<li><input type="radio" id="r1" name="rr" />
								<label for="r1"><span></span>A. <?php echo _("Seed sprouts into a seedling, which grows into an adult plant, which produces more seeds.");?></label></li><br/>
								
								<li><input type="radio" id="r2" name="rr" />
								<label for="r2"><span></span>B. <?php echo _("Seedling sprouts into a seed, which produces more seeds, and then grows into an adult plant.");?></label></li><br/>
								
								<li><input type="radio" id="r3" name="rr" />
								<label for="r3"><span></span>C. <?php echo _("Adult plant deteriorates into a seedling, which produces more seeds.");?></label></li><br/>
								
								<li><input type="radio" id="r4" name="rr" />
								<label for="r4"><span></span>D. <?php echo _("Seed grows first into an adult and then a seedling, which produces more seeds.");?></label></li>						
							</ul>									
						</div>	
						<div id="image-container">
							<!--Changing images upon selection in the radio button-->
						</div>
					</div>					
			
				<!--SCREEN 2-->
					<div id="screen2">						
						<div id="answer">							
							<h2><?php echo _("You answered...");?></h2>	
							<p id="selectedAnswer"></p>					
							<p id="qq4"><img src="images/misc/wrong.png" id="answer-icon"/><span id="user_answer"></span></p>						
						</div>										
					</div>				
		</div>	<!---END-->		
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("The plant life cycle is...");?></strong></section></section>

<?php include("setlocale.php"); ?>

</body>
</html>
