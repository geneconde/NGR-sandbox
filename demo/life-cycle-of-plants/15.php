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
var studentAnswer ='';
var answered = 1;
var nullAnswer = false;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

	$('a.back-toggle').click(function(){
		if( $('#screen1').is(':visible') ) {
			document.location.href= "14.php";
			
		} else {
			$('#screen2').fadeOut(function(){ $('#screen1').fadeIn(); $('h1').html('<?php echo _("Quiz Question #2");?>');});
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
			$('a.play-toggle').fadeIn(); 
			$('#screen2').fadeIn();
			checkAnswer();		
			});
			$('a.check-toggle').fadeOut(function(){ 
				$('a.next-toggle').fadeIn(); 
				$('a.back-toggle').fadeIn();  });		
			
			$('h1').html('<?php echo _("Quiz Question #2")?> - <?php echo _("How did I do?");?>');
		}
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
img { border : none; vertical-align: middle; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/15/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}
#screen1 { max-width: 95%; margin: 0 auto; }
#screen2{ display: none;  max-width: 95%;  margin-top: 0%; margin:0 auto; text-align:center;}

.clear { clear:both;}

.key{color: rgb(42, 111, 165);}
.bold { font-weight: bold; }
.small { font-size:.8em; }
.hidden { display: none; }
.mbottom{margin-bottom:20px;}

h2, p{ font-size:24px; font-weight:normal; }
#answer{ text-align: center;  max-width: 95%;  margin-top: 70px !important; margin:0 auto; min-height:300px;}
.fleft{ float:left; }
.f-size{ font-size:20px; }
.f-weight{font-weight:normal !important; vertical-align: middle;}
.alignment{margin-top:10px; padding-left:17px; font-size:35px; color: #9B5B02;}
.fright{ float:right; }
.instruction_box{ width:22%;margin-right:20px; margin-top:39px; text-align:left;}
.mtop{margin-top:70px !important;}
#choices input {  width: 15px; height: 20px; }
#choices li { color: #000000;  font-size: 24px; list-style-type: none; }
#choices { width:100%; }

input[type="radio"] { display:none; }
input[type="radio"] + label { font-size:23px; } 
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
.marg-left{padding-left:2px !important;}
#answer-icon, #answer-icon2 { display:inline-block; height: 25px; width: 20px; margin-right:5px;}
#question{color:darkcyan;}

html[dir="rtl"] h1 { padding-right: 20px !important; }
html[dir="rtl"] h2 { text-align: right !important; }
html[dir="rtl"] .choicebox h2 { text-align: center !important; }
html[dir="rtl"] #sun { left: 0; margin-left: -11%; }
html[dir="rtl"] #answer h2 { text-align: center !important; }
html[dir="rtl"] #answer .t-align { text-align: center; }
html[dir="rtl"] #choices ul { float: right; }

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
				<h1 class="alignment"><span class="blue"><?php echo _("Quiz Question #2"); ?></span></h1>					
					<div id="screen1">													
							<h2 id="question" ><?php echo _("A strong storm has blown through your neighborhood. After the storm, you noticed the flowers on the plants outside have been damaged. How would this affect the life cycle of the plant?");?></h2>				
							<h2><?php echo _("Select one of the choices below.");?></h2>
							<div id="choices">								
								<ul class="marg-left">
									<li><input type="radio" id="r1" name="rr" />
									<label for="r1"><span></span>A. <?php echo _("It would not affect the plant's life cycle at all.");?></label></li><br/>
									
									<li><input type="radio" id="r2" name="rr" />
									<label for="r2"><span></span>B. <?php echo _("Without its flowers and seeds, the plant would be unable to reproduce.");?></label></li><br/>
									
									<li><input type="radio" id="r3" name="rr" />
									<label for="r3"><span></span>C. <?php echo _("A pollinator can still make the plant reproduce, even without the flower and seeds.");?></label></li><br/>
									
									<li><input type="radio" id="r4" name="rr" />
									<label for="r4"><span></span>D. <?php echo _("The plant would remain in its current state until it is removed.");?></label></li>						
								</ul>													
							</div>																
					</div>					
				
				<!--SCREEN 2-->
					<div id="screen2">						
						<div id="answer">							
							<h2><?php echo _("You answered...");?></h2>												
							<h2 id="feedback"></h2>							
							<h2><img src="images/misc/wrong.png" id="answer-icon" height="20"/><span id="sorry" class="red hidden" style="font-size:20px;">Sorry. </span><span class="f-weight" id="user_answer"></span></h2>						
						</div>							
					</div>												
		</div>				
	</div>	<!---END-->		
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Plants and storms");?></strong></section></section>
<?php include("setlocale.php"); ?>

<script>
var textstr = null;

	function checkAnswer() {
		
		 if($('#r1').is(":checked")) {			
			textstr = '<?php echo _("No, it would affect the plant’s life cycle. Without its flowers and seeds, the plant would be unable to reproduce.");?>';
			document.getElementById('user_answer').style.color="red";
			$('#feedback').html($('label[for="r1"]').html());
			$('#answer-icon').attr("src", "images/misc/wrong.png");
			$('#user_answer').text(textstr);	
			studentAnswer = 'A';
		}
		else if($('#r2').is(":checked")) {			
			textstr = '<?php echo _("Most flowering plants need seeds to reproduce. If the flowers are too damaged to create seeds, the plant would produce new flowers to allow reproduction to continue.");?>';
			document.getElementById('user_answer').style.color="green";
			$('#feedback').html($('label[for="r2"]').html());
			$('#answer-icon').attr("src", "images/misc/correct.png");
			$('#user_answer').text(textstr);
			studentAnswer = 'B';
		}
		else if($('#r3').is(":checked")) {			
			textstr = '<?php echo _("No, a pollinator does not make the plant reproduce. It simply assists in pollination and helps set the stage for reproduction in the flower.");?>';
			document.getElementById('user_answer').style.color="red";
			$('#feedback').html($('label[for="r3"]').html());
			$('#answer-icon').attr("src", "images/misc/wrong.png");
			$('#user_answer').text(textstr);
			studentAnswer = 'C';
		}
		else if($('#r4').is(":checked")) {			
			textstr = '<?php echo _("No, even the organisms that have the ability to fix themselves do not go backwards in their life cycle. Without its flowers and seeds, the plant would be unable to reproduce.");?>';
			document.getElementById('user_answer').style.color="red";
			$('#feedback').html($('label[for="r4"]').html());
			$('#answer-icon').attr("src", "images/misc/wrong.png");
			$('#user_answer').text(textstr);
			studentAnswer = 'D';
		}
		if (answered == 0 ) {
			saveAnswer('life-cycle-of-plants-qq2-a', studentAnswer);	
			answered = 1;
		}
		
	}
</script>

</body>
</html>
