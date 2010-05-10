<?=$this->load->view(branded_view('install/header'));?>
<h1>Administrator Account</h1>
<p>Your MySQL database and configuration files have been setup.</p>
<p>We will now create the primary administrator account for your OpenGateway server.</p>
<form class="form" method="post" action="">
	<fieldset>
		<legend>System Information</legend>
		<ol>
			<li>
				<label for="username" class="full">Username</label>
			</li>
			<li>
				<input type="text" autocomplete="off" class="text required full mark_empty" rel="select a username" id="username" name="username" value="<?=$username;?>" />
			</li>
			<li>
				<label for="email" class="full">Email Address</label>
			</li>
			<li>
				<input type="text" autocomplete="off" class="text required full email mark_empty" rel="email@example.com" id="email" name="email" value="<?=$email;?>" />
			</li>
			<? if (!empty($error_password)) { ?>
			<li>
				<p class="error"><?=$error_password;?></p>
			</li>
			<? } ?>
			<li>
				<label for="password" class="full">Password</label>
			</li>
			<li>
				<input type="password" autocomplete="off" class="text required full" id="password" name="password" value="" />
			</li>	
			<li>
				<label for="password2" class="full">Repeat Password</label>
			</li>
			<li>
				<input type="password" autocomplete="off" class="text required full" id="password2" name="password2" value="" />
			</li>
			<li>
				<div class="help" style="margin-left:0px">Passwords must be at least 6 characters in length.</div>
			</li>
		</ol>
	</fieldset>
	<fieldset>
		<legend>Personal Information</legend>
		<ol>
			<li>
				<label for="first_name">Name</label>
				<input class="text required mark_empty" rel="First Name" type="text" id="first_name" name="first_name" value="<?=$first_name;?>" />&nbsp;&nbsp;<label style="display:none" for="last_name">Last Name</label><input class="text required mark_empty" rel="Last Name" type="text" id="last_name" name="last_name" value="<?=$last_name;?>" />
			</li>
			<li>
				<label for="company">Company</label>
				<input type="text" class="text required" id="company" name="company" value="<?=$company;?>" />
			</li>
			<li>
				<label for="address_1">Street Address</label>
				<input type="text" class="text" name="address_1" id="address_1" value="<?=$address_1;?>" />
			</li>
			<li>
				<label for="address_2">Address Line 2</label>
				<input type="text" class="text" name="address_2" id="address_2" value="<?=$address_2;?>" />
			</li>
			<li>
				<label for="city">City</label>
				<input type="text" class="text" name="city" id="city" value="<?=$city;?>" />
			</li>
			<li>
				<label for="Country">Country</label>
				<select id="country" name="country" class="required"><? foreach ($countries as $country2) { ?><option <? if ($country == $country2['iso2']) { ?> selected="selected" <? } ?> value="<?=$country2['iso2'];?>"><?=$country2['name'];?></option><? } ?></select>
			</li>
			<li>
				<label for="state">Region</label>
				<input type="text" class="text" name="state" id="state" value="<?=$state;?>" /><select id="state_select" name="state_select"><? foreach ($states as $state2) { ?><option <? if ($state == $state2['code']) { ?> selected="selected" <? } ?> value="<?=$state2['code'];?>"><?=$state2['name'];?></option><? } ?></select>
			</li>
			<li>
				<label for="postal_code">Postal Code</label>
				<input type="text" class="text" name="postal_code" id="postal_code" value="<?=$postal_code;?>" />
			</li>
			<li>
				<label for="timezone">Timezone</label>
				<?=timezone_menu($gmt_offset);?>
			</li>
		</ol>
	</fieldset>
	<div class="submit"><input type="submit" name="continue" id="continue" value="Create Account" /></div>
</form>
<?=$this->load->view(branded_view('install/footer'));?>