<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = plate-tectonics';
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

	<title><?php echo _("Plate Tectonics"); ?></title>

	<link rel="stylesheet" href="css/captionHoverEffects.css">
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
		h1 { color: #169F51; }
		
		.wrap { border-color: #7FC1E1; }
		.bg { background-image: url(assets/4/bg.jpg); overflow: hidden;}
		
		#screen2 { display: none; }

		#buttons .next { display: none; }
		
		ul.grid { padding: 0; margin: 0; }
		.grid li { float: left; width: 283px; padding: 10px; }
		.grid a { display: none !important; }
		.grid figcaption { padding: 10px; background-color: #FFEBB5; height: auto; color: black; }
		.grid figcaption span { font-size: 20px; }
		.fa, .lang-menu a { color: #1AA257; }
		
		.container_12 .grid_4 { width: 30.333%; }
		.cs-style-1 figcaption { width: 80%; }
		
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... plate tectonics"); ?></h1>
						<!-- <p class="grid_12"><?php echo _("There are all kinds of maps that show all kinds of things about the land. Maps can provide important and useful information about the geography of an area. Many of the maps we commonly use show streets and highways, cities and towns. A good example is the map below that shows the major cities and highways in the state of Colorado. If you wanted to take a trip from Denver to Durango, which route would you choose? There's more than one way to get there."); ?></p> -->
						<p class="grid_12"><?php echo _("There are all kinds of maps that show all kinds of things about the land. Maps can provide important and useful information about the geography of an area. Many of the maps we commonly use show streets and highways, cities and towns. A good example is the map below that shows the major cities and highways in the state of Colorado. If you wanted to take a trip from Denver to Durango, which route would you choose? There's more than one way to get there, isn't there? Which route do you think is best?"); ?></p>
						
						<iframe class="grid_8 prefix_2 suffix_2" width="550" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="	https://www.google.com/maps?f=d&amp;source=s_d&amp;hl=en&amp;mra=ltm&amp;ie=UTF8&amp;t=m&amp;ll=38.470859,-106.434832&amp;spn=2.533415,2.899952&amp;output=embed"></iframe><br />
					
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("There are other kinds of maps that are used for other purposes too. Hover on the images to know more."); ?></p>
						<ul class="grid cs-style-1">
						    <li class="grid_4">
						        <figure>
							    <img src="assets/4/a.jpg"/>
						
							    <figcaption>
						                <span><?php echo _("Some maps in the newspaper show what the weather is every day."); ?></span><a href="#"></a>
							    </figcaption>
							</figure>
						    </li>
						    <li class="grid_4">
						        <figure>
							    <img src="assets/4/b.jpg"/>
						
							    <figcaption>
						                <span><?php echo _("Some show where different kinds of landform features occur - like lakes, rivers, coasts, mountains, and plains."); ?></span><a href="#"></a>
							    </figcaption>
							</figure>
						    </li>
						    <li class="grid_4">
						        <figure>
							    <img src="assets/4/c.jpg"/>
						
							    <figcaption>
						                <span><?php echo _("Other maps show climate zones."); ?></span><a href="#"></a>
							    </figcaption>
							</figure>
						    </li>
						</ul>
						
						<div class="clear"></div> 
						
						<p class="grid_12"><?php echo _("The middle map above is a geography map that shows the major mountains, rivers, coasts, and plains in the United States. Can you find where you live on the map? What is the closest mountain or the closest ocean to where you live?"); ?></p>
					
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Reading a compass..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/toucheffects.js"></script>

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
				document.location.href = "3.php";
			} else if ($('#screen2').is(':visible')) {
				$('.back').fadeOut(); 

				$('.next').fadeOut(function() { 
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
