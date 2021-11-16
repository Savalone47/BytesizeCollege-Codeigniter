<div class="page-content-wrapper">
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <h3>Course Edit</h3>
			<form action="<?php echo site_url('course/edit/'.$course['coursesID']); ?>" method="post" enctype="multipart/form-data">
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="courseName" class="control-label"><span class="text-danger">*</span>CourseName</label>
						<div class="form-group">
							<input type="text" name="courseName" value="<?php echo ($this->input->post('courseName') ? $this->input->post('courseName') : $course['courseName']); ?>" class="form-control" id="courseName" />
							<span class="text-danger"><?php echo form_error('courseName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseType" class="control-label"><span class="text-danger">*</span>CourseType</label>
						<div class="form-group">
							<input type="text" name="courseType" value="<?php echo ($this->input->post('courseType') ? $this->input->post('courseType') : $course['courseType']); ?>" class="form-control" id="courseType" />
							<span class="text-danger"><?php echo form_error('courseType');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseDepartment" class="control-label"><span class="text-danger">*</span>CourseDepartment</label>
						<div class="form-group">
							<input type="text" name="courseDepartment" value="<?php echo ($this->input->post('courseDepartment') ? $this->input->post('courseDepartment') : $course['courseDepartment']); ?>" class="form-control" id="courseDepartment" />
							<span class="text-danger"><?php echo form_error('courseDepartment');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="curriculum" class="control-label"><span class="text-danger">*</span>Curriculum</label>
						<div class="form-group">
							<input type="text" name="curriculum" value="<?php echo ($this->input->post('curriculum') ? $this->input->post('curriculum') : $course['curriculum']); ?>" class="form-control" id="curriculum" />
							<span class="text-danger"><?php echo form_error('curriculum');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseManager" class="control-label"><span class="text-danger">*</span>CourseManager</label>
						<div class="form-group">
							<input type="text" name="courseManager" value="<?php echo ($this->input->post('courseManager') ? $this->input->post('courseManager') : $course['courseManager']); ?>" class="form-control" id="courseManager" />
							<span class="text-danger"><?php echo form_error('courseManager');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseCode" class="control-label"><span class="text-danger">*</span>CourseCode</label>
						<div class="form-group">
							<input type="text" name="courseCode" value="<?php echo ($this->input->post('courseCode') ? $this->input->post('courseCode') : $course['courseCode']); ?>" class="form-control" id="courseCode" />
							<span class="text-danger"><?php echo form_error('courseCode');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseDuration" class="control-label"><span class="text-danger">*</span>CourseDuration</label>
						<div class="form-group">
							<input type="text" name="courseDuration" value="<?php echo ($this->input->post('courseDuration') ? $this->input->post('courseDuration') : $course['courseDuration']); ?>" class="form-control" id="courseDuration" />
							<span class="text-danger"><?php echo form_error('courseDuration');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseTimeline" class="control-label"><span class="text-danger">*</span>CourseTimeline</label>
						<div class="form-group">
							<input type="text" name="courseTimeline" value="<?php echo ($this->input->post('courseTimeline') ? $this->input->post('courseTimeline') : $course['courseTimeline']); ?>" class="form-control" id="courseTimeline" />
							<span class="text-danger"><?php echo form_error('courseTimeline');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseLevel" class="control-label"><span class="text-danger">*</span>CourseLevel</label>
						<div class="form-group">
							<input type="text" name="courseLevel" value="<?php echo ($this->input->post('courseLevel') ? $this->input->post('courseLevel') : $course['courseLevel']); ?>" class="form-control" id="courseLevel" />
							<span class="text-danger"><?php echo form_error('courseLevel');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseCredits" class="control-label"><span class="text-danger">*</span>CourseCredits</label>
						<div class="form-group">
							<input type="text" name="courseCredits" value="<?php echo ($this->input->post('courseCredits') ? $this->input->post('courseCredits') : $course['courseCredits']); ?>" class="form-control" id="courseCredits" />
							<span class="text-danger"><?php echo form_error('courseCredits');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="coursePrice" class="control-label"><span class="text-danger">*</span>CoursePrice</label>
						<div class="form-group">
							<input type="text" name="coursePrice" value="<?php echo ($this->input->post('coursePrice') ? $this->input->post('coursePrice') : $course['coursePrice']); ?>" class="form-control" id="coursePrice" />
							<span class="text-danger"><?php echo form_error('coursePrice');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseIntake" class="control-label"><span class="text-danger">*</span>CourseIntake</label>
						<div class="form-group">
							<input type="text" name="courseIntake" value="<?php echo ($this->input->post('courseIntake') ? $this->input->post('courseIntake') : $course['courseIntake']); ?>" class="form-control" id="courseIntake" />
							<span class="text-danger"><?php echo form_error('courseIntake');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseDelivery" class="control-label"><span class="text-danger">*</span>CourseDelivery</label>
						<div class="form-group">
							<input type="text" name="courseDelivery" value="<?php echo ($this->input->post('courseDelivery') ? $this->input->post('courseDelivery') : $course['courseDelivery']); ?>" class="form-control" id="courseDelivery" />
							<span class="text-danger"><?php echo form_error('courseDelivery');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseStartDate" class="control-label"><span class="text-danger">*</span>CourseStartDate</label>
						<div class="form-group">
							<input type="text" name="courseStartDate" value="<?php echo ($this->input->post('courseStartDate') ? $this->input->post('courseStartDate') : $course['courseStartDate']); ?>" class="form-control" id="courseStartDate" />
							<span class="text-danger"><?php echo form_error('courseStartDate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label"><span class="text-danger">*</span>Time Stamp</label>
						<div class="form-group">
							<input type="date" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $course['time_stamp']); ?>" class="form-control" id="time_stamp" />
							<span class="text-danger"><?php echo form_error('time_stamp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseOverview" class="control-label"><span class="text-danger">*</span>CourseOverview</label>
						<div class="form-group">
							<textarea name="courseOverview" class="form-control" id="courseOverview"><?php echo ($this->input->post('courseOverview') ? $this->input->post('courseOverview') : $course['courseOverview']); ?></textarea>
							<span class="text-danger"><?php echo form_error('courseOverview');?></span>
						</div>
					</div><div class="col-md-6">
						<label for="courseName" class="control-label"><span class="text-danger">*</span>picture course</label>
						<div class="form-group">
							<input type="file" name="picture" class="form-control" id="courseName" />
							<span class="text-danger"><?php echo form_error('picture');?></span>
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