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
<meta name="viewport" content="initial-scale=1">
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
<script src="scripts/global.js"></script>
<style>
h1 { color: #037091; }
.wrap { border-color: #58d1f3; }
.bg { background-image: url(images/10/bg.jpg); }

#screen1 p:first-child { padding-top: 15px; }
#screen1 .slider { width: 360px; height: 235px; border-radius: 5px; margin: 40px auto 0; }
#screen1 .slider img { margin-bottom: 10px; width: 364px; height: 238px; -moz-border-radius: 0; }

@media screen and (-webkit-min-device-pixel-ratio:0) { #screen1 .slider img { width: 360px; height: 235px; } }

#screen1 .slider .caption { display: none; }
#screen1 .clear > p { float: left; width: 470px; }

#screen2 { display: none; }
#screen2 div { float: left; width: 560px; }
#screen2 div p:first-child { padding-top: 15px; }
#screen2 > p { float: right; border-radius: 5px; width: 249px; height: 400px; background: url(images/10/s2.jpg) no-repeat; padding: 0; margin-top: 80px; text-align: center; }
#buttons .next { display: none; }
img.next-toggle { display:none; }
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 div {
		float: none !important;
		width: 100%;
	}	
	#screen2 > p {
		float: none;
		border-radius: 5px;
		width: 249px;
		height: 400px;
		background: url(images/10/s2.jpg) no-repeat;
		padding-top: 20px;
		margin: 0 auto;
		text-align: center;
	}
}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen">
				<h1><?php echo _("More big ideas... about genetic codes"); ?></h1>
				<p><?php echo _("Now that you know about chromosomes, let's go back to Mendel's law of segregation. It states that individuals receive half of their genetic information from each parent.  This creates a problem when you consider that every cell of every organism has two different sets of chromosomes, one from the male parent and one from the female.  The problem is that only one set can be passed along to the next generation. Somehow, only half of the total chromosomes can be passed on to offspring."); ?></p>

				<p><?php echo _("Nature's solution to this problem is sex cells.  As a group, sex cells are called <span class='key'>gametes</span>.  Male gametes are <span class='key'>sperm cells</span>.  Female gametes are <span class='key'>egg cells</span>.  All gametes have only one copy of each different type of chromosome."); ?></p>

				<ul class="rslides slider">
					<li><img src="images/10/s1a.jpg"></li>
					<li><img src="images/10/s1b.jpg"></li>
				</ul>
			</div>

			<div id="screen2" class="screen">
				<div>
					<p><?php echo _("Gametes are formed from normal cells containing two copies of each chromosome.  The chromosome number is cut in half in a process called <span class='key'>meiosis</span>.  Cells divide twice in meiosis.  In the first division, chromosomes are sorted to produce cells containing only one of each type.  In the second division, chromosomes that have already copied themselves break apart, producing sex cells with one of each chromosome type."); ?></p> 
					<p><?php echo _("Meiosis is the mechanism in cells that allows segregation to work.  Genes are located on chromosomes, and meiosis is the process that sorts the chromosomes.  Every sex cell contains a random assortment of an organism's chromosomes.  Some were inherited from its mother, others from its father.  Meiosis sorts them randomly.  In this way, new combinations of chromosomes and the genes they carry occur every generation. These new genetic combinations help a species to be prepared for any new set of environmental conditions that may come along in the future."); ?></p>
				</div>

				<p><?php echo _("Meiosis"); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Studying Mendel's law..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.bg').css('background-image', 'url(images/10/bg2.jpg)');
		$('.screen').hide();
		$('#screen2').show();
		$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
	} else {
		$('.bg').css('background-image', 'url(images/10/bg.jpg)');
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "9.php";
		} else if ($('#screen2').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('.bg').css('background-image', 'url(images/10/bg.jpg)');
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	$('a.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
				$('.bg').css('background-image', 'url(images/10/bg2.jpg)');
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>

	<?php include_once "setlocale.php"; ?>
</body>
</html>
