<?php 
	require_once("../tempsession.php"); 
	$_SESSION['cmodule'] = 'life-cycle-of-plants';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Life Cycle of Plants");?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom.63321.js"></script>
<script src="scripts/save-answer.js"></script>
<script>
var studentAnswer= '';
var answered = 1;
var nullAnswer = false;
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

/* screen transition */	
	$('a.back-toggle').click(function(){
		if( $('#screen1').is(':visible') ) {
			document.location.href= "9.php";
		} else if( $('#screen2').is(':visible') ) {
			$('#screen2').fadeOut(function(){ $('a.readmore-toggle').fadeIn(); $('#screen1').fadeIn(); $('a.back-toggle').fadeIn(); $('h1').fadeIn(); 
				$('a.readmore-toggle').parent().attr('href','#screen2'); 
				$('a.back-toggle').parent().attr('href','');
			});
			$('a.back-toggle').fadeOut();
			$('a.next-toggle').fadeOut(); 
			removeHash();
		} 
	});
	
	$('a.readmore-toggle').click(function(){
		if( $('#screen1').is(':visible') ) { 	
			$('h1').fadeOut();	
			$('a.readmore-toggle').fadeOut();
			$('a.next-toggle').delay(500).fadeIn();
			$('#screen1').fadeOut(function(){ $('#screen2').fadeIn();  $('a.back-toggle').fadeIn(); });				
			removeHash();
			addHash('#screen2');
		} 
	});
	
	$('a.next-toggle').click(function(e){ 
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please type your answer below.");?>");
			nullAnswer = false;					
		} else {		
		
		$('h1').fadeOut();
		saveAnswer();
		$('a.back-toggle').fadeIn(); 
		$('a.readmore-toggle').fadeOut();
		$('a.next-toggle').fadeOut();
		$('#screen1').fadeOut(function(){ $('#screen2').fadeIn();}); 
		$('#sun').css('display','none');
		addHash('#screen2');
		}
	});
});

function saveAnswer(){
	studentAnswer = jQuery("textarea#studentAnswer").val();
	if(answered ==0){
		saveMeta('life-cycle-of-plants', studentAnswer);
		answered = 1;
	}
}
	
function checkNull() {
var thought = jQuery("textarea#studentAnswer").val();
	if(thought == '' ) {
		nullAnswer = true;
	}
}

</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';}
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background-image: url('images/10/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100%; height:100%;  position:relative; overflow:hidden; }

#screen1 { text-align: center;  max-width: 100%; margin: 0 auto; }
#screen2 { margin:0 auto; display: none; text-align: center;  max-width: 100%;  margin-top: 0%;}

.centered {margin:0 auto;}
.clear { clear:both;}
.orange { color: orange; }
.red { color: red; }
.green { color: green; }
.purple { color: purple; }
.brown { color: brown !important; margin: 0px; }
.bold { font-weight: bold; }
.i-red { color: indianred; }


.box{width:96%;margin:0 auto;z-index:1;margin-bottom:5px;color:black;}

.box p{font-size:24px;text-align:center;}

.mtop{margin-top:5px;}
textarea {
    -webkit-border-radius: 15px;
    -moz-border-radius: 15px;
    border-radius: 15px;
	padding-left:15px;
	font-family: PlaytimeRegular;
	font-size:24px;
	height: 265px;
	outline: none;
	border:1px solid black;
	resize: none;
}
textarea:focus {
    box-shadow: inset 0 0 3px 2px #f90; /* provides a more style-able
                                           replacement to the outline */
}​

#title-container{width:100%;text-align:left;padding:10px 0px 0px 15px;}

#title-container h1{
font-size:35px;
color: #41838E;
}

.question-container{width:95%;padding:10px 0px 0px 15px !important;}
.question-container h3{font-size:24px;color:black !important;}
.question-container p{font-size:24px;text-align:left; color:black !important; margin-top: 10px;}

.video-container{
width:45%;
height:240px;
margin:0 auto;
	border: 6px solid #000;
	-moz-border-radius: 15px;
	border-radius: 15px;
margin-bottom:20px;
overflow:hidden;
}
.alignment{margin-top:21px; padding-left:16px; color: #41838E; font-size: 28px;}
.mtop{margin-top: 71px;}
figure img {
	 -webkit-border-radius:10px;
	 -moz-border-radius:10px;
	 border-radius:10px;
	 margin:0;
	 width: 50%;
	 height: 247px;
}
figure { margin-top:3px;}

html[dir="rtl"] h1 { padding-right: 20px; }
html[dir="rtl"] .question-container p { text-align: right !important; padding-right: 20px; }

<?php if($language == "es_ES") { ?>
	h1 { font-size: 22px !important; }
	p { font-size: 24px !important; text-align: left !important; }
<?php } ?>
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap">
		<div class="bg">									
					<h1 class="alignment"><?php echo _("Using what you know... about the life cycle of plants... to solve a problem");?></h1>
					
					<div id="screen1">
						<div class="question-container">
							<h2 class="brown"><?php echo _("The Problem");?></h2>
								<p><?php echo _("During crops planting season in North America, farmers count on honeybees to pollinate the flowers for us to get almost a third of our food. The problem is that the honeybees are decreasing in population. No one is exactly sure why, but the honeybee colonies are in trouble and recently almost 25% of them have been lost. You have been called in to advise the department of agriculture on the problem.");?>
								</p>
							<figure>
								<img src ="images/10/beepollination.jpg"/>
							</figure>
						</div>						
					</div>
					<div class="clear"></div>
				<!--SCREEN 2-->
					<div id="screen2">
						<div class="screen2">						
							<div class="question-container">										
								<h3><span class="orange"><?php echo _("Your Task");?></span></h3>
									<p><?php echo _("Using what you know about plants and what you can research about honeybees, what are some things you would advise the department to consider to ensure that the plants get pollinated? Key in your possible solutions in the textbox below.");?>
									</p><br/>
									<textarea id="studentAnswer" rows="15" cols="50" placeholder="<?php echo _("Click here to start typing your answer...");?>"></textarea>
							</div>
						</div>						
					</div>				
		</div>	<!---END-->		
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>	
	<section id="preloader"><section class="selected"><strong><?php echo _("The colony collapse");?></strong></section></section>
<?php include("setlocale.php"); ?>
</body>
</html>
