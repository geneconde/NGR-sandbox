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
h1 { color: #2F83AD; clear: both; }
.wrap { border-color: #67d6f4; }
.bg { background-image: url(images/8/bg.jpg); }

#screen1 div { width: 390px; float: left; }
#screen1 img { float: right; margin-top: 16px; }

#screen2 p:first-child { padding-top: 15px; }
#screen2 ul { list-style: none; padding-left: 0; margin-bottom: 0; }
#screen2 li { font-size: 24px; }
#screen2 li:nth-child(1) { color: #B076D6; }
#screen2 li:nth-child(2) { color: #F7658D; }
#screen2 .clear div { float: right; }
#screen2 .clear p { float: left; width: 460px; }
#screen2 .clear div img { display: block; margin-top: 18px; }
#buttons .next { display: none; }
#screen2 { display: none; }
img.next-toggle { display:none; }
span.cell, span.chrom, span.dna { position: absolute; font-size: 24px; }
span.cell { top: 85px; left: 58%; }
span.chrom { top: 75px; right: 6%; }
span.dna { top: 480px; right: 26%; }

<?php if ($language == 'es_ES'): ?>
	#screen2 p { font-size: 23px; }
	span.cell { margin-left: 100px; left: auto; right: auto; top: 83px; }
<?php endif; ?>
<?php if ($language == 'zh_CN'): ?>
	#screen1 p, #screen2 p, #screen2 li { font-size: 21px; }
<?php endif; ?>

html[dir="rtl"] span.dna {right: 20%;}
@media only screen and (max-device-width : 768px)  and (-webkit-min-device-pixel-ratio: 1) {
	#screen2 .clear p {
		float: none;
		width: 100%;
	}	
	#screen2 .clear div img {
		display: block;
		/*margin-top: 18px;*/
		margin: 0 auto;
	}
	#screen2 .clear div {
		 float: none; 
		margin: 0 auto;
	}
	#screen1 div {
		width: 271px;
		float: left;
	}
	span.chrom {
		top: 108px;
		right: 6%;
	}
	span.cell {
		top: 108px;
		left: 51%;
	}

}
@media only screen and (min-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {

}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screen clear">
				<h1><?php echo _("More big ideas... about genetic codes"); ?></h1>

				<div>
					<p><?php echo _("Observations of reproducing cells along with breeding experiments led scientists to conclude that genes are located on structures visible to microscopes called <span class='key'>chromosomes</span>. To understand more about chromosomes and genes, we turn to DNA."); ?></p>

					<p><?php echo _("<span class='key'>DNA</span> stands for deoxyribonucleic acid. DNA is similar to a computer program for your body- blueprints on how to build it. Almost every cell in your body has a complete set of DNA in it. DNA is in the nucleus of the cells. It's arranged in a spiral shape called a double helix, and it comes in long strands called chromosomes."); ?></p>
				</div>
				<span class="cell"><?php echo _("Cell"); ?></span>
				<span class="chrom"><?php echo _("Chromosome"); ?></span>
				<span class="dna"><?php echo _("DNA"); ?></span>
				<img src="images/8/s1.jpg">
			</div>

			<div id="screen2" class="screen">
				<div class="clear">
					<p><?php echo _("Each strand of DNA contains millions of pairs of molecules called bases. There are four chemicals that pair up with each other in DNA. The base pairs can combine in different ways, making different sequences. The order of the sequences is like a code. Each section of DNA codes for a different trait, your eye color or height for instance. Each one of these small DNA sections is called a <span class='key'>gene</span>. Genes provide information that causes an organism to display a certain trait."); ?>  </p>

					<div>
						<img src="images/8/s2.jpg">

						<ul>
							<li>1. <?php echo _("DNA Double Helix"); ?></li>
							<li>2. <?php echo _("Base Pairs"); ?></li>
						</ul>
					</div>
				</div>

				<p><?php echo _("The idea that genes controlled the characteristics of living things was very powerful. It led to the development of modern food crops and improvements in animal production.  It also made many human conditions more understandable and predictable."); ?></p>

				<p><?php echo _("All chromosomes are made of DNA. Proteins are large molecules made of building blocks called <span class='key'>amino acids</span>. Each gene determines the structure of a single protein.  Since organisms are made of many different proteins, there are many different genes to code for each one.  Sometimes, proteins even work with other proteins, so it may take more than one gene to actually determine a specific trait."); ?></p>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Adjusting microscope..."); ?></strong></section></section>

	<script>
	var hash = window.location.hash.slice(1);

	if (hash != "") {
		$('.screen').hide();
		$('#screen2').show();
		$('img.readmore-toggle').fadeOut(function(){ $('img.next-toggle').fadeIn(); });
	}
	
	$('a.back-toggle').click(function(){
		if ($('#screen1').is(':visible')) {
			document.location.href = "7.php";
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
