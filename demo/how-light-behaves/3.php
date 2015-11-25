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

	<title><?php echo _("How Light Behaves"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #31C1B7; font-size: 34px; }
		h2 { color: #EB6966; }
		#answer p {text-align: left; color: #FFFFFF;}
		.wrap { border-color: #9EF5FF; }
		.bg { background-image: url(assets/3/bg1.jpg);}
		
		#sortable, #not-sortable ul { width: 100%; padding: 10px 0; }
		#sortable li, #not-sortable li { background-color: #8AD55E; text-align: center; color: #000; margin-bottom: 4px; border-radius: 5px; }
		#not-sortable li { border: dashed transparent; }
		#sortable li:last-child { margin-bottom: 0; }
		#sortable li { text-align: left; padding: 0 10px; border: dashed #3C89F3; cursor: move; }
		
		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1 class="grid_12"><?php echo _("Checking what you know about... how light behaves"); ?></h1>
						<h2 class="grid_12"><?php echo _("The drawing shows how your room might look after turning on a light at night. Arrange the sequence to show where the light comes from and where it ends up in order for you to be able to see the pillows on the bed."); ?></h2>
						
						<div id="not-sortable" class="grid_1" >
							<ul>
								<li>1</li>
								<li>2</li>
								<li>3</li>
							</ul>
						</div>
						<div id="sortable-container" class="grid_4">
						    <ul id="sortable">
						        <li id="1"><?php echo _("Ceiling light"); ?></li>
						        <li id="2"><?php echo _("Eyes"); ?></li>
						        <li id="3"><?php echo _("Pillows on the bed"); ?></li>
						    </ul>
						</div>
						<div class="grid_7"><img src="assets/3/bedroom.jpg" /></div>
					</div>

					<div id="answer" class="grid_12">
						<div class="grid_12">
							<!-- <p><?php echo _("If all of the arrows you have drawn start at the light, you are on the right track. We see things by the light bouncing from or coming from them. Our eyes don’t send out any light! Continue to check out more things about how light behaves."); ?></p> -->
							<p><?php echo _("If the path you've chosen starts at the light, you are on the right track. We see things by the light bouncing from or coming from them. Our eyes don't send out any light! Continue this review to learn more about how light behaves."); ?></p>
						</div>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Turning on the lights..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/jquery.ui.touch-punch.min.js"></script>

	<script>
	
	$("#sortable").sortable({ scroll: false, containment: "#sortable-container" }); 
	
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#EEEFF1');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn();
						$('.back').fadeIn();
				   	});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
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
				$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
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
