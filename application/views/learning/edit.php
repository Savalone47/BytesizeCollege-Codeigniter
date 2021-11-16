<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Learning Edit</h3>
            </div>
			<?php echo form_open('learning/edit/'.$learning['learningID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="learningTopic" class="control-label">LearningTopic</label>
						<div class="form-group">
							<input type="text" name="learningTopic" value="<?php echo ($this->input->post('learningTopic') ? $this->input->post('learningTopic') : $learning['learningTopic']); ?>" class="form-control" id="learningTopic" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo ($this->input->post('moduleID') ? $this->input->post('moduleID') : $learning['moduleID']); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo ($this->input->post('time_stamp') ? $this->input->post('time_stamp') : $learning['time_stamp']); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="deleteStatus" class="control-label">DeleteStatus</label>
						<div class="form-group">
							<input type="text" name="deleteStatus" value="<?php echo ($this->input->post('deleteStatus') ? $this->input->post('deleteStatus') : $learning['deleteStatus']); ?>" class="form-control" id="deleteStatus" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="learningName" class="control-label">LearningName</label>
						<div class="form-group">
							<textarea name="learningName" class="form-control" id="learningName"><?php echo ($this->input->post('learningName') ? $this->input->post('learningName') : $learning['learningName']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="comment" class="control-label">Comment</label>
						<div class="form-group">
							<textarea name="comment" class="form-control" id="comment"><?php echo ($this->input->post('comment') ? $this->input->post('comment') : $learning['comment']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="link" class="control-label">Link</label>
						<div class="form-group">
							<textarea name="link" class="form-control" id="link"><?php echo ($this->input->post('link') ? $this->input->post('link') : $learning['link']); ?></textarea>
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