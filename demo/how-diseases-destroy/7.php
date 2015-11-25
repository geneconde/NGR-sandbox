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
.bg { background-image: url('images/7/bg.png');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #80BDDF; border-right: 1px dashed #80BDDF;}
h1 { color: #a95593; font-size:35px;}
h2 {color: #314c9a; text-align:left; padding:10px 7px 0 10px;; margin:0;}
p { color: black; padding-left:10px;}
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
article{position:relative; top:30px;}
.resize {height:25px;}
figure img:hover {cursor: pointer;}
.green {color:green;}
.red {color:red;}
figure{margin-top:10px; margin:0;}
#choices1{width:65%; margin:0 auto;}
#choices2{width:65%; float:left;}
#img-container {width:33%; float:right;margin-right:10px;}
#img-container img {height:135px;}
#img_answer{float:left; margin:15px 0 0 47px;}
.desc {float:left; width:82%; margin:15px 0 0 10px;}
.desc p{text-align: left; padding:0;}
#user_answer {padding:0;}
.no-pad{padding:0;}
#ans {width:96%; padding: 0 5px 0 5px; top: 0 !important; min-height:10px; }
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
.small_font{padding:0;}
.container{background-color:rgba(141, 207, 244, 0.9); height: 613px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}

label { padding-left: 10px !important; cursor: pointer; }
	
input[type="radio"] + label span {
	vertical-align: middle;
	display:inline-block;
	width:30px;
	height:30px;		
	cursor:pointer;
	margin-right: 5px;	
}

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
}

#choices2 li input[type=radio] { display: none; }
#choices2 ul { 
	overflow: hidden;
	margin: auto;
	padding-left: 10px;
	list-style:none;
}
#choices2 li {
	text-align: center;
	float: left;
	width: 85px;
	margin: 0 0 0 30px;
}
#selected_ans, #selected_ans2 { display: none; }

html[dir="rtl"] #selected_ans, #selected_ans2 {text-align: center;}
html[dir="rtl"] #img_answer {float: right;margin: 15px 47px 0 0;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#img_answer { float: none; margin: 15px 0 0; }
	.desc { float: none; width: auto; margin: 0; }
	.desc p { text-align: center; }
	html[dir="rtl"] #choices1 { width: 75%; }
	html[dir="rtl"] #choices2 { width: 71%; }
	html[dir="rtl"] #img-container { width: 25%; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quick Check #2"); ?></h1>
					<h2><?php echo _("Question A. The Tomato Spotted Wilt virus prevents the plant from fully growing or even kills it."); ?> 
						<?php echo _("It does not spread to other plants but tomato growers would still be concerned about the spread of this disease because: (Click each letter to choose)"); ?></h2>	
					<div id="choices1">
						<ul>
							<li>
								<label for="a">
									<img id="image1" class="grayscale" src="images/7/a-checked.png">
								</label>
								<input type="radio" id="a" value="A" name="choice1"><span></span>
							</li>
							<li>
								<label for="b">
									<img id="image2" class="grayscale" src="images/7/b-checked.png">
								</label>
								<input type="radio" id="b" value="B" name="choice1"><span></span>
							</li>
							<li>
								<label for="c">
									<img id="image3" class="grayscale" src="images/7/c-checked.png">
								</label>
								<input type="radio" id="c" value="C" name="choice1"><span></span>
							</li>
							<li>
								<label for="d">
									<img id="image4" class="grayscale" src="images/7/d-checked.png">
								</label>
								<input type="radio" id="d" value="D" name="choice1"><span></span>
							</li>
						</ul>
					</div>
					<div class="clear"></div>
					<p id="selected_ans" class="small_font"><?php echo _("The virus could cause disease in humans if they eat tomatoes from the infected plants."); ?></p> 
					<h2><?php echo _("Question B. The West Nile virus can be deadly to birds and can infect animals and even humans. The virus uses mosquitoes as a vector to reach its bird or other animal host. It can be transmitted when an infected mosquito bites a bird or person. Mosquitoes acquire the virus by biting infected birds or other animals. The virus does not harm the mosquito. Why does it benefit the West Nile virus to not harm the mosquito?"); ?> <?php echo _("(Click each letter to choose)"); ?> </h2>
					
					<div id="choices2">					
						<ul>
							<li>
								<label for="a1">
									<img id="image1b" class="grayscale" src="images/7/a-checked.png">
								</label>
								<input type="radio" id="a1" value="A" name="choice2" value="first1"><span></span>
							</li>
							<li>
								<label for="b1">
									<img id="image2b" class="grayscale" src="images/7/b-checked.png">
								</label>
								<input type="radio" id="b1" value="B" name="choice2"><span></span>
							</li>
							<li>
								<label for="c1">
									<img id="image3b" class="grayscale" src="images/7/c-checked.png">
								</label>
								<input type="radio" id="c1" value="C" name="choice2"><span></span>
							</li>
							<li>
								<label for="d1">
									<img id="image4b" class="grayscale" src="images/7/d-checked.png">
								</label>
								<input type="radio" id="d1" value="D" name="choice2"><span></span>
							</li>
						</ul>
						<p id="selected_ans2" class="small_font"><?php echo _("Sick mosquitoes would not be able to fly and would not likely be eaten by birds which is what the virus needs."); ?></p> 
					</div>
					<div id="img-container">
						<img src="images/7/bird.png">
					</div>
					<div class="clear"></div>
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1></h1>				
					<h2><?php echo _("Question A. The Tomato Spotted Wilt virus prevents the plant from fully growing or even kills it."); ?>
						<?php echo _("It does not spread to other plants but tomato growers would still be concerned about the spread of this disease because:"); ?></h2>
										
					<figure id="img_answer">
						<img src="images/7/a-checked.png" id="selected_img">						
					</figure>
					<div class="desc" >
						<p><?php echo _("You answered..."); ?></p>
						<p class="medium_font"><span id="selected_answer"></p>
					 </div>
					 <div class="clear"></div>
					 <section id="ans">
						<p class="no-pad"><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id="user_answer"></span></p>					
					 </section>
					 
					<h2><?php echo _("Question B. The West Nile virus can be deadly to birds and can infect animals and even humans. The virus uses mosquitoes as a vector to reach its bird or other animal host. It can be transmitted when an infected mosquito bites a bird or person. Mosquitoes acquire the virus by biting infected birds or other animals. The virus does not harm the mosquito. Why does it benefit the West Nile virus to not harm the mosquito?"); ?></h2>
					
					<figure id="img_answer">
						<img src="images/7/a-checked.png" id="selected_img2">						
					</figure>
					<div class="desc" >
						<p><?php echo _("You answered..."); ?></p>
						<p class="medium_font"><span id="selected_answer2"></p>						
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
		<a href="8.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Tomato viruses"); ?></strong></section></section>

<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var answer1 = '';
var answer2 = '';
var nullAnswer = 0;
var txt2 = null;
var txtstr2 = null;
var selected_answer2= null;
var txt = null;	
var txtstr = null;
var selected_answer= null;
var answered = 1;

$(document).ready(function() {
	$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
			document.location.href= "6.php#screen4";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){								
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('h1').text('<?php echo _("Quick Check #2"); ?>');
				$('h1').fadeIn();
				$('a.back-toggle').attr('src','images/buttons/nextb.png');
				$('#user_answer2').removeClass('red');
				$('#user_answer2').removeClass('green');
				$('#user_answer').removeClass('red');
				$('#user_answer').removeClass('green');
				$('#screen1').fadeIn();
			});
		}
	});

	$('a.check-toggle').click(function(e){
		if ($('input:radio:checked').length < 2) {
			alert('<?php echo _("Please select your answers."); ?>');
		} else {
			$('#screen1').fadeOut( function(){			
				$('a.check-toggle').fadeOut(function (){
					$('a.next-toggle').fadeIn();
					$('h1').text('<?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?>');
					$('a.back-toggle').attr('src','images/buttons/back2.png');
					$('#answer').fadeIn();	
					checkAnswer();
					checkAnswer2();
					save();
				}); 
			});
		}
	});
	
	$("#choices1 input[name='choice1']").change(function () {	
		if($('#a').is(":checked")) {
			txt = '<?php echo _("The virus could cause disease in humans if they eat tomatoes from the infected plants."); ?>';
			$('#image1').addClass('disabled');
			$('#image2').removeClass('disabled');
			$('#image3').removeClass('disabled');
			$('#image4').removeClass('disabled');
			$('#selected_ans').css('display', 'block');
			answer1 = 'A';
		} else if($('#b').is(":checked")){
			txt = '<?php echo _("The virus will simply weaken or kill their tomato plants."); ?> ';
			$('#image2').addClass('disabled');
			$('#image1').removeClass('disabled');
			$('#image3').removeClass('disabled');
			$('#image4').removeClass('disabled');
			$('#selected_ans').css('display', 'block');
			answer1 = 'B';
		} else if($('#c').is(":checked")){
			txt = '<?php echo _("The virus would spread to other types of crops in nearby fields such as strawberries."); ?>';
			$('#image3').addClass('disabled');
			$('#image2').removeClass('disabled');
			$('#image1').removeClass('disabled');
			$('#image4').removeClass('disabled');
			$('#selected_ans').css('display', 'block');
			answer1 = 'C';
		} else if($('#d').is(":checked")){
			txt = '<?php echo _("Wild animals will eat more of the tomato crop since the infected plants will be shorter."); ?> ';	
			$('#image4').addClass('disabled');
			$('#image2').removeClass('disabled');
			$('#image3').removeClass('disabled');
			$('#image1').removeClass('disabled');
			$('#selected_ans').css('display', 'block');
			answer1 = 'D';
		}
		
		$('#selected_ans').text(txt);
	});
	
	$("#choices2 input[name='choice2']").change(function () {	
		if($('#a1').is(":checked")) {
			txt2 = '<?php echo _("Sick mosquitoes would not be able to fly and would not likely be eaten by birds which is what the virus needs."); ?>';
			$('#image1b').addClass('disabled');
			$('#image2b').removeClass('disabled');
			$('#image3b').removeClass('disabled');
			$('#image4b').removeClass('disabled');
			$('#selected_ans2').css('display', 'block');
			answer2 = 'A';
		} else if($('#b1').is(":checked")) {
			txt2 = "<?php echo _("The mosquito doesn't really need the bird to reproduce, so harming it isn't a problem."); ?> ";
			$('#image2b').addClass('disabled');
			$('#image1b').removeClass('disabled');
			$('#image3b').removeClass('disabled');
			$('#image4b').removeClass('disabled');
			$('#selected_ans2').css('display', 'block');
			answer2 = 'B';
		} else if($('#c1').is(":checked")) {
			txt2 = '<?php echo _("If the mosquito was damaged or harmed it might not be able to bite a suitable host to transmit the West Nile virus."); ?> ';	
			$('#image3b').addClass('disabled');
			$('#image2b').removeClass('disabled');
			$('#image1b').removeClass('disabled');
			$('#image4b').removeClass('disabled');
			$('#selected_ans2').css('display', 'block');
			answer2 = 'C';
		} else if($('#d1').is(":checked")) {
			txt2 = '<?php echo _("There is no benefit. What happens to the mosquito does not affect the virus."); ?>';		
			$('#image4b').addClass('disabled');
			$('#image2b').removeClass('disabled');
			$('#image3b').removeClass('disabled');
			$('#image1b').removeClass('disabled');
			$('#selected_ans2').css('display', 'block');
			answer2 = 'D';
		}
		$('#selected_ans2').text(txt2);		
	});	
});

function checkAnswer(){
	if(answer1 == 'A') {
		selected_answer = '<?php echo _("The virus could cause disease in humans if they eat tomatoes from the infected plants."); ?> ';
		txtstr = '<?php echo _("The Tomato Spotted Wilt virus only infects tomato plants."); ?>';
		$('#selected_img').attr("src", "images/7/a-checked.png");
		$('#answer-icon').attr("src", "images/others/wrong.png");
		$('#user_answer').addClass('red');
	} else if(answer1 =='B') {
		selected_answer = '<?php echo _("The virus will simply weaken or kill their tomato plants."); ?>';
		txtstr = '<?php echo _("Correct, they are worried because their tomato crops could be ruined."); ?>';
		$('#selected_img').attr("src", "images/7/b-checked.png");
		$('#b').attr("src", "images/7/b-checked.png");
		$('#user_answer').addClass('green');
		$('#answer-icon').attr("src", "images/others/correct.png");
	} else if(answer1 == 'C') {
		selected_answer = '<?php echo _("The virus would spread to other types of crops in nearby fields such as strawberries."); ?> ';
		txtstr = '<?php echo _("The Tomato Spotted Wilt virus only affects tomato plants."); ?>';
		$('#selected_img').attr("src", "images/7/c-checked.png");
		$('#c').attr("src", "images/7/c-checked.png");
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
	} else if(answer1 == 'D') {
		selected_answer = '<?php echo _("Wild animals will eat more of the tomato crop since the infected plants will be shorter."); ?> ';
		txtstr = '<?php echo _("Possibly, but the smaller yield of tomatoes is the far bigger problem."); ?>';
		$('#selected_img').attr("src", "images/7/d-checked.png");
		$('#d').attr("src", "images/7/d-checked.png");
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
	}
	 $('#user_answer').text(txtstr);
	 $('#selected_answer').text(selected_answer);	
}

function checkAnswer2() {
	if(answer2 =='C') {
		selected_answer2 = '<?php echo _("If the mosquito was damaged or harmed it might not be able to bite a suitable host to transmit the West Nile virus."); ?>';
		txtstr2 = "<?php echo _("Correct, if the mosquito was killed or unable to bite a suitable host for the virus, the virus's transmission cycle would be broken and the virus could not reproduce."); ?>";
		$('#user_answer2').addClass('green');
		$('#selected_img2').attr("src", "images/7/c-checked.png");
		$('#c1').attr("src", "images/7/c-checked.png");
		$('#answer-icon2').attr("src", "images/others/correct.png");
	} else if(answer2 =='B') {
		selected_answer2 = "<?php echo _("The mosquito doesn't really need the bird to reproduce, so harming it isn't a problem."); ?>";
		txtstr2 = '<?php echo _("The virus actually does need the bird to take part in its life cycle."); ?>';
		$('#user_answer2').addClass('red');
		$('#selected_img2').attr("src", "images/7/b-checked.png");
		$('#b1').attr("src", "images/7/b-checked.png");
		$('#answer-icon2').attr("src", "images/others/wrong.png");		
	} else if(answer2 =='D') {
		selected_answer2 = '<?php echo _("There is no benefit. What happens to the mosquito does not affect the virus."); ?> ';
		txtstr2 = '<?php echo _("What would happen to the virus if the mosquito was killed before it could bite a bird?"); ?>';
		$('#user_answer2').addClass('red');
		$('#selected_img2').attr("src", "images/7/d-checked.png");			
		$('#d1').attr("src", "images/7/d-checked.png");
		$('#answer-icon2').attr("src", "images/others/wrong.png");
			
	} else if(answer2 =='A') {
		selected_answer2 = '<?php echo _("Sick mosquitoes would not be able to fly and would not likely be eaten by birds which is what the virus needs."); ?>';
		txtstr2 = '<?php echo _("The virus does need interaction between the mosquito and bird, but the bird eating the mosquito is not that interaction. Is there a more suitable reason?"); ?>';
		$('#user_answer2').addClass('red');
		$('#selected_img2').attr("src", "images/7/a-checked.png");
		$('#answer-icon2').attr("src", "images/others/wrong.png");
	} 
	 $('#user_answer2').text(txtstr2);
	 $('#selected_answer2').text(selected_answer2);	
}

function save() {	
	if (answered == 0) {
		saveAnswer('how-diseases-destroy-qc2-a', answer1);
		saveAnswer('how-diseases-destroy-qc2-b', answer2);
		answered = 1;
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
