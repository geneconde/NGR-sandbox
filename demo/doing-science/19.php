<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title>Doing Science</title>
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
.bg { background-image: url('images/19/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #A93941; border-right: 1px dashed #A93941;}
h1 { color: #61153e;}
h2 {text-align:left; padding:10px 0 0 10px; margin:0; font-weight:normal;}

p { color: black; font-size:20px;}
.bg section{width:95%; margin:0 auto; position:relative; top:25px; min-height:100px;}
#buttons .next, #buttons img.back-toggle-screen { display:none; }
.allignment{text-align:left; padding: 10px 10px 0 10px; }
#ans {margin:0 auto; font-size:20px; padding-top:20px;}
.resize {height:25px; vertical-align:middle;}
#user_answer{vertical-align:middle;}
#choices {float:left; margin-left:93px; }
#choices img:nth-child(2) {margin-left:30px; padding-bottom:35px;}
#choices img:nth-child(3) {margin-left:20px;}
#choices img:nth-last-child(1) {margin-left:100px;}

#radio { min-height: 150px; margin:10px 0 0 0; width:100%; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 7px 0px; width:45%; margin-left:30px; float:left;}

input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"]  + label span{ background: url('images/19/sprite.png')left top no-repeat; position: relative; margin-right:10px; padding:0 0 0 31px !important; cursor: pointer; line-height: 40px; max-width: 39px; min-height: 74px; display:inline-block; z-index:0;  overflow: hidden; vertical-align:middle; margin-top:-20px; float: left; }
input[type="radio"]:checked + label span { background-position: -45px 0; }	
label {font-size:22px; vertical-align:top; cursor: pointer; line-height: 28px; }
#text-box {float:left; width: 51%;}
#graph {float:right; width:40%; }
#graph img {width:90%; margin: 0 5%; max-height: 170px;}
.legend { color: indigo;}
.small_font {font-size:20px;}
.smaller_font {font-size:18px;}
.mr{margin-right:80px;}
#legends {width:100%; margin-top:5px;}
#legend1 {margin: 5px; margin-left:28px; width:20px; height:20px; background-color:#ff6633; float:left;}
#legend2 {margin: 5px; width:20px; height:20px; background-color:#ff33ff; float:left; }
#population {float:left; width:9%; margin-top:110px;}
.def {font-size:24px;}
html[dir="rtl"] .mr { float: left; margin-right: 0; }
html[dir="rtl"] input[type="radio"] + label span { float: right; margin-left: 10px; }
html[dir="rtl"] #radio li { text-align: right; }



@media all and (max-width : 1250px){
	.bg section { position: relative; top: 0;}
}

<?php if ($language == 'es_ES'): ?>
	.smaller_font { font-size: 16px; }
	#legend1 { margin-left: 5px; }
<?php endif; ?>
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #6");?> </h1>					
					<div id="text-box">
						<p class="allignment"><?php echo _("A recent study focused on the color variations of a certain species of mouse living in two neighboring habitats. Habitat 1 is a dark-colored, hardened lava bed, and habitat 2 is a desert scrub with light-colored soil located at the edge of the lava bed. The graph shows the percent of dark-colored and light-colored mice captured in each habitat.");?>
						</p>
						
						<div id="legends">
							<div id="legend1"></div><p class="legend smaller_font fl no-mleft"><?php echo _("Dark-colored Mice");?></p>
							<div id="legend2"></div><p class="legend smaller_font fl no-mleft"><?php echo _("Light-colored Mice");?></p>
							<div class="clear"></div>
						</div>										
					</div>
					<div id="population">
							<p class="smaller_font legend"><?php echo _("Percent of Population");?></p>
						</div>
					<div id="graph">
						<p class="small_font"><?php echo _("Percent of Dark and Light Colored Mice Captured");?></p>
							<img src="images/19/graph.png" />
						<p class="legend smaller_font"><?php echo _("<span class='mr'>LAVA BED</span> DESERT SCRUB");?></p>
					</div>					
					<div class="clear"></div>
					
					<h2><?php echo _("Which hypothesis was most likely being tested in this investigation?");?></h2>
					<div id="radio">						
						<ul>
							
							<li>
								<input type="radio" id="r1" name="choice">
								<label for="r1" id="ans"><span></span>A. <?php echo _("Individuals of a species are the same size in any environment.");?></label>
							</li>
							<li>
								<input type="radio" id="r3" name="choice">
								<label for="r3" id="ans"><span></span>B. <?php echo _("Individuals of a species always stay in the same environment.");?></label>
							</li>
							<div class="clear"></div>
							<li>
								<input type="radio" id="r2" name="choice">
								<label for="r2" id="ans"><span></span>C. <?php echo _("Individuals of a species living in different habitats are different sizes.");?></label>
							</li>
							<li>
								<input type="radio" id="r4" name="choice">
								<label for="r4" id="ans"><span></span>D. <?php echo _("Individuals of a species living in different habitats have different colors of fur.");?></label>
							</li>							
						</ul>
						<div class="clear"></div>
					</div>					
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1><?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?></h1>					
					<p class="def"><br/><br/><?php echo _("You answered...");?><br/><br/></p>
					
					<p id="selected_answer" class="def"></p><br/><br/>
					<p class="hidden def"><img src="images/others/wrong.png" id="answer-icon" class="resize"/> <span id='user_answer'></span></p>
				</section>
			</div>					
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Trapping the mice...");?></strong></section></section>

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
	if(hash != "") {
	$('.screens').hide();
	$('#'+hash).show(function () {

		var screen = hash[hash.length -1];
			if(screen < screenCount) {
			$('a.back-toggle-screen').delay(300).fadeIn();
			$('a.check-toggle').parent().attr('href','#screen' + screen);
		
		} else {
			$('a.back-toggle-screen').delay(300).fadeIn();
			$('a.check-toggle').fadeOut(function(){
			$('a.next-toggle').fadeIn();
				});
			}
		});
	}
	
	 /* Back Transition */
	$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
			document.location.href= "18.php";			
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('#screen1').fadeIn();				
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('h1').text('<?php echo _("Quiz Question #6");?>');
					$('h1').fadeIn();
					selected_answer= '';	
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
					$('h1').text('<?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?");?>');			
					save();
					$('#answer').fadeIn();			
					}); 
				});
			}
		}
	});	
});
function checkAnswer() {	

		 if($('#r1').is(":checked")) {
			selected_answer = $("#ans").text();
			textstr = "<?php echo _("This investigation is not about how the environment does or doesn't affect the size of the animals. It is about how individuals of a species living in different habitats have different colors of fur.");?>";
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			studentAnswer ="A";
		}
		else if($('#r2').is(":checked")) {
			selected_answer = $("#ans").text();
			textstr = '<?php echo _("The investigation is not about the size of the animals. It is about how individuals of a species living in different habitats have different colors of fur.");?>';
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			studentAnswer ="B";	
		}
		else if($('#r3').is(":checked")) {	
			selected_answer = $("#ans").text();
			textstr = "<?php echo _("This investigation is not about how the environment does or doesn't affect the size of the animals. It is about how individuals of a species living in different habitats have different colors of fur.");?>";
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");		
			studentAnswer ="C";
		} 
		else if($('#r4').is(":checked")) {
			selected_answer = $("#ans").text();
			textstr = '<?php echo _("Correct! The mice have dark fur in a dark-colored habitat and light fur in a light-colored habitat.");?>'; 
			$('#user_answer').addClass('green');
			$('#answer-icon').attr("src", "images/others/correct.png");
			studentAnswer ="D";
		}		
		$('#selected_answer').text(selected_answer);
		$('#user_answer').text(textstr);
		$('p.hidden').removeClass('hidden');				
	}
	
function save(){
	if(answered == 0){
		saveAnswer('doing-science-qq6', studentAnswer);					
		answered = 1;	
	}
}
function checkNull() {
	if(!$('#r1').is(":checked") && !$('#r2').is(":checked") && !$('#r3').is(":checked") && !$('#r4').is(":checked")) {
		nullAnswer = true;
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
