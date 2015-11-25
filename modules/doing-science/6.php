<?php 
	require_once "../../session.php";
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once "locale.php";
	
	if($user->getType() == 2) $uf->updateStudentLastscreen(6, $_SESSION['smid']);
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Doing Science");?></title>
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
.bg { background-image: url('images/6/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
.wrap {border-left: 1px dashed #B9B7B8; border-right: 1px dashed #B9B7B8;}
h1 { color: #C67BAB; padding-left:10px;}
.bg > div{ width:100% !important; max-width:100% !important; padding: 10px 0 0 10px;}
.key { color: #f44e14;}

article { width:97.5%; margin-bottom:10px;}
article h2 {color: black;}
#ins {margin-top:110px; width:98%;}
figure{width:65%; max-height:95%; margin:0 auto; height:250px; max-height:95%; margin-top:-20px;}

#buttons .next, img.back-toggle-screen { display:none; }
.mtop{margin-top:80px;}

.non-pad{padding:0px !important; padding-top:5px !important;}
.mtop {margin-top:10px !important;}
.no-mtop {margin:0 !important;}

#col {width:54%; float:left; }
#scrn2_img {width:45%; max-height:95%; margin:0 auto; height:500px; max-height:95%; margin-top: 5px; position:relative; }

#scrn2_img img{
  display:none;
  position:absolute;
  top:0;
  left:0;
}
#scrn2_img img.active{
  display:block;
}

p { text-align: left; }

#scrn2 {width:95%;} 
#scrn1 {width:95%;} 
.nopad {padding-top:0;}
#screen2 p {line-height:28px;}

html[dir="rtl"] #screen2 p { padding-right: 20px; }
html[dir="rtl"] p { padding-right: 35px; }
html[dir="rtl"] h1 { padding-right: 35px; }
html[dir="rtl"] #col {width:53%; }
html[dir="rtl"] #scrn2_img {margin-right: 15px;}

<?php if ($language == 'es_ES'): ?>
	#screen2 p { font-size: 22px; }
<?php endif; ?>
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.bg > div { width: 95% !important; }
	#col { width: 45%; }
	#scrn2 { width: 100%; }
	#scrn2_img { width: 45%; float: left; }
	html[dir="rtl"] #col { width: 44%; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1><?php echo _("More big ideas... about doing science");?></h1>
			<div id="screen1" class="screens">
				<section id="scrn1">					
					<p>
						<?php echo _("The <span class=\"key\">hypothesis</span> is your proposed explanation of how you think the phenomenon in question (what you have observed) works. A <span class=\"key\">prediction</span> is a testable statement about what you think may happen if certain events occur or if you do certain things. A <span class=\"key\">scientific investigation</span> is what is done to test predictions and to provide <span class=\"key\">evidence</span> to support or reject your hypothesis.");?>							
					</p>
					<figure>
						<img src="images/6/lab.png"/>
					</figure>
			
					
					<article>
						<p>
							<?php echo _("Once you have a question, a hypothesis and a prediction, you are ready to do some science and the fun begins. Scientists check their hypothesis through studies that involve <span class=\"key\">systematic observations</span> and data collection. An <span class=\"key\">experiment</span> involves setting up situation in which you can make systematic observations and record those observations. The record of observations is called <span class=\"key\">data</span>.");?> 
						</p>		
					</article>
				</section>						
			</div>
			
			<div id="screen2" class="screens">
				<section  id="scrn2">									
						
						<div id="col">
							<p><?php echo _("Data can be observations of things such as length, weight, time, volume, color, or texture ...whatever it is you want to study. Some things you might observe can't be measured – like the color of a bird or where the bird builds its nest. These are called qualitative observations. But other observations can be measured. For example, a study of plants could involve measuring how much a plant grows over a period of time to test a hypothesis that temperature or soil type affects plant growth. These are called quantitative observations.");?></p>
							<p><?php echo _("<span class=\"key\">Data analysis</span> is when you analyze your recorded data to see if your prediction was correct or not. Tables, graphs, and graphic organizers are part of the analysis that can be used to show the data collected during the investigation.");?></p>
						</div>

						<figure class="fr" id="scrn2_img">
							<img src="images/6/1.png" class="active"/>
							<img src="images/6/2.png" />
							<img src="images/6/3.png" />
							<img src="images/6/4.png" />
							<img src="images/6/5.png" />
							<img src="images/6/6.png" />
							<img src="images/6/7.png" />
							<img src="images/6/8.png" />
							<img src="images/6/9.png" />
							<img src="images/6/10.png" />
							<img src="images/6/11.png" />
							<img src="images/6/12.png" />
							<img src="images/6/13.png" />
							<img src="images/6/14.png" />
						</figure>
						<div class="clear"></div>
							<p><?php echo _("Analyzing your data allows you to support or reject your <span class=\"key\">explanation</span> about your research question. The results of your investigation should state whether your data supports your evidence or not. When data is used to support or reject a <span class=\"key\">claim</span> the data is now considered evidence.");?></p>
								
				</section>					
			</div>		
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="7.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Collecting the specimens...");?></strong></section></section>		

<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
$(document).ready(function() {
	if(hash != "") {
	$('.screens').hide();
	$('#'+hash).show(function () {
	$('h1').fadeOut();

		var screen = hash[hash.length -1];
			$('.bg').css('background-image','url(images/6/bg.jpg)');
			if(screen < screenCount) {			
			$('a.back-toggle-screen').delay(300).fadeIn();
			$('a.readmore-toggle').parent().attr('href','#screen' + screen);
		
		} else {			
			$('a.back-toggle-screen').delay(300).fadeIn();
			$('a.readmore-toggle').fadeOut(function(){
				$('a.next-toggle').fadeIn();
				});
			}
		});
	}
	
	 /* Back Transition */
$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "5.php";
		
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut(function(){
				$('a.readmore-toggle').fadeIn();
				});
				
				$('h1').fadeIn();
		});
	}
});

/* Read More Screen Transition */
	$('a.readmore-toggle').click(function(){
		if($('#screen1').is(':visible')) { 
		$('h1').fadeOut();
		
		$('#screen1').fadeOut( function(){			
			$('#screen2').fadeIn();
			$('a.readmore-toggle').fadeOut(function (){
			$('a.next-toggle').fadeIn();
			}); 
		});
		}
	});
	setInterval('swapImages()', 500);
});
function swapImages(){
  var $active = $('#scrn2_img .active');
  var $next = ($('#scrn2_img .active').next().length > 0) ? $('#scrn2_img .active').next() : $('#scrn2_img img:first');  

    $active.removeClass('active');
    $next.addClass('active');
}	
</script>
<?php require("setlocale.php"); ?>
</body>
</html>