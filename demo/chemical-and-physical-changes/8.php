<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = chemical-and-physical-changes';
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

	<title><?php echo _("Chemical and Physical Changes"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/responsiveslides.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
	<?php endif; ?>

	<style>
		h1 { color: #EB6966; font-size: 31px; }
		
		#buttons .next, #screen2 { display: none; }
		
		.wrap { border-color: #FFF58B; }
		.bg { background-image: url(assets/8/bg.jpg); overflow: hidden;  background-size: 100% 100% !important;}

		.baking {width: 20%; height:10%; margin-top: 10px;}
		.flow {width: 6%; height:10%; margin-top: 10px;}

		#screen1 div { float: right; margin-top: 10px; font-size: 24px;}
		
		.slider-container { position: relative; width: 300px; height: 280px; background: url(assets/8/bg.png); background-size: 100% 100%; background-repeat: no-repeat; margin: 0 9.5%; height: 490px; }

		.rslides { width: 100%; height: 100%; }
		
		.rslides_nav { position: absolute; }
		.slider-container .prev { left: -100px; top: 160px;  height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/next2.png)  right no-repeat;}
		.slider-container .next { right: -95px; top: 160px; height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/prev2.png)  right no-repeat;}
		
		.rslides li img { width:150%; }
		.rslides li { padding: 50px; width: 595px; }
		#rslides1_s1 table img { width:105%; }
		
		<?php if ($language == 'es_ES') { ?>
			.caption { color: #000; font-size: 22px; }
			#rslides1_s1 .caption { color: #000; font-size: 21px; }
		<?php } else { ?>
		.caption { color: #000; font-size: 24px; }
			#rslides1_s1 .caption { color: #000; font-size: 21px; }
		
		<?php } ?>

		.rslides li{ width: 82%;}
		.rslides li div:not(.clear) { width: 20%; float: left; margin: 0 6% 10px; }
		.rslides li div span { text-align: center; display: block; font-size: 20px; color: #7844D7; margin-left: 10px;}
		#screen2 table{ margin: 5px auto;}
		table td { font-size: 18px; text-align: center; padding: 7px; background: #fff; border: solid #7844D7 1px;}

		@media screen and (max-width: 1250px){
			.lang-menu{background-color: #94E7FC; }
			.lang-menu a{background-color: #94E7FC; }
			#buttons{ background-color: #94E7FC; }
			.bg{ background-size:  100% calc(100% - 65px)!important; background-position: 0 34px; }
			.caption{font-size: 18px !important; }
			.slider-container .prev { left: -125px; top: 160px;  height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/next2_s.png)  right no-repeat;}
			.slider-container .next { right: -75px; top: 160px; height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/prev2_s.png)  right no-repeat;}
			#screen1 .grid_12 {font-size: 22px;}
			.baking {width: 18%; height:10%; margin-top: 40px;}
			.flow {width: 7%; height:10%; margin-top: 40px;}
			.container_12 .grid_10 {height: 420px !important;}
			#rslides1_s0 {margin-top: -20px; margin-left: -15px;}
			#rslides1_s1 {margin-top: -20px; margin-left: -15px;}
			#rslides1_s1 table img { width:105%; }
		}
		@media screen and (max-width: 960px){
			.caption{font-size: 16px !important; }
			table td { font-size: 16px; }
			.slider-container .prev { left: -125px; top: 160px;  height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/next2_s.png)  right no-repeat;}
			.slider-container .next { right: -75px; top: 160px; height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/prev2_s.png)  right no-repeat;}
			#screen1 .grid_12 {font-size: 20px;}
			.baking {width: 20%; height:10%; margin-top: 40px;}
			.flow {width: 5%; height:10%; margin-top: 40px;}
			.container_12 .grid_10 {height: 430px !important;}
			#rslides1_s0 {margin-top: -0px;}
			#rslides1_s1 {margin-top: -20px;}
			#rslides1_s1 table img { width:105%; }
		}
		@media screen and (max-width: 780px){
			#screen2 .caption{font-size: 16px; }
			#screen2 table td { font-size: 16px; }
			#screen1 .grid_12 {font-size: 19px;}
			#screen2 .grid_12 {font-size: 16px;}
			.slider-container .prev { left: -130px; top: 160px;  height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/next2_xs.png)  right no-repeat;}
			.slider-container .next { right: -55px; top: 160px; height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/prev2_xs.png)  right no-repeat;}
			.baking {width: 21%; height:10%; margin-top: 40px;}
			.flow {width: 5%; height:10%; margin-top: 40px;}
			.container_12 .grid_10 {height: 420px !important;}
			#rslides1_s0 {margin-top: -20px; margin-left: -15px;}
			#rslides1_s1 {margin-top: -20px; margin-left: -15px;}
			#rslides1_s1 table img { width:105%; }
		}
		@media screen and (max-width: 650px){
			#screen2 .caption{font-size: 15px !important; }
			#screen2 table td { font-size: 10px; }
			#screen1 .grid_12 {font-size: 17px;}
			#screen2 .grid_12 {font-size: 16px;}
			.slider-container .prev { left: -130px; top: 160px;  height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/next2_xs.png)  right no-repeat;}
			.slider-container .next { right: -55px; top: 160px; height: 150px; width: 150px; color:transparent; background: transparent url(assets/8/prev2_xs.png)  right no-repeat;}
			.baking {width: 21%; height:10%; margin-top: 40px;}
			.flow {width: 5%; height:10%; margin-top: 40px;}
			.container_12 .grid_10 {height: 420px !important;}
			#rslides1_s0 {margin-top: -20px; margin-left: -15px;}
			#rslides1_s1 {margin-top: -20px; margin-left: -15px;}
			#rslides1_s1 table img { width:105%; }
		}
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... chemical and physical changes"); ?></h1>
				
						<div class="grid_12">
							
							<?php echo _("Now let's think about the cake. Did you happen to watch your mother or someone else make the cake? They added some white powdered flour, some sugar, butter, milk, eggs, and baking powder all together in a big bowl. The recipe calls these \"ingredients\" but scientists think of them as <span class='key'>chemical compounds</span>. It looks like a big mess, doesn't it? Does it look like something you'd want to eat?  But then all the ingredients got mixed together and put in the hot oven to bake. Then what happened? After baking in the oven at about 350 degrees for 30-45 minutes, that big mess in the bowl changed. Out popped a cake that looks and feels and tastes totally different than the ingredients before baking. Look at the ingredients in the bowl, then look at the slice of cake. How do you think the properties of the cake – the taste, the color, the way it feels – are different from the properties of the ingredients? What do you think happened to cause those changes?"); ?>
						</div>
						<div class="grid_12">
							<img class="baking" src="assets/8/8a.jpg"/><img class="baking flow" src="assets/8/arrow_2.png"/><img class="baking" src="assets/8/8b.jpg"/><img class="baking flow" src="assets/8/arrow_2.png"/><img class="baking" src="assets/8/8c.jpg"/><img class="baking flow" src="assets/8/arrow_2.png"/><img class="baking" src="assets/8/8d.jpg"/>
						</div>
					</div>
					
					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("Lots of complicated <span class='key'>chemical changes</span> happen when a cake bakes. But let's look at just one chemical change that's really important - how the cake rises.");?></p>
						<p class="grid_12"><?php echo _("Browse through the slides below by clicking the left and right arrows."); ?></p>
						
						<div class="grid_10 slider-container">
							<ul class="rslides">
						        <li>
						        	<div>
						        		<img src="assets/8/1.jpg">
						        		<span><?php echo _("Sodium bicarbonate"); ?></span>
						        	</div>
						        	<div>
						        		<img src="assets/8/3.jpg">
						        		<span><?php echo _("Citric acid"); ?></span>
						        	</div>
						        	<div>
						        		<img src="assets/8/2.jpg">
						        		<span><?php echo _("Water"); ?></span>
						        	</div>
						        	
						        	<div class="clear"></div>
						        	
						        	<p class="caption"><?php echo _("One of the ingredients in the cake is baking powder. Baking powder is composed of two chemical compounds – sodium bicarbonate and a very weak and harmless acid - that react together when heated to make two new chemicals – carbon dioxide gas – CO<sub>2</sub> – plus some water.");?></p>
						        </li>
						        
						        <li>
						        	<span class="caption"><?php echo _("As the cake cooks, the CO<sub>2</sub> gas gets in between the little cake particles and lifts them up and pushes them apart to cause the cake to rise. This reaction is:");?></span>
						        	
						        	<table>
						        		<tr>
						        			<td><?php echo _("NaHCO<sub>3</sub>"); ?></td>
						        			<td>+</td>
						        			<td dir='ltr'>H+</td>

										<?php if ($language == 'ar_EG') { ?>
						        			<td><img src="assets/8/arrow-r.png" /></td>
						        		<?php } else { ?>
						        			<td><img src="assets/8/arrow.png" /></td>
						        		<?php } ?>

						        			<td><?php echo _("CO<sub dir='ltr'>2</sub>"); ?></td>
						        			<td>+</td>
						        			<td>H<sub>2</sub>O</td>
						        		</tr>
						        		<tr>
						        			<td><?php echo _("Sodium bicarbonate"); ?></td>
						        			<td><?php echo _("Plus"); ?></td>
						        			<td><?php echo _("Acid"); ?></td>
						        			<td><?php echo _("Becomes"); ?></td>
						        			<td><?php echo _("Carbon dioxide"); ?></td>
						        			<td><?php echo _("Plus"); ?></td>
						        			<td><?php echo _("Water"); ?></td>
						        		</tr>
						        	</table>
						        	<p class="caption"><?php echo _("The big difference between physical changes, like changes of state, and chemical changes, like the baking of the cake, is that in a chemical change or reaction, the change in the substances can't be reversed. In other words, once you make the cake, you can't get back the eggs, and milk, and baking soda.");?></p>
						        </li>
						    </ul>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Pre-heating oven..."); ?></strong></section></section>

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
				document.location.href = "7.php";
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
			auto: false,
			pager: false,
			nav: true,
			speed: 400
		});
	</script>
</body>
</html>
