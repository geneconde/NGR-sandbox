<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } if($language == "zh_CN") { ?> dir="cn" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/component2.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/modernizr.custom.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/11/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; overflow:hidden; }
h1 { color: #3d6622; font-size:35px;}
h2 {color: #2d4c9c; text-align:left; padding:10px 1px 0 10px; margin:0;}
p { color: black; }
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
article{border:1px solid black; position:relative; top:30px;}

.wrap {border-left: 1px dashed #96E079; border-right: 1px dashed #96E079;}
.round{ -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
.green {color:green;}
.red {color:red;}
#img_answer{float:left; margin:20px 0 0 47px;}
.desc {float:left; width:82%; margin:20px 0 0 10px;}
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
#selected_ans{font-size:20px;}
.ac-custom label {
font-size: 20px;
color: black;
cursor: pointer;
padding: 0 0 0 55px;
} 
.ac-custom input[type="checkbox"]:checked + label, .ac-custom input[type="radio"]:checked + label {
color: #096314;
}
.ac-custom {
padding: 0;
max-width: 900px;
width: 100%;
position: relative; z-index: 6;
}
.no-padTop{padding-top:0px !important;}

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
#choices1 { width:65%; margin:0 auto; }
#choices1 label { padding-left: 10px !important; cursor: pointer; }
.desc {float:left; width:82%; margin:15px 0 0 10px;}
#img_answer{float:left; margin:15px 0 0 47px;}
#selected_ans { display: none; }
.ac-custom li { padding: 5px; text-align: left; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { width: 40px; height: 40px; margin-top: -20px; }
.ac-custom svg { width: 30px; height: 30px; left: 10px; margin-top: -15px; }
.ac-custom svg path { stroke: #096314;  }

<?php if ($language == 'es_ES'): ?>
	h2 { font-size: 22px; }
<?php endif; ?>

html[dir="rtl"] #selected_ans {text-align: center;}
html[dir="rtl"] .ac-custom label { padding: 0 80px 5px 0; }
html[dir="rtl"] .ac-custom input[type="checkbox"] { right: 35px; margin-top: -20px; }
html[dir="rtl"] .ac-custom label::before {right: 20px;margin-top: -20px;width: 35px;height: 35px;}
html[dir="rtl"] .ac-custom svg { right: 27px; margin-top: -16px; height: 25px; }
html[dir="rtl"] .ac-custom li { text-align: right; }
html[dir="rtl"] #img_answer {float: right;margin: 15px 47px 0 10px;}
html[dir="rtl"] .desc {float: right;}
html[dir="rtl"] #answer section > p {text-align: center;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#img_answer { float: none; margin: 0; }
	.desc { float: none; width: auto; margin: 0; }
	.desc p { text-align: center; }
	html[dir="rtl"] #choices1 { width: 71%; }
	html[dir="cn"] .ac-custom li { padding: 12px; }
	html[dir="cn"] .ac-custom svg { left: 17px; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quick Check #4"); ?></h1>
					<h2><?php echo _("Question A. In the past, doctors would often prescribe antibiotics first without determining whether the patient had a viral infection or a bacterial infection. The idea was that it would take care of the infection if it was bacterial and they would only try other options if the antibiotic did not work. Doctors are now trying to make sure that their patients have a bacterial infection and not a viral infection before prescribing antibiotics. Based on what you just learned, what has caused doctors to change their practice?"); ?> </h2>	
					<div id="choices1">
						<ul>
							<li><label for="a"><img id="image1" class="grayscale" src="images/11/a-checked.png"></label><input type="radio" id="a" value="A" name="choice1"><span></span></li>
							<li><label for="b"><img id="image2" class="grayscale" src="images/11/b-checked.png"></label><input type="radio" id="b" value="B" name="choice1"><span></span></li>
							<li><label for="c"><img id="image3" class="grayscale" src="images/11/c-checked.png"></label><input type="radio" id="c" value="C" name="choice1"><span></span></li>
							<li><label for="d"><img id="image4" class="grayscale" src="images/11/d-checked.png"></label><input type="radio" id="d" value="D" name="choice1"><span></span></li>
						</ul>
					</div>
					<section id="ans">
						<p id="selected_ans">
							<?php echo _("Antibiotics are readily available now and doctors want to make sure they are only used when absolutely needed."); ?>
						</p>					
					</section>
					<h2 class="no-padTop"><?php echo _("Question B. Click on <span class='blink red'>ALL</span> the correct statements about antibiotic resistance..."); ?></h2>
					<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
						<ol>
							<li class="mleft"><input id="cb19" name="cb19" type="checkbox" value="A"><label for="cb19"><span>A. <?php echo _("Antibiotic resistance is when microbes resist the effect of an antibiotic."); ?></span></label></li>						
							<li><input id="cb20" name="cb20" type="checkbox" value="B"><label for="cb20"><span>B. <?php echo _("Antibiotic resistance happens because microbes are continuously adapting to their environment."); ?></span></label></li>
							<li><input id="cb21" name="cb21" type="checkbox" value="C"><label for="cb21"><span>C. <?php echo _("Sometimes an antibiotic will kill the weak bacteria, while the stronger bacteria survive and reproduce."); ?></span></label></li>
							<li><input id="cb22" name="cb22" type="checkbox" value="D"><label for="cb22"><span>D. <?php echo _("The trait of antibiotic resistance is genetically transferred to the next generation."); ?> </span></label></li>
						<ol>
					</form>
				</section>							
			</div>
			<div id="answer" class="screens">
				<section>
					<h1></h1>
					<h2><?php echo _("Question A. In the past, doctors would often prescribe antibiotics first without determining whether the patient had a viral infection or a bacterial infection. The idea was that it would take care of the infection if it was bacterial and they would only try other options if the antibiotic did not work. Doctors are now trying to make sure that their patients have a bacterial infection and not a viral infection before prescribing antibiotics. Based on what you just learned, what has caused doctors to change their practice?"); ?> </h2>
					
					<figure id="img_answer">
						<img src="images/7/a-checked.png" id="selected_img">						
					</figure>
					<div class="desc" >
						<p><?php echo _("You answered..."); ?></p>
						<p id="selected_answer"></p>
					 </div>
					 <div class="clear"></div>
					<p><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id="user_answer"></span></p>

					<h2 class="no-padTop"><?php echo _("Question B. Click on <span class='blink red'>ALL</span> the correct statements about antibiotic resistance..."); ?></h2>					
					<p><img src="images/others/wrong.png" id="answer-icon2" class="resize"/><span id="user_answer2"></span></p>
				</section>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Writing prescriptions..."); ?></strong></section></section>

<script src="scripts/svgcheckbx.js"></script>
<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
var answer1 = '';
var answer2 = '';
var selected;
var nullAnswer = false;
var id = '';
var num;
var sa = '';
var txtstr = '';
var selected_answer= '';
var val='';
var answered = 1;

$(document).ready(function() {
	 /* Back Transition */
	$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href= "10.php#screen2";			
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('#screen1').fadeIn();				
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('h1').text('<?php echo _("Quick Check #4"); ?>');
					$('h1').fadeIn();
					$('#user_answer').removeClass('red');
					$('#user_answer').removeClass('green');
					$('#user_answer2').removeClass('red');
					$('#user_answer2').removeClass('green');
			});
		}
	});

	$('a.check-toggle').click(function(e){
		checkNull();
		if(nullAnswer == true || $('input:radio:checked').length == 0) {
			e.preventDefault();
			window.location.hash='';
			alert('<?php echo _("Please select your answers."); ?>');
			nullAnswer = false;
		} else {		
			checkAnswer1();		
			checkAnswer2();			
			$('#screen1').fadeOut( function(){					
				$('a.check-toggle').fadeOut(function (){
				$('a.next-toggle').fadeIn();
				$('h1').text('<?php echo _("Quick Check #4"); ?> - <?php echo _("How did I do?"); ?>');					
				$('#answer').fadeIn();								
				$('a.back-toggle').attr('src','images/buttons/back2.png');
				}); 
			});
			save();
		}
	});
	
	$("#choices1 input[name='choice1']").change(function () {	
		if($('#a').is(":checked")) {
			selected_answer = 'A. <?php echo _("Antibiotics are readily available now and doctors want to make sure they are only used when absolutely needed."); ?>';
			$('#image1').addClass('disabled');
			$('#image2').removeClass('disabled');
			$('#image3').removeClass('disabled');
			$('#image4').removeClass('disabled');
			$('#selected_ans').css('display', 'block');
		} else if($('#b').is(":checked")) {
			selected_answer = 'B. <?php echo _("The overuse of antibiotics is speeding up the spread of antibiotic resistant bacteria."); ?> ';
			$('#image2').addClass('disabled');
			$('#image1').removeClass('disabled');
			$('#image3').removeClass('disabled');
			$('#image4').removeClass('disabled');
			$('#selected_ans').css('display', 'block');
		} else if($('#c').is(":checked")) {
			selected_answer = 'C. <?php echo _("It is easier to treat a viral infection so they now try that method first."); ?> ';
			$('#image3').addClass('disabled');
			$('#image2').removeClass('disabled');
			$('#image1').removeClass('disabled');
			$('#image4').removeClass('disabled');
			$('#selected_ans').css('display', 'block');
		} else if($('#d').is(":checked")) {
			selected_answer = 'D. <?php echo _("Because of antibiotics, there are fewer bacterial infections so doctors know that the infections will more likely be viral."); ?> ';
			$('#image4').addClass('disabled');
			$('#image2').removeClass('disabled');
			$('#image3').removeClass('disabled');
			$('#image1').removeClass('disabled');
			$('#selected_ans').css('display', 'block');
		}
		
		answer1 = $('input[name=choice1]:checked', '#choices1').val();
		 $('#selected_answer').text(selected_answer);
		 $('#selected_ans').text(selected_answer);

	});	
});

function checkAnswer1() {
	if(answer1 =='A') {
		txtstr = '<?php echo _("It is true that adults can take a larger dosage, but why do adults and children need different amounts of medicine based on the concept of dosage?"); ?>';
		selected_answer = 'A. <?php echo _("Antibiotics are readily available now and doctors want to make sure they are only used when absolutely needed."); ?> ';
		$('#user_answer').addClass('red');
		$('#selected_img').attr("src", "images/9/a-checked.png");		
		$('#answer-icon').attr("src", "images/others/wrong.png");
	
	} else if(answer1 == 'B') {
		txtstr = '<?php echo _("Correct. The unnecessary use of antibiotics leads to more bacteria becoming antibiotic resistant."); ?>';
		selected_answer = 'B. <?php echo _("The overuse of antibiotics is speeding up the spread of antibiotic resistant bacteria."); ?>';
		$('#user_answer').addClass('green');
		$('#selected_img').attr("src", "images/9/b-checked.png");		
		$('#answer-icon').attr("src", "images/others/correct.png");
			
	} else if(answer1 =='C') {
		txtstr = '<?php echo _("Viral infections are more difficult to eliminate after people are already infected. What problem with using antibiotics did you just learn about?"); ?>';
		selected_answer = 'C. <?php echo _("It is easier to treat a viral infection so they now try that method first."); ?> ';
		$('#user_answer').addClass('red');
		$('#selected_img').attr("src", "images/9/c-checked.png");		
		$('#answer-icon').attr("src", "images/others/wrong.png");

	} else if(answer1 =='D') {
		txtstr = '<?php echo _("It is true that many common sicknesses are caused by viruses such the flu and common cold but there still are many common bacterial infections. What problem with using antibiotics did you just learn about?"); ?>';					
		selected_answer = 'D. <?php echo _("Because of antibiotics, there are fewer bacterial infections so doctors know that the infections will more likely be viral."); ?> ';
		$('#user_answer').addClass('red');
		$('#selected_img').attr("src", "images/9/d-checked.png");
		$('#answer-icon').attr("src", "images/others/wrong.png");
	}
	
	$('#user_answer').text(txtstr);
	$('#selected_answer').text(selected_answer);
}

function checkAnswer2() {
	var textstr2 = null;
	
	$("input:checkbox").each(function(){
		if($(this).is(':checked')) {
			answer2 += $(this).attr("value");							
		}						
	});
		
	if(answer2 == 'ABCD') {
		textstr2 = '<?php echo _("Correct. Antibiotic resistance is a growing issue as microbes adapt to the environment with drugs and become resistant. Even though some microbes are killed, the strong ones reproduce and create new generations of strong microbes resistant to antibiotics."); ?>';
		$('#user_answer2').addClass('green');
		$('#answer-icon2').attr("src", "images/others/correct.png");
	} else {
		textstr2= '<?php echo _("Not quite. Antibiotic resistance is a growing issue as microbes adapt to the environment with drugs and become resistant. Even though some microbes are killed, the strong ones reproduce and create new generations of strong microbes resistant to antibiotics."); ?>';
		$('#user_answer2').addClass('red');
		$('#answer-icon2').attr("src", "images/others/wrong.png");				
	}
	
	$('#user_answer2').text(textstr2);			
}
	
function save() {	
	if (answered == 0) {
		saveAnswer('how-diseases-destroy-qc4-a', answer1);
		saveAnswer('how-diseases-destroy-qc4-b', answer2);
		answered = 1;
	}
}

function checkNull() {
	if(!$('#cb19').is(':checked') && !$('#cb20').is(':checked') &&  !$('#cb21').is(':checked') &&  !$('#cb22').is(':checked')) {
		nullAnswer = true;
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
