<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = chemical-and-physical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'chemical-and-physical-changes-qq1-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
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
	<link rel="stylesheet" href="css/hexaflip.css">
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
		.bg { background-image: url(assets/16/bg.jpg); background-size: 100% 100% !important;}

		#hexaflip { margin: 0 auto auto auto; }
		#box { text-align: center; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }

		#buttons .next { display: none; }
		
		#question ul li { margin: 8px 0; }
		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?></h1>
						<h2 class="grid_12"><?php echo _('Scientists think of the term "matter" as:'); ?></h2>

						<ul class="grid_12">						
							<li>A. <?php echo _("All of the substances and materials (the \"stuff\") that make up the world around you."); ?></li>
							<li>B. <?php echo _("All of the solid stuff in the universe."); ?></li>
							<li>C. <?php echo _("All of the chemicals that get used in their laboratories."); ?></li>
							<li>D. <?php echo _("Everything that you can see around you."); ?></li>
						</ul>
						
						<div class="clear"></div>
						<div id="box">
							<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

							<div id="hexaflip"></div>
						</div>
						
					</div>

					<div id="answer">
						<h1 class="grid_12"><?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?></h1>

						<p><?php echo _("You answered..."); ?></p>
						<p class="answer"></p>

						<div class="feedback"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="17.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Your first quiz question is..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/hexaflip.js"></script>

	<script>

		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();
							
			if (hexaValue == './assets/A.png') {
				$('.answer').html('<img src="assets/A.png"><span><?php echo _("All of the substances and materials (the \"stuff\") that make up the world around you."); ?></span>');

				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Correct – All of the “stuff” that makes up the world and even the universe is matter. Some of it you can see – like rocks or dirt - and some of it you cant – like air. But it's all matter."); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/B.png') {
				$('.answer').html("<img src='assets/B.png'><span><?php echo _("All of the solid stuff in the universe."); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _("Not quite – Matter isn't just the solid stuff. Matter can be liquid or gas as well."); ?></p>");

				answer = 'B';
			}

			if (hexaValue == './assets/C.png') {
				$('.answer').html("<img src='assets/C.png'><span><?php echo _("All of the chemicals that get used in their laboratories."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – chemicals in the lab are matter but there is a lot more matter in the universe than just chemicals in the lab."); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/D.png') {
				$('.answer').html("<img src='assets/D.png'><span><?php echo _("Everything that you can see around you."); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _("Not quite – matter is not just the stuff you can see. Some matter like air you can't see. And some matter isn't right around you – it can be in outer space on another planet."); ?></p>");

				answer = 'D';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('chemical-and-physical-changes-qq3-a', answer); // Correct answer: A
				answered = 1;
			}
		}

		$('.checkanswer').click(function() {

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
		});

		$('.back').click(function() {
			if ($('#question').is(':visible')) {
				document.location.href = "15.php";
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

		var hexa, images = [
			'./assets/A.png',
			'./assets/B.png',
			'./assets/C.png',
			'./assets/D.png'
		];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>