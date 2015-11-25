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
h1 { color: #85792F; }
.wrap { border-color: #ffe65d; }
.bg { background-image: url(images/6/bg.jpg); }

#screen1 img { display: inline-block; margin: 15px 0 15px 40px; }

#screen2 .slider { margin-top: 10px; }
#screen2 .slider img { margin-bottom: 10px; }
#screen2 .slider .caption { color: #000; font-size: 20px; text-align: center; }
#screen2 .clear div { float: right; width: 460px; }
#screen2 .clear div p { text-align: center; font-size: 20px; color: #3399cc; }
#screen2 .clear p.caption { color: #3399cc; }
#screen2 .clear > p { float: left; width: 340px; }

#screen3 img { display: inline-block; margin: 10px 0 7px 50px; }
#buttons .next { display: none; }
#screen2, #screen3 { display: none; }
#screen2 p:first-child, #screen3 p:first-child { padding-top: 15px; }
img.next-toggle { display: none; }
<?php if ($language == 'zh_CN'): ?>
	#screen2 p { font-size: 22px; }
	#screen3 p { font-size: 20px; }
<?php endif; ?>

html[dir="rtl"] #screen1 img, html[dir="rtl"] #screen3 img {float:left;}

@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .clear div {
float: right;
width: 358px;
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
				<p><?php echo _("<span class='key'>Heredity</span> is how traits are passed from parents to offspring, or from one generation to the next.  People have been using the few simple rules of heredity for thousands of years. New varieties of horses, cattle, dogs, and birds were produced by choosing useful traits and breeding the animals that had them."); ?></p>
				<img src="images/6/s1.png">
				<div class="clear"></div>
				<p><?php echo _("The first person to state the rules in a simple form was Gregor Mendel. He saw patterns in his lifelong observations of plants and animals, and carried out experiments for years. Mendel proposed his rules of inheritance which were based on bits of information, which later came to be called <span class='key'>genes</span>."); ?> </p>
			</div>

			<div id="screen2" class="screen">
				<div class="clear">
					<p><?php echo _("One rule, called <span class='key'>segregation</span>, states that each individual receives half of its genetic information from each parent, or two genes for each trait.  That individual then passes along only half of its information to any offspring.  Mendel's observation was that the information from parents is recombined, or mixed up, each generation.  Each parent passes along only one gene for each trait, and there is no way to predict which gene it is."); ?></p>

					<div>
						<p><?php echo _("Examples of genes you got from your parents/grandparents:"); ?></p>

						<ul class="rslides slider">
							<li>
								<img src="images/6/s2a.jpg">
								<p class="caption"><?php echo _("Eye color"); ?></p>
							</li>
							<li>
								<img src="images/6/s2b.jpg">
								<p class="caption"><?php echo _("Hair color and texture"); ?></p>
							</li>
							<li>
								<img src="images/6/s2c.jpg">
								<p class="caption"><?php echo _("Height"); ?></p>
							</li>
						</ul>
					</div>
				</div>

				<p><?php echo _("Another of Mendel's observations was that some traits are able to \"disappear\" in one generation and \"reappear\" in a later generation.  He proposed that some traits were always expressed, and could cause others to be hidden.  Those hidden traits could then reappear at later times.  Mendel called traits that could be hidden <span class='key'>recessive</span>, and those traits which show up whenever their gene is present <span class='key'>dominant</span>."); ?></p>
			</div>

			<div id="screen3" class="screen">
				<p><?php echo _("A third observation is that the inheritance of any gene doesn't change the inheritance of any other gene.  More simply put, the gene someone inherits from their mother for nose shape doesn't do anything to influence which gene she inherits for her hair color.  This is called <span class='key'>independent assortment</span>. This independence allows us to make predictions about the combinations of traits in generations not yet born.  A mathematician named Punnet showed that it's a lot like multiplication."); ?> </p>
				<img src="images/6/s3.png">
				<div class="clear"></div>
				<p><?php echo _("The image above illustrates the inheritance pattern of peapod color.  Capital letters are used to show which trait is dominant, and lower case to show the recessive. In this case, a dominant yellow parent mated with a recessive green parent. The combinations in their offspring show equal numbers of green and yellow peapods."); ?> </p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Passing on traits..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	var hash = window.location.hash.slice(1);
	var screenCount = 3;

	if (hash != "") {
		$('.screen').hide();
		$('#' + hash).show(function() {
			var screen = hash[hash.length -1];
			if (screen < screenCount) {
				$('.bg').css('background-image', 'url(images/6/bg2.jpg)');
				$('a.readmore-toggle').parent().attr('href','#screen' + screen);
			} else {
				$('.bg').css('background-image', 'url(images/6/bg.jpg)');
				$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
			}
		});
	}

	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "5.php";
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('.bg').css('background-image', 'url(images/6/bg.jpg)');
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} else if($('#screen3').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
			$('#screen3').fadeOut(function (){
				$('.bg').css('background-image', 'url(images/6/bg2.jpg)');
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		}
	});

	$('a.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('#screen1').fadeOut( function(){
				$('.bg').css('background-image', 'url(images/6/bg2.jpg)');
				$('#screen2').fadeIn();
				window.location.hash = '#screen2';
			});
		} else if ($('#screen2').is(':visible')) {
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen2').fadeOut( function(){
				$('.bg').css('background-image', 'url(images/6/bg.jpg)');
				$('#screen3').fadeIn();
				window.location.hash = '#screen3';
			});
		}
	});
	</script>

	<script src="scripts/jpreloader.js"></script>

	<?php include_once "setlocale.php"; ?>
</body>
</html>
