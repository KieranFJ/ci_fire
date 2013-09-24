<div class="container">
	<h2>Inventory System Login</h2>

	<?php 

	$attrubutes = array('class' => '');

	echo form_open('login/validate_credentials');
	?>
	<div class="control-group">
		<label class="control-label" for="Username">Username</label>
		<div class="controls">
			<?php
			echo form_input(array(
				'name' => 'username',
				'class' => 'required',
				'placeholder' => 'Username')
			);
			?>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="Password">Password</label>
		<div class="controls">
			<?php
			echo form_password(array(
				'name' => 'password',
				'class' => 'required',
				'placeholder' => 'Password')
			);
			?>
		</div>
	</div>
	<div class="control-group">		
		<div class="controls">
			<?php
			echo form_button(array(
				'class' => 'btn btn-primary',
				'type' => 'submit',
				'content' => 'Login')
			);
			?>
		</div>
	</div>
	<?php
	echo form_close();	
	?>
</div>