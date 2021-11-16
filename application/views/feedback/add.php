<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Feedback Add</h3>
            </div>
            <?php echo form_open('feedback/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="facilitatorID" class="control-label">FacilitatorID</label>
						<div class="form-group">
							<input type="text" name="facilitatorID" value="<?php echo $this->input->post('facilitatorID'); ?>" class="form-control" id="facilitatorID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="moduleID" class="control-label">ModuleID</label>
						<div class="form-group">
							<input type="text" name="moduleID" value="<?php echo $this->input->post('moduleID'); ?>" class="form-control" id="moduleID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="marks" class="control-label">Marks</label>
						<div class="form-group">
							<input type="text" name="marks" value="<?php echo $this->input->post('marks'); ?>" class="form-control" id="marks" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="topicID" class="control-label">TopicID</label>
						<div class="form-group">
							<input type="text" name="topicID" value="<?php echo $this->input->post('topicID'); ?>" class="form-control" id="topicID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentID" class="control-label">StudentID</label>
						<div class="form-group">
							<input type="text" name="studentID" value="<?php echo $this->input->post('studentID'); ?>" class="form-control" id="studentID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="feedback" class="control-label">Feedback</label>
						<div class="form-group">
							<input type="text" name="feedback" value="<?php echo $this->input->post('feedback'); ?>" class="form-control" id="feedback" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="feedbackType" class="control-label">FeedbackType</label>
						<div class="form-group">
							<input type="text" name="feedbackType" value="<?php echo $this->input->post('feedbackType'); ?>" class="form-control" id="feedbackType" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="time_stamp" class="control-label">Time Stamp</label>
						<div class="form-group">
							<input type="text" name="time_stamp" value="<?php echo $this->input->post('time_stamp'); ?>" class="form-control" id="time_stamp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="feedback2" class="control-label">Feedback2</label>
						<div class="form-group">
							<textarea name="feedback2" class="form-control" id="feedback2"><?php echo $this->input->post('feedback2'); ?></textarea>
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