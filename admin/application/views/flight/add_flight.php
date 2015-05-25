
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-4 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"registerform",
				"name"=>"registerform");
				echo form_open("flight/add_flight",$attributes);
			?>
			<fieldset>
				<legend>Add Flight</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_source_airport" class="control-label">Source Airport ID</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_source_airport" name="add_source_airport"
							placeholder="Source Airport ID" type="text" value="<?php echo set_value('add_source_airport');?>" />
							
							<span class="text-danger"><?php echo form_error('add_source_airport'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_destination_airport" class="control-label">Destination Airport ID</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_destination_airport" name="add_destination_airport"
							placeholder="Destination Airport ID" type="text" value="<?php echo set_value('add_destination_airport');?>" />
							
							<span class="text-danger"><?php echo form_error('add_destination_airport'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_depart_time" class="control-label">Departure Time</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_depart_time" name="add_depart_time"
							placeholder="Departure Time" type="text" value="<?php echo set_value('add_depart_time');?>" />
							
							<span class="text-danger"><?php echo form_error('add_depart_time'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_arrival_time" class="control-label">Arrival Time</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_arrival_time" name="add_arrival_time"
							placeholder="Arrival Time" type="text" value="<?php echo set_value('add_arrival_time');?>" />
							
							<span class="text-danger"><?php echo form_error('add_arrival_time'); ?></span>
						</div>
					</div>
				</div>
				
								
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_add_flight" name="btn_add_flight"
							type="submit" value="Add flight" />
						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

