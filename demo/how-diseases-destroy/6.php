<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } if($language == "es_ES") { ?> dir="es" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/global.js" /></script>
<style>
html { background-color: #FFFFFF; }
p { text-align: left; }
body { display: none; }	
.bg { background-image: url('images/6/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
h1 { color: #cc0066;}
.wrap {border-left: 1px dashed #CB619C; border-right: 1px dashed #CB619C;}
#col1_page4{ width:42%; margin-left: 72px;}
#col2_page4{width:44%; margin-left: 15px;}

#col1_page1{ width:43%; margin-left:54px;}
#col2_page1{width:42%; margin-left: 30px;}

#col1_page2{ width:43%; margin:47px 0 0 63px;}
#col2_page2{width:42%; margin:20px 0 0 20px}

#col1_page3{ width:43%; margin:0 0 0 58px;}
#col2_page3{width:40%; margin:-5px 0 0 40px;}
#col2_page3 p { font-size: 22px; padding-right: 5px; }

article {margin-top:30px; width:99.5%; margin-bottom:15px; padding-left:10px;}
article h2 {color: black;}
#ins {margin-top:110px; width:98%;}
figure{width:80%; height:170px;  max-height:95%;}
figure img { width:100%; height:100%;}
#buttons .next, img.back-toggle-screen { display:none; }
.mtop{margin-top:80px;}
#scrn1_img{width:85%; height:350px; max-height:95%; margin:0 auto; margin-top:150px;}
#scrn2_img{width:43%; float:left; height:125px; max-height:95%; margin:0; margin-top:60px; margin-left:20px;}
#scrn2_img_last {width:43%;  height:125px; max-height:95%; margin-top:60px; }
#scrn3_img{width:85%; height:220px; max-height:95%; margin:0 auto;}
#scrn3_img img {width:99%;}

#scrn3b_img{width:85%; height:200px; max-height:95%; margin:0 auto; margin-top:100px;}
#scrn3b_img img {width:90%;}
#scrn4_img{width:88%; height:350px; max-height:95%; margin:0 auto; margin-top:120px;}

#screen2, #screen3, #screen4 { display: none; text-align: center; max-width: 100%; margin: 0 auto; }
.non-pad{padding:0px !important;}
.blue {color: #0000ff;}
.alter{width:45% !important; margin-left:35px !important;}
.no-mtop {margin:0 !important;}
#title {padding:80px 0 0 0; width:94%; margin-left:3px;}
.mtop2 {margin-top:65px;}
.mtop3 {margin-top:35px;}
.l-height {line-height:27px;}
figcaption{margin-top:-8px;}
.mleft{margin-left:32px !important;}
.alter2 {width:43% !important;}
#screen1{height:630px; width:100%!important; max-width:100%!important; background:url('images/6/container1.png') no-repeat; background-size:100% 100%;}
#screen2{height:630px; width:100%!important; max-width:100%!important; background:url('images/6/container2.png') no-repeat; background-size:100% 100%;}
#screen3{height:630px; width:100%!important; max-width:100%!important; background:url('images/6/container2.png') no-repeat; background-size:100% 100%;}
#screen4{height:630px;width:100%!important;  max-width:100%!important; background:url('images/6/container2.png') no-repeat; background-size:100% 100%;}

<?php if ($language == 'es_ES'): ?>
	h1 { font-size: 24px; }
<?php endif; ?>

html[dir="rtl"] h1 {font-size: 25px;}
html[dir="rtl"] #title {margin-right: 22px;}
html[dir="rtl"] .medium_font {font-size: 18px;}
html[dir="rtl"] #scrn2_img_last {margin-top: 45px;}
html[dir="rtl"] #col1_page3 {margin-top: 20px;}
html[dir="rtl"] #col1_page1 p, html[dir="rtl"] #col1_page3 p, html[dir="rtl"] #col1_page4 p {margin-right: 10px;}
html[dir="rtl"] #col1_page2 p {margin-right: 19px;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#title { padding: 45px 0 0; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#col2_page1 { margin-left: 18px; }
	#col1_page2 { margin: 24px 0 0 63px; }
	#col2_page2 { margin: 20px 0 0; }
	#col2_page3 { margin: -20px 0 0 27px; }
	#col2_page4 { margin-left: 0; }
	html[dir="rtl"] #col1_page2 p { font-size: 20.5px; }
	html[dir="es"] p { font-size: 22.4px; }
	html[dir="es"] #col1_page2 p { padding-top: 5px; }
}
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<section id="col1_page1" class="fl">
					<div id="title">
						<h1><?php echo _("More big ideas... about how diseases destroy"); ?></h1>
					</div>
					<p><br/><?php echo _("The smallest microbes are <span class='key'>viruses</span>. The structure of a virus is much simpler than that of bacteria. They usually just have a shell made of protein and lipids (fat) that protects their genetic information. Most scientists don't consider them \"true life-forms\". This is because viruses cannot produce their own proteins to build their own bodies and they cannot reproduce. Instead, viruses infect cells and make them create new viruses."); ?> </p>
				</section>
				
				<section id="col2_page1" class="fl">					
					<figure id="scrn1_img">							
						<img src="images/6/6a.jpg" />
					</figure>					
				</section>
				<div class="clear"></div>
			</div>	
			
			
			<div id="screen2" class="screens">				
				<section id="col1_page2" class="fl">
					<p class="l-height"><br/><?php echo _("An organism or a virus that can cause disease in other organisms is called a <span class='key'>pathogen</span>."); ?><br/>
					   
					   <?php echo _("There are thousands of types of pathogens. If you have influenza or the common cold, you probably have a viral infection. The common cold can be caused by any one of some 200 viruses. That is why there is no vaccine against the cold virus. A vaccine effective against one or two of the viruses will be completely useless against the other 198 or 199 forms."); ?>
					   <br/>
					   
					   <?php echo _("In the image you can see five different types of pathogens. If an individual were infected by any of them, it could lead to sepsis."); ?> 
					   <?php echo _("If the patient does not get medical help within hours, they would die."); ?>
					</p>
				</section>
				
				<section id="col2_page2" class="fl">					
					<figure id="scrn2_img">
						<img src="images/6/strep-pneu.jpg" /> 
						<figcaption class="medium_font"><?php echo _("Streptococcus pneumoniae"); ?></figcaption>
					</figure>
					<figure id="scrn2_img">
						<img src="images/6/staph-aureus.jpg" /> 
						<figcaption class="medium_font"><?php echo _("Staphylococcus aureus"); ?></figcaption>
					</figure>
					<figure id="scrn2_img">
						<img src="images/6/pseudo-aeru.jpg" /> 
						<figcaption class="medium_font"><?php echo _("Pseudomonas aeruginosa"); ?></figcaption>
					</figure>
					<figure id="scrn2_img">
						<img src="images/6/e-coli.jpg" />
						<figcaption class="medium_font"><?php echo _("Escherichia coli"); ?></figcaption>
					</figure>
					<div class="clear"></div>
					
					<figure id="scrn2_img_last" class="centered">
						<img src="images/6/candida.jpg" />
						<figcaption class="medium_font"><?php echo _("Candida"); ?></figcaption>
					</figure>			
				</section>
				
						
			</div>
			
			<div id="screen3" class="screens">
				<section id="col1_page3" class="fl">					
					<p><br/><br/> 
					<?php echo _("A <span class='key'>carrier</span> is an organism that carries or spreads disease-causing microbes but may or may not have the symptoms of the disease itself. For example, ticks can transfer the Lyme disease bacteria to humans. While the tick is not affected, people develop a rash and other symptoms after being bitten by the tick."); ?></p>
					<figure id="scrn3_img" class="centered">
						<img src="images/6/tick.jpg" />						
					</figure>			
				</section>
				
				<section id="col2_page3" class="fl">					
					<figure id="scrn3b_img">							
						<img src="images/6/contagious.jpg" />
					</figure>
					
						<p> <?php echo _("A <span class='key'>contagious</span> disease is one that spreads from one organism to another. While some diseases are spread only through direct physical contact, other diseases are spread indirectly without direct physical contact with the carrier."); ?><br/>
						   <?php echo _("Touching your face, nose, mouth or eyes with your hands could increase the risk of catching a cold."); ?>						
						</p>
					
				</section>
				<div class="clear"></div>
			</div>			
	
			<div id="screen4" class="screens">
				<section id="col1_page4" class="fl">					
					<p><br/><br/><br/><br/><br/>
						<?php echo _("Bacteria, viruses, and microbes in general can grow from just a few to billions in just a short time. If you start from a single bacterium, it will grow and split in half. Now you have two bacteria that will then grow and split again, making four cells. This process continues very quickly, each time doubling."); ?>					
					</p>
				</section>				
				<section id="col2_page4" class="fl">					
					<figure id="scrn4_img">							
						<img src="images/6/bacteria.gif" />
						<p><?php echo _("The short film shows bacteria dividing over a period of a few hours."); ?></p>	
					</figure>					
				</section>
				<div class="clear"></div>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Fighting viruses..."); ?></strong></section></section>

<script>
var hash = window.location.hash.slice(1);
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	
	if(hash != "") {
		$('.screens').hide();
		$('#'+hash).show(function () {
			var screen = hash[hash.length -1];		
			if(screen < 4) {				
				$('a.back-toggle').fadeOut();
				$('a.back-toggle').delay(300).fadeIn();
				$('a.readmore-toggle').parent().attr('href','#screen' + screen);
			} else {				
				$('a.back-toggle').fadeOut();
				$('a.back-toggle').delay(300).fadeIn();
				$('a.readmore-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
				});
			}
		});
	}	
	/* Back Screen Transition */
	$('a.back-toggle').click(function(){
		if($('#screen2').is(':visible')) {
			$('#screen2').fadeOut( function(){
				$('h1').fadeIn(); 
				$('#screen1').fadeIn();				
				$('a.back-toggle').fadeIn();
				$('a.readmore-toggle').parent().attr('href','#screen2'); 
				$('a.back-toggle').parent().attr('href','5.php');
				window.location.hash = '';
			});
			$('a.back-toggle').fadeOut();
		} else if($('#screen3').is(':visible')) {
			$('#screen3').fadeOut( function(){ 
				$('#screen2').fadeIn();
				$('a.readmore-toggle').parent().attr('href','#screen3'); 
				$('a.back-toggle').parent().attr('href','#screen2');
				window.location.hash = '#screen2';
			});
		} else if($('#screen4').is(':visible')) {
			$('#screen4').fadeOut( function(){
				$('#screen3').fadeIn();
				window.location.hash = '#screen3';
			});		
			$('a.next-toggle').fadeOut( function(){ 
				$('a.readmore-toggle').fadeIn();
			});
		}
	});
	
	/* Read More Transition */
	$('a.readmore-toggle').click(function(){
		if( $('#screen1').is(':visible') ) { 	
			$('h1').fadeOut();
			$('a.back-toggle').fadeOut( function(){ 
				$('a.back-toggle').fadeIn();
				window.location.hash = '#screen2';
			});
			
			$('#screen1').fadeOut( function(){				
				
				$('a.readmore-toggle').parent().attr('href','#screen3');
				$('a.back-toggle').attr('src','images/buttons/back2.png');
				$('#screen2').fadeIn();
			});
		} else if ( $('#screen2').is(':visible') ) {
			$('#screen2').fadeOut( function(){
				$('a.readmore-toggle').parent().attr('href','#screen4');
				$('a.back-toggle').attr('src','images/buttons/nextb.png');
				$('#screen3').fadeIn(); 
				window.location.hash = '#screen3';
			});
		} else if ( $('#screen3').is(':visible') ) {
			$('#screen3').fadeOut( function(){						
				$('a.back-toggle').parent().attr('href','#screen3');
				$('#screen4').fadeIn();
				window.location.hash = '#screen4';
			});
			$('a.readmore-toggle').fadeOut( function(){
				$('a.next-toggle').fadeIn();
			});
		} 
	});
});
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
