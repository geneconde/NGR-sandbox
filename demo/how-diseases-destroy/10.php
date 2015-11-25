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
body { display: none; }	
p { text-align: left; }
.bg { background-image: url('images/10/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
h1 { color: #C27A18;}
.wrap {border-left: 1px dashed #5BC0D4; border-right: 1px dashed #5BC0D4;}
#col1_page1{ width:43%; margin-left:49px;}
#col2_page1{width:41%; margin:-55px 0 0 35px;}
#col2_page1 p { padding: 10px; font-size: 22px; }

#col1_page2{width:43%; margin: 65px 0 0 53px;}
#col2_page2{width:40%; margin:80px 0 0 40px;}
#col2_page2 p { padding: 5px !important; font-size: 22px !important; }

#col1_page3{width:43%; margin:65px 0 0 52px;}
#col2_page3{width:44%; margin:60px 0 0 -4px;}

article {margin-top:36px; width:99.5%; margin-bottom:15px;}
article h2 {color: black;}
#ins {margin-top:110px; width:98%;}
figure{width:80%; height:170px;  max-height:95%;}
/* figure img { width:100%; height:100%;} */
#buttons .next, img.back-toggle-screen { display:none; }
.mtop{margin-top:80px;}
#scrn2_img{/* width:63%; height:150px; */ max-height:95%; margin:0 auto; margin-top: -25px; }

#scrn1b_img{width:85%; height:220px; max-height:95%; margin:0 auto; margin-top:60px;}
#scrn1b_img img {width:99%;}

#scrn1a_img{width:85%; height:220px; max-height:95%; margin:0 auto; }
#scrn1a_img img {width:99%;}

#scrn2b_img{width:55%; height:150px; max-height:95%; margin:0 auto; }

.non-pad{padding:0px !important; padding-top:5px !important;}
.no-pad {padding:0;}
.allign-left{text-align:left !important; padding-left:10px; padding-top:0px;}
.mtop {margin-top:10px !important;}
.no-mtop {margin:0 !important;}
#title {padding:72px 0 0 0; width:42%; margin-left:35px;}
.l-height {line-height:25px;}
#screen1{height:630px; width:100%!important; background:url('images/10/container1.png') no-repeat; background-size:100% 100%;}
#screen2{height:630px; width:100%!important; background:url('images/10/container2.png') no-repeat; background-size:100% 100%;}
#screen3{height:630px; width:100%!important; background:url('images/10/container2.png') no-repeat; background-size:100% 100%;}
#screen2 p { font-size: 22px; }
#col1_page2 p:last-child { padding-top: 10px; }

#col1_page1 p { margin-top: 26px; }

<?php if ($language == 'es_ES') : ?>
	h1 { font-size: 25px; }
	#col1_page1 p { margin-top: 8px; }
	#col2_page1 p { font-size: 20px; }
<?php endif; ?>
html[dir="rtl"] #title {margin-right: 458px;margin-bottom: 22px;}
html[dir="rtl"] h1 {font-size: 25px;}
html[dir="rtl"] #col1_page1 p {margin-right: 10px; margin-top: 20px;}
html[dir="rtl"] #col1_page2 p {margin-right: 15px;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	#title { padding: 50px 0 0; }
}	
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#col1_page2 { margin: 52px 0 0 53px; }
	#col2_page2 { margin: 50px 0 0 25px; }
	html[dir="rtl"] #title { margin-right: 385px; margin-bottom: 5px; }
	html[dir="rtl"] #col1_page1 p { margin-top: 0; }
	html[dir="rtl"] #col2_page1 { margin: -85px 0 0 15px; }
	html[dir="rtl"] #col1_page2 { margin: 15px 0 0 53px; }
	html[dir="rtl"] #col2_page2 { margin: 50px 0 0 15px; }
	html[dir="es"] #col1_page1 p { margin-top: 0; font-size: 22px; }
	html[dir="es"] #screen2 p { font-size: 19px; }
	html[dir="es"] #col2_page2 p { font-size: 20px !important; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<div id="title">
						<h1><?php echo _("More big ideas... about how diseases destroy"); ?></h1>
					</div>	
				<section id="col1_page1" class="fl">					
						<!-- <p><br/><?php //echo _("Since microbes can reproduce so quickly, the next question becomes how to fight the spread of disease caused by pathogens."); ?><br/>
						<?php //echo _("Some chemicals can stop microbial growth or destroy microbes like bleach and iodine. These chemicals are called <span class='key'>antimicrobial agents</span>."); ?> <br/>
						<?php //echo _("Some microorganisms can also produce these chemicals that destroy microbes. These are called <span class='key'>antibiotics</span>."); ?>							
						</p> -->
						<p><?php echo _("Since microbes can reproduce so quickly, the next question becomes how to fight the spread of disease caused by pathogens."); ?></p>
						<p><?php echo _("Some chemicals, like bleach and iodine, can stop microbial growth or destroy microbes."); ?></p>
						<!-- <p><?php //echo _("Some chemicals can stop microbial growth or destroy microbes like bleach and iodine. These chemicals are called <span class='key'>antimicrobial agents</span>."); ?></p> -->
						<p><?php echo _("Some microorganisms can also produce these chemicals that destroy microbes. These are called <span class='key'>antibiotics</span>."); ?></p>
				</section>
					
				<section id="col2_page1" class="fl">
					<figure id="scrn1a_img">							
						<img src="images/10/pills.jpg" />
					</figure>					
						<p><?php echo _("An important discovery in the battle against infectious disease occurred in the 1930s when scientists found that a particular kind of mold was able to kill several types of bacteria growing near it."); ?>
						<?php echo _("Scientists were able to create the antibiotic penicillin from it."); ?> 			
						</p>	
				</section>	
				<div class="clear"></div>
			</div>
			
			<div id="screen2" class="screens">
				<section id="col1_page2" class="fl">
					<p class="l-height"> 
						<?php echo _("Unfortunately, there is a growing problem with antibiotic use called <span class='key'>antibiotic resistance</span>."); ?>
					</p>
						<figure id="scrn2_img" class="animate">							
							<img src="images/10/animate.gif" />
						</figure>
					
					<p class="l-height no-pad">
						<?php echo _("Let's say there is a person who has an infection from bacteria and is given an antibiotic to treat it. While the antibiotic will kill most of the bacteria, some of the bacteria may have a genetic trait that gives them the ability to survive. Even though the antibiotic worked and killed many bacteria, it did not get rid of all of them. Those that survive reproduce and create more bacteria that have the ability to resist the antibiotic."); ?> </p>	
				</section>
				
				<section id="col2_page2" class="fl">					
						<p class="non-pad l-height">
							<?php echo _("Viruses are difficult to get rid of because they can live and reproduce inside of our cells – killing a virus also requires killing the cells where it lives."); ?> 
							<br/><br/>						
							<?php echo _("The best way to avoid getting sick from a virus is prevention. An example of prevention is a vaccine. For a vaccination, dead or weakened viral particles are injected into a person's body. The particles are mostly harmless, but the  person's immune system will still attack them and \"remember\" them as enemies. That way, if the person later contracts the live virus, his or her immune system is ready to fight."); ?>	</p>					
				</section>		
			</div>		
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Taking medications..."); ?></strong></section></section>	

<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
$(document).ready(function() {
	if(hash != "") {
	$('.screens').hide();
	$('#'+hash).show(function () {
	$('h1').fadeOut();

		var screen = hash[hash.length -1];
			if(screen < screenCount) {
			$('a.back-toggle').delay(300).fadeIn();			
			$('a.readmore-toggle').parent().attr('href','#screen' + screen);
		
		} else {
			$('a.back-toggle').delay(300).fadeIn();
			$('a.readmore-toggle').fadeOut(function(){
				$('a.next-toggle').fadeIn();
				});
			}
		});
	}
	
	 /* Back Transition */
$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "9.php";
		
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();
				$('a.next-toggle').fadeOut();
				$('a.readmore-toggle').fadeIn();
				$('h1').fadeIn();
		});
	}
});

/* Read More Screen Transition */
	$('a.readmore-toggle').click(function(){
		if($('#screen1').is(':visible')) { 
		$('h1').fadeOut();
		
		$('#screen1').fadeOut( function(){		
			$('a.readmore-toggle').fadeOut(function (){
			$('a.next-toggle').fadeIn();
			$('#screen2').fadeIn();
			$('a.back-toggle').attr('src','images/buttons/back2.png');
			}); 
		});
		}
	});
	
	/*var animate = ["images/10/animate1.png", "images/10/animate2.png"]; 
						
		var i = 1;
		setInterval(fadeDivs, 600);

			function fadeDivs() {					
				$('.animate img').fadeOut(5, function(){
					$(this).attr('src', animate[i]).fadeIn(5);
					if(i == 0) i = 1;
					else i = 0;
				})							
			}	*/		 
})
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
