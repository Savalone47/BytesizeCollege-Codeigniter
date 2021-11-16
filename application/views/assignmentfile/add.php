<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Assignmentfile Add</h3>
            </div>
            <?php echo form_open('assignmentfile/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="assignmentID" class="control-label"><span class="text-danger">*</span>Assignment</label>
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
							<span class="text-danger"><?php echo form_error('assignmentID');?></span>
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

									echo '<option value="'.$student['studentID'].'" '.$selected.'>'.$student['studentID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="file" class="control-label"><span class="text-danger">*</span>File</label>
						<div class="form-group">
							<input type="text" name="file" value="<?php echo $this->input->post('file'); ?>" class="form-control" id="file" />
							<span class="text-danger"><?php echo form_error('file');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label"><span class="text-danger">*</span>DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo $this->input->post('deleteStatus'); ?>" class="form-control" id="deleteStatus" />
							<span class="text-danger"><?php echo form_error('deleteStatus');?></span>
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