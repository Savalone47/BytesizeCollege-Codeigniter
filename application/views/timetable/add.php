<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Timetable Add</h3>
            </div>
            <?php echo form_open('timetable/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="courseID" class="control-label">CourseID</label>
						<div class="form-group">
							<input type="text" name="courseID" value="<?php echo $this->input->post('courseID'); ?>" class="form-control" id="courseID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="examRoom" class="control-label">ExamRoom</label>
						<div class="form-group">
							<input type="text" name="examRoom" value="<?php echo $this->input->post('examRoom'); ?>" class="form-control" id="examRoom" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="examTime" class="control-label">ExamTime</label>
						<div class="form-group">
							<input type="text" name="examTime" value="<?php echo $this->input->post('examTime'); ?>" class="form-control" id="examTime" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="paper" class="control-label">Paper</label>
						<div class="form-group">
							<input type="text" name="paper" value="<?php echo $this->input->post('paper'); ?>" class="form-control" id="paper" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="exam_date" class="control-label">Exam Date</label>
						<div class="form-group">
							<input type="text" name="exam_date" value="<?php echo $this->input->post('exam_date'); ?>" class="form-control" id="exam_date" />
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