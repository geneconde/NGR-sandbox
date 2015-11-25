<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js" ></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/prefixfree.js"></script>
<style>
html { background-color: #FFFFFF; overflow: hidden; }
body { display: none; overflow: hidden; }	
.bg { background-image: url('images/5/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #60A23A; border-right: 1px dashed #60A23A;}
h1 { color: #3c661f; font-size:35px;}
h2 {color: #2d4c9c; text-align:left; padding:10px 0 0 10px; margin:0;}
.no-pad {padding-top:0;}
.no-padBottom {padding-bottom:0px;}
p { color: black; }
.bg section{width:99%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
article{border:1px solid black; position:relative; top:30px;}
#radio { min-height: 150px; margin:10px 0 0 10px; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 7px 0px; }

label {font-size:22px; margin:5px 0px !important; cursor: pointer; }

input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"] + label span{ background: url('images/5/sprite.png')left top no-repeat; position: relative; margin-right:5px; padding:0 0 0 39px !important; cursor: pointer; line-height: 40px; max-width: 39px; min-height: 40px; display:inline-block; z-index:0; font-size:20px; overflow: hidden; vertical-align:middle; margin-top:-8px;}
input[type="radio"]:checked + label span { background-position: -38px 0; }

figure { margin:5px 0 0 100px; float:left;}
#container{ margin:5px 0 0 50px; float: left; width:50%; position: relative; z-index: 6; }
#sortable { width: 41%; list-style: none; float: left; padding: 0; margin:0; margin-left:40px;}
#sortable li { background-color: #440351; margin: 0 0 5px 5px !important; padding: 3px 47px 3px 37px; text-align: center; font-size: 22px; cursor: pointer; color: white;  -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
#choices {width: 21%; list-style: none; float: left; padding: 0; margin:0; margin-left:20px;}
#choices li { background-color: #e10052; margin: 0 0 5px 35px !important; padding: 3px 47px 3px 37px; text-align: center; font-size: 22px; color: white;  -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}

.resize {height:25px; vertical-align: middle;}
#ans { width:97%; margin:0 auto;}
#ans2 { width:47%; float:right;}
#answer_container {width:100%; margin:0 auto;}
.checked {width:65px; height:31px; background-color:white; border:1px solid black; float:left;}
.round{ -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
.green {color:green;}
.red {color:red;}
#desc {float:left; width:53%;}
#choices img { display: none; margin:5px 0 0 12px; float: left;}
#user_answer2, #user_answer {padding:0; vertical-align:middle;}
#user_answer2{line-height: 18px;}
.magnify {  position: relative; float:left; margin: 0 50px; }

/*Lets create the magnifying glass*/
.large {
	width: 175px; height: 175px;
	position: absolute;
	border-radius: 100%;
	
	/*Multiple box shadows to achieve the glass effect*/
	box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
	0 0 7px 7px rgba(0, 0, 0, 0.25), 
	inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
	
	/*Lets load up the large image first*/
	background: url('images/5/questionB.png') no-repeat;
	
	/*hide the glass by default*/
	display: none;
}
/*To solve overlap bug at the edges during magnification*/
.small { display: block; }
p.hover-caption { width: 250px; font-size: 20px; }

<?php if ($language == 'es_ES'): ?>
	h2 { font-size: 20px; }
	label { font-size: 20px; }
	p.hover-caption { font-size: 18px; width: 290px; }
	.small { margin: 0 auto; }
	#container { margin-left: 0; }
	#container li { font-size: 18px; }
	#sortable { width: 45%; }
	#selected_answer, .no-padBottom, #user_answer { font-size: 22px; }
	#answer_container p { font-size: 22px; }
<?php endif; ?>

html[dir="rtl"] #answer h2 {padding-top: 0;}
html[dir="rtl"] #radio li {text-align: right;}
html[dir="rtl"] .magnify {float:right;}
html[dir="rtl"] #container {margin: 5px 0 0 50px;float: left;}
html[dir="rtl"] #sortable li {width: 131px;}
html[dir="rtl"] #choices {margin-right: 20px;margin-left: 35px;}
html[dir="rtl"] input[type="radio"] + label span {margin-left: 5px;margin-right: 0;}
html[dir="rtl"] p.hover-caption {text-align: center;}
html[dir="rtl"] #ans p {text-align: center;}
html[dir="rtl"] #desc {float:right;}
html[dir="rtl"] #desc p {text-align: center;}
html[dir="rtl"] #choices img {left: -3px;position: absolute;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.magnify { margin: 0 20px; }
	#container { margin: 5px 0 0; }
	#sortable { width: 52%; }
	#ans2 #choices { margin-left: 0; }
	#answ #sortable { margin-left: 50px; }
	html[dir="rtl"] #desc { width: 50%; }
	html[dir="rtl"] #ans2 { width: 42%; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quick Check #1"); ?></h1>
					<h2><?php echo _("Question A. Click on the correct statement."); ?></h2>
					<div id="radio">
						<ul>
							<li>
								<input type="radio" id="r1" name="choice">
								<label for="r1"><span></span>A. <?php echo _("The body defends itself from chemicals and microorganisms with muscles."); ?></label>
							</li>
							<li>
								<input type="radio" id="r2" name="choice">
								<label for="r2"><span></span>B. <?php echo _("Disease is only brought on by outside factors such as toxins, radiation, or invading bacteria."); ?></label>
							</li>
							<li>
								<input type="radio" id="r3" name="choice">
								<label for="r3"><span></span>C. <?php echo _("The body has a system to fight off invaders, but does not use it until after they are sick."); ?></label>
							</li>
							<li>
								<input type="radio" id="r4" name="choice">
								<label for="r4"><span></span>D. <?php echo _("Disease is a breakdown in the structure or functions of an organism."); ?></label>
							</li>							
						</ul>
					</div>
					<h2><?php echo _("Question B. Look at the diagram of the bacterial cell below. Drag the following terms up or down to match the corresponding letter."); ?></h2>
					<div class="magnify">
							<div class="large"></div>
							<img id="usa" class="small pet" src="images/5/questionB.png" width="250"/>
							<p class='hover-caption'><?php echo _("Hover your magnifying glass to view the labels clearly."); ?></p>													
						</div>										
					<div id="container">
						<ul id="choices">
							<li>A</li>
							<li>B</li>
							<li>C</li>
							<li>D</li>
							<li>E</li>
							<li>F</li>
						</ul>
						<ul id="sortable">
							<li class="ui-state-default"><span data-name="B"></span><?php echo _("Capsule"); ?></li>
							<li class="ui-state-default"><span data-name="A"></span><?php echo _("Cell wall"); ?></li>
							<li class="ui-state-default"><span data-name="C"></span><?php echo _("Cytoplasm"); ?></li>
							<li class="ui-state-default"><span data-name="F"></span><?php echo _("DNA"); ?></li>
							<li class="ui-state-default"><span data-name="D"></span><?php echo _("Flagellum"); ?></li>
							<li class="ui-state-default"><span data-name="E"></span><?php echo _("Pilus"); ?></li>
						</ul>
					</div>
					<div class="clear"></div>
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1></h1>
					<h2><?php echo _("Question A. Click on the correct statement."); ?></h2>
					<div id="ans">
						<p class="no-padBottom"><?php echo _("You answered..."); ?></p>
						<p class="no-padBottom"><span id="selected_answer"></p>
						<p class="no-pad"><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id="user_answer"></span></p>										
					</div>
					<h2><?php echo _("Question B. Look at the diagram of the bacterial cell below. Drag the following terms up or down to match the corresponding letter."); ?></h2>
					
					<div id="answer_container">
						<div id="desc">
							<p class="no-pad"><span id="user_answer2"></p>
						</div>
						<div id="ans2">
							<ul id="choices">
								<img class="resize" id="answer_icon1" src=""><li>A</li>
								<img class="resize" id="answer_icon2" src=""><li>B</li>
								<img class="resize" id="answer_icon3" src=""><li>C</li>
								<img class="resize" id="answer_icon4" src=""><li>D</li>
								<img class="resize" id="answer_icon5" src=""><li>E</li>
								<img class="resize" id="answer_icon6" src=""><li>F</li>
							</ul>												
						</div>
						<div class="clear"></div>
					</div>
				</section>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="6.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Preparing your first quick check!"); ?></strong></section></section>

<script>
$(document).ready(function(){
	var native_width = 0;
	var native_height = 0;

	//Now the mousemove function
	$(".magnify").mousemove(function(e){
		//When the user hovers on the image, the script will first calculate
		//the native dimensions if they don't exist. Only after the native dimensions
		//are available, the script will show the zoomed version.
		if(!native_width && !native_height)
		{
			//This will create a new image object with the same image as that in .small
			//We cannot directly get the dimensions from .small because of the 
			//width specified to 200px in the html. To get the actual dimensions we have
			//created this image object.
			var image_object = new Image();
			image_object.src = $(".small").attr("src");
			
			//This code is wrapped in the .load function which is important.
			//width and height of the object would return 0 if accessed before 
			//the image gets loaded.
			native_width = image_object.width;
			native_height = image_object.height;
		}
		else
		{
			//x/y coordinates of the mouse
			//This is the position of .magnify with respect to the document.
			var magnify_offset = $(this).offset();
			//We will deduct the positions of .magnify from the mouse positions with
			//respect to the document to get the mouse positions with respect to the 
			//container(.magnify)
			var mx = e.pageX - magnify_offset.left;
			var my = e.pageY - magnify_offset.top;
			
			//Finally the code to fade out the glass if the mouse is outside the container
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{
				$(".large").fadeIn(100);
			}
			else
			{
				$(".large").fadeOut(100);
			}
			if($(".large").is(":visible"))
			{
				//The background position of .large will be changed according to the position
				//of the mouse over the .small image. So we will get the ratio of the pixel
				//under the mouse pointer with respect to the image and use that to position the 
				//large image inside the magnifying glass
				var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
				var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				
				//Time to move the magnifying glass with the mouse
				var px = mx - $(".large").width()/2;
				var py = my - $(".large").height()/2;
				//Now the glass moves with the mouse
				//The logic is to deduct half of the glass's width and height from the 
				//mouse coordinates to place it with its center at the mouse coordinates
				
				//If you hover on the image now, you should see the magnifying glass in action
				$(".large").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
});
/* Back Screen */
var hash = window.location.hash.slice(1),
	screenCount = 2,
	answer1 = "",
	answer2 = "",
	answered = 1,
	nullAnswer = false;
	
$(document).ready(function() {
	if(hash != "") {
		$('.screens').hide();
		$('#'+hash).show(function () {
			var screen = hash[hash.length -1];
			if(screen < screenCount) {
				$('a.back-toggle').delay(300).fadeIn();
				$('a.check-toggle').parent().attr('href','#screen' + screen);
			} else {
				$('a.back-toggle').delay(300).fadeIn();
				$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
			}
		});
	}
	
	 /* Back Transition */
	$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
			document.location.href= "4.php#screen3";			
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){							
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('h1').text('<?php echo _("Quick Check #1"); ?>');
					$('h1').fadeIn();
					$('#sortable').appendTo('#container');
					$('a.back-toggle').attr('src','images/buttons/nextb.png');
					$('#screen1').fadeIn();	
					$('#user_answer').removeClass('green');
					$('#user_answer').removeClass('red');
					$('#user_answer2').removeClass('green');
					$('#user_answer2').removeClass('red');
					$( "#sortable" ).sortable('enable');
					studentAnswer2 = '';
			});
		}
	});

	$('a.check-toggle').click(function(e){
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please select your answer."); ?>");
			nullAnswer = false;
			studentAnswer2 = '';
		} else {
			checkAnswer();
			if($('#screen1').is(':visible')) { 				
				$('#screen1').fadeOut( function(){				
					$('a.check-toggle').fadeOut(function (){
					$('a.next-toggle').fadeIn();
					$('h1').text('<?php echo _("Quick Check #1"); ?> - <?php echo _("How did I do?"); ?>');
					$( "#sortable" ).sortable('disable');
					$('a.back-toggle').attr('src','images/buttons/back2.png');
					$('#answer').fadeIn();
					}); 
				});
			}
		}
	});


	$('#sortable').sortable({ containment: "#sortable", scroll: false });
	$( "#sortable" ).disableSelection();	
});

function checkAnswer() {
	var textstr = null;
	var selected_answer= null;
	
	 if($('#r1').is(":checked")) {
		selected_answer ='A. <?php echo _("The body defends itself from chemicals and microorganisms with muscles."); ?>';
		textstr = '<?php echo _("The body defends itself from chemicals and microorganisms with the immune system."); ?>';
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#user_answer').text(textstr);
		$('#selected_answer').text(selected_answer);
		answer1 = 'A';
	}
	else if($('#r2').is(":checked")) {
		selected_answer ='B. <?php echo _("Disease is only brought on by outside factors such as toxins, radiation, or invading bacteria."); ?>';
		textstr = '<?php echo _("While toxins, radiation, and invading bacteria can cause disease, an organism can also break down by itself developing disease."); ?>';
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#user_answer').text(textstr);
		$('#selected_answer').text(selected_answer);
		answer1 = 'B';
	}
	else if($('#r3').is(":checked")) {	
		selected_answer ='C. <?php echo _("The body has a system to fight off invaders, but does not use it until after they are sick."); ?>';
		textstr = '<?php echo _("The body does have a system to fight off invaders, but it kicks in as soon as anything invades our bodies, resisting and not letting us get sick."); ?>';
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#user_answer').text(textstr);	
		$('#selected_answer').text(selected_answer);
		answer1 = 'C';
	} 
	else if($('#r4').is(":checked")) {
		selected_answer ='D. <?php echo _("Disease is a breakdown in the structure or functions of an organism."); ?>';
		textstr = '<?php echo _("Correct! Disease is when an organism breaks down in structure or its functions."); ?>' ;
		$('#user_answer').addClass('green');
		$('#answer-icon').attr("src", "images/others/correct.png");
		$('#user_answer').text(textstr);
		$('#selected_answer').text(selected_answer);
		answer1 = 'D';
	}
	
	var studentAnswer2 = "";
	
	var answers = ["","A","B","C","D","E","F"];
	$('#sortable span').each(function(index){
		var name = $(this).data('name');
		studentAnswer2 = studentAnswer2 + ',' + name;
	});
	
	var sAnswer = studentAnswer2.split(',');
	answer2 = "";
	
	for (var i = 0; i < answers.length; i++) {
		console.log(answers[i] + " :: " + sAnswer[i]); 
		if(answers[i] == sAnswer[i]) {
			$('#answer_icon' + (i)).attr('src','images/others/correct.png');
		} else {
			$('#answer_icon' + (i)).attr('src','images/others/wrong.png');
		}
		answer2 += sAnswer[i];
	}
	
	$('#choices img').css('display','inline-block');
	$('#checked').removeClass('hidden');
	$('#sortable').appendTo('#ans2');
	var textstr2 = "";
	
	if (studentAnswer2 == answers.join()) {
		textstr2 = "<?php echo _("Great job, you labeled the bacteria cell correctly. The cell wall helps the bacterium maintain its shape. The extra layer consisting of a capsule helps protect the cell and allows it to stick to surfaces. Pili  help them attach to other bacteria or surfaces. The cytoplasm is within the cell wall and membrane. The nucleoid contains the bacterium's DNA. Tentacle-like structures called flagellum help some bacteria move."); ?>";
		$('#answer-icon2').attr("src", "images/others/correct.png");
		$('#user_answer2').addClass('green');
		$('#user_answer2').text(textstr2);
	} else { 
		textstr2 = "<?php echo _("Not quite. The cell wall helps the bacterium maintain its shape. The extra layer consisting of a capsule helps protect the cell and allows it to stick to surfaces. Pili  help them attach to other bacteria or surfaces. The cytoplasm is within the cell wall and membrane. The nucleoid contains the bacterium's DNA. Tentacle-like structures called flagellum help some bacteria move."); ?>";
		$('#answer-icon2').attr("src", "images/others/wrong.png");			
		$('#user_answer2').text(textstr2);
		$('#user_answer2').addClass('red');
	}
	
	save();
}


 function checkNull() {
	if(!$('#r1').is(':checked') && !$('#r2').is(':checked') && !$('#r3').is(':checked') && !$('#r4').is(':checked')) {
		nullAnswer = true;
	}
}
 function save() {	
	if (answered == 0) {
		saveAnswer('how-diseases-destroy-qc1-a', answer1);
		saveAnswer('how-diseases-destroy-qc1-b', answer2);
		answered = 1;
	}
}

</script>
<?php require("setlocale.php"); ?>
</body>
</html>
