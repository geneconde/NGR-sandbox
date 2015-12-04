<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
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

	<title><?php echo _("Electric Circuits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
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
		h1{ color: #D27A00; margin-top: 10px;}

		.wrap { border-color: #FF00FF; }
		.bg { background-image: url(assets/3/bg.jpg); overflow: hidden;}
		
		#question input[type="checkbox"] { display: none; }

		#question input[type="checkbox"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="checkbox"]:checked + label img {
			border: 4px solid #A0E5D9;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}
		
		#question input[type="checkbox"]:checked + label span { color: #FF6A6B; }
		
		#answer { display: none; bottom: -430px;}
		#answer p {text-align: left; padding: 5px 10px; background: rgba(255, 255, 255, .5); border-radius: 5px; }
		#answer .answer span { display: block; } 
		
		html[dir=rtl] #answer p { text-align: right; }
		img{ width: 100%; height: 170px;}

		#buttons .next { display: none; }
		
		@media only screen and (min-device-width: 768px) and (max-width: 1250px) {
			h1 { font-size: 27px; } #answer { bottom: -360px; }
			.bg{ background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Checking what you already know about... electric circuits"); ?></h1>

						<p class="grid_12"><?php echo _("Many devices utilize electric circuits to perform their tasks efficiently. Click on <span class='blink'>ALL</span>  of the objects below that contain electric circuits."); ?></p>

						<div class="grid_3">
							<input type="checkbox" id="a" value="A">
							<label for="a"><img src="assets/3/3a1.jpg"></label>
						</div>

							<div class="grid_3">
							<input type="checkbox" id="b" value="B">
							<label for="b"><img src="assets/3/3a2.jpg"></label>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="c" value="C">
							<label for="c"><img src="assets/3/3a3.jpg"></label>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="d" value="D">
							<label for="d"><img src="assets/3/3a4.jpg"></label>
						</div>
						
						<div class="grid_3">
							<input type="checkbox" id="e" value="E">
							<label for="e"><img src="assets/3/3a5.jpg"></label>
						</div>
						
						<div class="grid_3">
							<input type="checkbox" id="f" value="F">
							<label for="f"><img src="assets/3/3a6.jpg"></label>
						</div>

						<div class="grid_3">
							<input type="checkbox" id="g" value="G">
							<label for="g"><img src="assets/3/3a7.jpg"></label>
						</div>
						
						<div class="grid_3">
							<input type="checkbox" id="h" value="H">
							<label for="h"><img src="assets/3/3a8.jpg"></label>
						</div>
						
						<div class="clear"></div>

					</div>

					<div id="answer" class="grid_12">

						<span>
						<p><?php echo _("Many modern devices use electric circuits to do jobs that used to be performed through other means in years past.  Digital watches are much easier to manufacture than analog watches, cordless drills make construction projects much easier, and tablets can store entire libraries of books inside a device that can easily be carried in a backpack.  Continue with this review to learn more about electric circuits!"); ?></p>
						</span>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Checking devices..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/svgcheckbx.js"></script>

	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});

		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#FF00FF');

					$('#question').fadeOut(100, function() { $('#answer').fadeIn(); });

					$('.back').fadeOut();

					$('.checkanswer').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});
				} else {
					$('.bg').css('background-image', 'url(assets/3/stock-photo-trail-runner-or-hiker-on-mountain-path-looking-at-sportwatch-checking-performance-or-heart-pulse-193456331.jpg)');
					$('.wrap').css('border-color', '#FF00FF');

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
			if (checkAnswer < 1 ) {
				alert("<?php echo _("Please select your answers."); ?>");
				
			} else {
				
			$('#question').fadeOut(function() {
				$('.bg').css('background-image', 'url(assets/3/stock-photo-trail-runner-or-hiker-on-mountain-path-looking-at-sportwatch-checking-performance-or-heart-pulse-193456331.jpg)');
				$('.wrap').css('border-color', '#FF00FF');

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
					$('.wrap').css('border-color', '#FF00FF');

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
