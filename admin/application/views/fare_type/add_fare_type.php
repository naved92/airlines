
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-sm-6 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"add_fare_type_form",
				"name"=>"add_fare_type_form");
				echo form_open("fare_type/add_fare_type",$attributes);
			?>
			<fieldset>
				<legend align="center">Add Fare Type</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_fare_type" class="control-label">Fare Type</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_fare_type" name="add_fare_type"
							placeholder="Fare Type" type="text" value="<?php echo set_value('add_fare_type');?>" />							
							<span class="text-danger"><?php echo form_error('add_fare_type'); ?></span>
						</div>
					</div>
				</div>									

				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_fare_class" class="control-label">Fare Class</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_fare_type" name="add_fare_class"
							placeholder="Fare Class" type="text" value="<?php echo set_value('add_fare_class');?>" />							
							<span class="text-danger"><?php echo form_error('add_fare_class'); ?></span>
						</div>
					</div>
				</div>	
								
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_add_fare_type" name="btn_add_fare_type"
							type="submit" value="Add Fare Type" />						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

