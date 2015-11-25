<?php
	$curlang = "English";
	if ($_SESSION["lang"] == "ar_EG") $curlang = "Arabic";
	if ($_SESSION["lang"] == "es_ES") $curlang = "Spanish";
	if ($_SESSION["lang"] == "zh_CN") $curlang = "Chinese";
?>
<ul class="lang-menu">
	<li><a href="../../student.php#">Go Back to Dashboard</a></li>
	<li><a href="#">Language: <?php echo $curlang; ?></a>
		<ul>
			<li><a href="<?php echo $_SERVER['PHP_SELF'];?>?lang=en_US">English</a></li>
			<li><a href="<?php echo $_SERVER['PHP_SELF'];?>?lang=ar_EG">Arabic</a></li>
			<li><a href="<?php echo $_SERVER['PHP_SELF'];?>?lang=es_ES">Spanish</a></li>
			<li><a href="<?php echo $_SERVER['PHP_SELF'];?>?lang=zh_CN">Chinese</a></li>
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

	var e;
	$("#wrap").hide();
	$("body").jpreLoader({
		splashID:"#preloader",loaderVPos:"45%",autoClose:true,
		splashFunction:function(){
			$("#preloader").children("section").not(".selected").hide();
			$("#preloader").hide().fadeIn(800);
			e=setInterval(function(){t()},4e3)
		}
	},function(){
		clearInterval(e);$("#footer").animate({bottom:0},500);
		$("#header").animate({top:0},800,function(){
			$("html").css('background-color','#fff');
			$("body").css('display','block');
			
			$("#wrap").fadeIn(1e3)}
		)
	});
</script>