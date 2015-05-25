
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-4 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"registerform",
				"name"=>"registerform");
				echo form_open("location/add_location",$attributes);
			?>
			<fieldset>
				<legend>Add Location</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_address" class="control-label">Address</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_address" name="add_address"
							placeholder="Address" type="text" value="<?php echo set_value('add_address');?>" />
							
							<span class="text-danger"><?php echo form_error('add_address'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_city" class="control-label">City</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_city" name="add_city"
							placeholder="City" type="text" value="<?php echo set_value('add_city');?>" />
							
							<span class="text-danger"><?php echo form_error('add_city'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_country" class="control-label">Country</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_country" name="add_country"
							placeholder="Country" type="text" value="<?php echo set_value('add_country');?>" />
							
							<span class="text-danger"><?php echo form_error('add_country'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_latitude" class="control-label">Latitude</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_latitude" name="add_latitude"
							placeholder="Latitude" type="text" value="<?php echo set_value('add_latitude');?>" />
							
							<span class="text-danger"><?php echo form_error('add_latitude'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_longitude" class="control-label">Longitude</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_longitude" name="add_longitude"
							placeholder="Longitude" type="text" value="<?php echo set_value('add_longitude');?>" />
							
							<span class="text-danger"><?php echo form_error('add_longitude'); ?></span>
						</div>
					</div>
				</div>
				
								
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_add_location" name="btn_add_location"
							type="submit" value="Add location" />
						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

