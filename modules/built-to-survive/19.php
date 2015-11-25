<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'built-to-survive';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'built-to-survive-qq4-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
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
		.bg { background-image: url(images/19/bg.jpg); background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position: relative; }
		#buttons .next { display: none; }
		div.choices { padding-top: 20px; }
		.choices { width: 100%; margin: 0 auto; text-align: center; height: 200px; }
		.choices .pic { float: left; height: 150px; margin: 0px 10px; width: 46%; }
		.choices .pic img { cursor: pointer; height: 100%; }
		.choices p { padding: 0; }
		#answer { display: none; text-align: center; }

		#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }
		.answer-item { background-color: rgba(180,214,216,0.8); -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; padding: 10px; }
		img.border {
			border: 4px solid #f0f0f0;
			-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
			-webkit-backface-visibility: hidden; /* Fix for transition flickering */
		}
		img.border-off {
			border: 4px solid #ECC377;
			-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
		}
		
		.orange { color: #D17C04; }
		.darkgreen { color: #4D6800; }
		.brown { color: #47362A; }
		.blue { color: #314AAF; }
		.purple { color: #A804D1; }
		.lightred { color: #AC3636; }
		
		#answer-icon { display: inline-block; height: 30px; margin-right: 10px; }

		html[dir="rtl"] #answer p { text-align: center; }
		html[dir="rtl"] .choices .pic { float: right; }
		html[dir="rtl"] .pic p { text-align: center !important; }
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="question">
				<h1><?php echo _("Quiz Question #4"); ?></h1>
				<h2><?php echo _("Which is <span class='blink red'>NOT</span> a feature of the anatomy of most birds that enables them to fly?"); ?></h2>
				<div class="choices">
					<div class="pic">
						<img src="images/19/a.jpg" alt="<?php echo _("Solid bone structure"); ?>" data-name="A" id="a" class="border">
						<p><span class="blue"><?php echo _("Solid bone structure"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/19/b.jpg" alt="<?php echo _("Intricate feathers"); ?>" data-name="B" id="b" class="border">
						<p><span class="darkgreen"><?php echo _("Intricate feathers"); ?></span>
					</div>
				</div>
				<div class="choices">
					<div class="pic">
						<img src="images/19/c.jpg" alt="<?php echo _("Hollow bone structure"); ?>" data-name="C" id="c" class="border">
						<p><span class="lightred"><?php echo _("Hollow bone structure"); ?></span></p>
					</div>
					<div class="pic">
						<img src="images/19/d.jpg" alt="<?php echo _("Wings"); ?>" data-name="D" id="d" class="border">
						<p><span class="purple"><?php echo _("Wings"); ?></span></p>
					</div>
				</div>
			</div>
			<div id="answer">
				<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>
				<p><?php echo _("You answered..."); ?></p>
				<div class="pic"><img id="imganswer"></div>
				<p><span id="textanswer"></span></p>
				<p><img src="" id="answer-icon"><span id="answer1"></span></p>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="20.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("On to the birds!"); ?></strong></section></section>
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/jquery.wiggle.min.js"></script>
	<script src="scripts/jquery.blink.min.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/save-answer.js"></script>
	<script>
	var answer = '';
	var answered = <?php echo $answered; ?>;
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
				document.location.href = "18.php";
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

					/* For Checking */
					if (answer == "A") {
						textstr = "<?php echo _("Correct. The exact opposite of solid (hollow) bone structure is what helps them fly."); ?>";
						$('#textanswer').text('<?php echo _("Solid bone structure"); ?>');
						$('#textanswer').addClass('blue');
						$('#imganswer').attr("src","images/19/a.jpg");
						$('#answer-icon').attr("src", "images/others/correct.png");
						$('#answer1').addClass('green');
					} else {
						if (answer == "B") {
							textstr = "<?php echo _("No, the intricate feathers help birds fly. Some birds have special feathers that minimize the sound of their wings flapping for better survival skills."); ?>";
							$('#textanswer').text("<?php echo _("Intricate feathers"); ?>");
							$('#textanswer').addClass('darkgreen');
							$('#imganswer').attr("src","images/19/b.jpg");
						} else if (answer == "C") {
							textstr = "<?php echo _("No, a hollow bone structure is actually one of the most important features that allows birds to fly."); ?>";
							$('#textanswer').text("<?php echo _("Hollow bone structure"); ?>");
							$('#textanswer').addClass('lightred');
							$('#imganswer').attr("src","images/19/c.jpg");
						} else if (answer == "D") {
							textstr = "<?php echo _("No, without the bones or feathers of wings, birds could not fly at all."); ?>";
							$('#textanswer').text("<?php echo _("Wings"); ?>");
							$('#textanswer').addClass('purple');
							$('#imganswer').attr("src","images/19/d.jpg");
						}
						$('#answer-icon').attr("src", "images/others/wrong.png");
						$('#answer-icon').addClass('img-align');
						$('#answer1').addClass('red');
					}
					$('#answer1').text(textstr);
					/* End Checking */
					
					if(answered == 0) {
						saveAnswer('built-to-survive-qq4-a',answer);
						answered = 1;
					} // end save to db
				});// end question fade
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