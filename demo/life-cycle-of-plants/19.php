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
var answered = 1;
var studentAnswer ='';
var nullAnswer = false;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

	$('a.back-toggle').click(function(){
		if( $('#screen1').is(':visible') ) {
			document.location.href= "18.php";
		} else {
			$('#answer').fadeOut(function(){ $('#screen1').fadeIn(); });
			$('a.next-toggle').fadeOut(function(){  $('a.check-toggle').fadeIn();});
			$('h1').html('<?php echo _("Quiz Question #6");?>');
			$('#answer-icon').removeClass('img-align');
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
				$('h1 span').fadeIn();  
				$('img.play-toggle').fadeIn(); 
				checkAnswer();
				$('#answer').fadeIn();
			});
			$('a.check-toggle').fadeOut(function(){  
			$('a.next-toggle').fadeIn(); 
			$('a.back-toggle').fadeIn();  });
			$('h1').html('<?php echo _("Quiz Question #6")?> - <?php echo _("How did I do?");?>');
		}
	});
		
	$('#r1').click(function(){
		$('#radio-img').attr("src","images/19/cross_pollination.jpg");
	});
	
	$('#r2').click(function(){
		$('#radio-img').attr("src","images/19/self_pollination.jpg");
	});
	
	$('#r3').click(function(){
		$('#radio-img').attr("src","images/19/germination.jpg");
	});
	
	$('#r4').click(function(){
		$('#radio-img').attr("src","images/19/seed_dispersal.jpg");
	});

	function checkNull() {	
		if($('#r1').is(':checked') == false && $('#r2').is(':checked') == false && $('#r3').is(':checked') == false && $('#r4').is(':checked') == false) {
			nullAnswer = true;
		} 
	}
});

</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/19/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}
#screen1 { text-align: center;  max-width: 95%; margin: 0 auto; }
#answer{ display: none; text-align: center;  max-width: 95%;  margin-top: 0%; margin:0 auto; margin-top: 70px;}
.clear { clear:both;}

.key{color: rgb(42, 111, 165);}
.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }

.mbottom{margin-bottom:20px;}
@-webkit-keyframes infinite-spinning {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
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

#question-container{width:100%;margin-top:65px;}
#question-container h2{font-size:24px;text-align:left !important;font-weight:normal;}
#question-container p{font-size:24px;text-align:left !important;font-weight:normal;}
.fleft{float:left;}
.f-size{font-size:20px;}
.f-weight{font-weight:normal !important;}
.alignment { margin-top: 10px; padding-left:17px; font-size:35px; color:#9B5B02;}
.img-align { vertical-align: sub; }
.fright{ float:right; }
.mtop{margin-top:70px !important;}
.t-align {text-align: center !important;}
#choices input {  width: 15px; height: 20px; }
#choices li { color: #000000; text-align: left; font-size: 18px; list-style-type: none; }
#choices { width:74%; margin-left:5%;}

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
.imganswer { width: 40%; height: 250px; max-height:90%;}  
.marg-left{margin-left:0px !important; padding-left:0px !important;}
#answer-icon, #answer-icon2 { display:inline-block; vertical-align:middle;}
h2, p{ font-size:24px; font-weight:normal; margin:0;}
.image-container{ width:45%; height:210px; float:right; }
.image-container img{ width:100%; height:100%;
-moz-border-radius: 15px;
            -khtml-border-radius: 15px;
            -webkit-border-radius: 15px;
			height:100%;
			width:100%;
}
.round-img{
-moz-border-radius: 15px;
            -khtml-border-radius: 15px;
            -webkit-border-radius: 15px;
			height:100%;
			width:100%;
}
#question{color:lightcoral; }
h2{color:darkcyan; text-align:left;}

html[dir="rtl"] h1 { padding-right: 20px !important; }
html[dir="rtl"] h2 { text-align: right !important; }
html[dir="rtl"] .choicebox h2 { text-align: center !important; }
html[dir="rtl"] li { text-align: right !important; }
html[dir="rtl"] .image-container { padding-left: 50px; }
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
		<div class="bg">								
				<h1 class="alignment"><?php echo _("Quiz Question #6");?></h1>					
					<div id="screen1">							
							<h2><?php echo _("When insects and wind assist and pollen from the same flower is brought to the stigma of that flower. This description is related to which of the following terms?");?></h2><br/>																							
							<div id="choices" class="fleft"> 
								<div class="image-container"><img src="images/19/cross_pollination.jpg" id="radio-img"></div>	
								<ul class="marg-left">
									<li><input type="radio" id="r1" name="rr"/>
									<label for="r1"><span></span><?php echo _("Cross-pollination");?></label></li><br/>
									
									<li><input type="radio" id="r2" name="rr" />
									<label for="r2"><span></span><?php echo _("Self-pollination");?></label></li><br/>
									
									<li><input type="radio" id="r3" name="rr" />
									<label for="r3"><span></span><?php echo _("Germination");?></label></li><br/>
									
									<li><input type="radio" id="r4" name="rr" />
									<label for="r4"><span></span><?php echo _("Seed dispersal");?></label></li>						
								</ul>												
							</div>																
						<div class="clear"></div>												
					</div>					
				
				<!--SCREEN 2-->
					<div id="answer">						
										
							<p><?php echo _("You answered...");?></p>
							<img src="images/19/self_pollination.jpg" class="imganswer" height="200" id="image_answer" style="-moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; " />
							<p><span id="textanswer">nothing.</span></p>
							<p><img src="images/misc/wrong.png" id="answer-icon" /><span id="user_answer"></span></p>						
																
					</div>
				
		</div>	<!---END-->		
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script src="scripts/hexaflip.min.js"></script>   
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Pollinator assistants");?></strong></section></section>
<?php include("setlocale.php"); ?>

<script>	
	function checkAnswer() {
		
		 if($('#r1').is(":checked")) {			
			textstr = '<?php echo _("No, cross-pollination is when pollen from a different flower is brought to the stigma of a flower.");?>';
			document.getElementById('user_answer').style.color="red";
			$('#textanswer').text('<?php echo _("Cross-pollination"); ?>');
			$('#answer-icon').attr("src", "images/misc/wrong.png");
			$('#answer-icon').addClass('img-align');
			$('#image_answer').attr("src", "images/19/cross_pollination.jpg");
			$('#user_answer').text(textstr);
			studentAnswer = 'A';
		}
		else if($('#r2').is(":checked")) {			
			textstr = ' <?php echo _("Correct. Pollinators can help, as long as the pollen and stigma are from the same flower, it is considered self-pollination.");?>';
			document.getElementById('user_answer').style.color="green";
			$('#textanswer').text('<?php echo _("Self-pollination"); ?>');
			$('#answer-icon').attr("src", "images/misc/correct.png");
			$('#image_answer').attr("src", "images/19/self_pollination.jpg");
			$('#user_answer').text(textstr);
			studentAnswer = 'B';
		}
		else if($('#r3').is(":checked")) {			
			textstr = '<?php echo _("No, germination is the sprouting and growth of a seed to a seedling.");?>';
			document.getElementById('user_answer').style.color="red";
			$('#textanswer').text('<?php echo _("Germination"); ?>');
			$('#answer-icon').attr("src", "images/misc/wrong.png");
			$('#answer-icon').addClass('img-align');
			$('#image_answer').attr("src", "images/19/germination.jpg");
			$('#user_answer').text(textstr);
			studentAnswer = 'C';
		}
		else if($('#r4').is(":checked")) {			
			textstr = '<?php echo _("No, pollinators such as insects and wind disperse seeds for pollination. Self-pollination is when pollen from the same flower is brought to the stigma of that flower.");?>';
			document.getElementById('user_answer').style.color="red";
			$('#textanswer').text('<?php echo _("Seed dispersal"); ?>');
			$('#answer-icon').attr("src", "images/misc/wrong.png");
			$('#answer-icon').addClass('img-align');
			$('#image_answer').attr("src", "images/19/seed_dispersal.jpg");
			$('#user_answer').text(textstr);
			studentAnswer = 'D';
		}
		if(answered == 0){
			saveAnswer('life-cycle-of-plants-qq6-a', studentAnswer);						
			answered = 1;	
		}
		
	}
</script>

</body>
</html>
