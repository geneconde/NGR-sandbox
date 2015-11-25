<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(3, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Healthy Eating"); ?></title>

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
		h1 { color: #df00a3; }
		h2 { color: #000;}
		.wrap { border-color: #FCF8ED; 
			border-left: 1px dashed #F593FF;
			border-right: 1px dashed #F593FF;
		}
		.bg { background: url(assets/3/bg.jpg); overflow: hidden; }

		#question p { text-align: center; }
		#question p.no-height { font-size: 0; }
		#question p.label { background: #fffa78; border-radius: 5px; margin-bottom: 20px; }
		#question .grid_2 { margin-top: -5px; }
		.grab { cursor: move; cursor: -moz-grab; cursor: -webkit-grab; }
		.grabbing { cursor: move; cursor: -moz-grabbing; cursor: -webkit-grabbing; }
		
		.drop {
			width: 100%;
			height: 75px;	
			background: #ffc178;
			border-radius: 5px;
		}

		.drag { position: relative; z-index: 999; }
		.drag img { margin: 0; height: 75px; }

		#answer p { text-align: left; }

		html[dir=rtl] #answer p { text-align: right; }

		#buttons .next { display: none; }

		@media only screen and (max-width: 1250px) {
			.bg { overflow: hidden;}
			#question .grid_2 { margin-top: -10px; }
		}

		

		<?php if ($language == 'es_ES') : ?>
			
			@media only screen and (max-width: 820px) {
				.drag img, .drop { height: 72px; }
			}

		<?php endif; ?>
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="bounds clearfix">
						<h1 class="grid_12"><?php echo _("Checking what you already know about... healthy eating"); ?></h1>
						<h2 class="grid_12"><?php echo _("Drag the food you see on the left into the correct food group on the right it belongs in."); ?></h2>

						<div class="grid_2"><p class="label"><?php echo _("Items"); ?></p><div class="drag drag1"><img src="assets/3/bread.jpg"></div></div>
						<div class="grid_2"><p class="label"><?php echo _("Grain"); ?></p><div class="drop drop1a"></div></div> 
						<div class="grid_2"><p class="label"><?php echo _("Vegetable"); ?></p><div class="drop drop1b"></div></div>
						<div class="grid_2"><p class="label"><?php echo _("Fruit"); ?></p><div class="drop drop1c"></div></div>
						<div class="grid_2"><p class="label"><?php echo _("Milk"); ?></p><div class="drop drop1d"></div></div>
						<div class="grid_2"><p class="label"><?php echo _("Meat"); ?></p><div class="drop drop1e"></div></div>

						<div class="clear"></div>

						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drag drag2"><img src="assets/3/orange-juice.jpg"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop2a"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop2b"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop2c"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop2d"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop2e"></div></div>

						<div class="clear"></div>

						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drag drag3"><img src="assets/3/salad.jpg"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop3a"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop3b"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop3c"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop3d"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop3e"></div></div>

						<div class="clear"></div>

						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drag drag4"><img src="assets/3/fried-chicken.jpg"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop4a"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop4b"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop4c"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop4d"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop4e"></div></div>

						<div class="clear"></div>

						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drag drag5"><img src="assets/3/ice-cream.jpg"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop5a"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop5b"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop5c"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop5d"></div></div>
						<div class="grid_2"><p class="no-height">&nbsp;</p><div class="drop drop5e"></div></div>

						<div class="clear"></div>
					</div>

					<div id="answer">
						<p><?php echo _("You dragged food into each of the five food groups. Continue to read on about each of these food groups and other elements of a healthy lifestyle such as getting enough vitamins and exercise."); ?></p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Sorting foods..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>


	<script>

		$('.drag').draggable({ revert: true, revertDuration: 0, containment: ".bounds", scroll: false });

		$('.drag').each(function() {
			$(this).mousedown(function() { $(this).removeClass('grab').addClass('grabbing'); });
			$(this).mouseup(function() { $(this).removeClass('grabbing').addClass('grab'); });
		});

		$('.drop1a').droppable({ accept: '.drag1', drop: function (event, ui) { $('.drag1').detach().appendTo($('.drop1a')); } });
		$('.drop1b').droppable({ accept: '.drag1', drop: function (event, ui) { $('.drag1').detach().appendTo($('.drop1b')); } });
		$('.drop1c').droppable({ accept: '.drag1', drop: function (event, ui) { $('.drag1').detach().appendTo($('.drop1c')); } });
		$('.drop1d').droppable({ accept: '.drag1', drop: function (event, ui) { $('.drag1').detach().appendTo($('.drop1d')); } });
		$('.drop1e').droppable({ accept: '.drag1', drop: function (event, ui) { $('.drag1').detach().appendTo($('.drop1e')); } });

		$('.drop2a').droppable({ accept: '.drag2', drop: function (event, ui) { $('.drag2').detach().appendTo($('.drop2a')); } });
		$('.drop2b').droppable({ accept: '.drag2', drop: function (event, ui) { $('.drag2').detach().appendTo($('.drop2b')); } });
		$('.drop2c').droppable({ accept: '.drag2', drop: function (event, ui) { $('.drag2').detach().appendTo($('.drop2c')); } });
		$('.drop2d').droppable({ accept: '.drag2', drop: function (event, ui) { $('.drag2').detach().appendTo($('.drop2d')); } });
		$('.drop2e').droppable({ accept: '.drag2', drop: function (event, ui) { $('.drag2').detach().appendTo($('.drop2e')); } });

		$('.drop3a').droppable({ accept: '.drag3', drop: function (event, ui) { $('.drag3').detach().appendTo($('.drop3a')); } });
		$('.drop3b').droppable({ accept: '.drag3', drop: function (event, ui) { $('.drag3').detach().appendTo($('.drop3b')); } });
		$('.drop3c').droppable({ accept: '.drag3', drop: function (event, ui) { $('.drag3').detach().appendTo($('.drop3c')); } });
		$('.drop3d').droppable({ accept: '.drag3', drop: function (event, ui) { $('.drag3').detach().appendTo($('.drop3d')); } });
		$('.drop3e').droppable({ accept: '.drag3', drop: function (event, ui) { $('.drag3').detach().appendTo($('.drop3e')); } });

		$('.drop4a').droppable({ accept: '.drag4', drop: function (event, ui) { $('.drag4').detach().appendTo($('.drop4a')); } });
		$('.drop4b').droppable({ accept: '.drag4', drop: function (event, ui) { $('.drag4').detach().appendTo($('.drop4b')); } });
		$('.drop4c').droppable({ accept: '.drag4', drop: function (event, ui) { $('.drag4').detach().appendTo($('.drop4c')); } });
		$('.drop4d').droppable({ accept: '.drag4', drop: function (event, ui) { $('.drag4').detach().appendTo($('.drop4d')); } });
		$('.drop4e').droppable({ accept: '.drag4', drop: function (event, ui) { $('.drag4').detach().appendTo($('.drop4e')); } });

		$('.drop5a').droppable({ accept: '.drag5', drop: function (event, ui) { $('.drag5').detach().appendTo($('.drop5a')); } });
		$('.drop5b').droppable({ accept: '.drag5', drop: function (event, ui) { $('.drag5').detach().appendTo($('.drop5b')); } });
		$('.drop5c').droppable({ accept: '.drag5', drop: function (event, ui) { $('.drag5').detach().appendTo($('.drop5c')); } });
		$('.drop5d').droppable({ accept: '.drag5', drop: function (event, ui) { $('.drag5').detach().appendTo($('.drop5d')); } });
		$('.drop5e').droppable({ accept: '.drag5', drop: function (event, ui) { $('.drag5').detach().appendTo($('.drop5e')); } });

		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#777'); // Change border-color

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg.jpg)');
					$('.wrap').css('border-color', '#000'); // Change border-color

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
			checkAnswer = $('.drop:has(img)').length;
			
			if (checkAnswer < 5) {
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#777'); // Change border-color

					$('#answer').fadeIn();

					$('.back').fadeOut(); 

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});

					window.location.hash = '#answer';
				});
			}
		});

		$('.back').click(function() {
			if ($('#answer').is(':visible')) {
				$('#answer').fadeOut( function() {
					$('.bg').css('background-image', 'url(assets/3/bg.jpg)');
					$('.wrap').css('border-color', '#000'); // Change border-color 

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
