<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'genetic-codes';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Genetic Codes"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #8D641B; font-size: 31px; }
h2 { text-align: center; color: #C95410; }
.wrap { border-color: #ffeb75; }
.bg { background-image: url(images/14/bg.jpg); }

#problem { text-align: center; }
#problem img { display: inline-block; margin-top: 20px; }
#buttons .next { display: none; }
#assignment { display: none; text-align: center; }
#assignment h2 { margin-top: 0; padding-top: 20px; }
textarea { width: 60%; margin-top: 20px; display: inline-block; border-radius: 5px; border: 1px solid #AF863E; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
img.next-toggle { display: none; }

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 24px; }
<?php endif; ?>

html[dir="rtl"] h2 {text-align: center; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="problem">
				<h1><?php echo _("Using what you know... about genetic codes... to solve a problem"); ?></h1>
				<h2><?php echo _("The Scenario"); ?></h2>

				<p><?php echo _("You have learned a lot about how genetics determine the characteristics of offspring, so you are thinking about opening a business called \"Design a Puppy.\" Your business idea is to let people decide what they would like their dog to look like by looking at different dogs that you will have in your kennels."); ?></p>

				<img src="images/14/dogs.png">
			</div>

			<div id="assignment">
				<h2><?php echo _("Your Assignment"); ?></h2>

				<p><?php echo _("You need to write a business plan that explains how you can predict what a puppy will look like so that you can borrow some money to open your business. Include in your plan how sure you can be that your prediction of what a puppy will look like will be accurate. Enter your business plan in the text box provided."); ?></p>
				<textarea cols="80" rows="8" placeholder="<?php echo _("Please type your answer."); ?>"></textarea>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="15.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Counting dogs..."); ?></strong></section></section>

	<script>
	$('a.back-toggle').click(function(){
		if ($('#problem').is(':visible')) {
			document.location.href= "13.php";
		} else if ($('#assignment').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
			$('#assignment').fadeOut(function(){
				$('#problem').fadeIn();
			});
		}
	});
	
	$('a.readmore-toggle').click(function(){
		$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
		$('#problem').fadeOut( function(){
			$('#assignment').fadeIn();
			window.location.hash = '#assignment';
		});
	});
	
	$('a.next-toggle').click( function() {
		if ($('textarea').val() == '') {
			alert('<?php echo _("Please type your answer."); ?>');
			return false;
		}
		document.location.href = "13.php";
	});

	$(".num").keydown(function(event) {
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

	<?php include_once "setlocale.php"; ?>
</body>
</html>
