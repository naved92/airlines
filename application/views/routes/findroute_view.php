
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-4 well">
			<?php
				echo form_open("find_route/index");
			?>
			<fieldset>
				<legend>Find Route</legend>
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="source" class="control-label">Source Location</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="source" name="source"
							placeholder="Source City" type="text" value="<?php echo set_value('source');?>" />
							
							<span class="text-danger"><?php echo form_error('source'); ?></span>
						</div>
					</div>
				</div>
				
				<div class="form-group">
					<div class="row colbox">
						<div class="col-lg-4 col-sm-4">
							<label for="destination" class="control-label">destination Location</label>
						</div>
						<div class="col-lg-8 col-sm-8">
							<input class="form-control" id="destination" name="destination"
							placeholder="destination City" type="text" value="<?php echo set_value('destination');?>" />
							
							<span class="text-danger"><?php echo form_error('destination'); ?></span>
						</div>
					</div>
				</div>
								
				<div class="form-group">
					<div class="col-lg-12 col-sm-12 text-center">					
						<input class="btn btn-deafult" id="btn_find_route" name="btn_find_route"
							type="submit" value="Find route" />
						
					</div>
				</div>
			</fieldset>
			<?php echo form_close();?>
			<?php echo $this->session->flashdata('msg');?>
		</div>
	</div>
</div>

