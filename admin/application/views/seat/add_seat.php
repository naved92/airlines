
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-sm-6 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"add_seat_form",
				"name"=>"add_seat_form");
				echo form_open("seat/add_seat",$attributes);
			?>
			<fieldset>
				<legend align="center">Add seat</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_air_model_name" class="control-label">Airplane Model Name</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_air_model_name" name="add_air_model_name"
							placeholder="Plane Model Name" type="text" value="<?php echo set_value('add_air_model_name');?>" />							
							<span class="text-danger"><?php echo form_error('add_air_model_name'); ?></span>
						</div>
					</div>
				</div>	

				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_seat_class_name" class="control-label">Seat Class</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_seat_class_name" name="add_seat_class_name"
							placeholder="Seat Class Name" type="text" value="<?php echo set_value('add_seat_class_name');?>" />							
							<span class="text-danger"><?php echo form_error('add_seat_class_name'); ?></span>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_seat_name" class="control-label">Seat Name</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_seat_name" name="add_seat_name"
							placeholder="Seat Name" type="text" value="<?php echo set_value('add_seat_name');?>" />							
							<span class="text-danger"><?php echo form_error('add_seat_name'); ?></span>
						</div>
					</div>
				</div>										
				
				
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_add_seat" name="btn_add_seat"
							type="submit" value="Add Seat" />
						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

