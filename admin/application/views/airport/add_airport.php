
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-4 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"registerform",
				"name"=>"registerform");
				echo form_open("airport/add_airport",$attributes);
			?>
			<fieldset>
				<legend>Add Airport</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_airport_name" class="control-label">Airport Name</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_airport_name" name="add_airport_name"
							placeholder="Airport Name" type="text" value="<?php echo set_value('add_airport_name');?>" />
							
							<span class="text-danger"><?php echo form_error('add_airport_name'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_location_id" class="control-label">Location ID</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_location_id" name="add_location_id"
							placeholder="Location ID" type="text" value="<?php echo set_value('add_location_id');?>" />
							
							<span class="text-danger"><?php echo form_error('add_location_id'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_status" class="control-label">Status</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_status" name="add_status"
							placeholder="Status" type="text" value="<?php echo set_value('add_status');?>" />
							
							<span class="text-danger"><?php echo form_error('add_status'); ?></span>
						</div>
					</div>
				</div>
				
								
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_add_airport" name="btn_add_airport"
							type="submit" value="Add airport" />
						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

