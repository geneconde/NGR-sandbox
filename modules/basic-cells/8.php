<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../../session.php";
	$_SESSION['cmodule'] = 'basic-cells';
	require_once '../../verify.php';
	require_once "locale.php";

	if($user->getType() == 2) $uf->updateStudentLastscreen(8, $_SESSION['smid']);
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
		.bg { background-image: url(assets/8/bg.jpg); overflow: hidden;}

		#screen2, #screen3 { display: none; }
		#screen2 img{ height: 298px; width: 100%}
		#buttons .next { display: none; }
		.image { width: 100%; height: 200px;}
		.image-large { width: 150%; height: 330px;}
		ul.cell-parts 
		{
			direction: ltr;
			position: relative;
			top: -308px;
			margin-bottom: -300px;
		}
		ul.cell-parts li {
			font-size: 12px;
			position: relative;
			z-index: 101;
		}
		/*Lets create the magnifying glass*/
		.magnify {width: 200px; margin: 50px auto; position: relative; z-index: 99;}
		.large {
			width: 190px; height: 190px;
			position: absolute;
			border-radius: 100%;
			
			/*Multiple box shadows to achieve the glass effect*/
			box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
			0 0 7px 7px rgba(0, 0, 0, 0.25), 
			inset 0 0 40px 2px rgba(0, 0, 0, 0.25);
			
			/*Lets load up the large image first*/
			background: url('assets/8/cells_4.jpg') no-repeat;
			
			/*hide the glass by default*/
			display: none;
		}
	

		/*To solve overlap bug at the edges during magnification*/
		.small { display: block; }
		@media screen and (max-width: 1250px ){
			.lang-menu{background-color: #A23763; }
			.lang-menu a{background-color: #A23763; }
			#buttons{ background-color: #A23763; }
			.bg{ background-size:  100% calc(100% - 68px)!important; background-position: 0 34px; }
		}
		@media screen and (max-width: 960px) {
			#screen2 p{
				 font-size: 18px;
			}
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
						
						<div class="grid_12">
							<img style="float: right; width: 40%" src="assets/8/cells_1.jpg" />
							<p><?php echo _("As we said before, cell membranes are responsible for keeping a cell in a sort of balance with its environment. Whatever changes occur outside a cell, the membrane has the job of controlling what enters and leaves. The membrane isn’t solid. It’s a constantly changing structure made of millions of fatty molecules that form two layers, pointing their heads in opposite directions. A wide variety of different proteins float among the fatty molecules, allowing the cell to interact with other cells and serving as pathways for many substances to enter or leave the cell."); ?></p>						
						</div>
						
						<div class="clear"></div>
						<p class="grid_12"><?php echo _("Diffusion and osmosis move small molecules, such as water, across the membrane, always from areas where they are concentrated to areas of lesser concentration. Sometimes, though, it’s necessary for larger molecules to enter or leave the cell, regardless of concentration or whether they are small enough to move through on their own."); ?></p>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("Some membrane proteins are able to use energy to change their shapes, capturing other molecules and pulling them through the membrane. They are called pump proteins, and this type of movement is called active transport."); ?></p>
						<p class="grid_12"><?php echo _("Other proteins, called carrier proteins, fold in the shape of tubes, allowing some large molecules to diffuse through the membrane. This type of transport, requiring no energy, is called facilitated diffusion."); ?></p>
						<div class="grid_12">

							<!-- <div class="magnify grid_12"> -->
							<div class="grid_12">
								<!-- <div class="large"></div> -->
								<!-- <img class="small" src="assets/8/cells_3.jpg" width="300" />	 -->
								<img src="assets/8/cells_3.jpg"/>						
							</div>
							<ul class="cell-parts">
								<li style="left: 10%; top: 10px;"><?php echo _("Protein channel"); ?></li>
								<li style="left: 14%; top: 20px;"><?php echo _("Globular protein"); ?></li>
								<li style="left: 30%; top: 4px;"><?php echo _("Glycoprotein"); ?></li>
								<li style="left: 70%; top: -45px;"><?php echo _("Carbohydrate"); ?></li>
								<li style="left: 76%; top: -45px;"><?php echo _("Hydrophilic head"); ?></li>
								<li style="left: 83%; top: 60px;"><?php echo _("Phospholipid bilayer"); ?></li>
								<li style="left: 80%; top: 90px;"><?php echo _("Phospholipid molecule"); ?></li>
								<li style="left: 8%;top: 95px;"><?php echo _("Cholesterol"); ?></li>
								<li style="left: 12%; top: 102px;"><?php echo _("Glycolipid"); ?></li>
								<li style="left: 17%; top: 110px;"><?php echo _("Peripheral protein"); ?></li>
								<li style="top: 45px; left: 34%;"><?php echo _("Integral protein"); ?></li>
								<li style="top: 84px; left: 36%;"><?php echo _("Filaments of cytoskeleton"); ?></li>
								<li style="top: 55px; left: 54%;"><?php echo _("Alpha-helix protein"); ?></li>
								<li style="top: 38px; left: 66%;"><?php echo _("Hydrophobic tails"); ?></li>
								<li style="top: -7px; left: 49%;"><?php echo _("Surface protein"); ?></li>
							</ul>

							
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="7.php" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>


	<section id="preloader"><section class="selected"><strong><?php echo _("balancing the environment..."); ?></strong></section></section>

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
				document.location.href = "7.php";
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

	<script>
	var native_width = 0;
	var native_height = 0;

	/*$(document).ready(function() {
		//Now the mousemove function
		$(".magnify").mousemove(function(e){

			 var pageCoords = "( " + event.pageX + ", " + event.pageY + " )";
 			 var clientCoords = "( " + event.clientX + ", " + event.clientY + " )";

 			 console.log(pageCoords);
			//When the user hovers on the image, the script will first calculate
			//the native dimensions if they don't exist. Only after the native dimensions
			//are available, the script will show the zoomed version.
			if(!native_width && !native_height)
			{
				//This will create a new image object with the same image as that in .small
				//We cannot directly get the dimensions from .small because of the 
				//width specified to 200px in the html. To get the actual dimensions we have
				//created this image object.
				var image_object = new Image();
				image_object.src = $(".small").attr("src");
				
				//This code is wrapped in the .load function which is important.
				//width and height of the object would return 0 if accessed before 
				//the image gets loaded.
				native_width = image_object.width;
				native_height = image_object.height;
			}
			else
			{
				//x/y coordinates of the mouse
				//This is the position of .magnify with respect to the document.
				var magnify_offset = $(this).offset();
				//We will deduct the positions of .magnify from the mouse positions with
				//respect to the document to get the mouse positions with respect to the 
				//container(.magnify)
				var mx = e.pageX - magnify_offset.left;
				var my = e.pageY - magnify_offset.top;
				
				//Finally the code to fade out the glass if the mouse is outside the container
				if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
				{
					$(".large").fadeIn(100);
				}
				else
				{
					$(".large").fadeOut(100);
				}
				if($(".large").is(":visible"))
				{
					//The background position of .large will be changed according to the position
					//of the mouse over the .small image. So we will get the ratio of the pixel
					//under the mouse pointer with respect to the image and use that to position the 
					//large image inside the magnifying glass
					var rx = Math.round(mx/$(".small").width()*native_width - $(".large").width()/2)*-1;
					var ry = Math.round(my/$(".small").height()*native_height - $(".large").height()/2)*-1;
					var bgp = rx + "px " + ry + "px";
					
					//Time to move the magnifying glass with the mouse
					var px = mx - $(".large").width()/2;
					var py = my - $(".large").height()/2;
					//Now the glass moves with the mouse
					//The logic is to deduct half of the glass's width and height from the 
					//mouse coordinates to place it with its center at the mouse coordinates
					
					//If you hover on the image now, you should see the magnifying glass in action
					$(".large").css({left: px, top: py, backgroundPosition: bgp});
				}
			}
		})
	})*/
	</script>

	<script src="js/jpreloader.js"></script>

	<?php include 'setlocale.php'; ?>
</body>
</html>
