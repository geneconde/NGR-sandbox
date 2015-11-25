<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'staying-healthy';
	require_once '../../verify.php';
	require_once 'locale.php'; 
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Staying Healthy"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="styles/nlform-default.css" />
<link rel="stylesheet" type="text/css" href="styles/nlform-component.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/nlform-modernizr.custom.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background: url('images/7/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
h2 { color: #8e4535; }
h1 { color: #27a78f; }
img.next-toggle { display: none; }
.black {color:#000 !important;}

.nl-field-toggle, .nl-form input, .nl-form select {
	color: #ee6143;
	border-bottom: 1px dashed #ee6143;
}
.nl-dd ul li.nl-dd-checked {
	color: #20440F;
}
#radio { min-height: 150px; margin:10px 0 0 10px; }
#radio ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#radio li { padding: 7px 0px; }

label {font-size:24px; margin:5px 0px !important;cursor: pointer;}

input[type="radio"]{ opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="radio"] + label span{ background: url('images/7/apple_sprite.png')left top no-repeat; position: relative; margin-right:5px; padding:0 0 0 36px !important;  line-height: 40px; max-width: 39px; min-height: 40px; display:inline-block; z-index:0; font-size:20px; overflow: hidden; vertical-align:middle; margin-top:-8px;}
input[type="radio"]:checked + label span { background-position: -36px 0; }
#answer h2 {text-align:left; margin-bottom:0;}
#answer p { padding-bottom: 10px; }
#selected_answer2 { color: #ee6143; }
#studentAnswer2a, #studentAnswer2b { color: #ee6143;}
#youanswered {padding-bottom:10px;}
.nl-form { width: 85%; margin: 0; }
html[dir="rtl"] #radio ul { text-align: right; }
html[dir="rtl"] input[type="radio"] + label span { margin-left:5px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #2"); ?></h1>
				<h2><?php echo _("Question A. All animals need food to survive. Immediately after an animal eats food, the food is..."); ?></h2>
				<div id="q1">
					<div id="radio">
						<ul>
							<li>
								<input type="radio" id="r1" name="choice" value="A">
								<label for="r1" id="a"><span></span>A. <?php echo _("Stored for later use"); ?></label>
							</li>
							<li>
								<input type="radio" id="r2" name="choice" value="B">
								<label for="r2" id="b"><span></span>B. <?php echo _("Converted into waste"); ?></label>
							</li>
							<li>
								<input type="radio" id="r3" name="choice" value="C">
								<label for="r3" id="c"><span></span>C. <?php echo _("Transported by the bloodstream"); ?></label>
							</li>
							<li>
								<input type="radio" id="r4" name="choice" value="D">
								<label for="r4" id="d"><span></span>D. <?php echo _("Digested into simpler substances"); ?></label>
							</li>							
						</ul>
					</div>
				</div>
				
				<div id="q2" class="clearfix">
					<h2><?php echo _("Question B. The pancreas plays roles in which <span class='blink red'>TWO</span> systems?"); ?></h2>
					
						<form id="nl-form" class="nl-form">
						 <h1 class="black"><?php echo _("The pancreas plays roles in"); ?>
						<select id="opt1">
							<option value="1" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="2"><?php echo _("nervous"); ?></option>
							<option value="3"><?php echo _("integumentary"); ?></option>
							<option value="4"><?php echo _("digestive"); ?></option>
							<option value="5"><?php echo _("endocrine"); ?></option>
							<option value="6"><?php echo _("skeletal"); ?></option>
						</select>
						<?php echo _("and"); ?>
						<select id="opt2">
							<option value="1" selected>&#60;<?php echo _("select"); ?>&#62;</option>
							<option value="2"><?php echo _("nervous"); ?></option>
							<option value="3"><?php echo _("integumentary"); ?></option>
							<option value="4"><?php echo _("digestive"); ?></option>
							<option value="5"><?php echo _("endocrine"); ?></option>
							<option value="6"><?php echo _("skeletal"); ?></option>
						</select>
						<?php echo _("systems."); ?></h1>
						<div class="nl-overlay"></div>
					</form>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<h2><?php echo _("Question A. All animals need food to survive. Immediately after an animal eats food, the food is..."); ?></h2>				
				<p id="youanswered"><?php echo _("You answered..."); ?></p>				
				
					<p id="selected_answer"></p>
					<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>
				
				<h2><?php echo _("Question B. The pancreas plays roles in which <span class='blink red'>TWO</span> systems?"); ?></h2>
					
					<p id="youanswered"><?php echo _("You answered..."); ?></p>
					<p><?php echo _('The pancreas plays roles in');?> <span id="studentAnswer2a"></span> <?php echo _('and'); ?> <span id="studentAnswer2b"></span> <?php echo _('systems.'); ?></p>
					<p><img src="images/others/wrong.png" id="answer-icon2"/><span id='feedback2'></span></p>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="8.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Help to fight diseases"); ?></strong></section></section>
<script>
var feedback = "";	
var feedback2 = "";	
var studentAnswer1 = '';
var studentAnswer2 = '';
var studentAnswer2a = '';
var studentAnswer2b = '';
var str ='<select>';
var radio_value = '';
var nullAnswer = false;
var answered = 1;

	$(document).ready(function() {
		$('img.back-toggle').click(function() {
			if($('#question').is(':visible')) {
				document.location.href = "6.php#screen3"; // change to the previous page's last screen e.g. 6.php#screen2
			} else if ($('#answer').is(':visible')) {
				$('img.next-toggle').fadeOut(function() { $('img.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function() {
					$('#question').fadeIn();
					$('#feedback').removeClass('green');
					$('#feedback').removeClass('red');
					$('#feedback2').removeClass('green');
					$('#feedback2').removeClass('red');
				});
			}
		});
		
		$('img.check-toggle').click(function(e){ 
		checkAnswer();
		checkNull();		
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _('Please select your answers.'); ?>");
			nullAnswer = false;
		} else {
			$('img.check-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					window.location.hash = "#answer";
				}); 
			}
		});
	});
	
	function checkAnswer(){	
		studentAnswer1 = $("input[name='choice']:checked").val();
		studentAnswer2a = $('#opt1 option:selected').text();
		studentAnswer2b = $('#opt2 option:selected').text();
		
		switch(studentAnswer1){
			case 'A':
				feedback = '<?php echo _("Food energy is eventually stored for later use, but it must first be broken into simpler substances.");?>';
				radio_value=$('#a').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'B':
				feedback = '<?php echo _("Some food is converted into waste, but only after it is broken into simpler parts.");?>';
				radio_value=$('#b').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'C':
				feedback = '<?php echo _("Food molecules must be broken down from more complex substances before they can be transported in blood.");?>';
				radio_value=$('#c').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'D':
				feedback = "<?php echo _("That's right! Food is made of complex molecules that must be broken into simpler substances for energy to be released or stored.");?>";
				radio_value=$('#d').text();
				$('#feedback').addClass('green');
				$('#answer-icon').attr("src", "images/others/correct.png");
			break;
			default:break;	
		}
		 $('#selected_answer').text(radio_value);
		 $('#feedback').text(feedback);
		var str2 = 'digestive';
		studentAnswer2 = studentAnswer2a + '-' + studentAnswer2b;
		
		if(($('#opt1 option:selected').val() == 4 && $('#opt2 option:selected').val() == 5) || ($('#opt1 option:selected').val() == 5 && $('#opt2 option:selected').val() == 4)){
			feedback2 = '<?php echo _("Super!  Both correct!");?>';
			$('#feedback2').addClass('green');
			$('#answer-icon2').attr("src", "images/others/correct.png");
			studentAnswer2 = 'digestive-endocrine';			
		} else if(($('#opt1 option:selected').val() == 4 || $('#opt1 option:selected').val() == 5) || ($('#opt2 option:selected').val() == 4 || $('#opt2 option:selected').val() == 5)){
			feedback2 = "<?php echo _("You're halfway there... try again.");?>";
			$('#feedback2').addClass('red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");			
		} else {
			feedback2 = '<?php echo _("Neither of these.");?>';
			$('#feedback2').addClass('red');
			$('#answer-icon2').attr("src", "images/others/wrong.png");
		}		
		
		 $('#selected_answer2').text(studentAnswer2);
		 $('#feedback2').text(feedback2);
		 
		 $('#studentAnswer2a').text(studentAnswer2a);
		 $('#studentAnswer2b').text(studentAnswer2b);

		 save()
		
	}
	
	function checkNull() {
		
		if(studentAnswer2.indexOf(str) != -1 || studentAnswer1 ==null){
			nullAnswer = true;
		}	
		
	}

	function save(){
		if (answered == 0) {
			saveAnswer('staying-healthy-qc2-a', studentAnswer1);
			saveAnswer('staying-healthy-qc2-b', studentAnswer2);
			answered = 1;		
		}
	}
</script>
		<script src="scripts/nlform.js"></script>
	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>
<?php include("setlocale.php"); ?>
</body>
</html>
