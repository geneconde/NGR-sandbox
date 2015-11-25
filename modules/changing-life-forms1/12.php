<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'changing-life-forms';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(12, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('changing-life-forms');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'],$problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } else if($language == "es_ES") { ?>dir="rtl_es"<?php } ?>>
<head>
<title><?php echo _("Changing Life Forms"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/save-answer.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { /* color: #000; */ font-size: 28px; }
h2 { text-align: center; color: #00709e; }
.wrap { border-color: #f2d33a; }
.bg { background-image: url(images/12/bg.jpg); }

#assignment { display: none; text-align: center; }
#assignment h2 { margin-top: 0; padding-top: 20px; }
textarea { width: 60%; margin-top: 20px; display: inline-block; border-radius: 5px; border: 2px solid #05799d; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
img.next-toggle { display: none; }
#problem { text-align: center; }
#problem img { display: inline-block; }

html[dir="rtl"] .bg h2 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="problem">
				<h1><?php echo _("Using what you know... about changing life forms... to solve a problem"); ?></h1>
				<h2><?php echo _("The Scenario"); ?></h2>
				<p><?php echo _("You are a science fiction novelist developing ideas for a new book. Your book is about the 21st century and all the technological changes. Cars can fly and people have machines that do almost everything for them. So what would this mean to people in such an advanced world of technology?"); ?></p>
				<img src="images/12/12a.jpg" />
			</div>

			<div id="assignment">
				<h2><?php echo _("The Task"); ?></h2>
				<p><?php echo _("Based on what you now know about natural selection and how the environment changes affect living things over time, decide which human traits to change in your novel. Explain what skills people would need to survive in your new, high-tech world, and how people would have to be different to stay alive and prosper. Which traits would people no longer have to have in your new world?"); ?></p>
				<textarea cols="80" rows="8" placeholder="<?php echo _('Click here to start typing your answer...'); ?>"></textarea>
			</div>
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons">
		<a href="#" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _('Read More'); ?>"></a>
		<a href="13.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Writing a fiction novel..."); ?></strong></section></section>

	<script>
	$('img.back-toggle').click(function(){
		if ($('#problem').is(':visible')) {
			document.location.href= "11.php";
		} else if ($('#assignment').is(':visible')) {
			$('img.next-toggle').fadeOut(function() { $('img.readmore-toggle').fadeIn(); });
			$('#assignment').fadeOut(function(){
				$('#problem').fadeIn();
			});
		}
	});
	
	$('img.readmore-toggle').click(function(){
		$('img.readmore-toggle').fadeOut(function() { $('img.next-toggle').fadeIn(); });
		$('#problem').fadeOut( function(){
			$('#assignment').fadeIn();
			window.location.hash = '#assignment';
		});
	});
	
	$('img.next-toggle').click( function() {
		if ($('textarea').val() == '') {
			alert('<?php echo _("Please type your answer."); ?>');
			return false;
		} else {
			save();
			document.location.href = "13.php";
		}
	});

	var answered = <?php echo $answered; ?>

	function save() {
		var answer = $('textarea').val();
		
		if (answered == 0) {
			saveMeta('changing-life-forms', answer);
			answered = 1;
		}
	}
	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
