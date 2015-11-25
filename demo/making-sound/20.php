<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	//require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'air-around-us-qq5-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Making Sound"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>

		h1 { color: #005a8f; }

		h2 { color: #128575;}
		
		.bg { background-image: url(assets/qq-and-qc-bg.jpg); }


		#question input[type="checkbox"] { display: none; }

		#question input[type="checkbox"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="checkbox"]:checked + label img {
			border: 4px solid #ff9931;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question span:not(:first-child) {
			line-height: 24px;
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}

		#answer .answer { text-align: center; }
		#answer .answer p { width: 23.0%; display: inline-block; margin: auto 1%; }
		#answer .answer span { display: block; } 

		#question input[type="checkbox"]:checked + label span { color: #ff9931; }

		#buttons .next { display: none; }
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?></h1>
						<h2><?php echo _("Click <span class='blink'>ALL</span> the instruments that make sound by causing the air molecules around them to vibrate."); ?></h2>
		
						<div class="grid_4 prefix_1 suffix_2">
							<input type="checkbox" id="a" name="q" value="A">
							<label for="a"><img src="assets/22/22a.jpg"><span><?php echo _("Double Bass"); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="checkbox" id="b" name="q" value="B">
							<label for="b"><img src="assets/22/22b.jpg"><span><?php echo _("Piano"); ?></span></label>
						</div>

						<div class="grid_4 prefix_1 suffix_2">
							<input type="checkbox" id="c" name="q" value="C">
							<label for="c"><img src="assets/22/22c.jpg"><span><?php echo _("Trumpet"); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="checkbox" id="d" name="q" value="D">
							<label for="d"><img src="assets/22/22d.jpg"><span><?php echo _("French Horn"); ?></span></label>
						</div>

						<div class="clear"></div>
						
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>	
		
						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="image grid_6 prefix_3 suffix_3"></div>

						<div class="answer clearfix grid_12"></div>
						<div class="feedback grid_12"></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="21.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Cleaning instruments..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	
	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			answer='';
			$('input:checkbox:checked').each(function(){
					$('.answer').append("<p>" + $(this).parent().find('label').html() + "</p>");
				answer += $(this).val();
			});

			if (answer.length == 4 ){
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('You\'ve got it! All these instruments make musical sounds by causing the air molecules around them to vibrate.'); ?></p>");
			} 
			else{
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! The other instruments also make sound by causing the air around them to vibrate."); ?></p>");
			}
			
			console.log(answer);

			if (answered == 0) {
				saveAnswer('making-sound-qq5-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:checkbox:checked').length;

			if (checkAnswer == 0) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#question').fadeOut(function() { 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "19.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#answer').fadeOut(function() {

					clear();

					$('#question').fadeIn();

					window.location.hash = '';
				});
			}
		});


		function clear() {
			$('#answer').find('.answer').html('');
			$('#answer').find('.feedback').html('');

			answer = '';
		}
	</script>
	
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
