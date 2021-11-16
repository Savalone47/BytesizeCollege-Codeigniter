<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Assignment Edit</h3>
            </div>
			<?php echo form_open('assignment/edit/'.$assignment['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="assignment" class="control-label"><span class="text-danger">*</span>Assignment</label>
						<div class="form-group">
							<input type="text" name="assignment" value="<?php echo ($this->input->post('assignment') ? $this->input->post('assignment') : $assignment['assignment']); ?>" class="form-control" id="assignment" />
							<span class="text-danger"><?php echo form_error('assignment');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="assignmentNo" class="control-label">AssignmentNo</label>
						<div class="form-group">
							<input type="text" name="assignmentNo" value="<?php echo ($this->input->post('assignmentNo') ? $this->input->post('assignmentNo') : $assignment['assignmentNo']); ?>" class="form-control" id="assignmentNo" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marks" class="control-label">Marks</label>
						<div class="form-group">
							<input type="text" name="marks" value="<?php echo ($this->input->post('marks') ? $this->input->post('marks') : $assignment['marks']); ?>" class="form-control" id="marks" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="topicName" class="control-label">TopicName</label>
						<div class="form-group">
							<input type="text" name="topicName" value="<?php echo ($this->input->post('topicName') ? $this->input->post('topicName') : $assignment['topicName']); ?>" class="form-control" id="topicName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dueDate" class="control-label">DueDate</label>
						<div class="form-group">
							<input type="text" name="dueDate" value="<?php echo ($this->input->post('dueDate') ? $this->input->post('dueDate') : $assignment['dueDate']); ?>" class="form-control" id="dueDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo ($this->input->post('moduleID') ? $this->input->post('moduleID') : $assignment['moduleID']); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="facilitatorID" class="control-label">FacilitatorID</label>
						<div class="form-group">
							<input type="text" name="facilitatorID" value="<?php echo ($this->input->post('facilitatorID') ? $this->input->post('facilitatorID') : $assignment['facilitatorID']); ?>" class="form-control" id="facilitatorID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label">DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo ($this->input->post('deleteStatus') ? $this->input->post('deleteStatus') : $assignment['deleteStatus']); ?>" class="form-control" id="deleteStatus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $assignment['time_stamp']); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comment" class="control-label">Comment</label>
						<div class="form-group">
							<textarea name="comment" class="form-control" id="comment"><?php echo ($this->input->post('comment') ? $this->input->post('comment') : $assignment['comment']); ?></textarea>
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