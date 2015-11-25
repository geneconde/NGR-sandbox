<?php
	require_once '../tempsession.php';
	$_SESSION['cmodule'] = 'how-diseases-destroy';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("How Diseases Destroy"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; overflow: hidden; }	
.bg { background-image: url('images/16/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #E5C761; border-right: 1px dashed #E5C761;}
h1 { color: #7c3e1c; font-size:35px;}
h2 {color: #2d4c9c; text-align:left; padding:10px 1px 0 10px; margin:0;}
p { color: black; }
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }

.green {color:green;}
.red {color:red;}
#user_answer {padding:0;}
.no-pad{padding:0;}
figure img:hover {cursor: pointer;}

img.border {
	border: 4px solid #f0f0f0;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
	-webkit-backface-visibility: hidden; /* Fix for transition flickering */
}
img.border-off {
	border: 4px solid #e3007b;
	-webkit-transition: all .3s ease; /* Fade to color for Chrome and Safari */
}
.resize {height:25px; margin-right: 10px;}
#user_answer{vertical-align:top;}
#ans{margin:0 auto; width:100%; margin-top:10px;}

#choices { margin:0;  }
#choices img {height:230px; margin:10px 0 20px; }
#choices img:hover {border:4px solid #e3007b; cursor:pointer;}
#choices img:nth-child(even) {margin-left:60px;}

html[dir="rtl"] #ans p {text-align: center;}
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #1"); ?></h1>
					<h2><?php echo _("Which organism is made of one cell?"); ?> </h2>
					
					<figure id="choices">
						<img src="images/16/choice-a.png" id="a" data-name="A" class="border"/>
						<img src="images/16/choice-b.png" id="b" data-name="B" class="border"/>
						<img src="images/16/choice-c.png" id="c" data-name="C" class="border"/>
						<img src="images/16/choice-d.png" id="d" data-name="D" class="border"/>
					</figure>
					<div class="clear"></div>				
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1></h1>

					<div id="ans">
						<p><?php echo _("You answered..."); ?></p>
						<figure>
							<img src="" id="selected_img" />
						</figure>
						<p><img src="images/others/wrong.png" id="answer-icon" class="resize"/><span id="user_answer"></span></p>
					</div>
				</section>
			</div>
			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="17.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("And the first quiz question is..."); ?></strong></section></section>

<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var selected;
var id ='';
var nullAnswer = false;
var answered = 1;

$(document).ready(function() {
	$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
			document.location.href= "15.php";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){
				$('#screen1').fadeIn();				
				$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
				$('h1').text('<?php echo _("Quiz Question #1"); ?>');
				$('h1').fadeIn();
				$('a.back-toggle').attr('src','images/buttons/nextb.png');
				studentAnswer ='';
				$('#user_answer').removeClass('red');
				$('#user_answer').removeClass('green');
			});
		}
	});

	$('a.check-toggle').click(function(e) {
		checkNull();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert('<?php echo _("Please select your answer."); ?>');
			nullAnswer = false;
			studentAnswer ='';
		} else {
			checkAnswer();
			$('#screen1').fadeOut( function(){			
				$('a.check-toggle').fadeOut(function (){
					$('a.next-toggle').fadeIn();
					$('h1').text('<?php echo _("Quiz Question #1"); ?> - <?php echo _("How did I do?"); ?>');
					$('a.back-toggle').attr('src','images/buttons/back2.png');
					$('#answer').fadeIn();
				}); 
			});
			save();
		}
	});

	$('#choices img').each(function(){		
		$(this).click(function(){
			id = $(this).attr('id');			
			clearEverything();
			
			if(selected != $(this).attr('id')) {				
				$(this).addClass('border-off');
				selected = id;
			}
			
			var textstr = null;
			var selected_answer= null;
			
			switch (id){
				case 'a':						
					txtstr = '<?php echo _("This jelly fish is made up of billions of cells."); ?>';
					$('#selected_img').attr("src", "images/16/choice-a.png");					
					studentAnswer = 'A';				
					break;
				case 'b':				
					txtstr = '<?php echo _("This is not a single-celled organism."); ?>';
					$('#selected_img').attr("src", "images/16/choice-b.png")
					studentAnswer = 'B';
					break;
				case 'c': 					
					txtstr = '<?php echo _("This caterpillar is made up of billions of cells."); ?>';
					$('#selected_img').attr("src", "images/16/choice-c.png")
					studentAnswer = 'C';
					break;
				case 'd':					
					txtstr = '<?php echo _("Correct! This is a single-celled organism."); ?>';					
					$('#selected_img').attr("src", "images/16/choice-d.png");
					studentAnswer = 'D';
					break;
				default: break;				
			}
			
			$('#user_answer').text(txtstr);
			$('#selected_answer').text(selected_answer);
		});	
	});
});

function checkAnswer(){
	if(id == 'd'){
		$('#user_answer').addClass('green');
		$('#answer-icon').attr("src", "images/others/correct.png");
	} else {
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
	}
}

function checkNull() {
	if(id == '') {
		nullAnswer = true;
	}
}
	
function clearEverything() {
	$('#choices img').each(function() {
		$(this).removeClass('border-off');
	});
}
function save() {
	if(answered == 0) {
		saveAnswer('how-diseases-destroy-qq1-a', studentAnswer);					
		answered = 1;
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
