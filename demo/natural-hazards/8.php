<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'natural-hazards';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Natural Hazards"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jpreloader.js"></script>
<style>
.bg { background-image: url('images/8/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%; position:relative; }
h1 { color: #d89c27; }
h2 { text-align: center; }
p { text-align: left; }
#screen2, #screen3 { display: none; }
#screen2 p:first-child { padding-top: 5px; }
#screen2 p { font-size: 24px; }

.pic { height: 200px; width: 100%; }
.pic img { height: 90%; }
#s1pics { height: 240px; margin: 5px auto; width: 88%; }
#s1pics img { height: 100%; }
#s1pics img:first-child { margin-right: 10px; }
#s3pics { height: 200px; }

#hidden-images { float: left; width: 450px; margin: 0; margin-top: 10px; }
#checkboxes { float: right; width: 45%; height: 340px; margin-top: 10px; }
#checkboxes ul { list-style: none; text-align: left; margin: 0; padding: 0;  }
#checkboxes li { padding: 5px 0px; }
#checkboxes p { text-align: left !important; }
#checkboxes label { font-size: 21px; }

input[type="checkbox"] { opacity: 0; position: absolute; filter: alpha(opacity=0); margin:5px 0 0 5px; }
input[type="checkbox"] + label { cursor: pointer; }
input[type="checkbox"] + label span { 
	background: url('images/8/checkbox.png') left top no-repeat;
	position: relative;
	margin: 0;
	padding: 0 0 0 30px;
	cursor: pointer;
	line-height: 35px;
	min-height: 35px;
	display: inline-block;
	z-index:0; 
	font-size: 24px;
	background-position: 0 0; 
	vertical-align: bottom; }
	
input[type="checkbox"]:checked + label span { background-position: -31px 0; }
#buttons .next { display: none; }
html[dir="rtl"] #checkboxes ul { text-align: right;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#screen2, #screen3 { padding-top: 35px; }
	#screen1 p { font-size: 22px; } 
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#s1pics { height: auto; width: 645px; }
	#s1pics img { height: auto; width: 300px; }
	#s3pics, .pic { height: auto; }
	.pic img { width: 237px; height: auto; }
}
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("More big ideas... about natural hazards"); ?></h1>
				<p><?php echo _("After understanding the science of natural phenomena that cause natural hazards, there are many things humans can do to avoid or minimize their impacts."); ?></p>
				<p><?php echo _("For instance, if scientists understand that in certain parts of the country, dry hot winds will occur during certain parts of the year, then there are actions a family can take to protect themselves and their homes and belongings."); ?></p>	
				<div id="s1pics">
					<img src="images/8/metal-roof.png">
					<img src="images/8/brick-wall.png">
				</div>
			</div>
			<div id="screen2" class="screens">
				<br>
				<p><?php echo _("But some natural hazards like earthquakes are still not understood well enough by scientists to give an accurate warning for a time and place for it to occur."); ?></p>
				<p><?php echo _("It is suggested to people to prepare themselves for earthquakes in these ways:"); ?></p>
				<div id="hidden-images">
					<img id="fire-img" src="images/8/fire-extinguisher.png">
					<img id="water-img" src="images/8/water.png">
					<img id="plan-img" src="images/8/plan.png">
					<img id="first-aid-img" src="images/8/medkit.png">
					<img id="safe-img" src="images/8/safe.png">
					<img id="drill-img" src="images/8/drill.png">	
				</div>
				<div id="checkboxes">
					<p><?php echo _("<span class='red bold blink'>Click</span> an item to show image."); ?></p>
					<ul>
						<li>
							<input type="checkbox" id="fire">
							<label for="fire"><span></span><?php echo _("Get a fire extinguisher."); ?></label>
						</li>
						<li>
							<input type="checkbox" id="water">
							<label for="water"><span></span><?php echo _("Have an extra water supply."); ?></label>
						</li>
						<li>
							<input type="checkbox" id="plan">
							<label for="plan"><span></span><?php echo _("Have an emergency plan."); ?></label>
						</li>
						<li>
							<input type="checkbox" id="first-aid">
							<label for="first-aid"><span></span><?php echo _("Have a first-aid kit ready."); ?></label>
						</li>
						<li>
							<input type="checkbox" id="safe">
							<label for="safe"><span></span><?php echo _("Secure large or valuable items."); ?></label>
						</li>
						<li>
							<input type="checkbox" id="drill">
							<label for="drill"><span></span><?php echo _("Know the &#34;drop-cover-hold&#34; drill."); ?></label>
						</li>
					</ul>
				</div>
			</div>
			<div id="screen3" class="screens">
				<div>
					<p><?php echo _("Similar actions and preparedness are important for floods, or tornadoes, hurricanes, or almost any of the other natural hazards."); ?></p>
					<div id="s3pics">
						<div class="pic">
							<img src="images/8/evac.jpg">
							<img src="images/8/evac2.jpg">
							<img src="images/8/evac3.jpg">
						</div>
					</div>
					<p><?php echo _("These are some things that people and communities can do to protect themselves and lessen the impact of these hazards."); ?></p>
					<p><?php echo _("But most importantly, when you are warned to <span class='key'>evacuate</span> your home – which means to leave it - because of any of the natural hazards: pay attention and act quickly."); ?></p>
				</div>
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="9.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Securing first-aid kits..."); ?></strong></section></section>
	<script>
	var hash = window.location.hash.slice(1);
	$(document).ready(function() {
		if(hash != "") {
			$('.screens').hide();
			$('#'+hash).show(function () {
				var screen = hash[hash.length -1];
				if(screen < 3) {
					$('a.readmore-toggle').parent().attr('href','#screen' + screen);
				} else {
					$('a.readmore-toggle').fadeOut(function(){
						$('a.next-toggle').fadeIn();
					});
				}
			});
		}
		
		/* Back Screen Transition */
		$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
				document.location.href= "7.php";
			} else if($('#screen2').is(':visible')) {
				$('#screen2').fadeOut( function(){
					$('#screen1').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen2'); 
					window.location.hash = '';
				});
			} else if($('#screen3').is(':visible')) {
				$('#screen3').fadeOut( function(){
					$('#screen2').fadeIn();
					window.location.hash = '#screen2';
				});		
				$('a.next-toggle').fadeOut( function(){ 
					$('a.readmore-toggle').fadeIn();
				});
			}
		});
		
		/* Read More Screen Transition */
		$('a.readmore-toggle').click(function(){
			if($('#screen1').is(':visible')) { 	
				$('#screen1').fadeOut( function(){ 
					$('#screen2').fadeIn();
					$('a.readmore-toggle').parent().attr('href','#screen3');
					window.location.hash = '#screen2';
				});
			} else if ( $('#screen2').is(':visible') ) {
				$('#screen2').fadeOut(function(){ 
					$('#screen3').fadeIn();
					$('a.back-toggle').parent().attr('href','#screen2');
					window.location.hash = '#screen3';
				});
				
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			} 
		});
		
		/* Checkboxes for hiding and showing images */
		$('#hidden-images img').hide();
		
		$("input[type='checkbox']").each(function(){
			var cbid = $(this).attr('id');
			$(this).click(function() {
				if($(this).is(':checked')) {
					$("#" + cbid + "-img").show();
				} else {
					$("#" + cbid + "-img").hide();
				}
			});
		});
	});
	</script>
	<?php include("setlocale.php"); ?>
</body>
</html>
