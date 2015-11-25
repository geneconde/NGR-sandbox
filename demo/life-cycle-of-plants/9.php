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
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<script>
var studentAnswer = '';
var studentAnswer2 = '';
var selected_answer='';
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

	$('a.back-toggle').click(function(){
		if( $('#screen1').is(':visible') ) {
			document.location.href= "8.php#screen3";			
		} else {
			$('#answer').fadeOut(function(){ $('#screen1').fadeIn(); $('h1').html('<?php echo _("Quick Check #3"); ?>'); });
			$('a.next-toggle').fadeOut(function(){  $('a.check-toggle').fadeIn();});
		}
	});
	
	/* screen transition */	
	$('a.check-toggle').click(function(){			
		$('#screen1').fadeOut(function(){ 			
			$('#answer').fadeIn();   
			$('h1 span').fadeIn();   
			$('a.play-toggle').fadeIn(); 
			save();
		});
		$('a.check-toggle').fadeOut(function(){ 
			$('a.next-toggle').fadeIn(); 
			$('a.back-toggle').fadeIn(); 
		});
		addHash('#answer');
		$('h1').html('<?php echo _("Quick Check #3")?> - <?php echo _("How did I do?");?>');

	});	
});

var answered = 1;
var textstr  = null;
var textstr2  = null;
			question = $('#question'),
			answer = $('#answer');

		function save() {			
			var hexaValue2 = hexa2.getValue();
			var hexaValue = hexa1.getValue();

			if (hexaValue == './images/9/a.png') {
				$('#answer-icon').attr("src", "images/misc/wrong.png");
				$('#answer-icon').addClass('img-align');
				$('.imganswer').attr("src","images/9/a.png");	
				$('#sorry').removeClass('hidden');				
				textstr = '<?php echo _("No, not all plants have seeds. There are four other ways for plants to reproduce.");?>';
				document.getElementById('user_answer').style.color="red";
				$('#user_answer').text(textstr);
				studentAnswer = 'A';
				selected_answer1='<?php echo _("All plants have seeds and reproduce this way.");?>';
			
			} else if (hexaValue == './images/9/b.png') {
				$('#answer-icon').attr("src", "images/misc/correct.png");
				$('#answer-icon').addClass('img-align');
				$('.imganswer').attr("src","images/9/b.png");
				textstr = '<?php echo _("Correct. Acorns, walnuts, and coconuts are large seeds that are able to endure adverse conditions and be planted far away from their parent tree.");?>';
				document.getElementById('user_answer').style.color="green";
				$('#user_answer').text(textstr);			
				selected_answer1='<?php echo _("Acorns, walnuts and coconuts are all large seeds.");?>';
				studentAnswer = 'B';
				
			} else if (hexaValue == './images/9/c.png') {
				$('#answer-icon').attr("src", "images/misc/wrong.png");
				$('#answer-icon').addClass('img-align');
				$('.imganswer').attr("src","images/9/c.png");
				$('#sorry').removeClass('hidden');
				textstr = '<?php echo _("No, cross-pollination is when a pollinator moves pollen to a different plant.");?>';				
				document.getElementById('user_answer').style.color="red";
				$('#user_answer').text(textstr);
				selected_answer1='<?php echo _("Cross-pollination is when a pollinator moves pollen to the same plant.");?>';
				studentAnswer = 'C';
				
			} else if (hexaValue == './images/9/d.png') {
				$('#answer-icon').attr("src", "images/misc/wrong.png");
				$('#answer-icon').addClass('img-align');
				$('.imganswer').attr("src","images/9/d.png");
				$('#sorry').removeClass('hidden');
				textstr = '<?php echo _("No, not all seeds need to be planted nearby the parent plant. Coconuts (the large seeds of palm trees) can reach and be planted miles away.");?>';				
				document.getElementById('user_answer').style.color="red";
				$('#user_answer').text(textstr);
				selected_answer1='<?php echo _("Seeds need to be planted nearby the parent plant.");?>';
				studentAnswer = 'D';
			}
			
			//Question Number 2
			if (hexaValue2 == './images/9/a.png') {
				$('#answer-icon2').attr("src", "images/misc/wrong.png");
				$('#answer-icon2').addClass('img-align');
				$('.imganswer2').attr("src","images/9/a.png");
				$('#sorry2').removeClass('hidden');
				textstr2 = '<?php echo _("No, some seeds may fall to the ground near the plant, but this is not the primary way for the seeds to spread.");?>';				
				document.getElementById('user_answer2').style.color="red";
				$('#user_answer2').text(textstr2);
				selected_answer2='<?php echo _("By the plant falling and dying.");?> ';
				studentAnswer2 = 'A';
			
			} else if (hexaValue2 == './images/9/b.png') {
				$('#answer-icon2').attr("src", "images/misc/wrong.png");
				$('#answer-icon2').addClass('img-align');
				$('.imganswer2').attr("src","images/9/b.png");
				$('#sorry2').removeClass('hidden');
				textstr2 = '<?php echo _("No, some seeds may be knocked to the ground when it rains, but this is not the primary way for the seeds to spread.");?>';				
				document.getElementById('user_answer2').style.color="red";
				$('#user_answer2').text(textstr2);
				selected_answer2='<?php echo _("By water when it rains.");?>';
				studentAnswer2 = 'B';
				
			} else if (hexaValue2 == './images/9/c.png') {
				$('#answer-icon2').attr("src", "images/misc/correct.png");
				$('#answer-icon2').addClass('img-align');
				$('.imganswer2').attr("src","images/9/c.png");
				textstr2 = '<?php echo _("Correct, most of the dandelion seeds are spread by a wind or breeze, or sometimes by people who blow on the dandelion.");?>';				
				document.getElementById('user_answer2').style.color="green";
				$('#user_answer2').text(textstr2);
				selected_answer2='<?php echo _("By wind when it blows.");?>';
				studentAnswer2 = 'C';
			
			}else if (hexaValue2 == './images/9/d.png') {
				$('#answer-icon2').attr("src", "images/misc/wrong.png");
				$('#answer-icon2').addClass('img-align');
				$('.imganswer2').attr("src","images/9/d.png");
				$('#sorry2').removeClass('hidden');
				textstr2 = '<?php echo _("No, an animal may occasionally eat a dandelion and spread its seeds, but very few dandelion seeds are spread this way.");?>  ';
				document.getElementById('user_answer2').style.color="red";
				$('#user_answer2').text(textstr2);
				selected_answer2='<?php echo _("By animals when they eat the flower.");?>';
				studentAnswer2 = 'D';
			}
			$('#selected_answer1').text(selected_answer1);
			$('#selected_answer2').text(selected_answer2);
		if (answered == 0) {
			var hexavalue = hexa.getValue();
			var hexavalue2 = hexa2.getValue();
			if (hexavalue == './images/9/a.png') studentAnswer = 'A';
			if (hexavalue == './images/9/b.png') studentAnswer = 'B';
			if (hexavalue == './images/9/c.png') studentAnswer = 'C';
			if (hexavalue == './images/9/d.png') studentAnswer = 'D';
			
			if (hexavalue2 == './images/9/a.png') studentAnswer2 = 'A';
			if (hexavalue2 == './images/9/b.png') studentAnswer2 = 'B';
			if (hexavalue2 == './images/9/c.png') studentAnswer2 = 'C';
			if (hexavalue2 == './images/9/d.png') studentAnswer2 = 'D';
			
			if(answered == 0){
				saveAnswer('life-cycle-of-plants-qc3-a', studentAnswer);
				saveAnswer('life-cycle-of-plants-qc3-b', studentAnswer2);			
				answered = 1;
			}
		}
	}
</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/9/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}
#screen1 { max-width: 95%; margin: 0 auto; }
#answer{ display: none; text-align: center;  max-width: 95%;  margin-top: 0%; margin:0 auto; }
.center{text-align:center; position: relative; z-index: 20; color:#8A5101;} 
.clear { clear:both;}

#hexaflip1, #hexaflip2 { margin: 0 auto;  }
.c1{color:#CB3C1C;}
.c2{color:#B06BF8;}
.c3{color:#614A2A;}
.c4{color:#C94271;}
.red { color:red; }
.green {color: green;}
.key{color: rgb(42, 111, 165);}
.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }

.mbottom{ margin-bottom:20px;}

.text-indent{ text-indent:40px; }

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

.question-container{width:80%;}
h2{font-size:24px;font-weight:normal;color: darkcyan; text-align:left;}
#answer_box{text-align: center;}
#answer_box p{margin:0;}
.fleft{ float:left; }
.f-size{font-size:20px;}
.f-weight{font-weight:normal !important;}
.alignment{margin-top:21px; padding-left:17px; color:#592D10;}
.blue{color: rgb(42, 111, 165);}
.fright{ float:right; }
#answer-icon, #answer-icon2 { display:inline-block; margin-right:5px;}
#user_answer, #user_answer2 {vertical-align: middle;}
h2, p { font-size: 24px; font-weight: normal;}
img { vertical-align: middle; }
.no-margin{margin: 10px 0 0 15px;}
.no-mtop{margin:0 0 10px 0;}
.no-marg{margin-top:0;}
.no-mbottom {margin-bottom:0;}
.mtop{margin-top:5px !important;}
.answer_container{float:left; width:69%; margin:5px 0 25px 10px;}
.answer_container p {text-align:left; margin:0; margin-top: 5px;}
.img-container {float:left; margin-top:20px; margin: 15px 0 0 47px; }

#hexaflip2 {margin-bottom:0 !important;}
#hexaflip1, #hexaflip2{margin:0 20px 70px 5px; width:145px !important;}

html[dir="rtl"] h1 { padding-right: 20px !important; }
html[dir="rtl"] h2 { text-align: right; }
html[dir="rtl"] .center { text-align: right; }
html[dir="rtl"] #sun { left: 0; margin-left: -11%; }
html[dir="rtl"] #screen1 { position: relative; }
html[dir="rtl"] .fleft { float: right !important; margin-bottom: 35px; }
html[dir="rtl"] #hexaflip1, html[dir="rtl"] #hexaflip2  { position: absolute; left: 20px; top: 20px; }
html[dir="rtl"] #hexaflip2 { top: 210px; }
html[dir="rtl"] #answer .answer_container { width: 78%; }
html[dir="rtl"] #answer .answer_container p { text-align: right !important; }
html[dir="rtl"] #answer .img-container { float: right !important; margin: 0 0 0 20px; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="rtl"] #hexaflip1 { top: 120px; }
	html[dir="rtl"] #hexaflip2 { top: 340px; }
	html[dir="rtl"] #answer .answer_container { width: 73%; }
	.center { z-index: 1; }
	#hexaflip1, #hexaflip2 { margin: 50px 20px 20px 5px; }
	.question-container { width: 70%; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	html[dir="rtl"] #hexaflip1 { top: 110px; }
	html[dir="rtl"] #hexaflip2 { top: 300px; }
}


#buttons .next { display: none; }		
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg"  >
			<div id="sun"></div>				
					<h1 class="alignment"><?php echo _("Quick Check #3");?></h1>			
					<div id="screen1">			

						<p class="center"><?php echo _("Rotate or flip the 3D box below either up or down to set your answer.");?><br/><?php echo _("Click the box, then hold, and slide mouse up or down");?>.</p>

						<div class="question-container fleft">
							<h2 class="no-mtop"><?php echo _("Question A. Which of these statements is true");?>?</h2>
							 <p class="no-margin">A. <?php echo _("All plants have seeds and reproduce this way.");?><br/>
								B. <?php echo _("Acorns, walnuts and coconuts are all large seeds.");?><br/>
								C. <?php echo _("Cross-pollination is when a pollinator moves pollen to the same plant.");?><br/>
								D. <?php echo _("Seeds need to be planted nearby the parent plant.");?></p>
						</div>
						<div id="hexaflip1" class="fright"></div>
						<div class="clear"></div>
						<div class="question-container fleft">
							<h2 class="no-mtop"><?php echo _("Question B. How are dandelion seeds primarily dispersed");?>?</h2>			
							<p class="no-margin">A. <?php echo _("By the plant falling and dying.");?><br/>
								B. <?php echo _("By water when it rains.");?><br/>
								C. <?php echo _("By wind when it blows.");?><br/>
								D. <?php echo _("By animals when they eat the flower.");?></p>
						</div>
						<div id="hexaflip2" class="fright"></div>
						<div class="clear"></div>
					</div>
				
				<!--SCREEN 2-->
					<div id="answer">													
							<h2><?php echo _("Question A. Which of these statements is true");?>?</h2>
								<div class="img-container">
									<img class="imganswer" height="155" id="image_answer" />
								</div>
							<div class="answer_container">
								<p><?php echo _("You answered");?>...<p>
								<p id="selected_answer1"></p>
								<p><img src="images/misc/wrong.png" id="answer-icon"/><?php echo _("<span id='user_answer'></span>");?></p>							
							</div>	
					<div class="clear"></div>	
							<h2><?php echo _("Question B. How are dandelion seeds primarily dispersed");?>? </h2>						
								<div class="img-container">
									<img class="imganswer2" id="image_answer2" />
								</div>							
							<div class="answer_container">
								<p><?php echo _("You answered");?>...<p>
								<p id="selected_answer2"></p>
								<p><img src="images/misc/wrong.png" id="answer-icon2"/><?php echo _("<span class='green f-weight' id='user_answer2'></span>");?></p>
							</div>
					</div>
				<div class="clear"></div>					
			</div>
		</div>	<!---END-->		
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script src="scripts/hexaflip.js"></script>
    <script>
        var hexa1, hexa2;
		set1 = ['./images/9/a.png','./images/9/b.png','./images/9/c.png','./images/9/d.png'];

		for(var i = 1; i < 3; i++) {
			window["hexa" + i] = new HexaFlip(document.getElementById('hexaflip' + i), { set: set1 }, { size: 150 });
		}
    </script>
	<section id="preloader"><section class="selected"><strong><?php echo _("Another quick check on the way!");?></strong></section></section>
<?php include("setlocale.php"); ?>
</body>
</html>
