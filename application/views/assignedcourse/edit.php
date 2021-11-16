<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Assignedcourse Edit</h3>
            </div>
			<?php echo form_open('assignedcourse/edit/'.$assignedcourse['courseAssignedID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="courseID" class="control-label">Course</label>
						<div class="form-group">
							<select name="courseID" class="form-control">
								<option value="">select course</option>
								<?php 
								foreach($all_courses as $course)
								{
									$selected = ($course['coursesID'] == $assignedcourse['courseID']) ? ' selected="selected"' : "";

									echo '<option value="'.$course['coursesID'].'" '.$selected.'>'.$course['courseName'].'</option>';
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
									$selected = ($student['studentID'] == $assignedcourse['studentID']) ? ' selected="selected"' : "";

									echo '<option value="'.$student['studentID'].'" '.$selected.'>'.$student['studentID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="timestamp" class="control-label">Timestamp</label>
						<div class="form-group">
							<input type="text" name="timestamp" value="<?php echo ($this->input->post('timestamp') ? $this->input->post('timestamp') : $assignedcourse['timestamp']); ?>" class="form-control" id="timestamp" />
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