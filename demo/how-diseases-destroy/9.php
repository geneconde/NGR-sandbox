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
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/9/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #E4C762; border-right: 1px dashed #E4C762;}
h1 { color: #a85592; font-size:35px;}
h2 {color: #2d4c9c; text-align:left; padding:10px 1px 0 10px; margin:0;}
p { color: black; }
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
article{border:1px solid black; position:relative; top:30px;}
#radio { min-height: 150px; margin:20px 20px 0 20px; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 7px 0px; }

label { font-size:22px; margin:5px 0px !important; cursor: pointer; }

input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"] + label span{background: url('images/9/sprite.png')left top no-repeat; position: relative; margin-right:5px; padding:0 0 0 32px !important; cursor: pointer; line-height: 40px; max-width: 33px; min-height: 40px; display:inline-block; z-index:0; font-size:20px; overflow: hidden; vertical-align:middle; margin-top:-8px;}
input[type="radio"]:checked + label span { background-position: -31px 0; }

.resize {height:25px;}
.round{ -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
.green {color:green;}
.red {color:red;}
#img_answer{float:left; margin:20px 0 0 47px;}
.desc {float:left; width:82%; margin:10px 0 0 10px;}
.desc p{text-align: left; padding:0;}
#user_answer {padding:0;}
.no-pad{padding:0;}
#ans {width:96%; padding: 0 5px 0 5px; top: 0 !important; min-height:10px; }
figure img:hover {cursor: pointer;}

img.grayscale {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 10+, Firefox on Android */
    filter: gray; /* IE6-9 */
    -webkit-filter: grayscale(100%); /* Chrome 19+, Safari 6+, Safari 6+ iOS */
}

img.grayscale.disabled {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'1 0 0 0 0, 0 1 0 0 0, 0 0 1 0 0, 0 0 0 1 0\'/></filter></svg>#grayscale");
    -webkit-filter: grayscale(0%);
}
#user_answer2, #user_answer {padding:0; vertical-align:top;}
#choices1 li input[type=radio] { display: none; }
#choices1 ul { 
	overflow: hidden;
	margin: auto;
	padding-left: 10px;
	list-style:none;
}
#choices1 li {
	text-align: center;
	float: left;
	width: 85px;
	margin: 0 0 0 30px;
	cursor: pointer;
}
#choices1{width:65%; margin:0 auto;}
#choices1 label { padding-left: 10px !important; }
#selected_ans { display: none; }

html[dir="rtl"] #selected_ans {text-align: center;}
html[dir="rtl"] #radio li {text-align: right;}
html[dir="rtl"] input[type="radio"] + label span {margin-left: 10px;}
html[dir="rtl"] #img_answer {float: right;margin: 15px 47px 0 10px;}
html[dir="rtl"] .desc {float: right;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#img_answer { float: none; margin: 0; }
	.desc { float: none; width: auto; margin: 0; }
	.desc p { text-align: center; }
	html[dir="rtl"] #choices1 { width: 71%; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quick Check #3"); ?></h1>
					<h2><?php echo _("Question A. Most over-the-counter medications have different dosage directions for young children and adults."); ?>
					<?php echo _("Based on what you have learned, click on the letters below, read the descriptions and choose the best answer."); ?></h2>
					<div id="choices1">
						<ul>
							<li>
								<label for="a">
									<img id="image1" class="grayscale" src="images/9/a-checked.png">
								</label>
								<input type="radio" id="a" value="A" name="choice1"><span></span>
							</li>
							<li>
								<label for="b">
									<img id="image2" class="grayscale" src="images/9/b-checked.png">
								</label>
								<input type="radio" id="b" value="B" name="choice1"><span></span>
							</li>
							<li>
								<label for="c">
									<img id="image3" class="grayscale" src="images/9/c-checked.png">
								</label><input type="radio" id="c" value="C" name="choice1"><span></span>
							</li>
							<li>
								<label for="d">
									<img id="image4" class="grayscale" src="images/9/d-checked.png">
								</label>
								<input type="radio" id="d" value="D" name="choice1"><span></span>
							</li>
						</ul>
					</div>			
					<section id="ans">										
						<p id="selected_ans" class="no-pad"><?php echo _("A person's ability to tolerate medicine decreases with age."); ?></p>					
					</section>
					<h2><?php echo _("Question B. Read the statements about diseases. Click on the statement that is <span class='red blink bold'>FALSE</span>."); ?></h2>
					<div id="radio">
						<ul>
							<li>
								<input type="radio" id="r1" name="choice">
								<label for="r1"><span></span>A. <?php echo _("A disease is a breakdown in structures or functions of an organism."); ?></label>
							</li>
							<li>
								<input type="radio" id="r2" name="choice">
								<label for="r2"><span></span>B. <?php echo _("Some diseases are the result of inborn failures of the system, while others are the result of damage by infection by other organisms."); ?></label>
							</li>
							<li>
								<input type="radio" id="r3" name="choice">
								<label for="r3"><span></span>C. <?php echo _("Microbes are not the only things that can cause disease; toxic chemicals can cause harmful effects to organisms too."); ?></label>
							</li>
							<li>
								<input type="radio" id="r4" name="choice">
								<label for="r4"><span></span>D. <?php echo _("Few health conditions are due to exposure to chemicals, while diseases are due to the harmful effects of microorganisms."); ?></label>
							</li>							
						</ul>
					</div>
				</section>							
			</div>			
			<div id="answer" class="screens">
				<section>
					<h1></h1>				
					<h2><?php echo _("Question A. Most over-the-counter medications have different dosage directions for young children and adults."); ?>
					<?php echo _("Based on what you have learned, click on the letters below, read the descriptions and choose the best answer."); ?></h2>
										
					<figure id="img_answer">
						<img src="images/9/a-checked.png" id="selected_img">						
					</figure>
					<div class="desc" >
						<p><?php echo _("You answered..."); ?></p>
						<p id="selected_answer"></p>
					 </div>
					 <div class="clear"></div>
					 <section id="ans">
						<p class="no-pad"><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id="user_answer"></span></p>					
					 </section>
					 
					<h2><?php echo _("Question B. Read the statements about diseases. Click on the statement that is <span class='red blink bold'>FALSE</span>."); ?>
					</h2>
					
					<figure id="img_answer">
						<img src="images/9/selected.png" id="selected_img2">						
					</figure>
					<div class="desc" >
						<p><?php echo _("You answered..."); ?></p>
						<p><span id="selected_answer2"></p>						
					 </div>
					 <div class="clear"></div>
					 <section id="ans">
						<p class="no-pad"><img src="images/others/wrong.png" id="answer-icon2" class="resize"/><span id="user_answer2"></span></p>
					 </section>
				</section>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Another quick check on the way!"); ?></strong></section></section>
	<script>
	/* Back Screen */
	var hash = window.location.hash.slice(1);
	var screenCount = 2;
	var selected;
	var answer1 = '';
	var answer = '';
	var nullAnswer = false;
	var textstr2 = null;
	var selected_answer2 = null;		
	var txt = null;
	var txtstr = null;
	var selected_answer= null;
	var answered = 1;

	$(document).ready(function() {
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href= "8.php#screen3";			
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('#screen1').fadeIn();				
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('h1').text('<?php echo _("Quick Check #3"); ?>');
					$('a.back-toggle').attr('src','images/buttons/nextb.png');
					$('h1').fadeIn();
					$('#user_answer').removeClass('green');
					$('#user_answer').removeClass('red');
					$('#user_answer2').removeClass('green');
					$('#user_answer2').removeClass('red');
				});
			}
		});
		
		$('a.check-toggle').click(function(e){		
			checkNull();
			if(nullAnswer == true || $('input:radio:checked').length < 2) {
				e.preventDefault();
				window.location.hash='';
				alert("<?php echo _("Please select your answers."); ?>");
				nullAnswer = false;		
			} else {
				if($('#screen1').is(':visible')) { 				
					$('#screen1').fadeOut( function(){			
						$('a.check-toggle').fadeOut(function (){
							$('a.next-toggle').fadeIn();
							$('h1').text('<?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?>');
							$('a.back-toggle').attr('src','images/buttons/back2.png');
							$('#answer').fadeIn();
							checkAnswer2();
							checkAnswer();
							save();
						}); 
					});
				}
			}
			
			if($('#a').is(":checked")){
				selected_answer = "A. <?php echo _("A person's ability to tolerate medicine decreases with age."); ?>";	
			}
			
		});
		
		$("#choices1 input[name='choice1']").change(function () {	
			if($('#a').is(":checked")) {						 
				selected_answer = "A. <?php echo _("A person's ability to tolerate medicine decreases with age."); ?>";
				$('#image1').addClass('disabled');
				$('#image2').removeClass('disabled');
				$('#image3').removeClass('disabled');
				$('#image4').removeClass('disabled');
				$('#selected_ans').css('display', 'block');
				
			} else if($('#b').is(":checked")){
				selected_answer = 'B. <?php echo _("It is more difficult to convince young children to take medicine."); ?> ';
				$('#image2').addClass('disabled');
				$('#image1').removeClass('disabled');
				$('#image3').removeClass('disabled');
				$('#image4').removeClass('disabled');
				$('#selected_ans').css('display', 'block');
				
			} else if($('#c').is(":checked")){
				selected_answer = 'C. <?php echo _("The directions for young children are simpler so that they can understand them."); ?> ';
				$('#image3').addClass('disabled');
				$('#image2').removeClass('disabled');
				$('#image1').removeClass('disabled');
				$('#image4').removeClass('disabled');
				$('#selected_ans').css('display', 'block');
				
			} else if($('#d').is(":checked")){
				selected_answer = 'D. <?php echo _("Children have less mass than adults and so they need a smaller amount of the medicine."); ?> ';
				$('#image4').addClass('disabled');
				$('#image2').removeClass('disabled');
				$('#image3').removeClass('disabled');
				$('#image1').removeClass('disabled');
				$('#selected_ans').css('display', 'block');
				
			}
			
			answer1 = $('input[name=choice1]:checked', '#choices1').val();
			$('#selected_ans').text(selected_answer);
		});	
	});

	function checkAnswer(){
		if(answer1 == 'A'){
			txtstr = '<?php echo _("It is true that adults can take a larger dosage, but why do adults and children need different amounts of medicine based on the concept of dosage?"); ?>';			
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			$('#selected_img').attr("src", "images/9/a-checked.png");
		} else if(answer1 == 'B'){
			txtstr = "<?php echo _("It is the parents' job to convince their children to take the medicine. The box usually won't have helpful hints for that. Which key vocabulary word explains the answer?"); ?>";
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			$('#selected_img').attr("src", "images/9/b-checked.png");
		} else if(answer1 == 'C'){
			txtstr = '<?php echo _("It would be dangerous for young children to take medicine unsupervised. What explains why children would need less medicine than adults?"); ?>';
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			$('#selected_img').attr("src", "images/9/c-checked.png");
		} else if(answer1 == 'D'){
			txtstr = "<?php echo _("Correct! The children's dose may be about half the dose for adults, or the box may recommend asking a doctor for a suitable dose."); ?> ";
			$('#user_answer').addClass('green');
			$('#answer-icon').attr("src", "images/others/correct.png");
			$('#selected_img').attr("src", "images/9/d-checked.png");
		}
		
		$('#user_answer').text(txtstr);
		$('#selected_answer').text(selected_answer);
	}

	function checkAnswer2() {
		 if($('#r1').is(":checked")) {
			selected_answer2 ='A. <?php echo _("A disease is a breakdown in structures or functions of an organism."); ?>';
			textstr2 = '<?php echo _("No, this is true. No matter what the cause of the disease, it leads to some part of the body not functioning the way it should."); ?>';
			$('#user_answer2').css('color', 'red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");
			answer2 = 'A';
		}
		else if($('#r2').is(":checked")) {
			selected_answer2 ='B. <?php echo _("Some diseases are the result of inborn failures of the system, while others are the result of damage by infection by other organisms."); ?>';
			textstr2 = '<?php echo _("No, this is true. In some cases, the cause of a disease might be exposure to microbes or chemicals, and in other cases, it just might be an organ shuts down by itself or simply does not function properly."); ?> ';
			$('#user_answer2').css('color', 'red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");
			answer2 = 'B';	
		}
		else if($('#r3').is(":checked")) {	
			selected_answer2 ='C. <?php echo _("Microbes are not the only things that can cause disease; toxic chemicals can cause harmful effects to organisms too."); ?>';
			textstr2 = '<?php echo _("No, this is true. Exposure to toxic chemicals can lead to diseases, and so can infections by microbes."); ?>';
			$('#user_answer2').css('color', 'red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");
			answer2 = 'C';	
		
		} 
		else if($('#r4').is(":checked")) {
			selected_answer2='D. <?php echo _("Few health conditions are due to exposure to chemicals, while diseases are due to the harmful effects of microorganisms."); ?>';
			textstr2 = '<?php echo _("Correct, this statement is false. Diseases and health conditions can be from any internal or external source."); ?> ' 
			$('#user_answer2').css('color', 'green');
			$('#answer-icon2').attr("src", "images/others/correct.png");
			answer2 = 'D';
		}
		
		$('#selected_answer2').text(selected_answer2);
		$('#user_answer2').text(textstr2);
	}
		
	function checkNull() {
		if(!$('#r1').is(':checked') && !$('#r2').is(':checked') && !$('#r3').is(':checked') && !$('#r4').is(':checked')) {
			nullAnswer = true;
		}
	}

	function save() {	
		if (answered == 0) {
			saveAnswer('how-diseases-destroy-qc3-a', answer1);
			saveAnswer('how-diseases-destroy-qc3-b', answer2);
			answered = 1;
		}
	}
	</script>
<?php require("setlocale.php"); ?>
</body>
</html>
