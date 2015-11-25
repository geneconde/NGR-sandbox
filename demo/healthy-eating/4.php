
<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../tempsession.php";
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

	<title><?php echo _("Healthy Eating"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #adaf00; }
		span.key { color: #249ab8;}		
		.wrap { border-color: #EFFDE4; 
			border-left: 1px dashed #1B4A16;
			border-right: 1px dashed #1B4A16;
		}
		.bg { background-image: url(assets/4/bg.jpg); overflow: hidden; }
		.enlarge { text-align: center; margin-bottom: -3px;}
		#screen2, #screen3 { display: none; }

		#buttons .next { display: none; }
		/*To solve overlap bug at the edges during magnification*/
		.small { display: block; width:400px; }
		#graphDiv { display: none; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;}
		#graphDiv img { width: 92%; margin-top: 7px; }
		.pet:hover {cursor: pointer;}
		.pet {width: 100%;padding: 0;display: block;margin: 20px auto 0;}
		.click {text-align: center;font-size:22px;}
		#close { background: white; color: #406468; display: block; margin: 0 auto; width: 100px; padding:10px; border-radius: 5px;margin-top:20px;text-align:center;}
		#close:hover { cursor: pointer; }
		.rslides img { 
		   width: 97%;
		   height: 188px;}
		.fleft { float: left;}
		.fright { float: right;}
		.slide { position: relative; }

		.rslides { 
			width: 40%; 
			position: relative;
		}

		.rslides2 li {
			width: 100%;
		}
		.rslides2 {
			margin-right: 10px;
		}
		.next1, .prev { position: absolute; top: 36% }

		.cycle-slideshow {
			width: 81%;
			margin: 20px auto 0;
			height: 300px;
			border: 1px solid rgb(219, 219, 219);
			-webkit-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			-moz-box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			box-shadow: 9px 10px 20px -6px rgba(0,0,0,0.75);
			background-color: #eff4d1;

		}

		.next1 { right: 43px; cursor: pointer;}
		.prev { left: 43px;  cursor: pointer;}
		.center { text-align: center;}

		.group {
			position: absolute;			
			top:12%;
			right: 3%;
			padding: 20px;
			}
		.group li {
			padding: 2px 10px;			
			font-size: 17px;
		}
		.title-popup { 
			margin: 0 auto; 
			width: 100%; 
			color: black; 
			text-align: center;
			position: absolute;
			top: 100px;		

		}
		.mt20{margin-top: 20px;}
		.mt30{margin-top: 30px;}
		.legends { width: 5%; min-height: 50px;}
		.legend_red { background: red; }
		
		.group li:before{
			content: "■ ";
			font-size: 25px;
			vertical-align: baseline;
		}
		.group li:first-child:before{
			color: #FF9F00;
		}
		.group li:nth-child(2):before{
			color: #C4E975;
		}
		.group li:nth-child(3):before{
			color: #FF7074;
		}
		.group li:nth-child(4):before{
			color: #FFF66B;
		}
		.group li:nth-child(5):before{
			color: #ADE5FC;
		}
		.group li:nth-child(6):before{
			color: #6965B2;
		}

		<?php if($language == 'es_ES') : ?>
			p { line-height: 30px; }
		<?php endif; ?>

		<?php if($language == 'ar_EG') : ?>
			
		<?php endif; ?>

		@media only screen and (max-width: 1250px) {
			#close {margin-top: 50px;}
			.title-popup { top: 140px;}
		}

		@media only screen and (max-width: 790px) {
			.cycle-slideshow {
				height: 315px;
			}
		}

		<?php if ($language == 'es_ES') : ?>

			.cycle-slideshow p { line-height: 25px;}

			@media only screen and (max-width: 800px) {
				.cycle-slideshow {
					height: 270px;
				}
			}
			
			@media only screen and (max-width: 780px) {
				#screen1 p { line-height: 28px; }
			}
			
			@media only screen and (max-width: 876px) {
				#screen2 p { line-height: 25.5px; }
			}

		<?php endif; ?>
		@media screen and (max-width: 1250px) { .bg { background-size: 100% calc(100% - 65px)!important; background-position: 0 34px; } }
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div id="graphDiv" >
					<span id="close"><?php echo _('Close me!'); ?></span>
					<div class="title-popup"><span><?php echo _('Five Food Group'); ?></span></div>
					<img class="small" src="assets/4/pyramid-big.jpg" width="200"/>
					<ul class="group">
						<li><span><?php echo _("Grain Group"); ?></span></li>
						<li><span><?php echo _("Vegetables Group"); ?></span></li>
						<li><span><?php echo _("Fruit Group"); ?></span></li>
						<li><span><?php echo _("Oil Group"); ?></span></li>
						<li><span><?php echo _("Milk Group"); ?></span></li>
						<li><span><?php echo _("Meat and Beans"); ?></span></li>
						
					</ul>
			</div>
			<div class="container_12 clearfix">
				<div class="grid_12">
				
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... healthy eating"); ?></h1>
						<p class="grid_8"><?php echo _("The things you eat every day make up your <span class='key'>diet</span>. A healthy diet contains different kinds of foods. Scientists who study <span class='key'>healthy eating</span> habits came up with the <span class='key'>Food Guidance System</span> that tells you what food and how much of it you should eat to stay healthy. You can see this in MyPyramid, a <span class='key'>food pyramid</span> of the five food groups. This diagram shows you how to find a balance between your food intake and physical activity."); ?></p>
						<div class="grid_4">
							<p class="grid_12 enlarge"><?php echo _("Click to enlarge"); ?></p>
							<img class="small pet" src="assets/4/pyramid.jpg" />
						</div>
						<div class="clear"></div>
						<p class="grid_12"><?php echo _("Let's take a closer look at the pyramid. Each of the five food groups (Grain, Vegetable, Fruit, Milk, and Meat & Beans) is identified by a unique color. The person running up the stairs reminds you to be physically active every day. All the colors show you to eat foods from every food group every day. Some of the stripes are larger because you should eat more foods from the food groups with the wider stripes. The colored stripes are wider at the bottom of the pyramid, showing you that every food group has foods we should eat more than others. You should also choose healthier foods from each food group."); ?></p>
						
					</div>
					<div id="screen2" class="screen">
						<div class="grid_12">
							
								<ul class="rslides2 fright">
									<li><img src="assets/4/cereal.jpg"><span class="caption"></span></li>
									<li><img src="assets/4/grains.jpg"><span class="caption"></span></li>
									<li><img src="assets/4/corn2.jpg"><span class="caption"></span></li>
								</ul>
								<p><?php echo _("Grains are divided into 2 subgroups: <span class='key'>whole grains</span> and refined grains. Whole grains contain the entire grain kernel - the bran, germ, and endosperm. Examples include whole-wheat flour, oatmeal, whole cornmeal, and brown rice. <span class='key'>Refined grains</span> have been milled, a process that removes the bran and germ. This is done to give grains a finer texture and improve their shelf life, but it also removes dietary fiber, iron, and many B vitamins. Some examples of refined grain products are white flour, white bread, and white rice."); ?></p>
						</div>
						<div class="clear"></div>
						<div class="grid_12">
							<ul class="rslides2 fleft">
									<li><img src="assets/4/fish-fillet2.jpg"><span class="caption"></span></li>
									<li><img src="assets/4/lechon.jpg"><span class="caption"></span></li>
									<li><img src="assets/4/food-plate.jpg"><span class="caption"></span></li>
							</ul>
							<p><?php echo _("Food in the meat and bean group offers the body protein. All foods made from meat, poultry, fish, dry beans or peas, eggs, nuts, and seeds are considered part of this group. Dry beans and peas are part of this group as well as the vegetable group. Most meat and poultry choices should be lean or low fat. Fish, nuts, and seeds contain healthy oils, so choose these foods frequently instead of meat or poultry."); ?></p>	
						</div>
						<div class="clear"></div>
					</div>

					<div id="screen3" class="screen">
						<p class="grid_12"><?php echo _("Browse through the slides below by clicking the left and right arrows.") ?></p>
  
						<div class="grid_12 slide">
							<div class="cycle-slideshow" data-cycle-fx="fade" data-cycle-slides="> div" data-cycle-timeout="" data-cycle-prev=".prev" data-cycle-next=".next">
								<div>              
									<p class="center"><?php echo _("Grain Group: Make half your grains whole"); ?></p>
										<div class="grid_4">
										<img src="assets/4/grain-group.jpg" />
									</div>
									<div class="grid_8">
											<p><?php echo _("Eat at least 3 oz. of whole-grain cereals, bread, crackers, rice, or pasta every day."); ?></p>
									</div>
								</div>
								<div>              
									<p class="center"><?php echo _("Vegetable Group: Vary your veggies"); ?></p>
										<div class="grid_4">
										<img src="assets/4/vegetable-group.jpg" />
									</div>
									<div class="grid_8">
											<p><?php echo _("Eat more dark green veggies like broccoli, spinach and other dark leafy greens."); ?></p>
											<p><?php echo _("Eat more orange vegetables like carrots and sweet potatoes."); ?></p>
											<p><?php echo _("Eat more dry beans and peas like pinto beans, kidney beans and lentils."); ?></p>
									</div>
								</div>
								<div>
									<p class="center"><?php echo _("Fruit Group: Focus on fruits"); ?></p>
									<div class="grid_4">
										<img src="assets/4/fruit-group.jpg" />
									</div>
									<div class="grid_8">
											<p><?php echo _("Eat a variety of fruits."); ?></p>
											<p><?php echo _("Choose fresh, frozen, canned or dried fruit."); ?></p>
											<p><?php echo _("Go easy on fruit juices."); ?></p>
									</div>
								</div>

								<div>              
									<p class="center"><?php echo _("Milk Group: Get your calcium-rich food"); ?></p>
										<div class="grid_4">
										<img src="assets/4/milk-group.jpg" />
									</div>
									<div class="grid_8">
											<p><?php echo _("Go low fat or fat-free when you choose milk, yogurt, and other milk products."); ?></p>
											<p><?php echo _("If you don't or can't consume milk, choose lactose-free products or other calcium sources such as fortified foods and beverages."); ?></p>						
									</div>
								</div>

								<div>              
									<p class="center"><?php echo _("Meat & Beans Group: Go lean with protein"); ?></p>
										<div class="grid_4">
										<img src="assets/4/meat-and-bean-group.jpg" />
									</div>
									<div class="grid_8">
											<p><?php echo _("Choose low fat or lean meat and poultry."); ?></p>
											<p><?php echo _("Bake it, broil it or grill it."); ?></p>
											<p><?php echo _("Vary your protein routine - choose more fish, beans, peas, nuts and seeds."); ?></p>
									</div>
								</div>
							</div>

							<div class="prev"><img src="assets/4/prev.png"></div>
							<div class="next1"><img src="assets/4/next.png"></div>
						</div>
						<br/>
						<p class="grid_8 mt30"><?php echo _("Oils come from many different plants and from fish. Some common oils are canola oil, corn oil, cottonseed oil, olive oil, and sunflower oil. A number of foods are naturally high in oils, like nuts, olives, some fish, and avocados."); ?></p>
						<div class="grid_4 mt20"><img src="assets/4/olive-oil.jpg" /></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Looking at the Pyramid..."); ?></strong></section></section>

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
   				 prev: '.prev'
				});

	</script>
	<script>
		var hash = window.location.hash.slice(1);
		var screenCount = 3;

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

		$('img.pet').click(function() {
			$('#graphDiv').fadeIn();
		});
		$('#close').click(function() {
			$('#graphDiv').fadeOut();
		});

		$('.back').click(function(){
			if ($('#screen1').is(':visible')) {
				document.location.href = "3.php#answer";
			} else if ($('#screen2').is(':visible')) {
				$('#screen2').fadeOut(function () {
					$('#screen1').fadeIn();

					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('.back').fadeOut(); 
				$('.next').fadeOut(function() { 
					$('.readmore').fadeIn(); 
					$('.back').fadeIn(); 
				});

				$('#screen3').fadeOut(function () {
					$('#screen2').fadeIn();

					window.location.hash = '#screen2';
				});
			}
		});

		$('.readmore').click(function(){
			if ($('#screen1').is(':visible')) {
				$('#screen1').fadeOut(function() {
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});
			} else if ($('#screen2').is(':visible')) {

				$('.back').fadeOut();

				$('.readmore').fadeOut(function() { 
					$('.next').fadeIn(); 
					$('.back').fadeIn();
				});

				$('#screen2').fadeOut(function() {
					$('#screen3').fadeIn();
					window.location.hash = '#screen3';
				});
			}
		});
	</script>

	<script src="js/jpreloader.js"></script>
	<?php include 'setlocale.php'; ?>
</body>
</html>
