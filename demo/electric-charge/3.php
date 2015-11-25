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

	<title><?php echo _("Electric Charge"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		@media only screen and (max-width: 1250px){
			img, video {
		    width: 83% !important;
		    }
			span.caption {
			    width: 87% !important;
			    position: relative;
			    top: -12px !important;
			}
		}
		h1 { color: #8200d4; }
		h2 { color: #0090ff; }
		
		@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) { h1 { font-size: 27px; } }


		.wrap { border-color: #94E081; }
		.bg { background: url(assets/3/bg.jpg); }

		#question input[type="checkbox"] { display: none; }

		#question input[type="checkbox"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="checkbox"]:checked + label img {
			border: 4px solid #35B5C0;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}



		#question span {
			color: #000;
			cursor: pointer;
			transition: all .3s ease;
			backface-visibility: hidden;
		}

		#question input[type="checkbox"]:checked ~ span { color: #35B5C0; }

		#answer { display: none; }
		#answer p { text-align: left; color: white; }

		html[dir=rtl] #answer p { text-align: right; }

		#buttons .next { display: none; }
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }.wrap > .bg { overflow: hidden !important; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Checking what you already know about...  electric charge"); ?></h1>

						<h2 class="grid_12"><?php echo _("Which of the following objects contain electric charge? Check <span class='blink'>ALL</span> that apply."); ?></h2>

						<div class="grid_3 prefix_2">
							<input type="checkbox" id="a">
							<label for="a"><img src="assets/3/3a.png" alt="<?php echo _('Beach Ball'); ?>"></label>
							<span class="caption"><?php echo _("A beach ball"); ?></span>
						</div>

						<div class="grid_3 prefix_2">
							<input type="checkbox" id="b">
							<label for="b"><img src="assets/3/3b.png" alt="<?php echo _('Tea Kettle'); ?>"></label>
							<span class="caption"><?php echo _("A tea kettle"); ?></span>
						</div>
						<div class="clear"></div>
						<div class="grid_3 prefix_2">
							<input type="checkbox" id="c">
							<label for="c"><img src="assets/3/3c.png" alt="<?php echo _('Baby'); ?>"></label>
							<span class="caption"><?php echo _("A baby"); ?></span>
						</div>

						<div class="grid_3 prefix_2">
							<input type="checkbox" id="d">
							<label for="d"><img src="assets/3/3d.png" alt="<?php echo _('Dog'); ?>"></label>
							<span class="caption"><?php echo _("A dog"); ?></span>
						</div>

						<div class="clear"></div>
					</div>

					<div id="answer">
						<p><?php echo _("All objects made of matter contain a mix of charged particles. If you selected all of the items, you're headed in the right direction."); ?></p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the particles..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1),
			screenCount = 2;
		
		if (hash != "") {
			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen = screenCount) {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#35B5C0'); // Change border-color

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
			var checkAnswer = $('input:checkbox:checked').length;
			
			if(checkAnswer == '')
			{
				alert("<?php echo _("Please select your answer."); ?>");
			} else {
				$('#question').fadeOut(function() {
					$('.bg').css('background-image', 'url(assets/3/bg2.jpg)');
					$('.wrap').css('border-color', '#35B5C0'); // Change border-color

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
