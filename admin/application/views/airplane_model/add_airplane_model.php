
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-sm-6 well">
			<?php
				$attributes = array("class"=>"form-horizontal",				
				"id"=>"add_airplane_model_form",
				"name"=>"add_airplane_model_form");
				echo form_open("airplane_model/add_airplane_model",$attributes);
			?>
			<fieldset>
				<legend align="center">Add Airplane Model</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="add_airplane_model_Name" class="control-label">Airplane Model Name</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="add_airplane_model_name" name="add_airplane_model_name"
							placeholder="Airplane Model Name" type="text" value="<?php echo set_value('add_airplane_model_name');?>" />							
							<span class="text-danger"><?php echo form_error('add_airplane_model_name'); ?></span>
						</div>
					</div>
				</div>									
								
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_add_airplane_model" name="btn_add_airplane_model"
							type="submit" value="Add Airplane Model" />
						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

