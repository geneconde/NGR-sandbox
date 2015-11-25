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
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/jquery-ui.min.js"></script>
<script>
var correct = 0;
var answered = 1;
var studentAnswer = '';
var nullAnswer = false;
var value='';
var textstr = '';
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

	$('a.back-toggle').click(function(){
		if( $('#screen1').is(':visible') ) {
			document.location.href= "13.php";
		} else {
			$('#answer').fadeOut('slow',function(){				
				$('#screen1').fadeIn(); 
			});		
			
			$('a.checkanswer-toggle').fadeIn(function(){ $('a.next-toggle').fadeOut(); $('h1').text('<?php echo _("Quiz Question #1") ?>'); });				
		}
	});
	
	/* screen transition */	
	$('a.checkanswer-toggle').click(function(e){
		
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _('Please select your answer.');?>");
			nullAnswer = false;	
			$('a.next-toggle').fadeOut();
		} else {	
			checkAnswer();
			$('#screen1').fadeOut('slow',function(){
				$('#answer').fadeIn(); 
			});	
			$('a.checkanswer-toggle').fadeOut(function(){
			$('a.next-toggle').fadeIn(); 
			$('h1').text('<?php echo _("Quiz Question #1")?> - <?php echo _("How did I do?");?>'); 
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
	if ((studentAnswer == 'A')) {
		$('#rightorwrong').text ('<?php echo _("Root"); ?>');
		$('.imganswer').attr("src","images/14/root.jpg");				
		$('.textanswer').text('<?php echo _("Root"); ?>');
		document.getElementById('rightorwrong').style.color="purple";
		document.getElementById('wronganswer').style.color="red";
		textstr = '<?php echo _("No, the roots absorb the water and nutrients from the soil into the plant.");?>';
		$('#answer-icon1').attr("src", "images/misc/wrong.png");
		$('#answer-icon1').addClass('img-align');
		$('#sorry').removeClass('hidden');
	
	} else if (studentAnswer == 'C')  {	
		$('#rightorwrong').text('<?php echo _("Stem"); ?>');	
		textstr = '<?php echo _("No, the stem gives the plant support. It is also in charge of distributing water and sap throughout the plant.");?>';
		$('.imganswer').attr("src","images/14/stem.jpg");
		$('.textanswer').text('<?php echo _("Stem"); ?>');	
		document.getElementById('rightorwrong').style.color="purple";
		document.getElementById('wronganswer').style.color="red";
		$('#answer-icon1').attr("src", "images/misc/wrong.png");
		$('#answer-icon1').addClass('img-align');			
		$('#sorry').addClass('hidden');						
		/*$('#rightorwrong').text('<?php echo _("Stem"); ?>');
		textstr = '<?php echo _("No, the stem gives the plant support. It also is in charge of distributing water and sap throughout the plant.");?>';
		$('.imganswer').attr("src","images/14/stem.jpg");					
		$('.textanswer').text(<?php echo _("Stem"); ?>);
	    document.getElementById('wronganswer').style.color="red";
	    document.getElementById('rightorwrong').style.color="purple";
	    $('#answer-icon1').attr("src", "images/misc/wrong.png");
	    $('#answer-icon1').addClass('img-align');				  
	    $('#sorry').removeClass('hidden');	*/			

	} else if (studentAnswer == 'B') {
		$('#rightorwrong').text('<?php echo _("Flower"); ?>');
		textstr = '<?php echo _("Correct. The flower is the part that has the stamen and pistil to make seeds.");?> ';
		$('.imganswer').attr("src","images/14/flowers.jpg");
		$('.textanswer').text('<?php echo _("Flower"); ?>');					
		document.getElementById('rightorwrong').style.color="purple";
		document.getElementById('wronganswer').style.color="green";
		$('#answer-icon1').attr("src", "images/misc/correct.png");
		$('#answer-icon1').addClass('img-align');			
		$('#sorry').addClass('hidden');

	} else if ((studentAnswer == 'D')) {
		$('#rightorwrong').text('<?php echo _("Leaf"); ?>');
		textstr = '<?php echo _("No, plant leaves have the important job of producing food through photosynthesis.");?>';
		$('.imganswer').attr("src","images/14/leaf.jpg");					
		$('.textanswer').text('<?php echo _("Leaf"); ?>');
		document.getElementById('rightorwrong').style.color="purple";
		document.getElementById('wronganswer').style.color="red";
		$('#answer-icon1').attr("src", "images/misc/wrong.png");
		$('#answer-icon1').addClass('img-align');
		$('#sorry').removeClass('hidden');			
	}
	$('#wronganswer').text(textstr);
	$('#wronganswer').fadeIn();	
	save();
	}
function save(){
	if(answered ==0){
		saveAnswer('life-cycle-of-plants-qq1-a', studentAnswer);	
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
img { border : none; vertical-align: middle;}
.wrap { overflow: hidden; margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/14/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}
.centered { text-align:center;}
h1 { padding-top: 10px !important; }
h2 { margin:0; font-weight:normal; color:darkcyan;}
h3 { text-align: left; font-weight:normal; margin: 0;}
.clear { clear:both;}
.secondh2 { display: none;}
#answer{ display: none; text-align: center;  margin-top: 70px !important; margin:0 auto; }
#answer{min-height:300px;}
.wrong { background-color: gray; width: 80px;  border-radius: 10px; z-index: 1; opacity: .5; position: relative; }
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.hidden { display: none; }
.black {color: black;}
#q1,#q2 { width: 100%; }
.answerbox { background: none; border: solid 1px grey; height: 55px; width: 40%; border-radius:5px; overflow: hidden; margin-left: 5%}
.answerbox div { background: none; }
.choicebox {  min-height: 133px; width: 95%; color: white; margin:0 auto; text-align: center; }
.choicebox div:hover {  -webkit-filter: none;}
.choicebox p {  text-align: center; font-size: 24px;/* WebKit (Safari/Chrome) Only */  -webkit-text-stroke: 1px black;}
.choicebox div { width: 30%;  margin-bottom:50px; margin:0 auto; margin-left:60px;}
.choicebox div:first-child{margin:0 0 30px 150px;}
.choicebox div:nth-child(4){margin-left:150px;}
.choicebox img { width: 100%; height: 200px; border: 1px solid lightcoral;}
.imganswer { width: 40%; border: 4px solid #ECC377; height:250px; max-height:90%;} 
#wronganswer { margin-bottom: 20px;}
.root-toggle:hover, .flower-toggle:hover, .stem-toggle:hover, .leaf-toggle:hover { cursor: pointer; }
#root_id img,#flower_id img,#stem_id img,#leaf_id img, #answer img { z-index:8;  }
#root_id img.active,#flower_id img.active,#stem_id img.active,#leaf_id img.active,#answer img.active { z-index:10; display: block; }
#root_id img.last-active,#flower_id img.last-active,#stem_id img.last-active,#leaf_id img.last-active, #answer img.last-active { z-index:9; }
img { -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; }

div#answers img { text-align:center; margin: 0 auto;}
.rounded-corners{ border-radius:15;-moz-border-radius: 15;-webkit-border-radius: 15;}

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
#title-container{width:85%;text-align:left;padding:10px 0 0 10px;}
#title-container h1{font-size:35px;color: #673615;font-weight:normal !important;}
#question-container{width:95%;margin:65px 0 0 25px;margin: 0 auto;}
#question-container h2{font-size:24px;margin-bottom: 25px;}
.mtop{margin-top:65px !important;}
#answer-icon1, #answer-icon2 { display:inline-block; }
#wronganswer {vertical-align:middle;}
p{margin-top:0px !important; font-size: 24px; }
.alignment{margin-top:0px; padding-left:17px; font-size:35px; color: #673615;}
.pad{ padding:0px 13px 0px 13px; }
.key{color: rgb(42, 111, 165);}
h2, p{font-size:24px;font-weight:normal;}
.fl {float:left;}
.blue2 { color: #01A0E1; }

img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #ECC377;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}

html[dir="rtl"] h1 { padding-right: 20px !important; }
html[dir="rtl"] h2 { text-align: right !important; }
html[dir="rtl"] .choicebox h2 { text-align: center !important; }
html[dir="rtl"] #sun { left: 0; margin-left: -11%; }
html[dir="rtl"] #answer h2 { text-align: center !important; }
html[dir="rtl"] #answer .t-align { text-align: center; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 35px !important; }
	.choicebox div:first-child { margin: 0 0 0 120px; }
	.choicebox div:nth-child(4) { margin-left: 120px; }
}	
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap" >	
		<div class="bg">
			<div id="sun"></div>				
				<h1 class="alignment"><?php echo _("Quiz Question #1");?></span></h1>					
			<div id="screen1">
				<div id="q1">
					<div id="question-container">
						<h2 class="firsth2"><?php echo _("Which part of the plant makes seeds?");?></h2>
					</div>
						<div class="choicebox"> 
							<div class="root-toggle fl">
								<img id="root-main" class="border one" src="images/14/root.jpg" data-name="A">
								<h2 class="orange centered" id="root"><?php echo _("Root");?></h2>
							</div>
							<div class="flower-toggle fl">
								<img id="flower-main" class="border two" src="images/14/flowers.jpg" data-name="B">
								<h2 class="purple  centered" id="flower"><?php echo _("Flower");?></h2>
							</div>
							<div class="clear"></div>
							<div class="stem-toggle fl">
								<img id="stem-main" class="border three" src="images/14/stem.jpg" data-name="C">
								<h2 class="blue2 centered" id="stem"><?php echo _("Stem");?></h2>
							</div>
							<div class="leaf-toggle fl">
								<img id="leaf-main" class="border four" src="images/14/leaf.jpg" data-name="D">
								<h2 class="brown centered" id="leaf"><?php echo _("Leaf");?></h2>
							</div>
						<div class="clear"></div>
						</div>						
					<div class="clear"></div>			
				</div>				
			</div>			
			<div id="answer">
				<h2 class="black"><?php echo _("You answered...");?></h2>
				<h2><img class="imganswer" id="image_answer" src="images/14/flowers.jpg"/></h2>							
				<h2 id="rightorwrong"> <?php echo _("You didn't select any answer.");?></h2>			
				<p><img src="images/misc/wrong.png" id="answer-icon1"><span id="wronganswer" class="hidden" ></span></h2>			
			</div>			
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer checkanswer-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><span><?php echo _("And the first quiz question is...");?></span></strong></section></section>
<?php include("setlocale.php"); ?>
</body>
</html>
