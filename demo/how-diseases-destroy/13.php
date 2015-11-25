<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/13/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #E6BC33; border-right: 1px dashed #E6BC33;}
h1 { color: #7c3e1c; font-size:35px;}
p { color: black; padding:0 10px 0 10px; text-align: left; }
.bg section{width:95%; margin:0 auto; position:relative; top:20px; }
#text{position:relative; top:70px;}
.h-light {color: #e230b1;}
.mtop {margin-top:30px;}

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 28px; }
<?php endif; ?>

html[dir="rtl"] h1 { font-size: 34px; }
html[dir="rtl"] marquee {direction: ltr;}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">		
			<section>
				<h1><?php echo _("Summarizing big ideas... about how diseases destroy"); ?></h1>			
			</section>
			<section id="text">				
				<p>
					<?php echo _("A <span class='key'>disease</span> is a change in the body processes that does not let the organism do its job. This can happen by itself, or by toxins, radiation, or invading bacteria and viruses. The body will fight off any invasion with the <span class='key'>immune system</span>. If the invasion is more than what the body can resist, a disease may then develop and symptoms of disease will appear. <span class='key'>Microbes</span> and toxic chemicals were discussed in this review. Microbes are microscopic life forms that reproduce quickly. <span class='key'>Bacteria</span> are single-celled microbes.  A <span class='key'>virus</span> is a microbe that is not considered truly living. A <span class='key'>pathogen</span> is an organism or a virus that causes diseases in other organisms. Diseases from pathogens that are contagious can spread through <span class='key'>carriers</span>. <span class='key'>Antibiotics</span> can stop microbial growth or destroy microbes; however, antibiotic resistance makes treating bacterial infections challenging."); ?> </p>
				<article>
					<figure class="centered mtop">
						<marquee><img src="images/13/run.png"></marquee>
					</figure>
				</article>
			</section>			
		</div>
	</div>
	<div id="buttons">
		<a href="12.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="14.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>
<?php require("setlocale.php"); ?>
</body>
</html>
