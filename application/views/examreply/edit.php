<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Examreply Edit</h3>
            </div>
			<?php echo form_open('examreply/edit/'.$examreply['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="courseID" class="control-label">CourseID</label>
						<div class="form-group">
							<input type="text" name="courseID" value="<?php echo ($this->input->post('courseID') ? $this->input->post('courseID') : $examreply['courseID']); ?>" class="form-control" id="courseID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo ($this->input->post('moduleID') ? $this->input->post('moduleID') : $examreply['moduleID']); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="examID" class="control-label">ExamID</label>
						<div class="form-group">
							<input type="text" name="examID" value="<?php echo ($this->input->post('examID') ? $this->input->post('examID') : $examreply['examID']); ?>" class="form-control" id="examID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="exam" class="control-label">Exam</label>
						<div class="form-group">
							<input type="text" name="exam" value="<?php echo ($this->input->post('exam') ? $this->input->post('exam') : $examreply['exam']); ?>" class="form-control" id="exam" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="paper" class="control-label">Paper</label>
						<div class="form-group">
							<input type="text" name="paper" value="<?php echo ($this->input->post('paper') ? $this->input->post('paper') : $examreply['paper']); ?>" class="form-control" id="paper" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentID" class="control-label">StudentID</label>
						<div class="form-group">
							<input type="text" name="studentID" value="<?php echo ($this->input->post('studentID') ? $this->input->post('studentID') : $examreply['studentID']); ?>" class="form-control" id="studentID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label">DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo ($this->input->post('deleteStatus') ? $this->input->post('deleteStatus') : $examreply['deleteStatus']); ?>" class="form-control" id="deleteStatus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="date" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $examreply['time_stamp']); ?>" class="form-control" id="time_stamp" />
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