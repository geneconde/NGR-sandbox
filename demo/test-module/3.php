<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Specialized Cells"); ?></title>

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
		h1 { font-size: 35px; margin-left: 0; color: #660066;}
		h2 {}
		.wrap { border-color: #9EF5FF; }
		.bg { background-color: #fff; background-image:  url(assets/3/bg.jpg);}
		.question { font-size: 24px; color: #000; }
		
		.grid_4 { margin-top: 10px; }
		#not-sortable li, #sortable li { height: 65px; width: 380px; }

		#sortable li { text-align: left; cursor: move;border:3px solid #ec6666; border-style: dashed; color:#eacaca ; border-color: #ec6666; }

		#not-sortable li { text-align: left; margin-left: 10px; border-style: dashed; border-color: #eacaca }
		/*#not-sortable-container { }*/

		#sortable li, #not-sortable li {
			background-color: #eacaca;
			text-align: left;
			color: #000;
			margin-top: 5px;
			margin-bottom: 4px;
			border-radius: 10px;
			padding-left: 15px;

		}


		#sortable li:last-child { margin-bottom: 0;}

		#answer .answer { text-align: left; }
		#answer .answer li { background-color: #ec6666;
			list-style: none;
			text-align: left;
			color: #000;
			margin-bottom: 4px;
			border-radius: 5px;
		}
		.space { padding-top: 17px; margin-top: 0;}
		.tleft { text-align: left; }
		.question, h1, h2 { margin-left: 1%; }
		.question, h2 {color:#469c96;}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
					<div  id="question">
						<div>
							<h1 class="grid_12 text-black"><?php echo _("Checking what you already know about... specialized cells"); ?></h1>
							<h2 class="grid_12 question"><?php echo _("Arrange the responses in the right column to match the things happening in the left column."); ?></h2>
							
						</div>
						<div class="grid_4">
								<ul id="not-sortable">
									<li><?php echo _("<p class= 'space'>A new embryo begins to form.</p>"); ?></li>
									<li><?php echo _("<p class= 'space'>Bacteria begin to reproduce in a wound.</p>"); ?></li>
									<li><?php echo _("<p class= 'space'>A person touches a hot pan.</p>"); ?></li>
								</ul>
						</div>

						<div class="grid_4 prefix_2" id="sortable-container">
								<ul id="sortable">
									<li id="1"><?php echo _("Sensory neurons send an electrical message to the brain."); ?></li>
									<li id="2"><?php echo _("<p class= 'space'>Sperm fertilizes an egg cell.</p>"); ?></li>
									<li id="3"><?php echo _("White blood cells begin to divide and reproduce."); ?></li>
								</ul>
						</div>
					</div>

					<div id="answer">
						<p class="grid_12 answer"><?php echo _("All living things are made up of cells that have special structures and functions. The human body is made of many different types of cells and combination of cells, each with its own specialized function. Special human cells in are involved in everything from reproduction to fighting infections to feeling pain. Knowing about cell structure and function will help you better understand how your body works."); ?>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at cells..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
	$("#sortable").sortable({ scroll: false, containment: "#sortable-container" }); 
	
		var hash = window.location.hash.slice(1),
		screenCount = 2;
		$('.next').fadeOut();
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/3bg.jpg)');
					$('.wrap').css('border-color', '#EEEFF1');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn();
						$('.back').fadeIn();
				   	});
				} else {
					$('.bg').css('background-color', '#fff');
					$('.wrap').css('border-color', '#F34345');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.checkanswer').click(function() {
			$('#question').fadeOut(function() {
				$('.bg').css('background-image', 'url(assets/3/3bg.jpg)');
				$('.wrap').css('border-color', '#EEEFF1');

				$('#answer').fadeIn();

				$('.back').fadeOut();

				$('.checkanswer').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				window.location.hash = '#answer';
			});
		});

		$('.back').click(function() {
			if ($('#answer').is(':visible')) {
				$('#answer').fadeOut( function() {
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
					$('.wrap').css('border-color', '#F34345');

					$('#question').fadeIn();

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.checkanswer').fadeIn(); 
						$('.back').fadeIn();
					});

					window.location.hash = '';
				});
			} else { $('.back').attr('href', '2.php'); }
		});
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>