	<!--
	<div id="footer">
		<p>Copyright &copy;. All rights reserved. Powered by Jigzen's</p>
		<div class="inner_copy">
			<a href="http://www.greatdirectories.org/offer.html">buy links with high pr</a>
			<a href="http://www.bestfreetemplates.org/">free templates</a>
		</div>
	</div>-->
	<script>
	var language;
	$(document).ready(function() {
		$('#language-menu').change(function() {
			language = $('#language-menu option:selected').val();
			document.location.href = "<?php echo $_SERVER['PHP_SELF'];?>?lang=" + language;
		});
	});
	</script>
</body>
</html>