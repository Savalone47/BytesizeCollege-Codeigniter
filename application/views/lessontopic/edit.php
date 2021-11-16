<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lessontopic Edit</h3>
            </div>
			<?php echo form_open('lessontopic/edit/'.$lessontopic['topicID']); ?>
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
									$selected = ($module['id'] == $lessontopic['moduleID']) ? ' selected="selected"' : "";

									echo '<option value="'.$module['id'].'" '.$selected.'>'.$module['id'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="topicName" class="control-label"><span class="text-danger">*</span>TopicName</label>
						<div class="form-group">
							<input type="text" name="topicName" value="<?php echo ($this->input->post('topicName') ? $this->input->post('topicName') : $lessontopic['topicName']); ?>" class="form-control" id="topicName" />
							<span class="text-danger"><?php echo form_error('topicName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="topicAssignment" class="control-label"><span class="text-danger">*</span>TopicAssignment</label>
						<div class="form-group">
							<input type="text" name="topicAssignment" value="<?php echo ($this->input->post('topicAssignment') ? $this->input->post('topicAssignment') : $lessontopic['topicAssignment']); ?>" class="form-control" id="topicAssignment" />
							<span class="text-danger"><?php echo form_error('topicAssignment');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonTopicStatus" class="control-label"><span class="text-danger">*</span>LessonTopicStatus</label>
						<div class="form-group">
							<input type="text" name="lessonTopicStatus" value="<?php echo ($this->input->post('lessonTopicStatus') ? $this->input->post('lessonTopicStatus') : $lessontopic['lessonTopicStatus']); ?>" class="form-control" id="lessonTopicStatus" />
							<span class="text-danger"><?php echo form_error('lessonTopicStatus');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $lessontopic['time_stamp']); ?>" class="form-control" id="time_stamp" />
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