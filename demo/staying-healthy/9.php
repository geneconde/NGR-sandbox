<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") {?> dir="es"  <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/component2.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background: url('images/7/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; overflow: hidden; }
#answer { display: none; }
#buttons .next { display: none; }
h2 { color: #8e4535; }
h1 { color: #27a78f; }
/* For Animated Checkboxes */
.ac-custom { padding: 5px 0 5px 20px; text-align:left;}
.ac-custom li { padding: 15px 0px; margin-bottom: -2px;}
.ac-custom li:nth-of-type(3) { padding: 10px 0 0 0; }
.ac-custom li:nth-of-type(3) svg { top: 65%; }
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { height: 38px; width: 35px; color: red;}
.ac-custom svg { height: 25px; width: 25px }
.ac-custom label { font-size: 22px; color: #000; padding: 0 0 0 45px; }
.ac-custom label::before { border: 4px solid #BD2D25; }
.ac-custom label > div { margin-top: -10px; }
.ac-custom input[type="checkbox"]:checked + label, 
.ac-custom input[type="radio"]:checked + label {color: #BD2D25; }
#radio { min-height: 150px; margin:20px 0 0 33px; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 7px 0px; }
label {font-size:22px; margin:5px 0px !important;}
input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"] + label span{background: url('images/9/sprite.png')left top no-repeat; position: relative; margin-right:5px; padding:0 0 0 32px !important; cursor: pointer; line-height: 40px; max-width: 33px; min-height: 40px; display:inline-block; z-index:0; font-size:20px; overflow: hidden; vertical-align:middle; margin-top:-8px;}
input[type="radio"]:checked + label span { background-position: -31px 0; }
.no-bottom{margin-bottom:0;}
#selected_answer2{margin-bottom: -10px;} 
#q2_ans ul { max-width: 700px; margin: 0 0 0 2%; }
#answer p:last-of-type { width: 90%; }

html[dir="es"] h2 { margin: 15px 0 0 0; }

html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right:0; }
html[dir="rtl"] .ac-custom label { padding:0 45px 0 0; }
html[dir="rtl"] .ac-custom svg { right:5px;top:44%; }
html[dir="rtl"] #radio li { float: right; }
html[dir="rtl"] #q2_ans li { float: right; margin-right: 110px; }
html[dir="rtl"] #q2_ans ul { max-width: 750px; height: 210px; }
html[dir="rtl"] #radio { min-height: 175px; }
html[dir="rtl"] #answer p:last-of-type { float: left; }


@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
html[dir="rtl"] #q2_ans li { margin-right: 0; }
}

</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #3"); ?></h1>
				<h2><?php echo _("Question A. A person is prescribed an antibiotic for ten days. She begins taking the pills and feels much better after four days. What should she do with the remaining pills?"); ?></h2>
					<div id="radio">
						<ul>
							<li>
								<input type="radio" id="r1" name="choice" value="A">
								<label for="r1" id="a"><span></span>A. <?php echo _("She should return them to the pharmacy."); ?></label>
							</li>
							<li>
								<input type="radio" id="r2" name="choice" value="B">
								<label for="r2" id="b"><span></span>B. <?php echo _("She should take all of the pills, even though she feels better."); ?></label>
							</li>
							<li>
								<input type="radio" id="r3" name="choice" value="C">
								<label for="r3" id="c"><span></span>C. <?php echo _("She should save the pills in case she gets sick again."); ?></label>
							</li>
							<li>
								<input type="radio" id="r4" name="choice" value="D">
								<label for="r4" id="d"><span></span>D. <?php echo _("She should give the pills to a friend in case they get sick too."); ?></label>
							</li>							
						</ul>
					</div>
					
				<h2><?php echo _("Question B. Click on <span class='blink red'>ALL</span> the correct statements below."); ?></h2>
				
				<form id="q2_ans" class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
					<ul>
						<li><input id="cb1" type="checkbox" value="A"><label for="cb1"><div><?php echo _("All bacteria cause disease."); ?></div></label></li>
						<li><input id="cb2" type="checkbox" value="B"><label for="cb2"><div><?php echo _("Usually infections are caused by bacteria or viruses."); ?></div></label></li>
						<li><input id="cb3" type="checkbox" value="C"><label for="cb3"><div><?php echo _("Bacteria and viruses make copies of themselves in our bodies."); ?></div></label></li>
						<li><input id="cb4" type="checkbox" value="D"><label for="cb4"><div><?php echo _("We rely on our immune system to identify and destroy any disease agent our body is exposed to."); ?></div></label></li>
					<ul>
				</form>	
								
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<h2><?php echo _("Question A. A person is prescribed an antibiotic for ten days. She begins taking the pills and feels much better after four days. What should she do with the remaining pills?"); ?></h2>
					
					<p><?php echo _("You answered..."); ?></p>				
				
					<p id="selected_answer"></p>
					<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>
				
				<h2 class="no-bottom"><?php echo _("Question B. Click on <span class='blink red'>ALL</span> the correct statements below."); ?></h2>
					
					<div id="selected_answer2"></div>
					<p><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'></span></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<section id="preloader"><section class="selected"><strong><?php echo _("Vaccination on the go"); ?></strong></section></section>
	<script src="scripts/svgcheckbx.js"></script>
	<script>
	var feedback ='';
	var feedback2 ='';
	var studentAnswer1='';
	var studentAnswer2='';
	var selected_answer1='';
	var selected_answer2='';
	var nullAnswer= false;
	var checked={};
	var num;
	var answered = 0;
	$(document).ready(function() {
		$('.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "8.php#screen2"; // change to the previous page's last screen e.g. 8.php#screen4
			} else if ($('#answer').is(':visible')) {
				$('.next-toggle').fadeOut(function() { $('.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					$('#feedback').removeClass('green');
					$('#feedback').removeClass('red');
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
					$('#question').append($('#q2_ans')).find('input[type="checkbox"]').prop("disabled", false);
					$('.ac-custom li').css('padding',' 15px 0px');
					$('.ac-custom li:nth-of-type(3)').css('padding',' 10px 0 0 0');
					$('.ac-custom li:nth-of-type(3) svg').css('top',' 65%');
				});
			}
		});
		
		$('.check-toggle').click(function(e){ 
		checkAnswer();
		checkNull();		
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _('Please select your answers.'); ?>");
			nullAnswer = false;
			$('#question').append($('#q2_ans')).find('input[type="checkbox"]').prop("disabled", false);
		} else {
				$('.check-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					window.location.hash = "#answer";
				});
			}
		});
	});
	
	function checkAnswer(){
		$('#selected_answer2').append($('#q2_ans')).find('input[type="checkbox"]').prop("disabled", true);
		
		studentAnswer1 = $("input[name='choice']:checked").val();
		num = $('input[type="checkbox"]:checked').length;
			checked.selectedAns=[];
				$("input:checkbox").each(function(){
					var $this = $(this);
					if($this.is(":checked")){
						checked.selectedAns.push($this.attr("value"));							
					}						
				});
				studentAnswer2 = checked.selectedAns;
		if(studentAnswer2 !='B,C,D'){
			feedback2="<?php echo _('Not quite! Most bacteria do not cause disease and are actually helpful to people.');?>";
			$('#feedback2').addClass('red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");
		}	
		else {
			feedback2="<?php echo _('You got it! Infections can come from bacteria and viruses. Bacteria and viruses both reproduce inside our body and make millions of copies of themselves to attack our body systems. Our bodies will fight off any disease agent and remember what it was in the future. For very dangerous diseases we also rely on vaccinations.');?>";
			$('#feedback2').addClass('green');
			$('#answer-icon2').attr("src", "images/others/correct.png");
			$('.ac-custom li').css('padding',' 10px 0px');
			$('.ac-custom li:nth-of-type(3)').css('padding',' 10px 0 0 0');
			$('.ac-custom li:nth-of-type(3) svg').css('top',' 60%');
		}
		 $('#feedback2').text(feedback2);

		 
		 
		switch (studentAnswer1){
		
			case 'A':
				feedback="<?php echo _('Nope! She should take all of the pills.'); ?>";
				selected_answer1=$('#a').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback="<?php echo _('Correct! If she takes the entire dose, she will kill all of the bacteria.'); ?>";
				selected_answer1=$('#b').text();
				$('#feedback').addClass('green');
				$('#answer-icon').attr("src", "images/others/correct.png");
			break;
			
			case 'C':
				feedback="<?php echo _("That's dangerous. She should take all of the pills to kill all of the bacteria.");?>";
				selected_answer1=$('#c').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'D':
				feedback="<?php echo _("No way! That's very dangerous! Never give medication away."); ?>";
				selected_answer1=$('#d').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			default:break;
		}
		 $('#selected_answer').text(selected_answer1);
		 $('#feedback').text(feedback);
		
	}
	
	function save(){
		//saveAnswer('staying-healthy-qc3a', studentAnswer1);
		//saveAnswer('staying-healthy-q3b', studentAnswer2);
		//answered = 1;		
	}
	
	function checkNull(){
		if(studentAnswer2 ==''){
		$('#question').append($('#q2_ans')).find('input[type="checkbox"]').prop("disabled", false);
			nullAnswer = true;
		}
		if (!$('#radio input:radio').is(':checked'))  {
		$('#question').append($('#q2_ans')).find('input[type="checkbox"]').prop("disabled", false);
			nullAnswer = true;
		}
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
