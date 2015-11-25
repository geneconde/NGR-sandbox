<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-and-its-forms';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo _("Energy and Its Forms"); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="initial-scale=1">

	<link rel="stylesheet" href="styles/locale.css" />
	<link rel="stylesheet" href="styles/jpreloader.css" />
	<link rel="stylesheet" href="styles/fonts.css" />
	<link rel="stylesheet" href="styles/global.css" />
	<link rel="stylesheet" href="styles/font-awesome.min.css" />

	<style>
		h1 { color: #6c0486; padding-bottom: 20px; font-size: 28px; }
		h2 { padding-top: 20px; margin-top: 0; }
		p { font-size: 22px; }
		#buttons .next { display: none; }
		.wrap { border-left: 1px dashed #8ba6fd; border-right: 1px dashed #c89de4; }
		.bg { background-image: url(images/10/bg.jpg); }
		#screen1 { text-align: center; }
		#screen1 img { display: inline-block; margin-top: 25px; }
		#screen2 { display: none; text-align: center; }
		#screen2 p { margin-bottom: 20px; }
		textarea { width: 70%; display: inline-block; border: 1px solid #000; -webkit-border-radius: 10px; -moz-border-radius: 10px; border-radius: 10px; font-size: 24px; outline: none; padding: 10px; resize: none; font-family: PlaytimeRegular; }
		
		<?php if ($language == 'es_ES') : ?>
			h1 { font-size: 23px !important; }
		<?php endif; ?>
		html[dir="rtl"] h2 { text-align:center; }

		@media only screen and (max-width: 1250px) {
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			h1, #screen2 h2 { padding-top: 40px; }
		}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">
			<div id="screen1">
				<h1><?php echo _("Using what you know... about energy and its forms... to solve a problem"); ?></h1>
				<h2><?php echo _("The Situation"); ?></h2>
				<p><?php echo _("You are an engineering consultant hired by a company considering a wind farm project. They want to install 40 windmills to produce electricity for a nearby cardboard factory."); ?></p>
				<img src="images/10/10.jpg">
			</div>

			<div id="screen2">
				<h2><?php echo _("Your Task"); ?></h2>
				<p><?php echo _("The company executives need to identify the risks associated with this project to see if it is worth their investment. Using what you now know about transforming energy into different forms, what possible factors and issues would you outline to help them make a decision? Key in your analysis in the text box provided."); ?></p>
				<textarea id="answer" name="answer" rows="10" cols="80" placeholder='<?php echo _("Click here to start typing your answer..."); ?>'></textarea>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Spinning windmills..."); ?></strong></section></section>

	<?php include_once("setlocale.php"); ?>

	<script src="scripts/jquery.js"></script>
	<script src="scripts/jpreloader.js"></script>
	<script src="scripts/wiggle.js"></script>
	<script src="scripts/global.js"></script>
	<script src="scripts/answer.js"></script>
	
	<script>
		var hash = window.location.hash.slice(1);
		
		var back = $('a.back'),
		next = $('a.next'),
		more = $('a.readmore'),

		screen1 = $('#screen1'),
		screen2 = $('#screen2'),

		answered = 1;

		function save() {
			var ans = $('#answer').val();

			if (answered == 0) {
				saveMeta('energy-and-its-forms', ans);
				answered = 1;
			}
		}

		next.on('click', function() {
			if ($("#answer").val() == '') {
				alert('<?php echo _("Please type your answer."); ?>');
				return false;
			} else {
				save();
				//document.location.href = "11.php";	
			}
		});

		more.on('click', function() {
			screen1.fadeOut(function() {
				window.location.hash = '#task';
				screen2.fadeIn();
			});
			more.fadeOut(function() { next.fadeIn(); });
		});
 
		back.on('click', function() {
			if (screen1.is(':visible')) {
				document.location.href = "9.php";
			} else {
				screen2.fadeOut(function() { screen1.fadeIn(); 
					$('h1').show(); });
				next.fadeOut(function() { more.fadeIn(); });
				removeHash();
			}
		});

		if (hash == 'task') {
			$('#screen1').hide();
			$('h1').hide();
			$('#screen2').show(function () { 
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			});
		}
	</script>
</body>
</html>
