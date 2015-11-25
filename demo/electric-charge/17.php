<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(14, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'electric-charge-qq1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Electric Charge"); ?></title>

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
		<?php if ($language == 'ar_EG') : ?>
			span#p {
			    position: relative !important;
			    left: -129px !important; 
			}

			span#n {
			    position: relative !important;
			    left: 231px !important;
			}
		<?php endif; ?>
		<?php if ($language == 'zh_CN') : ?>
			span#p {
			    position: relative !important;
			    left: 50px !important;
			}
			span#n {
			    position: relative !important;
			    left: 161px !important;
			}
		<?php endif; ?>
		h1 { color: #8200d4; }
		h2 { color: #0090ff; }
		
		.wrap { border-color: #94E081; }
		.bg { background-image: url(assets/16/bg.jpg); }

		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
			width: 80%;
		}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #35B5C0;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question span {
			line-height: 24px;
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}

		#question input[type="radio"]:checked + label span { color: #8200D4; }

		#buttons .next { display: none; }
		.fix{float: left; text-align:center;}
		.w55{width: 55%;}
		.ta-center{text-align:center;}
		.positive{ cursor: default !important; display: inline-block !important;}
		.negative{cursor: default !important; display: inline-block !important; margin-left: 64px;}
		.charged-cont{position: absolute; bottom: 15px;	left: 50%;	margin-left: -215px;}
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #2"); ?></h1>

						<h2><?php echo _("Another ping pong ball is tied to a string and then loses some electrons through charging by contact, leaving it with more protons than electrons. It is then dangled in between two metal spheres: one with a positive charge and the other with a negative charge. Choose the arrow that represents the direction that the forces on the ping pong ball will cause it to move."); ?></h2>

						<div class="ta-center grid_12">
							<img class="w55" src="assets/16/qq-image.jpg">
							<div class="charged-cont">
								<span id="p" class="positive"><?php echo _("Positively Charged"); ?></span>
								<span id="n" class="negative"><?php echo _("Negatively Charged"); ?></span>
							</div>
						</div>
						<div class="clear"></div>
						<div class="grid_3 fix">
							<input type="radio" id="a" name="q" value="A">
							<label for="a"><img src="assets/17/a.jpg"></label>
						</div>

						<div class="grid_3 fix">
							<input type="radio" id="b" name="q" value="B">
							<label for="b"><img src="assets/17/b.jpg"></label>
						</div>

						<div class="grid_3 fix">
							<input type="radio" id="c" name="q" value="C">
							<label for="c"><img src="assets/17/c.jpg"><span></label>
						</div>

						<div class="grid_3 fix">
							<input type="radio" id="d" name="q" value="D">
							<label for="d"><img src="assets/17/d.jpg"><span></label>
						</div>

						<div class="clear"></div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #2"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<div class="image grid_4 prefix_4 suffix_4"></div>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Bouncing a ping pong ball..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A'){
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  The ping pong ball would have a positive charge due to the extra protons, so it would move to the right due to the repulsion from the positively charged sphere and the attraction to the negatively charged sphere."); ?></p>");
			} 
			else if (answer == 'B') {
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct!  The extra protons on the ping pong ball give it a positive charge.  It would be repelled by the positively charged sphere and attracted to the negatively charged sphere."); ?></p>");
			}
			else if (answer == 'C') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  The ping pong ball would have a positive charge due to the extra protons, so it would move to the right due to the repulsion from the positively charged sphere and the attraction to the negatively charged sphere."); ?></p>");
			}
			else if (answer == 'D') {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite.  The ping pong ball would have a positive charge due to the extra protons, so it would move to the right due to the repulsion from the positively charged sphere and the attraction to the negatively charged sphere."); ?></p>");
			}
			
			console.log(answer);

			if (answered == 0) {
				saveAnswer('module-qq#-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('input:radio:checked').length;

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
				document.location.href = "16.php";
			} else if ($('#answer').is(':visible')) {

				$('.back').fadeOut();

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#answer').fadeOut(function() {
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
