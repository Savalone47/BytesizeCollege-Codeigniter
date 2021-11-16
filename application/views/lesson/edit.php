<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lesson Edit</h3>
            </div>
			<?php echo form_open('lesson/edit/'.$lesson['lessonID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="tutorID" class="control-label">User</label>
						<div class="form-group">
							<select name="tutorID" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['ID'] == $lesson['tutorID']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['ID'].'" '.$selected.'>'.$user['ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="subjectID" class="control-label">SubjectID</label>
						<div class="form-group">
							<input type="text" name="subjectID" value="<?php echo ($this->input->post('subjectID') ? $this->input->post('subjectID') : $lesson['subjectID']); ?>" class="form-control" id="subjectID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonName" class="control-label"><span class="text-danger">*</span>LessonName</label>
						<div class="form-group">
							<input type="text" name="lessonName" value="<?php echo ($this->input->post('lessonName') ? $this->input->post('lessonName') : $lesson['lessonName']); ?>" class="form-control" id="lessonName" />
							<span class="text-danger"><?php echo form_error('lessonName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="weekDay" class="control-label">WeekDay</label>
						<div class="form-group">
							<input type="text" name="weekDay" value="<?php echo ($this->input->post('weekDay') ? $this->input->post('weekDay') : $lesson['weekDay']); ?>" class="form-control" id="weekDay" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="roomID" class="control-label">RoomID</label>
						<div class="form-group">
							<input type="text" name="roomID" value="<?php echo ($this->input->post('roomID') ? $this->input->post('roomID') : $lesson['roomID']); ?>" class="form-control" id="roomID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="roomPin" class="control-label">RoomPin</label>
						<div class="form-group">
							<input type="text" name="roomPin" value="<?php echo ($this->input->post('roomPin') ? $this->input->post('roomPin') : $lesson['roomPin']); ?>" class="form-control" id="roomPin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adminPin" class="control-label">AdminPin</label>
						<div class="form-group">
							<input type="text" name="adminPin" value="<?php echo ($this->input->post('adminPin') ? $this->input->post('adminPin') : $lesson['adminPin']); ?>" class="form-control" id="adminPin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lecturerRoomID" class="control-label">LecturerRoomID</label>
						<div class="form-group">
							<input type="text" name="lecturerRoomID" value="<?php echo ($this->input->post('lecturerRoomID') ? $this->input->post('lecturerRoomID') : $lesson['lecturerRoomID']); ?>" class="form-control" id="lecturerRoomID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="grade" class="control-label">Grade</label>
						<div class="form-group">
							<input type="text" name="grade" value="<?php echo ($this->input->post('grade') ? $this->input->post('grade') : $lesson['grade']); ?>" class="form-control" id="grade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonTime" class="control-label">LessonTime</label>
						<div class="form-group">
							<input type="text" name="lessonTime" value="<?php echo ($this->input->post('lessonTime') ? $this->input->post('lessonTime') : $lesson['lessonTime']); ?>" class="form-control" id="lessonTime" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonDate" class="control-label">LessonDate</label>
						<div class="form-group">
							<input type="text" name="lessonDate" value="<?php echo ($this->input->post('lessonDate') ? $this->input->post('lessonDate') : $lesson['lessonDate']); ?>" class="form-control" id="lessonDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonStart" class="control-label">LessonStart</label>
						<div class="form-group">
							<input type="text" name="lessonStart" value="<?php echo ($this->input->post('lessonStart') ? $this->input->post('lessonStart') : $lesson['lessonStart']); ?>" class="form-control" id="lessonStart" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonEnd" class="control-label">LessonEnd</label>
						<div class="form-group">
							<input type="text" name="lessonEnd" value="<?php echo ($this->input->post('lessonEnd') ? $this->input->post('lessonEnd') : $lesson['lessonEnd']); ?>" class="form-control" id="lessonEnd" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ref" class="control-label">Ref</label>
						<div class="form-group">
							<input type="text" name="ref" value="<?php echo ($this->input->post('ref') ? $this->input->post('ref') : $lesson['ref']); ?>" class="form-control" id="ref" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateEventCreated" class="control-label">DateEventCreated</label>
						<div class="form-group">
							<input type="text" name="dateEventCreated" value="<?php echo ($this->input->post('dateEventCreated') ? $this->input->post('dateEventCreated') : $lesson['dateEventCreated']); ?>" class="form-control" id="dateEventCreated" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonDescription" class="control-label"><span class="text-danger">*</span>LessonDescription</label>
						<div class="form-group">
							<textarea name="lessonDescription" class="form-control" id="lessonDescription"><?php echo ($this->input->post('lessonDescription') ? $this->input->post('lessonDescription') : $lesson['lessonDescription']); ?></textarea>
							<span class="text-danger"><?php echo form_error('lessonDescription');?></span>
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