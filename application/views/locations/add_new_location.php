<h2>Create a new location</h2>

<?php echo validation_errors(); ?>
<?php echo form_open('location/create') ?>
	<label for="location_id">Location ID</label>
	<input type="input" name="location_id" /><br/>
	
	<label for="street_address">Street Address</label>
	<input type="input" name="street_address" /><br/>
	
	
	<label for="postal_code">Postal Code</label>
	<input type="input" name="postal_code" /><br/>
	
	<label for="city">City</label>
	<input type="input" name="city" /><br/>
	
	<label for="state_province">State / Province</label>
	<input type="input" name="state_province" /><br/>
	
	<label for="country">Country</label>
	<input type="input" name="country" /><br/>
	
	<input type="submit" name="submit" value="Create New Location"/>
</form>