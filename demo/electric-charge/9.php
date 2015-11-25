<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(5, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'electric-charge-qc3-a');
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
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
		h1 { color: #8200d4; }
		h2 { color: #0090ff; }
		#md_pFir {color: #000;}
		.wrap { border-color: #94E081; }
		.bg { background-image: url(assets/9/bg.jpg); }

		#question1 .ac-custom input[type="radio"]:checked + label { color: #35B5C0; } /* Change color */
		#question1 .ac-custom label { color: #000; padding-left: 49px; } /* Change color */
		#question1 .ac-custom label::before { border: 2px solid #35B5C0; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		#question1 .ac-custom svg path { stroke: #35B5C0; } /* Change stroke-color */
		#question1 .ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		#question1 html[dir=rtl] .ac-custom label { padding-right: 49px; }
		#question1 html[dir=rtl] .ac-custom label::after { border: 2px solid #35B5C0; height: 34px; width: 34px; margin-top: -18px; } /* Change border-color */
		#question1 html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; /* for Safari */ }

		#question2 .ac-custom input[type="radio"]:checked + label { color: #35B5C0; } /* Change color */
		#question2 .ac-custom label { color: #000; padding-left: 49px; } /* Change color */
		#question2 .ac-custom label::before { background-color: #35B5C0; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		#question2 .ac-custom svg path { stroke: #35B5C0; } /* Change stroke-color */
		#question2 .ac-custom svg { height: 42px; width: 37px; left: 1px; margin-top: -22px; }

		#question2 html[dir=rtl] .ac-custom label { padding-right: 49px; }
		#question2 html[dir=rtl] .ac-custom label::after { background-color: #B625D1; height: 20px; width: 20px; margin-top: -11px; } /* Change background-color */
		#question2 html[dir=rtl] .ac-custom svg { right: 3px; left: 98% /* for Safari */ }
		<?php if ($language == 'ar_EG') : ?>
			.ac-circle label::after {
			    background-color: #35B5C0 !important;
			}
			.ac-custom label::after {
			    border: 2px solid #5AC4C4 !important;
			}
			span.q1 {
			    top: 0px !important;
			    position: relative !important;
			    right: 36px !important;
			}
			input[type="radio"], .ac-custom label::after {
			    top: 119% !important;
			    right: 4px !important;
			    margin-top: -34px !important;
			    position: absolute !important;
			    cursor: pointer !important;
			    padding: 10px !important; 
			}
			.ac-circle input[type="checkbox"], .ac-circle input[type="radio"], .ac-circle label::after {
			    width: 3px !important;
			    height: 3px !important;
			}
			span.q2 {
			    right: 43px !important;
			    top: 3px !important;
			    position: relative !important;
			}
			.ac-circle svg {
			    width: 60px !important;
			    height: 38px !important;
			    margin-top: -17px !important;
			    right: -12px !important;
			}
			@media (max-width: 1250px){
				body, h2 {
				    font-size: 22px !important;
				}
			}
		<?php endif; ?>
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="questions">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?></h1>
						<h2 id = "md_pFir" class="grid_12"><?php echo _("You rub a balloon on your sweater, and the balloon becomes negatively charged. Another object is rubbed on your sweater, and then held near the balloon."); ?></h2>

						<div id="question1" class="grid_12">
							<h2><?php echo _("Question A. If the balloon appears to be attracted to the new object, that means that the new object is likely:"); ?></h2>
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a1" name="q1" type="radio"><label for="a1"><span class="q1"><?php echo _("Positively Charged"); ?></span></label></li>
									<li><input id="b1" name="q1" type="radio"><label for="b1"><span class="q1"><?php echo _("Negatively Charged"); ?></span></label></li>
									<li><input id="c1" name="q1" type="radio"><label for="c1"><span class="q1"><?php echo _("Neutral"); ?></span></label></li>
								</ol>
							</form>
						</div>

						<div id="question2" class="grid_12">
							<h2><?php echo _("Question B. If the balloon appears to be pushed away by the new object, that means that the new object is likely:"); ?></h2>
							<form class="ac-custom ac-radio ac-circle" autocomplete="off">
								<ol>
									<li><input id="a2" name="q2" type="radio"><label for="a2"><span class="q2"><?php echo _("Positively Charged"); ?></span></label></li>
									<li><input id="b2" name="q2" type="radio"><label for="b2"><span class="q2"><?php echo _("Negatively Charged"); ?></span></label></li>
									<li><input id="c2" name="q2" type="radio"><label for="c2"><span class="q2"><?php echo _("Neutral"); ?></span></label></li>
								</ol>
							</form>
						</div>
					</div>

					<div id="answers">
						<h1 class="grid_12"><?php echo _("Quick Check #3"); ?> - <?php echo _("How did I do?"); ?></h1>

						<div id="answer1" class="grid_12">
							<h2><?php echo _("Question A. If the balloon appears to be attracted to the new object, that means that the new object is likely:"); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer"></p>

							<div class="feedback"></div>
						</div>

						<div id="answer2" class="grid_12">
							<h2><?php echo _("Question B. If the balloon appears to be pushed away by the new object, that means that the new object is likely:"); ?></h2>

							<p><?php echo _("You answered..."); ?></p>
							<p class="answer"></p>

							<div class="feedback"></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="10.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Inflating a balloon..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			checkAnswer2 = 0,
			answer1 = '',
			answer2 = '';

			$('#question1 input[type=radio]').on('click', function() {
				var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();

				if (id == 'a1') {
					$('#answer1').find('.answer').html(text);
					$('#answer1').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes! The object is attracted to the negatively charged balloon, so has a positive charge."); ?></p>");

					answer1 = 'A';
				}

				if (id == 'b1') {
					$('#answer1').find('.answer').html(text);
					$('#answer1').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _('Nope. If the new object was negatively charged, it would repel the balloon. Remember "likes repel".'); ?></p>');

					answer1 = 'B';
				}

				if (id == 'c1') {
					$('#answer1').find('.answer').html(text);
					$('#answer1').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Nope. If the object is attracted to the negatively charged balloon, it is likely positively charged."); ?></p>");

					answer1 = 'C';
				}
			});

			$('#question2 input[type=radio]').on('click', function() {
				var id = $(this).attr('id'),
				text = $(this).parent().find('span').text();

				if (id == 'a2') {
					$('#answer2').find('.answer').html(text);
					$('#answer2').find('.feedback').html('<p class="red"><img src="assets/wrong.png"><?php echo _('Nope. If the object is pushed away, or repelled, then it is probably charged "like" the negatively charged balloon.'); ?></p>');

					answer2 = 'A';
				}

				if (id == 'b2') {
					$('#answer2').find('.answer').html(text);
					$('#answer2').find('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("You've got it! Since the new object pushes away from the negatively charged balloon, it must be negatively charged, just like the balloon."); ?></p>"); //'

					answer2 = 'B';
				}

				if (id == 'c2') {
					$('#answer2').find('.answer').html(text);
					$('#answer2').find('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite. If the object is repelled by the negatively charged balloon, then it must have the same negative charge as the balloon."); ?></p>");

					answer2 = 'C';
				}
			});

		function save() {

			console.log(answer1);
			console.log(answer2);

			if (answered == 0) {
				saveAnswer('electric-charge-qc3-a', answer1); // Correct answer: 
				saveAnswer('electric-charge-qc3-b', answer2); // Correct answer:  

				answered = 1;
			}
		}

		$('.checkanswer').click(function() {
			checkAnswer = $('#question1 input:radio:checked').length;
			checkAnswer2 = $('#question2 input:radio:checked').length;

			if (checkAnswer == 0 || checkAnswer2 == 0) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('.back').fadeOut(); 

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#questions').fadeOut(function() { 

					save();

					$('#answers').fadeIn();

					window.location.hash = '#answer';
				}); 
			}
		});

		$('.back').click(function() {
			if ($('#questions').is(':visible')) {
				document.location.href = "8.php#screen2";
			} else if ($('#answers').is(':visible')) {
				$('.back').fadeOut(); 

				$('.next').fadeOut(function() { 
					$('.checkanswer').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#answers').fadeOut(function() {
					$('#questions').fadeIn();

					window.location.hash = '';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
