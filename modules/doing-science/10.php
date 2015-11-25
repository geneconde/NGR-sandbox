<?php 
	require_once '../../session.php';
	$_SESSION['cmodule'] = 'doing-science';
	require_once '../../verify.php';
	require_once 'locale.php';
	
	if($user->getType() == 2) {
		$uf->updateStudentLastscreen(10, $_SESSION['smid']);
		$problem = $uf->getModuleProblem('doing-science');
		$sa = $uf->getProblemAnswer2($_SESSION['smid'],$problem['meta_ID']);
		$answered = ($sa ? 1 : 0 );
	} else $answered = 1;
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
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/10/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
.wrap {border-left: 1px dashed #B14346; border-right: 1px dashed #B14346;}
h1 {  padding:40px 0 0 40px; !important; color: #941421; font-size:30px !important;}
h2 {  margin:0;}
.key { color: #f44e14;}

article { width:95.5%; margin-bottom:10px; margin:0 auto;}
article h2 {color: #03668d; text-align:center;}
#ins {margin-top:110px; width:98%;}
figure{width:53%; max-height:95%; margin:0 auto; height:270px; max-height:95%;}
figure img { width:100%; height:100%;}
#buttons .next, img.back-toggle-screen { display:none; }
.allign-left{text-align:left !important; padding-top:0px;}
#title-container {border:1px solid black; width:92%; position:relative; top:5%; margin-bottom:50px;}
#title-container h1 {font-size:37px !important;}
#text-area {width:70%; height:350px; max-height:95%; margin:0 auto;}
textarea{ resize: none; font-size:24px; width:100%; height:80%;  -webkit-border-radius: 10px; -moz-border-radius: 10px;  border-radius: 10px;	padding-left:10px; margin-top:10px; border: none; font-family:'PlaytimeRegular';}
#pad-top{ position:relative; top:5%;}
html[dir="rtl"] p { padding-right: 35px; }
html[dir="rtl"] h1 { padding-right: 35px; font-size:27px !important; }
html[dir="rtl"] h2 { text-align: center; }

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
		
			<h1><?php echo _("Using what you know... about doing science... to solve a problem");?></h1><br/>
		
			<div id="screen1" class="screens">
				<section>
					<article>					
						<h2><?php echo _("The Situation");?></h2><br/>				
							<figure>
								<img src="images/10/kids.png">
							</figure><br/>	
						<p>
							<?php echo _("You have saved your money to buy a gaming system. You haven't decided what game product to purchase yet. After you have chosen which system to buy, your mom refuses to let you have one, explaining that you won't get enough exercise if you play video games all day.");?>
							
						</p>
						
					</article>							
				</section>						
			</div>
			
			<div id="screen2" class="screens">
				<section>
					<article>
						<br/><br/><br/>
							<h2><?php echo _("Your Task");?></h2><br/>					
						<p>
							<?php echo _("Using what you now know about being scientific, how would you go about making this decision? How would you go about doing a study that could convince your mom that her hypothesis is wrong? In the text box provided, key in the plan you would follow to make the decision as well as you would prove her hypothesis false.");?>
						</p>										
					</article><br/>
					
					<article>
						<div id="text-area">
							<textarea id="metaAnswer" rows="4" cols="50" placeholder="<?php echo _("Click here to start typing your answer...");?>" ></textarea>								
						</div>
					</article>
				</section>					
			</div>				
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="#" class="readmore readmore-toggle" title="<?php echo _("Read More"); ?>"><?php echo _("Read More"); ?></a>
		<a href="11.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Breaking the piggy bank");?>!</strong></section></section>		

<script>
var hash = window.location.hash.slice(1);
var screenCount = 2;
var metaAnswer ='';
var answered = <?php echo $answered; ?>;
var nullAnswer = false;
$(document).ready(function() {
	if(hash != "") {
	$('.screens').hide();
	$('#'+hash).show(function () {
	$('h1').fadeOut();

		var screen = hash[hash.length -1];			
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
			document.location.href= "9.php";		
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
			$('a.readmore-toggle').fadeOut(function (){
			$('a.next-toggle').fadeIn();
			$('#screen2').fadeIn();
			}); 
		});
		}
	});
	
	$('a.next-toggle').click(function(e){ 
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _('Please type your answer.'); ?>");
			nullAnswer = false;					
		} else {
			saveAnswer();	
		}
	});
});

function checkNull() {
 metaAnswer = jQuery("textarea#metaAnswer").val();
	if(metaAnswer == '' ) {
		nullAnswer = true;
	}
}
function saveAnswer(){
	if(answered ==0){
		saveMeta('doing-science', metaAnswer);
		answered = 1;
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>