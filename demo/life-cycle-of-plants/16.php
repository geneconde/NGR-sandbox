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
<script src="scripts/jquery-ui.min.js"></script>
<script>
var correct = 0;
var answered = 1;
var studentAnswer='';
var nullAnswer = false;
var textstr = '';
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	
	$('a.back-toggle').click(function(){
		if( $('#screen1').is(':visible') ) {
			document.location.href= "15.php";
		} else {
			$('#answer').fadeOut(function(){
			$('#screen1').fadeIn();
			});		
			
			$('a.checkanswer-toggle').fadeIn(function(){ $('a.next-toggle').fadeOut(); $('h1').text('<?php echo _("Quiz Question #3");?>');  });				
		}
	});
	
	/* screen transition */	
	$('a.checkanswer-toggle').click(function(e){
	checkAnswer();
	checkNull();
	if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please select your answer.");?>");
			nullAnswer = false;	
			
		} else {
			$('#screen1').fadeOut(function(){
			$('#answer').fadeIn(); 
		});		
			$('a.checkanswer-toggle').fadeOut(function(){
				$('a.next-toggle').fadeIn(); 
				$('h1').text('<?php echo _("Quiz Question #3")?> - <?php echo _("How did I do?");?>'); 
				$('a.back-toggle').fadeIn(); 	
			});	
		}	
});
	
	/*============================ START ===============================*/
	$(".choicebox img").each(function() {
		var image = $(this);
		var imgVal = $(this).data('name');
	    image.click(function() {	
	    clearEverything();
			//if(studentAnswer != imgVal) {
			 image.addClass('border-off');
			 studentAnswer = imgVal;			
			//}
		});
	});
	
	/* ============================ End =============================*/
});

function clearEverything() {
	$('.choicebox img').each(function() {
		$(this).removeClass('border-off');
	});	
}

function checkAnswer(){
if ((studentAnswer == 'A') ) {
				$('#rightorwrong').text ('<?php echo _("Soil"); ?>');
				$('.imganswer').attr("src","images/16/soil.jpg");				
				$('.textanswer').text('<?php echo _("Soil"); ?>');
				document.getElementById('rightorwrong').style.color="purple";
				document.getElementById('wronganswer').style.color="red";
				textstr = '<?php echo _("No, soil does not pollinate plants. Soil provides water and nutrients to plants.");?>';
				$('#answer-icon1').attr("src", "images/misc/wrong.png");
				$('#answer-icon1').addClass('img-align');
				$('#sorry').removeClass('hidden');
				
			} else if (studentAnswer == 'B')  {
				$('#rightorwrong').text('<?php echo _("Bees"); ?>');
				textstr = '<?php echo _("Correct, bees can pollinate plants. When a bee lands on a flower, its feet get full of pollen. The bee flies away looking for nectar and lands on another flower. The pollen is now on a different flower.");?>';
				$('.imganswer').attr("src","images/16/bees.jpg");					
				$('.textanswer').text('<?php echo _("Bees"); ?>');
			   document.getElementById('wronganswer').style.color="green";
			   document.getElementById('rightorwrong').style.color="purple";
			   $('#answer-icon1').attr("src", "images/misc/correct.png");
			   $('#answer-icon1').addClass('img-align');
			   $('#sorry').addClass('hidden');
				   
			}else if (studentAnswer == 'C') {
				$('#rightorwrong').text('<?php echo _("Watering them"); ?>');
				textstr = '<?php echo _("No, watering the plants helps them grow, but not pollinate. Bees can pollinate plants.");?>';
				$('.imganswer').attr("src","images/16/watering_plants.jpg");
				$('.textanswer').text('<?php echo _("Watering them"); ?>');					
				document.getElementById('rightorwrong').style.color="purple";
				document.getElementById('wronganswer').style.color="red";
				$('#answer-icon1').attr("src", "images/misc/wrong.png");
				$('#answer-icon1').addClass('img-align');
				$('#sorry').removeClass('hidden');			
			
			} else if ((studentAnswer == 'D')) {
				$('#rightorwrong').text('<?php echo _("Seeds"); ?>');
				textstr = '<?php echo _("No, seeds are formed after pollination takes place. Bees can pollinate plants.");?>';
				$('.imganswer').attr("src","images/16/seeds.jpg");					
				$('.textanswer').text('<?php echo _("Seeds"); ?>');
				document.getElementById('rightorwrong').style.color="purple";
				document.getElementById('wronganswer').style.color="red";
				$('#answer-icon1').attr("src", "images/misc/wrong.png");
				$('#answer-icon1').addClass('img-align');
				$('#sorry').removeClass('hidden');
			}			
			$('#wronganswer').text(textstr);
			$('#wronganswer').fadeIn();	
		
		if(answered ==0){
			saveAnswer('life-cycle-of-plants-qq3-a', studentAnswer);	
			answered = 1;
		}
	
}

function checkNull() {
	if(studentAnswer == '' ) {
		nullAnswer = true;
	}
}

</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px;  }
img { border : none; }
.wrap { overflow: hidden; margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/16/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}
.centered { text-align:center;}
h1{color:#673615;}
h2 { margin:0; font-weight:normal; }
h3 { text-align: left; font-weight:normal; margin: 0;}
.clear { clear:both;}
.secondh2 { display: none;}
#answer{ display: none; text-align: center;  max-width: 95%;  margin-top: 70px !important; margin:0 auto; min-height:300px; }
.wrong { background-color: gray; width: 80px;  border-radius: 10px; z-index: 1; opacity: .5; position: relative; }
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.bold { font-weight: bold; }
.hidden { display: none; }
.black {color: black;}
#q1, #q2 { width: 100%; }
.answerbox { background: none; border: solid 1px grey; height: 55px; width: 40%; border-radius:5px; overflow: hidden; margin-left: 5%}
.answerbox div { background: none; }
.choicebox {  min-height: 133px; width: 95%; color: white; margin:0 auto; text-align: center; }
.choicebox div:hover {  -webkit-filter: none;}
.choicebox p {  text-align: center; font-size: 24px;/* WebKit (Safari/Chrome) Only */  -webkit-text-stroke: 1px black;}
.imganswer { width: 40%; border: 4px solid #ECC377; height:250px; max-height:90%;}  
.choicebox div { width: 30%;  margin-bottom:50px; margin:0 auto; margin-left:60px;}
.choicebox div:first-child{margin:0 0 15px 150px;}
.choicebox div:nth-child(4){margin-left:150px;}
.choicebox img { width: 100%; height: 200px; border: 1px solid lightcoral;}
#wronganswer { margin-bottom: 20px; vertical-align:middle;}
.soil-toggle:hover, .bees-toggle:hover, .h2o_them-toggle:hover, .seeds-toggle:hover { cursor: pointer; }
img { -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; }
#soil_id img,#bees_id img,#h2o_them_id img,#seed_id img, #answer img { z-index:8;  }
#soil_id img.active,#bees_id img.active,#h2o_them img.active,#seed_id img.active,#answer img.active { z-index:10; display: block; }
#soil_id img.last-active,#bees_id img.last-active,#h2o_them_id img.last-active,#seed_id img.last-active, #answer img.last-active { z-index:9; }

div#answers img { text-align:center; margin: 0 auto;}
.rounded-corners{ border-radius:15; -moz-border-radius: 15; -webkit-border-radius: 15; }
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
	background:url("images/misc/sun.png") no-repeat center;
    -webkit-animation: infinite-spinning 5s infinite;
     -moz-animation: infinite-spinning 5s infinite;
     -o-animation: infinite-spinning 5s infinite;
}
#question-container{width:95%;margin:65px 0 0 25px;margin: 0 auto;}
#question-container h2{font-size:24px;margin-bottom: 25px;}
.mtop{ margin-top:65px !important; }
#answer-icon1, #answer-icon2 { display:inline-block; vertical-align:middle;}
p{margin-top:0px !important; font-size:20px;}
.blue {color: rgb(42, 111, 165);}
.alignment{margin-top:10px; padding-left:17px; font-size:35px; }
.pad{ padding:0px 13px 0px 13px; }
.key{color: rgb(42, 111, 165);}
h2, p{font-size:24px; font-weight:normal; }
.firsth2 {color:darkcyan;}
.blue2 { color: #01A0E1; }
.fl {float:left;}
img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #FF64B5;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}

html[dir="rtl"] h1 { padding-right: 20px !important; }
html[dir="rtl"] h2 { text-align: right !important; }
html[dir="rtl"] .choicebox h2 { text-align: center !important; }
html[dir="rtl"] #sun { left: 0; margin-left: -11%; }
html[dir="rtl"] #answer h2 { text-align: center !important; }
html[dir="rtl"] #answer .t-align { text-align: center; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 30px; }
	.choicebox div:first-child, .choicebox div:nth-child(4) { margin: 0 0 5px 110px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		.choicebox img { height: 180px; }
	}
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap" >	
		<div class="bg">
			<div id="sun"></div>				
				<h1 class="alignment"><?php echo _("Quiz Question #3"); ?></h1>								
			<div id="screen1">
				<div id="q1">
					<div id="question-container">
						<h2 class="firsth2"><?php echo _("Plants can be pollinated by?"); ?></h2>
					</div>
						<div class="choicebox"> 
							<div class="soil-toggle fl">
								<img id="soil-main" class="border" src="images/16/soil.jpg" data-name="A">
								<h2 class="orange centered" id="soil"><?php echo _("Soil");?></h2>
							</div>
							<div class="bees-toggle fl">
								<img id="bees-main" class="border" src="images/16/bees.jpg" data-name="B">
								<h2 class="purple centered" id="bee"><?php echo _("Bees"); ?></h2>
							</div>
							<div class="clear"></div>
							<div class="h2o_them-toggle fl">
								<img id="h2o_them-main" class="border" src="images/16/watering_plants.jpg" data-name="C">
								<h2 class="blue2 centered" id="h2o_them"><?php echo _("Watering them"); ?></h2>
							</div>
							<div class="seeds-toggle fl">
								<img id="seeds-main" class="border" src="images/16/seeds.jpg" data-name="D">
								<h2 class="brown centered" id="seed"><?php echo _("Seeds"); ?></h2>
							</div>	
							<div class="clear"></div>							
						</div>						
					<div class="clear"></div>			
				</div>				
			</div>
				<div class="clear"></div>			
			<div id="answer">
				<h2><?php echo _("You answered..."); ?></h2>
				<h2><img class="imganswer" id="image_answer" src="images/16/bees.jpg"/></h2>												
				<h2 id="rightorwrong"><?php echo _("You didn't select any answer."); ?> </h2>			
				<p><img src="images/misc/wrong.png" id="answer-icon1"><span id="wronganswer" class="hidden"></span></p>							
			</div>			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer checkanswer-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Who can pollinate?"); ?></strong></section></section>
<?php include("setlocale.php"); ?>
</body>
</html>
