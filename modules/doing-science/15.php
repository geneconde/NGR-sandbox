<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(15, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'doing-science-qq2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Doing Science");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/svgcomponent.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/svgmodernizr.custom.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/15/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #A9333C; border-right: 1px dashed #A9333C;}
h1 { color: #61153e;}
h2 {text-align:left; padding:10px 0 0 10px; margin:0; font-weight:normal;}
p { color: black;}
.bg section{width:95%; margin:0 auto; position:relative; top:25px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
.alignment{text-align:left; padding: 10px 10px 0 10px; }
#second_p{float:left; width: 55%; margin-top:0px;}
table {float:left; margin:0 0 0 20px; font-size:20px; }
th{padding:5px; background-color:#a8d59d; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; width:155px; font-weight:normal;}
td { padding:5px; background-color:#f59a87; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px;}
#ans {margin:0 auto;}
.resize {height:25px; vertical-align:middle;}
#user_answer{vertical-align:middle;}	

.ac-custom label { font-size: 24px; font-weight: normal; color: black; padding: 0 0 0 50px; }
.ac-custom li { padding: 7px 0px; }

.no-mtop{margin-top:0px !important; padding-top:0px;}
.ac-custom label::before {border:4px solid #a8d59d;}
.ac-custom svg path {
			stroke: #f59a87;
			stroke-width: 13px;
			stroke-linecap: round;
			stroke-linejoin: round;
			fill: none;
		}
.ac-custom svg {
left: 1px !important;
width: 40px;
height: 33px;
margin-top: -17px;
}
.ac-custom input[type="radio"]:checked + label {
color: #BA4065;
stroke-width: 5px !important;
}
.ac-custom ul, .ac-custom ol {
text-align: left;
}
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before {
width: 40px;
height: 40px;
margin-top: -20px;
}
.ac-custom {margin-top:20px;}
html[dir="rtl"] .ac-custom li { text-align: right; }
html[dir="rtl"] .ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before { right: 0; }
html[dir="rtl"] .ac-custom label { padding:0 50px 0 0; }
html[dir="rtl"] .ac-custom svg { right: -2px !important; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #2");?> </h1>
					<p class="alignment">
						<?php echo _("In Quiz Question #1, we learned that rubbing alcohol evaporates faster than freshwater and saltwater. We also learned that saltwater is the slowest evaporating liquid.");?>
					</p>
													
					<h2> <?php echo _("Before the experiment, the students had the hypothesis that saltwater would evaporate faster than the other liquids. Do the results of the experiment support the hypothesis? Why or why not?");?></h2>
					
					<form class="ac-custom ac-radio ac-fill" autocomplete="off">
						<ul>
							<li><input id="r1" name="r1" type="radio"><label for="r1" class="css-label">A. <?php echo _("Yes, because there is more saltwater than the other liquids.");?></label></li>
							<li><input id="r2" name="r1" type="radio"><label for="r2" class="css-label">B. <?php echo _("No, because there is more saltwater than the other liquids.");?></label></li>
							<li><input id="r3" name="r1" type="radio"><label for="r3" class="css-label">C. <?php echo _("Yes, the table shows that less of saltwater and freshwater were left.");?></label></li>
							<li><input id="r4" name="r1" type="radio"><label for="r4" class="css-label">D. <?php echo _("No, the table shows that less of saltwater and freshwater were left.");?></label></li>
						</ul>
					</form>
					
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
					<p><br/><br/><?php echo _("You answered...");?><br/><br/></p>
					<p id="selected_answer"></p><br/><br/>
					<p class="hidden"><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id='user_answer'></span></p>
				</section>
			</div>					
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="16.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Cleaning the beakers...");?></strong></section></section>

<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var textstr = "";
var nullAnswer = false;
var textstr = null;
var selected_answer = null;
var answered = <?php echo $answered; ?>;
$(document).ready(function() {
	 /* Back Transition */
	$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
			document.location.href= "14.php";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut(function(){ $('a.check-toggle').fadeIn(); });					
				$('h1').text('<?php echo _("Quiz Question #2");?>');
				$('h1').fadeIn();	
				$('#user_answer').removeClass('red');
				$('#user_answer').removeClass('green');
			});
		}
	});

	$('a.check-toggle').click(function(e){
		checkAnswer();
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please select your answer."); ?>");
			nullAnswer = false;
			selected_answer = '';
		} else {
			$('#screen1').fadeOut( function(){					
				$('a.check-toggle').fadeOut(function (){
				$('a.next-toggle').fadeIn();
				$('h1').text('<?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?");?>');
				$('#sortable').appendTo('#ans');
				save();
				$('#answer').fadeIn();					
				}); 
			});
		}
	});	
});
		function checkAnswer() {
		
		 if($('#r1').is(":checked")) {
			selected_answer = $("input:checked + label").text();
			textstr = '<?php echo _("No, the results of the experiment do not support the hypothesis. There is more saltwater than the other fluids; it is the slowest evaporating liquid in the experiment.");?>';
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			studentAnswer = 'A';
		}
		else if($('#r2').is(":checked")) {
			selected_answer = $("input:checked + label").text();
			textstr = '<?php echo _("Correct! The results of the experiment do not support the hypothesis. Saltwater did not evaporate as fast as the other liquids, and there is more saltwater than the other liquids.");?>';
			$('#user_answer').addClass('green');
			$('#answer-icon').attr("src", "images/others/correct.png");
			studentAnswer = 'B';	
		}
		else if($('#r3').is(":checked")) {	
			selected_answer = $("input:checked + label").text();
			textstr = '<?php echo _("No, the results of the experiment do not support the hypothesis. There is more saltwater than the other fluids; it is the slowest evaporating liquid in the experiment.");?>';
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");		
			studentAnswer = 'C';
		} 
		else if($('#r4').is(":checked")) {
			selected_answer = $("input:checked + label").text();
			textstr = ' <?php echo _("Only the answer is correct, not the reason why. The results of the experiment do not support the hypothesis, correct. But the table shows there is more saltwater than the other liquids.");?>' 
			$('#user_answer').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			studentAnswer = 'D';
		}		
		$('#selected_answer').text(selected_answer);
		$('#user_answer').text(textstr);
		$('p.hidden').removeClass('hidden');
	}
function checkNull() {
	if(!$('#r1').is(":checked") && !$('#r2').is(":checked") && !$('#r3').is(":checked") && !$('#r4').is(":checked")) {
		nullAnswer = true;
	}
}
function save(){
	if(answered == 0){
		saveAnswer('doing-science-qq2-a', studentAnswer);					
		answered = 1;	
	}
}
</script>
<script src="scripts/svgcheckbx.js"></script>
<?php require("setlocale.php"); ?>
</body>
</html>
