<?php
	require_once 'session.php';	
	require_once 'locale.php';
	include_once 'header.php';
	include_once 'libraries/UserFactory.class.php';
	include_once 'libraries/DiagnosticTestFactory.class.php';
	include_once 'libraries/TeacherModuleFactory.class.php';
	
	$mid 		= $_GET['module_id'];
	$userid 	= $user->getUserid();
	$uf			= new UserFactory();
	$module_set	= $uf->loadModule($mid);
	
	$dtf		= new DiagnosticTestFactory();
	$tests		= $dtf->getAllModuleTestsByTeacher($mid, $userid);

	$tmf		= new TeacherModuleFactory();
	$active		= $tmf->getTargetModule($userid, $mid);
	
	foreach($tests as $test) {
		if($test['mode'] == 1) {
			$foundpre	= true;
			$qid 		= explode(',', $test['qid']);
			$count1 	= count($qid);
			
			$tl1		= explode(':', $test['timelimit']);
			$hour1		= ltrim($tl1[0], '0');
			$min1		= ltrim($tl1[1], '0');
			
			$timelimit1 = $hour1 * 60 + $min1;

			$active1 	= $test['isactive'];
		} else if($test['mode'] == 2) {
			$foundpost	= true;
			$qid 		= explode(',', $test['qid']);
			$count2 	= count($qid);
			
			$tl2		= explode(':', $test['timelimit']);
			$hour2 		= ltrim($tl2[0], '0');
			$min2 		= ltrim($tl2[1], '0');
			
			$timelimit2 = $hour2 * 60 + $min2;
			
			$active2 	= $test['isactive'];
		}
	}
	
	if($language == "ar_EG") $lang = "-ar";
	else if($language == "es_ES") $lang = " spanish";
	else if($language == "zh_CN") $lang = " chinese";
	else if($language == "en_US") $lang = "";
?>
<div id="container">
<a class="link" href="teacher.php">&laquo <?php echo _("Go Back to Dashboard"); ?></a>
<h1><?php echo _($module_set->getModule_name()); ?> - <?php echo _("Diagnostic Tests"); ?></h1>
<center>
<h2><?php echo _("Review"); ?></h2>
<table border="1" class="result morepad">
	<tr>
		<td class="bold"><?php echo _("Status"); ?></td>
		<td class="bold"><?php echo _("Action"); ?></td>
	</tr>
	<tr>
		<td>
<?php 	
		if($active) echo _("This module is active.");
		else echo _("This module is not active.");
?>
		</td>
		<td>
			<div class="onoffswitch">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch-checkbox" id="myonoffswitch-module" value="module" <?php if($active) { ?> checked <?php } ?>>
				<label class="onoffswitch-label" for="myonoffswitch-module">
					<div class="onoffswitch-inner<?php echo $lang; ?>" ></div>
					<div class="onoffswitch-switch<?php if($language == 'ar_EG') { echo $lang; } ?>"></div>
				</label>
			</div>
		</td>
	</tr>
</table>
<h2><?php echo _("Diagnostic Tests"); ?></h2>
<table border="1" class="result morepad">
	<tr>
		<td class="bold"><?php echo _("Test Title"); ?></td>
		<td class="bold"><?php echo _("# of Questions"); ?></td>
		<td class="bold"><?php echo _("Time Limit"); ?></td>
		<td class="bold"><?php echo _("Ready?"); ?></td>
		<td class="bold"><?php echo _("Action"); ?></td>
	</tr>
	<tr>
		<td><a href="edit-dt.php?action=<?php if(isset($foundpre)) { echo _("edit"); } else { echo _("new"); } ?>&module_id=<?php echo $mid; ?>&mode=pre"><?php echo _("Pre-Test"); ?></a></td>
		<td>
			<center>
			<?php
				if(isset($count1)) echo $count1;
				else echo "0";
			?>
			</center>
		</td>
		<td>
			<?php
				if(isset($timelimit1)) echo $timelimit1._("mins.");
				else echo _("0 mins.");
			?>
		</td>
		<td>
			<div class="onoffswitch">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch-checkbox" id="myonoffswitch1" value="pre" <?php if($active) { ?> disabled <?php } if(isset($active1) &&$active1) { ?> checked <?php } ?>>
				<label class="onoffswitch-label" for="myonoffswitch1" id="onoffswitch-label1">
					<div class="onoffswitch-inner<?php echo $lang; ?>"></div>
					<div class="onoffswitch-switch<?php if($language == 'ar_EG') { echo $lang; } ?>"></div>
				</label>
			</div>
		</td>
		<td><a class="button1" id="pre-link" href="edit-dt.php?action=<?php if(isset($foundpre)) { echo "edit"; } else { echo "new"; } ?>&module_id=<?php echo $mid; ?>&mode=pre">
			<?php 
				if(isset($foundpre)) echo _("Edit"); 
				else echo _("New");
			?>
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="edit-dt.php?action=<?php if(isset($foundpost)) { echo "edit"; } else { echo "new"; } ?>&module_id=<?php echo $mid; ?>&mode=post"><?php echo _("Post-Test"); ?></a>
		</td>
		<td>
			<center>
			<?php
				if(isset($count2)) echo $count2;
				else echo "0";
			?>
			</center>
		</td>
		<td>
			<?php
				if(isset($timelimit2)) echo $timelimit2._("mins.");
				else echo _("0 mins.");
			?>
		</td>
		<td>
			<div class="onoffswitch">
				<input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" value="post" <?php if(isset($active2) && $active2) { ?> checked <?php } ?>>
				<label class="onoffswitch-label" for="myonoffswitch2">
					<div class="onoffswitch-inner<?php echo $lang; ?>"></div>
					<div class="onoffswitch-switch<?php if($language == 'ar_EG') { echo $lang; } ?>"></div>
				</label>
			</div>
		</td>
		<td>
			<a class="button1" href="edit-dt.php?action=<?php if(isset($foundpost)) { echo _("edit"); } else { echo _("new"); } ?>&module_id=<?php echo $mid; ?>&mode=post">
			<?php 
				if(isset($foundpost)) echo _("Edit"); 
				else echo _("New");
			?>
			</a>
		</td>
	</tr>
</table>
	<?php if ($user->getType() == 4) { ?>
		<a class="button1" href="add-dt-question.php?module_id=<?php echo $mid; ?>&f=0"><?php echo _("Add questions to this module"); ?></a>
	<?php } ?>
</center>
<div class="clear"></div>
</div>
<script>
var moduleid	= "<?php echo $mid; ?>";
$(document).ready(function() {
	<?php if($active) { ?>
		$('#pre-link').css('backgroundColor','#888');
		$('#pre-link').click(function(e) {
			alert('<?php echo _("This module is currently active. Please deactivate the module first before changing the pre-test settings."); ?>');
			e.preventDefault(); 
		});
		
		$('#onoffswitch-label1').click(function() {
			alert('<?php echo _("This module is currently active. Please deactivate the module first before changing the pre-test settings."); ?>');
		});
	<?php } ?>

	$('.onoffswitch-checkbox').click(function(e) {
		var btn = $(this);
		var st = btn.val();
		var vl = (btn.is(':checked')) ? 1 : 0;
		var answer = 1;
		
		if(btn.attr('id') == 'myonoffswitch-module' && btn.is(':checked')) {
			e.preventDefault();
			var question = '<?php echo _("If you created a pre-diagnostic test, please make sure it is \"Ready\" by turning it ON below."); ?>';
			confirmation(question).then(function (ans) {
				answer = (ans == "true") ? 1 : 0;
				if(answer) {
					btn.prop('checked',true);
					$.ajax({
						type	: "POST",
						url		: "save-settings.php",
						data	: {	mid: moduleid, set: st, val : vl },
						success	: setTimeout(function() { 
							location.reload(true);
						}, 500)
					});
				}
			});
			$('#myonoffswitch1').attr('disabled','disabled');
		} else if ($(this).attr('id') == 'myonoffswitch-module' && !$(this).is(':checked')) {
			$('#myonoffswitch1').attr('disabled','');
			$.ajax({
				type	: "POST",
				url		: "save-settings.php",
				data	: {	mid: moduleid, set: st, val : vl },
				success	: setTimeout(function() { 
					location.reload(true);
				}, 500)
			});
		} else {
			$.ajax({
				type	: "POST",
				url		: "save-settings.php",
				data	: {	mid: moduleid, set: st, val : vl },
				success	: setTimeout(function() { 
					location.reload(true);
				}, 500)
			});
		}
	});
});

function confirmation(question) {
    var defer = $.Deferred();
    $('<div></div>')
        .html(question)
        .dialog({
            autoOpen: true,
            modal: true,
            title: 'Confirmation',
            buttons: {
                "Confirm": function () {
                    defer.resolve("true");//this text 'true' can be anything. But for this usage, it should be true or false.
                    $(this).dialog("close");
                },
                "Cancel": function () {
                    defer.resolve("false");//this text 'false' can be anything. But for this usage, it should be true or false.
                    $(this).dialog("close");
                }
            }
        });
    return defer.promise();
};
</script>
<?php require_once "footer.php"; ?>