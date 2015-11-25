<?php
	include_once '../../controller/User.Controller.php';
	include_once '../../controller/Language.Controller.php';

	$curlang = "English";
	if ($_SESSION["lang"] == "ar_EG") $curlang = "Arabic";
	if ($_SESSION["lang"] == "es_ES") $curlang = "Spanish";
	if ($_SESSION["lang"] == "zh_CN") $curlang = "Chinese";

	$user = null;
	
	$uc = new UserController();
	if(isset($_SESSION['uname'])){
		$user = $uc->loadUser($_SESSION['uname']);
	}
	
	$teacherid = $user->getUserid();
	
	$lc = new LanguageController();
	$teacher_languages = $lc->getLanguageByTeacher($teacherid);
	
?>


<ul class="lang-menu-n">
	<?php if($user->getType() == 0) : ?>
		<li><a href="../../teacher.php"><?php echo _("Go Back to Dashboard"); ?></a></li>
	<?php elseif($user->getType() >= 3) : ?>
		<li><a href="../../subscriber/view-modules.php"><?php echo _("Go Back to Dashboard"); ?></a></li>
	<?php endif; ?>
	<li>
		<ul>
			<?php
			if(!empty($teacher_languages)) :
				foreach($teacher_languages as $tl) : 
					$lang = $lc->getLanguage($tl['language_id']);
			?>
						<li><a href="<?php echo $_SERVER['PHP_SELF'];?>?lang=<?php echo $lang->getLanguage_code(); ?>" <?php if($_SESSION['lang'] == $lang->getLanguage_code()) { ?> class="active-lang" <?php } ?>><?php echo $lang->getShortcode(); ?></a></li>
			<?php endforeach; ?>
			<?php endif; ?>
		</ul>
	</li>		
</ul>

<ul class="lang-menu">
	<?php if($user->getType() == 0) : ?>
		<li><a href="../../teacher.php"><?php echo _("Go Back to Dashboard"); ?></a></li>
	<?php elseif($user->getType() >= 3) : ?>
		<li><a href="../../subscriber/view-modules.php"><?php echo _("Go Back to Dashboard"); ?></a></li>
	<?php endif; ?>
	<li><a href="#">Language: <?php echo $curlang; ?></a>
		<ul>
			<?php
			if(!empty($teacher_languages)) :
				foreach($teacher_languages as $tl) : 
					$lang = $lc->getLanguage($tl['language_id']);
			?>
				<li>
					<a href="<?php echo $_SERVER['PHP_SELF'];?>?lang=<?php echo $lang->getLanguage_code(); ?>"><?php echo $lang->getLanguage(); ?></a>
				</li>

			<?php endforeach; ?>
			<?php endif; ?>
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
