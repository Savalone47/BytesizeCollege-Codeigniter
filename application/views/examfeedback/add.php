<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Examfeedback Add</h3>
            </div>
            <?php echo form_open('examfeedback/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo $this->input->post('moduleID'); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="examID" class="control-label">ExamID</label>
						<div class="form-group">
							<input type="text" name="examID" value="<?php echo $this->input->post('examID'); ?>" class="form-control" id="examID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentID" class="control-label">StudentID</label>
						<div class="form-group">
							<input type="text" name="studentID" value="<?php echo $this->input->post('studentID'); ?>" class="form-control" id="studentID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseManager" class="control-label">CourseManager</label>
						<div class="form-group">
							<input type="text" name="courseManager" value="<?php echo $this->input->post('courseManager'); ?>" class="form-control" id="courseManager" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="feedback" class="control-label">Feedback</label>
						<div class="form-group">
							<input type="text" name="feedback" value="<?php echo $this->input->post('feedback'); ?>" class="form-control" id="feedback" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="feedback2" class="control-label">Feedback2</label>
						<div class="form-group">
							<input type="text" name="feedback2" value="<?php echo $this->input->post('feedback2'); ?>" class="form-control" id="feedback2" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="feedback3" class="control-label">Feedback3</label>
						<div class="form-group">
							<input type="text" name="feedback3" value="<?php echo $this->input->post('feedback3'); ?>" class="form-control" id="feedback3" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="grade" class="control-label">Grade</label>
						<div class="form-group">
							<input type="text" name="grade" value="<?php echo $this->input->post('grade'); ?>" class="form-control" id="grade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marks" class="control-label">Marks</label>
						<div class="form-group">
							<input type="text" name="marks" value="<?php echo $this->input->post('marks'); ?>" class="form-control" id="marks" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="paper" class="control-label">Paper</label>
						<div class="form-group">
							<input type="text" name="paper" value="<?php echo $this->input->post('paper'); ?>" class="form-control" id="paper" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="date" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
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