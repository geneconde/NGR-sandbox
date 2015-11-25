<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	/*if ($user->getType() == 2) {
		$uf->updateStudentLastscreen(#, $_SESSION['smid']);
		$sa = $uf->getStudentAnswer($_SESSION['smid'], 'module-qq#-a');
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;*/
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Inherited Traits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
		<link rel="stylesheet" href="css/hexaflip2.css" />
	<?php } else { ?>
		<link rel="stylesheet" href="css/hexaflip.css" />
	<?php } ?>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		.wrap > .bg { overflow: hidden !important; }
		h1 { color: #f36d90; }
		h2 { color: #926948; }
		
		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/18/bg.jpg); }

		#hexaflip { margin: 20px auto auto auto; }
		#box { text-align: center; margin-top: 20px; }

		#answer .answer img { margin: 10px auto; width: 25%; }
		#answer .answer span { display: block; text-align: center; }

		#buttons .next { display: none; }
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
		}
		@media screen and (max-width: 1250px){ .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?></h1>
						<h2><?php echo _("A brown mouse mated with a white mouse and produced all brown offspring. Which statement most likely summarizes this mating?"); ?></h2>

						<ul>						
							<li>A. <?php echo _("bb x bb"); ?></li>
							<li>B. <?php echo _("BB x bb"); ?></li>
							<li>C. <?php echo _("Bb x Bb"); ?></li>
							<li>D. <?php echo _("BB x BB"); ?></li>
						</ul>

						<div id="box">
							<p><?php echo _("Click, hold and slide your mouse up and down to rotate the box and select your answer."); ?></p>

							<div id="hexaflip"></div>
						</div>
					</div>

					<div id="answer" class="grid_12">
						<h1><?php echo _("Quiz Question #3"); ?> - <?php echo _("How did I do?"); ?></h1>

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
		<a href="19.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Flipping the box..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<?php if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<script src="js/hexaflip2.js"></script>
	<?php } else { ?>
	<script src="js/hexaflip.js"></script>
	<?php } ?>

	<script>
		var answered = 1, /* Change 1 to <?php echo $answered; ?> when ported in the modules folder */
			answer = '';

		function save() {
			var hexaValue = hexa.getValue();

			if (hexaValue == './assets/a.png') {
				$('.answer').html("<img src='assets/a.png'><span><?php echo _('bb x bb'); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('No. This mating produces only white mice.'); ?></p>");

				answer = 'A';
			}

			if (hexaValue == './assets/b.png') {
				$('.answer').html("<img src='assets/b.png'><span><?php echo _('BB x bb'); ?></span>");
				$('.feedback').html("<p class='green'><img src='assets/correct.png'><?php echo _('Right! This mating produces only brown mice.'); ?></p>");

				answer = 'B';
			}

			if (hexaValue == './assets/c.png') {
				$('.answer').html("<img src='assets/c.png'><span><?php echo _('Bb x Bb'); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Nope. This mating should produce both brown and white offspring.'); ?></p>");

				answer = 'C';
			}

			if (hexaValue == './assets/d.png') {
				$('.answer').html("<img src='assets/d.png'><span><?php echo _('BB x BB'); ?></span>");
				$('.feedback').html("<p class='red'><img src='assets/wrong.png'><?php echo _('Sorry. Both of these parents are brown. One of the given parents is white.'); ?></p>");

				answer = 'D';
			}

			console.log(answer);

			if (answered == 0) {
				saveAnswer('inherited-traits-qq2-a', answer); // Correct answer: B
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

		var hexa, images = [
			'./assets/a.png',
			'./assets/b.png',
			'./assets/c.png',
			'./assets/d.png'
		];

		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: images }, { size: 180 });
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
