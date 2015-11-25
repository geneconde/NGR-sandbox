<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once 'locale.php';
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
<link rel="stylesheet" href="styles/font-awesome.min.css">
<script src="scripts/jquery.min.js" /></script>
<script src="scripts/jpreloader.js" /></script>
<script src="scripts/jquery.blink.min.js" /></script>
<script src="scripts/jquery.wiggle.min.js" /></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/global.js" /></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<style>
.bg { background-image: url('images/3/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
.wrap {border-left: 1px dashed #B9B7B8; border-right: 1px dashed #B9B7B8;}
h1 { color: #b10a5c;}
.key { color: rgb(42, 111, 165);}
.h-light {color: #e230b1;}

article { width:97.5%; margin-bottom:10px;}
article h2 {color: black;}
#ins {margin-top:110px; width:98%;}
figure{width:75%; max-height:95%; margin:0 auto; margin-top:30px; height:400px; max-height:95%;}

#buttons a.next, #buttons img.back-toggle-screen { display:none; }
.mtop{margin-top:30px;}

.non-pad{padding:0px !important; padding-top:5px !important;}
.allign-left{text-align:left !important; padding-top:0px;}
.no-mtop {margin:0 !important;}

label {font-size:22px; margin:5px 0px !important;}

#scrn2 {width:95%;}
#scrn2 p{
-webkit-margin-before: 0em;
-webkit-margin-after: 0em;}

#choices { width: 27%; margin-top: 10px; float: left; list-style: none; margin-right: 10px; }
#sortable { width: 65%; float: left; margin-top: 10px; list-style: none; margin-left: 20px; cursor:pointer; position: relative; z-index: 6; }
#choices li { 
	width: 100%; 
	margin: 5px 0px; 
	background-color: #01A0E1; 
	padding: 0 5px; 
	min-height: 60px; 
	max-height: 60px;
	-webkit-border-radius:10px; 
	-moz-border-radius:10px;
	border-radius:10px;
	font-size: 18px;
}
#sortable li { 
	background-color: #F4B757;
	margin: 5px 0px; 
	min-height: 60px; 
	max-height: 60px;
	padding: 0 5px; 
	-webkit-border-radius:10px; 
	-moz-border-radius:10px; 
	border-radius:10px;
	}

.bg ul { margin: 0; padding: 0; text-align: center; }
#choices li p { text-align: center;  }

.bg p { font-size: 20px;}
#screen2 p { font-size: 24px !important; }

<?php if ($language == 'zh_CN'): ?>
	.bg p { font-size: 24px !important; }
<?php endif; ?>


@media all and (max-width : 1250px){
	#sortable li, #choices li {
		min-height: 50px;
		max-height: 50px;
	}

	#sortable p, #choices p {
		font-size: 18px;
		line-height: 24px;
	}
}

@media all and (max-width : 830px){
	#sortable p, #choices p {
		padding: 0;
		font-size: 18px;
		line-height: 24px;
	}

	#sortable li, #choices li {
		min-height: 45px;
		max-height: 45px;
	}
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
	.bg ul { margin-top: 0 !important; }
	#screen1 ul li p { padding: 0; font-size: 19px !important; }
	/*#choices { width: 20%; }
	#sortable { width: 75%; }*/
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="screen1" class="screens">
				<h1><?php echo _("Checking what you know... about doing science");?></h1>
				<p><?php echo _("Mary and Hakim were watching squirrels on the school playground one day and they both became curious about why the squirrels were digging holes on the field and in the woods on the edge of the playground. They both had different ideas on what the squirrels were up to so they decided to investigate squirrel behavior and then they argued about what they thought the squirrels were doing.");?></p>		
				<p><?php echo _("Match the scientific practices (left column) Mary and Hakim used in their experiences (right column) in trying to figure out what the squirrels were doing near the playground."); ?></p>
				<ul id="choices">
					<li><p><?php echo _("Making observations"); ?></p></li>
					<li><p><?php echo _("Asking a good question"); ?></p></li>
					<li><p><?php echo _("Designing an investigation"); ?></p></li>
					<li><p><?php echo _("Collecting Data"); ?></p></li>
					<li><p><?php echo _("Making a claim about what is right"); ?></p></li>
					<li><p><?php echo _("Supporting a claim with evidence"); ?></p></li>
				</ul>
				<ul id="sortable">
					<li>
						<div id="mark1"></div><span data-name="A"></span>
						<p><?php echo _("Arguing what they thought was going on by telling each other what observations and data they collected."); ?></p>
					</li>
					<li>
						<div id="mark2"></div><span data-name="B"></span>
						<p><?php echo _("Telling each other what they thought the squirrels were doing digging those holes."); ?></p>
					</li>
					<li>
						<div id="mark3"></div><span data-name="C"></span>
						<p><?php echo _("Watching a squirrel in your neighborhood burying nuts."); ?></p>
					</li>
					<li><div id="mark4"></div><span data-name="E"></span>
						<p><?php echo _("Trying to carefully focus on one thing they were trying to find an answer to."); ?></p>
					</li>
					<li><div id="mark4"></div><span data-name="F"></span>
						<p><?php echo _("Making a plan on how to systematically make observations to figure out what the squirrels were doing."); ?></p>
					</li>
					<li><div id="mark4"></div><span data-name="G"></span>
						<p><?php echo _("Counting how many holes the squirrels dug in the field and in the woods."); ?></p>
					</li>	
				</ul>				
			</div>
			
			<div id="screen2" class="screens">
				<section id = "scrn2">					
					<p>
						<?php echo _("Experiments don't always have clear results.  When results from different trials are not consistent, it is important to make sure that all the trials were done the same and the measurements were done the same as well. The students should look for differences in the ways they did their experiment. They should not throw out their results or draw conclusions without examining the method of experimentation.");?>
					</p>					
					<img src="images/3/kids.png" class="mtop"/>								
				</section>					
			</div>			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Throwing rulers...");?></strong></section></section>

<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
$(document).ready(function() {
	if(hash != "") {
		$('h1').fadeOut();
		$('.screens').hide();
		$('#'+hash).show(function () {

			var screen = hash[hash.length -1];
				$('.bg').css('background-image','url(images/3/bg.jpg)');
				if(screen < screenCount) {
				
				$('a.back-toggle-screen').delay(300).fadeIn();
				$('a.check-toggle').parent().attr('href','#screen' + screen);
			
			} else {
				
				$('a.back-toggle-screen').delay(300).fadeIn();
				$('a.check-toggle').fadeOut(function(){
					$('a.next-toggle').fadeIn();
					});
			}
		});
	}
	
	 /* Back Transition */
$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
		document.location.href= "2.php";		
		} else if ($('#screen2').is(':visible')) {
			$('#screen2').fadeOut(function (){
				$('#screen1').fadeIn();	
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('h1').fadeIn();
		});
	}
});

/* Read More Screen Transition */
	$('a.check-toggle').click(function(){
		if($('#screen1').is(':visible')) { 
		$('h1').fadeOut();
		
		$('#screen1').fadeOut( function(){			
			$('#screen2').fadeIn();
			$('a.check-toggle').fadeOut(function (){
			$('a.next-toggle').fadeIn();
			}); 
		});
		}
	});
	$( "#sortable" ).sortable({ scroll: false, containment: "#sortable" });
	$( "#sortable" ).disableSelection();
})
</script>
<?php include("setlocale.php"); ?>
</body>
</html>
