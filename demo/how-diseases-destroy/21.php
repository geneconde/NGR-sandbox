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
<link rel="stylesheet" type="text/css" href="styles/global.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.custom2.js"></script>
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/global.js"></script>
<script src="scripts/jquery-ui.js"></script>
<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<script src="scripts/save-answer.js"></script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }	
.bg { background-image: url('images/21/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative; }
.wrap {border-left: 1px dashed #78EFF1; border-right: 1px dashed #78EFF1;}
h1 { color: #a85592; font-size:35px;}
h2 {color: #2d4c9c; text-align:left; padding:10px 1px 0 10px; margin:0;}
p { color: black; }
.bg section{width:100%; margin:0 auto; position:relative; top:20px; min-height:100px;}
#buttons .next, img.back-toggle-screen { display:none; }
#user_answer {padding:0;}
.resize {height:25px;}
#user_answer{vertical-align:top;}
.allignment{text-align:left; padding: 10px 10px 0 10px;}
#sortable { width: 28%; list-style: none; float: left; padding: 0; margin:0 20px 0 90px;}
#sortable li { background-color: #f49f9c; margin: 0 0 9px 5px !important; padding: 10px 47px 10px 37px; text-align: center; font-size: 21px; cursor: pointer; color: black;  -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
#choices {width: 40%; list-style: none; float: left; padding: 0; margin:0 0 0 20px; }
#choices li { background-color: #eae885; margin: 0 0 9px 5px !important; padding: 10px 47px 10px 37px; text-align: center; font-size: 21px; color: black;  -webkit-border-radius:10px; -moz-border-radius:10px; border-radius:10px; margin:0;}
#container{ margin:70px 0 0 0; float: left; width:100%;}
#arrow{float:left; margin:0; margin-top: 6px; margin-left: 3px; }
#arrow img {margin-bottom:20px;}
#ans { width:100%; float:left;}
#sortable img { display: none; height: 33px; margin:-3px 0 0 -70px; float: left; }

html[dir="rtl"] #choices li {padding: 10px 2px 10px 2px;width: 353px;}
html[dir="rtl"] #choices {margin: 0 0 0 40px;}
html[dir="rtl"] #answer p {text-align:center;}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#sortable { width: 33%; margin: 0 10px; }
	#choices { width: 48%; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) and (-webkit-min-device-pixel-ratio: 1) {
	#sortable { width: 35%; margin: 0 20px 0 5px; }
	#choices { width: 50%; }
	html[dir="rtl"] #choices { margin: 0 0 0 -40px; }
}	
</style>

</head>
<body>
	<div class="wrap" >
		<div class="bg">			
			<div id="screen1" class="screens">				
				<section>					
					<h1><?php echo _("Quiz Question #6"); ?></h1> 
					<h2><?php echo _("Match the common health conditions on the left to the chemicals on the right that may be linked to them by dragging the items in the right column up or down."); ?> </h2>
					
					<div id="container">
					
						<ul id="sortable">
							<li class="ui-state-default"><span data-name="A"></span><?php echo _("Asthma"); ?></li>
							<li class="ui-state-default"><span data-name="B"></span><?php echo _("Birth Defect"); ?></li>
							<li class="ui-state-default"><span data-name="C"></span><?php echo _("Cancer"); ?></li>
							<li class="ui-state-default"><span data-name="D"></span><?php echo _("Learning Disorder"); ?></li>													
						</ul>
						<figure id="arrow">
							<img src="images/21/arrow.png" class="wiggle-right"/>
							<div class="clear"></div>
							<img src="images/21/arrow.png" class="wiggle-right"/>
							<div class="clear"></div>
							<img src="images/21/arrow.png" class="wiggle-right"/>
							<div class="clear"></div>
							<img src="images/21/arrow.png" class="wiggle-right"/>
							<div class="clear"></div>
						</figure>													
						<ul id="choices">
							<li><?php echo _("Pesticide and lead exposure"); ?></li>
							<li><?php echo _("Allergens and air pollution"); ?></li>
							<li><?php echo _("Drinking alcohol when pregnant"); ?> </li>
							<li><?php echo _("Tobacco use and radiation"); ?></li>							
						</ul>															
					</div>
					<div class="clear"></div>
				</section>							
			</div>
			
			<div id="answer" class="screens">
				<section>
					<h1></h1>
					<p><?php echo _("You answered..."); ?></p><br/><br/>
					<div id="ans"></div>
					<p><span id="user_answer"></span></p>	
				<div class="clear"></div>
			</div>			
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="22.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Health and sickness"); ?></strong></section></section>

<script>
/* Back Screen */
var hash = window.location.hash.slice(1);
var screenCount = 2;
var studentAnswer = "";
var selected;
var nullAnswer = false;
var sAnswers = [];
var answered = 1;
$(document).ready(function() {
	$('a.back-toggle').click(function(){
		if($('#screen1').is(':visible')) {
			document.location.href= "20.php";			
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){							
				$('a.next-toggle').fadeOut(function(){ $('a.check-toggle').fadeIn(); });
				$('h1').text('<?php echo _("Quiz Question #6"); ?>');
				$('h1').fadeIn();
				$('#sortable').appendTo('#container');
				$("#sortable" ).sortable('enable');	
				$('#sortable img').css('display','none');
				$('#arrow').appendTo('#container');
				$('#choices').appendTo('#container');
				$('a.back-toggle').attr('src','images/buttons/nextb.png');
				studentAnswer = '';
				$('#user_answer').removeClass('red');
				$('#user_answer').removeClass('green');
				$('#screen1').fadeIn();	
			});
		}
	});

	$('a.check-toggle').click(function(e){
		checkAnswer();
		$('#screen1').fadeOut( function(){
			$('a.check-toggle').fadeOut(function (){ $('a.next-toggle').fadeIn(); }); 
			$('h1').text('<?php echo _("Quiz Question #6"); ?> - <?php echo _("How did I do?"); ?>');
			$('a.back-toggle').attr('src','images/buttons/back2.png');
			$( "#sortable" ).sortable('disable');
			$('#answer').fadeIn();
		});
		save();
	});
$( "#sortable" ).sortable({ scroll: false, containment: "#sortable" });
$( "#sortable" ).disableSelection();	
});

function checkAnswer() {	
	var answers = ["D","A","B","C"];
	var image ='';
	var arr = new Array();
	var ctr = 0;
	var num = 0;
	
	$('#sortable span').each(function(index){
		var name = $(this).data('name');
		if(answers[ctr] == name) {
			image = "<img src='images/others/correct.png'>";
			$(this).html(image);
			num++;
		} else {
			image = "<img src='images/others/wrong.png'>";
			$(this).html(image);
		}
		ctr++;
		
		sAnswers.push(name);
	});
	
	$('#sortable img').css('display','inline-block');
	$('#sortable').appendTo('#ans');
	$('#arrow').appendTo('#ans');
	$('#choices').appendTo('#ans');
	
	var textstr = "";
	if (num >= 4) {
		textstr = "<?php echo _("Correct! Allergens and air pollution are often linked to the increased cases of asthma. Pregnant women should avoid: tobacco use, excessive caffeine consumption, and drinking alcohol to avoid birth defects. Cancers can be linked to tobacco use, radiation, and environmental pollutants. Learning and behavioral disorders can be linked to exposure to toxic chemicals, such as pesticides, and heavy metals, such as lead."); ?> ";
		$('#answer-icon').attr("src", "images/others/correct.png");
		$('#user_answer').addClass('green');
		
	} else { 
		textstr = "<?php echo _("Not quite. Allergens and air pollution are often linked to the increased cases of asthma. Pregnant women should avoid: tobacco use, excessive caffeine consumption, and drinking alcohol to avoid birth defects. Cancers can be linked to tobacco use, radiation, and environmental pollutants. Learning and behavioral disorders can be linked to exposure to toxic chemicals, such as pesticides, and heavy metals, such as lead."); ?> ";
		$('#answer-icon').attr("src", "images/others/wrong.png");			
		$('#user_answer').addClass('red');
	}
	$('#user_answer').text(textstr);
}

 function save() {
	if (answered == 0) {
		saveAnswer('how-diseases-destroy-qq6-a', sAnswers[0]);
		saveAnswer('how-diseases-destroy-qq6-b', sAnswers[1]);
		saveAnswer('how-diseases-destroy-qq6-c', sAnswers[2]);
		saveAnswer('how-diseases-destroy-qq6-d', sAnswers[3]);
		answered = 1;
	}
}
</script>
<?php require("setlocale.php"); ?>
</body>
</html>
