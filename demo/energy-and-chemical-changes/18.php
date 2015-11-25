<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = energy-and-chemical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'energy-and-chemical-changes-qq2-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Energy and Chemical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #F9BCAF; }
		h2 { color: #9CB6E9; }
		
		.wrap { border-color: #868ABA; }
		.bg { background-image: url(assets/15/bg.jpg); }

		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label img {
			width: 88%;
			margin: 0 6%;
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #FAFFAB;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question span {
			color: #fff;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
		}

		#question input[type="radio"]:checked + label span { color: #FAFFAB; }

		#buttons .next { display: none; }
		#answer > p { color: #fff; }
		#answer > .grid_12 {  width: 96%;}
		#question > div:nth-last-child(-n+2) { margin-top: 50px; } #answer .grid_12 {width: 94%;margin-left: 2%;}
		@media only screen and (max-width: 1250px) {#question input[type="radio"] + label img {  width: 76%;}}
		<?php if ($language == 'ar_EG') : ?>
			.container_12 .grid_12 {  margin-right: 3%;   width: 93%;} 
		<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #5"); ?></h1>
						<h2 class="grid_12"><?php echo _("Which of the following things you do everyday does not require energy?"); ?></h2>

						<div class="grid_4 prefix_1 suffix_2">
							<input type="radio" id="a" name="q" value="A">
							<label for="a"><img src="assets/18/a.jpg"><span><?php echo _("Sleeping"); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="radio" id="b" name="q" value="B">
							<label for="b"><img src="assets/18/b.jpg"><span><?php echo _("Thinking"); ?></span></label>
						</div>

						<div class="grid_4 prefix_1 suffix_2">
							<input type="radio" id="c" name="q" value="C">
							<label for="c"><img src="assets/18/c.jpg"><span><?php echo _("Sitting perfectly still"); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="radio" id="d" name="q" value="D">
							<label for="d"><img src="assets/18/d.jpg"><span><?php echo _("None of the above"); ?></span></label>
						</div>

						</div>

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
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking for energy..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			checkAnswer = 0,
			answer = '';

		function save() {
			$('.image').html($('input:radio:checked').parent().find('img').clone());
			$('.answer').html($('input:radio:checked').parent().find('span').text());

			answer = $('input:radio:checked').val();

			if (answer == 'A')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - Even when you are sleeping, your heart is beating, you are breathing, and you are growing - all of these things need energy."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - Even when you are just thinking, your heart is beating, you are breathing, and you are growing - all of these things need energy. Even the process of thinking requires your brain to use energy. That's why it's a good idea to eat good food for energy to think when you're in school."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - Even when you are sitting perfectly still, your heart is beating, you are breathing, and you are growing - all of these things need energy."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Yes - All of the above choices require energy so &quot;None of the above&quot; are examples that DO NOT require energy"); ?></p>");

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
				document.location.href = "17.php";
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
