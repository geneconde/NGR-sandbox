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
<link rel="stylesheet" type="text/css" href="styles/video.css" />
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" href="styles/font-awesome.min.css">

<script src="scripts/jquery.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
.bg { background-image: url('images/17/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #A9333C; border-right: 1px dashed #A9333C;}
h1 { color: #61153e;}
h2 {text-align:left; padding:10px 0 0 10px; margin:0; font-weight:normal;}
p { color: black;}
.bg section{width:95%; margin:0 auto; position:relative; top:25px; min-height:100px;}
#buttons .next, #buttons img.back-toggle-screen { display:none; }
.allignment{text-align:left; padding: 10px 10px 0 10px; }
#ans {margin:0 auto;}
.resize {height:25px; vertical-align:middle;}
#user_answer{vertical-align:middle;}
.image-container img:nth-child(even) {margin-left:60px;}
.image-container { min-height:230px; margin:5px 0 5px 50px; float:left; width:40%;}
.image-container img{ width: 75%; cursor: pointer;}
#container {margin:0 auto; width:90%;}
.small_font {font-size:22px;}
.borderSelected{border:2px solid #61153e;}
.image-container img:hover {border:2px solid #61153e;}
html[dir="rtl"] p { padding-right:0; font-size: 20px; }
<?php if ($language == 'es_ES'): ?>
	#container p { font-size: 20px; text-align: center; }
<?php endif; ?>

@media all and (max-width : 1250px){
	h1 { padding-top: 10px;}
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	h1 { padding-top: 10px; }
	.image-container img { margin:0 auto; display: block; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	.image-container { margin: 5px 0 5px 30px; width: 45%; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #4");?></h1>				
					<h2> <?php echo _("Which of the following questions would least likely be answered by using the scientific method?");?> </h2>
					<div id="container">
						<div class="image-container">
							<img src="images/17/choice-a.png" id="a" data-name="A"/>
							 <p id="caption-a"><?php echo _("How do geese know to fly south in the winter?");?></p>
						</div>
						<div class="image-container">
							<img src="images/17/choice-b.png" id="b" data-name="B"/>
							 <p id="caption-b"><?php echo _("What is the middle name of your teacher?");?></p>
						</div>
						<div class="image-container">
							<img src="images/17/choice-c.png" id="c" data-name="C"/>
							 <p id="caption-c"><?php echo _("Why are some plants green?");?></p>
						</div>
						<div class="image-container">
							<img src="images/17/choice-d.png" id="d" data-name="D"/>
							 <p id="caption-d"><?php echo _("What causes ice to form?");?></p>
						</div>						
					<div class="clear"></div>
					</div>
					
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1><?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?"); ?></h1>					
					<p><?php echo _("You answered...");?></p>
					<figure>
						<img src="" id="selected_img" />
					</figure><br/><br/>
					<p id="selected_answer"></p><br/><br/>
					<p class="hidden"><img src="images/others/wrong.png" id="answer-icon" class="resize"/> <span id='user_answer'></span></p>
				</section>
			</div>					
		</div>
	</div>
	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="18.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><i class="fa fa-question"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Are you a scientist?");?></strong></section></section>


<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var textstr = "";
var selected;
var selected_answer= null;
var nullAnswer = false;
var id = "";
var answered = 1;
$(document).ready(function() {

	 /* Back Transition */
	$('a.back-toggle').click(function(){
			if($('#screen1').is(':visible')) {
			document.location.href= "16.php";			
			} else if ($('#answer').is(':visible')) {
				$('#answer').fadeOut(function (){
					$('#screen1').fadeIn();				
					$('a.next-toggle').fadeOut(function() { $('a.check-toggle').fadeIn(); });
					$('h1').text('<?php echo _("Quiz Question #4");?>');
					$('h1').fadeIn();
					selected_answer = '';
					$('#user_answer').removeClass('red');
					$('#user_answer').removeClass('green');
			});
		}
	});

	$('a.check-toggle').click(function(e){
		checkNull();
		checkAnswer();
		if(nullAnswer == true) {
			e.preventDefault();
			window.location.hash='';
			alert("<?php echo _("Please select your answer."); ?>");
			nullAnswer = false;
			selected_answer = '';
		} else {
			if($('#screen1').is(':visible')) { 				
			$('#screen1').fadeOut( function(){			
				$('a.check-toggle').fadeOut(function (){
				$('a.next-toggle').fadeIn();
				$('h1').text('<?php echo _("Quiz Question #4"); ?> - <?php echo _("How did I do?");?>');
				save();
				$('#answer').fadeIn();				
				}); 
			});
			}
		}
	});
	
});
	
	$('#container img').each(function(){
		$(this).click(function(){
			id = $(this).attr('id');			
			clearEverything();
			if(selected != $(this).attr('id')) {				
				$(this).addClass('borderSelected');
				selected = id;
			}		
			 switch (id){
				case 'a':						
					textstr = "<?php echo _('For discovering migration patterns of birds you could use the scientific method.');?>";
					selected_answer = $('#caption-a').text();
					$('#selected_img').attr("src", "images/17/choice-a.png");					
					studentAnswer = 'A';				
				break;
				
				case 'b':				
					textstr = "<?php echo _("Correct! To know your teacherʼs middle name you would simply do research, which is doing science, but not necessarily using the scientific method.");?>";
					//'
					selected_answer = $('#caption-b').text();					
					$('#selected_img').attr("src", "images/17/choice-b.png")
					studentAnswer = 'B';
				break;
				
				case 'c': 					
					textstr = "<?php echo _('To discover why some plants are green and have chlorophyll you would use the scientific method.');?>";
					selected_answer = $('#caption-c').text();
					$('#selected_img').attr("src", "images/17/choice-c.png")
					studentAnswer = 'C';
				break;
				
				case 'd': 					
					textstr = "<?php echo _('Finding out what causes ice to form is a great opportunity to practice using the scientific method.');?>";
					selected_answer = $('#caption-d').text();
					$('#selected_img').attr("src", "images/17/choice-d.png")
					studentAnswer = 'D';
				break;
				default:break;				
			 }
			 $('#user_answer').text(textstr);
			 $('#selected_answer').text(selected_answer);
			 $('p.hidden').removeClass('hidden');
		});		
	});
function clearEverything() {
	$('#container img').each(function() {
		$(this).removeClass('borderSelected');
	});
}

function checkAnswer(){
	if(id=='b') {
		$('#user_answer').addClass('green');
		$('#answer-icon').attr("src", "images/others/correct.png");
	}
	else {
		$('#user_answer').addClass('red');
		$('#answer-icon').attr("src", "images/others/wrong.png");
	}
}
function checkNull() {
	if(id=='') {
		nullAnswer = true;
	}
}
function save(){
	if(answered == 0){
		saveAnswer('doing-science-qq4-a', studentAnswer);					
		answered = 1;	
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
