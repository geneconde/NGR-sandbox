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
h1 { color: #5AC4E1; }
.wrap { border-color: #a8ebfd; }
.bg { background-image: url(images/12/bg.jpg); }

#screen1 .clear { float: right; }
#screen1 .clear table { float: left; }
#screen1 .clear table td { font-size: 20px; }
#screen1 .clear table td.colored { color: orange; }
#screen1 .clear img { float: left; margin: 180px 20px 0; }
#screen1 div p { float: left; width: 510px; }

#screen2 p:first-child { padding-top: 15px; }
#screen2 .slider { float: right; width: 360px; margin-top: 20px; }
#screen2 .slider img { margin-bottom: 10px; }
#screen2 .slider .caption { color: #349A9E; font-size: 20px; text-align: center; }
#screen2 .clear > p { float: left; padding-top: 5px; width: 470px; }
#buttons .next { display: none; }
#screen2 { display: none; }
img.next-toggle { display:none; }

<?php if ($language == 'es_ES'): ?>
	#screen1 p { font-size: 22px; }
<?php endif; ?>
<?php if ($language == 'zh_CN'): ?>
	p { font-size: 22px; }
<?php endif; ?>

@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .clear > p {
		float: left;
		padding-top: 5px;
		width: 352px;
	}	
	#screen1 div p {
		float: left;
		width: 52%;
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
				<p><?php echo _("Meiosis is a very reliable process, but, very rarely, mistakes occur.  It's possible for the chromosomes to not sort perfectly.  When that happens, some sex cells may be formed with too few or too many chromosomes.  The presence of an extra chromosome 21 causes a condition known as Down's Syndrome.  Down's patients have some physical and learning differences from other people, but can live long, happy lives.  The presence of other extra chromosomes has more complicated consequences."); ?></p>

				<div>
					<p><?php echo _("In addition to abnormalities in chromosomes, sometimes there are genetic mutations. Mutations are differences in genes.  <span class='key'>Mutations</span> cause variations that make organisms differ from one another. At the most basic level, mutations are just tiny changes in genes located on chromosomes. If only one base is changed, the change in the protein produced may be minor, or there may be no change at all. This is how the simple variation we see in nature happens. The difference between red hair and brown hair is a letter change in a gene. The difference between being tall or short is a few changes in the letters of a few genes."); ?></p>

					<div class="clear">
						<table>
							<tr><td>C</td><td>C</td></tr>
							<tr><td>G</td><td>G</td></tr>
							<tr><td>A</td><td>A</td></tr>
							<tr><td>C</td><td>C</td></tr>
							<tr><td>G</td><td>G</td></tr>
							<tr><td>G</td><td>G</td></tr>
							<tr><td>A</td><td>A</td></tr>
							<tr><td>T</td><td>T</td></tr>
							<tr><td>T</td><td>T</td></tr>
							<tr><td>A</td><td>A</td></tr>
							<tr><td>C</td><td>C</td></tr>
							<tr><td>A</td><td>A</td></tr>
							<tr><td>T</td><td>T</td></tr>
							<tr><td colspan="2">DNA</td></tr>
						</table>

						<img src="images/12/arrow.png">

						<table>
							<tr><td>C</td><td>C</td></tr>
							<tr><td>G</td><td>G</td></tr>
							<tr><td>A</td><td>A</td></tr>
							<tr><td>C</td><td>C</td></tr>
							<tr><td>G</td><td>G</td></tr>
							<tr><td>G</td><td class="colored">A - <?php echo _("mutation"); ?></td></tr>
							<tr><td>A</td><td>A</td></tr>
							<tr><td>T</td><td>T</td></tr>
							<tr><td>T</td><td class="colored">G - <?php echo _("mutation"); ?></td></tr>
							<tr><td>A</td><td>A</td></tr>
							<tr><td>C</td><td>C</td></tr>
							<tr><td>A</td><td>A</td></tr>
							<tr><td>T</td><td>T</td></tr>
							<tr><td colspan="2"><?php echo _("DNA with mutations"); ?></td></tr>
						</table>
					</div>
				</div>
			</div>

			<div id="screen2" class="screen">
				<p><?php echo _("Sometimes, however, a base may be left out completely; or a new base may be inserted.  This causes a shift in how cells read out the DNA code.  A protein may start out normally, but, from the mutation site onward, every three-base sequence is changed.  In this case, the protein formed will hardly resemble the normal version.  Whatever that protein is supposed to do in an organism won't get done because the proper molecule isn't made.  The actual product may even be poisonous, or cause an inherited disease."); ?></p>

				<div class="clear">
					<p><?php echo _("But remember, even though mutation is sometimes scary, it's not bad.  Every difference we see in nature is due to mutation.  Every unique characteristic of every living thing is caused by changes at the DNA-level.  Mutations give all living things the ability to adapt to their environments.  It's impossible to predict all of the changes that will ever occur on Earth.  When those changes happen, some mutations will protect living things from harm, while others will make them more vulnerable."); ?></p>

					<ul class="rslides slider">
						<li>
							<img src="images/12/s2a.jpg">
							<p class="caption"><?php echo _("Cats with different eye colors"); ?></p>
						</li>
						<li>
							<img src="images/12/s2b.jpg">
							<p class="caption"><?php echo _("Albino peacock"); ?></p>
						</li>
						<!-- <li>
							<img src="images/12/s2c.jpg">
							<p class="caption"><?php echo _("Wild melanistic aspid viper"); ?></p>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="13.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Changing sequence..."); ?></strong></section></section>

	<script>
	$(".slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 400
	});

	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('a.readmore-toggle').fadeOut(function(){ $('a.next-toggle').fadeIn(); });
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "11.php";
		} else if ($('#screen2').is(':visible')) {
			$('a.next-toggle').fadeOut(function() { $('a.readmore-toggle').fadeIn(); });
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				window.location.hash = '';
			});
		} 
	});

	$('a.readmore-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			$('a.readmore-toggle').fadeOut(function() { $('a.next-toggle').fadeIn(); });
			$('#screen1').fadeOut( function(){
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
