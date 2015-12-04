<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = how-light-behaves';
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

	<title><?php echo _("Specialized Cells"); ?></title>

	<link rel="stylesheet" href="css/responsiveslides.css">
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
		h1 { color: #d62b00; }
		#md_scrn1 {margin-left: 1%; margin-right: 1%;}
		.wrap { border-color: #DAE980; }
		.bg { background-color: #fff; overflow: hidden; background-image: url(assets/15/bg.jpg);}
		.key {color:#ff005a;}
		.grid_Disp {margin-left: 1%; margin-right: 1%;}

		#screen2 { display: none; }
		p { margin-top: 0px; }
		@media screen and (max-width: 1250px ){
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; overflow: hidden; }
			.grid_Disp { margin-bottom: 0; line-height: 28px; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12" id = "md_scrn1"><?php echo _("Summarizing ideas about... specialized cells"); ?></h1>

						<p class="space grid_Disp">
						<?php echo _("All living things are made of <span class='key'>cells</span>. Some cells are very large. Some cells are very small. Some are simple and some are extremely complex. Just as living things are amazingly diverse, so are the cells they are made of."); ?>
						</p>
						<p class="space grid_Disp">
						<?php echo _("Even within individual organisms, the diversity of cells is remarkable. In humans, as in other species, different types of cells are highly specialized in order to perform very specific functions. Working together, these cells are assembled into tissues. <span class='key'>Tissues</span> are, in turn, assembled into <span class='key'>organs</span>, and organs are grouped into <span class='key'>systems</span> to perform the necessary functions of life."); ?>
						</p>
						<p class="space grid_Disp">
						<?php echo _("Different systems are made of different types of cells, all sharing some of the same characteristics, but each having unique features that help it do its job. Some examples of specialized systems in humans are muscular, digestive, nervous, circulatory and reproductive."); ?>
						</p>
						<p class="space grid_Disp">
						<?php echo _("Skeletal muscle cells are attached to bones and move the bones when they contract. Smooth muscle cells are found in the digestive tract and in many glands. When they contract, food is moved through the digestive process and substances are passed out of glands as needed. Cardiac muscle cells make up the heart and propel blood throughout the circulatory system."); ?>
						</p>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12 grid_Disp"><?php echo _("Sensory nerve cells detect such environmental information as touch, temperature, pain, heat, taste, smell, sound and light. They transmit this information to the brain where interneurons interpret them based on the way they relate to patterns already formed by experiences. Motor <span class='key'>neurons</span> then send messages to muscles causing movement."); ?>
						</p>
						<p class="grid_12 grid_Disp"><?php echo _("Cells of the circulatory systems are either red or white. Red blood cells carry oxygen from the lungs to body tissues, and carbon dioxide from body tissues to the lungs. White blood cells are much larger than red cells and make up the body's immune system. <span class='key'>Lymphocytes</span> protect against specific types of bacteria and viruses. Other white cells respond to many other types of threats, but not to specific disease agents."); ?>
						</p>
						<p class="grid_12 grid_Disp"><?php echo _("Reproductive cells are known as gametes. Female gametes, called <span class='key'>egg cells</span>, are made in ovaries. Male gametes, or sperm, are made in testes. Both types of sex cells have only a half set of chromosomes, one of each type. When they merge at fertilization, a new embryo has a complete set of chromosomes."); ?>
						</p>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="16.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>


	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 2;
		$('.next').fadeOut();

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
				document.location.href = "14.php#task";
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
    <script type="text/javascript">
		$(".rslides").responsiveSlides({
		    auto: true,
		    pager: false,
		    nav: false, /* Set to true if the next/previous controls are needed */
		    speed: 400
		});

    </script>
    
	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
