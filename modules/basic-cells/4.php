
<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'basic-cells';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(4, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Basic Cells"); ?></title>

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
		h1 { color: #f36d90; }
		span.colored-blue { color: #249ab8;}		
		.wrap { border-color: #C567EF; }
		.bg { background-image: url(assets/4/bg.jpg); overflow: hidden;}
		.enlarge { text-align: center; margin-bottom: -10px;}
		#screen2, #screen3 { display: none; }

		#buttons .next { display: none; }
		/*To solve overlap bug at the edges during magnification*/
		.small { display: block; width:400px; }
		#graphDiv { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
		#graphDiv img { width: 92%; margin-top: 7px; }
		.pet:hover {cursor: pointer;}
		.pet {width: 100%;padding: 0;display: block;margin: 20px auto 0;}
		.click {text-align: center;font-size:22px;}
		#close { background: white; color: #406468; display: block; margin: 0 auto; width: 65px; padding:10px; border-radius: 5px;margin-top:20px;text-align:center;}
		#close:hover { cursor: pointer; }
		.rslides img { 
		   width: 97%;
		   height: 188px;}
		.fleft { float: left;}
		.fright { float: right;}
		.slide { position: relative; }
		.rslides { width: 40%; }
		.next1, .prev { position: absolute;
				top: 20%;
				width: 70px;
				z-index: 999;
				cursor:pointer;
		 }

		.cycle-slideshow {
			width: 81%;
			margin: -5px auto 0;
			height: 300px;
			border: 3px solid #FFF655;
			-webkit-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			-moz-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			background-color: #8EE8AF;
			border-radius: 5px;
		}

		.next1 { right: 15px; }
		.prev { left: 15px; }
		.center { text-align: center;}

		.group {
			position: relative;
			bottom: 410px;
			left: 650px;
			}
		.group li {
			padding: 19px 12px;
		}
		.title-popup { 
			margin: 0 auto; 
			width: 100%; 
			color: black; 
			text-align: center;
			position: absolute;
			top: 100px;


		}
		.size22 
		{
			font-size: 20px;
		}
		.image_align {
			/*margin-top: 30px;*/
		}
		.p-fix {
			/*margin-top: -2px;*/
			margin-left: 0px;
		}
		.hl { color: #2561BA; }
		#screen2 img{width: 80%;}
		#screen2 p{font-size: 22px;}
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }

			#screen2 p{font-size: 20px;}
			
			<?php if ($language == 'es_ES') : ?>
				
				#screen1 p{font-size: 18px;}
				#screen1 h1{ font-size: 28px;}
			<?php endif; ?>
		}
		@media screen and (max-width: 900px){
			#screen2 p{ font-size:  19px}

		}
		@media screen and (max-width: 650px){
			<?php if($language == 'es_ES'){ ?>
				#screen2 p{ font-size:  17px}
			<?php }else{ ?>
				#screen2 p{ font-size:  18px}
			<?php } ?>

		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">
				
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... basic cells"); ?></h1>
						<p class="grid_12"><?php echo _("Cells come in two major types depending on their complexity. Prokaryotes are cells that have no major internal structures. These cell types include bacteria and archaea. Eukaryotes have a variety of internal structures and include protists, plants, animals, and fungi."); ?></p>
						<p class="grid_12"><?php echo _('Browse through the slides below by clicking the left and right arrows.'); ?></p>
						<div class="grid_12 slide">
							<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="> div" data-cycle-timeout=6000 data-cycle-prev=".prev" data-cycle-next=".next">
								<div>
									<div class="grid_4">
										<img class="image_align" src="assets/4/prokaryotes.jpg" />
									</div>
									<div class="grid_8">
										<p class="size22"><?php echo _("The simplest living things are very small single cells called <span class='hl'>prokaryotes</span>.  The two types, archaea and bacteria, look much alike, but have very different internal chemistries. Prokaryotes are usually only 1-2 microns in size.  A micron is .001 millimeter, so that’s very, very small.  Using special techniques, our most powerful light microscopes can view bacteria and archaea clearly."); ?></p>	
									</div>
								</div>
								<div>              
										<div class="grid_4">
										<img  class="image_align" src="assets/4/archea.jpg" />
										</div>
										<div class="grid_8">
											<p class="size22"><?php echo _("Archaea are a most diverse set of organisms living in environments as different as mud, fresh water, oceans, and the digestive systems of animals. Some archaea are found inside geysers and even near volcanic vents in the ocean floor."); ?></p>	
										</div>
								</div>
									<div>              
										<div class="grid_4">
										<img  class="image_align" src="assets/4/bacteria.jpg" />
										</div>
										<div class="grid_8">
											<p class="size22"><?php echo _("Bacteria are common everywhere, from the tops of the highest mountains to the bottoms of the deepest caves. They live on and inside plants and animals. Some cause illness but many are also important in all types of food processing. Bacteria turn milk into yogurt and cheese; meat into some types of sausage; and cabbage into sauerkraut and kimchi."); ?></p>	
										</div>
									</div>
								<div>              
									<div class="grid_4">
									<img  class="image_align" src="assets/4/eukaryotes.jpg" />
									</div>
										<div class="grid_8">
										<p class="size22"><?php echo _("All other living things are made of cells called <span class='hl'>eukaryotes</span>.  Eukaryotic cells are much larger than prokaryotes and may exist as individual cells or as parts of complex organisms.  All plants, animals, and fungi are made of eukaryotic cells."); ?></p>
									</div>
								</div>
							</div>

							<div class="prev"><img src="assets/4/prev.png"></div>
							<div class="next1"><img src="assets/4/next.png"></div>
						</div>
							<div class="grid_12">

						</div>
					</div>
					<div id="screen2" class="screen">
						<div class="grid_12">
							<p><?php echo _("It’s hard to make blanket statements about what all cells have in common, but one feature all have is a membrane. <span class='hl'>Cell membranes</span> separate the living interior of cells from the rest of their environments. Membranes regulate what goes into and out of cells and provide protection for cells’ interior chemistry."); ?></p>
						</div>
						<div class="grid_12">
							<p class="grid_8 p-fix">
							<?php echo _("While we often think of cell membranes as simply thin layers covering the outside of cells, they are actually much more complex and highly specialized to perform their functions. This layer also includes many different types of molecules made of proteins and sugars that function to move substances through the membrane and to help cells respond to changes in their environments."); ?>
							</p>
							<p class="grid_4">
								<img src="assets/4/cells_2.jpg" alt="" />
							</p>
						</div>
						<div class="grid_12">
							<p><?php echo _("Substances made of very small particles are able to flow through cell membranes without difficulty. They simply pass through the tiny openings between individual molecules. This process is called <span class='hl'>diffusion</span>, which occurs any time substances flow from areas of high concentration to areas of low concentration. A special type of diffusion is called <span class='hl'>osmosis</span>. Osmosis is the diffusion of water across a cell membrane."); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("Passing through membrane..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/jquery.cycle2.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
		$(".rslides2").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});
		$( '.cycle-slideshow' ).cycle({
   				 next: '.next1',
   				 prev: '.prev',
   				 timeout: 0,
				});
		$('.cycle-slideshow').cycle('stop');
	</script>
	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 2;

		if (hash != "") {
			$('.screen').hide();

			$('#' + hash).show(function() {
				var screen = hash[hash.length -1];

				if (screen < screenCount) {
					$('.readmore').parent().attr('href', '#screen' + screen);
				} else {

					$('.back').fadeOut(); 

					$('.readmore').fadeOut(function() { 
						$('.next').fadeIn(); 
						$('.back').fadeIn(); 
					});
				}
			});
		}

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "3.php#answer";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen2').fadeOut(function () {
					
					$('#screen1').fadeIn();

					window.location.hash = '#';
				});
			} 

		});

		$('.readmore').click(function(){
			$('.back').fadeOut();
			$('.readmore').fadeOut(function() {
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
			
			$('#screen1').fadeOut(function() {
				$('#screen2').fadeIn();

				window.location.hash = '#screen2';
			});
		});
	</script>

	<script src="js/jpreloader.js"></script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
