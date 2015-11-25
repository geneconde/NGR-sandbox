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
<script src="scripts/global.js" /></script>
<style>
.bg { background-image: url('images/11/bg.jpg');  background-repeat: no-repeat; background-size: 100% 100%; width:100% !important; height:100%; position:relative;}
.wrap {border-left: 1px dashed #C1D5D4; border-right: 1px dashed #C1D5D4;}
h1 {  padding: 21px 0 0 30px !important; color: #2B316F; }
h2 {  margin:0;}
.key { color: #f44e14;}

article { width:93.5%; margin-bottom:10px; margin:0 auto;}
article h2 {color: #03668d;}
figure{width:55%; max-height:95%; margin:0 auto; height:250px; max-height:95%;}
figure img { width:100%; height:100%;}
.allign-left{text-align:left !important; padding-top:0px;}
#title-container {border:1px solid black; width:92%; position:relative; top:5%; margin-bottom:50px;}
#title-container h1 {font-size:37px !important;}
#text-area {width:70%; height:350px; max-height:95%; margin:0 auto;}
textarea{width:100%; height:80%;  -webkit-border-radius: 10px; -moz-border-radius: 10px;  border-radius: 10px;	padding-left:10px; margin-top:10px; border: none;}
#pad-top{ position:relative; top:5%;}
article p {line-height: 27px;}
html[dir="rtl"] h1 { padding-right: 30px !important; }

@media all and (max-width : 1250px){
	h1 { padding-top: 30px !important;}
}

@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
	h1 { padding-top: 30px !important; }
}
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : portrait) and (-webkit-min-device-pixel-ratio: 1) {
	h1 { padding: 35px 0 0 30px !important; }
}	
</style>
</head>
<body>
	<div class="wrap" >
		<div class="bg">	
			<div>
				<h1><?php echo _("Summarizing big ideas... about doing science");?></h1>			
					
				<article>														
					<p>					
						<?php echo _("<span class='key'>Scientific practices</span> are what scientists use to plan, investigate, and think when they are trying to learn things about nature or to solve problems. But you can use these same practices in your life every day. Usually the process starts by asking a question about observations you've made or about some problem you're trying to solve. Often a scientist might start off by forming a <span class='key'>hypothesis</span> – which is a preliminary <span class='key'>explanation</span> for what they think is going on. Then they use this hypothesis to help plan their <span class='key'>investigation</span>. A <span class='key'>prediction</span> is testable statement of what you think would happen based on your hypothesis. Scientists check their hypothesis through investigations that test their predictions by making <span class='key'>systematic observations</span> and collecting <span class='key'>data</span>. An <span class='key'>experiment</span> is one way to test your predictions by creating a <span class='key'>\"fair test\"</span> investigation. The record of all your observations is called <span class='key'>data</span>. Analyzing your data allows you to make <span class='key'>claims</span> about your research question. <span class='key'>Data analysis</span> is when you analyze your recorded data to see whether your hypothesis was correct or not then state the outcome of your investigation in the claims you make. Your data becomes <span class='key'>evidence</span> when you use it to argue to support your claims. Scientists don't always do the \"practices\" in the same order when they do science. The important thing is to be systematic in designing investigations and making and following plans for observing, gathering data from fair tests and making claims that are supported by evidence.");?>
					</p>						
				</article>		
			</div>					
							
		</div>
	</div>
	<div id="buttons">
		<a href="10.php" class="back back-toggle" title="<?php echo _("Back"); ?>"><i class="fa fa-arrow-left"></i></a>
		<a href="12.php" class="next next-toggle" title="<?php echo _("Next"); ?>"><i class="fa fa-arrow-right"></i></a>
	</div>
	<section id="preloader"><section class="selected"><strong><?php echo _("Putting it all together...");?></strong></section></section>	

<?php require("setlocale.php"); ?>
</body>
</html>
