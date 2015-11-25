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

	<title><?php echo _("Basic Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #f36d90; }
		
		.wrap { border-color: #FFECE8; }
		.bg { background-image: url(assets/6/bg.jpg); overflow: hidden;}
		.colored-blue { color: #249ab8;}
		#screen2, #screen3 { display: none; }
		#screen1,#screen2 p{ font-size: 20px;}
		#buttons .next { display: none; }
		.hl { color: #2561BA; }
		.img_a {
			width: 100%;
			height: 250px;
		}
		.img-title {
			position: absolute;
			top: 220px;

		}
		.img-title li {
			display: inline-block;
			margin-left: 51px;
		}
		.ta-center{text-align:center;}
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
			#screen1 p{ font-size: 20px;}
			#screen1 img {width:80%; height:  200px;}

			.img-title{ top: 80%; }
		}
		@media screen and (max-width:  960px){
				#screen1 img {width:80%; height:  150px;}
				#screen2 img {width: 80%}
				.img-title li { margin-left: 18px; }
		}
		@media screen and (max-width: 700px){
			.img-title li{ font-size: 18px;}
			#screen2 p{ font-size: 18px;}
			<?php if($language == 'es_ES'){ ?>
			#screen1 p{font-size: 18px;}
			<?php }else{ ?>
			#screen1 p {font-size: 19px;}				
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
						<h1 class="grid_12"><?php echo _("More big ideas about… basic cells"); ?></h1>
						<p class="grid_12"><?php echo _("Just as our bodies have <span class='hl'>organs</span> and <span class='hl'>systems</span> to perform the functions that keep us alive, our cells also have parts that work together to do the work of living. The structures, present in all eukaryotes, are called organelles. Some show up in nearly all kinds of cells, while others are present only in some kinds of special cells."); ?></p>
						<div class="grid_5 image  prefix_1"><img class="img_a" src="assets/6/cell_1.jpg" /></div>
						<div class="grid_5 image suffix_1"><img class="img_a" src="assets/6/cell_2.jpg" />
							<ul class="img-title">
									<li><?php echo _("Animal Cell"); ?></li>
									<li><?php echo _("Plant Cell"); ?></li>
							</ul>
						</div>
						<div class="clear"></div>
						<p class="grid_12"><?php echo _("Nearly all cells have a nucleus. The <span class='key'>nucleus</span> is home to structures made of DNA called chromosomes. Chromosomes carry the information needed to make every part of every living thing. This information is used by organelles, called ribosomes, to build the proteins that make up all living things."); ?></p>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("Some proteins make up structures, and some are enzymes. Enzymes act on other molecules; some to make them bigger, and others to break them apart. After we eat, our food is broken down into simple molecules before it is absorbed into our cells. Energy is released when organelles called <span class='key'>mitochondria</span> break simple sugars into molecules of carbon dioxide and water. This energy-releasing process is known as <span class='key'>cellular respiration</span>."); ?></p>
						<p class="grid_12"><?php echo _("In green plants, organelles called <span class='hl'>chloroplasts</span> absorb light energy and use it to combine parts of water and carbon dioxide molecules to make a simple sugar called glucose. This process, called <span class='hl'>photosynthesis</span>, also produces extra molecules of oxygen, which are released by the cell."); ?></p>
						<div class="grid_4 prefix_2">
							<img src="assets/6/cell_3.jpg" />
							<p class="ta-center"><?php echo _("Chloroplast"); ?></p>
							
						</div>
						<div class="grid_4">
							<img src="assets/6/cell_4.jpg" />
							<p class="ta-center"><?php echo _("Mitochondria"); ?></p>
						</div>
						<div class="clear"></div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Cells working together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

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
				document.location.href = "5.php";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('#buttons a.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});
				
				$('#screen2').fadeOut(function () {
					
					$('#screen1').fadeIn();

					window.location.hash = '';
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
