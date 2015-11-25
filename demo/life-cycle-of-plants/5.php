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
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/save-answer.js"></script>

<script>
var answer1, answer2, answered = 1;
var nullAnswer = false;
var textstr = '';
var studentAnswer = '', studentAnswer2 = '';
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	$('.blink').blink({ speed: 500, blinks: 1000 });
	
	
	/*Screen Transition*/
	 /* Back Transition */
	$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
			document.location.href= "4.php#screen3";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut();
				$('a.checkanswer-toggle').fadeIn();
				$('h1').text('<?php echo _("Quick Check #1"); ?>');
				$('#answer1').removeClass('green');
				$('#answer1').removeClass('red');
				$('#answer2').removeClass('green');
				$('#answer2').removeClass('red');
			});
		}
	});

	$('a.checkanswer-toggle').click(function(e){
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert('<?php echo _("Please select your answer."); ?>');
			nullAnswer = false;	
			$('#answer1').removeClass('green');
			$('#answer1').removeClass('red');
			$('#answer2').removeClass('green');
			$('#answer2').removeClass('red');
				
		} else {
			checkAnswer();
			$('a.checkanswer-toggle').fadeOut(function (){ $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){			
				$('h1').text('<?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?");?>');
				$('#answer').fadeIn();
			});
			
		}
	});

	/* ============================ Start =============================*/
	$(".pic img").each(function() {
		$(this).click(function() {
			var parent_id = $(this).parent().parent().attr('id');
			var set = parent_id[parent_id.length - 1];
			clearEverything(set);
			//if(window["answer" + set] != $(this).data('name')) {
				$(this).addClass('border-off');
				window["answer" + set] = $(this).data('name');
			//}
		});
	});
	/* ============================ End =============================*/
});

function clearEverything(set) {
	$('#choices' + set + ' .pic img').each(function() {
		$(this).removeClass('border-off');
	});
}

function checkAnswer(){
	if (answer1 == "B") {
		textstr = '<?php echo _("Correct! Not all seeds need sunlight to grow. When the seedling gets to the surface, it can begin to make its own food through photosynthesis.");?>';
		$('#answer1').text(textstr);
		$('#answer1').addClass('green');
		$('#textanswer1').text('<?php echo _("Sunlight");?>');
		$('#image-answer1').attr("src","images/5/sunlight.jpg");
		$('#answer-icon1').attr('src','images/misc/correct.png');
	} else {
		if (answer1 == "A")  {
			textstr = '<?php echo _("No, seeds need a certain amount of moisture and humidity to grow. Too little moisture and they won’t grow, too much and they will rot.");?>';
			$('#textanswer1').text('<?php echo _("Stored water");?>');
			$('#image-answer1').attr("src","images/5/water.jpg");					
		} else if (answer1 == "C") {
			textstr = '<?php echo _("No, seeds need stored food to power the seedling to grow through inches of soil.");?>';
			$('#textanswer1').text ('<?php echo _("Stored food");?>');
			$('#image-answer1').attr('src','images/5/food.jpg');
		} else if (answer1 == "D") {
			textstr = '<?php echo _("No, seeds need the correct soil temperature to grow. For example, a tropical seed might not grow in cool temperatures.");?>';
			$('#textanswer1').text('<?php echo _("Appropriate temperature");?>');
			$('#image-answer1').attr("src","images/5/temperature.jpg");					
		}
		$('#answer1').text(textstr);
		$('#answer1').addClass('red');
		$('#answer-icon1').attr("src", "images/misc/wrong.png");
		$('#answer-icon1').addClass('img-align');
	}	

	if (answer2 == "D") {
		textstr = '<?php echo _("Correct! A seedling does not have a flower. The flower is the part of a flowering plant that makes seeds.");?>';
		$('#answer2').text(textstr);
		$('#answer2').addClass('green');
		$('#textanswer2').text ('<?php echo _("Flowers");?>');
		$('#image-answer2').attr('src','images/5/flowers.jpg');
		$('#answer-icon2').attr('src','images/misc/correct.png');
	} else {
		var textstr2 = '';
			if (answer2 == "A") {
				textstr = '<?php echo _("No, a seedling does have roots.");?>';
				$('#textanswer2').text('<?php echo _("Roots");?>');
				$('#image-answer2').attr("src","images/5/roots.jpg");	
			} else if (answer2 == "B"){
				textstr = '<?php echo _("No, a seedling does have a stem.");?>';
				$('#textanswer2').text('<?php echo _("Stem");?>');
				$('#image-answer2').attr("src","images/5/stem.jpg");	
			} else if (answer2 == "C"){
				textstr = '<?php echo _("No, a seedling does have leaves.");?>';
				$('#textanswer2').text('<?php echo _("Leaves");?>');
				$('#image-answer2').attr("src","images/5/leaves.jpg");	
			}
			
			$('#answer2').text(textstr);
			$('#answer2').addClass('red');
			$('#answer-icon2').attr("src", "images/misc/wrong.png");
			$('#answer-icon2').addClass('img-align');

	}

	//END
	if(answered == 0){
		saveAnswer('life-cycle-of-plants-qc1-a', answer1);	
		saveAnswer('life-cycle-of-plants-qc1-b', answer2);									
		answered = 1;	
	}
}

function checkNull() {
	if(answer1 == null) nullAnswer = true;
	if(answer2 == null) nullAnswer = true;
}
</script>
<style>
html { background-color: #fff; }
body { display: none; }
html, body { height: 100%; padding: 0; margin: 0; font-family: 'PlaytimeRegular'; min-height: 450px;  }
.wrap { margin: 0 auto; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/5/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height: 100%; position:relative;  overflow:hidden;}
.centered { text-align:center;}
#screen1 { width: 95%; }
#answer { display:none; text-align: center;  max-width: 100%; margin:0 auto; min-height:300px; }

h1 { margin-top: 21px; padding-left: 17px; font-size: 35px; color: #592D10; }
h2 { margin:0; font-weight: normal; font-size: 24px; text-align: left; padding: 5px 0; margin: 0; color:darkcyan;}

p { font-size: 24px; padding: 5px 0; margin: 0; }
.center { text-align: center; padding-left:5px; }
.clear { clear:both;}
/* .buttons { position: absolute; bottom: 2%; right: 2%; }
.buttons-back { position: absolute; bottom: 2%; left: 2%; } */
img.next-toggle {  display:none; }
.secondh2 { display: none;}
.wrong { background-color: gray; width: 80px;  border-radius: 10px; z-index: 1; opacity: .5; position: relative; }
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown; }
.bold { font-weight: bold; }
.hidden { display: none; }
.black {color: black;}
.blue {color:#01A0E1;}

.q-container{ margin-left: 17px !important; }
.img-align { vertical-align: sub; }


#choices1, #choices2 { width: 100%; margin: 0 auto; padding: 5px 0px; }
.pic { height: 100%; float: left; width: 25%; text-align: center; padding: 10px 0px; }
.pic img { height: 143px; width: 188px; margin: 0 auto; cursor: pointer; }
.pic p { font-size: 20px; text-align: center; }
img { -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; }


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

#answer-icon1, #answer-icon2 { display: inline-block; }
#textanswer1, #textanswer2 { color: purple; }
.no-pad{padding:0;}

img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #ECC377;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}
#a-container { margin:50px 0 0 17px !important;}
#b-container{ margin:0 0 0 17px !important;}
.fl{float:left;}
.fr{float:right;}
.img-container {float:left; margin-top:20px; margin: 15px 0 0 47px; }
.answer_container{float:left; width:69%; margin:5px 0 25px 10px;}
.t-align{text-align:left;}
#image-answer1, #image-answer2 {height: 150px; border: 4px solid #ECC377;}

html[dir="rtl"] h1 { padding-right: 20px !important; }
html[dir="rtl"] h2 { text-align: right; }
html[dir="rtl"] .pic h2 { text-align: center; }
html[dir="rtl"] .q-container { margin-right: 17px !important; }
html[dir="rtl"] #sun { left: 0; margin-left: -11%; }
html[dir="rtl"] #answer h2 { padding-right: 20px; }
html[dir="rtl"] #answer .t-align { text-align: center; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { z-index: 555; position: relative; }
	.pic img { height: auto; width: 160px; }
	.answer_container { float: right; width: 60%; }
	#answer-icon1, #answer-icon2 { padding-left: 10px; }
}
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap" >	
		<div class="bg">
			<div id="sun"></div>				
			<h1><?php echo _("Quick Check #1");?></span></h1>		
			<div id="screen1" class="screens">
				<div class="q-container">
					<h2 class="firsth2"><?php echo _("Question A. What is <span class='red blink'>NOT</span> required for a seed to begin to grow?");?></h2>
					<div id="choices1"> 
						<div class="pic">
							<img id="a1" class="border" src="images/5/water.jpg" data-name="A">
							<h2 class="orange  centered"><?php echo _("Stored water");?></h2>
						</div>
						<div class="pic">
							<img id="b1" class="border" src="images/5/sunlight.jpg" data-name="B">
							<h2 class="purple  centered"><?php echo _("Sunlight");?></h2>
						</div>
						<div class="pic">
							<img id="c1" class="border" src="images/5/food.jpg" data-name="C">
							<h2 class="blue centered"><?php echo _("Stored food");?></h2>
						</div>
						<div class="pic">
							<img id="d1" class="border" src="images/5/temperature.jpg" data-name="D">
							<h2 class="brown centered"><?php echo _("Appropriate temperature");?></h2>
						</div>							
					</div>
					<div class="clear"></div>
				</div>
				<div class="q-container">
					<h2><?php echo _("Question B. Which part does a seedling <span class='red blink'>NOT</span> have?");?></h2>
					<div id="choices2">  	
						<div class="pic">
							<img id="a2" class="border" src="images/5/roots.jpg" data-name="A">
							<h2 class="brown centered"><?php echo _("Roots");?></h2>
						</div>
						<div class="pic">
							<img id="b2" class="border" src="images/5/stem.jpg" data-name="B">
							<h2 class="orange centered"><?php echo _("Stem");?></h2>
						</div>
						<div class="pic">
							<img id="c2" class="border" src="images/5/leaves.jpg" data-name="C">
							<h2 class="purple centered"><?php echo _("Leaves");?></h2>
						</div>
						<div class="pic">
							<img id="d2" class="border" src="images/5/flowers.jpg" data-name="D">
							<h2 class="blue centered"><?php echo _("Flowers");?></h2>
						</div>
					</div>
					<div class="clear"></div>					
				</div>
			</div>		
			<div id="answer" class="screens">
				<div id="a-container">
					<h2><?php echo _("Question A. What is <span class='red blink'>NOT</span> required for a seed to begin to grow?");?></h2>				
					<div class="img-container">
						<img id="image-answer1" />
					</div>	
					<div class="answer_container">
						<p class="t-align"><?php echo _("You answered");?>...<br/>
							<?php echo _("<span id='textanswer1'></span>");?>							
						</p>
						<p class="t-align"><img id="answer-icon1"><?php echo _("<span id='answer1'></span>");?></p>
					</div>								
					<div class="clear"></div>					
				</div>
				<div id="b-container">
					<h2><?php echo _("Question B. Which part does a seedling <span class='red blink'>NOT</span> have?");?></h2>					
					<div class="img-container">
						<img id="image-answer2" />
					</div>
					<div class="answer_container">
						<p class="t-align"><?php echo _("You answered");?>...<br/>
							<?php echo _("<span id='textanswer2'></span>");?>							
						</p>
						<p class="t-align"><img id="answer-icon2"><?php echo _("<span id='answer2'></span>");?></p>
					</div>	
					<div class="clear"></div>
				</div>				
			</div>			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer checkanswer-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>	
	<section id="preloader"><section class="selected"><strong><span><?php echo _("Preparing your first quick check!");?></span></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
