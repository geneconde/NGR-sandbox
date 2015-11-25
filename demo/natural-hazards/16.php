<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?> dir="rtl_es" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/16/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative; }
#buttons .next { display: none; }
h1 { color: #003399; }
#choices p { text-align: left; padding: 10px; margin-top: 5px; }

#answer { display: none; }
#choices { float: left; width: 73%; text-align: left; margin: 20px 0px; }
#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }
#sortable { width: 20%; list-style: none; float: left; padding: 0; margin-left: 10px; margin-right: 45px; }
#sortable li { background-color: #cccc66; margin: 10px; padding: 10px 20px 5px 20px; text-align: center; font-size: 24px; cursor: pointer; }
#mark1 img, #mark2 img, #mark3 img, #mark4 img { display: inline-block; height: 30px; position: absolute; left: 10px; }

html[dir="rtl"] #choices p { text-align: right; }
html[dir="rtl"] #sortable { float: right; }
html[dir="rtl"] #mark1 img, #mark2 img, #mark3 img, #mark4 img { right: 25px; }
html[dir="rtl_es"] #choices p { font-size: 22px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#choices { width: 520px; }
	#sortable li { margin: 15px 10px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	#sortable li { margin: 17px 10px; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #3"); ?></h1>
				<h2><?php echo _("Drag the boxes at the left up or down to match its description at the right."); ?></h2>
				<ul id="sortable">
					<li><div id="mark1"></div><span data-name="A"></span><?php echo _("Hurricane"); ?></li>
					<li><div id="mark2"></div><span data-name="B"></span><?php echo _("Drought"); ?></li>
					<li><div id="mark3"></div><span data-name="C"></span><?php echo _("Tsunami"); ?></li>
					<li><div id="mark4"></div><span data-name="D"></span><?php echo _("Tornado"); ?></li>	
				</ul>
				<div id="choices">
					<p><?php echo _("A storm that forms at sea and strikes land."); ?></p>
					<p><?php echo _("Massive harbor waves that cause damage when they crash into land."); ?></p>
					<p><?php echo _("A funnel of air from the ground to the sky."); ?></p>
					<p><?php echo _("What happens when there is no rain for a long time."); ?></p>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div id="before"></div>
				<div class="clear"></div>
				<p><span id="answer1"></span></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Evacuating people..."); ?></strong></section></section>
	<script>
	var textstr = '',
		answers,
		studentAnswers = [],
		marks = [],
		answered = 1,
		correct = true;
		
	$(document).ready(function() { 
		/* Back Screen */
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = '15.php';
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });;
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');			
					$('#sortable').appendTo('#question');
					$('#choices').appendTo('#question');
					$('#sortable').sortable('enable');
					$('#sortable li').css('cursor','pointer');
					for (var i = 1; i < 5; i++) {
						$('#mark' + i).empty();
					}
					studentAnswers = [];
					marks = [];
					correct = true;
				});
			}
		});
		
		/* Check Answer */
		$('a.check-toggle').click(function(){
			$('#question').fadeOut(function(){
				$('a.check-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
				$('#answer').fadeIn();   

				answers = ["A","C","D","B"];
				
				$('#sortable span').each(function() {
					studentAnswers.push($(this).data('name'));
					marks.push($(this).parent().find('div').attr('id'));
				});
				
				for(var i = 0; i < 4; i++) {
					checkAnswer(marks[i], answers[i],studentAnswers[i]);
				}
				
				if (correct) {
					textstr = "<?php echo _('Great job! A tsunami is when massive harbor waves cause damage when they crash into land. A tornado is a funnel of air from the ground to the sky. These are all natural hazards that have many effects on the environment and people.'); ?>";
					$('#answer1').addClass('green');
				} else { 
					textstr = "<?php echo _('Not quite. A tsunami is when massive harbor waves cause damage when they crash into land. A tornado is a funnel of air from the ground to the sky. A hurricane is a storm that forms at sea and strikes land. A drought is a lack of rainfall that lasts a long time.'); ?>";
					$('#answer1').addClass('red');
				}
				$('#answer1').text(textstr);
				
				if (answered == 0) {
					saveAnswer('natural-hazards-qq3-a', studentAnswers[0]);
					saveAnswer('natural-hazards-qq3-b', studentAnswers[1]);
					saveAnswer('natural-hazards-qq3-c', studentAnswers[2]);
					saveAnswer('natural-hazards-qq3-d', studentAnswers[3]);
					answered = 1;
				}
			});
			
			$('#choices').prependTo('#before');
			$('#sortable').prependTo('#before');
			$('#sortable').sortable('disable');
			$('#sortable li').css('cursor','default');
		});
		
		$( "#sortable" ).sortable({ scroll: false, containment: "#sortable" });
		$( "#sortable" ).disableSelection();
	});
	
	function checkAnswer(mark, answer, sAnswer) {
		var check = $('<img src="images/18/correct.png">');
		var wrong = $('<img src="images/18/wrong.png">');
		
		if(answer==sAnswer) {
			check.appendTo($('#' + mark));
		} else {
			wrong.appendTo($('#' + mark));
			correct = false;
		}
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
