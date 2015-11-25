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
		.wrap > .bg { overflow: hidden !important; }
		h1 { color: #61009e; }
		
		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/8/bg.jpg); }
		.center { margin: 0 auto; }

		.cycle-slideshow {
			width: 81%;
			margin: -5px auto 0;
			/* height: 304px; */
			border: 3px solid #59fcfa;
			-webkit-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			-moz-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			background-color: #e4e78f;
			border-radius: 5px;
		}

		.next1 { right: 15px; }
		.prev { left: 15px; }
		#md_labels1 {margin-top:1px; margin-left: 17px; margin-right: 17px;}
		.next1, .prev { position: absolute;
				top: 20%;
				width: 70px;
				z-index: 999;
				cursor:pointer;
		 }
		 #slideer-container { margin-top: 20px; }

		.size22 { font-size: 20px; }
		div.white { background: #fff; width:20%; min-height: 30px;}
		div.black { background: #000; width:20%; min-height: 30px;}
		
		@media screen and (max-width: 768px){
			.size22 {
			  font-size: 16px !important;
			}
		}
		@media only screen and (max-width: 1250px){
			.lang-menu { background-color: #966F33 !important; }
 			.lang-menu a { background-color: #966F33 !important; }
 			#buttons { background-color: #966F33; }
 			.size22 {
			    font-size: 18px;
			}
		}
		@media screen and (max-width: 1250px){
			.bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			div.next1 { right: 5px; }
			div.prev { left: 5px; }
			.slide3 div p { line-height: 27px; }
		}
		<?php if ($language == 'ar_EG') { ?>
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			.slide2 div p, .slide3 div p { line-height: 25px; }
		}
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... inherited traits"); ?></h1>

						<p class="grid_12"><?php echo _("Pedigrees are a good way to summarize the complex histories of families. Sometimes, though, we just need to predict the future offspring of a particular set of parents. Have a look at the following problem.") ?></p>
						
						<div class="grid_12 slide">

							<p class="center"><?php echo _("Browse through the slides below by clicking the left and right arrows."); ?></p>

							<div class="cycle-slideshow clearfix" data-cycle-fx="fade" data-cycle-slides="> div" data-cycle-timeout=6000 data-cycle-prev=".prev" data-cycle-next=".next" id="slideer-container">
								
							<!-- SLIDE # 1 -->
								<div class='slide1'>							

									<div class="grid_12">
										<p class="grid_12"><?php echo _("A white male guinea pig had many generations of all-white ancestors. A black female guinea pig also had many generations of all-black ancestors. When the guinea pigs were allowed to mate, all of their offspring were black. When two of the resulting black guinea pigs mated, three-fourths of their offspring were also black, but one-fourth were white."); ?></p>	
										
										<div class="grid_4 prefix_4 suffix_4">
											
											<img src="assets/8/slide1.jpg" />
										
										</div>

									</div>					
																		
								</div>
							
							<!-- SLIDE # 2 -->
								<div class='slide2'> 

									<div class="grid_12">
										<p class="grid_12"><?php echo _("What's going on here?"); ?></p>	
										<p class="grid_12"><?php echo _("Well, the recessive color was white, because white fur was hidden in the first set of offspring. That means black is the dominant color.  We often use letters to represent dominant and recessive genes. Since any individual always has two genes for every characteristic, the original parents in the problem would have these combinations:"); ?></p>

										<div class="grid_12 prefix_.5">
											
											<div class="grid_4">
												<b><p class="size22" id = "md_labels1"><?php echo _("Original White parent:"); ?></p></b>
											</div>
											
											<div class="grid_5 white"></div>
											
											<div class="grid_1">
												<p class="size22"  id = "md_labels1">ff</p>
											</div>
											
										</div>

										<div class="grid_12 prefix_.5">
											<div class="grid_4">
												<b><p class="size22"  id = "md_labels1"><?php echo _("Original Black parent:"); ?></p></b>
											</div>

											<div class="grid_5 black"></div>

											<div class="grid_1">
												<p class="size22"  id = "md_labels1">FF</p>
											</div>

										</div>

									</div>

								</div>
							
							<!-- SLIDE # 3 -->
								<div class='slide3'>              
																		
									<div class="grid_12">
										<p class="grid_12"><?php echo _("This genetic shorthand tells us the <span class='key'>genotype</span> of an individual.  Genotype is the actual combination of genes an individual has, even those we can’t easily detect. The appearance the genotype causes is called an individual's <span class='key'>phenotype</span>. Phenotypes are usually described by adjectives like black, white, tall and short. Genotypes are indicated by letters or symbols."); ?></p>

										<p class="grid_12"><?php echo _("The first set of offspring in the problem must have a gene from each parent. The white parent has only the f gene. The black parent has only F. The genotype of all of their offspring must be Ff. Their phenotype is black, but they all carry a recessive white gene."); ?></p>

									</div>

								</div>

							</div>

							<div class="prev"><img src="assets/8/prev.png"></div>
							<div class="next1"><img src="assets/8/next.png"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="7.php" class="back" title="<?php echo _("Back"); ?>"> <i class="fa fa-arrow-left"></i> </a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Browsing slides..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jquery.cycle2.js"></script>

	<script>

		$( '.cycle-slideshow' ).cycle({
   				 next: '.next1',
   				 prev: '.prev',
   				 timeout: 0,
				});
		$('.cycle-slideshow').cycle('stop');
		
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
