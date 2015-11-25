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
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>

		
		h1 { color: #61009e; }
				.wrap { border-color: #A23763; }
		#screen1 p:nth-last-child(2){
			margin-top: 2px;
		}
		.bg { background-image: url(assets/12/bg.jpg);overflow: hidden; }
		.colored-blue { color: #249ab8;}
		#screen2, #screen3 { display: none; }
		#graphDiv, #graphDiv2 { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
		#graphDiv img {  margin-top: 7px; height: 420px; width: 420px;}
		#graphDiv2 img {  margin-top: 7px; height: 420px;}
		.pet:hover, .pet2:hover {cursor: pointer;}
		.pet, .pet2 {width: 100%;padding: 0;display: block;margin: 20px auto 0; }
		.click, .click2 {text-align: center;font-size:22px;}
		#close, #close2 { background: white; color: #406468; display: block; margin: 0 auto; width: 65px; padding:10px; border-radius: 5px;margin-top:50px;text-align:center;}
		#close:hover, #close2:hover { cursor: pointer; }
		#buttons .next { display: none; }
		/*To solve overlap bug at the edges during magnification*/
		.small { display: block; width:400px; }
		.photosynth {
			position: absolute;
			top: 146px;
			font-size: 17px;
			width: 100%;
		}
		.digest {
			position: absolute;
			top: 146px;
			font-size: 17px;
			width: 100%;
		}
		.photosynth li{
			position: relative;
		}
		.digest li{position: relative;}

		.hl { color: #2561BA; }
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			#close,#close2{
				margin-top: 54px;

			}
		}
		#graphDiv img { width: 58%; }
		#graphDiv2 img { width: 50%;  }
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
		}
		.photosynth, .digest { direction: ltr; }

	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="graphDiv" >
				<ul class="photosynth" >
						<li style="top: 3px; left: 60%;"><?php echo _('Sunlight'); ?></li>
						<li style="top: 309px; left: 40%;"><?php echo _('Carbon Dioxide'); ?></li>
						<li style="top: 290px; left: 33%;"><?php echo _('Oxygen'); ?></li>
						<li style="top: 2px; left: 69%;"><?php echo _('Cuticle'); ?></li>
						<li style="top: 42px; left: 69%;"><?php echo _('Xylem'); ?></li>
						<li style="top: 57px; left: 69%;"><?php echo _('Phloem'); ?></li>
						<li style="top: 185px; left: 63%;"><?php echo _('Stoma'); ?></li>
						<li style="top: 178px; left: 54%;"><?php echo _('Veins'); ?></li>
						<li style="top: 92px; left: 22%;"><?php echo _('Spongy mesophyll'); ?></li>
						<li style="top: -3px; left: 22%;"><?php echo _('Palisade mesophyll'); ?></li>
						<li style="top: -88px; left: 23%;"><?php echo _('Epidermis'); ?></li>


					</ul> 
					<span id="close"><?php echo _('Close!'); ?></span>
					<img class="small" src="assets/12/leaf_anatomy2.jpg" width="200"/>
				 	
			</div>
			<div id="graphDiv2" >
				<ul class="digest" >
						<li style="top: 7px; left: 26%;"><?php echo _('Oral Cavity'); ?></li>
						<li style="top: 23px; left: 26%;"><?php echo _('Mouth'); ?></li>
						<li style="top: 22px; left: 27%;"><?php echo _('Submaxillary and'); ?></li>
						<li style="top: 18px; left: 27%;"><?php echo _('Sublingual Glands'); ?></li>
						<li style="top: 17px; left: 27%;"><?php echo _('Liver'); ?></li>
						<li style="top: 32px; left: 26%;"><?php echo _('Gall Bladder'); ?></li>
						<li style="top: 38px; left: 27%;"><?php echo _('Duodenum'); ?></li>
						<li style="top: 65px; left: 26%;"><?php echo _('Transverse Colon'); ?></li>
						<li style="top: 63px; left: 26%;"><?php echo _('Ascending Colon'); ?></li>
						<li style="top: 76px; left: 26%;"><?php echo _('Lleum(Small Intestine)'); ?></li>
						<li style="top: 85px; left: 27%;"><?php echo _('Caecum'); ?></li>
						<li style="top: 96px; left: 27%;"><?php echo _('Vermiform Appendix'); ?></li>
						<li style="top: -269px; left: 62%;"><?php echo _('Parotid Gland'); ?></li>
						<li style="top: -251px; left: 66%;"><?php echo _('Pharnyx'); ?></li>
						<li style="top: -231px; left: 63%;"><?php echo _('Oesophagus'); ?></li>
						<li style="top: -209px; left: 66%;"><?php echo _('Stomach'); ?></li>
						<li style="top: -174px; left: 66%;"><?php echo _('Pancreas'); ?></li>
						<li style="top: -168px; left: 66%;"><?php echo _('Jejunum'); ?></li>
						<li style="top: -149px; left: 59%;"><?php echo _('Descending Colon'); ?></li>
						<li style="top: -132px; left: 67%;"><?php echo _('Rectum'); ?></li>
						<li style="top: -111px; left: 68%;"><?php echo _('Anus'); ?></li>

				</ul>
					<span id="close2"><?php echo _('Close!'); ?></span>
					<img class="small" src="assets/12/digestive2.jpg" width="200"/>
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about… basic cells"); ?></h1>					
						<p class="grid_12"><?php echo _("Many plants and animals are large and complex enough to need special groups of cells that can perform important functions. These groups of specialized cells, called <span class='hl'>tissues</span>, work together on such tasks as digestion, reproduction, protection, and even responding to environmental changes."); ?></p>						
						<p class="grid_7">
							<?php echo _("These specialized tissues are often grouped together into structures called <span class='key'>organs</span>. A common example is the leaf of a green plant. A leaf is  made up of many tissues, all important to helping it complete its job: gathering solar energy and storing it in a form nearly all living things can use. Some leaf tissues protect it. Others allow air to flow into and out of the leaf. Some transport water and food, while another provides storage space. A very important set of cells actually carries on photosynthesis, making sugar from carbon dioxide and water."); ?>
						</p>

						<div class="grid_5 image">
							<p class="grid_9 prefix_3 enlarge"><?php echo _("Click to enlarge"); ?> </p>
							<img class="pet" src="assets/12/leaf_anatomy.jpg" />
						</div>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("In many cases, organs are even grouped together into systems.  The human digestive system includes many different types of tissues. Some make digestive enzymes, some move food through the system, while others absorb and store food. These tissues make up such organs as the stomach, liver, pancreas, and intestines. Animal food processing requires that all of these tissues, in all of these organs, work smoothly as a unit."); ?></p>						
						<p class="grid_8">
							<?php echo _("This complex system breaks down complicated fat, carbohydrate, and protein molecules into their smallest parts, which can then be reassembled in cells to build the fats, carbohydrates, and proteins required by humans. Other human systems also involve many organs made up of many tissues to do their jobs. These systems of tissues organized into organs, organized further into systems, work in all types of plants and animals."); ?></p>
						<div class="grid_4 image">
							<p class="grid_9 prefix_3 enlarge"><?php echo _("Click to enlarge"); ?></p>
							<img class="pet2" src="assets/12/3.jpg" />
						</div>
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


	<section id="preloader"><section class="selected"><strong><?php echo _("Tissues grouped together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 2;
		$('.photosynth').hide();
		$('.digest').hide();
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
		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
			$('.photosynth').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});
		$('img.pet2').click(function() {
			$('#graphDiv2').fadeIn();
			$('.digest').fadeIn();
		});
		$('#close2').click(function() {
			$('#graphDiv2').fadeOut();
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
