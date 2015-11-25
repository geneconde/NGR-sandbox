<?php
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'basic-cells';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(10, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Basic Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/2.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #f36d90; }

		<?php if ($language == 'ar_EG') : ?>
			h1, p { text-align: right; }
		<?php endif; ?>
		
		.wrap { border-color: #A23763; }
		.bg { background-image: url(assets/10/bg.jpg); overflow: hidden;}
		
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
				top: 33%;
				width: 70px;
				z-index: 999;
				cursor: pointer;
		 }

		.cycle-slideshow {
			width: 81%;
			margin: 20px auto 0;
			height: 400px;
			border: 2px solid #E0A2C9;
			border-radius: 5px;
			-webkit-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			-moz-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			background-color: #6DCFF6;

		}
		.size22 { font-size: 20px;}
		.next1 { right: 15px; }
		.prev { left: 15px; }
		.center { text-align: center;}
		.container_12 { height: 100%; }
		/*.fix { margin-top: 40px; }*/
		.hl { color: #2561BA; }
		.p-fix{display: table-cell; vertical-align:middle;}
		
		@media screen and (max-width: 1250px){ 
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
			.cycle-slideshow{
				height: 375px ;				
			}
			h1{ padding-top: 35px;}
			p{ margin:  5px 0;}
			.size22{ font-size: 19px; padding-top: 5px;}
		}
		@media screen and (max-width: 960px){
			<?php if($language == 'es_ES'){ ?>
				.cycle-slideshow p{
					font-size: 17px;
				}
			<?php }else{ ?>
				.cycle-slideshow p{
					font-size: 19px;
				}
			<?php } ?>

		}
		@media screen and (max-width: 720px){
			.cycle-slideshow .grid_5 { width: 30%;}
			.cycle-slideshow .grid_6 { width: 58%}

		}
		@media screen and (max-width: 600px){
			.cycle-slideshow p{
				font-size: 17px;
			}
		}
		@media screen and (max-width:500px){
			.cycle-slideshow p{
				font-size: 16px;
			}
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12">
				<div class="grid_12">
					<h1 class="grid_12"><?php echo _("More big ideas about… basic cells"); ?></h1>
					<p class="grid_12"><?php echo _("There are four different types of eukaryotes."); ?></p>
					<p class="grid_12"><?php echo _('Browse through the slides below by clicking the left and right arrows.'); ?></p>
							<div class="grid_12 slide">
								<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="> div" data-cycle-timeout=6000 data-cycle-prev=".prev" data-cycle-next=".next">
									<div>
										<div class="grid_5">
											<img class="fix" src="assets/10/cells_1.jpg" />
										</div>
										<div class="grid_6">
											<p class="size22 p-fix"><?php echo _("Fungi have cells much like plant cells, except that their <span class='key'>cell walls</span> are made of molecules called chitins and glucans. Fungal cells do not have chloroplasts, so they must rely on other living things for their energy needs. Fungi are considered to be decomposers because they help to break down dead organisms."); ?></p>
										</div>
									</div>
									<div>              
										<div class="grid_5">
										<img class="fix" src="assets/10/cells_2.jpg" />
										</div>
										<div class="grid_6">
											<p class="size22 p-fix"><?php echo _("<span class='hl'>Animal cells</span> lack rigid cell walls. This gives them great flexibility and allows them to interact with surrounding cells in a wide variety of ways. Animal cells also lack chloroplasts, making them dependent upon plants for energy."); ?></p>	
										</div>
									</div>
									<div>              
										<div class="grid_5">
											<img class="fix" src="assets/10/cells_3.jpg" />
											</div>
											<div class="grid_6">
												<p class="size22 p-fix"><?php echo _("Plant cells are enclosed by rigid membranes made of cellulose. Most people know cellulose as wood, paper, or cotton. These and other products are made from plant material. Plant cells may also have chloroplasts which capture energy from the sun. Chloroplasts turn this energy into sugars which provide energy for plants and for all other types of life."); ?></p>	
										</div>
									</div>
									<div>              
										<div class="grid_5">
											<img class="fix" src="assets/10/cells_4.jpg" />
											</div>
											<div class="grid_6">
												<p class="size22 p-fix"><?php echo _("Protists exist as single cells or as groups of identical cells. Protists are extremely diverse. Some are very similar to plants, while others resemble animals. Some float in water, while others move under their own power. Some capture energy from the sun using photosynthesis, while others capture and digest other cells. Some can even seem to grow to resemble more complex organisms at various times in their lives."); ?></p>	
											</div>
									</div>
							</div>
					<div class="prev"><img src="assets/10/prev.png"></div>
					<div class="next1"><img src="assets/10/next.png"></div>
				</div>

			</div>
		</div>
	</div>
	</div>
	<div id="buttons">
		<a href="9.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="11.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Identifying eukaryote..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>
	<script src="js/jquery.cycle2.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script>
		$( '.cycle-slideshow' ).cycle({
			 next: '.next1',
			 prev: '.prev',
			 timeout: 0,
		});
		$('.cycle-slideshow').cycle('stop');
	</script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
