<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = energy-and-chemical-changes';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	
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
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { font-size: 33px; color: #F9BCAF; }
		h2 { color: #9CB6E9; }
		#answer p {text-align: left;}
		.wrap { border-color: #868ABA; }
		.bg { background-image: url("assets/3/bg1.jpg");}
		
		#question input[type="checkbox"] { display: none; }

		#question input[type="checkbox"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="checkbox"]:checked + label img {
			border: 4px solid #FAFFAB;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}
		
		#question input[type="checkbox"]:checked + label span {
			color: #FAFFAB;
		}

		#question span {
			color: #fff;
			cursor: pointer;
			transition: all .3s ease;
			backface-visibility: hidden;
		}

		#answer { display: none; }
		#answer p { text-align: left; }

		html[dir=rtl] #answer p { text-align: right; }

		#buttons .next { display: none; }
		#answer div { }

		@media only screen and (max-width: 1250px) {#question input[type="checkbox"] + label img {  width: 82%;}}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Checking what you know about... energy and chemical changes"); ?></h1>
						<h2><?php echo _('What do you think is the original source for all that energy in the food you eat?'); ?></h2>
						
					
						<div class="grid_4">
							<input type="checkbox" id="a">
							<label for="a"><img src="assets/3/a.jpg"><span class="caption"><?php echo _("Sun"); ?></span></label>
							
						</div>

						<div class="grid_4">
							<input type="checkbox" id="b">
							<label for="b"><img src="assets/3/b.jpg"><span class="caption"><?php echo _("Water"); ?></span></label>
							
						</div>

						<div class="grid_4">
							<input type="checkbox" id="c">
							<label for="c"><img src="assets/3/c.jpg"><span class="caption"><?php echo _("Cows"); ?></span></label>
							
						</div>

						<div class="grid_4 prefix_2">
							<input type="checkbox" id="d">
							<label for="d"><img src="assets/3/d.jpg"><span class="caption"><?php echo _("Plants"); ?></span></label>
							
						</div>
						
						<div class="grid_4">
							<input type="checkbox" id="e">
							<label for="e"><img src="assets/3/e.jpg"><span class="caption"><?php echo _("Power plants"); ?></span></label>
							
						</div>

											
							
					</div>

					<div id="answer" class="grid_12">
						<div class="grid_12">
							<p><?php echo _("All of the energy that is stored in the chemical compounds that make up the food we eat ultimately comes from the Sun. Plants have the ability to take the sun's energy and store as chemicals that are food for the plant – and for us. Cows and people eat the plants to get our energy to live – and sometimes we eat the cows or drink their milk. We all need water to help the biological processes of living take place, but water doesn't actually provide us with energy. And power plants provide the energy to package and refrigerate the food.  But the ultimate source of the energy that's in the food we eat originally comes from the Sun."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Getting energy from the sun..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#58537B');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn();
						$('.back').fadeIn();
				   	});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
					$('.wrap').css('border-color', '#776000');

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
			checkAnswer = $('input:checkbox:checked').length;

			if (checkAnswer < 1) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#58537B');

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
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
					$('.wrap').css('border-color', '#776000');

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
