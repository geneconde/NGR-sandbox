<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'behaviors';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(10, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('behaviors');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'],$problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _('Behavior'); ?></title>
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
h1 { font-size:33px; color: #918B46; }
h2 { text-align: center; color: #C28B58; }
.wrap { border-color: #ffe87e; }
.bg { background-image: url(images/10/bg.jpg); }
.rslides { width:460px;left:165px;bottom:-60px; }

#assignment { display: none; text-align: center; }
#assignment h2 { margin-top: 0; padding-top: 20px; }
textarea { width: 50%; margin-top: 75px;margin-left:-50px; display: inline-block; border-radius: 5px; border: 0; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
img.next-toggle { display: none; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 24px; }
<?php } ?>
html[dir="rtl"] .rslides {right: 165px;}

html[dir="rtl"] h2 { text-align: center; }

<?php if($language == "zh_CN") { ?>
	textarea { margin-top: 120px }
	.rslides { bottom:-75px; }
<?php } ?>

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="problem">
				<h1><?php echo _("Using what you know... about behaviors... to solve a problem"); ?></h1>
				<h2><?php echo _("The Problem"); ?></h2>
				<p><?php echo _("You have been called in to provide some training to test and sharpen the reflexes of a team that is going on a special mission to rescue some hostages. Being able to grab things quickly is one area of reflexes that is especially important in this mission."); ?></p>
				<ul class="rslides slider">
					<li>
						<img src="images/10/10a.jpg">
					</li>
					<li>
						<img src="images/10/10a2.jpg">
					</li>
					<li>
						<img src="images/10/10a3.jpg">
					</li>
				</ul>
			</div>

			<div id="assignment">
				<h2><?php echo _("The Task"); ?></h2>
				<p><?php echo _("Your assignment is to design or research one or more activities which can be used first to test the \"grab-reflex\" of team members and then be used by the team members to help them improve their grab-reflex. In the box provided explain how each grab-reflex activity works."); ?></p>
				<textarea cols="80" rows="8" placeholder="<?php echo _("Please type your answer here..."); ?>"></textarea>
			</div>
		</div>
	</div>

	<div class="buttons-back" title="<?php echo _("Back"); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>

	<div class="buttons">
		<a href="#" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _("Read More"); ?>"></a>
		<a href="11.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _("Next"); ?>"></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Training for special mission..."); ?></strong></section></section>
	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});
	</script>
	<script>
	$('img.back-toggle').click(function(){
		if ($('#problem').is(':visible')) {
			document.location.href= "9.php";
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
			document.location.href = "11.php";
		}
	});

	var answered = <?php echo $answered; ?>

	function save() {
		var answer = $('textarea').val();
		
		if (answered == 0) {
			saveMeta('behaviors', answer);
			answered = 1;
		}
	}

	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php require("setlocale.php"); ?>
</body>
</html>
