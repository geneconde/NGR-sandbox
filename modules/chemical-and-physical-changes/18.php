<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'chemical-and-physical-changes';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(18, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'chemical-and-physical-changes-qq3-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

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
		h1 { color: #916D5D }
		h2 { color: #93648D; }
		
		.wrap { border-color: #FFE0CE; }
		.bg { background-image: url(assets/18/bg.jpg); overflow: hidden;background-size: 100% 100% !important;}

		#question input[type="radio"] { display: none; }

		#question input[type="radio"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;
			width: 239px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="radio"]:checked + label img {
			border: 4px solid #EB6966;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}


		<?php if ($language == 'es_ES') : ?>
			#question label span {
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
			font-size: 22px;
			line-height: 24px;
			width: 240px;
		}
		<?php else : ?>
			#question label span {
			color: #000;
			transition: all .3s ease;
			cursor: pointer;
			display: block;
			text-align: center;
			backface-visibility: hidden;
			font-size: 24px;
			line-height: 24px;
			width: 240px;
		}
		<?php endif; ?>

		

		#question input[type="radio"]:checked + label span { color: #EB6966; }

		#buttons .next { display: none; }

		#question div{ width: 20%;}
		
		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			#question div{width: 25%;}
			#question div img{width: 70%;}
			#question input[type="radio"] + label img { width: 210px; }
		}
		<?php if ($language == 'es_ES') : ?>
			@media screen and (max-width: 1250px){
				#question div span{font-size: 15px; width: 90%;}
			}
			<?php else : ?>
			@media screen and (max-width: 1250px){
				#question div span{font-size: 20px; width: 75%;}
			}
		<?php endif; ?>
		@media screen and (max-width: 960px){
			#question div img{width: 85%;} 
			#question input[type="radio"] + label img { width: 160px; }
		}
		<?php if ($language == 'es_ES') : ?>
			@media screen and (max-width: 960px){
				#question div span{font-size: 15px; width: 100%;}
			}
			<?php else : ?>
			@media screen and (max-width: 960px){
				#question div span{font-size: 18px; width: 100%;}
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
						<h1><?php echo _("Quiz Question #3"); ?></h1>
						<h2><?php echo _("An example of a change in a property of matter that is <span class='blink'>not</span> reversible is:"); ?></h2>
						

						<div class="grid_6 prefix_2 suffix_2">
							<input type="radio" id="a1" name="q1" value="A">
							<label for="a1"><img src="assets/18/c.jpg"><span><?php echo _("Freezing water to make ice cubes."); ?></span></label>
						</div>

						<div class="grid_6">
							<input type="radio" id="b1" name="q1" value="B">
							<label for="b1"><img src="assets/18/b.jpg"><span><?php echo _("Melting butter to pour over popcorn."); ?></span></label>
						</div>
						
						<div class="grid_4 prefix_2 suffix_2">
							<input type="radio" id="c1" name="q1" value="C">
							<label for="c1"><img src="assets/18/d.jpg"><span><?php echo _("Burning wood in a campfire to warm you up."); ?></span></label>
						</div>

						<div class="grid_4">
							<input type="radio" id="d1" name="q1" value="D">
							<label for="d1"><img src="assets/18/a.jpg"><span><?php echo _("Melting ice to change it into liquid water."); ?></span></label>
						</div>
						
						<div class="clear"></div>
						
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>

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

	<section id="preloader"><section class="selected"><strong><?php echo _("Changing state..."); ?></strong></section></section>

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
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – Freezing water to make ice cubes can be reversed by warming them up to let the water melt to form liquid water again."); ?></p>");

			if (answer == 'B')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite - Melted butter to pour over popcorn can be changed back to solid butter by putting it in the refrigerator."); ?></p>");

			if (answer == 'C')
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct – When you burn wood in a campfire, the solid wood turns into light, heat, and carbon dioxide gas that can’t directly turn back into wood."); ?></p>");

			if (answer == 'D')
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – Melting ice to change it into liquid water can be reversed by freezing the water again to make ice."); ?></p>");

			console.log(answer);

			if (answered == 0) {
				saveAnswer('chemical-and-physical-changes-qq#-a', answer); // Correct answer: A
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

