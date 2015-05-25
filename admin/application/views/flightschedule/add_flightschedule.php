
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-4 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"registerform",
				"name"=>"registerform");
				echo form_open("flightschedule/add_flightschedule",$attributes);
			?>
			<fieldset>
				<legend>Add Flight Schedule</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_flight_code" class="control-label">Flight Code</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_flight_code" name="add_flight_code"
							placeholder="Flight Code" type="text" value="<?php echo set_value('add_flight_code');?>" />
							
							<span class="text-danger"><?php echo form_error('add_flight_code'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_flight_date" class="control-label">Flight Date</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_flight_date" name="add_flight_date"
							placeholder="Flight date" type="text" value="<?php echo set_value('add_flight_date');?>" />
							
							<span class="text-danger"><?php echo form_error('add_flight_date'); ?></span>
						</div>
					</div>
				</div>
				
								
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_add_flightschedule" name="btn_add_flightschedule"
							type="submit" value="Add Flight Schedule" />
						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

