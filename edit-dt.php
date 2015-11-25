<?php 
	require_once 'session.php';	
	require_once 'locale.php';	
	include_once 'header.php';
	include_once 'libraries/functions.php';
	
	$userid = $user->getUserid();
	$mid 	= $_GET['module_id'];
	$mode 	= ($_GET['mode'] == 'pre' ? 1 : 2 );
	$action = $_GET['action'];
	
	$dtq 			= new DtQuestionFactory();
	$question_set 	= $dtq->getDTPool($mid);
	$letters 		= range('a','z');
	
	if($action == "edit") {
		$dtf 			= new DiagnosticTestFactory();
		$dt_set 		= $dtf->getDiagnosticTest($mid, $userid, $mode);
		$questions 		= $dt_set->getQid();
		$active			= $dt_set->getActive();
		$tl				= explode(":", $dt_set->getTimeLimit());
	}
	
	if($language == "ar_EG") $lang = "-ar";
	else if($language == "es_ES") $lang = " spanish";
	else if($language == "zh_CN") $lang = " chinese";
	else if($language == "en_US") $lang = "";
?>
<div id="container">
<a class="link" href="settings.php?module_id=<?php echo $mid; ?>">&laquo <?php echo _("Go Back"); ?></a>

<?php if ($mode == 1) { ?>
<h1><?php if($action == "edit") { echo _("Edit"); } else { echo _("Create"); } ?> <?php echo _("Pre-Diagnostic Test"); ?></h1>
<?php echo _("A pre-diagnostic test will be taken by the student before they start working on any of the reviews available to them. This test should be finished within a time limit. If the student exceeds the time limit, whatever he finishes will be recorded."); ?>
<?php } else { ?>
<h1><?php if($action == "edit") { echo _("Edit"); } else { echo _("Create"); } ?> <?php echo _("Post-Diagnostic Test"); ?></h1>
<?php echo _("A post-diagnostic test will be taken by the student after they finished all available reviews. This test should be finished within a time limit. If the student exceeds the time limit, whatever he finishes will be recorded."); ?>
<?php } ?>
<table border="0" class="result morepad">
	<tr>
		<td class="bold"><?php echo _("Ready?"); ?></td>
		<td><div class="onoffswitch">
			<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
			<label class="onoffswitch-label" for="myonoffswitch">
			<div class="onoffswitch-inner<?php echo $lang; ?>"></div>
			<div class="onoffswitch-switch<?php if($language == 'ar_EG') { echo $lang; } ?>"></div>
			</label>
			</div>
		</td>
	</tr>
	<tr>
		<td class="bold"><?php echo _("Time Limit"); ?></td>
		<td>
			<select id="hours">
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
			<?php echo _("Hour/s and"); ?> 
			<select id="minutes">
				<option>00</option>
				<option>05</option>
				<option>10</option>
				<option>15</option>
				<option>20</option>
				<option>25</option>
				<option>30</option>
				<option>35</option>
				<option>40</option>
				<option selected>45</option>
				<option>50</option>
				<option>55</option>
			</select>
			<?php echo _("Minutes"); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<span class="bold"><?php echo _("Choose Questions"); ?></span><br/>
			<?php echo _("This is the pool of questions you can choose from."); ?><br/>
			<span class="rvw"><?php echo "(*) - "._("questions with asterisk are from the review itself"); ?></span>
		</td>
	</tr>
	<br>
	<?php $ctr= 1;
		  foreach($question_set as $row) {
	?>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch<?php echo $ctr;?>" class="onoffswitch1-checkbox" id="myonoffswitch<?php echo $ctr;?>" value="<?php echo $row['qid']; ?>">
				<label class="onoffswitch1-label" for="myonoffswitch<?php echo $ctr;?>">
					<div class="onoffswitch1-inner<?php echo $lang; ?>"></div>
					<div class="onoffswitch1-switch<?php if($language == 'ar_EG') { echo $lang; } ?>"></div>
				</label>
			</div>
		</td>
		<td>
		<?php 
			if($row['from_review']) echo _("<span class='ask'>* </span>");
			echo _(utf8_urldecode($row['question']));
		?>
		<br/>
		<?php $choices = explode(":", $row['choices']); ?>
		<small><?php echo _("Choices"); ?>:<br/>
		<?php 
			for($i = 0; $i < count($choices); $i++) {
				echo "<span class='letters'>{$letters[$i]}</span>".". ". _(utf8_urldecode($choices[$i]))."<br>";
			}
		?>
		<br/><?php echo _("Answer"); ?>: <?php echo $row['answer']; ?>
		</small>
		</td>
	</tr>
	<?php $ctr++; } ?>
</table>
<input type="hidden" id="qid" 		value="<?php echo $questions; ?>" />
<input type="hidden" id="active" 	value="<?php echo $active; ?>" />
<div class="clear"></div>
<br/>
<a href="#" class="button1" id="save"><?php echo _("Save Changes"); ?></a>
</form>
</div>
<script>
var selected = [];
var	questions;
var	uid = "<?php echo $userid; ?>";
var	moduleid = "<?php echo $mid; ?>";
var	md = "<?php echo $mode; ?>";
var	action = "<?php echo $action; ?>";
var	active;
var	timelimit;

$(document).ready(function() {
	<?php if($action == "edit") { ?>
		var checks = $('#qid').attr('value').split(',');
		$('.onoffswitch1-checkbox').each(function() {
			for(var i = 0; i < checks.length; i++) {
				if($(this).attr('value') == checks[i]) {
					$(this).attr('checked','checked');
				}
			}
		});
		
		if($('#active').attr('value') == 1) $('#myonoffswitch').attr('checked','checked');
		
		$('#hours').val('<?php echo ltrim($tl[0], '0'); ?>');
		$('#minutes').val('<?php echo $tl[1]; ?>');
	<?php } ?>
	
	$('#save').click(function(e) {
		selected = [];
		$('.onoffswitch1-checkbox').each(function() {
			if($(this).is(':checked')) {
				selected.push($(this).attr('value'));
			}
		});
		
		questions	= selected.join(',');
		active		= ($('#myonoffswitch').is(':checked')) ? 1 : 0;
		timelimit	= "0" + $('#hours').val() + ":" + $('#minutes').val() + ":" + "00";
		
		if(questions == ""){
			alert('<?php echo _("Please select questions for this test."); ?>');
			e.preventDefault();
		} else {
			$.ajax({
				type	: "POST",
				url		: "update-test.php",
				data	: {	mid: moduleid, userid: uid, mode: md, qid: questions, isactive: active, tlimit: timelimit, act: action },
				success	: function() {
					window.location.href = "settings.php?module_id=<?php echo $mid; ?>";
				}
			});
		}
	});
});
</script>
<?php require_once "footer.php"; ?>