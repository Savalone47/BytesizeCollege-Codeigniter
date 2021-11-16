<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Extralesson Edit</h3>
            </div>
			<?php echo form_open('extralesson/edit/'.$extralesson['lessonID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="subjectID" class="control-label">SubjectID</label>
						<div class="form-group">
							<input type="text" name="subjectID" value="<?php echo ($this->input->post('subjectID') ? $this->input->post('subjectID') : $extralesson['subjectID']); ?>" class="form-control" id="subjectID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tutorID" class="control-label">TutorID</label>
						<div class="form-group">
							<input type="text" name="tutorID" value="<?php echo ($this->input->post('tutorID') ? $this->input->post('tutorID') : $extralesson['tutorID']); ?>" class="form-control" id="tutorID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonName" class="control-label">LessonName</label>
						<div class="form-group">
							<input type="text" name="lessonName" value="<?php echo ($this->input->post('lessonName') ? $this->input->post('lessonName') : $extralesson['lessonName']); ?>" class="form-control" id="lessonName" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="weekDay" class="control-label">WeekDay</label>
						<div class="form-group">
							<input type="text" name="weekDay" value="<?php echo ($this->input->post('weekDay') ? $this->input->post('weekDay') : $extralesson['weekDay']); ?>" class="form-control" id="weekDay" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="roomID" class="control-label">RoomID</label>
						<div class="form-group">
							<input type="text" name="roomID" value="<?php echo ($this->input->post('roomID') ? $this->input->post('roomID') : $extralesson['roomID']); ?>" class="form-control" id="roomID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="roomPin" class="control-label">RoomPin</label>
						<div class="form-group">
							<input type="text" name="roomPin" value="<?php echo ($this->input->post('roomPin') ? $this->input->post('roomPin') : $extralesson['roomPin']); ?>" class="form-control" id="roomPin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adminPin" class="control-label">AdminPin</label>
						<div class="form-group">
							<input type="text" name="adminPin" value="<?php echo ($this->input->post('adminPin') ? $this->input->post('adminPin') : $extralesson['adminPin']); ?>" class="form-control" id="adminPin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="price" class="control-label">Price</label>
						<div class="form-group">
							<input type="text" name="price" value="<?php echo ($this->input->post('price') ? $this->input->post('price') : $extralesson['price']); ?>" class="form-control" id="price" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="grade" class="control-label">Grade</label>
						<div class="form-group">
							<input type="text" name="grade" value="<?php echo ($this->input->post('grade') ? $this->input->post('grade') : $extralesson['grade']); ?>" class="form-control" id="grade" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonTime" class="control-label">LessonTime</label>
						<div class="form-group">
							<input type="text" name="lessonTime" value="<?php echo ($this->input->post('lessonTime') ? $this->input->post('lessonTime') : $extralesson['lessonTime']); ?>" class="form-control" id="lessonTime" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonDate" class="control-label">LessonDate</label>
						<div class="form-group">
							<input type="text" name="lessonDate" value="<?php echo ($this->input->post('lessonDate') ? $this->input->post('lessonDate') : $extralesson['lessonDate']); ?>" class="form-control" id="lessonDate" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonStart" class="control-label">LessonStart</label>
						<div class="form-group">
							<input type="text" name="lessonStart" value="<?php echo ($this->input->post('lessonStart') ? $this->input->post('lessonStart') : $extralesson['lessonStart']); ?>" class="form-control" id="lessonStart" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonEnd" class="control-label">LessonEnd</label>
						<div class="form-group">
							<input type="text" name="lessonEnd" value="<?php echo ($this->input->post('lessonEnd') ? $this->input->post('lessonEnd') : $extralesson['lessonEnd']); ?>" class="form-control" id="lessonEnd" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ref" class="control-label">Ref</label>
						<div class="form-group">
							<input type="text" name="ref" value="<?php echo ($this->input->post('ref') ? $this->input->post('ref') : $extralesson['ref']); ?>" class="form-control" id="ref" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateEventCreated" class="control-label">DateEventCreated</label>
						<div class="form-group">
							<input type="text" name="dateEventCreated" value="<?php echo ($this->input->post('dateEventCreated') ? $this->input->post('dateEventCreated') : $extralesson['dateEventCreated']); ?>" class="form-control" id="dateEventCreated" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonDescription" class="control-label">LessonDescription</label>
						<div class="form-group">
							<textarea name="lessonDescription" class="form-control" id="lessonDescription"><?php echo ($this->input->post('lessonDescription') ? $this->input->post('lessonDescription') : $extralesson['lessonDescription']); ?></textarea>
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