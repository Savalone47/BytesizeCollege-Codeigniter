<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Assignmentfeedback Add</h3>
            </div>
            <?php echo form_open('assignmentfeedback/add'); ?>
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
									$selected = ($module['id'] == $this->input->post('moduleID')) ? ' selected="selected"' : "";

									echo '<option value="'.$module['id'].'" '.$selected.'>'.$module['id'].'</option>';
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
									$selected = ($student['studentID'] == $this->input->post('studentID')) ? ' selected="selected"' : "";

									echo '<option value="'.$student['studentID'].'" '.$selected.'>'.$student['studentName'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="adminID" class="control-label">User</label>
						<div class="form-group">
							<select name="adminID" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['ID'] == $this->input->post('adminID')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['ID'].'" '.$selected.'>'.$user['username'].'</option>';
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
									$selected = ($assignment['id'] == $this->input->post('assignmentID')) ? ' selected="selected"' : "";

									echo '<option value="'.$assignment['id'].'" '.$selected.'>'.$assignment['assignment'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="total" class="control-label"><span class="text-danger">*</span>Total</label>
						<div class="form-group">
							<input type="text" name="total" value="<?php echo $this->input->post('total'); ?>" class="form-control" id="total" />
							<span class="text-danger"><?php echo form_error('total');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="grade" class="control-label">Grade</label>
						<div class="form-group">
							<input type="text" name="grade" value="<?php echo $this->input->post('grade'); ?>" class="form-control" id="grade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo $this->input->post('status'); ?>" class="form-control" id="status" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="comment" class="control-label">Comment</label>
						<div class="form-group">
							<input type="text" name="comment" value="<?php echo $this->input->post('comment'); ?>" class="form-control" id="comment" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="feedback" class="control-label">Feedback</label>
						<div class="form-group">
							<input type="text" name="feedback" value="<?php echo $this->input->post('feedback'); ?>" class="form-control" id="feedback" />
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