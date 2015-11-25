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
<link rel="stylesheet" type="text/css" href="styles/component2.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.min.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/jquery.jsPlumb-1.4.1-all-min.js"></script>
<style>
.bg { background: url('images/13/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
#answer { display: none; max-width: 100% !important; }
#answer p { margin: 10px 0; } 
img.next-toggle { display: none; }
h2 { color: #8e4535; }
h1 { color: #27a78f; }
.ac-custom label { font-size: 24px; font-weight: normal; color: black; padding: 0 0 0 50px; }
.ac-custom li { padding: 11px 0px; }
.ac-custom label::before {border:4px solid #27A78F;}
.ac-custom svg path {
			stroke: #ee6143;
			stroke-width: 13px;
			stroke-linecap: round;
			stroke-linejoin: round;
			fill: none;
		}
.ac-custom svg {
	left: 1px !important;
	width: 42px;
	height: 33px;
	margin-top: -14px;
}
.ac-custom input[type="radio"]:checked + label {
	color: #ee6143;
	stroke-width: 5px !important;
}
.ac-custom ul, .ac-custom ol {
	text-align: left;
}
.ac-custom input[type="checkbox"], .ac-custom input[type="radio"], .ac-custom label::before {
	width: 45px;
	height: 45px;
	margin-top: -20px;
}
.ac-custom { margin-top:20px; padding-left: 20px;}

.choices {height:50px; -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; background-color:#3EAC91;}
.choices p, td {font-size:20px;}
.choices:hover{cursor:pointer;}
.drop p{text-align:center}
.drop {width:200px}

#col1 { position: absolute; left: 40px; }
#col2 { position: absolute; right: 40px; }

.rBox { background-color: #EE6143;  height: 40px; width: 450px; border-radius: 5px; margin-top:10px; padding-left: 20px; padding-top: 3px; }
.lBox { background-color: #4FCBC7; height: 40px; width: 160px; border-radius: 5px; margin-top:10px; padding-left: 20px; padding-top: 3px; }

#question2 ul li { list-style-type: none; font-size: 24px; }
._jsPlumb_endpoint { cursor: pointer; }
._jsPlumb_endpoint_connected { margin-top: 0; }

#reset { background: white; padding: 5px 10px; border-radius: 5px; border: solid white; }
#reset:hover { border: solid #4FCBC7; cursor: pointer; }

.ansImg { float: left; height: 40px; margin-left: -45px; }

#question2 { height: 290px; }
#containerId { position: relative; }
#cover { position: absolute; z-index: 999; width: 855px; height: 170px; display: none; }

html[dir="es"] h2 { margin: 5px 0 10px 0; }
html[dir="es"] .rBox { width: 513px; }
html[dir="es"] #col1 { left: 0; }
html[dir="es"] #question2 { height: 320px; }
html[dir="es"] #question2 ul li { width: 470px; }
html[dir="rtl"] #question2 ul li { font-size: 20px; }
html[dir="rtl"] .lBox { padding-right: 20px; }
html[dir="rtl"] .rBox { padding-right: 13px; }
html[dir="rtl"] h2 { font-size: 23px; }
html[dir="rtl"] .ac-custom ul { text-align: right; }
html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom input[type="radio"], html[dir="rtl"] .ac-custom label::before { right:0; }
html[dir="rtl"] .ac-custom label { padding:0 45px 0 0; }
html[dir="rtl"] .ac-custom svg { right: 2px; top: 50%; }
html[dir="rtl"] .ac-custom li { margin-right: 75px; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">			
			<div id="question">				
				<h1><?php echo _('Quick Check #5'); ?></h1>
				<div id="question2">
					<h2><?php echo _('Question A. Connect each of the descriptions on the right to the requirement for exercise it describes on the left by dragging any of the circles at the left column to another circle in the right column. Click the "Start Over" button to remove the lines and connect again.'); ?></h2>
				
					<div id="containerId">
						<div id="cover"></div>
						<span id="reset"><?php echo _('Start Over'); ?></span>
					
						<div id="col1">
							<ul>
							    <li><div class='lBox' id="c1"><?php echo _('Frequency'); ?></div></li>
							    <li><div class='lBox' id="c2"><?php echo _('Duration'); ?></div></li>
							    <li><div class='lBox' id="c3"><?php echo _('Intensity'); ?></div></li>
						    </ul>
						 </div>
						 
						<div id="col2">
							<ul>
							    <li><div class='rBox' id="A"><?php echo _('Increase heart rate while exercising.'); ?></div></li>
							    <li><div class='rBox' id="B"><?php echo _('Exercise a set number of days per week.'); ?></div></li>
							    <li><div class='rBox' id="C"><?php echo _('Try to exercise at least 30 minutes per day.'); ?></div></li>
						    </ul>
						 </div>
					</div>
				</div>	
				
				<div id="question1">
					<h2><?php echo _("Question B. Which of the following is <span class='blink red'>NOT</span> usually associated with heavy use of alcohol?"); ?></h2>
					<div id="quest1">
						<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
							<ul>
								<li><input id="r1" name="q1" type="radio" value="A"><label for="r1" class="css-label" id="q1a"><?php echo _('Extreme coolness'); ?></label></li>
								<li><input id="r2" name="q1" type="radio" value="B"><label for="r2" class="css-label" id="q1b"><?php echo _('Safe driving'); ?></label></li>
								<li><input id="r3" name="q1" type="radio" value="C"><label for="r3" class="css-label" id="q1c"><?php echo _('Low risk of heart disease'); ?></label></li>
								<li><input id="r4" name="q1" type="radio" value="D"><label for="r4" class="css-label" id="q1d"><?php echo _('Healthy liver function'); ?></label></li>
							</ul>
						</form>
					</div>
				</div>
				
				<div id="answer">			
					<h2><?php echo _("Question B. Which of the following is <span class='blink red'>NOT</span> usually associated with heavy use of alcohol?"); ?></h2>
					<p><?php echo _('You answered...'); ?></p>		
					<p id="selected_answer1"></p>
					<p><img src="images/others/wrong.png" id="answer-icon"/><span id='feedback'></span></p>
				</div>
			</div>
			
			
				
			
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="check-toggle" src="images/buttons/check-answer.png" title="<?php echo _('Check Answer'); ?>"></a>
		<a href="14.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _('Ready for your last quick check?'); ?></strong></section></section>
	<script>
		
	var source="";
	var target="";
	var choices="";
	var ans1, ans2, ans3;

	var feedback ='';
	var feedback2 ='';
	var studentAnswer1='';
	var studentAnswer2='';
	var selected_answer1='';
	var selected_answer2='';
	var nullAnswer= false;
	var answered = <?php echo $answered; ?>;
	var answer=0;
	var checked={};
	var str ='';
	$(document).ready(function() {

		jsPlumb.bind("ready", function() {
	
			var startpointOptions = { isSource:true,container:$('#containerId'), anchors:["Right"], connector:[ "Straight" ] };
			var endpointOptions = { isTarget:true,container:$('#containerId'), connector:["Straight"], anchors:["Left"] };
			var startpoint = jsPlumb.addEndpoint($('.lBox'), startpointOptions);
			var endpoint = jsPlumb.addEndpoint($('.rBox'), endpointOptions);
	
		  //get answers
				jsPlumb.bind("jsPlumbConnection", function (conn) {
				     if (conn.sourceId=='c1'){
				    	 ans1 = conn.targetId;
				     }else if (conn.sourceId=='c2'){
				    	 ans2 = conn.targetId;
				     }else if (conn.sourceId=='c3'){
				    	 ans3 = conn.targetId;
				     }
				     //resets all connections
				     $('#reset').click(function(){
				        jsPlumb.detach(conn);
				    });
				});
			
		});
		
		$('img.back-toggle').click(function() {
			if($('#question1').is(':visible')) {
				document.location.href = "12.php#screen2"; // change to the previous page's last screen e.g. 8.php#screen4
			} else if ($('#answer').is(':visible')) {
				$('img.next-toggle').fadeOut(function() { $('img.check-toggle').fadeIn(); });
				$('#question2').fadeOut();
				$("li img").remove();
				$('#answer').fadeOut(function() {
					$('#cover').hide();
					$('#question1').fadeIn();
					$('#question2').fadeIn();
					$('#reset').fadeIn();
					jsPlumb.repaint($('.lBox , .rBox'));
					$('#feedback').removeClass('green');
					$('#feedback').removeClass('red');
					$('#question').append($('#tbl1'));
					$('.choices').draggable('enable');
					studentAnswer2 = '';
					str = '';
					answer = 0;
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
				$('#question').append($('#tbl1'));
				studentAnswer2 = '';
				str = '';
				answer = 0;
				$('#feedback').removeClass('green');
				$('#feedback').removeClass('red');
			} else {
				$('img.check-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
				$('#reset').fadeOut();
				$('#question2').fadeOut();
				$('#question1').fadeOut(function(){
					$('#cover').show();

					//check answer for question B
					if( ans1 == 'B'){
						$('#c1').parent().prepend('<img class="ansImg" src="images/others/correct.png"/>');
					} else {
						$('#c1').parent().prepend('<img class="ansImg" src="images/others/wrong.png"/>');					}
					if( ans2 == 'C'){
						$('#c2').parent().prepend('<img class="ansImg" src="images/others/correct.png"/>');
					} else {
						$('#c2').parent().prepend('<img class="ansImg" src="images/others/wrong.png"/>');					}
					if( ans3 == 'A'){
						$('#c3').parent().prepend('<img class="ansImg" src="images/others/correct.png"/>');
					} else {
						$('#c3').parent().prepend('<img class="ansImg" src="images/others/wrong.png"/>');					}
						
					//$('#feedback2').text(feedback2);
					//end question b check
					
					$('#question2').fadeIn();
					$('#answer').fadeIn();
					window.location.hash = "#answer";
					jsPlumb.repaint($('.lBox , .rBox'));
				});
			}
		});
	});

		
	function checkAnswer(){
		studentAnswer1 = $("input[name='q1']:checked").val();
		$('#selected_answer2').append($('#tbl1'));
		switch(studentAnswer1){
				case 'A':
				feedback="<?php echo _("That's it! Heavy drinking is decidedly UNcool."); ?>";
				selected_answer1=$('#q1a').text();
				$('#feedback').addClass('green');
				$('#answer-icon').attr("src", "images/others/correct.png");
			break;
			
			case 'B':
				feedback="<?php echo _("Hardly. Don't get into a car with someone who's been drinking."); ?>";
				selected_answer1=$('#q1b').text();
				$('#feedback').addClass('red');
				$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'C':
			feedback="<?php echo _('Think again! Heart disease risk goes up with heavy alcohol use.'); ?>";
			selected_answer1=$('#q1c').text();
			$('#feedback').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			
			case 'D':
			feedback="<?php echo _('Not quite! Heavy drinking is damaging to the liver.'); ?>";
			selected_answer1=$('#q1d').text();
			$('#feedback').addClass('red');
			$('#answer-icon').attr("src", "images/others/wrong.png");
			break;
			default:break;
		}
		$('#feedback').text(feedback);
		$('#selected_answer1').text(selected_answer1);	

		save();
	}
	
	function save(){
		if (answered == 0) {
			saveAnswer('staying-healthy-qc5-a', ans1);
			saveAnswer('staying-healthy-qc5-b', ans2);
			saveAnswer('staying-healthy-qc5-c', ans3);
			saveAnswer('staying-healthy-qc5-d', studentAnswer1);
			answered = 1;		
		}
	}
	
	function checkNull(){
		if(studentAnswer1 ==null || studentAnswer1 == ''){
			nullAnswer = true;
		}
		if (!$("div[elid='c1']").hasClass("_jsPlumb_endpoint_connected")){
			nullAnswer = true;
		}
		if (!$("div[elid='c2']").hasClass("_jsPlumb_endpoint_connected")){
			nullAnswer = true;
		}
		if (!$("div[elid='c3']").hasClass("_jsPlumb_endpoint_connected")){
			nullAnswer = true;
		}
	}
	</script>
	<script src="scripts/svgcheckbx.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
