<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
	//$_SESSION['cmodule'] = air-around-us';
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

	<title><?php echo _("The Air Around Us"); ?></title>

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
		h1 { color: #7ba207; }
		.wrap { border-color: #AEE7FB; }
		.bg { background-image: url(assets/4/bg.jpg); }
		
		#screen2 { display: none; }

		#buttons .next { display: none; }
		
		/* #piechart { margin-top: 40px; } */
		
		.bg .smoke { position: absolute; width: 250px; height: 250px; background: url('assets/4/smoke-texture.png') no-repeat; margin-left: -150px; margin-bottom: 50px; }
		.vapor {overflow: hidden;}
		#dp_swf_engine { display: none; }
		.wrap > .bg { overflow: hidden !important; }
		@media (max-device-width: 900px) and (min-device-width: 623px){
			#buttons { background-color: #94E7FC !important; }
		}
			p.grid_6, p.grid_7 {
			    font-size: 24px;
			    line-height: 28px;
			}
		@media only screen and (max-width: 1250px){
			p.grid_6, p.grid_7 {
			    line-height: 30px;
			    font-size: 21px;
			}
			.container_12 .grid_5 {
			    width: 35.667%;
			}
			.grid_5 img {
			    width: 95%;
			}
		}
		<?php if ($language == 'es_ES') : ?>
			p.grid_6, p.grid_7 {
			    font-size: 23px;
			    line-height: 28px;
			}
			@media only screen and (max-width: 1250px){
				p.grid_6, p.grid_7 {
				    font-size: 23px;
				    line-height: 25px;
				}
			}
		<?php endif; ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">
				<div class="grid_12">

					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("Reviewing big ideas about... the air around us"); ?></h1>
						<p class="grid_6"><?php echo _("Because the mixture of gases in the air around us is invisible, some people think that there's nothing there. In fact, air is a substance that has mass and takes up space. You may recall the three common phases of matter include solid, liquid and gas. The air in earth's <span class='key'>atmosphere</span> contains a mixture of gases including mostly nitrogen, oxygen, argon and carbon dioxide."); ?></p>
						<div class="grid_6"><div id="piechart" style="width:400px; height: 240px;"></div></div>
						
						<div class="clear"></div>
						
						<div class="grid_5 vapor"><img src="assets/4/vapor.jpg" /></div>
						<p class="grid_7"><?php echo _("In addition, water (in its gaseous phase which is frequently referred to as <span class='key'>water vapor</span>) is found in Earth's atmosphere. And, despite the amount of rain, snow and sleet that you have watched fall from above, the concentration of water vapor is relatively low. There are a number of other gases such as neon, hydrogen, helium, and methane but these are found at very low levels of concentration."); ?></p>
					</div>

					<div id="screen2" class="screen">
						<p class="grid_12"><?php echo _("Although the air around us is largely invisible, air does have mass. For example, consider a balance beam that has one rubber balloon on each side. If one balloon is inflated by blowing it up using your lungs and the other balloon is left empty, then the side with the inflated balloon will be heavier than the other. That's because the mixture of oxygen, nitrogen and carbon dioxide expelled by your lungs has mass."); ?></p>
						<div class="grid_10 prefix_1 suffix_1">
							<ul class="rslides">
    							<li><img src="assets/4/balloon1.jpg" /></li>
    							<li><img src="assets/4/balloon2.jpg" /></li>
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
		<a href="5.php" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Weighing a balloon..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.js"></script>
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
	
 	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['',     ''],
          ["<?php echo _("Nitrogen"); ?>",     78],
          ["<?php echo _("Oxygen"); ?>",      21],
          ["<?php echo _("Other gases"); ?>",  1]
        ]);

        var options = {
          title: "<?php echo _("Relative composition of air"); ?>"
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
      
      //smoke effect
		$(function(){
		if(!$.browser.msie){
			var a=0;for(;a<15;a+=1){setTimeout(function b(){var a=Math.random()*1e3+5e3,c=$("<div />",{"class":"smoke",css:{opacity:0,left:Math.random()*200+80}});$(c).appendTo(".vapor");$.when($(c).animate({opacity:1},{duration:a/4,easing:"linear",queue:false,complete:function(){$(c).animate({opacity:0},{duration:a/3,easing:"linear",queue:false})}}),$(c).animate({bottom:$(".bg").height()},{duration:a,easing:"linear",queue:false})).then(function(){$(c).remove();b()})},Math.random()*3e3)}
		}else{		
		"use strict";var a=0;for(;a<15;a+=1){setTimeout(function b(){var a=Math.random()*1e3+5e3,c=$("<div />",{"class":"smoke",css:{left:Math.random()*200+80}});$(c).appendTo(".vapor");$.when($(c).animate({},{duration:a/4,easing:"linear",queue:false,complete:function(){$(c).animate({},{duration:a/3,easing:"linear",queue:false})}}),$(c).animate({bottom:$(".bg").height()},{duration:a,easing:"linear",queue:false})).then(function(){$(c).remove();b()})},Math.random()*3e3)}}}())
		
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
