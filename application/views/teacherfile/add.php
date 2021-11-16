<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Teacherfile Add</h3>
            </div>
            <?php echo form_open('teacherfile/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="assignmentID" class="control-label">AssignmentID</label>
						<div class="form-group">
							<input type="text" name="assignmentID" value="<?php echo $this->input->post('assignmentID'); ?>" class="form-control" id="assignmentID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lectureID" class="control-label">LectureID</label>
						<div class="form-group">
							<input type="text" name="lectureID" value="<?php echo $this->input->post('lectureID'); ?>" class="form-control" id="lectureID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="file" class="control-label">File</label>
						<div class="form-group">
							<input type="text" name="file" value="<?php echo $this->input->post('file'); ?>" class="form-control" id="file" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label">DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo $this->input->post('deleteStatus'); ?>" class="form-control" id="deleteStatus" />
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