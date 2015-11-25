<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(9, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'built-to-survive-qc3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
<title><?php echo _("Built to Survive"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/9/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
img.back-toggle-answer, #buttons .next { display: none; }
h1 { color: #4F8AD3; }
div.q-container:first-child { height: auto; }
div.q-container:last-child { height: 270px; }
.q-container { margin: 5px 0px 10px 0px !important; margin: 0 auto: width: 100%; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; width: 100%; }
#choices1 { margin: 10px auto 0; width: 95%; }
#choices2 { width: 50%; float: left; }
#choices2 p { text-align: left; padding: 5px 0px; color: #000; margin-left: 20px; }
#choices2 h2 { padding-left: 0 !important; }
.pic { height: 160px; float: left; width: 33%; text-align: center; margin: 0 auto; }
.pic img { height: 100%; margin-right: 20px; cursor: pointer; margin: 0 auto; }
.pic p { font-size: 20px; text-align: center; color: #002980; }
.answer-item { margin-bottom: 5px !important; margin: 0 auto; padding: 0px 5px; width: 100%; }
.answer-item > div { width: 95%; margin: 0 auto; }
.answer-item p { color: #000; padding: 0 0 5px 0; }
.answer-item div:last-child { margin-bottom: 10px; }
.answer-item .pic { float: none; }
#answer-icon1, #answer-icon2 { display: inline-block; height: 30px; margin-right: 10px; }
img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #ECC377;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}

#hexaflip-container { float: right; margin: 0px 15px 0 0; width: 45%; padding: 0; }
#hexaflip-container p { color: #055D79; margin: 0; padding: 0 0 10px 0; }
#hexaflip { margin: 0 auto; }

input[type=radio].css-checkbox { display:none; }

input[type=radio].css-checkbox + label.css-label {
	background-image: url('images/9/unchecked.png');
	padding: 0 0 15px 32px;
	display:inline-block;
	line-height:27px;
	background-repeat:no-repeat;
	background-position: 0 0;
	font-size:24px;
	vertical-align:middle;
	cursor:pointer;
	color: #000;
	position: relative;
}

input[type=radio].css-checkbox:checked + label.css-label { background-image: url('images/9/checked.png');}
label.css-label {
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
	<?php if($language == "zh_CN") { ?>
		input[type=radio].css-checkbox + label.css-label { display: block; }
	<?php } ?>
	<?php if($language == "es_ES") { ?>
		input[type=radio].css-checkbox + label.css-label { display: block; }
	<?php } ?>
	html[dir="rtl"] input[type=radio].css-checkbox + label.css-label { padding: 0 32px 5px 0; background-position: right; }
	html[dir="rtl"] #choices2 { float: right; width: 30%; }
	html[dir="rtl"] #choices2 p { text-align: right; }
	html[dir="rtl"] #answer p { text-align: center; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quick Check #3"); ?></h1>
				<div class="q-container">
					<h2><?php echo _("Question A. Why would a snake not be able to survive where it sometimes snows and freezes?"); ?></h2>
					<div id="choices1">
						<input type="radio" name="choices1" id="a1" data-name="A" class="css-checkbox">
						<label for="a1" class="css-label"><?php echo _('There would be little or no food to eat'); ?></label>
						<input type="radio" name="choices1" id="b1" data-name="B" class="css-checkbox">
						<label for="b1" class="css-label"><?php echo _('Their color would make it difficult to hide in snow'); ?></label>
						<input type="radio" name="choices1" id="c1" data-name="C" class="css-checkbox">
						<label for="c1" class="css-label"><?php echo _('They would not be able to stay warm enough to live'); ?></label>

						<!--<div class="pic">
							<img src="images/9/snake1.jpg" id="a1" data-name="A" class="border">
							<p><span class="lightred"><?php echo _("There would be little or no food to eat"); ?></span></p>
						</div>
						<div class="pic">
							<img src="images/9/snake2.jpg" id="b1" data-name="B" class="border">
							<p><span class="lightblue"><?php echo _("Their color would make it difficult to hide in snow"); ?></span></p>
						</div>
						<div class="pic">
							<img src="images/9/snake3.jpg" id="c1" data-name="C" class="border">
							<p><span class="darkyellow"><?php echo _("They would not be able to stay warm enough to live"); ?></span></p>
						</div>-->
					</div>
				</div>
				
				<div class="q-container">
					<h2><?php echo _("Question B. Select the adaptation listed that is <span class='red bold blink'>NOT</span> possessed by plants."); ?></h2>
					<div id="choices2">
						<p><?php echo _("A. Movement"); ?></p>
						<p><?php echo _("B. Thorns"); ?></p>
						<p><?php echo _("C. Colored petals"); ?></p>
						<p><?php echo _("D. Photosynthesis"); ?></p>
					</div>
					<div id="hexaflip-container">
						<p><?php echo _("Rotate or flip the 3D box below either up or down to set your answer."); ?></p>
						<div id="hexaflip"></div>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<h2><?php echo _("Question A. Why would a snake not be able to survive where it sometimes snows and freezes?"); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<!--<div class="pic"><img id="imganswer1" src=""></div>-->
					<p><span id="textanswer1"></span></p>
					<p><img src="" id="answer-icon1"><span id="answer1" class="hidden"></span></p>
				</div>
				<div class="answer-item">
					<h2><?php echo _("Question B. Select the adaptation listed that is <span class='red bold blink'>NOT</span> possessed by plants."); ?></h2>
					<p><?php echo _("You answered..."); ?></p>
					<div><p><span id="textanswer2"></span></p></div>
					<div><p><img id="answer-icon2"><span id="answer2"></span></p></div>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="10.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Sssssnakes!"); ?></strong></section></section>
	<script>
	var answer1, answer2;
	var answered = <?php echo $answered; ?>;
	var textstr = '';
	var nullAnswer = false;
	$(document).ready(function() {
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "8.php#screen3";
			} else if($('#answer').is(':visible')){
				$('#answer').fadeOut(function (){
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer2').removeClass('red');				
					$('#answer2').removeClass('green');
					$('#answer-icon1').removeClass('img-align');
					$('#answer-icon2').removeClass('img-align');
				});	
			}
		});
	
		$(".pic img").each(function() {
			var image = $(this);
			var imgVal = $(this).data('name');

			image.click(function() {
				clearEverything();
				if(answer1 != imgVal) {
					image.addClass('border-off');
					answer1 = imgVal;
				}
			});
		});

	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _("Please select your answers."); ?>");
				nullAnswer = false;
			} else {
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
					window.location.hash = "#answer";
					
					/* For checking of question A */
					if($('#c1').is(':checked')) {
						textstr = "<?php echo _("Correct. Snakes are cold-blooded; their body temperature varies with the temperature around them. They are adapted to live in warmer climates."); ?>";
						$('#textanswer1').text('<?php echo _("They would not be able to stay warm enough to live"); ?>');
						$('#answer-icon1').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
						answer1 = "C";
					} else {
						if ($('#a1').is(':checked')) {
							textstr = "<?php echo _("No, the body temperature of snakes varies with the temperature around them. They are adapted to live in warmer climates."); ?>";
							$('#textanswer1').text("<?php echo _("There would be little or no food to eat"); ?>");
							answer1 = "A";
						} else if ($('#b1').is(':checked')) {
							textstr = "<?php echo _("No, the body temperature of snakes varies with the temperature around them. They are adapted to live in warmer climates."); ?>";
							$('#textanswer1').text("<?php echo _("Their color would make it difficult to hide in snow"); ?>");
							answer1 = "B";
						}
						$('#answer-icon1').attr("src", "images/others/wrong.png");
						$('#answer-icon1').addClass('img-align');
						$('#answer1').addClass('red');
					}

					$('#answer1').text(textstr);
					$('#answer1').fadeIn();
					/* End checking of question A */
					
					/* For checking of question B*/
					var hexavalue = hexa.getValue();
					answer2 = null;
					if (hexavalue == './images/others/a.png') answer2 = "A";
					if (hexavalue == './images/others/b.png') answer2 = "B";
					if (hexavalue == './images/others/c.png') answer2 = "C";
					if (hexavalue == './images/others/d.png') answer2 = "D";

					if(answer2 == "A") {
						textstr = "<?php echo _("Correct. Plants do not usually rely on movement for survival. They use photosynthesis to produce their own food. Although they move toward sunlight, movement is not considered an adaptation for plants the way it is for animals."); ?>";
						$('#textanswer2').text('<?php echo _("A. Movement"); ?>');
						$('#answer-icon2').attr("src", "images/others/correct.png");
						$('#answer2').addClass('green');
					} else {
						if(answer2 == "B") {
							textstr = "<?php echo _("No, thorns offer protection and help reduce water loss in the hot sun."); ?>";
							$('#textanswer2').text('<?php echo _("B. Thorns"); ?>');
						} else if (answer2 == "C") {
							textstr = "<?php echo _("No. Although they move toward sunlight, movement is not considered an adaptation for plants the way it is for animals."); ?>";
							$('#textanswer2').text('<?php echo _("C. Colored petals"); ?>');
						} else if (answer2 == "D") {
							textstr = "<?php echo _("No, plants use photosynthesis to produce their own food and survive."); ?>";
							$('#textanswer2').text('<?php echo _("D. Photosynthesis"); ?>');
						}
						$('#answer-icon2').attr("src", "images/others/wrong.png");
						$('#answer-icon2').addClass('img-align');
						$('#answer2').addClass('red');
					}
					$('#answer2').text(textstr);
					/* End checking of question B */
					
					if(answered == 0) {
						saveAnswer('built-to-survive-qc3-a', answer1);
						saveAnswer('built-to-survive-qc3-b', answer2);
						answered = 1;
					} // end save to db
				}); // end question fade
			} // end else
		}); // end check answer
	}); // end doc ready
	
	function clearEverything() {
		$('.pic img').each(function() {
			$(this).removeClass('border-off');
		});
	}
	
	function checkNull() {
		if($('input:radio:checked').length == 0) nullAnswer = true;
	}
	</script>
	<script src="scripts/hexaflip.js"></script>
    <script>
		var set1 = ['./images/others/a.png','./images/others/b.png','./images/others/c.png','./images/others/d.png'];
		var hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set1 }, { size: 150 });
    </script>
	<?php include("setlocale.php"); ?>
</body>
</html>