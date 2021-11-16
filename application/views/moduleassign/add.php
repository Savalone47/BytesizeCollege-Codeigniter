<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Moduleassign Add</h3>
            </div>
            <?php echo form_open('moduleassign/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo $this->input->post('moduleID'); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseID" class="control-label">CourseID</label>
						<div class="form-group">
							<input type="text" name="courseID" value="<?php echo $this->input->post('courseID'); ?>" class="form-control" id="courseID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentID" class="control-label">StudentID</label>
						<div class="form-group">
							<input type="text" name="studentID" value="<?php echo $this->input->post('studentID'); ?>" class="form-control" id="studentID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
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