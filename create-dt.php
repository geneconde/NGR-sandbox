<?php require_once('session.php'); ?>	
<?php include_once('header.php');?>	
<a class="link" href="diagnostic-tests.php">&laquo Go Back</a>
<h1>Create Diagnostic Test</h1>
A diagnostic test will be taken by the student before or after they start working on any or all of the reviews available to them. This test should be finished within a time limit. If the student exceeds the time limit, whatever he finishes will be recorded.
<table border="0" class="result morepad">
	<tr>
		<td class="bold">Diagnost Test Title</td>
		<td><input type="text" name="title" /></td>
	</tr>
	<tr>
		<td class="bold">Test Type</td>
		<td><select name="type">
			<option value="pre">Pre-Test</option>
			<option value="post">Post-Test</option>
			</select>
		</td>
	</tr>
	<tr>
		<td class="bold">Ready?</td>
		<td><div class="onoffswitch">
			<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch">
			<label class="onoffswitch-label" for="myonoffswitch">
			<div class="onoffswitch-inner"></div>
			<div class="onoffswitch-switch"></div>
			</label>
			</div>
		</td>
	</tr>
	<tr>
		<td class="bold">Time Limit</td>
		<td><select>
				<option>0</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
			Hour/s and 
			<select>
				<option>00</option>
				<option>05</option>
				<option>10</option>
				<option>15</option>
				<option>20</option>
				<option>25</option>
				<option>30</option>
				<option>35</option>
				<option>40</option>
				<option>45</option>
				<option>50</option>
				<option>55</option>
			</select>
			Minutes
		</td>
	</tr>
	<tr>
		<td colspan="2"><span class="bold">Choose Questions</span><br/>This is the pool of questions you can choose from.</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch1">
				<label class="onoffswitch1-label" for="myonoffswitch1">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td>Which role does a decomposer play in a food chain?<br/>
		<small>Choices:<br/>
		A. to consume living plants<br/>
		B. to hunt herbivores<br/>
		C. to make its own food from the sun<br/>
		D. to feed on dead material<br/>
		<br/>Answer: D. to feed on dead material
		</small>
		</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch2">
				<label class="onoffswitch1-label" for="myonoffswitch2">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td>Which of the following is an example of a predator-prey relationship?<br/>
		<small>Choices:<br/>
		A. a bee getting a nectar from a flower<br/>
		B. a rabbit feeding on a carrot <br/>
		C. a lion hunting a zebra<br/>
		D. a mushroom feeding on a tree bark <br/>
		<br/>Answer: C. a lion hunting a zebra
		</small>
		</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch3">
				<label class="onoffswitch1-label" for="myonoffswitch3">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td> Animals that feed on plants and animals are known as... ?<br/>
		<small>Choices:<br/>
		A. herbivores<br/>
		B. dinosaurs<br/>
		C. carnivores<br/>
		D. omnivores<br/>
		<br/>Answer: D. omnivores
		</small>
		</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch4">
				<label class="onoffswitch1-label" for="myonoffswitch4">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td>Which is a producer?<br/>
		<small>Choices:<br/>
		A. corn<br/>
		B. mouse<br/>
		C. snake<br/>
		D. owl<br/>
		<br/>Answer: A. corn
		</small>
		</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch5">
				<label class="onoffswitch1-label" for="myonoffswitch5">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td>Where does the primary consumer get its energy?<br/>
		<small>Choices:<br/>
		A. grass<br/>
		B. grasshopper<br/>
		C. frog<br/>
		D. fish<br/>
		<br/>Answer: A. grass
		</small>
		</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch6">
				<label class="onoffswitch1-label" for="myonoffswitch6">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td>Which of the following is an example of a predator-prey relationship?<br/>
		<small>Choices:<br/>
		A. a bee getting a nectar from a flower<br/>
		B. a rabbit feeding on a carrot <br/>
		C. a lion hunting a zebra<br/>
		D. a mushroom feeding on a tree bark <br/>
		<br/>Answer: C. a lion hunting a zebra
		</small>
		</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch7">
				<label class="onoffswitch1-label" for="myonoffswitch7">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td>Which of the following is an example of a predator-prey relationship?<br/>
		<small>Choices:<br/>
		A. a bee getting a nectar from a flower<br/>
		B. a rabbit feeding on a carrot <br/>
		C. a lion hunting a zebra<br/>
		D. a mushroom feeding on a tree bark <br/>
		<br/>Answer: C. a lion hunting a zebra
		</small>
		</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch8">
				<label class="onoffswitch1-label" for="myonoffswitch8">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td>Which of the following is an example of a predator-prey relationship?<br/>
		<small>Choices:<br/>
		A. a bee getting a nectar from a flower<br/>
		B. a rabbit feeding on a carrot <br/>
		C. a lion hunting a zebra<br/>
		D. a mushroom feeding on a tree bark <br/>
		<br/>Answer: C. a lion hunting a zebra
		</small>
		</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch9">
				<label class="onoffswitch1-label" for="myonoffswitch9">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td>Which of the following is an example of a predator-prey relationship?<br/>
		<small>Choices:<br/>
		A. a bee getting a nectar from a flower<br/>
		B. a rabbit feeding on a carrot <br/>
		C. a lion hunting a zebra<br/>
		D. a mushroom feeding on a tree bark <br/>
		<br/>Answer: C. a lion hunting a zebra
		</small>
		</td>
	</tr>
	<tr class="trline">
		<td>
			<div class="onoffswitch1">
				<input type="checkbox" name="onoffswitch1" class="onoffswitch1-checkbox" id="myonoffswitch10">
				<label class="onoffswitch1-label" for="myonoffswitch10">
					<div class="onoffswitch1-inner"></div>
					<div class="onoffswitch1-switch"></div>
				</label>
			</div>
		</td>
		<td>Which of the following is an example of a predator-prey relationship?<br/>
		<small>Choices:<br/>
		A. a bee getting a nectar from a flower<br/>
		B. a rabbit feeding on a carrot <br/>
		C. a lion hunting a zebra<br/>
		D. a mushroom feeding on a tree bark <br/>
		<br/>Answer: C. a lion hunting a zebra
		</small>
		</td>
	</tr>
</table>
<div class="clear"></div>
<br/>
<a href="diagnostic-tests.php?m=food-chain" class="button1">Create and Save</a>