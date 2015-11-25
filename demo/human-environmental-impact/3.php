<?php 
	/* Comment out line 4 and uncomment lines (5, 6, 7, and 10 to 14) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = human-impact';
	//require_once '../../verify.php';
	require_once "locale.php";
	
	
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Human Environmental Impact"); ?></title>

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
		h1 { color: #00A7D4; font-size: 34px; }
		h2 { color: #F84D82; }
		#answer p {text-align: left;}
		.wrap { border-color: #F24345; }
		.bg { background-image: url(assets/3/bg1.jpg); }
		
		.ac-custom li { padding: .2em 0; }
		.ac-custom input[type="radio"]:checked + label { color: #00A7D4; }
		.ac-custom label { color: #000; padding-left: 49px; font-size: 23px; }
		.ac-custom label::before { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px;}
		.ac-custom svg path { stroke: #00A7D4; }
		.ac-custom svg { height: 20px; width: 20px; left: 9px; margin-top: -10px; }

		html[dir=rtl] .ac-custom label { padding-right: 49px; }
		html[dir=rtl] .ac-custom label::after { border: 2px solid #00A7D4; height: 34px; width: 34px; margin-top: -18px; }
		html[dir=rtl] .ac-custom svg { right: 9px; left: 98%; }

		#buttons .next { display: none; }
		#answer div { margin-top: 20px; }
		#answer div p { background: rgba(255, 255, 255, .7); padding: 5px 10px; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; }
		
		#question div img { width: 77%; margin: 0 5%; }

		<?php if ($language == 'es_ES') : ?>
			h1 { color: #00A7D4; font-size: 27px; }
			#question div img { width: 78%;}

			@media screen and (max-width: 1250px){
				h2 {  line-height: 26px; }
				#question div img { width: 65%;}
			}

			@media screen and (max-width: 894px){
				h1 { font-size: 23.8px }
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

					<div id="question" class="grid_12">
						<h1 class="grid_12"><?php echo _("Checking what you know about... human environmental impact"); ?></h1>
						<h2 class="grid_12"><?php echo _("When people do things that change the environment, like destroying a field to build a new mall, what do you think happens to the animals that live in the field?"); ?></h2>
						<div class="grid_7 prefix_2 suffix_3">
							<img src="assets/3/3a.png" />
						</div>
						
						<div class="grid_12">
							<form class="ac-custom ac-radio ac-swirl" autocomplete="off">
								<ol>
									<li><input id="a" type="radio" name="group1"><label for="a"><span><?php echo _("If there's no other field in the area, they just move to the woods close by."); ?></span></label></li>
									<li><input id="b" type="radio" name="group1"><label for="b"><span><?php echo _("They change their eating and housing habits and live wherever they can."); ?></span></label></li>
									<li><input id="c" type="radio" name="group1"><label for="c"><span><?php echo _("They live at the mall."); ?></span></label></li>
									<li><input id="d" type="radio" name="group1"><label for="d"><span><?php echo _("If there isn't a similar habitat near the mall, the plants and animals may die."); ?></span></label></li>
								<ol>
							</form>
						</div>
						
					</div>

					<div id="answer" class="grid_12">
						<div class="grid_12">
							<p><?php echo _("When people change the environment by building a mall, a school, or a housing development, they affect all of the living things that used to live in the natural environment - plants and animals - in many ways. Some big strong animals, like a deer or coyote, might move to a new home if they can find one nearby. But other animals, like fish or frogs, might just die because they can't move. Sometimes you can see a few birds inside the mall but that's because they get trapped in there and can't find their way out."); ?></p>
							<!-- <p><?php echo _("But other animals, like fish or frogs, might just die because they can't move. Sometimes you can see a few birds inside the mall, but that's because they get trapped in there and can't find their way out."); ?></p> -->
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Migrating animals..."); ?></strong></section></section>

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
					$('.wrap').css('border-color', '#806754');

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
			var checkAnswer = $('input:radio:checked').length;
			
			if (checkAnswer < 1 ) {
				alert("<?php echo _("Please select your answers."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#806754');

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
