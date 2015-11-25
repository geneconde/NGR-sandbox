<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Built to Survive"); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">
	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/video.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	
	<style>
		h1 { color: #4F8AD3; }
		.bg { background-image: url(images/17/bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
		img.back-toggle-answer, #buttons .next { display: none; }
		#question ul { 
			overflow: hidden;
			list-style: none;
			width: 75%;
			margin: 40px auto 0;
			padding-left: 0;
		}
		#question li {
			text-align: center;
			float: left;
			width: 281px;
			margin: 0 60px 40px 0;
			font-size: 24px;
		}
		div.choices { padding-top: 10px; }
		.choices { width: 100%; margin: 0 auto; text-align: center; height: 200px; }
		.choices .pic { float: left; height: 150px; margin: 0px 10px; width: 46%; }
		.choices .pic img { cursor: pointer; height: 100%; }
		.choices p { padding: 0; }
		#answer { display: none; text-align: center; }

		#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }
		img.border {
			border: 4px solid #f0f0f0;
			-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
			-webkit-backface-visibility: hidden; /* Fix for transition flickering */
		}
		img.border-off {
			border: 4px solid #ECC377;
			-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
		}
		
		.teal { color: #00A894; }
		.darkgreen { color: #4D6800; }
		.brown { color: #813500; }
		.blue { color: #314AAF; }
		.purple { color: #A804D1; }
		.lightred { color: #AC3636; }
		html[dir="rtl"] .choices .pic { float: right; }
		html[dir="rtl"] .pic p { text-align: center !important; }
		html[dir="rtl"] #answer p { text-align: center; }
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #2"); ?></h1>
				<h2><?php echo _("Which of the following characteristics most influences where reptiles may live and survive?"); ?></h2>
				<div class="choices">
					<div class="pic">
						<img src="images/17/a.jpg" alt="<?php echo _("Have backbones"); ?>" data-name="A" id="a" class="border">
						<p><span class="brown"><?php echo _("Have backbones"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/17/b.jpg" alt="<?php echo _("Lay eggs"); ?>" data-name="B" id="b" class="border">
						<p><span class="teal"><?php echo _("Lay eggs"); ?></span>
					</div>
				</div>
				<div class="choices">
					<div class="pic">
						<img src="images/17/c.jpg" alt="<?php echo _("Cold-blooded"); ?>" data-name="C" id="c" class="border">
						<p><span class="blue"><?php echo _("Cold-blooded"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/17/d.jpg" alt="<?php echo _("Scaly skin"); ?>" data-name="D" id="d" class="border">
						<p><span class="purple"><?php echo _("Scaly skin"); ?></span></p>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="pic"><img id="imganswer"></div>
				<p><span id="textanswer"></span></p>
				<p><img src="" id="answer-icon"><span id="answer1"></span></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("About reptiles..."); ?></strong></section></section>
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jquery.blink.min.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/save-answer.js"></script>
	<script>
	var answer = '';
	var answered = 1;
	var textstr = '';
	var nullAnswer = false;
	$(document).ready(function() {
		$(".choices img").each(function() {
			var image = $(this);
			var imgVal = $(this).data('name');

			image.click(function() {
				clearBorders();
				if(answer != imgVal) {
					image.addClass('border-off');
					answer = imgVal;
				}
			});
		});
		
		$('a.back-toggle').click(function(){
			if($('#question').is(':visible')) {
				document.location.href = "16.php";
			} else if ($('#answer').is(':visible')) {
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('#answer').fadeOut(function (){
					$('#question').fadeIn();
					$('#answer1').removeClass('red');
					$('#answer1').removeClass('green');
					$('#answer-icon').removeClass('img-align');
					$('#textanswer').removeClass('brown');
					$('#textanswer').removeClass('orange');
					$('#textanswer').removeClass('blue');
					$('#textanswer').removeClass('purple');
				});	
			}
		});
		
		$('a.check-toggle').click(function(e){
			checkNull();
			if(nullAnswer == true) {
				e.preventDefault();
				window.location.hash = '';
				alert("<?php echo _("Please select your answer."); ?>");
				nullAnswer = false;
			} else {
				$('#question').fadeOut(function(){ 
					$('#answer').fadeIn();
					$('a.check-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
					window.location.hash = '#answer';

					/* For Checking */
					if (answer == "C") {
						textstr = '<?php echo _("Correct. Reptiles have not adapted to survive extreme temperatures because they are cold-blooded, which affects where they live."); ?>';
						$('#textanswer').text('<?php echo _("Cold-blooded"); ?>');
						$('#textanswer').addClass('blue');
						$('#imganswer').attr("src","images/17/c.jpg");
						$('#answer-icon').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
					} else {
						if (answer == "A") {
							textstr = "<?php echo _("No, all reptiles are vertebrates, but the fact they are cold-blooded affects where they live. They survive better in warmer climates."); ?>";
							$('#textanswer').text("<?php echo _("Have backbones"); ?>");
							$('#textanswer').addClass('brown');
							$('#imganswer').attr("src","images/17/a.jpg");
						} else if (answer == "B") {
							textstr = "<?php echo _("No, when they lay eggs, they would not be able to survive in certain climates because their temperature depends on that of the environment."); ?>";
							$('#textanswer').text("<?php echo _("Lay eggs"); ?>");
							$('#textanswer').addClass('teal');
							$('#imganswer').attr("src","images/17/b.jpg");
						} else if (answer == "D") {
							textstr = "<?php echo _("No, the scaly skin helps regulate their body moisture and temperature, but the fact that they are cold-blooded does not let them survive in certain climates."); ?>";
							$('#textanswer').text("<?php echo _("Scaly skin"); ?>");
							$('#textanswer').addClass('purple');
							$('#imganswer').attr("src","images/17/d.jpg");
						}
						$('#answer-icon').attr("src", "images/others/wrong.png");
						$('#answer-icon').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					/* End Checking */
				});// end question fade
				
				if(answered == 0) {
					saveAnswer('built-to-survive-qq2-a',answer);
					answered = 1;
				} // end save to db
			} // end else
		}); // end check answer
	}); // end doc ready
	
	function clearBorders() {
		$('.choices img').each(function() {
			$(this).removeClass('border-off');
		});
	}
	
	function checkNull(){
		if(!$('#a').hasClass('border-off') && !$('#b').hasClass('border-off') && 
		   !$('#c').hasClass('border-off') && !$('#d').hasClass('border-off')) {
			nullAnswer = true; 
		}
	}
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
