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
		h1 { color: #0060A1; }
		
		#buttons .next, #screen2 { display: none; }
		.fa, .lang-menu a { color: #1AA257; }
		
		.wrap { border-color: #65D5BD; }
		.bg { background-image: url(assets/8/bg.jpg); overflow: hidden;}

		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
			#diagram { margin-top: 10% !important; }
			#diagram > span:nth-of-type(1) { top: 205px !important; }
			#diagram > span:nth-of-type(2) { top: 225px !important; left: 510px !important; }
			#diagram > span:nth-of-type(3) { top: 220px !important; left: 850px !important; }
			#diagram > span:nth-of-type(4) { top: 300px !important; left: 620px !important; }
			#diagram > span:nth-of-type(5) { top: 350px !important; left: 242px !important; }
			#diagram > span:nth-of-type(6) { top: 295px !important; left: 325px !important; }
			#diagram > span:nth-of-type(7) { top: 370px !important; left: 450px !important; }
			#diagram > span:nth-of-type(8) { top: 340px !important; left: 815px !important; }
			#diagram > span:nth-of-type(9) { top: 445px !important; left: 75px !important; }
			#diagram > span:nth-of-type(10) { top: 425px !important; left: 324px !important; }
			#diagram > span:nth-of-type(11) { top: 450px !important; left: 540px !important; }
			#diagram > span:nth-of-type(12) { top: 410px !important; left: 660px !important; }
			#diagram > span:nth-of-type(13) { top: 420px !important; left: 865px !important; }
			#diagram > span:nth-of-type(14) { top: 560px !important; left: 460px !important; }
			#diagram > span:nth-of-type(15) { top: 560px !important; left: 755px !important; }

			#screen2 > div { background-size: 100% 100%; width: 58%; }
		}
		@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) {
			#diagram { margin-top: 10% !important; }
			#diagram > span:nth-of-type(1) { top: 140px !important; }
			#diagram > span:nth-of-type(2) { top: 165px !important; left: 370px !important; }
			#diagram > span:nth-of-type(3) { top: 160px !important; left: 615px !important; }
			#diagram > span:nth-of-type(4) { top: 220px !important; left: 455px !important; }
			#diagram > span:nth-of-type(5) { top: 260px !important; left: 185px !important; }
			#diagram > span:nth-of-type(6) { top: 215px !important; left: 240px !important; }
			#diagram > span:nth-of-type(7) { top: 275px !important; left: 315px !important; }
			#diagram > span:nth-of-type(8) { top: 255px !important; left: 590px !important; }
			#diagram > span:nth-of-type(9) { top: 330px !important; left: 45px !important; }
			#diagram > span:nth-of-type(10) { top: 320px !important; left: 245px !important; }
			#diagram > span:nth-of-type(11) { top: 335px !important; left: 395px !important; }
			#diagram > span:nth-of-type(12) { top: 300px !important; left: 505px !important; }
			#diagram > span:nth-of-type(13) { top: 320px !important; left: 620px !important; }
			#diagram > span:nth-of-type(14) { top: 420px !important; left: 355px !important; }
			#diagram > span:nth-of-type(15) { top: 420px !important; left: 565px !important; }

			#screen2 > div span { margin: 0 !important; position: absolute; }
			#screen2 .grid_8 div:first-child span:nth-of-type(1){ right: 25px; }
			#screen2 .grid_8 div:first-child span:nth-of-type(2){ top: 55px; line-height: 13px; margin-left: 12px !important; }
			#screen2 .grid_8 div:first-child span:nth-of-type(3){ top: 87px; right: 42px; }
			#screen2 .grid_8 div:first-child span:nth-of-type(4){ top: 133px; right: 14px; }
			#screen2 .grid_8 div:first-child span:nth-of-type(5){ top: 178px; right: 2px; }

			#screen2 .grid_8 div:nth-child(2) span:nth-of-type(2){ top: 103px; left: 5px; width: 15px; }
			#screen2 .grid_8 div:nth-child(2) span:nth-of-type(1){ left: 12px; }

		}
		#screen2 > div { background: url(assets/8/plate.jpg); height: 285px; background-size: 100%; float: right; background-repeat: no-repeat; }
		#screen2 > div div:first-of-type { float:right; width: 85px; margin-top: 32px; margin-right: 12px; }
		#screen2 > div span { font-size: 15px; line-height: 15px; float: left; margin-top: 13px; }
		#screen2 > div div span:nth-child(1){ color: #AB8930; }
		#screen2 > div div span:nth-child(2){ color: #BD764C; }
		#screen2 > div div span:nth-child(3) { color: red; margin-top: 1px; }
		#screen2 > div div span:nth-child(4){ color: #A9544C; margin-top: 37px; }
		#screen2 > div div span:nth-child(5){ color: #FB5F21; margin-top: 49px; }
		<?php if ($language == 'zh_CN') { ?>
			#screen2 > div div span:nth-child(2){ padding-top: 4px; }
			#screen2 > div div span:nth-child(3) { padding-top: 10px; }
			#screen2 > div div span:nth-child(4){ padding-top: 28px; margin-left: -30px; }
		<?php } ?>
		@media screen and (max-width: 1250px) {
			<?php if ($language == 'zh_CN') { ?>
			#screen2 > div div span:nth-child(2){ padding-top: 4px; }
			#screen2 > div div span:nth-child(3) { padding-top: 10px; }
			#screen2 > div div span:nth-child(4){ padding-top: 28px; margin-left: -30px; }
			<?php } ?>
		}
		
		#screen2 > div div:last-of-type { width: 82px; margin: 59px 0 0 22px; }
		#screen2 > div div:last-of-type span:nth-child(1){ color: #2A606D; }
		#screen2 > div div:last-of-type span:nth-child(2){ color: #495455; margin-top: 43px; }
		
		.small { cursor: pointer; }
		
		#grey { position: absolute; background: rgba(0, 0, 0, .8); width: 100%; height: 100%; margin: 0; z-index: 1000; display: none; }
		#grey > div { margin-top: 2%; }
		#grey .close { margin-top: 20px; text-align: center; }
		#grey div div span { z-index: 1001; text-align: center; cursor: pointer; margin-top: 10px; background: #7FAAFF; color: white; -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; padding: 5px;}
		
		#diagram { width: 96%; margin: 0 2%; height: auto; }
		.a-center { text-align: center; }
		#screen2 p { margin: 10px 1%; }
		#diagram > span { position: absolute; z-index: 1; font-size: 18px; }
		#diagram > span:nth-of-type(1) { top: 122px; left: 59px; } 
		#diagram > span:nth-of-type(2) { top: 122px; left: 450px; } 
		#diagram > span:nth-of-type(3) { top: 122px; left: 720px; } 
		#diagram > span:nth-of-type(4) { top: 189px; left: 535px; } 
		#diagram > span:nth-of-type(5) { top: 235px; left: 214px; } 
		#diagram > span:nth-of-type(6) { top: 200px; left: 300px; } 
		#diagram > span:nth-of-type(7) { top: 252px; left: 385px; } 
		#diagram > span:nth-of-type(8) { top: 225px; left: 705px; } 
		#diagram > span:nth-of-type(9) { top: 313px; left: 62px; } 
		#diagram > span:nth-of-type(10) { top: 300px; left: 283px; } 
		#diagram > span:nth-of-type(11) { top: 330px; left: 470px; } 
		#diagram > span:nth-of-type(12) { top: 306px; left: 595px; width: 74px; } 
		#diagram > span:nth-of-type(13) { top: 300px; left: 735px; } 
		#diagram > span:nth-of-type(14) { top: 415px; left: 415px; } 
		#diagram > span:nth-of-type(15) { top: 415px; left: 663px; } 

		@media (max-width: 900px){
			#screen2 > div {
				height: 305px;
			}
		}
		<?php if ($language == 'zh_CN') : ?>
		.ovlpng { margin-top: 34px !important; }
		<?php endif; ?>

	<?php if ($language == 'es_ES') : ?>
		#screen2 p {font-size: 22px;}
	<?php endif; ?>
	<?php if ($language == 'ar_EG') : ?>
		#screen2 > div span {line-height:18px;}

		#screen2 > div div:last-of-type span:nth-child(1) {margin-top: 11px; margin-left:-442px;}
		#screen2 > div div:last-of-type span:nth-child(2){margin-top: 70px; margin-left:-472px; }
	<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12" id="grey"></div>
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... plate tectonics"); ?></h1>
						<p class="grid_12"><?php echo _("Scientists explain these patterns of mountains, volcanoes, and earthquakes by an idea called <span class='key'>plate tectonics</span>. The diagram below shows how the whole surface of the earth, including the continents and oceans, are all sitting on what geologists call <span class='key'>tectonic plates</span>."); ?> 
						<?php echo _("These plates are like huge pieces of a jigsaw puzzle with the continents and oceans sitting on top of them. And they move around the earth very, very slowly, pulling away from each other and bumping into each other. This causes some very interesting and important things to happen on the earth - like mountains, volcanoes, and earthquakes."); ?></p>
						
						<p class="grid_12 a-center"><?php echo _("Click to enlarge image"); ?></p>
						
						<div class="grid_6 prefix_3 small">
							<img src="assets/8/1.jpg" />
						</div>
						
						<div id="diagram">
							<span><?php echo _("Eurasian Plate"); ?></span>
							<span><?php echo _("North American Plate"); ?></span>
							<span><?php echo _("Eurasian Plate"); ?></span>
							<span><?php echo _("Carribbean Plate"); ?></span>
							<span><?php echo _("Philippine Plate"); ?></span>
							<span><?php echo _("Pacific Plate"); ?></span>
							<span><?php echo _("Coco's Plate"); ?></span>
							<span><?php echo _("Arabian Plate"); ?></span>
							<span><?php echo _("Indo-Australian Plate"); ?></span>
							<span><?php echo _("Fiji Plate"); ?></span>
							<span><?php echo _("Nazca Plate"); ?></span>
							<span><?php echo _("South American Plate"); ?></span>
							<span><?php echo _("African Plate"); ?></span>
							<span><?php echo _("Antartic Plate"); ?></span>
							<span><?php echo _("Scotia Plate"); ?></span>
							<div class="grid_12"><img src="assets/8/1.jpg" /></div>
							<div class="close"><span><?php echo _("Close me!"); ?></span></div>
						</div>
						
					</div>
					
					<div id="screen2" class="screen">
						
						<div class="grid_8">
							<div>
								<span><?php echo _("Volcanoes"); ?></span>
								<span><?php echo _("Continental Crust"); ?></span>
								<span><?php echo _("Magma"); ?></span>
								<span><?php echo _("Lithosphere"); ?></span>
								<span><?php echo _("Asthenosphere"); ?></span>
							</div>
							<div>	
								<span><?php echo _("Trench"); ?></span>
								<span class='ovlpng'><?php echo _("Oceanic Crust"); ?></span>
							</div>
						</div>
						
						<p><?php echo _("Sometimes when one plate bumps into another it causes one of the plates to get pushed under the other plate. Like if a small car crashes into the back of a big semi-truck, the small car might get pushed under the truck. This is called <span class='key'>subduction</span> when tectonic plates do it. A <span class='key'>subduction zone</span>, where the Pacific tectonic plate was pushed and dragged under the North American tectonic plate in California millions of years ago, caused the volcanoes in California. And in Washington and Oregon this process is still going on right now! That's why there are active volcanoes in Washington and Oregon but the volcanoes in California are dormant."); ?></p>
						
						<p class="grid_12"><?php echo _("The <span class='key'>subduction</span> process causes the <span class='key'>ocean plate</span> to rub against the <span class='key'>continental plate</span> and the friction between them causes the rocks to heat up and melt until finally - boom!! - a volcano erupts. Try rubbing your hands together quickly and see how they heat up. That's friction! The same thing happens to heat the plates when they rub together - but it just happens very slowly.");?></p>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="9.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Moving very slowly..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>

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
				
				$('#grey').fadeOut();
				
				$('#screen2').fadeIn();

				window.location.hash = '#screen2';
				
			});
		});
	</script>
	
	<script>
		
		$('#grey').append($('#diagram'));
		$('.small').click(function() {
			$('#grey').fadeIn();
		});
		$('.close').click(function() {
			$('#grey').fadeOut();
		});
		
	</script>
	
</body>
</html>
