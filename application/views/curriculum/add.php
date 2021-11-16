<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Curriculum Add</h3>
            </div>
            <?php echo form_open('curriculum/add'); ?>
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
									$selected = ($course['coursesID'] == $this->input->post('courseID')) ? ' selected="selected"' : "";

									echo '<option value="'.$course['coursesID'].'" '.$selected.'>'.$course['courseName'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="curriculum" class="control-label"><span class="text-danger">*</span>Curriculum</label>
						<div class="form-group">
							<input type="text" name="curriculum" value="<?php echo $this->input->post('curriculum'); ?>" class="form-control" id="curriculum" />
							<span class="text-danger"><?php echo form_error('curriculum');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label">DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo $this->input->post('deleteStatus'); ?>" class="form-control" id="deleteStatus" />
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