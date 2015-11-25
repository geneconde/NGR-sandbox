<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
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

	<title><?php echo _("The Air Around Us"); ?></title>

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
		h1 { color: #fe8a17; }
		h2 { color: #00a49d; }
		.wrap > .bg { overflow: hidden !important; }
		.wrap { border-color: #78DFFE; }
		.bg { background-image: url(assets/18/bg.jpg); }

		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #31b573;
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

		#question input[type="radio"]:checked + label span { color: #31b573; }

		#buttons .next { display: none; }
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}

		@media all and (min-device-width: 768px) {
			.container_12 .suffix_2 {
			    padding-right: 9.667% !important;
			}
			.grid_1, .grid_2, .grid_3, .grid_4, .grid_5, .grid_6, .grid_7, .grid_8, .grid_9, .grid_10, .grid_11, .grid_12 {
			    margin-left: 2% !important;
			    margin-right: 2% !important;
			}
		}
		#question span {
		    line-height: 19px !important;
		    font-size: 20px !important;
		}
		.container_12 .grid_4 {
		    width: 25% !important;
		}
		.container_12 .suffix_2 {
		    padding-right: 6.667% !important;
		}
		.container_12 .prefix_1 {
		    padding-left: 15.333%;
		}
		h2 {
		    margin: -3px 0 !important;
		}
		@media only screen and (min-width : 1250px) {
			.container_12 .grid_4 {
			    width: 33% !important;
			}
			.container_12 .prefix_1 {
			    padding-left: 6.333%;
			}
			.container_12 .suffix_2 {
			    padding-right: 10.667%;
			}
		}
		<?php if ($language == 'es_ES' || $language == 'zh_CN') : ?>
			.container_12 .suffix_2 {
			    padding-right: 8.667% !important;
			}
			@media only screen and (min-width : 1250px) {
			}
		<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #5"); ?></h1>
						<h2><?php echo _("Air pollution can result from which of the following activities:"); ?></h2>
		
						<div class="grid_4 prefix_1 suffix_2">
							<input type="radio" id="a" name="q" value="A">
							<label for="a"><img src="assets/20/a.jpg"><span><?php echo _("Natural disasters such as volcanic eruptions or natural forest fires."); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="radio" id="b" name="q" value="B">
							<label for="b"><img src="assets/20/b.jpg"><span><?php echo _("Manufacturing such as electrical power plants."); ?></span></label>
						</div>

						<div class="grid_4 prefix_1 suffix_2">
							<input type="radio" id="c" name="q" value="C">
							<label for="c"><img src="assets/20/c.jpg"><span><?php echo _("Emissions from cars and buses."); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="radio" id="d" name="q" value="D">
							<label for="d"><img src="assets/20/d.jpg"><span><?php echo _("All of the above."); ?></span></label>
						</div>

						<div class="clear"></div>
						
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p class="grid_12"><?php echo _("You answered..."); ?></p>

						<div class="image grid_4 prefix_4 suffix_4"></div>

						<p class="answer grid_12"></p>

						<div class="feedback grid_12"></div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="21.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Researching air pollutants..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	
	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {

			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'D'){
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("That’s right! Air pollution can result from all three activities including natural disasters, manufacturing and emissions from cars and buses."); ?></p>");
			} else {
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Yes, but not exactly! Air pollution can result from all three activities including natural disasters, manufacturing and emissions from cars and buses."); ?></p>");
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
				document.location.href = "19.php";
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
