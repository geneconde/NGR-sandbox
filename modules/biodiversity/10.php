<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'biodiversity';
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
<title><?php echo _("Biodiversity"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/qtip.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
h1 { font-size: 32px; color: #83692e; }
h2 { text-align: center; }
.wrap { border-left: 1px dashed #fde39b; border-right: 1px dashed #fde39b; }
.bg { background: url('images/10/bg.png') no-repeat; background-size: 100% 100%; width:100%; height: 100%; position: relative; }
.placeholder { float: left; width: 320px; }
#diagram { background: url(images/10/diagram.png) no-repeat; position: relative; width: 487px; height: 390px; float: right; }
#diagram img { position: absolute; }
#bear { top: 0; left: 203px; }
#wolf { top: 90px; left: 215px; }
#deer { top: 110px; left: 122px; }
#redfox { top: 30px; right: 120px; }
#bee { top: 138px; left: 20px; }
#skunk { top: 102px; right: 106px; }
#birds { top: 129px; right: 20px; }
#mice { top: 236px; left: 155px; }
#rabbit { top: 234px; left: 216px; }
#toad { top: 183px; right: 120px; }
#insects { top: 260px; right: 70px; }
#blossom1 { bottom: 20px; left: 20px; }
#blossom2 { bottom: 10px; right: 10px; }
#nuts { bottom: 20px; left: 120px; }
#barkoak { bottom: 15px; left: 220px; }
#leaves { bottom: 12px; right: 100px; }
#assignment { display: none; text-align: center; } /* change selector depending on heading */
#assignment h2 { margin-top: 0; padding-top: 20px; }
textarea { width: 60%; margin-top: 20px; display: inline-block; border-radius: 10px; border: 1px solid #EBE1B8; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
img.next-toggle { display: none; }
<?php if($language == "es_ES") { ?>
	h1 { font-size: 24px; }
<?php } ?>
html[dir="rtl"] h2 { text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="problem" class="clearfix">
				<h1><?php echo _("Using what you know... about biodiversity... to solve a problem"); ?></h1>
				<h2><?php echo _("The Problem"); ?></h2>
				<div class="placeholder">
					<p><?php echo _("A certain park supports a complex plant and animal community that may be summarized in the food web at the right."); ?></p>
					<p><?php echo _("Many park users have expressed fear of wolves and want them separated from children and pets. Park rangers disagree, saying wolves are an essential part of the park's ecosystem. Park managers are considering whether to remove all wolves from the park."); ?></p>
				</div>
				<div id="diagram">
					<img src="images/10/bear.png" id="bear" alt="<?php echo _('Bear'); ?>">
					<img src="images/10/wolf.png" id="wolf" alt="<?php echo _('Wolf'); ?>">
					<img src="images/10/deer.png" id="deer" alt="<?php echo _('Deer'); ?>">
					<img src="images/10/redfox.png" id="redfox" alt="<?php echo _('Red Fox'); ?>">
					<img src="images/10/bee.png" id="bee" alt="<?php echo _('Bee'); ?>">
					<img src="images/10/skunk.png" id="skunk" alt="<?php echo _('Skunk'); ?>">
					<img src="images/10/birds.png" id="birds" alt="<?php echo _('Birds'); ?>">
					<img src="images/10/mice.png" id="mice" alt="<?php echo _('Mice'); ?>">
					<img src="images/10/rabbit.png" id="rabbit" alt="<?php echo _('Rabbit'); ?>">
					<img src="images/10/toad.png" id="toad" alt="<?php echo _('Toad'); ?>">
					<img src="images/10/insects.png" id="insects" alt="<?php echo _('Insects'); ?>">
					<img src="images/10/blossoms.png" id="blossom1" alt="<?php echo _('Blossoms'); ?>">
					<img src="images/10/nuts.png" id="nuts" alt="<?php echo _('Nuts'); ?>">
					<img src="images/10/barkoak.png" id="barkoak" alt="<?php echo _('Bark Oak'); ?>">
					<img src="images/10/leaves.png" id="leaves" alt="<?php echo _('Leaves'); ?>">
					<img src="images/10/blossoms.png" id="blossom2" alt="<?php echo _('Blossoms'); ?>">
				</div>
			</div>
			<div id="assignment">
				<h2><?php echo _("The Task"); ?></h2>
				<p><?php echo _("You have been asked by the park managers to make a prediction about what might happen if wolves are removed. Use the space below to list all the things in the park that will be directly and indirectly affected if all the wolves are removed. Also write a brief explanation whether you think wolf removal is a good idea or not."); ?></p>
				<textarea id="probanswer" cols="80" rows="8" placeholder="<?php echo _('Please type your answer here...'); ?>"></textarea>
			</div>
		</div>
	</div>
	<div class="buttons-back" title="<?php echo _('Back'); ?>">
		<a href="#" class="wiggle-right"><img class="back-toggle" src="images/buttons/back.png"></a>
	</div>
	<div class="buttons">
		<a href="#" class="wiggle"><img class="readmore-toggle" src="images/buttons/readmore.png" title="<?php echo _('Read More'); ?>"></a>
		<a href="11.php" class="wiggle"><img class="next-toggle" src="images/buttons/next.png" title="<?php echo _('Next'); ?>"></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Understanding the food web..."); ?></strong></section></section>
	<script>
	var answered = <?php echo $answered; ?>;

	$('#diagram img').qtip({
		content: $(this).attr('alt'),
		position: {
			corner: {
				tooltip: 'bottomMiddle',
				target: 'topMiddle'
			}
		},
		style: {
			border: { radius: 5 },
			fontSize: 24,
			tip: true,
			name: 'cream'
		}
	});

	/* screen transition */	
	$('img.back-toggle').click(function(){
		if($('#problem').is(':visible')) {
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
			answer = $('#probanswer').val();
			if (answered == 0) {
				saveMeta('biodiversity', answer);
				answered = 1;

				document.location.href = "11.php";
			}
		}
	});

	$(".num").keydown(function(event) {
		// Allow: backspace, delete, tab, escape, and enter
		if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
			(event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {
				 return;
		} else {
			if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
				event.preventDefault(); 
			}   
		}
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
