<?php 
	require_once 'session.php';	
	require_once 'locale.php';	
	include_once 'header.php';
	include_once 'libraries/functions.php';
	
	$found  = $_GET['found'];
	$userid = $user->getUserid();
	
	$uf			= new UserFactory();
	$module_set	= $uf->getAllModules();
	
	$dtq 			= new DtQuestionFactory();
	$question_set 	= $dtq->getAllQuestions();
	$letters 		= range('a','z');
	
	if($found) {
		$dtf 			= new DiagnosticTestFactory();
		$dt_set 		= $dtf->getDiagnosticTest("cumulative", $userid, 3);
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
<a class="link" href="teacher.php">&laquo <?php echo _("Go Back"); ?></a>
<h1><?php echo _("Create Cumulative Test"); ?></h1>
<p><?php echo _("The Cumulative Test is a test that can be taken by students anytime. You can choose from a pool of questions with topics from the different science reviews available to your students."); ?></p>
<br/>
<table border="0" class="result morepad">
	<tr>
		<td class="bold"><?php echo _("Time Limit"); ?></td>
		<td><p><?php echo _("This test should be finished within a time limit. If the student exceeds the time limit, whatever he finishes will be recorded."); ?></p>
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
		<td class="bold"><?php echo _("Ready?"); ?></td>
		<td>
			<p><?php echo _("Turn on this feature to make it available to your students. When turned on, the \"Take Cumulative Test\" button will be available in the student's front page when they log in."); ?></p>
			<div class="onoffswitch">
			<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
			<label class="onoffswitch-label" for="myonoffswitch">
			<div class="onoffswitch-inner<?php echo $lang; ?>"></div>
			<div class="onoffswitch-switch<?php if($language == 'ar_EG') { echo $lang; } ?>"></div>
			</label>
			</div>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<span class="bold"><?php echo _("Choose Questions"); ?></span><br/>
			<?php echo _("This is the pool of questions you can choose from. It contains topics from different science reviews available to you."); ?><br/>
			<span class="rvw"><?php echo "(*) - "._("questions with asterisk are from the review itself"); ?></span>
		</td>
	</tr>
	<?php $ctr= 1;
		  foreach($question_set as $row) {
	?>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch<?php echo $ctr; ?>" class="onoffswitch1-checkbox" id="myonoffswitch<?php echo $ctr;?>" value="<?php echo $row['qid']; ?>">
				<label class="onoffswitch1-label" for="myonoffswitch<?php echo $ctr;?>">
					<div class="onoffswitch1-inner<?php echo $lang; ?>"></div>
					<div class="onoffswitch1-switch<?php if($language == 'ar_EG') { echo $lang; } ?>"></div>
				</label>
			</div>
		</td>
		<td>
		<?php
			foreach($module_set as $module) {
				if($row['module_id'] == $module['module_ID']) {
					echo "["._($module['module_name'])."] ";
				}
			}
		
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
		<br/><?php echo _("Answer"); ?>: <?php echo _(utf8_urldecode($row['answer'])); ?>
		</small>
		</td>
	</tr>
	<?php $ctr++; } ?>
</table>
<div class="clear"></div>
<br/>
<a href="#" class="button1" id="save">
	<?php if($found) { ?><?php echo _("Update"); ?>
	<?php } else { ?><?php echo _("Create"); ?>
	<?php } ?>
	<?php echo _("and Save"); ?></a>
</div>
<script>
var selected = [],
	questions,
	active,
	timelimit,
	uid = <?php echo $userid; ?>, 
	found = <?php echo $found; ?>;
	
$(document).ready(function() {
	<?php if($found) { ?>
		var checks = "<?php echo $questions; ?>".split(',');
		$('.onoffswitch1-checkbox').each(function() {
			for(var i = 0; i < checks.length; i++) {
				if($(this).attr('value') == checks[i]) {
					$(this).attr('checked','checked');
				}
			}
		});
		
		<?php if($active) ?> $('#myonoffswitch').attr('checked','checked');
		
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
			alert("Please select questions for this test.");
			e.preventDefault();
		} else {
			$.ajax({
				type	: "POST",
				url		: "add-ct.php",
				data	: {	userid: uid , qid: questions, isactive: active, tlimit: timelimit, fd: found },
				success	: function() {
					window.location.href = "teacher.php";
				}
			});
		}
	});
});
</script>
<?php require_once "footer.php"; ?>