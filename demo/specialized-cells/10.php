<?php
	/* Comment out line 4 and uncomment lines (5, 6, 7 and 10) when ported in the modules folder */

	require_once "../tempsession.php";
	//require_once "../../session.php";
//$_SESSION['cmodule'] = forces-of-all-kinds';
	//require_once '../../verify.php';
	require_once "locale.php";

	//if($user->getType() == 2) $uf->updateStudentLastscreen(10, $_SESSION['smid']);
?>

<!DOCTYPE html>
<html <?php if ($language == 'ar_EG') echo 'dir="rtl"'; ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php echo _("Specialized Cells"); ?></title>

	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/locale.css">
	<link rel="stylesheet" href="css/jpreloader.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/modalcomponents.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<?php if ($language == 'ar_EG') : ?>
		<link rel="stylesheet" href="css/grid_rtl.css">
		<link rel="stylesheet" href="css/ac_rtl.css">
	<?php else : ?>
		<link rel="stylesheet" href="css/grid.css">
		<link rel="stylesheet" href="css/ac.css">
	<?php endif; ?>

	<style>
		h1 { color: #e46600; }
		p { font-size: 24px; color: #000;}
		.wrap { border-color: #009014; }
		.bg { background-image: url(assets/10/bg.jpg); }
		.side_image {margin-top: 57px;}
		.text-justify { text-align: justify; }
		.key {color:#ff005a;}

		#screen1 h1 { margin-left:0px;margin-left: 1%; margin-right: 1%; }
		.grid_Disp { margin-left: 1%; margin-right: 1%; }
		#md_scrn1P { width: 450px;margin-top: 30px; }
		#md_imgl { float: right; }
		#md_img2s { height: 290px; margin-top: 40px;}
		.video { border-radius: 5px; }
		.vbg { background-color: #000; margin-top: 25px; margin-left: auto; margin-right: auto; }
		 video { margin-top: 0px; }
		 img { height: 270px; }

		#screen2 { display: none; }
		#screen2 p{ width:850px; margin-top: 10px; }
		.caption { font-size: 22px; }

		button {
			border: none;
			border-image-source: initial;
			border-image-slice: initial;
			border-image-width: initial;
			border-image-outset: initial;
			border-image-repeat: initial;
			padding: 10px 20px;
			background-color: #f98bb7; 
			color: #000;
			font-size: 16px;
			letter-spacing: 1px;
			text-transform: uppercase;
			cursor: pointer;
			border-radius: 5px;
		}
		button:hover { background-color: #fd75ba; }
		table { background-color:; margin-left: 10px; border-collapse: separate; border-spacing: 5px 3px; width: 650px; }
		th, td { background-color: #fa86c1; font-size: 16px; border-radius: 5px; border-top: 10px; padding-left: 5px; padding-right: 5px; width: 39%; }

		#md_tablePopUp table {  text-align: left; width: ; margin: auto; background-color: #fff; font-size: 15px; margin-top:50px; border-radius: 5px;}
		#md_tablePopUp  div:first-child { width: 350px; margin: 10px auto; margin-top:10%; background-color: #fff; padding: 30px; }
		#md_tablePopUp table th:first-child { width: 20%; }
		#md_tablePopUp table th:nth-child { width: 35%;}
		#graphDiv2  div:first-child { width: 200px; margin: 10px auto; margin-top:10%; background-color: #fff; padding: 30px; }
		table th {font-weight: normal; font-size: 15px;}
		td, th { border: 1px solid black;  padding: 0px;}

		.button { background-color: #e0e67c; border-radius: 5px; padding: 5px; margin: 10px auto; text-align: center; }
		.button:hover { cursor: pointer; }
		#md_close {width: 150px; margin-top:10px;border: 1px solid black;}
		#md_tablePopUp { text-align: center; position: absolute; background: rgba(45, 45, 45, .9); z-index: 1000;  width: 100%; height:100%;margin-left:-9px;}
		#md_btnView { width: 300px;	background-color: #f98bb7; margin-left:50px;border: 1px solid black;}
		#md_tablePopUp p { font-size: 19px; padding-left: 5px; }

		#s2a { position: relative; }
		#s2a h4 { position: absolute; font-size: 18px; z-index: 2; text-align: center; line-height: 0.5; color: #000; }
		#s2a h4:first-child { left: 60%; top: 130px; }
		#s2a h4:nth-child(2) { left: 74%; top: 157px; }
		#s2a h4:nth-child(3) { left: 82%; top: 183px; }
		#s2a h4:nth-child(4) { left: 88%; top: 140px; }
		#s2a h4:nth-child(5) { left: 61%; top: 268px; }
		#s2a h4:nth-child(6) { left: 75%; top: 278px; }
		#s2a h4:nth-child(7) { left: 90%; top: 278px; }
		#s2a h4:nth-child(8) { left: 70%; top: 22px; font-size: 24px; }
		#buttons .next { display: none; }

		@media (max-width: 1250px ){
			.bg { background-size:  100% calc(100% - 68px)!important; background-position: 0 34px;  overflow: hidden; }
			p { font-size: 21px !important; }
			img { height: 214px !important; }
			#md_tablePopUp p { line-height: 23px; }
			#screen2 p {
			    width: 850px !important;
			    margin-top: -37px !important;
			}
			#screen2 { padding-top: 88px !important; }
			#md_img2s { margin-top: 5px !important; }
			#s2a h4:nth-child(8) {
			    top: -14px !important;
				left: 70%;
			    <?php if($language=='zh_CN') { ?>
			    	left: 74%;
			    <?php } ?>
			}
			#s2a h4:first-child {
			    left: 60% !important;
			    top: 65px !important;
			}
			#s2a h4:nth-child(2) {
			    left: 74% !important;
			    top: 84px !important;
			}
			#s2a h4:nth-child(3) {
			    left: 82% !important;
			    top: 105px !important;
			}
			#s2a h4:nth-child(4) {
			    left: 88% !important;
			    top: 68px !important;
			    width: 115px;
			}
			#s2a h4:nth-child(5) {
			    left: 61% !important;
			    top: 160px !important;
			}
			#s2a h4:nth-child(6) {
			    left: 75% !important;
			    top: 175px !important;
			}
			#s2a h4:nth-child(7) {
			    left: 88% !important;
			    top: 175px !important;
			    width: 115px;
			}
		}
		<?php if($language=='zh_CN') { ?>
			#s2a h4:nth-child(7) { left: 86%; }
			#s2a h4:nth-child(6) { left: 73%; }
			#s2a h4:nth-child(4) { left: 86%; }
			@media (max-width: 1070px ){
				#s2a h4:nth-child(4) {
				    left: 86% !important;
				    top: 72px !important;
				}
				#s2a h4:nth-child(7) {
    				left: 86% !important;
    			}
			}
			@media (max-width: 900px ){
				#s2a h4 { font-size: 14px; }
				#s2a h4:first-child { top: 70px !important; }
				#s2a h4:nth-child(2) { top: 90px !important; }
				#s2a h4:nth-child(3) { left: 83% !important; top: 115px !important; }
				#s2a h4:nth-child(4) { top: 78px !important; }
				#s2a h4:nth-child(5) { top: 168px !important; }
				#s2a h4:nth-child(6) { top: 183px !important; }
				#s2a h4:nth-child(7) { top: 181px !important; }
			}
		<?php } ?>
	</style>
</head>

<body>
	<div class="wrap">
		<div class="bg">
			<div class="container_12 clearfix">

						<div id="md_tablePopUp" class="md_overlayTable">
						
							<table>
								<tr>
									<th><p class="center" ><?php echo _("Type"); ?></p></th>
									<th><p class="center" ><?php echo _("Targets"); ?></p></th>
									<th><p class="center" ><?php echo _("Lifespan"); ?></p></th>
								</tr>
								<tr>
									<td><p><?php echo _("Monocytes (mature monocytes are called macrophages)"); ?></p></td>
									<td><p><?php echo _("bacteria, viruses, cancer cells"); ?></p></td>
									<td><p><?php echo _("hours to days"); ?></p></td>
								</tr>
								<tr>
									<td><p><?php echo _("Eosinophils"); ?></p></td>
									<td><p><?php echo _("large parasites"); ?></p></td>
									<td><p><?php echo _("8-12 days"); ?></p></td>
								</tr>
								<tr>
									<td><p><?php echo _("T-lymphocytes (form in bone marrow; mature in thymus gland)"); ?></p></td>
									<td><p><?php echo _("specific disease agents (T-cells store information for making antibodies)"); ?></p></td>
									<td><p><?php echo _("weeks to years"); ?></p></td>
								</tr>
								<tr>
									<td><p><?php echo _("B-lymphocytes"); ?></p></td>
									<td><p><?php echo _("specific disease agents (B-cells make antibodies)"); ?></p></td>
									<td><p><?php echo _("weeks"); ?></p></td>
								</tr>
								<tr>
									<td><p><?php echo _("Neutrophils"); ?></p></td>
									<td><p><?php echo _("bacteria, fungi"); ?></p></td>
									<td><p><?php echo _("hours to days"); ?></p></td>
								</tr>
								<tr>
									<td><p><?php echo _("Basophils"); ?></p></td>
									<td><p><?php echo _("inflammatory responses"); ?></p></td>
									<td><p><?php echo _("hours to days"); ?></p></td>
								</tr>
							</table>
							<button class="md-close" id = "md_close"><?php echo _("Close me!"); ?></button>
						</div>

				<div class="grid_12">
					<div id="screen1" class="screen">
						<h1 class="grid_12"><?php echo _("More big ideas about... specialized cells"); ?></h1>
						<p class = "grid_Disp"><?php echo _("A beating heart. To many people, it's the ultimate symbol of life. Our beating hearts power our circulatory systems. The circulatory system moves cells around the body to transport gases and fight infection."); ?></p>
						<p class = "grid_Disp"><?php echo _("Red blood cells are some of the simplest, yet most highly specialized cells in the human body. They are responsible for carrying oxygen from the lungs to the tissues where it is needed to keep other cells alive.  Once the oxygen is delivered, <span class='key'>red blood cells</span> are responsible for moving cells' carbon dioxide waste to the lungs, where it can be expelled from the body.  Once complete, the cycle repeats.");?></p>
						<div id="jplayer0" class='video vbg center'>
							<span><?php echo _("Update Required"); ?></span>
							<?php echo _("To play the media you will need to either update your browser to a recent version or update your"); ?> <a href="http://get.adobe.com/flashplayer/" target="_blank"><?php echo _("Flash plugin"); ?></a>.
						</div>
					</div>
				</div>

				<div id="screen2" class="screen grid_12">

						<div>
						<div class = "grid_5">
							<img src="assets/10/1.jpg" class="img" /><span class="caption"></span>
						</div>

						<p class = "grid_Disp"><?php echo _("Red blood cells are formed from stem cells in bone marrow. As they mature, their internal structures disintegrate, leaving them as disk-shaped bags of hemoglobin surrounded by cell membrane. Hemoglobin is the red protein that is able to carry oxygen to the tissues and carbon dioxide to the lungs. Red cells' small size and smooth shape allow them to travel into the smallest spaces in the body."); ?></p>

						<div id="s2a">
						<h4><?php echo _("Erythrocytes"); ?></h4>
						<h4><?php echo _("Monocyte"); ?></h4>
						<h4><?php echo _("Platelets"); ?></h4>
						<h4><?php echo _("Eosinophil"); ?></h4>
						<h4><?php echo _("Lymphocyte"); ?></h4>
						<h4><?php echo _("Neutrophil"); ?></h4>
						<h4><?php echo _("Basophil"); ?></h4>
						<h4><?php echo _("The Elements of Blood"); ?></h4>
						</div>
						<div class = "grid_5" id = "md_imgl">
						<img src="assets/10/2.jpg" id = "md_img2s" />		
						</div>
									
						</div>

						<p class="space grid_Disp"  id = "md_scrn1P"><br><?php echo _("White blood cells, or <span class=key>lymphocytes</span>, come in many varieties. They vary a great deal in appearance and function, but are all related to the immune system. Each cell type performs a specific function or targets a specific type of outside threat. The table below summarizes the different functions of white blood cells."); ?></p>	
				
	
						<div id = "md_btnView" class = "button"><?php echo _("Click to view the Table"); ?></div>




				<div class="clear"></div>
				</div>


						<!--
						<div id = "md_table">
						-->


<!--
		<div id="md_tablePopUp" class="md-md_overlayTable"></div> 
-->

				</div>
			</div>
		</div>
	</div>

	<div id="buttons">
		<a href="#" class="back" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="#" class="next" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
		<a href="#" class="readmore" title="<?php echo _("Read More"); ?>"><i class="fa fa-comment"></i></a>
	</div>

	<section id="preloader"><section class="selected"><strong><?php echo _("Hearing pulse..."); ?></strong></section></section>

	<script src="js/jquery.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/modalEffects.js"></script>
	<script>var polyfilter_scriptpath = 'js/';</script>
	<script src="js/cssParser.js"></script>
	<script src="js/css-filters-polyfill.js"></script>
	<script src="js/jpreloader.js"></script>
	<script src="js/jquery.jplayer.min.js"></script>
	<script src="js/responsiveslides.js"></script>

	<script>

		$(".rslides").responsiveSlides({
			auto: true,
			pager: false,
			nav: false,
			speed: 400
		});

$(document).ready(function(){
			$('#md_tablePopUp').css('display','none');
		});

		$('#md_btnView').click(function() {
			$('#md_tablePopUp').fadeIn();
		});

		$('#md_close').click(function() {
			$('#md_tablePopUp').fadeOut();
		});

		$('.md_overlayTable').click(function(event) {
			if($('#' + event.target.id).hasClass("md_overlayTable"))
				$(this).fadeOut();
		});



		var hash = window.location.hash.slice(1);

		if (hash != "") {
			$('.screen').hide();
			$('#screen2').show();

			$('.back').fadeOut();

			$('.readmore').fadeOut(function() { 
				$('.next').fadeIn(); 
				$('.back').fadeIn();
			});
		}

		$('.next').click( function(){
			if(!md_overlayTableIsVisible()){
				document.location.href = "11.php";
			}
		});

		$('.back').click(function() {
			if(!md_overlayTableIsVisible()){
				if ($('#screen1').is(':visible')) {
					document.location.href = "9.php";
				} else if ($('#screen2').is(':visible')) {

					$('.back').fadeOut();

					$('.next').fadeOut(function() { 
						$('.readmore').fadeIn(); 
						$('.back').fadeIn();
					});

					$('#screen2').fadeOut(function () {
						$('#screen1').fadeIn();

						window.location.hash = '';
					});
				}
			}
		});

		$('.readmore').click(function(){
			if(!md_overlayTableIsVisible()){
				if ($('#screen1').is(':visible')) {

					$('.back').fadeOut();

					$('.readmore').fadeOut(function() {
						$('.next').fadeIn(); 
						$('.back').fadeIn();
					});

					$('#screen1').fadeOut(function() {
						$('#screen2').fadeIn();

						window.location.hash = '#screen2';
					});
				}
			}
		});

				$("#jplayer0").jPlayer({
			ready: function () {
				$(this).jPlayer("setMedia", { 
					webmv: "assets/10/video0.webm", // for .webm format, use this conversion tool: http://video.online-convert.com/convert-to-webm
				}).jPlayer("play");
			},

			ended: function() { $(this).jPlayer("play"); },
		    swfPath: "js",
		    supplied: "webmv",
		    size: { width: "397px", height: "235px", },
		    solutions: "flash, html",
		    nativeVideoControls: { all: /./ }
		});


		function md_overlayTableIsVisible(){
			if($('#md_tablePopUp').css('display') == 'block'){
				return true;
			}else{
				return false;
			}
			/*$('.md_overlayTable').each( function(){
				alert($('this').id);
				if($('this').is(':visible'))
					result = true;
			});
			return result;*/
		}
	</script>

	<?php include 'setlocale.php'; ?>
<ul class="lang-menu">
			<li><a href="../../teacher.php#">Go Back to Dashboard</a></li>
	
	<li>
		<a href="#">Language: English</a>

		<ul>
			<li><a href="/shymansky/sandbox/demo/specialized-cells/10.php?lang=en_US">English</a></li>
			<li><a href="/shymansky/sandbox/demo/specialized-cells/10.php?lang=ar_EG">Arabic</a></li>
			<li><a href="/shymansky/sandbox/demo/specialized-cells/10.php?lang=es_ES">Spanish</a></li>
			<li><a href="/shymansky/sandbox/demo/specialized-cells/10.php?lang=zh_CN">Chinese</a></li>
		</ul>
	</li>		
</ul>
	<script>
	function addHash(tag) {
		$("ul.lang-menu ul a").each(function() {
			this.href = this.href + tag;
		});
	}

	function removeHash() {
		$("ul.lang-menu ul a").each(function() {
			var str = this.href;
			if (str.indexOf("#") != -1) 
				this.href = str.substring(0, str.indexOf("#"));
		});
	}
</script>
</body>
</html>
