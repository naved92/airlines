
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-sm-6 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"add_seat_class_form",
				"name"=>"add_seat_class_form");
				echo form_open("seat_class/add_seat_class",$attributes);
			?>
			<fieldset>
				<legend align="center">Add Seat Class</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_seat_class_name" class="control-label">Seat Class Name</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_seat_class_name" name="add_seat_class_name"
							placeholder="Seat Class Name" type="text" value="<?php echo set_value('add_seat_class_name');?>" />							
							<span class="text-danger"><?php echo form_error('add_seat_class_name'); ?></span>
						</div>
					</div>
				</div>									
								
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_add_seat_class" name="btn_add_seat_class"
							type="submit" value="Add Seat Class" />
						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

