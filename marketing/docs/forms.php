<? $page_title = "Forms" ?>
<?php include("includes/_documentation_head.php"); ?>
<style>
/*	input, select {display: inline !important;}*/
</style>	
	<div class="container">
		<div class="row">
			<div class="twelve columns">
				<div class="foundation-header">
					<h1><a href="index.php">Foundation Docs</a></h1>
					<h4 class="subheader">Rapid prototyping and building library from ZURB.</h4>
				</div>
			
				<dl class="nice tabs mobile hide-on-phones">
					<dd><a href="index.php">Getting Started</a></dd>
					<dd><a href="grid.php">Grid</a></dd>
					<dd><a href="buttons.php">Buttons</a></dd>
					<dd><a href="forms.php" class="active">Forms</a></dd>
					<dd><a href="layout.php">Layout</a></dd>
					<dd><a href="ui.php">UI</a></dd>
					<dd><a href="orbit.php">Orbit</a></dd>
					<dd><a href="reveal.php">Reveal</a></dd>
					<dd><a href="rails.php">Rails</a></dd>
					<dd><a href="qa.php">QA</a></dd>
				</dl>
			</div>
		</div>
		
		<div class="row">
			<div class="eight columns">
				<h3>Forms</h3>
				<h4 class="subheader">Forms are not a lot of fun. We've taken that lack of fun and dodged it with this ready-made code. In this release there are two sets of forms styles - basic and nice. Both are simple, both are flexible, both are easy to customize. <strong>Make sure to include app.js if you're going to use these forms.</strong></h4>
				<hr />
				
				<h4>Simple Forms</h4>
				<form>

					<p>Inputs support a number of different base classes. Any text input has a class of 'input-text' and supports several sizes:</p>
					<p><script type="text/javascript" src="http://snipt.net/embed/59fb7e2a620f661f436fdf387d18ff8e"></script></p>

					<label>Standard Input</label>
					<input type="text" class="input-text" />

					<label>Small Input</label>
					<input type="text" class="small input-text" />

					<label>Medium Input</label>
					<input type="text" class="medium input-text" />

					<label>Large Input</label>
					<input type="text" class="large input-text" />

					<label>Oversize Input</label>
					<input type="text" class="oversize input-text" />

					<p>Inline labels are accomplished using the HTML5 Placeholder attribute, with a built-in JS fallback.</p>
					<p><script type="text/javascript" src="http://snipt.net/embed/5a386d145be845626eec7c1543fdc62a"></script></p>
					<input type="text" class="input-text" placeholder="Inline label" />

					<p>Error states are built to be as flexible as they need to. Simple color classes can apply to labels and inputs, and a small element can be also be placed for the error message.</p>
					<p><script type="text/javascript" src="http://snipt.net/embed/beace3fd172387e1ed25c3872fe9c83a"></script></p>

					<label class="red">Medium Input</label>
					<input type="text" class="red medium input-text" />
					<small class="error">Whoa, cowboy. Try that again.</small>

					<label>Textarea</label>
					<textarea>This is a textarea</textarea>
					
					<label>Inline Label Textarea</label>
					<textarea placeholder="This is a text area"></textarea>
					
					<label for="checkbox1"><input type="checkbox" id="checkbox1"> Label for Checkbox</label>

					<label for="radio1"><input type="radio" id="radio1"> Label for Radio</label>

					<label>Dropdown Label</label>
					<select>
						<option>This is a dropdown</option>
						<option>This is another option</option>
						<option>Look, a third option</option>
					</select>

					<div class="row"><div class="seven columns">
						<fieldset>
							<h5>Fieldset Header H2</h5>
							<p>This is a paragraph within a fieldset.</p>

							<label>Standard Input</label> <input type="text" class="input-text" />
						</fieldset>
					</div></div>


				</form>

				<hr />

				<h4>Nice Forms</h4>
				<form class="nice">

					<p>Changing the form style to a slightly fancier version is dead simple - just add a class of 'nice' to the form itself.</p>
					<p><script type="text/javascript" src="http://snipt.net/embed/47160da7cd2018c3522784dd1f1310b1"></script></p>
					
					<label>Standard Input</label>
					<input type="text" class="input-text" />

					<input type="text" class="input-text" placeholder="Inline label" />

					<label>Small Input</label>
					<input type="text" class="small input-text" />

					<label class="red">Medium Input</label>
					<input type="text" class="medium input-text" />
					<small class="error">Whoa, cowboy. Try that again.</small>

					<label>Large Input</label>
					<input type="text" class="large input-text" />

					<label>Oversize Input</label>
					<input type="text" class="oversize input-text" />

					<label>Textarea</label>
					<textarea>This is a textarea</textarea>
					
					<label>Inline Label Textarea</label>
					<textarea placeholder="This is a text area"></textarea>

					<label for="checkbox1"><input type="checkbox" id="checkbox1"> Label for Checkbox</label>

					<label for="radio1"><input type="radio" id="radio1"> Label for Radio</label>

					<label>Dropdown Label</label>
					<select>
						<option>This is a dropdown</option>
						<option>This is another option</option>
						<option>Look, a third option</option>
					</select>

					<div class="row"><div class="seven columns">
						<fieldset>
							<h5>Fieldset Header H2</h5>
							<p>This is a paragraph within a fieldset.</p>

							<label>Standard Input</label> <input type="text" class="input-text" />
						</fieldset>
					</div></div>


				</form>


				<hr />

				<h3>Custom Forms</h3>	
				
				<form class="custom">
					<p>Creating easy to style custom form elements is so crazy easy, it's practically a crime. Just add a class of 'custom' to a form and, if you want, forms.jquery.js will do everything for you.</p>
					<p>The Foundation forms js will look for any checkbox, radio button, or select element and replace it with custom markup that is already styled with forms.css.</p>
					<p>If you want to avoid a potential flash (waiting for js to load and replace your default elements) you can supply the custom markup as part of the page, and the js will instead simply map the custom elements to the inputs.</p>
					<p>Foundation custom forms will even correctly respect and apply default states for radio, checkbox and select elements. You can use the 'checked' or 'selected' properties just like normal, and the js will apply that as soon as the page loads.</p>
					<p>
						<script type="text/javascript" src="http://snipt.net/embed/d1ce9f919728c0d52fc0ed0ef4600224"></script>
					</p>
					
					
						
					<h5>Radio Buttons</h5>
					<p>
						<script type="text/javascript" src="http://snipt.net/embed/8fcb1d67179ebc3e79b873419be04bf2"></script>
					</p>
					
					<h5>Checkboxes</h5>
					<p>
						<script type="text/javascript" src="http://snipt.net/embed/01d86277dee91bab34dd1baed52d2c18"></script>
					</p>
	
					<div class="row">
						<div class="four columns">
							<label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;"><span class="custom radio"></span> Radio Button 1</label>
							<label for="radio2"><input name="radio1" type="radio" id="radio2" style="display:none;"><span class="custom radio checked"></span> Radio Button 2</label>
							<label for="radio3"><input name="radio1" type="radio" id="radio3" style="display:none;"><span class="custom radio"></span> Radio Button 3</label>
						</div>
						<div class="four columns">
							<label for="radio4"><input name="radio2" type="radio" id="radio4"> Radio Button 1</label>
							<label for="radio5"><input name="radio2" CHECKED type="radio" id="radio5"> Radio Button 2</label>
							<label for="radio6"><input name="radio2" type="radio" id="radio6"> Radio Button 3</label>
						</div>
						<div class="four columns">
							<label for="checkbox1"><input type="checkbox" id="checkbox1" style="display: none;"><span class="custom checkbox"></span> Label for Checkbox</label>
							<label for="checkbox2"><input type="checkbox" id="checkbox2" checked style="display: none;"><span class="custom checkbox checked"></span> Label for Checkbox</label>
							<label for="checkbox3"><input type="checkbox" CHECKED id="checkbox3"> Label for Checkbox</label>
						</div>
					</div>
	
					<h5>Dropdown / Select Elements</h5>
					<p>
						<script type="text/javascript" src="http://snipt.net/embed/bb153a86cba41617b41d91268828bb42"></script>
					</p>
	
					<label>Dropdown Label</label>
					<select style="display:none;">
						<option SELECTED>This is a dropdown</option>
						<option>This is another option</option>
						<option>Look, a third option</option>
					</select>
					<div class="custom dropdown">
						<a href="#" class="current">
							This is a dropdown
						</a>
						<a href="#" class="selector"></a>
						<ul>
							<li>This is a dropdown</li>
							<li>This is another option</li>
							<li>Look, a third option</li>
						</ul>
					</div>
					
					<label>Dropdown Label</label>
					<select>
						<option>This is a dropdown</option>
						<option SELECTED>This is another option</option>
						<option>Look, a third option</option>
					</select>

				</form>
			</div>
			<div class="four columns">
				<? include("includes/_download.php"); ?>
			</div>
		</div>
		
		<div class="row">
			<div class="twelve columns">
				<dl class="nice tabs mobile show-on-phones">
					<dd><a href="index.php">Getting Started</a></dd>
					<dd><a href="grid.php">Grid</a></dd>
					<dd><a href="buttons.php">Buttons</a></dd>
					<dd><a href="forms.php" class="active">Forms</a></dd>
					<dd><a href="layout.php">Layout</a></dd>
					<dd><a href="ui.php">UI</a></dd>
					<dd><a href="orbit.php">Orbit</a></dd>
					<dd><a href="reveal.php">Reveal</a></dd>
					<dd><a href="qa.php">QA</a></dd>
				</dl>
			</div>
		</div>
		
		
<?php include("includes/_documentation_foot.php");  ?>
