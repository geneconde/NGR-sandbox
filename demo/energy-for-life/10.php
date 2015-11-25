<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'energy-for-life';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Energy for Life"); ?></title> <!-- Change module title here -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/responsiveslides.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/modernizr.min.js"></script> <!-- This is used to detect HTML5 and CSS3 in the user's browser -->
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/qtip.js"></script>
<script src="scripts/responsiveslides.js"></script>
<script src="scripts/global.js"></script>
<style>
h1 { color: #fffeb6; font-size: 31px; }
h2 { text-align: center; color: #87c20d; }
p { color: #fff; }
.wrap { border-left: 1px dashed #8f265c; border-right: 1px dashed #8f265c; }
.bg { background: url('images/10/bg.jpg') no-repeat; background-size: 100% 100%; width: 100%; height: 100%; position: relative; }
.placeholder { margin: 30px auto 0; width: 620px; }
.placeholder ul { float: left; width: 300px; margin-right: 20px; }
.placeholder ul:last-child { margin-right: 0; }
#assignment { display: none; text-align: center; } /* change selector depending on heading */
#assignment h2 { margin-top: 0; padding-top: 20px; }
textarea { width: 60%; margin-top: 20px; display: inline-block; border-radius: 5px; border: 0; outline: 0; padding: 10px; font-size: 24px; font-family: PlaytimeRegular; }
#buttons .next { display: none; }
html[dir="rtl"] h2 {text-align: center;}

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="problem">
				<h1><?php echo _("Using what you know... about energy for life... to solve a problem"); ?></h1>
				<h2><?php echo _("The Problem"); ?></h2>
				<p><?php echo _("The burning of fossil fuels has saved people lots of time and labor while raising living standards around the world. But burning fossil fuels contributes to global warming and is dangerous for the future. Many people argue that the United States should not take action to reduce its use of fossil fuels unless all other countries around the world reduce their use of fossil fuels as well. They argue that any changes made only by the US will be insignificant."); ?></p>
				<div class="placeholder clearfix">
					<ul class="rslides slider">
						<li><img src="images/10/a.jpg"></li>
						<li><img src="images/10/b.jpg"></li>
					</ul>
					<ul class="rslides slider">
						<li><img src="images/10/c.jpg"></li>
						<li><img src="images/10/d.jpg"></li>
					</ul>
				</div>
			</div>
			<div id="assignment">
				<h2><?php echo _("The Task"); ?></h2>
				<p><?php echo _("Prepare some \"talking points\" (things that people might say) for people on both sides of the issue. Use the headings, \"Reasons why the US should cut back on the use of fossil fuels\" and \"Reasons why the US should not cut back on the use of fossil fuels\" to organize your talking points.  Enter or cut and paste your talking points in the text box provided."); ?></p>
				<textarea cols="80" rows="8" placeholder="<?php echo _("Click here to start typing your answer..."); ?>"></textarea>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Analyzing the events..."); ?></strong></section></section>
	<script>
	/* screen transition */	
	$('.back-toggle').click(function(){
		if($('#problem').is(':visible')) {
			document.location.href= "9.php";
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
			alert('<?php echo _("Please type your answer."); ?>');
			return false;
		}

		document.location.href = "11.php";
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
	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});
	</script>
	<script src="scripts/jpreloader.js"></script>
	<?php include("setlocale.php"); ?>
</body>
</html>
