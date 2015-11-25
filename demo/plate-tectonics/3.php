<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = plate-tectonics';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Plate Tectonics"); ?></title>

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
		h1 { color: #9A663E; }
		h2 { color: #60880B; }
		#answer p {text-align: left;color:white;}
		.wrap { border-color: #AEDCF4; }
		.bg { background-image: url(assets/3/bg1.jpg); overflow: hidden;}

		.ac-custom input[type="checkbox"]:checked + label { color: #2F4267; }
		.ac-custom label { color: #000; padding-left: 49px; }
		.ac-custom label::before { border: 2px solid #2F4267; height: 34px; width: 34px; margin-top: -18px;}
		.ac-custom svg path { stroke: #2F4267; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #777; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }
		.fa, .lang-menu a { color: #1AA257; }

		#buttons .next { display: none; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question" class="grid_12">
						<h1><?php echo _("Checking what you know about... plate tectonics"); ?></h1>
						<h2><?php echo _("In the United States, major earthquakes and volcanoes occur:"); ?></h2>
						<div id="question" class="grid_7">
							<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
								<ol>
									<li><input id="a" type="checkbox"><label for="a"><span><?php echo _("Equally spaced all over the country."); ?></span></label></li>
									<li><input id="b" type="checkbox"><label for="b"><span><?php echo _("Mostly in the southern earthquake zone near Texas and Florida."); ?></span></label></li>
									<li><input id="c" type="checkbox"><label for="c"><span><?php echo _("In the mid-west near Chicago and Minneapolis."); ?></span></label></li>
									<li><input id="d" type="checkbox"><label for="d"><span><?php echo _("In a zone that runs along the West Coast."); ?></span></label></li>
								<ol>
							</form>
						</div>
											
						<div class="grid_5">
							<img src="assets/3/us_map.jpg" />
						</div>
							
					</div>

					<div id="answer" class="grid_12">
						
						<p><?php echo _("Earthquakes and volcanoes aren't spread out equally across the United States. Sometimes, but not very often, states in the middle of the country, like Kansas or Nebraska or Illinois might get minor earthquakes that hardly do any damage. But the majority of earthquakes and volcanoes, especially the big ones, occur near the west coast in California, Washington, and Oregon."); ?></p>

					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Duck, cover and hold"); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#AAC6EE');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn();
						$('.back').fadeIn();
				   	});
				} else {
					$('.bg').css('background-image', 'url(assets/3/bg1.jpg)');
					$('.wrap').css('border-color', '#AEDCF4');

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
			var checkAnswer = $('input:checkbox:checked').length;
			
			if(checkAnswer == '')
			{
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#AAC6EE');

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
					$('.wrap').css('border-color', '#AEDCF4');

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
