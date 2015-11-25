<?php
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'earth-materials-and-systems';
	require_once '../../verify.php';
	require_once 'locale.php';

	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(12, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('earth-materials-and-systems');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'],$problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
?>

<!DOCTYPE html>
<html lang="en" <?php if ($language == 'ar_EG') echo "dir='rtl'"; ?> >
<head>
<title><?php echo _("Earth Materials and Systems"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/font-awesome.min.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { color: #46A6C7; font-size: 25px; }
h2 { text-align: center; color: #4BC767; }
.wrap { border-color: #FFD46C; }
.bg { background-image: url(images/12/bg.jpg); }

#assignment { display: none; text-align: center; }
#assignment h2 { margin-top: 0; padding-top: 20px; }
textarea { width: 60%; margin-top: 20px; display: inline-block; border-radius: 5px; border: solid #b7a461; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
#buttons .next { display: none; }#problem img { margin: 2% auto; display: block; }

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 35px; }
<?php endif; ?>
html[dir="rtl"] h2 {text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="problem">
				<h1><?php echo _("Using what you know... about earth materials and systems... to solve a problem"); ?></h1>
				<h2><?php echo _("The Problem"); ?></h2>
				<p><?php echo _("An area recently hit by a sandstorm is attempting to restore the landscape. They want to preserve the landscape and minimize any further damage. You are hired as a consultant to come up with a solution to slow or prevent wind and water from changing the shape of the land. The people of the area are open to suggestions about building or growing anything needed to protect the land from wind and water erosion."); ?></p>
				<img src="images/12/sandstorm.jpg"/>
			</div>

			<div id="assignment">
				<h2><?php echo _("The Task"); ?></h2>
				<p><?php echo _("What would you suggest? Enter your answer in the text box below and compare your solution to those suggested by your classmates and discuss which one might be more effective."); ?></p>
				<textarea cols="80" rows="8" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("Surveying the area..."); ?></strong></section></section>

	<script>
	var answered = <?php echo $answered; ?>;
	$('.back-toggle').click(function(){
		if ($('#problem').is(':visible')) {
			document.location.href= "11.php";
		} else if ($('#assignment').is(':visible')) {
			$('.next-toggle').fadeOut(function() { $('.readmore-toggle').fadeIn(); });
			$('#assignment').fadeOut(function(){
				$('#problem').fadeIn();
			});
		}
	});
	
	$('.readmore-toggle').click(function(){
		$('.readmore-toggle').fadeOut(function() { $('.next-toggle').fadeIn(); });
		$('#problem').fadeOut( function(){
			$('#assignment').fadeIn();
			window.location.hash = '#assignment';
		});
	});
	
	$('.next-toggle').click( function() {
		if ($('textarea').val() == '') {
			alert("<?php echo _("Please type your answer."); ?>");
			return false;
		} else {
			save();
			document.location.href = "13.php";
		}
	});

	function save() {
		var answer = $('textarea').val();
		
		if (answered == 0) {
			saveMeta('earth-materials-and-systems', answer);
			answered = 1;
		}
	}

	</script>

	<script src="scripts/jpreloader.js"></script>
	<?php require "setlocale.php"; ?>
</body>
</html>
