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
<script src="scripts/jquery.blink.min.js"></script>
<script src="scripts/jpreloader.js"></script>
<script src="scripts/modernizr.min.js"></script>
<script>
var nullAnswer = false;
$(document).ready(function() {
	$('.blink').blink({ speed: 500, blinks: 1000 });
	$('.wiggle').wiggle({ speed: 250, wiggles: 1000 });
	$('.wiggle-right').wiggle({ speed: 250, wiggles: 1000, moveto: 'right' });
	
    var value='';
	var startPos;
	$(".item").each(function() { 
		var item = $(this);
		item.mousedown(function() { item.removeClass('grab'); item.addClass('grabbing'); });
		item.mouseup(function() { item.removeClass('grabbing'); item.addClass('grab'); });
	});
	
	$(".droppable").each(function() { 
		var item = $(this);
		item.mousedown(function() { item.removeClass('grab'); item.addClass('grabbing'); });
		item.mouseup(function() { item.removeClass('grabbing'); item.addClass('grab'); });
	});
	
	$(".item" ).draggable({
		revert: "invalid",
		snap: ".drop_here",
        snapMode: "inner",		 
		drag: function( event, ui ) {		  
			value = $(this).html();			
		},
		start: function(evt, ui){
			startPos = ui.helper.position();
		}
	});
	
    $( ".drop_here" ).droppable({
		accept:".item",
		drop: function( event, ui ) {	
			var elem = $(this);
			var dropped = ui.draggable;
			var color = ui.draggable.css('backgroundColor');

			$.ajax({
			  type: "POST",
			  url: "check.php",
			  data: { value: value }
			})
			
			.done(function( msg ) {
				elem.html(value);			
			});	
			
			$(dropped).css({top: 0,left: 0}).appendTo(elem);
			$(elem).css('backgroundColor',color);
			$(this).droppable( 'disable' );  
		}		
    });
	
	$("#btnReset").click(function() {
		/*
		$(".item").animate({
			"left": $(".item").data("left"),
			"top": $(".item").data("top")
		});
		alert(startPos);
		*/
		
		$(".item").css({
			'left': $(".item").data('originalLeft'),
			'top': $(".item").data('origionalTop')
		});
	});
	
	$( ".sortable" ).sortable();

	$('a.check-toggle').click(function(){ 			
		$('#question-container').fadeOut();
		$('a.check-toggle').fadeOut(); 
		$('a.back-toggle').fadeIn(); 
		$('a.next-toggle').fadeIn(); 
		$('#base').fadeOut(function(){ 
		$('#answer').fadeIn();
		}); 
		$('h1').fadeOut();	
		addHash('#answer');
	});
	
	$('a.back-toggle').click(function(){
		if($('#base').is(':visible')) {
		document.location.href= "2.php";		
		} else if ($('#answer').is(':visible')) {
			$('#answer').fadeOut(function (){
				$('#base').fadeIn();				
				$('a.next-toggle').fadeOut();
				$('a.back-toggle').fadeIn();
				$('a.check-toggle').fadeIn();
				$('#question-container').fadeIn();
				$('h1').fadeIn();
		});
	}
});
	
	//back action to go to previous section of previous screen
	var curURL = window.location.toString();
	var oldURL = document.referrer;

	var hash = "";
	if (curURL.indexOf("#answer") != -1 || oldURL.indexOf("4.php") != -1) {
		$('h1').fadeOut(); 
		$('a.check-toggle').fadeOut(); 
		$('a.back-toggle').fadeIn(); 
		$('a.next-toggle').fadeIn(); 
		$('#base').fadeOut(function(){ 
		$('#answer').fadeIn(); });
		addHash('#answer');
	}
});


</script>
<style>
html { background-color: #fff; }
body { display: none; }
html,body {height:100%;padding:0;margin:0;font-family: 'PlaytimeRegular'; min-height: 450px; color: black; }
img { border : none; }
.wrap { margin: 0 auto 0; max-width:900px; height:100%; border-left: 1px dashed #009FE8; border-right: 1px dashed #009FE8; padding: 0 2px;}
.bg { background: url("images/3/bg.jpg"); background-repeat: no-repeat; background-size: 100% 100%; -moz-background-size: cover;  /* Firefox 3.6 */ background-position: center; width:100%; height:100%; position:relative;  overflow:hidden;}

h1 { margin:0; font-size: 35px;  color:#c94271; }
h2 { font-size: 24px; font-weight: normal;}
h2.b { width: 40%; text-align:center; float:left;}
p {font-size: 24px; }
.clear { clear:both;}
.green {color: #598236; position: absolute;top: 166px; left: 300px;}
.orange {color: #D54701; position: absolute;top: 210px; left: 300px;}
.pink {color: #D58AD8; 	position: absolute;	top: 260px; left: 285px;}
.l-green {color: #60A23A; position: absolute;top: 338px; left: 296px;}
.brown {color: #7E4800; position: absolute;top: 416px; left: 300px;}
.l-red {color: #CB3C1C; position: absolute;top: 451px; left: 291px;}

.plant-parts ul { margin-top: 20px; list-style: none; }
.plant-parts ul li { padding: 10px 0; font-size: 25px; }
.plant-parts ul li:nth-child(1) { color: #598236; }
.plant-parts ul li:nth-child(2) { color: #D54701; }
.plant-parts ul li:nth-child(3) { color: #D58AD8; }
.plant-parts ul li:nth-child(4) { color: #60A23A; padding-top: 37px; }
.plant-parts ul li:nth-child(5) { color: #7E4800; padding-top: 30px; }
.plant-parts ul li:nth-child(6) { color: #CB3C1C; padding-top: 0; }

.itemcopy {background-color:#EFD1BA5}
#draggable {  height: 40px; padding: 0.5em;  margin: 10px 10px 10px 0; position:fixed;}
#droppable { width: 150px; height: 40px; padding: 0.5em; }

/* .buttons-back { position: absolute; bottom: 2%; left: 2%; }
.check-toggle { position: absolute; bottom:2%;right:2%;} */
#diagrambody { height: 70%; width: 100%; padding: 1%; }
#choices { margin-top: 1%; text-align:center;}
#choices li { color: #1b8931; display: inline-block; font-size: 30px;  }
#choices div {-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; padding: 3px; }

#answer img{ margin-top: 5%; float:right; margin-right: 20%;}
.buttons { position: absolute; bottom: 2%; right: 2%; }
 img.next-toggle ,img.back-toggle-screen{ display: none; }
.arrow { margin-top: 15px; margin-left: 5px; }

.c1 { background-color: #b06bf8;  color: white;}
.c2 { background-color: #b06bf8; color: white;}
.c3 { background-color: #614a2a; color: white;}
.c4 { background-color: #d58ad8; color: white;}
.c5 { background-color: #809f01; color: white;}
.c6 { background-color: #c94271; color: white;}
.c7 { background-color: #CB3C1C; color: white;}

.grab {
    cursor: move;
    cursor: -moz-grab;
    cursor: -webkit-grab;
}

.grabbing {
	cursor: move;
    cursor: -moz-grabbing;
    cursor: -webkit-grabbing;
}


@-webkit-keyframes infinite-spinning {
  from {
    -webkit-transform: rotate(0deg);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}
@-moz-keyframes infinite-spinning {
  from {
	-moz-transform:  rotate(0deg);
  }
  to {
	-moz-transform:  rotate(360deg);
  }
}

#sun {
	height: 33%;
	position: absolute;
	margin-left: 78%;
	margin-top: -7%;
	width: 35%;
	background:url("images/others/sun.png") no-repeat center;
     -webkit-animation: infinite-spinning 5s infinite;
     -moz-animation: infinite-spinning 5s infinite;
     -o-animation: infinite-spinning 5s infinite;

}
.image-container{width:40%;float:right;margin:20px 50px 0 0;}
.field-boxes{margin-top:20px;width:40%;height:40%;float:right;}
.field-boxes li{list-style:none;height:43px;}
.mtop{margin-top:30px;}

.blank{
margin-top:18px;
height:40px;
width:90%;
border:1px solid lightcoral;
text-align:center;
padding-top:5px;
-webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px;
font-size:24px;
}

.answer-paragraph{border:1px solid black;min-height:100px;width:80%;padding-top:80px;}
.answer-paragraph p {font-size:24px;}
.alignment{margin-top:21px; padding-left:17px;}
#question-container{width:100%;margin-top:50px; color: darkcyan;}
#ans{width:100%; margin-top:21px; padding-left: 23px;}
button{width:124px;height:40px;padding:0 !important;}
.plant-parts{float:right;margin-top:4%;text-align:left;}
.plant-parts h2{font-size:30px;text-align:left !important;color: rgb(42, 111, 165);}
.sortable { cursor: pointer; }
#screen1{ max-width: 100%; margin: 0 auto; margin-top:60px;}
#answer{display: none; text-align: center;  max-width: 95%;  margin-top: 0%;padding:0px 10px 0px 10px;}
#base {width: 95%; margin: 0 auto;}

html[dir="rtl"] h1 { padding-right: 20px; }
<?php if($language == "es_ES") { ?>
	.blank { height: 34px; font-size: 20px; }
	.brown { left: 290px; }
<?php } ?>

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (-webkit-min-device-pixel-ratio: 1) {
	.blank { margin-top: 13px; }
	#answer { padding-top: 15px; }
}
#buttons .next { display: none; }

</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">
			<h1 class="alignment"><?php echo _("Checking what you know... about the life cycle of plants");?></h1>					
			<div id="base">	
			<div id="question-container">
				<h2><?php echo _("What do you already know about plants? Match the parts of the plant by dragging the correct term up or down.");?></h2>
			</div>
					<div class="clear"></div>
					<div id="plantdiagblank">
						<div class="image-container">
							<img src = "images/3/plantdiag3a.png">						
						</div>						
						<div class="field-boxes sortable">						
							<div class="droppable blank drop_here ui-widget-header grab c6"><?php echo _("Leaves");?></div>
							<div class="droppable blank drop_here ui-widget-header grab c2"><?php echo _("Roots");?></div>
							<div class="droppable blank drop_here ui-widget-header grab c5"><?php echo _("Seed");?></div>
							<div class="droppable blank drop_here ui-widget-header grab c4"><?php echo _("Flower");?></div>
							<div class="droppable blank drop_here ui-widget-header grab c3"><?php echo _("Stem");?></div>
							<div class="droppable blank drop_here ui-widget-header grab c7"><?php echo _("Fruit");?></div>
						</div>
					</div>								
			</div>		
			<!-- start of answer overlay -->
			<div id="answer">
				<div id="ans">
					<h2><?php echo _("The first part of the plant shown here is the Leaf, Fruit, Flower, Stem, and last are the Roots. These are the main parts of a plant with seeds.");?></h2>
				</div>
					<img src="images/3/plantdiag3a.png"/>				
					<div class="plant-parts">
						<ul>
							<li><?php echo _("Leaf");?></li>
							<li><?php echo _("Fruit");?></li>
							<li><?php echo _("Flower");?></li>
							<li><?php echo _("Stem");?></li>
							<li><?php echo _("Seed");?></li>
							<li><?php echo _("Roots");?></li>
						</ul>
						<!-- <h2>
							<span class="green"><?php echo _("Leaf");?></span><br/>
							<span class="orange"><?php echo _("Fruit");?></span><br/>
							<span class="pink"><?php echo _("Flower");?></span><br/>
							<span class="l-green"><?php echo _("Stem");?></span><br/>
							<span class="brown"><?php echo _("Seed");?></span><br/>
							<span class="l-red"><?php echo _("Roots");?></span><br/>
						</h2> -->
					</div>
				<div class="clear"></div>					
			</div>
		</div>
	</div>
	<div id="buttons">
		<a href="#" class="back back-toggle" title="<?php echo _("Back"); ?>"><?php echo _("Back"); ?></a>
		<a href="4.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><?php echo _("Next"); ?></a>
		<a href="#" class="checkanswer check-toggle" title="<?php echo _("Check Answer"); ?>"><?php echo _("Check Answer"); ?></a>
	</div>		
	
	<section id="preloader"><section class="selected"><strong><?php echo _("The parts of the plant");?></strong></section></section>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="scripts/jquery.ui.touch-punch.min.js"></script>
<?php include("setlocale.php"); ?>
</body>
</html>
