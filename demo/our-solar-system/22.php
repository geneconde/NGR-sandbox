<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'our-solar-system';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(19, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'our-solar-system-qq5-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Our Solar System"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #735c00; }
		h2 { color: #5949a8; }
		
		.wrap { border-color: #D16824; }
		.bg { background-image: url(assets/22/bg.jpg); overflow: hidden;}

		#question input[type="checkbox"] { display: none; }

		#question input[type="checkbox"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="checkbox"]:checked + label img {
			border: 4px solid #32058D;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question label span {
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}

		#question input[type="checkbox"]:checked + label span { color: #32058D; }

		#answer .answer { text-align: center; }
		#answer .answer p { width: 23.0%; display: inline-block; margin: auto 1%; }
		#answer .answer span { display: block; } 

		#question img { width: auto; display: block; }

		#buttons .next { display: none; }
		@media only screen and (max-width: 1250px){
				.grid_6 img {
				    margin-left: auto !important;
				    margin-right: auto !important;
				}
				.container_12 .grid_6 {
				    width: 48% !important;
				}
				.grid_6 img {
				    width: 35% !important;
				}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?></h1>
						<h2><?php echo _("Which of the following planets are classified as \"gaseous planets\"? Check <span class='blink'>all</span> that apply."); ?></h2>

						<div class="grid_6">
							<input type="checkbox" id="a" name="q" value="A">
							<label for="a"><img src="assets/22/q1.png"><span><?php echo _("Venus"); ?></span></label>
						</div>

						<div class="grid_6">
							<input type="checkbox" id="b" name="q" value="B">
							<label for="b"><img src="assets/22/q2.png"><span><?php echo _("Mars"); ?></span></label>
						</div>

						<div class="grid_6">
							<input type="checkbox" id="c" name="q" value="C">
							<label for="c"><img src="assets/22/q3.png"><span><?php echo _("Neptune"); ?></span></label>
						</div>

						<div class="grid_6">
							<input type="checkbox" id="d" name="q" value="D">
							<label for="d"><img src="assets/22/q4.png"><span><?php echo _("Saturn"); ?></span></label>
						</div>

						<div class="clear"></div>
					</div>

					<div id="answer" class="grid_12">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>
						<div class="answer clearfix grid_12"></div>
						<div class="feedback grid_12"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="23.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Gaseous planets..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('input[type=checkbox]').each(function() {
				if ($(this).is(':checked')) {
					$('.answer').append("<p>" + $(this).parent().find('label').html() + "</p>");

					answer += $(this).val();
				}
			});

			if (answer == 'CD') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! The planets, Neptune and Saturn, are large gaseous planets farther from the Sun."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite! The planets, Neptune and Saturn are large gaseous planets farther from the Sun. Venus and Mars are closer to the Sun and are made of mostly rock."); ?></p>");
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('our-solar-system-qq5-a', answer); // Correct answer: ABCD
				answered = 1;
			}
		}

		function clear() {
			$('#answer').find('.answer').html('');
			$('#answer').find('.feedback').html('');

			answer = '';
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

				$('#question').fadeOut(function(){ 

					save();

					$('#answer').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "21.php";
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
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
