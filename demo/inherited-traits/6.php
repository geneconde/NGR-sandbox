<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = 'module';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(#, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Inherited Traits"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		<?php if ($language == 'es_ES') : ?>
			p.grid_12 {
			    font-size: 20px;
			}
			@media only screen and (max-width: 1250px){
				p.grid_12 {
				    font-size: 19px;
				}
			}
		<?php endif; ?>

		.wrap > .bg { overflow: hidden !important; }
		h1 { color: #f36d90; }
		
		.wrap { border-color: #FFECE8; }
		.bg { background-image: url(assets/6/bg.jpg); }
		.colored-blue { color: #249ab8;}

		.hl { color: #2561BA; }
		.center { margin: 0 auto; }

		.small { display: block; width:350px; margin-top:20px;}
		#graphDivIn, #graphDivIn2 { display: none; position: absolute; background: rgba(0, 0, 0, .9); z-index: 1000; width: 100%; height: 120%; }
		#graphDiv { display: none; position: absolute; margin: 30px 90px; background: white; z-index: 1000;  width: 80%; height:460px;/* margin-top:46px; */}
		#graphDiv2 { display: none; position: absolute; margin: 30px 90px; background: white; z-index: 1000;  width: 80%; height:460px;/*margin-top:46px; */}
		.pet:hover, .pet2:hover {cursor: pointer;}
		.pet, .pet2 {width: 100%; padding: 0;display: block; margin: 10px auto 0;}
		.click, .click2 {text-align: center;font-size:22px;}
		#close { background: white; color: #406468; display: block; width: 150px; padding:10px; border-radius: 5px; margin-top:260px; text-align:center; position: relative;}
		#close2 { background: white; color: #406468; display: block; width: 150px; padding:10px; border-radius: 5px; margin-top:290px; text-align:center;position: relative;}
		#close:hover, #close2:hover { cursor: pointer; }

		.image img{height: 150px; }
		.pop-up_content { color: #000; padding-left: 10px; width:690px; margin-top: -8px;}
		@media only screen and (max-width: 1250px){
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
			#graphDiv, #graphDiv2 { margin-top: 5%; }
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
 			.pop-up_content { width: 94%; }
 			#graphDiv .pop-up_content { line-height: 25px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
			#graphDiv, #graphDiv2 { margin-top: 10%; }
		}
		.closeC { text-align: center; width: 100%; }
		.closeC span { margin: 0 auto; }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">

			<div id="graphDivIn"></div>
			<div id="graphDiv" >
				
				<img class="small" src="assets/6/pop-up1_small.jpg" width="200"/>
				
				<p class="grid_12 pop-up_content"><?php echo _("A chart like this is called a <span class='key'>pedigree</span>. Males are shown as squares and females are shown as circles. Family  members with the dominant trait are colored red. Recessives are colored blue. The lines show the relationships within the family. Parents are linked together, and lines extend to their offspring."); ?><br></p>
			
				<p class="grid_12 pop-up_content"><?php echo _("Take a close look. The red trait shows up in every generation. In all cases, at least one parent of a red individual also showed the red trait."); ?></p>
				<div class='closeC'><span id="close"><?php echo _('Close Me!'); ?></span></div>
			</div>
			

			<div id="graphDivIn2"></div>
			<div id="graphDiv2" >
				
				<img class="small" src="assets/6/pop-up2_small.jpg" width="200"/>
				
				<p class="grid_12 pop-up_content"><?php echo _("This pedigree looks a bit different. Once again, red is dominant. Individuals having both red and blue carry one copy of each gene, but show the red trait.  Even though they appear to be dominant, it’s possible for red parents to have blue offspring.  Blue parents never have red offspring."); ?></p>
				<div class='closeC'><span id="close2"><?php echo _("Close Me!"); ?></span></div>
			</div>

			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... inherited traits"); ?></h1>
						
						<p class="grid_12"><?php echo _("The inheritance of nearly all traits follows only a few simple rules. The first big rule is that everyone has two genes for every characteristic, inheriting one from each parent. Individuals may pass only one gene for each characteristic on to any offspring. The second big rule is that genes don’t usually influence each other, that is to say that the gene inherited for nose shape doesn’t determine the gene inherited for short big toes."); ?></p>
						
						<p class="grid_12"><?php echo _("Then, there's something called <span class='key'>dominance</span>. Genes are not all created equal. Some genes cause their traits to be displayed every generation.  They are called dominant genes. Others can seem to skip generations, only to appear again in descendants of later generations. They are called <span class='key'>recessive</span>."); ?></p>

						<p class="grid_12"><?php echo _("Here's an example of a family with a dominant characteristic."); ?></p>

						<p class="center"><?php echo _("Click the images to see the details."); ?></p>

						<div class="grid_4 image prefix_2">							
							<img class="pet" src="assets/6/image1.jpg" />
						</div>
						
						<div class="grid_4 image suffix_1">
							<img class="pet2" src="assets/6/image2.jpg"/>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="5.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Skipping generations..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	<script>

		$('img.pet').click(function() {
			$('#graphDivIn').fadeIn();
			$('#graphDiv').fadeIn();
		});

		$('#close').click(function() {
			$('#graphDivIn').fadeOut();
			$('#graphDiv').fadeOut();
		});

		$('img.pet2').click(function() {
			$('#graphDivIn2').fadeIn();
			$('#graphDiv2').fadeIn();
		});

		$('#close2').click(function() {
			$('#graphDivIn2').fadeOut();
			$('#graphDiv2').fadeOut();
		});

		
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
