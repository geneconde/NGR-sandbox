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

	<title><?php echo _("Motion"); ?></title>

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
		h1 { color: #eb7100; }
		h2 { color: #88633E; }
		
		.wrap { border-color: #858248; }
		.bg { background-image: url(assets/qcqq.jpg); }
		
		<!-- temporary -->


		#question input[type="checkbox"] { display: none; }

		#question input[type="checkbox"] + label img {
			border: 4px solid transparent;
			border-radius: 10px;
			cursor: pointer;
			width: 90%;
			-webkit-transition: all .3s ease;
			transition: all .3s ease;
		}

		#question input[type="checkbox"]:checked + label img {
			border: 4px solid #ff9a00;
			border-radius: 10px;

			-webkit-transition: all .3s ease;
			transition: all .3s ease;

			backface-visibility: hidden;
		}

		#question input[type="checkbox"] { opacity:0; }

		#answer { background: url('assets/3/bg2.jpeg'); }

		#answer .answer { text-align: center; }
		#answer .answer p { width: 23.0%; display: inline-block; margin: auto 1%; }
		#answer .answer span { display: block; } 

		#answer p { text-align: left; background-color: rgba(255,255,255,0.5); -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }

		html[dir=rtl] #answer p { text-align: right; }

		#buttons .next { display: none; }

    @media only screen and (max-width: 1250px){
        h1 { padding-top: 33px; }
		.container_12 .grid_4 {
		    width: 27.333%;
		    padding-left: 20px;
		}
    }
    @media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="question">
						<h1 class="grid_12"><?php echo _("Checking what you already know about... motion"); ?></h1>
						<h2 class="grid_12"><?php echo _("Click on <span class='blink'>All</span> the objects that are in motion!"); ?></h2>
						<div class="grid_4">
							<input type="checkbox" id="a" value="A">
							<label for="a"><img src="assets/3/a.jpg"></label>
						</div>

						<div class="grid_4">
							<input type="checkbox" id="b" value="B">
							<label for="b"><img src="assets/3/b.jpg"></label>
						</div>

						<div class="grid_4">
							<input type="checkbox" id="c" value="C">
							<label for="c"><img src="assets/3/c.jpg"></label>
						</div>

						<div class="clear"></div>

						<div class="grid_4">
							<input type="checkbox" id="d" value="D">
							<label for="d"><img src="assets/3/d.jpg"></label>
						</div>

						<div class="grid_4">
							<input type="checkbox" id="e" value="E">
							<label for="e"><img src="assets/3/e.jpg"></label>
						</div>

						<div class="grid_4">
							<input type="checkbox" id="f" value="F">
							<label for="f"><img src="assets/3/f.jpg"></label>
						</div>

						<div class="clear"></div>
					</div>

					<div id="answer">
						<p>
							<?php echo _("If you clicked on all of the objects, you’re moving in the right direction.  All motion is relative, even if it’s so slow we don’t see it right away.  If you see the moon in the sky at night, and look for the moon again an hour later, it’ll be in a new location.  Same thing with the clock on the wall, the hour hand moves slowly, but in six hours, it’ll be pointing in the opposite direction!"); ?>
						</p>
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

	<section id="preloader"><section class="selected"><strong><?php echo _("Walking on the sidewalks..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>

	<script>
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
			var checkAnswer = $('input:checkbox:checked').length;
			if (checkAnswer < 1 ) {
			
				alert("<?php echo _("Please select your answers."); ?>");
			
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
