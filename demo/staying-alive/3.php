<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'staying-alive';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) $smc->updateStudentLastscreen(3, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Staying Alive"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/svgcomponent.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<script src="js/modernizr.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css" />
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css" />
	<?php endif; ?>

	<style>
		h1 { color: #006171; }
		h2 { margin-bottom: 0; }
		.wrap { border-color: #E6ABFF; }
		.bg { background-image: url(assets/3/bg.jpg); overflow: hidden; }

		table { margin-top: 20px; }
		td { background-color: #f4da70; width: 300px; border-radius: 10px; }
		td:last-child { background-color: #dcedcf; }
		td p { padding: 5px 10px; }
		.slider { width: 70%; margin: 0 auto; }

		.ac-custom { padding: 0; }
		.ac-custom label { color: #000; padding-left: 50px; font-size: 24px; }
		.ac-custom input[type="checkbox"] { vertical-align: top; margin-top: -10px; }
		.ac-custom input[type="checkbox"]:checked + label { color: #780046; }
		.ac-custom svg { height: 20px; width: 30px; left: 3px; margin-top: -10px; }
		.ac-custom label::before { border: 2px solid #780046; }
		.ac-custom svg path { stroke: #780046; }
		.ac-custom label::before { height: 35px; width: 35px; margin-top: -18px;}

		#question ol { width: 530px; margin: 0 0 0 10px !important; }
		#question li { padding: 10px 0; }

		table td p { text-align: center; }

		#answer { display: none; padding-top: 15px; }
		#answer p:first-child { background: rgba(255, 255, 255, .5); padding: 10px; border-radius: 5px; }

		#buttons .next { display: none; }

		html[dir="rtl"] .ac-custom input[type="checkbox"], html[dir="rtl"] .ac-custom label::before { right: 5px; }
		html[dir="rtl"] .ac-custom svg { right: 8px; }
		html[dir="rtl"] .ac-custom label { padding-right: 50px; }

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
			#answer { padding-top: 45px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
			#answer { padding-top: 45px; }
		}

		@media (min-device-width : 1251px) {
		  table {
		    border-spacing: 10px;
		    border-collapse: separate;
		  }
		  table p {
		    padding: 1% !important;
		    margin: 0;
		  }
		}
		@media screen and (max-width: 1250px) { #answer { margin-top: 15px; } }
		@media screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1><?php echo _("Checking what you know... about staying alive"); ?></h1>
						<h2><?php echo _("Click in the right column the most likely result of actions or changes in the left column."); ?></h2>
						<table cellspacing="20">
							<tr>
								<td>
									<p><?php echo _("Warming climate"); ?></p>	
									<ul class="rslides slider">
										<li> <img src="assets/3/s1a.jpg"> </li>
										<li> <img src="assets/3/s1b.jpg"> </li>
										<li> <img src="assets/3/s1c.jpg"> </li>
									</ul>						
								</td>
								<td>
									<section>
										<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
											<ol>
												<li><input id="a" name="q" type="checkbox"><label for="a"><span><?php echo _("Migration of many species toward colder regions"); ?></span></label></li>
												<li><input id="b" name="q" type="checkbox"><label for="b"><span><?php echo _("Changes in temperature and rainfall patterns"); ?></span></label></li>
												<li><input id="c" name="q" type="checkbox"><label for="c"><span><?php echo _("Lowering of worldwide sea levels"); ?></span></label></li>
											<ol>
										</form>
									</section>
								</td>
							</tr>
							
							<tr>
								<td>
									<p><?php echo _("Preservation of natural areas"); ?></p>
									<ul class="rslides slider">
										<li> <img src="assets/3/s2a.jpg"> </li>
										<li> <img src="assets/3/s2b.jpg"> </li>
										<li> <img src="assets/3/s2c.jpg"> </li>
									</ul>							
								</td>
								<td>
									<section>
										<form class="ac-custom ac-checkbox ac-checkmark" autocomplete="off">
											<ol>
												<li><input id="a2" name="q2" type="checkbox"><label for="a2"><span><?php echo _("Decreasing animal habitat"); ?></span></label></li>
												<li><input id="b2" name="q2" type="checkbox"><label for="b2"><span><?php echo _("Increasing animal habitat"); ?></span></label></li>
												<li><input id="c2" name="q2" type="checkbox"><label for="c2"><span><?php echo _("Increasing rates of extinction"); ?></span></label></li>
											<ol>
										</form>
									</section>
								</td>
							</tr>
						</table>
					</div>

					<div id="answer">
						<p><?php echo _("As climate changes, so do the homes of many types of plants and animals. Changes in the climate affect temperature and rainfall patterns around the world. For example, climate changes can cause worldwide sea levels to increase. Preserving natural areas maintains the habitat of many types of plants and animals since extinction is related to habitat loss."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Observing rainfall patterns..."); ?></strong></section></section>

	<script>
		$(".slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
		var hash = window.location.hash.slice(1);
		var	screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');

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

	<script src="js/svgcheckbx.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
