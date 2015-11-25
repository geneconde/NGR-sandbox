<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'properties-of-matter';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Properties of Matter"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/14/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
#answer { display: none; }
h1 { color: #d4c08b; }
img.back-toggle-answer, #buttons .next { display: none; }
p { color: #fff; }
.choices { width: 64%; margin: 0 auto; text-align: center; margin-top: 20px; height: 240px; }
.choices .pic { float: left; height: 200px; margin: 0px 10px; width: 46%; }
.choices .pic img { cursor: pointer; height: 100%; }
.choices p { padding: 0; }
#answer .pic { height: 200px; margin: 0px 10px; text-align: center; }
.pic img { height: 100%; }
#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }
.answer-item { min-height: 260px; width: 100%; }
img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #ECC377;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}

.skyblue { color: #8bdbe7; }
.lightyellow { color: #f7f38c; }
.orange { color: #EC9700; }
.lightpurple { color: #d472dd; }

html[dir='rtl'] span#answer1 { font-size: 22px; }
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.choices { width: 75%; }
}	
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #1"); ?></h1>
				<h2><?php echo _("Which of the following is an example of a chemical change?"); ?></h2>
				<div class="choices">					
					<div class="pic">						
						<img src="images/14/ice.jpg" id="a1" data-name="A" class="border">						
						<p><span class="skyblue"><?php echo _("Ice melts"); ?></span></p>					
					</div>					
					<div class="pic">						
						<img src="images/14/glass.jpg" id="b1" data-name="B" class="border">						
						<p><span class="lightyellow"><?php echo _("Glass vase breaks"); ?></span></p>					
					</div>
				</div>
				<div class="clear"></div>
				<div class="choices">
						<div class="pic">						
						<img src="images/14/toast.jpg" id="c1" data-name="C" class="border">						
						<p><span class="orange"><?php echo _("Toast burns"); ?></span></p>					
					</div>					
						<div class="pic">						
						<img src="images/14/paper.jpg" id="d1" data-name="D" class="border">						
						<p><span class="lightpurple"><?php echo _("Paper is ripped"); ?></span></p>					
					</div>	
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>
				<div class="answer-item">
					<p><?php echo _("You answered..."); ?></p>
					<div class="pic"><img id="imganswer"></div>
					<p><span id="textanswer"></span></p>
					<p><img src="" id="answer-icon"><span id="answer1"></span></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<script>
	var answer = "";
	//var answered = 0;
	var nullAnswer = false;
	$(document).ready(function() {
		$(".choices img").each(function() {
			var image = $(this);
			var imgVal = $(this).data('name');

			image.click(function() {
				clearEverything();
				//if(answer != imgVal) {
					image.addClass('border-off');
					answer = imgVal;
				//}
			});
		});
	
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href= "13.php";
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function (){
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer-icon').removeClass('img-align');
					$('#textanswer').removeClass('gray');
					$('#textanswer').removeClass('lightyellow');
					$('#textanswer').removeClass('skyblue');
					$('#textanswer').removeClass('lightpurple');
					$('#question').fadeIn();
					window.location.hash = '';
				});
			}
		});
	
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert('<?php echo _("Please select your answer."); ?>');
				nullAnswer = false;
			} else {
				$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					window.location.hash = '#answer';

					/* For Checking */
					if (answer == "C") {
						textstr = "<?php echo _("Correct, when toast burns it changes chemically."); ?>";
						$('#textanswer').text('<?php echo _("Toast burns"); ?>');
						$('#textanswer').addClass('gray');
						$('#imganswer').attr("src","images/14/toast.jpg");
						$('#answer-icon').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
					} else {
						if (answer == "A") {
							textstr = "<?php echo _("No, ice melting is a physical change. The same substance is going from the solid state (ice) to its liquid form (water) without changing."); ?>";
							$('#textanswer').text("<?php echo _("Ice melts"); ?>");
							$('#textanswer').addClass('skyblue');
							$('#imganswer').attr("src","images/14/ice.jpg");
						} else if (answer == "B") {
							textstr = "<?php echo _("No, when glass breaks it is changing in size, not chemically changing."); ?>";
							$('#textanswer').text("<?php echo _("Glass vase breaks"); ?>");
							$('#textanswer').addClass('lightyellow');
							$('#imganswer').attr("src","images/14/glass.jpg");
						} else if (answer == "D") {
							textstr = "<?php echo _("No, paper tearing is a physical change in size."); ?>";
							$('#textanswer').text("<?php echo _("Paper is ripped"); ?>");
							$('#textanswer').addClass('lightpurple');
							$('#imganswer').attr("src","images/14/paper.jpg");
						}
						$('#answer-icon').attr("src", "images/others/wrong2.png");
						$('#answer-icon').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					/* End Checking */
				});	
				
				/*
				if(answered == 0) {
					saveAnswer('properties-of-matter-qq1-a',answer);
					answered = 1;
				} // end save to db
				*/
			} // end else
		}); // end check answer
	}); // end doc ready
	
	function clearEverything() {
		$('.choices img').each(function() {
			$(this).removeClass('border-off');
		});
	}
	
	function checkNull() {
		if(!$('#a1').hasClass('border-off') && !$('#b1').hasClass('border-off') && 
		   !$('#c1').hasClass('border-off') && !$('#d1').hasClass('border-off')) {
			nullAnswer = true; 
		}
	}
	</script>
	<section id="preloader"><section class="selected"><strong><?php echo _("And the first quiz question is..."); ?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
