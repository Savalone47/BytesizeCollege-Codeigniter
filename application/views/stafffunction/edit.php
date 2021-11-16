<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Stafffunction Edit</h3>
            </div>
			<?php echo form_open('stafffunction/edit/'.$stafffunction['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="staffFunction" class="control-label">StaffFunction</label>
						<div class="form-group">
							<input type="text" name="staffFunction" value="<?php echo ($this->input->post('staffFunction') ? $this->input->post('staffFunction') : $stafffunction['staffFunction']); ?>" class="form-control" id="staffFunction" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $stafffunction['time_stamp']); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>