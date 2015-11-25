<?php 
	require_once("../tempsession.php"); 
	$_SESSION['cmodule'] = 'life-cycle-of-plants';
	require_once '../../verify.php';
	require_once 'locale.php';
?>
<!DOCTYPE html>
<html lang="en" <?php if($language == "ar_EG") { ?> dir="rtl" <?php } ?>>
<head>
<title><?php echo _("Life Cycle of Plants"); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="viewport" content="initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/locale.css" />
<link rel="stylesheet" type="text/css" href="styles/fonts.css" />
<link rel="stylesheet" type="text/css" href="styles/jpreloader.css" />
<link rel="stylesheet" type="text/css" href="styles/hexaflip.css" />
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.wiggle.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/save-answer.js"></script>
<script>
var answer = "";
$(document).ready(function() {
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });

	$('a.back-toggle').click(function(){
		if( $('#screen1').is(':visible') ) {
			document.location.href= "17.php";
		} else {
			$('#answer').fadeOut(function(){ $('#screen1').fadeIn(); 
				$('a.next-toggle').fadeOut(function(){  $('a.check-toggle').fadeIn();});
				$('#screen1').fadeIn();
				$('#answer1').removeClass('red');
				$('#answer1').removeClass('green');
				$('#answer-icon').removeClass('img-align');
				$('#hexaflip').appendTo($('#instruction_box'));		
				$('#hexaflip').css('margin','10px auto');
				$('h1').text('<?php echo _("Quiz Question #5");?>');
			});
				hexa._onTouchStart = function(e, cube) {
				  e.preventDefault();
				  cube.touchStarted = true;
				  cube.holder.classList.add('no-tween');
				  if (e.type === 'touchstart') {
					return cube.start = e.touches[0][this.eProp];
				  } else {
					return cube.start = e[this.eProp];
				  }
				};
		}
	});
	
	/* screen transition */	
	$('a.check-toggle').click(function(){			
		$('#screen1').fadeOut(function(){ 
			$('#answer').fadeIn();
			$('h1').text('<?php echo _("Quiz Question #5")?> - <?php echo _("How did I do?");?>');
			save();
			hexa._onTouchStart = function(e, cube) {
				     e.preventDefault();					  
			 }
		});
		
		$('a.check-toggle').fadeOut(function(){  
			$('a.next-toggle').fadeIn(); 
			$('a.back-toggle').fadeIn();  
		});
	});
});

var answered = 1;
var textstr  = null;

function save() {
	var hexavalue = hexa.getValue();
	if (hexavalue == './images/misc/a.png') answer = "A";
	if (hexavalue == './images/misc/b.png') answer = "B";
	if (hexavalue == './images/misc/c.png') answer = "C";
	if (hexavalue == './images/misc/d.png') answer = "D";

	if(answer == "C") {
		textstr = "<?php echo _("Correct. from day 1 to day 6, the plant’s growth was relatively steady, until it experienced a very noticeable change when its height went from 2.7 to 1.1 cm.");?>";
		$('#textanswer').text('<?php echo _("The plant showed steady growth until it experienced a very noticeable change.");?>');
		$('#answer-icon').attr("src", "images/misc/correct.png");
		$('#answer1').addClass('green');
	} else {
		textstr = '';
		if(answer == "A") {
			textstr = "<?php echo _("No, after day 6 the plant's growth did not slow down; its height went from 2.7 to 1.1 cm. This is a noticeable change.");?>";
			$('#textanswer').text('<?php echo _("The plant grew very quickly, and then slowed down its growth.");?>');
		} else if (answer == "B") {
			textstr = "<?php echo _("No, from day 1 to day 6, the plant's growth was relatively steady, until it experienced a very noticeable change.");?>";
			$('#textanswer').text('<?php echo _("The plant grew very slowly, and then sped up its growth.");?>');
		} else if (answer == "D") {
			textstr = "<?php echo _("No, most of the growth was steady, but after day 6 its height went from 2.7 to 1.1 cm.");?>";
			$('#textanswer').text('<?php echo _("The plant grew in a steady manner throughout the time of observation.");?>');
		}
		$('#answer-icon').attr("src", "images/misc/wrong.png");
		$('#answer-icon').addClass('img-align');
		$('#answer1').addClass('red');
	}
	
	if(answered == 0){
		saveAnswer('life-cycle-of-plants-qq5-a', answer);					
		answered = 1;	
	}
	
	$('#answer1').text(textstr);
	$('#answer1').fadeIn();
	$('#answers p:nth-child(3)').before($('#hexaflip'));
	$('#hexaflip').removeClass('mtop');
	$('#hexaflip').css('margin','0 auto');
}
</script>
<style>
html { background-color: #FFFFFF; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular';min-height: 450px; color: black;  }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #98D3F3; border-right: 1px dashed #98D3F3; padding: 0 2px; }
.bg { background: url("images/18/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}
#screen1 { text-align: left;  max-width: 95%; margin: 0 auto;}
#answer { display: none; text-align: center;  max-width: 95%; margin-top: 70px !important; margin:0 auto;}
.img-align { vertical-align: sub; }
.clear { clear:both;}
.hexaflip { margin: 0 auto; }

.key{color: rgb(42, 111, 165);}
.bold { font-weight: bold; }
.small { font-size:18px; }
.hidden { display: none; }
@-webkit-keyframes infinite-spinning {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}
@-moz-keyframes infinite-spinning {
    from { -moz-transform: rotate(0deg); }
    to { -moz-transform: rotate(360deg); }
}
@-webkit-keyframes infinite-spinning {
    from { -webkit-transform: rotate(0deg); }
    to { -webkit-transform: rotate(360deg); }
}
#sun {
	height: 33%;
	position: absolute;
	margin-left: 78%;
	margin-top: -7%;
	width: 35%;
	background:url("images/misc/sun.png") no-repeat center;
     -webkit-animation: infinite-spinning 5s infinite;
     -moz-animation: infinite-spinning 5s infinite;
     -o-animation: infinite-spinning 5s infinite;
}

#question-container{ width:95%; }
#question-container h2{ font-size:24px; color:darkcyan; }
#question-container p { font-size:24px; line-height: 41px; margin: 0;}
h2, p{ font-size:24px; font-weight:normal; }
.fleft { float:left; }
.t-indent{ text-indent:10px; }
.mbottom{ margin-bottom:20px; }
.f-size { font-size:20px; }
.f-weight{font-weight:normal !important;}
.alignment { margin-top: 10px; padding-left:17px; font-size:35px; color:#41838E;}
.blue {color: rgb(42, 111, 165);}
.red { color: red; }
.green { color: green; }
.fright{ float:right; }
#answer-icon, #answer-icon { display:inline-block; margin-right:5px;}
.mtop {margin-top:70px !important;}

.l-coral {color:lightcoral;}
.black{color:black !important;}
#instruction_box {width:57%; float:left;}
#instruction_box p{color:black; font-size:24px; color:#8A5101; margin:0;}
#box {width:95%; text-align:center; margin-top:10px; }
.no-marg{margin:0;}
#answer p {margin:0;}
table {float:left;font-size:20px; margin:0 0 0 31px;}
th{ padding:3px; background-color:#AAF1A9; width:150px; font-weight:bold !important;-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;}
td { padding:3px;  background-color:#98D3F3;-webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px;}
#hexaflip{margin-top:10px;}
#textanswer { padding-top: 2% }

#answer div { margin: 0 auto; }
#answers { width:95%; }

html[dir="rtl"] h1 { padding-right: 20px !important; }
html[dir="rtl"] h2 { text-align: right !important; }
html[dir="rtl"] #question-container p { text-align: right !important; }
html[dir="rtl"] .choicebox h2 { text-align: center !important; }
html[dir="rtl"] #sun { left: 0; margin-left: -11%; }
html[dir="rtl"] #answer h2 { text-align: center !important; }
html[dir="rtl"] #answer .t-align { text-align: center; }

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding-top: 30px; }
	#question-container h2 { margin-bottom: 0; }
	#question-container p { font-size: 22px; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	#instruction_box { width: 47%; }
}	
#buttons .next { display: none; }
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<div id="sun"></div>				
				<h1 class="alignment"><span class="blue"><?php echo _("Quiz Question #5");?></span></h1>		
				<div id="screen1">
					<div id="question-container">							
						<h2><?php echo _("Which statement best describes the life of this plant?");?></h2>								
						<p>A. <?php echo _("The plant grew very quickly, and then slowed down its growth.");?><br/>
						   B. <?php echo _("The plant grew very slowly, and then sped up its growth.");?><br/>
						   C. <?php echo _("The plant showed steady growth until it experienced a very noticeable change.");?><br/>
						   D. <?php echo _("The plant grew in a steady manner throughout the time of observation.");?></p>
					</div>
					<div id="box">						
						<table>
							<tr>
								<th><?php echo _("Day after germination");?></th>
								<th><?php echo _("Plant height in cm");?></th>
							</tr>
							<tr>
								<td><?php echo _("1");?></td>
								<td><?php echo _("0.5");?></td>
							</tr>
							<tr>
								<td><?php echo _("2");?></td>
								<td><?php echo _("1.2");?></td>
							</tr>
							<tr>
								<td><?php echo _("3");?></td>
								<td><?php echo _("1.4");?></td>
							</tr>
							<tr>
								<td><?php echo _("4");?></td>
								<td><?php echo _("1.9");?></td>
							</tr>
							<tr>
								<td><?php echo _("5");?></td>
								<td><?php echo _("2.3");?></td>
							</tr>
							<tr>
								<td><?php echo _("6");?></td>
								<td><?php echo _("2.7");?></td>
							</tr>
							<tr>
								<td><?php echo _("7");?></td>
								<td><?php echo _("1.1");?></td>
							</tr>
							<tr>
								<td><?php echo _("8");?></td>
								<td><?php echo _("1");?></td>
							</tr>
						</table>
						<div id="instruction_box">
							<p><?php echo _("Rotate or flip the 3D box below either up or down to set your answer.");?><br/>
								<span><?php echo _("Click, hold and slide mouse up or down.");?></span>
							</p>
							<div id="hexaflip"></div>	
						</div>
											
						<div class="clear"></div>
					</div>
				</div>
				<div id="answer">
					<div id="answers">						
						<p><?php echo _("You answered...");?></p>
						<p id="cont"></p>
						<p id="textanswer"><?php echo _("nothing");?>.</p><br/>
						<p><img src="" id="answer-icon"><span id="answer1" class="hidden"></span></p>
					</div>
				</div>
		</div>	
	</div>	
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="19.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>
	
	<script src="scripts/hexaflip.js"></script>
    <script>
        var hexa;		
		set = ['./images/misc/a.png','./images/misc/b.png','./images/misc/c.png','./images/misc/d.png'];
		hexa = new HexaFlip(document.getElementById('hexaflip'), { set: set }, { size: 200 });
    </script>	
	<section id="preloader"><section class="selected"><strong><?php echo _("Last two!");?></strong></section></section>
	<?php include("setlocale.php"); ?>
</body>
</html>
