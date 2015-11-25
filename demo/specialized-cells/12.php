<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(10, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Specialized Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/modalcomponents.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #660066; font-size: 33px; }
		p { font-size: 24px; color: #000; margin: 0px;}
		
		.wrap { border-color: #D7F45E; }
		.bg { background-image: url(assets/12/bg.jpg); }
		.key {color:#ff005a;}

		#md_p {padding-right:370px;}
		#screen1 #md_p1 {margin-top: 10px}
		#screen1 img { margin-top: 16px; float:right; height: 260px; width: 350px; border: 0px solid #000;}

		#screen2 { display: none; }
		#screen2 #md_scrnTop {padding-top:10px ;}
		#md_scrn2p {margin-right:470px; margin-top:10px;} 

		#s2a { position: relative; }
		#screen2 img { margin-top: 16px; float:right;width: 456px; height: 348px; border: 2px solid #000;}
		#s2a h4 { position: absolute; font-size: 18px; z-index: 2; text-align: center; line-height: 0.5; color: #000; }

		#s2a h4:first-child { right: 333px; top: 99px; }
		#s2a h4:nth-child(2) {
		    right: 393px;
    		top: 210px;
		    width: 60px;
		    line-height: 20px;
		}
		#s2a h4:nth-child(3) {
		    right: 372px;
		    top: 287px;
		    width: 57px;
		    line-height: 20px;
		}
		#s2a h4:nth-child(4) {
		    right: 70px;
		    top: 58px;
		}
		#s2a h4:nth-child(5) {
		    right: 18px;
		    top: 80px;
		}
		#s2a h4:nth-child(6) {
		    right: 40px;
		    top: 118px;
		    width: 36px;
		    line-height: 20px;
		}
		#s2a h4:nth-child(7) {
		    right: 6px;
		    top: 180px;
		    width: 72px;
		    line-height: 1;
		}
		#s2a h4:nth-child(8) {
		    right: 1px;
		    top: 241px;
		    width: 90px;
		    line-height: 20px;
		}
		#s2a h4:nth-child(9) {
		    right: 146px;
		    top: 0px;
		    font-size: 24px;
		}
		#s2a h4:nth-child(10) {
		    right: 5px;
		    top: 302px;
		}
		#buttons .next { display: none; }

		@media screen and (max-width: 1250px ){
			.bg{ 	background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; 
					overflow: hidden;
			}
			#buttons { background-color: #468853 !important; }
			#screen2 #md_scrnTop, #screen2 #md_scrn2p {
			    line-height: 28px;
			}
		}
		@media (max-width: 960px){ #buttons { background-color: #468853; } }

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1><?php echo _("More big ideas about... specialized cells"); ?></h1>
						<img src="assets/12/1.jpg"  id = "md_img1">
						<p id = "md_p"><?php echo _("All people have a lot in common. One thing we all have in common is that we look a lot like our mothers and fathers. None of us is an exact copy of either one of them, but we share many of their characteristics. Offspring are the products of both of their parents. When a pair of cells merges, one from the mother and one from the father, an embryo is formed. Under the right circumstances, that <span class=key>embryo</span> develops into a fetus and, much later, a baby is born."); ?></p>
						<p  id = "md_p1"><?php echo _("This seems like a simple process until we consider cell structures. The information that gives all organisms their inherited characteristics is carried on cellular structures called <span class=key>chromosomes</span>. Chromosomes are made of DNA and are found in a cell's nucleus."); ?></p>
						<p><?php echo _("Every individual receives a copy of each kind of chromosome from each parent. That means that all normal cells have two copies of each bit of inherited information."); ?></p>
					</div>
					
					<div id="screen2" class="screen">
						<p  id = "md_scrnTop"><?php echo _("The cells that carry this information are called <span class='key'>sex cells</span> or <span class='key'>gametes</span>. Female gametes are <span class='key'>eggs</span>. Male gametes are <span class='key'>sperm</span>. The small cells in the illustration are sperm cells. Sperm are made in testes, and consist of a head, a mid piece, and a tail. The head carries a half set of the father's chromosomes. The mid piece contains mitochondria capable of releasing large amounts of energy. The tail uses that energy to propel the sperm forward until it encounters an egg cell."); ?></p>
						<div id="s2a">
							<h4><?php echo _("Acrosome"); ?></h4>
							<h4><?php echo _("Egg nucleus"); ?></h4>
							<h4><?php echo _("Cytoplasm of ovum"); ?></h4>
							<h4><?php echo _("Sperm nucleus"); ?></h4>
							<h4><?php echo _("Cortical granules"); ?></h4>
							<h4><?php echo _("Cytoplasm of ovum"); ?></h4>
							<h4><?php echo _("Zona Pellucida"); ?></h4>
							<h4><?php echo _("Follicle Cell"); ?></h4>
							<h4><?php echo _("FERTILIZATION"); ?></h4>
							<h4><?php echo _("First polar body"); ?></h4>
							<img src="assets/12/2.jpg"  class='image_right image_size2'>						
						</div>
						<p id = "md_scrn2p" class = "space"><?php echo _("As the image shows, egg cells are much larger than sperm cells. Egg cells are produced in <span class='key'>ovaries</span>, and contain a half set of the mother's chromosomes as well as a large store of food for the development of an embryo after <span class='key'>fertilization</span>. While males are able to produce millions of sperm cells each day, females usually produce only a single egg cell each month during their reproductive years."); ?></p>

					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="13.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Development of an embryo..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
	

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
				document.location.href = "11.php";
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
		
	<script src="js/responsiveslides.js"></script>
	<script>
		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 1000,
			timeout: 5000
		});
	</script>
</body>
</html>
