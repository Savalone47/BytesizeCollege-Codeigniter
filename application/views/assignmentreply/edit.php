<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Assignmentreply Edit</h3>
            </div>
			<?php echo form_open('assignmentreply/edit/'.$assignmentreply['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="moduleID" class="control-label">Module</label>
						<div class="form-group">
							<select name="moduleID" class="form-control">
								<option value="">select module</option>
								<?php 
								foreach($all_modules as $module)
								{
									$selected = ($module['id'] == $assignmentreply['moduleID']) ? ' selected="selected"' : "";

									echo '<option value="'.$module['id'].'" '.$selected.'>'.$module['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="assignmentID" class="control-label">Assignment</label>
						<div class="form-group">
							<select name="assignmentID" class="form-control">
								<option value="">select assignment</option>
								<?php 
								foreach($all_assignment as $assignment)
								{
									$selected = ($assignment['id'] == $assignmentreply['assignmentID']) ? ' selected="selected"' : "";

									echo '<option value="'.$assignment['id'].'" '.$selected.'>'.$assignment['assignment'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentID" class="control-label">Student</label>
						<div class="form-group">
							<select name="studentID" class="form-control">
								<option value="">select student</option>
								<?php 
								foreach($all_students as $student)
								{
									$selected = ($student['studentID'] == $assignmentreply['studentID']) ? ' selected="selected"' : "";

									echo '<option value="'.$student['studentID'].'" '.$selected.'>'.$student['studentName'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="assignmentRef" class="control-label">AssignmentRef</label>
						<div class="form-group">
							<input type="text" name="assignmentRef" value="<?php echo ($this->input->post('assignmentRef') ? $this->input->post('assignmentRef') : $assignmentreply['assignmentRef']); ?>" class="form-control" id="assignmentRef" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="reply" class="control-label">Reply</label>
						<div class="form-group">
							<input type="text" name="reply" value="<?php echo ($this->input->post('reply') ? $this->input->post('reply') : $assignmentreply['reply']); ?>" class="form-control" id="reply" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label">DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo ($this->input->post('deleteStatus') ? $this->input->post('deleteStatus') : $assignmentreply['deleteStatus']); ?>" class="form-control" id="deleteStatus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $assignmentreply['time_stamp']); ?>" class="form-control" id="time_stamp" />
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